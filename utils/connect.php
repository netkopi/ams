<?php
    $localhost = "localhost";
	$username = "root";
	$password = "";
	$database = "cdlb_personnel_attendance";

	$connection = new mysqli($localhost, $username, $password, $database);
	if($connection->connect_error){
		die("connection failed" . $connection->connect_error);
	}

?>