<?php
 
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$ios_url = $domain."/?key=".$encrypted."&genaw=1";
$aos_url = $domain."/?key=".$encrypted."&gengw=1";

 
if (preg_match('/(iPad|iPhone|iPod)/', $userAgent)) {
	 header("Location: ".$ios_url);
} elseif (preg_match('/Android/', $userAgent)) { // 检查是否是Android设备
	header("Location: ".$aos_url);
}else{
	header("Location: ".$aos_url);
}

 
?>
				 
					               
	  
 		
	