<?php
http_response_code(301);
header('Location: https://www.ares.com.tw/products/e-recruiting/');
exit;

require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$contact=0;

$page['title'] = '線上招募管理系統，打造企業人才庫、履歷精準媒合';
$page['description'] = '客製化線上招募系統能將招募流程完整e化，多元管道履歷收集、職缺自動媒合、面試、錄取、核敘、任用、報到各階段，協助企業打造專屬人才庫，提升招募績效。';
$canonical='https://hcp.ares.com.tw/products/modules/e-recruiting';
$page['css']=array('/css/erecruiting.css','/lib/fancybox3/jquery.fancybox.min.css');

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
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 d-none d-md-block text-center">
            <img class="img-fluid" loading="lazy" width="340" height="225" src="/img/products/modules/e-recruiting/線上招募管理系統.png" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="dline">資通電腦 線上招募管理系統</h1>
            <ul class="check-list">
              <li>集中管理各子公司招募進度</li>
              <li>自動媒合篩選機制，掌握精準人才</li>
              <li>累積專屬人才庫，活化庫存履歷</li>
              <li>招募統計分析、招募 KPI 績效管理</li>
              <li>整合多管道職缺投遞與履歷收集</li>
              <li>與企業 Email 完整整合，一鍵發送招募通知信</li>
            </ul>
          </div>
          <div class="col-12 col-lg-8 text-center pt-5">
            <img class="img-fluid"  width="1488" height="1160" src="/img/products/modules/e-recruiting/recruit-structure.png" alt="線上招募管理系統包含應徵資料申請、應徵者管理、面試進度追蹤、聘任通知等作業流程">
            <span>人才招募作業流程</span>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">人才徵選輕鬆 6 步驟</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <ol class="row">
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 1<br><span class="main-color">多元認證</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>支援 FB</li>
                    <li>支援 Google</li>
                    <li>支援 Linkedin</li>
                    <li>自建帳密登入</li>
                  </ul>
                </div>
              </li>
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 2<br><span class="main-color">投遞履歷</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>履歷填寫引導</li>
                    <li>支援內部員工引薦</li>
                    <li>合適職缺搜尋</li>
                    <li>工作內容說明</li>
                    <li>精準投遞</li>
                  </ul>
                </div>
              </li>
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 3<br><span class="main-color">邀約及面試</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>履歷審閱</li>
                    <li>邀約、面試通知</li>
                    <li>線上測驗</li>
                    <li>面談</li>
                  </ul>
                </div>
              </li>
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 4<br><span class="main-color">錄取</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>錄取通知</li>
                    <li>核敘核薪通知</li>
                  </ul>
                </div>
              </li>
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 5<br><span class="main-color">報到</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>報到通知</li>
                    <li>準備入職文件</li>
                  </ul>
                </div>
              </li>
              <li class="col-6 col-md-4 col-lg-2 pb-3">
                <div>
                  <div class="gradient-circle-wrap mb-2">
                    <div class="gradient-circle">
                      <div class="text-center">STEP 6<br><span class="main-color">入職</span></div>
                    </div>
                  </div>
                  <ul class="check-list">
                    <li>入職報到</li>
                    <li>資料匯至人資系統</li>
                  </ul>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section id="grid5">
      <div class="container">
        <h2 class="text-center">招募系統優勢</h2><hr>
        <div class="grid w-100">
          <div class="grid1 p-3 rounded box-shadow mb-1">
            <h3 class="main-color mt-0">履歷管理</h3>
            <strong>多元管道職缺與履歷</strong>
            <ul class="disc">
              <li>人力銀行、Linkedin、招募官網職缺發布與履歷收集</li>
              <li>建立專屬人才庫</li>
            </ul>
            <strong>自動媒合履歷</strong>
            <p>自動篩選比對職缺與履歷條件，精準媒合過濾</p>
          </div>
          <div class="grid2 p-3 rounded box-shadow mb-1">
            <h3 class="mt-0" style="color:#cf474c">人才庫管理</h3>
            <strong>多面向查詢人才庫</strong>
            <ul class="disc">
              <li>直覺化搜尋</li>
              <li>多面向查詢</li>
              <li>履歷再利用</li>
            </ul>
          </div>
          <div class="grid3 p-3 rounded box-shadow mb-1">
            <h3 class="mt-0" style="color:#3f7ab5">績效管理</h3>
            <strong>招募績效分析</strong>
            <ul class="disc">
              <li>邀約績效分析</li>
              <li>面談成果分析</li>
              <li>聘僱來源分析</li>
              <li>報到結果分析</li>
            </ul>
            <strong>招募 KPI 指標</strong>
            <ul class="disc">
              <li>平均招募天數</li>
              <li>Cycle Time 分析</li>
              <li>招募各項績效指標</li>
            </ul>
          </div>
          <div class="grid4 p-3 rounded box-shadow mb-1">
            <h3 class="mt-0" style="color:#845199">招募流程管理</h3>
            <strong>e 化流程管理</strong>
            <p>涵蓋邀約、面談、核敘、錄取、報到皆線上完成</p>
            <strong>滿足不同職缺樣態</strong>
            <ul class="disc">
              <li>支援 DL / IDL</li>
              <li>不同職缺自動切換不同招募流程</li>
            </ul>
            <strong>自動匯入 HR 系統</strong>
            <p>報到資料自動匯入人資系統，HR 不需重複建檔</p>
          </div>
          <div class="grid5 p-3 rounded box-shadow mb-1">
            <h3 class="mt-0" style="color:#007dfe">集團招募管理</h3>
            <strong>支援多語言、多集團</strong>
            <ul class="disc">
              <li>支援繁中、簡中、英文…等</li>
              <li>可開多集團公司，總公司一手掌握各地招募情況</li>
            </ul>
            <strong>不同角色儀表版</strong>
            <p>HR、招募主管、用人單位主管，不同角色專屬儀表版，顯示即時招募狀態</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
      <h2 class="text-center">系統效益</h2><hr>
      <div class="row">
        <div class="col-12 col-md-4 mb-5">
          <a href="/img/products/modules/e-recruiting/單一平台.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/products/modules/e-recruiting/單一平台.png" alt="可在系統中切換不同帳號">
          </a>
          <h3 class="h4 my-2">單一平台<br class="d-none d-lg-inline">即可掌握子公司招募動態</h3>
          <p>招募人員可直接在系統中切換不同帳號，集中管理各據點的人員招募進度。</p>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <a href="/img/products/modules/e-recruiting/精準判定人才合適度.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/products/modules/e-recruiting/精準判定人才合適度.png" alt="自動比對提高媒合率">
          </a>
          <h3 class="h4 my-2">精準判定人才合適度<br class="d-none d-lg-inline">提高媒合率</h3>
          <p>企業可自行設定媒合條件權重，系統每日自動比對符合條件的人才履歷，發送給 HR 與用人主管。</p>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <a href="/img/products/modules/e-recruiting/專屬招募儀表板.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/products/modules/e-recruiting/專屬招募儀表板.png" alt="代辦事項一目了然">
          </a>
          <h3 class="h4 my-2">專屬招募儀表板<br class="d-none d-lg-inline">代辦事項一目了然</h3>
          <ul class="disc">
            <li>HR：本日職缺面談數、面談結果、各職缺已錄取清單、待招募職缺數、職缺待報到人數</li>
            <li>主管：待招募職缺清單、待檢閱履歷、面談結果、面談清單、報到清單</li>
          </ul>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <a href="/img/products/modules/e-recruiting/招募流程分析.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/products/modules/e-recruiting/招募流程分析.png" alt="提供招募原因分析">
          </a>
          <h3 class="h4 my-2">招募流程分析<br class="d-none d-lg-inline">優化徵才品質與效率</h3>
          <p>招募流程各階段人數，並針對中斷招募流程的人員提供原因分析，做為 HR 檢討招募作業流程的參考。</p>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <a href="/img/products/modules/e-recruiting/自動化KPI報表.png" data-fancybox>
            <img class="img-fluid" loading="lazy" width="1200" height="720" src="/img/products/modules/e-recruiting/自動化KPI報表.png" alt="自動產出KPI報表">
          </a>
          <h3 class="h4 my-2">自動化 KPI 報表<br class="d-none d-lg-inline">招募成效顯而易見</h3>
          <p>系統可依企業需求自動產出 KPI 招募績效報表，包含招募達成率、到談率、錄取率、Offer 接受率、報到率…等，省去人工整理作業，協助 HR 分析招募成果。</p>
        </div>
      </div>
      </div>
    </section>
    <section class="pt-0">
      <div class="container-fluid py-4 bgp-r bgs-cover bg-lazyload" data-image="/img/products/modules/e-recruiting/企業形象招募網站.jpg" data-height="500px" data-view="992">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-5"></div>
          <div class="col-12 col-lg-5">
            <h2 class="dline">企業形象招募網站，提供快速求職服務</h2>
            <p>企業可建立專屬的企業招募網站，提升專業形象，並快速蒐集人才履歷。求職者透過自助式線上服務，可主動輸入及維護履歷資料，也能加入自己喜愛的職缺，直接投遞履歷，提高求職者對企業的良好印象，打造企業高效率招募服務！</p>
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
        <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
          <h3 class="dline">企業專屬人才招募網站</h3>
          <ul class="check-list">
            <li>建立企業品牌形象</li>
            <li>彈性設定企業職缺需求</li>
            <li>求職者可於人力銀行或直接到企業招募網站投遞履歷</li>
          </ul>
        </div>
        <div class="col-12 col-lg-5">
          <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/products/modules/e-recruiting/企業專屬人才招募網站.png" alt="企業專屬人才招募網站">
        </div>
        </div>
      </div>
      <div class="container-fluid py-4 gray3-bg">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-5 order-1 order-lg-2">
            <h3 class="dline">多元管道登入，省時又方便</h3>
            <p>提供求職者透過 FB、Google、Linkedin 一鍵登入，或自建帳號與密碼登入。</p>
          </div>
          <div class="col-12 col-lg-5 order-2 order-lg-1">
            <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/products/modules/e-recruiting/多元管道登入.png" alt="多種管道可以登入">
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
        <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
          <h3 class="dline">企業校園徵才網頁</h3>
          <p>提供 QR Code 掃描功能讓學生直接用手機掃描 QR Code 輸入履歷資料，不需招募人員花費時間整理。若網路環境不佳，也可提供 Excel 直接匯入履歷。</p>
        </div>
        <div class="col-12 col-lg-5">
          <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/products/modules/e-recruiting/企業校園徵才網頁.png" alt="校園徵才更方便">
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
    'text' => '【招募管理大解析】跨國集團快速建立全球化佈局',
    'url' => 'https://marketing.ares.com.tw/newsletter/2023-03-e-recruiting/global-recruitment-management-system'
  )
  ,array(
    'text' => '國際化線上招募系統支援多國語言與異地翻譯',
    'url' => 'https://marketing.ares.com.tw/newsletter/2023-03-e-recruiting/international-online-recruiting-system'
  )
  ,array(
    'text' => '打造有效招募策略，在眾多求職者中找到最佳人才',
    'url' => 'https://marketing.ares.com.tw/newsletter/2023-03-e-recruiting/how-to-find-the-best-talent'
  )
  ,array(
    'text' => '如何提升人才招募品質？善用 7 大招募績效分析',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-12-hcp/recruitment-management'
  )
  ,array(
    'text' => '建立人才資料庫，完整掌握人才歷程',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-07-e-recruiting/why-build-talent-pool'
  )
  ,array(
    'text' => '招募人員對線上招募管理系統最有感的９件事',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-07-e-recruiting/hr-recruitment-solutions'
  )
  ,array(
    'text' => '人力銀行招募系統做不到，招募人員很困擾的６件事',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-07-e-recruiting/hr-recruitment-problem'
  )
  ,array(
    'text' => '為什麼人才資料庫對企業很重要？如何建置？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-10-e-recruiting/talent-pool'
  )
  ,array(
    'text' => '想快速找到好人才？快掌握招募系統三大徵才技巧',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-10-e-recruiting/recruiting-skills'
  )
  ,array(
    'text' => 'HR 人資招募在忙什麼？徵人、求才、招募管理怎麼做？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-10-e-recruiting/recruiter'
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
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>