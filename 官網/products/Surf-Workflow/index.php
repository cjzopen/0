<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='生產管理是什麼？企業如何做好實務應用架構分享｜資通電腦';
$page['description']='生產管理系統可協助規劃、監控和管理其生產過程。從訂單、加工到出貨，完整記錄加工歷程及機台資訊。確實掌握半成品/成品數量。也含蓋能源監測模組，掌握設備用電資訊。';
$page['canonical']='https://www.ares.com.tw/products/IoT/';
$page['css']=array('/lib/fancybox5/fancybox.min.css');
$page['ogimage']='https://www.ares.com.tw/img/product/myshine/生產管理可以做什麼.png';

include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
<style>
hr, .hr::after{
  background-color: #F26722;
}
.underline{
  border-color: #F26722;
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">生產管理系統</span></a>
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
            <img class="img-fluid" loading="lazy" width="343" height="343" src="/img/product/myshine/生產管理是什麼.png" alt="生產管理">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="color-main underline">生產管理是什麼？</h1>
            <p>生產管理是依據生產需求制定計畫與排程，並預估人力、設備、原物料的需求，進行適當安排與分配。確保資源能有效被利用，提升生產效率、降低成本、提高產品品質。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray">
      <div class="container">
        <h2 class="text-center hr">生產管理系統，可以協助做哪些？</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 order-1 order-md-2 text-center mb-3">
            <img class="img-fluid" loading="lazy" width="343" height="343" src="/img/product/myshine/生產管理可以做什麼.png" alt="生產管理可以做到的事">
          </div>
          <div class="col-12 col-md-4 order-2 order-md-1">
            <p class="bg-white p-3">Web 介面，無論是電腦或任何行動裝置，只要連上網，即可掌握現場生產即時資訊。</p>
            <p class="bg-white p-3">現場人員針對工單進行報工，即時管理人員工時狀況。</p>
            <p class="bg-white p-3">經由每一製程的進出站作業，確實掌握半成品／成品數量。</p>
          </div>
          <div class="col-12 col-md-4 order-3 order-md-3">
            <p class="bg-white p-3">從訂單、加工到出貨，完整記錄加工歷程及機台資訊，串接完整生產歷程。</p>
            <p class="bg-white p-3">透過戰情板，快速掌握現場工單即時資訊及機台設備運作狀況。</p>
            <p class="bg-white p-3">包含能源監測模組，隨時掌握設備用電資訊及每批加工品之能耗數據。</p>
          </div>
        </div>
        <div class="text-center mt-5">
          <h3>適用產業</h3>
          <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-3">
              <img class="img-fluid" loading="lazy" width="350" height="220" src="/img/product/myshine/金屬加工.png" alt="金屬加工業">
              <div>金屬加工業</div>
            </div>
            <div class="col-6 col-md-3 mb-3">
              <img class="img-fluid" loading="lazy" width="350" height="220" src="/img/product/myshine/表面處理.png" alt="表面處理產業">
              <div>表面處理產業</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background-color: #F2FBFD;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="underline">生產管理系統<br> Surf-Workflow 核心功能模組</h2>
            <p>除了基本資料管理、人員群組權限控管，我們還提供這些功能模組可以讓你快速建立有效的生產模式並能提供客戶更透明詳盡的加工資訊！</p>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col-12 mb-3">
                <div class="bg-white p-3 rounded shadow">
                  <h3 class="h4" style="color:#00C3BD">生產管理模組</h3>
                  <div>
                    <div class="h5">．加工</div>
                    <p>工單／工藝單管理、委外加工管理、進出站管理、派工／報工管理、品質管理</p>
                  </div>
                  <div>
                    <div class="h5">．機台</div>
                    <p>設備保修管理、產線異常告警</p>
                  </div>
                  <div>
                    <div class="h5">．串接</div>
                    <p>生產履歷 & 報表、生產數據分析</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mb-3">
                <div class="bg-white p-3 rounded shadow">
                  <h3 class="h4" style="color:#008DA9">進銷存模組</h3>
                  <div>
                    <div class="h5">．進貨管理</div>
                  </div>
                  <div>
                    <div class="h5">．銷貨管理</div>
                  </div>
                  <div>
                    <div class="h5">．庫存管理</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mb-3">
                <div class="bg-white p-3 rounded shadow">
                  <h3 class="h4" style="color:#4CC0EE">能源監測模組</h3>
                  <div>
                    <div class="h5">．設備能耗監測</div>
                  </div>
                  <div>
                    <div class="h5">．產品能耗分析</div>
                  </div>
                  <div>
                    <div class="h5">．能耗趨勢分析</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center hr">應用服務架構</h2>
        <div class="text-center">
          <a href="/img/product/myshine/應用服務架構.png" data-fancybox>
            <img class="img-fluid" width="1600" height="960" loading="lazy" src="/img/product/myshine/應用服務架構.png" alt="生產管理系統應用服務架構">
          </a>
        </div>
      </div>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/change-to-cimes-contact.js" defer></script>
<script src="/lib/fancybox5/fancybox.umd.js" defer></script>
<script>
addEventListener("load", (event) => {
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
});

</script>
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

