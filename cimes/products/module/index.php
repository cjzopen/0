<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '核心模組';
$page['description'] = 'ciMes 核心模組。';
$canonical = 'https://cimes.ares.com.tw/products/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>

<div class="all" id="product">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/products/product-banner-1440.jpg', //圖片
  '<h1>核心模組</h1>', //圖片上的字
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
          <a href="../" itemprop="item"><span itemprop="name">產品介紹</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="" itemprop="item"><span itemprop="name">核心模組</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
    <section id="module">
      <div class="container">
<?php
include('../module_list.php');
?>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>