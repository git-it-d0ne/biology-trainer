<?php
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "biology-trainer";

	// Create the connection
	$conn = new mysqli($serverName, $username, $password, $databaseName);

	// Check the connection
	if ($conn->connect_error) {
		echo "Connection error ".$conn->connect_error;
	} 

	