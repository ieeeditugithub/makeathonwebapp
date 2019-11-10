 <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Users
						     <!--a  href="delete_school.php"  style="float:right;">Disable</a>
							  <div  style="float:right;">&nbsp;/&nbsp;</div>
						   <a href="activate_school.php"  style="float:right;">Enable</a> 
						   <div style="float:right;">&nbsp;/&nbsp;</div-->
						  <?php  if($user[0]['desg']==1)
												{?>
						   <a href="edit_user.php" target="_blank"  style="float:right;">Edit</a> 
							 <div style="float:right;">&nbsp;/&nbsp;</div>
												<a href="add_user.php" target="_blank"   style="float:right;">Add</a> <?php }?>
						  
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                         	<th>Username</th>
											<th>Name</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
				 <?php $a=1; foreach($user_db as $key => $value){ ?>
				 
                <tr> 
				<td><?php echo $a;?></td>
				<td> <?php echo $value['user_id'];?></td>
				<td><?php echo $value['username'] ;?></td>
				<td><?php echo $value['name'] ;?></td>
				<td><?php  if($value['switch']==1)echo "Enabled"; else echo "Disabled"; ?></td>
				</tr>
				<?php $a++;} ?>
                                
                                    </tbody>
                                </table>
								       </div>
                        </div>  </div>  </div>
						</div>