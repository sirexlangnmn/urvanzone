<?php 
    session_start(); 

    include("include/connection.php");

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/urvanzone_logo_small.png">
    <title>Urvanzone</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS | Widget data | index4-->
    <link href="../assets2/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets2/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets2/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets2/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../assets2/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets2/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../assets2/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>



<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(images/car_bg.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <!-- ============================================================== -->
                <!-- Login Form                                                     -->
                <!-- ============================================================== -->
                <form class="m-t-40" novalidate id="loginform" method="POST" action="queries/login.php">
                    <a href="javascript:void(0)" class="text-center db"><img src="images/logo/urvanzone_logo_small.png" style="width: 150px; height: 150px;" alt="Home" />
                    </a>

                     <div class="form-group">
                        <p class="text-success">Username </p>
                        <div class="controls">
                            <input type="text" name="username" placeholder="Username" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-success">Password </p>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 m-t-20">
                            <button type="submit" name="login" class="btn btn-outline-success waves-effect waves-light btn-block btn-info"> Sign in </button>
                        </div>
                        <div class="col-md-12 col-xs-12 m-t-20">
                            <a href="javascript:void(0)" id="to-recover" class="text-info text-center">
                            <i class="fa fa-lock m-r-5"></i> Forgot Password?</a>
                        </div> 
                    </div> 
                </form>
                <!-- ============================================================== -->
                <!-- End Login Form                                                 -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Recover Password Form                                          -->
                <!-- ============================================================== -->
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- ============================================================== -->
                <!-- End Recover Password Form                                      -->
                <!-- ============================================================== -->
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<?php 
    include("include/script.php");
    include("include/validation.php"); 
?>