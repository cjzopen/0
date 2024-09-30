<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product = @$_POST['product'];
  $link = @$_POST['link'];
  $company  = @htmlspecialchars(stripslashes($_POST['company']),  ENT_QUOTES);
  $department = @htmlspecialchars(stripslashes($_POST['department']), ENT_QUOTES);
  $name     = @htmlspecialchars(stripslashes($_POST['name']),     ENT_QUOTES);
  $jobTitle   = @htmlspecialchars(stripslashes($_POST['jobTitle']),   ENT_QUOTES);
  $phone    = @htmlspecialchars(stripslashes($_POST['phone']),    ENT_QUOTES);
  $mobile   = @htmlspecialchars(stripslashes($_POST['mobile']),   ENT_QUOTES);
  $email    = @htmlspecialchars(stripslashes($_POST['email']),    ENT_QUOTES);
  $request  = @$_POST['request'];
  // $plan    = @$_POST['plan'];
  $budget   = @$_POST['budget'];
  // $visit     = @$_POST['visit'];
  $epaper   = @$_POST['epaper'];
  $knowFrom   = @$_POST ["knowFrom"];
  $union    = @htmlspecialchars(stripslashes($_POST['union']),  ENT_QUOTES);
  // $kfOther  = @htmlspecialchars(stripslashes($_POST['kfOther']),  ENT_QUOTES);
  $otherRequire = @htmlspecialchars(stripslashes($_POST['otherRequire']), ENT_QUOTES);
  $msg = array();

  // $length = count($knowFrom);
  // for($i=0; $i<$length; $i++){
  //   if($knowFrom[$i] == "協會"){
  //     $knowFrom[$i] = $knowFrom[$i] ."(".$union.")";
  //   }
  //   if($knowFrom[$i] == "其他"){
  //     $knowFrom[$i] = $knowFrom[$i] ."(".$kfOther.")";
  //   }
  //   $knowFromAll= implode (",", $knowFrom);
  // }
  $knowFromAll = $knowFrom;

  $response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
  $privatekey = "6LcpDzsUAAAAAK56V74Q_MTPgYaJyAhwytvyRZPe";
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$privatekey.'&response='.$response);
  $responseData = json_decode($verifyResponse);
  if($responseData->success){
    // $msg['ending'] = 'success';
  }else{
    $msg['ending'] = 'recaptchaFail';
    echo json_encode($msg);
    exit();
  }


  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  $ip = $_SERVER['REMOTE_ADDR'];


  try{
    $db = new PDO("sqlite:/sites/global/consult.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['ending'] = 'newDbError';
    $log = $e->getMessage();
    echo json_encode($msg);
    exit();
  }

  // 加密函数
  function encryptData($data, $key) {
    $encryptedData = openssl_encrypt($data, 'AES-256-CBC', $key, 0, substr($key, 0, 16));
    return $encryptedData;
  }

  // 解密函数
  function decryptData($encryptedData, $key) {
    $data = openssl_decrypt($encryptedData, 'AES-256-CBC', $key, 0, substr($key, 0, 16));
    return $data;
  }
  $encryptionKey = 'ourokroniiisperfect';
  $companyEncrypt = encryptData($company, $encryptionKey);
  $nameEncrypt = encryptData($name, $encryptionKey);
  $phoneEncrypt = encryptData($phone, $encryptionKey);
  $mobileEncrypt = encryptData($mobile, $encryptionKey);
  $emailEncrypt = encryptData($email, $encryptionKey);

  $query = "INSERT INTO consult (submitDate, ip, product, company, department, name, jobTitle, phone, mobile, email, request, budget, knowFrom, otherRequire) VALUES ( '{$submitDate}', '{$ip}', '{$product}', '{$companyEncrypt}', '{$department}', '{$nameEncrypt}', '{$jobTitle}', '{$phoneEncrypt}', '{$mobileEncrypt}', '{$emailEncrypt}', '{$request}',  '{$budget}',  '{$knowFromAll}', '{$otherRequire}')";

  $rs = $db->exec($query);
  $db = null;
  $rs = null;



  include_once "/sites/global/PHPMailer6/src/Exception.php";
  include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
  include_once "/sites/global/PHPMailer6/src/SMTP.php";
  include_once "/sites/global/PHPMailer6/src/OAuth.php";

  include_once "/sites/global/PHPMailer6/add_address_check.php";

  $mail = new PHPMailer();
  try {
    //Server settings
    // $mail->SMTPDebug = 2; // Enable verbose debug output
    include "/sites/global/PHPMailer6/ssl_setting.php";

    //Recipients
    $mail->setFrom('Consult@ares.com.tw', 'HCP');
    // $mail->addReplyTo('info@example.com', 'Information');
    foreach($addAddress as $aresMailAddress => $aresPerson) {
      $mail->AddAddress($aresMailAddress, $aresPerson);
    }
    // $mail->AddAddress('cj1895@ares.com.tw', 'test');
    $mail->addCC('m1_all@ares.com.tw', '行銷部');
    $mail->AddBCC('jenny@ares.com.tw', '汪曉芳');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    //Content
    $mail->isHTML(true);// Set email format to HTML
    // $mail->AddEmbeddedImage('banner.jpg', 'banner');
    //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
</head><style type="text/css">body {font-family: "微軟正黑體", sans-serif;font-size: 13px;text-align: center;background-color: #ebebeb;line-height: 1.5;}
table {width: 500px;margin:auto;text-align: left;border-collapse: collapse;background-color: #fff;}body>table{margin:auto;}ul,ol{margin:0;}a, a:link a:hover{color:#d5562b;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}#footer {text-align: right;margin-top: 0;font-size: 11px;color: #d5562b;}td {margin: 0;padding: 8px;}strong { color: #d5562b; }#content {padding: 0;}#footer td { border-top: 2px solid #d5562b; }</style>
<body><table><tr><td><h3 style="color:#d5562b;font-size: 1.5em;">HCP</h3></td></tr><tr><td id="link"><a href="{$link}">source</a></td></tr><tr><td colspan="2" id="content"><br /></td></tr><tr><td colspan="2" style="padding:15px;"><table style="width:100%;"><tr class="data"><td class="bg">公司：</td><td>{$company}</td></tr><tr class="data"><td class="bg">部門：</td><td>{$department}</td></tr><tr class="data"><td class="bg">姓名：</td><td>{$name}</td></tr><tr class="data"><td class="bg">職稱：</td><td>{$jobTitle}</td></tr><tr class="data"><td class="bg">電話：</td><td>{$phone}</td></tr><tr class="data"><td class="bg">手機：</td><td>{$mobile}</td></tr><tr class="data"><td class="bg">Email：</td><td>{$email}</td></tr></table></td></tr><tr><td colspan="2"><ul><li>您是如何得知資通產品？：<strong>{$knowFromAll}</strong></li><li>請問 貴公司預計導入費用為何：<strong>{$budget}</strong></li></ul><ul><li>需求：<strong>{$otherRequire}</strong></li></ul></td></tr><tr id="footer"><td colspan="2">{$submitDate}</td></tr></table></body></html>
MAILBODY;
    $mail->Subject = 'HCP 免費諮詢服務 - 訪客登錄資料';
    $mail->Body  = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';


    $mail = new PHPMailer();
    try {
      //Server settings
      // $mail->SMTPDebug = 2; // Enable verbose debug output
      include "/sites/global/PHPMailer6/ssl_setting.php";


      //Recipients
      $mail->setFrom('Consult@ares.com.tw', '資通電腦');
      $mail->addAddress($email, $name); // Add a recipient
      // $mail->addBCC('bcc@example.com');

      //Content
      $mail->isHTML(true);// Set email format to HTML
      $mail->AddEmbeddedImage('check.jpg', 'check');
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
</head><style type="text/css">body {font-family: "微軟正黑體", sans-serif;font-size: 14px;text-align: center;background-color: #ebebeb;line-height: 1.5;}
table {width: 600px;margin:auto;text-align: left;border-collapse: collapse;background-color: #fff;}body>table{margin:auto;}img {border: 0; outline: 0; }.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}td {margin: 0;padding: 8px;}strong { color: #d5562b; }#content {padding: 0;}</style>
<body><table><tr><td><br>親愛的 {$name}：<br><br></td></tr><tr><td>感謝您對於 HCP 人力資產規劃系統 的支持，我們會盡快安排專人與您聯繫。也推薦您觀看以下精選文章，可以幫助您對產品更加瞭解！<br><br></td></tr><tr><td id="content"><a href="https://hcp.ares.com.tw/news/knowledge/?utm_source=edm&utm_medium=email&utm_campaign=hcp-contact"><img src="cid:check" alt="精選文章" width="600" height="198" border="0" style="border:0;width:100%;max-width:600px;height:auto" /></a></td></tr></table></td></tr></table></body></html>
MAILBODY;
      $mail->Subject = '我們已收到您的諮詢！將盡速安排專人與您聯繫';
      $mail->Body  = $body;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      include_once "/sites/global/crm/product-label-and-update-json.php";

    }catch (PDOException $e) {}


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
      try{
        $db = new PDO("sqlite:/sites/global/epaper.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch (PDOException $e) {
        $msg['db'] = 'newDbError';
        $log = $e->getMessage();
        echo json_encode($msg);
        exit();
      }
      $rs = $db->query("SELECT * FROM mailinglist WHERE email='{$email}' AND confirmed='1'");
      $row = $rs->fetchAll();
      $num = count($row);
      if($num!=0){
        $msg['epaper'] = 'repeat';
      }else{
        $msg['epaper'] = 'norepeat';
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
        $mail = new PHPMailer();
        try{
          $mail->isSMTP();// Set mailer to use SMTP
          $mail->Host = 'eml.ares.com.tw';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true; // Enable SMTP authentication
          $mail->SMTPAutoTLS = false;
          $mail->CharSet  = "utf-8";
          $mail->Username = 'aresweb';// SMTP username
          $mail->Password = 'Ares20873360'; // SMTP password
          $mail->SMTPSecure = 'ssl';// Enable TLS encryption, `ssl` also accepted
          $mail->Port = 465; // TCP port to connect to
          $mail->setFrom('edm@ares.com.tw', '資通電腦電子報');
          $mail->AddAddress($email);
          $mail->Subject = "資通電腦電子報訂閱確認";
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
<body>歡迎訂閱資通電腦 ARES 電子報，請點擊以下的連結，完成最後的訂閱程序：<br /><br /><a href="https://www.ares.com.tw/epaper/confirm/?uid={$uid}">https://www.ares.com.tw/epaper/confirm/?uid={$uid}</a> <br /><br />如果點擊以上連接沒有作用，請複製下來再貼到瀏覽器的網址列上，然後按 Enter 即可。<br /><br />若您並沒有訂閱本電子報，請忽略本郵件。<br /><br />感謝您！<br /><br />--<br />資通電腦股份有限公司<br />ARES International Corp.<br /><a href="https://www.ares.com.tw">https://www.ares.com.tw</a><br /></body></html>
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
  exit();
}

// if no POST
header('Location: index.php');
// echo '#';

