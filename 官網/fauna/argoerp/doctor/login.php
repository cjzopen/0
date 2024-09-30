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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
	<title></title>
	<meta name="description" content="">
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