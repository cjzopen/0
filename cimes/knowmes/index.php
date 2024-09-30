<?php
require $_SERVER['DOCUMENT_ROOT'].'/src/setting.php';
$contact=0;
// $page['title'] = '什麼是 MES 製造執行系統？滿足生產線製造管理需求';
// $page['title'] = '什麼是MES製造執行系統？和ERP的整合與效益';
$page['title'] = '什麼是MES製造執行系統？';
$page['description'] = 'MES 是幫助企業與工廠從接獲訂單、生產、流程控制到產品完成，主動收集及監控製造過程中所產生的生產資料，以確保產品生產品質的應用軟體。整合 ERP 串聯工廠與營運資訊流，縮短投產時間與入庫作業等效益。';
$page['keywords'] = 'mes, mes 系統, 什麼是 mes, 製造執行系統, 什麼是 mes 系統, mes 意義, mes 功能, mes 效益';
// $page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/public/css/newsletter-list.css');
$page['css']=array('/public/css/newsletter-list.css');
$canonical = 'https://cimes.ares.com.tw/knowmes/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/';
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/what/whatsmes-800.png';

require $_SERVER['DOCUMENT_ROOT'].'/template/head.php';
?>
<div class="all" id="know">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/template/menu.php';
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  '認識 MES', //圖片上的字
  null //字的 class
);
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ImageObject",
  "contentUrl": "https://cimes.ares.com.tw/public/img/what/whatsmes-800.png",
  "description": "MES 是從工單、生產、設備管理、保養、品質管制到出入庫、進出貨等整合的系統，可以說是一個製造形態工廠的核心。從公司接到客戶訂單到出貨給客戶，中間生產過程的控管，就是 MES 發揮功能的地方。",
  "name": "MES關聯與說明"
}
</script>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">什麼是 MES</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
<?php include '_menu.php'; ?>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <h1 class="text-center">MES（Manufacturing Execution System）</h1><hr>
            <p>中文名稱為「<dfn>製造執行系統</dfn>」，也可稱為「工廠營運管制系統」，是用來幫助企業從接獲訂單、進行生產、流程控制一直到產品完成，主動收集及監控製造過程中所產生的生產資料，以確保產品生產品質的應用軟體。</p>
            <p>透過關連式資料庫、圖形化使用介面、開放式架構等資訊相關技術，MES 能將企業生產所需的核心業務如訂單、供應商、物管、生產、設備保養、品管等流程整合在一起，將工廠生產線上即時的生產資訊以 web 或其他通知方式準確地傳送給使用者監看，當生產過程發生緊急事件時，還能提供現場緊急狀態的資訊，並以最快速度通知使用者。企業引進 MES 目的在於致力降低沒有附加價值的活動對工廠營運的影響，進而改善企業製程，提高生產效益。</p>
            <figure class="text-center mb-3">
              <a href="/public/img/what/whatsmes-800.png"><img class="img-fluid" loading="lazy" width="822" height="360" src="/public/img/what/whatsmes-800.png" alt="MES 是從工單、生產、設備管理、保養、品質管制到出入庫、進出貨等整合的系統"></a>
            </figure>
            <p>MES 是從工單、生產、設備管理、保養、品質管制到出入庫、進出貨等整合製造流程的系統，可說是製造形態工廠的核心。從公司接到客戶訂單到出貨給客戶，中間生產過程的控管，就是 MES 發揮功能的地方。</p>
            <h2 class="text-center mb-0 mt-5 pt-5">MES 核心功能有哪些？</h2><hr>
            <p>MES 核心管理模組是智慧製造應用的根基，能協助工廠製造資料流程自動化、減少手動輸入的需求、落實標準化流程管理、生產履歷追溯、品質管理、物料管理與追溯、即時在製品管理等，提升製造準確度並加速管理決策流程。</p>
            <figure class="text-center">
              <a href="/public/img/what/MES流程應用與架構圖.webp"><img class="img-fluid" loading="lazy" width="1594" height="916" src="/public/img/what/MES流程應用與架構圖.webp" alt="MES流程應用與架構圖"></a>
            </figure>
            <div class="text-center">
              <a class="btn btn-cimes my-3 px-3" href="/products/">ciMes 核心模組</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">MES 能解決哪些問題</h2><hr>
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-1.svg" alt="*"></div>
              <span>銜接 ERP 系統，開立訂單轉工單、報工分析、人員績效及成本精算、完工入庫拋轉等整合管理。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-2.svg" alt="*"></div>
              <span>即時反饋異常，追溯處理過程，並將產品製造與品質控管溯源相關資訊可視化。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-3.svg" alt="*"></div>
              <span>透過感測元件進行產線控管，並考量不同作業環境，透過行動裝置簡化人員蒐集數據的方式。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-4.svg" alt="*"></div>
              <span>監控工具壽命及定期保養，避免因工具異常而降低產能及生產品質。</span></div>
          </div>
          <div class="col-12 col-md-4 text-center d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="343" height="343" src="/public/img/what/need/mes.svg" alt="*">
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-5.svg" alt="*"></div>
              <span>紀錄詳實生產內容，分析各項指標(產能，良率，稼動，品質…)、統計製程管理、訂單追蹤等管理。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-6.svg" alt="*"></div>
              <span>生產前的物料比對與正確性檢查，避免用錯物料造成生產及商譽損失，維持品質一致性。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-7.svg" alt="*"></div>
              <span>機台自動拋轉資訊，無需仰賴人工輸入表單，即時得知產量與稼動率。</span></div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center border">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/public/img/what/need/mes-8.svg" alt="*"></div>
              <span>蒐集機台資訊，強化與機台間的協同運作。</span></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">MES 導入效益</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p class="text-center">根據 MESA international 調查的數據顯示，企業導入 MES 後可以帶來如下的具體效益：</p>
            <table class="table table-bordered table-striped fff-bg mx-auto">
              <tbody>
                <tr>
                  <th width="166">產品週期</th>
                  <td width="120">縮短 35%</td>
                </tr>
                <tr>
                  <th>建檔時間</th>
                  <td>縮短 36%</td>
                </tr>
                <tr>
                  <th>在製品數量</th>
                  <td>減少 32%</td>
                </tr>
                <tr>
                  <th>文書工作</th>
                  <td>減少 67% (班次間)</td>
                </tr>
                <tr>
                  <th>產品品質</th>
                  <td>不良品減少 22%</td>
                </tr>
                <tr>
                  <th>文件／設計圖</th>
                  <td>遺失率下降 55%</td>
                </tr>
              </tbody>
            </table>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="800" height="460" src="/public/img/what/MES-benefit.png" alt="導入MES後的效益">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">MES 系統整合架構</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>透過國際自動化協會 ISA-95 與 IEC/ISO 62264 定義的企業與控制系統整合架構，可說明 MES 系統與其他異質系統的整合應用，幫助工廠邁向智慧製造。</p>
            <div class="text-center">
              <img loading="lazy" width="800" height="500" class="img-fluid" src="/public/img/what/企業與控制系統整合架構.png" alt="企業與控制系統整合架構">
            </div>
            <h3>第 5 層：企業決策層</h3>
            <p>透過 BI 或 DSS 支援系統，整合企業各層級資料，提供高階管理者決策參考。</p>
            <h3>第 4 層：企業營運層</h3>
            <p>以 ERP 及 APS 系統掌握營運狀況，取得訂單、銷售等關鍵資訊，並將工單、排程資訊與 MES 系統整合。</p>
            <h3>第 3 層：製造營運層</h3>
            <p>多以 MES 系統為主，承接 ERP 開立的工單，並蒐集工廠設備所串出的生產資訊，控管整個生產過程。</p>
            <h3>第 2 層：生產程序監控與控制層</h3>
            <p>除常見的 SCADA 監控整廠環境外，也有 EAP、BC 擔當設備與 MES 系統的橋樑，負責通訊功能及部分流程控制。</p>
            <h3>第 0~1 層：實體設備層與感測控制層</h3>
            <p>主要為硬體本身，如：馬達、CNC 控制器、量測設備、感測器、訊號擷取卡、HMI 人機介面…等。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="compare-erp">
      <div class="container">
        <h2 class="text-center mb-0">MES 與 ERP 的差別在哪裡？</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>運用 MES 可以深入分析人員和機械設備稼動率、材料損耗狀況、WIP 在製品轉移過站數量、分析各工作站作業效率，以便主管進行工廠人力資源調動決策，有效平衡產能達成生產績效與目標。</p>
            <p>ERP 可以提供所有企業營運中所需的採購、財務、銷售、生產訂單管理…等營運計劃層面的資訊。但以實際的生產過程來說，除了材料的領用消耗外，ERP 無法提供工單派發、生產履歷追蹤、SPC 品質分析、設備稼動率分析、機台預修保養…等工廠現場執行面的資訊蒐集，而這一點只有 MES 系統能做到！</p>
            <p>唯有透過整合 MES 與 ERP 系統，將產品生命週期中各階段的資訊流串聯接軌，才能發揮 1+1>2 的綜效，協助企業邁向智慧製造數位轉型之路。</p>
            <table class="table table-bordered table-striped fff-bg">
              <thead class="main-bg fff-color">
                <tr>
                  <th>管理項目</th>
                  <th>ERP 系統</th>
                  <th>MES 系統</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>範圍</th>
                  <td>整個企業的營運管理</td>
                  <td>生產線或生產分廠管理</td>
                </tr>
                <tr>
                  <th>對象</th>
                  <td>營運資源（人、財、物）</td>
                  <td>生產現場資源（設備、製程、物料…等）</td>
                </tr>
                <tr>
                  <th>內容</th>
                  <td>價值鏈和供應鏈營運整合</td>
                  <td>生產與產品製程的執行管理</td>
                </tr>
                <tr>
                  <th>時效</th>
                  <td>較寬，以年、季、月、旬或周、日為單位</td>
                  <td>較精細，以日、班、小時為單位</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h2 class="text-center mb-0 mt-5 pt-5">MES 與 ERP 的整合</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 order-3 order-md-2">
            <p>ERP 系統架構偏規劃面，MES 系統則重執行面，因屬性不同往往被當作獨立系統運作，且傳統企業資源管理也多以財務、會計為出發點的 ERP 系統為主。</p>
            <h3 class="mb-3">不再獨立運作！MES 攜手 ERP 改善製造管理難題</h3>
            <p>但隨企業經營與生產管理觀念進化，單靠 ERP 系統的製造模組難以勝任即時的製造現場管理。因此，從工廠營運層考量的專用製造執行系統 MES 便應運而生。</p>
            <p>MES 充當了工廠設備控制端與企業營運端之間的橋樑。運用 MES 蒐集製造現場即時資訊，支援工廠細部製程管理，加以結合負責營運管理的 ERP，將生產數據反饋給 ERP 系統，讓企業整體資源調度上更加便利與精準，縮小導入智慧製造時工廠與營運管理系統之間的鴻溝。</p>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-3 pb-3">
            <!-- <a data-fancybox href="https://www.youtube.com/watch?v=QAnwUxDXHTA" id="youtube">
              <img src="/public/img/what/快問快答.jpg" alt="MES快問快答" class="img-fluid" width="640" height="360" loading="lazy">
            </a> -->
            <div class="ratio-box">
              <iframe src="https://www.youtube.com/embed/QAnwUxDXHTA" style="border:0px #ffffff none;max-width:100%" title="有ERP了還需要MES嗎？" name="有ERP了還需要MES嗎" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="348px" width="620px" loading="lazy" allowfullscreen></iframe>
            </div>
          </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "什麼是MES？有ERP了還需要MES嗎？",
  "description": "運用 MES 蒐集製造現場即時資訊，支援工廠細部製程管理。加以結合負責營運管理的 ERP 能讓企業整體資源調度上更加便利與精準，縮小導入智慧製造時工廠與營運管理系統之間的鴻溝。",
  "thumbnailUrl": [
    "https://cimes.ares.com.tw/public/img/what/快問快答.jpg"
   ],
  "uploadDate": "2020-11-13",
  "duration": "PT1M32S",
  "contentUrl": "https://www.youtube.com/watch?v=QAnwUxDXHTA",
  "embedUrl": "https://cimes.ares.com.tw/knowmes/"
}
</script>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">MES 與 ERP 整合應用</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>透過 ciMes 中的 ERP 資料拋轉介面，即時匯入 ERP 相關資訊如：工單、BOM 表、發料資料，並將完工資訊回報給 ERP，完整串接兩個系統的資訊，大幅縮短投產時間與入庫作業。</p>
            <p>ERP 與 MES 整合清單：</p>
            <table class="table table-bordered table-striped fff-bg">
              <tbody>
                <tr>
                  <td>料件主檔 (ERP → ciMes)</td>
                  <td>ERP 料件主檔定期同步至 ciMes。</td>
                </tr>
                <tr>
                  <td>工單主檔 (ERP → ciMes)</td>
                  <td>ERP 工單開立確定後拋轉 ciMes。</td>
                </tr>
                <tr>
                  <td>工單 BOM 表 (ERP → ciMes)</td>
                  <td>依工單發料當時套用的 BOM 表版本轉資料至 ciMes。</td>
                </tr>
                <tr>
                  <td>工單發料 (ERP → ciMes)</td>
                  <td>將依工單成套發料明細轉至 ciMes 並建立物料批。</td>
                </tr>
                <tr>
                  <td>工單退料 (ciMes → ERP)</td>
                  <td>產線退料情況，由 ciMes 將資料轉至 ERP。</td>
                </tr>
                <tr>
                  <td>完工入庫 (ciMes → ERP)</td>
                  <td>成品入庫資料轉至 ERP 的成品倉。</td>
                </tr>
                <tr>
                  <td>不良品入庫 (ciMes → ERP)</td>
                  <td>生產過程之報廢即時轉至 ERP 的不良品倉。</td>
                </tr>
                <tr>
                  <td>工時轉入 (ciMes → ERP)</td>
                  <td>將實際生產工時轉入 ERP 系統供成本計算。</td>
                </tr>
                <tr>
                  <td>WIP 過站訊息 (ciMes → ERP)</td>
                  <td>生產過站資訊轉入 ERP。</td>
                </tr>
              </tbody>
            </table>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">製造現場問題百百種<br>如何評估工廠管理的 MES 系統需求</h2>
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
              <span>在製品資訊是否即時？能否搞清楚產線上存貨有多少？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>產線物料需求是否充足？半成品能否銜接客戶訂單交期？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>品質檢驗在記錄之後，客戶稽核、驗廠時能否追溯？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>產線異常能否即時發現？品質、良率能否達標？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>廠內設備能否自動拋出資訊，即時得知產量與稼動率？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>工廠師傅經驗能否紀錄與傳承，讓擴廠與產業經驗延續順利？</span>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="d-flex align-items-center main-bg fff-color p-3 rounded">
              <span>工廠管理能否銜接 ERP，讓生產調度容易、準確分析所需成本？</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="container">
        <h2 class="text-center mt-5">為什麼選資通 ciMes？</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通電腦 ciMes 系統榮獲台灣精品獎與 Gartner 建議台灣唯一參考 MES 廠商。採用 Web-based 架構，並提供極為完整的工廠生產管理與控制之相關模組；透過彈性的系統結構，依照不同產業特性提供不同的產品模版，縮短軟體開發流程，使 MES 系統可在短期內實施上線，改進企業生產線管理方式，進而提升企業的競爭力。</p>
            <p>ciMes 顧問團隊輔導上百家客戶導入系統，也累積各產業實戰經驗，透過了解產業 Know-How 結合企業內部管理流程，協助規劃出符合企業所需的 MES 製造管理平台，是挑選製造執行系統的不二選擇！</p>
          </div>
        </div>
        <div class="text-center py-3">
          <a class="btn btn-cimes m-3 px-4 py-3" href="/knowmes/why/">ciMes 的優勢</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">哪些產業工廠管理需要 MES</h2><hr>
        <ul class="row">
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-1.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">汽車/車用零件</div>
              <div class="p-3">導入 MES 協助 AM 產業少量多樣產品製造特性，精準掌握產品製造交期。即時監控生產品質，降低生產製造成本提高生產效能。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/automotive">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-2.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">金屬加工</div>
              <div class="p-3">利用 MES 工具配件管理，可選用合適工具以提升製作效率。同時監控工具壽命及定期保養，避免因工具異常而降低生產品質。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/metal-assembly">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-3.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">射出成型</div>
              <div class="p-3">運用 MES 進行模具管理及物料管理，進行生產前模具比對及物料正確性檢查，減少錯誤率以避免生產損失。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/injection-moulding">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-4.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">LCD</div>
              <div class="p-3">MES 物料管理及自動化資料收集比對，讓玻璃來料切割到成品組裝，都可進行即時光學量測檢驗，並透過 SPC 系統即時警示，提升製程良率。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/lcd">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-5.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">LED</div>
              <div class="p-3">MES 系統提供驗證片判定回饋及分選效益預估，串聯磊晶（EPI）、晶粒（CHIP）、封裝（PKG）電性生產段，實現 LED 生產分析一條龍。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/led">看更多案例</a></div>
            </div>
          </li>
          <li class="col-12 col-md-4 my-3">
            <div class="border rounded position-relative fff-bg">
              <img loading="lazy" width="380" height="120" src="/public/img/what/need/application-6.jpg" alt="*" class="img-fluid w-100">
              <div class="pt-2 text-center h4 main-color">半導體</div>
              <div class="p-3">導入 MES 系統與設備進行自動化整合，透過機台資訊蒐集、回饋與控制，精確掌控產品生產的每一個步驟。</div>
              <div class="px-3 text-right"><a class="btn btn-cimes my-3 px-3 stretched-link" href="/best-practices/semiconductor">看更多案例</a></div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '發現真正的 MES 製造管理需求',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-09/mes'
  )
  ,array(
    'text' => 'MES 製造管理的契機：改變',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-01/it-1'
  )
  ,array(
    'text' => '打通企業製造管理任督二脈 MES 與其他系統整合',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-09/products-2'
  )
  ,array(
    'text' => '運用 MES 製造管理面創造企業競爭力',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-07/products-2'
  )
  ,array(
    'text' => '不要問 MES 系統能給你什麼？先問自己需要什麼？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2008-12/products-1'
  )
  ,array(
    'text' => '已經有了 ERP，還需要 MES 嗎',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-04/it-1'
  )
  ,array(
    'text' => '怎麼選擇好的 MES 軟體',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-08/product-1'
  )
  ,array(
    'text' => '建構製造型企業以 MES 為核心的整體資訊架構',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-12/product-1'
  )
  ,array(
    'text' => 'MES 如何解決異質系統整合的困擾',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-10-e-recruiting/mes-system-integration'
  )
  ,array(
    'text' => '【智慧製造】工廠運用 MES 數位轉型案例解析',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-08-gov/mes-smarterbusiness'
  )
  ,array(
    'text' => '智能製造怎麼做？1 心法 3 招式，助製造現場數位化',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-07-cimes/digitalt-manufacturing-secret'
  )
  ,array(
    'text' => 'ERP 與 MES：從獨立並行到完全整合',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-04-argoerp/product'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/template/foot.php';
?>
</div>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<script>
window.addEventListener("load", function(event) {
  $('[data-fancybox]').fancybox({
    youtube : {
      controls : 1,
      showinfo : 0
    }
  });
});
</script> -->
</body>
</html>