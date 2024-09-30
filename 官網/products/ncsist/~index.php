<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='中科院資安方案 | 資通電腦';
$page['description']='具備國防級水準的資訊安全防禦工具。提供全面資安健檢、資安鑑識以及通訊資安服務。';
// $page['canonical']='https://www.ares.com.tw/products/ncsist/';
$page['css']=array('/css/product-ncsist.css');
$page['ogimage']='https://www.ares.com.tw/img/product/ncsist/ncsist.png';
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');

include (__DIR__.'/_banner.php');
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
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">中科院資安方案</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center" id="title">
      <ul>
        <li><a href="" class="act">產品簡介</a></li>
        <!-- <li><a href="best-practice/">成功案例</a></li> -->
        <li><a href="articles/">相關文章</a></li>
        <li><a href="consult/">免費諮詢</a></li>
      </ul>
    </div>
  </div>
    <section>
      <div class="container">
        <h2 class="text-center">國防級資安服務大躍進！</h2>
        <hr>
        <p class="justify">
          資通電腦與國家中山科學研究院資訊通信研究所合作，攜手打造國防級資安防禦服務。提供全面資安健檢、檢測、鑑識以及通訊資安等服務。以轉化國防科技能量，協助國內產業之資安防護與應用。
          </p>
            <p class="justify">
          國家中山科學研究院資訊通信研究所依據 ISO/IEC 17025 規範建置資訊安全評估與檢測實驗室，並於 101 年經財團法人全國認證基金會 (TAF) 與國家通訊傳播委員會 （NCC）評鑑通過，獲頒資通安全設備及保護剖繪測試實驗室認可證書。可提供包括保護剖繪、安全標的及資通安全產品共同準則 EAL1 至 EAL4+ 安全等級之評估與測試服務。實驗室亦同時發展「資安檢測」技術，包含企業/政府/金融資安健檢服務、APP 資安檢測服務、資安鑑識服務、ME 通訊軟體資安方案等。
        </p>
        <br>
        <figure><img class="img-responsive center-block" src="/img/product/ncsist/ncsist.png" alt="國防級資安服務大躍進"></figure>
      </div>
    </section>
    <div class="h-n main-bg"><ul class="container text-center"><li class="isd"><a href="#isd"><img src="/img/product/ncsist/ncsist-icon1.svg" alt="*">資安健檢</a></li><li class="isdf"><a href="#isdf"><img src="/img/product/ncsist/ncsist-icon2.svg" alt="*">資安鑑識</a></li><li class="lineme"><a href="#lineme"><img src="/img/product/ncsist/ncsist-icon3.svg" alt="*">ME</a></li><li class="app"><a href="#app"><img src="/img/product/ncsist/ncsist-icon4.svg" alt="*">APP 資安檢測</a></li></ul><span class="h-n-toggle"><i class="fa fa-bars"></i> 產品列表</span></div>
    <div class="type-list" id="isd">
<?php include('types/isd.php'); ?>
    </div>
    <div class="type-list" id="isdf">
<?php include('types/isdf.php'); ?>
    </div>
    <div class="type-list" id="lineme">
<?php include('types/lineme.php'); ?>
    </div>
    <div class="type-list" id="app">
<?php include('types/app.php'); ?>
    </div>
    <section id="contact">
      <h2 class="text-center">產品諮詢</h2>
      <hr>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
    <script src="/js/main2016.js" async></script>
    <script src="/js/product-ncsist.js" async></script>
</body>
</html>

