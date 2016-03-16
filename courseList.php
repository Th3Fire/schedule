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

  <!-- header -->
  <div>
   <?php include 'userdetail.php'; ?>
  </div>
  <!-- end header -->
  <!-- head -->
  <div>
  <div class="pen-title">
    <font size="8">รายวิชาทั้งหมด</font>
  </div>
  </div>
  <!-- end head -->


<div class="main">

<!-- content  -->
<div class="container" width="100%">
  
	
<?php
	$strUserId = $_SESSION['UserID'];
	$rowID;
	$totalCredit = 0;
	$totalCourse = 0;


	
	$sql = "SELECT * FROM course  WHERE UserID = '".$strUserId."' ORDER BY course";
	$result=mysqli_query($con,$sql);
  $cc = "";
	
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {

    $rowID = $row['id'];
		$data =  $row['time_s'];
    if($row['course'] != $cc){
      echo "<hr>
      
      ";
     
      echo "<div ><font size='4'>วิชา".$row['course']."
      
      <button class='btDel' id='$rowID' >
      <span class='glyphicon glyphicon-trash'></span> ลบ
      </button>
      </div>
      ";
      $totalCredit = $row['credit'] + $totalCredit;
      $totalCourse++;

      $cc = $row['course'];
      echo "<hr>";

      

    }

    
     echo $row['day'];
     echo "<br>";
     echo $row['time_s'];
     echo " - ";
     echo $row['time_e'];
     echo "<br>";


     


    

   
     
    }


 

}
else
{
	echo "
	<center>

	<p><font size='6' color='red'>ไม่พบรายวิชาในฐานข้อมูล</font></p>
	</center>
	";
}

if($result->num_rows > 0){
  echo "
<center>
รวม $totalCourse วิชา $totalCredit หน่วยกิต
</center>";
}



?>


</div>

</div>



<!-- content  -->




<!-- side bar -->
  <div >
    <?php include 'sideBar.php'; ?>
  </div>
<!--end side bar -->


	<div class="footer">
		<?php include 'footer.php'; ?>
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