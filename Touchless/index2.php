<!doctype html>
<html lang="en">
<head>
<title>Touchless Profile</title>
<meta charset="UTF-8">
<meta property="og:title" content="Touchless Profile"/>
<meta property="og:description" content="<?php echo $name?>"/>
<meta property="og:type" content="article"/>
<meta property="og:image" content="<?php echo $url ; ?>"/>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->
<link rel="stylesheet" href="../Touchless/vcard/css/bootstrap.css"/>
<link rel="stylesheet" href="../Touchless/vcard/css/reset.css"/>
<link rel="stylesheet" href="../Touchless/vcard/css/style.css"/>
<link rel="stylesheet" href="../Touchless/vcard/css/magnific-popup.css"/> 
<link rel="stylesheet" href="../Touchless/vcard/css/jquery.mCustomScrollbar.css"/> 
<link rel="stylesheet" href="../Touchless/vcard/css/owl.theme.css"/> 
<link rel="stylesheet" href="../Touchless/vcard/css/owl.carousel.css"/> 
    
<!-- Theme Colors -->
<link rel="stylesheet" href="../Touchless/vcard/css/colors/switcher.css"/>
<link rel="stylesheet" href="../Touchless/vcard/css/colors/color-0.css"/>
<link href="css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
<link href="css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
<link href="css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
<link href="css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
<link href="css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
<link href="css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
<link href="css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
<link href="css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">
<link href="css/colors/color-10.css" rel="alternate stylesheet" type="text/css" title="color-10">
<link href="css/colors/color-11.css" rel="alternate stylesheet" type="text/css" title="color-11">
<link href="css/colors/color-12.css" rel="alternate stylesheet" type="text/css" title="color-12">

<!-- Google Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">

<!-- Font icons -->
<link rel="stylesheet" href="../Touchless/vcard/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../Touchless/vcard/icon-fonts/essential-regular-fonts/essential-icons.css"/>

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
							<img class="signature" src="https://e-profile.digital/api/files/<?php echo $company_logo;?>" alt="" width="50">
							<?php } else { ?>
							<img class="signature" src="https://e-profile.digital/assets/img/logo/white_logo.jpg" alt="" width="50">
							<?php } ?>
							</a>
                            <div class="navigation">	
                                <ul class="links-to-floor">
                                    <li><a>ABOUT ME</a></li>
                                    <li><a>OUR COMPANY</a> </li>
                                    <li><a>GET IN TOUCH</a></li>
                                </ul>
                            </div>
                           
                        </div>	
						<div class="profile-image">
                        	<img src="../Touchless/vcard/images/profile2.jpg" alt=""> 
                        </div>
                    <div id="ascensorBuilding">
                	<!-- HOME SECTION -->
                        <div class="floor home-page">
                            <div class="home-box">
                                 <img class="signature" src="<?php echo $headshot ; ?>" alt="" width="200" height="200"  style="border-radius: 50% ;" />
                                <br>
                                <br>
                                <h1><?php echo "$fname" ; ?></h1>
                                <br>
                                <span><?php echo "$position" ; ?></span>
                                <p><?php echo "$bio" ; ?>
                                </p>
                                
                            </div>
                            
                        </div>
                    <!-- ABOUT SECTION -->
                    <div class="scroll-out">
                    <div class="floor about">
                    	<h2 class="page-title"><?php echo "$company_name" ; ?></h2>
                       
                        <ul class="list top15 bottom30">
						<?php if ($web_link1!=""){ ?>
                        	<li><span>Website :</span> <?php echo "$web_link1" ; ?></li>
						<?php } ?>
						<?php if ($address1!=""){ ?>
                            <li><span>Address :</span> <?php echo "$address1" ; ?></li> 
							<?php } ?>
							<?php if ($work_tel1!=""){ ?>
                            <li><span>Phone :</span> <?php echo "$work_tel1" ; ?></li>
							<?php } ?>
                        </ul>
                        <a id="one" class="recoba-btn" onclick='onclick(event);' href="<?php echo $brochure; ?>" >More Information</a>
                       
                   
                        
                    </div>
                    </div>
                  
                    <!-- CONTACT SECTION-->
                    <div class="scroll-out">
                    <div class="floor contact">
                   		<h2 class="page-title">Contact Me</h2>
                        
                        <ul class="list top15 bottom15">
						<?php if ($mobile1!=""){ ?>
                            <li><span>Mobile :</span> <?php if($mobile1!=""){echo $mobile1;} ?></li>
							<?php } ?>
							<?php if ($work_email!=""){ ?>
                            <li><span>Email :</span> <?php echo $work_email; ?></li>
							<?php } ?>
							<?php if ($wechat_id!=""){ ?>
                            <li><span>Wechat :</span> <?php echo $wechat_id; ?></li>                            
							<?php } ?>
                        </ul>
                        
                        <div class="social">
						<?php if ($facebook_url!=""){ ?>
                           <a id="FB" class="facebook" onclick='onclick(event);' href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook"></i> </a>
						<?php } ?>   
                         <?php if ($twitter_url!=""){ ?>
                          <a class="twitter" href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i> </a>
						<?php } ?> 
						  <?php if ($whatsapp_url!=""){ ?>
                           <a class="whatsapp" href="<?php echo $whatsapp_url; ?>"><i class="fa fa-whatsapp"></i> </a>
						<?php } ?> 
						  <?php if ($instagram_url!=""){ ?>
                              <a class="instagram" href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram"></i> </a>
						<?php } ?> 
                          	  <?php if ($youtube_url!=""){ ?>
                              <a class="youtube" href="<?php echo $youtube_url; ?>"><i class="fa fa-youtube"></i> </a>
						<?php } ?> 
                             	  <?php if ($linkedin_url!=""){ ?>
                            <a class="linkedin" href="<?php echo $linkedin_url; ?>"><i class="fa fa-linkedin"></i> </a>
						<?php } ?>   
                        
                           
                          
                        </div>
 
                        <br>
                        <br>
                         <img src="genvcf2png.php?sig=<?php echo $sig;?>" alt=""  width="250" >
 
                        <br><br>
                         <h4 class="subtitle">Save My Contact</h4><br><br>
                         <a class="recoba-btn" href="https://e-profile.digital/genvcf.php?sig=<?php echo $sig;?>">Click Here</a>
                    </div>
                         
                    </div>
                    <!-- CONTACT END-->
                </div>
        </div>
    </div> <!-- wrapper end -->
    

   
<!-- Javascripts -->

    
<script src="../Touchless/vcard/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="../Touchless/vcard/js/bootstrap.min.js"></script> 
<script src="../Touchless/vcard/js/jquery.ascensor.js"></script>
<script src="../Touchless/vcard/js/isotope.pkgd.min.js"></script>
<script src="../Touchless/vcard/js/jquery.magnific-popup.min.js"></script>
<script src="../Touchless/vcard/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../Touchless/vcard/js/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj3cQNQ5dhNXHB-TkI4EbsF62nzBR1Wug"></script>
<script src="../Touchless/vcard/js/styleswitcher.js"></script> 
<script src="../Touchless/vcard/js/main.js"></script>    
    




    
</body>
</html>
