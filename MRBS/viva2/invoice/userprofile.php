<!DOCTYPE html>
<html>

	<head>
	
		<title> User Profile - EzRooms </title>
		<link rel="stylesheet" type="text/css" href="CSS/style3.css">
		<script src="JS/script3.js"> </script>
		
	</head>
	
	<body>
		<!--- START OF HEADER --->
	
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "IMG/Logo2.png" class = "img1" alt = "Logo1"></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Logout</a></li>
				<li class = "menu2"><a class = "active1" href="userprofile.php">User Profile</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/book a tour.html">Book a Tour</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/Get in touch.html">Contact Us</a></li>
				<li class = "menu2"><a class = "menu4"  href="../FAQ/help.html">Help</a></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Home</a></li>
			
			</ul>
			<!--- END OF HEADER --->
		
		</div>
	<br><br><br>
	
	<center>
	<h2 class="class2"> Here's your account </h2>
	</center>

	<br>
	<div class="class3">
	<br>
	
	
	<div class="slideshow-container">

<div class="mySlides fade">
  <img src="IMG/img1.jpg" style="width:100%" "position:center">  
</div>

<div class="mySlides fade">
  <img src="IMG/img2.png" style="width:100%" "position:center"> 
</div>

<div class="mySlides fade">
  <img src="IMG/img3.jpg" style="width:100%" "position:center">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

		
		

	<h2 class= "class4">Current Bookings</h2>
	<?php
	require_once 'connection.php';

		 $sql = "SELECT firstname ,lastname,company,email   FROM customer ";
		 $result = $con->query($sql);
		 echo"<table><tr><th>firstname</th><th>lastname</th><th>company</th><th>email</th></tr>";
	 
		 while($array = $result->fetch_assoc())
		 {
		 echo "<tr> <td>".$array["firstname"]."</td><td>". $array["lastname"]."</td><td>".$array["company"]."</td><td>". $array["email"]."</td></tr>";
		 }
		 echo"</table>"; 
	?>
	<br>
	
	<button class="button2"> <a href="newbooking.html">New Bookings</a></button>
	<button class="button2"> <a href="booking history.html">Booking History</a></button>
	</div>
	
<br><br><br><br><br>

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