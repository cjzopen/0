<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='CRM客戶關係管理系統，助您掌握客戶需求與銷售優勢 - 資通電腦';
$page['description']='善用資通電腦代理的CRM系統，幫助您提升業務管理績效、客戶滿意度與商機成交率。';
$page['canonical']='https://www.ares.com.tw/products/gd-crm/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product-crm.css');
$page['ogimage']='https://www.ares.com.tw/img/product/crm/crm-1.png';
$page['hreflang']=array(
  array(
    'lang'=>'zh',
    'url'=>$page['canonical']
  ),
  array(
    'lang'=>'en',
    'url'=>'https://www.ares.com.tw/en/products/gd-crm/'
  )
);
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">CRM 系統</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center">CRM 客戶關係管理系統</h1>
      <hr>
      <div class="row align-items-center">
        <div class="col-12 col-md-6 order-2 order-md-1">
          <img class="img-fluid mb-3" loading="lazy" width="780" height="370" src="/img/product/crm/CRM-1.png" alt="多平台的crm系統">
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">
          <p>資通電腦代理的 CRM 系統能滿足小型企業到跨國公司在業務、行銷與服務的管理需求。企業可透過網站、Call Center、電子郵件、行動裝置等，輕鬆聯繫、維持客戶關係，讓管理工作變得更輕鬆省時，加速業績提升，達成開發新市場的目標！</p>
          <div class="text-right"><a class="btn btn-info" href="https://marketing.ares.com.tw/newsletter/2020-11-gov/crm" rel="noopener noreferrer" target="_blank">CRM 是什麼</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">CRM 系統可解決哪些問題？</h2>
    <hr>
    <div class="container">
      <ul class="row text-center">
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-1.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>客戶資料查找方便</strong></div>
          <p class="text-left">將企業資訊、聯絡資料、客戶歷年報價單及服務歷程， 儲存於 CRM 系統中，可解決資料散落無法統整與交接不全的問題。</p>
        </li>
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-2.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>行動應用銷售服務管理</strong></div>
          <p class="text-left">自動提醒拜訪行程與工作交辦事項，以行動裝置打卡與語音輸入面談紀錄，回報工作進度。可連結 Google 地圖，搜尋附近其他客戶。</p>
        </li>
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-3.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>提升主管決策力</strong></div>
          <p class="text-left">建立商機大數據蒐集機制，即時查詢商機進度、預算金額、把握度等各項資訊，提升決策準確率。</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="video">
    <h2 class="text-center">CRM 導入效益</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 text-center mb-3">
          <a href="https://youtu.be/z4RQc3a4RFk" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" loading="lazy" width="540" height="304" src="/img/product/crm/cover.jpg" alt="CRM導入效益"></a>
        </div>
        <div class="col-12 col-md-6">
          <ul class="row text-center">
            <li class="col-6 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-1.svg" alt="*">
              <div>降低 <span class="h4">23%</span> 業務推廣費用</div>
            </li>
            <li class="col-6 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-2.svg" alt="*">
              <div>減少 <span class="h4">70%</span> 相關會議時間</div>
            </li>
            <li class="col-6 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-3.svg" alt="*">
              <div>提升 <span class="h4">65%</span> 銷售預測訂單能見度</div>
            </li>
            <li class="col-6 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-4.svg" alt="*">
              <div>提升 <span class="h4">41%</span> 客戶滿意度</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">即時化、可視化、一致化</h2><hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-1.svg" alt="*">
            <div class="pl-4">可依個人日常業務管理重點，設計不同的入口管理版面，以頁籤方式呈現，讓管理重點一目了然。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-2.svg" alt="*">
            <div class="pl-4">同步 Outlook 連絡人、行事曆，電子郵件可上傳至 CRM 系統備存，或轉追蹤記錄與服務記錄。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-3.svg" alt="*">
            <div class="pl-4">用 Excel 設計各種樞紐分析及圖表的報表樣板，並設定排程報表，讓周報、月報定時發送給指定人員。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-4.svg" alt="*">
            <div class="pl-4">21 種即時統計管理分析圖表，方便使用者分析：客戶經營、商機追蹤、客服案件結案率等績效指標。</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">客戶一致推薦</h2>
    <hr>
    <div class="container px-md-5">
      <div class="swiper-container swiper-container-horizontal" id="case-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide p-3">
            <div class="row align-items-center">
              <div class="col-12 col-md-6 px-4">
                <img class="img-fluid rounded" loading="lazy" width="640" height="420" src="/img/product/crm/happygo.jpg" alt="*">
              </div>
              <div class="col-12 col-md-6 px-4">
                <h3 class="color-blue">HAPPY GO 鼎鼎聯合行銷</h3>
                <p>CRM 可完整記錄業務承辦的行銷活動、行銷條件、推廣內容和對象等細節，並進一步分析目標受眾，提升行銷活動精準度！</p>
                <div class="text-right">資訊暨數據部資深協理</div>
                <div class="text-right"><a class="btn btn-info mt-2" href="http://www.my-gd.com/MYGD/SuccessStories/Detail/13" target="_blank" rel="noopener noreferrer">查看文章</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide p-3">
            <div class="row align-items-center">
              <div class="col-12 col-md-6 px-4">
                <img class="img-fluid rounded" loading="lazy" width="640" height="420" src="/img/product/crm/twkd.jpg" alt="*">
              </div>
              <div class="col-12 col-md-6 px-4">
                <h3 class="color-blue">科定企業</h3>
                <p>我們藉由 CRM 強化「業務銷售進度追蹤」及「潛在客戶基本資料管理」，與客戶保持良好互動並快速回應需求，獲得更多客戶的肯定與信任。</p>
                <div class="text-right">總經理曹憲章</div>
                <div class="text-right"><a href="https://www.ares.com.tw/events/181" class="btn btn-info mt-2">查看文章</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide p-3">
            <div class="row align-items-center">
              <div class="col-12 col-md-6 px-4">
                <img class="img-fluid rounded" loading="lazy" width="640" height="420" src="/img/product/crm/scania.jpg" alt="*">
              </div>
              <div class="col-12 col-md-6 px-4">
                <h3 class="color-blue">永德福汽車</h3>
                <p>透過系統自動化管理方式來落實客戶分級照顧、業務活動管理，提升車輛銷售預測（Rolling Forecast）精準度，實現擴大營運的目標！</p>
                <div class="text-right">資訊部經理廖志祥</div>
                <div class="text-right"><a href="https://marketing.ares.com.tw/newsletter/2007-08/product-2" class="btn btn-info mt-2">查看文章</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
<?php
$eventsConsult='/products/gd-crm/consult/';
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script>
window.addEventListener('load',function(){
  var swiper2 = new Swiper('#case-swiper', {
    slidesPerView: 1,
    loop: true,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
    // breakpoints:{
    //   720: {
    //     slidesPerView: 1,
    //   },
    //   992: {
    //     slidesPerView: 2,
    //   }
    // }
  });
})
</script>
</body>
</html>

