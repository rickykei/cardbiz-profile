<?php

//$HostName = "localhost"; 
//$HostUser = "fskelea_nfc";
//$HostPass = "macBook";
//$DatabaseName = "fskelea_Sunny";

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

if ( isset($_POST['downloadImageUrl']) && isset($_POST['name']) && isset($_POST['signature']) && isset($_POST['website']) && isset($_POST['brochure']) && isset($_POST['facebook']) && isset($_POST['whatsapp']) && isset($_POST['instagram']) && isset($_POST['twitter']) && isset($_POST['youtude']) && isset($_POST['wechat']) && isset($_POST['linkedin']) && isset($_POST['IMAGESTRING'])){
    
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
  
    
  if (strlen($name)>99) { array_push($errors, "name error"); }
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
  if (empty($image)||strlen($image)>800000) { array_push($errors, "image error"); }
  
    
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
  	     $query = "UPDATE Vcard SET name ='$name', website='$website', brochure ='$brochure',facebook='$facebook',whatsapp='$whatsapp',instagram='$instagram',twitter='$twitter',youtude='$youtude',wechat='$wechat',linkedin='$linkedin',url='$url' WHERE signature ='$signature'" ;                
        }else{          
   	     $query = "INSERT INTO Vcard (name, signature, website, brochure,facebook,whatsapp,instagram,twitter,youtude,wechat,linkedin,url) VALUES ('$name', '$signature', '$website','$brochure','$facebook','$whatsapp','$instagram','$twitter','$youtude','$wechat','$linkedin','$url')";       
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
