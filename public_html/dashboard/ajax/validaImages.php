<?php 
session_start();
if($_REQUEST['typeValid']=='newCompany'){
	
	if(!$_SESSION['newCompanyImage']){echo "false"; exit();}
	if(!$_SESSION['newCompanyContract']){echo "false"; exit();}	
	echo "true";
}

