<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HCP人資系統｜了解HRM／HRD差異，一站滿足人資所需';
$page['description'] = '專為台灣高科技製造業打造，超過百萬人次使用，有完整的HRM與HRD人事系統解決方案，涵蓋人事資料、考勤與排班、薪資獎金、地方保險管理…等。';
$canonical='https://hcp.ares.com.tw/products/';
$page['ogimg']="https://hcp.ares.com.tw/img/products/人資系統完整模組.png";
// $another = '<link rel="amphtml" href="https://hcp.ares.com.tw/amp/products/modules/">';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/grid.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/'
  )
  ,array(
    'lang' => 'en',
    'url' => 'https://hcp.ares.com.tw/en/products/structures/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include '_banner.php';
include 'modules/_breadcrumb.php';
?>
      </ol>
    </aside>
    <?php
include '_menu.php';
?>
<style>
#industry{
  background-color:#F1F1FC;
  background-image: url('/img/products/triangle-1.png');
  background-repeat: no-repeat;
  background-position: 6% 0;
}
.hover-shadow strong{
  background-color: #666ba9;
  color:#fff;
  border-radius: 50rem;
  padding:.3rem .75rem;
  min-width: 188px;
  &::after{
    content:' ⪢';
  }
}
.hover-shadow:hover strong{
  text-decoration: underline;
}
</style>
    <section>
      <div class="container">
        <h1 class="mb-0 text-center hr">HCP 集結上百家大廠人事經驗，HRM／HRD 強化集團人事管理</h1>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>HCP（Human Capital Planner；人力資產規劃系統），分為 HRM 人事管理、HRD 人才發展兩部分，主要包含人事、薪資、差勤、保險、招募管理…等項目。 HCP 每天處理 400 萬筆以上差勤資料，完整支援中大型企業、高科技業、製造業所需的複雜人事管理，能成為企業人資強力戰略夥伴，加速 HR 數位轉型。</p>
          </div>
        </div>
        <figure class="text-center d-block">
          <!-- <source type="image/webp" srcset="/img/know/what/know-hr.webp"> -->
          <img class="img-fluid my-5" loading="lazy" width="400" height="400" src="/img/products/人資系統完整模組_2x.webp" srcset="/img/products/人資系統完整模組_1x.webp 1x, /img/products/人資系統完整模組_2x.webp 2x" alt="HCP人資系統架構圖">
        </figure>
        <div class="text-center">
          <iframe style="max-width: 100%;" width="560" height="315" src="https://www.youtube.com/embed/ilswi0X9AZk?si=FO7xT65-lqjTHW5x" title="結薪作業更快更精準" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <section>
      <div class="container" id="hrm">
        <h2 class="text-center mb-0 hr">HRM 人資管理系統</h2>
        <div class="row justify-content-center">
          <p class="col-12 col-md-8 mb-5">也稱為人事管理系統，包含部門組織、人事管理、排班管理、考勤管理、地方保險、薪資管理等，可協助企業內部所有涉及到人事方面的各項事務與管理作業，幫助人資擺脫繁瑣人工作業，人事效率 UP！</p>
        </div>
        <ul class="row text-center">
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/hrm">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/hrm.svg" alt="*">
              <div class="mb-2 mt-2"><strong>人事資料管理模組</strong></div>
              <div>集團式組織架構<br>高彈性人事權限管理</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/salary">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/salary.svg" alt="*">
              <div class="mb-2 mt-2"><strong>薪資獎金管理模組</strong></div>
              <div>強大計薪運算<br>自動拋轉 ERP</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/attendance">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/attendance.svg" alt="*">
              <div class="mb-2 mt-2"><strong>差勤請假管理模組</strong></div>
              <div>支援複雜排班<br>多種輪班類別及時刻</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/insurance">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/insurance.svg" alt="*">
              <div class="mb-2 mt-2"><strong>地方保險管理模組</strong></div>
              <div>滿足跨國保險稅率<br>自動加退保</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="container pt-5" id="hrd">
        <h2 class="text-center mb-0 hr">HRD 人力資源發展系統</h2>
        <div class="row justify-content-center">
          <p class="col-12 col-md-8">企業對於員工進行有計畫性的招募及培訓作業，以提升組織整體績效。主要包含員工職能評鑑、教育訓練規劃、員工績效考核分析追蹤、招募流程管理…等項目，可協助企業強化人才培育、精進組織績效。</p>
        </div>
        <ul class="row text-center">
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/competence">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/competence.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工職能管理模組</strong></div>
              <div>多維度職能<br>能力評鑑及分析</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/training">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/training.svg" alt="*">
              <div class="mb-2 mt-2"><strong>教育訓練管理模組</strong></div>
              <div>完整記錄與追蹤<br>提升培訓效率及品質</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/performance">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/performance.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工績效管理模組</strong></div>
              <div>簡化考核流程<br>強化員工職能</div>
            </a>
          </li>
          <li class="col-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/recruit">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/recruit.svg" alt="*">
              <div class="mb-2 mt-2"><strong>人才招募管理模組</strong></div>
              <div>履歷集中管理<br>自動轉入人事系統</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="container pt-5" id="other">
        <h2 class="text-center mb-0 hr">獨立模組</h2>
        <div class="row justify-content-center">
          <p class="col-12 col-md-8">企業可依自身需求選購合適的獨立加值服務，讓人事管理流程更加完善，提升員工體驗，幫助企業完整數據，不限時間與地點限制優化人事行政作業。</p>
        </div>
        <ul class="row text-center justify-content-center">
          <li class="col-6 col-lg-4 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/ess-mss">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/ess-mss.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工／主管自助系統</strong></div>
              <div>人事資料自主查詢<br>即時掌握員工考勤</div>
            </a>
          </li>
          <li class="col-6 col-lg-4 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/bis">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/bis.svg" alt="*">
              <div class="mb-2 mt-2"><strong>商業智慧系統</strong></div>
              <div>視覺化分析報表<br>迅速獲取人事營運數據</div>
            </a>
          </li>
          <li class="col-6 col-lg-4 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/usp">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/usp.svg" alt="*">
              <div class="mb-2 mt-2"><strong>薪資密封袋</strong></div>
              <div>高規格 PKI 技術加密<br>自動發送電子薪資單</div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <h2 class="text-center hr">不只人資系統，顧問服務讓您後勤沒煩惱</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <p>資通電腦累積上百家大廠管理經驗，能給客戶更優質的人資系統服務效益。系統具備 62 個最佳人事管理實務流程，搭配 HCP 專業顧問為客戶設計的企業內部流程，無須額外顧問費用，即能享有與國際大廠相同的作業流程；更透過專屬的 ARES’S R3M 導入手法，協助企業人事管理流程再造，快速回收建置人資系統的成本投資！</p>
          </div>
          <div class="col-12 col-lg-5 text-center">
            <img class="img-fluid" loading="lazy" width="744" height="756" src="/img/products/modules/consultant-service-structure.png" alt="R3M：Rapid, Reduce, Return">
          </div>
        </div>
        <ul class="row">
          <li class="col-12 col-lg-6">
            <h3 class="main-color">人事系統客服網站及服務平台</h3>
            <p>提供客服網站及客戶服務平台（Mantis），不僅能即時掌控系統問題，也可讓使用者直接在服務平台上詢問問題，加速系統使用問題排除，便利又有效率！</p>
          </li>
          <li class="col-12 col-lg-6">
            <h3 class="main-color">日常問題諮詢</h3>
            <p>提供 4 X 8 系統問題排除電話服務，上班時間中 4 小時內回應，並於 8 小時內提供解決系統問題方案。</p>
          </li>
          <li class="col-12 col-lg-6">
            <h3 class="main-color">遠端偵測系統服務</h3>
            <p>提供遠端偵測系統服務，可協助使用者迅速查明問題原因；HR 系統使用中發生故障時，除了提供遠程偵測之外，並於上班時間視情況安排到場（8 小時內）的修復服務。</p>
          </li>
          <li class="col-12 col-lg-6">
            <h3 class="main-color">定期客戶系統回訪</h3>
            <p>每年安排客戶系統回訪，並實施滿意度調查與現場問題調查及解決方案。</p>
          </li>
          <li class="col-12 col-lg-6">
            <h3 class="main-color">定期的教育訓練課程</h3>
            <p>定期舉辦 MIS 及 HR 人員訓練課程，協助使用者熟悉產品操作與應用。</p>
          </li>
          <li class="col-12 col-lg-6">
            <h3 class="main-color">其他系統服務</h3>
            <ul class="disc"><li>資料備份及還原服務。</li><li>每月定期產品更新升級。</li><li>每年定期提供 1 次系統後台性能優化服務。</li><li>每年免費提供 Alert 警示及報表各 1 支。</li><li>當客戶端的公司制度變更時，可透過彈性參數設定，自行輕鬆修改。</li><li>結薪期間發生緊急情況，資通能第一時間配合解決，協助客戶排除系統問題。</li></ul>
          </li>
        </ul>
      </div>
    </section>
    <section id="industry">
      <h2 class="text-center hr">滿足各產業 HR 人事需求</h2>
      <div class="container">
        <div class="row align-items-center pb-5">
          <div class="col-12 col-md-6">
            <div class="h4 main-color">高科技業／外商</div>
            <h3 class="mt-0">串聯集團多公司架構、跨國人事權限控管</h3>
            <ul class="disc">
              <li>海外員工資料自動串接總公司人資系統</li>
              <li>依不同區域/部門/職級及員工類別設定各角色查閱權限</li>
              <li>支援多公司別管理，一鍵產出集團各子公司人事報表</li>
              <li>HR 依需求自行調整報表欄位，不需擔心因法令變更或公司政策調整，還要客製費用</li>
            </ul>
            <a href="/best-practices/high-tech" class="btn">客戶推薦案例</a>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block text-center">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/products/product-application-1.svg" alt="*">
          </div>
        </div>
        <div class="row align-items-center py-5">
          <div class="col-12 col-md-6 d-none d-md-block text-center">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/products/product-application-2.svg" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <div class="h4 main-color">製造業</div>
            <h3 class="mt-0">複雜班別管理、彈性年假計算設定</h3>
            <ul class="disc">
              <li>支援複雜排班／排休、輪班制、周年制／歷年制、班別津貼計算、彈休／輪休／特休管理</li>
              <li>彈性設定加班費率及認列時數規則</li>
              <li>依自身需求設定多組年假（週／曆年制）及遞延辦法</li>
              <li>年假依到職日自動開假、留停扣年資計算年假</li>
            </ul>
            <a href="/best-practices/manufacturing" class="btn">客戶推薦案例</a>
          </div>
        </div>
        <div class="row align-items-center py-5">
          <div class="col-12 col-md-6">
            <div class="h4 main-color">流通服務業／其他</div>
            <h3 class="mt-0">遠端線上打卡、快速結薪、支援法規更新</h3>
            <ul class="disc">
              <li>遠距上班線上打卡</li>
              <li>系統自動帶入考勤、加班資訊</li>
              <li>計薪資料自動拋轉 ERP 總帳系統</li>
              <li>系統與政府法規同步更新</li>
              <li>員工線上申請請假／加班，主管行動簽核表單</li>
            </ul>
            <a href="/best-practices/circulation-service-other" class="btn">客戶推薦案例</a>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block text-center">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/products/product-application-3.svg" alt="*">
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<!-- <script src="/lib/swiper4.3.3/swiper.min.js" defer></script> -->
<!-- <script src="/js/what.js" defer></script> -->
<script src="/js/sda.js" defer></script>
</body>
</html>