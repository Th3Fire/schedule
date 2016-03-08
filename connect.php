<?php
	
	ini_set('display_error', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName	= "root";
	$userPassword = "";
	$dbName		= "db_php";

	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	if(mysqli_connect_errno())
	{
		echo "DataBase connect Failed: " .mysqli_connect_error();
		exit();
	}

	//***** Auto logout when user AFK
	$intRejectTime = 20;
	$sql = "UPDATE member SET LoginStatus = '0', LasteUpdate = '0000-00-00 00:00:00' WHERE 1 AND date_add(LasteUpdate,interval $intRejectTime MINUTE) <= NOW() ";
	$query = mysqli_query($con,$sql);
?>