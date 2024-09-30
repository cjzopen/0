<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='政府專案服務, 政府網站建置與系統整合 | 資通電腦';
$page['description']='政府專案計畫系統整合可以帶來便捷的服務，並能提升機關業務績效。包含系統規劃與建置、資料移轉、系統開發、源碼檢測、資訊安全的政府專案輔導經驗，有效改善如經濟部中小企業處、衛服部等單位。';
$page['canonical']='https://www.ares.com.tw/services/gov/';
// $page['css']=array('/css/service.css');
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">政府專案服務</span></a>
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
      <h2 class="text-center">政府專案服務</h2>
      <hr>
      <p>資通電腦成立 <?= $age; ?> 年來具備許多大型政府電子化專案經驗，代表性專案包括公教人員退休撫卹平臺、數位學習暨終身學習護照、全球製造服務資訊整合管理解決方案輸出旗艦計畫、送子鳥資訊服務網服務推廣計畫、衛生福利部藥品查驗登記審查電子化作業平台建置…等，致力於政府 e 化作業的協助與推行。</p>
    </div>
  </section>
  <section class="bg-gray pb-0" style="background-color:#ececec;">
    <div class="container">
      <h2 class="text-center">政府專案推薦</h2>
      <hr>
      <div class="row justify-content-md-between justify-content-center">
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-1.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">政府施政成果網站</div>
              <p>依各縣市政府作業流程與地方特性，將所有施政案件集中至同一個平台進行數據管理，提升政府與民眾的溝通和參與度！</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2024-01-gov/achievement-system" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-2.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">採購管理系統</div>
              <p>針對不同採購型態的採購作業節點進行控制，提醒各單位每一個節點待辦事項，減少人為疏漏，完整掌控採購進度。</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2024-01-gov/procurement-system" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-3.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">財團法人資訊管理系統</div>
              <p>協助主管機關進行財團法人事務管控及報核資料的查詢與統計，達成財團法人資訊公開與政府推動業務電子化之目的。</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2024-01-gov/foundation-system" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
        <div class="col-12"></div>
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-4.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">議會議事資訊系統</div>
              <p>針對各單位議案流程特性，快速套入系統功能，簡化提案流程，提升送案審核效率！</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2023-11-si/system-integration-discussion-system" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-5.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">課務管理系統</div>
              <p>課程管理、排課、講師、報到、座位、伙食、宿舍等全部線上完成，提升工作效率。</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2021-08-gov/lesson-management" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
        <div class="col-10 col-md-3 p-3 mb-5">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <div class="text-center"><img class="img-fluid" src="/img/service/gov/gov-6.png" width="80" height="80" loading="lazy" alt="*"></div>
              <div class="h5 text-center">官網入口系統</div>
              <p>整合顧客體驗路徑及數據分析，提升社家署官網流量與曝光，使用滿意度 up。</p>
            </div>
            <div class="text-center"><a class="btn btn-info rounded-pill px-4" href="https://marketing.ares.com.tw/newsletter/2020-11-gov/focus" rel="noopener noreferrer" target="_blank">觀看成功案例</a></div>
          </div>
        </div>
      </div>
    </div>
    <img class="w-100 img-fluid" loading="lazy" width="3840" height="1200" src="/img/service/gov/bg.jpg" alt="*">
  </section>
  <section class="bg-gray">
    <h2 class="text-center">服務項目</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img width="289" height="266" loading="lazy" src="/img/service/services-gov-1.jpg" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
            <ul class="disc">
              <li>專案事前規劃</li>
              <li>專業系統規劃與建置</li>
              <li>資料移轉</li>
              <li>效能調校</li>
              <li>廠商連繫與客戶溝通協調</li>
              <li>管制系統建置</li>
              <li>源碼檢測服務</li>
            </ul>
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
              <img src="/img/service/gov-bestpractice/gov-logo-1-3.png" alt="衛生福利部" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-4.png" alt="食品藥物管理署" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-5.png" alt="中衛發展中心" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-6.png" alt="台北市議會" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-8.png" alt="高雄市政府" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-10.png" alt="財政部國有財產署" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-11.png" alt="國立台中科技大學" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-12.png" alt="法務部司法官學院" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-13.png" alt="行政院人事行政總處" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-1-14.png" alt="銓敍部" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-文化部.png" alt="文化部" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-行政院環保署.png" alt="行政院環境保護署" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-法官學院.png" alt="法官學院" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-台灣金融資產服務.png" alt="台灣金融資產服務" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-立法院.png" alt="立法院" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-交通部.png" alt="交通部" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-TERTEC.png" alt="財團法人台灣大電力研究試驗中心" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
          <li class="col-6 col-md-4 mb-3">
            <div class="border bg-white p-3">
              <img src="/img/service/gov-bestpractice/gov-logo-桃園市政府.png" alt="桃園市政府" class="img-fluid" width="300" height="100" loading="lazy">
            </div>
          </li>
      </ul>
    </div>
    <div class="container mt-5">
        <h3 class="color-blue">政府機關經驗</h3>
        <ul class="check">
          <li>人事行政總處 - 全國公教人員退休撫卹整合平臺</li>
          <li>中華民國對外貿易發展協會 - 海外參展決策輔助平台</li>
          <li>中衛中心 - 能源科專計畫資料整合管理系統建置及後續功能擴充維運</li>
          <li>公文系統推廣</li>
          <li>台北市議會 - 議法案及預決算審議 e 化系統</li>
          <li>行政院人事行政總處 - 人事服務系統</li>
          <li>行政院公共工程委員會 - 第 2 代技師與工程技術顧問公司管理資訊系統規劃、建置與維護</li>
          <li>法務部司法官學院 - 雲端數位學習系統採購案</li>
          <li>法務部司法官學院 - 課程線上報名系統建置委外服務案</li>
          <li>財政部國有財產署 - 逾期未辦繼承登記財產標售管理系統</li>
          <li>財團法人醫院評鑑暨醫療品質策進會 - 病安文化問卷調查系統</li>
          <li>高雄市政府人事處 - 人事服務網系統開發建置案</li>
          <li>國立臺中科技大學 - 各學制學務系統暨招生系統整合案</li>
          <li>國立臺中科技大學 - 教學品保系統建置案</li>
          <li>國家文官學院 - 數位學習服務平台</li>
          <li>推動中小企業知識管理（KM）運用計畫</li>
          <li>推動中小企業產業資料庫計畫</li>
          <li>推動中小企業電子化服務團計畫</li>
          <li>銓敘部 - 銓敘業務網路作業系統</li>
          <li>衛生福利部 - 中醫負責醫師訓練管理系統</li>
          <li>衛生福利部 - 中藥/西藥許可證系統</li>
          <li>衛生福利部 - 社會及家庭署網站</li>
          <li>衛生福利部 - 長照業者服務資訊化推廣</li>
          <li>衛生福利部 - 送子鳥資訊服務網服務推廣計畫</li>
          <li>衛生福利部食品藥物管理署 - 外銷食品證明線上申報系統建置及後續功能擴充維運</li>
          <li>衛生福利部食品藥物管理署 - 醫事簽審管理系統暨跨機關介接系統</li>
          <li>衛生福利部食品藥物管理署 - 藥品查驗登記審查電子化作業平台建置及後續推廣營運</li>
          <li>衛生福利部食品藥物管理署 - 藥掃描 APP 功能增修計畫</li>
          <li>衛生福利部食品藥物管理署 - 藥證業務管理資訊系統建置與後續擴充及維運</li>
        </ul>
    </div>
    <div class="container mt-5">
        <h3 class="color-blue">輔導案相關經驗</h3>
        <ul class="check">
          <li>全球製造服務資訊整合管理解決方案輸出旗艦計畫</li>
          <li>臺灣跨境電商物流中轉集貨模式分析與規劃</li>
          <li>供應鏈重整之物流推動計畫「供應鏈重整之產學運籌規劃補助」</li>
          <li>中小企業資訊創新升級計畫「創新升級輔導」</li>
          <li>數位內容補助計畫顧問服務 - 童話大冒險跨平台穿戴遊戲開發計畫</li>
          <li>經濟部工業局 - 品牌價值延伸客戶服務計畫</li>
        </ul>
    </div>
    
    <div class="container mt-5">
      <h3 class="color-blue">其他案例</h3>
      <ul class="check">
        <li>社會救助資源整合平台</li>
        <li>案件管制系統</li>
        <li>國會智慧資本管理系統</li>
        <li>酬酢品線上申辦系統</li>
        <li>廉政業務管理系統</li>
        <li>議案相關系統</li>
        <li>委託土地建案管理系統 / 土地建案管理系統</li>
        <li>食品查驗登記管理系統</li>
        <li>通關資料查詢系統</li>
        <li>全球資訊網暨署長信箱資訊系統</li>
        <li>財產估價資訊整合系統</li>
        <li>藥品安全監測通報系統</li>
        <li>藥物廣告查詢系統</li>
        <li>藥物違規案件紀錄系統</li>
        <li>醫事糾紛鑑定資訊系統</li>
      </ul>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

