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
       $sig_check_query = "SELECT name,website,url,brochure,facebook,linkedin,whatsapp,wechat,instagram,youtude,twitter,bio FROM Vcard WHERE signature='$signature' LIMIT 1";
       $result = mysqli_query($db, $sig_check_query);
        if(mysqli_num_rows($result)==1){
            $rowArr = array();
           while($row = mysqli_fetch_array($result)){
               $rowArr = $row;
           }
           echo json_encode($rowArr);  
        }else{
            echo "Invalid";
        }   
  }else{       
      echo "Invalid";        
  }
}else{
    echo "Invalid";
}

?>