<?php
//error_reporting(E_ALL);
//  error_reporting(0);

$debug=0;
$needPhoto=1;
if(isset($_GET['debug']))$debug = $_GET['debug']; 


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

// Derive key and IV
$keyIv = EVP_BytesToKey($salt, $password);
$key = substr($keyIv, 0, 32);
$iv = substr($keyIv, 32);

// Decrypt
$sig = openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
  
if($sig=="")
 $sig = $_GET['sig']; 
 
if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
}


 
 
if(!$debug){
header('Content-Type: text/x-vcard');  
header('Content-Disposition: attachment; filename= '.$tid.".vcf");  
header('Connection: close');  
}
  
 
	include_once("config_db.php");
 
	foreach ($results as $document) {
		 
			  include_once("include_doc2vcf.php");
 
			  echo $vCard;
	 
		 }
		 
		include_once("include_updateVcfCnt.php");
			
 



?>


