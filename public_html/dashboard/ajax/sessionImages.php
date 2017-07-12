<?php 
session_start();
$type=trim($_REQUEST['type']);
$file=trim($_REQUEST['file']);

if($type=="img")$_SESSION['newCompanyImage']=$file; 
if($type=="pdf")$_SESSION['newCompanyContract']=$file; 

echo "$type - $file";