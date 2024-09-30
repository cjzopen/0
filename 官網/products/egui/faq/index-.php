<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='電子發票系統建置常見問題 | eGUI資通電腦';
$page['description']='你知道導入電子發票有哪幾種模式?該選擇自建 Turnkey 還是委託加值服務中心上傳電子發票? 又什麼是 web 開立電子發票? 提供導入電子發票常見問題，快來一探究竟。';
$page['canonical']='https://www.ares.com.tw/products/egui/faq/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product-egui-faq.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
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
            <a href="../" itemprop="item"><span itemprop="name">eGUI</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">常見問題</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <aside class="bg-gray paging text-center" id="title">
      <ul>
<?php
$np='faq';
include ('../nav.php');
?>
      </ul>
    </aside>
  </div>
  <main itemscope itemtype="https://schema.org/FAQPage">
  <section class="faqgroup">
    <div class="container">
      <h1 class="text-center">導入電子發票前你需要先了解這些</h1>
      <hr>
      <ul class="row text-center swiper-pagination">
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-1.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">什麼是電子發票？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">依「統一發票使用辦法」第 7 條 <ul class="disc"><li>電子發票應有存根檔、收執檔及存證檔。</li>
          <li>電子發票證明聯的列印需依規定格式與紙質。</li>
          <li>開立電子發票的營業人，應依法規時限將統一發票資訊傳輸至財政部電子發票整合服務平台。</li></ul>傳輸內容應依照第 9 條規定：營業人開立統一發票，應據實載明字軌號碼、交易日期、品名、數量、單價、金額、銷售額、課稅別、稅額及總計…等。</div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-2.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">我該選擇哪種電子發票？有哪些優缺點？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><table class="table first-orange"><thead><tr><th></th><th>自建 Turnkey</th><th>委託加值服務中心</th><th>web 開立電子發票</th><th>web 上傳發票檔</th>  </tr></thead><tbody>  <tr><th>電子發票交易資訊上傳隱私度</th><td>高★</td><td>低</td><td>高★</td><td>高★</td>  </tr>  <tr><th>電子發票交換介接模式</th><td>有★</td><td>無</td><td>有★</td><td>無</td>  </tr>  <tr><th>由總機構導入，節省各分支機構導入成本</th><td>有★</td><td>無</td><td>無</td><td>無</td>  </tr>  <tr><th>電子發票傳送／接收及確認由電腦自動排程處理</th><td>有★</td><td>無</td><td>無</td><td>無</td>  </tr>  <tr><th>進項電子發票接收由電腦自動派送給負責人員做確認</th><td>有★</td><td>無</td><td>無</td><td>無</td>  </tr>  <tr><th>系統整合</th><td>有★</td><td>無</td><td>無</td><td>無</td></tr><tr><th>作業自動化</th><td>有★</td><td>無</td><td>無</td><td>無</td></tr></tbody></table></div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-3.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">資通電腦提供哪種電子發票方案？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">資通電腦提供<mark>自建電子發票系統導入 Turnkey 作業</mark>的方案，又稱自建 Turnkey，並協助客戶做系統整合客製，達到完全自動化作業。</div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray bg-lazyload faqgroup" data-image="/img/product/egui/axiom-pattern.png">
    <div class="container">
      <h2 class="text-center">高隱私自建 Turnkey 電子發票，適合大企業集團</h2>
      <hr>
      <ul class="row text-center swiper-pagination">
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-4.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">自建電子發票導入 Turnkey 是什麼？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">自行建置電子發票系統及導入 Turnkey 軟體上傳／接收財政部電子發票整合服務平台（大平台），就是營業人<mark>自行建置電子發票系統，並導入財政部提供的 Turnkey 軟體</mark>。在上線前自我檢測，取得財政部核准 Turnkey 上線通行碼後，持經濟部工商憑證向管區申請電子發票字軌核可，再註冊大平台帳號後即可<mark>開立／接收交換電子發票</mark>。</div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-5.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">自建 Turnkey 除了能確保交易資訊安全，還有哪些好處？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>可產生符合電子發票資料交換標準訊息建置指引 MIG 3.1.2 格式。</li>
          <li>符合 MIG 3.1.2 的電子發票交易資訊透過 Turnkey 軟體傳輸到電子發票整合服務平台，以工商憑證加密，<mark>不必經由第三方，擁有高隱私度，可確保交易資訊安全，並符合電子簽章法保障</mark>，以達到資料內容及傳輸的私密完整性、來源辨識性、不可否認性及可歸責性。</li>
          <li>營業人可整合內部（ERP）系統：<ul class="disc"><li>銷項發票／折讓資訊開立或作廢後，<mark>透過排程設定自動傳送大平台</mark>，正確迅速又方便，免去人為控制。</li>
          <li>交換的進項發票／折讓資訊也會透過排程自動接收並轉入系統，省去人工登打，避免人為疏失，並<mark>可與內部採購／驗收／請款流程進行整合</mark>，流程完全自動化。</li></ul></li>
          <li>流程資訊狀態掌控：可連貫內部系統 ERP、電子發票系統（eGUI）、Turnkey 到大平台的資訊流，從銷項電子發票開立、傳送、確認，到進項電子發票的接收、確認、資訊進入內部系統，掌握資訊流及作業自動化。</li>
          <li>電子發票傳送及接收採自動排程，無需人力介入，具完整報表比對成功數量，錯誤機率降低。</li>
          <li>完全符合電子發票整合服務平台規定的標準交換格式，交換資訊內容的設計及解析設定，<mark>可與不同客戶及供應商進行不同規則的交換作業</mark>。</li>
          <li>如營業人有分支機構，可由總機構規劃導入，以節省分支機構個別導入成本。</li></ul></div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-6.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">誰適合自建 Turnkey 方案？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>希望交易資料有絕對保密性的營業人</li>
          <li>考慮電子發票採交換介接模式的營業人</li>
          <li>對電子發票作業自動化及系統整合有高度需求的營業人</li></ul></div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="faqgroup">
    <div class="container">
      <h2 class="text-center">委託加值服務中心，交易資料保密性低</h2>
      <hr>
      <ul class="row text-center swiper-pagination">
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-7.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">什麼是委託加值服務中心？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">是指透過加值服務中心開立／接收電子發票，意思就是營業人持經濟部工商憑證向管區申請電子發票字軌核可，再註冊電子發票整合服務平台（大平台）帳號，即可授權加值服務中心開立／接收電子發票，只提供存證功能服務（不含交換功能）。營業人必須提供發票內容（包含交易明細、品項、單價、銷售額…等等）給第三方加值服務中心。</div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-8.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">委託加值服務中心有哪些潛在風險？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>建置系統低廉，節省開發系統所需時間及人力成本。</li>
          <li>不同加值服務中心檔案格式不同，維護困難。</li>
          <li>以人工 web 方式開立電子發票或批次上傳可被讀取的檔案，故無法系統整合，<mark>內部系統無法完整檢核，容易有資料遺漏錯誤情形</mark>。</li>
          <li>將電子發票可被讀取的檔案先傳到加值服務中心，再由其透過 Turnkey 軟體加密後傳到電子發票整合服務平台，<mark>作業過程中恐有資料安全問題</mark>。</li>
          <li>電子發票交易資訊先傳到加值服務中心，再由其代傳到電子發票整合服務平台，過程中<mark>無法即時確認上傳成功與否</mark>。</li>
          <li>多個加值服務中心開立電子發票，<mark>很難控管未開立電子發票字軌號碼</mark>。</li>
          <li>電子發票接收訊息無法傳遞給正確處理人。</li></ul></div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-9.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">哪些人適合委託加值服務中心？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>適用對交易資料保密性不在意的營業人</li>
          <li>對電子發票採交換介接模式持懷疑態度</li>
          <li>對建置成本高度敏感的營業人</li></ul></div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray bg-lazyload faqgroup" data-image="/img/product/egui/axiom-pattern.png">
    <div class="container">
      <h2 class="text-center">web 開立電子發票，無法系統整合需人工重複登打</h2>
      <hr>
      <ul class="row text-center swiper-pagination">
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-10.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">web 開立電子發票是什麼？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">是指營業人透過電子發票整合服務平台（大平台）以 web 介面直接開立／接收電子發票。意思就是營業人持經濟部工商憑證向管區申請電子發票字軌核可，再註冊大平台帳號後即可開立／接收交換電子發票。</div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-11.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">web 開立電子發票可能會有哪些問題？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>電子發票整合服務平台由財政部負責，故無系統建置成本。</li>
          <li>申請簡便，可快速導入。</li>
          <li>可上傳 EXCEL 檔批次開立交換發票。</li>
          <li>是以人工 web 上網方式進行開立／接收交換發票，故<mark>無法系統整合，內部系統必須人工重複登打，容易有資料錯誤的情形</mark>。</li>
          <li>因電子發票整合服務平台為大家共用，本模式資源分配順序低，速度效能難以預料。</li></ul></div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-12.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">誰適合使用 web 開立電子發票？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">適用開立發票張數及交易明細品項皆極少的營業人。</div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="faqgroup">
    <div class="container">
      <h2 class="text-center">自建電子發票系統 web 上傳發票，無交換功能</h2>
      <hr>
      <ul class="row text-center swiper-pagination">
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-13.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">自建電子發票系統 web 上傳發票是什麼？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">是指營業人自行建置電子發票系統並透過 web 上傳存證發票。意思就是營業人<mark>自行建置</mark>電子發票系統後，持經濟部工商憑證並檢具電子發票系統自行檢測表，向管區申請電子發票字軌核可，再註冊大平台帳號後，即可開立電子發票產製 <mark>CSV 檔上傳</mark>電子發票整合服務平台。</div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-14.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">自建電子發票系統 web 無交換機制，會有什麼影響？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"><ul class="decimal"><li>與電子計算機發票類似，轉換容易。</li>
          <li>在原有統一發票系統中自行建置電子發票系統，後產製存證發票 CSV 檔，再透過 web 上傳 CSV 檔到電子發票整合服務平台。</li>
          <li>必須列印電子發票證明聯紙本交給客戶，如上述第 1 項所言，流程類似電子計算機發票，故轉換容易。然而<mark>本模式純粹為存證發票，非交換發票，109 年 12 月 31 日止將停止以紙本方式取得電子發票證明聯，屆時營業人恐因交換機制而更換系統</mark>。</li>
          <li>以人工 web 方式上傳存證發票，故傳送狀態沒有整合，<mark>內部自建電子發票系統無法完整檢核，容易有資料遺漏錯誤情形</mark>。</li>
          <li>因系統為大家共用，上傳筆數有限制，速度效能更是難以預料。</li></ul></div></div>
        </li>
        <li class="col-12 col-md-4 mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <a class="q pagination" href="#">
            <div><img class="rounded-circle bg-blue" src="/img/product/egui/FAQ-15.svg" alt="*">
            <div itemprop="name" class="h5 mt-2">哪些人適合自建電子發票系統 web 上傳？</div></div>
          </a>
          <div class="ans text-left" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text">適用開立發票張數少的小型營業人。</div></div>
        </li>
      </ul>
    </div>
  </section>
  </main>
  <section class="bg-gray bg-lazyload py-5" data-image="/img/product/egui/axiom-pattern.png">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="p-3 bg-white position-relative h5">
            <img loading="lazy" width="360" height="200" src="/img/product/egui/link-1.jpg" alt="*" class="w-100 mb-3">
            <a href="/products/egui/articles/" class="stretched-link">如何搭配 GV.NET 一次升級電子發票流程？</a>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="p-3 bg-white position-relative h5">
            <img loading="lazy" width="360" height="200" src="/img/product/egui/link-2.jpg" alt="*" class="w-100 mb-3">
            <a href="/products/egui/" class="stretched-link">自建 Turnkey 電子發票系統除了可整合 ERP 還有哪些功能？</a>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="p-3 bg-white position-relative h5">
            <img loading="lazy" width="360" height="200" src="/img/product/egui/link-3.jpg" alt="*" class="w-100 mb-3">
            <a href="/products/egui/consult/" class="stretched-link">我對自建 Turnkey 電子發票系統有興趣，想直接諮詢！</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/egui-faq.js" defer></script>
</body>
</html>

