<?php
	include('session.php');

	if(!isset($_SESSION['login_user'])){
		header("location: IYANVGO");
	}
	
	
	$host = "ibcasserver.mysql.database.azure.com";
    $username = "ibcasvismay@ibcasserver";
    $password = "jointechsavvyyouth1!";
	$db_name = "users";


    $conn = mysqli_init();
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

    if (mysqli_connect_errno()) {
      	die("Failed to connect to MYSQL: ".mysqli_connect_error());
    }
		
    $currentUsername = $_SESSION['login_user'];
    $sql = "SELECT access FROM userInfo WHERE name = '$currentUsername'";
	$result = $conn->query($sql);

	while($row = mysqli_fetch_array($result)){
	    $bankAccess[] = $row['access'];
	}
	$bankAccessString = implode(",", $bankAccess);
	$bankArray = explode(',', $bankAccessString);

    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interlake Cricket Club | Secret Page :)</title>
</head>

<body>

	<a href="logout">Destroy</a>
	
	<?php
		$host = "ibcasserver.mysql.database.azure.com";
		$username = "ibcasvismay@ibcasserver";
		$password = "jointechsavvyyouth1!";
		$db_name = "cricket";
		
		$conn = mysqli_init();
		mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

		$value = $_POST['delete'];
		if(!empty($value)){
			$sql = "DELETE FROM days WHERE id = $value";
			$conn->query($sql);
		}
		else{
			$sql = "SELECT * FROM days LIMIT 4";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				echo "<form action = \"secretPage\" method=\"post\">";
				while ($row = $result->fetch_assoc()) {
					echo "
						<input type=\"submit\" name = \"delete\" value = \"". $row['id'] ."\">					
					";
				}
				echo "</form>";
			}
		}
	?>

</body>
</html>