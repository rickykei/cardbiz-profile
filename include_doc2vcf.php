<?php
 
			//$company_name_eng=$document->company_detail[0]['company_name_eng'];	
			//$company_name_chi=$document->company_detail[0]['company_name_chi'];
			//citic
			$company_name_eng=chk_null($document->company_name_eng);
			$company_name_chi=chk_null($document->company_name_chi);
			$company_logo=$document->company_detail[0]['logo'];
			
			$company_id=$document->company_id;
			
			$rc_no=chk_null($document->rc_no);
			$staff_no=chk_null($document->staff_no);
			
			
			$name_eng=chk_null($document->name_eng);
			$name_chi=chk_null($document->name_chi);
			$title_eng=chk_null($document->title_eng);
			$title_chi=chk_null($document->title_chi);
			
			$work_email= chk_null($document->work_email);
			$pro_title= chk_null($document->pro_title);
			
			$subsidiary_eng=chk_null($document->subsidiary_eng);
			$subsidiary_chi=chk_null($document->subsidiary_chi);
			
			$position=chk_null($document->position);
			
			$work_tel=chk_null($document->work_tel);
			$work_tel2=chk_null($document->work_tel2);
			$work_tel3=chk_null($document->work_tel3);
			
			$direct_tel=chk_null($document->direct_tel);
			$direct_tel2=chk_null($document->direct_tel2);
			$direct_tel3=chk_null($document->direct_tel3);
			 
			$mobile_tel= chk_null($document->mobile_tel);
			$mobile_tel2= chk_null($document->mobile_tel2);
			$mobile_tel3= chk_null($document->mobile_tel3);
			$mobile_tel4= chk_null($document->mobile_tel4);
			$mobile_tel5= chk_null($document->mobile_tel5);
			
			$fax_no= chk_null($document->fax_no);
			$fax_no2= chk_null($document->fax_no2);
			$fax_no3= chk_null($document->fax_no3);
			$fax_no4= chk_null($document->fax_no4);
			$fax_no5= chk_null($document->fax_no5);
			
			$reuters= chk_null($document->reuters);
			$agent_no= chk_null($document->agent_no);
			$broker_no=chk_null($document->broker_no);
			$mpf_no=chk_null($document->mpf_no);
			$hkma_no=chk_null($document->hkma_no);
			$hkma_eng=chk_null($document->hkma_eng);
			$hkma_chi=chk_null($document->hkma_chi);
			 
			$address_eng= chk_null($document->address_eng);
			$address_chi= chk_null($document->address_chi);
			
			if($document->headshot!="")
			$headshot=$domain."/api/files/".$document->headshot;
			$headshot=$domain."/Touchless/contact_citic.jpg";
			
			$division=chk_null($document->division);
			 
		 
		 
			  
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
			 
			  if($company_name_eng!="") $vCard .= "ORG:" . $company_name_eng ." ". $company_name_chi. "\r\n";
			  //if($company_name_chi!="")$vCard .= "ORG:" . $company_name_chi . "\r\n";
			  if($name_eng!="") $vCard .= "N;CHARSET=utf-8:" . $name_eng ." ". $name_chi ." ". $pro_title."\r\n";
			//  if($name_chi!="")$vCard .= "N;CHARSET=utf-8:" .  $name_eng ." ". $name_chi. "\r\n";
			  if ($title_eng !="" || $subsidiary_eng !="" )  $vCard.="TITLE;CHARSET=utf-8:";
			  if ($title_eng !=""){		 	$vCard.=$title_eng;	 $temp_comma=1;}
			  if ($subsidiary_eng !=""){		 	if ($temp_comma==1)	{	 	$vCard.=","; $temp_comma=0;}	 $vCard.=$subsidiary_eng;}
			  if ($title_eng !="" || $subsidiary_eng !="" ) 	  $vCard.="\r\n";
			  
			  if($address_eng) $vCard .= "ADR;WORK:" . $address_eng . "\r\n"; 
			  
			  if($work_tel) $vCard .= "TEL;WORK:" . $work_tel . "\r\n"; 
			  if($work_tel2) $vCard .= "TEL;WORK:" . $work_tel2 . "\r\n"; 
			  if($work_tel3) $vCard .= "TEL;WORK:" . $work_tel3 . "\r\n"; 
			 
			  if($direct_tel)	$vCard .= "TEL;WORK:" . $direct_tel . "\r\n"; 
			  if($direct_tel2)	$vCard .= "TEL;WORK:" . $direct_tel2 . "\r\n"; 
			  if($direct_tel3)	$vCard .= "TEL;WORK:" . $direct_tel3 . "\r\n"; 
			  
			  if($mobile_tel)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel . "\r\n"; 
			 if($mobile_tel2)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel2 . "\r\n"; 
			 if($mobile_tel3)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel3 . "\r\n"; 
			 if($mobile_tel4)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel4 . "\r\n"; 
			 if($mobile_tel5)$vCard .= "TEL;TYPE=CELL:" . $mobile_tel5 . "\r\n"; 
			 
			  if($fax_no)	$vCard .= "TEL;TYPE=FAX:" . $fax_no . "\r\n";
			  if($fax_no2)	$vCard .= "TEL;TYPE=FAX:" . $fax_no2 . "\r\n";
			  if($fax_no3)	$vCard .= "TEL;TYPE=FAX:" . $fax_no3 . "\r\n";
			  if($fax_no4)	$vCard .= "TEL;TYPE=FAX:" . $fax_no4 . "\r\n";
			  if($fax_no5)	$vCard .= "TEL;TYPE=FAX:" . $fax_no5 . "\r\n";
			  
			 if($work_email!="") $vCard .= "EMAIL;TYPE=Work:" . $work_email . "\r\n"; 
			 
			 $cnt=0;
			 
				 $vCard.="NOTE:";
			  if($agent_no!="") {if ($cnt>0) $vCard.=","; $vCard .= " Licensed Technical Representative (Agent) License No." . $agent_no;$cnt++;}
			  if($broker_no!=""){if ($cnt>0) $vCard.=","; $vCard .= " Licensed Technical Representative (Broker) License No.: " . $broker_no; $cnt++;}
			  if($mpf_no!="") {if ($cnt>0) $vCard.=",";$vCard .= " MPF Intermediary Reg. No.: " . $mpf_no;  $cnt++;}
			  if($hkma_no!="") {if ($cnt>0) $vCard.=",";$vCard .= " HKMA Reg. No. Of Relevant Individual: " . $hkma_no;  $cnt++;}
			  if($hkma_eng!="") {if ($cnt>0) $vCard.=",";$vCard .= " Regulated Activity: " . $hkma_eng ;  $cnt++;}
			  if($reuters!="")	{if ($cnt>0) $vCard.=",";$vCard .= " " . $reuters;  $cnt++;}
			  $vCard .= " Meet on " . date("d/m/Y H:i") . "\r\n";
			   
		
			  if($getPhoto&&$needPhoto&&!$debug) $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:".$b64vcard . "\r\n";
			  //if($url&&!$debug) $vCard .= "PHOTO;TYPE=JPEG;VALUE=URI:".$url . "\r\n";
			  if($smartcard_uid)$vCard.="URL;TYPE=Digital Business Card,pref: ".$domain."/Touchless/Profile.php?sig=".$sig. "\r\n";
				$vCard.="END:VCARD\r\n";
			
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



function chk_null($aa){
	
	if ($aa=="undefined" || $aa=="null" || $aa==null)
		$aa="";
	
	return $aa;
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
