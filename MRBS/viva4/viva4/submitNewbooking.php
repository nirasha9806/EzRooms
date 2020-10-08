<?php
	include_once 'config.php';
?>

<?php

$id=$_POST ["id"];
$date = $_POST ["date"];
$time = $_POST ["time"];
$venue = $_POST ["venue"];
$description = $_POST["description"];

$sql = "INSERT INTO newbookings(id,date,time,venue,description) VALUES('$id','$date','$time','$venue','$description')";


if(mysqli_query($conn,$sql)){
	header("location:userprofile.php");
}
else{
	echo "<script>('Try Again')</script>";
}
//close connection
mysqli_close($conn);
?>