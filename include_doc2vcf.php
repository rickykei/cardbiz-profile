<?php
 
			$company_name_eng=$document->company_detail[0]['company_name_eng'];
			$company_name_chi=$document->company_detail[0]['company_name_chi'];
			$company_logo=$document->company_detail[0]['logo'];
			
			
			$rc_no=$document->rc_no;
			$staff_no=$document->staff_no;
			
			
			$name_eng=$document->name_eng;
			$name_chi=$document->name_chi;
			$title_eng=$document->title_eng;
			$title_chi=$document->title_chi;
			
			$work_email= $document->work_email;
			$pro_title= $document->pro_title;
			
			$subsidiary_eng=$document->subsidiary_eng;
			$subsidiary_chi=$document->subsidiary_chi;
			
			$position=$document->position;
			
			$work_tel=$document->work_tel;
			$direct_tel=$document->direct_tel;
			 
			$mobile_tel= $document->mobile_tel;
			$fax_no= $document->fax_no;
			
			$reuters=$document->reuters;
			$agent_no=$document->agent_no;
			$broker_no=$document->broker_no;
			$mpf_no=$document->mpf_no;
			$hkma_no=$document->hkma_no;
			$hkma_eng=$document->hkma_eng;
			$hkma_chi=$document->hkma_chi;
			 
			$address_eng= $document->address_eng;
			$address_chi= $document->address_chi;
			
			if($document->headshot!="")
			$headshot=$domain."/api/files/".$document->headshot;
			$headshot=$domain."/Touchless/contact_citic.jpg";
			
			$division=$document->division;
			 
		 
		 
			  
			$smartcard_uid= $document->smartcard_uid;
			$sig=$document->_id;
			$staff_status=$document->status;
			
			$bizcard_option= $document->bizcard_option;
							 
			  if($headshot!=""&&$needPhoto==1){ 
			  //  $url = str_replace("https", "http",$url);
				
				$getPhoto               = file_get_contents_curl($headshot);
				
				$b64vcard               = base64_encode($getPhoto);
				$b64mline               = chunk_split($b64vcard,74,"\n");
				$b64final               = preg_replace('/(.+)/', ' $1', $b64mline);
				$photo                  = $b64final;
				
			  }
			  
			  
			  //prepare vcf Variable
			  $vCard = "BEGIN:VCARD\r\n";
			  $vCard .= "VERSION:3.0\r\n";
			 
			  if($company_name_eng!="")$vCard .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
			  //if($company_name_chi!="")$vCard .= "ORG:" . $company_name_chi . "\r\n";
			  if($name_eng!="")$vCard .= "N;CHARSET=utf-8:" . $name_eng ." ". $name_chi ."\r\n";
			//  if($name_chi!="")$vCard .= "N;CHARSET=utf-8:" .  $name_eng ." ". $name_chi. "\r\n";
			  if($title_eng!="")$vCard.="TITLE;CHARSET=utf-8:".$title_eng."\r\n";
			  if($pro_title!="")$vCard .= "N;CHARSET=utf-8:" . $pro_title. "\r\n";
			  if($subsidiary_eng!="")$vCard .= "TITLE;CHARSET=utf-8:" . $subsidiary_eng. "\r\n";
			  if($address_eng)$vCard .= "ADR;WORK:" . $address_eng . "\r\n"; 
			 
			
			  if($work_tel) $vCard .= "TEL;WORK:" . $work_tel . "\r\n"; 
			 
			  if($direct_tel)	$vCard .= "TEL;WORK:" . $direct_tel . "\r\n"; 
			  if($mobile_tel)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
			 
			  if($fax_no)	$vCard .= "TEL;TYPE=FAX:" . $fax_no . "\r\n";
				if($reuters)	$vCard .= "TEL;WORK:" . $reuters . "\r\n"; 
				if($work_email!="") $vCard .= "EMAIL;TYPE=Work:" . $work_email . "\r\n"; 
			 if($agent_no!="") $vCard .= "NOTE:" . $agent_no . "\r\n"; 
			  if($broker_no!="") $vCard .= "NOTE:" . $broker_no . "\r\n"; 
			  if($mpf_no!="") $vCard .= "NOTE:" . $mpf_no . "\r\n"; 
			  if($hkma_no!="") $vCard .= "NOTE:" . $hkma_no . "\r\n"; 
			  if($hkma_eng!="") $vCard .= "NOTE:" . $hkma_eng . "\r\n"; 
			 
			  
			   
		
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			  //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			  if($smartcard_uid)$vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."/Touchless/Profile.php?sig=".$sig. "\r\n";
 
			  $vCard .= "NOTE:Meet on " . date("d/m/Y H:i") . "\r\nEND:VCARD\r\n";
			  
			  //gather qrcode png info
			  $qrPng = "BEGIN:VCARD\r\n";
			  $qrPng .= "VERSION:3.0\r\n";
				if($company_name_eng!="")$qrPng .= "ORG:" . $company_name_eng . "\r\n";
				if($name_eng!="")$qrPng .= "N;CHARSET=utf-8:;" . $name_eng . "\r\n";
				if($work_email!="") $qrPng .= "EMAIL;TYPE=Work Email,pref:" . $work_email . "\r\n"; 
				if($title_eng!="")$qrPng.="TITLE:".$title_eng."\r\n";
				if($work_tel) $qrPng .= "TEL;WORK:" . $work_tel . "\r\n"; 
				if($mobile_tel)	$qrPng .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
				//if($home_tel)$qrPng .= "TEL;TYPE=HOME:" . $home_tel . "\r\n";
				//if($fax)	$qrPng .= "TEL;TYPE=FAX:" . $fax . "\r\n";
				//if($web_link1)$qrPng .= "URL;TYPE=Website,pref:" . $web_link1 . "\r\n";
				//if($web_link2)$qrPng .= "URL;TYPE=Website,pref:" . $web_link2 . "\r\n";
				//if($web_link3)$qrPng .= "URL;TYPE=Website,pref:" . $web_link3 . "\r\n";
			    if($address_eng)$qrPng .= "ADR;WORK:" . $address_eng . "\r\n"; 
				//if($company_website_url)$qrPng .= "URL;TYPE=Company Website,pref:" . $company_website_url . "\r\n"; 
			    //if($facebook_url)$qrPng .= "URL;TYPE=Facebook,pref:" . $facebook_url . "\r\n"; 
				//if($instagram_url)$qrPng .= "URL;TYPE=Instagram,pref:" . $instagram_url . "\r\n"; 
				//if($whatsapp_url)$qrPng .= "URL;TYPE=Whatsapp,pref:" . $whatsapp_url . "\r\n"; 
				//if($linkedin_url)$qrPng .= "URL;TYPE=Linkedin,pref:" . $linkedin_url. "\r\n"; 
				//if($youtube_url)$qrPng .= "URL;TYPE=Youtube,pref:" . $youtube_url. "\r\n"; 
				//if($twitter_url)$qrPng .= "URL;TYPE=Twitter,pref:" . $twitter_url. "\r\n"; 
				 
			   //if($headshot&&!$debug) $qrPng .= "PHOTO;TYPE=jpeg;VALUE=uri:".$headshot . "\r\n";
			   // $qrPng .= "NOTE:Meet on " . date("d/m/Y H:i") . "\r\n";
				//$qrPng .= "PHOTO;VALUE=uri:http://d21buns5ku92am.cloudfront.net/69383/profile_pictures/38180/Unknown.png\r\n";
				$qrPng .= "END:VCARD\r\n";
			  
 function get_content($URL){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $URL);
      $data = curl_exec($ch);
      curl_close($ch);
      return $data;
}
function file_get_contents_curl($url) {
    $ch = curl_init();
  
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
  
    $data = curl_exec($ch);
    curl_close($ch);
  
    return $data;
}
?>
