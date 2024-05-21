<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];


	// Database connection
	$conn = new mysqli('localhost','root','root','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender) values(?, ?, ?)");
		$stmt->bind_param("sss", $firstName, $lastName, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Information updated";
		$stmt->close();
		$conn->close();
	}
?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<html>
<br/>
<br/>
<input type="button" class="button_active" onclick="location.href=' ../profile.php';" value="Profile" />

</html>