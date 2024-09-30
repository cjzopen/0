<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '網站地圖';
$page['description'] = 'HCP 網站地圖';
$canonical = HOST_LINK.'sitemap/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="sitemap">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/contact/contact-banner-1366.jpg', //圖片
  '/img/contact/contact-banner-360.jpg 360w, /img/contact/contact-banner-720.jpg 720w, /img/contact/contact-banner-1366.jpg 1366w, /img/contact/contact-banner-1440.jpg 1440w', //srcset
  '*', //alt
  '', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">網站地圖</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <section>
      <div class="container">
      <h1 class="text-center">網站地圖</h1><hr>
        <div class="row">
          <div class="col-12 col-md-8">
            <h2 class="main-color">產品</h2>
            <b>HCP 簡介</b>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/">架構</a></li>
              <li class="col-12 col-md-6"><a href="/products/features/">特色效益</a></li>
              <li class="col-12 col-md-6"><a href="/mainland-china-hr/">跨國人事</a></li>
            </ul>
            <h2 class="main-color">模組</h2>
            <b>人資管理</b>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/modules/hrm">人事資料管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/salary">薪資獎金管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/attendance">差勤請假管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/insurance">地方保險管理模組</a></li>
            </ul>
            <b>人力發展</b>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/modules/competence">員工職能管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/training">教育訓練管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/performance">員工績效管理模組</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/recruit">人才招募管理模組</a></li>
            </ul>
            <b>加購</b>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/modules/ess-mss">員工／主管自助系統（ESS／MSS）</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/bis">商業智慧系統（BIS）</a></li>
              <li class="col-12 col-md-6"><a href="/products/modules/usp">薪資密封袋</a></li>
            </ul>
            <b>顧問</b>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/modules/consultant-service">顧問服務</a></li>
            </ul>
            <h2 class="main-color">主題專區</h2>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/topic/how-to-choose-hr-system/">HR 系統挑選指南</a></li>
              <li class="col-12 col-md-6"><a href="/topic/human-resource/">人資作業必備攻略</a></li>
              <li class="col-12 col-md-6"><a href="/topic/digital-transformation/">人資數位轉型專區</a></li>
              <li class="col-12 col-md-6"><a href="/topic/one-fixed-day-off-and-one-flexible-rest-day/?footer">一例一休專區</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <h2 class="main-color">關於</h2>
            <ul>
              <li><a href="/best-practices/">客戶案例</a></li>
              <li><a href="/news/">最新消息</a></li>
              <li><a href="/news/knowledge/">知識分享</a></li>
              <li><a href="/best-practices/gov">政府單位</a></li>
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