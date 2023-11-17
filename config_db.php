<?php
 error_reporting(0);
use MongoDB\BSON\ObjectID;
require_once('vendor/autoload.php'); 
date_default_timezone_set('Asia/Hong_Kong');
$domain="https://ebcard.hkbea.digital/";
$mongourl="mongodb://cardbiz:cardbiz98014380@localhost:27017/cardbiz_bea_db?authSource=admin";
$m = new MongoDB\Driver\Manager($mongourl);
$dbclient = new MongoDB\Client($mongourl);
$collection = $dbclient->selectDatabase("cardbiz_bea_db")->selectCollection("staffs");
 
if($uid!=""){
	  $collection2 = $dbclient->selectDatabase("cardbiz_bea_db")->selectCollection("smartcards");
                        $abk2=[['$match' => ['uid' => $uid]], ['$lookup' => ['from' => 'staffs', 'localField' => '_id', 'foreignField' => 'smartcard_uid', 'as' => 'company_detail']]];
                        //$abk=[['$match' => ['smartcard_uid' => $uid]], ['$lookup' => ['from' => 'companies', 'localField' => 'company_id', 'foreignField' => '_id', 'as' => 'company_detail']]];
                        //find smartcard valid or not

                        $results2 = $collection2->aggregate($abk2);
                        foreach ($results2 as $document) {

                                $sig=$document->company_detail[0]['_id'];
                        }

}	

if($sig!=""){
			$abk=[['$match' => ['_id' => new ObjectId($sig)]], ['$lookup' => ['from' => 'companies', 'localField' => 'company_id', 'foreignField' => '_id', 'as' => 'company_detail']]];
		}
$results = $collection->aggregate($abk);
	


?>
