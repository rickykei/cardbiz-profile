<!doctype html>
<html lang="en">
<head>
<title>e-Profile</title>
<meta charset="UTF-8">
<meta property="og:title" 
  content="<?php 
    $parts = [];

    // Combine first + last name as one string
    $fullname = trim($fname . ' ' . $lname);
    if (!empty($fullname)) $parts[] = $fullname;

    if (!empty($position)) $parts[] = $position;
    if (!empty($company_name_eng)) $parts[] = $company_name_eng;

    echo implode(', ', $parts);
  ?>" />
<meta property="og:description" content="Digital Business Card"/>
<meta property="og:type" content="article"/>
<meta property="og:image" content="<?php echo $headshot;?>"/>    
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
    <style>
/*
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f5f5f5;
            color: #333;
        }
*/

        .container {
            position: relative;
            width: 90%;               /* take 85% of parent width */
            height: 60vw;  /* 35% of the viewport height */
            max-width: 450px;          /* but no more than 600px */
            max-height: 260px;
            margin: 20px auto 40px auto;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08), 
              0 -2px 6px rgba(0,0,0,0.02);
            overflow: visible;
            text-align: center;
            background-color: <?php echo $minisite_site_bg_color; ?>;
            z-index: 1; /* keep container below */
        }
        
                .container2 {
            position: relative;
            max-width: 80%;
            margin: 100px auto 40px auto;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08), 
              0 -2px 6px rgba(0,0,0,0.02);
            overflow: visible;
            text-align: center;
            padding: 100px 20px 30px 20px;
        }
        
        .banner-image {
            width: 90%;
            max-width: 600px;          /* but no more than 600px */
            max-height: 200px;         /* adjust as needed */
            margin: 200px auto 40px auto;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08), 
              0 -2px 6px rgba(0,0,0,0.02);
            overflow: hidden;
            position: absolute;   
            left: 50%;             /* move left edge to middle */
            transform: translateX(-50%); /* center it horizontally */
            top: -70px;          
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
            text-align: center;
            z-index: -1;  
}

.banner-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;       /* fill the box */
    object-position: top;    /* always show the top of the image */
    display: block;
}

        .headshot {
    position: fixed;              /* stick to bottom of viewport */
    bottom: 0;                    /* align to bottom */
    left: 50%;
    transform: translateX(-50%);
    width: 100%;                  /* stretch full width */
    max-height: 40vh;             /* optional: control height */
    max-width: 300px;          /* but no more than 600px */
    object-fit: cover;            /* crop nicely */
    z-index: 1;                   /* behind other content */
    border: none;                 /* no border */

    /* Combined gradients: top-to-bottom + left-to-right + right-to-left */
    -webkit-mask-image: 
        linear-gradient(to bottom, transparent 0%, <?php echo $minisite_bg_color; ?> 30%, <?php echo $minisite_bg_color; ?> 100%),
        linear-gradient(to right, transparent 0%, <?php echo $minisite_bg_color; ?> 30%, <?php echo $minisite_bg_color; ?> 70%, transparent 100%),
            radial-gradient(ellipse 70% 100% at center, <?php echo $minisite_bg_color; ?> 60%, transparent 95%);
    -webkit-mask-composite: source-in;
    mask-image: 
        linear-gradient(to bottom, transparent 0%, <?php echo $minisite_bg_color; ?> 30%, <?php echo $minisite_bg_color; ?> 100%),
        linear-gradient(to right, transparent 0%, <?php echo $minisite_bg_color; ?> 30%, <?php echo $minisite_bg_color; ?> 70%, transparent 100%),
            radial-gradient(ellipse 75% 75% at center, <?php echo $minisite_bg_color; ?> 60%, transparent 100%);
    mask-composite: intersect;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: 100% 100%;
    mask-size: 100% 100%;
        }

        .headshot img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .companylogo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;   /* take it out of normal flow */
            top: 16px;           
            left: calc(90%);     
            transform: translateX(-50%); /* shift it back by half its width */
            text-align: center;
            z-index: 2;  
/*            border: 1mm solid <?php echo $minisite_key_wording_color; ?>; */
        }

        .companylogo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 22px;
            font-weight: 700;
            margin: 10px 0 5px;
            color: #111;
        }

        .subtitle {
            font-size: 15px;
            color: #666;
            margin-bottom: 20px;
        }

        .info-block {
    margin: 20px 10px;
        }
        
