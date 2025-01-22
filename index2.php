<!doctype html>
<html lang="en">
<head>
<title>e-Profile</title>
<meta charset="UTF-8">
<meta property="og:title" content="e-Profile"/>
<meta property="og:description" content="<?php echo $name?>"/>
<meta property="og:type" content="article"/>
<meta property="og:image" content="<?php echo $url ; ?>"/>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- Stylesheets -->
<link rel="stylesheet" href="/vcard/css/bootstrap.css"/>
<link rel="stylesheet" href="/vcard/css/reset.css"/>
<link rel="stylesheet" href="/vcard/css/style.css?<?php echo date('yy-mm-dd');?>">
<link rel="stylesheet" href="/vcard/css/magnific-popup.css"/> 
<link rel="stylesheet" href="/vcard/css/jquery.mCustomScrollbar.css"/> 
<link rel="stylesheet" href="/vcard/css/owl.theme.css"/> 
<link rel="stylesheet" href="/vcard/css/owl.carousel.css"/> 
    
<!-- Theme Colors -->
<link rel="stylesheet" href="/vcard/css/colors/switcher.css"/>
<link rel="stylesheet" href="/vcard/css/colors/color-0.css?<?php echo date('yy-mm-dd');?>"/>
 
<!-- Google Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">

<!-- Font icons -->
<link rel="stylesheet" href="/vcard/icon-fonts/font-awesome-6.7.1/css/all.min.css"/>
<link rel="stylesheet" href="/vcard/icon-fonts/essential-regular-fonts/essential-icons.css"/>



<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<!-- Stylesheets custom -->
<style> 
.list {font-size:  <?php echo $minisite_font_size;?>px !important; font-weight:400;  color:<?php echo $minisite_text_color;?>;  line-height:30px;} 
p{   font-size:  <?php echo $minisite_font_size;?>px !important;  font-weight:400;  color:<?php echo $minisite_bio_wording_color;?>;  line-height:26px;}
body{ background:<?php echo $minisite_bg_color;?> fixed;	height: 100%;	font-family: '<?php echo $minisite_font_family;?>', serif;}
.links-to-floor {  margin:0 auto; height:100%; font-family: '<?php echo $minisite_font_family;?>', sans-serif;    }
.list span{  color:<?php echo $minisite_title_text_color;?>;}
.social a{  background: #000;color: <?php echo $minisite_social_icon_bg_color;?>; -webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px; width: 30px;display: block; height: 30px;text-align: center; padding-top: 8px;font-size: 12px;margin: auto;}
.recoba-btn {display: inline-block;vertical-align: middle; -webkit-transform: translateZ(0);transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0);-webkit-backface-visibility: hidden;backface-visibility: hidden;-moz-osx-font-smoothing: grayscale;position: relative;-webkit-transition-property: color;transition-property: color;-webkit-transition-duration: 0.3s;transition-duration: 0.3s;padding: 12px 24px;color: #000;background:<?php echo $minisite_button_color;?>;border:solid 1px #000000;font-size:11px;text-decoration:none !important; font-weight:bold;}
.links-to-floor li a:hover{cursor:pointer; text-decoration:none;color:<?php echo $minisite_links_hover_color;?>;transition:all ease 0.5s;}	
.links-to-floor li a { color: <?php echo $minisite_links_not_hover_color;?>; font-size:13px; height: 60px;float:left; }
.links-to-floor li .selected{color:<?php echo $minisite_links_selected_color;?>;} 
.left-navbar{left: 0;position: absolute;height: 100%;background: <?php echo $minisite_left_nav_bar_color;?>;z-index:9;}
.subtitle{color:<?php echo $minisite_key_wording_color;?>;}
.site{	background:<?php echo $minisite_site_bg_color;?>;position:relative;height:100%;overflow:hidden;box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);-moz-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);-webkit-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);-ms-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);}
 
</style>
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
      <div class="color-switcher">
    	<div class="open"><i class="fa fa-globe fa-spin"></i></div>
        <h4>SELECT A LANGUAGE</h4>
        <ul>
        	 <li>
    <a class="language-1" onclick="setLanguage('en'); return false;" href="#" style="font-size: 12px;">
        EN
    </a>
