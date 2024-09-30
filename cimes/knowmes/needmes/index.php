<?php
$url='https://cimes.ares.com.tw/knowmes/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='誰需要MES系統？立即評估工廠需求';
$page['description'] = 'MES 系統從產線、機台、工單與訂單資訊著手，藉由資訊與機台的整合，串聯 ERP，解決客戶交期、物料庫存、生產進度、機台稼動及資訊可視化等工廠製造問題。';
$canonical='https://cimes.ares.com.tw/knowmes/needmes/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/needmes/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="know">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  file_get_contents($_SERVER['DOCUMENT_ROOT']."/public/img/what/whatsmes-banner-icon.svg").'認識 MES', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">什麼是 MES</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">誰需要 MES</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php include('../_menu.php'); ?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0 text-center">製造現場問題百百種<br>如何評估工廠管理的 MES 系統需求</h1>
        <hr>
        <p class="col-lg-7 mx-auto">想「提高生產力、降低成本」MES系統是你最佳選擇，工廠生產所需的生產資源，例如：生產機台、工作站（工序）、生產流程、產品等資訊都可結合權限管理建構在 MES 系統上。快速檢視以下製造現場常見問題，導入 MES 正是您的迫切需求。</p>
        <ul class="row mt-5">
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>客戶訂單到底有多少？交期能否趕上？是否能再接單？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>在製品資訊不夠即時，永遠搞不清楚產線上存貨有多少</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>產線物料需求是否充足？半成品能否銜接客戶訂單交期？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>品質檢驗使用紙本記錄，客戶稽核、驗廠時無法追溯</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>產線異常總是無法即時發現，品質、良率無法達標</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>廠內設備未自動拋出資訊，無法即時得知產量與稼動率</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>工廠師傅經驗無法紀錄與傳承，導致擴廠與產業經驗延續困難</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>工廠管理無法銜接 ERP，導致生產調度困難、成本分析失準</span>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">MES 系統能解決哪些製造問題</h2><hr>
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-1.svg" alt="*"></div>
              <span>銜接 ERP 系統，開立訂單轉工單、報工分析、人員績效及成本精算、完工入庫拋轉等整合管理。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-2.svg" alt="*"></div>
              <span>即時反饋異常，追溯處理過程，並將產品製造與品質控管溯源相關資訊可視化。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-3.svg" alt="*"></div>
              <span>透過感測元件進行產線控管，並考量不同作業環境，透過行動裝置簡化人員蒐集數據的方式。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-4.svg" alt="*"></div>
              <span>監控工具壽命及定期保養，避免因工具異常而降低產能及生產品質。</div>
          </div>
          <div class="col-12 col-md-4 text-center d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="343" height="343" src="/public/img/what/need/mes.svg" alt="*">
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-5.svg" alt="*"></div>
              <span>紀錄詳實生產內容，分析各項指標(產能，良率，稼動，品質…)、統計製程管理、訂單追蹤等管理。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-6.svg" alt="*"></div>
              <span>生產前的物料比對與正確性檢查，避免用錯物料造成生產及商譽損失，維持品質一致性。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-7.svg" alt="*"></div>
              <span>機台自動拋轉資訊，無需仰賴人工輸入表單，即時得知產量與稼動率。</div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-8.svg" alt="*"></div>
              <span>蒐集機台資訊，強化與機台間的協同運作。</div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">哪些產業工廠管理需要 MES</h2><hr>
        <ul class="row">
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-1.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">汽車/車用零件</div>
              <div class="p-3">導入 MES 協助 AM 產業少量多樣產品製造特性，精準掌握產品製造交期。即時監控生產品質，降低生產製造成本提高生產效能。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/automotive">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-2.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">金屬加工</div>
              <div class="p-3">利用 MES 工具配件管理，可選用合適工具以提升製作效率。同時監控工具壽命及定期保養，避免因工具異常而降低生產品質。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/metal-assembly">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-3.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">射出成型</div>
              <div class="p-3">運用 MES 進行模具管理及物料管理，進行生產前模具比對及物料正確性檢查，減少錯誤率以避免生產損失。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/injection-moulding">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-4.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">LCD</div>
              <div class="p-3">MES 物料管理及自動化資料收集比對，讓玻璃來料切割到成品組裝，都可進行即時光學量測檢驗，並透過 SPC 系統即時警示，提升製程良率。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/lcd">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-5.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">LED</div>
              <div class="p-3">MES 系統提供驗證片判定回饋及分選效益預估，串聯磊晶（EPI）、晶粒（CHIP）、封裝（PKG）電性生產段，實現 LED 生產分析一條龍。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/led">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-6.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">半導體</div>
              <div class="p-3">導入 MES 系統與設備進行自動化整合，透過機台資訊蒐集、回饋與控制，精確掌控產品生產的每一個步驟。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/semiconductor">看更多案例</a></div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>