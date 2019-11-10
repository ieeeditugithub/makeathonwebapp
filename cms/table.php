<?php  require_once "conf_session.php" ;
$mat=getmaterial($conn);
$state=getstate_patid($conn,0);
$time=time_all($conn);
$title="Data Tables";
 include "header.php" ;
?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Data Tables</h1>
			</div>
		</div>
    
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Material
						<a href="edit_material.php"  style="float:right;">Edit</a> 
						<div style="float:right;">&nbsp;/&nbsp;</div>
						<a href="add_material.php"  style="float:right;">Add</a> 
					</div>
                
					<div class="panel-body" id="material">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Material ID</th>
										<th>Material Name</th>
										<th>Rate</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $a=1; foreach($mat as $key => $value){ ?>
									<tr> 
										<td><?php echo $a;?></td>
										<td> <?php echo $value['id'];?></td>
										<td><?php echo $value['name']; ?></td>
										<td><?php echo $value['rate'] ;?></td>
										<td><?php  if($value['switch']==1)echo "Enabled"; else echo "Disabled"; ?></td>
									</tr>
									<?php $a++;} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<div class="panel panel-default">
					<div class="panel-heading">
						State
						<a href="edit_state.php"  style="float:right;">Edit</a> 
						<div style="float:right;">&nbsp;/&nbsp;</div>
						<a href="add_state.php" style="float:right;">Add</a>
					</div>
					
					<div class="panel-body"  id="state">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" >
								<thead>
									<tr>
										<th>#</th>
										<th>State ID</th>
										<th>State</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $a=1; foreach($state as $key => $value){ ?>
										<tr> 
											<td><?php echo $a;?></td>
											<td> <?php echo $value['cat_id'];?></td>
											<td>
												<a href="state.php?id=<?php echo $value['cat_id'];?>"><?php echo $value['cat_name']; ?></a>
											</td>
											<td><?php
													if($value['switch']==1) echo "Enabled"; else echo "Disabled" ;
												?>
											</td>
										</tr>
									<?php $a++;} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		   <div class="col-md-12" >
				<div class="panel panel-default">
					<div class="panel-heading">
						Time
						<a href="edit_time.php"  style="float:right;">Edit</a> 
						<div style="float:right;">&nbsp;/&nbsp;</div>
						<a href="add_time.php" style="float:right;">Add</a>
					</div>
					
					<div class="panel-body"  id="state">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" >
								<thead>
									<tr>
										<th>#</th>
										<th>Time Slot ID</th>
										<th>Initial Time</th>
										<th>End Time</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $a=1; foreach($time as $key => $value){ ?>
										<tr> 
											<td><?php echo $a;?></td>
											<td> <?php echo $value['id'];?></td>
											<td><?php echo $value['ini']; ?></td>
											<td><?php echo $value['end']; ?></td>
											<td><?php  //echo $value['switch'];
											if($value['switch']==1) echo "Enabled"; else echo "Disabled" ;?></td>
										</tr>
									<?php $a++;} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <!-- CONTENT-WRAPPER SECTION END-->
   <?php include "footer.php";?>
