<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '網站地圖';
$page['description'] = '瞭解更多 ciMes 為企業與產線帶來的好處！';
$canonical='https://cimes.ares.com.tw/sitemap/';
$hreflang = 'https://cimes.ares.com.tw/en/sitemap/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="sitemap">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/products/product-banner-1440.jpg', //圖片
  '', //圖片上的字
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
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">網站地圖</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <section>
      <div class="container">
        <h1 class="text-center">網站地圖</h1><hr>
        <div class="row">
          <div class="col-12 col-md-8">
            <h2 class="main-color">產品</h2>
            <ul>
              <li><a href="/products/">ciMes 簡介</a></li>
            </ul>
            <strong>核心模組</strong>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/module/wip.php">WIP 在製管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/qc.php">QC 品質管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/tooling.php">Tooling 零配件管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/pm.php">PM 機台預修保養</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/mms.php">MMS 物料管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/cms.php">CMS 載具管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/wrp.php">WRP 報表系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/lms.php">LMS 標籤管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/alm.php">ALM 警示管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/module/eks.php">EKS 電子看板系統</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <h2 class="main-color">關於</h2>
            <ul>
              <li><a href="/best-practices/">客戶案例</a></li>
              <li><a href="/news/">最新消息</a></li>
              <li><a href="/knowledge/">知識分享</a></li>
            </ul>
            <h2 class="main-color">趨勢議題</h2>
            <ul>
              <li><a href="/industry-4.0/">智慧工廠</a></li>
              <li><a href="/trend/electric-car/">電動車專區</a></li>
            </ul>
            <h2 class="main-color">認識 MES</h2>
            <ul>
              <li><a href="/knowmes/">什麼是 MES</a></li>
              <li><a href="/knowmes/how/">如何選 MES</a></li>
              <li><a href="/knowmes/why/">為何選 ciMes</a></li>
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