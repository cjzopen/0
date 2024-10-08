<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Access-Control-Allow-Origin: https://www.google.com/');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email		= @htmlspecialchars(stripslashes($_POST['email']),		ENT_QUOTES);
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    if (!preg_match($pattern, $email)) {
        $msg = 'blocked';
    }else{
    	putenv("TZ=ASIA/TAIPEI");
    	$submitDate = date("Y-m-d H:i:s", time());
    	$ip = $_SERVER['REMOTE_ADDR'];

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
        //如果有訂閱
        if($num!==0){
            // echo 'nodata';
            // exit();
        // }
            $query = "DELETE FROM mailinglist WHERE email='{$email}'";

            $rs = $db->exec($query);
        }
        //不管有沒有訂都給他退訂
        $rs = $db->query("SELECT * FROM unsubscribe WHERE email='{$email}'");
        $row = $rs->fetchAll();
        $num = count($row);
        if($num==0){
            $query = "INSERT INTO unsubscribe (email, `date`) VALUES ( '{$email}', '{$submitDate}')";

            $rs = $db->exec($query);
        }

        //主動訂閱人數
        $result = $db->query("SELECT COUNT(email) FROM mailinglist WHERE confirmed='1'");
        $total = $result->fetchColumn();

            //收信者與寄信
        // include_once "/example/global/phpMailer/PHPMailerAutoload.php";
        include_once "/example/global/PHPMailer6/src/Exception.php";
        include_once "/example/global/PHPMailer6/src/PHPMailer.php";
        include_once "/example/global/PHPMailer6/src/SMTP.php";
        include_once "/example/global/PHPMailer6/src/OAuth.php";
        $mail = new PHPMailer();
        include "/example/global/PHPMailer6/ssl_setting.php";
        $mail->setFrom('edm@ares.com.tw', '電子報');
        // $mail->AddEmbeddedImage('banner.png', 'banner');
        $mail->AddAddress('m1_all@ares.com.tw', '行銷部');
        $mail->Subject = "解除訂閱通知";
        $mail->isHTML(true);

        //信件樣式
        $body = <<<MAILBODY
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>免費諮詢</title>
</head><style type="text/css">
<!-- body {font-family: "微軟正黑體", sans-serif;font-size: 13px;}
--> </style>
<body>
減少了一名訂閱者:<br />
<br />
電子郵件信箱: {$email}<br />
解除訂閱時間: {$submitDate}<br />
<br />
目前總訂閱人數: {$total}<br />
</body>
</html>
MAILBODY;
        $mail->MsgHTML($body);
        $mail->send();

        $db = null;
        $rs = null;
    	$msg = 'success';
    }
	echo $msg;
    exit();
}

// if no POST
header('Location: index.php');


