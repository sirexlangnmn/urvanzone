<?php
	
	include('../include/connection.php');

  	if (isset($_POST['submit']))
  	{
	  	$vehicletitle       = htmlentities($_POST['vehicle_title']);
		$brand_id           = htmlentities($_POST['brand_id']);
		$vehicleoverview    = htmlentities($_POST['vehicle_overview']);
		$plate_no           = htmlentities($_POST['plate_no']);
		$priceperday        = htmlentities($_POST['price_per_day']);
		$fueltype           = htmlentities($_POST['fuel_type']);
		$modelyear          = htmlentities($_POST['model_year']);
		$seatingcapacity    = htmlentities($_POST['seating_capacity']);
		$airconditioner     = htmlentities($_POST['air_conditioning']);
		$powerdoorlocks     = htmlentities($_POST['power_door_locks']);
		$antilockbrakingsys = htmlentities($_POST['anti_lock_braking_system']);
		$brakeassist        = htmlentities($_POST['brake_assist']);
		$powersteering      = htmlentities($_POST['power_steering']);
		$driverairbag       = htmlentities($_POST['driver_airbag']);
		$passengerairbag    = htmlentities($_POST['passenger_airbag']);
		$powerwindow        = htmlentities($_POST['power_windows']);
		$cdplayer           = htmlentities($_POST['music_player']);
		$centrallocking     = htmlentities($_POST['central_locking_system']);
		$crashsensor        = htmlentities($_POST['crash_sensor']);
		$leatherseats       = htmlentities($_POST['leather_seats']);


		#----------------------
		# For first image	
		#----------------------
		$imgName1    = $_FILES["img1"]["name"];
		$imgTmpName1 = $_FILES["img1"]["tmp_name"];
		$imgSize1    = $_FILES["img1"]["size"];
		$imgError1   = $_FILES["img1"]["error"];
		$imgType1    = $_FILES["img1"]["type"];

		// Get Image Dimension
	    $fileinfo1 = @getimagesize($_FILES["img1"]["tmp_name"]);
	    $width1 = $fileinfo1[0];
	    $height1 = $fileinfo1[1];

		$fileExtension1 = explode('.', $imgName1);
		$fileActualExtension1 = strtolower(end($fileExtension1));
		$allowed1 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension1, $allowed1)){
			if($imgError1 === 0){
				if($imgSize1 < 20971520){
					if($width1 <= "1000" || $height1 <= "600"){
						move_uploaded_file($imgTmpName1,"../img/vehicleimages/".$imgName1);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 1. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 1. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 1. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 1. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For first image
		#----------------------


		#----------------------
		# For 2nd image	
		#----------------------
		$imgName2    = $_FILES["img2"]["name"];
		$imgTmpName2 = $_FILES["img2"]["tmp_name"];
		$imgSize2    = $_FILES["img2"]["size"];
		$imgError2   = $_FILES["img2"]["error"];
		$imgType2    = $_FILES["img2"]["type"];

		// Get Image Dimension
	    $fileinfo2 = @getimagesize($_FILES["img2"]["tmp_name"]);
	    $width2 = $fileinfo2[0];
	    $height2 = $fileinfo2[1];

		$fileExtension2 = explode('.', $imgName2);
		$fileActualExtension2 = strtolower(end($fileExtension2));
		$allowed2 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension2, $allowed2)){
			if($imgError2 === 0){
				if($imgSize2 < 20971520){
					if($width2 <= "1000" || $height2 <= "600"){
						move_uploaded_file($imgTmpName2,"../img/vehicleimages/".$imgName2);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 2. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 2. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 2. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 2. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For 2nd image
		#----------------------


		#----------------------
		# For 3rd image	
		#----------------------
		$imgName3    = $_FILES["img3"]["name"];
		$imgTmpName3 = $_FILES["img3"]["tmp_name"];
		$imgSize3    = $_FILES["img3"]["size"];
		$imgError3   = $_FILES["img3"]["error"];
		$imgType3    = $_FILES["img3"]["type"];

		// Get Image Dimension
	    $fileinfo3 = @getimagesize($_FILES["img3"]["tmp_name"]);
	    $width3 = $fileinfo3[0];
	    $height3 = $fileinfo3[1];

		$fileExtension3 = explode('.', $imgName3);
		$fileActualExtension3 = strtolower(end($fileExtension3));
		$allowed3 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension3, $allowed3)){
			if($imgError3 === 0){
				if($imgSize3 < 20971520){
					if($width3 <= "1000" || $height3 <= "600"){
						move_uploaded_file($imgTmpName3,"../img/vehicleimages/".$imgName3);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 3. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 3. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 3. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 3. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For 3rd image
		#----------------------


		#----------------------
		# For 4th image	
		#----------------------
		$imgName4    = $_FILES["img4"]["name"];
		$imgTmpName4 = $_FILES["img4"]["tmp_name"];
		$imgSize4    = $_FILES["img4"]["size"];
		$imgError4   = $_FILES["img4"]["error"];
		$imgType4    = $_FILES["img4"]["type"];

		// Get Image Dimension
	    $fileinfo4 = @getimagesize($_FILES["img4"]["tmp_name"]);
	    $width4 = $fileinfo4[0];
	    $height4 = $fileinfo4[1];

		$fileExtension4 = explode('.', $imgName4);
		$fileActualExtension4 = strtolower(end($fileExtension4));
		$allowed4 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension4, $allowed4)){
			if($imgError4 === 0){
				if($imgSize4 < 20971520){
					if($width4 <= "1000" || $height4 <= "600"){
						move_uploaded_file($imgTmpName4,"../img/vehicleimages/".$imgName4);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 4. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 4. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 4. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 4. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For 4th image
		#----------------------


  		#----------------------
		# For 5th image	
		#----------------------
		$imgName5    = $_FILES["img5"]["name"];
		$imgTmpName5 = $_FILES["img5"]["tmp_name"];
		$imgSize5    = $_FILES["img5"]["size"];
		$imgError5   = $_FILES["img5"]["error"];
		$imgType5    = $_FILES["img5"]["type"];

		// Get Image Dimension
	    $fileinfo5 = @getimagesize($_FILES["img5"]["tmp_name"]);
	    $width5 = $fileinfo5[0];
	    $height5 = $fileinfo5[1];

		$fileExtension5 = explode('.', $imgName5);
		$fileActualExtension5 = strtolower(end($fileExtension5));
		$allowed5 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension5, $allowed5)){
			if($imgError5 === 0){
				if($imgSize5 < 20971520){
					if($width5 <= "1000" || $height5 <= "600"){
						move_uploaded_file($imgTmpName5,"../img/vehicleimages/".$imgName5);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 5. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 5. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 5. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 5. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For 5th image
		#----------------------


		#----------------------
		# For 6th image	
		#----------------------
		$imgName6    = $_FILES["img6"]["name"];
		$imgTmpName6 = $_FILES["img6"]["tmp_name"];
		$imgSize6    = $_FILES["img6"]["size"];
		$imgError6   = $_FILES["img6"]["error"];
		$imgType6    = $_FILES["img6"]["type"];

		// Get Image Dimension
	    $fileinfo6 = @getimagesize($_FILES["img6"]["tmp_name"]);
	    $width6 = $fileinfo6[0];
	    $height6 = $fileinfo6[1];

		$fileExtension6 = explode('.', $imgName6);
		$fileActualExtension6 = strtolower(end($fileExtension6));
		$allowed6 = array('jpeg', 'jpg', 'png',);

		if(in_array($fileActualExtension6, $allowed6)){
			if($imgError6 === 0){
				if($imgSize6 < 20971520){
					if($width6 <= "1000" || $height6 <= "600"){
						move_uploaded_file($imgTmpName6,"../img/vehicleimages/".$imgName6);
					}
					else{
						?>
 					<script type="text/javascript"> alert('Check image 6. Image dimension should be within 1000 X 600. But other input data successfully added'); </script>
 					<?php 
					}
				}
				else{
					?>
 					<script type="text/javascript"> alert('Check image 6. Image size is too big. Maximum is 20MB. But other input data successfully added'); </script>
 					<?php 
				}
			}
			else{
				?>
 				<script type="text/javascript"> alert('Check image 6. There was an error uploading your image. But other input data successfully added'); </script>
 				<?php 
			}
		}
		else{
			?>
 			<script type="text/javascript"> alert('Check image 6. You cannot upload files of this type. Only jpg, jpeg, png. But other input data successfully added'); </script>
 			<?php 
  		}
		#----------------------
		# /. For 6th image
		#----------------------


	

	  	$error_course=mysqli_query($con, "SELECT * FROM tblvehicles WHERE Plate_No = '$plate_no'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_course);

 		if($count == 0){
			mysqli_query($con, "
			INSERT INTO
				tblvehicles (VehiclesTitle, brand_id, VehiclesOverview, Plate_No, PricePerDay, FuelType, ModelYear, SeatingCapacity, Vimage1, Vimage2, Vimage3, Vimage4, Vimage5, Vimage6, AirConditioner, PowerDoorLocks, AntiLockBrakingSystem, BrakeAssist, PowerSteering, DriverAirbag, PassengerAirbag, PowerWindows, CDPlayer, CentralLocking, CrashSensor, LeatherSeats) 
			VALUES
			(
			    '$vehicletitle', '$brand_id', '$vehicleoverview', '$plate_no', '$priceperday', '$fueltype', '$modelyear', '$seatingcapacity', '$imgName1', '$imgName2', '$imgName3', '$imgName4', '$imgName5', '$imgName6', '$airconditioner', '$powerdoorlocks', '$antilockbrakingsys', '$brakeassist', '$powersteering', '$driverairbag', '$passengerairbag', '$powerwindow', '$cdplayer', '$centrallocking', '$crashsensor', '$leatherseats'
    		)
    		")or die(mysqli_error($con));	

			?>
			<script>window.location="../fleet.php";</script>
			<?php
 		}
 		else
 		{ 	?>
 			<script type="text/javascript"> alert('Fleet Already Exist'); </script> 			
  			<?php 
		}	
 		
			
}
 
?>
  