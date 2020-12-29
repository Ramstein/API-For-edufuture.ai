<?php
	$Sep = "\n";
	$MacAddressWlan0= $_REQUEST["macAddressWlan0"];
	$Logs = $Sep.$_REQUEST["logs"];
	//                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("localhost", "lauwr_youtube", "C6G76Upijq", "lauwr_youtube");
	$sql = "SELECT * FROM auth WHERE `macAddressWlan0` = '".$MacAddressWlan0."'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0){
		//$sql="UPDATE auth SET logs =logs + '".$Logs."' WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$sql="UPDATE auth SET logs = CONCAT(logs, '".$Logs."') WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$result = mysqli_query($con, $sql);
		if($result){die("success");}
		else{die("failed");}
	}else{
		$sql = "INSERT INTO auth(macAddressWlan0, logs) VALUE('$MacAddressWlan0', '$Logs')";
		$result = mysqli_query($con, $sql);
		if($result){die("success");}
		else{die("failed");}
	}
?>