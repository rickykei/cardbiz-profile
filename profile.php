<?php
$needPhoto=0;
include_once("include_updateProfileCnt.php");

 
if ($minisite_option=="2")
    include_once('index3.php');                 
else if ($minisite_option=="3")
    include_once('index4.php');
    else if ($minisite_option=="4")
    include_once('index5.php');
    else if ($minisite_option=="5")
    include_once('index6.php');  
else
    include_once('index2.php');                 
?>
