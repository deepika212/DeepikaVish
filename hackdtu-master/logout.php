<?php
 session_start(); 
    $_SESSION["key"]=11;
	$_SESSION["name"]="";
	  header( "Location: log.php" );
?>