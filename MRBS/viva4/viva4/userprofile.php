<!DOCTYPE html>
<html>

	<head>
	
		<title> User Profile - EzRooms </title>
		<link rel="stylesheet" type="text/css" href="css/style3.css">
		<script src="js/script3.js"> </script>
		
	</head>
	
	<body>
	
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "images/Logo1.png" class = "img1" alt = "Logo1"></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Logout</a></li>
				<li class = "menu2"><a class = "active1" href="userprofile.html">User Profile</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/book a tour.html">Book a Tour</a></li>
				<li class = "menu2"><a class = "menu4" href="../../viva5/contact us/contact/Get in touch.html">Contact Us</a></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva2/FAQ/help.html">Help</a></li>
				<li class = "menu2"><a class = "menu4"  href="../../viva1/home-page.html">Home</a></li>
			
			</ul>
		
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
  <img src="images/img1.jpg" style="width:100%" "position:center">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="images/img2.png" style="width:100%" "position:center">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="images/img3.jpg" style="width:100%" "position:center">
  <div class="text">Caption Three</div>
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

	<table class="class5">
		<tr>
			<th class="f1">Number</th>
			<th class="f1" >Date</th>
			<th class="f1">Time</th>
			<th class="f1" >Venue</th>
			<th class="f1" >Description</th>
		</tr>

	<?php
		include_once "config.php";
	
	?>
	<?php
		$sql="select * from newbookings";
		$result=$conn->query($sql);
		if($result->num_rows>0){
		//output data of each row
		while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["id"]."</td>";	
		echo "<td>".$row["date"]."</td>";
		echo "<td>".$row["time"]."</td>";
		echo "<td>".$row["venue"]."</td>";
		echo "<td>".$row["description"]."</td>";
		//echo "<td><button type='submit'><a href='DeleteRecord.php?id=$code'>Delete</a></button></td></tr>";
		}
		}
		else
		
		{
			echo "0 results";
		
		}
		echo"</table>";
		$conn->close();
	 ?>
		

	</table>
	<br>
	
	<button class="button2"> <a href="newbooking.html">New Bookings</a></button>
	<button class="button2"> <a href="../../viva2/booking history/bookinghistory.php">Bookings History</a></button>
	<button class="button3"> <a href="../../viva2/invoice/invoice.php">Invoice</a></button>

	</div>
	
<br><br><br><br><br>

			<!--- START OF FOOTER --->
		<footer>
			<div class = "footer">
				<br>
				
				<img src="images/Logo3.png" class="img3" alt="Logo4">
				<img src="images/Logo4.png" class="img4" alt="Logo5">
				<img src="images/Logo5.png" class="img5" alt="Logo6">
				<img src="images/Logo6.png" class="img6" alt="Logo7">
				<img src="images/Logo7.png" class="img7" alt="Logo8">
				<img src="images/Logo8.png" class="img8" alt="Logo9">
				<img src = "images/Logo2.png" class = "img2" alt = "Logo1">
				
				<p class="p1"> All rights reserved @2019,EZ rooms team</p>
			</div>
		</footer>
		<!--- END OF FOOTER --->
	
	</body>

</html>