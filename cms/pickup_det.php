<?php  require_once "conf_session.php" ;
	$id=$_REQUEST['id'];
	$info=pickup_detail($conn,$id);
	
	$city=getstate_city_id($conn,$info[0]['city_id']);
	$state=getstate_city_id($conn,$city[0]['parent_id']);
	$time=time_slot_id($conn,$info[0]['time_id']);
	
	$type;
	if($info[0]['type']==0)	
		$type="SELL";
	else if($info[0]['type']==1)
		$type="DONATE";
	
	$material=$info[0]['material'];
	$mat_array=explode(';',$material);
	array_pop($mat_array);
	//echo sizeof($mat_array);
	//print_r($mat_array);
	$title=$info[0]['name'];

	include "header.php" ;
?>

<!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line"> Details of the request
				</div>
			</div>
		
             
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body" >
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<b>Pickup ID :</b>
										<?php echo $info[0]['id'];?>
									</div>
									
									<div class="col-md-5">
									<b> Name </b>
									<?php echo $info[0]['name']?>
									</div> 
									
									<div class="col-md-4">
									<b>	Phone Number : </b>
									<a href="tel:<?php echo $info[0]['phn_no']?>"><?php echo $info[0]['phn_no']?></a>
									</div>
									
								</div>  
							</div>  
						</div>
					</div>
				</div>
			</div> 
	
			<div class="row">
				<div class="col-md-8">
                    <div class="panel panel-default">
						<div class="panel-body" >
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<b> State </b> 
										<?php echo $state[0]['cat_name']?>
									</div> 
									
									<div class="col-md-4">
									<b> City </b>
									<?php echo $city[0]['cat_name']?>
									</div> 
								</div>  
								
								<div class="row">
									<div class="col-md-8">
										<b>Address :</b>
										<p><?php echo $info[0]['adr']?></p>
									</div> 
								</div>
								
								<div class="row">
									<div class="col-md-4">
										<b> Landmark :</b> 
										<?php echo $info[0]['landmark']?>
									</div> 
								
									<div class="col-md-4">
										<b> Pincode :</b>
											<?php echo $info[0]['pincode']?>
									</div> 
								</div> 
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body" >
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<b> Date :</b>
										<?php echo  $info[0]['date'];?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<b> Time :</b> <?php echo $time[0]['slot'];?>
									</div> 
								</div>  
						
								<div class="row">
									<div class="col-md-4">
										<b>
										<?php echo $type;?>
										</b>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						Material List
						</div>  
					
					
					<div class="panel-body"  id="">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Material Name</th>
                                        <th>Rate</th>
                                        <th>Quantity</th>
										<th>Total Price</th>
									</tr>
								</thead>
                                <tbody>
								<?php 
									$a=1;
									foreach($mat_array as $key => $value){
										$mat_main=explode(',', $value);
										$mat_info=getmaterial_id($conn,$mat_main[0]);
										//print_r($mat_info);
								?>
									<tr>
										<td><?php echo $a;?></td>
										<td><?php echo $mat_info[0]['name'];?></td>
										<td><?php echo $mat_info[0]['rate'] ?></td>
										<td><?php echo $mat_main[1];?></td>
										<td><?php echo $mat_main[1]*$mat_info[0]['rate'];?></td>
									</tr>
								<?php $a++;} ?>
  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
          
            </div>
	</div></div>
    <!-- CONTENT-WRAPPER SECTION END-->
   <?php include "footer.php"?>
