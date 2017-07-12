<?php 
	
	session_start();
	$up_nameCompany=$_REQUEST['up_nameCompany'];
	$up_rucCompany=$_REQUEST['up_rucCompany'];
	$up_websiteCompany=$_REQUEST['up_websiteCompany'];
	$up_legalCompany=$_REQUEST['up_legalCompany'];
	$up_adressCompany=$_REQUEST['up_adressCompany'];
	$up_dateCompany=$_REQUEST['up_dateCompany'];
	$up_comment=$_REQUEST['up_comment'];
	$currentCompany=$_SESSION['currentCompany'];

	$newCompanyImage=$_SESSION['newCompanyImage']; 
	$newCompanyContract=$_SESSION['newCompanyContract'];
	;
	include "../db.php";
	mysql_query("UPDATE company_clients_info SET nombre='$up_nameCompany' , ruc='$up_rucCompany' , fecha_contrato='$up_dateCompany' , representante='$up_legalCompany' , pagina='$up_websiteCompany' , descripcion='$up_comment' , direccion='$up_adressCompany' ,logo='$newCompanyImage' , url_contrato='$newCompanyContract'  WHERE id=$currentCompany") or die(mysql_error());

	
	$_SESSION['newCompanyImage']=''; 
	$_SESSION['newCompanyContract']='';
	insert_log("Has updated a company called $up_nameCompany" , 1);
	/*
				up_nameCompany : up_nameCompany,
						up_rucCompany : up_rucCompany,
						up_websiteCompany : up_websiteCompany,
						up_legalCompany : up_legalCompany,
						up_adressCompany : up_adressCompany,
						up_dateCompany : up_dateCompany,						
						up_comment : up_comment
*/
	
?>