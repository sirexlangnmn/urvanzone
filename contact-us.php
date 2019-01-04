<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   /*if(isset($_POST['send']))
     {
   $name=$_POST['fullname'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $message=$_POST['message'];
   $sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
   $query = $dbh->prepare($sql);
   $query->bindParam(':name',$name,PDO::PARAM_STR);
   $query->bindParam(':email',$email,PDO::PARAM_STR);
   $query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
   $query->bindParam(':message',$message,PDO::PARAM_STR);
   $query->execute();
   $lastInsertId = $dbh->lastInsertId();
   if($lastInsertId)
   {
   $msg="Query Sent. We will contact you shortly";
   }
   else 
   {
   $error="Something went wrong. Please try again";
   }
   
   }
   */?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <title>Urvanzone | Website</title>
      <link rel="shortcut icon" href="images/logo/titlelogo.jpg">
      <!--Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
      <!--Custome Style -->
      <link rel="stylesheet" href="assets/css/style.css" type="text/css">
      <!--OWL Carousel slider-->
      <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
      <!--slick-slider -->
      <link href="assets/css/slick.css" rel="stylesheet">
      <!--bootstrap-slider -->
      <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
      <!--FontAwesome Font Style -->
      <link href="assets/css/font-awesome.min.css" rel="stylesheet">
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
      <style>
         .errorWrap {
         padding: 10px;
         margin: 0 0 20px 0;
         background: #fff;
         border-left: 4px solid #dd3d36;
         -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
         box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
         }
         .succWrap{
         padding: 10px;
         margin: 0 0 20px 0;
         background: #fff;
         border-left: 4px solid #5cb85c;
         -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
         box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
         }
         .default-header{
         padding: 10px;
         }
         h4{
         color: #fff;
         }
         .sidebar-menu{
         width: 100%;
         }
         .contact_us{
         width: 100%;
         }
         .container_box{
         height: 100%;
         width: 100%;
         margin-top: 10px;
         }
         ul {
         list-style-type: none;
         }
         .owl-item{
         padding: 0;
         }
         .owl-item img{
         padding: 5px 5px 5px 5px;
         }
      </style>
   </head>
   <body>
      <!-- Start Switcher -->
      <?php /*include('includes/colorswitcher.php');*/ ?>
      <!-- /Switcher -->  
      <!--Header-->
      <?php include('includes/header.php'); ?>
      <!-- /Header --> 
      <!--Page Header-->
      <section class="page-header contactus_page">
         <div class="container">
            <div class="page-header_wrap">
               <div class="page-heading">
                  <h1>Contact Us</h1>
               </div>
               <ul class="coustom-breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li>Contact Us</li>
               </ul>
            </div>
         </div>
         <!-- Dark Overlay-->
         <div class="dark-overlay"></div>
      </section>
      <!-- /Page Header--> 
      <!--Contact-us-->
      <section class="contact_us section-padding">
         <div class="container">
            <div class="col-md-4 col-sm-12">
               <!-- ==============================================================-->
               <!-- Contact                                                       -->
               <!-- ============================================================== -->
               <div class="panel panel-default sidebar-menu">
                  <div class="panel-heading">
                     <h3 class="panel-title">Contact</h3>
                  </div>
                  <div class="panel-body intro">
                     <h3><i class="fa fa-map-marker"></i> Address</h3>
                     <p></p>
                     <p>J9 - 33 
                        Evangelista Avenue, 
                        Corner F. Marcelo Street, 
                        Santolan Pasig City,
                        <strong>Philippines</strong>
                     </p>
                     <hr>
                     <h3><i class="fa fa-phone"></i>Mobile Number</h3>
                     <p></p>
                     <p>TNT: <strong> +63 09 820 2040</strong></p>
                     <p>TNT: <strong> +63 09 820 2040</strong></p>
                     <p>TNT: <strong> +63 09 820 2040</strong></p>
                     <p>TNT: <strong> +63 09 820 2040</strong></p>
                     <hr>
                     <h4>Stay in touch</h4>
                     <p class="social">
                        <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                     </p>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- End Contact                                                    -->
               <!-- ============================================================== -->
            </div>
            <div class="col-md-8 col-sm-12">
               <!-- ============================================================== -->
               <!-- Contact Form                                                   -->
               <!-- ============================================================== -->
               <div class="box" id="contact">
                  <h2>Contact form</h2>
                  <form>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="firstname">Firstname</label>
                              <input type="text" class="form-control" id="firstname">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="lastname">Lastname</label>
                              <input type="text" class="form-control" id="lastname">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" id="email">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label for="subject">Subject</label>
                              <input type="text" class="form-control" id="subject">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label for="message">Message</label>
                              <textarea id="message" class="form-control"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-12 text-center">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="container_box">
                  <div class="clearfix">
                     <h1>UrvanZone</h1>
                     <p><b>Address : </b>33 Evangelista Avenue, Corner F. Marcelo Street, Santolan Pasig City, Philippines </p>
                     <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=UrvanZone%20J9%20-%2033%20Evangelista%20Avenue%2C%20Corner%20F.%20Marcelo%20Street%2C%20Santolan%20Pasig%20City%2C%20Philippines%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                        <style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- End Contact Form                                               -->
               <!-- ============================================================== -->
            </div>
         </div>
      </section>
      <!-- /Contact-us--> 
      <!--Cars -->
      <section>
         <div class="container">
            <div class="row">
               <div id="testimonial-slider">
                  <img src="admin/img/vehicleimages/a6.JPG"  height="200px" width="100%" alt="image">
                  <ul>
                     <li class="cars">
                        <h3>You Live in a Big City</h3>
                     </li>
                     <li class="cars">If you live in a large city with good public transportation, there may not be any need for you to purchase a car. You can take care of your daily needs within the city via public transportation. In fact, in many cases, public transportation may be more efficient than trying to drive a car in traffic.</li>
                  </ul>
                  <img src="admin/img/vehicleimages/a6.JPG"  height="200px" width="100%" alt="image">
                  <ul>
                     <li class="cars">
                        <h3>Planning a Road Trip</h3>
                     </li>
                     <li class="cars">People often think of renting a car when the go on vacation and are flying to their destinations. However, it can make sense to rent a car for a road trip. This may be a good idea if you do not own a car or if the car you have is not very reliable. It puts the mileage on another vehicle, and you have the added protection of the car rental company helping you out if you were to break down.</li>
                  </ul>
                  <img src="admin/img/vehicleimages/a6.JPG"  height="200px" width="100%" alt="image">
                  <ul>
                     <li class="cars">
                        <h3>Running Errands</h3>
                     </li>
                     <li class="cars">Running errands, such as going to the grocery store or buying larger items are another potential money-saver. If you cannot find a truck or large car to borrow, you can always rent one, which could end up being cheaper than paying for shipping a large item.</li>
                  </ul>
                  <img src="admin/img/vehicleimages/a6.JPG"  height="200px" width="100%" alt="image">
                  <ul>
                     <li class="cars">
                        <h3>Special Occasions</h3>
                     </li>
                     <li class="cars">For special occasions, you may consider upgrading your car by renting. If you are planning to propose or you are attending a really classy event and your car just will not cut it, renting a car for the day can save you money. In fact, renting a car occasionally through the year will save you money compared to purchasing a luxury automobile to use every day.</li>
                  </ul>
                  <img src="admin/img/vehicleimages/a6.JPG"  height="200px" width="100%" alt="image">
                  <ul>
                     <li class="cars">
                        <h3>While on Vacation</h3>
                     </li>
                     <li class="cars">Car rentals can make your vacation easier, and save you money. It is always fun to choose a new or different model and have an extended test drive while on vacation. This can help you make a wise purchase when you do decide it is time to buy a car.
                        You can potentially save money on these rentals via AAA, your professional organizations or alumni associations. You can also book through a travel website or bundle your hotel and airline tickets to find deals.
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- /Testimonial--> 
      <!--Footer -->
      <?php include('includes/footer.php');?>
      <!-- /Footer--> 
      <!--Back to top-->
      <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
      <!--/Back to top--> 
      <!--Login-Form -->
      <?php include('includes/login.php');?>
      <!--/Login-Form --> 
      <!--Register-Form -->
      <?php include('includes/registration.php'); ?>
      <!--/Register-Form --> 
      <!--Forgot-password-Form -->
      <?php include('includes/forgotpassword.php'); ?>
      <!--/Forgot-password-Form --> 
      <!-- Scripts --> 
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script> 
      <script src="assets/js/interface.js"></script> 
      <!--bootstrap-slider-JS--> 
      <script src="assets/js/bootstrap-slider.min.js"></script> 
      <!--Slider-JS--> 
      <script src="assets/js/slick.min.js"></script> 
      <script src="assets/js/owl.carousel.min.js"></script>
   </body>
   <!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>