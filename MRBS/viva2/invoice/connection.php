<?php
 error_reporting (E_ALL ^ E_NOTICE); 
$server = "localhost";
$UN = "root";
$PW = "";
$DBname="bookings";
$con =new mysqli("$server","$UN","$PW","$DBname");

if($con->connect_error)
{
    echo("connection error".$con->connect_error);
}

?>