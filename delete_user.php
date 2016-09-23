<?php

include("settings.php");

	$id=$_GET['id'];
	$Query = "delete from  user_table where u_id=$id";


	//echo "$Query";
	$rs = mysqli_query($conn,$Query);

?>
