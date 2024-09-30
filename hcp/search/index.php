<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['title'] = '站內搜尋';
$page['description'] = '探索更多hcp相關的功能與好處。';
$canonical = HOST_LINK.'search/';
$page['css']=array('/css/search.css');

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="other">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/contact/contact-banner-1366.jpg', //圖片
  '/img/contact/contact-banner-360.jpg 360w, /img/contact/contact-banner-720.jpg 720w, /img/contact/contact-banner-1366.jpg 1366w, /img/contact/contact-banner-1440.jpg 1440w', //srcset
  '*', //alt
  '站內搜尋', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">站內搜尋</li>
      </ol>
    </div>
    <section class="container">
      <h1 class="text-center">站內搜尋</h1>
    <noscript>
      <div class="py-5" data-nosnippet>您使用的系統封鎖了此頁面的 javascript</div><br>
    </noscript>
      <div class="gcse-searchbox"></div>
      <div class="gcse-searchresults"></div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script async src="https://cse.google.com/cse.js?cx=014374286183653546318:yomd1rl1fcw"></script>
</body>
</html>