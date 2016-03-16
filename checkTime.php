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

function my_error_handler($errno,$errstr)
  {
  //header("location:index.php");
  return true; // if you want to bypass php's default handler
  }

$test = array();
set_error_handler('my_error_handler');
$courseName = $_GET['course'];
$credit = $_GET['credit'];
$val = $_GET['val'];
$UserID = $_SESSION['UserID'];


restore_error_handler();


$data = "Mo09:00-11:00 B4101#Tu10:30-12:00";

$strs = explode("#", $val);

foreach($strs as $str) {

        $day = substr($str, 0, 2);

        $timeStr = substr($str, 2, 12);

        $times = explode("-", $timeStr);

       

        $_sql = "INSERT INTO course (course,credit,day,time_s,time_e,UserID) VALUES('$courseName','$credit','$day','$times[0]','$times[1]','$UserID')";
  
      if (mysqli_query($con, $_sql)) {

      } else {
     echo "Error: " . $_sql . "<br>" . mysqli_error($con);
     echo $courseName;
}


}




if($courseName != "" && $credit != "" && $val != ""){

$sql = "SELECT * FROM course WHERE UserID = '".$UserID."' ";
$result = mysqli_query($con,$sql);



	
}


?>

</body>
</html>


