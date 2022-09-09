<?php
$HostName = "localhost"; 
$HostUser = "root";
$HostPass = "kaitoinc.com";
$DatabaseName = "touchless";



if (isset($_GET['sig'])){   
    if (strlen($_GET['sig'])==10){       
        $signature = $_GET['sig'];       
        $db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
        if($db === false){
          die("Invalid" . mysqli_connect_error());
        }            
       $sig_check_query = "SELECT name,signature,website,brochure,facebook,url,linkedin,whatsapp,wechat,instagram,twitter,youtude,bio,organization,position,workTel,homeTel,mobile1,mobile2,email,homeEmail,otherEmail,address,signature64 FROM Vcard WHERE signature='$signature' LIMIT 1";
       $result = mysqli_query($db, $sig_check_query);
        if(mysqli_num_rows($result)==1){
           while($row = mysqli_fetch_array($result)){
               $name = $row['name'];
               if(empty($name)){
                   $name = 'Name';
               }
               $website = $row['website'];
               $facebook = $row['facebook'];
               $instagram = $row['instagram'];
               $wechat = $row['wechat'];
               $linkedin = $row['linkedin'];
               $youtude = $row['youtude'];
               $whatsapp = $row['whatsapp'];
               $twitter = $row['twitter'];
               $url = $row['url'];
               $brochure = $row['brochure'];
               $signature = $row['signature'];
               $signature64 = $row['signature64'];
               $bio = $row['bio'];
               if(empty($bio)){
                   $bio = 'Smile';
               }
               $organization = $row['organization'];
               if(empty($organization)){
                   $organization = 'Organization';
               }
               $position = $row['position'];
               if(empty($position)){
                   $position = 'Title';
               }
               $workTel = $row['workTel'];
               $homeTel = $row['homeTel'];
               $mobile1 = $row['mobile1'];
               $mobile2 = $row['mobile2'];
               $email = $row['email'];
               $homeEmail = $row['homeEmail'];
               $otherEmail = $row['otherEmail'];
               $address = $row['address'];
               $path = "UploadImage/".$row['signature']."jpg";
               $var = $row['name']."+".$row['website']."+".$signature."+".$url ;
               $downloadVcfUrl = '';
               $saveVcfPath = '';
 

               $phone = '';
               $_email = '';
               
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
             if(strlen($downloadVcfUrl) == 0){
                 
                include 'index-mobile.html'; 
                 
             }else{
                 
                include 'index2.html';                 
             }  
           }   
        }else{
            echo "Invalid sig size";
        }   
  }else{       
      echo "Invalid parameter";        
  }
}else{
    echo "Invalid sig";
}

?>
