<?php
    $info = array(
        'hospitalName' => '',
        'address' => '',
        'contactPerson' => '',
        'contactNumber' => '',
        'username' => ''
    );
    if(session('duplicate')){
        $info = session('duplicate');
    }
    $info = (object)$info;
?>
@extends('layout.app')

@section('css')
    <style>
        .table td {
            vertical-align: middle;
        }
        .link:hover {
            cursor: pointer;
            text-decoration: underline;
            font-weight:bold;
        }
    </style>
@endsection

@section('content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">RadioSys</a>
        <span class="breadcrumb-item active">Hospital</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 mg-t-10">
            @if(session('added'))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success mg-t-20" role="alert">
                        <strong class="d-block d-sm-inline-block-force">Success!</strong> Hospital successfully added.
                    </div>
                </div>

            </div>
            @endif

            @if(session('duplicate'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger mg-t-20" role="alert">
                            <strong class="d-block d-sm-inline-block-force">Opps!</strong> Username {{ $info->username }} is already taken. Please choose another username.
                        </div>
                    </div>

                </div>
            @endif
            <h3>
                Hospital List
                <a href="" class="pull-right btn btn-info addHospital" data-toggle="modal" data-target="#hospitalFormModal">
                    <i class="fa fa-plus"></i>
                    Add Hospital
                </a>
            </h3>

            @if(count($data) > 0)
            <div class="table-responsive mg-t-10">
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        <th>Hospital Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Expiration</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>
                            <span class="link updateHospital" data-id="{{ $row->id }}">
                            {{ $row->name }}
                            </span>
                        </td>
                        <td>{!! $row->address !!}</td>
                        <td>
                            {{ $row->contactPerson }}<br />
                            <small class="tx-danger">{{ $row->contactNumber }}</small>
                        </td>
                        <td><span class="{{ ($row->dateExpire <= date('Y-m-d')) ? 'tx-danger':'tx-success' }}">{{ date('M d, Y',strtotime($row->dateExpire)) }}</span></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-responsive -->
            @else
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning mg-t-20" role="alert">
                        <strong class="d-block d-sm-inline-block-force">Warning!</strong> No hospital under your account! Please <a href="#hospitalForm" data-toggle="modal">add</a> a Hospital.
                    </div>
                </div>

            </div>
            @endif
        </div><!-- card -->
    </div><!-- sl-pagebody -->
@endsection

@section('modal')
    <div id="hospitalFormModal" class="modal fade">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Hospital</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('doctor/hospital') }}" method="post" id="hospitalForm" data-parsley-validate>
                <div class="modal-body pd-20">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="post" id="method" />
                    <input type="hidden" name="id" value=""/>
                    <div class="form-group mg-b-10">
                        <label>Hospital Name: <span class="tx-danger">*</span></label>
                        <input value="{{ $info->hospitalName }}" type="text" name="hospitalName" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Address: <span class="tx-danger">*</span></label>
                        <textarea name="address" class="form-control wd-200 wd-sm-250" placeholder="Enter complete address" required="" rows="4" style="resize: none;">{!! $info->address !!}</textarea>
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Contact Person: <span class="tx-danger">*</span></label>
                        <input value="{{ $info->contactPerson }}" type="text" name="contactPerson" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Contact #: <span class="tx-danger">*</span></label>
                        <input value="{{ $info->contactNumber }}" type="text" name="contactNumber" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="line"></div>
                    <div class="form-group mg-b-10">
                        <label>Username: <span class="tx-danger">*</span></label>
                        <input value="{{ $info->username }}" type="text" name="username" class="form-control wd-200 wd-sm-250" placeholder="Enter Username" required="">
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Password: <span class="tx-danger">*</span></label>
                        <input type="password" name="password" class="form-control wd-200 wd-sm-250" placeholder="Enter Password" required="">
                    </div>
                </div>
                <div class="modal-footer text-md-right">
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection

@section('script')
    <script src="{{ url('/') }}/lib/parsleyjs/parsley.js"></script>
    <script>
        $('document').ready(function(){
            $('.addHospital').on('click',function(){
                changeButtonName('Save');
                changeMethod('POST');
                $('#hospitalForm').attr('action','{{ url('doctor/hospital/') }}').parsley().reset();
                $('.loading').show();
                setTimeout(function(){
                    $('.loading').hide();
                    $('input[name="hospitalName"]').val('').attr('placeholder','Enter hospital name');
                    $('textarea[name="address"]').val('').attr('placeholder','Complete Address');
                    $('input[name="contactPerson"]').val('').attr('placeholder','Enter contact person');
                    $('input[name="contactNumber"]').val('').attr('placeholder','Enter contact number');
                    $('input[name="username"]').val('').attr('placeholder','Enter username');
                    $('input[name="password"]').val('').attr('placeholder','Enter password').attr('required',true);
                },1000);
            });

            $('.updateHospital').on('click',function(){
                changeButtonName('Update');
                changeMethod('PUT');
                $('.loading').show();
                var id = $(this).data('id');
                $('#hospitalForm').attr('action','{{ url('doctor/hospital/') }}/'+id).parsley().reset();
                $.get('{{ url('doctor/hospital/') }}/'+id , function(data){
                    $('.loading').hide();
                    $('#hospitalFormModal').modal();
                    $('input[name="hospitalName"]').val(data.name);
                    $('textarea[name="address"]').val(data.address);
                    $('input[name="contactPerson"]').val(data.contactPerson);
                    $('input[name="contactNumber"]').val(data.contactNumber);
                    $('input[name="username"]').val(data.username);
                    $('input[name="password"]').attr('placeholder','unchanged').attr('required',false);
                });
            });

            function changeButtonName(str)
            {
                $('button[type="submit"]').html(str);
            }

            function changeMethod(method)
            {
                $('input[name="_method"]').val(method);
            }
        });

    </script>
@endsection