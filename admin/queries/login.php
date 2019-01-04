<?php 
	session_start(); 

	include('../include/connection.php'); 

	if(isset($_POST['login'])) {
		$user_unsafe = $_POST['username'];
		$pass_unsafe = $_POST['password'];
		$branch      = $_POST['branch'];

		$user  = mysqli_real_escape_string($con, $user_unsafe);
		$password = mysqli_real_escape_string($con, $pass_unsafe);

		$hash_pass = md5($password);
		$salt = "a1Bz20ydqelm8m1wql";
		$decrypted_password = $hash_pass.$salt;

		$user_query = mysqli_query($con, "SELECT * FROM admin WHERE UserName = '$user' AND Password = '$decrypted_password'")or die(mysqli_error($con));
			
		$user_row = mysqli_fetch_array($user_query);
           $_SESSION['admin_id'] = $user_row['admin_id'];
           $_SESSION['fullname'] = $user_row['fullname'];
           $_SESSION['username'] = $user_row['UserName'];
           $_SESSION['email']    = $user_row['email'];
           $_SESSION['contact']  = $user_row['contact'];
           $_SESSION['position'] = $user_row['position'];

        $counter = mysqli_num_rows($user_query);


	  	if ($counter == 0) {	
		  	echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		  	document.location='index.php'</script>";
		} 
		elseif ($counter > 0) {
	 		echo "<script type='text/javascript'>alert('Successfully Login!');</script>";
			echo "<script type='text/javascript'>document.location='../dashboard.php'</script>";
		}
	}	 
?>

	
