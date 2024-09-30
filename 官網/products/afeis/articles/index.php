<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='AFEIS相關文章|資通電腦';
$page['description']='國內外匯電腦整合系統最新消息、專業知識、技術交流、新聞等相關文章，都在這與你分享！';
$page['canonical']='https://www.ares.com.tw/products/afeis/articles/';
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
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">AFEIS</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">相關文章</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <aside class="bg-gray paging text-center" id="title">
      <ul>
<?php
include ('../_nav.php');
?>
      </ul>
    </aside>
  </div>
  <section class="list">
    <div class="container">
    <h2 class="text-center hr">相關文章</h2>
      <div class="row">
<?php
$product='afeis';
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

