<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
// $page['title']='CRM是什麼？CRM系統如何幫助企業提升業績？ - 資通電腦';
// $page['title']='CRM是什麼？立即瞭解CRM對企業的好處 - 資通電腦';
$page['title']='CRM是什麼？用GD-CRM精準行銷改善顧客服務品質 - 資通電腦';
$page['description']='善用CRM系統的自動化銷售管理機制，達成縮短銷售週期，提升業務管理績效、客戶滿意度與商機成交率。';
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">CRM</span></a>
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
      <h1 class="text-center">什麼是 CRM？</h1>
      <hr>
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-9">
          <p>CRM（Customer Relationship Management）是客戶關係管理的簡稱，它能幫助企業打造良好的客戶管理模式，包含業務銷售、行銷推廣、客戶服務……等。運用 CRM 系統軟體可以讓企業有能力以客戶數據作為決策依據尋找潛在客戶、培養銷售線索、成交訂單、維持客戶、提升客戶滿意度及回流率、增加銷售量。</p>
          <img class="img-fluid mb-3" loading="lazy" width="800" height="448" src="/img/product/crm/10c.png" alt="CRM的的目標與效益">
          <p>簡單來說，「10c」就是 CRM 的目標，企業可藉由 CRM 系統來維持或提升自身的獲利。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">CRM 如何幫助企業</h2>
    <hr>
    <div class="container">
      <p>以內部營運管理觀點來看，CRM 可將客戶資料表及工作追蹤記錄表電子化，提升作業執行效率及產出對決策有幫助的管理性報表，打造自動化銷售管理機制，達成縮短銷售週期、提高業績達成率的目標。</p>
      <ul class="row text-center">
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center" aria-hidden="true"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-1.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>客戶資料查找方便</strong></div>
          <p class="text-left">可將企業資訊、聯絡資料、客戶歷年報價單及服務歷程，儲存於 CRM 系統中，解決資料散落無法統整與交接不全的問題。</p>
        </li>
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center" aria-hidden="true"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-2.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>行動應用銷售服務管理</strong></div>
          <p class="text-left">自動提醒拜訪行程與工作交辦事項，以行動裝置打卡與語音輸入面談紀錄，回報工作進度。可連結 Google 地圖，搜尋附近其他客戶。</p>
        </li>
        <li class="col-12 col-md-4 mb-3">
          <div class="text-center" aria-hidden="true"><img class="img-fluid" loading="lazy" width="200" height="160" src="/img/product/crm/solution-3.svg" alt="*"></div>
          <div class="color-blue text-center"><strong>提升主管決策力</strong></div>
          <p class="text-left">建立商機大數據蒐集機制，即時查詢商機進度、預算金額、把握度等各項資訊，提升決策準確率。</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="video">
    <h2 class="text-center">CRM 的導入效益</h2>
    <hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>CRM 系統可以協助企業紀錄每一筆與客戶互動的詳細情形，將區分的客戶類別資料分享給相關部門與團隊，藉此改善企業內部的工作效率，並提升客戶的滿意度與留存率。</p>
        </div>
      </div>
          <ul class="row text-center">
            <li class="col-6 col-md-3 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-1.svg" alt="*" aria-hidden="true">
              <div>降低 <span class="h4">23%</span> 業務推廣費用</div>
            </li>
            <li class="col-6 col-md-3 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-2.svg" alt="*" aria-hidden="true">
              <div>減少 <span class="h4">70%</span> 相關會議時間</div>
            </li>
            <li class="col-6 col-md-3 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-3.svg" alt="*" aria-hidden="true">
              <div>提升 <span class="h4">65%</span> 銷售預測訂單能見度</div>
            </li>
            <li class="col-6 col-md-3 my-3">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/img/product/crm/benefit-4.svg" alt="*" aria-hidden="true">
              <div>提升 <span class="h4">41%</span> 客戶滿意度</div>
            </li>
          </ul>
    </div>
  </section>
  <section class="bg-gray">
  <h2 class="text-center">明確的 CRM 導入策略</h2>
    <hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>CRM 是「開源」的系統，對企業的效益著重在「營收」與「利潤」，幫企業提升客戶滿意度、利潤率與企業營收，若「開源」是您目前面臨的最大問題，導入 CRM 軟體就刻不容緩。而企業必須先有明確的導入流程策略，進一步推導出達成目標的「關鍵成功因素」與「衡量指標」，再根據企業本身的狀況思考是要一次完成導入，還是要分階段完成目標。</p>
          <p>對於中小企業來說建議分階段導入，因為分階段導入企業比較容易掌控投入的資金與時間成本，也較容易評估階段性目標是否達成，最後再看企業的需求是什麼，導入不同類型的 CRM 系統工具。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-3">
          <h2 class="underline">我們推薦的 CRM 系統</h2>
          <br>
          <p>資通電腦代理的 GD-CRM 能滿足小型企業到跨國公司在業務、行銷與服務的管理需求。</p>
          <p>企業可透過網站、Call Center、電子郵件、行動裝置等，輕鬆維繫客戶關係，讓管理工作變得更輕鬆省時，加速業績提升，達成開發新市場的目標！</p>
        </div>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "選對CRM工具，業績提升三成！隨時隨地掌握客戶資訊",
  "description": "GD-CRM是一套適合各行各業的「客戶關係管理系統」，滿足企業在業務、行銷與服務管理的需求，讓管理工作變得更簡單。",
  "thumbnailUrl": [
    "https://www.ares.com.tw/img/product/crm/cover.jpg"
   ],
  "uploadDate": "2019-12-18",
  "duration": "PT2M35S",
  "contentUrl": "https://www.youtube.com/watch?v=z4RQc3a4RFk",
  "embedUrl": "https://www.ares.com.tw/products/gd-crm/"
}
</script> -->
        <div class="col-12 col-md-6 text-center mb-3">
          <img class="img-fluid" loading="lazy" width="780" height="370" src="/img/product/crm/CRM-1.png" alt="多平台的CRM">
          <!-- <a href="https://youtu.be/z4RQc3a4RFk" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" loading="lazy" width="540" height="304" src="/img/product/crm/cover.jpg" alt="GD-CRM導入效益"></a> -->
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">GD-CRM 的優勢</h2><hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-1.svg" alt="*" aria-hidden="true">
            <div class="pl-4">可依個人日常業務管理重點，設計不同的入口管理版面，以頁籤方式呈現，讓管理重點一目了然。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-2.svg" alt="*" aria-hidden="true">
            <div class="pl-4">同步 Outlook 連絡人、行事曆，電子郵件可上傳至 CRM 系統備存，或轉追蹤記錄與服務記錄。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-3.svg" alt="*" aria-hidden="true">
            <div class="pl-4">用 Excel 設計各種樞紐分析及圖表的報表樣板，並設定排程報表，讓周報、月報定時發送給指定人員。</div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-5">
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink rounded-pill" loading="lazy" width="110" height="110" src="/img/product/crm/avantage-4.svg" alt="*" aria-hidden="true">
            <div class="pl-4">21 種即時統計管理分析圖表，方便使用者分析：客戶經營、商機追蹤、客服案件結案率等績效指標。</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">客戶回饋</h2>
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

