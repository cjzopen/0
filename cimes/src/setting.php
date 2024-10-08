<?php
$page=array();
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function aimg($src,$caption,$class){
  // $src = isset($src) ? $src : '/public/img/what/whatsmes-banner-1440.jpg';
  // $srcset = isset($srcset) ? ' data-srcset="'.$srcset.'" sizes="(min-width: 1440px) 1440px,100vw"' : '';
  // $alt = isset($alt) ? $alt : '';
  if (null === $src) {
    $src = '/public/img/what/whatsmes-banner-1440.jpg';
  }
  if (null === $caption) {
    $caption = '';
  }
  if (null === $class) {
    $class = 'fff-color';
  }
  // $caption = isset($caption) ? $caption : '';
  // $class = isset($class) ? $class : 'fff-color';
  $pageBanner = '<figure class="slider d-none d-md-block bg-lazyload" data-image="'.$src.'"><figcaption class="d-flex '.$class.'">'.$caption.'</figcaption></figure>';
  echo $pageBanner;
}

function webp($img){
  if(isset($_SERVER['HTTP_ACCEPT']) && strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false) {
    preg_match('/\/public\/img(.*)(jpg|png)$/i', $img, $matches);
    return '/public/img/webp'.$matches[1].'webp';
  }else{
    return $img;
  }
}

// menu 要用
$path = $_SERVER['PHP_SELF'];

$global_db = "sqlite:/example/global/events.db";
$product = 'ciMes';
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}
// 最新消息最新年份
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY `date` DESC LIMIT 1");
$news = $rs->fetch(PDO::FETCH_ASSOC);
$news_last_year = substr($news['date'], 0, 4);
// 知識分享最新年份
try {
  $epaper_db = new PDO("sqlite:/example/global/epaper-article.db");
  $epaper_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}
$rs = $epaper_db->query("SELECT `date` FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ORDER BY `date` DESC LIMIT 1");
$knowledge = $rs->fetch(PDO::FETCH_ASSOC);
$knowledge_last_year = substr($knowledge['date'], 0, 4);
$rs=null;

$contact=1;