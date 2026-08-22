<?php  
			if ($_GET['lang']!=''){
				$lang=strtolower($_GET['lang']);
					 
						include_once("./lang/".$lang."_eprofile.php");
					 
					 
			}else{
				include_once("./lang/en_eprofile.php");
			}
			
			 
  			$company_name_eng=$document->company_name_eng;
			$company_name_chi=$document->company_name_chi;

			if ($company_name_eng=="" || $company_name_chi==""){
				$admin_company_name_eng=$document->company_detail[0]['name'];	
				$admin_company_name_chi=$document->company_detail[0]['name'];
				$company_name_eng=$document->company_name_eng;	
				$company_name_chi=$document->company_name_chi;
				
			}
			if ($document->company_detail[0]['profile_theme']!="")
			$profile_theme=$domain."/api/files/".$document->company_detail[0]['profile_theme']; 
 
			if ($document->company_detail[0]['logo']!="")
			$company_logo=$domain."/api/files/".$document->company_detail[0]['logo'];

			//logo display on profile control by switch
			$headshot_display_option=1;
			$logo_display_option=1;
			
			    if (isset($document->company_detail[0]['headshot_display_option']))
				$headshot_display_option=$document->company_detail[0]['headshot_display_option'];
				 
				 if (isset($document->company_detail[0]['logo_display_option']))
				$logo_display_option=$document->company_detail[0]['logo_display_option'];
				   
			if ($debug==1){
				
			echo "<p>headshot display option = ". $headshot_display_option;
			echo "<p>logo display option = ". $logo_display_option;
			}
			
			//minisite style sheet 20250105
			$minisite_title_font_size=18;
			$minisite_font_size=14;
			$minisite_font_color="#8c8c8c";
			$minisite_font_family="Lato";
			$minisite_bg_color="#f7f6f3";
			$minisite_text_color="#8c8c8c";
			$minisite_title_text_color="#000000";
			$minisite_social_icon_bg_color="#fff";
			$minisite_button_color="#fff";
			$minisite_links_hover_color="#000000";
			$minisite_links_not_hover_color="#b6b6b6";
			$minisite_links_selected_color="#000000";
			$minisite_left_nav_bar_color=":#666";
			$minisite_bio_wording_color=":#8c8c8c";
			$minisite_key_wording_color="#000000";
			$minisite_site_bg_color="#fff";
			$minisite_bg_image="/vcard/images/bg.jpg";
			
			if ($document->company_detail[0]['font_color']!="")
			$minisite_font_color=$document->company_detail[0]['font_color'];
			if ($document->company_detail[0]['font_size']!="")
			$minisite_font_size=$document->company_detail[0]['font_size'];
			if ($document->company_detail[0]['title_font_size']!="")
			$minisite_title_font_size=$document->company_detail[0]['title_font_size'];
			if ($document->company_detail[0]['font_family']!="")
			$minisite_font_family=$document->company_detail[0]['font_family'];
			if ($document->company_detail[0]['bg_color']!="")
			$minisite_bg_color=$document->company_detail[0]['bg_color'];
			if ($document->company_detail[0]['text_color']!="")
			$minisite_text_color=$document->company_detail[0]['text_color'];
			if ($document->company_detail[0]['title_text_color']!="")
			$minisite_title_text_color=$document->company_detail[0]['title_text_color']; 
  			if ($document->company_detail[0]['social_icon_bg_color']!="")
			$minisite_social_icon_bg_color=$document->company_detail[0]['social_icon_bg_color'];  
			if ($document->company_detail[0]['button_color']!="")
			$minisite_button_color=$document->company_detail[0]['button_color'];  
			if ($document->company_detail[0]['links_hover_color']!="")
			$minisite_links_hover_color=$document->company_detail[0]['links_hover_color'];  
			if ($document->company_detail[0]['links_not_hover_color']!="")
			$minisite_links_not_hover_color=$document->company_detail[0]['links_not_hover_color'];  
			if ($document->company_detail[0]['links_selected_color']!="")
			$minisite_links_selected_color=$document->company_detail[0]['links_selected_color'];  
			if ($document->company_detail[0]['left_nav_bar_color']!="")
			$minisite_left_nav_bar_color=$document->company_detail[0]['left_nav_bar_color'];  
			if ($document->company_detail[0]['bio_wording_color']!="")
			$minisite_bio_wording_color=$document->company_detail[0]['bio_wording_color'];  
			if ($document->company_detail[0]['key_wording_color']!="")
			$minisite_key_wording_color=$document->company_detail[0]['key_wording_color'];  
			if ($document->company_detail[0]['site_bg_color']!="")
			$minisite_site_bg_color=$document->company_detail[0]['site_bg_color'];  
			if ($document->company_detail[0]['bg_image']!="")
			$minisite_bg_image=$document->company_detail[0]['bg_image'];  
			        
		       


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
			

			if ($company_website_url_label=="")	$company_website_url_label=$lang_str["eprofile.company_website_url_label"];
			 
			$work_email_label= $document->work_email_label;
			$work_email2_label= $document->work_email2_label;
			$work_email3_label= $document->work_email3_label;

			if ($work_email_label=="")	$work_email_label=$lang_str["eprofile.work_email_label"];
			if ($work_email2_label=="")	$work_email2_label=$lang_str["eprofile.work_email2_label"];
			if ($work_email3_label=="")	$work_email3_label=$lang_str["eprofile.work_email3_label"];
		

			$home_email_label= $document->home_email_label;
			$other_email_label = $document->other_email_label;
			if ($home_email_label=="")	$home_email_label=$lang_str["eprofile.home_email_label"];
			if ($other_email_label=="")	$other_email_label=$lang_str["eprofile.other_email_label"];
		

			$work_email= $document->work_email;
			$work_email2= $document->work_email2;
			$work_email3= $document->work_email3;

			$home_email= $document->home_email;
			$other_email = $document->other_email;

			
			$subsidiary_eng=$document->subsidiary_eng;
			$subsidiary_chi=$document->subsidiary_chi;
			
			$position=$document->position;
			$position_other_lang=$document->position_other_lang;
			
			$work_tel_label=$document->work_tel_label;
			$work_tel2_label=$document->work_tel2_label;
			$work_tel3_label=$document->work_tel3_label;
			$work_tel4_label=$document->work_tel4_label;
			if ($work_tel_label=="")	$work_tel_label=$lang_str["eprofile.work_tel_label"];
			if ($work_tel2_label=="")	$work_tel2_label=$lang_str["eprofile.work_tel2_label"];
			if ($work_tel3_label=="")	$work_tel3_label=$lang_str["eprofile.work_tel3_label"];
			if ($work_tel4_label=="")	$work_tel4_label=$lang_str["eprofile.work_tel4_label"];

			$work_tel=$document->work_tel;
			$work_tel2=$document->work_tel2;
			$work_tel3=$document->work_tel3;
			$work_tel4=$document->work_tel4;
			
			$direct_tel=$document->direct_tel;
			$direct_tel2=$document->direct_tel2;
			$direct_tel3=$document->direct_tel3;

		
			
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

			if ($web_link_label=="")	$web_link_label=$lang_str["eprofile.web_link_label"];
			if ($web_link_label2=="")	$web_link_label2=$lang_str["eprofile.web_link_label2"];
			if ($web_link_label3=="")	$web_link_label3=$lang_str["eprofile.web_link_label3"];
			if ($web_link_label4=="") 	$web_link_label4=$lang_str["eprofile.web_link_label4"];
			if ($web_link_label5=="")	$web_link_label5=$lang_str["eprofile.web_link_label5"];
			if ($web_link_label6=="") 	$web_link_label6=$lang_str["eprofile.web_link_label6"];

			$mobile_label= $document->mobile_label;
			$mobile2_label= $document->mobile2_label;
			$mobile3_label= $document->mobile3_label;
			$mobile4_label= $document->mobile4_label;
			$home_tel_label=$document->home_tel_label;
			$fax_label= $document->fax_label;

			if ($mobile_label=="")	$mobile_label=$lang_str["eprofile.mobile_label"];
			if ($mobile2_label=="")	$mobile2_label=$lang_str["eprofile.mobile2_label"];
			if ($mobile3_label=="")	$mobile3_label=$lang_str["eprofile.mobile3_label"];
			if ($mobile4_label=="") $mobile4_label=$lang_str["eprofile.mobile4_label"];
			if ($home_tel_label=="") $home_tel_label=$lang_str["eprofile.home_tel_label"];
			if ($fax_label=="")	$fax_label=$lang_str["eprofile.fax_label"];




			$mobile= $document->mobile;
			$mobile2= $document->mobile2;
			$mobile3= $document->mobile3;
			$mobile4= $document->mobile4;
			$home_tel=$document->home_tel;
			$fax= $document->fax;
			
			$address_label= $document->address_label;
			$address2_label= $document->address2_label;
			$address3_label= $document->address3_label;
			$address4_label= $document->address4_label;
			if ($address_label=="")	$address_label=$lang_str["eprofile.address_label"];
			if ($address2_label=="") $address2_label=$lang_str["eprofile.address_label2"];
			if ($address3_label=="")	$address3_label=$lang_str["eprofile.address_label3"];
			if ($address4_label=="")	$address4_label=$lang_str["eprofile.address_label4"];
			 
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
 			$awards=$document->awards;
    		$qualifications=$document->qualifications;
    		$additional_address=$document->additional_address;
    		$achievements=$document->achievements;
			$company_website_url=$document->company_website_url;
		 	$more_info_tab_url=$document->more_info_tab_url;
			$facebook_url=$document->facebook_url;
			$instagram_url=$document->instagram_url;
			$whatsapp_url=$document->whatsapp_url;
			$linkedin_url=$document->linkedin_url;
			$youtube_url=$document->youtube_url;
			$twitter_url=$document->twitter_url;
			$wechat_id=$document->wechat_id;
			$wechat_qr_url=$document->wechat_qr_url;
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
			$preloader=$document->preloader;
			$save_contact_button=$document->save_contact_button; 
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
			 
			  if($company_name_eng!="") $vCard .= "ORG;CHARSET=utf-8:" . $company_name_eng ." ". $company_name_chi. "\r\n";
			 
		 $vCard .="N;CHARSET=utf-8:" . $lname .";" . $fname .";" . $mname .";" . $pname .";" . $oname ." " . $pdname ."\r\n";
		 
			if ($work_email != "") {$vCard .= 'EMAIL;CHARSET=utf-8;TYPE="' . $work_email_label . '":' . $work_email . "\r\n";}
