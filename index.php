<?php  
ini_set('display_errors',0);
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
 if ($encrypted!="")
	 $fromkey=true;
 $sig=$_GET["sig"];
 if ($sig!="")
	 $fromsig=true;
 $needPhoto=1;
 
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
        if ($uid!="")
		$fromuid=1;	
	$tid=$uid;
}else{
	$tid=$sig;
	
}
$qrtype=$_GET['qrtype']; 
$bo=$_GET['bo'];
$gqt=$_GET['gqt'];
$gq=$_GET['gq'];
$genaw=$_GET['genaw'];
$gengw=$_GET['gengw'];
$mobilesite=$_GET['mobilesite'];

 

if ($debug==1){
	echo "<br>bizcard_option=".$bizcard_option;
	echo "<br>sig=".$sig;
	echo "<br>smartcard_uid=".$uid;
	echo "<br>smartcard_status=".$smartcard_status;
	echo "<br>str=".$str;
	echo "<br>qrtype=".$qrtype;
	echo "<br>genaw=".$genaw;
	echo "<br>gengw=".$gengw;
	echo "<br>mobilesite=".$mobilesite;

}
else
{
	//header("Location: ".$str);
}

if ($sig!=""|| $uid!=""){
	//$sig="050C7EA647";
	//uid=04208552B57280
	//get digital or vcf option from staff document

		$options = [
			//'projection' => ['_id' => 0],
			'sort' => ['_id' => -1],
		];

	include_once("config_db.php");
 
	 

	//if smartcard active && uid!=""   or   sig 
	if (($uid!="" && $smartcard_status==true) || $sig!=""){
		if ($debug==1){
			echo "<br>bizcard_option=".$bizcard_option; 
		
		}
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
			
			if ($qrtype=="" && $genaw!=1 && $gengw!=1 && $mobilesite!=1){
				if ($bizcard_option==true || $bo==1 ){ 

				
					include_once("profile.php");
					//$str=$domain."/Touchless/Profile.php?sig=".$sig."#resume";
				
				 
			
				}else if ($bizcard_option==false || $bo==0 ) {
					 
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
			}else if ($genaw==1) {  
				include_once("include_updateAWCnt.php");
			 	include_once("gen_apple_wallet.php");
			}else if ($gengw==1) {
				include_once("include_updateGWCnt.php");
				include_once("gen_google_wallet2.php");
			}else if ($qrtype!="") {				
				include_once("gen2qrcode.php");
			}else if($mobilesite==1){
				include_once("include_updateMobileSiteCnt.php");
				include_once("index_mobilesite.php");
			}
		}
	}
}
?>
