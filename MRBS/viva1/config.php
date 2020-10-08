<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="newrooms";
	
	
	//create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection faild:".$conn -> connect_error);
	}
	echo "<script>('Connected successfully')</script>";
?>