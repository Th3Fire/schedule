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
	<div>
		<div class="pen-title">
  		<h1>รายวิชาทั้งหมด</h1>
		</div>
	</div>
<!-- content  -->
<div data-options="region:'center'," style="padding: 10px;" align="center">
				<!-- breadcrumbs -->
				<div id="content">
	<div>
	
	<div align="center">
		<table width="100%">
		
			<tr>
			<td> </td>
				<center>
				<td valign="top" width="40%" height="100%">
					
						
					<?php
	$strUserId = $_SESSION['UserID'];
	echo "            ".$strUserId;
	$sql = "SELECT * FROM test WHERE UserID = '".$strUserId."' ";
	$result = $con->query($sql);
	
	
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " Course Name: " . $row["CourseName"]." Time: " . $row["Time"].   " Credit: " . $row["Credit"]. " UserID: " . $row["UserID"]. "<br>";
    }
}else
{
	echo " 0 results";
}
?>
					

					
					
					
										
					</td>
					</center>
				<td valign="top" height="454px">
					
				</td>
			</tr>
		</table>
	
</div>
</div>
</div>
</div>


	<div>
		<?php include 'sideBar.php'; ?>
	</div>
	<div>
		<?php include 'footer.php'; ?>
	</div>


	
</div>










	
</div>

</body>
</html>