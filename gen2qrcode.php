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


//google
if ($qrtype==5)
$qrPng=$domain."?key=".$encrypted."&gengw=1";

//apple
if ($qrtype==6)
$qrPng=$domain."?key=".$encrypted."&genaw=1";

//mobile site

if ($qrtype==7)
$qrPng=$domain."?key=".$encrypted."&mobilesite=1";

if ($qrtype==8)			
$qrPng=$wechat_qr_url;

if ($qrtype==9)
	$qrPng=$domain."?key=".$encrypted."&geniosaos=1";

			if ($qrPng!="")
				if($debug){
					echo "qrpng=".$qrPng;
				}else{
				 header("Content-type: image/png");
						echo QRcode::svg($qrPng);
	   
				}
 
//apple

?>
				 
					               
	  
 		
	