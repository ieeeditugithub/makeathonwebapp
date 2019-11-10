<?php
	include("../include/config.php");
   session_start();
   
   if(session_destroy()) {
      header("Location: $DomainName/cms");
   }
?>