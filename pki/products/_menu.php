<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/products/upki-banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '產品介紹', //圖片上的字
  null //字的 class
);
?>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">產品介紹</span></a>
          <meta itemprop="position" content="2">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name"><?= $breadcrumb ?></span></a>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </div>
    <nav class="supmenu container-fluid">
        <ul class="text-center mb-0">
          <li><a href="/products/upki/">安控解決方案</a></li>
          <li><a href="/products/cs/">資料加密及遮罩伺服器</a></li>
          <li><a href="/products/uiam/">身分識別及存取管理系統</a></li>
          <li><a href="/products/usp/">薪資密封袋</a></li>
        </ul>
    </nav>
  </header>