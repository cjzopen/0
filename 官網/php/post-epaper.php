<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $company = @htmlspecialchars(stripslashes($_POST['company']),  ENT_QUOTES);
  $name = @htmlspecialchars(stripslashes($_POST['name']),     ENT_QUOTES);
  $email = @htmlspecialchars(stripslashes($_POST['email']),    ENT_QUOTES);
  $email = strtolower($email);
  $privacy = '是';
  $msg = 'sendError';

  $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
  if (!preg_match($pattern, $email)) {
    $msg = 'blocked';
  }else{
    include_once "/example/global/recaptcha/ares_recaptcha_v2.php";
    // $response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
    // $privatekey = "*******";
    // $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$privatekey.'&response='.$response);
    // $responseData = json_decode($verifyResponse);
    // if($responseData->success){

    // }else{
    //   $msg = 'recaptchaFail';
    //   echo $msg;
    //   exit();
    // }
    putenv("TZ=ASIA/TAIPEI");
    $submitDate = date("Y-m-d H:i:s", time());
    $ip = $_SERVER['REMOTE_ADDR'];

    function rand_string($len, $chars = '0123456789abcdef') {
       $string = "";
       for ($i=0;$i<$len;$i++) {
         $pos = rand(0, strlen($chars)-1);
         $string .= $chars{$pos};
       }
       return $string;
    }
    $md5 = md5($email);
    $uid = $md5.rand_string(16);


    try{
      $db = new PDO("sqlite:/example/global/epaper.db");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
      $msg = 'newDbError';
      $log = $e->getMessage();
      echo $msg;
      exit();
    }
    $rs = $db->query("SELECT * FROM mailinglist WHERE email='{$email}' AND confirmed='1'");
    $row = $rs->fetchAll();
    $num = count($row);
    if($num!=0){
      echo 'repeat';
      exit();
    }
    // is NULL 要改成 !=1 最精確
    // $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NULL AND email='{$email}'");
    $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NOT '1' AND email='{$email}'");
    $row = $rs->fetchAll();
    $num = count($row);
    if($num!=0){
      $query = "UPDATE mailinglist SET uid = '{$uid}', date = '{$submitDate}', name = '{$name}', company = '{$company}' WHERE email='{$email}'";

      $rs = $db->exec($query);
    }else{
      $query = "INSERT INTO mailinglist (email, uid, `date`, name, company, privacy) VALUES ( '{$email}', '{$uid}', '{$submitDate}', '{$name}', '{$company}', '{$privacy}')";

      $rs = $db->exec($query);
    }

    //收信者與寄信
    include_once "/example/global/PHPMailer6/src/Exception.php";
    include_once "/example/global/PHPMailer6/src/PHPMailer.php";
    include_once "/example/global/PHPMailer6/src/SMTP.php";
    include_once "/example/global/PHPMailer6/src/OAuth.php";
    $mail = new PHPMailer();
    try{
      // $mail->SMTPDebug = 2;
      include "/example/global/PHPMailer6/ssl_setting.php";
      $mail->setFrom('edm@ares.com.tw', '資通電腦');
      $mail->AddAddress($email);
      $mail->Subject = "資通電腦電子報訂閱確認";
      $mail->isHTML(true);
      // $mail->addCC('m1_all@ares.com.tw', '行銷部');
      // $mail->addBCC('bcc@example.com');

      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

      //Content
$body = <<<MAILBODY
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "EmailMessage",
  "potentialAction": {
  "@type": "ViewAction",
  "target": "https://www.ares.com.tw/epaper/confirm/?uid={$uid}",
  "name": "訂閱確認"
  },
  "description": "資通電子報訂閱確認信"
}
</script>
<style type="text/css">
body {font-family: "微軟正黑體", sans-serif;font-size: 13px;}
a, a:link a:hover{color:#2858aa;text-decoration: none;}
</style>
</head>
<body>
歡迎訂閱資通電腦 ARES 電子報，請點擊以下的連結，完成最後的訂閱程序：<br />
<br />
<a href="https://www.ares.com.tw/epaper/confirm/?uid={$uid}">https://www.ares.com.tw/epaper/confirm/?uid={$uid}</a> <br />
<br />
如果點擊以上連接沒有作用，請複製下來再貼到瀏覽器的網址列上，然後按 Enter 即可。<br />
<br />
若您並沒有訂閱本電子報，請忽略本郵件。<br />
<br />
感謝您！<br />
<br />
--<br />
資通電腦股份有限公司<br />
Ares International Corp.<br />
<a href="https://www.ares.com.tw">https://www.ares.com.tw</a><br />
</body>
</html>
MAILBODY;
      $mail->Body  = $body;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()){
        $msg = $mail->ErrorInfo;
      }else{
        $msg='success';
      }
    } catch (Exception $e) {
      // echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
      $msg = $mail->ErrorInfo;
    }

    $db = null;
    $rs = null;
  }
  echo $msg;
  exit();
}

// if no POST
header('Location: index.php');


