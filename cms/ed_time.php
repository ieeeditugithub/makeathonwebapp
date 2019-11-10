<?php 
	include("conf_session.php"); 
	
	$id=$_REQUEST['id']; 
	
	$cat=gettime_id($conn,$id);
?>

<div class="form-group">
    <label>Initial Time</label>
	 <input required type="time" class="form-control" name="ini" id="ini" placeholder="Enter Initial Time" value="<?php echo $cat[0]['ini'];?>"/>
</div>
<hr />

<div class="form-group">
	<label>End Time</label>
	<input required type="time" class="form-control" name="end" id="end" placeholder="Enter End Time" value="<?php echo $cat[0]['end'];?>"/>
</div>
<hr>

<div class="form-group">
    <label>Status</label>
	
	<div >
		<label>
			<input required type="radio" <?php if($cat[0]['switch']==1)echo "checked" ?> name="active" value=1 />
			Enable
		</label>
	</div>
   	<div >
		<label>
			<input required type="radio"  <?php if($cat[0]['switch']==0)echo "checked" ?> name="active" value=0  />
			Disable
		</label>
	</div>
     
</div>
<hr />