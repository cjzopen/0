<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = '2012cjz@gmail.com';
  $msg = 'sendError';

  $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
  if (!preg_match($pattern, $email)) {
    $msg = 'blocked';
  }else{
   
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


    //收信者與寄信
    include_once "/sites/global/PHPMailer6/src/Exception.php";
    include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
    include_once "/sites/global/PHPMailer6/src/SMTP.php";
    include_once "/sites/global/PHPMailer6/src/OAuth.php";
    $mail = new PHPMailer();
    try{
      $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'mail.ares.com.tw';
      $mail->SMTPAutoTLS = false;
      $mail->CharSet  = "utf-8";
      $mail->setFrom('edm@ares.com.tw', '資通電子報');
      $mail->AddAddress($email);
      $mail->Subject = "資通電子報訂閱確認";
      $mail->isHTML(true);
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>電子報訂閱確認</title>
</head>
<body>
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

      // $mail->send();
      if(!$mail->send()){
        $msg = $mail->ErrorInfo;
      }else{
        $msg='success';
      }
    } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
      $msg = $mail->ErrorInfo;
    }

    $db = null;
    $rs = null;
  }
  echo '結果：';

  echo $msg;
  // exit();
// }

// if no POST
// header('Location: index.php');


