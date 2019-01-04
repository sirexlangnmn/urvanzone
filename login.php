<?php
session_start();
include('includes/config.php');
error_reporting(0);

if(isset($_POST['login']))
{
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId='$email' and Password='$password'";

$result =$con->query($sql);


if($result->num_rows > 0)
{
   while($row = $result->fetch_assoc()) {
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$row['FullName'];
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} }else{
  
  echo "<script>alert('Invalid Details');</script>";

}


}

/*if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $EmailId = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId='$email' and Password='$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         while($row = $result->fetch_assoc()) {
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$row['FullName'];
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
      }}else {
        echo "<script>alert('Invalid Details');</script>";
   }


}

*/



if(strlen($_SESSION['login'])==0)
  { 

?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Urvanzone | Website</title>
        <link rel="shortcut icon" href="images/logo/titlelogo.jpg">   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="ClientPortal/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo">UrvanZone</div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block"  name="login">Log In</button>
                        </div>
                    </div>
                   
                
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018-UrvanZone
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>

<?php 

}
else{
    header('location:index.php');
 } ?>