.info-block2 {
    position: absolute;        /* or fixed if relative to viewport */
    bottom: 1%;               /* 100% - 62% */
    left: 25px;
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-end; /* content sticks to the bottom */
    height: auto;              /* grows upward as content increases */
    box-sizing: border-box;
}



        .info-label {
            font-size: 13px;
            color: #888;
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #222;
        }

/*
        .qr-section {
            margin: 30px 0;
        }

        .qr-section img {
            width: 160px;
            height: 160px;
            object-fit: contain;
            background: #fff;
            padding: 10px;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .footer-banner img {
            width: 100%;
            display: block;
            border-radius: 12px;
            margin-top: 25px;
        }
*/
                .list {
            font-size: <?php echo $minisite_font_size; ?>px !important;
            font-weight: 400;
            color: <?php echo $minisite_text_color; ?>;
            line-height: 30px;
            margin: 12px 6px;  
                    width: 90%;
        }
        
        .list a {
    text-decoration: none;          /* remove underline */
    display: block;                 /* make anchor fill width */
    margin: 8px auto;               /* spacing between boxes */
    width: 90%;                   /* fixed width for all */
    border-radius: 32px;            /* rounded corners */
    background-color: <?php echo $minisite_site_bg_color; ?>;      /* background */
    color: <?php echo $minisite_text_color; ?>;                    /* text + icon color */
    font-weight: bold;
}

.list a li {
    display: flex;
    justify-content: flex-start;
    padding: 12px 16px;
    text-align: center;     /* make sure text aligns left */
}


        p {
            font-size: <?php echo $minisite_font_size; ?>px !important;
            font-weight: 400;
            color: <?php echo $minisite_bio_wording_color; ?>;
            line-height: 26px;
            width: 80%; 
        }

        body {
            background: <?php echo $minisite_bg_color; ?> fixed;
            min-height:  100%;
            font-family: '<?php echo $minisite_font_family; ?>', serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .links-to-floor {
            margin: 0 auto;
            height: 100%;
            font-family: '<?php echo $minisite_font_family; ?>', sans-serif;
        }

        .list span {
            color: <?php echo $minisite_title_text_color; ?>;
        }
        
        .list li {
    border: 1px solid <?php echo $minisite_title_text_color; ?>;       /* thin border for each box */
    font-weight: bold;
    border-radius: 12px;          /* rounded corners */
    padding: 8px 16px;            /* spacing inside */
    margin: 6px 0;                /* space between boxes */
    display: flex;        /* force each li on its own line */
    background: <?php echo $minisite_site_bg_color; ?>;             /* optional: white background */
            box-sizing: border-box; /* include padding in width */
            align-items: center;
            text-align: center;
            color: <?php echo $minisite_key_wording_color; ?>;
            
}


        .home-box span {
            color: <?php echo $minisite_title_text_color; ?>;
        }
        
        .position {
            color: <?php echo $minisite_text_color; ?>;
            font-size: <?php echo $minisite_font_size; ?>px !important;
        }

        
        .social a {
            background: <?php echo $minisite_key_wording_color; ?>;
            color: <?php echo $minisite_social_icon_bg_color; ?>;
            -webkit-border-radius: 44px;
            -moz-border-radius: 44px;
            border-radius: 44px;
            width: 44px;
            display: block;
            height: 44px;
            text-align: center;
            font-size: 22px;
            margin: auto;
            margin-bottom: 4px;
                flex-direction: column;   /* stack icons vertically */
    align-items: center;      /* horizontal centering */
        }

        .recoba-btn {
            display: block;
            vertical-align: middle;
            color: <?php echo $minisite_key_wording_color; ?>;
            background-color: <?php echo $minisite_button_color; ?>;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
/*            position: relative;*/
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            padding: 16px 24px;
            border: solid 2px <?php echo $minisite_title_text_color; ?>;
            font-size: 11px;
            text-decoration: none !important;
            font-weight: bold;
            border-radius: 32px;
            width: 240px;
            margin: 0 auto;                 /* this centers it horizontally */
    text-align: center;             /* center text inside */
                position: fixed;     /* fixes it relative to the viewport */
    top: 42%;            /* pushes it down 42% from the top */
    left: 50%;           /* center horizontally */
    transform: translateX(-50%);  /* correct centering */
        }

        .recoba-btn:before {

            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: <?php echo $minisite_key_wording_color; ?>;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            border-radius: 32px;
        }

        .links-to-floor li a:hover {
            cursor: pointer;
            text-decoration: none;
            color: <?php echo $minisite_links_hover_color; ?>;
            transition: all ease 0.5s;
        }

        .links-to-floor li a {
            color: <?php echo $minisite_links_not_hover_color; ?>;
            font-size: 13px;
            height: 60px;
            float: left;
        }

        .links-to-floor li .selected {
            color: <?php echo $minisite_links_selected_color; ?>;
        }

/*
        .left-navbar {
            left: 0;
            position: absolute;
            height: 100%;
            background: <?php echo $minisite_left_nav_bar_color; ?>;
            z-index: 9;
        }
*/

        .subtitle {
            color: <?php echo $minisite_key_wording_color; ?>;
            font-size: <?php echo $minisite_title_font_size; ?>px !important;
        }

        .page-title {
            color: <?php echo $minisite_key_wording_color; ?>;
        }
        

/*
        .site {
            background: <?php echo $minisite_site_bg_color; ?>;
            position: relative;
            height: 100%;
            overflow: hidden;
            box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);
            -moz-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);
            -webkit-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);
            -ms-box-shadow: 0px 0px 46px 0px rgba(0, 0, 0, 0.09);
        }
*/
        /* Deep tech background */
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: <?php echo $minisite_site_bg_color; ?>;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

#preloader .spinner {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* The Logo: Hidden edges + Tech effects */
#preloader .signature {
    width: 250px;
    /* This clips the logo into a circle so no square edges show */
    clip-path: circle(0% at 50% 50%);
    /* Funky tech glow */
    filter: drop-shadow(0 0 0px <?php echo $minisite_key_wording_color; ?>);
    animation: irisReveal 1.5s cubic-bezier(0.77, 0, 0.175, 1) infinite;
}

