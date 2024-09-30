<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '員工職能管理模組，多維度職能篩選人才';
$page['description'] = '員工職能管理模組能協助企業HR選擇合適的人才。系統包含工作說明書，清楚定義員工職責與核心職能、職務與職能的能力矩陣圖、職能字典、員工職能評鑑等功能。';
$canonical='https://hcp.ares.com.tw/products/modules/competence';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/competence'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人力發展模組';
$breadcrumb_text='員工職能管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrd.php');
?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="d-none d-md-block m-auto img-fluid" width="340" height="225" loading="lazy" src="/img/products/modules/competence/competence-bg-m.png" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="dline">員工職能管理模組</h1>
            <p>企業的「競爭優勢」關鍵在於「人力資源管理與應用」，HR 人資系統當中的員工職能管理模組，可透過員工職責與核心職能的定義；包括多維度職能、能力評鑑及分析結果，再接續進行人才教育訓練、績效考核、招募聘用與獎懲管理；使員工能力與工作內容能緊密結合公司經營理念、目標和策略，協助員工提升自我與企業核心競爭力！</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bgp-c bgs-cover bg-lazyload" data-image="/img/products/modules/competence/competence-bg-2.png" data-height="600px" data-view="768">
      <div class="container">
        <h2 class="text-center mb-0">如何運用員工職能管理模組提升企業競爭力？</h2>
        <hr>
        <div class="row">
          <div class="col-12 col-md-6">
            <h3 class="main-color">定義職能 - 工作說明書</h3>
            <p>工作說明書是人力資源管理根本，像是招募時的甄選條件、績效考核依據、薪資架構的規劃基礎、員工的教育訓練課程…等作業，皆需建構在工作說明書之上。工作說明書內容主要包含組織與工作職責、人事成本與績效、人才招募流程、教育訓練課程、晉升與考核等項目，能協助企業發展人事策略核心，統一管理員工職能。</p>
          </div>
          <div class="col-12 col-md-6">
            <a href="/img/products/modules/competence/competence.png" data-fancybox>
              <img width="589" height="496" loading="lazy" class="d-block m-auto img-fluid" src="/img/products/modules/competence/competence-m.png" alt="工作說明書涵蓋員工職能所需的能力與經驗、考核晉升等項目">
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="bgp-c bgs-cover bg-lazyload" data-image="/img/products/modules/competence/competence-bg-3.png" data-height="600px" data-view="768">
      <div class="container">
        <div class="row justify-content-md-end">
          <div class="col-12 col-lg-8">
            <h3 class="main-color">能力矩陣圖</h3>
            <p>依據不同層級職員，製作相對應的職務與職能矩陣圖，讓職員應具備的核心職能、管理職能內容一目了然。</p>
            <svg class="d-none"><symbol id="dot" viewBox="0 0 18 18"><circle cx="8" cy="8" r="4" fill="#6a74ba" fill-opacity="1.0"/></symbol></svg>
            <div class="table-responsive">
              <table class="table table-sm table-bordered fff-bg text-center" style="width:44rem">
                <thead>
                  <tr class="main-bg fff-color text-nowrap">
                    <th scope="col" class="text-center">類別</th>
                    <th scope="col" class="text-center">名稱</th>
                    <th scope="col" class="text-center">全體員工</th>
                    <th scope="col" class="text-center">基層主管</th>
                    <th scope="col" class="text-center">中階主管</th>
                    <th scope="col" class="text-center">高階主管</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row" rowspan="4">核<br>心<br>職<br>能</td>
                    <td>創新 (Innovation)</td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>追求卓越 (Challenge Excellence)</td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>建立夥伴關係 (Building Partnership)</td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>規劃與執行 (Planning and Executing)</td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td scope="row" rowspan="7">管<br>理<br>職<br>能</td>
                    <td>才能發展 (Developing Organizational Talents)</td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>建立信任 (Building Trust)</td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>授權領導 (Empowerment Leadership)</td>
                    <td></td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>多元文化 (Valuing Diversity)</td>
                    <td></td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>策略領導 (Strategic Leadership)</td>
                    <td></td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>願景領導 (Visionary Leadership)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                  <tr>
                    <td>企業洞察力 (Entrepreneurial Insight)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="main-color"><svg aria-label="yes" width="16" height="16"><use xlink:href="#dot" /></svg></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bgp-l bgs-cover bg-lazyload" data-image="/img/products/modules/competence/competence-bg-4.png" data-height="600px" data-view="768">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h3 class="main-color">職能字典</h3>
            <p>職能字典最主要的功用是將相關的職能行為指標作分類，使職能研究者可以定義各種職位的職能，所建立的職能等級皆可與員工教育訓練課程結合，有效追蹤人力訓練與管理成效。</p>
            <h3 class="main-color">員工職能評鑑</h3>
            <p>將員工在工作說明書中應有的職能等級，與實際評鑑等級進行對照。如實際的專業知識與技術未達應有等級，則代表要加強此一職能。</p>
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
    'text' => '績效考核指標重在「適」字',
    'url' => 'https://marketing.ares.com.tw/newsletter/2011-11/it'
  )
  ,array(
    'text' => '迅速提升企業績效管理效率的利器',
    'url' => 'https://marketing.ares.com.tw/newsletter/2011-11/hcp'
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