<?php
  
  include 'phpqrcode/qrlib.php';
         
  $tempDir = "../Touchless/QR/";
    
  $content = "https://nfctouch.com.hk/Touchless/Profile?sig=EDDBBB6958#resume";
 
    $fileName = 'qr'.'EDDBBB6958'.'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = '..Touchless/QR/'.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($content, $pngAbsoluteFilePath,'L',12,8);
    } 

    echo '<img src="'.$urlRelativeFilePath.'" />';
    
?>
