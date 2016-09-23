<?php

include("connection_db.php");

	$id=$_REQUEST['id'];
	$Query = "delete from  user_details where user_id=$id";


	//echo "$Query";
	$rs = mysqli_query($con,$Query);

?>
