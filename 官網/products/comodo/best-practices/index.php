<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Comodo成功案例|資通電腦';
$page['description']='企業或單位導入 Comodo 的心得。';
$page['canonical']='https://www.ares.com.tw/products/fortify/best-practices/';
$page['css']=array('/css/best-practice.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include ('../_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">Comodo</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?=$page['canonical'] ?>" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('../_nav.php');
?>
  </div>
  <section class="list">
    <div class="container">
      <div class="text-right">
        <label id="case-switch-box">
          <select id="case-switch">
            <option value="" disabled selected>新聞與案例</option>
            <option value="新聞">新聞</option>
            <option value="案例">案例</option>
          </select>
        </label>
      </div>
<?php
$product='comodo';
$event_type='best_practice';
require($_SERVER['DOCUMENT_ROOT'].'/template/product-article-list.php');
?>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

