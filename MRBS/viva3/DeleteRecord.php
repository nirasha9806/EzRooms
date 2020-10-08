<?php
include_once 'config.php';
?>

<?php


$sql = "DELETE FROM rooms WHERE code=1001";

if (mysqli_query($conn, $sql)) {
    echo "<script> ('Records deleted successfull!!!')</script>";
	header("location:displayRooms.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 