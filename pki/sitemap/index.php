<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='網站地圖';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='';
$page['canonical']=HOST_LINK.'/sitemap/';
$page['hreflang']=HOST_LINK.'/en/sitemap/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/products/upki-banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '網站地圖', //圖片上的字
  null //字的 class
);
?>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= HOST_LINK ?>/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">網站地圖</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
  <section>
    <div class="container">
      <h1 class="text-center">網站地圖</h1><hr>
      <div class="row">
          <div class="col-12 col-md-8">
            <h2 class="h3 text-red">產品介紹</h2>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/">資通 uPKI</a></li>
              <li class="col-12 col-md-6"><a href="/products/upki/">安控解決方案</a></li>
              <li class="col-12 col-md-6"><a href="/products/cs/">資料加密及遮罩伺服器</a></li>
              <li class="col-12 col-md-6"><a href="/products/uiam/">身分識別及存取管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/usp/">薪資密封袋</a></li>
            </ul>
            <h2 class="h3 text-red">主題專區</h2>
            <ul>
              <li><a href="/pipa/" class="">個資法專區</a></li>
              <li><a href="/faq/">常見問題</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <h2 class="h3 text-red">關於</h2>
            <ul>
              <li><a href="/know-pki/" class="">認識 PKI</a></li>
              <li><a href="/news/" class="">最新消息</a></li>
              <li><a href="/knowledge/" class="">知識分享</a></li>
              <li><a href="/best-practices/" class="">成功案例</a></li>
            </ul>
          </div>
        </div>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>