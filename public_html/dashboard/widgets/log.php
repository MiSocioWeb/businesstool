<?php 
	session_start();
	$idUser=$_SESSION['idUSER'];
	$idBusiness=$_SESSION['idBusiness'];
	include "db.php";
	$relation_admin=$_SESSION['relation_admin'];
	$query=mysql_query("SELECT * FROM users WHERE relation_admin=$relation_admin OR id=$relation_admin") or die(mysql_error());
	echo '<ul class="list-unstyled recent_activity">';
	echo '<li><div class="heading">Recent2 activity <span class="pull-right"><a href="#"><i class="ti-reload"></i></a></span></div></li>';
	$result =mysql_num_rows($query);
	while ($row=mysql_fetch_array($query)){
		$foto = $row['foto'];
		$name = $row['name'];
		$currentUser = $row['id'];
		if(!$foto) $foto="nopic.png";
		//echo "<img src='$foto' width='30' /><br>";
		$queryLog=mysql_query("SELECT * FROM log_activity WHERE user_id=$currentUser ORDER BY id DESC LIMIT 3  ") or die(mysql_error());
		while($rowActivity=mysql_fetch_array($queryLog)){
			$description=$rowActivity['description'];
			$idActivity=$rowActivity['id'];
			//echo $description . "<br>";
			echo '
			<li><a href="#">
                <div class="img_holder">
                  <img id="activity'.$idActivity.'" src="'.$foto.'" alt="" data-pagespeed-url-hash="491040364" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <h2>'.$name.'</h2>
                <p>'.$description.'</p>
              </a>
              </li>
			';
		}
	}

	echo '</ul>';

?>


        