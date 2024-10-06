<?php

	//include google wall class 20240907 prepare gw url
	
  try {
    require __DIR__ . '/gen_google_wallet.php';
   //$issuerId = '3388000000022314466';
    $issuerId = '3388000000022746391';

	//20241006  added wallet fields on company table
 


  if ($debug==1)
  print_r($gwarray);


    $demo = new DemoGeneric();	
    $date = new DateTime();
   // $demo->updateClass($issuerId, 'cardbizuat_generic');
    $generic_object_suffix="generic_object_suffix_".$date->format("YmdHis");  
    //$demo->createObject($issuerId, $generic_object_suffix);

    if ($debug!=1)   
    $gw_dl_link=$demo->createJWTNewObjects($issuerId, 'cardbizuat_generic', $generic_object_suffix,$gwarray);
     
  } catch (\Throwable $e) {
    echo "This was caught: " . $e->getMessage();
  }

  if ($debug!=1)
  header('Location: '.$gw_dl_link);
?> 