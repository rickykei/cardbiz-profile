<?php
header("Content-type: image/png");
$debug=0;
$needPhoto=0;
include 'phpqrcode/qrlib.php';



function EVP_BytesToKey($salt, $password) {
    $derived = '';
    $tmp = '';
    while(strlen($derived) < 48) {
        $tmp = md5($tmp . $password . $salt, true);
        $derived .= $tmp;
    }
    return $derived;
} 
$password = '12345678123456781234567812345678';
$encrypted = $_GET['key']; 
$saltCiphertextB64=$encrypted;
$saltCiphertext = base64_decode($saltCiphertextB64);
$salt = substr($saltCiphertext, 8, 8);
$ciphertext = substr($saltCiphertext, 16);
$keyIv = EVP_BytesToKey($salt, $password);
$key = substr($keyIv, 0, 32);
$iv = substr($keyIv, 32);
$sig = openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

 
if ($sig==""){
	$_GET['sig'];
}
	
if ($sig!=""){
       
	include_once("../config_db.php");
	
 
	foreach ($results as $document) {
				 
				   include_once("../include_doc2vcf.php");
		 
	}			 
				
				if($debug){
					echo $qrPng;
				}else{
					//$qrPng=$domain."/?sig=".$sig;
					$qrPng=$domain."/?key=".urlencode($encrypted);
					//	echo QRcode::svg($qrPng);
					
					$errorCorrectionLevel = 'H';
					$filepath="QR/".$sig.".png";
					$filepath2="QR/logo".$sig.".png";
					QRcode::png($qrPng,$filepath,$errorCorrectionLevel, 20);
					
					
					$logopath = 'logo.png';//准备好的logo图片
					
					 
					$qr=imagecreatefrompng($filepath);
					//$logo = imagecreatefromstring(file_get_contents($logopath));
					$logo = imagecreatefrompng($logopath);
					
					 
					$QR_width = imagesx($qr);
					$QR_height = imagesy($qr);
					$logo_width = imagesx($logo);
					$logo_height = imagesy($logo);
					$logo_qr_width = $QR_width / 5;
					$scale = $logo_width/$logo_qr_width;
					$logo_qr_height = $logo_height/$scale;
					$from_width = ($QR_width - $logo_qr_width) / 2;
					
					
					/* Create a new image onto which we will copy images & assign transparency */
					$target = imagecreatetruecolor( $QR_width, $QR_height );
					imagesavealpha( $target , true );

					$transparent = imagecolorallocatealpha( $target, 0, 0, 0, 127 );
					imagefill( $target,0, 0, $transparent );
						
					imagecopy( $target, $qr, 0, 0, 0, 0, $QR_width, $QR_height );
						
					imagecopyresampled($target, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
					 
					 imagepng($target);
				 	imagedestroy($target);
				}
}
?>
				 
					               
	  
 		
	