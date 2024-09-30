<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='產品免費諮詢';
$page['description']='想了解HR系統如何提升人事、薪資、差勤、保險等管理效益？歡迎填寫服務表單留下聯絡資訊，將有專員盡速與您聯繫提供服務。';
$canonical='https://hcp.ares.com.tw/contact/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="contact">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/contact/contact-banner-1366.jpg', //圖片
  '/img/contact/contact-banner-360.jpg 360w, /img/contact/contact-banner-720.jpg 720w, /img/contact/contact-banner-1366.jpg 1366w, /img/contact/contact-banner-1440.jpg 1440w', //srcset
  'HR線上諮詢', //alt
  '<h1>免費諮詢</h1>', //圖片上的字
  null //字的 class
);
?>
  <div>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <noscript>
      <style>#consult_form{display:none;}</style>
      <div class="container py-5">
        <p class="sub-color">您使用的系統封鎖了此頁面的 JavaScript</p>
        <h2 class="main-color">聯絡我們</h2>
        <address class="col-12 col-sm-6 col-lg-3 mb-0">
          <ul>
            <li>Email：<span>daphnelu@ares.com.tw</span></li>
            <li>電話：<span>+886-3-5716622 ext. 714</span></li>
            <li>傳真：<span>+886-3-5717889</span></li>
          </ul>
        </address>
      </div><br>
    </noscript>
  </div>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>