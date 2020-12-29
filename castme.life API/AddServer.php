<?php

	$ServerName = $_REQUEST["ServerName"];
	$ServerAddress = $_REQUEST["ServerAddress"];
        $MapName = $_REQUEST["MapName"];
        $GameType = $_REQUEST["GameType"];
	$CNP = "0";
        $MNP = $_REQUEST["MNP"];
        
        if($ServerAddress != ": 7777")
        {
                $con = new mysqli("fdb14.awardspace.net", "2140668_login", "pallyqle123", "2140668_login");
                
                $sql = "SELECT * FROM Servers WHERE `address` = '".$ServerAddress."'";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                        die("Server Exist");
                }
                else
                {
                     
                        $sql = "INSERT INTO `Servers` (`name`, `address`, `mapname`, `gametype`, `CNP`, `MNP`) 
                                VALUE('$ServerName', '$ServerAddress', '$MapName', '$GameType', '$CNP', '$MNP')";
                        $result = mysqli_query($con, $sql);
                        die("Server Created");
                }
        }
        else
        {
                echo $ServerAddress;//die("Emtpy");
        }
        
	
?>