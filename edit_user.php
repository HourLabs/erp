<?php
	include("settings.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id=$_REQUEST['id'];

		$u_name = $_POST['u_name'];
		$u_first_name = $_POST['u_first_name'];
		$u_last_name = $_POST['u_last_name'];
		$u_email_id = $_POST['u_email_id'];
		$u_mobile_no = $_POST['u_mobile_no'];
		$dob = $_POST['u_dob'];
		$u_dob = str_replace('/', '-', $dob);
		$u_dob = date('Y-d-m',strtotime($u_dob));
		$u_marital_status = $_POST['u_marital_status'];
		$u_address = $_POST['u_address'];
		$u_city = $_POST['u_city'];
		$u_state = $_POST['u_state'];
		$u_country = $_POST['u_country'];
		$u_pincode = $_POST['u_pincode'];
		// $u_permission = $_POST['u_permission'];
		// $u_created_by = $_POST['u_created_by'];
		// $u_created_date = $_POST['u_created_date'];
		// $u_modified_date = $_POST['u_modified_date'];
		// $u_status = $_POST['u_status'];
		
		$sql = "UPDATE user_table SET u_name='$u_name', u_first_name='$u_first_name', u_last_name='$u_last_name', u_email_id='$u_email_id', u_mobile_no='$u_mobile_no', u_dob='$u_dob',u_marital_status='$u_marital_status', u_address='$u_address', u_city='$u_city', u_state='$u_state', u_country='$u_country', u_pincode='$u_pincode'  WHERE u_id=$id" ;
		//$result = mysql_query($sql);

		if (mysqli_query($conn, $sql)) 
		{
		    echo "Record updated successfully";
		} 
		else 
		{
		    echo "Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
		header("Location: edit_user.php?id=".$id);
	}
?>



<?php

	

	include("header.php");

	include("header_menu.php");

	$sql = "select * from user_table";
	$result = mysqli_query($conn,$sql);
	$c = mysqli_num_rows($result);
	
?>	


<body>
				
			<?php
			
					$id=$_REQUEST['id'];
					$sql=mysqli_query($conn,"select * from  user_table where u_id=$id");
					$row=mysqli_fetch_array($sql);
			?>

			<!-- BEGIN PAGE BASE CONTENT -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
	
                         <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form method="post" id="page1" action="edit_user.php?id=<?= $id;?>" >
                                                            <div class="form-group">
                                                               
																
																<div class="form-group">
                                                                <label class="control-label">Title</label>
                                                                <select class="form-control input-small" name="u_name" value= "<?php echo $row['u_name'];?>">
																			<option>Mr.</option>
																			<option>Mrs.</option>
																			<option>Ms.</option>
																	</select>
                                                                 </div>
																
																
															<div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_first_name" value= "<?php echo $row['u_first_name'];?>"required /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_last_name" value= "<?php echo $row['u_last_name'];?>" required /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-mobile font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="+919988665544" class="form-control" name="u_mobile_no" value= "<?php echo $row['u_mobile_no'];?>"required /> </div>
															
															
															</div>
															
																
															<div class="form-group">
                                                                <label class="control-label">Email ID</label>
																<div class="input-group input-icon right">
																	<span  class="input-group-addon">
																	<i class="fa fa-envelope font-blue"></i>
																	</span>
														<i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                                                                <input type="email" placeholder="name@xyz.com" class="form-control" name="u_email_id" required value= "<?php echo $row['u_email_id'];?>"/> </div>
															</div>
															
															
															<div class="form-group">
																<label class="control-label">Date of Birth</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="u_dob" id="date_select" date= "<?= $row['u_dob'];?>" /></div>
															</div>
															
															
															<div class="form-group">
																
																<label class="control-label">Marital Status</label>
																		<select class="form-control input-small" name="u_marital_status" value= "<?php echo $row['u_marital_status'];?>" onchange="showDiv(this)">
																			<option value="0">Single</option>
																			<option value="1" >Married</option>
																			<option value="2">Divorced</option>
																			<option value="3">Other</option>

																																					
																		</select>
																</div>
																

																<div class="form-group" style="display: none;" id="doa">
																<label class="control-label">Date of Anniversary</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="u_doa" value= "<?php echo $row['u_doa'];?>"/></div>
															</div>
															
															
				
											
											
														
																		
																
                                                          <div class="form-group">
                                                                <label class="control-label">Address</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-home font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="Street " class="form-control" name="u_address"    value= "<?php echo $row['u_address'];?>" /> </div>
															</div>
															
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" placeholder="City / Village" class="form-control" name="u_city" value="<?= $row['u_city'];?>" required /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">State</label>
																<select class="form-control bfh-states" data-country="IN" name="u_state" id="state_select" value= "<?php echo $row['u_state'];?>" required></select>

															</div>
                                                                
																
																
																
											
																
																
																<div class="form-group">
                                                                <label class="control-label">Country</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_country"  value= "<?php echo $row['u_country'];?>"required /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text" placeholder="XXXXXX" class="form-control" name="u_pincode" value= "<?php echo $row['u_pincode'];?>" required /> </div>
															
                                                                
															
															
                                                            
															<input type="hidden" name="id" value="<?= $_REQUEST['id'] ?>"
                                                            <div class="margiv-top-10">
				<button type="submit" class="btn green" name="edit" id="page1" > Update</button>      
				<a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                </div>
                    <!-- END PAGE BASE CONTENT -->
            </div>
					
					
					
					
					
					
					
	
	


<?php

include("footer.php");


?>
<script type="text/javascript">
	$(document).ready(function()
	{
		$("#state_select").val($("#state_select").attr('value'));
		$("#date_select").val($("#date_select").attr('date'));
	});
</script>
