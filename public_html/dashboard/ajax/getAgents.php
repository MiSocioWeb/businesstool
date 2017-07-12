<?php

	session_start();
	$idUser=$_SESSION['idUSER'];
	$idBusiness=$_SESSION['idBusiness'];
	include "../db.php";
	$relation_admin=$_SESSION['relation_admin'];
	$query=mysql_query("SELECT * FROM users WHERE relation_admin=$relation_admin OR id=$relation_admin") or die(mysql_error());
	while($row=mysql_fetch_array($query)){
		$foto=$row['foto'];
		if(!$foto) $foto='nopic.png';
		echo '
					<li><a href="#" class="currentAgent" idDB="'.$row['id'].'" nameAgent="'.$row['name'].'" onclick="putCurrent('.$row[id].')"><img src="'.$foto.'" width="20"/>&nbsp;&nbsp;'.$row['name'].'</a></li>
					<li class="divider"></li>
											
		';
	}
?>