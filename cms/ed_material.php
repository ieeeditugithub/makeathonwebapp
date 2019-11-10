<?php 
	include("conf_session.php"); 
	
	$id=$_REQUEST['id']; 
	
	$cat=getmaterial_id($conn,$id);
?>

<div class="form-group">
    <label>Material Name</label>
	 <input required type="text" class="form-control" name="name" id="name" placeholder="Enter Material Name" value="<?php echo $cat[0]['name'];?>"/>
</div>
<hr />

<div class="form-group">
	<label>Material Price</label>
	<input required type="text" class="form-control" name="price" id="price" placeholder="Enter Material Price" value="<?php echo $cat[0]['rate'];?>"/>
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