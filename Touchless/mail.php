<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include ('../Touchless/PHPMailer/src/Exception.php');
include ('../Touchless/PHPMailer/src/PHPMailer.php');
include ('../Touchless/PHPMailer/src/SMTP.php');

$mail = new PHPMailer(TRUE);


$con_email = $_POST['con_email'];




?>