<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '人事系統推薦 -人事管理制度化,擺脫繁瑣人工作業';
$page['description'] = '人事資料管理模組，協助 HR 人員簡化繁瑣的資料登錄與大量的表單保存、計算流程，可自行設定系統欄位，輕鬆提升執行效率！';
$canonical='https://hcp.ares.com.tw/products/modules/hrm';
$page['css']=array('/css/product.css');
// $another = '<link rel="amphtml" href="https://hcp.ares.com.tw/amp/products/modules/hrm.html">';
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/hrm'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人資管理模組';
$breadcrumb_text='人事資料管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrm.php');
?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <br>
            <img class="d-none d-md-block m-auto img-fluid lazyload" data-src="/img/products/modules/hrm-bg-m.png" data-srcset="/img/products/modules/hrm-bg-m.png 1x, /img/products/modules/hrm-bg.png 2x" sizes="340px" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h1 class="dline">人事資料管理模組</h1>
            <p>人事資料管理是 HR 人員最常接觸的作業內容，包含人事組織架構管理、異動作業，以及員工核薪、獎勵、保險保額、宿舍用餐…等資料建檔維護項目。這些人事庶務工作，往往因為繁瑣的資料登錄與大量的表單保存、計算流程，導致 HR 人員在作業上容易造成疏失。透過 HRM 系統的人事資料管理模組，可協助企業將人事管理作業系統化、作業流程制度化；HCP 靈活彈性的系統欄位設定，讓 HR 不需苦苦拜託 IT 人員，就可自行設定操作介面，輕鬆提升執行效率！</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">如何運用人事資料管理模組彈性設定系統欄位？</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '企業部門建立與人事資料異動作業',
    'text' => '當企業組織架構有調整或異動時，可在 HR 人事管理系統內設定增加或減少部門層級，並完整保留新增及失效日期…等歷史紀錄，作為後續組織調整的參考依據。透過系統內建的組織圖繪製功能，就能自動產製更新版本的樹狀公司組織圖。'
  ),
  array(
    'title' => '員工基本人事資料建檔與維護',
    'text' => '人事資料管理模組可直接將應徵履歷轉入新進員工資料，節省 HR 人員逐一登打的作業時間；除了員工基本資料的建立之外，可以細緻到每一個人可以有一種工時制度，靈活的排班功能可以適應各行各業。'
  ),
  array(
    'title' => '員工核薪、升等人事資料建檔',
    'text' => '員工每月薪資、職級升等可在人事資料管理模組內建檔更新，並完整保存異動記錄；而週期性的津貼補發或扣除額，也可透過一次性設定，讓 HR 系統每月自動計算薪資。'
  ),
  array(
    'title' => '員工保險、提繳申報作業',
    'text' => '在人事資料管理模組內建立員工的保險、保額資料，並設定新進員工到職日進行保險轉入，就可完成自動加保作業，員工眷屬的加退保作業也可一併完成設定。當設定員工編號及類別為新進到職時，HR 系統會帶出月提繳工資，並可更動自繳費率。'
  )
);
foreach ($lists as $key) {
?>
          <li class="col-12 col-md-6">
            <ol class="disc">
              <li>
                <h3 class="main-color h4"><?= $key['title'] ?></h3>
                <p><?= $key['text'] ?></p>
              </li>
            </ol>
          </li>
<?php
}
?>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '不用拜託 IT，HR 快速搞定人事報表的秘訣',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-12-hcp/hr-data-analysis'
  )
  ,array(
    'text' => '九大特點 滿足多組織架構的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-10-hcp/focus'
  )
  ,array(
    'text' => '人事系統 App 也能夠擁有高效能的秘密',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-01-hcp/it'
  )
  ,array(
    'text' => 'HR 管理的利器：HCP 警示系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2009-03/products-2'
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