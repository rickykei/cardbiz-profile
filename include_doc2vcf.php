<?php  



	 


  			$company_name_eng=$document->company_name_eng;
			$company_name_chi=$document->company_name_chi;

			if ($company_name_eng=="" || $company_name_chi==""){
				$admin_company_name_eng=$document->company_detail[0]['company_name_eng'];	
				$admin_company_name_chi=$document->company_detail[0]['company_name_chi'];
				$company_name_eng=$document->company_name_eng;	
				$company_name_chi=$document->company_name_chi;
				
			}
			if ($document->company_detail[0]['profile_theme']!="")
			$profile_theme=$domain."/api/files/".$document->company_detail[0]['profile_theme']; 
 
			$company_logo=$domain."/api/files/".$document->company_detail[0]['logo'];

			//20241006  added wallet fields on company table
			$wallet_banner=$domain."api/files/".$document->company_detail[0]['wallet_banner'];
			$wallet_text_color=$document->company_detail[0]['wallet_text_color'];
			$wallet_bg_color=$document->company_detail[0]['wallet_bg_color'];
			$wallet_field1_option=$document->company_detail[0]['wallet_field1_option'];
			$wallet_field2_option=$document->company_detail[0]['wallet_field2_option'];
			$wallet_field3_option=$document->company_detail[0]['wallet_field3_option'];
			$wallet_qrcode_option=$document->company_detail[0]['wallet_qrcode_option'];
			$wallet_logo_option=$document->company_detail[0]['wallet_logo_option'];

			$company_id=$document->company_id;
			
			$rc_no=$document->rc_no;
			$staff_no=$document->staff_no;
			
			
			$fname=$document->fname;
			$lname=$document->lname;
            $mname=$document->mname;
			$pname=$document->pname;
            $oname=$document->oname;
            $pdname=$document->pdname;
			$title_eng=$document->title_eng;
			$title_chi=$document->title_chi;
			
			$work_email= $document->work_email;
			$work_email2= $document->work_email2;
			$work_email3= $document->work_email3;

			$home_email= $document->home_email;
			$other_email = $document->other_email;

			
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
			$dig_card_in_vcf=$document->dig_card_in_vcf;
			$qrcode_option=	$document->qrcode_option;
			$minisite_option=$document->minisite_option;
			$needPhoto=1;
			
			
		
			
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
			 
		 $vCard .="N:" . $lname .";" . $fname .";" . $mname .";" . $pname .";" . $oname ." " . $pdname ."\r\n";
		 
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
			 
			  if($mobile!="") $vCard .= "TEL;TYPE=CELL:" . $mobile . "\r\n"; 
			 if($mobile2!="") $vCard .= "TEL;TYPE=CELL:" . $mobile2 . "\r\n"; 
			 if($mobile3!="") $vCard .= "TEL;TYPE=CELL:" . $mobile3 . "\r\n"; 
			 if($mobile4!="") $vCard .= "TEL;TYPE=CELL:" . $mobile4 . "\r\n"; 
			 
			 if($home_tel!="") $vCard .= "TEL;TYPE=HOME:" . $home_tel . "\r\n"; 
			 
			 if($fax!="") $vCard .= "TEL;WORK;TYPE=FAX:" . $fax . "\r\n";
			   
			 
			 if($web_link!="")	$vCard .= "URL;TYPE=".$web_link_label.",pref:" . $web_link. "\r\n"; 
			 if($web_link2!="")	$vCard .= "URL;TYPE=" . $web_link_label2.",pref:" . $web_link2. "\r\n"; 
			 if($web_link3!="")	$vCard .= "URL;TYPE=" . $web_link_label3 .",pref:" . $web_link3.  "\r\n"; 
			 if($web_link4!="")	$vCard .= "URL;TYPE=" . $web_link_label4 .",pref:" . $web_link4.  "\r\n"; 
			 if($web_link5!="")	$vCard .= "URL;TYPE=" . $web_link_label5 .",pref:" . $web_link5. "\r\n"; 
			 if($web_link6!="")	$vCard .= "URL;TYPE=" . $web_link_label6 .",pref:" . $web_link6. "\r\n"; 
			 

			 if($address!="")	$vCard .= "ADR;WORK:" . $address . "\r\n"; 			 
			 if($address2!="")	$vCard .= "ADR;WORK:" . $address2 . "\r\n"; 			 
			 if($address3!="")	$vCard .= "ADR;WORK:" . $address3 . "\r\n"; 			 
			 if($address4!="")	$vCard .= "ADR;WORK:" . $address4 . "\r\n"; 			 
			 
			 if($company_website_url!="")	$vCard .= "URL;TYPE=Company Website,pref:" . $company_website_url . "\r\n"; 			 
			 
			 if($more_info_tab_url!="")	$vCard .= "URL;TYPE=More Info,pref:" . $more_info_tab_url . "\r\n"; 			 
			 if($facebook_url!="")	$vCard .= "URL;TYPE=Facebook,pref:" . $facebook_url . "\r\n"; 			 
			 if($instagram_url!="")	$vCard .= "URL;TYPE=Instagram,pref:" . $instagram_url . "\r\n"; 			 
			 if($whatsapp_url!="")	$vCard .= "URL;TYPE=Whatsapp,pref:" . $whatsapp_url . "\r\n"; 			 
			 if($linkedin_url!="")	$vCard .= "URL;TYPE=Linkedin,pref:" . $linkedin_url . "\r\n"; 			 
			 if($youtube_url!="")	$vCard .= "URL;TYPE=Youtube,pref:" . $youtube_url . "\r\n"; 			 
			 if($twitter_url!="")	$vCard .= "URL;TYPE=Twitter,pref:" . $twitter_url . "\r\n"; 			 
			 
			 if($wechatpage_url!="")	$vCard .= "URL;TYPE=Wechat,pref:" . $wechatpage_url . "\r\n"; 			 
			 if($tiktok_url!="")	$vCard .= "URL;TYPE=Tiktok,pref:" . $tiktok_url . "\r\n"; 			 
			 if($line_url!="")	$vCard .= "URL;TYPE=Line,pref:" . $line_url . "\r\n"; 			 
			 if($facebook_messenger_url!="")	$vCard .= "URL;TYPE=Facebook Messenger,pref:" . $facebook_messenger_url . "\r\n"; 			 
			 if($weibo_url!="")	$vCard .= "URL;TYPE=Weibo,pref:" . $weibo_url . "\r\n"; 			 
			 if($bilibili_url!="")	$vCard .= "URL;TYPE=Bilibili,pref:" . $bilibili_url . "\r\n"; 			 
			 if($qq_url!="")	$vCard .= "URL;TYPE=QQ,pref:" . $qq_url . "\r\n"; 			 
			 if($zhihu_url!="")	$vCard .= "URL;TYPE=Zhihu,pref:" . $zhihu_url . "\r\n"; 			 
			 if($app_store_url!="")	$vCard .= "URL;TYPE=App Store,pref:" . $app_store_url . "\r\n"; 			 
			 if($google_play_url!="")	$vCard .= "URL;TYPE=Google Play,pref:" . $google_play_url . "\r\n"; 			 
			 if($snapchat_url!="")	$vCard .= "URL;TYPE=Snapchat,pref:" . $snapchat_url . "\r\n"; 			 
			 if($telegram_url!="")	$vCard .= "URL;TYPE=Telegram,pref:" . $telegram_url . "\r\n"; 			 
			 
			 if ($note_timestamp==true) 
			  $temp_note= " Met on: " . date("d/m/Y H:i") . " UTC+8";
		  
			 if($note!="" || $temp_note!="")	$vCard .= "NOTE:" . $note ." ".$temp_note. "\r\n"; 			 
			  
			 
			  
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			 //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			 //
			 if ($debug==1)
			 {
				 echo "<br>fromkey=".$fromkey;
				 echo "<br>fromuid=".$fromuid;
				 echo "<br>fromsig=".$fromsig;
				 echo "<br>digcardinvcf=".$dig_card_in_vcf;
			 }


			  if($smartcard_uid && $fromkey==true){  
				if ($dig_card_in_vcf==true)
				$vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."?key=".$encrypted."&bo=1\r\n";
				$savemycontact=$domain."?key=".$encrypted."&bo=0";
			  }
			  else if($smartcard_uid && $fromuid==true){
				  if ($dig_card_in_vcf==true)
				  $vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."?uid=".$uid."&bo=1\r\n";
				  $savemycontact=$domain."?uid=".$uid."&bo=0";
			  }
			 else if ($smartcard_uid && $fromsig==true){
				 if ($dig_card_in_vcf==true)
				 $vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."?sig=".$sig."&bo=1\r\n";
				 $savemycontact=$domain."?uid=".$sig."&bo=0";
			 }
				$vCard.="END:VCARD\r\n";
			
			  if($fromkey==true){  
			 
				$savemycontact=$domain."?key=".$encrypted."&bo=0";
				$minisite_url=$domain."?key=".$encrypted."&bo=1";
			  }
			  else if( $fromuid==true){
				 
				  $savemycontact=$domain."?uid=".$uid."&bo=0";
				  $minisite_url=$domain."?uid=".$uid."&bo=1";
			  }else if ( $fromsig==true){
				 $savemycontact=$domain."?sig=".$sig."&bo=0";
				 $minisite_url=$domain."?sig=".$sig."&bo=1";
			  }
			
			if ($debug==true)
			{
				echo "<br>eedPhoto=";
				echo $needPhoto;
				echo "<br>headShot=";
				echo $headshot;
				
				//echo "b64vcard=";
				//echo $b64vcard;
			}
			
			
			  //gather qrcode png info
			  $qrPng = "BEGIN:VCARD\r\n";
			  $qrPng .= "VERSION:3.0\r\n";
				if($company_name_eng!=""|| $company_name_chi!="" )$qrPng .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
				if($fname!="") $qrPng .= "N:" . $lname .";" . $fname .";" . $mname .";" . $pname .";" . $oname ." " . $pdname ."\r\n";
                if($work_email!="") $qrPng .= "EMAIL;WORK:" . $work_email . "\r\n";         
				if($position!="")$qrPng.="TITLE:".$position."\r\n";
				if($work_tel) $qrPng .= "TEL;WORK:" . $work_tel . "\r\n"; 
                if($mobile!="") $qrPng .= "TEL;TYPE=CELL:" . $mobile . "\r\n"; 
				//if($home_tel)$qrPng .= "TEL;TYPE=HOME:" . $home_tel . "\r\n";
				//if($fax)	$qrPng .= "TEL;TYPE=FAX:" . $fax . "\r\n";
				//if($web_link1)$qrPng .= "URL;TYPE=Website,pref:" . $web_link1 . "\r\n";
				//if($web_link2)$qrPng .= "URL;TYPE=Website,pref:" . $web_link2 . "\r\n";
				//if($web_link3)$qrPng .= "URL;TYPE=Website,pref:" . $web_link3 . "\r\n";
			    if($address!="") $qrPng .= "ADR;WORK:" . $address . "\r\n"; 
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
			  
