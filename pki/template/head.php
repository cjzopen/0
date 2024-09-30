<?php
!empty($page['title']) ? $page['title']=$page['title'].' | 資通電腦uPKI' : $page['title']='資通電腦uPKI，提供PKI憑證、電子簽章、安控元件解決方案';
!empty($page['description']) ? $page['description']=$page['description'] : $page['description']='提供身分認證、電子簽章、加密與解密、合法授權等PKI解決方案';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title><?= $page['title'] ?></title>
  <meta name="description" content="<?= $page['description'] ?>">
<?= !empty($page['canonical']) ? '<link rel="canonical" href="'.$page['canonical'].'">' : '' ?>
<?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' :'' ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
<?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= $page['title'] ?>">
  <meta property="og:description" content="<?= $page['description'] ?>">
  <?= !empty($page['image']) ? '<meta property="og:image" content="'.$page['image'].'">' : '<meta property="og:image" content="'.HOST_LINK.'/img/og.jpg">' ?>
<?= !empty($page['canonical']) ? '<meta property="og:url" content="'.$page['canonical'].'">' : '' ?>
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $page['title'] ?>">
  <meta name="twitter:description" content="<?= $page['description'] ?>">
<meta name="twitter:image" content="https://marketing.ares.com.tw/images/2021-10/focus.jpg">
<?= !empty($page['image']) ? '<meta name="twitter:image" content="'.$page['image'].'">' : '' ?>
<?= !empty($page['hreflang']) ? '<link rel="alternate" hreflang="x-default" href="'.$page['canonical'].'"><link rel="alternate" hreflang="zh" href="'.$page['canonical'].'"><link rel="alternate" hreflang="en" href="'.$page['hreflang'].'">' :'' ?>
  <link rel="icon" href="/img/favicon.png" sizes="256x256">
  <link rel="icon alternate" href="/img/favicon.png" type="image/png" sizes="256x256">
  <link rel="apple-touch-icon" href="/img/favicon.png" sizes="256x256">
  <!-- <link rel="shortcut icon" href="/img/favicon.ico"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com.tw" crossorigin>
  <link rel="stylesheet" href="/css/style.css">
  <!-- assistant style -->
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
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
<!-- assistant style end -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
</head>
<body>
<style>#loading{background-color:rgba(0,0,0,.85);width:100%;height:100%;left:0;top:0;color:#fff;position:fixed;box-sizing:border-box;overflow:hidden;z-index:99999}#loading:before{content:attr(data-text);top:calc(50% - 63px);position:fixed;left:0;color:currentColor;text-align:center;width:100%;font-size:14px;animation:blink 1s linear infinite alternate}#loading:after{content:'';position:fixed;width:48px;height:48px;border:8px solid #fff;border-left-color:transparent;border-radius:50%;top:calc(50% - 24px);left:calc(50% - 24px);animation:rotation 1s linear infinite}@keyframes rotation{from{transform:rotate(0)}to{transform:rotate(359deg)}}@keyframes blink{from{opacity:.5}to{opacity:1}}</style>
<noscript>
<?php
// if(isset($page['css'])){
//   foreach($page['css'] as $css) {
//     echo '<link rel="stylesheet" href="'.$css.'">';
//   }
// }
?>
  <style>#news .ratio-box>img[data-src],#translateLink,.loading{display:none!important;}</style>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div id="loading" data-text="資通電腦 uPKI" aria-hidden="true"></div>
<svg class="d-none" aria-hidden="true">
  <defs>
    <symbol viewBox="0 6 24 24" id="search-icon">
      <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="phone-icon">
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
    </symbol>
    <symbol viewBox="0 0 512 512" id="email-icon">
      <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
    </symbol>
  </defs>
</svg>