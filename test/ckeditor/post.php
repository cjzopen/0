<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = @htmlspecialchars(stripslashes($_POST['title']), ENT_QUOTES);
  $date = @htmlspecialchars(stripslashes($_POST['date']), ENT_QUOTES);
  $email = @htmlspecialchars(stripslashes($_POST['email']), ENT_QUOTES).'@ares.com.tw';
  $content = @$_POST['content'];
  $msg = array();

  try{
    $db = new PDO("sqlite:marticle.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['db'] = 'newDbError';
    $log = $e->getMessage();
    echo json_encode($msg);
    exit();
  }

  $query = "INSERT INTO article (title, `date`, content) VALUES ('{$title}', '{$date}', '{$content}')";

  $rs = $db->exec($query);
  $db = null;
  $rs = null;

  include_once "/sites/global/PHPMailer6/src/Exception.php";
  include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
  include_once "/sites/global/PHPMailer6/src/SMTP.php";
  include_once "/sites/global/PHPMailer6/src/OAuth.php";
  $mail = new PHPMailer();
  try {
    $mail->isSMTP();
    $mail->Host = 'mail.ares.com.tw';
    $mail->SMTPAutoTLS = false;
    $mail->CharSet  = "utf-8";
    $mail->setFrom('harry@ares.com.tw', '余宏揚');
    $mail->AddAddress($email);
    $mail->Subject = '企業小品：'.$title;
    $mail->isHTML(true);
    $mail->AddEmbeddedImage('banner.jpg', 'banner');

        //信件樣式
    $body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
</head><style type="text/css">
body{font-family:"標楷體","微軟正黑體", sans-serif;font-size: 16px;}
table {width: 500px;margin:auto;text-align: left;border-collapse: collapse;background-color: #fff;}#content p{text-indent:32px;}
body>table{margin:auto;}img {border: 0; outline: 0; }</style>
<body><center><table border="0" width="500" style="font-family:"標楷體","微軟正黑體", sans-serif!important;font-size:16px!important;margin:0 auto"><tr><td id="content"><img src="cid:banner" alt="*" width="500" height="100" style="display: block; border: 0;" /></td></tr><tr><td><div style="text-align:right!important">{$date}</div><br><h1 style="font-size:30px!important;font-family:DFKai-sb,標楷體!important;text-align:center!important">{$title}</h1><div style="text-align:center!important;font-family:DFKai-sb,標楷體!important;font-size:18px!important"><strong>作者：余宏揚（資通電腦公司董事長）</strong></div><br><br><div style="text-align:left!important;font-family:DFKai-sb,標楷體!important;font-size:16px!important" id="content">{$content}</div></td></tr></table></center></body></html>
MAILBODY;
    $mail->Body  = $body;
    $mail->send();

    $msg['ending'] = 'success';
  }catch (Exception $e) {
    // echo 'epaper subscribe error: '. $mail->ErrorInfo;
    $msg['ending'] = 'sendError';
    $msg['info'] = $mail->ErrorInfo;
  }
  echo json_encode($msg,true);
  exit();
}



