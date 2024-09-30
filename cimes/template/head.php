<!DOCTYPE html>
<html lang="zh" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title><?= !empty($page['title']) ? $page['title'] : 'MES 工廠製造執行系統' ?> <?php if(strpos($page['title'],'ciMes') === false){echo '- 資通電腦ciMes';}?></title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
<?= !empty($canonical) ? '<link rel="canonical" href="'.$canonical.'">' : '' ?>
<?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' :'' ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
<?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : 'MES 工廠製造執行系統' ?> - 資通電腦ciMes">
  <meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>" />
  <meta property="og:image" content="<?= !empty($page['ogimage']) ? $page['ogimage'] : 'https://cimes.ares.com.tw/public/img/og.png' ?>">
<?= !empty($canonical) ? '<meta property="og:url" content="'.$canonical.'">' : '' ?>
  <meta property="og:type" content="website" />
<?= !empty($hreflang) ? '<link rel="alternate" hreflang="x-default" href="'.$canonical.'"><link rel="alternate" hreflang="zh" href="'.$canonical.'"><link rel="alternate" hreflang="en" href="'.$hreflang.'">' :'' ?>
  <link rel="icon" href="/public/img/favicon.png" sizes="256x256">
  <link rel="icon alternate" href="/public/img/favicon.png" type="image/png" sizes="256x256">
  <link rel="apple-touch-icon" href="/public/img/favicon.png" sizes="256x256">
  <!-- <link rel="shortcut icon" href="/public/img/favicon.ico"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com.tw" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/public/css/main.css?t=2023">
<?php
if($contact>=1){
  echo '<link rel="stylesheet" href="/public/css/contact.css">';
}
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // echo '<link rel="preload" href="'.$css.'" as="style">';
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" as="style">
<script>
window.addEventListener("load", function() {
  var prload_css = document.querySelectorAll('link[as="style"]');
  var i = 0;
  for (i; i < prload_css.length; ++i) {
    prload_css[i].rel='stylesheet';
  }
});
</script>
<!-- assistant style end -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');
</script>
</head>
<body>
<noscript>
  <style>#news .ratio-box>img[data-src],#translateLink,.loading{display:none!important;}</style>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>