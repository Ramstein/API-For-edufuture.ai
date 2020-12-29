<?php
	$Sep = " ";
	$Secret= $_REQUEST["secret"].$Sep;
	$Issuer= $_REQUEST["issuer"].$Sep;
	$Name= $_REQUEST["name"].$Sep;
	$MacAddressWlan0= $_REQUEST["macAddressWlan0"];
	$IPv6= $_REQUEST["ipv6"];
	$TimeZone= $_REQUEST["timeZone"];
	//$Secret = $Secret.$Sep;

	$con = new mysqli("localhost", "lauwr_youtube", "C6G76Upijq", "lauwr_youtube");	
	$sql = "SELECT * FROM auth WHERE `macAddressWlan0` = '".$MacAddressWlan0."'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0){
		//$sql="UPDATE auth SET logs ='".$Logs."' WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		
		$sql="UPDATE auth SET secret=CONCAT(secret, '".$Secret."') WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$res1 = mysqli_query($con, $sql);
		$sql="UPDATE auth SET issuer=CONCAT(issuer, '".$Issuer."') WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$res2 = mysqli_query($con, $sql);
		$sql="UPDATE auth SET name=CONCAT(name, '".$Name."') WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$res3 = mysqli_query($con, $sql);
		$sql="UPDATE auth SET ipv6='".$IPv6."' WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$res4 = mysqli_query($con, $sql);
		$sql="UPDATE auth SET timeZone='".$TimeZone."' WHERE macAddressWlan0 = '".$MacAddressWlan0."'";
		$res5 = mysqli_query($con, $sql);
		
		if($res1 && $res2 && $res3){die("success");}
		else{die("failed");}
	}else{
		$sql = "INSERT INTO auth(secret, issuer, name, macAddressWlan0, ipv6, timeZone) VALUE('$Secret', '$Issuer', '$Name', '$MacAddressWlan0', '$IPv6', '$TimeZone')";
		$result = mysqli_query($con, $sql);
		if($result){die("success");}
		else{die("failed");}
	}
	

?>