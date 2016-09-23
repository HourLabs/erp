<?php
include 'settings.php';
$u_rel_id = array($_POST['u_rel_id']);
$u_id = array($_POST['u_id']);
$u_rel_first_name = array($_POST['u_rel_first_name']);
$u_rel_last_name = array($_POST['u_rel_last_name']);
$u_rel_email_id = array($_POST['u_rel_email_id']);
$u_rel_mobile_no = array($_POST['u_rel_mobile_no']);
$u_rel_dob = array($_POST['u_rel_dob']);
$u_rel_type = array($_POST['u_rel_type']);
$u_rel_created_date = array($_POST['u_rel_created_date']); 
$u_rel_modified_date = array($_POST['u_rel_modified_date']);
if(isset($_POST['add']))
{
	$stmt = $mysli->prepare("INSERT INTO user_relationship_table VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	for ($i=0; $i <count($u_rel_id) ; $i++) 
	{ 
		$stmt->bind_param('iissssssss', $u_rel_id[$i], $u_id[$i], $u_rel_first_name[$i], $u_rel_last_name[$i], $u_rel_email_id[$i], $u_rel_mobile_no[$i], $u_rel_dob[$i], $u_rel_type[$i], $u_rel_created_date[$i], $u_rel_modified_date[$i]);
		$stmt->execute();
		$stmt->close();
	}
}

?>