<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $table = @trim(htmlspecialchars(stripslashes($_POST['table']),  ENT_QUOTES));
  $column = @trim(htmlspecialchars(stripslashes($_POST['column']),  ENT_QUOTES));
  $tag = @$_POST['tag'];
  $ares = "sqlite:/example/global/events.db";
  try{
      $db = new PDO($ares);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $msg['db'] = true;
  }catch (PDOException $e) {
      $msg['db'] = false;
      $log = $e->getMessage();
  }
  $query = "SELECT * FROM {$table} WHERE {$column} like '%{$tag}%' ORDER BY date DESC";
  $rs = $db->query($query)->fetchAll();
  $_html = '';
  foreach ($rs as $row) {
    $_html = $_html.'<tr><td>'.$row['id'].'</td><td>'.$row['date'].'</td><td>'.$row['title'].'</td></tr>';
  }
  $rs=null;
  $db=null;
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <title>search</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
label{
  width: 60px;
}
input{
  width: calc(100% - 70px);
}
form div{
  margin-bottom:16px;
}
</style>
<body>
<div class="container">
  <div>table：news、best_practice、articles</div>
  <div>column：id、date、title、content、redirect(href)、news_name、product</div><br>
  <a href="./" class="btn btn-info">返回上一頁</a>
</div>
<br><br>
<form class="container" method="post" action="">
  <div><label for="table">table</label><input id="table" name="table" type="text"></div>
  <div><label for="column">column</label><input id="column" name="column" type="text"></div>
  <div><label for="tag">關鍵字</label><input id="tag" name="tag" type="text"></div>
  <div class="text-center">
    <input type="submit" value="送出">
  </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
?>
<h3 class="text-center">結果</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>時間</th>
      <th>標題</th>
    </tr>
  </thead>
  <tbody>
<?= $_html ? $_html : '查無此資料'; ?>
  </tbody>
</table>
<?php
}
?>
</body>
</html>