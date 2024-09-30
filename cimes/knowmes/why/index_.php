<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='為何MES系統首選ciMes，台灣精品與Gartner推薦';
$page['description'] = '國內外推薦與數百家客戶肯定，配合台灣製造業「在生產線上做開發」模式，彈性的在製品管理、品質控管、設備整合、製造現場數據管控，達成智慧工廠的第一選擇。';
$canonical='https://cimes.ares.com.tw/knowmes/why/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/why/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="know">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  file_get_contents($_SERVER['DOCUMENT_ROOT']."/public/img/what/whatsmes-banner-icon.svg").'<span>認識 MES</span>', //圖片上的字
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
    <section itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h1 class="mt-0">ciMes 眾多客戶首選與肯定<br>台灣精品與 Gartner 推薦</h1>
            <p>ciMes 製造執行系統能滿足在製品管理、品質控管、設備整合與生產追溯。具備有多產業範本可產出多種報表與彈性生產邏輯架構，且易與 ERP 整合。而資通電腦專業的 MES 顧問團隊已協助數百家客戶成功導入，協助企業打造智慧製造平台，是 MES 系統首選。</p>
          </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "智慧工廠為企業解決生產管理上的困境",
  "description": "快看 ciMes 如何協助智慧工廠的誕生，為企業解決生產管理上的困境。",
  "thumbnailUrl": [
    "https://cimes.ares.com.tw/public/img/best-practices/video-2.jpg"
   ],
  "uploadDate": "2020-02-27",
  "duration": "PT1M33S",
  "contentUrl": "https://www.youtube.com/watch?v=HLLBMU_pGUc",
  "embedUrl": "https://cimes.ares.com.tw/knowmes/why/"
}
</script>
          <div class="col-12 col-md-6">
            <a href="https://www.youtube.com/watch?v=HLLBMU_pGUc" id="youtube" data-fancybox title="影片"><img class="img-fluid lazyload rounded" data-src="/public/img/best-practices/video-2.jpg" alt="影片：智慧工廠為企業解決生產管理上的困境"></a>
          </div>
        </div>
        <h2 class="text-center mb-0" itemprop="about">為何選擇 ciMes</h2>
        <hr>
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
          <a class="btn btn-cimes my-3 py-3 px-3 w-50" href="/products/#benefit">更多 ciMes 產品效益</a>
        </div>
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