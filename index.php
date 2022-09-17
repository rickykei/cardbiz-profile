<?php  
error_reporting(0);
 
$sig=$_GET["sig"];

if ($sig!=""){
	//$sig="050C7EA647";
	
	//get digital or vcf option from staff document
	$m = new MongoDB\Driver\Manager("mongodb://cardbiz:cardbiz98014380@localhost:27017/cardbiz_db?authSource=admin");
    $filter = ['smartcard_uid' => $sig];
		$options = [
			'projection' => ['_id' => 0],
			'sort' => ['_id' => -1],
		];

		 $query = new MongoDB\Driver\Query($filter, $options);
		$cursor = $m->executeQuery('cardbiz_db.staffs', $query);

		foreach ($cursor as $document) {
				   $option=$document->bizcard_option;
						   break;
			
		}

	// redirect to which path VCF or e-profile
	if ($option==true){
		$str="https://businesscard.technology/Touchless/Profile?sig=".$sig."#resume";
		header("Location: ".$str);
		 
	die();
	}else{
		$str="http://e-profile.digital/genvcf.php?sig=".$sig;
		header("Location: ".$str);
	 
	 
	}
}
?>
