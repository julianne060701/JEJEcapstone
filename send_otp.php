<!-- send_otp.php -->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_otp_email($recipient_email, $otp) {
    require 'path/to/PHPMailer/src/PHPMailer.php'; // Replace with the actual path to PHPMailer.php file
    require 'path/to/PHPMailer/src/SMTP.php'; // Replace with the actual path to SMTP.php file
    require 'path/to/PHPMailer/src/Exception.php'; // Replace with the actual path to Exception.php file

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'thanakim060701@gmail.com';                  // SMTP username
        $mail->Password   = 'ftfunagyxofpuphk';                   // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        // Recipients
        $mail->setFrom('thanakim060701@gmail.com');
        $mail->addAddress($_POST["email"]);   // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Your OTP';
        $mail->Body    = "Your One-Time Password (OTP) is {$otp}.";
        $mail->AltBody = "Your One-Time Password (OTP) is {$otp}.";  // In case email clients do not support HTML

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Handle exception and return false if email could not be sent
        return false;
    }
}
