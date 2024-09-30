<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='免費諮詢';
$page['description']='想知道如何防止機密文件外洩？請填寫服務表單留下聯絡資訊，將有專員盡速與您聯繫提供服務。';
$canonical='https://ares-pp.ares.com.tw/contact/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="contactus">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/contact/banner.webp', //圖片
  '<h1>免費諮詢</h1>', //圖片上的字
  'fff-color' //字的 class
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>