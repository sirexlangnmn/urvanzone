
<header>
  <div class="default-header" style="padding-bottom: 10px; 
  background-image: url('images/logo/bg-header.jpg'); 
    padding-top: 20px;">
    <div class="container" style="width: 100%;">
      <div class="row">
        
        <div class="col-sm-2 col-md-2 col-md-push-1">
          <div class="logo"> <a href="index.php"><img src="images/logo/urvanfinal.png" align="center" style="text-align: center; float:right;  width: 100%;" alt="image"/></a></div>
        </div>
        <div class="col-sm-10 col-md-10">
          <div class="header_info" style="color:#fff;">
            <div class="header_widgets" style="padding-top: 15px;">
              <div class="circle_icon" style="color:#fff;"> <i class="fa fa-envelope" aria-hidden="true" style="color:#fff;"></i> </div>
              <p class="uppercase_text" style="color:#fff;">eMail us : </p>
              <a href="mailto:info@example.com" style="font-size: 20px;">urvanzone@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true" style="color:#fff;"></i> </div>
              <p class="uppercase_text" style="color:#fff;">Call Us: </p>
              <a href="tel:61-1234-5678-09" style="font-size: 20px;">503-8000</a> |
              <a href="tel:61-1234-5678-09" >0917-885-3375</a>  </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="login.php" class="btn btn-md uppercase" >Login / Register</a> </div>
<?php  }
else{ 
?>
<div class="login_btn"> <a href="#loginform" class="btn btn-md uppercase" data-toggle="modal" data-dismiss="modal">Book Now!<span class="fa fa-calendar"></span></a> </div>
 <?php }  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <i class="fa fa-user-circle" aria-hidden="true" style="color: #fff;"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId='$email' ";
$results = $con->query($sql);
if ($results->num_rows > 0) {


foreach($results as $result)
	{
?>
	<a href="#" data-toggle="dropdown"><?php echo htmlentities($result['FullName']); }} ?></a>
              <ul class="dropdown-menu">
           <?php  if($_SESSION['login']){ ?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
         <p style="text-align: center;">Welcome To Car rental portal</p>
              
            <?php  } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li class="liactive"><a href="index.php">Home</a></li>
          <li class="liactive"><a href="car-listing.php">Car Listing</a>
          <li class="liactive"><a href="contact-us.php">Contact Us</a></li>
          <li class="liactive"><a href="page.php?type=aboutus">About Us</a></li>
          <li class="liactive"><a href="faq.php?type=faqs">FAQs</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 

</header>