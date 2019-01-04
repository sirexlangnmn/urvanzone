<?php
	
	include('../include/connection.php');

  	if (isset($_POST['submit']))
  	{
	  	$vehicletitle       = $_POST['vehicle_title'];
		$brand_id           = $_POST['brand_id'];
		$vehicleoverview    = $_POST['vehicle_overview'];
		$plate_no           = $_POST['plate_no'];
		$priceperday        = $_POST['price_per_day'];
		$fueltype           = $_POST['fuel_type'];
		$modelyear          = $_POST['model_year'];
		$seatingcapacity    = $_POST['seating_capacity'];
		$airconditioner     = $_POST['air_conditioning'];
		$powerdoorlocks     = $_POST['power_door_locks'];
		$antilockbrakingsys = $_POST['anti_lock_braking_system'];
		$brakeassist        = $_POST['brake_assist'];
		$powersteering      = $_POST['power_steering'];
		$driverairbag       = $_POST['driver_airbag'];
		$passengerairbag    = $_POST['passenger_airbag'];
		$powerwindow        = $_POST['power_windows'];
		$cdplayer           = $_POST['music_player'];
		$centrallocking     = $_POST['central_locking_system'];
		$crashsensor        = $_POST['crash_sensor'];
		$leatherseats       = $_POST['leather_seats'];

		#----------------------
		# For first image	
		#----------------------
		$vimage1 = $_FILES["img1"];

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
		$allowed1 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension1, $allowed1)){
			if($imgError1 === 0){
				if($imgSize1 < 100000){
					if($width1 <= "1000" || $height1 <= "600"){
						move_uploaded_file($imgTmpName1,"../img/vehicleimages/$vimage1");
					}
					else{
				        echo "Check image 1. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 1. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 1. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 1. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For first image
		#----------------------


		#----------------------
		# For 2nd image	
		#----------------------
		$vimage2 = $_FILES["img2"];

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
		$allowed2 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension2, $allowed2)){
			if($imgError2 === 0){
				if($imgSize2 < 100000){
					if($width2 <= "1000" || $height2 <= "600"){
						move_uploaded_file($imgTmpName2,"../img/vehicleimages/$vimage2");
					}
					else{
				        echo "Check image 2. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 2. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 2. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 2. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For 2nd image
		#----------------------


		#----------------------
		# For 3rd image	
		#----------------------
		$vimage3 = $_FILES["img3"];

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
		$allowed3 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension3, $allowed3)){
			if($imgError3 === 0){
				if($imgSize3 < 100000){
					if($width3 <= "1000" || $height3 <= "600"){
						move_uploaded_file($imgTmpName3,"../img/vehicleimages/$vimage3");
					}
					else{
				        echo "Check image 3. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 3. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 3. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 3. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For 3rd image
		#----------------------


		#----------------------
		# For 4th image	
		#----------------------
		$vimage4 = $_FILES["img4"];

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
		$allowed4 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension4, $allowed4)){
			if($imgError4 === 0){
				if($imgSize4 < 100000){
					if($width4 <= "1000" || $height4 <= "600"){
						move_uploaded_file($imgTmpName4,"../img/vehicleimages/$vimage4");
					}
					else{
				        echo "Check image 4. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 4. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 4. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 4. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For 4th image
		#----------------------


		#----------------------
		# For 5th image	
		#----------------------
		$vimage5 = $_FILES["img5"];

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
		$allowed5 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension5, $allowed5)){
			if($imgError5 === 0){
				if($imgSize5 < 100000){
					if($width5 <= "1000" || $height5 <= "600"){
						move_uploaded_file($imgTmpName5,"../img/vehicleimages/$vimage5");
					}
					else{
				        echo "Check image 5. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 5. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 5. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 5. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For 5th image
		#----------------------


		#----------------------
		# For 6th image	
		#----------------------
		$vimage6 = $_FILES["img6"];

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
		$allowed6 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension6, $allowed6)){
			if($imgError6 === 0){
				if($imgSize6 < 100000){
					if($width6 <= "1000" || $height6 <= "600"){
						move_uploaded_file($imgTmpName6,"../img/vehicleimages/$vimage6");
					}
					else{
				        echo "Check image 6. Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Check image 6. Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "Check image 6. There was an error uploading your image.";
			}
		}
		else{
	        echo "Check image 6. You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}
		#----------------------
		# /. For 6th image
		#----------------------

	}

	  	$error_course=mysqli_query($con, "SELECT * FROM tblvehicles WHERE Plate_No = '$plate_no'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_course);

 		if($count == 0){
			mysqli_query($con, "
			INSERT INTO
				tblvehicles (VehiclesTitle, brand_id, VehiclesOverview, Plate_No, PricePerDay, FuelType, ModelYear, SeatingCapacity, Vimage1, Vimage2, Vimage3, Vimage4, Vimage5, Vimage6, AirConditioner, PowerDoorLocks, AntiLockBrakingSystem, BrakeAssist, PowerSteering, DriverAirbag, PassengerAirbag, PowerWindows, CDPlayer, CentralLocking, CrashSensor, LeatherSeats) 
			VALUES
			(
			    '$vehicletitle', '$brand_id', '$vehicleoverview', '$plate_no', '$priceperday', '$fueltype', '$modelyear', '$seatingcapacity', '$vimage1', '$vimage2', '$vimage3', '$vimage4', '$vimage5', '$vimage6', '$airconditioner', '$powerdoorlocks', '$antilockbrakingsys', '$brakeassist', '$powersteering', '$driverairbag', '$passengerairbag', '$powerwindow', '$cdplayer', '$centrallocking', '$crashsensor', '$leatherseats'
    		)
    		")or die(mysqli_error());	
 		}
 		else
 		{ ?>
 			<script type="text/javascript"> alert('Fleet Already Exist'); </script>

  <?php } ?>
			<script>window.location="../fleet.php";</script>

?>
  