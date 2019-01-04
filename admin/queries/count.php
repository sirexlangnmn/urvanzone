<?php 
	// For Dashboard
	
	// Count New Reservation
	$get_new_booking = "SELECT COUNT(id) AS total FROM tblbooking WHERE Status = 1"; 
    $run_new_booking = mysqli_query($con, $get_new_booking) or die (mysqli_error());
    $values = mysqli_fetch_assoc($run_new_booking);
    $num_rows_new_booking = $values['total'];


    // Count Confirmed Reservation
    $get_con_booking = "SELECT COUNT(id) AS total FROM tblbooking WHERE Status = 2"; 
	$run_con_booking = mysqli_query($con, $get_con_booking) or die (mysqli_error());
	$values = mysqli_fetch_assoc($run_con_booking);
	$num_rows_confirmed_booking = $values['total'];


	// Count Cancelled Reservation
	$get_can_booking = "SELECT COUNT(id) AS total FROM tblbooking WHERE Status = 3"; 
    $run_can_booking = mysqli_query($con, $get_can_booking) or die (mysqli_error());
    $values = mysqli_fetch_assoc($run_can_booking);
    $num_rows_cancelled_booking = $values['total'];


    // Total Count of Reservation
    $get_total_booking = "SELECT COUNT(id) AS total FROM tblbooking"; 
    $run_total_booking = mysqli_query($con, $get_total_booking) or die (mysqli_error());
    $values = mysqli_fetch_assoc($run_total_booking);
    $num_rows_total_booking = $values['total'];


	// Total Count of User
  	$get_total_users = "SELECT COUNT(id) AS total FROM tblusers"; 
  	$run_total_users = mysqli_query($con, $get_total_users) or die (mysqli_error());
  	$values = mysqli_fetch_assoc($run_total_users);
  	$num_rows_total_users = $values['total'];



  	// Total Count of fleet
   	$get_total_vehicles = "SELECT COUNT(id) AS total FROM tblvehicles"; 
  	$run_total_vehicles = mysqli_query($con, $get_total_vehicles) or die (mysqli_error());
  	$values = mysqli_fetch_assoc($run_total_vehicles);
  	$num_rows_total_vehicles = $values['total'];


  	// New Testimonials
  	$get_new_testi = "SELECT COUNT(id) AS total FROM tbltestimonial WHERE Status = 0"; 
  	$run_new_testi = mysqli_query($con, $get_new_testi) or die (mysqli_error());
  	$values = mysqli_fetch_assoc($run_new_testi);
  	$num_rows_new_testi = $values['total'];


  	// Count New Message
 	$get_new_query = "SELECT COUNT(id) AS total FROM tblcontactusquery WHERE Status = 0"; 
	$run_new_query = mysqli_query($con, $get_new_query) or die (mysqli_error());
	$values = mysqli_fetch_assoc($run_new_query);
	$num_rows_new_query = $values['total'];

?>