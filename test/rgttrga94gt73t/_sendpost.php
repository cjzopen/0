<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $send_title = @htmlspecialchars(stripslashes($_POST['send_title']), ENT_QUOTES);
  $send_from = @htmlspecialchars(stripslashes($_POST['send_from']), ENT_QUOTES);
  $send_to = htmlspecialchars(stripslashes($_POST['send_to']), ENT_QUOTES).'@ares.com.tw';
  $category = $_POST['category'];
  $name = $_POST['name'];
  $company = $_POST['company'];
  $link = $_POST['link'];
  $content = @$_POST['content'];
  $msg = array();
  $send_name = '戰績捷報';
  if($send_from=='ting1890'){
    $send_name='Ting (黃思婷)';
  }
  if($send_from=='ouying'){
    $send_name='Ouying (歐音)';
  }
  $send_from.='@ares.com.tw';

  include_once "/sites/global/PHPMailer6/src/Exception.php";
  include_once "/sites/global/PHPMailer6/src/PHPMailer.php";
  include_once "/sites/global/PHPMailer6/src/SMTP.php";
  include_once "/sites/global/PHPMailer6/src/OAuth.php";
  $mail = new PHPMailer();
  try {
    include "/sites/global/PHPMailer6/ssl_setting.php";
    $mail->setFrom($send_from, $send_name);
    $mail->AddAddress($send_to);
    $mail->Subject = $send_title;
    $mail->isHTML(true);
    // $mail->AddEmbeddedImage('banner.jpg', 'banner');

        //信件樣式
    $body = <<<MAILBODY
<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width" /><meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /><title>戰績捷報</title><style>img{border:none;-ms-interpolation-mode:bicubic;max-width:100%}body{background-color:#FCDEE1;font-family:"Apple LiGothic Medium","Microsoft JhengHei","Microsoft YaHei",Helvetica,sans-serif;-webkit-font-smoothing:antialiased;font-size:16px;line-height:1.7;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}table{border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%}table td{font-family:sans-serif;font-size:16px;vertical-align:top}.body{background-color:#FCDEE1;width:100%}.container{margin:0 auto !important;max-width:800px;padding:10px;width:800px}.content{box-sizing:border-box;display:block;margin:0 auto;max-width:800px;padding:10px}.main{background:#fff;border-radius:3px;width:800px}.wrapper{box-sizing:border-box;padding:60px}.content-block{padding-bottom:10px;padding-top:10px}.footer{clear:both;margin-top:10px;text-align:center;width:100%}.footer td, .footer p, .footer span, .footer a{color:#999;font-size:14px;text-align:center}h1,h2,h3,h4{color:#000;font-family:sans-serif;font-weight:700;line-height:1.4;margin:0;margin-bottom:30px}h1{font-size:24px;font-weight:700;text-align:left;text-transform:capitalize}p,ul,ol{font-family:sans-serif;font-size:16px;font-weight:normal;margin:0;margin-bottom:15px}p li, ul li, ol li{list-style-position:inside;margin-left:5px}a{color:#3498db;text-decoration:underline}.last{margin-bottom:0}.first{margin-top:0}.align-center{text-align:center}.align-right{text-align:right}.align-left{text-align:left}.clear{clear:both}.mt0{margin-top:0}.mb0{margin-bottom:0}.preheader{color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0}.powered-by a{text-decoration:none}hr{border:0;border-bottom:1px solid #333;margin:20px 0}@media only screen and (max-width: 620px){table[class=body] h1{font-size:20px !important;margin-bottom:10px !important}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a{font-size:16px !important}table[class=body] .wrapper, table[class=body] .article{padding:10px !important}table[class=body] .content{padding:0 !important}table[class=body] .container{padding:0 !important;width:100% !important}table[class=body] .main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important;width:100% !important}table[class=body] .img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}}</style></head><body><table role="presentation" border="0" cellpadding="0" cellspacing="0" align="left" style="text-align:left" bgcolor="#FCDEE1"><tr><td bgcolor="#FCDEE1" width="60">&nbsp;</td><td class="content-block"> <span class="">如無法看到完整訊息，<a href="https://edm.ares.com.tw/dm/report-of-success/{$link}" style="text-decoration:underline">請點選此處查看</a></span> <br></td></tr></table><table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"><tr><td bgcolor="#FCDEE1">&nbsp;</td></tr><table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"><tr><td bgcolor="#FCDEE1">&nbsp;</td><td class="container" width="800" style="width:800px" bgcolor="#ffffff"><table role="presentation" class="main" width="800" style="width:800px"><tr><td class="wrapper" style="padding:60px"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="656" style="width:656px"><tr><td><h1>賀 {$category} 小組同仁<span style="color:#00B4B4;font-size:34px">{$name}</span>取得<span style="color:#f66">{$company}</span>合約！</h1><hr>{$content}</td></tr></table></td></tr></table></td><td bgcolor="#FCDEE1">&nbsp;</td></tr></table></body></html>
MAILBODY;
    $mail->Body  = $body;
    $mail->send();

    $msg['send'] = 'exec';
  }catch (Exception $e) {
    // echo 'epaper subscribe error: '. $mail->ErrorInfo;
    $msg['send'] = 'sendError';
    $msg['info'] = $mail->ErrorInfo;
  }
  header("Content-type: application/json");
  echo json_encode($msg,true);
  exit();
}



