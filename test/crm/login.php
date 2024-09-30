<?php
$error = '';
if (isset($_POST['submitted'])) {
  $pw = @htmlspecialchars(stripslashes($_POST['pw']), ENT_QUOTES);
  if($pw == "xhV8T6tYuYSC"){
      $_SESSION['consult-ares'] = 'okay';
      header('Location: ./?utm_source=secretary&utm_medium=phone_mail&utm_campaign=consult');
      exit();
  }
  $error = '密碼不正確';
}

?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title>登入</title>
  <meta name="description" content="">
</head>
<body>
  <p class="error"><?php echo $error; ?></p>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <p>密碼：<input type="password" name="pw" id="pw" value="<?=@$pw?>" /></p>
    <p id="submit"><input type="submit" name="submitted" id="signin" value=" 登入 " /></p>
  </form>
</body>
</html>