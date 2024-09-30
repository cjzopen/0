<?php
if(empty($page['title'])){
  // $page['title']='人資系統推薦｜HCP每天處理400萬筆考勤，幫助500家大廠排班';
  $page['title']='HCP 人力資源管理系統';
}else{
  $page['title']=$page['title'].' - 資通電腦';
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title><?= $page['title'] ?></title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' : '' ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <?= !empty($canonical) ? '<link rel="canonical" href="'.$canonical.'">' : ''; ?>
  <?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : 'HCP 人力資源管理系統' ?>"><meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>"><meta property="og:image" content="<?= !empty($page['ogimg']) ? $page['ogimg'] : 'https://hcp.ares.com.tw/img/og.jpg' ?>"><meta property="og:url" content="<?= !empty($page['ogurl']) ? $page['ogurl'] : $canonical ?>"><meta property="og:type" content="website"><meta property="fb:app_id" content="900338710010817">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@Ares_Taiwan">
  <meta name="twitter:title" content="<?= !empty($page['title']) ? $page['title'] : 'HCP 人力資源管理系統' ?>">
  <meta name="twitter:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta name="twitter:image" content="<?= !empty($page['ogimg']) ? $page['ogimg'] : 'https://hcp.ares.com.tw/img/og.jpg' ?>">
<?php
if(is_array($hreflang) && count($hreflang) >=1){
  echo '<link rel="alternate" hreflang="zh" href="'.$canonical.'">';
  foreach($hreflang as $va ) {
    if(isset($va['lang']) && isset($va['url'])){
      echo '<link rel="alternate" hreflang="'.$va['lang'].'" href="'.$va['url'].'">';
    }
  }
  echo '<link rel="alternate" hreflang="x-default" href="'.$canonical.'">';
}
?>
<!-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
<!-- <link rel="dns-prefetch" href="https://www.gstatic.com" crossorigin> -->
<link rel="dns-prefetch" href="https://www.google.com" crossorigin>
<link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
<link rel="dns-prefetch" href="https://www.google.com.tw" crossorigin>
<link rel="dns-prefetch" href="https://www.googletagmanager.com" crossorigin>
<link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
<link rel="icon alternate" href="/img/favicon.png" type="image/png" sizes="256x256">
<link rel="shortcut icon" href="/img/favicon.png" sizes="256x256">
<link rel="apple-touch-icon" href="/img/favicon.png" sizes="256x256">
<!-- <link rel="icon" href="/img/favicon.ico" sizes="32x32"> -->
<link rel="stylesheet" href="/css/style.css?20234">
<link rel="stylesheet" href="/css/contact.css?5">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // include (PHP_WEB_ROOT.$css);
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" as="style"> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
</head>
<body>
<noscript>
  <style>#translateLink,.loading,.lazyload[alt="*"]{display:none!important;}</style>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>