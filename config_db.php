<?php
 error_reporting(0);
use MongoDB\BSON\ObjectID;
require_once('vendor/autoload.php'); 
date_default_timezone_set('Asia/Hong_Kong');
$domain="https://namecard.cncbinternational.com/profile";
$mongourl="mongodb://cardbiz:cardbiz98014380@localhost:27017/cardbiz_db?authSource=admin";
$m = new MongoDB\Driver\Manager($mongourl);
$dbclient = new MongoDB\Client($mongourl);
$collection = $dbclient->selectDatabase("cardbiz_db")->selectCollection("staffs");
 
		if($uid!=""){
			$abk=[['$match' => ['smartcard_uid' => $uid]], ['$lookup' => ['from' => 'companies', 'localField' => 'company_id', 'foreignField' => '_id', 'as' => 'company_detail']]];
			//find smartcard valid or not
			$coll_smartcard = $dbclient->selectDatabase("cardbiz_db")->selectCollection("smartcards");
			$smartcard_filter=[['$match' => ['uid' => $uid]]];
			$results_smartcard = $coll_smartcard->aggregate($smartcard_filter);
			 
			foreach ($results_smartcard as $doc) {
				$smartcard_status=$doc->status;
			}
		}	else if($sig!=""){
			$abk=[['$match' => ['_id' => new ObjectId($sig)]], ['$lookup' => ['from' => 'companies', 'localField' => 'company_id', 'foreignField' => '_id', 'as' => 'company_detail']]];
		}
		$results = $collection->aggregate($abk);
		 
?>