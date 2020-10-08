<?php include_once('inc/connection.php'); ?>

<?php

	$name = $_POST['Name'];
	$phoneno = $_POST['phone'];
	$city = $_POST['city'];
	$date = $_POST['date'];
	$email = $_POST['email'];
	$product = $_POST['product'];
	$comment = $_POST['comment'];

	
	
	$query = "INSERT INTO tour(name , phone_no , city , date_time , email , product , comment) VALUES( '{$name}' , '{$phoneno}' , '{$city}' , '{$date}' , '{$email}' , '{$product}' , '{$comment}' )";
	
	$result = mysqli_query( $connection , $query );

	if($result) {


		echo "<script>alert('Booking successfull!');</script>";

		header('location:book a tour.html');

	}

	
	
?>

<?php mysqli_close($connection); ?>