<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '線上招募管理系統，打造企業專屬人才庫';
$page['description'] = '助企業徵才、徵人、求才並建立快速招募流程，改善招募流程效率。從履歷接收到人才錄用，順利完成職缺自動媒合、面試、錄取、核敘、任用、報到各階段人事作業';
$canonical='https://hcp.ares.com.tw/products/modules/e-recruiting';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/e-recruiting'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='獨立模組';
$breadcrumb_text='線上招募管理系統';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_other.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center">資通電腦 線上招募管理系統</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>客製化的線上招募管理系統能將招募流程完整 e 化，從職缺自動媒合、面試、錄取、核敘、任用、報到各階段皆完整涵蓋，介接企業原有 人力需求單、報到匯入至 HR 系統，讓人資管理更便利。應徵者透過自助式線上服務，主動輸入及維護履歷資料，也可直接加入喜愛的職缺，直接投遞履歷，給予應徵者對企業良好印象。HR 人員減少聯繫登打作業時間，還能清楚掌握面試進度，打造企業高效率招募服務！</p>
          </div>
        </div>
        <figure class="text-center mt-3">
          <a href="/img/products/modules/recruit/recruit-structure.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="744" height="580" src="/img/products/modules/recruit/recruit-structure-m.png" alt="線上招募管理系統包含應徵資料申請、應徵者管理、面試進度追蹤、聘任通知等作業流程">
          </a>
        </figure>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">招募流程 e 化 大幅改善人才媒合效率</h2>
        <hr>
        <div class="row">
<?php
$lists =array(
  array(
    'title' => '支援集團架構、多國語言',
    'text' => '各分公司可管理職缺履歷，系統可切換多語言。'
  ),
  array(
    'title' => '整合多種履歷來源',
    'text' => '可與 104 人力銀行、Linkedin、Facebook 等職缺發佈或履歷整合。'
  ),
  array(
    'title' => '自動媒合機制',
    'text' => '系統根據履歷內容與職缺設定條件，自動計算相符程度。'
  ),
  array(
    'title' => '履歷管理',
    'text' => '包含履歷分派、推薦、安排面談、感謝函、預聘、雇用等管理流程。'
  ),
  array(
    'title' => '應徵者管理',
    'text' => '透過搜尋功能，可迅速查找應徵者資料，並可註記或加入最愛清單。'
  ),
  array(
    'title' => '專屬儀錶板介面',
    'text' => '提供招募者及主管專屬儀表板管理介面，讓招募流程更順利，方便人員管理。'
  )
);
foreach ($lists as $key=>$list) {
?>
          <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
            <div class="mx-auto" style="max-width:18rem">
              <img class="fff-bg rounded-circle" src="/img/products/modules/e-recruiting/e-recruiting-icon-<?= $key+1 ?>.svg" loading="lazy" alt="*" aria-hidden="true">
              <h3 class="main-color h4 my-2"><?= $list['title'] ?></h3>
              <p class="text-left"><?= $list['text'] ?></p>
            </div>
          </div>
<?php
}
?>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">招募系統優勢</h2><hr>
        <div class="row">
          <div class="col-12 col-md-6">
            <h3 class="h4 main-color">建立真正的專屬人才資料庫</h3>
            <p>一般透過外部平台進行人才招募，應徵者資料都存放在人力銀行中，除非另外將履歷匯出歸檔，才能留存企業資料庫。資通電腦線上招募管理系統可與各人力銀行平台介接，履歷資料自動媒合回傳，HR 人員無需花費時間存檔，完整建立企業人才資料庫。</p>
          </div>
          <div class="col-12 col-md-6">
            <h3 class="h4 main-color">精準 match 招募需求</h3>
            <p>系統能與企業內部的人力需求單串接，自動帶入職缺內容，節省 HR 人員重複建檔時間。並可在系統中直接設定職缺發佈管道，將職缺發佈於招募官網、104 人力銀行、Linkedin 等平台。</p>
          </div>
          <div class="col-12 col-md-6">
            <h3 class="h4 main-color">一條龍式作業流程</h3>
            <p>線上招募管理系統能與企業 email 完整整合，設定自動發佈對內及對外的招募溝通信件，讓 HR 人員從職缺開立、投遞履歷、自動媒合、安排面試、核敘、Offer、On board 等流程，全部線上作業完成。</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
      <h2 class="text-center">系統功能介面</h2><hr>
      <ul>
        <li class="row py-5 flex-md-row-reverse">
          <div class="col-12 col-md-6">
            <h3 class="dline">HR 招募管理</h3>
            <ul class="disc">
              <li>本日職缺面談數</li>
              <li>面談結果</li>
              <li>轄下單位各職缺已錄取清單</li>
              <li>待招募職缺數</li>
              <li>各職缺待報到人數</li>
            </ul>
          </div>
          <div class="col-12 col-md-6 text-center">
            <a href="/img/products/modules/e-recruiting/ui-1.png" data-fancybox><img class="img-fluid" loading="lazy" width="620" height="295" src="/img/products/modules/e-recruiting/ui-1.jpg" alt="人才招募管理"></a>
          </div>
        </li>
        <li class="row py-5">
          <div class="col-12 col-md-6">
            <h3 class="dline">主管面試管理</h3>
            <ul class="disc">
              <li>待招募職缺清單</li>
              <li>待檢閱履歷數</li>
              <li>面談結果</li>
              <li>今日面談清單</li>
              <li>待報到清單（近 2 週內）</li>
            </ul>
          </div>
          <div class="col-12 col-md-6 text-center">
            <a href="/img/products/modules/e-recruiting/ui-2.png" data-fancybox><img class="img-fluid" loading="lazy" width="620" height="296" src="/img/products/modules/e-recruiting/ui-2.jpg" alt="主管面試管理"></a>
          </div>
        </li>
        <li class="row py-5 flex-md-row-reverse">
          <div class="col-12 col-md-6">
            <h3 class="dline">求職者管理</h3>
            <ul class="disc">
              <li>履歷資料（個人資料、工作經驗、教育/獲獎紀錄、著作發明或證照/專利/其他專業成就）</li>
              <li>關鍵字搜尋職缺</li>
              <li>進階職缺搜尋</li>
              <li>有興趣的工作</li>
            </ul>
          </div>
          <div class="col-12 col-md-6 text-center">
            <a href="/img/products/modules/e-recruiting/ui-3.png" data-fancybox><img class="img-fluid" loading="lazy" width="425" height="606" src="/img/products/modules/e-recruiting/ui-3.jpg" alt="求職者管理"></a>
          </div>
        </li>
      </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>