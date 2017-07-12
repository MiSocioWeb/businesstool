<?php 
	$conection=mysql_connect("localhost" , "misocioweb" , "misocioweb.2017") or die(mysql_error());
	mysql_select_db("bt");
	include "functions/log.php"
?>