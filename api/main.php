<?php
include('config-file.php');
@session_start();  
include("iedit-config.php");

include("adminclass.php");
$userObj = new admin();
$where = '';
$idupd ='';


$getschooldetails             = $userObj->getschool($mysqli,$idupd); 
$gettrustdetails              = $userObj->gettrust($mysqli,$idupd); 
$getholidaydetails            = $userObj->getholiday($mysqli,$idupd); 
$getsubjectgroupdetails       = $userObj->getsubjectgroup($mysqli,$idupd); 
$getsubjectstatus             = $userObj->getsubjectstatus($mysqli); 
//$getstaffdetails              = $userObj->getstaff($mysqli,$idupd); 



?>


