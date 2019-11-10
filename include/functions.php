<?php
function getAllItems($db){ 
	
	$sql = "SELECT * FROM ".ITEM;
	$result = $db->select($sql);
	return $result;
}

function getItemsById($db,$array){ 
	
	$sql = "SELECT * FROM ".ITEM." WHERE id IN (";
	for($i=0;$i<count($array);$i++){
		$sql.=$array[$i];
		if($i!=count($array)-1)
			$sql.=',';
	}
	$sql.=')';
	$result = $db->select($sql);
	return $result;
}
?>