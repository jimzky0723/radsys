<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Radiology Information System.">
    <meta name="author" content="JiMzKy">

    <title>{{ (isset($title)) ? $title : 'Radiology Information System' }}</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    @yield('css')
</head>

<body>

@include('layout.menu')
@include('layout.head')



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    @yield('content')

    @include('layout.footer')
</div><!-- sl-mainpanel -->
@yield('modal')
<script src="lib/jquery/jquery.js"></script>
<script src="lib/popper.js/popper.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>

<script src="js/starlight.js"></script>
@yield('script')
</body>
</html>
