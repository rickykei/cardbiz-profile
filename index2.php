<!doctype html>
<html lang="en">
<head>
<title><?php echo $fname." - "; echo $company_name_eng;?></title>
<meta charset="UTF-8">
<meta property="og:title" content="e-Profile"/>
<meta property="og:description" content="<?php echo $name?>"/>
<meta property="og:type" content="article"/>
<meta property="og:image" content="<?php echo $url ; ?>"/>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->
<link rel="stylesheet" href="/vcard/css/bootstrap.css"/>
<link rel="stylesheet" href="/vcard/css/reset.css"/>
<link rel="stylesheet" href="/vcard/css/style.css"/>
<link rel="stylesheet" href="/vcard/css/magnific-popup.css"/> 
<link rel="stylesheet" href="/vcard/css/jquery.mCustomScrollbar.css"/> 
<link rel="stylesheet" href="/vcard/css/owl.theme.css"/> 
<link rel="stylesheet" href="/vcard/css/owl.carousel.css"/> 
    
<!-- Theme Colors -->
<link rel="stylesheet" href="/vcard/css/colors/switcher.css"/>
<link rel="stylesheet" href="/vcard/css/colors/color-0.css"/>
 
<!-- Google Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">

<!-- Font icons -->
<link rel="stylesheet" href="/vcard/icon-fonts/font-awesome-6.3.0/css/all.min.css"/>
<link rel="stylesheet" href="/vcard/icon-fonts/essential-regular-fonts/essential-icons.css"/>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <script>
 
                  
           function onClick(event) {
            event.preventDefault();
            var href = event.currentTarget.getAttribute('href')
              if(href !== ""){
                 if( href.includes("http")){
                    window.location= href;                   
                 }else{
                    href = "https://" + href ;
                    window.location= href;    
                 }
             }
           }
            
          function download(event) {
            event.preventDefault();
            var url = event.currentTarget.getAttribute('href');
            if(url !== ""){
              if(url.includes("https")){
                const a = document.createElement('a');
                 a.href = url;
                 a.download = url.split('/').pop();
                 document.body.appendChild(a);
                 a.click();
                 document.body.removeChild(a);               
              }
            }
          }
            
          </script>

 
</head>
 
