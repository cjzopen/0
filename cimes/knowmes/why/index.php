<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='為何MES系統首選ciMes，台灣精品與Gartner推薦';
$page['description'] = 'ciMes 榮獲國內外推薦與眾多客戶肯定，透過 6 大智能應用，協助工廠解決人、機、料、法、環的製造問題，打造智慧製造平台，是MES首選。';
$canonical='https://cimes.ares.com.tw/knowmes/why/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/why/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/public/css/why.css','/public/css/newsletter-list.css');
$page['ogimage']='https://cimes.ares.com.tw/public/img/what/why/5m1e.png';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="know">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  '<span>認識 MES</span>', //圖片上的字
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">選擇 ciMes</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php include('../_menu.php'); ?>
    <section>
      <div class="container text-center">
        <h1>為何選擇我們</h1><hr>
        <ul class="row justify-content-center">
          <li class="col-6 col-md-3 mb-3">
            <img class="img-fluid" loading="lazy" width="84" height="84" src="/public/img/what/why/1.svg" alt="*">
            <div class="h3 main-color">國內外一致肯定</div>
            <p>台灣精品獎與 Gartner 推薦</p>
          </li>
          <li class="col-6 col-md-3 mb-3">
            <img class="img-fluid" loading="lazy" width="84" height="84" src="/public/img/what/why/2.svg" alt="*">
            <div class="h3 main-color">易於整合異質系統</div>
            <p>介接整合 ERP、APS、PLM 等系統</p>
          </li>
          <li class="col-6 col-md-3 mb-3">
            <img class="img-fluid" loading="lazy" width="84" height="84" src="/public/img/what/why/3.svg" alt="*">
            <div class="h3 main-color">百家客戶導入經驗</div>
            <p>金屬加工、車用、射出成型、電子業…等</p>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="container text-center">
        <h2>ciMes 為企業解決生產管理上的困境</h2><hr>
        <a href="https://www.youtube.com/watch?v=HLLBMU_pGUc" id="youtube" data-fancybox title="影片"><img class="img-fluid rounded lazyload" data-src="/public/img/best-practices/video-2.jpg" alt="影片：智慧工廠為企業解決生產管理上的困境" src="/public/img/best-practices/video-2.jpg"></a>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">ciMes 解決製造業人、機、料、法、環那些問題</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <p>ciMes 製造執行系統提供即時派工、報工；機台參數蒐集分析及生產進度控管進料、扣料、領料儲存、發料、退換；使用條碼紀錄，建立生產履歷追溯；物聯網串聯設備控感測元件進行管理，實現全方位管理。</p>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid" loading="lazy" width="800" height="500" src="/public/img/what/why/5m1e.png" alt="5M1E分析法">
        </div>
        <div class="d-block d-lg-flex">
          <table class="w-100 h-100 d-none d-lg-table">
            <tr>
              <td class="py-5">一般工廠問題<br><br></td>
            </tr>
            <tr>
              <td class="py-5 sub-color">導入 ciMes 後：可視</td>
            </tr>
            <tr>
              <td class="py-5 sub-color">導入 ciMes 後：可控</td>
            </tr>
            <tr>
              <td class="py-5 sub-color">導入 ciMes 後：可管理</td>
            </tr>
          </table>
          <table class="table table-bordered h-100">
            <tr>
              <td class="blue-head vlr d-table-cell d-lg-none" rowspan="2">一般工廠問題</td>
              <th class="blue-head text-center">人員</th>
            </tr>
            <tr>
              <td>
                <ul class="disc main-color">
                  <li><span class="text-dark">人員產能不一</span></li>
                  <li><span class="text-dark">分派調度困難</span></li>
                  <li><span class="text-dark">紙本作業耗時</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none text-center blue-light-bg" colspan="2">導入 ciMes 後的效益</td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可視</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">人員資訊透明，了解自身與同儕進度</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可控</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">及時派工、報工</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可管理</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">掃描條碼上工、工時收集分析，提高人員績效</span></li>
                </ul>
              </td>
            </tr>
          </table>
          <table class="table table-bordered h-100">
            <tr>
              <td class="blue-head vlr d-table-cell d-lg-none" rowspan="2">一般工廠問題</td>
              <th class="blue-head text-center">機器</th>
            </tr>
            <tr>
              <td>
                <ul class="disc main-color">
                  <li><span class="text-dark">現場詢問生產進度</span></li>
                  <li><span class="text-dark">設備稼動不易掌握</span></li>
                  <li><span class="text-dark">參數紀錄查找不易</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none text-center blue-light-bg" colspan="2">導入 ciMes 後的效益</td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可視</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">設備稼動率、狀態、產能可視化、圖型化</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可控</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">機台參數蒐集分析及生產進度控管</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可管理</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">智能化故障預警、預防保修，提升備稼動</span></li>
                </ul>
              </td>
            </tr>
          </table>
          <table class="table table-bordered h-100">
            <tr>
              <td class="blue-head vlr d-table-cell d-lg-none" rowspan="2">一般工廠問題</td>
              <th class="blue-head text-center">物料</th>
            </tr>
            <tr>
              <td>
                <ul class="disc main-color">
                  <li><span class="text-dark">物料履歷不完整</span></li>
                  <li><span class="text-dark">缺料使產線停擺</span></li>
                  <li><span class="text-dark">料況資訊難追蹤</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none text-center blue-light-bg" colspan="2">導入 ciMes 後的效益</td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可視</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">缺料、庫存、線邊倉狀態資訊化</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可控</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">進料、扣料、領料儲存、發料、退換</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可管理</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">物料批條碼，管理及追蹤</span></li>
                </ul>
              </td>
            </tr>
          </table>
          <table class="table table-bordered h-100">
            <tr>
              <td class="blue-head vlr d-table-cell d-lg-none" rowspan="2">一般工廠問題</td>
              <th class="blue-head text-center">方法</th>
            </tr>
            <tr>
              <td>
                <ul class="disc main-color">
                  <li><span class="text-dark">手寫紀錄生產資訊</span></li>
                  <li><span class="text-dark">生產資料追溯不易</span></li>
                  <li><span class="text-dark">人力統整複雜報表</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none text-center blue-light-bg" colspan="2">導入 ciMes 後的效益</td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可視</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">報表平台供決策管理應用</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可控</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">使用條碼紀錄，建立生產履歷追溯</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可管理</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">因應製程改善、客戶稽核需求</span></li>
                </ul>
              </td>
            </tr>
          </table>
          <table class="table table-bordered h-100">
            <tr>
              <td class="blue-head vlr d-table-cell d-lg-none" rowspan="2">一般工廠問題</td>
              <th class="blue-head text-center">環境</th>
            </tr>
            <tr>
              <td>
                <ul class="disc main-color">
                  <li><span class="text-dark">異常無法即時得知</span></li>
                  <li><span class="text-dark">設備數據無法得知</span></li>
                  <li><span class="text-dark">環境數據不易取得</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none text-center blue-light-bg" colspan="2">導入 ciMes 後的效益</td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可視</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">電子郵件、簡訊、語音警示通知</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可控</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">物聯網串聯設備控感測元件進行管理</span></li>
                </ul>
              </td>
            </tr>
            <tr>
              <td class="d-table-cell d-lg-none vlr sub-color">可管理</td>
              <td>
                <ul class="disc sub-color">
                  <li><span class="text-dark">物聯網感測元件收集資料，安全及環境監控智能化</span></li>
                </ul>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>
    <section class="bg-lazyload pb-5 bgs-cover" data-image="/public/img/what/why/bg.webp">
      <div class="container">
        <h2 class="text-center">６大智能應用</h2><hr>
        <ul class="row justify-content-center">
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/4.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">人員管理＋電子化作業</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">數位派工與任務回報</span></li>
                <li><span class="text-dark">人員友善報工介面</span></li>
                <li><span class="text-dark">數據化人員工時與生產效率</span></li>
                <li><span class="text-dark">文書數位化減少作業時間</span></li>
              </ul>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/5.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">智動化感測＋品質分析</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">IoT 機聯網偵測機台數據（溫度、壓力、電壓、參數、震動、噪音等）</span></li>
                <li><span class="text-dark">自動偵測異常並發出警示</span></li>
                <li><span class="text-dark">監控與蒐集品質檢驗資料</span></li>
                <li><span class="text-dark">預防不良提升良率節省損耗</span></li>
              </ul>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/6.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">生產控管＋電子看板</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">系統畫面即時控管工廠</span></li>
                <li><span class="text-dark">即時查詢在製品進度</span></li>
                <li><span class="text-dark">預先保養避免當機損壞</span></li>
                <li><span class="text-dark">產線資訊可視化（稼動率、產線進度、機況等）</span></li>
              </ul>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/7.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">物料＋零配件管理</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">來料品質管理、用料追溯</span></li>
                <li><span class="text-dark">進料管理（進料檢驗、料標籤列印）</span></li>
                <li><span class="text-dark">線邊倉管理（領用、退庫、上料等）</span></li>
                <li><span class="text-dark">刀治模具領用／歸還記錄管理</span></li>
              </ul>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/8.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">行動管理</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">現場即時輸入、查詢與回報</span></li>
                <li><span class="text-dark">隨時隨地掌握生產訊息</span></li>
              </ul>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
            <div class="pr-2 flex-constant">
              <img class="img-fluid" loading="lazy" width="80" height="80" src="/public/img/what/why/9.svg" alt="*">
            </div>
            <div>
              <h3 class="main-color mt-0">工廠智能監測</h3>
              <ul class="disc sub-color">
                <li><span class="text-dark">整合感測元件與圖控軟體呈現資訊</span></li>
                <li><span class="text-dark">廠區能源監控（水、電、氣耗能管理）</span></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <h2 class="text-center">ciMes 超乎你的想像</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-7">
    <?php
