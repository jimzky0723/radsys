
@extends('layout.app')

@section('content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">RadioSys</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-25 mg-t-20">
            <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
            <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
            <canvas id="chartBar4" height="300"></canvas>
        </div><!-- card -->
    </div><!-- sl-pagebody -->
@endsection

@section('modal')

@endsection

@section('script')

@endsection