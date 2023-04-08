<?php
  
 
if(!$debug){
header('Content-Type: text/x-vcard');  
header('Content-Disposition: attachment; filename= '.$tid.".vcf");  
header('Connection: close');  
}

echo $vCard;
include_once("include_updateVcfCnt.php");
			 
?>


