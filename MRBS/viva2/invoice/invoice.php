
<!DOCTYPE html>
<html>
	<head>

	<?php

	require_once 'connection.php';
			$u = "hello";	
	$UN = $_POST["userName"];
	$PW = $_POST["password"];
	$submit = $_POST["submit"];
	if($_POST["submit"])
	{
		$emselect = "SELECT email,password FROM customer";
		$result = $con->query($emselect);

		while($array = $result->fetch_assoc())
		{
			if( $UN == $array["email"] &&  $PW == $array["password"])
			{
					header("location:userprofile.php");
			}
		}
		header("location:invoice.php");
		echo("Username Or Password Error");
	}

	

?>
	
		<title> Invoice - EzRooms </title>
		<link rel="stylesheet" type="text/css" href="CSS/invoice.css">
		<script src="JS/Script4.js"> </script>
	
	</head>
	
	<body>

		<body background = "IMG/Bg1.jpg">

		<!--- START OF HEADER --->
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "IMG/Logo1.png" class = "img1" id = "logo1"  alt = "Logo1"></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Logout</a></li>
				<li class = "menu2"><a class = "active1" href="userprofile.php">User Profile</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/book a tour.html">Book a Tour</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/Get in touch.html">Contact Us</a></li>
				<li class = "menu2"><a class = "menu4"  href="../FAQ/help.html">Help</a></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Home</a></li>
			
			</ul>
		
		</div>
		<!--- END OF HEADER --->
		
		<body>

	<br>
		<p class = "p1"> Here's your <font color = "black">Invoice</font> Now!</p>
	</br>
		<div class = "div12">
			<? php  
			<table>
				<tr>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<td colspan = "3">	
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="IMG/Logo2.jpg" alt="Logo image" width="150" height="40"> </td>

				</tr>
			<!--div class = "div98"-->
				<tr>
					<td>
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						No.10,Sri Lanka Padanama Mw,<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Independence Square,<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Colombo 7,<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Sri Lanka.<br>
						<b><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						+94112345675<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						+94712132123
						</b>						
					</td>
										<td>
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Bill to:<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					
					<?php
					$sql = "SELECT firstname ,lastname  FROM customer WHERE email = '$UN'";
	$result = $con->query($sql);

	while($array = $result->fetch_assoc())
	{
		echo $array["firstname"]. $array["lastname"];
	}
					?>
						
						
						
					
					<br><br>
					</td>
										<td>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Invoice Date:<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text">,<br>
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Invoice No:<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text">,<br>
						<!--_________________________,<br> -->
					</td>
				</tr>
				<tr>
				<br><br>

				
					<td colspan = "3">
						<br><br>
						<hr class = "horison1">
						<br>

						<div class = "div15"> Service 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Amount(Rs.)
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<br>
					<p class = "dotted1"> </p>

					<br>
					<div class = "p15"> Basic charge 
					<input type = "text" class = "txt1">
					</div>

					<br>
					<hr class = "dotted1"> </p>
					</td>
				</tr>
				<tr>
					<td colspan="3">	
					<br>
					<input type = "text" class = "txt3">

					<input type = "text" class = "txt2">
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<br><br>
					<input type = "text" class = "txt3">

					<input type = "text" class = "txt2">
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<br><br>
					<input type = "text" class = "txt3">

					<input type = "text" class = "txt2">
					</td>
				</tr>
			</table> "?>

		</div>
		<input type= "submit" value="Download" class = "download" onclick="myFunction()">
		
		<div id="msg">Invoice is downloaded check your device </div>
		
		<!--- START OF SPACE FOR CONTENT ---
		<div>
			<h1> Invoice </h1>
			<button class = "div2" onclick = "func1('user')"> Finish </button>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		 --- END OF SPACE FOR CONTENT --->
		 <script>

				
				function myFunction()
				{
					var x = document.getElementById("msg");
					x.className = "show";

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
				
			</div>
		</footer>
		<!--- END OF FOOTER --->
	
	</body>

</html>

