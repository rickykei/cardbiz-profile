<?php 
 
$debug=0;
$needPhoto=0;
include 'phpqrcode/qrlib.php';

if (isset($_GET['sig'])){   
       
        $sig = $_GET['sig'];   
	include_once("../config_db.php");
	
 
	foreach ($results as $document) {
				 
				   include_once("../include_doc2vcf.php");
		 
	}			 
				
				if($debug){
					echo $qrPng;
				}else{
					$vCard="https://e-profile.digital/?sig=".$sig;
					//QRcode::png($vCard);
					echo QRcode::svg($qrPng);
				}
}
?>
				 
					               
	  
 		
	