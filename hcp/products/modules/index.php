<?php
$url='https://hcp.ares.com.tw/products/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR人力解決方案涵蓋模組';
$page['description'] = '協助企業管理人事資料、薪資獎金、差勤請假、地方保險、員工職能、教育訓練與績效，並包含線上招募、商業智慧分析、薪資密封袋及專業顧問服務。';
$canonical='https://hcp.ares.com.tw/products/modules/';
// $another = '<link rel="amphtml" href="https://hcp.ares.com.tw/amp/products/modules/">';
$page['css']=array('/css/product.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('../_banner.php');
include('_breadcrumb.php');
?>
      </ol>
    </aside>
    <aside class="supmenu d-print-none container-fluid">
        <ul class="text-center mb-0">
          <li class="main-color"><a href="/products/modules/">產品架構</a></li>
          <li><a href="/products/features/">產品特色</a></li>
          <li><a href="/products/benefits/">產品效益</a></li>
        </ul>
    </aside>
    <section>
      <div class="container">
        <hgroup class="text-center">
          <h1 class="d-inline-block mb-0">提供完整 HR 人力資源解決方案</h1>
          <hr>
          <!-- <p class="h2">跨兩岸的人資系統 集中管理隨心所欲</p> -->
        </hgroup>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>HCP（Human Capital Planner）為國內軟體上市公司資通電腦所研發的人力資源管理系統（Human Resources Management System, HRMS），也可稱為人力資產規劃系統/人事管理系統。</p>
            <p>HCP 人資系統包含 HRM 人資管理模組、HRD 人力發展模組，以及行動 App、商業智慧分析、薪資密封袋等加值服務功能，企業可依自身需求選用搭配。HCP 專業顧問擁有豐富的兩岸導入經驗，能縮減導入時間與成本，不論是跨國集團或擁有海外據點的企業，皆能輕鬆實現集中管理權限、簡化作業流程的目標！</p>
          </div>
          <div class="col-12 col-lg-10">
            <div class="row justify-content-center no-gutters" id="cross">
              <div class="d-flex flex-wrap w-100 no-gutters position-relative">
                <div class="col-12 col-md-6 text-md-right px-3">
                  <h2 class="main-color"><a href="hrm">HRM 人資管理</a></h2>
                  <ul class="disc d-inline-block text-left">
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/hrm">人事資料管理</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/salary">薪資獎金計算</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/attendance">差勤請假管理</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/insurance">地方保險作業</a></li>
                  </ul>
                  <!-- <div class="sub-color"><a href="hrm">≫ 更多詳細資訊</a></div> -->
                </div>
                <div class="col-12 col-md-6">
                  <img class="img-fluid lazyload img-md-bg" data-src="/img/products/modules/modules-pho-1.png" data-srcset="/img/products/modules/modules-pho-1.png 1x, /img/products/modules/modules-pho-1-2x.png 2x" sizes="auto" alt="*">
                </div>
              </div>

              <div class="d-flex flex-wrap w-100 no-gutters position-relative">
                <div class="col-12 col-md-6 text-md-right">
                  <img class="img-fluid lazyload img-md-bg" data-src="/img/products/modules/modules-pho-2.png" data-srcset="/img/products/modules/modules-pho-2.png 1x, /img/products/modules/modules-pho-2-2x.png 2x" sizes="auto" alt="*">
                </div>
                <div class="col-12 col-md-6 px-3">
                  <h2 class="main-color"><a href="competence">HRD 人力發展</a></h2>
                  <ul class="disc d-inline-block text-left">
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/competence">員工職能管理</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/training">教育訓練管理</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/performance">員工績效管理</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/recruit">招募管理系統</a></li>
                  </ul>
                  <!-- <div class="sub-color"><a href="competence">≫ 更多詳細資訊</a></div> -->
                </div>
              </div>

              <div class="d-flex flex-wrap w-100 no-gutters position-relative">
                <div class="col-12 col-md-6 text-md-right px-3">
                  <h2 class="main-color"><a href="ess-mss">加值服務</a></h2>
                  <ul class="disc d-inline-block text-left">
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/ess-mss">員工／主管自助系統</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/e-recruiting">線上招募管理系統</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/ehr-mobile">行動應用 App</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/bis">商業智慧系統</a></li>
                    <li><a class="p-2 p-lg-0 d-inline-block" href="<?= HOST_LINK ?>products/modules/usp">薪資密封袋</a></li>
                  </ul>
                  <!-- <div class="sub-color"><a href="ess-mss">≫ 更多詳細資訊</a></div> -->
                </div>
                <div class="col-12 col-md-6">
                  <img class="img-fluid lazyload img-md-bg" data-src="/img/products/modules/modules-pho-3.png" data-srcset="/img/products/modules/modules-pho-3.png 1x, /img/products/modules/modules-pho-3-2x.png 2x" sizes="auto" alt="*">
                </div>
              </div>

              <div class="d-flex flex-wrap w-100 no-gutters position-relative">
                <div class="col-12 col-md-6 text-md-right">
                  <img class="img-fluid lazyload img-md-bg" data-src="/img/products/modules/modules-pho-4.png" data-srcset="/img/products/modules/modules-pho-4.png 1x, /img/products/modules/modules-pho-4-2x.png 2x" sizes="auto" alt="*">
                </div>
                <div class="col-12 col-md-6 px-3">
                  <h2 class="main-color"><a href="consultant-service">專業顧問服務</a></h2>
                  <ul class="disc d-inline-block text-left">
                    <li>客服網站</li>
                    <li>日常問題諮詢</li>
                    <li>遠端偵測服務</li>
                    <li>定期客戶回訪</li>
                    <li>定期教育訓練課程</li>
                  </ul>
                  <div class="sub-color"><a href="consultant-service">≫ 顧問服務詳細資訊</a></div>
                </div>
              </div>
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
</body>
</html>