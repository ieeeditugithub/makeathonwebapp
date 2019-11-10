<?php 
	include("conf_session.php"); 
	
	$page=$_REQUEST['page']; 
	
	$page-=1;
	$page*=20;
	$list=pickup_list_dash($conn,$page,20);
?>
<?php include "pickup_table.php" ?>