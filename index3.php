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
                            <br>
                        	<a  class="" href="">
							<?php if($company_logo!=""){ ?>
							<img class="signature" src="/api/files/<?php echo $company_logo;?>" alt="" width="50">
							<?php } else { ?>
							<img class="signature" src="/assets/img/logo/white_logo.jpg" alt="" width="50">
							<?php } ?>
							</a>
                            <div class="navigation">	
                                <ul class="links-to-floor">
                                    <li><a>ABOUT ME</a></li>
                                    <li><a>THE EVENT</a> </li>
<!--                                    <li><a>GET IN TOUCH</a></li>-->
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
                                 <br>
                               <h1><?php echo "$pname " ; ?><?php echo "$fname " ; ?><?php echo "$mname " ; ?><?php echo "$lname " ; ?><span style="display:inline-block"><?php echo "$pdname" ; ?></span><br>
                                    <?php echo $oname; ?></h1>
                                <br>
                                <span class="page-title"><?php echo $company_name_eng;?><br><?php echo $company_name_chi;?></span>
                                <span class="page-title"><?php echo "$position" ; ?></span>
                                <br>
                                
                               <ul class="list inline-list small-font">
    
    <?php if ($work_tel != "") { ?>
        <li style="font-size: 0.9em;"><span style="font-size: 0.9em; display: inline">Phone :</span> <a href="tel:<?php echo $work_tel; ?>"><?php echo $work_tel; ?></a></li>
    <?php } ?><br>
    <?php if ($work_email != "") { ?>
        <li style="font-size: 0.9em;"><span style="font-size: 0.9em; display: inline">Email :</span> <a href="mailto:<?php echo $work_email; ?>"><?php echo $work_email; ?></a></li>
    <?php } ?>
   
</ul>  
                                
						<?php if ($fromkey){ ?>
                         <img src="/?key=<?php echo $encrypted;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
						<?php if ($fromuid){ ?>
                         <img src="/?uid=<?php echo $uid;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
                        <br><br>
                         <a class="recoba-btn" href="<?php echo $savemycontact; ?>">Save Contact</a>
                             
                            </div>
                            </div>
                        </div>
                   
                    <!-- ABOUT SECTION -->
                    <div class="scroll-out">
                    <div class="floor about">
                        <img class="signature" src="<?php echo $headshot ; ?>" alt="" width=100%  />
                        <p><?php echo "$bio" ; ?>
                                </p>
                    	<br><br>
						<?php if ($more_info_tab_url!=""){ ?>
                        <a id="one" class="recoba-btn" onclick='onclick(event);' href="<?php echo $more_info_tab_url; ?>" >More Information</a>
                       <?php } ?>
                   
                        
                    </div>
                    </div>
                  
                    <!-- CONTACT SECTION-->
<!--
                    <div class="scroll-out">
                    <div class="floor contact">
                   		<h2 class="page-title">Contact Me</h2>
                        
                        <ul class="list top15 bottom15">
						<?php if ($mobile != "") { ?>
    <li><span>Mobile :</span> <a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a></li>
<?php } ?>
<?php if ($mobile2 != "") { ?>
    <li><span>Mobile :</span> <a href="tel:<?php echo $mobile2; ?>"><?php echo $mobile2; ?></a></li>
<?php } ?>
<?php if ($mobile3 != "") { ?>
    <li><span>Mobile :</span> <a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a></li>
<?php } ?>
<?php if ($mobile4 != "") { ?>
    <li><span>Mobile :</span> <a href="tel:<?php echo $mobile4; ?>"><?php echo $mobile4; ?></a></li>
<?php } ?>
<?php if ($work_tel != "") { ?>
    <li><span>Phone :</span> <a href="tel:<?php echo $work_tel; ?>"><?php echo $work_tel; ?></a></li>
<?php } ?>
<?php if ($work_tel2 != "") { ?>
    <li><span>Phone :</span> <a href="tel:<?php echo $work_tel2; ?>"><?php echo $work_tel2; ?></a></li>
<?php } ?>
<?php if ($work_tel3 != "") { ?>
    <li><span>Phone :</span> <a href="tel:<?php echo $work_tel3; ?>"><?php echo $work_tel3; ?></a></li>
<?php } ?>
<?php if ($work_tel4 != "") { ?>
    <li><span>Phone :</span> <a href="tel:<?php echo $work_tel4; ?>"><?php echo $work_tel4; ?></a></li>
<?php } ?>

                            <?php if ($work_email != "") { ?>
    <li><span>Email :</span> <a href="mailto:<?php echo $work_email; ?>"><?php echo $work_email; ?></a></li>
<?php } ?>
<?php if ($work_email2 != "") { ?>
    <li><span>Email :</span> <a href="mailto:<?php echo $work_email2; ?>"><?php echo $work_email2; ?></a></li>
<?php } ?>
<?php if ($work_email3 != "") { ?>
    <li><span>Email :</span> <a href="mailto:<?php echo $work_email3; ?>"><?php echo $work_email3; ?></a></li>
<?php } ?>
<?php if ($home_email != "") { ?>
    <li><span>Email :</span> <a href="mailto:<?php echo $home_email; ?>"><?php echo $home_email; ?></a></li>
<?php } ?>
<?php if ($other_email != "") { ?>
    <li><span>Email :</span> <a href="mailto:<?php echo $other_email; ?>"><?php echo $other_email; ?></a></li>
<?php } ?>

                            <?php if ($fax!=""){ ?>
                            <li><span>Fax :</span> <?php echo $fax; ?></li>
							<?php } ?>
							<?php if ($wechat_id!=""){ ?>
                            <li><span>Wechat ID :</span> <?php echo $wechat_id; ?></li>                            
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
                        <br><br>
                         <h4 class="subtitle">Save My Contact</h4><br><br>
                         <a class="recoba-btn" href="<?php echo $savemycontact; ?>">Click Here</a>
                    </div>
                         
                    </div>
-->
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj3cQNQ5dhNXHB-TkI4EbsF62nzBR1Wug"></script>
<script src="/vcard/js/styleswitcher.js"></script> 
<script src="/vcard/js/main.js"></script>    
    




    
</body>
</html>
