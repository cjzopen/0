<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='招募管理系統：建立人才庫、履歷精準媒合 - 資通電腦';
$page['description']='招募管理系統提供多元管道履歷收集、職缺自動媒合功能，並將面試、錄取、核敘、任用、報到各招募階段完整e化，為人資打造快速高效的招募流程！';
$page['canonical']='https://www.ares.com.tw/products/e-recruiting/';
// $page['css']=array('/lib/swiper9/style.css','/css/product-recruiting.css');
$page['css']=array('/css/product-recruiting.css?v=1');
$page['ogimage']='https://www.ares.com.tw/img/product/e-recruiting/og.jpg';

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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">招募管理系統</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('_nav.php');
?>
  </div>
  <main class="bg-gray">
    <header class="bg-white" id="main-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <h1 class="color-blue">招募管理系統領導品牌<br>打造企業人才庫</h1>
            <p class="h5">高科技製造業一致推薦，<br>用最短時間找到精準人才！</p>
          </div>
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid" width="610" height="370" src="/img/product/e-recruiting/e-recruiting.png" alt="*">
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="text-center">
          <iframe style="max-width: 100%;" width="560" height="315" src="https://www.youtube.com/embed/RjbuHMU5p0Y?si=7bd1uUpuhzqZKX9y" title="如何提升人才媒合率？建置人才庫有哪些好處？" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <h2 class="text-center color-blue my-3">中大型企業如何打造高效率招募管理</h2>
        <p>傳統面試耗費 HR 大量時間，也常發生招募人才不合期待、留任率不高的情況。其實職缺需求蒐集／發佈、履歷媒合／篩選、用人主管評估、邀約面試、安排測驗、寄發感謝函、履歷資料建檔… 等作業，交給招募管理系統就能輕鬆搞定，來看看它的貼心功能如何顛覆你的想像。</p>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 text-center pb-5">
            <img class="img-fluid" loading="lazy" width="1488" height="1160" src="/img/product/e-recruiting/recruit-structure.png" alt="招募管理系統包含應徵資料申請、應徵者管理、面試進度追蹤、聘任通知等作業流程。">
            <span>人才招募作業流程</span>
          </div>
        </div>
        <h3 class="text-center color-blue mt-4">優化招募體驗，強化企業人才發展策略</h3>
        <div class="row py-5" id="percentage">
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 351.858, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">招募進度可視化</div>
                  <div class="font-weight-bold">+100%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 351.858, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">人才評估數據化</div>
                  <div class="font-weight-bold">+100%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 351.858, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">累積企業人才庫</div>
                  <div class="font-weight-bold">+100%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 211.115, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">提升招募效率</div>
                  <div class="font-weight-bold">+60%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 211.115, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">找到優秀人才</div>
                  <div class="font-weight-bold">+60%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="lh-score__gauge">
              <div class="lh-gauge__wrapper lh-gauge__wrapper">
                <div class="lh-gauge__svg-wrapper">
                  <svg class="lh-gauge" viewBox="0 0 120 120">
                    <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="3"></circle>
                    <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="3" style="transform: rotate(-87.9537deg); stroke-dasharray: 246.301, 351.858;"></circle>
                  </svg>
                </div>
                <div class="lh-gauge__percentage">
                  <div class="color-black">打造雇主品牌</div>
                  <div class="font-weight-bold">+70%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 text-center mb-2">
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/product/e-recruiting/專屬招募儀表板.png" alt="招募系統儀表板">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-blue">專屬儀表板<br>HR／主管隨時掌握招募進度</h3>
            <p><em>“別再用 Excel 辛苦統計職缺需求數與到職人數”</em></p>
            <ul>
              <li>HR：本日面談數、面談結果、已錄取清單、待招募職缺數、待報到人數。</li>
              <li>主管：待招募職缺清單、待檢閱履歷、面談結果、面談清單、報到清單。</li>
            </ul>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center mb-2">
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/product/e-recruiting/自動化KPI報表.png" alt="招募績效報表">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-blue">招募績效報表，視覺化數據呈現</h3>
            <p><em>“不用人工整理，老闆要的績效數據馬上給”</em></p>
            <p>可依企業需求自動產出 KPI 招募績效報表，包含「招募達成率、到談率、錄取率、Offer 接受率、報到率及 Cycle Time 分析…」等。</p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 text-center mb-2">
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/product/e-recruiting/招募流程分析.png" alt="招募流程分析">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-blue">招募流程分析<br>找出求職中斷原因</h3>
            <p><em>“哪些求職者中斷招募作業？迅速抓出問題流程”</em></p>
            <p>顯示招募流程各階段人數，並提供中斷求職流程的人員原因分析，做為 HR 檢討招募作業的參考。</p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center mb-2">
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/product/e-recruiting/單一平台.png" alt="公司招募動態">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-blue">子公司招募動態，一目了然</h3>
            <p><em>“省去來回登入不同帳號的時間”</em></p>
            <p>多集團公司架構，支援繁中／簡中／英文…等多種語言。HR 可直接在系統中切換不同公司，查看各據點人員招募進度。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="advantage">
      <div class="container">
        <h2 class="color-blue text-center">善用招募管理系統<br>在眾多求職者中找到最佳人選</h2>
        <p>在大型企業中，人資往往負責多個部門、多種職缺的招募作業，每個職缺有多筆履歷資料等待篩選處理。HR 光是從茫茫履歷海中，尋覓適合的人選，就消耗掉大半精力。資通電腦招募管理系統可快速收集各管道履歷、自動媒合篩選職缺，並持續累積人才庫資料，幫企業輕鬆獲取人才。</p>
        <div class="text-center">
          <img class="img-fluid" loading="lazy" width="610" height="370" src="/img/product/e-recruiting/e-recruiting-2.png" alt="*">
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/e-recruiting/提高媒合率.webp" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-blue">權重設定，提高媒合率</h3>
            <p><em>“找人才不再大海撈針，讓人才適材適所”</em></p>
            <p>企業可自行設定媒合條件權重，系統每日自動比對符合條件的人才履歷，發送給 HR 與用人主管。</p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/e-recruiting/多管道履歷.webp" alt="*">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-blue">多管道履歷收集與發佈</h3>
            <p><em>“不用再辛苦儲存履歷資料”</em></p>
            <p>支援人力銀行、Linkedin、招募官網職缺發布與履歷收集，報到資料自動匯入 HR 系統。DL / IDL 不同職缺樣態切換不同招募流程。</p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-6 text-center">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/e-recruiting/累積人才庫.webp" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-blue">累積人才庫，主動觸及求職者</h3>
            <p><em>“找人不能只靠收履歷，善用口袋名單提升效率”</em></p>
            <p>累積各平台管道蒐集的履歷資料，企業一旦有用人需求，可透過多元搜尋機制快速撈取人才庫資料，將舊履歷活化利用。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-blue color-white">
      <div class="container">
        <h2 class="text-center">突破招募管理現況，搶得人才先機</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <p>企業想要提升招募效益，除了將作業流程自動化之外，優化求職者的接觸管道也是很好的辦法。例如：提供多元求職管道、縮短投遞履歷時間、可自行查詢面試進度，都可以提升求職者好感度，也幫企業爭取更多人才機會！</p>
          </div>
          <div class="col-12 col-md-4 mt-4">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/product/e-recruiting/企業專屬人才招募網站.png" alt="人才招募網站">
            </div>
            <h3 class="text-center h4">經營企業品牌，智慧選才</h3>
            <p>專屬人才招募網站，求職者可於人力銀行或到企業招募網站投遞履歷。</p>
          </div>
          <div class="col-12 col-md-4 mt-4">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/product/e-recruiting/多元管道登入.png" alt="多元管道登入">
            </div>
            <h3 class="text-center h4">多元管道登入，省時又方便</h3>
            <p>Facebook、Google、Linkedin 快速登入，或自建帳號／密碼登入。</p>
          </div>
          <div class="col-12 col-md-4 mt-4">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/product/e-recruiting/企業校園徵才網頁.png" alt="校園、戶外徵才">
            </div>
            <h3 class="text-center h4">線上登打，履歷資料即時整合</h3>
            <p>手機掃描 QR Code 輸入履歷資料，HR 不需花時間整理。若網路環境不佳，也可用 Excel 直接匯入履歷。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="case">
      <div class="image px-md-5">
        <!-- <div class="container-fluid px-md-5">
          <h2 class="color-blue text-center mb-5">企業成功案例</h2>
          <div id="case-swiper" class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="container-fluid px-5">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-4 text-center pb-3 pb-md-0">
                      <img class="img-fluid" loading="lazy" width="500" height="500" src="/img/product/e-recruiting/Amkor.png" alt="Amkor">
                    </div>
                    <div class="col-12 col-md-5">
                      <div class="h4">
                        <p class="mb-md-5">「資通電腦招募系統的擴充彈性與精細客製化，完全貼合我們內部招募流程，可完整蒐集人才資訊、提升數據分析精準度，達成招募績效目標！」</p>
                        <p class="text-right">／Amkor 人資副理 Rebecca</p>
                      </div>
                      <div class="text-right">
                        <a href="https://www.ares.com.tw/events/hcp-user-story-amkor-e-recruiting" class="btn bg-blue color-white" rel="noopener noreferrer" target="_blank">查看文章</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="container-fluid px-5">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-4 text-center pb-3 pb-md-0">
                      <img class="img-fluid" loading="lazy" width="500" height="500" src="/img/product/e-recruiting/PC.png" alt="PC">
                    </div>
                    <div class="col-12 col-md-5">
                      <div class="h4">
                        <p class="mb-md-5">「為因應國內外招募人力需求眾多，所以選擇資通電腦招募管理系統簡化招募流程、建立全球人才資料庫、提升徵才精準度。」</p>
                        <p class="text-right">／全球知名電腦領導品牌公司</p>
                      </div>
                      <div class="text-right">
                        <a href="https://www.ares.com.tw/events/hcp-user-story-computer-company" class="btn bg-blue color-white" rel="noopener noreferrer" target="_blank">查看文章</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div> -->
        <div class="container pb-5">
          <h2 class="color-blue text-center mb-5">客戶肯定</h2>
          <div class="row">
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/txc.jpg" alt="TXC">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">台灣晶技</div>
                  <p>全球第一大頻率元件製造商，專注研發、生產、銷售石英晶體諧振器與振盪器。除了導入 HCP 人資系統管理人事之外，也透過招募管理系統 e 化徵才流程，建立人才庫，活化庫存履歷、提高媒合效率。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/amkor.jpg" alt="amkor">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">艾克爾</div>
                  <p>全球第二大先進半導體封裝與測試服務供應商，產品包含晶圓凸塊、覆晶封裝、晶圓級封裝、測試製程與全球獨家的數位光源產品。資通 HCP 可完整串接 SAP 系統，統整艾克爾集團人事，並運用招募管理系統，打造高效率徵才服務。</p>
                </div>
                <div class="pb-3 text-center"><a href="https://www.ares.com.tw/events/hcp-user-story-amkor-e-recruiting" class="btn bg-blue color-white" rel="noopener noreferrer" target="_blank">詳細內容</a></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/asus.jpg" alt="asus">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">華碩電腦</div>
                  <p>主機板排名全球第一、消費性筆記型電腦排名前三大的國際品牌公司，主要營業項目為 3C 資訊產品設計、研發及銷售。透過 HCP 及招募管理系統，簡化差勤與招募流程，提升人資作業效率，輕鬆建立全球人才資料庫。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/nanshan.jpg" alt="nanshan">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">南山人壽</div>
                  <p>連續多年蟬聯英國專業財經網站「全球銀行及金融評論」之「臺灣最佳壽險公司」，本著「信賴、關懷、誠信」的信念，提供超越保戶期待的關懷服務與創新商品。南山運用招募管理系統建立完整人才庫與招募官網，強化企業品牌形象。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/vis.jpg" alt="vis">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">世界先進</div>
                  <p>台灣專業晶圓代工廠。目前擁有五座八吋晶圓廠，以「客戶服務為導向」的經營理念，提供全球客戶最佳支援服務。藉由導入招募管理系統，蒐集多元管道履歷，建立專屬企業人才庫。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/unimicron.jpg" alt="unimicron">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">欣興電子</div>
                  <p>世界級電路板、積體電路載板產業的供應商。以市場導向、客戶為尊的服務，提昇經營績效並獲客戶佳評。欣興透過招募管理系統建立自動化招募流程，並與人資系統串接，提高人事管理效率。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/ssstc.jpg" alt="建興儲存">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">建興儲存</div>
                  <p>全球記憶體領導廠商，具備儲存裝置領域多年的經驗及創意，提供客戶最可靠與高品質的 SSD 固態硬碟產品。招募管理系統能自動產製招募周報，協助建興節省大量人工整理時間，隨時掌握招募進度。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
              <div class="card flex-column flex-row justify-content-between h-100">
                <div class="d-flex align-items-center justify-content-center py-3">
                  <img class="img-fluid" loading="lazy" width="221" height="87" src="/img/product/e-recruiting/visera.jpg" alt="visera">
                </div>
                <div class="card-body">
                  <div class="h3 text-center color-blue">采鈺科技</div>
                  <p>台灣積體電路製造的子公司，專注於影像感測器後段製程，及晶圓級微光學元件的設計開發、製造與測試。透過招募管理系統將招募流程 e 化、快速產製分析報表，提升招募績效。</p>
                </div>
                <div class="pb-3 text-center"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
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

