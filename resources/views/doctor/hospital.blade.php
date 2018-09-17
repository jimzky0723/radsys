
@extends('layout.app')

@section('content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">RadioSys</a>
        <span class="breadcrumb-item active">Hospital</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Hospital List</h5>
        </div>
        <div class="card pd-20 pd-sm-40 mg-t-50">
            <div class="row">
                <div class="col-sm-12">
                    <a href="" class="pull-right btn btn-info" data-toggle="modal" data-target="#hospitalForm">
                        <i class="fa fa-plus"></i>
                        Add Hospital
                    </a>
                </div>
            </div>
            @if(count($data) > 0)
            <div class="table-responsive mg-t-10">
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Expiration</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>

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
    <div id="hospitalForm" class="modal fade">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Hospital</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" data-parsley-validate>
                <div class="modal-body pd-20">
                    {{ csrf_field() }}
                    <div class="form-group mg-b-10">
                        <label>Name of Hospital: <span class="tx-danger">*</span></label>
                        <input type="text" name="hospitalName" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Address: <span class="tx-danger">*</span></label>
                        <textarea name="address" class="form-control wd-200 wd-sm-250" placeholder="Enter complete address" required="" rows="4" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Contact Person: <span class="tx-danger">*</span></label>
                        <input type="text" name="contactPerson" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group mg-b-10">
                        <label>Contact #: <span class="tx-danger">*</span></label>
                        <input type="text" name="hospitalName" class="form-control wd-200 wd-sm-250" placeholder="Enter Name" required="">
                    </div>
                    <div class="line"></div>
                    <div class="form-group mg-b-10">
                        <label>Username: <span class="tx-danger">*</span></label>
                        <input type="text" name="username" class="form-control wd-200 wd-sm-250" placeholder="Enter Username" required="">
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
@endsection