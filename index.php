<?php 
session_start();
include('includes/config.php');
error_reporting(0);

//Comment
// Meow meow

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
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	
    
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 



<style>
  h4{
    color: #fff;
  }
  .responsive {
    width: 100%;
    max-width: 400px;
    height: auto;
}
#banner{
  height: 100%;
}
          ul {
  margin: 0;
  list-style-type: none;
   padding-left: 0;
}
          ul li.cars {
  display: inline-block;
margin: 0;
margin-left: 5px;
}
.panme{
    background-color: #ffffff;
    height: 400px;
    margin: 10px 10px 10px 10px;
    padding-left: 10px;
    display: inline;
    width:350px;
}
@media only screen and (max-width: 480px) {
  .panme{
    width: 100%;
    margin: 2px 2px 2px 2px;
  }
  .default-header{
    height: 100%;

  }

}



</style>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/1/js-image-slider.js"></script>
</head>
<body>


        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
  <iframe src="homeslider/index.html" scrolling='no' width="100%" height="600px" style="margin-bottom: 10px; top:10px;"></iframe>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Hot Cars For You</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
    <div class="car-container">
   
      <!-- Recently Listed New Cars -->
  

<?php 
 $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.brand_id=tblvehicles.brand_id";

$result = $con->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>  

<div class="panme col-md-4 col-xs-12 col-sm-4">
<div class="panel-body">

 <a href="vehical-details.php?vhid=<?php  echo htmlentities($row['id']); ?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($row['Vimage1']);?>"  height="200px" width="100%" alt="image"></a>
     <ul>
<li class="cars"><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($row['FuelType']); ?></li>
<li class="cars"><i class="fa fa-calendar" aria-hidden="true"></i><?php  echo htmlentities($row['ModelYear']);?> Model</li>
<li class="cars"><i class="fa fa-user" aria-hidden="true"></i><?php  echo htmlentities($row['SeatingCapacity']);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php  echo htmlentities($row['id']);?>"><?php  echo htmlentities($row['BrandName']);?> , <?php echo htmlentities($row['VehiclesTitle']);?></a></h6>
<span class="price">$<?php  echo htmlentities($row['PricePerDay']);?> /Day</span> 
</div>
<div class="inventory_info_m">
<p><?php  echo substr($row['VehiclesOverview'],0,60); ?></p>
</div>

</div>

<?php }}?>
</div>

<!-- /Listing--> 
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="fun-facts-section2">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php  
$tid=1;
$sql = "SELECT * FROM tbltestimonial WHERE status = 1";
$cnt=1;
$result = $con->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?> 


        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/ME.png" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($row['UserEmail']);?></h5>
            <p><?php echo htmlentities($row['Testimonial']);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
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
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>