
<?php
	$dbHost = "localhost";
	$dbDatabase = "reimburse_detail";
	$dbPasswrod = "root";
	$dbUser = "root";
	$mysqli = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
    
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}	
?>