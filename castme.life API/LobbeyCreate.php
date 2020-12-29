<?php
    $LobbeyName = $_REQUEST["lobbey_name"]; // email of the user
    $LobbeyName = "LB_$LobbeyName"; // email of the user

    $Tagline = $_REQUEST["tagline"]; // PASSWORD of the user who is logging in
    $HostDisplayName = $_REQUEST["host_display_name"];
    $HostUserLogin = $_REQUEST["host_user_login"];
    $HostUserEmail = $_REQUEST["host_user_email"];
    $Timestamp = $_REQUEST["reg_time"];
    
    //                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("mysql.castme.life", "yhaud2kg", "4^Hg7g!x", "castme_life_1");
	$sql = "SELECT * FROM LobbeyCreated WHERE `lobbey_name` = '".$LobbeyName."'";
    $result_lobbey = mysqli_query($con, $sql);

    if((mysqli_num_rows($result_lobbey) > 0) )
	{
        die("Class Code is alredy registered. Look for a new Code.");
	}
	else
	{
		$sql = "INSERT INTO LobbeyCreated(lobbey_name, tagline, host_display_name, host_user_login, host_user_email, reg_time) VALUE('$LobbeyName', '$Tagline', '$HostDisplayName', '$HostUserLogin', '$HostUserEmail', '$Timestamp')";
		$result = mysqli_query($con, $sql); // result is the no of matches of the rows e.g 1, 2,
        
        // creating a table with this lobbey name for containing the informationo of all of the user joined
        // sql to create table
        $sql = "CREATE TABLE $LobbeyName (
            user_login VARCHAR(50) NOT NULL,
            user_email VARCHAR(50),
            display_name VARCHAR(100),
            reg_time VARCHAR(100)
            )";
        if (mysqli_query($con, $sql)) {
            echo "Table $LobbeyName created successfully";
        } else {
            echo "Error creating table.";
        }
	} 
?>

