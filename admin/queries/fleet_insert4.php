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


		$vimage1 = $_FILES["img1"]["name"];
		$vimage2 = $_FILES["img2"]["name"];
		$vimage3 = $_FILES["img3"]["name"];
		$vimage4 = $_FILES["img4"]["name"];
		$vimage5 = $_FILES["img5"]["name"];
		$vimage6 = $_FILES["img6"]["name"];

		$imgTmpName1    = $_FILES["img1"]["tmp_name"];
		$imgTmpName2    = $_FILES["img2"]["tmp_name"];
		$imgTmpName3    = $_FILES["img3"]["tmp_name"];
		$imgTmpName4    = $_FILES["img4"]["tmp_name"];
		$imgTmpName5    = $_FILES["img5"]["tmp_name"];
		$imgTmpName6    = $_FILES["img6"]["tmp_name"];

		$imgSize1    = $_FILES["img1"]["size"];
		$imgSize2    = $_FILES["img2"]["size"];
		$imgSize3    = $_FILES["img3"]["size"];
		$imgSize4    = $_FILES["img4"]["size"];
		$imgSize5    = $_FILES["img5"]["size"];
		$imgSize6    = $_FILES["img6"]["size"];

		$imgError1    = $_FILES["img1"]["error"];
		$imgError2    = $_FILES["img2"]["error"];
		$imgError3    = $_FILES["img3"]["error"];
		$imgError4    = $_FILES["img4"]["error"];
		$imgError5    = $_FILES["img5"]["error"];
		$imgError6    = $_FILES["img6"]["error"];

		$imgType1    = $_FILES["img1"]["type"];
		$imgType2    = $_FILES["img2"]["type"];
		$imgType3    = $_FILES["img3"]["type"];
		$imgType4    = $_FILES["img4"]["type"];
		$imgType5    = $_FILES["img5"]["type"];
		$imgType6    = $_FILES["img6"]["type"];


		// Get Image Dimension
	    $fileinfo1 = @getimagesize($imgTmpName1, $imgTmpName2, $imgTmpName3, $imgTmpName4, $imgTmpName5, $imgTmpName6);
	    $width1 = $fileinfo1[0];
	    $height1 = $fileinfo1[1];


		$fileExtension1 = explode('.', $vimage1, $vimage2, $vimage3, $vimage4, $vimage5, $vimage6);
		$fileActualExtension1 = strtolower(end($fileExtension1));
		$allowed1 = array('jpeg', 'jpg', 'png', 'pdf');

		if(in_array($fileActualExtension1, $allowed1)){
			if($imgError1 && $imgError2 && $imgError3 && $imgError4 && $imgError5 && $imgError6 === 0){
				if($imgSize1 || $imgSize2 || $imgSize3 || $imgSize4 || $imgSize5 || $imgSize6 < 100000){
					if($width1 <= "1000" || $height1 <= "600"){				
						move_uploaded_file($imgTmpName1,"../img/vehicleimages/".$vimage1);
						move_uploaded_file($imgTmpName2,"../img/vehicleimages/".$vimage2);
						move_uploaded_file($imgTmpName3,"../img/vehicleimages/".$vimage3);
						move_uploaded_file($imgTmpName4,"../img/vehicleimages/".$vimage4);
						move_uploaded_file($imgTmpName5,"../img/vehicleimages/".$vimage5);
						move_uploaded_file($imgTmpName6,"../img/vehicleimages/".$vimage6);
					}
					else{
				        echo "Image dimension should be within 300 X 200.";
					}
				}
				else{
			        echo "Image size is too big. Maximum is 100MB";
				}
			}
			else{
		        echo "There was an error uploading your image.";
			}
		}
		else{
	        echo "You cannot upload files of this type. Only jpg, jpeg, png, pdf";
		}


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
  