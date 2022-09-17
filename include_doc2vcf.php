<?php
 
			$company_name=$document->company_detail[0]['name'];
			$fname=$document->fname;
			$lname=$document->lname;
			
			$work_email= $document->work_email;
			$home_email= $document->home_email;
			$other_email= $document->other_email;
			
			$position=$document->position;
			
			$work_tel1=$document->work_tel;
			$work_tel2=$document->work_tel2;
			 
			$mobile1= $document->mobile;
			$mobile2= $document->mobile2;
			
			$home_tel=$document->home_tel;
			$fax=$document->fax;
			 
			$web_link1=$document->web_link;
			$web_link2=$document->web_link2;
			$web_link3=$document->web_link3;
			$web_link4=$document->web_link4;
			$web_link5=$document->web_link5;
			
			if($document->headshot!="")
			$headshot="https://e-profile.digital/api/files/".$document->headshot;
			
			$address1= $document->address;
			$address2= $document->address2;
			
			$division=$document->division;
			$department=$document->department;
			
			$country=$document->country;
			
			$bio=$document->bio;
			$company_website_url=$document->company_website_url;
			$more_info_tab_url=$document->more_info_tab_url;
			
			$facebook_url= $document->facebook_url ;
			$instagram_url= $document->instagram_url;
			$whatsapp_url= $document->whatsapp_url;
			$linkedin_url= $document->linkedin_url;
			$youtube_url= $document->youtube_url;
			$twitter_url= $document->twitter_url;
			$wechat_id= $document->wechat_id;
			  
			$smartcard_uid= $document->smartcard_uid;
							 
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
			  
			  if($company_name!="")$vCard .= "ORG:" . $company_name . "\r\n";
			  if($fname!="")$vCard .= "F;CHARSET=utf-8:;" . $fname . "\r\n";
			  if($lname!="")$vCard .= "N;CHARSET=utf-8:;" . $lname . "\r\n";
			  if($lname!="")$vCard.="TITLE:".$position."\r\n";
			  if($work_email!="") $vCard .= "EMAIL;TYPE=internet,pref:" . $work_email . "\r\n"; 
			  if($home_email!="") $vCard .= "EMAIL;HOME:" . $home_email . "\r\n"; 
			  if($other_email!="") $vCard .= "EMAIL;OTHER:" . $other_email . "\r\n"; 
			  if($work_tel1) $vCard .= "TEL;WORK:" . $work_tel1 . "\r\n"; 
			  if($work_tel2) $vCard .= "TEL;CELL:" . $work_tel2 . "\r\n";  
			  if($mobile1)	$vCard .= "TEL;CELL:" . $mobile1 . "\r\n"; 
			  if($mobile2)$vCard .= "TEL;CELL:" . $mobile2 . "\r\n"; 
			  if($home_tel)$vCard .= "TEL;CELL:" . $home_tel . "\r\n"; 
			  if($fax)	$vCard .= "TEL;WORK;FAX:" . $fax . "\r\n";
			  if($web_link1)$vCard .= "URL:" . $web_link1 . "\r\n";
			  if($web_link2)$vCard .= "URL:" . $web_link2 . "\r\n";
			  if($web_link3)$vCard .= "URL;WORK;FAX:" . $web_link3 . "\r\n";
			  if($web_link4)$vCard .= "URL;WORK;FAX:" . $web_link4 . "\r\n";
			  if($web_link5)$vCard .= "URL;WORK;FAX:" . $web_link5 . "\r\n";
			  if($company_website_url)$vCard .= "URL:" . $company_website_url . "\r\n"; 
			  if($more_info_tab_url)$vCard .= "URL:" . $more_info_tab_url . "\r\n"; 
			  if($facebook_url)$vCard .= "URL:" . $facebook_url . "\r\n"; 
			  if($instagram_url)$vCard .= "URL:" . $instagram_url . "\r\n"; 
			  if($whatsapp_url)$vCard .= "URL: https://api.whatsapp.com/send?phone=852" . $whatsapp_url . "\r\n"; 
			  if($linkedin_url)$vCard .= "URL:" . $linkedin_url. "\r\n"; 
			  if($youtube_url)$vCard .= "URL:" . $youtube_url. "\r\n"; 
			  if($twitter_url)$vCard .= "URL:" . $twitter_url. "\r\n"; 
			  if($address1)$vCard .= "ADR;WORK:" . $address1 . "\r\n"; 
			  if($address2)$vCard .= "ADR;WORK:" . $address2 . "\r\n"; 
			   
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			  //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			  if($smartcard_uid)$vCard.="URL: https://e-profile.digital/Touchless/Profile?sig=".$sig. "\r\n";
 
			  $vCard .= "NOTE:Meet on " . date("d/m/Y H:i") . "\r\nEND:VCARD\r\n";
			  
			  
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