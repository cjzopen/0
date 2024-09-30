<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='金融法規報表申報平台系統 - 資通電腦';
$page['description']='一套透明且可追蹤的法報申報平台，讓報表規則便於使用者瞭解，報表數字明細便於使用者追蹤，申報規則可快速調整，報表數值可以相互勾稽，並產生申報檔案。';
$page['canonical']='https://www.ares.com.tw/products/nuntio/';
$page['css']=array('/css/product-nuntio.css');
$page['other']=array('<link rel="alternate" hreflang="zh" href="'.$page['canonical'].'" />','<link rel="alternate" hreflang="en" href="https://www.ares.com.tw/en/products/nuntio/" />');;
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">法規報表申報系統</span></a>
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
      <div class="row align-items-center">
        <div class="col-12 col-md-5 text-center d-none d-md-block">
          <img src="/img/product/nuntio/nuntio.png" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-7">
          <h1 class="underline h2">ARES Nuntio 法規報表申報平台系統 <br><span class="h3">透明、可追蹤，讓法報申報更智慧</span></h1>
          <p class="justify">不論是國內銀行或是海外籌設新據點及入資當地同業，已是營收成長的必經途徑，最常遭遇的困難是作業面要考量各地金融市場主管所規範的申報報表，若完全採交易系統產生報表，會造成過多客製化負擔；若完全採人工編表申報，則申報人員負擔極大，而兩種方式亦有申報規則不明、排除問題耗時、申報經驗無法傳承等問題。</p>
          <p>資通在協助許多銀行客戶導入核心系統於國內外市場的經驗累積下，深知需要推出不同思維的解決方案，才能讓報表規則更易於使用者瞭解，報表數字明細更便於使用者追蹤，申報規則需可快速調整，報表數值可以相互勾稽，並協助客戶產生申報檔案，因此推出 ARES Nuntio 法規報表申報平台。已在香港金融市場與澳洲金融市場具備導入實績，將為台灣金融市場帶來創新的報表申報為客戶服務新體驗。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
      <h2>銀行法規報表申報面臨哪些挑戰？</h2><hr>
      <ul class="row">
        <li class="col-12 col-md-4">
          <img src="/img/product/nuntio/challenge-1.svg" alt="*" class="img-fluid">
          <div class="h5 color-blue">申報填製規範之解讀</div>
          <p class="text-left">各地區監理機關通常會針對其申報報表提供填製說明或範例，但能同時理解申報規範與交易系統的人才難求，加上申報報表範圍橫跨不同交易內容，實難獨力處理不同業務類別的申報。</p>
        </li>
        <li class="col-12 col-md-4">
          <img src="/img/product/nuntio/challenge-2.svg" alt="*" class="img-fluid">
          <div class="h5 color-blue">申報所需資料架構之規劃</div>
          <p class="text-left">申報資料包含交易資料與分析資料，前者多在交易系統已提供，但後者才是能夠正確歸納分類的關鍵，卻不一定可由交易系統取得，所以其申報歸類常需流於人工判斷，而沒有申報規則的相互支持。</p>
        </li>
        <li class="col-12 col-md-4">
          <img src="/img/product/nuntio/challenge-3.svg" alt="*" class="img-fluid">
          <div class="h5 color-blue">稽核軌跡的工具</div>
          <p class="text-left">產生申報報表數字，絕非難事。一筆明細的類別或一個客戶的資訊錯誤，其骨牌效應影響多張報表，或與其他報表出現矛盾，銀行經辦會發現手上缺乏可自動相互勾稽的工具。</p>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">系統功能</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-2">
          <div class="lh-score__gauge">
            <div class="lh-gauge__wrapper lh-gauge__wrapper--nuntio">
              <div class="lh-gauge__svg-wrapper">
                <svg class="lh-gauge" viewBox="0 0 120 120">
                  <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="4"></circle>
                  <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="4" style="transform: rotate(-87.9537deg); stroke-dasharray: 175.929, 351.858;"></circle>
                </svg>
              </div>
              <div class="lh-gauge__percentage">50<span class="h5">%</span></div>
              <div class="text-dark">提升 50% 編表資料源問題釐清的效率</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="lh-score__gauge">
            <div class="lh-gauge__wrapper lh-gauge__wrapper--nuntio">
              <div class="lh-gauge__svg-wrapper">
                <svg class="lh-gauge" viewBox="0 0 120 120">
                  <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="4"></circle>
                  <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="4" style="transform: rotate(-87.9537deg); stroke-dasharray: 263.893, 351.858;"></circle>
                </svg>
              </div>
              <div class="lh-gauge__percentage">75<span class="h5">%</span></div>
              <div class="text-dark">提升 75% 編表規則差異釐清的效率</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="lh-score__gauge">
            <div class="lh-gauge__wrapper lh-gauge__wrapper--nuntio">
              <div class="lh-gauge__svg-wrapper">
                <svg class="lh-gauge" viewBox="0 0 120 120">
                  <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="4"></circle>
                  <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="4" style="transform: rotate(-87.9537deg); stroke-dasharray: 263.893, 351.858;"></circle>
                </svg>
              </div>
              <div class="lh-gauge__percentage">75<span class="h5">%</span></div>
              <div class="text-dark">減少 75% 報表計算規則微調的時間</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="lh-score__gauge">
            <div class="lh-gauge__wrapper lh-gauge__wrapper--nuntio">
              <div class="lh-gauge__svg-wrapper">
                <svg class="lh-gauge" viewBox="0 0 120 120">
                  <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="4"></circle>
                  <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="4" style="transform: rotate(-87.9537deg); stroke-dasharray: 281.486, 351.858;"></circle>
                </svg>
              </div>
              <div class="lh-gauge__percentage">80<span class="h5">%</span></div>
              <div class="text-dark">減少 25%~80% 規則調整後重產報表的時間</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="lh-score__gauge">
            <div class="lh-gauge__wrapper lh-gauge__wrapper--nuntio">
              <div class="lh-gauge__svg-wrapper">
                <svg class="lh-gauge" viewBox="0 0 120 120">
                  <circle class="lh-gauge-base" r="56" cx="60" cy="60" stroke-width="4"></circle>
                  <circle class="lh-gauge-arc" r="56" cx="60" cy="60" stroke-width="4" style="transform: rotate(-87.9537deg); stroke-dasharray: 175.929, 351.858;"></circle>
                </svg>
              </div>
              <div class="lh-gauge__percentage">50<span class="h5">%</span></div>
              <div class="text-dark">減少 50% 維護人員上手的時間</div>
            </div>
          </div>
        </div>
      </div>
      <ul class="row">
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-1.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">自動編製報表</div>
            <p class="m-0">依據金融金管機構的申報格式及預先設定的編製規則</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-2.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">申報驗證與勾稽</div>
            <p class="m-0">會計餘額與業務明細資料相互勾稽、欄位關聯提示</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-3.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">來源資料檢核</div>
            <p class="m-0">核心系統匯入之介面檔資料合理性檢查</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-4.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">追蹤異動原因</div>
            <p class="m-0">可修改報表欄位數字並記錄原因及修改歷程</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-5.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">欄位組成明細</div>
            <p class="m-0">可查詢報表欄位數字的組成明細</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-6.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">報表編製規則參數化設計</div>
            <p class="m-0">以參數設定方式製定報表編製規則及會計科目群組</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-7.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">使用者權限控</div>
            <p class="m-0">可設定角色負責特定報表，並指派使用者擔任之角色</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-8.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">報表版本控制</div>
            <p class="m-0">提供覆核解控流程及版次控管符合稽核作業要求</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="circle-icon shadow-none bg-info flex-shrink-0">
            <img src="/img/product/nuntio/fuction-9.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <div class="h5 color-blue">產製 XML 申報資料</div>
            <p class="m-0">產製符合金管機構申報平台之資料檔，可直接將申報資料匯入申報平台，免去人工輸入之操作</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">法定報表支援項目</h2>
      <hr>
      <p class="justify">提供資產與負債、損益、流動資金、大額風險、貸款分類、利率風險等相關法定報表支援。清單如下：</p>
      <table class="table bg-white table-bordered">
        <thead class="bg-info">
          <tr>
            <th>金融監管機構</th>
            <th>報送內容</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>中央銀行</td>
            <td>
              <ul class="decimal">
              <li>本國銀行國家風險統計表（R0910、R0914）</li>
              <li>LBS 地區性金融統計（表1 ~ 表8）</li>
              <li>DBU 人民幣（表.CN1、CN3）</li>
              <li>OBU 報表（表 FM1、FM2、FM3 等）</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>金檢局</td>
            <td>
              <ul class="decimal">
              <li>AI705 衍生性金融商品餘額月報表</li>
              <li>AI805 銀行辦理兩岸金融業務餘額表</li>
              <li>放款平均利率表 （表 13）</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>澳洲 APRA</td>
            <td>
              <ul class="decimal">
              <li>（ARF 112.2A）Standardised Credit Risk-Off-balance Sheet Exposures</li>
              <li>（ARF 117.0）Repricing Analysis</li>
              <li>（ARF 118.0）Off-balance Sheet Business</li>
              <li>（ARF 210.1A 等）Liquidity Forms</li>
              <li>（ARF 221.0）Large Exposures</li>
              </ul>
              <p>僅列出部分報表</p>
            </td>
          </tr>
          <tr>
            <td>香港 HKMA</td>
            <td>
              <ul class="decimal">
              <li>（MABS1）Return of Assets & Liabilities</li>
              <li>（MABS1E）Liquidity Position（LMR）</li>
              <li>（MABS6）Foreign Currency Position</li>
              <li>（MABS23）Return on Liquidity Monitoring Tools</li>
              <li>（MABS1C）Return of Current Year's Profit & Loss</li>
              </ul>
              <p>僅列出部分報表</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">導入法報系統可帶來什麼效益？</h2>
      <hr>
      <ul class="row">
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-1.svg" alt="*">
          <span class="pl-2">節省銀行編製報表人力成本，快速調整新交易與申報規則</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-2.svg" alt="*">
          <span class="pl-2">具申報金額明細追蹤資料來源，便於資料驗證與提早預警</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-3.svg" alt="*">
          <span class="pl-2">跨報表與資料檢核勾稽，降低人工申報錯誤率</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-4.svg" alt="*">
          <span class="pl-2">系統化保留申報規則與調整軌跡，減少人員異動影響</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-5.svg" alt="*">
          <span class="pl-2">系統架構易於申報人員、顧問、資訊單位快速溝通</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/benefit-6.svg" alt="*">
          <span class="pl-2">符合各金融市場主管機關法報申報要求，避免不必要的罰則</span>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">資通電腦團隊優勢</h2>
      <hr>
      <ul class="row">
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/advantage-1.svg" alt="*">
          <span class="pl-2">台灣四十年以上，唯一具備海內外核心系統導入和法規申報系統完整經驗之資訊系統整合商，團隊成員亦有銀行任職之經驗。</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/advantage-2.svg" alt="*">
          <span class="pl-2">提供完善的使用者操作教育訓練及售後服務。</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/advantage-3.svg" alt="*">
          <span class="pl-2">台灣第一家上市櫃軟體公司財務健全，並為 SWIFT 環球銀行金融電信協會亞太區系統服務最大供應商。</span>
        </li>
        <li class="col-12 col-md-6 d-flex align-items-center my-3">
          <img width="100" height="100" loading="lazy" class="flex-shrink-0" src="/img/product/nuntio/advantage-4.svg" alt="*">
          <span class="pl-2">從會計面、作業面到風險面評估，提供客戶全方位專業諮詢服務。</span>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <h2 class="text-center">產品比較表</h2>
    <hr>
    <div class="container">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th></th>
            <th>Excel</th>
            <th>Crystal Report</th>
            <th class="bg-blue color-white">ARES Nuntio</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-blue2">
            <th>複雜資料與不同後台來源處理</th>
            <td><span aria-label="yes">&#10004;</span></td>
            <td><span aria-label="yes">&#10004;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue4">
            <th>日常報表處理排程</th>
            <td><span aria-label="no">&#10008;</span></td>
            <td><span aria-label="no">&#10008;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue2">
            <th>大量資料的處理與應用</th>
            <td>筆數受限</td>
            <td>筆數受限</td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue4">
            <th>資料來源的合併分析</th>
            <td><span aria-label="yes">&#10004;</span></td>
            <td><span aria-label="yes">&#10004;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue2">
            <th>計算與跨表檢查</th>
            <td><span aria-label="yes">&#10004;</span></td>
            <td><span aria-label="no">&#10008;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue4">
            <th>報表數值調整與軌跡保存</th>
            <td><span aria-label="no">&#10008;</span></td>
            <td><span aria-label="no">&#10008;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue2">
            <th>申報規則變更履歷</th>
            <td><span aria-label="no">&#10008;</span></td>
            <td><span aria-label="no">&#10008;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
          <tr class="bg-blue4">
            <th>報表數值資料明細查詢</th>
            <td><span aria-label="no">&#10008;</span></td>
            <td><span aria-label="no">&#10008;</span></td>
            <td class="bg-info color-white"><span aria-label="yes">&#10004;</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

