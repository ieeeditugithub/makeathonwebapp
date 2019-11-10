<?php 
session_start();

date_default_timezone_set('Asia/calcutta');
$path=$_SERVER['DOCUMENT_ROOT'];
$docRootPath =$_SERVER["DOCUMENT_ROOT"];
$DomainName = "https://".$_SERVER['HTTP_HOST'];
 
if($_SERVER['HTTP_HOST']=='localkabadi.com'||$_SERVER['HTTP_HOST']=='www.localkabadi.com')
{
	include_once("srvdb.php");
	define('DEBUG', false);
}
else
{
	include_once("lcldb.php");
	define('DEBUG', true);
}



if(DEBUG == true)
{
    ini_set('display_errors', 'On');
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	error_reporting(E_ALL);
}
else
{
    ini_set('display_errors', 'Off');
    error_reporting(0);
}


//tables
define("USER", "user");  
define("ITEM", "items");  

?>