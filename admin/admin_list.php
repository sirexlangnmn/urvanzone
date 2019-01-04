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
               <h3 class="text-themecolor">Listed Admins</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Listed Admins</li>
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
                  <div class="row">
                     <div class="col-lg-3 col-xlg-3 col-md-3">
                        <button alt="default" data-toggle="modal" data-target="#modal_admin_insert" class="btn btn-outline-success waves-effect waves-light">Add Admin</button>
                     </div>
                     <div class="col-lg-9 col-xlg-9 col-md-9"></div>
                  </div>
                  <div class="table-responsive">
                     <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                        <thead style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th class="text-nowrap">Action</th>
                              <th>#</th>
                              <th>Admin Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Position</th>
                              <th>Creation Date</th>
                              <th>Updation Date</th>
                           </tr>
                        </thead>
                        <tfoot style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th class="text-nowrap">Action</th>
                              <th>#</th>
                              <th>Admin Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Position</th>
                              <th>Creation Date</th>
                              <th>Updation Date</th>
                           </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                              $get_Admin = "SELECT * FROM admin ORDER BY admin_id DESC";
                              
                              $run_Admins = mysqli_query($con, $get_Admin) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_Admins)) :
                                  $id = $row['admin_id'];
                            ?>
                           <tr>
                              <td class="text-nowrap">
                                 <a alt="default" href="#" data-toggle="modal" data-target="#modal_Admin_update<?php echo $id; ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Detail"></i></a>
                                 <!-- <?php //include("modal_Admin_update.php");?> -->

                                 <a href="#" ><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete Client Detail"></i></a>
                              </td>
                              <td><?php echo $id; ?></td>
                              <td><?php echo htmlentities($row['fullname']); ?></td>
                              <td><?php echo htmlentities($row['UserName']); ?></td>
                              <td><?php echo htmlentities($row['email']); ?></td>
                              <td><?php echo htmlentities($row['contact']); ?></td>
                              <td><?php echo htmlentities($row['position']); ?></td>
                              <td><?php echo htmlentities($row['insertionDate']); ?></td>
                              <td><?php echo htmlentities($row['updationDate']); ?></td>
                           </tr>
                           <?php endwhile; ?>
                        </tbody>
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
         <!-- Modals  -->
         <!-- ============================================================== -->
         <?php 
            include("modal_Admin_insert.php"); 
         ?>
         <!-- ============================================================== -->
         <!-- End Modals  -->
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