<?php 
		include "conf_session.php";; 
	$id=$_REQUEST['id']; 
	$cat_list=getstate_patid($conn,0);
	$cat=getstate_city_id($conn,$id);
?>

<div class="form-group">
    <label>State/City Name</label>
	 <input required type="text" class="form-control" name="cat_nm" id="Title" placeholder="Enter Category Name" value="<?php echo $cat[0]['cat_name'];?>"/>
</div>
<hr />

<div class="form-group">
	<label>Category Type</label>
	<select class="form-control" name="pid">
		<option value="0">State</option>
	 
		<?php if($cat_list!=null) foreach($cat_list as $key => $value){ ?>
        <option value="<?php echo $value['cat_id'];?>" <?php if($value['cat_id']==$cat[0]['parent_id']) echo "selected";?>><?php echo $value['cat_name'];     ?></option> 
		<?php } ;?>
	 
	</select> 
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