<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='送出成功';
$page['description']='';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="contactus">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  null, //圖片
  '<h1>成功頁面</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="" itemprop="item"><span itemprop="name">成功頁面</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">您的資料已成功送出！</h2><hr>
        <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！<br>
          我們也推薦<a href="https://www.ares.com.tw/epaper/" class="main-color">資通電腦電子報</a>，每月出刊，提供不同產品的新知與趨勢報導。歡迎您<a href="https://www.ares.com.tw/epaper/subscribe/" class="main-color">免費訂閱</a>！
        </p>
        <ul class="disc main-color">
          <li><a href="https://edm.ares.com.tw/dm/cimes-M2M/?utm_source=success_page&utm_medium=official&utm_campaign=success">MES 智慧製造幫您拼出 3 倍獲利</a></li>
          <li><a href="https://edm.ares.com.tw/dm/201904-arespp/?utm_source=success_page&utm_medium=official&utm_campaign=success">3 分鐘暸解企業如何遠離機密外洩威脅</a></li>
          <li><a href="https://edm.ares.com.tw/dm/201906-hcp/?utm_source=success_page&utm_medium=official&utm_campaign=success">HR 必刷 3 大職場絕招，輕鬆搞定每月薪資差勤計算</a></li>
          <li><a href="https://marketing.ares.com.tw/newsletter/2018-12-fortify/it?utm_source=success_page&utm_medium=official&utm_campaign=success">3 大掃描方式，原始碼漏洞原形畢露</a></li>
          <li><a href="https://marketing.ares.com.tw/dm/newsletter-2017-08-ciMes/product?utm_source=success_page&utm_medium=official&utm_campaign=success">如何建構智慧工廠？工業 4.0 是關鍵！</a></li>
          <li><a href="https://marketing.ares.com.tw/newsletter/2018-07-egui/product?utm_source=success_page&utm_medium=official&utm_campaign=success">電子發票該選加值中心代傳，還是自建 Turnkey 系統？</a></li>
        </ul>
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
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>