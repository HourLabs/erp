<?php
include 'settings.php';
$u_id = $_POST['u_id'];
$u_name = $_POST['u_name'];
$u_first_name = $_POST['u_first_name'];
$u_last_name = $_POST['u_last_name'];
$u_email_id = $_POST['u_email_id'];
$u_password = $_POST['u_password'];
$u_mobile_no = $_POST['u_mobile_no'];
$u_dob = $_POST['u_dob'];
$u_marital_status = $_POST['u_marital_status'];
$u_address = $_POST['u_address'];
$u_city = $_POST['u_city'];
$u_state = $_POST['u_state'];
$u_country = $_POST['u_country'];
$u_pincode = $_POST['u_pincode'];
$u_permission = $_POST['u_permission'];
$u_created_by = $_POST['u_created_by'];
$u_created_date = $_POST['u_created_date'];
$u_modified_date = $_POST['u_modified_date'];
$u_status = $_POST['u_status'];
if(isset($_POST['add']))
{
$sql = "INSERT INTO user_table
VALUES ('$u_id', '$u_name', '$u_first_name', '$u_last_name', '$u_email_id', '$u_password', '$u_mobile_no', '$u_dob','$u_marital_status', '$u_address', '$u_city', '$u_state', '$u_country', '$u_pincode' ,'$u_permission', '$u_created_by', '$u_created_date', '$u_modified_date', '$u_status')";
	if($conn->query($sql))
	{
	
	}
	else
	{
		die('Error: ' . mysqli_error($conn));
	}
}
if(isset($_POST['edit']))
{
	$sql = "UPDATE user_table 
	SET
	WHERE  ";
	if($conn->query($sql))
	{

	}
	else
	{
		die('Error: ' . mysqli_error($conn));
	}
}
if(isset($_POST['delete']))
{
	$sql = "DELETE FROM user_table WHERE ";
	if ($conn->query($sql)) 
	{
		
	}
	else
	{
		die('Error: ' . mysqli_error($conn));
	}
}
$conn->close();
?>