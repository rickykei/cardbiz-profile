<?php  
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting( E_ALL );
 
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
	
 

$debug=$_GET["debug"];
$encrypted=$_GET["key"];
$sig=$_GET["sig"];

if ($sig==""){
//decrypt key to sig\

// Extract IV and ciphertext
//$saltCiphertextB64 = "U2FsdGVkX1/ARpsMWWEdLiOanB67kh2akfCIN5s+RLDsJetSMagGsk444I+F/dbp";
//$saltCiphertextB64 = "U2FsdGVkX19fKDCSLlX9b6Lys3ATGegOenWkVaFMP3CdyYmjyGQgXEiNyzr75gBF";
 $saltCiphertextB64=$encrypted;
 $encrypted=urlencode($encrypted);
$saltCiphertext = base64_decode($saltCiphertextB64);
$salt = substr($saltCiphertext, 8, 8);
$ciphertext = substr($saltCiphertext, 16);

// Derive key and IV
$keyIv = EVP_BytesToKey($salt, $password);
$key = substr($keyIv, 0, 32);
$iv = substr($keyIv, 32);

// Decrypt
$sig = openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}


if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
	$qrtype=$_GET['qrtype']; 
}


$bo=$_GET['bo'];
$gqt=$_GET['gqt'];
$gq=$_GET['gq'];

if ($sig!=""|| $uid!=""){
	//$sig="050C7EA647";
	
	//get digital or vcf option from staff document

		$options = [
			//'projection' => ['_id' => 0],
			'sort' => ['_id' => -1],
		];

	include_once("config_db.php");
 
 
	//if smartcard active && uid!=""   or   sig 
	if (($uid!="" && $smartcard_status==true) || $sig!=""){
	 
		foreach ($results as $document) {
				  include_once("include_doc2vcf.php");
			 // echo $vCard;
			
		}
	 
		//staff status is active?
		 if ($staff_status==true ){
		 
			if ($bo!="")
				if ($bo==1)
					$bizcard_option=true;
				else
					$bizcard_option=false;
		 
			// redirect to which path VCF or e-profile
			if ($qrtype==""){
				if ($bizcard_option==true ){
					
					 
					include_once("profile.php");
					//$str=$domain."/Touchless/Profile.php?sig=".$sig."#resume";
					if ($debug==1){
						echo "bizcard_option".$bizcard_option;
						echo "sig".$sig;
						echo "smartcard_uid".$uid;
						echo "str".$str;
					}
					else
					{
						//header("Location: ".$str);
					}
				 
				}else if ($bizcard_option==true || $bo==0 ) {
					$str=$domain."genvcf.php?key=".$encrypted;
					//$str=$domain."/genvcf.php?sig=".$sig;
					include_once("genvcf.php");
					if ($debug==1)
					{
						echo "bizcard_option".$bizcard_option;
						echo "sig".$sig;
						echo "smartcard_uid".$uid;
						echo "str".$str;
					}
					
					//	header("Location: ".$str);
				 
				 
				}
			}	else {
				
				include_once("gen2qrcode.php");
			}
		}
	}
}
?>
