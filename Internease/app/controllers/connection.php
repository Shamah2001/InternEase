<?php 

	$dbhost = 'localhost:3307';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'intern_ease'; 

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	// Giving an error if connection was unsuccessful
	if ($connection->connect_error) {
		die('Database connection failed ' . $connection->connect_error);
	}
	else{
		echo "wrtet";
	}

?>