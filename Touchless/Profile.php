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
	 
//				$tempDir = "./QR/";
		 
			  // $fileName = 'Qr'.$sig.rand(1,100000).'.png' ;   
				// $fileName = $signature.'.png' ;   
		
				//$pngAbsoluteFilePath = $tempDir.$fileName;
				//$urlRelativeFilePath = './QR/'.$fileName;
		
				// generating
				 
	//			if (!file_exists($pngAbsoluteFilePath)) {
				// QRcode::png($vCard, $pngAbsoluteFilePath,'L',12,8);
		//		} 
				 
					include_once('index2.php');                 
				  
			}   
          
	 
} 

?>
