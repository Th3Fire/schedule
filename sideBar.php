<html>
  <head>
 <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php


if(!isset($_SESSION['UserID']))
{
header("location:login.php");
exit();
}


?>
  <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            หน้าหลัก
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="courseList.php">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                            รายวิชาทั้งหมด
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="classschedule.php">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            ตารางเรียน
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="manageCourse.php">
                       <i class="fa fa-plus-square fa-2x"></i>
                        <span class="nav-text">
                            เพิ่ม/ลบ รายวิชา
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            comming soon
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                            comming soon
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            comming soon
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            comming soon
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            comming soon
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
    </html>