$accordion =array(
  // array(
  //   'q' => '公司已經有 ERP，為何還需要 ciMes？',
  //   'a' => '<p>生產過程中，有許多生產歷程，以及原物料耗用的事件，ERP 只能控管原料及成品（庫存），無法提供更精確的耗用紀錄及成本分析，甚至日後的生產追蹤，亦無法在 ERP 中進行查詢及分析。例如：對於 ERP 來說，不管是製造部門領料，還是物管部門發料，當物料從庫房領出後即當作已耗用，但是實際上還有一堆原物料在生產線上，這些物料或是半成品到底還有多少？只能透過 MES 系統，才能更精準的掌控原料倉、線邊倉、半成品倉及成品倉所有物料的實際製造現場狀況。</p>'
  // )
  // ,array(
  //   'q' => 'ciMes 能為公司帶來什麼好處？',
  //   'a' => '<p>沒辦法即時掌握生產流程資訊的公司，就無法跟上市場的腳步。</p><p>為了要掌握工廠資訊，傳統上都使用所謂的流程卡， 途程卡（Run Card）或是工單（Work Order），來記錄生產中所有產生的資訊（如：數量、流程、時間、操作人員等）。雖然使用紙張紀錄可以得到工廠的資訊，但是卻無法即時的獲得，還需要耗費人力去收集整理。因此，在這個競爭激烈、效率為上的時代，凡是生產型態的工廠，都需要一套合適的 MES 系統來掌握及控制整個工廠的運作。</p><p>有了 ciMes，不但表示公司生產過程的資訊化，也表示對生產過程的掌握度大大地提高。</p>'
  // ),
  array(
    'q' => '公司的工廠除了在台灣，大陸、海外也都有，ciMes 能提供什麼幫助？',
    'a' => '<p>導入 ciMes 後，只要透過 Web Browser 就可以讓您隨時隨地掌握工廠目前所有的生產狀況，進而及時解決生產線上遇到的問題。</p>'
  )
  ,array(
    'q' => '每天開會，都需要即時的生產資訊報表，ciMes 做得到嗎？',
    'a' => '<p>導入 ciMes 系統，所有工廠物件(工單、產品、機台、物料、批號…)於生產過程中透過設備，人員…都會被完整記錄下來，經過資料彙整、分析後，即時產出需要的生產管理報表。</p><p>更可以透過 EKS 電子看板系統，取代傳統產線 LED 燈號顯示器，完整顯示產線作業進度、調度、物料狀態、品質、設備、安全、作業指導書等生產資訊。具簡易、快速、整合的特色，透過彈性、豐富、美觀的資料呈現方式，提供工廠產線靈活運用，獲得更即時的管理資訊，實現視覺化與即時化的管理。</p>'
  )
  ,array(
    'q' => '遇到機台生產到一半當機的情況，ciMes 有辦法應對嗎？',
    'a' => '<p>機台是製造業裡最重要的生產工具，生產過程中遇到機台突然當機，或是因為缺乏保養而成為生產線上的不定時炸彈，都會影響生產線的順暢運作。</p><p>導入 ciMes 後，透過機台配件管理系統及預修維護系統的智慧型預測機制，定期或不定期地針對機台做預先保養，才能使生產線永不停頓！</p>'
  )
  ,array(
    'q' => '工廠產品種類太多，每張工單的生產要求都不同，要如何管理？',
    'a' => '<p>隨著客戶數目的增多，生產產品的種類一定也會愈來愈多樣，以因應不同客戶、不同產品的需求。</p><p>透過 ciMes 強大的產品及生產流程的版本管理，將使您能夠動態地切換生產線，快速地生產出最符合客戶需求的產品。</p>'
  )
  ,array(
    'q' => '倉庫的物料種類多，又要配合不同的產品搭配使用，不小心還會混料造成生產損失，ciMes 能幫忙嗎？',
    'a' => '<p>透過物料管理系統，所有生產過程中需要使用的物料都能隨時被掌握，除了線邊倉的物料數量能確實，所有被領用到生產線上的物料，也能明確的知道被哪些生產批號所使用。</p><p>也能透過 ciMes 來設定物料種類與產品之間的專屬專用關係，不管是物料的保存期限，或是還有多少數量，都能輕鬆的掌握。生產線上再也不會使用到錯誤的物料了！</p>'
  )
  ,array(
    'q' => '客戶希望直接出貨到海關，但是標籤種類大大小小都有，ciMes 可以處理這些標籤嗎？',
    'a' => '<p>許多產品在生產過程中就需要裝箱，當然就需要在箱子上貼上標籤作為標識，避免後續的生產流程產生錯誤。ciMes 搭配標籤軟體，可以直接在生產過程中進行標籤列印，不管是內箱、外箱，都可以適時的產出張貼。</p><p>ciMes 也直接記錄出貨箱號與批號，完整紀錄每一批貨從進廠到出貨的大小細節。就算日後有 RMA 也不需要擔心！</p>'
  )
  ,array(
    'q' => '這麼多家 MES 系統廠商，ciMes 的優勢又是什麼？',
    'a' => '<p>ciMes 不僅連續多年榮獲國際研調機構 Gartner 建議台灣唯一參考的 MES 廠商外，還取得微軟 ISV 獨立軟體開發商認證，並獲得台灣精品獎的殊榮與肯定，可說是各產業邁入智能工廠的最佳選擇！</p>'
  )
);
$i=0;
$checked = 'checked="checked"';
foreach ($accordion as $key) {
  $i++;
  if($i !== 1){
    $checked = '';
  }
?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 class="d-flex main-color mb-1" for="ac-<?= $i ?>">
                <span><?= $i ?>. </span>
                <span class="px-1" itemprop="name"><?= $key['q'] ?></span>
              </h3>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div class="pl-4" itemprop="text"><?= $key['a'] ?></div>
              </div>
            </div>
<?php
}
?>
          </div>
        </div>
        <div class="py-5 text-center">
          <a class="btn btn-cimes my-3 py-3 px-3 w-50" href="/contactus/">立即諮詢</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '即時掌握全球生產中心製造資訊：資通電腦 ciMes',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-04/products-2'
  )
  ,array(
    'text' => 'H1N1 新型流感與製造管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-01/focus'
  )
  ,array(
    'text' => 'ciMes 製造管理系統的雲端運算應用',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-01/products-1'
  )
  ,array(
    'text' => '急單效應 - 精進製造管理應萬變',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-04/products-1'
  )
  ,array(
    'text' => 'ciMes 在生產製造管理的延伸應用',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-03/products-1'
  )
  ,array(
    'text' => '管理透明化、提昇生產力且適用於各製造產業的 ciMes',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-12/focus'
  )
  ,array(
    'text' => '數據力決定競爭力，善用 ERP 與 MES 結合大數據打造智能企業',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-04-argoerp/focus'
  )
  ,array(
    'text' => '金屬加工如何邁向工業 4.0',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-08-cimes/product2'
  )
  ,array(
    'text' => '香腸、生產履歷與 ciMes solution',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-02/product-1'
  )
  ,array(
    'text' => '工業 4.0 時代：金屬加工應用交給 ciMes',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-08-cimes/focus'
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
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<svg class="d-none" aria-hidden="true">
  <defs>
    <symbol id="q" viewBox="0 0 32 32">
      <circle fill="#1a98b3" cx="16" cy="16" r="15.5" />
      <text fill="#fff" x="9" y="21">Q</text>
    </symbol>
    <symbol id="aa" viewBox="0 0 32 32">
      <circle fill="#d5562b" cx="16" cy="16" r="15.5" />
      <text fill="#fff" x="11" y="22">A</text>
    </symbol>
  </defs>
</svg>
</body>
</html>