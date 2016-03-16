<?php

$timeArr = array( 
   0 => array( "start" => "08:00", "stop" => "09:00"), 
   1 => array( "start" => "09:00", "stop" => "10:00"), 
   2 => array( "start" => "10:00", "stop" => "11:00"), 
   3 => array( "start" => "11:00", "stop" => "12:00"), 
   4 => array( "start" => "12:00", "stop" => "13:00"), 
   5 => array( "start" => "13:00", "stop" => "14:00"), 
   6 => array( "start" => "14:00", "stop" => "15:00"), 
   7 => array( "start" => "15:00", "stop" => "16:00"), 
   8 => array( "start" => "16:00", "stop" => "17:00"), 
   9 => array( "start" => "17:00", "stop" => "18:00"), 
   10 => array( "start" => "18:00", "stop" => "19:00"),
   11 => array( "start" => "19:00", "stop" => "20:00"), 
   12 => array( "start" => "20:00", "stop" => "21:00"), 
   13 => array( "start" => "21:00", "stop" => "22:00")
  );

//DATABASE to Array
//วนลูปฐานข้อมูล มาเก็บในรูปแบบ Array
$timeTeach = array(
 0 => array( 
   
   array('time' => '13:00-15:00', 'title' => '4312605 ระบบฐานข้อมูล'),
   
   ),
 1 => array(
   array('time' => '12:00-16:00', 'title' => '4312502 หัวข้อพิเศษเกี่ยวกับวิทยาการคอมพิวเตอร์')
   ),
 2 => array(),
 3 => array(),
 4 => array(),
 5 => array(),
 6 => array(),
 7 => array()
);
//End การจัดรูปแบบข้อมูล

/* Head Column */
function createCol($arr){
 $row = "";
 foreach( $arr as $data )
 {
  $row .= '<td>' . $data['start'] . '-' . $data['stop'] . '</td>';
 }
 return $row;
}

/* Key Positon */
function getCol($haystack, $keyNeedle)
{
    $i = 0;
    foreach($haystack as $arr)
    {
        if($arr['start'] == $keyNeedle)
        {
            return $i;
        }
        $i++;
    }
}

/* Time Range */
function getTimeRange($timeT, $timeCol){
 $data = array();
 foreach($timeT as $timeA){
  $time = $timeA['time'];
  if(!$time) continue;
  $tm = explode("-", $time);
  //echo '<pre>', print_r($tm,true) ,'</pre>';
  $start = getCol($timeCol, $tm[0]);
  $end = getCol($timeCol, $tm[1] );
  $colspan = $end - $start;
  $data[$tm[0]] = array('colspan' => $colspan, 'title' => $timeA['title']);
 }
 return $data;
}

$list = "";
echo '<table border="1" width="90%" align="center" cellspacing="0">';
echo '<tr><td> </td><td> </td>'. createCol( $timeArr ) .'</tr>';
foreach($timeTeach as $i=>$arr){

 //ค้นหาข้อมูลในตารางลงทะเบียน
 //นับช่วงเวลา start_time กับ stop_time ว่ามีกี่ช่อง
 $timeT = $timeTeach[$i];
 
 $arrRange = getTimeRange($timeT, $timeArr);
 
 //echo '<pre>', print_r($arrRange,true) ,'</pre>';
 
 $no = $i + 1;

 $list = '<tr>';
 $list.= '<td rowspan="2" class="no">'.$no.'</td>';
 $list.= '<td>ลายเซ็น</td>';
 $chkCol = 0;
 $col = 0;
 foreach( $timeArr as $timeA )
 { 
  $highlight = "";
  $colspan = "";
  if($chkCol < ($col-1) && $col != 0){
   $chkCol++;
   continue;
  }
  $col = 0;
  $chkCol = 0;
  if(!empty($arrRange[trim($timeA['start'])])){
   $col = $arrRange[trim($timeA['start'])]['colspan'];
   $highlight = "highlight";
   $colspan = 'colspan="'.$col.'"';
  }
  $list.= '<td '.$colspan.' class="'. $highlight .'"> </td>';
 }
 $list.= '</tr>';
 
 $list.= '<tr>';
 $list.= '<td>วัน...</td>';
 foreach( $timeArr as $timeA )
 { 
  $highlight = "";
  $colspan = "";
  if($chkCol < ($col-1) && $col != 0){
   $chkCol++;
   continue;
  }
  $title = " ";
  $col = 0;
  $chkCol = 0;
  if(!empty($arrRange[trim($timeA['start'])])){
   $col = $arrRange[trim($timeA['start'])]['colspan'];
   $title = $arrRange[trim($timeA['start'])]['title'];
   $highlight = "highlight";
   $colspan = 'colspan="'.$col.'"';
  }
  
  $list .= '<td '.$colspan.' class="'. $highlight .' title">' . $title . '</td>';
 }
 $list .= '</tr>';
 echo $list;
 
}
echo '</table>';

?>