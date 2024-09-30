<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/lib/swiper3.4.1/swiper.min.css','/public/css/product.css');

$page['title'] = 'ciMes 核心功能、特色與效益介紹';
$page['description'] = 'ciMes 完整的 MES 軟體特色、效益與比較看這裡。';
$canonical = 'https://cimes.ares.com.tw/products/';
$hreflang = 'https://cimes.ares.com.tw/en/products/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>

<div class="all" id="product">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/products/product-banner-1440.jpg', //圖片
  '<h1>ciMes 產品介紹</h1>', //圖片上的字
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
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">產品介紹</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <nav class="supmenu">
      <div class="container">
          <ul class="text-center mb-0">
            <li><a href="#module">核心模組</a></li>
            <li><a href="#benefit">產品效益</a></li>
            <li><a href="#feature">產品特色</a></li>
            <li><a href="#compare">比較</a></li>
            <li><a href="#mobile-app">行動管理</a></li>
          </ul>
      </div>
    </nav>
    <section id="module">
      <div class="container">
        <div class="row align-items-center pb-4">
          <div class="col-12 col-sm-6 col-lg-6 text-center">
            <figure class="text-center mb-3" itemscope itemtype="http://schema.org/ImageObject">
              <img width="400" height="400" loading="lazy" src="/public/img/products/module/module.png" srcset="/public/img/products/module/module.png 1x,/public/img/products/module/module-2x.png 2x" alt="ciMes 模組" class="img-fluid" itemprop="image">
            </figure>
          </div>
          <div class="col-12 col-sm-6 col-lg-6">
            <h2 class="dline">ciMes 核心功能介紹</h2>
            <p>ciMes（Computer Integrated Manufacturing Execution System）是資通電腦所研發的 MES 製造執行系統，也可稱為工廠營運管制系統。</p>
            <p>我們提供極為完整的工廠生產管理與控制之相關模組，包括資源配置與狀態處理、製造流程、分派生產單位、工作指示、資料收集與擷取、人力管理、品質管理、製程管理、維修管理、產品追蹤及歷史紀錄、效能分析等功能，因應各種廠區狀況。</p>
          </div>
        </div>
<?php
include('module_list.php');
?>
      </div>
    </section>
    <section id="benefit">
      <div class="container">
        <h2 class="text-center mb-0">導入後可帶來的「效益」</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-8">
            <ul class="d-flex flex-wrap check no-gutters mt-3">
              <li class="col-12 col-sm-6 col-lg-4">在製品管理：<br>精準管理減少在製積壓</li>
              <li class="col-12 col-sm-6 col-lg-4">即時產能：<br>現場資訊即時收集</li>
              <li class="col-12 col-sm-6 col-lg-4">品質管理：<br>品質資訊即時掌握提升生產良率</li>
              <li class="col-12 col-sm-6 col-lg-4">訂單進度：<br>提高客戶服務品質</li>
              <li class="col-12 col-sm-6 col-lg-4">人員工時：<br>工時有效分析提高人員績效</li>
              <li class="col-12 col-sm-6 col-lg-4">生產履歷：<br>提供完整產品追溯</li>
              <li class="col-12 col-sm-6 col-lg-4">設備稼動率：<br>即時資訊收集提高設備利用率</li>
              <li class="col-12 col-sm-6 col-lg-4">資訊透明：<br>資訊集中整合提供完整報表資訊</li>
              <li class="col-12 col-sm-6 col-lg-4">物料控管：<br>精確回饋物料資訊</li>
            </ul>
            <figure class="text-center" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
              <img class="img-fluid rounded" src="/public/img/products/benefit-800.png" loading="lazy" width="800" height="423" alt="ciMes 產品導入效益" itemprop="image">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section id="feature">
      <div class="container">
        <h2 class="text-center mb-0">產品特色</h2>
        <hr>
        <div class="">
          <ul class="mb-0 row">
