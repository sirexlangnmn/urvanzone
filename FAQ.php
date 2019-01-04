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
  .btn {
    border: medium none;
    border-radius: 3px;
    color: #ffffff;
    font-size: 16px;
    font-weight: 800;
    line-height: 30px;
    margin: auto;
    padding: 7px 20px;
  }
  .page-title {
    float: left;
    width: 100%;
    padding: 20px;
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
 <?php } }?>

<!-- /About-us--> 

    
         <div class="container">
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2>Frequently Asked Questions</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-8">
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">General Questions</h3>
                                </div>
                                <div class="panel-body faq">
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>How to aliquam at ipsum sapien?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nunc pellentesque sagittis pulvinar?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Donec libero nisl, hendrerit vel tempus at?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Vestibulum vel diam orci?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nam id turpis sapien?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nulla ullamcorper, ex in ultrices fringilla?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Payment</h3>
                                </div>
                                <div class="panel-body faq">
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Cras at turpis vestibulum mauris gravida commodo?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Maecenas risus sapien, sollicitudin quis nisl vehicula, sagittis venenatis elit. Cras at turpis vestibulum mauris gravida commodo. Fusce tellus metus, eleifend vel ultrices quis, fermentum ut justo. Ut hendrerit ante sed rutrum sagittis. Nam ac nulla posuere, mattis risus nec, sagittis purus. Praesent in justo rhoncus, molestie velit laoreet, viverra sem.</p>
                                            <p>Sed sit amet lacus sem. Sed vel fermentum mi, sit amet hendrerit purus. Duis nec posuere dolor. Fusce sed faucibus turpis, a cursus nunc.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nunc pellentesque sagittis pulvinar?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Donec libero nisl, hendrerit vel tempus at?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Vestibulum vel diam orci?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nam id turpis sapien?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nulla ullamcorper, ex in ultrices fringilla?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>                        
                        <div class="col-md-4">
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Search</h3>
                                    <form id="faqForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="faqSearchKeyword" placeholder="Search..."/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" id="faqSearch">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="push-up-10"><strong>Search Result:</strong> <span id="faqSearchResult">Please fill keyword field</span></div>
                                    <div class="push-up-10">
                                        <button class="btn btn-primary" id="faqRemoveHighlights">Remove Highlights</button>
                                        <div class="pull-right">
                                            <button class="btn btn-default" id="faqOpenAll"><span class="fa fa-angle-down"></span> Open All</button>
                                            <button class="btn btn-default" id="faqCloseAll"><span class="fa fa-angle-up"></span> Close All</button>
                                        </div>                                       
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Contact</h3>
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="youremail@domain.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="email" class="form-control" placeholder="Message subject">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                                    </div>                                
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default"><span class="fa fa-paperclip"></span> Add attachment</button>
                                    <button class="btn btn-success pull-right"><span class="fa fa-envelope-o"></span> Send</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                                                            
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
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