<?php
    include("include/style.php"); 

    error_reporting(0);
    if(isset($_GET['eid'])) {  
        $eid    = htmlentities($_GET['eid']);  
        $status = "1";

        mysqli_query($con, "UPDATE tbltestimonial SET status = '$status' WHERE id = '$eid'")or die(mysqli_error());

        $msg0 = "Inactive Testimonials";
    }        
    
    if(isset($_GET['aeid'])) {
        $aeid    = htmlentities($_GET['aeid']);
        $status  = "2";

        mysqli_query($con, "UPDATE tbltestimonial SET status = '$status' WHERE id = $aeid")or die(mysqli_error());
    
        $msg1 = "Active Testimonials";       
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
               <h3 class="text-themecolor">Testimonials</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Testimonials</li>
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
                              <th>#</th>
                              <th>Fullname</th>
                              <th>User Email</th>
                              <th>Testimonials</th>
                              <th>Posting Date</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $get_testimonials = "SELECT tblusers.FullName, 
                                                          tbltestimonial.UserEmail,
                                                          tbltestimonial.Testimonial,
                                                          tbltestimonial.PostingDate,
                                                          tbltestimonial.status,
                                                          tbltestimonial.id 
                                                     FROM tbltestimonial 
                                                     JOIN tblusers 
                                                       ON tblusers.Emailid=tbltestimonial.UserEmail
                                                 ORDER BY tbltestimonial.id DESC";
                              
                              $run_testimonials = mysqli_query($con, $get_testimonials) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_testimonials)) :
                                  /*$id=$row['brand_id'];*/
                            ?>
                           <tr>
                           <td class="text-nowrap">
                              <a alt="default" href="#" data-toggle="modal" data-target="#modal_brand_update<?php echo $id; ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Detail"></i></a>
                              
                              
                                 <?php if($row['status']=="" || $row['status']==0) : ?>
                                    <a href="testimonials.php?aeid=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Active')"> New</a>
                                 <?php elseif($row['status']=="" || $row['status']==1) : ?>
                                    <a href="testimonials.php?aeid=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Active')"> Inactive</a>
                                 <?php else : ?>
                                    <a href="testimonials.php?eid=<?php echo $row['id']; ?>" onclick="return confirm('Do you really want to Inactive')"> Active</a>
                                 <?php endif; ?>
                              </td>
                              <td><?php echo htmlentities($row['id']); ?></td>
                              <td><?php echo htmlentities($row['FullName']); ?></td>
                              <td><?php echo htmlentities($row['UserEmail']); ?></td>
                              <td><?php echo htmlentities($row['Testimonial']); ?></td>
                              <td><?php echo htmlentities($row['PostingDate']); ?></td>
                           </tr>
                           <?php endwhile; ?>
                        </tbody>
                        <tfoot style="background-color: #1E88E5; color: white;">
                           <tr>
                              <th class="text-nowrap">Action</th>
                              <th>#</th>
                              <th>Fullname</th>
                              <th>User Email</th>
                              <th>Testimonials</th>
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