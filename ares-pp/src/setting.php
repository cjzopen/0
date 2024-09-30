<?php
$page=array();
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function aimg($src,$caption,$class){
  $src = isset($src) ? $src : '/public/img/about/about-banner.png';
  $caption = isset($caption) ? $caption : '';
  $class = isset($class) ? $class : 'fff-color';
  $pageBanner = '<figure class="slider d-none d-sm-block black-bg"><img class="img-fluid w-100" loading="lazy" width="1920" height="200" src="'.$src.'" alt="*"><figcaption class="d-flex '.$class.'">'.$caption.'</figcaption></figure>';
  echo $pageBanner;
}

// menu 要用
$path = $_SERVER['PHP_SELF'];

$global_db = "sqlite:/sites/global/events.db";
$product = 'ARES-PP';
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
// 知識分享最新年份
$rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
$knowledge = $rs->fetch(PDO::FETCH_ASSOC);
$knowledge_last_year = substr($knowledge['date'], 0, 4);
$rs=null;
$db=null;
if($news_last_year < $knowledge_last_year){
  $news_last_year=$knowledge_last_year;
}