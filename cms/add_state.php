<?php   
	
	include "conf_session.php";
	$title="Add State/City Forms";
	$cat_list=getstate_patid($conn,0);
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
			$query = addCategory($param,$conn);
			//echo $query ;
			//die;
			if($query)
			{	
				echo "<script> $(document).ready(function() {		 console.log('".$query."')
				$('#msg_bt').trigger('click')
				})</script>";
				$cat_list=getstate_patid($conn,0);
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
    <label>State/City Name</label>
	    <input required type="text" class="form-control" name="cat_nm" id="Title" placeholder="Enter Category Name" />
	  </div>
	    <hr />

     <div class="form-group">
	 <label>Category Type</label>
	 <select class="form-control" name="pid">
	 <option value="0">State</option>
	 
	 <?php if($cat_list!=null) foreach($cat_list as $key => $value){ ?>
                <option value="<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];     ?></option> 
<?php } ;?>
	 
	 </select> 
	 </div>
	 <hr>
  <button type="submit" class="btn btn-default">Submit</button>
                          

</form>
 </div>
 
        </div>
    </div>
	  </div>
  	  </div>
	  	  </div>
		  
 <?php include "footer.php" ?>
