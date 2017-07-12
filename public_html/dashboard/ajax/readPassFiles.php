<?php 
	session_start();
	include "../db.php";
	$currentCompany=$_SESSION['currentCompany'];
	$queryPassFiles=mysql_query("SELECT * FROM passwords_files WHERE id_company_clients=$currentCompany") or die(mysql_error());
	$cont=0;
	while($row=mysql_fetch_array($queryPassFiles)){
		$cont++;
		if($cont % 2==0) $class='gradeA even'; else $class="gradeA odd" ;
		if($row['type']==1) $tipo='ion-unlocked'; else $tipo='ion-document-text';
		$linkHost=$row['host'];
		if(!strpos($linkHost,'ttp://')) $linkHost='http://'.$row['host'] ;
		echo '
<tr class="'.$class.'">
								<td class="  sorting_1">'.$row['name'].'</td>
								<td class=" ">'.$row['description'].'
								</td>
								<td class=" ">
								<a href="'.$linkHost.'" target="_blank" ><span class="label bg-danger"> Host </span> <br> <span class="label bg-info">  '.$row['host'].' </span> </a>
								<br> <span class="label bg-danger"> User </span><br> <span class="label bg-info"> '.$row['user'].' </span> <br> 
								<span class="label bg-danger"> Pass </span> <br> <span class="label bg-info"> '.$row['pass'].' </span> 
								</td>
								<td class="center ">
								<button class="btn btn-success"><span class="ion-email" onclick="actionPass(1,'.$row['id'].');"></span></button>
								<button class="btn btn-warning"><span class="ion-edit" onclick="actionPass(2,'.$row['id'].');"></span>
								<button class="btn btn-danger"><span class="ion-close-circled" onclick=\'actionPass(3,'.$row['id'].');\'></span>
								</td>
								<td class="center "><span class="'.$tipo.'"></span>
								</td>
							</tr>
		';		
	}
?>


<script type="text/javascript">
var updatePassProcess=false;	
var currentIDPASS;
	function actionPass(id,idDB){

		if(id==1){
			email=prompt("Write to email from shared");
			if(email){
				if(confirm("Sure you will share this information?")){
					alert("Share Process");
				}
			}
		}

		if(id==2){
			$.post("ajax/loadPass.php",{idDB : idDB}).done(function(data){
				updatePassProcess=true;
				crearPass(1);
				/*{
    "id": "2",
    "name": "Cpanel",
    "description": "ECM Interdec",
    "host": "http://www.ecuadoracitasmedicas.com/cpanel/",
    "user": "citasmedecua",
    "pass": "Rd29p0gtq54o",
    "type": "type"
}*/
	data2=$.parseJSON(data);
	jsonID=data2.id;
	jsonName=data2.name;
	jsonDescription=data2.description;
	jsonHost=data2.host;
	jsonUser=data2.user;
	jsonPass=data2.pass;
	jsonType=data2.type;
	$("#newNamePass").val(jsonName);
	$("#newDescriptionPass").val(jsonDescription);
	$("#newHostPass").val(jsonHost);
	$("#newUserPass").val(jsonUser);
	$("#newPassword").val(jsonPass);
			currentIDPASS=jsonID;
			});
}

		if(id==3){
				
				if(confirm("Sure to delete this information?")){
					$.post("ajax/deletePass.php",{idDB:idDB}).done(function(data){
						currentIDPASS=idDB;
						openModal("passwordsAndFiles");
					});
				}
		}
	}
</script>