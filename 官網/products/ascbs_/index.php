<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='台資,大陸銀行核心系統 - 資通電腦';
$page['description']='ARES Smart Core Banking System能滿足台資銀行在大陸市場拓點的全系列需求，提供會計、活存、定存、放款、匯兌、進出口、債券、SWIFT 等完整功能，並支援多分行與支行功能。';
$page['canonical']='https://www.ares.com.tw/products/ascbs/';
$page['css']=array('/css/product-ascbs.css');
$page['other']=array('<link rel="alternate" hreflang="zh" href="https://www.ares.com.tw/products/ascbs/" />','<link rel="alternate" hreflang="en" href="https://www.ares.com.tw/en/products/ascbs/" />');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

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
            <a href="" itemprop="item"><span itemprop="name">ARES Smart Core Banking System</span></a>
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
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img src="/img/product/ascbs/ascbs.png" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">大陸銀行核心系統（ARES Smart Core Banking System）</h2>
          <p>解決方案包含完整的模組，能滿足台資銀行在大陸拓點的全系列需求，提供會計、共用、活存、定存、放款、匯兌、進出口、外匯交易、資金存借、債券、存同銷帳、SWIFT、大小額支付、同城票據清算、境內外幣清算系統與監管報表介面。並支援多分行與支行功能。可做集中或分散式的規劃。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">台資銀大陸外匯作業</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="mb-3 col-12 col-md-4">
          <div class="h5 p-3 color-white mb-0" id="heading1">傳統業務</div>
          <div class="bg-white p-3 border border-top-0">
            <ul class="disc">
              <li>外幣活期存款</li>
              <li>外幣定期存款</li>
              <li>外幣貸款</li>
              <li>匯出匯款</li>
              <li>匯入匯款</li>
              <li>光票托收</li>
              <li>旅行支票代售</li>
              <li>進口信用狀業務</li>
              <li>出口信用狀業務</li>
              <li>進口託收</li>
              <li>出口託收</li>
              <li>保證及保函業務</li>
            </ul>
          </div>
        </div>
        <div class="mb-3 col-12 col-md-4">
          <div class="h5 p-3 color-white mb-0" id="heading2">資金業務</div>
          <div class="bg-white p-3 border border-top-0">
            <ul class="disc">
              <li>客戶結售匯</li>
              <li>自營外匯買賣、平盤</li>
              <li>資金調撥</li>
              <li>資金存放</li>
              <li>資金拆借</li>
              <li>債券交易</li>
            </ul>
          </div>
        </div>
        <div class="mb-3 col-12 col-md-4">
          <div class="h5 p-3 color-white mb-0" id="heading3">貿易融資業務</div>
          <div class="bg-white p-3 border border-top-0">
            <ul class="disc">
              <li>福費庭（Forfaiting）</li>
              <li>打包貸款（Packing loan）</li>
              <li>進口押匯</li>
              <li>出口押匯</li>
              <li>訂單融資</li>
              <li>貼現融資</li>
              <li>保理業務（Factoring）</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">台資銀人民幣作業</h2>
    <hr>
    <div class="container">
      <ul class="check">
        <li>人民幣活期存款</li>
        <li>人民幣定期存款</li>
        <li>人民幣貸款</li>
        <li>人民幣匯出匯款</li>
        <li>人民幣匯入匯款</li>
        <li>委託收款</li>
        <li>託收承付</li>
        <li>票據業務</li>
        <li>理財業務（存款結構性商品）</li>
        <li>信託連動債基金</li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">系統模組</h2>
    <hr>
    <div class="container">
      <ul class="check">
        <li>會計系統</li>
        <li>共用系統</li>
        <li>活存系統</li>
        <li>定存系統</li>
        <li>放款系統</li>
        <li>匯兌系統</li>
        <li>進口系統</li>
        <li>出口系統</li>
        <li>外匯交易系統</li>
        <li>資金存借系統</li>
        <li>債券系統</li>
        <li>存同銷帳系統</li>
        <li>監管報表介面</li>
        <li>介面
          <ul class="disc">
            <li>SWIFT</li>
            <li>大小額支付系統</li>
            <li>同城票據清算系統</li>
            <li>境內外幣清算系統</li>
          </ul>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>系統架構圖</h2>
      <hr>
      <figure>
        <img class="img-fluid" src="/img/product/ascbs/structure.png" loading="lazy" width="701" height="469" alt="ascbs 架構與解決方案">
      </figure>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">大陸銀行核心系統帶來什麼效益？</h2>
      <hr>
      <div class="row">
        <div class="col-12 col-md-6">
          <h3>產品面：</h3>
          <ul class="disc">
            <li>具備套裝軟體之設計優點。</li>
            <li>本土研發團隊，可配合客制化需求。</li>
            <li>操作自動效率高，節省人力。</li>
            <li>日終作業迅速正確。</li>
            <li>提供視窗輔助查詢功能，操作容易。</li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <h3>整合面：</h3>
          <ul class="disc">
            <li>全方位整合系統，以會計帳務角度進行各系統建置。</li>
            <li>完整的額度控管。</li>
            <li>嚴謹的安全控管。</li>
            <li>可配合進行路透社連線處理整合。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

