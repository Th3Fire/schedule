<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/reset.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<link href="metro-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.min.js"></script>


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
<!-- content  -->

<!-- content  -->

				<!-- breadcrumbs -->
<div>
		<table width="100%">


				<center>
				<td  width="100%" height="100%">

				<div class="container">
  
	
					<?php
	$strUserId = $_SESSION['UserID'];
	
	$sql = "SELECT * FROM test WHERE UserID = '".$strUserId."' ";
	$result = $con->query($sql);
	

	
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {

		echo "<div class='container'>";
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'><font size='4'>วิชา   ". $row['CourseName']."</font></div>";

		
		$data =  $row['Time'];
		$strs = explode("*", $data);
		$_color = '';
		$_colorTime = 'color=\'white\'>';
		$_dd = '\"';
		foreach($strs as $str) {

        $day = substr($str, 0, 2);
        if($day == 'Mo'){
        	$day = 'วันจันทร์';
        	$_color = 'color=\'yellow\'>';
        }else if($day == 'Tu'){
        	$day = 'วันอังคาร';
        	$_color = 'color=\'pink\'>';
        }else if($day == 'We'){
        	$day = 'วันพุธ';
        	$_color = 'color=\'green\'>';
        }else if($day == 'Th'){
        	$day = 'วันพฤหัสบดี';
        	$_color = 'color=\'orange\'>';
        }else if($day == 'Fr'){
        	$day = 'วันศุกร์';
        	$_color = 'color=\'blue\'>';
        }else if($day == 'Sa'){
        	$day = 'วันเสาร์';
        	$_color = 'color=\'purple\'>';
        }else if($day == 'Su'){
        	$day = 'วันอาทิตย์';
        	$_color = 'color=\'red\'>';
        }
       
        $timeStr = substr($str, 2, 12);

        $times = explode("-", $timeStr);
        echo " <div class='panel-body'>";
        
        echo "<font size='4' ".$_color."   ".$day."</font>";
        echo "<br>";
        echo "<font size='4' color='white'>         เวลาเรียน </font>";
        echo "<font size='4' color='white'> ".$timeStr."</font>";
        echo "</div>";
        
       
}
        
        
        echo "</div>";
        echo "</div>";
        
    }
}else
{
	echo " 0 results";
}
?>
					

			
					
					
					</td>
					</center>
		
		</table>
	
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