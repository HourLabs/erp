
<?php
include_once 'settings.php';
$sb_id = $_POST['sb_id']
$sb_u_id = $_POST['sb_u_id']
$sb_type = $_POST['sb_type']
$sb_start_date = $_POST['sb_start_date']
$sb_end_date = $_POST['sb_end_date']
$sb_modified_date = $_POST['sb_modified_date']
$sb_payment_method = $_POST['sb_payment_method']
$sb_payment_date = $_POST['sb_payment_date']
$sb_approval_status = $_POST['sb_approval_status']

if(isset($_POST['add']))
{$query="INSERT INTO subscription_details
 VALUES ('$sb_id', '$sb_u_id', '$sb_type', '$sb_start_date', '$sb_end_date', '$sb_modified_date', '$sb_payment_method', '$sb_payment_date', '$sb_approval_status')";
if($conn->query($query))
	{
	echo "1 record added";
	}
else
	{
	die('Error: ' . mysqli_error($conn));
	}
}
if(isset($_POST['delete']))
{
	$query="DELETE FROM subscription_details WHERE ";
	if($conn->query($query))
	{

	}
	else
	{
	die('Error: ' . mysqli_error($conn));
	}
}
if(isset($_POST['update']))
{$query = "UPDATE subscription_details 
SET  
WHERE ";
if($conn->query($query))
{
	if(mysqli_affected_rows($conn)>0)
	{

	}
	else
	{
		
	}
}else{
	die('Error: ' . mysqli_error($conn));
}
}
$conn->close();
?>
