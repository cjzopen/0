<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title><?= !empty($page['title']) ? $page['title'] : '文件加密資安控管系統' ?> - 資通電腦</title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' : '' ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
<?= !empty($canonical) ? '<link rel="canonical" href="'.$canonical.'">' : '' ?>
<?= !empty($another) ? $another :'' ?>
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : '文件加密資安控管系統' ?> - 資通電腦" />
  <meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>" />
  <meta property="og:image" content="<?= !empty($ogimg) ? $ogimg : 'https://ares-pp.ares.com.tw/public/img/og.jpg' ?>" />
  <meta property="og:url" content="<?= !empty($canonical) ? $canonical : '' ?>" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= !empty($page['title']) ? $page['title'] : '文件加密資安控管系統' ?> - 資通電腦">
  <meta name="twitter:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta name="twitter:image" content="<?= !empty($ogimg) ? $ogimg : 'https://ares-pp.ares.com.tw/public/img/og.jpg' ?>">
<?= !empty($hreflang) ? '<link rel="alternate" hreflang="x-default" href="'.$canonical.'"><link rel="alternate" hreflang="zh-TW" href="'.$canonical.'"><link rel="alternate" hreflang="en" href="'.$hreflang.'">' :'' ?>
  <link rel="icon" href="/public/img/favicon.png" sizes="256x256">
  <link rel="icon alternate" href="/public/img/favicon.png" type="image/png" sizes="256x256">
  <link rel="apple-touch-icon" href="/public/img/favicon.png" sizes="256x256">
  <!-- <link rel="shortcut icon" href="/public/img/favicon.ico"> -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin> -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com.tw" crossorigin>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap"> -->
  <link rel="stylesheet" href="/public/css/main.css?10">
  <link rel="stylesheet" href="/public/css/contact.css?3">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" as="style">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
</head>
<body>