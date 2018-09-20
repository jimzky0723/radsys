<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Radiology Information System.">
    <meta name="author" content="JiMzKy">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ (isset($title)) ? $title : 'Radiology Information System' }}</title>

    <!-- vendor css -->
    <link href="{{ url('/') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('/') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
    <style>
        button {
            cursor: pointer;
        }
        .line {
            border-bottom: 1px solid #ddd;
            padding: 5px;
            margin-bottom: 10px;
        }
        .loading {
            opacity:0.8;
            background:#fff url('{{ asset('spin.gif')}}') no-repeat center;
            position:fixed;
            width:100%;
            height:100%;
            top:0px;
            left:0px;
            z-index:999999999;
            display: none;
        }
    </style>
    @yield('css')
</head>

<body>
<div class="loading"></div>
@include('layout.menu')
@include('layout.head')



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    @yield('content')

    @include('layout.footer')
</div><!-- sl-mainpanel -->
@yield('modal')
<script src="{{ url('/') }}/lib/jquery/jquery.js"></script>
<script src="{{ url('/') }}/lib/popper.js/popper.js"></script>
<script src="{{ url('/') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ url('/') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

<script src="{{ url('/') }}/js/starlight.js"></script>
@yield('script')

<script>
    $('document').ready(function(){
        var filename = window.location.href;
        $('.sidebar-menu li a[href="'+filename+'"]').parent('li').addClass('active');

        $('.sl-sideleft-menu a[href="'+filename+'"]').addClass('active');
    });
</script>
</body>
</html>
