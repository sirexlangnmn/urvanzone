<?php
    include("include/style.php"); 

    error_reporting(0);
    if(isset($_GET['eid'])) {  
        $eid    = htmlentities($_GET['eid']);  
        $status = 1;

        mysqli_query($con, "UPDATE tblcontactusquery SET status = '$status' WHERE id = '$eid'")or die(mysqli_error());
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
               <h3 class="text-themecolor">Messages</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Messages</li>
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
                              <th>Status</th>
                              <th>Fullname</th>
                              <th>User Email</th>
                              <th>Contact Number</th>
                              <th>Message</th>
                              <th>Posting Date</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $get_testimonials = "SELECT * from  tblcontactusquery ORDER BY id DESC";
                              
                              $run_testimonials = mysqli_query($con, $get_testimonials) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_testimonials)) :
                                  /*$id=$row['brand_id'];*/
                            ?>
                           <tr>
                              <td><?php echo $row['id']; ?></td>
                              <?php if($row['status']==1) : ?>
                              <td>Read</td>
                              <?php else : ?>
                              <td><a href="messages.php?eid=<?php echo $row['id']; ?>" onclick="return confirm('This message will remark as read')" >New Message</a>
                              </td>
                              <?php endif ; ?>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['EmailId']; ?></td>
                              <td><?php echo $row['ContactNumber']; ?></td>
                              <td><?php echo $row['Message']; ?></td>
                              <td><?php echo $row['PostingDate']; ?></td>
                           </tr>
                           <?php endwhile; ?>
                        </tbody>
                        <tfoot style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th>#</th>
                              <th>Status</th>
                              <th>Fullname</th>
                              <th>User Email</th>
                              <th>Contact Number</th>
                              <th>Message</th>
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