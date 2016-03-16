<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

<title>:: ตารางเรียน ::</title>
</head>
<body>
<?php
$connect=mysql_connect("localhost","root","")or die("no connect database");
mysql_query("use test");
mysql_query("SET CHARACTER SET utf8");
$dbname = "db_php";
mysql_select_db($dbname,$connect) or die("ไม่สามารถใช้ฐานข้อมูล $dbname ได้");
?>
<!--ใส่วันที่ได้ที่ตรงนี้ -->
<?php

$daymax = mysql_query("select max(tb_week) from time_table");
$_daymax = mysql_result($daymax,0);

$daymin = mysql_query("select min(tb_week) from time_table");
$_daymin = mysql_result($daymin,0);

 $L_w[1]="จันทร์";
 $L_w[]="อังคาร";
 $L_w[]="พุธ";
 $L_w[]="พฤหัส";
 $L_w[]="ศุกร์";
 $L_w[]="เสาร์";
 $L_w[]="อาทิตย์";

?>
</span>

    <table width="100%" border="0" cellspacing="1" cellpadding="15">

<?php
for($i=$_daymin-1;$i<=$_daymax;$i++){

if($i==0){
$color="#515151";
}elseif($i==1){
//$color="#FF9966";
$color="#808080";
//$msg[0]="วันที่ / เวลา";
}elseif($i==2){
$color="#808080";
}elseif($i==3){
$color="#808080";
}elseif($i==4){
$color="#808080";
}elseif($i==5){
$color="#808080";
}elseif($i==6){
$color="#808080";
}elseif($i==7){
$color="#808080";
}

?>
  <tr>
    <td align="center" bgcolor="<?php echo  $color?>">
   
    <?php
	if($i==$_daymin-1){
	echo"<font color='white'><b>Day/Time</b></font>";
}else{

if($i >= $_daymin){
echo "<font color='white'><b>".$L_w[$i]."</b></font>";
} 

}

?>
   </td>


    <?php
    
	


mysql_select_db($dbname,$connect) or die("ไม่สามารถใช้ฐานข้อมูล $dbname ได้");
$min = mysql_query("select min(tb_time_min) from time_table");
$total_min = mysql_result($min,0);

$max = mysql_query("select max(tb_time_max) from time_table");
$total_max = mysql_result($max,0);
echo $total_min;
echo $total_max;

for($t=$total_min;$t<=$total_max-1;$t++){
	$sql2="select * from time_table where tb_time='".$t."' and tb_week='".$i."'";
	$result2=mysql_query($sql2);
	$num=mysql_num_rows($result2);
	$show_data2=mysql_fetch_array($result2);

		if($i==$_daymin-1){
	$bg="#515151";
	}elseif($num==1){
	$bg="#C0D0FF";
	}elseif($num==0){
	$bg="#F1EEEE";
	}
	    //if($num==1 and $show_data2[tb_setting]==1){
			if($num==0){
	?>
 <td align="center" id="<?php echo  $i.".".$t?>" bgcolor="<?php echo  $bg?>" colspan="2">
   
	<?php
			if($i==$_daymin-1){
	$time_next=$t+1;
	$time_list=$t.".00"."-".$time_next.".00";
	echo "<font color='white'><b>".$time_list."</b></font>";

	}
	?>
	&nbsp;</td>
<?php
			}elseif($num==1 and $show_data2['tb_setting']==1){
				$t = $t + $show_data2['tb_col']-2;

?>
 
 <td align="center" bgcolor="<?php echo  $bg?>" colspan="<?php echo  $show_data2['tb_col'] ?>">

   
	<?php
		
		echo  $show_data2['tb_subject'];

	
		
	
	?>
	&nbsp;</td>
	<?php
	if($show_data2['tb_col']%2==1){
	echo "<td colspan='1' ></td>
	&nbsp;</td>";
}
?>
	}
   
<?php
			

	}
}
	
	
	?>
  </tr>
  <?php
		
 } 
  ?>
</table>
</body>
</html>
