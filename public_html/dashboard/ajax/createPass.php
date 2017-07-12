<?php 

	session_start();
	$idUser=$_SESSION['idUSER'];
	$currentCompany=$_SESSION['currentCompany'];
	$newNamePass=$_REQUEST['newNamePass'];
	$newDescriptionPass=$_REQUEST['newDescriptionPass'];
	$newHostPass=$_REQUEST['newHostPass'];
	$newUserPass=$_REQUEST['newUserPass'];
	$newPassword=$_REQUEST['newPassword'];
	$currentIDPASS=$_REQUEST['currentIDPASS'];

	include "../db.php";
	if($currentIDPASS){
		mysql_query("UPDATE passwords_files SET name='$newNamePass' , description = '$newDescriptionPass' , host='$newHostPass' , user='$newUserPass' , pass='$newPassword' WHERE id=$currentIDPASS") or die(mysql_error());
			insert_log("Has updated a pass with name $newNamePass and description $description for $newPassword", 1);			
	}else{
		mysql_query("INSERT INTO passwords_files(id_company_clients,id_user,name,description,type,host,user,pass) VALUES($currentCompany,$idUser,'$newNamePass','$newDescriptionPass','1','$newHostPass','$newUserPass','$newPassword')") or die(mysql_error());

		insert_log("Has created a pass with name $newNamePass and description $description", 1);	
	}
	

	


	/*newNamePass: newNamePass,	
					newDescriptionPass: newDescriptionPass,
					newHostPass: newHostPass,
					newUserPass: newUserPass,
					newPassword: newPassword*/

?>