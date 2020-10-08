<?php
include_once 'config.php';
?>

<?php
//escape user inputs for security
$code=$_POST["code"];
$owner=$_POST["owner"];
$type=$_POST["type"];
$location=$_POST["location"];
$price=$_POST["price"];
$phone=$_POST["phone"];

//echo $_GET('id');
//attempt update query execution
 $sql="UPDATE rooms set code='$code',owner='$owner', type='$type', location='$location', price='$price' , phone='$phone' WHERE code = '$code' ";

if(mysqli_query($conn,$sql)){
	echo "<script> alert('Records added successfull!!!')</script>";
	header("location:displayRooms.php");
}
else{
	echo "<script>alert('ERROR: could not able to execute $sql.')</script>";
}

//close connection
mysqli_close($conn);
?>