/* The "Funky" Chromatic Glow - extra layer */
#preloader .spinner::before {
    content: "";
    position: absolute;
    width: 2px;
    height: 2px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 0 40px 5px <?php echo $minisite_key_wording_color; ?>, 0 0 80px 10px <?php echo $minisite_title_text_color; ?>;
    animation: spark 1.5s cubic-bezier(0.77, 0, 0.175, 1) infinite;
}

/* Animations */

@keyframes irisReveal {
    0% {
        clip-path: circle(0% at 50% 50%);
        transform: scale(0.2) rotate(-10deg);
        filter: brightness(2) contrast(2) saturate(0);
    }
    20%, 80% {
        clip-path: circle(50% at 50% 50%);
        transform: scale(0.32) rotate(0deg);
        filter: brightness(1.2) contrast(1.1) saturate(1.2) drop-shadow(0 0 15px <?php echo $minisite_key_wording_color; ?>);
    }
    80%, 100% {
        clip-path: circle(50% at 50% 50%);
        transform: scale(0.29);
        filter: brightness(1) contrast(1) saturate(1) drop-shadow(0 0 5px transparent);
    }
}

@keyframes spark {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    30% {
        transform: scale(40); /* Rapid expansion */
        opacity: 0;
    }
    100% {
        transform: scale(0);
        opacity: 0;
    }
}
        
        /* Position the footer at the bottom */
#preloader .preloader-footer {
    position: absolute;
    bottom: 30px; /* Distance from the bottom */
    width: 100%;
    text-align: center;
    
    /* Sleek Typography */
    font-family: 'Inter', sans-serif; /* Or your site's main font */
    font-size: 10px;                 /* Very small writing */
    text-transform: uppercase;       /* Techy look */
    letter-spacing: 2px;             /* Airy and smart */
    font-weight: 300;                /* Thin weight for elegance */
    
    /* Color and subtle glow */
    color: <?php echo $minisite_key_wording_color; ?>;
    opacity: 0.5; /* This handles the transparency separately */
    animation: footerFade 1.5s ease-in-out infinite;
}

/* Optional: Make it pulse very slightly with the logo */
@keyframes footerFade {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}
     
    </style>
 
</head>
 
