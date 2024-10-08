<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$product = @$_POST['product'];
	$company	= @htmlspecialchars(stripslashes($_POST['company']),	ENT_QUOTES);
	// $department = @htmlspecialchars(stripslashes($_POST['department']),	ENT_QUOTES);
	$name		= @htmlspecialchars(stripslashes($_POST['name']),		ENT_QUOTES);
	// $jobTitle	= @htmlspecialchars(stripslashes($_POST['jobTitle']),	ENT_QUOTES);
	$phone		= @htmlspecialchars(stripslashes($_POST['phone']),		ENT_QUOTES);
	// $mobile		= @htmlspecialchars(stripslashes($_POST['mobile']),		ENT_QUOTES);
	$email		= @htmlspecialchars(stripslashes($_POST['email']),		ENT_QUOTES);
	// $request	= @$_POST['request'];
	// $plan		= @$_POST['plan'];
	// $budget		= @$_POST['budget'];
	// $visit		= @$_POST['visit'];
	// $epaper		= @$_POST['epaper'];
	// $knowFrom	= @$_POST ["knowFrom"];
	// $union		= @htmlspecialchars(stripslashes($_POST['union']),	ENT_QUOTES);
	// $kfOther	= @htmlspecialchars(stripslashes($_POST['kfOther']),	ENT_QUOTES);
	$otherRequire = @htmlspecialchars(stripslashes($_POST['otherRequire']),	ENT_QUOTES);

  $msg =array();

  $pattern = '(http|script|UPDATE|update|delete|DELETE|insert|INSERT|\.js|xss|\/\/|\<|\>)';
  if(preg_match($pattern, $company) === 1 || preg_match($pattern, $name) === 1 || preg_match($pattern, $phone) === 1 || preg_match($pattern, $otherRequire) === 1 || preg_match($pattern, $email) === 1) {
    $msg['ending'] = 'blocked';
    echo json_encode($msg);
    exit();
  }


  $secret = '6LdqGHgUAAAAAOnPBzkeqG9JvmglKQX2GJ9OtDX7';
  $gRecaptchaResponse = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
  $ip = $_SERVER['REMOTE_ADDR'];
  $domainName = $_SERVER['HTTP_HOST'];

  include_once ("/example/global/recaptcha/src/autoload.php");
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);
  $resp = $recaptcha->setExpectedHostname($domainName)
                  ->setExpectedAction('homepage')
                  ->setScoreThreshold(0.5)
                  ->verify($gRecaptchaResponse, $ip);
  if ($resp->isSuccess()) {
    // $msg['ending']=$resp->toArray();
  } else {
    $errors = $resp->getErrorCodes();
    $msg['ending']='recaptchaFail';
    $msg['recaptcha']=$errors;
    echo json_encode($msg);
    exit();
  }


	putenv("TZ=ASIA/TAIPEI");
	$submitDate = date("Y-m-d H:i:s", time());
  $web_link = 'https://edm.ares.com.tw/dm/20190409-egui-oracle/';


  try{
    $db = new PDO("sqlite:/example/global/consult.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['ending'] = 'db';
    $log = $e->getMessage();
    echo json_encode($msg);
    exit();
  }

  $query = "INSERT INTO consult (submitDate, ip, product, company, name, phone, email, otherRequire) VALUES ( '{$submitDate}', '{$ip}', '{$product}', '{$company}', '{$name}', '{$phone}', '{$email}', '{$otherRequire}')";

  $rs = $db->exec($query);

  include_once "/example/global/PHPMailer6/src/Exception.php";
  include_once "/example/global/PHPMailer6/src/PHPMailer.php";
  include_once "/example/global/PHPMailer6/src/SMTP.php";
  include_once "/example/global/PHPMailer6/src/OAuth.php";
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
    $mail->setFrom('marketing@ares.com.tw', 'eGUI');
    $mail->AddAddress("franklee@ares.com.tw", "李福寬"); // Add a recipient
    $mail->AddAddress("wch@ares.com.tw", "吳建宏");
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('m1_all@ares.com.tw', '行銷部');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    //Content
    $mail->isHTML(true);// Set email format to HTML
    // $mail->AddEmbeddedImage('./img/mailBanner.jpg', 'banner');
$body = <<<MAILBODY
<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title></title>
</head><style type="text/css">body {font-family: "微軟正黑體", sans-serif;font-size: 13px;text-align: center;background-color: #ebebeb;}
table {width: 500px;margin: 30px auto;text-align: left;border-collapse: collapse;background-color: #fff;}
a, a:link, a:hover {color: #ea2126;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}
.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}
#footer {text-align: right;margin-top: 0;font-size: 11px;color: #ea2126;}td {margin: 0;padding: 8px;}
strong { color: #ea2126; }#content {padding: 0;}#footer td { border-top: 2px solid #ea2126; }</style>
<body>
<table>
  <tr>
    <td><h1 style="white-space:nowrap;font-size:28px;color:#2858aa">{$product}</h1></td>
    <td id="link"><a href="{$web_link}">{$web_link}</a></td>
  </tr>
  <tr>
    <td colspan="2" id="content">
      <!-- <img src="https://edm.ares.com.tw/dm/20190328-eGUI-oracle/img/bg-2.png" alt="banner" width="500" height="140" style="display: block; border: 0;" /> -->
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:15px;">
      <table style="width:100%;">
        <tr class="data">
          <td class="bg">公司：</td>
          <td>{$company}</td>
        </tr>
        <tr class="data">
          <td class="bg">姓名：</td>
          <td>{$name}</td>
        </tr>
        <tr class="data">
          <td class="bg">電話：</td>
          <td>{$phone}</td>
        </tr>
        <tr class="data">
          <td class="bg">Email：</td>
          <td>{$email}</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr><td colspan="2"><ul><li>需求：<strong>{$otherRequire}</strong></li></ul></td></tr>
  <tr id="footer"><td colspan="2">{$submitDate}</td></tr></table></body></html>
MAILBODY;

    $mail->Subject = $product.' 免費諮詢服務 - 訪客登錄資料';
    $mail->Body  = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $msg['ending'] = 'success';
  }catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    $msg['ending'] = 'send';
    $msg['info'] = $mail->ErrorInfo;
  }

  $db = null;
  $rs = null;

	// echo $msg;
  header("Content-type: application/json");
  echo json_encode($msg);
  exit();
}

// if no POST
header('Location: index.php');


