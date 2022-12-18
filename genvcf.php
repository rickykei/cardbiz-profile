<?php
//error_reporting(E_ALL);
//  error_reporting(0);

$debug=0;
$needPhoto=1;
if(isset($_GET['debug']))$debug = $_GET['debug']; 


$sig = $_GET['sig']; 
if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
}


 
 
if(!$debug){
header('Content-Type: text/x-vcard');  
header('Content-Disposition: attachment; filename= '.$tid.".vcf");  
header('Connection: close');  
}
  
 
	include_once("config_db.php");
 
	foreach ($results as $document) {
		 
			  include_once("include_doc2vcf.php");
 
			  echo $vCard;
	 
		 }
		 
		include_once("include_updateVcfCnt.php");
			
 



?>


