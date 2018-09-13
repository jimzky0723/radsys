
@extends('layout.app')

@section('css')
    <link href='lib/fullcalendar/css/fullcalendar.min.css' rel='stylesheet' />
    <link href='lib/fullcalendar/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <style>
        .fc-content {
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">RadioSys</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Dashboard</h5>
        </div>
        <div class="row row-sm mg-t-20">
            <div class="col-sm-6 col-xl-3">
                <div class="card pd-20 pd-sm-25">
                    <div class="d-flex align-items-center justify-content-between mg-b-10">
                        <h6 class="card-body-title tx-12 tx-spacing-1">Sales Revenue</h6>
                        <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more"></i></a>
                    </div><!-- d-flex -->
                    <h2 class="tx-purple tx-lato tx-center mg-b-15">$34,330</h2>
                    <p class="mg-b-0 tx-12"><span class="tx-success">+ 3.4%</span> compared last month</p>
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="card bg-purple tx-white pd-25">
                    <div class="d-flex align-items-center justify-content-between mg-b-10">
                        <h6 class="card-body-title tx-12 tx-white-8 tx-spacing-1">Sales Revenue</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-more"></i></a>
                    </div><!-- d-flex -->
                    <h2 class="tx-lato tx-center mg-b-15">$34,330</h2>
                    <p class="mg-b-0 tx-12 op-8">+ 6.2% compared last month</p>
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 pd-sm-25">
                    <div class="d-flex align-items-center justify-content-between mg-b-10">
                        <h6 class="card-body-title tx-12 tx-spacing-1">Sales Revenue</h6>
                        <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more"></i></a>
                    </div><!-- d-flex -->
                    <h2 class="tx-teal tx-lato tx-center mg-b-15">$34,330</h2>
                    <p class="mg-b-0 tx-12"><span class="tx-danger">- 3.4%</span> compared last month</p>
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="card bg-teal tx-white pd-25">
                    <div class="d-flex align-items-center justify-content-between mg-b-10">
                        <h6 class="card-body-title tx-12 tx-white-8 tx-spacing-1">Sales Revenue</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-more"></i></a>
                    </div><!-- d-flex -->
                    <h2 class="tx-lato tx-center mg-b-15">$34,330</h2>
                    <p class="mg-b-0 tx-12 op-8">+ 6.2% compared last month</p>
                </div><!-- card -->
            </div><!-- col-3 -->
        </div>

        <div class="card pd-20 pd-sm-25 mg-t-20">
            <div id='calendar'></div>
        </div><!-- card -->

    </div><!-- sl-pagebody -->
@endsection

@section('script')
    <script src='lib/fullcalendar/js/moment.min.js'></script>
    <script src='lib/fullcalendar/js/fullcalendar.min.js'></script>
    <script src='lib/fullcalendar/js/theme-chooser.js'></script>
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                defaultDate: '{{ date('Y-m-d') }}',
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2018-09-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2018-09-07',
                        end: '2018-09-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2018-09-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2018-09-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2018-09-11',
                        end: '2018-09-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2018-09-12T10:30:00',
                        end: '2018-09-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2018-09-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2018-09-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2018-09-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2018-09-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2018-09-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2018-09-28'
                    }
                ]
            });

        });

    </script>
@endsection