<?php
	
	include('../include/connection.php');

  	if (isset($_POST['submit']))
  	{
	  	$BrandName  = htmlentities($_POST['brand_name']);
	  
	  	$error_course=mysqli_query($con, "SELECT * FROM tblbrands WHERE BrandName = '$BrandName'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_course);

 		if($count != 1)
 		{
 			mysqli_query($con, "INSERT INTO tblbrands (BrandName) values ('$BrandName')")or die(mysqli_error());		
 		}
 		else
 		{ 
 			?>
 			<script type="text/javascript">alert('Brand Already Exist');</script>
 			<?php
   		} 
   			?>
			<script>window.location="../brand.php";</script>
			<?php
	}
?>
  