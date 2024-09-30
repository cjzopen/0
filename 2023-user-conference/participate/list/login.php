<?php
$error = '';
if (isset($_POST['submitted'])) {
	$id	= @htmlspecialchars(stripslashes($_POST['id']),	ENT_QUOTES);
	$pw = @htmlspecialchars(stripslashes($_POST['pw']),	ENT_QUOTES);
	if ($id == "ares" && $pw == "aares") {
		$_SESSION['login'] = true;
		header('Location: ./');
		exit();
	} else {
		$error = '帳號或密碼不正確';
	}
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
<title>線上報名人數統計</title>
<style type="text/css">
body {
	font-size:13px;
	font-family: "Apple LiGothic Medium", "Microsoft JhengHei", "Microsoft YaHei", sans-serif;
	color: #534EA2;
	}
form { margin: 0 auto; padding: 10px 10px; width: 300px;}
input[type="text"], input[type="password"]{
	padding: 5px;
	font-family: "Microsoft JhengHei", Arial, sans-serif;
	color: #555555;
	width: 180px;
	height: 25px;
	border: none;
	padding-left: 37px;
	line-height: 25px;
	margin: 0 23px 13px 0;
	border: solid 1px #D4D3E5;
}
#id { background: url(img/username.png) no-repeat #fff 10px 50%;}
#pw { background: url(img/password.png) no-repeat #fff 10px 50%;}
#signin {
	background: url(img/button-1.png) no-repeat bottom left;
	width: 108px;
	height: 36px;
	border: none;
	margin: 0 auto;
	color: #FFFFFF;
	font-family: "Apple LiGothic Medium", "Microsoft JhengHei", "Microsoft YaHei", sans-serif;
	font-weight: bold;
	text-align: center;
	margin-left: 96px;
}
#signin:hover { background: url(img/button-2.png) no-repeat bottom left; cursor: pointer;}
.error {color: #FF0000; text-align: center;}
</style>
</head>

<body>
	<p class="error"><?php echo $error; ?></p>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<p>帳號：<input type="text" name="id" id="id" value="<?=@$id?>" /></p>
	    <p>密碼：<input type="password" name="pw" id="pw" value="<?=@$pw?>" /></p>
	    <p id="submit"><input type="submit" name="submitted" id="signin" value=" 登入 " /></p>
    </form>
</body>
</html>
