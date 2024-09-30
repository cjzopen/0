<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/module.css','/lib/fancybox3/jquery.fancybox.min.css');

// $page['title'] = 'WIP（Work in Process）在製品管理,批號,機台管理';
$page['title'] = 'WIP 在製品管理系統,讓批號與機台管理更便利';
$page['description'] = '在製品管理 Work in Process 透過工廠資源環境設定，建立生產批下線與生產控管紀錄詳實生產資訊，方便後續其他模組分析、統計製程管理與追蹤。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/wip.jpg';
$canonical="https://cimes.ares.com.tw/products/module/wip.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/wip.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='在製品管理系統';
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include('_menu.php');
?>
  <main>
    <section class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="row justify-content-center align-items-center no-gutters">
            <div class="col-auto text-lg-center mb-3" id="module-icon">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/wip.svg'); ?>
            </div>
            <div class="col">
              <h1 class="pl-2"><span class="dline d-block">在製品管理系統</span>WIP（Work in Process）</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-lg-8">
          <p class="border p-3" style="background:#FBEEE9">WIP 是指正在加工或準備進一步加工之半成品。<br>而在製品管理則是計劃、協調和控制在製品，調節各車間、工作地與各道工序間的生產，組織各生產環節間平衡的重要槓桿。</p>
          <p>WIP Module 為整個 ciMes 的核心，系統提供了多個標準的 MES Transaction，在設定好工廠的資源環境之後，只要建立生產批下線，系統便能夠依據事先的工廠資源設定控管，進行生產批（Lot）過帳或批次生產（Batch Production），同時紀錄詳實的生產紀錄，以方便後續的其他模組進行生產分析、統計製程管理、訂單追蹤等。</p>
          <ul class="disc d-flex flex-wrap inside">
            <li class="col-12 col-sm-6 col-lg-6">
              <strong class="main-color">即時（WIP）生產批追蹤</strong>
              <p class="pl-4">WIP 查詢為 ciMes 的基本功能，提供線上人員查詢目前在線上所有生產批的狀態、位置、數量等資訊。即時生產批追蹤能設定所要查詢之生產批狀態（Wait、Run、Hold 等）或指定生產區域。</p>
            </li>
            <li class="col-12 col-sm-6 col-lg-6">
              <strong class="main-color">生產查詢</strong>
              <p class="pl-4">生產批查詢提供一個強大的交叉查詢功能，使用者可以依所知道的條件來查詢目前的 WIP 資訊。這些可被定義的資訊如客戶名稱、客戶批號、工單編號、產品名稱、產品型號、上游工廠編號、上游工廠型號、工作站…等。</p>
            </li>
            <li class="col-12 col-sm-6 col-lg-6">
              <strong class="main-color">生產子單元（Component）管理</strong>
              <p class="pl-4">ciMes 系統提供生產子單元的管理，讓使用者能追蹤到每一個生產批中的子單位，並可對這些子單位蒐集生產資料。</p>
            </li>
            <li class="col-12 col-sm-6 col-lg-6">
              <strong class="main-color">生產工作指示</strong>
              <p class="pl-4">系統可以產品、流程及工作站等方式設定工作指示，提醒線上作業員特別注意事項。</p>
            </li>
            <li class="col-12 col-sm-6 col-lg-6">
              <strong class="main-color">生產標準指令</strong>
              <p class="pl-4">系統提供數百個標準 WIP Transaction 函數供客戶運用，如 Check In、Check Out、Scrap、Split、Batch CheckIn、Batch CheckOut…等，客戶可以使用這些生產標準指令及函數設計自己公司特有的生產邏輯。</p>
            </li>
          </ul>
          <div class="row">
            <div class="col-12 col-md-4 mb-5">
              <a href="/public/img/products/module/wip/MES-WIP-1-1.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid lazyload" data-src="/public/img/products/module/wip/MES-WIP-1-1.png" alt="所有生產批資訊一覽無遺，並可動態設定顯示欄位"></a>
              <span>所有生產批資訊一覽無遺，並可動態設定顯示欄位</span>
            </div>
             <div class="col-12 col-md-4 mb-5">
               <a href="/public/img/products/module/wip/MES-WIP-1-2.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid lazyload" data-src="/public/img/products/module/wip/MES-WIP-1-2.png" alt="生產工作指示可以產品、流程及工作站等方式設定"></a>
               <span>生產工作指示可以產品、流程及工作站等方式設定</span>
            </div>
            <div class="col-12 col-md-4 mb-5">
              <a href="/public/img/products/module/wip/MES-WIP-1-3.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid lazyload" data-src="/public/img/products/module/wip/MES-WIP-1-3.png" alt="詳細記錄所有生產批於生產過程中所有的動作"></a>
              <span>詳細記錄所有生產批於生產過程中所有的動作</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">資訊規劃中心</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>WIP Module 同時是系統建置中規劃的資訊中心。舉凡工廠區域的劃分、機台的建置管理、批號屬性設定、產品及生產流程的控制、系統使用者新增與安全性的控管，都包含在功能內，可說是提供了最佳的彈性，方便企業建構符合自己工廠的 MES 系統，來提高生產資訊化的效益。</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">機台管理設定</strong>
                <p class="pl-4">包括機台型態、機台群組、狀態（IDLE、WAIT…）、狀態顏色之規劃，及定義每一部機台明細資料等。此外還可定義每一個機台狀態之間的轉換關係，不僅作為機台監控使用，也是計算機台稼動率（Utilization）之主要關鍵。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工作站建置</strong>
                <p class="pl-4">可同時使用機台之狀態、群組或單機的方式作資源設定。並允許事先規劃每一個工作站中的生產操作規則及相關屬性等，自動帶入流程中控管。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">生產流程設定</strong>
                <p class="pl-4">使用圖形化、直覺式的拖曳方式設計流程，提供放大、縮小圖面、或是展開子流程。流程設計中所有的設計流程，都可以當作子流程重複使用，方便製程重複性高之工廠使用及管理。在多分歧的生產路徑，系統允許預先設定流程條件，在達到某個條件之狀況下，自動判定走哪一條路徑。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">產品建置</strong>
                <p class="pl-4">定義產品的名稱，並設定可以使用的屬性及允許生產之流程。提供版本管理，每一個版本都允許對應多條生產流程，系統也允許多種產品版本同時在生產線上使用。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">批號設定</strong>
                <p class="pl-4">每一個生產批都可能帶有相當多的屬性，系統允許自行集合多個屬性成為範本 （Template），方便於生產下線時以範本的方式，一次指定多個屬性給生產批。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">權限設定</strong>
                <p class="pl-4">以 &quot;個人→群組→功能&quot; 三階之方式管理權限，同時提供系統標題維護、分類維護等功能，讓使用者可以自行設定出屬於自己公司文化的環境。</p>
              </li>
            </ul>
            <div class="row justify-content-center">
              <div class="col-12 col-md-4 mb-3">
                <a href="/public/img/products/module/wip/MES-WIP-2-1.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="834" height="507" src="/public/img/products/module/wip/MES-WIP-2-1.png" alt="工作站維護"></a>
                <span>工作站維護</span>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <a href="/public/img/products/module/wip/MES-WIP-2-2.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="834" height="345" src="/public/img/products/module/wip/MES-WIP-2-2.png" alt="資料流程維護"></a>
                <span>流程資料維護</span>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <a href="/public/img/products/module/wip/MES-WIP-2-3.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="834" height="505" src="/public/img/products/module/wip/MES-WIP-2-3.png" alt="機台監控設定可依照工廠實際 Layout 顯示生產資源"></a>
                <span>機台監控設定可依照工廠實際 Layout 顯示生產資源</span>
              </div>
               <div class="col-12 col-md-4 mb-3">
                <a href="/public/img/products/module/wip/MES-WIP-2-4.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="834" height="506" src="/public/img/products/module/wip/MES-WIP-2-4.png" alt="顯示生產資源"></a>
                <span>依照工廠實際 Layout 顯示生產資源</span>
              </div>
               <div class="col-12 col-md-4 mb-3">
                <a href="/public/img/products/module/wip/MES-WIP-2-5.png" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="834" height="479" src="/public/img/products/module/wip/MES-WIP-2-5.png" alt="圖形化流程設定"></a>
                <span>圖形化流程設定可達到流程完整的管控</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">工單管理與維護</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>所有 WIP 在設定好後，即可下線生產，因此 WIP Module 亦包含了工單管理維護的功能，而工單的開立可以選擇在此維護，或由各公司現有 ERP 系統維護再轉入 ciMes 系統。由於訂單與工單的模組在 ERP 系統便已經完整存在，因此在 ciMes 中工單管理扮演的角色是 ERP 與 MES 的中間介面，負責傳遞 ERP 中的訊息到 MES ，以方便 MES 系統能順利的開始生產。同時對於沒有 ERP 系統的公司，工單管理便能夠扮演生產的第一個進入點。</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工單維護</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工單整批發放</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工單分批下線</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工單滯留</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">工單明細查詢</strong>
              </li>
            </ul>
            <figure class="text-center mb-5">
              <img class="img-fluid lazyload" data-src="/public/img/products/module/wip/MES-WIP-4.png" alt="工單明細查詢">
              <noscript><img class="img-fluid" src="/public/img/products/module/wip/MES-WIP-4.png" alt="工單明細查詢"></noscript>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <h2 class="text-center mb-0">工程資料蒐集</h2><hr>
            <p>工程資料蒐集提供了 EDC 參數及群組的設定，客戶可以設定想蒐集的 EDC 參數及群組，並透過生產邏輯的作業過程，得到所要蒐集的參數屬性值。</p>
            <p>常見的資料收集分為三種途徑，針對這三種途徑 EDC 模組的處置為：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">機台自動化</strong>
                <p>透過自動化的傳輸及介面（例如 SESC、PLC 等），將資料透過 ciMes 所提供的 EDC Transaction 直接送進資料庫儲存，同時與 ciMes 系統交換資訊，達到有效率的資料蒐集，不需要人員輸入。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">手動資料輸入</strong>
                <p>先由系統中設定所需要的參數及群組，並透過屬性加到機台、生產批等物件上，在生產邏輯運作時取出所設定的參數，要求作業員手動輸入資料，再透過 EDC Transaction 送到資料庫儲存。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">檔案輸入模式</strong>
                <p>若機台沒有提供自動化連線，但是有網路介面與檔案輸出，可以使用撰寫資料載入程式（Loader）的方式，將機台送出的資料直接寫入資料庫，或透過 EDC Transaction 寫入資料庫。</p>
              </li>
            </ul>
            <figure class="text-center mb-5">
              <img class="img-fluid lazyload" data-src="/public/img/products/module/wip/MES-WIP-5.png" alt="檔案輸入模式">
              <noscript><img class="img-fluid" src="/public/img/products/module/wip/MES-WIP-5.png" alt="檔案輸入模式"></noscript>
            </figure>
          </div>
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
    'text' => '全球 H1N1 的衝擊與 WIP 生產製造管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-06/products-1'
  )
  ,array(
    'text' => '如何運用 MES，WIP 減少人工抄寫並優化生產管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-07-cimes/mes-replace-manual-transcription'
  )
  ,array(
    'text' => '如何用 MES 建構可視化智慧工廠',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-08-bnk/virtual-factory-modeling-mes'
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
</body>
</html>
