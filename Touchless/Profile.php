<?php
  error_reporting(0);
$debug=0;
$needPhoto=0;

$sig = $_GET['sig']; 
if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
}
if (isset($tid)){   
       
        
        
		include_once("../config_db.php");
	  
		  
			foreach ($results as $document) {
			 
			 
			   include_once("../include_doc2vcf.php");
	 
	 
	 		   include_once("../include_updateProfileCnt.php");

					include_once('index2.php');                 
				  
			}   
          
	 
} 

?>
