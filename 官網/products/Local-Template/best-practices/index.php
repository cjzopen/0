<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Oracle台灣發票/票據/保稅系統-成功案例| Local Template資通電腦';
$page['description']='提供Oracle EBS台灣在地化完整解決方案。除了在外商公司有亮眼成績外，專業的Oracle顧問團隊，已協助數百家的大型企業客戶成功上線';
$page['canonical']='https://www.ares.com.tw/products/Local-Template/best-practices/';
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
            <a href="../" itemprop="item"><span itemprop="name">NM / GIB / 十號公報</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('../_nav.php');
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
$product='LT';
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

