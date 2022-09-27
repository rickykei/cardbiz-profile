<?php
 
			$company_name=$document->company_detail[0]['name'];
			$company_logo=$document->company_detail[0]['logo'];
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
			$web_link6=$document->web_link6;
			
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

			  if($company_name!="")$vCard .= "ORG:" . $company_name . "\r\n";
			  if($fname!="")$vCard .= "N;CHARSET=utf-8:;" . $fname . "\r\n";
			  //if($lname!="")$vCard .= "N;CHARSET=utf-8:;" . $lname . "\r\n";
			  if($position!="")$vCard.="TITLE:".$position."\r\n";
			  if($work_email!="") $vCard .= "EMAIL;TYPE=Work Email,pref:" . $work_email . "\r\n"; 
			  if($home_email!="") $vCard .= "EMAIL;TYPE=Home Email,pref:" . $home_email . "\r\n"; 
			  if($other_email!="") $vCard .= "EMAIL;TYPE=Other Email,pref:" . $other_email . "\r\n"; 
			  if($work_tel1) $vCard .= "TEL;WORK:" . $work_tel1 . "\r\n"; 
			  if($work_tel2) $vCard .= "TEL;WORK:" . $work_tel2 . "\r\n";  
			  if($mobile1)	$vCard .= "TEL;TYPE=CELL:" . $mobile1 . "\r\n"; 
			  if($mobile2)$vCard .= "TEL;TYPE=CELL:" . $mobile2 . "\r\n"; 
			  if($home_tel)$vCard .= "TEL;TYPE=HOME:" . $home_tel . "\r\n"; 
			  if($fax)	$vCard .= "TEL;TYPE=FAX:" . $fax . "\r\n";
			  if($web_link1)$vCard .= "URL;TYPE=Website,pref:" . $web_link1 . "\r\n";
			  if($web_link2)$vCard .= "URL;TYPE=Website,pref:" . $web_link2 . "\r\n";
			  if($web_link3)$vCard .= "URL;TYPE=Website,pref:" . $web_link3 . "\r\n";
			  if($web_link4)$vCard .= "URL;TYPE=Website,pref:" . $web_link4 . "\r\n";
			  if($web_link5)$vCard .= "URL;TYPE=Website,pref:" . $web_link5 . "\r\n";
			  if($web_link6)$vCard .= "URL;TYPE=Website,pref:" . $web_link6 . "\r\n";
			  if($company_website_url)$vCard .= "URL;TYPE=Company Website,pref:" . $company_website_url . "\r\n"; 
			  if($more_info_tab_url)$vCard .= "URL;TYPE=More Info,pref:" . $more_info_tab_url . "\r\n"; 
			  if($facebook_url)$vCard .= "URL;TYPE=Facebook,pref:" . $facebook_url . "\r\n"; 
			  if($instagram_url)$vCard .= "URL;TYPE=Instagram,pref:" . $instagram_url . "\r\n"; 
			  if($whatsapp_url)$vCard .= "URL;TYPE=Whatsapp,pref:" . $whatsapp_url . "\r\n"; 
			  if($linkedin_url)$vCard .= "URL;TYPE=Linkedin,pref:" . $linkedin_url. "\r\n"; 
			  if($youtube_url)$vCard .= "URL;TYPE=Youtube,pref:" . $youtube_url. "\r\n"; 
			  if($twitter_url)$vCard .= "URL;TYPE=Twitter,pref:" . $twitter_url. "\r\n"; 
			  if($address1)$vCard .= "ADR;WORK:" . $address1 . "\r\n"; 
			  if($address2)$vCard .= "ADR;WORK:" . $address2 . "\r\n"; 
			   
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			  //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			  if($smartcard_uid)$vCard.="URL;TYPE=Digital Business Card,pref: https://e-profile.digital/Touchless/Profile.php?sig=".$sig. "\r\n";
 
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