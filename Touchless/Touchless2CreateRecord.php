<?php


function isOldImage($dirPath,$imageUrl,$imageStr){
    
    if($imageUrl !== "" ){
        return true;
    }
    if(file_put_contents($dirPath, $imageStr)){
        return true;
    }else{
        return false;
    }    
}

$HostName = "localhost"; 
$HostUser = "root";
$HostPass = "kaitoinc.com";
$DatabaseName = "touchless";

// ..... Touchless New Version .....

if ( isset($_POST['downloadImageUrl']) && isset($_POST['name']) && isset($_POST['signature']) && isset($_POST['website']) && isset($_POST['brochure']) && isset($_POST['facebook']) && isset($_POST['whatsapp']) && isset($_POST['instagram']) && isset($_POST['twitter']) && isset($_POST['youtude']) && isset($_POST['wechat']) && isset($_POST['linkedin']) && isset($_POST['IMAGESTRING']) && isset($_POST['bio']) && isset($_POST['organization']) && isset($_POST['position']) && isset($_POST['workTel']) && isset($_POST['homeTel']) && isset($_POST['mobile1']) && isset($_POST['mobile2']) && isset($_POST['email']) && isset($_POST['homeEmail']) && isset($_POST['otherEmail']) && isset($_POST['address']) && isset($_POST['signature64'])){
    
  $errors = array();  
  $name = $_POST['name'];
  $signature = $_POST['signature'];
  $website = $_POST['website'];
  $brochure = $_POST['brochure'];
  $facebook = $_POST['facebook'];
  $whatsapp = $_POST['whatsapp'];
  $instagram = $_POST['instagram'];
  $twitter = $_POST['twitter'];
  $youtude = $_POST['youtude'];
  $wechat = $_POST['wechat'];
  $linkedin = $_POST['linkedin']; 
  $imageUrl = $_POST['downloadImageUrl'];
  $image = base64_decode($_POST['IMAGESTRING']);
  $bio = $_POST['bio'];
  $organization = $_POST['organization'];
  $position = $_POST['position'];
  $workTel = $_POST['workTel'];
  $homeTel = $_POST['homeTel'];
  $mobile1 = $_POST['mobile1'];
  $mobile2 = $_POST['mobile2'];
  $email = $_POST['email'];
  $homeEmail = $_POST['homeEmail'];  
  $otherEmail = $_POST['otherEmail'];  
  $address = $_POST['address'];
  $signature64 = $_POST['signature64'];
    
  
    
  if (strlen($name)>99) { array_push($errors, "name error"); }
  $name = mysql_real_escape_string($name);
  if (empty($signature) || strlen($signature)>10) { array_push($errors, "signature error"); }
  if (strlen($website)>99) { array_push($errors, "website error"); }
  if (strlen($brochure)>99) { array_push($errors, "brochure error"); }
  if (strlen($facebook)>99) { array_push($errors, "facebook error"); }
  if (strlen($whatsapp)>99) { array_push($errors, "whatsapp error"); }
  if (strlen($instagram)>99) { array_push($errors, "instagram error"); }
  if (strlen($twitter)>99) { array_push($errors, "twitter error"); } 
  if (strlen($youtude)>99) { array_push($errors, "youtude error"); }   
  if (strlen($wechat)>99) { array_push($errors, "wechat error"); } 
  if (strlen($linkedin)>99) { array_push($errors, "linkedin error"); }
  if (strlen($bio)>499) { array_push($errors, "bio error"); }
    $bio = mysql_real_escape_string($bio);
  if (strlen($organization)>199) { array_push($errors, "organization error");}
  $organization = mysql_real_escape_string($organization);
  if (strlen($position)>199) { array_push($errors, "position error"); }
   $position = mysql_real_escape_string($position);
  if (strlen($workTel)>99) { array_push($errors, "workTel error"); }
  if (strlen($homeTel)>99) { array_push($errors, "homeTel error"); }
  if (strlen($mobile1)>99) { array_push($errors, "mobile1 error"); }
  if (strlen($mobile2)>99) { array_push($errors, "mobile2 error"); }
  if (strlen($email)>99) { array_push($errors, "email error"); }
  if (strlen($homeEmail)>99) { array_push($errors, "homeEmail error"); }
  if (strlen($otherEmail)>99) { array_push($errors, "otherEmail error"); }
  if (strlen($address)>499) { array_push($errors, "address error"); }
    $address = mysql_real_escape_string($address);
  if (strlen($signature64)>99) { array_push($errors, "signature64 error"); }
  if (empty($image)||strlen($image)>900000) { array_push($errors, "image error"); }
  
    
    if (count($errors) == 0){
        
      $ran = rand(5,10000);
      $targer_dir = "";
      $url ="";
      if($imageUrl !== ""){
        $url = $imageUrl ;         
      }else{
        $targer_dir = "UploadImage/".$signature.(string)$ran.".jpg";
        $url = "https://nfctouch.com.hk/Touchless/UploadImage/".$signature.(string)$ran.".jpg";
      }
        
      if (isOldImage($targer_dir,$imageUrl, $image)){           
        $db = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
        if($db === false){
          die("Invalid" . mysqli_connect_error());
        }    
       $sig_check_query = "SELECT * FROM Vcard WHERE signature='$signature' LIMIT 1";
       $result = mysqli_query($db, $sig_check_query);
       $record = mysqli_fetch_assoc($result);          
        if($record){ //exist          
  	     $query = "UPDATE Vcard SET name ='$name', website='$website', brochure ='$brochure',facebook='$facebook',whatsapp='$whatsapp',instagram='$instagram',twitter='$twitter',youtude='$youtude',wechat='$wechat',linkedin='$linkedin',url='$url',bio='$bio',organization='$organization',position='$position',workTel='$workTel',homeTel='$homeTel',mobile1='$mobile1',mobile2='$mobile2',email='$email',homeEmail='$homeEmail',otherEmail='$otherEmail',address='$address',signature64='$signature64'  WHERE signature ='$signature'" ;                
        }else{          
   	     $query = "INSERT INTO Vcard (name,signature,website,brochure,facebook,whatsapp,instagram,twitter,youtude,wechat,linkedin,url,bio,organization,position,workTel,homeTel,mobile1,mobile2,email,homeEmail,otherEmail,address,signature64) VALUES ('$name', '$signature', '$website','$brochure','$facebook','$whatsapp','$instagram','$twitter','$youtude','$wechat','$linkedin','$url','$bio','$organization','$position','$workTel','$homeTel','$mobile1','$mobile2','$email','$homeEmail','$otherEmail','$address','$signature64')";       
        }       
        if(mysqli_query($db, $query)){      
         echo "Success";      
        }else{      
         echo "Invalid result";      
        }                    
      }else{          
        echo "Invalid save image";
      }        
    }else{       
      echo "Invalid parameter";        
    }    
}else{
  echo "Invalid post";
}
?>
