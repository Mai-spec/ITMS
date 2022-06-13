<?php
session_start();
	
	include("Connection.php");

	$sql = "DELETE from booking WHERE booking_id=booking_id";
if (mysqli_query($con, $sql)) {
 
 	$message = "Booking deleted succesfully!";
 	echo "<script type='text/javascript'> alert('$message');</script>";

}

mysqli_close($con);

header("Location:bookinglist.php");


?>