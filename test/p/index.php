<?php
// require('ip.php');
// $logdb = "sqlite:log.db";
// try{
//     $db = new PDO($logdb);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $msg['db'] = true;
// }catch (PDOException $e) {
//     $msg['db'] = false;
//     $log = $e->getMessage();
// }
// $query = "SELECT * FROM log ORDER BY rid DESC LIMIT 25";
// $rs = $db->query($query)->fetchAll();
// $_html = '';
// foreach ($rs as $row) {
//   $_html = $_html.'<tr><td>'.$row['action'].'</td><td>'.$row['post_time'].'</td><td>'.$row['ip'].'</td><td>'.$row['title'].'</td></tr>';
// }
// $rs=null;
// $db=null;
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<br><br>
<nav class="container text-center">
  <div class="row">
    <div class="col-12 border p-3"><a class="" href="add.php">新增</a></div>
    <!-- <div class="col-12 border p-3"><a class="" href="https://marketing.ares.com.tw/images.php">上傳圖片</a></div> -->
    <div class="col-12 border p-3 mt-3">修改</div>
    <ul class="list-group list-group-horizontal w-100">
      <li class="list-group-item w-25"><a class="" href="update.php">修改電子報文章</a></li>
      <li class="list-group-item w-25"><a class="" href="update-e.php">修改搶先e報</a></li>
      <li class="list-group-item w-25"><a class="" href="update-info.php">修改知識分享</a></li>
      <li class="list-group-item w-25"><a class="" href="update-ind.php">修改各期導覽頁</a></li>
    </ul>
  </div>
</nav>
<br>
</body>
</html>