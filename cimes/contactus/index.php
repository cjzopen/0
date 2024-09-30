<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='免費諮詢';
$page['description']='想了解智慧工廠如何實踐嗎？請填寫服務表單留下聯絡資訊，將有專員盡速與您聯繫提供服務。';
// $page['css']=array('/public/css/contactus.css?2020');

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="contactus">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/contactus-banner-1440.jpg', //圖片
  '<h1>免費諮詢</h1>', //圖片上的字
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
          <a href="<?= $nowUrl ?>" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2" />
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
            <li>電話：<span>+886-3-571-6622 ext. 777</span></li>
            <li>傳真：<span>+886-3-571-7889</span></li>
          </ul>
        </address>
      </div><br>
    </noscript>
<?php
// include($_SERVER['DOCUMENT_ROOT'].'/template/privacy.php');
?>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<!-- <script src="/public/js/check.js?2" defer></script> -->
</body>
</html>