<body>

 <!-- Preloading --> 
  <?php if ($preloader==1) { ?>
    <div id="preloader">
        <div class="spinner">
            <img class="signature" src="<?php echo $company_logo; ?>">
            
            <div></div>
            <div></div>
        </div>
        <div class="preloader-footer">
            <h3>Powered By NFC Touch</h3>
        </div>
    </div>
    <?php } ?>
    
 <!-- Switcher -->
    <div class="color-switcher" >
        <div class="open" style=" border-radius: 0 50% 50% 0;"><i class="fa fa-globe fa-spin"></i></div>
        <h4><?php echo $lang_str['eprofile.lang-title'];?></h4>
        <ul>
            <li>
                <a class="language-1" onclick="setLanguage('en'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=en";?>" style="font-size: 12px;">
                    EN
                </a>
            </li>

            <!-- Language 2 -->
            <li>
                <a class="language-2" onclick="setLanguage('tc'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=tc";?>" style="font-size: 12px;">
                    繁
                </a>
            </li>

            <!-- Language 3 -->
            <li>
                <a class="language-3" onclick="setLanguage('sc'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=sc";?>" style="font-size: 12px;">
                    簡
                </a>
            </li>
            <li>
                <a class="language-1" onclick="setLanguage('es'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=es";?>" style="font-size: 12px;">
                    ES
                </a>
            </li>

            <!-- Language 2 -->
            <li>
                <a class="language-2" onclick="setLanguage('fr'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=fr";?>" style="font-size: 12px;">
                    FR
                </a>
            </li>

            <!-- Language 3 -->
            <li>
                <a class="language-3" onclick="setLanguage('de'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=de";?>" style="font-size: 12px;">
                    DE
                </a>
            </li>
            <li>
                <a class="language-1" onclick="setLanguage('it'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=it";?>" style="font-size: 12px;">
                    IT
                </a>
            </li>

            <!-- Language 2 -->
            <li>
                <a class="language-2" onclick="setLanguage('pt'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=pt";?>" style="font-size: 12px;">
                    PT
                </a>
            </li>

            <!-- Language 3 -->
            <li>
                <a class="language-3" onclick="setLanguage('ja'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=ja";?>" style="font-size: 12px;">
                    日
                </a>
            </li>
            <li>
                <a class="language-1" onclick="setLanguage('kr'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=kr";?>" style="font-size: 12px;">
                    한
                </a>
            </li>

            <!-- Language 2 -->
            <li>
                <a class="language-2" onclick="setLanguage('ru'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=ru";?>" style="font-size: 12px;">
                    RU
                </a>
            </li>

            <!-- Language 3 -->
            <li>
                <a class="language-3" onclick="setLanguage('ar'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=ar";?>" style="font-size: 12px;">
                    हिंदी
                </a>
            </li>
        </ul>
        <a class="switcher-reset" onclick="setLanguage('en'); return false;" href="<?php echo $_SERVER['REQUEST_URI']."&lang=en";?>">
            <?php echo $lang_str['eprofile.lang-reset'];?>
        </a>
    </div>
        
     <div class="container">
        <!-- Headshot / Logo -->
         
                                     <?php if ($headshot_display_option==true) { ?>
                            <img class="headshot" src="<?php echo $headshot; ?>" alt=""/>
                            <?php } ?>
         
         <?php if ($logo_display_option==true) { ?>
                            <img class="companylogo" src="<?php echo $company_logo; ?>" alt=""/>
                            <?php } ?>
         
<!--
         
        <?php if($headshot!=""){ ?>
            <div class="headshot">
                <img src="<?php echo $headshot;?>" alt="Profile Photo"> 
            </div>
        <?php } ?> 
         
         <?php if($company_logo!=""){ ?>
            <div class="companylogo">
                <img src="<?php echo $company_logo;?>" alt="Profile Photo"> 
            </div>
        <?php } ?> 
-->
         
        
        <!-- Company / Name -->
         <div class="info-block">
                       <h1 style="font-size: 70%; margin-bottom: 5px; margin-top: 25px; text-align: left; width: 80%; line-height: 1.2; color:<?php echo $minisite_title_text_color; ?> " class="subtitle"><strong><?php echo "$pname " ; ?><?php echo "$fname " ; ?><?php echo "$mname " ; ?><?php echo "$lname " ; ?><span style="display:inline-block"><?php echo "$pdname" ; ?></span><br>
                                    <?php echo $oname; ?></strong></h1>
              <p style="line-height: 1.2; margin-bottom: 5px; text-align: left; font-size: 45%; " class="position"><?php echo "$position" ; ?><br><?php echo "$position_other_lang"; ?></p>
             
                            
                            </div>

        <!-- Info Blocks -->
         <div class="info-block2">
            <h2 class="subtitle" style="text-align: left; font-size: 70%; line-height: 1.2;"><?php echo $company_name_eng; ?><br><?php echo $company_name_chi; ?></h2>
        </div>
         <div class="info-block">
                   <?php 
                              if ($save_contact_button==TRUE) { ?>
                         <a class="recoba-btn" target="_blank" style="border-radius: 32px; display: inline-block; text-align: center;"
                                href="<?php echo $savemycontact; ?>">
                                <?php echo $lang_str['eprofile.savemycontact'];?>
                            </a>
                            <?php } ?>
             </div>
        
                                    
         
         

   </div>
    
 
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
