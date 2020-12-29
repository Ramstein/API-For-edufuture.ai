<?php
	$MacAddressWlan0= $_REQUEST["macAddressWlan0"];
	//                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("localhost", "lauwr_youtube", "C6G76Upijq", "lauwr_youtube");
	$sql = "SELECT * FROM auth WHERE `macAddressWlan0` = '".$MacAddressWlan0."'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			if($row['userRegisteredOn'] == ""){
				die("notRegistered");
			}else{
				die("Registered");
			}
		}
	
	}
?>