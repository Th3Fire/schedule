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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
<style type="text/css">
	table td, table td * {
    vertical-align: top;
}
[data-notify="progressbar"] {
	margin-bottom: 0px;
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 5px;
}
</style>
	<title>เพิ่ม รายวิชา</title>
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
<!-- start header -->
<div>
<?php include 'userdetail.php'; ?>
</div>
<!-- end header -->
<!-- start head -->
<div>
<div class="pen-title">
 <h1>เพิ่ม รายวิชา</h1>
</div>
</div>
<!-- end head -->

<!-- start content  -->
<div data-options="region:'center'," style="padding: 10px;" align="center">
<div class="main">
<div align="center">
	<table width="100%" height="100%">
	<colgroup>
       <col span="1" style="width: 5%;">
       <col span="1" style="width: 30%;">
       <col span="1" style="width: 70%;">
    </colgroup>
			<tr>
			<td> </td>
				<center>
				<td valign="top" width="40%">
				<font size="5">วิชา : </font> 
				<input class="enjoy-css" name="course" id="course" />
						
					<font size="5">หน่วยกิต : </font> 
					<span class="css3-metro-dropdown css3-metro-dropdown-color-ff1d77">
    				<select name="credit" id="credit">
    				<option value="0"> </option>
        			<option value="1">  1  </option>
        			<option value="2">  2  </option>        
        			<option value="3">  3  </option>
        			<option value="4">  4  </option>
        			<option value="8">  8  </option>
    				</select>
					</span>  
					<br />	
					<br />
					<form name="form2" method="post">
					<textarea style="font-size: 14pt; color: #000; width: 100%; height: 150px;" class="dap_textarea" placeholder="Mo09:00-11:00 B4101" name="val" id="val"></textarea>
					</form>
					<br />
					<br />
					<button class="bt01" onclick="courseSave()" >
					<span>
					<i class="material-icons" >save</i>Save
					</span>
					</button>
					<button class="btCancel" > 
					<span>
					<i class="material-icons">delete</i>Cancel
					</span>
					</button>
					</td>
					</center>
					<td valign="top">
					<iframe style="border: 1px solid #000;" frameborder="0" width="100%;" height="450px" name="_reg" id="reg" src="https://reg2.sut.ac.th/registrar/class_info.asp"></iframe>
				</td>
			</tr>
		</table>
	</div>
</div>
</div>

<!-- start side bar -->
<div>
<?php include 'sideBar.php'; ?>
</div>
<!-- end side bar -->

<!-- start footer -->
<div class="footer">
<?php include 'footer.php'; ?>
</div>
<!-- end footer -->

<script>
</script>
</body>
</html>