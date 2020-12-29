<?php

	$ServerAddress = $_REQUEST["ServerAddress"];

                $con = new mysqli("fdb14.awardspace.net", "2140668_login", "pallyqle123", "2140668_login");
                
                $check = mysqli_query($con, "SELECT * FROM Servers WHERE `address` = '".$ServerAddress."'");
                $numRows = mysqli_num_rows($check);
                if($numRows != 0)
                {
                        $sql = "DELETE FROM Servers WHERE `address` = '".$ServerAddress."'";
                        mysqli_query($con, $sql);
                        die("Server Deleted");
                }
                else
                {
                        die("Delete Failed");
                }
	
?>