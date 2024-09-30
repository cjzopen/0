<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$data = array();
	$errors = array();
	$process = array();

	if (!isset($_POST['agreeToTerms'])) {
		$errors['agreeToTerms']	= '您必須接受隱私權聲明';
	}
	$data['name']    = trim($_POST['name']);
	$data['company'] = trim($_POST['company']);
	$data['dept']    = trim($_POST['dept']);
	$data['title']   = trim($_POST['title']);
	$data['phone']   = trim($_POST['phone']);
	$data['ext']   = trim($_POST['ext']);
	$data['mobile']   = trim($_POST['mobile']);
	$data['email']   = trim($_POST['email']);
	$data['isVeg']	 = trim($_POST['isVeg']);
	$data['ps']	 = trim($_POST['ps']);

	if (empty($data['name']))    { $errors['name']    = '請輸入姓名'; }
	if (empty($data['company'])) { $errors['company'] = '請輸入公司名稱'; }
	if (empty($data['dept']))    { $errors['dept']    = '請輸入部門名稱'; }
	if (empty($data['title']))   { $errors['title']   = '請輸入職稱'; }
	if (empty($data['phone']))    { $errors['phone']    = '請輸入聯絡電話'; }
	if (empty($data['email']))   { $errors['email']   = '請輸入 Email'; }	
	if (empty($data['isVeg']))  { $data['isVeg'] = '請選擇用餐方式'; }

	foreach ($data as $field => $value) {
		if (!isset($errors[$field])) {
			$data[$field] = htmlspecialchars(stripslashes($value), ENT_QUOTES);
		}
	}

	if (!isset($errors['email']) && !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $data['email'])) {
		$errors['email'] = 'Email 格式錯誤';
	}
	
	if (!empty($errors)) {
		
		/* Return error messages */
		$msg = '<ul>';
		foreach($errors as $key => $value) {
			$msg .= '<li>'.$value.'</li>';
		}
		$msg .= '</ul>';
		$process['success'] = false;
		$process['message'] = $msg;

	} else {

		extract($data);
		$confirm_email = '';
		$ip = $_SERVER['REMOTE_ADDR'];
		$date = date("Y-m-d H:i:s", time());
		
		/* Send email */
		include_once '../_assets/inc/phpMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer();
		include "/sites/global/PHPMailer6/ssl_setting.php";
		$mail->Encoding = "8bit";
		$mail->setFrom('edm@ares.com.tw', '資通電腦');

		$mail->AddAddress($email);
		$mail->isHTML(true);
		// $mail->AddCC("m1_all@ares.com.tw", "行銷部");
		$mail->Subject = "2023 資通電腦用戶大會 報名確認通知";
        $body = <<<MAILBODY
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<title></title>
</head>
<body style="font-family: 微軟正黑體, 'Helvetica Neue', Helvetica, Arial, sans-serif;background-color: #ddd;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #ddd;">
<tbody>
<tr>
<td align="center">
    <table width="600" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;line-height: 25px;background-color: #fff; padding: 20px;">
        <tr>
            <td><img src="https://edm.ares.com.tw/dm/2023-user-conference/img/banner.png" alt="數位翻轉、加速轉型用戶大會" width="600"></td>
        </tr>
        <tr>
            <td style="padding-bottom: 30px;">親愛的貴賓您好：
                <br />誠摯歡迎您前來參與【<a href="https://edm.ares.com.tw/dm/2023-user-conference/">數位翻轉、加速轉型</a>】資通電腦 2023 用戶大會。 
								<br />本次大會場地—台北國泰萬怡酒店備有精緻茶點與豐盛饗宴，更有陣容堅強的講師群，邀請您一同透過數位科技與安全議題解析，瞭解未來企業數位轉型趨勢！
								
						</td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px; padding-top: 10px;border-top: dashed 1px #009ABD;"><span style="color: #009ABD">時間地點：</span>
                <br />2023/11/8 (三) 09:30 – 16:30
                <br />台北國泰萬怡酒店（台北市中山區民生東路三段 6 號）2F 杜鵑廳+百合廳
                <br /><a href="https://bit.ly/3Yx2mcI">https://bit.ly/3Yx2mcI</a>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px; padding-top: 10px;border-top: dashed 1px #009ABD;"><span style="color: #009ABD">注意事項：</span>
                <br />
                <ol>
                    <li>活動當日於 09:30 開始提供報到服務</li>
                    <li>報名後，如不克出席，請於活動前聯絡以下窗口或資通業務</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px; padding-top: 10px;border-top: dashed 1px #009ABD;"><span style="color: #009ABD">活動聯絡人：</span>
                <br/>Iris Chang 張小姐 / 行銷部
                <br /><a href="mailto:iris1858@ares.com.tw">iris1858@ares.com.tw</a>
                <br />（02） 2522-1351 分機 383
            </td>
        </tr>
    </table>
		<br />
</td>
</tr>
</tbody>
</table>
</body>

</html>

MAILBODY;
		$mail->MsgHTML($body);
		if(!$mail->send()) {
			$confirm_email = $mail->ErrorInfo;
		} else {
			$confirm_email = '已寄出';
		}

		/* Write to database */
		putenv('TZ=ASIA/TAIPEI');
		$db = new PDO('sqlite:../_assets/db/signup.db');
		$sql = "INSERT INTO signup (ip, date, name, company, dept, title, phone, ext, mobile, email, confirm_email, isVeg, ps )
				VALUES ('$ip', '$date', '$name', '$company', '$dept', '$title', '$phone', '$ext', '$mobile', '$email', '$confirm_email', '$isVeg', '$ps')";
		$result = $db->exec($sql);
		$result = null;
		$db = null;

		$process['success'] = true;
	}
	
	header("Content-type: application/json");
	echo json_encode($process);
}
