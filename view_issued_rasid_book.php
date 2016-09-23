<?php


include("connection_db.php");

include("header.php");

include("header_menu.php");

	$sql = "select * from user_details";
	$result = mysqli_query($con,$sql);
	$c = mysqli_num_rows($result);


?>	


	
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Issued Rasid Book</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                                                
												<th> Rasid Book No </th>
												<th> Username </th>
                                                <th> Email </th>
                                                <th> Mobile No </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
										
                                        <tbody>
										
											<?php
												$i=1;
												while($Rs=mysqli_fetch_array($result))
												{
								
											?>
											
											
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
												</td>
												
												<td> 
														<?php echo $Rs['user_first_name']; ?>
														
														
												</td>
												
                                                <td>
														<?php echo $Rs['user_first_name']; ?>
														<?php echo $Rs['user_last_name']; ?>
                                                   
                                                </td>
													 
                                                <td>
												
													<a href="mailto:shuxer@gmail.com"> 	<?php echo $Rs['user_email']; ?>  </a>
												
												</td>
												
                                                <td class="center"> 
														 <a href="mailto:shuxer@gmail.com"> 	<?php echo $Rs['user_mobile_no']; ?>  </a>
												</td>
												
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
													
													<!-- edit label -->
                                                    
													
													<a href="edit_user.php?id=<?php echo $Rs['user_id'];?>" class="font-blue btn btn-xs"  type="button" data-toggle="tooltip" title="Edit User">
														
														<i class="fa fa-pencil"></i>
													
													</a>
												
													
													<!-- delete label -->
                                                    
													
													<a onclick="return ConfirmDel('<?php echo $i;?>')" href="delete_user.php?id=<?php echo $Rs['user_id'];?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Remove Bus">
														
														<i class="fa fa-times"></i>
														
													</a>
													
                                                </td>
												
												
												
												
                                            </tr>
											
											<?php
												$i++;
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

