<?php 
	session_start();
	include "../db.php";
	$new_nameCompany=$_REQUEST['new_nameCompany'];
	$new_rucCompany=$_REQUEST['new_rucCompany'];
	$new_websiteCompany=$_REQUEST['new_websiteCompany'];
	$new_legalCompany=$_REQUEST['new_legalCompany'];
	$new_adressCompany=$_REQUEST['new_adressCompany'];
	$new_dateCompany=$_REQUEST['new_dateCompany'];
	$theComment=$_REQUEST['theComment'];
	$theWebsite=$_REQUEST['theWebsite'];

	$idUSER=$_SESSION['idUSER'];
	$idBusiness=$_SESSION['idBusiness'];

	$fileLogo=$_SESSION['newCompanyImage'];
	$fileContract=$_SESSION['newCompanyContract'];
	if($idUSER){
		$query=mysql_query("INSERT INTO company_clients_info (
			id_company,
			nombre,
			ruc,
			fecha_contrato,
			url_contrato,
			representante,
			pagina,
			descripcion,
			direccion,
			logo) VALUES (
			'$idBusiness' , 
			'$new_nameCompany' , 
			'$new_rucCompany',
			'$new_dateCompany',
			'$fileContract',
			'$new_legalCompany',
			'$new_websiteCompany',
			'$theComment',
			'$new_adressCompany',
			'$fileLogo' ) ")	or die(mysql_error());
		echo "New Company Added";
		$_SESSION['newCompanyImage']='';
		$_SESSION['newCompanyContract']='';
		insert_log("Has Create a new company called $new_nameCompany" , 1);
	}
	


?>

<!-- 
new_nameCompany : new_nameCompany,
						new_rucCompany : new_rucCompany,
						new_websiteCompany : new_websiteCompany,
						new_legalCompany : new_legalCompany,
						new_adressCompany : new_adressCompany,
						new_dateCompany : new_dateCompany,
						theComment : theComment
-->