<?php  require_once "conf_session.php";
$user_db=get_user_table($conn);
$title="Edit User Forms ";

 include "header.php";
 if($user[0]['desg']>1)
 {
	 echo "<script>alert('Restriced Access!! ONLY ADMIN..');window.location='user.php' </script>";
 }
if (!empty($_POST)){
	
	$param = $_POST;
	//echo "<pre>";
	//print_r($param);
	//echo "</pre>";
	
	if(!empty($param)){
		if($param['pass']==$param['cmpass'])
		{
		$query = edituser($param,$conn);
			if($query)
		{	echo "<script> $(document).ready(function() {		 console.log('ajax click')
	  $('#msg_bt').trigger('click')
	  
	
		})</script>";
		$user_db=get_user_table($conn);
		}
	}
	else
	{//echo "-->";
		$query="Password dont match";
		if($query)
		{	echo "<script> $(document).ready(function() {		 console.log('ajax click')
	  $('#msg_bt').trigger('click')
	  
	
		})</script>";}
	}}
}

?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit User Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                       <form method='post' action="">
  <div class="form-group">
    <label>User Names</label>
  <select name="user_id"  id="user_id" class="form-control">
<?php foreach($user_db as $key => $value){ ?>
                <option value="<?php echo $value['user_id'];?>"><?php echo $value['username'];

		} 	?></option> 
 

</select>
</div>	
	    <hr />
		 <div id="data">
 </div>

  <button type="submit" class="btn btn-default">  <i class="fa fa-refresh"></i> Update</button>
                          

</form>
</div>
 
        </div>
    </div>
	  </div>
  	  </div>
	  	  </div>  </div>
 <?php include "footer.php" ?>
	  <script src="assets\js\user.js"></script>