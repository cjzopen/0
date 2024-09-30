<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HRM／HRD 系統是什麼？如何強化集團人事管理';
$page['description'] = 'HRM 人事管理與 HRD 人才發展，包含人事資料、考勤排班、薪資獎金、地方保險…等，可集中管控集團複雜人事，提升營運效率。';
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
.process-title{
  color:#fff;
}
#import-process{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  max-width: 880px;
  gap: 5px;
  justify-content:center;
  & li{
    width: 142px;
    &:nth-child(n){
      background-color: #DADBF2;
      & .process-title{
        background-color: #6A70BA;
      }
    }
    &:nth-child(2n){
      background-color: #D0BCE0;
      & .process-title{
        background-color: #A886BB;
      }
    }
    &:nth-child(3n){
      background-color: #BCD3F5;
      & .process-title{
        background-color: #82A9DB;
      }
    }
  }
}
</style>
    <section>
      <div class="container">
        <h1 class="mb-0 text-center hr">HRM／HRD 強化集團人事管理，科技大廠都選 HCP</h1>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p>HRM（Human Resource Management）人事管理、HRD（Human Resources Development）人才發展，主要包含人事、薪資、差勤、保險、招募考核…等項目。HCP（Human Capital Planner；人力資產規劃系統）每天處理 400 萬筆以上差勤資料，可完整支援集團企業、高科技業、製造業所需的複雜人事管理，是企業人資的強力戰略夥伴。</p>
          </div>
        </div>
        <div class="text-center">
          <iframe class="img-fluid" style="aspect-ratio: 16 / 9;" width="560" height="315" src="https://www.youtube.com/embed/ilswi0X9AZk?si=FO7xT65-lqjTHW5x" title="HCP人資系統結薪作業更快更精準" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <section>
      <div class="container" id="hrm">
        <h2 class="text-center mb-0 hr">HRM 人資管理系統</h2>
        <div class="row justify-content-center">
          <p class="col-12 col-md-6">也稱為人事管理系統，包含部門組織、人事管理、排班管理、考勤管理、地方保險、薪資管理等，可協助企業內部所有涉及到人事方面的各項事務與管理作業，幫助人資擺脫繁瑣人工作業，人事效率 UP！</p>
        </div>
        <ul class="row text-center">
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/hrm">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/hrm.svg" alt="*">
              <div class="mb-2 mt-2"><strong>人事資料管理模組</strong></div>
              <div>集團式組織架構<br>高彈性人事權限管理</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/salary">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/salary.svg" alt="*">
              <div class="mb-2 mt-2"><strong>薪資獎金管理模組</strong></div>
              <div>強大計薪運算<br>自動拋轉 ERP</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/attendance">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/attendance.svg" alt="*">
              <div class="mb-2 mt-2"><strong>差勤請假管理模組</strong></div>
              <div>支援複雜排班<br>多種輪班類別及時刻</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
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
          <p class="col-12 col-md-6">企業對於員工進行有計畫性的招募及培訓作業，以提升組織整體績效。主要包含員工職能評鑑、教育訓練規劃、員工績效考核分析追蹤、招募流程管理…等項目，可協助企業強化人才培育、精進組織績效。</p>
        </div>
        <ul class="row text-center">
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/competence">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/competence.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工職能管理模組</strong></div>
              <div>多維度職能<br>能力評鑑及分析</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/training">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/training.svg" alt="*">
              <div class="mb-2 mt-2"><strong>教育訓練管理模組</strong></div>
              <div>完整記錄與追蹤<br>提升培訓效率及品質</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/performance">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/performance.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工績效管理模組</strong></div>
              <div>簡化考核流程<br>強化員工職能</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-3 mb-3">
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
          <p class="col-12 col-md-6">企業可依自身需求選購合適的獨立加值服務，讓人事管理流程更加完善，提升員工體驗，幫助企業完整數據，不限時間與地點限制優化人事行政作業。</p>
        </div>
        <ul class="row text-center justify-content-center">
          <li class="col-12 col-sm-6 col-lg-4 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/ess-mss">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/ess-mss.svg" alt="*">
              <div class="mb-2 mt-2"><strong>員工／主管自助系統</strong></div>
              <div>人事資料自主查詢<br>即時掌握員工考勤</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-4 mb-3">
            <a class="d-block hover-shadow p-3 rounded" href="/products/modules/bis">
              <img class="img-fluid" loading="lazy" width="100" height="100" src="/img/products/modules/icon/bis.svg" alt="*">
              <div class="mb-2 mt-2"><strong>商業智慧系統</strong></div>
              <div>視覺化分析報表<br>迅速獲取人事營運數據</div>
            </a>
          </li>
          <li class="col-12 col-sm-6 col-lg-4 mb-3">
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
      <div class="container">
        <h2 class="text-center hr">HCP 標準導入流程 + 62 個最佳管理實務規劃</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p>HCP 標準化的導入流程與教育訓練，能有效減少系統建置所需的時間與建置階段額外的工作負擔。企業在轉換人資系統期間，可直接套用許多大廠經驗，以及最佳人事管理實務規劃。</p>
            <p><span class="main-color">HCP 賣的並不只是產品本身，而是幫助人資建立完善的人事制度。</span>因此我們提供 62 個最佳流程範本，協助企業快速建立人資 SOP。HCP 顧問具備豐富產業經驗，並熟悉兩岸三地人事法規，企業可與顧問討論如何改善流程，重新優化作業程序、制度與規範。</p>
          </div>
        </div>
        <h3 class="text-center main-color">HCP 標準導入流程</h3>
        <ol id="import-process" class="mx-auto d-flex align-items-stretch">
          <li class="pb-4">
            <div class="process-title p-1">1 專案規劃</div>
            <div class="process-text p-1">專屬導入顧問，時程表擬定與確認、啟動會議</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">2 系統環境建置</div>
            <div class="process-text p-1">硬體安裝、HCP 產品安裝</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">3 需求模擬與比對</div>
            <div class="process-text p-1">問卷調查，檢視企業痛點。需求模擬與 HR 教育訓練</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">4 系統架構展示</div>
            <div class="process-text p-1">作業流程圖修訂、權限列表與文件製作</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">5 測試環境建立</div>
            <div class="process-text p-1">HCP 參數設定、ESS/MSS 權限設定</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">6 定義替代方案</div>
            <div class="process-text p-1">Gap Report 差距報告確認、替代方案擬定</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">7 資料轉檔</div>
            <div class="process-text p-1">轉檔資料準備與執行、新舊系統資料轉換</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">8 整合測試</div>
            <div class="process-text p-1">測試與問題排除、檢討會議、薪資結算驗證</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">9 使用者教育訓練</div>
            <div class="process-text p-1">API 技術轉移、Alert 技術移轉、使用者教育訓練</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">10 平行作業</div>
            <div class="process-text p-1">環境參數/權限設定、平測問題輔導及排除、薪資結算驗證</div>
          </li>
          <li class="pb-4">
            <div class="process-title p-1">11 正式上線</div>
            <div class="process-text p-1">上線問題輔導及排除、上線結薪輔導、驗收會議</div>
          </li>
        </ol>
        <h3 class="text-center main-color">HCP 最佳管理實務</h3>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p>HCP 集結國際大廠企業導入經驗，彙整成 62 個最佳的人事管理實務流程，例如：<span class="main-color">員工入職任用流程、員工試用期考核流程、人事異動流程、員工離職流程…等</span>，搭配顧問輔導來檢視內部作業流程是否有優化或改善的空間。</p>
            <p>企業在挑選 HR 系統時，需找有相關產業經驗的系統商，才能一眼看出企業作業流程的利弊。像是超過 100 位員工的中大型企業，其組織流程往往複雜，調整時需要溝通與牽涉的部門眾多，廠商必須瞭解產業行規，才能對症下藥給予建議。</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center hr">系統客製少才是王道，HCP 幫企業流程改造</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p><em class="main-color h4">製造業大廠客戶：「系統客製越少，就會越穩定。HCP 的最佳實務流程能符合大多數企業的人事管理制度，大幅降低客製率。」</em></p>
            <p>建議企業可善用系統導入的機會，以系統標準功能為依據，重新梳理公司管理規則與流程，快速讓人事制度上軌道。近年勞動法令更動頻繁，資通電腦依據最新的法令與客戶的使用回饋，將系統功能優化到最完善，並搭配專屬的 ARES’S R3M 導入手法，企業無須額外顧問費用，就能享有與國際大廠相同的作業流程。</p>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid" loading="lazy" width="400" height="406" src="/img/products/modules/consultant-service-structure.png" alt="R3M：Rapid, Reduce, Return">
          <div>ARES'S R3M 導入手法</div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center hr">服務特色</h2>
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