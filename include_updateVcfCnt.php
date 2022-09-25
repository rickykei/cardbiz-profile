<?php
   $date = date("Y-m-d h:i:sa"); //Current Date
						$utcdatetime = new MongoDB\BSON\UTCDateTime(strtotime($date)*1000);
		$db = $dbclient->selectDatabase("cardbiz_db");
		$collectionVcf = $db->selectCollection("vcf_counter");
		$insertOneResult=$collectionVcf->insertOne(array(
				   'staff_id' => $doc_sig,
				   'ip' => $_SERVER['REMOTE_ADDR'],
				   'user_agent' => $_SERVER['HTTP_USER_AGENT'],
				   'createdAt'=> $utcdatetime,
				    'updatedAt'=> $utcdatetime
				   
				));
				//echo $insertOneResult;
				 if ($debug){
				echo $utcdatetime;
			 echo "sig=".$doc_sig;
				echo "ip=".$_SERVER['REMOTE_ADDR'];
		 echo "usera=".$_SERVER['HTTP_USER_AGENT'];
		   printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
			var_dump($insertOneResult->getInsertedId());
				 }
				 
?>