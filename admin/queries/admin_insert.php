<?php
	
	include('../include/connection.php');

  	if (isset($_POST['submit']))
  	{
	  	$fullname = htmlentities($_POST['fullname']);
	  	$username = htmlentities($_POST['username']);
	  	$password = htmlentities($_POST['password']);
	  	$email    = htmlentities($_POST['email']);
	  	$contact  = htmlentities($_POST['contact']);
	  	$position = htmlentities($_POST['position']);

	  	$hash_pass = md5($password);
		$salt = "a1Bz20ydqelm8m1wql";
		$encrypted_password = $hash_pass.$salt;

	  	
	  
	  	$query=mysqli_query($con, "SELECT * FROM admin WHERE fullname = '$fullname' AND UserName = '$username' AND email = '$email'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($query);

 		if($count != 1) {
 			mysqli_query($con, "INSERT INTO admin (fullname, UserName, Password, email, contact, position) values ('$fullname', '$username', '$encrypted_password', '$email', '$contact', '$position')")or die(mysqli_error());	

 			
 			echo '<script type="text/javascript">alert("Record Added");</script>';
			echo '<script>window.location="../admin_list.php";</script>';
 			
 		}
 		else { 
 			echo '<script type="text/javascript">alert("Account already exist");</script>';
   		} 
   			
	}
?>
  
