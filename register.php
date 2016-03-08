
<?php
	session_start();

	require_once("connect.php");


	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	$name = $_POST['txtName'];
	$sql = "INSERT INTO member (Username,Password,Name,LoginStatus,LastUpdate) VALUES('$username','$password','$name',0,'0000-00-00 00:00:00')";
	
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

</body>
</html>