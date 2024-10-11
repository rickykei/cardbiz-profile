<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Profile Site</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 370px;
            margin: 20px auto;
            padding: 0px;
            background-color: <?php if ($wallet_bg_color=="") echo "#D32"; else echo $wallet_bg_color;?>;
            border-radius: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 30px 15px 0 30px;
            color: #fff;
        }
        .logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }
        .logo img {
            width: 100%;
            height: auto;
        }
        h1 {
            font-size: 20px;
            margin: 0;
        }
        .card {
            padding: 15px 15px 0 30px;
            margin: 10px 0;
        }
        .card-title {
            font-weight: 500;
            font-size: 18px;
            color: #fff;
        }
        .card-info {
            font-size: 14px;
            color: #fff;
        }
        .image-container {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }
        .image {
            width: 200px;
            height: 200px;
            border-radius: 20px;
            overflow: hidden;
        }
        .image img {
            width: 100%;
            height: auto;
        }
        .footer-image {
            display: flex;
            justify-content: center;
            margin-top: 40px; /* Remove margin to eliminate space */
        }
        .footer-image img {
            width: 100%; /* Ensures the image fills the container */
            height: 100%; /* Set fixed height */
            border-radius: 0 0 30px 30px; /* Optional: remove rounded corners if desired */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            
            <?php if($gwarray['logo']!=""){ ?>
                <div class="logo">
							<img  src="<?php echo $gwarray['logo'];?>" alt="Logo" > 
                        </div>
			<?php }   ?> 
         
            <h1><?php echo 	$gwarray['company_name'] ; ?></h1>
        </div>

        <div class="card">
            <div class="card-info"><?php echo 	$gwarray['name_label'] ; ?></div>
            <div class="card-title"> <span style="display:inline-block"><?php echo 	$gwarray['name'] ; ?></span><br>
            </div>
        </div>

        <div class="card">
            <div class="card-info"><?php echo $gwarray['position_label'];?></div>
            <div class="card-title"><?php echo 	$gwarray['position'] ; ?></div>
        </div>
        
        <div class="image-container">
            <div class="image">
            <?php if ($fromkey){ ?>
                         <img src="/?key=<?php echo $encrypted;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
						<?php if ($fromuid){ ?>
                         <img src="/?uid=<?php echo $uid;?>&qrtype=<?php echo $qrcode_option;?>" alt=""  width="250" >
						<?php } ?>
            </div>
        </div>

        <div class="footer-image">
            <img src="<?php echo $gwarray['banner'];?>" alt="Footer Image"> <!-- Replace with your footer image path -->
        </div>
    </div>

</body>
</html>