<?php
$page=array();
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function aimg($src,$caption,$class){
  if (null === $src) {
    $src = '/public/img/what/whatsmes-banner-1440.jpg';
  }
  if (null === $caption) {
    $caption = '';
  }
  if (null === $class) {
    $class = 'fff-color';
  }
  $pageBanner = '<figure class="slider bg-lazyload" data-image="'.$src.'"><figcaption class="d-flex '.$class.'">'.$caption.'</figcaption></figure>';
  echo $pageBanner;
}

// menu 要用
$path = $_SERVER['PHP_SELF'];

$global_db = "sqlite:/example/global/en/events.db";
$product = 'ciMes';
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}
// 最新消息最新年份
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
$news = $rs->fetch(PDO::FETCH_ASSOC);
$news_last_year = substr($news['date'], 0, 4);
$rs=null;