<?php require_once('inc/connection.php'); ?>
<?php
//check for form submission
if(isset($_POST['submit'])){

$errors = array();

//save username and password into variables
$email = $_POST['email'];
$password = $_POST['password'];

//prepare database query
$query = "SELECT * FROM user
			WHERE email = '{$email}'
			LIMIT 1"; //limit 1 = We only use one person
			
 $result_set = mysqli_query($connection, $query);
 if ($result_set){

 	//query succesfull
 	if (mysqli_num_rows($result_set) == 1){
 		//valid user found
 		//redirect to users.php
 		header('Location: users.php');
 	}else {
 		//user name and password invalid
 		$errors[] = 'Invalid Username / password';
 	}
 	}else {
 		$errors[] = 'Database query Failed!';//if not, displat the error
 	}
 }
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title> Login - EzRooms  </title>
		<link rel="stylesheet" type="text/css" href="CSS/login.css">
		<script src="JS/Script4.js"> </script>
		
	</head>
	
		<!--- START OF HEADER --->
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "IMG/Logo2.png" class = "img1" alt = "Logo1"></li>
				<li class = "menu2"><a class = "menu4"  href="../viva1/index.html">Logout</a></li>
				<li class = "menu2"><a class = "active1" href="userprofile.html">User Profile</a></li>
				<li class = "menu2"><a class = "menu4" href="../viva5/contactus2.html">Contact Us</a></li>
				<li class = "menu2"><a class = "menu4"  href="../viva5/aboutus2.html">About Us</a></li>
				<li class = "menu2"><a class = "menu4"  href="../viva1/index2.html">Home</a></li>
			
			</ul>
		
		</div>
		<!--- END OF HEADER --->
		
		
		
		
		
		<!--- START OF SPACE FOR CONTENT --->
		<body>
			<b>
			<p class = "p12"> Here's your <font color = "black">Login</font> Now!</p>
			</b>

				<div class = "container">
				<form name = "index.php" onsubmit = "return validate()" method = "post">

						<br>

						
						<center><b><h2>Log In </b></h2></center>
						<img src="IMG/7.png" class="person-logo">

						<b>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<font color = "white" > Username </font><br><br>

						<center>
						<input type= "text" class = "form_input" placeholder="Enter your username" id = "uname" required> <br><br>
						</center><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<font color = "white"> Password </font> <br><br>

						<center>
						<input type= "password" class = "form_input" placeholder="Enter your password" id = "psw" required> <br><br>
						</center>

						<center>
							<!--button id="login" onclick="login()" class="login">Log In</button-->
						<button type= "submit" class = "login" onclick = "login()">Log In</button>
						</a><br> 
						</center><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<input type= "checkbox" value="remember me" checked > 
						<font class = "p22"> Remember me </font><br><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<a href="re.html"> Reset password </a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="for.html"> Forgot password </a>

						</b>
						
				</div>

				<br>
				<b>
					<div class = "div17"> Don't have account? 
					<a href="register.html" style ="font-size :15px;">&nbsp;Sign Up </a>
					</div>
				</b>


	<!--- END OF SPACE FOR CONTENT --->
		
			<script>
				function validateForm()
				{
					var username = document.forms["myForm"]["username"].value;

					 if(username == null || username == "")
					 {

					 	alert("username is required");
					 	return false;
					 }
				}

				function validateForm()
				{
					var password = document.forms["myForm"]["password"].value;

					if (password == null || password == "")
					{

						alert("Password is required");
						return false;
					}
				}
			
			</script>
		
		
		
		<!--- START OF FOOTER --->
		<footer>
			<div class = "footer">
				<br>
				<img src="IMG/Logo3.png" class="img3" alt="Logo4">
				<img src="IMG/Logo4.png" class="img4" alt="Logo5">
				<img src="IMG/Logo5.png" class="img5" alt="Logo6">
				<img src="IMG/Logo6.png" class="img6" alt="Logo7">
				<img src="IMG/Logo7.png" class="img7" alt="Logo8">
				<img src="IMG/Logo8.png" class="img8" alt="Logo9">
				<img src = "IMG/Logo2.png" class = "img2" alt = "Logo1"><br>
				<p class="p1"> All rights reserved @2019,EZ rooms team</p>
			</div>
		</footer>
		<!--- END OF FOOTER --->
		
	</body>

</html>

	<?php mysqli_close($connection); ?>