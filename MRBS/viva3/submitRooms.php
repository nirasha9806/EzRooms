<?php
	include_once 'config.php';
?>

<?php

$code=$_POST ["code"];
$owner = $_POST ["owner"];
$type = $_POST ["type"];
$location = $_POST ["location"];
$price = $_POST ["price"];
$phone = $_POST["phone"];

$sql = "INSERT INTO rooms(code,owner,type,location,price,phone) VALUES('$code','$owner','$type','$location','$price','$phone')";


if(mysqli_query($conn,$sql)){
	header("location:displayRooms.php");
}
else{
	echo "<script>('Try Again')</script>";
}
//close connection
mysqli_close($conn);
?>