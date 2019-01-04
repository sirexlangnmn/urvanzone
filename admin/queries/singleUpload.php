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


		$imgName1    = $_FILES["img1"]["name"];
		$imgTmpName1 = $_FILES["img1"]["tmp_name"];
		$imgSize1    = $_FILES["img1"]["size"];
		$imgError1   = $_FILES["img1"]["error"];
		$imgType1    = $_FILES["img1"]["type"];

		// Get Image Dimension
	    $fileinfo1 = @getimagesize($_FILES["img1"]["tmp_name"]);
	    $width1 = $fileinfo1[0];
	    $height1 = $fileinfo1[1];



		#----------------------
		# For first image	
		#----------------------

		$fileExtension1 = explode('.', $imgName1);
		$fileActualExtension1 = strtolower(end($fileExtension1));
		$allowed1 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension1, $allowed1)){
			if($imgError1 === 0){
				if($imgSize1 < 100000){
					if($width1 <= "1000" || $height1 <= "600"){
						move_uploaded_file($imgTmpName1,"../img/vehicleimages/".$imgName1);
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
			    '$vehicletitle', '$brand_id', '$vehicleoverview', '$plate_no', '$priceperday', '$fueltype', '$modelyear', '$seatingcapacity', '$imgName1', '1', '1', '1', '1', '1', '$airconditioner', '$powerdoorlocks', '$antilockbrakingsys', '$brakeassist', '$powersteering', '$driverairbag', '$passengerairbag', '$powerwindow', '$cdplayer', '$centrallocking', '$crashsensor', '$leatherseats'
    		)
    		")or die(mysqli_error());	
 		}
 		else
 		{ ?>
 			<script type="text/javascript"> alert('Fleet Already Exist'); </script>

  <?php } ?>
			<script>window.location="../fleet.php";</script>

?>
  