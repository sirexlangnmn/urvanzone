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
               <h3 class="text-themecolor">Subscribers</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Subscribers</li>
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
                              <th>#</th>
                              <th>Subscriber Email</th>
                              <th>Posting Date</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $get_users = "SELECT * FROM tblsubscribers ORDER BY id DESC";
                              
                              $run_users = mysqli_query($con, $get_users) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_users)) :
                                  /*$id=$row['brand_id'];*/
                            ?>
                           <tr>
                              <td><?php echo htmlentities($row['id']); ?></td>
                              <td><?php echo htmlentities($row['SubscriberEmail']); ?></td>
                              <td><?php echo htmlentities($row['PostingDate']); ?></td>
                           </tr>
                           <?php endwhile; ?>
                        </tbody>
                        <tfoot style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th>#</th>
                              <th>Subscriber Email</th>
                              <th>Posting Date</th>
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