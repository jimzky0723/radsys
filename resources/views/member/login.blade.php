<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RadioSys: Login Page</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <style>
        button.btn {
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <form action="{{ asset('login') }}" method="post">
            {{ csrf_field() }}
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">RadioSys <span class="tx-info tx-normal">Login</span></div>
            <div class="tx-center mg-b-60">Login to start session</div>
            @if(session('incorrect'))
            <div class="alert alert-danger" role="alert">
                <strong class="d-block d-sm-inline-block-force">Oh snap!</strong> Incorrect username or password. Please try again.
            </div>
            @endif

            @if(session('inactive'))
                <div class="alert alert-warning" role="alert">
                    <strong class="d-block d-sm-inline-block-force">Stop!</strong> Your account is inactive. Please contact <strong>Administrator</strong>.
                </div>
            @endif
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required autofocus autocomplete="off">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                <a href="{{ url('login/forgot/password') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ url('register') }}" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>

</body>

</html>
