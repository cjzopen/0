<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='中科院資安方案 相關文章 | 資通電腦';
$page['description']='讓企業隨時掌握系統資安弱點！';
$page['canonical']='https://www.ares.com.tw/products/ncsist/articles/';
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
            <a href="../" itemprop="item"><span itemprop="name">中科院資安方案</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">相關文章</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center" id="title">
      <ul>
        <li><a href="../" class="">產品簡介</a></li>
        <!-- <li><a href="../best-practice/" class="">成功案例</a></li> -->
        <li><a href="" class="act">相關文章</a></li>
        <li><a href="../consult/">免費諮詢</a></li>
      </ul>
    </div>
  </div>
  <section class="list">
    <div class="container">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/php/article-loading.php');
articleLoading('ncsist');
?>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
  <!-- <script src="/js/article-loading.js"></script> -->
  <script src="/js/main2016.js" async></script>
<!-- <script>
new articleLoading('ncsist');
</script> -->
</body>
</html>

