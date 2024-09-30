<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company    = @htmlspecialchars(stripslashes($_POST['company']),    ENT_QUOTES);
    $name       = @htmlspecialchars(stripslashes($_POST['name']),       ENT_QUOTES);
    $email      = @htmlspecialchars(stripslashes($_POST['email']),      ENT_QUOTES);
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
            $msg = 'newDbError';
            $log = $e->getMessage();
            echo $msg;
            exit();
        }
        $rs = $db->query("SELECT * FROM mailinglist WHERE email='{$email}' AND confirmed='1'");
        $row = $rs->fetchAll();
        $num = count($row);
        if($num!=0){
            $msg = 'repeat';
            echo $msg;
            exit();
        }
        // is NULL 要改成 !=1 最精確
        // $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NULL AND email='{$email}'");
        $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NOT '1' AND email='{$email}'");
        $row = $rs->fetchAll();
        $num = count($row);
        if($num!=0){
            $query = "UPDATE mailinglist SET uid = '{$uid}', date = '{$submitDate}', name = '{$name}', company = '{$company}', confirmed = '1' WHERE email='{$email}'";
            $rs = $db->exec($query);
        }else{
            $query = "INSERT INTO mailinglist (email, uid, `date`, name, company, privacy, confirmed) VALUES ( '{$email}', '{$uid}', '{$submitDate}', '{$name}', '{$company}', '{$privacy}', '1')";
            $rs = $db->exec($query);
        }

    $rs = $db->query("SELECT * FROM mailinglist WHERE confirmed IS NOT '1' AND uid='{$uid}'");
    $row = $rs->fetchAll();
    $num = count($row);
    if($num!=0){
        $email      = $row[0]['email'];
        $name       = $row[0]['name'];
        $company    = $row[0]['company'];
        // $department = $row[0]['department'];
        // $title      = $row[0]['title'];
        // $tel        = $row[0]['tel'];
        // $knowFrom   = $row[0]['knowFrom'];
        $privacy    = $row[0]['privacy'];
        putenv("TZ=ASIA/TAIPEI");
        $submitDate = date("Y-m-d H:i:s", time());
        $result = $db->query("SELECT COUNT(email) FROM mailinglist WHERE confirmed='1'");
        $total = $result->fetchColumn();


        //收信者與寄信
        include_once "/sites/global/phpMailer/PHPMailerAutoload.php";
                
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->SMTPAutoTLS = false;
        $mail->Host = 'mail.ares.com.tw';
        $mail->Encoding = "8bit";
        $mail->CharSet  = "utf-8";
        $mail->setFrom('edm@ares.com.tw', '電子報');
        // $mail->AddEmbeddedImage('banner.png', 'banner');
        $mail->AddAddress('m1_all@ares.com.tw', '行銷部');
        $mail->Subject = "訂閱通知";

        //信件樣式
$body = <<<MAILBODY
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>訂閱通知</title>
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

        $db = null;
        $rs = null;

        $msg = 'success';
        echo $msg;
        exit();
    }
}
// if no POST
header('Location: index.php');