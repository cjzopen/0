<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once "/sites/global/PHPMailer6/src/Exception.php";
include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
include_once "/sites/global/PHPMailer6/src/SMTP.php";
include_once "/sites/global/PHPMailer6/src/OAuth.php";

$email='cj1895@ares.com.tw';
$name='cj';


$mail = new PHPMailer();
include "/sites/global/PHPMailer6/ssl_setting.php";
$mail->setFrom('edm@ares.com.tw', '電子報');
$mail->AddAddress($email, $name);
$mail->Subject = "第1";
$mail->isHTML(true);
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
 <head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <title></title>
  </head>
<body>
test
</body>
</html>
MAILBODY;
    $mail->MsgHTML($body);
    $mail->send();

    $mail->ClearAddresses();
    $mail->AddAddress('1@ares.com.tw', 'test');
    $mail->AddBCC($email, $name);
    $mail->Subject = $name.'第2';

    try {
      $db = new PDO('sqlite:/sites/global/epaper-article.db');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'database connection failed: ' . $e->getMessage();
      exit;
    }
    $rs = $db->query("SELECT `date` FROM article WHERE `date` <= date('now') ORDER BY `date` DESC LIMIT 1");
    $last_date = $rs->fetchColumn();

    $file_path = '/sites/edm/dm/test/'.$last_date.'.html';
    $html_content = file_get_contents($file_path);

    $mail->MsgHTML($html_content);
    $mail->send();

    $db = null;
    $rs = null;