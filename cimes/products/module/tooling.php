<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['css']=array('/public/css/module.css');
$page['title'] = 'MES Tooling 零配件管理,機台管理系統';
$page['description'] = '零配件管理系統主要負責工廠中機台與零配件的管理，並建立與生產過程之間互動的關係。生產中使用的零配件、零配件庫存管理、機台保養等都是相關的項目。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/tooling.jpg';
$canonical="https://cimes.ares.com.tw/products/module/tooling.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/tooling.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='零配件管理系統';
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include('_menu.php');
?>
  <main>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="row justify-content-center align-items-center no-gutters">
              <div class="col-auto text-lg-center mb-3" id="module-icon" aria-hidden="true">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/tooling.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">零配件管理系統</span>Tooling</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>零配件管理系統主要負責工廠中所有機台與零配件的管理，並建立與生產過程之間互動的關係。因此關於生產中使用的零配件、及零配件庫存管理、機台保養等都是相關的項目。</p>
            <p>在整個機台管理的範圍中，系統規劃的目標包含了以下的項目：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">機台基本資料維護</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">WIP 模組整合</strong>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">零配件進出與庫存管理</strong>
                <p class="pl-4">生產領用、歸還管理、維護保養（廠內）、送修（廠外）管理、報廢管理、現場耗用記錄、庫存安全量不足檢查及警告等功能。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">機台監控畫面</strong>
                <p class="pl-4">依不同顏色顯示目前所有機台狀態，提供管理者不用在現場也能即時監控工廠的所有生產狀況。</p>
              </li>
            </ul>
            <figure class="text-center mb-5" itemscope itemtype="http://schema.org/ImageObject">
              <img class="img-fluid" src="/public/img/products/module/MES-Tooling.png" alt="依據產品型號及流程的不同，設定不同的配件使用" itemprop="image">
              <figcaption itemprop="description">依據產品型號及流程的不同，設定不同的配件使用</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">客戶反饋</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-7">
            <div class="row align-items-center border rounded py-3 fff-bg">
              <div class="col-12 col-md-5">
                <img class="img-fluid" loading="lazy" width="1069" height="802" src="https://www.ares.com.tw/img/events/2017/1109-1.jpg" alt="*">
              </div>
              <div class="col-12 col-md-7">
                <h3>景碩科技</h3>
                <p>透過 ciMes 可匯集產線資訊流，讓決策者可以藉由工單的投入就能推估產線出貨時間；以及透過資訊的蒐集與回饋判斷是否需增購機台，還是只需調整產品組合即可。運用資訊透明與科技化管理手法，縮短產品製作週期與簡化製程，這些智慧製造項目都是導入 ciMes 後的效益。</p>
                <div class="text-right"><a href="https://www.ares.com.tw/events/cimes-userstory-kinsus" class="btn btn-info" rel="noopener noreferrer" target="_blank">查看文章</a></div>
              </div>
            </div>
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
    'text' => '模具、治具、刀具這樣管理就對了！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-07-cimes/mold-tool-management'
  )
  ,array(
    'text' => '如何運用 MES 提升智慧機械設備稼動率？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-08-bnk/industry4'
  )
  ,array(
    'text' => 'Tooling 配件管理做的好，工業 4.0 沒煩惱',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-05-cimes/it'
  )
  ,array(
    'text' => '智慧工廠 - 整合式設備管理與智慧刀具規劃實戰篇',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-04-argoerp/industry4'
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
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>
