<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, "erp");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//ini_set('display_errors',0);
	session_start();

	function pr($data)
	{
		echo "<pre>";
		print_r($data);
	}
?>