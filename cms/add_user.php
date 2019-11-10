<?php   require_once "conf_session.php" ;
 $title="Add User Forms";
 $user = get_user_data($conn,@$_SESSION['user_id']);
 
 
 if($user[0]['desg']>1)
 {	
	//echo "<script>alert('Restriced Access!! ONLY ADMIN..') </script>";
	//sleep(100);
	 header("Location: $DomainName");
	 exit;
	 //
 }
$msg='';

include "header.php";
if (!empty($_POST)){


//echo $cat_nm;
//echo $pat_id;

	
	$param = $_POST;
	//echo "<pre>";
	//print_r($param);
	//echo "</pre>";
	//echo $param['pass']."--".$param['cmpass'];
	if(!empty($param)){
		if($param['pass']==$param['cmpass'])
		{ //echo "hiiii";
			$query = adduser($param,$conn);
			if($query)
		{	echo "<script> $(document).ready(function() {		 console.log('ajax click')
	  $('#msg_bt').trigger('click')
	  
	
		})</script>";}
	}
	else
	{//echo "-->";
		$query="Password dont match";
		if($query)
		{	echo "<script> $(document).ready(function() {		 console.log('ajax click')
	  $('#msg_bt').trigger('click')
	  
	
		})</script>";}
	}

}}



?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add User Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                        <div class="panel-body">
                       <form method='post' action="">
  <div class="form-group">
    <label>Name</label>
	    <input required type="text" class="form-control" name="name" placeholder="Enter Name" />
	  </div>
	    <hr />
 <div class="form-group">
    <label>Username</label>
	    <input required type="text" class="form-control" name="usernm" placeholder="Enter Username" />
	  </div>
	    <hr />
		
  <div class="form-group">
    <label>Password</label>
	    <input  type="password" class="form-control" name="pass" id="shl_mail" placeholder="Enter Password" />
	  </div>
	    <hr />
		    <div class="form-group">
    <label>Confirm Password</label>
	    <input  type="password" class="form-control" name="cmpass" id="shl_mail" placeholder="Confirm Password" />
	  </div>
	    <hr />
       	 	<?php echo $msg; ?>	 
			  <div class="form-group">
    <label>Desgination</label>
	    <input  type="number" class="form-control" name="desg" id="desg" placeholder="Confirm Desgination" />
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
 <script src="assets/js/geturl.js"></script> 