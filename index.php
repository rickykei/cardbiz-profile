<?php  
    error_reporting(0);
 
$debug=$_GET["debug"];
$sig = $_GET['sig']; 
if($sig=="")
{
	$uid = $_GET['uid']; 
	$tid=$uid;
}else{
	$tid=$sig;
}

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
			//  echo $vCard;
		}
	 
		//staff status is active?
		 if ($staff_status==true){
			// redirect to which path VCF or e-profile
			if ($bizcard_option==true ){
				$str="https://e-profile.digital/Touchless/Profile.php?sig=".$sig."#resume";
				if ($debug==1){
					echo "bizcard_option".$bizcard_option;
					echo "sig".$sig;
					echo "smartcard_uid".$uid;
					echo "str".$str;
				}
				else
					header("Location: ".$str);
			 
			}else {
				$str="https://e-profile.digital/genvcf.php?sig=".$sig;
				if ($debug==1)
				{
					echo "bizcard_option".$bizcard_option;
					echo "sig".$sig;
					echo "smartcard_uid".$uid;
					echo "str".$str;}
				else
					header("Location: ".$str);
			 
			 
			}
		}
	}
}
?>
