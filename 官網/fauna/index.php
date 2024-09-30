<?php
require('ip.php');
$logdb = "sqlite:log.db";
try{
    $db = new PDO($logdb);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg['db'] = true;
}catch (PDOException $e) {
    $msg['db'] = false;
    $log = $e->getMessage();
}
$query = "SELECT * FROM log ORDER BY rid DESC LIMIT 25";
$rs = $db->query($query)->fetchAll();
$_html = '';
foreach ($rs as $row) {
  $_html = $_html.'<tr><td>'.$row['action'].'</td><td>'.$row['post_time'].'</td><td>'.$row['ip'].'</td><td>'.$row['title'].'</td></tr>';
}
$rs=null;
$db=null;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <title>最新消息</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
.flex-box {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
}
.flex-center{
  -webkit-justify-content:center;
  justify-content: center;
  -ms-flex-pack: center;
}
.flex-box>div{
  padding-top:20px;
  width: 275px;
}
.flex-box a {
    width:220px;
    height:220px;
    border-radius:20%/20%;
    background-color:#2980b9;
    position:relative;
    text-align:center;
  align-items: center;
  align-content:center;
  color:#f1f1f1;
  text-decoration:none;
  font-size: 18px;
  font-weight:600;
}

.flex-box a::before, .flex-box a::after {
    content:'';
    position:absolute;
    z-index:-1;
}

.flex-box a::before {
    border-radius: 2%/30%;
    background-color:#2980b9;
    top: 33px;
    bottom: 33px;
    right: -2px;
    left: -2px;
}

.flex-box a::after {
    border-radius: 30%/2%;
    background-color:#2980b9;
    left: 33px;
    right: 33px;
    top: -2px;
    bottom: -2px;
}
</style>
<body>
<br><br>
<nav class="container">
  <div class="row">
    <div class="flex-box">
      <!-- <div><a class="flex-box flex-center" href="upload.php">上傳圖片</a></div> -->
      <div><a class="flex-box flex-center" href="add.php">新增</a></div>
      <div><a class="flex-box flex-center" href="update.php">修改</a></div>
      <!-- <div><a class="flex-box flex-center" href="delete.php">刪除</a></div> -->
      <!-- <div><a class="flex-box flex-center" href="best_practice.php">成功案例</a></div> -->
      <!-- <div><a class="flex-box flex-center" href="articles.php">相關文章</a></div> -->
      <!-- <div><a class="flex-box flex-center" href="epaper/">電子報<br>no log</a></div> -->
      <!-- <div><a class="flex-box flex-center" href="argoerp/">ArgoERP<br>no log</a></div> -->
      <div><a class="flex-box flex-center" href="investor.php">營業收入</a></div>
      <div><a class="flex-box flex-center" href="investorevent.php">重大訊息</a></div>
      <div><a class="flex-box flex-center" href="search.php">events 搜尋</a></div>
    </div>
  </div>
</nav>
<br>
<h3 class="text-center">log (最近 25 筆記錄)</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>動作</th>
      <th>時間</th>
      <th>id/ip</th>
      <th>標題</th>
    </tr>
  </thead>
  <tbody>
<?php echo $_html; ?>
  </tbody>
</table>
</body>
</html>