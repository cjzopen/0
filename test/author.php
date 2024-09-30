<?php
$error = '';
if (isset($_POST['submitted'])) {
  $name = @htmlspecialchars(stripslashes($_POST['name']), ENT_QUOTES);
  $img = @htmlspecialchars(stripslashes($_POST['img']), ENT_QUOTES);
  $description = @stripslashes($_POST['description']);
  $job_title = @stripslashes($_POST['job_title']);
  $email = @htmlspecialchars(stripslashes($_POST['email']), ENT_QUOTES);
  $phone = @htmlspecialchars(stripslashes($_POST['phone']), ENT_QUOTES);
  $link = @htmlspecialchars(stripslashes($_POST['link']), ENT_QUOTES);

  $img = !empty($img) ? "'$img'" : "NULL";
  $description = !empty($description) ? "'$description'" : "NULL";
  $job_title = !empty($job_title) ? "'$job_title'" : "NULL";
  $email = !empty($email) ? "'$email'" : "NULL";
  $phone = !empty($phone) ? "'$phone'" : "NULL";
  $link = !empty($link) ? "'$link'" : "NULL";
  if($name){
    try{
      $db = new PDO("sqlite:/sites/global/author.db");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $msg['db'] = true;
    }catch (PDOException $e) {
      $msg['db'] = false;
      $log = $e->getMessage();
    }
    $query = "INSERT INTO author (name,img, description, job_title, email, phone, link) VALUES ( '{$name}', {$img}, {$description}, {$job_title}, {$email}, {$phone}, {$link})";

    $rs = $db->exec($query);
    header("Refresh:0");

  }else{
    $error = '不正確';
  }
}

?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title>????</title>
  <meta name="description" content="">
</head>
<body>
  <p class="error"><?php echo $error; ?></p>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <p>姓名：<input type="text" name="name" id="name" value="<?=@$name?>" /></p>
    <p>圖片：<input type="text" name="img" id="img" value="<?=@$img?>" /></p>
    <p>描述：<input type="text" name="description" id="description" value="<?=@$description?>" /></p>
    <p>職位：<input type="text" name="job_title" id="job_title" value="<?=@$job_title?>" /></p>
    <p>email：<input type="meail" name="email" id="email" value="<?=@$email?>" /></p>
    <p>phone：<input type="phone" name="phone" id="phone" value="<?=@$phone?>" /></p>
    <p>連結：<input type="text" name="link" id="link" value="<?=@$link?>" /></p>
    <p id="submit"><input type="submit" name="submitted" id="signin" value="輸入" /></p>
  </form>
</body>
</html>