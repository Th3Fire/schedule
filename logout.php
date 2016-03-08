<<!DOCTYPE html>
<html>
<head>
	<title>Logout Seccessfull !</title>
</head>
<body>

<?php
	session_start();

	require_once("connect.php");

	//*** Update Status
	$sql = "UPDATE member SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($con,$sql);

	session_destroy();
	header("location:login.php");
?>
</body>
</html>