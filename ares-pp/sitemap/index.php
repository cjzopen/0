<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '網站地圖';
$page['description'] = '資通電腦 ARES PP 隱私保鑣 ARES Privacy Protector 行動化文件保全網站地圖';
$canonical='https://ares-pp.ares.com.tw/sitemap/';
$hreflang = 'https://ares-pp.ares.com.tw/en/sitemap/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="sitemap">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/best-practices/case-banner.png', //圖片
  '<span>網站地圖</span>', //圖片上的字
  'sub-color' //字的 class
);
?>
<style>
  #consult-section{display: none;}
</style>
  <main>
    <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">網站地圖</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </nav>
    <section>
      <h1 class="text-center main-color">網站地圖</h1>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <h2 class="mb-3">產品描述</h2>
            <ul class="row mb-5">
              <li class="col-12 col-md-6"><a href="/about/">ARES PP</a></li>
              <li class="col-12 col-md-6"><a href="/about/#apply">產品應用</a></li>
              <li class="col-12 col-md-6"><a href="/about/#benefit">產品效益</a></li>
              <li class="col-12 col-md-6"><a href="/about/#feature">產品特色</a></li>
            </ul>
            <h2 class="mb-3">主題專區</h2>
            <ul class="row mb-5">
              <li class="col-12 col-md-6"><a href="/faq/">常見問題</a></li>
              <li class="col-12 col-md-6"><a href="/drm/">DRM 是什麼</a></li>
              <li class="col-12 col-md-6"><a href="/about/procurement/">採購評估</a></li>
              <li class="col-12 col-md-6"><a href="/trend/EU-GDPR/">GDPR 專區</a></li>
              <li class="col-12 col-md-6"><a href="/trend/ISO27001/">ISO 27001 專區</a></li>
              <li class="col-12 col-md-6"><a href="/trend/telecommuting/">遠距辦公專區</a></li>
              <li class="col-12 col-md-6"><a href="/trend/trade-secret/">營業秘密保護管理規範</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <h2 class="mb-3">關於</h2>
            <ul class="mb-5">
              <li><a href="/best-practices/">客戶案例</a></li>
              <li><a href="/articles/">最新消息</a></li>
              <li><a href="/articles/knowledge/">知識分享</a></li>
              <li><a href="/contact/">產品諮詢</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>