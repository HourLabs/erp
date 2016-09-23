<?php


include("settings.php");

include("header.php");

include("header_menu.php");
if(isset($_POST) && !empty($_POST))
{
	$r_book_id=$_POST['r_book_id'];
	$r_book_starting_no=$_POST['r_book_starting_no'];
	$r_book_end_no=$_POST['r_book_end_no'];
$sql="INSERT INTO rasid_stock_management 
(r_book_id,r_book_starting_no,r_book_end_no)
VALUES ('$r_book_id', '$r_book_starting_no', '$r_book_end_no')";
if($conn->query($sql))
{}
else
{
	die('Error: ' . mysqli_error($conn));
}
}
?>	




	<!-- BEGIN BREADCRUMBS -->
				<div class="breadcrumbs">
					<h1>Add Rasid Book</h1>
					<ol class="breadcrumb">
						<li>
							<a href="#">Rasid Book</a>
						</li>
						<li class="active"> Add Rasid Book</li>
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
                                                    <span class="caption-subject font-blue-madison bold uppercase">Add Rasid Book</span>
                                                </div>
                                                
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#" method="post">
                                                            <div class="form-group" >
                                                                <label class="control-label">Rasid Book Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-book font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="12345678" class="form-control" name="r_book_id" required="" /> </div>
															</div>
															
                                                            <div class="form-group">
                                                                <label class="control-label">Rasid Starting Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-forward font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="xxxxx" class="form-control" name="r_book_starting_no" required="" /> </div>
															</div>
															
															
                                                            <div class="form-group">
                                                                <label class="control-label">Rasid Ending Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-backward font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="xxxxx" class="form-control" 
                                                                name="r_book_end_no" required="" /> </div>
															</div>
																
													
                                                            
																
                                                            
															<div class="margiv-top-12">
															<div class="row">
															<div class="col-md-5">
															<button type="submit" class="btn green">Add Rasid Book</button>
															<button type="button" class="btn grey-salsa btn-outline">Cancel</button>
															</div>
															</div>
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