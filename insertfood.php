 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fooditem";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$able_date = $_POST['able_date'];

	$sql = "INSERT INTO foods (id,name,price,available_date)
	VALUES ('$id','$name','$price','$able_date')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 