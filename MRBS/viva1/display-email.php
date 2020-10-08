<!DOCTYPE html>
<html>

	<head>
	
		<title> Home - EzRooms </title>
		<link rel="stylesheet" type="text/css" href="CSS/Style1.css">
		<script src="JS/Script1.js"> </script>

	</head>
	
	<body class = "body1">
	
		<!---START: HEADER--->
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3"><img src = "IMG/Logo2.png" class = "img1" alt = "Logo1"></li>
			
			</ul>
		
		</div>
		<!---END: HEADER--->
		
		<!---START: CONTENT--->
		
		<table border = "1" >
		<tr>
			<th>Visitor ID</th>
			<th>E- Mail</th>
		</tr>

		<?php
			include_once "config.php";
		?>
		
		<?php
			$sql="select * from visitor";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				
			//output data of each row
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["visitorId"]."</td>";	
				echo "<td>".$row["email"]."</td></tr>";
				}
			}
			else
		
			{
				echo "0 results";
		
			}
			
			echo"</table>";
			
			$conn->close();
		?>

		<!---END: CONTENT--->
		
		<!---START: FOOTER--->
		<div>
		<footer>
			<div class = "footer">
				<br>
				<img src="IMG/Logo3.png" class="img3" alt="Logo4">
				<img src="IMG/Logo4.png" class="img4" alphpt="Logo5">
				<img src="IMG/Logo5.png" class="img5" alt="Logo6">
				<img src="IMG/Logo6.png" class="img6" alt="Logo7">
				<img src="IMG/Logo7.png" class="img7" alt="Logo8">
				<img src="IMG/Logo8.png" class="img8" alt="Logo9">
				<img src = "IMG/Logo2.png" class = "img2" alt = "Logo1"><br>
				<p class="p1"> All rights reserved @2019,EZ rooms team</p>
			</div>
		</footer>
		</div>

		<!---END: FOOTER--->
		
	</body>

</html>