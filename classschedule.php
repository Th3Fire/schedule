<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
	<title>ตารางเรียน</title>
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
	 <?php include 'userdetail.php'; ?>
     </div>
	<div>
		<div class="pen-title">
  		<h1>ตารางเรียน</h1>
		</div>
	</div>
	
	<div class="main">
		<div data-options="region:'center',title:'พื้นที่การทำงาน',iconCls:'icon-ok'" style="padding: 10px;" align="center">
				<!-- breadcrumbs -->
				<div id="content">
                <font size="10" color="red"> Error อยู่ระหว่างปรับปรุง</font>
	<table id="tb_course" style="border:2px solid #000;margin-top:20px;" align="center">
    <thead>
        <tr class="cell-Time">
            <td class="cell-TB" width="100px" style="font-weight:bold;color:#FFF;text-align:center;font-size:14pt;">
            	วัน/เวลา
            </td>
                        <td class="cell-TB" colspan="2">
                13:00-14:00            </td>
                        <td class="cell-TB" colspan="2">
                14:00-15:00            </td>
                        <td class="cell-TB" colspan="2">
                15:00-16:00            </td>
                        <td class="cell-TB" colspan="2">
                16:00-17:00            </td>
                        <td class="cell-TB" colspan="2">
                17:00-18:00            </td>
                        <td class="cell-TB" colspan="2">
                18:00-19:00            </td>
                    </tr>
    </thead>
    <tbody>
                <tr class="cell-Bg">
            <td class="cell-TB cell-Day">
            	วันจันทร์            </td>
                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	            		            <td id="dd" class="cell-TB cell-Course" colspan="3">
		            	KOREAN (203431) sec1		            </td> 
           		                            	                        <td class="cell-TB">&nbsp;</td>
                                	                    </tr>
                <tr class="cell-Bg">
            <td class="cell-TB cell-Day">
            	วันอังคาร            </td>
            		            <td id="dd" class="cell-TB cell-Course" colspan="4">
		            	dfasdf		            </td> 
           		                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                    </tr>
                <tr class="cell-Bg">
            <td class="cell-TB cell-Day">
            	วันพุธ            </td>
                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	                            	                    	<td class="cell-TB" colspan="2">&nbsp;</td>
                                                        	            		            <td id="dd" class="cell-TB cell-Course" colspan="3">
		            	KOREAN (203431) sec1		            </td> 
           		                            	                        <td class="cell-TB">&nbsp;</td>
                                	                    </tr>
                <tr style="background-color:#515151;">
        	<td></td>
        	            <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                        <td style="text-align:center;width:50px;"></td>
                    </tr>
    </tbody>
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
</body>
</html>