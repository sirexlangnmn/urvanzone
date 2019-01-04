<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

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

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="ClientPortal/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->


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

		
 <style>
  h4{
    color: #fff;
  }
  #main .fullwidth-box .fusion-row {
    padding-left: 0;
    padding-right: 0;
}
div#main h2.our-benefits-heading, div#main h2.our-manufacturers-heading, div#main h2.our-extras-heading {
    margin-bottom: 5px;
    margin-top: 38px;
    font-weight: bold !important;
}
.car-rental-benefits-slider .responsive-benefits-slider div.slick-slide {
    text-align: center;
        width: 256px
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.car-rental-benefits-slider .responsive-benefits-slider div.car-rental-benefit-image {
    height: 81px;
    margin-left: 64px;
    margin-right: 10px;
}
.car-rental-benefits-slider .responsive-benefits-slider div.car-rental-benefit-title {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    margin-left: 10px;
    margin-right: 10px;
    height: 46px;
    overflow: hidden;
}
.car-rental-benefits-slider .responsive-benefits-slider div.car-rental-benefit-image img {
    border-radius: 12px 12px 12px 12px;
    width: 71px;
    height: 81px;
}
</style>       
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!--Header-->
<?php include('includes/header.php');?>
                      <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type='$pagetype'";
$results = $con->query($sql);
$cnt=1;
if ($results->num_rows > 0) {
foreach($results as $result)
{ ?>
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1><?php  echo htmlentities($result['PageName']); ?></h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><?php echo htmlentities($result['PageName']); ?></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">


      <h2><?php  echo htmlentities($result['PageName']); ?></h2>
      <p><?php  echo $result['detail']; ?> </p>
    </div>
   <?php } }?>
  </div>
</section>
<!-- /About-us--> 

<div class="fusion-row"><h2 class="our-benefits-heading" style="text-align: center;" data-fontsize="24" data-lineheight="40">WE ENSURE:</h2>
<div class="car-rental-wrapper car-rental-benefits-slider container">
    <div class="responsive-benefits-slider slick-initialized slick-slider" role="toolbar">
            
            
            
            
            
        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1280px; transform: translate3d(0px, 0px, 0px);">
<div class="row">
  <div class="col-sm-3 col-md-3">
          <div class="slick-slide slick-current slick-active" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 256px;" data-slick-index="0" aria-hidden="false">
            <div class="car-rental-benefit-image">
                                    <img src="http://nativerental.com/cars/wp-content/plugins/NativeRentalSystem/Extensions/CarRental/DemoGallery/thumb_benefit_good-price-and-quality-ratio.png" title="Good price &amp; quality ratio" alt="Good price &amp; quality ratio">
                            </div>
            <div class="car-rental-benefit-title">
                Good price &amp; quality ratio            </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="slick-slide slick-active" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 256px;" data-slick-index="1" aria-hidden="false">
            <div class="car-rental-benefit-image">
                                    <img src="http://nativerental.com/cars/wp-content/plugins/NativeRentalSystem/Extensions/CarRental/DemoGallery/thumb_benefit_constantly-maintained-vehicles.png" title="Constantly maintained vehicles" alt="Constantly maintained vehicles">
                            </div>
            <div class="car-rental-benefit-title">
                Constantly maintained vehicles            </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
      <div class="slick-slide slick-active" tabindex="-1" role="option" aria-describedby="slick-slide12" style="width: 256px;" data-slick-index="2" aria-hidden="false">
            <div class="car-rental-benefit-image">
                                    <img src="http://nativerental.com/cars/wp-content/plugins/NativeRentalSystem/Extensions/CarRental/DemoGallery/thumb_benefit_trustworthy-customer-support.png" title="Trustworthy customer support" alt="Trustworthy customer support">
                            </div>
            <div class="car-rental-benefit-title">
                Trustworthy customer support            </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
      <div class="slick-slide slick-active" tabindex="-1" role="option" aria-describedby="slick-slide13" style="width: 256px;" data-slick-index="3" aria-hidden="false">
            <div class="car-rental-benefit-image">
                                    <img src="http://nativerental.com/cars/wp-content/plugins/NativeRentalSystem/Extensions/CarRental/DemoGallery/thumb_benefit_unlimited-mileage.png" title="Unlimited mileage" alt="Unlimited mileage">
                            </div>
            <div class="car-rental-benefit-title">
                Unlimited mileage            </div>
        </div>
      </div>
</div>

      </div></div></div>
</div>

</div>

<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php /*include('includes/forgotpassword.php');*/?>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--add -->

  <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
     
        <script type="text/javascript" src="ClientPortal/js/faq.js"></script>
        <!-- END TEMPLATE -->




</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->
</html>