//wallet 20241006
				$wallet_text_color=$document->company_detail[0]['wallet_text_color'];
				$wallet_bg_color=$document->company_detail[0]['wallet_bg_color'];
			   
			   
				if ($wallet_logo_option==1)     $gwarray['logo']=$company_logo;
				if ($wallet_logo_option==2)     $gwarray['logo']=$headshot;
				if ($wallet_logo_option==3)     $gwarray['logo']="";
				if ($gwarray['logo']=="")   $gwarray['logo']='https://e-profile.digital/logo.png';
			   
				if ($wallet_field1_option==1)  $gwarray['company_name']=$fname;
				if ($wallet_field1_option==2)  $gwarray['company_name']=$fname." ".$lname;
				if ($wallet_field1_option==3)  $gwarray['company_name']=$fname." ".$lname." ".$oname;
				if ($wallet_field1_option==4)  $gwarray['company_name']=$fname." ".$lname." ".$mname." ".$pname." ".$oname." ".$pdname;
				if ($wallet_field1_option==5)  $gwarray['company_name']=$company_name_eng;
				if ($wallet_field1_option==6)  $gwarray['company_name']=$company_name_chi;
				if ($wallet_field1_option==7)  $gwarray['company_name']=$company_name_eng." ".$company_name_chi;
				if ($wallet_field1_option==8)  $gwarray['company_name']=$division;
				if ($wallet_field1_option==9)  $gwarray['company_name']=$department;
				if ($wallet_field1_option==10)  $gwarray['company_name']=$country;
				if ($wallet_field1_option==11)  $gwarray['company_name']=$position;
				if ($gwarray['company_name']=="")  $gwarray['company_name']="N/A";
			  
				
				if ($wallet_field2_option==1)  $gwarray['name']=$fname;
				if ($wallet_field2_option==2)  $gwarray['name']=$fname." ".$lname;
				if ($wallet_field2_option==3)  $gwarray['name']=$fname." ".$lname." ".$oname;
				if ($wallet_field2_option==4)  $gwarray['name']=$fname." ".$lname." ".$mname." ".$pname." ".$oname." ".$pdname;
				if ($wallet_field2_option==5)  $gwarray['name']=$company_name_eng;
				if ($wallet_field2_option==6)  $gwarray['name']=$company_name_chi;
				if ($wallet_field2_option==7)  $gwarray['name']=$company_name_eng." ".$company_name_chi;
				if ($wallet_field2_option==8)  $gwarray['name']=$division;
				if ($wallet_field2_option==9)  $gwarray['name']=$department;
				if ($wallet_field2_option==10)  $gwarray['name']=$country;
				if ($wallet_field2_option==11)  $gwarray['name']=$position;
				if ($gwarray['name']=="")  $gwarray['name']="N/A";
			  
				 
				if ($wallet_field3_option==1)  $gwarray['position']=$fname;
				if ($wallet_field3_option==2)  $gwarray['position']=$fname." ".$lname;
				if ($wallet_field3_option==3)  $gwarray['position']=$fname." ".$lname." ".$oname;
				if ($wallet_field3_option==4)  $gwarray['position']=$fname." ".$lname." ".$mname." ".$pname." ".$oname." ".$pdname;
				if ($wallet_field3_option==5)  $gwarray['position']=$company_name_eng;
				if ($wallet_field3_option==6)  $gwarray['position']=$company_name_chi;
				if ($wallet_field3_option==7)  $gwarray['position']=$company_name_eng." ".$company_name_chi;
				if ($wallet_field3_option==8)  $gwarray['position']=$division;
				if ($wallet_field3_option==9)  $gwarray['position']=$department;
				if ($wallet_field3_option==10)  $gwarray['position']=$country;
				if ($wallet_field3_option==11)  $gwarray['position']=$position;
				if ($gwarray['position']=="")  $gwarray['position']="N/A";
			  
				$gwarray['banner']=$wallet_banner;
				if ($gwarray['banner']=="")  $gwarray['banner']="https://e-profile.digital/strip.png";
			  
			   
				if ($wallet_qrcode_option==1)     $gwarray['qrcode']=$qrPng;
				if ($wallet_qrcode_option==2)     $gwarray['qrcode']=$domain."?key=".$encrypted;
				if ($wallet_qrcode_option==3)     $gwarray['qrcode']=$domain."?key=".$encrypted."&bo=1";
				if ($wallet_qrcode_option==4)     $gwarray['qrcode']=$domain."?key=".$encrypted."&bo=0";
			  
				$gwarray['wallet_bg_color']=$wallet_bg_color;
				$gwarray['wallet_text_color']=$wallet_text_color;


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
