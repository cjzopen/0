<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product = @$_POST['product'];
  $user = @$_POST['user'];
  $source = @$_POST['source'];
  $company  = @htmlspecialchars(stripslashes($_POST['company']),  ENT_QUOTES);
  $department = @htmlspecialchars(stripslashes($_POST['department']), ENT_QUOTES);
  $name     = @htmlspecialchars(stripslashes($_POST['name']),     ENT_QUOTES);
  $jobTitle   = @htmlspecialchars(stripslashes($_POST['jobTitle']),   ENT_QUOTES);
  $phone    = @htmlspecialchars(stripslashes($_POST['phone']),    ENT_QUOTES);
  $mobile   = @htmlspecialchars(stripslashes($_POST['mobile']),   ENT_QUOTES);
  $email    = @htmlspecialchars(stripslashes($_POST['email']),    ENT_QUOTES);
  $othersend = @trim($_POST['othersend']);
  $budget   = @$_POST['budget'];
  $knowFrom   = @$_POST ["knowFrom"];
  $kfOther  = @htmlspecialchars(stripslashes($_POST['kfOther']),  ENT_QUOTES);
  $otherRequire = @htmlspecialchars(stripslashes($_POST['otherRequire']), ENT_QUOTES);
  $msg = array();

  $length = count($knowFrom);
  for($i=0; $i<$length; $i++){
    if($knowFrom[$i] == "其他"){
      $knowFrom[$i] = $knowFrom[$i] ."(".$kfOther.")";
    }
    $knowFromAll= implode (",", $knowFrom);
  }

  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  $date = date('Y-m-d');
  $ip = $_SERVER['REMOTE_ADDR'];


  try{
    $db = new PDO("sqlite:/sites/global/consult_secretary.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['ending'] = 'newDbError';
    $log = $e->getMessage();
    echo json_encode($msg);
    exit();
  }

  $query = "INSERT INTO consult (submitDate, source, product, company, department, `name`, jobTitle, phone, mobile, email, knowFrom, budget, otherRequire) VALUES ( '{$submitDate}', '{$source}', '{$product}', '{$company}', '{$department}', '{$name}', '{$jobTitle}', '{$phone}', '{$mobile}', '{$email}', '{$knowFromAll}', '{$budget}', '{$otherRequire}')";

  $rs = $db->exec($query);
  $db = null;
  $rs = null;






  include_once "/sites/global/PHPMailer6/src/Exception.php";
  include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
  include_once "/sites/global/PHPMailer6/src/SMTP.php";
  include_once "/sites/global/PHPMailer6/src/OAuth.php";

  if (empty($product)) {
    $product='unknow';
  }
  switch ($product) {
    case 'GD-CRM':
    case 'Agile PLM':
    case 'ORACLE':
    case 'eGUI':
    case 'GV':
    case 'LT':
    case '財報自編':
      $addAddress = array(
        'dean1512@ares.com.tw' => 'Dean',
        'cllin@ares.com.tw' => '林青龍'
      );
      break;
    case 'ciMes':
      $addAddress = array(
        'jacky1423@ares.com.tw' => '曾文光',
        'ycning@ares.com.tw' => '甯怡彰'
      );
      break;
    case 'Comodo':
      $addAddress = array(
        'kevinhsu1414@ares.com.tw' => '徐康正',
        'huang140@ares.com.tw' => '黃峻嘯'
      );
      break;
    case 'HCP':
    case 'ARES-PP':
    case 'Fortify':
    case 'NCSIST':
    case 'uPKI':
    case 'outsourcing':
    case 'GOV':
    case 'SI':
    case '薪資密封袋':
      $addAddress = array(
        'huang140@ares.com.tw' => '黃峻嘯'
      );
      break;
    case 'AFEIS':
    case 'eAresBank':
    case 'FSTP':
    case 'ARES Nuntio':
    case 'SWIFT':
    case 'Ares Smart Core Banking System':
    case 'ARES Treasury System':
    case 'ARES Portfolio System':
    case 'Visual Pricing Tool':
    case 'Ares Cross Pricing System':
    case 'ISDASIMM':
    case 'FXNS':
    case 'AML':
    case 'KYC':
      $addAddress = array(
        'jenny@ares.com.tw' => 'jenny'
      );
      break;
    default:
      $addAddress = array(
        'jenny@ares.com.tw' => 'jenny'
        // 'cj1895@ares.com.tw' => 'test'
      );
  }

  $mail = new PHPMailer();
  try {
    //Server settings
    // $mail->SMTPDebug = 2; // Enable verbose debug output
    include "/sites/global/PHPMailer6/ssl_setting.php";

    //Recipients
    // if($source=='潛客來電（新竹）' || $source=='潛客來信（新竹）'){
    //   $mail->setFrom('daphnelu@ares.com.tw', '盧姵丞');
    // }elseif($source=='潛客來電（M1）'){
    //   $mail->setFrom('M1_ALL@ares.com.tw', '行銷部');
    // }else{
    //   $mail->setFrom('jenny@ares.com.tw', 'jenny');
    // }
    $mail->setFrom($user);
    // foreach($addAddress as $aresMailAddress => $aresPerson) {
    //   $mail->AddAddress($aresMailAddress, $aresPerson);
    // }
    if(isset($othersend)){
      if (strpos($othersend, ',') !== false) {
        $othersendArray = explode(',', $othersend);
        foreach($othersendArray as $aresMailAddress) {
          $mail->AddAddress($aresMailAddress,'');
        }
      }
      $mail->addAddress($othersend, '');
    }
    // $mail->addAddress('cj1895@ares.com.tw', 'test');

    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addAddress('m1_all@ares.com.tw', '行銷部');
    $mail->AddBCC('jenny@ares.com.tw', 'jenny');

    if($source=='潛客來電（新竹）' || $source=='潛客來信（新竹）' || $product=='ciMes'){
      $mail->AddBCC('daphnelu@ares.com.tw', '盧姵丞');
    }
    // $mail->AddBCC('jenny@ares.com.tw', '汪曉芳');
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
table {width: 500px;margin:auto;text-align: left;border-collapse: collapse;background-color: #fff;}body>table{margin:auto;}ul,ol{margin:0;}a, a:link a:hover{color:#cb1218;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}#footer {text-align: right;margin-top: 0;font-size: 11px;color: #cb1218;}td {margin: 0;padding: 8px;}strong { color: #cb1218; }#content {padding: 0;}#footer td { border-top: 2px solid #cb1218; }</style>
<body><table><tr><td><h3 style="color:#2858aa;font-size: 1.5em;">{$product} 諮詢</h3></td></tr><tr><td id="link"></td></tr><tr><td colspan="2" id="content"></td></tr><tr><td colspan="2" style="padding:15px;"><table style="width:100%;"><tr class="data"><td class="bg">公司：</td><td>{$company}</td></tr><tr class="data"><td class="bg">部門：</td><td>{$department}</td></tr><tr class="data"><td class="bg">姓名：</td><td>{$name}</td></tr><tr class="data"><td class="bg">職稱：</td><td>{$jobTitle}</td></tr><tr class="data"><td class="bg">電話：</td><td>{$phone}</td></tr><tr class="data"><td class="bg">手機：</td><td>{$mobile}</td></tr><tr class="data"><td class="bg">Email：</td><td>{$email}</td></tr></table></td></tr><tr><td colspan="2"><ul><li>如何得知資通產品：<strong>{$knowFromAll}</strong></li><li>預計導入費用為何：<strong>{$budget}</strong></li></ul><strong style="font-size:1.4em;">需求：</strong><p style="font-size:1.4em;">{$otherRequire}</p></td></tr><tr id="footer"><td colspan="2">{$submitDate}</td></tr></table></body></html>
MAILBODY;
    $mail->Subject = '潛客來電諮詢：'.$product;
    $mail->Body  = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';

    // update json file data.json
    include_once "/sites/global/crm/product-label-and-update-json.php";

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


