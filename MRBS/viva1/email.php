<?php
	include 'config.php';


	##$visitorId =$_POST['visitorId'];
	
	$email = $_POST['email'];
	
	
	$sql = "insert into visitor(visitorId,email) values('',$email)";
	
	if(mysqli_query($conn,$sql)){
		header("location:display-email.php");
		echo "<script>alert('You will recieve our e-mails now on')</script>";
	}
	else{
		echo "<script>alert('Try Again')</script>";
	}
	//close connection
	mysqli_close($conn);

?>