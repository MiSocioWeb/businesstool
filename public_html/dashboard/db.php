<?php 
	$conection=mysql_connect("localhost" , "root" , "misocioweb.2017") or die(mysql_error());
	mysql_select_db("bt");
	include "functions/log.php"
?>