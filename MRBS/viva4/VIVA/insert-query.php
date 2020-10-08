<?php require_once('inc/connection.php'); ?> 
<?php 

$first_name = "Dilumi";
$last_name = "Wanasingha";
$phone_number = "077883456";
$email = "dilumiwanasingha@gmial.com";
$password = "dilu123";
$confirm_password = "dilu123";
$company = "";
$company_adderss = "";

/*$hashed_password = shal($password); //encrypted value

echo "Hashed password: {$hashed_password}";*/

$query = "INSERT INTO user (first_name,last_name,phone_number,email,password,confirm_password,company,company_adderss) VALUES ('{$first_name}','{$last_name}','{$phone_number}','{$email}','{$password}','{$confirm_password}','{$company}','{$company_adderss}')"; 

$result = mysqli_query($connection, $query); //function

if ($result)
{
	echo "1 Record added ";
}

else 
{
	echo "Database Query failed !";
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Insert Query</title>
</head>
<body>
	</body>
	</html>
	<?php mysqli_close($connection); ?>