<?php include("include/style.php"); ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include("include/header.php"); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <?php include("include/left_sidebar.php"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Invoice</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
             
                <div class="row">
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                        <button alt="default" data-toggle="modal" data-target="#modal_client_insert" class="btn btn-block btn-outline-success waves-effect waves-light">Update Reservation</button>
                    </div>
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                        <button alt="default" data-toggle="modal" data-target="#modal_client_insert" class="btn btn-block btn-outline-success waves-effect waves-light">Update Payment</button>
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                    </div>                                        
                </div>
                    <hr>
                   <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>From,</h6>
                                    <h4 class="font-bold text-success">Urvanzone</h4>
                                    <p>J9 - 33 
                                        Evangelista Avenue 
                                        Corner F. Marcelo Street, 
                                        Santolan Pasig City 
                                        Philippines, Ph 11107
                                    </p>
                                    <p>Phone: (123) 123-5432</p>
                                    <p>Email: urvanzone@gmail.com</p>
                                </div>
                                <div class="col-md-4">
                                    <h6>To,</h6>
                                     <h4 class="font-bold">Federex Potolin</h4>
                                     <p>Client Address</p>
                                    <p>Client Contact</p>
                                    <p>Client Email</p>
                                </div>
                                <div class="col-md-4">
                                    <p><b>Res ID:</b>&nbsp; # </p>
                                </div>
                            </div>
                            <hr>
                                <h4 class="font-bold">Details</h4>
                                <div class="row">
                                <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table color-table success-table color-bordered-table success-bordered-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dropoff Date:</td>
                                                <td placeholder="No data"></td>
                                            </tr>
                                            <tr>
                                                <td>Dropoff Time:</td>
                                                <td placeholder="No data"></td>
                                            </tr>
                                            <tr>
                                                <td>Pickup Date:</td>
                                                <td placeholder="No data"></td>
                                            </tr>
                                            <tr>
                                                <td>Pickup Time:</td>
                                                <td placeholder="No data"></td>
                                            </tr>
                                            <tr>
                                                <td>Dropoff Location:</td>
                                                <td placeholder="No data"></td>
                                            </tr>
                                            <tr>
                                                <td>Vehicle:</td>
                                                <td><<!-- ?php echo $row['category_name']." ".$row['brand_name']; ? -->></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table color-table success-table color-bordered-table success-bordered-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Full Tank:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Driver:</td>
                                                <td><<!-- ?php echo $row['driver_firstname']." ".$row['driver_lastname']; ? -->></td>
                                            </tr>
                                            <tr>
                                                <td>Seating Caps:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Luggage:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Reservation Status:</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <h5><b>Total Payment :</b>&nbsp; </h5>
                                        <h5><b>Total Paid :</b>&nbsp; </h5>
                                        <h3><b>Balance Payment :</b>&nbsp; </h3>
                                        <p></p>
                                        <!-- <p>Sub - Total amount: $13,848</p>
                                        <p>vat (10%) : $138 </p>
                                        <hr>
                                        <h3><b>Total :</b> $13,986</h3> -->
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button id="print" class="btn btn-outline-success waves-effect waves-light" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include("include/footer.php"); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
 <?php
    include("include/script.php");
    include("include/print.php");
 ?>
