<?php
	
	$idDB=$_REQUEST['idDB'];
	include "../db.php";
	$queryPass=mysql_query("SELECT * FROM passwords_files WHERE id=$idDB") or die(mysql_error());
	$json='';
	while($row=mysql_fetch_array($queryPass)){
		$json.='{  "id"  : "'.$row[id].'" , "name" : "'.$row['name'].'" , "description" : "'.$row['description'].'", "host" : "'.$row['host'].'" , "user" : "'.$row['user'].'" , "pass" : "'.$row['pass'].'" , "type" : "'.$row['type'].'" }';
	}
	echo $json.'';

?>