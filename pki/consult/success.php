<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title'] ='送出成功';
$page['description']='';
$another='<meta name="robots" content="noindex,nofollow">';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/consult/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/consult/banner-icon.svg" alt="*"> 產品諮詢</h1>', //圖片上的字
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
        <h2 class="text-center">您的資料已成功送出！</h2><hr>
        <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！<br>
          我們也推薦<a href="https://www.ares.com.tw/epaper/" class="text-red">資通電腦電子報</a>，每月出刊，提供不同產品的新知與趨勢報導。歡迎您<a href="https://www.ares.com.tw/epaper/subscribe/" class="text-red">免費訂閱</a>！
        </p>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>