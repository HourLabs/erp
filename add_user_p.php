<?php


include("connection_db.php");

include("header.php");

include("header_menu.php");




?>	




                    
					
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
                                                
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">First Name</label>
                                                                <input type="text" placeholder="John" class="form-control" /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Last Name</label>
                                                                <input type="text" placeholder="Doe" class="form-control" /> </div>
																
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-mobile font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="+919988665544" class="form-control" /> </div>
															</div>
																
															<div class="form-group">
                                                                <label class="control-label">Email ID</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-envelope font-blue"></i>
																	</span>
														<i class="fa fa-exclamation tooltips" data-original-title="Invalid email." data-container="body"></i>
                                                                <input name="email" type="text" class="form-control"/> </div>
															</div>
															
															
															<div class="form-group">
																<label class="control-label">Date of Birth</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" /></div>
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
													
                                                
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" /></div>
															</div>
											
											
														
																		
																
                                                            <div class="form-group">
                                                                <label class="control-label">Adress</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-home font-blue"></i>
																	</span>
                                                                <input type="text" placeholder="Street " class="form-control" /> </div>
															</div>
															
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" placeholder="City / Village" class="form-control" /> </div>
																
															<div class="form-group">
                                                                <label class="control-label">State</label>
                                                                
																
																
																
											
																
																<select class="form-control bfh-states" data-country="IN"></select>

															</div>
																
																
															<div class="form-group">
                                                                <label class="control-label">Pincode</label>
                                                                <input type="text" placeholder="XXXXXX" class="form-control" /> </div>
															
															
                                                            
																
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> Add User </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
															
															<div class="form-actions">
															<div class="row">
															<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn green">Submit</button>
															<button type="button" class="btn grey-salsa btn-outline">Cancel</button>
															</div>
															</div>
															</div>
															
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
													
													
                                          
													
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Rasid Number</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
															
															<div class="form-group">
                                                                <label class="control-label">Subcrition Type</label>
                                                                <input type="password" class="form-control" /> </div>
																
                                                                <label class="control-label">Payment Mode</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            
																
																<div class="form-group">
																<label class="control-label">Subcrition Payment Date</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
											<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" /></div>
															</div>
																	
																<div class="form-group">
																<label class="control-label">Subcrition Starting Date</label>
																<div class="input-group input-icon right">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar font-blue"></i>
																	</span>
														
                                                
                                              <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" /></div>
															</div>
																
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Change Password </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class="tab-pane" id="tab_1_4">
                                                        <form action="#">
                                                            <table class="table table-light table-hover">
                                                                <tr>
                                                                    <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="radio" name="optionsRadios1" value="option1" /> Yes </label>
                                                                        <label class="uniform-inline">
                                                                            <input type="radio" name="optionsRadios1" value="option2" checked/> No </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!--end profile-settings-->
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn red"> Save Changes </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
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




<?php

include("footer.php");


?>