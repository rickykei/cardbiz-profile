<?php
header("Content-type: image/png");
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
					//	echo QRcode::svg($qrPng);
					
					$errorCorrectionLevel = 'H';
					$filepath="QR/".$sig.".png";
					$filepath2="QR/logo".$sig.".png";
					QRcode::png($qrPng,$filepath,$errorCorrectionLevel, 20);
					
					
					$logopath = 'logo.png';//准备好的logo图片
					
					 
					$qr=imagecreatefrompng($filepath);
					$logo = imagecreatefromstring(file_get_contents($logopath));
					$QR_width = imagesx($qr);
					$QR_height = imagesy($qr);
					$logo_width = imagesx($logo);
					$logo_height = imagesy($logo);
					$logo_qr_width = $QR_width / 3;
					$scale = $logo_width/$logo_qr_width;
					$logo_qr_height = $logo_height/$scale;
					$from_width = ($QR_width - $logo_qr_width) / 2;
					
					imagecopyresampled($qr, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
					//imagepng($qr, $filepath2);
					imagepng($qr);
					imagedestroy($qr);
				}
}
?>
				 
					               
	  
 		
	