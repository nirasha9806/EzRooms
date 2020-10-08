<?php
	include_once 'config.php';
?>

<?php

$id=$_POST ["id"];
$date = $_POST ["date"];
$venue = $_POST ["venue"];

$sql = "INSERT INTO history(id,date,venue) VALUES('$id','$date','$venue')";


if(mysqli_query($conn,$sql)){
	header("location:bookinghistory.php");
}
else{
	echo "<script>('Try Again')</script>";
}
//close connection
mysqli_close($conn);
?>