if ($work_email2 != "") {$vCard .= 'EMAIL;CHARSET=utf-8;TYPE="' . $work_email2_label . '":' . $work_email2 . "\r\n";}
if ($work_email3 != "") {$vCard .= 'EMAIL;CHARSET=utf-8;TYPE="' . $work_email3_label . '":' . $work_email3 . "\r\n";}
if ($home_email != "") {$vCard .= 'EMAIL;CHARSET=utf-8;TYPE="' . $home_email_label . '":' . $home_email . "\r\n";}
if ($other_email != "") {$vCard .= 'EMAIL;CHARSET=utf-8;TYPE="' . $other_email_label . '":' . $other_email . "\r\n";}	
			  
			  if($position!="") $vCard .= "TITLE;CHARSET=utf-8:" . $position ." ". $position_other_lang. "\r\n"; 			 
			  
			   if ($work_tel != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $work_tel_label . '":' . $work_tel . "\r\n";}
			   if ($work_tel2 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $work_tel2_label . '":' . $work_tel2 . "\r\n";}
			   if ($work_tel3 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $work_tel3_label . '":' . $work_tel3 . "\r\n";}
			   if ($work_tel4 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $work_tel4_label . '":' . $work_tel4 . "\r\n";}

			 if ($mobile != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $mobile_label . '":' . $mobile . "\r\n";}
			if ($mobile2 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $mobile2_label . '":' . $mobile2 . "\r\n";}
			 if ($mobile3 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $mobile3_label . '":' . $mobile3 . "\r\n";}
			 if ($mobile4 != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $mobile4_label . '":' . $mobile4 . "\r\n";}
			  
