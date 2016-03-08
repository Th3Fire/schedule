<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/reset.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<link href="metro-icons.css" rel="stylesheet">
<link href="iconFont.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="js/index.js"></script>
<style type="text/css">
	table td, table td * {
    vertical-align: top;
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





<div>
	<div>
	 <?php include 'userdetail.php'; ?>
	<div>
		<div class="pen-title">
  		<h1>เพิ่ม รายวิชา</h1>
		</div>
	</div>
<!-- content  -->
<div data-options="region:'center'," style="padding: 10px;" align="center">
				<!-- breadcrumbs -->
				<div id="content">
	<div>
	
	<div align="center">
		<table width="100%">
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
						<span class='glyphicon glyphicon-floppy-saved'></span> 
							<input class="enjoy-css"  /></div>
						
						<font size="5">หน่วยกิต : </font> 
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
					
					
					
					<br />	
					<br />
					<textarea style="font-size: 14pt; color: #000; width: 85%; height: 150px;" class="dap_textarea" placeholder="Mo09:00-11:00 B4101" name="val" id="val"></textarea>
					<br />
					<br />
					<button class="bt01" onclick="courseSave()">
					<span>
					<i class="material-icons" >save</i>Save
					</span>
					</button>

					<button class="btCancel">
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

<script>


</script>
</body>
</html>