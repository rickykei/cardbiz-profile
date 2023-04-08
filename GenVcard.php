<?php
include 'phpqrcode/qrlib.php';

$codeContents  = 'BEGIN:VCARD'."\n";
 $codeContents .= 'VERSION:2.1'."\n";

$name = 'Sunny 蘇蘇';
$email = 'sunny@nfctouch.com.hk';
$homeEmail = 'info@nfctouch.com.hk';
$otherEmail = '';
$address = '形聲abc';
$mobile1 = '93811087';
$mobile2 = '';
$homeTel = '';
$workTel = '';
$organization = 'NFC Touch Ltd';
$position = '形聲xyz';
$website = 'https://nfctouch.com.hk';
$webLink1 = 'https://businesscard.technology';
$webLink2 = '';
$webLink3 = '';
$webLink4 = '';
$webLink5 = '';
$signature = 'SSSS';


 
 if(!empty($name)){
    $codeContents .= 'N;CHARSET=utf-8:;'.$name.";;;"."\n";
    $codeContents .= 'FN;CHARSET=utf-8:'.$name."\n";
 }
 if(!empty($email)){
    $codeContents .= 'EMAIL;WORK:'.$email."\n";     
 }
 if(!empty($homeEmail)){
    $codeContents .= 'EMAIL;HOME:'.$homeEmail."\n";     
 }
 if(!empty($otherEmail)){
    $codeContents .= 'EMAIL:'.$otherEmail."\n";     
 }     
 if(!empty($address)){
    $codeContents .= 'ADR;WORK;CHARSET=utf-8:'.$address.";;;;;;;"."\n";     
 }
 if(!empty($mobile1)){
    $codeContents .= 'TEL;CELL:'.$mobile1."\n";     
 }
 if(!empty($mobile2)){
    $codeContents .= 'TEL;CELL:'.$mobile2."\n";     
 }      
 if(!empty($homeTel)){
    $codeContents .= 'TEL;HOME:'.$homeTel."\n";     
 }
 if(!empty($workTel)){
    $codeContents .= 'TEL;WORK:'.$workTel."\n";     
 }
 if(!empty($organization)){
    $codeContents .= 'ORG;CHARSET=utf-8:'.$organization."\n";     
 }      
 if(!empty($position)){
    $codeContents .= 'TITLE;CHARSET=utf-8:'.$position."\n";     
 }
 if(!empty($fax)){
    $codeContents .= 'TEL;WORK;FAX:'.$fax."\n";     
 } 
 if(!empty($website)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website."\n";     
 }
 if(!empty($websiteLink1)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$websiteLink1."\n";     
 }
 if(!empty($websiteLink2)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$websiteLink2."\n";     
 }
 if(!empty($websiteLink3)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$websiteLink3."\n";     
 }
 if(!empty($websiteLink4)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$websiteLink4."\n";     
 }
 if(!empty($websiteLink5)){
    $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$websiteLink5."\n";     
 }
     
 $codeContents .= 'END:VCARD';     

$tempDir = "../Touchless/QR/";
    
 //$content = 'https://businesscard.technology/Touchless/Profile2?c='.$collection.'&s='.$signature.'#resume';
 
 $fileName = 'Qrcode5.png';
// $fileName = 'Qr'.$signature.rand(1,100000).'.png' ;
    
 $pngAbsoluteFilePath = $tempDir.$fileName;
 $urlRelativeFilePath = '..Touchless/QR/'.$fileName;

 QRcode::png($codeContents, $pngAbsoluteFilePath,'L',12,8);     
 
 /*if (!file_exists($pngAbsoluteFilePath)) {
    QRcode::png($content, $pngAbsoluteFilePath,'L',12,8);
 } */
     
 include 'index2.html';  

?>