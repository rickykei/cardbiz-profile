<?php  

//include_once("config.php");

$sig=$_GET["sig"];

if ($sig==""){
	//$sig="050C7EA647";
	
}
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


if ($option==true){
	$str="https://businesscard.technology/Touchless/Profile?sig=".$sig."#resume";
	header("Location: ".$str);
	 
die();
}else{
	$str="http://e-profile.digital/genvcf.php?sig=".$sig;
	header("Location: ".$str);
 
	 
	//https://nfctouch.com.hk/VCF/050C7EA647D51FA14A28ED8A3E7B9DE77E25F96324B49DE52B0431825E00A837.vcf
	
	/*$str="https://nfctouch.com.hk/vcf/".$sig64.".vcf";
	$path="/home/vhost/cardbiz/vcf/";
	$file=$sig64.".vcf";
 
header('Content-Type: text/x-vCard');  
header('Content-Disposition: attachment; filename= "'.$file.'"');  
header('Content-Length: '.filesize($path.$file));  
header('Connection: close');  
readfile($path.$file);
	//header("Location: ".$str);
	*/
}

?>
