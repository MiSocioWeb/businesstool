<?php 
	session_start();
	$idUser=$_SESSION['idUSER'];
	include "../db.php";
	if($idUser){
		$nameUser=$_REQUEST['nameUser'];
		$adressUser=$_REQUEST['adressUser'];
		$emailUser=$_REQUEST['emailUser'];
		$phoneUser=$_REQUEST['phoneUser'];
		$imgPerfil=$_REQUEST['imgPerfil'];

		$_SESSION['nameUser']=$nameUser;
		$_SESSION['imgUser']=$imgPerfil;
		mysql_query("UPDATE users SET name='$nameUser' , adress='$adressUser' , email='$emailUser' , telefono='$phoneUser', foto='$imgPerfil' WHERE id=$idUser") or die(mysql_error());
		echo "true";
		insert_log("$nameUser Has updated your self profile information ", 1 );
	}
	/*nameUser: nameUser,
              adressUser : adressUser,
              emailUser : emailUser,
              phoneUser : phoneUser,
              imgPerfil : imgPerfil*/

?>