<?php

	include('../include/connection.php');

	if (isset($_POST['update']))
	{
		$brand_id  = htmlentities($_POST['brand_id']);
		$BrandName = htmlentities($_POST['brand_name']);

		mysqli_query($con, "UPDATE tblbrands SET BrandName = '$BrandName' WHERE brand_id = '$brand_id'")
		or die(mysqli_error()); ?>
		
		<script>window.location="../brand.php";</script>
		<?php 
	} 
?>