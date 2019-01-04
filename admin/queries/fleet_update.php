
<?php
	
	include('../include/connection.php');

  	if (isset($_POST['submit']))
  	{
  		$id                 = htmlentities($_POST['id']);
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

		
	  
	  	mysqli_query($con, "UPDATE tblvehicles SET VehiclesTitle = '$vehicletitle', brand_id = '$brand_id', VehiclesOverview = '$vehicleoverview', PricePerDay = '$priceperday', FuelType = '$fueltype', ModelYear = '$modelyear', SeatingCapacity = '$seatingcapacity', AirConditioner = '$airconditioner', PowerDoorLocks = '$powerdoorlocks', AntiLockBrakingSystem = '$antilockbrakingsys', BrakeAssist = '$brakeassist', PowerSteering = '$powersteering', DriverAirbag = '$driverairbag', PassengerAirbag = '$passengerairbag', PowerWindows = '$powerwindow', CDPlayer = '$cdplayer', CentralLocking = '$centrallocking', CrashSensor = '$crashsensor', LeatherSeats = '$leatherseats' WHERE id = '$id' ")or die(mysqli_error()); ?>	
 		
 			<script type="text/javascript">
                alert('Successfully Update');
                window.location="../fleet.php";
            </script>

  
<?php } ?>
  