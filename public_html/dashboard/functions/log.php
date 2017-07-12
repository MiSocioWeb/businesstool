<?php 
		
		function insert_log($the_action,$notify){
				session_start();
				date_default_timezone_set('America/Guayaquil');
				$idUser=$_SESSION['idUSER'];
				$conection=mysql_connect("localhost" , "root" , "misocioweb.2017") or die(mysql_error());
				mysql_select_db("bt");
				$date_in=date("d/m/Y H:i:s");
				mysql_query(" INSERT INTO log_activity (user_id , description, notify, date_in ) VALUES ($idUser,'$the_action',$notify , '$date_in') ") or die(mysql_error());
				echo "true";
		}
		
		function send_email($recibe,$subject,$html,$type){
		

			if($type=="task"){

				$toEmail=$recibe;
		
					$message ="
					<html>
					<head>
					  <title>Notify</title>
					  <meta charset='UTF-8'>
					  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
					</head>
					<body>
						


					</body>
					</html>
					";
			}
	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'From: AI Business Tool <info@businesstool.info>' . "\r\n";
		mail($toEmail, $subject, $html, $headers);

		}

		

?>