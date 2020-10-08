<!DOCTYPE html>
<html>

	<head>
	
		<title> Available Rooms- EzRooms </title>
		<link rel="stylesheet" type="text/css" href="css/style3.css">
	
	</head>
	
	<body>
		<div class = "header">
		
			<ul class = "menu1">
			
				<li class = "menu3">Admin</li>
				<li class = "menu2"><a class = "menu4" href="adminlogin.html">Logout</a></li>
				<li class = "menu2"><a class = "active1"  href="../viva1/index.html">My Site</a></li>
				
			</ul>
		
		</div>
		<br>
		
		<center>
		<h2 class="class1">Available Rooms</h2>
		</center>
		
		<button type='submit'><a href='addRooms.html'>Add Rooms</a></button><br>
	
		
		<div class="div1">
		<table width="100%" id="table1">
			<tr>
				<th>Room Code</th>
				<th>Owner Company</th>
				<th>Room Type</th>
				<th>Location</th>
				<th>Price</th>
				<th>Phone</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
				include_once "config.php";
			
			?>
			<?php
				$sql="select * from rooms";
				$result=$conn->query($sql);
				if($result->num_rows>0){
				//output data of each row
				while($row=$result->fetch_assoc()){
				$code=$row["code"];
				echo "<tr><td>".$row["code"]."</td>";	
				echo "<td>".$row["owner"]."</td>";
				echo "<td>".$row["type"]."</td>";
				echo "<td>".$row["location"]."</td>";
				echo "<td>".$row["price"]."</td>";
				echo "<td>".$row["phone"]."</td>";
				echo "<td><button type='submit'><a href='EditRecord.php?code=$code'>Edit</a></button></td>";
				echo "<td><button type='submit'><a href='DeleteRecord.php?code=$code'>Delete</a></button></td></tr>";
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
		</div>
	
	</body>

</html>