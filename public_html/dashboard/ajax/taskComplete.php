<?php 
	session_start();
	$idUser=$_SESSION['idUSER'];
	$id=$_REQUEST['id'];
	if($id){
		include "../db.php";
		date_default_timezone_set('America/Guayaquil');$date_out=date("d/m/Y H:i:s");
		$query=mysql_query(  " UPDATE task_simple SET status=0 , close_by=$idUser, date_out='$date_out' WHERE id=$id "  ) or die(mysql_error());
		$idPlus=312+$id;
		insert_log("Has marked complete a task #$idPlus",1);

		$queryUser=mysql_query("SELECT * FROM task_simple WHERE id=$id") or die(mysql_error());
		$fetchTask=mysql_fetch_array($queryUser);
		$id_to=$fetchTask['id_to'];
		$id_from=$fetchTask['id_user'];
		$description=$fetchTask['description'];
		$date_in=$fetchTask['date_in'];
		$queryEmail=mysql_query("SELECT * FROM users WHERE id=$id_to") or die(mysql_error());
	
		$fetchEmail=mysql_fetch_array($queryEmail);
		$emailRecibe=$fetchEmail['email'];
		$nameRecibe=$fetchEmail['name'];
		$fotoRecibe=$fetchEmail['foto'];
		if(!$fotoRecibe) $fotoRecibe='http://businesstool.info/dashboard/nopic.png';


		$to_time = strtotime($date_out);
			$from_time = strtotime($date_in);
		$difTime= round(abs($to_time - $from_time) / 60,2). " minutes";

		$subject ="BT - Task #$idPlus Complete!";
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
					<h2>Congratulation! a Task '.$idPlus.' is done! </h2>
					     <i>In Only '.$difTime.'! <br> <span style="font-size:8px;"> Time in: '.$date_in.' <> Time out: '.$date_out.' </i>
					<br><br>
					<div style="width:100%;background-color: #8097B1; ">
					<br>
						<center> <h2 style="color:white;width:80%;">'.$description.'</h2> </center>
						<hr style="color:white" />
						<h3 style="color:white">Closed By Agent</h3>
						<table>
						<tr>
							<td valign="center">
								<img src="'.$_SESSION['imgUser'].'" width="50" />
							</td> 
							<td valign="top">
								<b style="color:white;"> '.$_SESSION['nameUser'].' <br> Teamwork</b>
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
	if($id_to==$id_from) send_email($emailRecibe,$subject,$htmlEmail,'task');
	if($id_to!=$id_from){
		$queryEmail=mysql_query("SELECT * FROM users WHERE id=$id_from") or die(mysql_error());
		$fetchEmail=mysql_fetch_array($queryEmail);
		$emailEnvia=$fetchEmail['email'];
		send_email($emailRecibe,$subject,$htmlEmail,'task');
		send_email($emailEnvia,$subject,$htmlEmail,'task');	
	} 













	}



?>