<?php

	$username = $_REQUEST["user_login"];
	$password = $_REQUEST["user_pass"];
	$userNicename = $_REQUEST["user_nicename"];
	$userEmail = $_REQUEST["user_email"];
	$displayName = $_REQUEST["display_name"];
	$userRegistered = $_REQUEST["user_registered"];

    if(strlen($username)==0 and strlen($password)==0 and strlen($userNicename)==0 and strlen($userEmail)==0 and strlen($displayName)==0)
    {
        die("Enter Correct Credentials.");
    }

	
	$con = new mysqli("mysql.castme.life", "yhaud2kg", "4^Hg7g!x", "castme_life_1");
	$sql = "SELECT user_login FROM wp_q8qy6p_users WHERE `user_login` = '".$username."'";
	$result_user = mysqli_query($con, $sql);
	
	$sql = "SELECT user_email FROM wp_q8qy6p_users WHERE `user_email` = '".$userEmail."'";
	$result_email = mysqli_query($con, $sql);
	
	if((mysqli_num_rows($result_user) > 0) and (mysqli_num_rows($result_email) > 0))
	{
                die("Username or email is already registered.");
	}
	else
	{
        $password = md5($password);
		$sql = "INSERT INTO wp_q8qy6p_users(user_login, user_pass, user_nicename, user_email, user_registered, display_name) VALUE('$username', '$password', '$userNicename', '$userEmail', '$userRegistered', '$displayName')";
		$result = mysqli_query($con, $sql);
		die("User Created");
	}

?>