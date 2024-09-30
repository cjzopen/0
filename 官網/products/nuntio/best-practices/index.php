<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='成功案例|ARES Nuntio資通電腦';
$page['description']='ARES Nuntio法規報表申報平台廣泛應用於金融業，受各大銀行採納，快來看相關成功案例！';
$page['canonical']='https://www.ares.com.tw/products/nuntio/best-practices/';
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');
include ('../_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row"  itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">法規報表申報系統</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center" id="title">
      <ul>
<?php
include ('../_nav.php');
?>
      </ul>
    </div>
  </div>
  <section class="list">
    <div class="container">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/php/article-loading.php');
articleLoading('nuntio','best_practice');
?>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
  <!-- <script src="/js/article-loading.js"></script> -->
<!-- <script>
new articleLoading('nuntio','best_practice');
</script> -->
</body>
</html>

