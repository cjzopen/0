<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://mail.google.com');
header('AMP-Access-Control-Allow-Source-Origin: edm@ares.com.tw');
header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');


include_once "/sites/global/PHPMailer6/src/Exception.php";
include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
include_once "/sites/global/PHPMailer6/src/SMTP.php";
include_once "/sites/global/PHPMailer6/src/OAuth.php";

$mail = new PHPMailer();
  try {
    //Server settings
    // $mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->isSMTP();// Set mailer to use SMTP
    $mail->Host = 'mail.ares.com.tw';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->SMTPAutoTLS = false;
    $mail->CharSet  = "utf-8";
    // $mail->Username = 'user@example.com';// SMTP username
    // $mail->Password = 'secret'; // SMTP password
    // $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('edm@ares.com.tw', 'amp');
    // $mail->AddAddress("@gmail.com", "cj");
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    //Content
    $mail->isHTML(true);// Set email format to HTML
    $body = file_get_contents('haa.html');
    $mail->Subject = 'amp test';
    $mail->Body  = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
  }