<?php 
	session_start();
	$idUser=$_SESSION['idUSER'];
	$idDB=$_REQUEST['idDB'];
	if($idUser){
		include "../db.php";
		mysql_query("DELETE FROM passwords_files WHERE id=$idDB") or die(mysql_error());
		insert_log("Has deleted a password" , 1);
		echo "true";
	}

?>