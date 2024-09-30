<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '企業人資數位轉型四大重點';
$page['description'] = 'HR數位轉型能有效提升人事管理效率，例如：線上打卡、員工主管自助平台、線上招募系統及電子薪資條功能，作業流程化繁為簡！';
$canonical = HOST_LINK.'topic/digital-transformation/';
// $page['css']=array('/css/grid.css','/css/why.css');

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/topic/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  'HR 數位轉型', //圖片上的字
  'fff-color' //字的 class
);
?>
<main itemscope itemtype="https://schema.org/FAQPage">
    <div class="breadcrumb" aria-label="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <ol class="container">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">人資數位轉型專區</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <section class="bgp-l bgp-t bgs-cover bg-lazyload" data-image="/img/topic/covid/bg.webp">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-9 col-lg-6">
            <h1 class="dline">企業數位轉型怎麼做？</h1>
            <p class="mb-5 h3"><span class="main-color">80%</span> 企業已投入數位化，<span class="main-color">善用完善數位工具</span>是關鍵</p>
            <p>根據調查，台灣已有 80% 的企業在數位化／數位轉型上有相關規劃。這也代表許多企業正面臨作業流程改造以及資安需求，例如：線上打卡簡化差勤作業、<a class="sub-color" href="https://www.ares.com.tw/products/e-recruiting/" rel="noopener noreferrer" target="_blank">線上招募系統</a>自動整合外部履歷、端點加解密的<a class="sub-color" href="https://hcp.ares.com.tw/products/modules/usp">電子薪資條</a>…等。</p>
            <p>積極推動數位轉型的企業，通常具有較高的獲利能力。既然數位轉型勢在必行，企業如何選擇合適的人資系統，提升工作即戰力？</p>
          </div>
        </div>
      </div>
    </section>
    <section itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <div class="container">
        <h2 class="text-center" itemprop="name">掌握四大關鍵，人資數位轉型升級</h2><hr>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div itemprop="text">
            <ul class="row justify-content-center text-center">
              <li class="col-6 col-md-3 mb-3">
                <div><img class="img-fluid" loading="lazy" width="96" height="96" src="/img/topic/covid/upgrate-1.svg" alt="*"></div>
                <h3 class="main-color mt-0 mb-1">線上遠端打卡</h3>
                <p class="text-left">員工可於上／下班線上打卡，系統每日自動比對出勤及異常通知</p>
              </li>
              <li class="col-6 col-md-3 mb-3">
                <div><img class="img-fluid" loading="lazy" width="96" height="96" src="/img/topic/covid/upgrate-2.svg" alt="*"></div>
                <h3 class="main-color mt-0 mb-1">員工與主管自助平台</h3>
                <p class="text-left">線上請假／加班申請，查詢自身人事資料。主管外出也可輕鬆簽核准假</p>
              </li>
              <li class="col-6 col-md-3 mb-3">
                <div><img class="img-fluid" loading="lazy" width="96" height="96" src="/img/topic/covid/upgrate-3.svg" alt="*"></div>
                <h3 class="main-color mt-0 mb-1">線上招募管理</h3>
                <p class="text-left">整合多種履歷來源，資料自動回傳人事系統，完整建立人才庫</p>
              </li>
              <li class="col-6 col-md-3 mb-3">
                <div><img class="img-fluid" loading="lazy" width="96" height="96" src="/img/topic/covid/upgrate-4.svg" alt="*"></div>
                <h3 class="main-color mt-0 mb-1">薪資密封袋</h3>
                <p class="text-left">支援行動裝置，快速發送大量薪資訊息，PKI 加密技術，隱密傳遞不外洩</p>
              </li>
            </ul>
            <div class="row justify-content-center">
              <div class="col-12 col-md-4 mt-3">
                <a href="https://marketing.ares.com.tw/newsletter/2022-03-hcp/hr-digital-transformation" class="btn w-100 h4">更多 HR 數位轉型技巧</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-3 mb-3">
            <div class="rounded overflow-hidden h-100 fff-bg position-relative text-center">
              <img src="/img/topic/covid/link-1.png" alt="*" class="w-100">
              <div class="p-3">
                <a class="stretched-link" href="https://marketing.ares.com.tw/newsletter/2022-12-hcp/hr-data-analysis">薪酬人員必知 →<br class="d-none d-md-inline">快速匯出龐大加班與考勤資料</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="rounded overflow-hidden h-100 fff-bg position-relative text-center">
              <img src="/img/topic/covid/link-2.png" alt="*" class="w-100">
              <div class="p-3">
                <a class="stretched-link" href="https://marketing.ares.com.tw/newsletter/2022-07-e-recruiting/hr-recruitment-solutions">招募人員必知 →<br class="d-none d-md-inline">招募完整 e 化、輕鬆建人才庫</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="rounded overflow-hidden h-100 fff-bg position-relative text-center">
              <img src="/img/topic/covid/link-3.png" alt="*" class="w-100">
              <div class="p-3">
                <a class="stretched-link" href="https://marketing.ares.com.tw/newsletter/2021-04-hcp/hr-system-personnel-information-report">集團 HR 必知 →<br class="d-none d-md-inline">迅速產出分公司人事分析報表</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bgr bg-lazyload" data-image="/img/topic/covid/triangle.png" style="background-position: 10% top;background-color:#FFEFF4">
      <div class="container mb-5 pb-5">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-5">
            <div class="h4 main-color">功學社推薦</div>
            <h2 class="mt-0">薪資計算自動化，人資結薪效率大升級</h2>
            <ul class="disc">
              <li>線上打卡資料自動拋轉</li>
              <li>提升兩岸人資結薪效率</li>
              <li>考勤異常警示通知</li>
              <li>員工/主管自助服務平台</li>
            </ul>
            <div class="row">
              <div class="col-12 col-md-6">
                <a href="https://www.ares.com.tw/events/hcp-user-story-khs" class="btn btn-orange w-100 h4 my-3 mr-3">案例文章</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/topic/covid/khs.png" srcset="/img/topic/covid/khs.png 1x, /img/topic/covid/khs_2x.png 2x" alt="功學社">
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-5">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-5">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/topic/covid/amkor.webp" alt="amkor">
          </div>
          <div class="col-12 col-md-5">
            <div class="h4 main-color">Amkor 艾克爾推薦</div>
            <h2 class="mt-0">招募數位化，一鍵完成人事資料存檔</h2>
            <ul class="disc">
              <li>履歷資料串接全球人才庫</li>
              <li>校園徵才 QR code 填寫履歷</li>
              <li>建立專屬人才資料庫，活化庫存履歷</li>
              <li>完整記錄面試歷程，精準篩選求職者</li>
            </ul>
            <div class="row">
              <div class="col-12 col-md-6">
                <a href="https://www.ares.com.tw/events/hcp-user-story-amkor-e-recruiting" class="btn btn-orange w-100 h4 my-3 mr-3">案例文章</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-5">
            <div class="h4 main-color">GE EVERGREEN 推薦</div>
            <h2 class="mt-0">Oracle 資料庫加密，員工個資不外洩</h2>
            <ul class="disc">
              <li>滿足航空製造業人事需求</li>
              <li>保障員工個資及薪資機敏資料</li>
              <li>依企業需求設定年假及遞延辦法</li>
              <li>彈性設定加班費率及認列時數規則</li>
            </ul>
            <div class="row">
              <div class="col-12 col-md-6">
                <a href="https://www.ares.com.tw/events/hcp-user-story-ge-evergreen" class="btn btn-orange w-100 h4 my-3 mr-3">案例文章</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/topic/covid/geevergreen.webp" alt="EVERGREEN">
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
    'text' => 'HR 迎戰數位轉型四大關鍵！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-03-hcp/human-resources-digital-transformation-key-point'
  )
  ,array(
    'text' => '數位轉型大調查！HR 數位轉型的三大建議',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-03-hcp/hr-digital-transformation'
  )
  ,array(
    'text' => '人資系統未更新竟潛藏資安危機？快速升級 HCP 智慧體驗',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-12-hcp/focus'
  )
  ,array(
    'text' => '新 HCP 12c 架構簡單，人資系統輕鬆升級',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-12-hcp/12c'
  )
  ,array(
    'text' => '滿足人事擴充需求 陪企業成長的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-02-hcp/product'
  )
  ,array(
    'text' => '快跟上大廠潮流！人力規劃的 9 大要素',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-07-hcp/product'
  )
  ,array(
    'text' => '淺談製造業工廠 HCP 考勤解決方案',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-04/it-2'
  )
  ,array(
    'text' => '資通 HCP：大型高科技電子企業人資解決方案',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-06/products-2'
  )
  ,array(
    'text' => '願意改變是成功的關鍵！安侯建業體驗 HCP 管理的價值',
    'url' => 'https://marketing.ares.com.tw/newsletter/2008-03/products-2'
  )
  ,array(
    'text' => '決戰企業競爭力提升關鍵：資通 HCP 人力資產規劃系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-03/product-1'
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
</body>
</html>