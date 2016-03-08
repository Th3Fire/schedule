<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/reset.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
	table td, table td * {
    vertical-align: middle;
}
</style>

	<title>เพิ่ม ลบ รายวิชา</title>
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
  		<h1>เพิ่ม-ลบ รายวิชา</h1>
		</div>
	</div>
<!-- content  -->
<div data-options="region:'center',title:'พื้นที่การทำงาน',iconCls:'icon-ok'" style="padding: 10px;" align="center">
				<!-- breadcrumbs -->
				<div id="content">
	<div class="panel">
	
	<div class="panel-body" align="center">
		<table width="100%">
		<colgroup>
       <col span="1" style="width: 5%;">
       <col span="1" style="width: 35%;">
       <col span="1" style="width: 60%;">
    	</colgroup>
			<tr>
			<td> </td>
				<center>
				<td valign="top" width="40%">
					
						
					<div class="bar"></div>
					
					<div class="form-inline" style="font-size:14pt;font-weight:bold;margin-top:15px;">
						<div style="margin-bottom: 15px;">
							วิชา :  
							<input class="enjoy-css"  /></div>
						หน่วยกิต : 
						<span class="css3-metro-dropdown css3-metro-dropdown-color-ff1d77">
    <select name="dropdown-2">
    	<option value="0"> </option>
        <option value="1">  1  </option>
        <option value="1">  2  </option>        
        <option value="2">  3  </option>
        <option value="3">  4  </option>
        <option value="4">  8  </option>
    </select>
</span>
					</div><br />
					<textarea style="font-size: 14pt; color: #000; width: 90%; height: 220px;" class="dap_textarea" placeholder="Mo09:00-11:00 B4101" name="val" id="val"></textarea>
					</td>
					</center>
				<td valign="top">
					<iframe style="border: 3px solid #000;" frameborder="0" width="100%;" height="370px" name="_reg" id="reg" src="https://reg2.sut.ac.th/registrar/class_info.asp"></iframe>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- end content  -->
	<div>
		<?php include 'sideBar.php'; ?>
	</div>
	<div>
		<?php include 'footer.php'; ?>
	</div>
	
</div>
</body>
</html>