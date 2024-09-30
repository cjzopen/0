<?php

try {
  $db = new PDO('sqlite:/sites/global/events.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}

$case_name = @trim(htmlspecialchars(stripslashes($_GET['case']),  ENT_QUOTES));
$product='PKI';
$query = sprintf("SELECT * FROM news ORDER BY date DESC");
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
  $years[] = substr($row['date'], 0, 7);
  $links[] = strtolower($row['news_name']);
  $outers[] = ($row['redirect']);
}
if (empty($case_name)) {
  //沒有值
  include 'list.php';
}elseif (in_array(urldecode(strtolower(rtrim($case_name))), $links)) {
  if(substr($case_name, 0, 4) == 'http'){
    header("Location: ".$case_name);
    exit;
  }else{
    header("Location: https://www.ares.com.tw/events/".$case_name);
    exit;
  }
  // 文章
  // $link = strtolower(rtrim($case_name));
  // include "article.php";
}else {
  // echo 'no';
  include '../404.php';
}
?>