<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = ''; // Your SMTP username
$mail->Password = ''; // Your SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->isHtml(true);

return $mail;
