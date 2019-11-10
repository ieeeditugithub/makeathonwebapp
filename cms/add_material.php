<?php   
	
	include "conf_session.php";
	$title="Add Material Forms";

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
			$query = addMaterial($param,$conn);
			//echo $query ;
			//die;
			if($query)
			{
				echo "<script> $(document).ready(function() {		 console.log('".$query."')
				$('#msg_bt').trigger('click')
				})</script>";
			}
		}
	}
?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add State/City Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                       <form method='post' action="">
  <div class="form-group">
    <label>Material Name</label>
	    <input required type="text" class="form-control" name="name" id="Title" placeholder="Enter Material Name" />
	  </div>
	    <hr />

    <div class="form-group">
    <label>Material Price</label>
	    <input required type="number" class="form-control" name="rate" id="Title" placeholder="Enter Material Price" />
	  </div>
	    <hr /> 
  <button type="submit" class="btn btn-default">Submit</button>
                          

</form>
 </div>
 
        </div>
    </div>
	  </div>
  	  </div>
	  	  </div>
		  
 <?php include "footer.php" ?>
