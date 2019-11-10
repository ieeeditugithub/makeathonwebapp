<?php  

	include "conf_session.php";
	
	$title="Edit Material Forms";
	$cat_list=getmaterial($conn);
	
	include "header.php";
	
	if (!empty($_POST))
	{

		$param = $_POST;
		/*echo "<pre>";
		print_r($param);
		echo "</pre>";
		die;*/
		if(!empty($param))
		{ 
			$query = update_material($param,$conn);
			//echo $query ;
			//die;
			if($query)
			{
				echo "<script> $(document).ready(function() {		 console.log('".$query."')
				$('#msg_bt').trigger('click')
				})</script>";
				$cat_list=getmaterial($conn);
			}
		}
	}
?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Material Form </h1>
                </div>
            </div>
            
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
						<div class="panel-body">
							<form method='post' action="">
								<div class="form-group">
									<label>Material</label>
									<select name="mat" id="mat"  class="form-control" >
										<?php foreach($cat_list as $key => $value){ ?>
												<option value="<?php echo $value['id'];?>"><?php echo $value['name'];

										} 	?></option> 
 

									</select>
								</div>	
								<hr />
								<div id="data">
								</div>
  
								<button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Submit</button>
                          

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		  
<?php include "footer.php" ?>
<script src="assets\js\mat.js"></script>