<?php
// create connection
$con = mysqli_connect("localhost","root","","carrental2");

//check connection
if (!$con)
  {
  die("Connection error: " . mysqli_connect_errno());
  }

?>