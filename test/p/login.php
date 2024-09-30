<?php
$error = '';
if (isset($_POST['submitted'])) {
  $id = @htmlspecialchars(stripslashes($_POST['id']), ENT_QUOTES);
  $pw = @htmlspecialchars(stripslashes($_POST['pw']), ENT_QUOTES);
  if($pw == "7hbp2km7ca64rxew"){
    if ($id == "cj1895" || $id == "clair.chueh" || $id == "ouying" || $id == "iris1858" || $id == "ting1890") {
      $_SESSION['www-ares'] = $id;
      header('Location: ./');
      exit();
    }
  }
  $error = '帳號或密碼不正確';
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
    <p>帳號：<input type="text" name="id" id="id" value="<?=@$id?>" /></p>
    <p>密碼：<input type="password" name="pw" id="pw" value="<?=@$pw?>" /></p>
    <p id="submit"><input type="submit" name="submitted" id="signin" value=" 登入 " /></p>
  </form>
</body>
</html>