</li>

        <!-- Language 2 -->
        <li>
            <a class="language-2" onclick="setLanguage('tc'); return false;" href="#" style="font-size: 12px;">
                繁
            </a> 
        </li>

        <!-- Language 3 -->
        <li>
            <a class="language-3" onclick="setLanguage('sc'); return false;" href="#" style="font-size: 12px;">
                簡
            </a> 
        </li>
            	 <li>
            <a class="language-1" onclick="setLanguage('es'); return false;" href="#" style="font-size: 12px;">
                ES
            </a> 
        </li>

        <!-- Language 2 -->
        <li>
            <a class="language-2" onclick="setLanguage('fr'); return false;" href="#" style="font-size: 12px;">
                FR
            </a> 
        </li>

        <!-- Language 3 -->
        <li>
            <a class="language-3" onclick="setLanguage('de'); return false;" href="#" style="font-size: 12px;">
                DE
            </a> 
        </li>
            <li>
            <a class="language-1" onclick="setLanguage('it'); return false;" href="#" style="font-size: 12px;">
                IT
            </a> 
        </li>

        <!-- Language 2 -->
        <li>
            <a class="language-2" onclick="setLanguage('pt'); return false;" href="#" style="font-size: 12px;">
                PT
            </a> 
        </li>

        <!-- Language 3 -->
        <li>
            <a class="language-3" onclick="setLanguage('ja'); return false;" href="#" style="font-size: 12px;">
                日
            </a> 
        </li>
            	 <li>
            <a class="language-1" onclick="setLanguage('kr'); return false;" href="#" style="font-size: 12px;">
                한
            </a> 
        </li>

        <!-- Language 2 -->
        <li>
            <a class="language-2" onclick="setLanguage('ru'); return false;" href="#" style="font-size: 12px;">
                RU
            </a> 
        </li>

        <!-- Language 3 -->
        <li>
            <a class="language-3" onclick="setLanguage('ar'); return false;" href="#" style="font-size: 12px;">
                AR
            </a> 
        </li>
    </ul>
    <button class="switcher-reset" onclick="setLanguage('en'); return false;">RESET</button>
</div>
    
     
	<div class="container wrapper">
    	<div class="site">
                    	<div class="left-navbar">
                            <br>
                        	<a  class="" href="">
							<?php if($company_logo!=""){ ?>
							<img class="signature" src="<?php echo $company_logo;?>" alt="" width="50">
							<?php } else { ?>
							<img class="signature" src="/assets/img/logo/white_logo.jpg" alt="" width="50">
							<?php } ?>
							</a>
                            <div class="navigation">	
                                <ul class="links-to-floor">
                                    <li><a>ABOUT ME</a></li>
                                    <li><a>OUR COMPANY</a> </li>
                                    <li><a>GET IN TOUCH</a></li>
                                    <?php if ($wechat_id!=""){ ?>
                                    <li><a>WECHAT</a></li>
                                    <?php } ?>
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
                            <div class="home-box">
                                 <img class="signature" src="<?php echo $headshot ; ?>" alt="" width="180" height="180"  style="border-radius: 50% ;" />
                                <br>
                                <br>
                               <h4 class="subtitle"><?php echo "$pname " ; ?><?php echo "$fname " ; ?><?php echo "$mname " ; ?><?php echo "$lname " ; ?><span style="display:inline-block"><?php echo "$pdname" ; ?></span></h4>
                                    <h4 class="subtitle"><?php echo $oname; ?></h4>
                                
                                <span><?php echo "$position" ; ?></span>
                                
                                
                                <p><?php echo "$bio" ; ?>
                                </p>
                                <br>
                                 <a class="recoba-btn" target="_blank" 
   style="border-radius: 32px; display: inline-block; text-align: center;" 
   href="<?php echo $savemycontact; ?>">
   Save My Contact
