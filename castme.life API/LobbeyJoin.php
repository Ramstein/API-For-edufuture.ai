<?php
    $LobbeyName = $_REQUEST["lobbey_name"]; // email of the user
    $LobbeyName = "LB_$LobbeyName"; // email of the user

    $UserLogin = $_REQUEST["user_login"];
    $UserEmail = $_REQUEST["user_email"];
    $DisplayName = $_REQUEST["display_name"];
    $Timestamp = $_REQUEST["reg_time"];

    //                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("mysql.castme.life", "yhaud2kg", "4^Hg7g!x", "castme_life_1");
	$sql = "SELECT * FROM LobbeyCreated WHERE `lobbey_name` = '".$LobbeyName."'";
    $result1 = mysqli_query($con, $sql);

	$sql = "SELECT * FROM $LobbeyName WHERE `user_email` = '".$UserEmail."'";
    $result2 = mysqli_query($con, $sql);

    if((mysqli_num_rows($result1) > 0))
	{
        if((mysqli_num_rows($result2) > 0)){
            die("Already joined.")
        }else{
            $sql = "INSERT INTO $LobbeyName(user_login, user_email, display_name, reg_time) VALUE('$UserLogin', '$UserEmail', '$DisplayName', '$Timestamp')";
            $result = mysqli_query($con, $sql);
            die("Joined");
        }
	}else{
		die("Class doesn't exist.");
	}
?>

