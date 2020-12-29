<?php

	$username = $_REQUEST["username"];
	
	$con = new mysqli("fdb14.awardspace.net", "2140668_login", "pallyqle123", "2140668_login");
	
	$sql = "UPDATE `Login` SET `IsLogin` = '0' WHERE `username` = '".$username."'";
	$result = mysqli_query($con, $sql);

	
?>