<?php 
session_start();
include("../db.php");
$loginInput=$_REQUEST['loginInput'];
$query=mysql_query("SELECT * FROM users WHERE adress=$loginInput") or die(mysql_error());

$row=mysql_fetch_array($query);
if($row['id']){
	$_SESSION['nameUser']=$row['name'];
	//assets/images/avatar.jpeg
	$fotoUser=$row['foto'];
	if(!$fotoUser) $fotoUser='assets/images/avatar.jpeg';
	$_SESSION['imgUser']=$fotoUser;
	if($row['actived']==FALSE){
		echo "false";
		return;
	}
	$_SESSION['idUSER']=$row['id'];
	$_SESSION['userType']=$row['type'];
	if($row['relation_admin']=='0') $relation_admin=$row['id']; else $relation_admin=$row['relation_admin'];
	$_SESSION['relation_admin']=$relation_admin;
	
	$queryBusiness=mysql_query("SELECT * FROM company WHERE id_user=$relation_admin ") or die(mysql_error());
	$fetch=mysql_fetch_array($queryBusiness);
	
	$_SESSION['idBusiness']=$fetch['id'];
	$_SESSION['businessName']=$fetch['name'];
	
	echo "true";
}else{
	echo "false";
}
?>