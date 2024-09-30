<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(!isset($_GET['uid'])){
  header('Location: ../index.php');
  exit;
}else{
  $uid = $_GET['uid'];
  try{
    $db = new PDO("sqlite:/sites/global/epaper.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg = 'newDbError';
    $log = $e->getMessage();
    echo $msg;
    exit();
  }
  $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NOT '1' AND uid='{$uid}'");
  $row = $rs->fetchAll();
  $num = count($row);
  if($num!=0){
    $email    = $row[0]['email'];
    $name     = $row[0]['name'];
    $company  = $row[0]['company'];
    // $department = $row[0]['department'];
    // $title    = $row[0]['title'];
    // $tel    = $row[0]['tel'];
    // $knowFrom   = $row[0]['knowFrom'];
    $privacy  = $row[0]['privacy'];
    putenv("TZ=ASIA/TAIPEI");
    $submitDate = date("Y-m-d H:i:s", time());

    $query = "UPDATE mailinglist SET confirmed = '1' WHERE uid='{$uid}'";

    $rs = $db->exec($query);

    $result = $db->query("SELECT COUNT(email) FROM mailinglist WHERE confirmed='1'");
    $total = $result->fetchColumn();


    //收信者與寄信
    // include_once "/sites/global/phpMailer/PHPMailerAutoload.php";
    include_once "/sites/global/PHPMailer6/src/Exception.php";
    include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
    include_once "/sites/global/PHPMailer6/src/SMTP.php";
    include_once "/sites/global/PHPMailer6/src/OAuth.php";
    $mail = new PHPMailer();
    include "/sites/global/PHPMailer6/ssl_setting.php";
    $mail->setFrom('edm@ares.com.tw', '資通電腦');
    // $mail->AddEmbeddedImage('banner.png', 'banner');
    $mail->AddAddress('m1_all@ares.com.tw', '行銷部');
    $mail->Subject = "訂閱通知";
    $mail->isHTML(true);

    //信件樣式
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
</head><style type="text/css">
<!-- body {font-family: "微軟正黑體", sans-serif;font-size: 13px;}
--> </style>
<body>
加入了一名訂閱者:<br />
<br />
完成訂閱時間: {$submitDate}<br />
<br />
公司: {$company}<br />
姓名: {$name}<br />
電子郵件信箱: {$email}<br />
已詳讀隱私權聲明: {$privacy}<br />
<br />
目前總訂閱人數: {$total}<br />
</body>
</html>
MAILBODY;
    $mail->MsgHTML($body);
    $mail->send();



    $mail->ClearAddresses();
    $mail->AddAddress($email, $name);
    $mail->AddBCC('m1_all@ares.com.tw', '行銷部');
    $mail->Subject = '親愛的'. $name.'，歡迎您訂閱資通電腦電子報！最精彩的消息都在這~不要錯過！';

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
  }else{
    header('Location: ../index.php');
    exit;
  }
}
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "newsletter";
$page['title']='訂閱確認 | 資通電腦';
$page['description']='';
$page['canonical']='';
$page['other']=array('<meta name="robots" content="noindex, nofollow">');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<script>
var dataLayer = window.dataLayer || [];
dataLayer.push({
  "event": "epaper_success",
  "who": "<?= substr($email,0,6);?>"
});
</script>
  <figure class="slider" data-image="/img/epaper/epaper-banner-400.png">
    <figcaption class="color-black">
      <h1><img src="/img/epaper/epaper-icon.svg" alt="*">電子報</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb">
      <div class="container">
        <ul class="row">
          <li>
            <a href="/"><span>首頁</span></a>
          </li>
          <li>
            <a href="../"><span>電子報</span></a>
          </li>
           <li>
            <a href="" onclick="return false;"><span>訂閱確認</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="container">
    <h2 class="text-center">訂閱確認</h2>
    <hr>
    <p>訂閱成功！<br>恭喜您完成訂閲電子報程序，您將定期收到我們寄發的 <a class="color-blue" href="https://www.ares.com.tw/epaper/">資通電子報</a>。</p>
    <p>因大量發送的緣故，屆時有可能會被系統歸類為垃圾信，還請麻煩點選為「這不是垃圾信」。</p>
    <!-- <div class="h3 pt-5">也許您還想知道</div>
    <div class="border border-info">
      <ul class="mb-0">
        <li class="color-orange border-bottom border-info">【HR】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2021-10-e-recruiting/talent-pool">為什麼人才資料庫對企業很重要？如何建置？</a></li>
        <li class="color-orange border-bottom border-info">【MES】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2021-05-cybersecurity/mes-factory-automation-3">利用「自動化系統整合架構」實現智慧化生產</a></li>
        <li class="color-orange border-bottom border-info">【資安】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2021-11-fortify/webinspect-how-to-scanning">如何用 Fortify WebInspect 掃描網站？</a></li>
        <li class="color-orange border-bottom border-info">【資安】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2023-05-cybersecurity/comodo-mdr-edr">什麼是MDR與EDR？網路防駭解決方案</a></li>
        <li class="color-orange border-bottom border-info">【財報】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2021-06-financial-reporting/financial-reporting-regulation">面對「公司治理 3.0」挑戰，上市櫃公司如何提升財報自編能力？</a></li>
        <li class="color-orange">【資安】<a class="color-black" href="https://marketing.ares.com.tw/newsletter/2023-12-knowbe4/websafety">社交工程攻擊是什麼？KnowBe4 培訓員工資安意識，防範勒索</a></li>
      </ul>
    </div> -->
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

