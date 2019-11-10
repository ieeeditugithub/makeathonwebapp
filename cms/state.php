<?php   require_once "conf_session.php" ;

$id=$_REQUEST['id'];
$state=getstate_city_id($conn,$id);
//print_r($state);

$cities=getstate_patid($conn,$id);

 $title=$state[0]['name'];
 
  include "header.php" ;
?>

<!-- MENU SECTION END-->
	<div class="content-wrapper">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line"> <?php echo $title;?>
				</div>
			</div>
		
			<div class="row">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								List of State
							</div>  
						
							<div class="panel-body" id="school">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>City ID</th>
												<th>City Name</th>
												<th>Switch</th>
											</tr>
										</thead>
										<tbody>
										<?php $a=1; foreach($cities as $key => $value){?>
										<tr>
											<td><?php echo $a;?></td>
											<td> <?php echo $value['cat_id'];?></td>
											<td><?php echo $value['cat_name'] ;?></td>
											<td>
											<?php
												if($value['switch']==1) echo "Enabled";
												else echo "Disabled" ;
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
            </div>
		</div>
	</div>

<?php include "footer.php";?>
