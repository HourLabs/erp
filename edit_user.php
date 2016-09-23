<?php


include("connection_db.php");

include("header.php");

include("header_menu.php");

	$sql = "select * from user_details";
	$result = mysqli_query($con,$sql);
	$c = mysqli_num_rows($result);
	
	
	if(isset($_REQUEST['isubmit']))
	{
		/*date_default_timezone_set('Asia/Kolkata');
		$curDate = date("Y-m-d"). "  " . date("H:i:s",time());
		$Date1 = date("dmYHis");*/
		$id=$_REQUEST['id'];
		$busname = $_REQUEST['val-u_f_name'];
		$bustype = $_REQUEST['val-u_l_name'];
		$rtono = $_REQUEST['val-rtono'];
		$capacity = $_REQUEST['val-capacity'];
		
		$sql = "update user_details set bustype='$bustype', busname='$busname', rtono='$rtono', capacity=$capacity where user_id=$id";
		$result = mysql_query($sql);

	}
	
?>	


<body>
				
				<?php
				
					$id=$_REQUEST['id'];
					$sql=mysqli_query($con,"select * from  user_details where user_id=$id");
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
                                                        <form role="form" action="#">
                                                            <div class="form-group">
                                                                
																<label class="control-label">First Name</label>
                                                                <input type="text" class="form-control" id="val-user_last_name" value= "<?php echo $row['user_first_name'];?>"/> 
																
																<input type="hidden" id="id" name="id" value= "<?php echo $row['user_id'];?>"  />
																
															</div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" class="form-control" id="val-user_last_name" value= "<?php echo $row['user_last_name'];?>"/> 
																
															</div>
																
																
																
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-mobile font-blue"></i>
																	</span>
                                                                <input type="text" class="form-control" id="val-user_mobile_no" value= "<?php echo $row['user_mobile_no'];?>"  /> </div>
															</div>
															
																
															<div class="form-group">
                                                                <label class="control-label">Email ID</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-envelope font-blue"></i>
																	</span>
														<i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                                                                <input type="text" class="form-control" id="val-user_email" value= "<?php echo $row['user_email'];?>" /> </div>
															</div>
															
															
															<div class="form-group">
																<label class="control-label">Date of Birth</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="<?php echo $row['user_dob'];?>" /></div>
															</div>
															
															
															
															<div class="form-group">
																
																<label class="control-label">Mariied</label>
																		<select class="form-control input-small">
																			<option>Yes</option>
																			<option>No</option>
																		</select>
																</div>
															
															<div class="form-group">
																<label class="control-label">Date of Aniversary</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
													
                                                
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="<?php echo $row['user_doa'];?>" /></div>
															</div>
											
											
														
																		
																
                                                            <div class="form-group">
                                                                <label class="control-label">Adress</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-home font-blue"></i>
																	</span>
                                                                <input type="text" class="form-control"  id="val-user_address" value= "<?php echo $row['user_address'];?>" /> </div>
															</div>
															
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" class="form-control"  id="val-user_city" value= "<?php echo $row['user_city'];?>" /> </div>
																
															<div class="form-group">
                                                                <label class="control-label" >State</label>
                                                                
																
																
																
											
																
																<select class="form-control bfh-states" data-country="IN"></select>

															</div>
																
																
															<div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text"  class="form-control"  id="val-user_pincode" value= "<?php echo $row['user_pincode'];?>"/> </div>
															
															
                                                            
																
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> Update User </a>
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

