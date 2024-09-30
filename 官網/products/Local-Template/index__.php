<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');

// $str = $_SERVER["QUERY_STRING"];
// if (stripos($str, "&") === false){
//   $str = $_SERVER["QUERY_STRING"];
// }else{
//   $str = substr($str, 0, stripos($str, "&"));
// }

$pageName = "product";
$page['title']='Oracle台灣在地化票據/保稅/十號公報存貨管理系統 | 資通電腦';
$page['description']='提供針對 Oracle ERP 系統開發的台灣在地解決方案，除了 GV 還包含票據 NM、保稅 GIB、十號公報存貨管理系統，並支援 Oracle EBS 系統在地化服務。';
$page['canonical']='https://www.ares.com.tw/products/Local-Template/';
$page['css']=array('/css/product-localtemplate.css');
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
            <a href="" itemprop="item"><span itemprop="name">NM / GIB / 十號公報</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-6">
      <br><br>
        <figure><img class="img-responsive center-block" src="/img/product/lt/LocalTemplate.png" alt="含蓋五種票券管理系統"></figure>
        <br>
      </div>
      <article class="col-xs-12 col-sm-6">
        <h2 class="underline">NM / GIB / 十號公報</h2>
        <br>
        <p class="justify">資通 Oracle ERP Local Template 所提供的 NM（Notes Management；票據管理系統）、GIB（Goods in Bond；保稅管理系統）、十號公報存貨管理系統是基於 Oracle ERP 企業資源規劃系統開發的解決方案。</p>
        <p>我們擁有專業顧問團隊，成功輔導東森電視、Yahoo 雅虎、Honeywell、長榮航太科技、創意電子、台灣之星、中石化、遠傳、宏碁、華碩、友達、南僑集團、Mazda、啟碁科技、敦南科技…等近百家大型企業客戶系統上線。資通用心協助客戶問題處理程序標準化，並不定期提供新增功能通知；以及發佈應用資訊、程式更新與修補之資訊，使用客戶可享有續約等各種優惠。</p>
        <!-- <div class="text-right"><a href="https://www.ares.com.tw/products/egui/" class="btn btn-info fff panel-title">eGUI 電子發票管理系統</a></div> -->
      </article>
      </div>
    </div>
  </section>
  <!-- <section> -->
<?php
include('types/nm.php');
include('types/gib.php');
include('types/sfas.php');
?>
  <!-- </section> -->
  <section class="gray-bg" id="contact">
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
</body>
</html>