</a>
                            </div>
                            </div>
                        </div>
                   
                    <!-- ABOUT SECTION -->
                    <div class="scroll-out">
                    <div class="floor about">
                    	<h2 class="page-title"><?php echo $company_name_eng;?><br><?php echo $company_name_chi;?></h2>
                       
                        <ul class="list top15 bottom30" style="max-width: 100%;
    word-wrap: break-word;     /* Break long words if needed */
    overflow-wrap: break-word;">
                            <?php if ($company_website_url!=""){ ?>
                            <li><span>Company Website :</span> <a href="<?php echo "$company_website_url" ; ?>" target="_blank"><?php echo "$company_website_url" ; ?></a></li>
							<?php } ?>
							<?php if ($web_link!=""){ ?>
                            <li><span><?php echo $web_link_label;?> :</span> <a href="<?php echo "$web_link" ; ?>" target="_blank"><?php echo $web_link; ?></a></li>
							<?php } ?>
                            <?php if ($web_link2!=""){ ?>
                            <li><span><?php echo $web_link_label2;?> :</span> <a href="<?php echo "$web_link2" ; ?>" target="_blank"><?php echo $web_link2; ?></a></li>
							<?php } ?>
                            <?php if ($web_link3!=""){ ?>
                            <li><span><?php echo $web_link_label3;?> :</span> <a href="<?php echo "$web_link3" ; ?>" target="_blank"><?php echo $web_link3; ?></a></li>
							<?php } ?>
                            <?php if ($web_link4!=""){ ?>
                            <li><span><?php echo $web_link_label4;?> :</span> <a href="<?php echo "$web_link4" ; ?>" target="_blank"><?php echo $web_link4; ?></a></li>
							<?php } ?>
                            <?php if ($web_link5!=""){ ?>
                            <li><span><?php echo $web_link_label5;?> :</span> <a href="<?php echo "$web_link5" ; ?>" target="_blank"><?php echo $web_link5; ?></a></li>
							<?php } ?>
                            <?php if ($web_link6!=""){ ?>
                            <li><span><?php echo $web_link_label6;?> :</span> <a href="<?php echo "$web_link6" ; ?>" target="_blank"><?php echo $web_link6; ?></a></li>
							<?php } ?>
                            <?php if ($address!=""){ ?>
                            <li><span><?php echo $address_label;?>  :</span> <?php echo "$address" ; ?></li> 
							<?php } ?>
                            <?php if ($address2!=""){ ?>
                            <li><span><?php echo $address2_label;?>  :</span> <?php echo "$address2" ; ?></li>
							<?php } ?>
                            <?php if ($address3!=""){ ?>
                            <li><span><?php echo $address3_label;?>  :</span> <?php echo "$address3" ; ?></li> 
							<?php } ?>
                            <?php if ($address4!=""){ ?>
                            <li><span><?php echo $address4_label;?>  :</span> <?php echo "$address4" ; ?></li>
							<?php } ?>
                            
                        </ul>
						<?php if ($more_info_tab_url!=""){ ?>
                        <a id="one" class="recoba-btn" style="border-radius: 32px; display: inline-block; text-align: center;"  onclick='onclick(event);' href="<?php echo $more_info_tab_url; ?>" >More Information</a>
                       <?php } ?>
                        
                    </div>
                    </div>
                  
                    <!-- CONTACT SECTION-->
                    <div class="scroll-out">
                    <div class="floor contact">
                   		<h2 class="page-title">Contact Me</h2>
                        
                        <ul class="list top15 bottom15">
						<?php if ($mobile != "") { ?>
    <li><span><?php echo $mobile_label;?> :</span> <a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a></li>
<?php } ?>
<?php if ($mobile2 != "") { ?>
    <li><span><?php echo $mobile2_label;?> :</span> <a href="tel:<?php echo $mobile2; ?>"><?php echo $mobile2; ?></a></li>
<?php } ?>
<?php if ($mobile3 != "") { ?>
    <li><span><?php echo $mobile3_label;?> :</span> <a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a></li>
<?php } ?>
<?php if ($mobile4 != "") { ?>
    <li><span><?php echo $mobile4_label;?> :</span> <a href="tel:<?php echo $mobile4; ?>"><?php echo $mobile4; ?></a></li>
<?php } ?>
<?php if ($work_tel != "") { ?>
    <li><span><?php echo $work_tel_label;?> :</span> <a href="tel:<?php echo $work_tel; ?>"><?php echo $work_tel; ?></a></li>
<?php } ?>
<?php if ($work_tel2 != "") { ?>
    <li><span><?php echo $work_tel2_label;?> :</span> <a href="tel:<?php echo $work_tel2; ?>"><?php echo $work_tel2; ?></a></li>
<?php } ?>
<?php if ($work_tel3 != "") { ?>
    <li><span><?php echo $work_tel3_label;?> :</span> <a href="tel:<?php echo $work_tel3; ?>"><?php echo $work_tel3; ?></a></li>
<?php } ?>
<?php if ($work_tel4 != "") { ?>
    <li><span><?php echo $work_tel4_label;?> :</span> <a href="tel:<?php echo $work_tel4; ?>"><?php echo $work_tel4; ?></a></li>
<?php } ?>
<?php if ($home_tel != "") { ?>
    <li><span><?php echo $home_tel_label;?> :</span> <a href="tel:<?php echo $home_tel; ?>"><?php echo $home_tel; ?></a></li>
<?php } ?>

                            <?php if ($fax!=""){ ?>
                            <li><span><?php echo $fax_label;?> :</span> <?php echo $fax; ?></li>
							<?php } ?>
                             <?php if ($work_email != "") { ?>
    <li><span><?php echo $work_email_label;?> :</span> <a href="mailto:<?php echo $work_email; ?>"><?php echo $work_email; ?></a></li>
<?php } ?>
<?php if ($work_email2 != "") { ?>
    <li><span><?php echo $work_email2_label;?> :</span> <a href="mailto:<?php echo $work_email2; ?>"><?php echo $work_email2; ?></a></li>
<?php } ?>
<?php if ($work_email3 != "") { ?>
    <li><span><?php echo $work_email3_label;?> :</span> <a href="mailto:<?php echo $work_email3; ?>"><?php echo $work_email3; ?></a></li>
<?php } ?>
<?php if ($home_email != "") { ?>
    <li><span><?php echo $home_email_label;?> :</span> <a href="mailto:<?php echo $home_email; ?>"><?php echo $home_email; ?></a></li>
<?php } ?>
<?php if ($other_email != "") { ?>
    <li><span><?php echo $other_email_label;?> :</span> <a href="mailto:<?php echo $other_email; ?>"><?php echo $other_email; ?></a></li>
<?php } ?>
                        </ul>
                        
                        <div class="social">
						<?php if ($facebook_url!=""){ ?>
                           <a id="FB" class="facebook" onclick='onclick(event);' href="<?php echo $facebook_url; ?>"><i class="fa-brands fa-facebook"></i> </a>
						<?php } ?>   
                         <?php if ($twitter_url!=""){ ?>
                          <a class="twitter" href="<?php echo $twitter_url; ?>"><i class="fa-brands fa-twitter"></i> </a>
						<?php } ?> 
						  <?php if ($whatsapp_url!=""){ ?>
                           <a class="whatsapp" href="<?php echo $whatsapp_url; ?>"><i class="fa-brands fa-whatsapp"></i> </a>
						<?php } ?> 
						  <?php if ($instagram_url!=""){ ?>
                              <a class="instagram" href="<?php echo $instagram_url; ?>"><i class="fa-brands fa-instagram"></i> </a>
						<?php } ?> 
                          	  <?php if ($youtube_url!=""){ ?>
                              <a class="youtube" href="<?php echo $youtube_url; ?>"><i class="fa-brands fa-youtube"></i> </a>
						<?php } ?> 
                          <?php if ($linkedin_url!=""){ ?>
                            <a class="linkedin" href="<?php echo $linkedin_url; ?>"><i class="fa-brands fa-linkedin"></i> </a>
						<?php } ?>   
                            <?php if ($wechatpage_url!=""){ ?>
                          <a class="WechatPage" href="<?php echo $wechatpage_url; ?>"><i class="fa-brands fa-weixin"></i> </a>
						<?php } ?> 
						  <?php if ($tiktok_url!=""){ ?>
                              <a class="tiktok" href="<?php echo $tiktok_url; ?>"><i class="fa-brands fa-tiktok"></i> </a>
						<?php } ?> 
                          	 
                             	  <?php if ($line_url!=""){ ?>
                            <a class="line" href="<?php echo $line_url; ?>"><i class="fa-brands fa-line"></i> </a>
						<?php } ?> 
                           
                            <?php if ($facebook_messenger_url!=""){ ?>
                           <a class="facebookmessenger" href="<?php echo $facebook_messenger_url; ?>"><i class="fa-brands fa-facebook-messenger"></i> </a>
						<?php } ?> 
						  <?php if ($weibo_url!=""){ ?>
                              <a class="weibo" href="<?php echo $weibo_url; ?>"><i class="fa-brands fa-weibo"></i> </a>
						<?php } ?> 
                          	  <?php if ($bilibili_url!=""){ ?>
                              <a class="bilibili" href="<?php echo $bilibili_url; ?>"><i class="fa-brands fa-bilibili"></i> </a>
						<?php } ?> 
                             	  <?php if ($qq_url!=""){ ?>
                            <a class="qq" href="<?php echo $qq_url; ?>"><i class="fa-brands fa-qq"></i> </a>
						<?php } ?>   
                            <?php if ($zhihu_url!=""){ ?>
                           <a class="zhihu" href="<?php echo $zhihu_url; ?>"><i class="fa-brands fa-zhihu"></i> </a>
						<?php } ?> 
						  <?php if ($app_store_url!=""){ ?>
                              <a class="appsstore" href="<?php echo $app_store_url; ?>"><i class="fa-brands fa-app-store"></i> </a>
						<?php } ?> 
                          	  <?php if ($google_play_url!=""){ ?>
                              <a class="googleplay" href="<?php echo $google_play_url; ?>"><i class="fa-brands fa-google-play"></i> </a>
						<?php } ?> 
                             	  <?php if ($snapchat_url!=""){ ?>
                            <a class="snapchat" href="<?php echo $snapchat_url; ?>"><i class="fa-brands fa-snapchat"></i> </a>
						<?php } ?>   
                             <?php if ($telegram_url!=""){ ?>
                              <a class="telegram" href="<?php echo $telegram_url; ?>"><i class="fa-brands fa-telegram"></i> </a>
						<?php } ?> 
                             	 
                          
                        </div>
 
                        <br>
                        <br>
						
						<?php if ($fromkey){ ?>
                         <img src="/?key=<?php echo $encrypted;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
						<?php if ($fromuid){ ?>
                         <img src="/?uid=<?php echo $uid;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
<!-- 
                         <a href="<?php echo $gw_dl_link;?>" target="_blank"><img width="200" src="gwallet/enUS_add_to_google_wallet_wallet-button.png"></a>
                         <a href="?key=<?php echo $encrypted;?>&genaw=1" target="_blank"><img width="200" src="images/add-to-apple-wallet-logo.png"></a>END-->
                    </div>
                         
                    </div>
                    <!-- CONTACT END-->

                    <!-- Wechat SECTION-->
                    <div class="scroll-out">
                    <div class="floor contact" style="text-align: center;">
    <?php if ($wechat_id != ""|| $wechat_qr_url!= "") { ?>
        <div class="centered-content" style="display: inline-block; text-align: center; margin-top: 20px;">
            <img src="/?key=<?php echo $encrypted;?>&qrtype=8" alt="QR Code" width="250" style="display: block; margin: 80 auto;">
            
        </div>
                        <ul class="list" style="list-style: none; padding: 0; text-align: center;">
                <li><span>Wechat ID :</span> <?php echo $wechat_id; ?></li>
            </ul>
    <?php } ?>
</div>
                    </div>
                    <!-- Wechat End-->       
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj3cQNQ5dhNXHB-TkI4EbsF62nzBR1Wug"></script>
<script src="/vcard/js/styleswitcher.js"></script> 
<script src="/vcard/js/main.js"></script>    
    




    
</body>
</html>
