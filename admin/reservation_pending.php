<?php
    include("include/style.php"); 

    error_reporting(0);
    if(isset($_GET['eid'])) {  
        $eid    = htmlentities($_GET['eid']);  
        $status = "3";

        mysqli_query($con, "UPDATE tblbooking SET Status = '$status' WHERE id = '$eid'")or die(mysqli_error());

        $msg0 = "Cancelled Reservation";
    }        
    
    if(isset($_GET['aeid'])) {
        $aeid    = htmlentities($_GET['aeid']);
        $status  = "2";

        mysqli_query($con, "UPDATE tblbooking SET Status = '$status' WHERE id = $aeid")or die(mysqli_error());
    
        $msg1 = "Confirmed Reservation";       
    }
?>


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
                    <h3 class="text-themecolor">Pending Reservation</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Pending Reservation</li>
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
            <?php if($error) : ?>
                <div class="alert alert-danger"><?php echo htmlentities($error); ?></div>
            <?php elseif($msg0) : ?>
                <div class="alert alert-danger"><?php echo htmlentities($msg0); ?></div>
            <?php elseif($msg1) : ?>
                <div class="alert alert-success"><?php echo htmlentities($msg1); ?></div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                            <thead style="background-color: #1E88E5; color: white;">
                                <tr>
                                    <th class="text-nowrap">Action</th>
                                    <th>Res ID</th>
                                    <th>Status</th>
                                    <th>Fullname</th>
                                    <th>Vehicle</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Posting Date</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $get_reservation =  "SELECT tblusers.FullName,
                                                            tblbrands.BrandName,
                                                            tblvehicles.VehiclesTitle,
                                                            tblbooking.FromDate,
                                                            tblbooking.ToDate,
                                                            tblbooking.message,
                                                            tblbooking.VehicleId,
                                                            tblbooking.Status,
                                                            tblbooking.PostingDate,
                                                            tblbooking.id
                                                       FROM tblbooking
                                                       JOIN tblvehicles 
                                                         ON tblvehicles.id = tblbooking.VehicleId
                                                       JOIN tblusers
                                                         ON tblusers.EmailId = tblbooking.userEmail
                                                       JOIN tblbrands 
                                                         ON tblvehicles.brand_id = tblbrands.brand_id
                                                      WHERE tblbooking.Status = 1
                                                      ORDER BY tblbooking.id DESC"; 

                                $run_reservation = mysqli_query($con, $get_reservation) or die (mysqli_error());
                                while($row=mysqli_fetch_array($run_reservation)) :
                                    
                            ?>
                                <tr>
                                    <td class="text-nowrap">
                                        <a href="reservation_invoice.php<?php echo '?id='.$id; ?>"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="View Reservation Detail"></i>
                                        </a>

                                        <a href="reservation.php?aeid=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Confirm this booking')"><i class="fa fa-check m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Confirm Reservation"></i>
                                        </a>

                                        <a href="reservation.php?eid=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Cancel this Booking')"><i class="fa fa-arrows-alt m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Cancel Reservation"></i>
                                        </a>
                                    </td>
                                    <td><?php echo $row['id']; ?></td>
                                    <?php if($row['Status'] == 1) : ?>
                                    <td><span class="text-info">Pending</span></td>  
                                    <?php elseif($row['Status'] == 2) : ?>
                                    <td><span class="text-success">Confirmed</span></td> 
                                    <?php elseif($row['Status'] == 3) : ?>
                                    <td><span class="text-danger">Cancelled</span></td>     
                                    <?php endif; ?>
                                    <td><?php echo htmlentities($row['FullName']); ?></td>
                                    <td><a href="fleet_update.php?id=<?php echo $row['VehicleId']; ?>">
                                        <?php echo htmlentities($row['BrandName'] ." | ". $row['VehiclesTitle']); ?></a></td>
                                    <td><?php echo htmlentities($row['FromDate']); ?></td>
                                    <td><?php echo htmlentities($row['ToDate']); ?></td>
                                    <td><?php echo htmlentities($row['PostingDate']); ?></td>
                                    <td><?php echo htmlentities($row['message']); ?></td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                            <tfoot style="background-color: #1E88E5; color: white;">
                                <tr>
                                    <th class="text-nowrap">Action</th>
                                    <th>Res ID</th>
                                    <th>Status</th>
                                    <th>Fullname</th>
                                    <th>Vehicle</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Posting Date</th>
                                    <th>Notes</th>
                                </tr>
                            </tfoot>
                        </table>
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
    include("include/datatables.php");
    include("include/validation.php");
?>