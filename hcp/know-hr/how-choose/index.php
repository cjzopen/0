<?php
$url='https://hcp.ares.com.tw/know-hr/why-choose/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '企業評選 HR 人資系統，需注意 5 大關鍵指標';
$page['description'] = '挑選人力資源系統並沒有那麼難，好的HR系統需具備擴充彈性，能減少客製費用，並將技術移轉給IT人員，選擇有規模、財務穩健的系統廠商，才能獲得完善服務與支援。';
$canonical = HOST_LINK.'know-hr/how-choose/';
// $page['css']=array('/css/know.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/know-hr/how-choose/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('../header.php');
?>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="" itemprop="item" class="py-2 py-md-0 d-inline-block d-md-inline"><span itemprop="name">如何挑選</span></a>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </div>
<?php
include '../supmenu.php';
?>
    <section id="how" itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <h1 class="text-center mb-0" itemprop="about">選擇 HR 系統的五大關鍵</h1>
        <hr>
        <div class="row justify-content-center no-gutters">
          <div class="accordion mb-3 col-12 col-md-8" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>廠商信譽</strong></div>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-3">
              <ul class="disc" itemprop="text">
                <li>廠商在業界的口碑滿意度可作為重要參考指標，選擇具有規模且財務穩健的廠商，才不會發生 HR 系統維護求助無門的慘劇。</li>
                <li>HR 系統廠商在台灣有研發及顧問團隊，才能即時提供最迅速的支援與服務。</li>
                <li>許多產業皆跨足兩岸三地據點，當系統導入後，廠商能否提供跨國的支援與服務相當重要。</li>
              </ul>
            </div>
          </div>
          <div class="accordion mb-3 col-12 col-md-8" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>廠商經驗</strong></div>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-3">
              <ul class="disc" itemprop="text">
                <li>擁有越多國際大廠的實務經驗，相對能提供較完善的系統規劃建議。</li>
                <li>具備相關產業經驗，除了能加速彼此溝通，也能參考更多產業創新做法。</li>
                <li>廠商是否有能力將 HR 系統與其他既有系統（例如：ERP）進行整合串接。</li>
              </ul>
            </div>
          </div>
          <div class="accordion mb-3 col-12 col-md-8" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品功能</strong></div>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-3">
              <ul class="disc" itemprop="text">
                <li>完善的 HR 系統能減少客製，降低系統花費成本。</li>
                <li>導入的時間過長，會影響企業內部營運作業，增加成本支出。</li>
                <li>專業的資料庫加密技術，能保障薪資等機密資訊不被盜取。</li>
              </ul>
            </div>
          </div>
          <div class="accordion mb-3 col-12 col-md-8" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品彈性</strong></div>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-3">
              <ul class="disc" itemprop="text">
                <li>優質的 HR 系統保有未來擴充性，能因應公司特性做出符合需求的調整。</li>
                <li>具備多樣靈活參數，能讓企業自行設定所需欄位功能，節省客製費用。</li>
                <li>擁有專業技術團隊，系統隨法規變動即時更新，並針對系統功能持續升級與優化，讓系統架構更完整。</li>
              </ul>
            </div>
          </div>
          <div class="accordion mb-3 col-12 col-md-8" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品價值</strong></div>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="p-3">
              <ul class="disc" itemprop="text">
                <li>國外系統價格昂貴，企業需花費鉅額成本。因此挑選本土化、價格合理，且能符合全球化特性的 HR 系統，是最經濟實惠的選擇。</li>
                <li>好的系統除了節省企業人力成本，也能降低客戶 TCO（Total Cost），避免產生不必要的延續成本。</li>
                <li>針對企業屬性提供最佳解決方案，迅速建立 HR 流程及制度；並提供開發工具等全面性的技術移轉，企業可自行掌控，IT 人員接手無慮。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<!-- <script src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js" defer></script> -->
<!-- <script src="/js/choose.js" defer></script> -->
</body>
</html>