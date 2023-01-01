<!doctype html>
<html lang="en">
<head>
<title><?php echo $company_name_eng;?></title>
<meta charset="UTF-8">
<meta property="og:title" content="<?php echo $company_name_eng;?>"/>
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
                         	
                            <div class="navigation">	
                                <ul class="links-to-floor">
                                    <li><a>ABOUT ME</a></li>
                                    <li><a>OUR COMPANY</a> </li>
                                    <li><a>GET IN TOUCH</a></li>
                                </ul>
                            </div>
                           <a class="" href="">
							<?php if($company_logo=="test"){ ?>
							<img class="signature" src="/api/files/<?php echo $company_logo;?>" alt="" width="50">
							<?php } else if($company_logo="test"){ ?>
							<img class="signature" src="../Touchless/vcard/images/citicsmall26.jpg" alt="" width="50" height="50">
							<?php } ?>
							</a>  
                        </div>	
						<div class="profile-image">
                        	<img src="../Touchless/vcard/images/profile2.jpg" alt=""> 
                        </div>
                    <div id="ascensorBuilding">
                	<!-- HOME SECTION -->
                        <div class="floor home-page">
                            <div class="home-box">
                                <img class="signature" src="/Touchless/citiclogonew8.jpg" alt="" style="border-radius: 20% ;" width="230">
                                <br>
                                <br>
                                <h1><?php echo $name_eng;?><br>
                                    <?php echo $name_chi;?></h1>
                                <h2><?php echo $pro_title;?></h2>
                                <br>
                                <span><?php echo $title_eng.", ".$subsidiary_eng; ?></span>
								<span><?php echo $title_chi.", ".$subsidiary_chi; ?></span>
                                <p style="font-size:10px">
								<?php if ($agent_no!=""){
								 echo "Licensed Technical Representative (Agent) License No. 持牌業務代表（代理人）牌照號碼: ".$agent_no;
								}?>
								
								<?php if ($hkma_no!=""){
									echo "<br> HKMA Reg. No. Of Relevant Individual 金融管理局有關人士註冊編號: ".$hkma_no;
								}?>
								 	<?php if ($mpf_no!=""){
									echo "<br> MPF Intermediary Reg. No 強積金中介人註冊編號: ".$mpf_no;
								}?>
									<?php if ($broker_no!=""){
									echo "<br> Licensed Technical Representative (Broker) License No. 持牌業務代表(經紀) 牌照號碼: ".$broker_no;
								}?>
                                    <?php if ($hkma_eng!=""){
									echo "<br> Regulated Activity: ".$hkma_eng;
								}?>
								<?php if ($hkma_chi!=""){
									echo " 受規管活動: ".$hkma_chi;
								}?><br>
                                    <?php echo $reuters;?>
                                </p>
                            </div>
                            
                        </div>
                    <!-- ABOUT SECTION -->
                    <div class="scroll-out">
                    <div class="floor about">
					  <img class="signature" src="/Touchless/citiclogonew8.jpg" alt="" style="border-radius: 20% ;" width="230">
					  <br>
					  <br>
                    	<h2 class="page-title"><?php echo $company_name_eng;?><br><?php echo $company_name_chi;?></h2>
                       
                        <ul class="list top15 bottom30">
                        	<li><span>Website :</span> www.cncbinternational.com</li>
                            <?php if ($address_eng!=""){ ?><li><span>Address :</span> <?php echo $address_eng;?></li> <li><?php echo $address_chi;?></li><?php } ?>
                            <?php if ($work_tel!=""){ ?><li><span>Phone :</span> <?php echo $work_tel;?></li><?php }?>
							<?php if ($work_tel2!=""){ ?><li><span>Phone :</span> <?php echo $work_tel2;?></li><?php }?>
							<?php if ($work_tel3!=""){ ?><li><span>Phone :</span> <?php echo $work_tel3;?></li><?php }?>
                        </ul>
                   
                        <a id="one" class="recoba-btn" onclick="onclick(event);" href="https://www.cncbinternational.com">More Information</a>
                    </div>
                    </div>
                  
                    <!-- CONTACT SECTION-->
                    <div class="scroll-out">
                    <div class="floor contact">
					<img class="signature mCS_img_loaded" src="/Touchless/citiclogonew8.jpg" alt="" style="border-radius: 20% ;" width="230">
					<br>
					<br>
                   		<h2 class="page-title">Contact Me</h2>
                        
                        <ul class="list top15 bottom15">
							<?php if ($mobile_tel!=""){ ?>
                            <li><span>Company Mobile No. :</span> <?php if($mobile_tel!=""){echo $mobile_tel;} ?></li>
							<?php } ?>
                            <?php if ($mobile_tel2!=""){ ?>
                            <li><span>Company Mobile No. :</span> <?php echo $mobile_tel2; ?></li>
							<?php } ?>
							<?php if ($mobile_tel3!=""){ ?>
                            <li><span>Company Mobile No. :</span> <?php echo $mobile_tel3; ?></li>
							<?php } ?>
							<?php if ($mobile_tel4!=""){ ?>
                            <li><span>Company Mobile No. :</span> <?php echo $mobile_tel4; ?></li>
							<?php } ?>
							<?php if ($mobile_tel5!=""){ ?>
                            <li><span>Company Mobile No. :</span> <?php echo $mobile_tel5; ?></li>
							<?php } ?>
							<?php if ($work_tel!=""){ ?>
                            <li><span>Tel No. :</span> <?php echo $work_tel; ?></li>
							<?php } ?>
							<?php if ($work_tel2!=""){ ?>
                            <li><span>Tel No. :</span> <?php echo $work_tel2; ?></li>
							<?php } ?>
							<?php if ($work_tel3!=""){ ?>
                            <li><span>Tel No. :</span> <?php echo $work_tel3; ?></li>
							<?php } ?>
						 
							<?php if ($fax_no!=""){ ?>
                            <li><span>Fax No. :</span> <?php echo $fax_no; ?></li>
                            <?php } ?>
							<?php if ($fax_no2!=""){ ?>
                            <li><span>Fax No. :</span> <?php echo $fax_no2; ?></li>
							<?php } ?>
							<?php if ($fax_no3!=""){ ?>
                            <li><span>Fax No. :</span> <?php echo $fax_no3; ?></li>
							<?php } ?>
							<?php if ($fax_no4!=""){ ?>
                            <li><span>Fax No. :</span> <?php echo $fax_no4; ?></li>
							<?php } ?>
							<?php if ($fax_no5!=""){ ?>
                            <li><span>Fax No. :</span> <?php echo $fax_no5; ?></li>
							<?php } ?>
							<?php if ($work_email!=""){ ?>
                            <li><span>Email Address :</span> <?php echo $work_email; ?></li>
							<?php } ?>
							<?php if ($direct_tel!=""){ ?>
                            <li><span>Direct Line :</span> <?php echo $direct_tel; ?></li>
							<?php } ?>
                        </ul>
                        
   
                         <img src="genvcf2png.php?sig=<?php echo $sig;?>" alt=""  width="250" >
 
                        <br><br>
                         <h4 class="subtitle">Save My Contact</h4><br><br>
                         <a class="recoba-btn" href="../genvcf.php?sig=<?php echo $sig;?>">Click Here</a>
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
