<?php  require_once "conf_session.php" ;
$user_db=get_user_table($conn);
$user = get_user_data($conn,@$_SESSION['user_id']);
//print_r($user_db);

$title="User Settings";
 include "header.php" ;
 
 if (!empty($_POST)){
	
	$param = $_POST;
	//echo "<pre>";
	//print_r($param);
	//echo "</pre>";
	//die();
	if(!empty($param)){
		if($param['pass']==$param['cmpass'])
		{
		$query = edituser($param,$conn);
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
	}
}
 //print_r($user_db);
 //echo $user[0]['username'];
?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Settings</h1>
                    </div>
                </div>
               <?php if($user[0]['desg']<=2)
				   include "user_table.php" ;?>
					
 <div class="col-md-12 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Info Panel
                        </div>
						
                        <div class="panel-body">
						 <form method='post' action="">
						 
   <input style="display:none;" readonly="readonly" class="form-control" name="user_id"  value="<?php echo $user[0]['user_id'];?>" required /> 
   
<div class="row">
  <div class="col-md-6 col-md-6">
						<div class="form-group">
    <label>Username</label>
	    <input required type="text" readonly="readonly" class="form-control" name="usernm" id="Title" placeholder="Enter Username" value="<?php echo $user[0]['username'];?>" required />
	  </div>  </div>
	  	<div class="col-md-6 col-md-6">
	  <div class="form-group">
    <label>Desgination</label>
	    <input  type="number" readonly="readonly" class="form-control" name="desg" id="desg" placeholder="Confirm Desgination" value="<?php echo $user[0]['desg'];?>" />
	  </div> </div>	 
	  </div>
	  <hr>
	  <div class="row">
  <div class="col-md-6 col-md-6">
						<div class="form-group">
    <label>Name</label>
	    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $user[0]['name'];?>" required />
	  </div>  </div></div>
	    <hr />
	  <div class="row">
		<div class="col-md-6 col-md-6">
  <div class="form-group">
    <label>Password</label>
	    <input  type="password" class="form-control" name="pass" id="shl_mail" required placeholder="Enter Password" />
	  </div></div>
	   <div class="col-md-6 col-md-6">
		    <div class="form-group">
    <label>Confirm Password</label>
	    <input  type="password" class="form-control" name="cmpass" id="shl_mail" required placeholder="Confirm Password" />
	  </div></div></div>
	    <hr />
	
	  	  <div class="form-group" style="display:none">
    <label>Status</label>
	
	 	   <div >
    <label>
    <input required type="radio"  name="switch" value=1 checked/>
      Enable</label>
  </div>
   	   <div >
    <label>
    <input required type="radio"  name="switch" value=0  />
       Disable</label>
  </div>
     
	 </div>
	  <button type="submit" class="btn btn-default">  <i class="fa fa-refresh"></i> Update</button>
                          </form>  						
                        </div>
                        <!--div class="panel-footer">
                            Panel Footer
                        </div-->
                    </div>
                </div>					
                </div>
          
            </div>
			  
    
    <!-- CONTENT-WRAPPER SECTION END-->
	
   <?php include "footer.php";?>
