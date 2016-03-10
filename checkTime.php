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


$courseName = $_GET['course'];
$credit = $_GET['credit'];
$val = $_GET['val'];


$UserID = $_SESSION['UserID'];




	$sql = "INSERT INTO test (CourseName,Time,Credit,UserID) VALUES('$courseName','$val','$credit','$UserID')";
	
if (mysqli_query($con, $sql)) {
	header("location:manageCourse.php");
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


</body>
</html>


