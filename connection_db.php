<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME','pmerp');
    
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
	if (!$con)
  	{
 		 die('Could not connect: ' . mysql_error());
  	}
	
	mysqli_select_db($con,DB_NAME);
	
	
?>