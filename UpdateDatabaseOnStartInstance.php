<?php

    $nowFormat = date('Y-m-d H:i:s'); // utc timing
    $defaultTimezone = date_default_timezone_get();


    //                 DB_HOST             DB_USER     DB_PASSWORD     DB_NAME
	$con = new mysqli("127.0.0.1:3307", "bn_wordpress", "d0c7f22d31", "bitnami_wordpress");
    $sql = "INSERT INTO ec2_instances(user_login, user_email, aws_region, instance_id, public_dns_name, instance_start_time, 
    timezone) VALUE('$Secret', '$Issuer', '$Name', '$MacAddressWlan0', '$IPv6', '$nowFormat', '$defaultTimezone')";
    
    $result = mysqli_query($con, $sql);
    if($result){die("success");}
    else{die("failed");}














?>