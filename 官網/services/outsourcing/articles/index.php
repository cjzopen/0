<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='資訊委外的優缺點與廠商評估方式都在這裡 | 資通電腦';
$page['description']='分享如何評估委外及資訊委外服務最新消息，包含如何選擇資訊委外團隊、委外服務績效管理、IT 人力委外策略、委外開發與自行開發系統的優缺點等相關資訊。';
$page['canonical']='https://www.ares.com.tw/services/outsourcing/articles/';
$page['css']=array('/css/newsletter-article.css');
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
            <a href="../../" itemprop="item"><span itemprop="name">專業服務</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">委外服務</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">相關文章</span></a>
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
    <h2 class="text-center hr">相關文章</h2>
      <div class="row">
<?php
$product='委外服務';
require($_SERVER['DOCUMENT_ROOT'].'/template/product-article-list2.php');
?>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

