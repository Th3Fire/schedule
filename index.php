<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">
	<title>ระบบจัดตารางเรียน</title>
</head>
<body>
<?php

session_start();
require_once("connect.php");

if(!isset($_SESSION['UserID']))
{
header ("Location: login.php");
exit();
}


?>


<div id="wrapper">
	<div id ="header">
	 <?php include 'userdetail.php'; ?>
	</div>
	<div>
		<div class="pen-title">
  		<h1>Home</h1>
		</div>
	</div>
	<div>
		<?php include 'sideBar.php'; ?>
	</div>
	<div id ="footer">
		<?php include 'footer.php'; ?>
	</div>
	
</div>

</body>
</html>