if ($home_tel != "") {$vCard .= 'TEL;CHARSET=utf-8;TYPE="' . $home_tel_label . '":' . $home_tel . "\r\n";}
if ($fax != "") {$vCard .= 'TEL;CHARSET=utf-8;WORK;TYPE="' . $fax_label . '":' . $fax . "\r\n";}
			 
			 if($web_link!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=".$web_link_label.":" . $web_link. "\r\n"; 
			 if($web_link2!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=" . $web_link_label2.":" . $web_link2. "\r\n"; 
			 if($web_link3!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=" . $web_link_label3 .":" . $web_link3.  "\r\n"; 
			 if($web_link4!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=" . $web_link_label4 .":" . $web_link4.  "\r\n"; 
			 if($web_link5!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=" . $web_link_label5 .":" . $web_link5. "\r\n"; 
			 if($web_link6!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=" . $web_link_label6 .":" . $web_link6. "\r\n"; 
			 

if ($address != "") {$vCard .= 'ADR;CHARSET=utf-8;TYPE="' . $address_label . '":' . $address . "\r\n";}
if ($address2 != "") {$vCard .= 'ADR;CHARSET=utf-8;TYPE="' . $address2_label . '":' . $address2 . "\r\n";}
if ($address3 != "") {$vCard .= 'ADR;CHARSET=utf-8;TYPE="' . $address3_label . '":' . $address3 . "\r\n";}
if ($address4 != "") {$vCard .= 'ADR;CHARSET=utf-8;TYPE="' . $address4_label . '":' . $address4 . "\r\n";}	 			 
			 
			 if($company_website_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Company Website:" . $company_website_url . "\r\n"; 			 
			 
			 if($more_info_tab_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=More Info:" . $more_info_tab_url . "\r\n"; 			 
			 if($facebook_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Facebook:" . $facebook_url . "\r\n"; 			 
			 if($instagram_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Instagram:" . $instagram_url . "\r\n"; 			 
			 if($whatsapp_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Whatsapp:" . $whatsapp_url . "\r\n"; 			 
			 if($linkedin_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Linkedin:" . $linkedin_url . "\r\n"; 			 
			 if($youtube_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Youtube:" . $youtube_url . "\r\n"; 			 
			 if($twitter_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Twitter:" . $twitter_url . "\r\n"; 			 
			 
			 if($wechatpage_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Wechat:" . $wechatpage_url . "\r\n"; 			 
			 if($tiktok_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Tiktok:" . $tiktok_url . "\r\n"; 			 
			 if($line_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Line:" . $line_url . "\r\n"; 			 
			 if($facebook_messenger_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Facebook Messenger:" . $facebook_messenger_url . "\r\n"; 			 
			 if($weibo_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Weibo:" . $weibo_url . "\r\n"; 			 
			 if($bilibili_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Bilibili:" . $bilibili_url . "\r\n"; 			 
			 if($qq_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=QQ:" . $qq_url . "\r\n"; 			 
			 if($zhihu_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Zhihu:" . $zhihu_url . "\r\n"; 			 
			 if($app_store_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=App Store:" . $app_store_url . "\r\n"; 			 
			 if($google_play_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Google Play:" . $google_play_url . "\r\n"; 			 
			 if($snapchat_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Snapchat:" . $snapchat_url . "\r\n"; 			 
			 if($telegram_url!="")	$vCard .= "URL;CHARSET=utf-8;TYPE=Telegram:" . $telegram_url . "\r\n"; 			 
			 
			 if ($note_timestamp==true) 
			  $temp_note= " Met on: " . date("d/m/Y H:i") . " UTC+8";
		  
			 if($note!="" || $temp_note!="")	$vCard .= "NOTE;CHARSET=utf-8:" . $note ." ".$temp_note. "\r\n"; 			 
			  
			 
			  
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			 //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			 //
			 if ($debug==1)
			 {
				 echo "fromkey=".$fromkey."<p>";
				 echo "<br>fromuid=".$fromuid."<p>";
				 echo "<br>fromsig=".$fromsig."<p>";
				 echo "<br>digcardinvcf=".$dig_card_in_vcf."<p>";
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
				echo "eedPhoto=".$needPhoto."<p>";
				echo "headShot=".$headshot."<p>";
				
				//echo "b64vcard=";
				//echo $b64vcard;
			}
			
			
			  //gather qrcode png info
			  $qrPng = "BEGIN:VCARD\r\n";
			  $qrPng .= "VERSION:3.0\r\n";
				if($company_name_eng!=""|| $company_name_chi!="" )$qrPng .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
				if($fname!="") $qrPng .= "N:" . $lname .";" . $fname .";" . $mname .";" . $pname .";" . $oname ." " . $pdname ."\r\n";
                if($work_email!="") $qrPng .= "EMAIL;WORK:" . $work_email . "\r\n";         
				if($position!="")$qrPng.="TITLE:".$position." ". $position_other_lang. "\r\n";
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
		//20241006  added wallet fields on company table
	
		$wallet_text_color=$document->company_detail[0]['wallet_text_color'];
		$wallet_bg_color=$document->company_detail[0]['wallet_bg_color'];
		
		
		$wallet_field1_option=$document->company_detail[0]['wallet_field1_option'];
		$wallet_field2_title=$document->company_detail[0]['wallet_field2_title'];
	 	$wallet_field2_option=$document->company_detail[0]['wallet_field2_option'];
		$wallet_field3_title=$document->company_detail[0]['wallet_field3_title'];
		$wallet_field3_option=$document->company_detail[0]['wallet_field3_option'];
		$wallet_qrcode_option=$document->company_detail[0]['wallet_qrcode_option'];
		$wallet_logo_option=$document->company_detail[0]['wallet_logo_option'];

				$wallet_text_color=$document->company_detail[0]['wallet_text_color'];
				$wallet_bg_color=$document->company_detail[0]['wallet_bg_color'];
			   
			
			   
				if ($wallet_logo_option==1)     
						{
						$gwarray['logo']='';
						$gwarray['ioslogo']=$domain."nologo.png";
						}
				if ($wallet_logo_option==2){

					$gwarray['logo']=$headshot;
				  	$gwarray['ioslogo']=$headshot;
				  }   
				if ($wallet_logo_option==3) {
				 	$gwarray['logo']=$company_logo;
				 	$gwarray['ioslogo']=$company_logo;
				 }   
				if ($wallet_logo_option=="") 
					{
						$gwarray['logo']='';
						$gwarray['ioslogo']=$domain."nologo.png";
					}
				
 

				 $gwarray['logo2']=$domain.'images/transparent.png';
				
				$walletField1SelectDataLabel = ["","Name","Name","Name","Name","Company","Company","Division","Department","Country","Position","Position"];

			

				if ($wallet_field1_option==1)  $gwarray['company_name']=$fname;
				if ($wallet_field1_option==2)  $gwarray['company_name']=$fname." ".$lname;
				if ($wallet_field1_option==3)  $gwarray['company_name']=$fname." ".$lname." ".$oname;
				if ($wallet_field1_option==4)  $gwarray['company_name']=$pname." ".$fname." ".$mname." ".$lname." ".$pdname." ".$oname;
				if ($wallet_field1_option==5)  $gwarray['company_name']=$company_name_eng;
				if ($wallet_field1_option==6)  $gwarray['company_name']=$company_name_chi;
				if ($wallet_field1_option==7)  $gwarray['company_name']=$division;
				if ($wallet_field1_option==8)  $gwarray['company_name']=$department;
				if ($wallet_field1_option==9)  $gwarray['company_name']=$country;
				if ($wallet_field1_option==10)  $gwarray['company_name']=$position;
				if ($wallet_field1_option==11)  $gwarray['company_name']=$position_other_lang;
				if ($wallet_field1_option=="")  { $gwarray['company_name']=$company_name_eng  ;$wallet_field1_option=5;}
				if (trim($gwarray['company_name']," ")=="")   $gwarray['company_name']="Digital Name Card";
				$gwarray['company_name_label']=$walletField1SelectDataLabel[$wallet_field1_option];

				 
				
				if ($wallet_field2_option==1)  $gwarray['name']=$fname;
				if ($wallet_field2_option==2)  $gwarray['name']=$fname." ".$lname;
				if ($wallet_field2_option==3)  $gwarray['name']=$fname." ".$lname." ".$oname;
				if ($wallet_field2_option==4)  $gwarray['name']=$pname." ".$fname." ".$mname." ".$lname." ".$pdname." ".$oname;
				if ($wallet_field2_option==5)  $gwarray['name']=$company_name_eng;
				if ($wallet_field2_option==6)  $gwarray['name']=$company_name_chi;
				if ($wallet_field2_option==7)  $gwarray['name']=$division;
				if ($wallet_field2_option==8)  $gwarray['name']=$department;
				if ($wallet_field2_option==9)  $gwarray['name']=$country;
				if ($wallet_field2_option==10)  $gwarray['name']=$position;
				if ($wallet_field2_option==11)  $gwarray['name']=$position_other_lang;
				if ($wallet_field2_option=="")  {$gwarray['name']=$fname." ".$lname;$wallet_field2_option=2;}
				if (trim($gwarray['name']," ")=="")  $gwarray['name']="N/A";

				if ($wallet_field2_title!="")
				$gwarray['name_label']=$wallet_field2_title;
				else
				$gwarray['name_label']=$walletField1SelectDataLabel[$wallet_field2_option];
				
				 
				if ($wallet_field3_option==1)  $gwarray['position']=$fname;
				if ($wallet_field3_option==2)  $gwarray['position']=$fname." ".$lname;
				if ($wallet_field3_option==3)  $gwarray['position']=$fname." ".$lname." ".$oname;
				if ($wallet_field3_option==4)  $gwarray['position']=$pname." ".$fname." ".$mname." ".$lname." ".$pdname." ".$oname;
				if ($wallet_field3_option==5)  $gwarray['position']=$company_name_eng;
				if ($wallet_field3_option==6)  $gwarray['position']=$company_name_chi;
				if ($wallet_field3_option==7)  $gwarray['position']=$division;
				if ($wallet_field3_option==8)  $gwarray['position']=$department;
				if ($wallet_field3_option==9)  $gwarray['position']=$country;
				if ($wallet_field3_option==10)  $gwarray['position']=$position;
				if ($wallet_field3_option==11)  $gwarray['position']=$position_other_lang;
				if ($wallet_field3_option=="")  { $gwarray['position']=$position; $wallet_field3_option=10;}
				if (trim($gwarray['position']," ")=="")  $gwarray['position']="N/A";
				if ($wallet_field3_title!="")
				$gwarray['position_label']=$wallet_field3_title;
				else
				$gwarray['position_label']=$walletField1SelectDataLabel[$wallet_field3_option];


				
			 
				if ($document->company_detail[0]['wallet_banner']=="") 
					$gwarray['banner']="https://profiles.digital/strip.png";
				else
					$gwarray['banner']=$domain."api/files/".$document->company_detail[0]['wallet_banner'];
			  
			   
				if ($wallet_qrcode_option==1)     $gwarray['qrcode']=$qrPng;
				if ($wallet_qrcode_option==2)     $gwarray['qrcode']=$domain."?key=".$encrypted;
				if ($wallet_qrcode_option==3)     $gwarray['qrcode']=$domain."?key=".$encrypted."&bo=1";
				if ($wallet_qrcode_option==4)     $gwarray['qrcode']=$domain."?key=".$encrypted."&bo=0";
				if ($wallet_qrcode_option=="")  { $gwarray['qrcode']=$domain."?key=".$encrypted."&bo=0"; $wallet_qrcode_option=4;}
			  
				$gwarray['wallet_bg_color']=$wallet_bg_color;
				if($gwarray['wallet_bg_color']=="") $gwarray['wallet_bg_color']="#000000"; 

				$gwarray['wallet_text_color']=$wallet_text_color;
				if($gwarray['wallet_text_color']=="") $gwarray['wallet_text_color']="#FFFFFF"; 

				if ($debug==1){
				 
					echo "<font color=black>sig=".$sig;
					echo "<p>"; 
					echo "gwarray wallet_text_color=".$gwarray['wallet_text_color']."<p>";
					echo "gwarray wallet_bg_color=".$gwarray['wallet_bg_color']."<p>";
					echo "gwarray wallet_logo_option=".$wallet_logo_option."<p>";
					echo "gwarray wallet_qrcode_option=".$wallet_qrcode_option."<p>"; 
					echo "gwarray logo=".$gwarray['logo']."<p>";
					echo "gwarray banner=".$gwarray['banner']."<p>"; 
					echo "wallet_field1_option=".$wallet_field1_option."<p>";
					echo "wallet_field2_option=".$wallet_field2_option."<p>"; 
					echo "wallet_field3_option=".$wallet_field3_option."<p>"; 
					echo "wallet_field2_title=".$wallet_field2_title."<p>"; 
					echo "wallet_field3_title=".$wallet_field3_title."<p>"; 
					echo "company_logo=".$company_logo."<p>"; 					
					echo "gw comp_name_label=".$gwarray['company_name_label']."<p>";
					echo "gw comp_name=".$gwarray['company_name']."<p>";
					echo "gw name_label=".$gwarray['name_label']."<p>";
					echo "gwa name=".$gwarray['name']."<p>"; 
					echo "gwa position_label=".$gwarray['position_label']."<p>"; 
					echo "gwa position=".$gwarray['position']."<p>"; 

				
					echo "qrstring=".$gwarray['qrcode']."</font><p>";
				}
 

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
