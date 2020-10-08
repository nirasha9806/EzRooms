<?php
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM rooms WHERE CONCAT('code', 'owner', 'location', 'price') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	}
	else
	{
		$query="SELECT* FROM rooms";
		$search_result = filterTable($query);
	}
	function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "newrooms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Meeting Rooms Search</title>
	</head>
	
	<body>
	
		<form action="search.php" method="post" >
		<input type="text" name="valueToSearch" placeholder="Value to search">
		<input type="submit" name="search" value="filter">
		
		<table>
		<tr>
			<th>Room Code</th>
			<th>Owner Company</th>
			<th>Venue</th>
			<th>Price</th>
		</tr>
		 <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['code'];?></td>
                    <td><?php echo $row['owner'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['price'];?></td>
                </tr>
                <?php endwhile;?>
		
		</table>
		</form>
		
	</body>
</html>