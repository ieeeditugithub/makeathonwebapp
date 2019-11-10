<?php include("../include/config.php");
    $ch_user = @$_SESSION['user_id'];
	
       if(!is_object($ch_user)&&empty($ch_user)){
		//  die("hi");
			//echo "<script>   window.location='".$DomainName."'</script>";
     header("Location: $DomainName");
;	    }
?>