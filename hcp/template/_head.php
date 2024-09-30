<?php
$longTail='HR 人資管理系統';
if(!empty($page['title'])){
  if(strpos( $page['title'], 'HCP' ) !== false ){
    $longTail='HR 人資管理系統';
  }else{
    $longTail='HCP 人力資產規劃系統';
  }
}
?>
<!DOCTYPE html>
<html lang="zh" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title><?= !empty($page['title']) ? $page['title'] : 'HCP' ?> - <?= $longTail ?> | 資通電腦</title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta http-equiv="x-dns-prefetch-control" content="on" />
  <link rel="dns-prefetch" href="//www.googletagmanager.com" />
  <link rel="dns-prefetch" href="//www.google-analytics.com" />
  <link rel="dns-prefetch" href="//connect.facebook.net" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="canonical" href="<?= !empty($canonical) ? $canonical : $nowUrl ?>">
<?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : 'HCP' ?> - <?= $longTail ?> | 資通電腦" />
  <meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>" />
  <meta property="og:image" content="https://hcp.ares.com.tw/img/og.png" />
  <meta property="og:url" content="<?= !empty($canonical) ? $canonical : $nowUrl ?>" />
  <meta property="og:type" content="website" />
  <link rel="alternate" hreflang="zh" href="<?= !empty($canonical) ? $canonical : $nowUrl ?>" />
<?= !empty($hreflang) ? '<link rel="alternate" hreflang="en" href="'.$hreflang.'" />' :'' ?>
  <link rel="shortcut icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/noto.css">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // include (PHP_WEB_ROOT.$css);
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T79GZ2C');
</script> -->
</head>
<body>
<!-- <script src="/lib/jquery-3.2.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" defer></script>
<noscript>
  <style>#translateLink,.loading{display:none!important;}</style>
  <!-- <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T79GZ2C" height="0" width="0" style="display:none;visibility:hidden"></iframe> -->
</noscript>
<noscript id="deferred-styles">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // include (PHP_WEB_ROOT.$css);
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
</noscript>
<script>
var loadDeferredStyles = function() {
  var addStylesNode = document.getElementById("deferred-styles");
  var replacement = document.createElement("div");
  replacement.innerHTML = addStylesNode.textContent;
  document.body.appendChild(replacement)
  addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);
</script>