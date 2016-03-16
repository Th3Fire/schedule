<?php

$data = "Mo09:00-11:00 B4101#Mo01:00-11:00 B4101";
$strs = explode("#", $data);


$data_db = "Mo09:00-15:00 B4101#Mo02:00-11:00 B4101";
$_db = explode("#", $data_db);


$count1 = count($data);
$count2 = count($_db);





for($i = 0 ;$i < $count1 ;$i++){

    ///data
    for($j = 0;$j < $count2;$j++){

        if($strs[$i] == $_db[$j]){
            echo "ข้อมูลซ้ำ";
        }
    }

}

echo "<br>";
$check = "";
foreach($strs as $str) {

        $day = substr($str, 0, 2);

        $timeStr = substr($str, 2, 12);

        $times = explode("-", $timeStr);


        echo $day."<br />";
        echo print_r($times);
        echo "<hr>";


        if($check == $timeStr){
            echo "Error";
        }else {
            $check = $timeStr;
        }


       
}



foreach($strs as $str) {

}

?>