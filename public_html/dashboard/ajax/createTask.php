<?php 
	session_start();
	$id_to=$_REQUEST['idUser'];
	$idUser=$_SESSION['idUSER'];
	$task=$_REQUEST['task'];
	include "../db.php";
	date_default_timezone_set('America/Guayaquil');
	$date_in=date("d/m/Y H:i:s");
	$query=mysql_query("INSERT INTO task_simple (id_to,id_user,description,date_in) VALUES ($id_to,$idUser,'$task','$date_in') ") or die(mysql_error());
	$lastID=mysql_insert_id();
	$lastID=312 + $lastID;
	insert_log("has created the task # $lastID with description $task ",1);
	$queryEmail=mysql_query("SELECT * FROM users WHERE id=$id_to") or die(mysql_error());
	$fetchEmail=mysql_fetch_array($queryEmail);
	$emailRecibe=$fetchEmail['email'];
	$nameRecibe=$fetchEmail['name'];
	$fotoRecibe=$fetchEmail['foto'];
	if(!$fotoRecibe) $fotoRecibe='http://businesstool.info/dashboard/nopic.png';
	$subject ="BT - Task #$lastID Asigned to you";
	$htmlEmail='<html>
	<head>
	</head>
	<body style="background-color:#EFF3F8;font-family: arial" >
		
	<center>
	<div style="margin-top:50px;"></div>
	<br><br>
	<table width="50%" >
		<tr>
			<td class="header" valign="center" width="50%">
				<table>
					<tr>
						<td valign="center">
							<img src="http://businesstool.info/logo500.png" width="50" /> 
						</td>
						<td valign="center">
							<b>Business Tool - Task Control </b>
						</td>
					</tr>
				</table>
			</td>
			<td align="right">
				<a href="http://businesstool.info" >>Log In</a>
			</td>
			
		</tr>
		<tr>
			<td colspan="2" align="center">
				<img src="http://businesstool.info/dashboard/task.jpg" width="100%" style="max-width: 1024px;" />
				<br>
				<div style="width:100%;background-color: white;padding:0px;max-width: 1024px;margin-top:30px;">
					<br/>
					<h1>'.$_SESSION['businessName'].'</h1>
					<h2>Great! a Task has asigned to you! </h2>
					
					<table>
						<tr>
							<td valign="center">
								<img src="'.$fotoRecibe.'" width="50" />
							</td> 
							<td valign="top">
								<b> '.$nameRecibe.'</b> <br> <b>'.$emailRecibe.'</b>
								

							</td>
						</tr>
					</table>
					<br><br>
					<div style="width:100%;background-color: #8097B1; ">
					<br>
						<center> <h2 style="color:white;width:80%;">'.$task.'</h2> </center>
						<hr style="color:white" />
						<h3 style="color:white">Asigned By Agent</h3>
						<table>
						<tr>
							<td valign="center">
								<img src="'.$_SESSION['imgUser'].'" width="50" />
							</td> 
							<td valign="top">
								<b style="color:white;"> '.$_SESSION['nameUser'].' <br>Teamwork </b>
							</td>
						</tr>
					</table>
<br>
<br>
					</div>
					
					<br>
					<br>
<h2>Thanks for use Business Tool by Mi Socio Web  </h2>
<br><br>

				</div>
			</td>
		</tr>
	</table>
	<br><br><br><br>
	</center>
	</body>
	</html>';
	send_email($emailRecibe,$subject,$htmlEmail,'task');
	

?>