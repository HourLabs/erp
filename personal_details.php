<?php
ob_start();

include 'settings.php';

include 'header.php';




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
		
		

//header("Location:sub_details.php");
	if(isset($_POST['page1']))
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
			header("Location:sub_details.php");

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




    
	

<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
       

 
	   <meta charset="utf-8" />	
        <title>Metronic | New User Profile | Account</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
		
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
		
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
		
		
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
		
		<link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
		
        <!-- END PAGE LEVEL PLUGINS -->
		
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
		
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
		
		
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
	
	
		<!-- BEGIN Bootstrap Form Helpers -->
			<link href="http://bootstrapformhelpers.com/assets/css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
		<!-- END Bootstrap Form Helpers -->
		
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
           
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>New User Profile | Patrika</h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li class="active">User</li>
                        </ol>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Add Subcriber</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    
                                                   
                                                </ul>
                                            </div>
                                           


										   <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" method="post" id="page1" action="personal_details.php" >
                                                            <div class="form-group">
                                                               
																
																<div class="form-group">
                                                                <label class="control-label">UserName</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_name" required /> </div>
																
																<div class="form-group">
                                                                <label class="control-label">Password</label>
                                                                <input type="password" placeholder="" class="form-control" name="u_password" required /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_first_name" required /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_last_name" required /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-mobile font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="+919988665544" class="form-control" name="u_mobile" required /> </div>
															</div>
																
															<div class="form-group">
                                                                <label class="control-label">Email ID</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-envelope font-blue"></i>
																	</span>
														<i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                                                                <input type="text" placeholder="name@xyz.com" class="form-control" name="u_email_id" required "/> </div>
															</div>
															
															
															<div class="form-group">
																<label class="control-label">Date of Birth</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="u_dob" required /></div>
															</div>
															
															
															
															<div class="form-group">
																
																<label class="control-label">Marital Status</label>
																		<select class="form-control input-small" name="u_marital_status">
																			<option>Single</option>
																			<option>Married</option>
																			<option>Divorced</option>
																			<option>Other</option>

																																					
																		</select>
																</div>
															
															
				
											
											
														
																		
																
                                                          <div class="form-group">
                                                                <label class="control-label">Address</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-home font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="Street " class="form-control" name="u_address" required /> </div>
															</div>
															
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" placeholder="City / Village" class="form-control" name="u_city" required /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">State</label>
																<select class="form-control bfh-states" data-country="IN" name="u_state" required></select>

															</div>
                                                                
																
																
																
											
																
																
																<div class="form-group">
                                                                <label class="control-label">Country</label>
                                                                <input type="text" placeholder="" class="form-control" name="u_country" required /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text" placeholder="XXXXXX" class="form-control" name="u_pincode" required /> </div>
															<div class="form-group">
                                                                <label class="control-label">Persmission</label>
                                                                <input type="text" placeholder="Permission" class="form-control" name="u_permission" required /> </div>
																<div class="form-group">
                                                                <label class="control-label">Created By</label>
                                                                <input type="text" placeholder="Created By" class="form-control" name="u_created_by" required /> </div>
																<div class="form-group">
																<div class="form-group">
																<label class="control-label">Created date</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="u_created_date" required /></div>
															</div>
															<div class="form-group">
																<label class="control-label">Modified Date</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="u_created_date" required /></div>
															</div>
                                                                <label class="control-label">Status</label>
                                                                <input type="text" placeholder="Status" class="form-control" name="u_status" /> </div>
																<div class="form-group">
                                                                
															
															
                                                            
																
                                                            <div class="margiv-top-10">
													<button type="submit" class="btn green" name="page1" id="page1" > Next</button> 
													           
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
													
            
    		 
			
	
													
                                          
													
                                                   
                                                            <!--end profile-settings-->
                                                            
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
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
                <!-- BEGIN FOOTER -->
                
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
		
		
      
       
		
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
		
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
		
		<script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
		
		
		
		
        <!-- END PAGE LEVEL PLUGINS -->
		
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
		
		<script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
		
		
		<!-- Bootstrap Form Helpers -->
			<script src="http://bootstrapformhelpers.com/assets/js/bootstrap-formhelpers.min.js"></script>
		
		
		
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


<?php

include("footer.php");


?>