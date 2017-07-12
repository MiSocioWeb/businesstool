<?php 
	session_start();
	$companyID=$_REQUEST['company_id'];
	$_SESSION['currentCompany']=$companyID;
	echo "currentCompany = $companyID";
?>