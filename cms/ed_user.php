<?php 	include "conf_session.php";
$id=$_REQUEST['id'];
$user=get_user_data($conn,$id);
//print_r($school);
?>
<div class="form-group">
    <label>Name</label>
	    <input  type="text" class="form-control" name="name"  placeholder="Enter Name" value="<?php echo $user[0]['name'];?>" required/>
	  </div>
	    <hr />
<div class="form-group">
    <label>Username</label>
	    <input required type="text" class="form-control" name="usernm"  placeholder="Enter Username" value="<?php echo $user[0]['username'];?>" />
	  </div>
	    <hr />
		
  <div class="form-group">
    <label>Password</label>
	    <input  type="password" class="form-control" name="pass" id="shl_mail" required placeholder="Enter Password" />
	  </div>
	    <hr />
		    <div class="form-group">
    <label>Confirm Password</label>
	    <input  type="password" class="form-control" name="cmpass" id="shl_mail" required placeholder="Confirm Password" />
	  </div>
	    <hr />
	 <div class="form-group">
    <label>Desgination</label>
	    <input  type="number" class="form-control" name="desg" id="desg" placeholder="Confirm Desgination" value="<?php echo $user[0]['desg'];?>" />
	  </div>
	    <hr />
	  	  <div class="form-group">
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
	 <hr />
	