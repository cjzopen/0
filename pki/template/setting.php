<?php
$pageName='';
$page=array();
define('HOST_LINK', 'https://pki.ares.com.tw');
define('GLOBAL_DB', 'sqlite:/sites/global/events.db');
define('PHP_WEB_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('AGE', date("Y") - 1980);
// $nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function aimg($src,$srcset,$alt,$caption,$class){
  $src = isset($src) ? $src : '/img/pipa-banner.jpg';
  $srcset = isset($srcset) ? ' data-srcset="'.$srcset.'" sizes="(max-width: 1440px) 100vw, 1440px"' : '';
  $alt = isset($alt) ? $alt : '';
  $caption = isset($caption) ? $caption : '';
  $class = isset($class) ? $class : 'text-white';
  $pageBanner = '<figure class="banner"><img width="1440" height="200" loading="lazy" class="img-fluid" src="'.$src.'"'.$srcset.' alt="'.$alt.'"><figcaption class="d-flex align-items-center '.$class.'">'.$caption.'</figcaption></figure>';
  echo $pageBanner;
}
function redirect301($url){
  header('Link: <'.$url.'>; rel="canonical"');
  header("HTTP/2 301 Moved Permanently");
  header("Location: ".$url);
}

// function ie_if_else_echo($IE,$notIE){
//   if(!empty($_SERVER['HTTP_USER_AGENT']) && (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false))){
//     echo $IE;
//   }else{
//     echo $notIE;
//   }
// }

// menu 要用
$path = $_SERVER['PHP_SELF'];
$hreflang = array();
$product = 'PKI';
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
// $rs=null;