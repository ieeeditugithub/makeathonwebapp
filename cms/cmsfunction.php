<?php
//all function for state used in cms
function addCategory($p,$conn){ 
	
	$sql="INSERT INTO ".STATE."(name, parent_id)VALUES('".$p['cat_nm']."','".$p['pid']."')";

	if($p['pid']==0)
		$sel='State';
	else
		$sel='City';

	if ($conn->query($sql) === TRUE) {
	  $msg = "New ".$sel." added successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $msg;
}
 
function updatestate($p,$conn){

	$sql = "UPDATE ".STATE." SET name='".$p['cat_nm']."', parent_id='".$p['pid']."', switch=".$p['active']." WHERE id=".$p['state'];

	if($p['pid']==0)
		$sel='State';
	else
		$sel='City';

	if ($conn->query($sql) === TRUE) {
	  $msg = $sel." updated successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	//echo $msg;
	return $msg;
}	


function getstate_city($conn){
	 
	$sql = "SELECT id,name,switch FROM ".STATE;
	$result = $conn->query($sql);
	$option=[];
	//print_r($result);
	if ($result->num_rows > 0){
		while ($row=mysqli_fetch_array($result))
		{
			$option[] = array( 
				'cat_id' => $row['id'],
				'cat_name' => $row['name'],
				'switch' => $row['switch'],
				
			);
		}
	}
	return $option;
}

	
function getstate_city_id($conn,$id){
	
	$sql = "SELECT parent_id,name,switch FROM ".STATE." where id=".$id;
	$result = $conn->query($sql);
	$option=[];
	//print_r($result);
	while ($row=mysqli_fetch_array($result)){
				
			$option[] = array( 
				'parent_id' => $row['parent_id'],
				'name' => $row['name'],
				'switch' => $row['switch'],
				//'cat_link' => $row['cat_link'],
			);
		}

	return $option;
}


	function getstate_patid($conn,$id)
	{
	 
		 $sql = "SELECT id,name,switch FROM ".STATE." where parent_id=$id";
		 $result = $conn->query($sql);
		 $option=[];
		 //print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] = array( 
				'cat_id' => $row['id'],
				'cat_name' => $row['name'],
				'switch' => $row['switch']
				);
			}
		 }
		return $option;
	}


//ends here

//all function for material used in cms
function addMaterial($p,$conn){ 
	
	$sql="INSERT INTO ".MAT."(name, rate)VALUES('".$p['name']."','".$p['rate']."')";

	if ($conn->query($sql) === TRUE) {
	  $msg = "New material added successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $msg;
}

function update_material($p,$conn){

	$sql = "UPDATE ".MAT." SET name='".$p['name']."', rate='".$p['price']."', switch=".$p['active']." WHERE id=".$p['mat'];

	
	if ($conn->query($sql) === TRUE) {
	  $msg = "Material updated successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	//echo $msg;
	return $msg;
} 
 function getmaterial($conn){
	 
	$sql = "SELECT * FROM ".MAT;
	$result = $conn->query($sql);
	$option=[];
	//print_r($result);
	if ($result->num_rows > 0){
		while ($row=mysqli_fetch_array($result))
		{
			$option[] = array( 
				'id' => $row['id'],
				'name' => $row['name'],
				'switch' => $row['switch'],
				'rate' => $row['rate'],
				//'cat_link' => $row['cat_link'],
			);
		}
	}
	return $option;
} 

function getmaterial_id($conn,$id){
	 
	$sql = "SELECT rate,name,switch FROM ".MAT." where id=".$id;
	$result = $conn->query($sql);
	$option=[];
		 //print_r($result);
	if ($result->num_rows > 0) 
	{
		while ($row=mysqli_fetch_array($result)){
				
			$option[] = array( 
				'rate' => $row['rate'],
				'name' => $row['name'],
				'switch' => $row['switch'],
				//'cat_link' => $row['cat_link'],
			);
		}
	}
	return $option;
}

//function on material ends here


//all function for pick_up used in cms


 function pickup_list_dash($conn,$page,$no=5){
	 
   $sql = "SELECT * FROM ".PICKUP." ORDER BY id DESC LIMIT $page, $no";
	  $result = $conn->query($sql);
	  $option=[];
		 while ($row=mysqli_fetch_array($result))
		 { $option[] = array( 
		 'id' => $row['id'],
		 'name' => $row['Name'],
		  'date' => $row['date'],
		  'time_id' => $row['time_id'],
		  'pincode' => $row['pincode'],
		 );
		 }
	    return $option;

 }	 
 
  function pickup_detail($conn,$id){
 $sql = "SELECT * FROM ".PICKUP." where id=$id";
	  $result = $conn->query($sql);
	  $option=[];
		 while ($row=mysqli_fetch_array($result))
		 { $option[] = array( 
		 'id' => $row['id'],
		 'name' => $row['Name'],
		 'material' => $row['material'],
		  'date' => $row['date'],
		  'adr' => $row['Adr'],
		  'landmark' => $row['landmark'],
		  'phn_no' => $row['phn_no'],
		  'type' => $row['type'],
		  'time_id' => $row['time_id'],
		  'city_id' => $row['city_id'],
		  'pincode' => $row['pincode'],
		 );
		
		 }
	    return $option;

 }	 
 
 function pickup_count($conn){
 $sql = "SELECT  COUNT(*) FROM ".PICKUP;
   $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);
	return $row[0];
 }
//pickup function end here
 


 //all function for time used in cms

//add new time slot
function addtime($p,$conn){ 
	
	//strtotime($p['ini']) ;
	$itime=date("H:i", strtotime($p['ini']));
	$etime=date("H:i", strtotime($p['end']));
	$sql="INSERT INTO ".TIME."(ini, end)VALUES('".$itime."','".$etime."')";

	if ($conn->query($sql) === TRUE) {
	  $msg = "New Time Slot added successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $msg;
}
function update_time($p,$conn){

	$sql = "UPDATE ".TIME." SET ini='".$p['ini']."', end='".$p['end']."', switch=".$p['active']." WHERE id=".$p['time'];

	
	if ($conn->query($sql) === TRUE) {
	  $msg = "Time Slot updated successfully";  	
	} 
	else {
		$msg = "Error: " . $sql . "<br>" . $conn->error;
	}
	//echo $msg;
	return $msg;
}
function time_slot_id($conn,$id)
	{
	 
		 $sql = "SELECT ini,end FROM ".TIME." where id=$id";
		 $result = $conn->query($sql);
		 $option=[];
		// print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] =array( 
				'slot' => $row['ini']." - ".$row['end']
				) ;
			}
		 }
		 //print_r($option);
		return $option;
	}
	
	
 
 function gettime_id($conn,$id)
	{
	 
	 $sql = "SELECT * FROM ".TIME." where id=$id";
		 $result = $conn->query($sql);
		 $option=[];
		 //print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] = array( 
				'ini' => $row['ini'],
				'end' => $row['end'],
				'switch' => $row['switch'],
				//'cat_link' => $row['cat_link'],
				);
			}
		 }
		// print_r($option);
		return $option;
	}

