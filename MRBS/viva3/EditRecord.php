<!DOCTYPE html>
<html>

	<head>
	
		<title> Edit Rooms- EzRooms </title>
		<link rel="stylesheet" type="text/css" href="css/style3.css">
		<script src="js/script3.js"> </script>
	
	</head>
	
	<body>
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "images/Logo1.png" class = "img1" alt = "Logo1"></li>
				<li class = "menu2"><a class = ""  href="../viva1/index.html">Add Rooms</a></li>
				<li class = "menu2"><a class = "menu4" href="userprofile.html">My site</a></li>
				
			
			</ul>
		
		</div>
		<br><br><br><br>
		
		
		<?php
	include_once "config.php";
	
	?>
	<?php
	$code = $_GET['code'];
	
	$sql="select * from rooms where code=$code";
		$result=$conn->query($sql);
		if($result->num_rows>0){
		//output data of each row
		while($row=$result->fetch_assoc()){
		
		$code = $row["code"];
		$owner = $row["owner"];
		$type = $row["type"];
		$location = $row["location"];
		$price = $row["price"];
		$phone = $row["phone"];
	}
	}
	?>
		
		<center>
		<div class="div2">
		
			<br><br>
			<form action="submitUpdates.php" method="post">
			<input type="text" name="code" placeholder="Room code">
			<input type="text" name="owner" placeholder="Owner Company"><br><br>
			
			<input type="text" name="type" placeholder="Room Type">
			<input type="text" name="location" placeholder="Location"><br><br>
			
			<input type="number" name="price" placeholder="Price">
			<input type="number" name="phone" placeholder="Contact number"><br><br>
			
			<input type="submit" value="Edit Room">
	
			</form>
		
		</div>
		</center>
		
		
		
		
		
		
		
		<br><br><br><br><br><br><br><br>

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