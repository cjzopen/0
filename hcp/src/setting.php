<?php
$pageName='';
$page=array();
define('HOST_LINK', 'https://hcp.ares.com.tw/');
define('GLOBAL_DB', 'sqlite:/example/global/events.db');
define('PHP_WEB_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('AGE', date("Y") - 1980);
define('THE_PRODUCT', 'HCP');
// $nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$canonical='';

function aimg($src,$srcset,$alt,$caption,$class){
  $src = isset($src) ? $src : '/img/what/whatsmes-banner-1440.jpg';
  $srcset = isset($srcset) ? ' data-srcset="'.$srcset.'" sizes="(max-width: 1440px) 100vw, 1440px"' : '';
  $alt = isset($alt) ? $alt : '';
  $class = isset($class) ? $class : 'fff-color';
  $caption = isset($caption) ? '<figcaption class="d-flex '.$class.'">'.$caption.'</figcaption>' : '';
  $pageBanner = '<figure class="slider d-none d-md-block bgs-cover bg-lazyload" data-image="'.$src.'" data-view="767">'.$caption.'</figure>';
  echo $pageBanner;
}

function ie_if_else_echo($IE,$notIE){
  if(!empty($_SERVER['HTTP_USER_AGENT']) && (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false))){
    echo $IE;
  }else{
    echo $notIE;
  }
}

// menu 要用
$path = $_SERVER['PHP_SELF'];
$hreflang = array();
$product = THE_PRODUCT;
// try {
//   $db = new PDO(GLOBAL_DB);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
// }
// // 最新消息最新年份
// $rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
// $news = $rs->fetch(PDO::FETCH_ASSOC);
// $news_last_year = substr($news['date'], 0, 4);
// // 知識分享最新年份
// $rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
// $knowledge = $rs->fetch(PDO::FETCH_ASSOC);
// $knowledge_last_year = substr($knowledge['date'], 0, 4);
$rs=null;

// 是否要有諮詢表單
$contact=1;