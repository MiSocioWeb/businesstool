<?php 
	
	session_start();
	$idUser=$_SESSION['idUSER'];
	$idBusiness=$_SESSION['idBusiness'];
	include "../db.php";
	$relation_admin=$_SESSION['relation_admin'];
	$query=mysql_query("SELECT * FROM users WHERE relation_admin=$relation_admin OR id=$relation_admin") or die(mysql_error());
	while($row=mysql_fetch_array($query)){
		$idU=$row['id'];
		$foto=$row['foto'];
		if(!$foto) $foto="nopic.png";
		$name=$row['name'];
		$queryTask=mysql_query("SELECT * FROM task_simple WHERE (id_user=$idU OR id_to=$idU)  AND status=1 ORDER BY id DESC") or die(mysql_error());
		while($rowTask=mysql_fetch_array($queryTask)){

			echo '<li class="list-group-item" id="taskControl" idDB="'.$rowTask['id'].'">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo'.$rowTask['id'].'" onclick="markComplete('.$rowTask['id'].');">
								<label for="todo'.$rowTask['id'].'"><span></span><b> #'.(312+$rowTask['id']).'</b> <span class="ion-arrow-right-a"></span> &nbsp;&nbsp; <i> '.$name.'</i> &nbsp;&nbsp; <span class="ion-arrow-swap"></span> &nbsp;&nbsp; '.$rowTask['description'].'</label>
							</div>
							<div class="notification">
								<a title="Mark Complete" style="cursor:pointer;" onclick="markComplete('.$rowTask['id'].');" ><i class="ion-checkmark-round" style="color:green;" ></i></a>
							</div>
						</li>';			
		}
	}

?>


						