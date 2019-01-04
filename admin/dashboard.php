<?php
   include("include/style.php"); 
   include("queries/count.php"); 

   error_reporting(0);
   if($_POST['submit']=="Update") {  
      $pagetype    = htmlentities($_GET['type']);
      $pagedetails = htmlentities($_POST['pgedetails']);

        mysqli_query($con, "UPDATE tblpages SET detail = '$pagedetails' WHERE type = '$pagetype'")or die(mysqli_error());

        $msg = "Page data updated  successfully";
    } 


?>

<script type="text/JavaScript">
   <!--
   function MM_findObj(n, d) { //v4.01
      var p,i,x;  
      if(!d) d=document; 
      if((p=n.indexOf("?"))>0&&parent.frames.length) {
         d=parent.frames[n.substring(p+1)].document;
         n=n.substring(0,p);
      }
     
      if(!(x=d[n])&&d.all) x=d.all[n]; 
      for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); 
      return x;
   }
   
   function MM_validateForm() { //v4.0
      var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
      for (i=0; i<(args.length-2); i+=3) {
         test=args[i+2]; val=MM_findObj(args[i]);
         if (val) { nm=val.name; 
         if ((val=val.value)!="") {
            if (test.indexOf('isEmail')!=-1) { 
               p=val.indexOf('@');
               if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
         } 

         else if (test!='R') {
            num = parseFloat(val);
           
            if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
            if (test.indexOf('inRange') != -1) {
               p=test.indexOf(':');
               min=test.substring(8,p); max=test.substring(p+1);
             
               if (num<min || max<num) 
                  errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
            } 
         } 
   } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
     } if (errors) alert('The following error(s) occurred:\n'+errors);
     document.MM_returnValue = (errors == '');
   }
   
   function MM_jumpMenu(targ,selObj,restore){ //v3.0
     eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
     if (restore) selObj.selectedIndex=0;
   }
   //-->
</script>

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
               <h3 class="text-themecolor">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
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
               <!-- ============================================================== -->
               <!-- Summary Box -->
               <!-- ============================================================== -->
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="card">
                     <div class="table-responsive">
                        <table class="table table-hover earning-box">
                           <tbody>
                              <tr>
                                 <td><span class="round align-self-center round-info">
                                    <i class="fa fa-calendar"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">New Reservation</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_new_booking); ?></h2>
                                 </td>
                                 <td><a href="reservation_pending.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-success">
                                    <i class="fa fa-calendar"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">Confirmed Reservation</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_confirmed_booking); ?></h2>
                                 </td>
                                 <td><a href="reservation_confirmed.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-danger">
                                    <i class="fa fa-calendar"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">Cancelled Reservation</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_cancelled_booking); ?></h2>
                                 </td>
                                 <td><a href="reservation_cancelled.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-warning">
                                    <i class="fa fa-calendar"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">Total Reservation</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_total_booking); ?></h2>
                                 </td>
                                 <td><a href="reservation.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- End Summary Box -->
               <!-- ============================================================== -->
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="card">
                     <div class="table-responsive">
                        <table class="table table-hover earning-box">
                           <tbody>
                              <tr>
                                 <td><span class="round align-self-center round-primary">
                                    <i class="fa fa-users"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">Total Registered User</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_total_users); ?></h2>
                                 </td>
                                 <td><a href="users.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-primary">
                                    <i class="fa fa-car"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">Total Vehicle</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_total_vehicles); ?></h2>
                                 </td>
                                 <td><a href="fleet.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-primary">
                                    <i class="fa fa-comments-o"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">New Testimonials</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_new_testi); ?></h2>
                                 </td>
                                 <td><a href="testimonials.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                              <tr>
                                 <td><span class="round align-self-center round-primary">
                                    <i class="fa fa-envelope-o"></i></span>
                                 </td>
                                 <td>
                                    <h6 class="text-success">New Queries</h6>
                                 </td>
                                 <td>
                                    <h2><?php echo htmlentities($num_rows_new_query); ?></h2>
                                 </td>
                                 <td><a href="messages.php"><i class="fa fa-eye m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Click for more detail"></i></a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- Contact Info -->
               <!-- ============================================================== -->
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="ribbon-wrapper card">
                     <div class="ribbon ribbon-info">Contact Info</div>
                     <div class="card-body ribbon-content">
                        <?php 
                           $get_con_info = "SELECT * FROM tblcontactusinfo";
                           $run_con_info = mysqli_query($con, $get_con_info) or die (mysqli_error());
                           while($row=mysqli_fetch_array($run_con_info)) :
                           ?>
                        <form class="" novalidate method="POST" action="queries/contact_update.php">
                           <div class="form-group">
                              <h5>Address </h5>
                              <div class="controls">
                                 <input type="hidden" name="id" value="<?php echo htmlentities($row['id']); ?>">
                                 <input type="text" name="address" value="<?php echo htmlentities($row['Address']); ?>" placeholder="Address" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Email </h5>
                              <div class="controls">
                                 <input type="text" name="email" value="<?php echo htmlentities($row['EmailId']); ?>" placeholder="Email" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="form-group">
                              <h5>Contact Number </h5>
                              <div class="controls">
                                 <input type="text" name="contact" value="<?php echo htmlentities($row['ContactNo']); ?>" placeholder="Contact" class="form-control" required data-validation-required-message="This field is required"> 
                              </div>
                           </div>
                           <div class="modal-footer">
                              <div class="col-sm-10 col-sm-offset-2">
                              <button type="submit" name="update" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp Update
                              </button>
                           </div>
                           </div>
                        </form>
                        <?php endwhile; ?>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- End Contact Info -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- Tinymce wysihtml5 -->
               <!-- ============================================================== -->
               <div class="col-lg-8 col-md-8 col-sm-12">
                  <div class="ribbon-wrapper card">
                     <div class="ribbon ribbon-info">Manage Frontend Content</div>
                     <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
                     <?php if($error) : ?>
                     <div class="alert alert-danger"><?php echo htmlentities($error); ?></div>
                     <?php elseif($msg) : ?>
                         <div class="alert alert-danger"><?php echo htmlentities($msg0); ?></div>
                     <?php endif; ?>   
                     <div class="card-body ribbon-content">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <h5>Select Page</h5>
                                 <select class="custom-select col-12" id="inlineFormCustomSelect" name="menu1" onChange="MM_jumpMenu('parent',this,0)">
                                    <option selected>Choose...</option>
                                    <option value="dashboard.php?type=terms">Terms and Condition</option>
                                    <option value="dashboard.php?type=privacy">Privacy and Policy</option>
                                    <option value="dashboard.php?type=aboutus">About Us</option>
                                    <option value="dashboard.php?type=faqs">FAQs</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <h5 class="text-success">
                                 <small>Selected Page:</small> 
                                 <h3 class="text-success">
                                    <?php
                                       switch($_GET['type'])
                                       {
                                          case "terms"   : echo htmlentities("Terms and Conditions"); break;
                                          case "privacy" : echo htmlentities("Privacy And Policy"); break;
                                          case "aboutus" : echo htmlentities("About Us"); break;
                                          case "faqs"    : echo htmlentities("FAQs"); break;
                                          default        : echo htmlentities(""); break;
                                       }                   
                                    ?>
                                 </h3>
                              </h5>
                           </div>
                        </div>
                        
                           <textarea id="mymce" name="area" name="pgedetails" id="pgedetails" placeholder="Package Details" required>
                           <?php 
                              $pagetype = htmlentities($_GET['type']);
                              $get_details = "SELECT detail FROM tblpages WHERE type = '$pagetype'";
                              
                              $run_details = mysqli_query($con, $get_details) or die (mysqli_error());
                              while($row=mysqli_fetch_array($run_details)) :
                                  /*$id=$row['brand_id'];*/
                           ?>
                              <?php echo htmlentities($row['detail']); ?>
                           <?php endwhile; ?>
                           </textarea>
                           <div class="modal-footer">
                              <div class="col-sm-8 col-sm-offset-4">
                                 <button type="submit" name="submit" value="Update" id="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-save"></i>Update</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- End Tinymce wysihtml5 -->
               <!-- ============================================================== -->
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
   <?php include("include/script.php"); ?>
   <?php include("include/tinymce.php"); ?>