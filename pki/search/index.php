<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='站內搜尋';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='';
$page['canonical']=HOST_LINK.'/search/';
$page['hreflang']=HOST_LINK.'/en/search/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/products/upki-banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h4">站內搜尋</h1>', //圖片上的字
  null //字的 class
);
?>
<style>
.gsc-tabsArea>div{overflow:unset!important;}
.gsc-adBlock,.ad{display:none!important;}
main .gsc-control-cse .gsc-table-result,.cse .gsc-control-cse,main .gsc-control-cse{
  font-family: "Helvetica Neue","Noto Sans TC", "Microsoft JhengHei", "Roboto Condensed", sans-serif;
}
.cse .gsc-results .gsc-cursor-page.gsc-cursor-current-page, .gsc-results .gsc-cursor-page.gsc-cursor-current-page{
  text-shadow:none;
}
.gsc-result .gs-title{
  height:auto!important;
  min-height:1.4em!important;
  text-decoration: none!important;
}
main .gsc-search-button,main #gsc-i-id1{
  height: 3rem;
}
main .gsc-results .gsc-cursor-box .gsc-cursor-current-page{
  background-color:transparent;
}
main a[target="_blank"]::after{
  display: none;
}
section{
  min-height: 66vh;
  line-height:1.4;
}
.gsc-search-box{
  line-height:1.7;
}
</style>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">站內搜尋</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
  <section>
    <div class="container">
      <script async src="https://cse.google.com/cse.js?cx=014374286183653546318:s9vrstyuvhc"></script>
<div class="gcse-search"></div>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>