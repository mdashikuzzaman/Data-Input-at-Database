 <?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fooditem";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM foods";
	$result = $conn->query($sql);

?> 



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>FoodsItem</title>
</head>
<body>
	<table border="1" style="width:100%" >
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Available_date</th>
		</thead>
		<tbody>
			<?php
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo'<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['price'].'</td>';
							echo '<td>'.$row['available_date'].'</td>';
						echo'</tr>';
					}
				}else {
					echo "No Entry Found!";
				}
			?>
		</tbody>
		
</body>
</html>