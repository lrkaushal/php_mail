<?php
//verify.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



function sendVerificationEmail($userEmail, $verificationCode)
{
    
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = ''; // Your SMTP username
        $mail->Password = ''; // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('enterprises.official15ss@gmail.com', 'SS Enterprises');
        $mail->addAddress($userEmail);

        $mail->isHTML(true);
        $mail->Subject = 'Email Verification';
        $mail->Body = 'Your verification code is: ' . $verificationCode;

        $mail->send();
        // You can log success or handle other logic here

    } catch (Exception $e) {
        // Log error or handle it as needed
        error_log("Error sending verification code: " . $mail->ErrorInfo);
        echo "Error sending verification code. Please try again later.";
    }
}
?>
