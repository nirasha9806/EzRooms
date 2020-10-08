<?php 

	$connection = mysqli_connect( 'localhost' , 'root' , '' , 'bookings' );
	
	if(mysqli_connect_errno()) {
		die('Database connection failed'.mysqli_connect_error());
		
	} 
	
	

?>