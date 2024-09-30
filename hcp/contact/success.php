<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='送出成功';
$page['description']='';
$canonical='https://hcp.ares.com.tw/contact/success.php';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="contactus">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/contact/contact-banner-1366.jpg', //圖片
  '/img/contact/contact-banner-360.jpg 360w, /img/contact/contact-banner-720.jpg 720w, /img/contact/contact-banner-1366.jpg 1366w, /img/contact/contact-banner-1440.jpg 1440w', //srcset
  'HCP 線上諮詢', //alt
  '<h1>成功頁面</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container">
        <li class="breadcrumb-item">
          <a href="/"><span>首頁</span></a>
        </li>
        <li class="breadcrumb-item">
          <a href="./"><span>免費諮詢</span></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href=""><span>成功頁面</span></a>
        </li>
      </ol>
    </div>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">您的資料已成功送出！</h2><hr>
        <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！<br>
          我們也推薦<a href="https://www.ares.com.tw/epaper/" class="main-color">資通電腦電子報</a>，每月出刊，提供不同產品的新知與趨勢報導。歡迎您<a href="https://www.ares.com.tw/epaper/subscribe/" class="main-color">免費訂閱</a>！
        </p>
        <p ><strong>現在就加入資通粉絲團：</strong></p>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8&appId=238825363206406";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-page" data-href="https://www.facebook.com/AresInternational/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AresInternational/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AresInternational/">ARES International Corp. 資通電腦</a></blockquote></div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>