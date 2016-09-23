<?php


	include("settings.php");

	include("header.php");

	include("header_menu.php");

	$sql = "select * from user_table";
	$result = mysqli_query($conn,$sql);
	$c = mysqli_num_rows($result);


?>	


	
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Managed Table</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                                                <th> Sr No</th>
                                                <th> User Name</th>
                                                
                                                <th> Mobile No </th>
                                                <th> Email </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
										
                                        <tbody>
										
											<?php
												$a=1;
												$i=1;
												while($Rs=mysqli_fetch_array($result))
												{
								
											?>
											
											
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
												</td>
												<td>
														<?php echo $a; ?>
                                                </td>
												<td> 
														
														<?php echo $Rs['u_name']; ?>
														<?php echo $Rs['u_first_name']; ?>
														<?php echo $Rs['u_last_name']; ?>
												</td>
												
                                                <td>
														<?php echo $Rs['u_mobile_no']; ?>
                                                </td>
												<td>
														<?php echo $Rs['u_email_id']; ?>
                                                </td>
												
                                                
												
                                                
                                                    
												<td>	
													<a href="edit_user.php?id=<?php echo $Rs['u_id'];?>" class="font-blue btn btn-xs"  type="button" data-toggle="tooltip" title="Edit User">
														
														<i class="fa fa-pencil"></i>
													
													</a>
												
													
													<!-- delete label -->
                                                    
													
													<a onclick="return ConfirmDel('<?php echo $i;?>')" href="delete_user.php?id=<?php echo $Rs['u_id'];?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Remove Bus">
														
														<i class="fa fa-times"></i>
														
													</a>
													
                                                </td>
												
												
												
												
                                            </tr>
											
											<?php
												$i++;
												$a++;
												}
											?>
											
											
                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
					
	
	


<?php

include("footer.php");


?>

