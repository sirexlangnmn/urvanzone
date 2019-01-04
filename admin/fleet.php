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
               <h3 class="text-themecolor">Fleet</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Fleet</li>
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
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                        <thead style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th class="text-nowrap">Action</th>
                              <th>#</th>
                              <th>Vehicle Title</th>
                              <th>Brand</th>
                              <th>Price per Day</th>
                              <th>Fuel Type</th>
                              <th>Model Year</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              $get_vehicles = "SELECT * FROM tblvehicles LEFT JOIN tblbrands ON tblbrands.brand_id = tblvehicles.brand_id";
                              
                              $run_vehicles = mysqli_query($con, $get_vehicles) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_vehicles)) :
                                  /*$id=$row['id'];*/
                              ?>
                           <tr>
                              <td class="text-nowrap">   
                                 <a alt="default" href="fleet_update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Vehicle Details"></i></a>

                                 
                                 <a href="#" ><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete Client Detail"></i></a>
                              </td>
                              <td><?php echo htmlentities($row['id']); ?></td>
                              <td><?php echo htmlentities($row['VehiclesTitle']); ?></td>
                              <td><?php echo htmlentities($row['BrandName']); ?></td>
                              <td><?php echo htmlentities($row['PricePerDay']); ?></td>
                              <td><?php echo htmlentities($row['FuelType']); ?></td>
                              <td><?php echo htmlentities($row['ModelYear']); ?></td>
                           </tr>
                           <?php endwhile; ?>
                        </tbody>
                        <tfoot style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th class="text-nowrap">Action</th>
                              <th>#</th>
                              <th>Vehicle Title</th>
                              <th>Brand</th>
                              <th>Price per Day</th>
                              <th>Fuel Type</th>
                              <th>Model Year</th>
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