<?php
$accordion =array(
  array(
    'q' => 'ciMes 列入 Gartner 研究報告',
    'a' => '<p>國際研究機構 Gartner 報告「Market Guide for Manufacturing Execution System Software」主要評估全球 MES 現況及分析製造商和供應鏈技術結合的創新解決方案。ciMes 榮獲多次肯定，為台灣唯一建議參考製造執行方案。</p>'
  )
  ,array(
    'q' => 'ciMes 榮獲台灣精品獎肯定',
    'a' => '<p>經濟部台灣精品獎評選是依據研發、設計、品質、行銷 4 大專業項目，並考量台灣產製條件，綜合評選出具「創新價值」之產品授予獎項。ciMes 從 578 家廠商、1,209 件報名產品中脫穎而出，獲得台灣精品殊榮。</p>'
  )
  ,array(
    'q' => 'web-base 人機介面瀏覽器平台',
    'a' => '<p>使用 web-based 架構，只需將系統架設在公司內部網路入口，Client 端不需要安裝程式，使用瀏覽器，便可隨時隨地上網處理生產管理作業，減少資訊部門工作負擔，大幅降低資訊部門的維護成本。</p>'
  )
  ,array(
    'q' => '多國語言線上即時切換',
    'a' => '<p>兩岸三地商機日益頻繁，ciMes 直接採用多國語言設計。目前完整提供繁體中文、簡體中文、英文等三種語系。</p>'
  )
  ,array(
    'q' => '自訂系統標題',
    'a' => '<p>使用者可以自行定義系統中各個顯示的用詞及標題，避免因產業、公司用詞不同，而降低對系統的接受程度，減少使用者適應時間。</p>'
  )
  ,array(
    'q' => '彈性生產邏輯架構（Customized Logic Rules）',
    'a' => '<p>ciMes 產品提供大量業界標準生產指令，讓客戶利用這些指令，組合出自有的生產邏輯，組織自己的完整生產體系。</p>'
  )
  ,array(
    'q' => '圖形化、條件化流程設定',
    'a' => '<p>以圖形與物件化的觀念來設定系統；如機台、工作站、流程、生產批等，詳盡的參數及屬性設定功能，滿足客戶自己獨特的生產特性或流程。</p>'
  )
  ,array(
    'q' => '工單平行作業',
    'a' => '<p>當成品皆有多種自製的半成品，但於 ERP 系統想簡化工單開立及發料作業，ciMes 可承接 ERP 系統單張工單，轉換為多張子母公單平行作業生產並控管。</p>'
  )
  ,array(
    'q' => '多種產業範本',
    'a' => '<p>ciMes 不僅有模組化的功能選擇，利用生產規則的特殊架構，還可建立各個產業使用的生產邏輯範本。目前有 LED、面板、封測、組裝等多種產業範本。</p>'
  )
  ,array(
    'q' => '與各 ERP 系統整合',
    'a' => '<p>可與 Oracle ERP、SAP、TipTop、Workflow、ArgoERP 等各式各樣的 ERP 整合。</p>'
  )
  ,array(
    'q' => '生產即時訊息',
    'a' => '<p>提供線上各類資訊的查詢，如在製品、工單、物料、機台、產出、良率、不良分析等；使生管單位掌握準確的工廠狀況，達到提昇營運效率，滿足準時交貨的需求。</p>'
  )
  ,array(
    'q' => '豐富的報表群',
    'a' => '<p>提供多類與眾多的生產相關報表，並且提供報表原始碼；不僅提供查詢分析運用，也擴充了客戶未來自行開發、修改報表的能力。</p>'
  )
  ,array(
    'q' => '軟體中央監控',
    'a' => '<p>以整合性報表架構顯示於大尺寸畫面，並定時更新畫面資訊，提供高階主管對生產之多項重要指標即時監控與決策。</p>'
  )
);
// $i=0;
// $checked = 'checked="checked"';
foreach ($accordion as $key) {
  // $i++;
  // if($i !== 1){
  //   $checked = '';
  // }
?>
          <li class="col-12 col-sm-12 col-lg-4">
            <strong class="main-color mb-0"><?= $key['q'] ?></strong>
            <div class=""><?= $key['a'] ?></div>
          </li>
<?php
}
?>
          </ul>
        </div>
      </div>
    </section>
    <section id="compare">
      <div class="container">
        <h2 class="text-center mb-0">與其它 MES 廠商比較</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-6">
            <table class="table table-striped text-center fff-bg">
              <thead class="fff-color main-bg">
                <tr>
                  <th></th>
                  <th class="text-center">國外</th>
                  <th class="text-center">國內</th>
                  <th class="text-center">ciMes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>廠商經驗</td>
                  <td class="main-color">⭐⭐⭐</td>
                  <td class="main-color">⭐⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
                <tr>
                  <td>穩定度</td>
                  <td class="main-color">⭐⭐⭐</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
                <tr>
                  <td>客製化少</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
                <tr>
                  <td>價格實惠</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
                <tr>
                  <td>彈性擴充</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
                <tr>
                  <td>服務支援</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐</td>
                  <td class="main-color">⭐⭐⭐</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section id="mobile-app">
      <article class="container">
        <h2 class="text-center mb-0">行動管理，不再受限於時間與空間</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-8">
            <p>ciMes 行動管理主要是應用行動裝置（工業平板電腦、手機），使得生產管理資訊不再受時間、工廠作業環境、空間大小、生產動線等侷限。讓生產線操作人員可以透過小型行動裝置，現場輸入與查詢不良品記錄，以及即時回報物料篩選、產品製造、加工檢驗，與產品交付等相關資訊，讓管理階層透過資訊判斷，作出精準決策，達到工廠資訊即時化、數字化、透明化，真正做到生產資訊不漏接的行動管理。</p>
            <div class="row" id="get-ajax">
              <div class="col-12 col-sm-12 col-lg-6">
                <ul class="decimal">
                  <li class="mb-3">
                    <p class="mb-0 main-color">支援平台</p>
                    <ol class="check">
                      <li>ciMes 目前已經開發出可支援 Android、iOS 與 Windows 作業系統的平板電腦，並且在多家客戶成功地將行動裝置應用在 MES 上。</li>
                    </ol>
                  </li>
                  <li class="mb-3">
                    <p class="mb-0 main-color">畫面與查詢重點</p>
                    <ol class="check">
                      <li>現場資料收集應用於產線進出站過帳，不良品資料收集。</li>
                      <li>品質管理應用於移動式巡檢作業人員，包含製程巡檢與進料檢驗等等。</li>
                      <li>報表查詢應用於檢驗結果查詢。</li>
                    </ol>
                  </li>
                  <li class="mb-3">
                    <p class="mb-0 main-color">適用人員</p>
                    <ol class="check">
                      <li>現場作業人員與管理人員皆能使用，且能依照不同權限顯示不同的功能。</li>
                    </ol>
                  </li>
                  <li class="mb-3">
                    <p class="mb-0 main-color">效益</p>
                    <ol class="check">
                      <li>實現真正的走動式稽核、管理</li>
                      <li>減少人為抄寫資料的時間</li>
                    </ol>
                  </li>
                </ul>
              </div>
              <div id="ajax-before" style="min-height: 468px;">
                <noscript><?php include($_SERVER['DOCUMENT_ROOT'].'/template/mobile-app.php'); ?></noscript>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-5 text-center h3">還在猶豫嗎？<a class="main-color" href="/#best-practices">看看客戶怎麼說</a></div>
      </article>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/lib/swiper3.4.1/swiper.min.js" id="swiper-js" defer></script>
<script src="/public/js/sda.js" defer></script>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js"></script> -->
<script>
<?php
// include ($_SERVER['DOCUMENT_ROOT'].'/public/js/supmenu.js');
include ($_SERVER['DOCUMENT_ROOT'].'/public/js/products.js');
?>
</script>
</body>
</html>