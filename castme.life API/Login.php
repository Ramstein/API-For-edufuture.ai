<?php
    $userEmail = $_REQUEST["user_email"]; // email of the user
    $password = $_REQUEST["user_pass"]; // PASSWORD of the user who is logging in
	//                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("localhost", "castovni_wp694", "upKr94][O@.Z4S", "castovni_wp694");
	$sql = "SELECT * FROM wp_q8qy6p_users WHERE `user_email` = '".$userEmail."'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		$password = md5($password);
		while($row = mysqli_fetch_assoc($result))
		{

            if($password == $row['user_pass'])
            {
                    die("Login-Success");
            } 
            else
                    die("Email or Password is Incorrect");
		}
	}
	die("User not registered.");	
?>