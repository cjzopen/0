<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='SI 資訊系統開發與整合服務 - 資通電腦';
$page['description']='提供專案系統開發與軟體整合服務，包含 API 整合開發、系統介接、資料移轉交換技術、軟體開發，滿足中大型企業與政府專案需求。';
$page['canonical']='https://www.ares.com.tw/services/system-development-integration/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product-si.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
  <aside class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">專業服務</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">系統整合開發</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </aside>
  <section>
    <div class="container">
      <h2 class="text-center">SI 資訊系統開發與整合服務</h2>
      <hr>
      <p class="justify">資通電腦擁有 <?= $age ?> 年 SI 系統開發與整合輔導經驗，提供企業與政府專業系統開發與軟體整合服務。透過成熟的系統介接、API 整合開發、資料移轉及交換技術，與嚴謹的專案管理流程，搭配獲國際研究機構 Gartner 魔力象限肯定的 Fortify 原始碼檢測工具，確保系統開發流程資訊安全，兼顧應用程式研發效率。能提供客戶最完善的系統開發專案規劃，並以自身豐富的產業導入 Know-How 給予各產業系統整合開發上更精準的解決方案與建議。</p>
    </div>
  </section>
  <section id="case">
    <h2 class="text-center">企業與政府強力推薦</h2><hr>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container pb-4">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="h4 color-blue">連鎖藥局</div>
                <h3 class="mb-5">中繼資料庫開發</h3>
                <p>開發資料同步 API，整合五個系統資料（購物網、服務網、EIP、POS、CRM），解決客戶歷年來不同時間，不同開發廠商系統資料庫欄位不一致的問題。</p>
                <ul class="disc">
                  <li>實做 SSO 單一簽入，減少重覆登錄的時間。</li>
                  <li>開發 RESTful API</li>
                  <li>各應用透過 API 交換數據</li>
                  <li>即時資料同步，各應用系統資訊共享，提升資料便利性。</li>
                  <li>提供內部人員查詢功能及權限設定。</li>
                  <li>機敏性資料加密。</li>
                </ul>
              </div>
              <div class="col-12 col-md-6 text-center">
                <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/service/si/case-1.png" alt="*">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="container pb-4">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="h4 color-blue">政府單位</div>
                <h3 class="mb-5">資料庫整合、行政流程自動化</h3>
                <p>整合人事、行政業務、公文系統、出納系統…等相關業務系統，可跨單位、跨系統、跨平台，達到人事資料一致化。並整合異質資料庫，讓日常行政業務系統自動化，達成完整度極高的事務資訊流程自動化環境。</p>
              </div>
              <div class="col-12 col-md-6 text-center">
                <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/service/si/case-2.png" alt="*">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="container pb-4">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="h4 color-blue">大專院校</div>
                <h3 class="mb-5">E-Learning 平台</h3>
                <p>利用 ARES PP DRM 的產品為基礎，結合學校現有的 E-Learning 系統，整合學生與校務課程資料，控管並保護教授、老師上傳在學校的教學電子檔，唯有選修課程的學生才可以使用教材內容，大大提升師生們使用 E-Learning 平台的效益及意願。</p>
              </div>
              <div class="col-12 col-md-6 text-center">
                <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/service/si/case-3.png" alt="*">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section class="bg-gray pb-0">
    <div class="bg-lazyload pb-5" data-image="/img/service/si/system-1.png">
      <h2 class="text-center hr">程式開發、軟體開發、API 整合</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5">
            <ul class="disc">
              <li>門市叫號系統 + App (Android)</li>
              <li>預掛待辦系統 + App (Android + iOS)</li>
              <li>RFID 盤點系統 + App (Android)</li>
              <li>B2B 電商平台</li>
              <li>供應商物流平台</li>
              <li>維修管理系統</li>
              <li>官網改版案</li>
              <li>庫存管理系統</li>
              <li>客服案件管理系統</li>
              <li>申請審查系統</li>
              <li>非現金自助繳費系統</li>
              <li>自動報價單系統</li>
              <li>特權存取控管暨防駭系統</li>
            </ul>
          </div>
          <!-- <div class="col-12 col-md-9 hidden-xs hidden-sm">
            <img data-src="/img/service/si/system-1.png" alt="si" class="img-fluid lazyload">
          </div> -->
        </div>
      </div>
      <!-- <div class="hidden-xs hidden-sm" style="padding:5rem"></div> -->
    </div>
  </section>
  <section class="pb-0">
    <div class="container">
      <h2 class="text-center hr">網站開發、系統開發</h2>
      <div class="row">
        <div class="col-12 col-md-7 d-none d-md-block wow fadeInUp">
          <img src="/img/service/si/system-2.png" alt="si" class="img-fluid">
        </div>
        <div class="col-12 col-md-5">
          <ul class="disc">
            <li>財團法人資訊管理系統</li>
            <li>全球資訊網 & 主題網</li>
            <li>問卷調查系統</li>
            <li>財物管理系統</li>
            <li>人事薪資管理系統</li>
            <li>許可證審查及發證系統</li>
            <li>全球招募系統</li>
            <li>行政資源整合系統（報名、排課、課程管理、講師管理）</li>
            <li>行政校務系統（教務、學務、總務）</li>
            <li>財產估價管理系統</li>
            <li>產線在線管理系統</li>
            <li>平面媒體廣告管理系統</li>
            <li>薪資出納系統</li>
            <li>客戶資料管理暨應用資訊系統</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray text-center">
    <h2>嚴謹的軟體開發流程，提升專案品質</h2>
    <hr>
    <div class="container">
      <img src="/img/service/si/structure.png" alt="si" class="img-fluid">
    </div>
  </section>
  <section class="pb-0">
    <h2 class="text-center">關於專案系統開發 您是否有這些困擾？</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 d-block d-md-none">
          <ul class="check pb-4">
            <li>開發出錯誤系統功能</li>
            <li>系統測試不確實產生 Bug</li>
            <li>舊系統移轉到新系統的資料遺漏或出現錯誤</li>
            <li>無法掌握開發進度</li>
            <li>新開發的系統軟體無法與舊有系統介接整合</li>
            <li>廠商沒有同類型產業系統建置經驗</li>
            <li>擔心系統穩定性及安全性</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="d-none d-md-block text-center">
      <img src="/img/service/si/system-3.png" alt="系統開發困擾" class="img-fluid">
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">系統整合商推薦<br>四大優勢選擇資通電腦</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img src="/img/service/si/advantage-1.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt-0 h4">資料介接移轉技術</div>
              <p>與各國際大廠結盟轉移技術，擁有成熟的資料庫管理、異質系統介接、舊系統更新、新舊系統資料移轉能力，提供最有效率的系統開發流程。</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img src="/img/service/si/advantage-2.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt-0 h4">經驗豐富的效能調校</div>
              <p>無論是資通自行開發或其他廠商開發系統，藉由資通專業的效能調校服務，找出最關鍵的螺絲，大大提升系統效能及穩定度。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img src="/img/service/si/advantage-3.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt-0 h4">國際級資安檢測工具</div>
              <p>使用屢得 Gartner 魔力象限肯定的 Fortify 原始碼檢測工具，IT 開發人員透過靜態與動態程式碼分析，預先找出程式碼弱點、資安漏洞及惡意程式，確保 DevOps 資安無虞。</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img src="/img/service/si/advantage-4.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt-0 h4">豐富大型系統建置經驗</div>
              <p>資通電腦具 <?= $age ?> 年系統開發、系統規劃與設計、系統整合經驗以及各領域經營知識，能提供各類型產業跨系統整合與開發上更精準的解決方案與建議。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">成功經驗</h2>
    <hr>
    <div class="container">
      <ul class="row text-center">
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/si/SI-logo-中華航空.png" alt="中華航空" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/si/SI-logo-muji.png" alt="台灣明治" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/si/SI-logo-台灣普利司通.png" alt="台灣普利司通" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/si/SI-logo-勤崴國際科技.png" alt="勤崴國際科技" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/si/SI-logo-艾克爾.png" alt="艾克爾" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
      </ul>
    </div>
  </section>
  <div class="p-4 text-center" style="background-image:linear-gradient(90deg,#3FA2AB, #1076C8);"><a href="/services/outsourcing/" class="text-white">需要即時的技術人力嗎？軟體工程師駐廠服務</a></div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script>
window.addEventListener("load",function(){
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
      // slidesPerView: 'auto'
      // lazy:true,
      loop: true
  });
})
</script>
</body>
</html>

