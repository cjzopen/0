<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='銀行海外分行核心系統-成功案例|eAresBank資通電腦';
$page['description']='各大銀行導入eAresBank海外核心系統成功案例都在這裡！';
$page['canonical']='https://www.ares.com.tw/products/eAresBank/best-practices/';
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');

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
            <a href="../" itemprop="item"><span itemprop="name">eAresBank</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <aside class="gray-bg paging text-center" id="title">
      <ul>
<?php
include ('../_nav.php');
?>
      </ul>
    </aside>
  </div>
  <section class="list">
    <div class="container">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/php/article-loading.php');
articleLoading('eAresBank','best_practice');
?>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
  <!-- <script src="/js/article-loading.js"></script> -->
<!-- <script>
new articleLoading('eAresBank','best_practice');
</script> -->
</body>

</html>

