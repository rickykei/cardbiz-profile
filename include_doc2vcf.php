<?php

 
 
 
			$company_name_eng=$document->company_name_eng;
			$company_name_chi=$document->company_name_chi;

			if ($company_name_eng=="" || $company_name_chi==""){
				$admin_company_name_eng=$document->company_detail[0]['company_name_eng'];	
				$admin_company_name_chi=$document->company_detail[0]['company_name_chi'];
				$company_name_eng=$document->company_detail[0]['company_name_eng'];	
				$company_name_chi=$document->company_detail[0]['company_name_chi'];
				
			}
			if ($document->company_detail[0]['profile_theme']!="")
			$profile_theme=$domain."/api/files/".$document->company_detail[0]['profile_theme']; 
 
			$company_logo=$document->company_detail[0]['logo'];
			
			$company_id=$document->company_id;
			
			$rc_no=$document->rc_no;
			$staff_no=$document->staff_no;
			
			
			$fname=$document->fname;
			$lname=$document->lname;
			$title_eng=$document->title_eng;
			$title_chi=$document->title_chi;
			
			$work_email= $document->work_email;
			$work_email2= $document->work_email2;
			$work_email3= $document->work_email3;

			$home_email= $document->home_email;
			$other_email = $document->other_email;

			$pro_title= $document->pro_title;
			
			$subsidiary_eng=$document->subsidiary_eng;
			$subsidiary_chi=$document->subsidiary_chi;
			
			$position=$document->position;
			
			$work_tel=$document->work_tel;
			$work_tel2=$document->work_tel2;
			$work_tel3=$document->work_tel3;
			$work_tel4=$document->work_tel4;
			
			$direct_tel=$document->direct_tel;
			$direct_tel2=$document->direct_tel2;
			$direct_tel3=$document->direct_tel3;

			$home_tel=$document->home_tel;
			
			$web_link=$document->web_link;
			$web_link_label=$document->web_link_label;


			$web_link2=$document->web_link2;
			$web_link_label2=$document->web_link_label2;


			$web_link3=$document->web_link3;
			$web_link_label3=$document->web_link_label3;


			$web_link4=$document->web_link4;
			$web_link_label4=$document->web_link_label4;


			$web_link5=$document->web_link5;
			$web_link_label5=$document->web_link_label5;

			$web_link6=$document->web_link6;
			$web_link_label6=$document->web_link_label6;

			$mobile= $document->mobile;
			$mobile2= $document->mobile2;
			$mobile3= $document->mobile3;
			$mobile4= $document->mobile4;
			
			 
			$fax= $document->fax;
			 
			 
			$address= $document->address;
			$address2= $document->address2;
			$address3= $document->address3;
			$address4= $document->address4;
			
			
			if($document->headshot!="")
			$headshot=$domain."/api/files/".$document->headshot;
			//$headshot=$domain."/Touchless/contact_citic.jpg";
			
			$division=$document->division;
			 
		 	$department=$document->department;
			$country=$document->country;
			$bio=$document->bio;

			$company_website_url=$document->company_website_url;
		 	$more_info_tab_url=$document->more_info_tab_url;
			$facebook_url=$document->facebook_url;
			$instagram_url=$document->instagram_url;
			$whatsapp_url=$document->whatsapp_url;
			$linkedin_url=$document->linkedin_url;
			$youtube_url=$document->youtube_url;
			$twitter_url=$document->twitter_url;
			$wechat_id=$document->wechat_id;
			$wechatpage_url=$document->wechatpage_url;
			$weixin_url=$document->weixin_url;
			$douyin_url=$document->douyin_url;
			$tiktok_url=$document->tiktok_url;
			$kuaishou_url=$document->kuaishou_url;
			$line_url=$document->line_url;
			$facebook_messenger_url=$document->facebook_messenger_url;
			$weibo_url=$document->weibo_url;
			$bilibili_url=$document->bilibili_url;
			$qq_url=$document->qq_url;
			$zhihu_url=$document->zhihu_url;
			$app_store_url=$document->app_store_url;
			$google_play_url=$document->google_play_url;
			$snapchat_url=$document->snapchat_url;
			$telegram_url=$document->telegram_url;
			$xiaohongshu_url=$document->xiaohongshu_url;
			$note=$document->note;
			$note_timestamp=$document->note_timestamp;
			  
			$smartcard_uid= $document->smartcard_uid;
			$sig=$document->_id;
			$staff_status=$document->status;
			
			$bizcard_option= $document->bizcard_option;
			$qrcode_option=	$document->qrcode_option;
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
			 
			  if($company_name_eng!="") $vCard .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
			 
			  if($fname!="") $vCard .= "N;CHARSET=utf-8:" . $fname ." ". $lname ."\r\n";
		 
			  if($work_email!="") $vCard .= "EMAIL;TYPE=Work:" . $work_email . "\r\n"; 			 
			  if($work_email2!="") $vCard .= "EMAIL;TYPE=Work:" . $work_email2 . "\r\n"; 			 
			  if($work_email3!="") $vCard .= "EMAIL;TYPE=Work:" . $work_email3 . "\r\n"; 			 
			  
			  if($home_email!="") $vCard .= "EMAIL;TYPE=HOME:" . $home_email . "\r\n"; 			 
			  
			  if($other_email!="") $vCard .= "EMAIL;TYPE=OTHER:" . $other_email . "\r\n"; 			 
			  
			  if($position!="") $vCard .= "TITLE;CHARSET=utf-8:" . $position . "\r\n"; 			 
			  
			  if($work_tel!="") $vCard .= "TEL;WORK:" . $work_tel . "\r\n"; 
			  if($work_tel2!="") $vCard .= "TEL;WORK:" . $work_tel2 . "\r\n"; 
			  if($work_tel3!="") $vCard .= "TEL;WORK:" . $work_tel3 . "\r\n"; 
			  if($work_tel4!="") $vCard .= "TEL;WORK:" . $work_tel4 . "\r\n"; 
			 
			  if($mobile_tel!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
			 if($mobile_tel2!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_tel2 . "\r\n"; 
			 if($mobile_tel3!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_tel3 . "\r\n"; 
			 if($mobile_tel4!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_tel4 . "\r\n"; 
			 
			 if($home_tel!="") $vCard .= "TEL;TYPE=HOME:" . $home_tel . "\r\n"; 
			 
			 if($fax!="") $vCard .= "TEL;TYPE=FAX:" . $fax . "\r\n";
			   
			 if($web_link!="")	$vCard .= "URL:" . $web_link . "\r\n"; 
			 if($web_link2!="")	$vCard .= "URL:" . $web_link2 . "\r\n"; 
			 if($web_link3!="")	$vCard .= "URL:" . $web_link3 . "\r\n"; 
			 if($web_link4!="")	$vCard .= "URL:" . $web_link4 . "\r\n"; 
			 if($web_link5!="")	$vCard .= "URL:" . $web_link5 . "\r\n"; 
			 if($web_link6!="")	$vCard .= "URL:" . $web_link6 . "\r\n"; 
			 
			 
			 if($web_link_label!="")	$vCard .= "URL:TYPE=" . $web_link_label . "\r\n"; 
			 if($web_link_label2!="")	$vCard .= "URL:TYPE=" . $web_link_label2 . "\r\n"; 
			 if($web_link_label3!="")	$vCard .= "URL:TYPE=" . $web_link_label3 . "\r\n"; 
			 if($web_link_label4!="")	$vCard .= "URL:TYPE=" . $web_link_label4 . "\r\n"; 
			 if($web_link_label5!="")	$vCard .= "URL:TYPE=" . $web_link_label5 . "\r\n"; 
			 if($web_link_label6!="")	$vCard .= "URL:TYPE=" . $web_link_label6 . "\r\n"; 
			 

			 if($address!="")	$vCard .= "ADR;WORK:" . $address . "\r\n"; 			 
			 if($address2!="")	$vCard .= "ADR;WORK:" . $address2 . "\r\n"; 			 
			 if($address3!="")	$vCard .= "ADR;WORK:" . $address3 . "\r\n"; 			 
			 if($address4!="")	$vCard .= "ADR;WORK:" . $address4 . "\r\n"; 			 
			 
			 if($company_website_url!="")	$vCard .= "URL:" . $company_website_url . "\r\n"; 			 
			 
			 if($more_info_tab_url!="")	$vCard .= "URL:" . $more_info_tab_url . "\r\n"; 			 
			 if($facebook_url!="")	$vCard .= "URL:" . $facebook_url . "\r\n"; 			 
			 if($instagram_url!="")	$vCard .= "URL:" . $instagram_url . "\r\n"; 			 
			 if($whatsapp_url!="")	$vCard .= "URL:" . $whatsapp_url . "\r\n"; 			 
			 if($linkedin_url!="")	$vCard .= "URL:" . $linkedin_url . "\r\n"; 			 
			 if($youtube_url!="")	$vCard .= "URL:" . $youtube_url . "\r\n"; 			 
			 if($twitter_url!="")	$vCard .= "URL:" . $twitter_url . "\r\n"; 			 
			 
			 if($wechatpage_url!="")	$vCard .= "URL:" . $wechatpage_url . "\r\n"; 			 
			 if($tiktok_url!="")	$vCard .= "URL:" . $tiktok_url . "\r\n"; 			 
			 if($line_url!="")	$vCard .= "URL:" . $line_url . "\r\n"; 			 
			 if($facebook_messenger_url!="")	$vCard .= "URL:" . $facebook_messenger_url . "\r\n"; 			 
			 if($weibo_url!="")	$vCard .= "URL:" . $weibo_url . "\r\n"; 			 
			 if($bilibili_url!="")	$vCard .= "URL:" . $bilibili_url . "\r\n"; 			 
			 if($qq_url!="")	$vCard .= "URL:" . $qq_url . "\r\n"; 			 
			 if($zhihu_url!="")	$vCard .= "URL:" . $zhihu_url . "\r\n"; 			 
			 if($app_store_url!="")	$vCard .= "URL:" . $app_store_url . "\r\n"; 			 
			 if($google_play_url!="")	$vCard .= "URL:" . $google_play_url . "\r\n"; 			 
			 if($snapchat_url!="")	$vCard .= "URL:" . $snapchat_url . "\r\n"; 			 
			 if($telegram_url!="")	$vCard .= "URL:" . $telegram_url . "\r\n"; 			 
			 
			 if ($note_timestamp==true) 
			  $temp_note= " Meet on " . date("d/m/Y H:i");
		  
			 if($note!="" || $temp_note!="")	$vCard .= "NOTE:" . $note ." ".$temp_note. "\r\n"; 			 
			  
			 
			  
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			  //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			  if($smartcard_uid)  $vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."/Touchless/Profile.php?sig=".$sig. "\r\n";
				$vCard.="END:VCARD\r\n";
			
			  //gather qrcode png info
			  $qrPng = "BEGIN:VCARD\r\n";
			  $qrPng .= "VERSION:3.0\r\n";
				if($company_name_eng!=""|| $company_name_chi!="" )$qrPng .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
				if($fname!="")$qrPng .= "N;CHARSET=utf-8:;" . $fname ." ".$lname. "\r\n";
				if($work_email!="") $qrPng .= "EMAIL;TYPE=Work Email,pref:" . $work_email . "\r\n"; 
				if($position!="")$qrPng.="TITLE:".$title_eng."\r\n";
				if($work_tel) $qrPng .= "TEL;WORK:" . $work_tel . "\r\n"; 
				if($mobile_tel)	$qrPng .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
				//if($home_tel)$qrPng .= "TEL;TYPE=HOME:" . $home_tel . "\r\n";
				//if($fax)	$qrPng .= "TEL;TYPE=FAX:" . $fax . "\r\n";
				//if($web_link1)$qrPng .= "URL;TYPE=Website,pref:" . $web_link1 . "\r\n";
				//if($web_link2)$qrPng .= "URL;TYPE=Website,pref:" . $web_link2 . "\r\n";
				//if($web_link3)$qrPng .= "URL;TYPE=Website,pref:" . $web_link3 . "\r\n";
			    if($address)$qrPng .= "ADR;WORK:" . $address . "\r\n"; 
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
