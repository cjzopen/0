<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['title'] = '人才招募管理，加速招募流程';
$page['description'] = '人才招募管理模組，包含人力預估、人力需求申請、企業內部人才庫、企業外部人才網、招募者職缺查詢、重點職缺逾時警示、招募流程處理、面試安排、聘任通知等作業。';
$canonical='https://hcp.ares.com.tw/products/modules/recruit';
$page['css']=array('/css/product.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/recruit'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人力發展模組';
$breadcrumb_text='人才招募管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrd.php');
?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="d-none d-md-block m-auto img-fluid" src="/img/products/modules/e-recruiting/e-recruiting-bg-m.png" width="340" height="231" loading="lazy" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="dline">人才招募管理模組</h1>
            <p>可針對人力預算進行規劃，詳實控管公司人力成本及招募流程，依據內招、外招流程管理人才庫。面試人員一經錄取，HR 系統會自動將應徵資料轉入人事資料，並可依據需求設定面試通知單、錄取通知單、未錄取通知單、感謝函、報到通知單等，也能分析人力及離職率，真正從人才源頭進行管理。</p>
            <a href="https://www.ares.com.tw/products/e-recruiting/" class="btn">→ 掌握招募技巧，建立人才庫</a>
          </div>
        </div>
      </div>
    </section>
    <section class="bgp-l bgs-cover bg-lazyload d-flex align-items-center" data-image="/img/products/modules/e-recruiting/e-recruiting-bg-2.png" data-height="600px" data-view="768">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <h2 class="main-color h4">如何運用人才招募管理模組，協助 HR 人員提升人才招募成效？</h2>
            <p>HR 系統提供履歷資料匯入功能，方便與官網整合，透過履歷表投遞職缺；HR 人員藉由檔案將履歷表轉入系統，統一集中管理履歷資料，並可安排面試時間。系統能設定發送面試通知單、錄取通知單、未錄取通知單等，並進行人力分析，檢討企業人力預算。</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>