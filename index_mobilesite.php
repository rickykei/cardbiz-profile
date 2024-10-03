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
            background-color: #D32;
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
            <div class="logo">
            <?php if($company_logo!=""){ ?>
							<img  src="/api/files/<?php echo $company_logo;?>" alt="Logo" >
							<?php } else { ?>
							<img  src="/assets/img/logo/white_logo.jpg" alt="Logo" >
							<?php } ?>

                 
            </div>
            <h1><?php echo $company_name_eng;?><br><?php echo $company_name_chi;?></h1>
        </div>

        <div class="card">
            <div class="card-info">Name</div>
            <div class="card-title"> <?php echo "$pname " ; ?><?php echo "$fname " ; ?><?php echo "$mname " ; ?><?php echo "$lname " ; ?><span style="display:inline-block"><?php echo "$pdname" ; ?></span><br>
            <?php echo $oname; ?></div>
        </div>

        <div class="card">
            <div class="card-info">Position</div>
            <div class="card-title"><?php echo "$position" ; ?></div>
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
            <img src="images/aaforum.png" alt="Footer Image"> <!-- Replace with your footer image path -->
        </div>
    </div>

</body>
</html>