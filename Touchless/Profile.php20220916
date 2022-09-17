<?php
error_reporting(0);
include 'phpqrcode/qrlib.php';

$dbhost = 'localhost';
$dbname = 'bezkoder_db';
$username='cardbiz';
$password='cardbiz98014380';  
$m = new MongoDB\Driver\Manager("mongodb://cardbiz:cardbiz98014380@localhost:27017/cardbiz_db?authSource=admin");

if (isset($_GET['sig'])){   
    if (strlen($_GET['sig'])==10){       
        $sig = $_GET['sig'];       
        
        		$filter = ['smartcard_uid' => $sig];
				$options = ['projection' => ['_id' => 0],'sort' => ['_id' => -1],];

		 $query = new MongoDB\Driver\Query($filter, $options);
		$cursor = $m->executeQuery('cardbiz_db.staffs', $query);
 
        
		foreach ($cursor as $document) {
		 
			   $name=$document->fname." ". $document->lname;
               $web_link = $document->web_link;
               $facebook = $document->facebook_url;
               $instagram = $document->instagram_url;
               $wechat = $document->wechat_id;
               $linkedin = $document->linkedin_url;
               $youtude = $document->youtube_url;
               $whatsapp = $document->whatsapp_url;
               $twitter = $document->twitter_url;
			   $website=$document->web_link;
               if ($document->headshot !="")
			   $url = "https://e-profile.digital/api/files/".$document->headshot; //headshot url
				else
			   $url = "https://nfctouch.com.hk/Touchless/UploadImage/050C7EA6472822.jpg"; //headshot url
               $brochure = "https://www.nfctouch.com.hk/assets/Brochure.pdf";
               $signature = $document->smartcard_uid;
               $signature64 = $document->smartcard_uid;
               $bio = $document->bio;
               if(empty($bio)){
                   $bio = '';
               }
			   
               $organization = "NFC Touch";
               if(empty($organization)){
                   $organization = 'Organization';
               }
               $position =$document->position;
               if(empty($position)){
                   $position = 'Title';
               }
               $workTel = $document->work_tel;
               $homeTel = $document->home_tel;
               $mobile1 = $document->mobile;
               $mobile2 = $document->mobile2;
               $email = $document->mobile2;
               $homeEmail = $document->home_email;
               $otherEmail = $document->other_email;
               $address = $document->address;
			   
			   
               $path = $url;
               //$var = $row['name']."+".$row['website']."+".$signature."+".$url ;
               $downloadVcfUrl = '';
               $saveVcfPath = '';
 

               $phone = '';
               $wphone = '';
               $_email = '';
               
               if(!empty($workTel)){
                   $wphone = $workTel;                  
               }elseif (!empty($homeTel)){
                    $wphone = $homeTel;                    
               }elseif (!empty($mobile1)) {
                     $wphone = $mobile1;                      
               }else if(!empty($mobile2)) {
                     $wphone = $mobile2;                     
               }
               
               if(!empty($mobile1)){
                   $phone = $mobile1;                  
               }elseif (!empty($mobile2)){
                    $phone = $mobile2;                    
               }elseif (!empty($workTel)) {
                     $phone = $workTel;                      
               }else if(!empty($homeTel)) {
                     $phone = $homeTel;                     
               }
               
               if(!empty($email)){
                   $_email = $email;                  
               }elseif (!empty($otherEmail)){
                   $_email = $otherEmail;                   
               }elseif (!empty($homeEmail)) {
                     $_email = $homeEmail;                      
               }
               
            if(!empty($signature64) && strlen($signature64) == 64){
                $filePath = "../VCF/".$signature64.".vcf";
                if (file_exists($filePath)){
                  $downloadVcfUrl = "https://nfctouch.com.hk/VCF/".$signature64.".vcf";
                  $saveVcfPath = "../VCF/".$signature64.".vcf";                    
                }    
            } 
           
       $codeContents  = 'BEGIN:VCARD'."\n";
            $codeContents .= 'VERSION:2.1'."\n";
 
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
          if(!empty($website1)){
            $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website1."\n";     
          }
          if(!empty($website2)){
            $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website2."\n";     
          }
          if(!empty($website3)){
            $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website3."\n";     
          }
          if(!empty($website4)){
            $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website4."\n";     
          }
          if(!empty($website5)){
            $codeContents .= 'URL;WORK;CHARSET=utf-8:'.$website5."\n";     
          }
 
          $codeContents .= 'URL;WORK;CHARSET=utf-8:https://e-profile.digital/Touchless/Profile.php?sig='.$sig."\n";       
 
     
           $codeContents .= 'END:VCARD';   
		   
            $tempDir = "../Touchless/QR/";
    
            $content = 'https://e-profile.digital/Touchless/Profile.php?sig='.$signature.'#resume';
 
           //            $_fileName = 'qr'.$signature.'.png';
           $fileName = 'Qr'.$signature.rand(1,100000).'.png' ;   
			// $fileName = $signature.'.png' ;   
	
            $pngAbsoluteFilePath = $tempDir.$fileName;
            $urlRelativeFilePath = '..Touchless/QR/'.$fileName;
    
            // generating
            if (!file_exists($pngAbsoluteFilePath)) {
              QRcode::png($codeContents, $pngAbsoluteFilePath,'L',12,8);
            } 
            
             if(strlen($downloadVcfUrl) == 0){
                 
                //include 'index-mobile.html'; 
                include 'index2.html';                  
             }else{
                 
                include 'index2.html';                 
             }  
           }   
          
  }else{       
      echo "Invalid parameter";        
  }
}else{
    echo "Invalid sig";
}

?>
