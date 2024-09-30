<?php
header('Access-Control-Allow-Origin: https://www.google.com');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_HOST'] == 'www.ares.com.tw') {
  $productAll = @$_POST['product'];
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
  $kfOther  = @htmlspecialchars(stripslashes($_POST['kfOther']),  ENT_QUOTES);
  $otherRequire = @htmlspecialchars(stripslashes($_POST['otherRequire']), ENT_QUOTES);
  $msg = array();



  $length = count($productAll);
  for($i=0; $i<$length; $i++){
    $everyProduct= implode (",", $productAll);
  }
  if(count($knowFrom)){
    $length = count($knowFrom);
    for($i=0; $i<$length; $i++){
      // if($knowFrom[$i] == "協會"){
      //   $knowFrom[$i] = $knowFrom[$i] ."(".$union.")";
      // }
      if($knowFrom[$i] == "其他"){
        $knowFrom[$i] = $knowFrom[$i] ."(".$kfOther.")";
      }
      $knowFromAll= implode (",", $knowFrom);
    }
  }else{
    $knowFromAll='';
  }

  $ip = $_SERVER['REMOTE_ADDR'];


  $response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
  $privatekey = "6LcpDzsUAAAAAK56V74Q_MTPgYaJyAhwytvyRZPe";
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$privatekey.'&response='.$response);
  $responseData = json_decode($verifyResponse);
  if($responseData->success){
    // $msg['ending'] = 'success';
  }else{
    $msg['ending'] = 'recaptchaFail';
    $msg['recaptcha'] = $responseData->getErrorCodes();
    echo json_encode($msg);
    exit();
  }

  // require_once '/sites/global/recaptcha-master/src/autoload.php';
  // $recaptcha = new \ReCaptcha\ReCaptcha($privatekey);
  // // $recaptcha = new \ReCaptcha\ReCaptcha($privatekey, new \ReCaptcha\RequestMethod\CurlPost());
  // $resp = $recaptcha->setExpectedHostname('ares.com.tw')
  //                 ->verify($response, $ip);
  // if ($resp->isSuccess()) {
  //   // Verified!
  // } else {
  //   $errors = $resp->getErrorCodes();
  //   $msg['ending'] = 'recaptchaFail';
  //   $msg['recaptcha'] = $errors;
  //   echo json_encode($msg);
  //   exit();
  // }



  // $response   = isset($_POST["g-recaptcha-response"]) ? $_POST['g-recaptcha-response'] : null;
  // $privatekey = "6LcpDzsUAAAAAK56V74Q_MTPgYaJyAhwytvyRZPe";

  // $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  // curl_setopt($ch, CURLOPT_HEADER, 0);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // curl_setopt($ch, CURLOPT_POST, 1);
  // curl_setopt($ch, CURLOPT_POSTFIELDS, array(
  //     'secret' => $privatekey,
  //     'response' => $response,
  //     'remoteip' => $_SERVER['REMOTE_ADDR']
  // ));

  // $resp = json_decode(curl_exec($ch));
  // curl_close($ch);

  // grab recaptcha library
  // require_once "recaptchalib.php";

  // // your secret key
  // $secret = "6LcpDzsUAAAAAK56V74Q_MTPgYaJyAhwytvyRZPe";

  // // empty response
  // $response = null;

  // // check secret key
  // $reCaptcha = new ReCaptcha($secret);

  // // if submitted check response
  // if ($_POST["g-recaptcha-response"]) {
  //   $response = $reCaptcha->verifyResponse(
  //     $_SERVER["REMOTE_ADDR"],
  //     $_POST["g-recaptcha-response"]
  //   );
  // }
  // if ($resp->success) {
  $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
  if (!preg_match($pattern, $email)) {
    $msg['ending'] = 'blocked';
    echo json_encode($msg);
    exit();
  }
  $pattern = '(http|script|UPDATE|update|delete|DELETE|insert|INSERT|\.js|xss|\/\/|\<|\>)';
  if(preg_match($pattern, $company) === 1 || preg_match($pattern, $department) === 1 || preg_match($pattern, $name) === 1 || preg_match($pattern, $jobTitle) === 1 || preg_match($pattern, $phone) === 1 || preg_match($pattern, $mobile) === 1 || preg_match($pattern, $otherRequire) === 1) {
    $msg['ending'] = 'blocked';
    echo json_encode($msg);
    exit();
  }


    putenv("TZ=ASIA/TAIPEI");
    $submitDate = date("Y-m-d H:i:s", time());
    $date = date('Y-m-d');


    try{
      $db = new PDO("sqlite:/sites/global/consult.db");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
      $msg['db'] = 'newDbError';
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

    $query = "INSERT INTO consult (submitDate, ip, product, company, department, name, jobTitle, phone, mobile, email, request, budget, knowFrom, otherRequire) VALUES ( '{$submitDate}', '{$ip}', '{$everyProduct}', '{$companyEncrypt}', '{$department}', '{$nameEncrypt}', '{$jobTitle}', '{$phoneEncrypt}', '{$mobileEncrypt}', '{$emailEncrypt}', '{$request}',  '{$budget}',  '{$knowFromAll}', '{$otherRequire}')";

    $rs = $db->exec($query);
    $db = null;
    $rs = null;

//各產品對應收信者與寄信
    include_once "/sites/global/phpMailer/PHPMailerAutoload.php";

    function sendmail($product, $recipients, $body) {
      $mail = new PHPMailer();
      include "/sites/global/PHPMailer6/ssl_setting.php";
      $mail->isHTML(true);
      $mail->Encoding = "8bit";
      $mail->setFrom('Consult@ares.com.tw', '產品諮詢');
      $mail->AddEmbeddedImage('banner.png', 'banner'); //cid:banner

      foreach($recipients as $aresMailAddress => $aresPerson) {
         $mail->AddAddress($aresMailAddress, $aresPerson);
      }
      // $mail->AddAddress("cj1895@ares.com.tw", "cj");
      $mail->AddCC("m1_all@ares.com.tw", "行銷部");
      $mail->AddBCC('jenny@ares.com.tw', '汪曉芳');
      $mail->Subject = "官網諮詢 ( ".$product." ) - 訪客登錄資料";
      $mail->MsgHTML($body);
      $mail->send();
    }

    foreach ($productAll as $product) {

      //信件樣式
      $body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>免費諮詢</title>
</head><style type="text/css">
<!-- body {font-family: "微軟正黑體", sans-serif;font-size: 13px;text-align: center;background-color: #ebebeb;line-height: 1.5;}
table {width: 500px;margin:auto;text-align: left;border-collapse: collapse;background-color: #fff;}
body>table{margin:auto;}ul,ol{margin:0;}a, a:link a:hover{color:#2858aa;text-decoration: none;}img {border: 0; outline: 0; }#link {width: 400px;vertical-align: bottom;text-align: right;}.data {text-align: left;}.data td {border: 1px solid #989898;}.bg {background-color: #ebebeb;width:30%;}#footer {text-align: right;margin-top: 0;font-size: 11px;color: #2858aa;}td {margin: 0;padding: 8px;}strong { color: #2858aa; }#content {padding: 0;}#footer td { border-top: 2px solid #2858aa; }
--> </style>
<body>
<table>
  <tr>
    <td><h3 style="color:#2858aa;font-size: 1.5em;">資通官網諮詢：{$product}</h3></td>
  </tr>
  <tr>
    <td id="link"><a href="https://www.ares.com.tw/consult/">https://www.ares.com.tw/consult/</a></td>
  </tr>
  <tr>
    <td colspan="2" id="content">
      <img src="https://www.ares.com.tw/consult/banner.png" alt="資通電腦" width="500" height="140" style="display: block; border: 0;" />
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
          <td class="bg">部門：</td>
          <td>{$department}</td>
        </tr>
        <tr class="data">
          <td class="bg">姓名：</td>
          <td>{$name}</td>
        </tr>
        <tr class="data">
          <td class="bg">職稱：</td>
          <td>{$jobTitle}</td>
        </tr>
        <tr class="data">
          <td class="bg">電話：</td>
          <td>{$phone}</td>
        </tr>
        <tr class="data">
          <td class="bg">手機：</td>
          <td>{$mobile}</td>
        </tr>
        <tr class="data">
          <td class="bg">Email：</td>
          <td>{$email}</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <ul>
        <li>如何得知：<strong>{$knowFromAll}</strong></li>
        <li>預計導入費用：<strong>{$budget}</strong></li>
      </ul>
      <ul>
        <li>需求：<strong>{$otherRequire}</strong></li>
      </ul>
    </td>
  </tr>
  <tr id="footer">
    <td colspan="2">資通官網 - {$submitDate}</td>
  </tr>
</table>
</body>
</html>
MAILBODY;
      //各產品對應收信者
      include "/sites/global/PHPMailer6/add_address_check.php";
      sendmail($product, $addAddress, $body);
      include_once "/sites/global/crm/product-label-and-update-json.php";
    }

    //委外服務 與 政府專案 有另外一個資料庫
    if (in_array("outsourcing", $productAll)) {
      $product = '委外服務';
      $db2 = new PDO("sqlite:".$_SERVER['DOCUMENT_ROOT']."/db/submits.sl3");
      $query2 = "INSERT INTO OSC (submitDate, ip, company, department, name, jobTitle, phone, mobile, email, request, budget, knowFrom) VALUES ( '{$submitDate}', '{$ip}', '{$company}', '{$department}', '{$name}', '{$jobTitle}', '{$phone}', '{$mobile}', '{$email}', '{$request}', '{$budget}', '{$knowFromAll}')";
      $rs2 = $db2->exec($query2);

      $db2 = null;
      $rs2 = null;
    }
    if (in_array("GOV", $productAll)) {
      $product = '政府專案';
      $db2 = new PDO("sqlite:".$_SERVER['DOCUMENT_ROOT']."/db/submits.sl3");
      $query2 = "INSERT INTO OSC (submitDate, ip, company, department, name, jobTitle, phone, mobile, email, request, budget, knowFrom) VALUES ( '{$submitDate}', '{$ip}', '{$company}', '{$department}', '{$name}', '{$jobTitle}', '{$phone}', '{$mobile}', '{$email}', '{$request}', '{$budget}', '{$knowFromAll}')";
      $rs2 = $db2->exec($query2);

      $db2 = null;
      $rs2 = null;
    }
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
        include "/sites/global/PHPMailer6/ssl_setting.php";
        $mail->isHTML(true);
        $mail->Encoding = "8bit";
        $mail->setFrom('edm@ares.com.tw', '資通電子報');
        $mail->AddAddress($email);
        $mail->Subject = "電子報訂閱確認";

      //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>電子報訂閱確認</title>
</head><style type="text/css">
<!-- body {font-family: "微軟正黑體", sans-serif;font-size: 13px;}
a, a:link a:hover{color:#2858aa;text-decoration: none;}
--> </style>
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
<a href="https://www.ares.com.tw/epaper/">各期電子報</a><br />
<a href="https://www.ares.com.tw">資通電腦股份有限公司</a><br />
</body>
</html>
MAILBODY;
        $mail->MsgHTML($body);
        $mail->send();

        $db = null;
        $rs = null;
      }
    }
    $msg['ending'] = 'success';
  // }else{
    // $msg['ending'] = 'recaptchaNoChecked';
  // }

  echo json_encode($msg);
  exit();
}

// if no POST
header('Location: index.php');


