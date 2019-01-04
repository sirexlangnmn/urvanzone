<?php 
	session_start();



// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

	echo "<script type='text/javascript'>alert('Successfully Logout!');</script>";
	echo '<meta http-equiv="refresh" content="2;url=../index.php">';
?>
	

	