<body>

 <!-- Preloading --> 
    
 <!-- Switcher -->
     
	<div class="container wrapper">
    	<div class="site">
                    	<div class="left-navbar">
                             
                        	 
							<?php if($company_logo=""){ ?>
							<img class="signature" src="/assets/img/logo/white_logo.jpg" alt="" width="50" height="1">
							<?php } else { ?>
							<img class="signature" src="/assets/img/logo/white_logo.jpg" alt="" width="50" height="1">
							
							<?php } ?>
							 
                            <div class="navigation">	
                                <ul class="links-to-floor">
                                    <li><a>ABOUT ME</a></li>
                                    <li><a>GET IN TOUCH</a></li>
                                </ul>
                            </div>
                           
                        </div>	
						<div class="profile-image">
						<?php if ($profile_theme==""){ ?>
                        	<img src="/vcard/images/profile2.jpg" alt=""> 
						<?php }else{ ?>
							<img src="<?php echo $profile_theme;?>" alt=""> 
						<?php } ?>
                        </div>
                    <div id="ascensorBuilding">
                	<!-- HOME SECTION -->
                    <div class="scroll-out">
                        <div class="floor home-page">
                             <div class="home-box" style="font-family:Arial">
                                <img class="signature" src="/comp_logo/<?php echo $company_name_option;?>.png" alt=""    width="250" />
                                <br><br>
                                <?php if($fname!="" || $lname!=""){?><h1><?php echo $fname."<br>";  echo $lname; ?></h1><br><?php }?>
                               <?php if($pro_title!=""){?> 
							   <ul class="list top5 bottom15">
									<li><span><?php echo "$pro_title" ; ?> </span></li>
								</ul>
								<?php }?>
                                 <?php if($title_eng!=""){?> <span><?php echo "$title_eng" ; ?> </span><?php }?>
                                   <?php if($title_eng2!=""){?><span><?php echo "$title_eng2" ; ?> </span><?php }?>
                                  <?php if($dept_eng!=""){?><span><?php echo "$dept_eng" ; ?> </span><?php }?>
                                  <?php if($division_eng!=""){?><span><?php echo "$division_eng" ; ?> </span><?php }?>
                                  <?php if($title_chi!=""){?><span><?php echo "$title_chi" ; ?> </span><?php }?>
                                  <?php if($title_chi2!=""){?><span><?php echo "$title_chi2" ; ?> </span><?php }?>
                                  <?php if($dept_chi!=""){?><span><?php echo "$dept_chi" ; ?> </span><?php }?>
                                  <?php if($division_chi!=""){?><span><?php echo "$division_chi" ; ?> </span><?php }?>
                                
								<p style="font-size:12px">
                                <?php if ($hkma_no!=""){ ?>
									HKMA Reg. No. 金管局註冊編號  :<?php echo "$hkma_no" ; ?> <br>
								<?php } ?>
                                 <?php if ($type1_no!=""){ ?>
									&nbsp;&nbsp;&nbsp;Type 1: Dealing in Securities 第1類：證券交易<br>
								<?php } ?>
                                <?php if ($type4_no!=""){ ?>
                                    &nbsp;&nbsp;&nbsp;Type 4: Advising on Securities 第4類：就證券提供意見<br>
							<?php } ?>
                                <?php if ($type6_no!=""){ ?>
								&nbsp;&nbsp;&nbsp;Type 6: Advising on Corporate Finance 第6類：就機構融資提供意見<br>
							<?php } ?>
                                <?php if ($type9_no!=""){ ?>
                            &nbsp;&nbsp;&nbsp;Type 9: Asset Management 第9類 : 提供資產管理<br> 
							<?php } ?>
                                   <?php if ($field056!=""){ echo $field056; ?><br><?php }?>
                                 <?php if ($field057!=""){ echo $field057; ?><br><?php }?>
								 <?php if ($field058!=""){ echo $field058; ?><br><?php }?>
                                <?php if ($mpf_no!=""){ ?>
                             MPF Intermediary Reg. No. 強積金中介人註冊編號 : <?php echo "$mpf_no" ; ?><br>
							<?php } ?>
							
                                <?php if ($agent_no!=""){ ?>
                             Technical Representative (Agent) Licence No. 保險業務代表(代理人)牌照號碼 : <?php echo "$agent_no" ; ?><br>
							<?php } ?>
							
                                 <?php if ($sfc_no!=""){ ?>
								 SFC Central Entity No. 證監會中央編號 : <?php echo "$sfc_no" ; ?><br>
								<?php } ?>
								
                                 <?php if ($sfc_type1_no!=""){ ?>
                             &nbsp;&nbsp;&nbsp;Type 1: Dealing in Securities 第1類：證券交易 <br>
							<?php } ?>
							
                                <?php if ($sfc_type2_no!=""){ ?>
                            &nbsp;&nbsp;&nbsp;Type 4: Advising on Securities 第4類：就證券提供意見<br>
							<?php } ?>
							
                                  <?php if ($field059!=""){ echo $field059; ?><br><?php }?>
                                 <?php if ($field060!=""){ echo $field060; ?><br><?php }?>
								 
                                 <?php if ($bloomberg_info!=""){ ?>
                            Bloomberg 彭博 : <?php echo "$bloomberg_info" ; ?><br>
							<?php } ?>
							
                                <?php if ($reuters_code!=""){ ?>
                            Reuters Dealing Code 路透社交易編號 : <?php echo "$reuters_code" ; ?><br>
							<?php } ?>
							
                                <?php if ($field052!=""){ ?>
                            Estate Agent's Licence (Individual) No. 地產代理 ( 個人 ) 牌照號碼 : <?php echo "$field052" ; ?><br>
							<?php } ?>
							
                                <?php if ($field054!=""){ ?>
                            PMP (Tier 1) Licence No. 物業管理人 ( 第1級）牌照號碼 : <?php echo "$field054" ; ?><br>
							<?php } ?>
							
                                <?php if ($field055!=""){ ?>
                            PMP (Tier 2) Licence No. 物業管理人 ( 第2級）牌照號碼 :<?php echo "$field055" ; ?><br>
							<?php } ?>
							
                             <?php if ($field061!=""){ echo $field061; ?><br><?php }?>
							 <?php if ($field062!=""){ echo $field062; ?><br><?php }?>
							 <?php if ($field063!=""){ echo $field063; ?><br><?php }?>
							 <?php if ($field064!=""){ echo $field064; ?><br><?php }?>
                             </p><br>
							   <?php if ($company_name_option!=""){ ?>
                                <h4 class="subtitle"><?php echo $company_name_option_eng[$company_name_option];?><br><?php echo $company_name_option_chi[$company_name_option];?></h4>
							   <?php } ?>
							   <?php if ($company_name_eng2!=""){ ?>
                                <h4 class="subtitle"><?php echo $company_name_eng2;?><br><?php echo $company_name_chi2;?></h4>
								<?php } ?>
								<?php if ($company_name_eng3!=""){ ?>
                                <h4 class="subtitle"><?php echo $company_name_eng3;?><br><?php echo $company_name_chi3;?></h4>
								<?php } ?>
								<p style="font-size:12px">
                                <?php if ($insurance_no!=""){ ?>
                            Insurance Agency Licence No. 保險代理機構牌照號碼 :<?php echo "$insurance_no" ; ?> <br>
							<?php } ?>
							
                                <?php if ($swift_no!=""){ ?>
                             SWIFT Code 銀行國際代碼 : <?php echo "$swift_no" ; ?> <br>
							<?php } ?>
                                <?php if ($field051!=""){ ?>
                             Estate Agent's Licence (Company) No. 地產代理 ( 公司 ) 牌照號碼 :<?php echo "$field051" ; ?><br>
							<?php } ?>
                                <?php if ($field053!=""){ ?>
                             PMC Licence No. 物業管理公司牌照號碼 : <?php echo "$field053" ; ?><br> 
							<?php } ?>
                                  <?php if ($field065!=""){ echo $field065; ?><br><?php }?>
                                
								</p>
                            </div>
                            
                           
                            </div>
                        </div>
                   
                   
                  
                    <!-- CONTACT SECTION-->
                    <div class="scroll-out">
                    <div class="floor contact">
                    <div class="contact-box" style="font-family:Arial">
                                <img class="signature" src="/comp_logo/<?php echo $company_name_option;?>.png" alt=""    width="250" />
                                <br><br>
                   		<h2 class="page-title">Contact Me</h2>
                        <ul class="list top15 bottom15">
						<?php if ($work_tel!=""){ ?>
                            <li><span>Telephone 電話 :</span> <?php if($work_tel!=""){echo $work_tel;} ?></li>
							<?php } ?>
                            <?php if ($work_tel2!=""){ ?>
                            <li><span>Telephone 電話 :</span> <?php echo $work_tel2; ?></li>
							<?php } ?>
                            <?php if ($work_tel3!=""){ ?>
                            <li><span>Telephone 電話 :</span> <?php echo $work_tel3; ?></li>
							<?php } ?>
                            <?php if ($direct_tel!=""){ ?>
                            <li><span>Direct Line 直線 :</span> <?php echo $direct_tel; ?></li>
							<?php } ?>
                            <?php if ($direct_tel2!=""){ ?>
                            <li><span>Direct Line 直線 :</span> <?php echo $direct_tel2; ?></li>
							<?php } ?>
                            <?php if ($direct_tel3!=""){ ?>
                            <li><span>Direct Line 直線 :</span> <?php echo $direct_tel3; ?></li>
							<?php } ?>
                            <?php if ($mobile!=""){ ?>
                            <li><span>Mobile 手提 :</span> <?php echo $mobile; ?></li>
							<?php } ?>
                            <?php if ($mobile2!=""){ ?>
                            <li><span>Mobile 手提 :</span> <?php echo $mobile2; ?></li>
							<?php } ?>
                            <?php if ($mobile3!=""){ ?>
                            <li><span>Mobile 手提 :</span> <?php echo $mobile3; ?></li>
							<?php } ?>
                            <?php if ($mobile_china_tel!=""){ ?>
                            <li><span>China Mobile 中國手提 :</span> <?php echo $mobile_china_tel; ?></li>
							<?php } ?>
                            <?php if ($mobile_china_tel2!=""){ ?>
                            <li><span>China Mobile 中國手提 :</span> <?php echo $mobile_china_tel2; ?></li>
							<?php } ?>
                            <?php if ($mobile_china_tel3!=""){ ?>
                            <li><span>China Mobile 中國手提 :</span> <?php echo $mobile_china_tel3; ?></li>
							<?php } ?>
							 
                            <?php if ($field068!=""){ ?>
                            <li><span>Merchant Services Hotline 商戶服務熱線 :</span> <?php echo $field068; ?></li>
							<?php } ?>
                            <?php if ($field069!=""){ ?>
                            <li><span>Merchant Services Hotline 商戶服務熱線 :</span> <?php echo $field069; ?></li>
							<?php } ?>
                            <?php if ($field070!=""){ ?>
                            <li><span>Merchant Services Hotline 商戶服務熱線 :</span> <?php echo $field070; ?></li>
							<?php } ?>
                            <?php if ($field066!=""){ ?>
                            <li><?php echo $field066; ?></li>
							<?php } ?>
                            <?php if ($work_email!=""){ ?>
                            <li><span>Email 電郵 :</span> <?php echo $work_email; ?></li>
							<?php } ?>
                            <?php if ($work_email2!=""){ ?>
                            <li><span>Email 電郵 :</span> <?php echo $work_email2; ?></li>
							<?php } ?>
							<?php if ($work_email3!=""){ ?>
                            <li><span>Email 電郵 :</span> <?php echo $work_email3; ?></li>
							<?php } ?>
                            <?php if ($fax!=""){ ?>
                            <li><span>Fax 傳真 :</span> <?php echo $fax; ?></li>
							<?php } ?>
                            <?php if ($address_eng!=""){ ?>
                            <li><span>Address 地址 :</span> <?php echo $address_eng; ?><br><?php echo $address_chi; ?></li>
							<?php } ?>
                            <?php if ($address_eng2!=""){ ?>
                            <li><span>Address 地址 :</span> <?php echo $address_eng2; ?><br><?php echo $address_chi2; ?></li>
							<?php } ?>
                            <?php if ($web_link!=""){ ?>
                            <li><span><?php echo $web_link_label; ?>:</span> <?php echo $web_link; ?></li>
							<?php } ?>
                            <?php if ($web_link2!=""){ ?>
                            <li><span><?php echo $web_link_label2; ?>:</span> <?php echo $web_link2; ?></li>
							<?php } ?>
                            <?php if ($web_link3!=""){ ?>
                            <li><span><?php echo $web_link_label3; ?>:</span> <?php echo $web_link3; ?></li>
							<?php } ?>
                            <?php if ($field067!=""){ ?>
                            <li><?php echo $field067; ?></li>
							<?php } ?>
                        </ul>
                          
						<?php if ($fromkey){ ?>
                         <img src="/?key=<?php echo $encrypted;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
						<?php if ($fromuid){ ?>
                         <img src="/?uid=<?php echo $uid;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
                        <br><br>
                         <h4 class="subtitle">Save My Contact</h4><br><br>
                         <a class="recoba-btn" href="<?php echo $savemycontact; ?>">Click Here</a>
                        </div>
                    </div>     
                    </div>
                    <!-- CONTACT END-->
                </div>
        </div>
    </div> <!-- wrapper end -->
    
 
<!-- Javascripts -->
 
<script src="/vcard/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="/vcard/js/bootstrap.min.js"></script> 
<script src="/vcard/js/jquery.ascensor.js"></script>
<script src="/vcard/js/isotope.pkgd.min.js"></script>
<script src="/vcard/js/jquery.magnific-popup.min.js"></script>
<script src="/vcard/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/vcard/js/owl.carousel.min.js"></script>
 
<script src="/vcard/js/styleswitcher.js"></script> 
<script src="/vcard/js/main.js"></script>    
    




    
</body>
</html>
