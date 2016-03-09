<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<body>


<?php

	session_start();

	require_once("connect.php");


$courseName = $_GET['name'];

$str = $_GET['name'];
$val = explode(",",$str);
$UserID = $_SESSION['UserID'];




	$sql = "INSERT INTO test (CourseName,Time,Credit,UserID) VALUES('$val[0]','$val[2]','$val[1]','$UserID')";
	
if (mysqli_query($con, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


</body>
</html>


