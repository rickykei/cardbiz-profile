<?php

			$company_name_option_eng[0]="The Bank of East Asia, Limited";
			$company_name_option_eng[1]="Bank of East Asia (Trustees) Limited";
			$company_name_option_eng[2]="East Asia Futures Limited";
			$company_name_option_eng[3]="East Asia Property Agency Company Limited";
			$company_name_option_eng[4]="East Asia Facility Management Limited";
			$company_name_option_eng[5]="East Asia Securities Company Limited";
			$company_name_option_eng[6]="BEA Insurance Agency Limited";
			$company_name_option_chi[0]="東亞銀行有限公司";
			$company_name_option_chi[1]="東亞銀行（信託）有限公司";
			$company_name_option_chi[2]="東亞期貨有限公司";
			$company_name_option_chi[3]="東亞物業代理有限公司";
			$company_name_option_chi[4]="東亞設施管理有限公司";
			$company_name_option_chi[5]="東亞證券有限公司";
			$company_name_option_chi[6]="東亞保險代理有限公司";
 
 
			//company level
			$company_name_option=$document->company_name_option;
			$company_name_eng=$document->company_name_eng;
			$company_name_chi=$document->company_name_chi;

			if ($company_name_eng=="" || $company_name_chi==""){
				$admin_company_name_eng=$document->company_detail[0]['company_name_eng'];	
				$admin_company_name_chi=$document->company_detail[0]['company_name_chi'];
				$admin_company_name_img=$document->company_detail[0]['company_name_img'];
				$admin_company_name_eng2=$document->company_detail[0]['company_name_eng2'];	
				$admin_company_name_chi2=$document->company_detail[0]['company_name_chi2'];
				$admin_company_name_img2=$document->company_detail[0]['company_name_img2'];
				$admin_company_name_eng3=$document->company_detail[0]['company_name_eng3'];	
				$admin_company_name_chi3=$document->company_detail[0]['company_name_chi3'];
				$admin_company_name_img3=$document->company_detail[0]['company_name_img3'];
				$company_name_eng=$admin_company_name_eng;
				$company_name_chi=$admin_company_name_chi;
			}
			
				$company_name_eng2=$document->company_name_eng2;	
				$company_name_chi2=$document->company_name_chi2;
				
				$company_name_eng3=$document->company_name_eng3;	
				$company_name_chi3=$document->company_name_chi3;
				
			
			if ($document->company_detail[0]['profile_theme']!="")
			$profile_theme=$domain."/api/files/".$document->company_detail[0]['profile_theme']; 
 
			$company_logo=$document->company_detail[0]['logo'];
			$company_banner=$document->company_detail[0]['banner'];
			
			$company_id=$document->company_id;
			
			//staff records
			$cc_no=$document->cc_no;
			$staff_no=$document->staff_no;
			
			
			$fname=$document->fname;
			$lname=$document->lname;
			$title_eng=$document->title_eng;
			$title_chi=$document->title_chi;
			$title_eng2=$document->title_eng2;
			$title_chi2=$document->title_chi2;
			$pro_title= $document->pro_title;
			
			$division_eng=$document->division_eng;
			$division_chi=$document->division_chi;

			$dept_eng=$document->dept_eng;			 
			$dept_chi=$document->dept_chi;			 
			 
			 
			$address_eng= $document->address_eng;
			$address_chi= $document->address_chi;
			$address_eng2= $document->address_eng2;
			$address_chi2= $document->address_chi2;
			
			$work_tel=$document->work_tel;
			$work_tel2=$document->work_tel2;
			$work_tel3=$document->work_tel3;
			
			$direct_tel=$document->direct_tel;
			$direct_tel2=$document->direct_tel2;
			$direct_tel3=$document->direct_tel3;

			$mobile= $document->mobile;
			$mobile2= $document->mobile2;
			$mobile3= $document->mobile3;
			
			$mobile_china_tel= $document->mobile_china_tel;
			$mobile_china_tel2= $document->mobile_china_tel2;
			$mobile_china_tel3= $document->mobile_china_tel3;
			
			$fax= $document->fax;
			
			$swift_no= $document->swift_no;
			 
			$work_email= $document->work_email;
			$work_email2= $document->work_email2;
			$work_email3= $document->work_email3;

		  	$web_link=$document->web_link;
			$web_link_label=$document->web_link_label;
 
			$web_link2=$document->web_link2;
			$web_link_label2=$document->web_link_label2;
 
			$web_link3=$document->web_link3;
			$web_link_label3=$document->web_link_label3;
			
			$agent_no=$document->agent_no;
			$insurance_no=$document->insurance_no;
			$mpf_no=$document->mpf_no;
			$hkma_no=$document->hkma_no;  
			
			$type1_no=$document->type1_no;
			$type4_no=$document->type4_no;
			$type6_no=$document->type6_no;
			$type9_no=$document->type9_no;
			
			$reuters_code=$document->reuters_code;
			$bloomberg_info=$document->bloomberg_info;
			$sfc_no=$document->sfc_no; 
			$sfc_type1_no=$document->sfc_type1_no; 
			$sfc_type2_no=$document->sfc_type2_no; 
			
			$additional_info=$document->additional_info;
			
			//if($document->headshot!="")
			//$headshot=$domain."/api/files/".$document->headshot;
			//$headshot=$domain."/Touchless/contact_citic.jpg";
			
			//generic field
			
			$field051=$document->field051;
			$field052=$document->field052;
			$field053=$document->field053;
			$field054=$document->field054;
			$field055=$document->field055;
			$field056=$document->field056;
			$field057=$document->field057;
			$field058=$document->field058;
			$field059=$document->field059;
			
			
			$field060=$document->field060;
			$field061=$document->field061;
			$field062=$document->field062;
			$field063=$document->field063;
			$field064=$document->field064;
			$field065=$document->field065;
			$field066=$document->field066;
			$field067=$document->field067;
			$field068=$document->field068;
			$field069=$document->field069;
			
			$field070=$document->field070; 
		 	$field071=$document->field071; 
			 
			$note=$document->note;
			$note_timestamp=$document->note_timestamp;
			  
			$smartcard_uid= $document->smartcard_uid;
			$sig=$document->_id;
			$staff_status=$document->status;
			
			$bizcard_option= $document->bizcard_option;
			$dig_card_in_vcf=$document->dig_card_in_vcf;
			$qrcode_option=	$document->qrcode_option;
			
			$needPhoto=1;
			$headshot=1;
			
		
			
			  if($headshot!=""&&$needPhoto==1){ 
			  //  $url = str_replace("https", "http",$url);
				$url=$domain."comp_logo_small/".$company_name_option.".png";
				$getPhoto               = file_get_contents_curl($url);
				  
				$b64vcard               = base64_encode($getPhoto);
				$b64mline               = chunk_split($b64vcard,74,"\n");
				$b64final               = preg_replace('/(.+)/', ' $1', $b64mline);
				$photo                  = $b64final;
				
			  }
			  
			 
			  //prepare vcf Variable
			  $vCard = "BEGIN:VCARD\r\n";
			  $vCard .= "VERSION:3.0\r\n";
			 
			  if($company_name_option!="") $vCard .= "ORG:" . $company_name_option_eng[$company_name_option] ." ". $company_name_option_chi[$company_name_option]. "\r\n";
			 
			  if($fname!="") $vCard .= "N;CHARSET=utf-8:" . $fname ." ". $lname ."\r\n";
		 
			  if($title_eng!="") $vCard .= "TITLE;CHARSET=utf-8:" . $title_eng ." ". $dept_eng ."\r\n"; 
			 			 
			  if($address_eng!="") $vCard .= "ADR;WORK:" . $address_eng ."\r\n"; 
			   
			  if($work_tel!="") $vCard .= "TEL;WORK:" . $work_tel . "\r\n"; 
			  if($work_tel2!="") $vCard .= "TEL;WORK:" . $work_tel2 . "\r\n"; 
			  if($work_tel3!="") $vCard .= "TEL;WORK:" . $work_tel3 . "\r\n"; 
			  			 
			  if($direct_tel!="") $vCard .= "TEL;WORK:" . $direct_tel . "\r\n"; 
			  if($direct_tel2!="") $vCard .= "TEL;WORK:" . $direct_tel2 . "\r\n"; 
			  if($direct_tel3!="") $vCard .= "TEL;WORK:" . $direct_tel3 . "\r\n"; 
			  
			  if($mobile!="") $vCard .= "TEL;TYPE=CELL:" . $mobile . "\r\n"; 
			  if($mobile2!="") $vCard .= "TEL;TYPE=CELL:" . $mobile2 . "\r\n"; 
			  if($mobile3!="") $vCard .= "TEL;TYPE=CELL:" . $mobile3 . "\r\n"; 
			  
			  if($mobile_china_tel!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_china_tel . "\r\n"; 
			  if($mobile_china_tel2!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_china_tel2 . "\r\n"; 
			  if($mobile_china_tel3!="") $vCard .= "TEL;TYPE=CELL:" . $mobile_china_tel3 . "\r\n"; 
			  
			  if($fax_no!="") $vCard .= "TEL;TYPE=FAX:" . $fax_no . "\r\n"; 
			 
			 if($work_email!="") $vCard .= "EMAIL;WORK:" . $work_email . "\r\n"; 
			 if($work_email2!="") $vCard .= "EMAIL;WORK:" . $work_email2 . "\r\n"; 
			 if($work_email3!="") $vCard .= "EMAIL;WORK:" . $work_email3 . "\r\n"; 
			  
			 if($web_link!="")	$vCard .= "URL;TYPE=".$web_link_label.",pref:" . $web_link. "\r\n"; 
			 if($field068!="")	$vCard .= "TEL;WORK:".$field068."\r\n"; 	
			 if($field069!="")	$vCard .= "TEL;WORK:".$field069."\r\n";		
			 if($field070!="")	$vCard .= "TEL;WORK:".$field070."\r\n";			
			  	 
			 
			/* if ($note_timestamp==true) 
			  $temp_note= " Meet on " . date("d/m/Y H:i");
		  
			 if($note!="" || $temp_note!="")	$vCard .= "NOTE:" . $note ." ".$temp_note. "\r\n"; 			 
			  */
			 
			  
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			 // if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
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
			  }
			  else if( $fromuid==true){
				 
				  $savemycontact=$domain."?uid=".$uid."&bo=0";
			  }else if ( $fromsig==true){
				 $savemycontact=$domain."?sig=".$sig."&bo=0";
			  }
			
			if ($debug==true)
			{
				echo "needPhoto=";
				echo $needPhoto;
				echo "headShot=";
				echo $headshot;
				
				echo "b64vcard=";
				echo $b64vcard;
			}
			
			
			  //gather qrcode png info
			  $qrPng = "BEGIN:VCARD\r\n";
			  $qrPng .= "VERSION:3.0\r\n";
			  if($company_name_option!="") $qrPng .= "ORG:" . $company_name_option_eng[$company_name_option] ." ". $company_name_option_chi[$company_name_option]. "\r\n";
			  
			  if($fname!="") $qrPng .= "N;CHARSET=utf-8:" . $fname ." ". $lname ."\r\n";
		 
			  if($title_eng!="") $qrPng .= "TITLE;CHARSET=utf-8:" . $title_eng." ". $dept_eng ."\r\n"; 
			  if($title_eng2!="") $qrPng .= "TITLE;CHARSET=utf-8:" . $title_eng2." ". $dept_eng2 ."\r\n"; 
			 			 
			  if($address_eng!="") $qrPng .= "ADR;WORK:" . $address_eng ."\r\n"; 
			   
			  if($work_tel!="") $qrPng .= "TEL;WORK:" . $work_tel . "\r\n"; 
			   
			  if($direct_tel!="") $qrPng .= "TEL;WORK:" . $direct_tel . "\r\n"; 
			  
			  
			  if($mobile_tel!="") $qrPng .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
			 
			  if($mobile_china_tel!="") $qrPng .= "TEL;TYPE=CELL:" . $mobile_china_tel . "\r\n"; 
			   
			  
			  if($fax_no!="") $qrPng .= "TEL;TYPE=FAX:" . $fax_no . "\r\n"; 
			 
			 if($work_email!="") $qrPng .= "EMAIL;WORK:" . $work_email . "\r\n"; 
		 
			  
			 if($web_link!="")	$qrPng .= "URL;TYPE=".$web_link_label.",pref:" . $web_link. "\r\n"; 
			 
			  if($field068!="")	$qrPng .= "TEL;WORK:".$field068."\r\n"; 
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
