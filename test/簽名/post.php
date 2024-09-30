<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email    = '2012cjz@gmail.com';
  $epaper   = 1;
  $msg = array();



  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  $ip = $_SERVER['REMOTE_ADDR'];


  $db = null;
  $rs = null;



  include_once "/sites/global/PHPMailer6/src/Exception.php";
  include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
  include_once "/sites/global/PHPMailer6/src/SMTP.php";
  include_once "/sites/global/PHPMailer6/src/OAuth.php";

  $mail = new PHPMailer();
  try {
    //Server settings
    // $mail->SMTPDebug = 2; // Enable verbose debug output

    // echo 'Message has been sent';
    if ($epaper == 1){
      $privacy = '是';
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

      if(false){
        $msg['epaper'] = 'repeat';
      }else{
        
        $mail = new PHPMailer();
        try{
          $mail->isSMTP();
          $mail->Host = 'mail.ares.com.tw';
          $mail->SMTPAutoTLS = false;
          $mail->CharSet  = "utf-8";
          $mail->setFrom('edm@ares.com.tw', '資通電子報');
          $mail->AddAddress($email);
          $mail->Subject = "資通電子報訂閱確認";
          $mail->isHTML(true);
    //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
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
</head><style type="text/css">
<!-- body {font-family: "微軟正黑體", sans-serif;font-size: 13px;}
a, a:link a:hover{color:#d5562b;text-decoration: none;}
--> </style>
<body>歡迎訂閱資通電腦 ARES 電子報，請點擊以下的連結，完成最後的訂閱程序：<br /><br /><a href="https://www.ares.com.tw/epaper/confirm/?uid={$uid}">https://www.ares.com.tw/epaper/confirm/?uid={$uid}</a> <br /><br />如果點擊以上連接沒有作用，請複製下來再貼到瀏覽器的網址列上，然後按 Enter 即可。<br /><br />若您並沒有訂閱本電子報，請忽略本郵件。<br /><br />感謝您！<br /><br />--<br />資通電腦股份有限公司<br />Ares International Corp.<br /><a href="https://www.ares.com.tw">https://www.ares.com.tw</a><br /></body></html>
MAILBODY;
          $mail->Body  = $body;
          $mail->send();
          $msg['ending'] = 'success';
        } catch (Exception $e) {
          echo 'epaper subscribe error: '. $mail->ErrorInfo;
          $msg['ending'] = 'sendError';
          $msg['info'] = $mail->ErrorInfo;
        }

        $db = null;
        $rs = null;
      }
    }
  } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
    $msg['ending'] = 'sendError';
    $msg['info'] = $mail->ErrorInfo;
  }

  echo json_encode($msg);
  // exit();
// }

// if no POST
// header('Location: index.php');


