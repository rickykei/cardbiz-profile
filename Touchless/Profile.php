<?php
  error_reporting(1);
$debug=0;
$needPhoto=0;


$encrypted = $_GET['key']; 

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
	

 $saltCiphertextB64=$encrypted;
$saltCiphertext = base64_decode($saltCiphertextB64);
$salt = substr($saltCiphertext, 8, 8);
$ciphertext = substr($saltCiphertext, 16);
$encrypted=urlencode($encrypted);
// Derive key and IV
$keyIv = EVP_BytesToKey($salt, $password);
$key = substr($keyIv, 0, 32);
$iv = substr($keyIv, 32);

// Decrypt
$sig = openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

if ($sig=="")
$sig = $_GET['sig']; 

if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
}
if (isset($tid)){   
       
        
        
		include_once("../config_db.php");
	  
		  
			foreach ($results as $document) {
			 
			 
			   include_once("../include_doc2vcf.php");
	 
	 
	 		   include_once("../include_updateProfileCnt.php");

					include_once('index2.php');                 
				  
			}   
          
	 
} 

?>