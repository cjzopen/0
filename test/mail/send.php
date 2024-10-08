<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

$name = htmlspecialchars(stripslashes($_POST['name']), ENT_QUOTES);
$email = htmlspecialchars(stripslashes($_POST['email']), ENT_QUOTES);

  include_once "/example/global/PHPMailer6/src/Exception.php";
  include_once "/example/global/PHPMailer6/src/PHPMailer.php";
  include_once "/example/global/PHPMailer6/src/SMTP.php";
  include_once "/example/global/PHPMailer6/src/OAuth.php";

  $mail = new PHPMailer();
  try {
    //Server settings
    $mail->SMTPDebug = 3; // Enable verbose debug output
    $mail->isSMTP();// Set mailer to use SMTP
    $mail->Host = 'eml.ares.com.tw';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->SMTPAutoTLS = false;
    $mail->CharSet  = "utf-8";
    $mail->Username = 'aresweb';// SMTP username
    $mail->Password = 'Ares20873360'; // SMTP password
    $mail->SMTPSecure = 'ssl';// Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to
    // $mail->SMTPDebug = 3;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Recipients
    $mail->setFrom('EDM@ares.com.tw', '資通電腦');
    $mail->addAddress($email,$name); // Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cj1895@ares.com.tw', '行銷部');
    // $mail->AddBCC('tomhsi@ares.com.tw', 'Hsi Tom');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    //Content
    $mail->isHTML(true);// Set email format to HTML
    //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html>
<html lang="zh">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta http-equiv="x-ua-compatible" content="IE=edge" /><title></title>
</head>
<p>親愛的 {$name} 先生／小姐，</p><br /><br />
<p>這是測試的內容，看起來沒有問題。</p>
</body></html>
MAILBODY;
    $mail->Subject = '收到信了 '.$name;
    $mail->Body  = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    // if($mail->send()){
    //   echo 'send success';
    // }else{
    //   echo $mail->ErrorInfo;
    // }
    echo '<br>-----------結束';
    
    
      
  
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
  }
