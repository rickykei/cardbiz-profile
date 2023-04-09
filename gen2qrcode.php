<?php
 

include 'phpqrcode/qrlib.php';
 
//qrcode type 1 vcard qrcode
 
//qrcode type 2 generic url qrcode
if ($qrtype==2)
$qrPng=$domain."?key=".$encrypted;

//qrcode type 3 profile url qrcode
if ($qrtype==3)
$qrPng=$domain."?key=".$encrypted."&bo=1";

//qrcode type 4 vcf qrcode url
if ($qrtype==4)
$qrPng=$domain."?key=".$encrypted."&bo=0";


			
			if ($qrPng!="")
				if($debug){
					echo $qrPng;
				}else{
				 header("Content-type: image/png");
						echo QRcode::svg($qrPng);
	   
				}
 
?>
				 
					               
	  
 		
	