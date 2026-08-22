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
            width: 85%;               /* take 85% of parent width */
            max-width: 600px;          /* but no more than 600px */
            margin: 200px auto 40px auto;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08), 
              0 -2px 6px rgba(0,0,0,0.02);
            overflow: visible;
            text-align: center;
            background-color: <?php echo $minisite_site_bg_color; ?>;
            z-index: 1; /* keep container below */
        }
        
        .banner-image {
            width: 85%;
            max-width: 600px;          /* but no more than 600px */
            max-height: 200px;         /* adjust as needed */
            margin: 100px auto 40px auto;
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
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;   /* take it out of normal flow */
            top: -50px;           
            left: 25%;             /* move left edge to 50% */
            transform: translateX(-50%); /* shift it back by half its width */
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
            text-align: center;
            z-index: 2;  
            border: 1mm solid <?php echo $minisite_site_bg_color; ?>; 
        }

        .headshot img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .companylogo {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
            position: absolute;   /* take it out of normal flow */
            top: -155px;           
            left: calc(90%);     
            transform: translateX(-50%); /* shift it back by half its width */
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
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
             font-size: <?php echo $minisite_title_font_size; ?>px !important;
            color: <?php echo $minisite_key_wording_color; ?>;
        }

        .info-block {
            margin: 15px 25px;
        }
        
                        .info-block2 {
            margin: 15px 25px;
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

        .qr-section {
            margin: 20px 0;
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
    margin: 2px 30px;               /* spacing between boxes */
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
    font-weight: bold;
    border-radius: 12px;          /* rounded corners */
    padding: 0 16px;            /* spacing inside */
    margin: 0 0;                /* space between boxes */
    display: flex;        /* force each li on its own line */
    background: <?php echo $minisite_site_bg_color; ?>;             /* optional: white background */
            box-sizing: border-box; /* include padding in width */
            align-items: center;
            text-align: left;
            color: <?php echo $minisite_key_wording_color; ?>;
            
}


        .home-box span {
            color: <?php echo $minisite_title_text_color; ?>;
        }
        
        .position {
            color: <?php echo $minisite_text_color; ?>;
        }

        
        .social a {
                        background: linear-gradient(135deg, <?php echo $minisite_key_wording_color; ?>, <?php echo $minisite_title_text_color; ?>);
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
            width: fit-content;
            color: <?php echo $minisite_key_wording_color; ?>;
            background-color: <?php echo $minisite_button_color; ?>;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            padding: 12px 24px;
            border: solid 1px <?php echo $minisite_title_text_color; ?>;
            font-size: 11px;
            text-decoration: none !important;
            font-weight: bold;
            border-radius: 32px;
             text-align: left;
            margin-left: 25px;
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
        
        .recoba-tabs .tab-content{
	    padding: <?php echo $minisite_font_size; ?>px !important;
            background: <?php echo $minisite_site_bg_color; ?>;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
                white-space: normal;   /* ensures text wraps */
    word-wrap: break-word; /* long words/URLs break onto next line */
    overflow-wrap: break-word; /* modern equivalent */
            
}

/* Active tabs */
.recoba-tabs .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
	color: <?php echo $minisite_key_wording_color; ?>;
    cursor: default;
    background-color: <?php echo $minisite_site_bg_color; ?>;
    border: 1px solid color-mix(in srgb, <?php echo $minisite_key_wording_color; ?> 7%, <?php echo $minisite_site_bg_color; ?>);

    border-bottom-color: <?php echo $minisite_site_bg_color; ?>;
    border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}


/* Inactive tabs */
.recoba-tabs .nav-tabs > li > a {
    color: <?php echo $minisite_title_text_color; ?>; /* text color for inactive */
    display: block;
  margin: 0;        /* remove gaps */
  border-right: none; /* prevents double borders */
}

/* Hover effect for inactive tabs */
.recoba-tabs .nav-tabs > li > a:hover {
    color: <?php echo $minisite_key_wording_color; ?>;
    background-color: <?php echo $minisite_site_bg_color; ?>;
    border-color: color-mix(in srgb, <?php echo $minisite_key_wording_color; ?> 7%, <?php echo $minisite_site_bg_color; ?>);
        border-bottom-color: <?php echo $minisite_site_bg_color; ?>;
        border-top-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
}
        
        
.recoba-tabs .nav-tabs > li > a{
	font-size: <?php echo $minisite_font_size; ?>px !important;
    flex: 1;  
  text-align: center;     /* center the text inside */
}

        .recoba-tabs .nav-tabs li {
    flex: 1;                  /* each tab takes equal width */
    text-align: center;       /* center the icon/text inside */
}
        

        
        /* Change/remove the line under the tabs */
.recoba-tabs .nav-tabs {
    border-bottom: 1px solid color-mix(in srgb, <?php echo $minisite_key_wording_color; ?> 7%, <?php echo $minisite_site_bg_color; ?>); /* pick your color */
        display: flex;            /* make tabs a flex container */
    width: 100%;              /* fill parent container */
    padding: 0;               /* remove default UL padding */
    margin: 0;                /* remove default UL margin */
    box-sizing: border-box;
}
        .recoba-tabs .nav-tabs > li.active > a:focus {
/*    border: 1px solid <?php echo $minisite_key_wording_color; ?>;*/
    border-bottom-color: <?php echo $minisite_site_bg_color; ?>; /* match tab-content bg */
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}
        
        .recoba-tabs .nav-tabs li:last-child {
    border-right: none;         /* ensure last tab has no border */
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
            font-size: <?php echo $minisite_title_font_size; ?>px !important;
            color: <?php echo $minisite_key_wording_color; ?>;
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
    
    <div class="banner-image">
                <?php if ($profile_theme == "") { ?>
                    <img src="/vcard/images/profile2.jpg" alt="">
                <?php } else { ?>
                    <img src="<?php echo $profile_theme; ?>" alt="">
                <?php } ?>
            </div>
    
     <div class="container">
        <!-- Headshot / Logo -->
                                     <?php if ($headshot_display_option==true) { ?>
                            <img class="headshot" src="<?php echo $headshot; ?>" alt=""/>
                            <?php } ?>
         
         <?php if ($logo_display_option==true) { ?>
                            <img class="companylogo" src="<?php echo $company_logo; ?>" alt=""/>
                            <?php } ?>
        
        <!-- Company / Name -->
<div class="home-box" style="margin-top:80px; text-align:left; line-height:1.1; padding-left:24px;">

                       <h4 class="subtitle"
    style="margin-top:80px; text-align:left; line-height:1.2; ">
<?php echo "$pname "; ?><?php echo "$fname "; ?><?php echo "$mname "; ?><?php echo "$lname "; ?><span style="display:inline-block"><?php echo "$pdname" ; ?></span><br>
                                    <?php echo $oname; ?></h4>
                            
                            </div>

        <!-- Info Blocks -->
        <div class="home-box" 
     style="margin-bottom: 5px; text-align: left; display:flex; flex-direction:column; padding-left:24px;">

              <span><?php echo $company_name_eng;?><br><?php echo $company_name_chi;?></span>
                            <p style="line-height: 1.2;" class="position"><?php echo "$position" ; ?><br><?php echo "$position_other_lang"; ?></p>
         <p style="line-height: 1.1; margin-top: 10px; text-align: left;"><br><?php echo "$bio" ; ?></p>
         </div>
         <div class="info-block">
         <div class="qr-section" style="text-align: left; margin-bottom: 20px;">

                        <?php if ($fromkey && $qrcode_option!=5) { ?>
                            <img src="/?key=<?php echo $encrypted; ?>&qrtype=<?php echo $qrcode_option; ?>" alt="" width="160">
                        <?php } ?>
                        <?php if ($fromuid && $qrcode_option!=5) { ?>
                            <img src="/?uid=<?php echo $uid; ?>&qrtype=<?php echo $qrcode_option; ?>" alt="" width="160">
                        <?php } ?>
                            </div>
         </div>
         <div class="qr-section" style="text-align: left; margin-bottom: 20px;">
                                    <?php 
                              if ($save_contact_button==TRUE) { ?>
                            <a class="recoba-btn" target="_blank" style="border-radius: 32px; display: inline-block; text-align: center; margin-bottom: 20px;"
                                href="<?php echo $savemycontact; ?>">
                                <?php echo $lang_str['eprofile.savemycontact'];?>
                            </a>
                            <?php } ?>
             </div>
         
          <ul class="list top15 bottom15" style="border-radius: 32px; display: inline-block; text-align: center;">
<?php if ($mobile != "") { ?>
    <li><i class="fa-solid fa-mobile-screen-button"></i> <a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a></li>
<?php } ?>
<?php if ($mobile2 != "") { ?>
    <li><i class="fa-solid fa-mobile-screen-button"></i> <a href="tel:<?php echo $mobile2; ?>"><?php echo $mobile2; ?></a></li>
<?php } ?>
<?php if ($mobile3 != "") { ?>
    <li><i class="fa-solid fa-mobile-screen-button"></i> <a href="tel:<?php echo $mobile3; ?>"><?php echo $mobile3; ?></a></li>
<?php } ?>
<?php if ($mobile4 != "") { ?>
    <li><i class="fa-solid fa-mobile-screen-button"></i> <a href="tel:<?php echo $mobile4; ?>"><?php echo $mobile4; ?></a></li>
<?php } ?>
<?php if ($work_tel != "") { ?>
    <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $work_tel; ?>"><?php echo $work_tel; ?></a></li>
<?php } ?>
<?php if ($work_tel2 != "") { ?>
    <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $work_tel2; ?>"><?php echo $work_tel2; ?></a></li>
<?php } ?>
<?php if ($work_tel3 != "") { ?>
    <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $work_tel3; ?>"><?php echo $work_tel3; ?></a></li>
<?php } ?>
<?php if ($work_tel4 != "") { ?>
    <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $work_tel4; ?>"><?php echo $work_tel4; ?></a></li>
<?php } ?>
<?php if ($home_tel != "") { ?>
    <li><i class="fa-solid fa-phone"></i> <a href="tel:<?php echo $home_tel; ?>"><?php echo $home_tel; ?></a></li>
<?php } ?>

                            <?php if ($fax!=""){ ?>
              <li><i class="fa fa-fax"></i><a><?php echo $fax; ?></a></li>
							<?php } ?>
                             <?php if ($work_email != "") { ?>
    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $work_email; ?>"><?php echo $work_email; ?></a></li>
<?php } ?>
<?php if ($work_email2 != "") { ?>
    <li><i class="fa-solid fa-envelope"></i><a href="mailto:<?php echo $work_email2; ?>"><?php echo $work_email2; ?></a></li>
<?php } ?>
<?php if ($work_email3 != "") { ?>
    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $work_email3; ?>"><?php echo $work_email3; ?></a></li>
<?php } ?>
<?php if ($home_email != "") { ?>
    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $home_email; ?>"><?php echo $home_email; ?></a></li>
<?php } ?>
<?php if ($other_email != "") { ?>
    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $other_email; ?>"><?php echo $other_email; ?></a></li>
<?php } ?>
							<?php if ($wechat_id!=""){ ?>
                            <li><i class="fa-brands fa-weixin"></i> <a><?php echo $wechat_id; ?></a></li>                            
							<?php } ?>
                             <?php if ($address!=""){ ?>
                            <li><i class="fa-solid fa-location-dot"></i> <a><?php echo "$address" ; ?></a></li> 
							<?php } ?>
                            <?php if ($address2!=""){ ?>
                            <li><i class="fa-solid fa-location-dot"></i> <a><?php echo "$address2" ; ?></a></li>
							<?php } ?>
                            <?php if ($address3!=""){ ?>
                            <li><i class="fa-solid fa-location-dot"></i> <a><?php echo "$address3" ; ?></a></li> 
							<?php } ?>
                            <?php if ($address4!=""){ ?>
                            <li><i class="fa-solid fa-location-dot"></i> <a><?php echo "$address4" ; ?></a></li>
							<?php } ?>
              
              <?php if ($company_website_url != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $company_website_url;?>"><?php echo $company_website_url_label; ?></a></li>
<?php } ?>
              <?php if ($more_info_tab_url != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $more_info_tab_url;?>"><?php echo $lang_str['eprofile.moreinfo'];?></a></li>
<?php } ?>
              <?php if ($web_link != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link;?>"><?php echo $web_link_label;?></a></li>
<?php } ?>
              <?php if ($web_link2 != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link2;?>"><?php echo $web_link_label2;?></a></li>
<?php } ?>
              <?php if ($web_link3 != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link3;?>"><?php echo $web_link_label3;?></a></li>
<?php } ?>
              <?php if ($web_link4 != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link4;?>"><?php echo $web_link_label4;?></a></li>
<?php } ?>
              <?php if ($web_link5 != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link5;?>"><?php echo $web_link_label5;?></a></li>
<?php } ?>
              <?php if ($web_link6 != "") { ?>
    <li><i class="fa-solid fa-globe"></i> <a href="<?php echo $web_link6;?>"><?php echo $web_link_label6;?></a></li>
<?php } ?>
              
                        </ul>
 <?php
// Reset all active states
$tab1_active = $tab2_active = $tab3_active = $tab4_active = '';

// Pick the first non-empty tab as active
if ($awards != '') {
    $tab1_active = 'active';
} elseif ($qualifications != '') {
    $tab2_active = 'active';
} elseif ($additional_address != '') {
    $tab3_active = 'active';
} elseif ($achievements != '') {
    $tab4_active = 'active';
}
?>
<div class="info-block2">
<?php if ($awards != '' || $qualifications != '' || $additional_address != '' || $achievements != '') { ?>
    <div class="recoba-tabs">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" style="display:flex; justify-content:space-between;">
            <?php if ($awards != "") { ?>
                <li role="presentation" class="<?php echo $tab1_active; ?>">
                    <a href="#tab1" role="tab" data-toggle="tab">
                        <i class="fas fa-trophy"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if ($qualifications != "") { ?>
                <li role="presentation" class="<?php echo $tab2_active; ?>">
                    <a href="#tab2" role="tab" data-toggle="tab">
                        <i class="fas fa-medal"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if ($additional_address != "") { ?>
                <li role="presentation" class="<?php echo $tab3_active; ?>">
                    <a href="#tab3" role="tab" data-toggle="tab">
                        <i class="fas fa-compass"></i>
                    </a>
                </li>
            <?php } ?>

            <?php if ($achievements != "") { ?>
                <li role="presentation" class="<?php echo $tab4_active; ?>">
                    <a href="#tab4" role="tab" data-toggle="tab">
                        <i class="fas fa-star"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="text-align: left; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; overflow: hidden; margin-bottom: 30px;">
            <?php if ($awards != "") { ?>
                <div role="tabpanel" class="tab-pane <?php echo $tab1_active; ?>" id="tab1">
                    <p><?php echo $awards; ?></p>
                </div>
            <?php } ?>
            <?php if ($qualifications != "") { ?>
                <div role="tabpanel" class="tab-pane <?php echo $tab2_active; ?>" id="tab2">
                    <p><?php echo $qualifications; ?></p>
                </div>
            <?php } ?>
            <?php if ($additional_address != "") { ?>
                <div role="tabpanel" class="tab-pane <?php echo $tab3_active; ?>" id="tab3">
                    <p><?php echo $additional_address; ?></p>
                </div>
            <?php } ?>
            <?php if ($achievements != "") { ?>
                <div role="tabpanel" class="tab-pane <?php echo $tab4_active; ?>" id="tab4">
                    <p><?php echo $achievements; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
</div>

                        
                        <div class="social" style="margin-bottom: 15px; display:flex; justify-content:flex-start; flex-wrap:wrap; gap: 6px;max-width: 90%; margin: 30px auto 15px;">
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
                            <?php if ($xiaohongshu_url != "") { ?>
                                <a  href="<?php echo $xiaohongshu_url; ?>"><img width="20" style="margin-top: -5px" src="/XiaohongshuLOGO.png" /></a>
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
