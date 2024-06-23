<?php  
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting( E_ALL );
 
use MongoDB\BSON\ObjectID;
require_once('vendor/autoload.php'); 
date_default_timezone_set('Asia/Hong_Kong');
$domain="https://uat.profiles.digital/";
 	 
		//$abk=[['$match' => ['_id' => new ObjectId($sig)]], ['$lookup' => ['from' => 'companies', 'localField' => 'company_id', 'foreignField' => '_id', 'as' => 'company_detail']]];
		use MongoDB\Client;

// Requires the MongoDB PHP Driver
// https://www.mongodb.com/docs/drivers/php/

$client = new Client('mongodb://cardbiz:cardbiz98014380@172.105.241.13:27017/');
$collection = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor = $collection->find([], [
    'sort' => ['length' => -1],
    'limit' => 3
]);


/*
foreach ($cursor as $doc) {
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
}*/


//put all file to delete=true first before batch


$collection2 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor2 = $collection2->aggregate([]);

$i=0;

foreach ($cursor2 as $doc) {
	 
	/*echo "<br>";
	echo $doc['_id'];
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
	*/
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.files'); 
	$updateResult = $collection2->updateMany(
    [ '_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => true ]]);
	
	//printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	//printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.chunks'); 
	$updateResult = $collection2->updateMany(
    [ 'files_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => true ]]);
	
	printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	$i++;

}
echo "updated for all records to true=".$i;
echo "<br/>";

$collection2 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor2 = $collection2->aggregate(
[
 ['$lookup' => ['from' => 'staffs', 'localField' => 'filename', 'foreignField' => 'headshot', 'as' => 'staffs']],
 ['$match' => ['staffs.0' => ['$exists' => true]]]
 
]
);

$i=0;

foreach ($cursor2 as $doc) {
	 
	/*echo "<br>";
	echo $doc['_id'];
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
	*/
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.files'); 
	$updateResult = $collection2->updateMany(
    [ '_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	
	//printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	//printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.chunks'); 
	$updateResult = $collection2->updateMany(
    [ 'files_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	
	printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	$i++;

}
echo "updated for staffs=".$i;
echo "<br/>";
	
	
$collection2 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor2 = $collection2->aggregate(
[
 ['$lookup' => ['from' => 'companies', 'localField' => 'filename', 'foreignField' => 'logo', 'as' => 'staffs']],
 ['$match' => ['staffs.0' => ['$exists' => true]]] 
]
);

$i=0;

foreach ($cursor2 as $doc) {
	 /*
	echo "<br>";
	echo $doc['_id'];
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
	*/
	  
	$updateResult = $collection2->updateMany(
    [ '_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.chunks'); 
	$updateResult = $collection2->updateMany(
    [ 'files_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	$i++;

}
    echo "updated for companieslogo=".$i;
	echo "<br/>";
	
	
	$collection2 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor2 = $collection2->aggregate(
[
 ['$lookup' => ['from' => 'companies', 'localField' => 'filename', 'foreignField' => 'banner', 'as' => 'staffs']],
 ['$match' => ['staffs.0' => ['$exists' => true]]] 
 
]
);

$i=0;

foreach ($cursor2 as $doc) {
	 /*
	echo "<br>";
	echo $doc['_id'];
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
	*/
	  
	$updateResult = $collection2->updateMany(
    [ '_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.chunks'); 
	$updateResult = $collection2->updateMany(
    [ 'files_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	$i++;

}
    echo "updated for companiesbanner=".$i;
	echo "<br/>";
	
		
	$collection2 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor2 = $collection2->aggregate(
[
 ['$lookup' => ['from' => 'companies', 'localField' => 'filename', 'foreignField' => 'profile_theme', 'as' => 'staffs']],
 ['$match' => ['staffs.0' => ['$exists' => true]]] 
 
]
);

$i=0;

foreach ($cursor2 as $doc) {
	 /*
	echo "<br>";
	echo $doc['_id'];
	echo "<br>";
	echo $doc['filename']."length=".$doc['length'];
	echo "<br>";
	$aa="https://e-profile.digital/api/files/".rawurlencode ($doc['filename'])."";
	echo "<a href=". $aa.">". $aa."</a>";
	*/
	  
	$updateResult = $collection2->updateMany(
    [ '_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	 $collection2 = $client->selectCollection('cardbiz_db', 'photos.chunks'); 
	$updateResult = $collection2->updateMany(
    [ 'files_id' => new \MongoDB\BSON\ObjectID($doc['_id'])],
    [ '$set' => [ 'deleteOK' => false ]]);
	printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
	printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
	
	$i++;

}
    echo "updated for profile_theme=".$i;
	echo "<br/>";
	
	
	//delete

	
$collection4 = $client->selectCollection('cardbiz_db', 'photos.files');
$cursor4 = $collection4->deleteMany(['deleteOK' => true]);
$collection4 = $client->selectCollection('cardbiz_db', 'photos.chunks');
$cursor4 = $collection4->deleteMany(['deleteOK' => true]);
	
	
 ?>