<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "taskdb";

	$conn = mysqli_connect($servername, $username, $password, $dbname, "3308");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>