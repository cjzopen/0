<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= !empty($page['title']) ? $page['title'] : 'ciMes' ?> - MES Optimize Your Factory!</title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="canonical" href="<?= $canonical ?>">
<?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : 'ciMes' ?> - MES Optimize Your Factory!">
  <meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta property="og:image" content="https://cimes.ares.com.tw/public/img/og.png">
  <meta property="og:url" content="<?= $canonical ?>">
  <meta property="og:type" content="website" />
  <link rel="alternate" hreflang="en" href="<?= $canonical ?>">
<?= !empty($hreflang) ? '<link rel="alternate" hreflang="zh" href="'.$hreflang.'"><link rel="alternate" hreflang="x-default" href="'.$hreflang.'">' :'' ?>
  <link rel="shortcut icon" href="/public/img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/public/css/main.css">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="preload" href="'.$css.'" as="style">';
  }
?>
<script>
window.addEventListener("load", function() {
  var prload_css = document.querySelectorAll('link[as="style"]');
  var i = 0;
  for (i; i < prload_css.length; ++i) {
    prload_css[i].rel='stylesheet';
  }
});
</script>
<?php
}
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');
</script>
<script src="/lib/jquery.js?v=3.6.0"></script>
</head>
<body>
<noscript>
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
  <style>#news .ratio-box>img[data-original],#translateLink,.loading{display:none!important;}</style>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<style>html,body{line-height:1.5;}</style>
<div aria-hidden="true" class="loading" data-text="ARES ciMes - Optimize Your Factory!"></div>