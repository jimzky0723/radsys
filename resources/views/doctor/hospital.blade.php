
@extends('layout.app')

@section('content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">RadioSys</a>
        <span class="breadcrumb-item active">Hospital</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Hospital List</h6>
            <hr />
            <div class="table-responsive">
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
        </div><!-- card -->
    </div><!-- sl-pagebody -->
@endsection