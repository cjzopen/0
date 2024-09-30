<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='什麼是物聯網？IoT 解決方案與案例應用｜資通電腦';
$page['description']='物聯網IoT是智慧製造中很重要的一環，是實現智慧製造的根基。資通提供製造業加工產線之機台數據擷取及拋轉，達到物聯網、機聯網功能，可運用在加工設備監測、環境監測、能源監測等。';
$page['canonical']='https://www.ares.com.tw/products/IoT/';
// $page['css']=array('/lib/swiper9/style.css','/css/product-recruiting.css');
$page['ogimage']='https://www.ares.com.tw/img/product/myshine/產線數據匯流平台.png';

include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
<style>
:root{
  --product-orange: #F26722
}
hr, .hr::after{
  background-color: var(--product-orange);
}
.underline{
  border-color: var(--product-orange);
}
.iot-circle-icon{
  width:80px;
  height: 80px;
  background-color: var(--product-orange);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}
</style>
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">IoT 物聯網解決方案</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('_nav.php');
?>
  </div>
    <section id="main-header" class="bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid" loading="lazy" width="350" height="350" src="/img/product/myshine/物聯網是什麼.png" alt="物聯網">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="color-main underline">什麼是物聯網 IoT？</h1>
            <p>物聯網 IoT（Internet of Things）是指裝置設備透過網路互相整合連結，不需人機互動，即可自動記錄並接收數據。物聯網運用範圍很廣泛，包含智慧製造、智慧環境、運輸、物流、健康醫療、智慧農業等領域。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="py-0 pt-5 color-white bg-lazyload" style="background-color:#0E284D" data-image="/img/product/myshine/why-bg.png">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-7 py-5">
            <div class="row justify-content-center">
              <div class="col-12 col-md-9">
                <h2 class="underline">為何智慧製造需要物聯網 IoT？</h2>
                <p>物聯網是智慧製造中很重要的一環，也是實現智慧製造的根基。製造工廠將生產設備聯網，可在製造過程中監控機台、生產參數、加工狀態、量測值…等數據。確認機台設備運作是否正常，避免故障和停機，還可以監控產品的品質，以減少生產不良的機會與數量，進而節省時間與金錢，有效提升生產效率，降低成本。</p>
                <ul class="row text-center justify-content-center">
                  <li class="col-3 col-md-2">
                    <div class="iot-circle-icon"><img class="img-fluid" src="/img/product/myshine/why-1.png" width="80" height="80" loading="lazy" alt="*"></div>                      
                    <div>節省時間</div>
                  </li>
                  <li class="col-3 col-md-2">
                    <div class="iot-circle-icon"><img class="img-fluid" src="/img/product/myshine/why-2.png" width="80" height="80" loading="lazy" alt="*"></div>                      
                    <div>降低成本</div>
                  </li>
                  <li class="col-3 col-md-2">
                    <div class="iot-circle-icon"><img class="img-fluid" src="/img/product/myshine/why-3.png" width="80" height="80" loading="lazy" alt="*"></div>                      
                    <div>優化製程</div>
                  </li>
                  <li class="col-3 col-md-2">
                    <div class="iot-circle-icon"><img class="img-fluid" src="/img/product/myshine/why-4.png" width="80" height="80" loading="lazy" alt="*"></div>                      
                    <div>決策控制</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5"></div>
        </div>
      </div>
    </section>
    <section style="background-color:#F2FBFD">
      <div class="container">
        <h2 class="text-center hr">資通物聯網解決方案 - 產線數據匯流平台</h2>
        <div class="row justify-content-center">
          <div class="col col-md-10">
            <p>提供製造業加工產線之機台數據擷取及拋轉，達到物聯網、機聯網功能，可運用在加工設備監測、環境監測、能源監測等。</p>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid" width="800" height="500" loading="lazy" src="/img/product/myshine/產線數據匯流平台.png" alt="產線數據匯流平台">
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center hr">支援連線模式</h2>
        <div class="text-center">
          <img class="img-fluid" width="800" height="400" loading="lazy" src="/img/product/myshine/支援連線模式.png" alt="IoT支援的連線模式">
        </div>
      </div>
    </section>
    <section class="">
      <div class="container">
        <h2 class="text-center hr">客戶見證</h2>
        <h3 class="text-center">台灣最大 PVD 真空鍍膜企業－滿益金科技</h3>
        <div class="row">
          <div class="col-12 col-md-6 mb-3 text-center">
            <img loading="lazy" width="530" height="300" class="img-fluid" src="/img/product/myshine/滿益金.jpg" alt="滿益金">
          </div>
          <div class="col-12 col-md-6">
            <ul class="disc">
              <li>
                <strong>提高能耗資訊蒐集的效率</strong>
                <p>整合工單與能耗資訊，加速資料蒐集、報表彙整。</p>
              </li>
              <li>
                <strong>碳排可視化管理</strong>
                <p>透過碳排數據儀表板，可視化全廠碳排資訊，精準掌握能耗狀況。</p>
              </li>
              <li>
                <strong>即時監控能耗數據</strong>
                <p>即時監控、分析製程及設備能耗數據，降低異常風險，改善高耗能製程。</p>
              </li>
              <li>
                <strong>精準計算碳排數據</strong>
                <p>可追溯生產能耗，精準計算每項產品碳足跡，符合國際客戶碳稽核要求。</p>
              </li>
            </ul>
            <p>為回應全球環保挑戰，我們選用資通投資的邁森科技 IoT 物聯網解決方案，專注打造智能化的產線數據匯流平台，優化產線及能耗數據管理，積極響應國際客戶碳稽核要求。</p>
            <div class="text-right">滿益金科技總經理 張家烈</div>
            <div class="text-right pt-1">
              <a href="https://www.ares.com.tw/events/iot-user-story-managing-technology" class="btn btn-info color-white" rel="noopener noreferrer" target="_blank">深入瞭解</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/change-to-cimes-contact.js" defer></script>
<!-- <script src="/lib/swiper9/script.js" defer></script>
<script>
window.addEventListener("load", (e) => {
  const swiper = new Swiper('#case-swiper', {
    loop: true,
    allowTouchMove: false,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
</script> -->
</body>
</html>