function time_all($conn)
	{
	 
	 $sql = "SELECT * FROM ".TIME."";
		 $result = $conn->query($sql);
		 $option=[];
		 //print_r($result);
		 if ($result->num_rows > 0) 
		 {
			 while ($row=mysqli_fetch_array($result))
			{
				$option[] = array( 
				'id' => $row['id'],
				'ini' => $row['ini'],
				'end' => $row['end'],
				'switch' => $row['switch'],
				//'cat_link' => $row['cat_link'],
				);
			}
		 }
		// print_r($option);
		return $option;
	}
	
//ends here : time



//all function for user  used in cms
function adduser($p,$conn){ 
$p['pass']=md5($p['pass']);
	$sql="INSERT INTO ".ADMIN."(username,password,desg,name)VALUES('".$p['usernm']."','".$p['pass']."','".$p['desg']."','".$p['name']."')";

if ($conn->query($sql) === TRUE) {
  $msg= "New User created successfully";  	
} else {
    $msg= "Error: " . $sql . "<br>" . $conn->error;
}
return $msg;
}
	
function edituser($p,$conn){ 

	$p['pass']=md5($p['pass']);
	
	$sql="UPDATE ".ADMIN." SET username='".$p['usernm']."', password='".$p['pass']."', desg='".$p['desg']."', name='".$p['name']."', switch=".$p['switch']." WHERE user_id=".$p['user_id'];

	if ($conn->query($sql) === TRUE) {
	  $msg= "User details modified successfully";  	
	} else {
		$msg= "Error: " . $sql . "<br>" . $conn->error;
	}
	return $msg;
}
	 

function get_user_table($conn){
	 
	 $sql = "SELECT * FROM ".ADMIN;
	 $resul = $conn->query($sql);
	 $optio=[];
	//print_r($resul);
//if ($result->num_rows > 0) /{
      //output data of each row
	 while ($row=mysqli_fetch_array($resul))
{
    $optio[] = array( 
        'user_id' => $row['user_id'],
    	'username' => $row['username'],
		'password' => $row['password'],
		'switch' => $row['switch'],
		'name' => $row['name'],
    );
}
//print_r($optio);
    return $optio;

 }  

function get_user_data($conn,$id){
	 
	 $sql = "SELECT * FROM ".ADMIN." WHERE user_id=".$id;
	 $resul = $conn->query($sql);
	 $optio=[];
	//print_r($result);
//if ($result->num_rows > 0) /{
      //output data of each row
	 while ($row=mysqli_fetch_array($resul))
{
    $optio[] = array( 
        'user_id' => $row['user_id'],
        'desg' => $row['desg'],
		'username' => $row['username'],
		'password' => $row['password'],
		'name' => $row['name'],
    );
}
    return $optio;

 }   
 
 // user function ends here



?>