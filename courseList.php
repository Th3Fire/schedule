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
<style>
h1.center {
    text-align: center;
}	
	
</style>


	<title>รายวิชาเรียนของฉัน</title>
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
	<div id="header">
	 <?php include 'userdetail.php'; ?>
	</div>
	<div>
		<div class="pen-title">
  		<font size="8">รายวิชาทั้งหมด</font>
		</div>
	</div>


	<!-- grid  -->


<!-- content  -->

<div id="content">
			

	<div class="container" width="100%">
  
	
<?php
	$strUserId = $_SESSION['UserID'];
	$rowID;
	$totalCredit = 0;
	$totalCourse = 0;

	
	$sql = "SELECT * FROM test WHERE UserID = '".$strUserId."' ";

	$result=mysqli_query($con,$sql);
	$_result = $con->query($sql);
	
	

	
if ($_result->num_rows > 0) {

	while($row = $_result->fetch_assoc()) {

		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		echo "<tr><td>";

        echo "<div class='panel panel-warning' style='width: 100%'>";
        echo "<div class='panel-heading'><font size='4'>วิชา ". $row['CourseName']."</div>";
        $totalCourse++;
        $rowID = $row['id'];
		$totalCredit = $row['Credit'] + $totalCredit;
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
        }else{
        	$day = 'รูปแบบวันไม่ถูกต้อง';
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
			<button class='btDel' id='$rowID' >
			<span class='glyphicon glyphicon-trash'></span> ลบ
			</button>
       		</div>

       	 

    
        
			
       	";

        
        echo "</div>";
        echo "</td><tr>";
        
    }
}else
{
	echo "
	<center>

	<p><font size='6' color='red'>ไม่พบรายวิชาในฐานข้อมูล</font></p>
	</center>
	";
}


echo "
<center>

รวม $totalCourse วิชา $totalCredit หน่วยกิต
</center>"
?>


</div>
</div>



</div>

<!-- content  -->






	<div>
		<?php include 'sideBar.php'; ?>
	</div>
	<div id="footer">
		<?php include 'footer.php'; ?>
	</div>

</div>

<script>


$(document).on('click', '.btDel', function(e) {
        	var x = ($(this).attr('id'));
            e.preventDefault();

        bootbox.dialog({
  
  message: "คุณแน่ใจที่จะลบหรือไม่ ?",
 
  title: "แจ้งเตือน !!!",

  onEscape: function() {},
 
  show: true,
  size: 'small',

  backdrop: 'static',

  closeButton: true,
  
  animate: true,
 
  className: "my-modal",
 
  buttons: {
    
      success: {   
    
      label: "ยืนยัน",
      
      
      className: "btn-danger",
      
     
      callback: function() 
      {

      	$.ajax(
		  		{
				url : 'delete.php',
				data : 
				{
					id : x,
				
				},
			success : function(data) 
			{
				window.location.replace("courseList.php");
			}
		  });
      }
    },
    
   
    "ยกเลิก": {
      className: "btn-primary",
      callback: function() {}
    },
    

   
  }
});

        });

        
</script>

</body>
</html>