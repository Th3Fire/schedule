<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/reset.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link href="metro-icons.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 


<script type="text/javascript" src="js/index.js"></script>

<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/bootbox.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>



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


	<!-- grid  -->


<!-- content  -->

<div>
				<td  width="100%" height="100%">

				<div class="container">
  
	
					<?php
	$strUserId = $_SESSION['UserID'];

	
	$sql = "SELECT * FROM test WHERE UserID = '".$strUserId."' ";

	$result=mysqli_query($con,$sql);
	$_result = $con->query($sql);
	
	

	
if ($_result->num_rows > 0) {

	while($row = $_result->fetch_assoc()) {

		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		echo "<tr><td>";

        echo "<div class='panel panel-warning' style='width: 100%'>";
        echo "<div class='panel-heading'><font size='4'>วิชา ". $row['CourseName']."</div>";

		
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
        
        echo "<font size='4' color='red'>  ".$day."</font>";
        echo "<br>";
        echo "<font size='4' color='blue'>         เวลาเรียน </font>";
        echo "<font size='4' color='blue'> ".$timeStr."</font>";
        echo "</div>";

        
       
}
       	
       	echo "
       	<div style='text-align: right'>
       	<button  class='btDel' onclick='delCourse($row[id])'>
						<span class='glyphicon glyphicon-remove'></span> ลบ
					</button> 
		</div>
					
       	";
        echo "</div>";
        echo "</td><tr>";
        
    }
}else
{
	echo "ไม่มีข้อมูลของท่านในฐานข้อมูล";
}
?>
</td>

</div>



</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- content  -->

	<div>
		<?php include 'sideBar.php'; ?>
	</div>
	<div>
		<?php include 'footer.php'; ?>
	</div>

</div>

<script>
    
 $('#myModal').on('click', '.btn-ok', function(e) {
 	
  	 

  	
  	 
  	 
  	
  	$.ajax({
			url : 'delete.php',
			data : {
				id : , sStr
				
			},
			success : function(data) {
				

				
			}
		});

  
  });


 

 


// Bind to modal opening to set necessary data properties to be used to make request

    
</script>
</body>
</html>