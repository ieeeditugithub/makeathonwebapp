<?php   
	
	include "conf_session.php";
	$title="Add Time Slot Forms";
	include "header.php";
	
	
	//print_r($cat_list); 

	if (!empty($_POST))
	{

		$param = $_POST;
		/*echo "<pre>";
		print_r($param);
		echo "</pre>";
		die;*/
		if(!empty($param))
		{ 
			$query = addtime($param,$conn);
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
                        <h1 class="page-head-line">Add Time Slot Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                       <form method='post' action="">
  <div class="form-group">
    <label>Intial Time</label>
	    <input required type="time" class="form-control" name="ini" id="ini" placeholder="Enter Intial Time" />
	  </div>
	    <hr />

    <div class="form-group">
    <label>End Time</label>
	    <input required type="time" class="form-control" name="end" id="end" placeholder="Enter End Time" />
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
