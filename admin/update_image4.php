<?php
   include 'include/connection.php';
   
   if (isset($_POST['submit']))
   {
      $id      = $_POST['id'];
      #----------------------
      # For 4th image   
      #----------------------
      $imgName4    = $_FILES["img4"]["name"];
      $imgTmpName4 = $_FILES["img4"]["tmp_name"];
      $imgSize4    = $_FILES["img4"]["size"];
      $imgError4   = $_FILES["img4"]["error"];
      $imgType4    = $_FILES["img4"]["type"];

      // Get Image Dimension
       $fileinfo4 = @getimagesize($_FILES["img4"]["tmp_name"]);
       $width4 = $fileinfo4[0];
       $height4 = $fileinfo4[1];

      $fileExtension4 = explode('.', $imgName4);
      $fileActualExtension4 = strtolower(end($fileExtension4));
      $allowed4 = array('jpeg', 'jpg', 'png',);

      if(in_array($fileActualExtension4, $allowed4)){
         if($imgError4 === 0){
            if($imgSize4 < 20971520){
               if($width4 <= "1000" || $height4 <= "600"){
                  move_uploaded_file($imgTmpName4,"img/vehicleimages/".$imgName4);
               }
               else{
                  ?>
               <script type="text/javascript"> alert('Check image 4. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
               <?php 
               }
            }
            else{
               ?>
               <script type="text/javascript"> alert('Check image 4. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
               <?php 
            }
         }
         else{
            ?>
            <script type="text/javascript"> alert('Check image 4. There was an error uploading your image. But other input data successfully added'); </script>
            <?php 
         }
      }
      else{
         ?>
         <script type="text/javascript"> alert('Check image 4. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
         <?php 
      }
      #----------------------
      # /. For 4th image
      #----------------------
     
      mysqli_query($con, "UPDATE tblvehicles SET Vimage4 = '$imgName4' WHERE id = '$id' ")or die(mysqli_error()); ?>
<?php } ?>


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
               <h3 class="text-themecolor">Current Image 1</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Current Image 1</li>
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
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                        <?php
                           $id = ($_GET['id']);
                           
                           $run_vehicles = mysqli_query($con, "SELECT * FROM tblvehicles LEFT JOIN tblbrands ON tblbrands.brand_id = tblvehicles.brand_id WHERE tblvehicles.id = '$id'") or die(mysqli_error());
                           while($row=mysqli_fetch_array($run_vehicles)) :
                           $brand_id = $row['brand_id'];
                           
                        ?>
                        <form class="m-t-40" method="POST" novalidate enctype="multipart/form-data">
                           <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
                           <img src="img/vehicleimages/<?php echo $row['Vimage4']; ?>" width="490" height="300" >
                           <br />
                           <br />
                           <input type="file" class="form-control" id="exampleInputFile" name="img4" aria-describedby="fileHelp">
                           <div class="modal-footer">
                              <button type="submit" name="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Save Changes
                              </button>
                              <a href="fleet_update.php?id=<?php echo $row['id']; ?>" type="submit" name="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Back
                              </a>
                           </div>
                        </form>
                        <?php endwhile; ?>
                     </div>
                     <div class="col-md-3"></div>
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