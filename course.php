<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">
	<title>รายวิาชาเรียนของฉัน</title>
</head>
<body>
<?php

session_start();
require_once("connect.php");

if(!isset($_SESSION['UserID']))
{
header("location:login.php");
exit();
}

?>
<div>
	<div>
	 	<?php include 'userdetail.php'; ?>
	</div>
	<div>
		<div class="pen-title">
  		<h1>รายวิชาทั้งหมด</h1>
		</div>
	</div>
<!--  show data  -->
	<div>
<?php
	$strUserId = $_SESSION['UserID'];
	echo "            ".$strUserId;
	$sql = "SELECT * FROM course WHERE UserID = '".$strUserId."' ";
	$result = $con->query($sql);
	
	
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["CourseID"]. " Course Name: " . $row["CourseName"]." Time start: " . $row["Time_start"].  " Time end: " . $row["Time_end"]. " Credit: " . $row["Credit"]. " UserID: " . $row["UserID"]. " Day: " . $row["Day"]."<br>";
    }
}else
{
	echo " 0 results";
}
?>
	</div>

	<div>
	
		<?php include 'sideBar.php'; ?>
	
	</div>
	<div>
		<?php include 'footer.php'; ?>
	</div>
	
</div>

</body>
</html>