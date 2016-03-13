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

 <!-- header -->
<div>
<?php include 'userdetail.php'; ?>
</div>
<!-- end header -->

<!-- head -->
<div>
<div class="pen-title">
<font size="8">Schedul System ระบบจัดตารางเรียน</font>
</div>
</div>
<!-- end head -->

<!-- content  -->
<div class="main">

</div>
<!-- content  -->

<!-- side bar -->
<div >
<?php include 'sideBar.php'; ?>
</div>
<!--end side bar -->

<!--footer -->
<div class="footer">
<?php include 'footer.php'; ?>
</div>
<!--end footer -->




</body>
</html>