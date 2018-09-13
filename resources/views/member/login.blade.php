<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetrace.com/templates/starlight/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:14:55 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RadioSys: Login Page</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <form action="{{ asset('login') }}" method="post">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">RadioSys <span class="tx-info tx-normal">Login</span></div>
            <div class="tx-center mg-b-60">Login to start session</div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your username" required>
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your password" required>
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

<!-- Mirrored from themetrace.com/templates/starlight/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:14:55 GMT -->
</html>
