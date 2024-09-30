<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR人資系統地方保險管理,因應中國大陸,越南,印尼等地不同稅率與保險制度';
$page['description'] = '能因應全球各地不同稅率與保險制度。且支援自動加退保功能，並完整記錄投保資訊，滿足企業營運全球化需求！';
$canonical='https://hcp.ares.com.tw/products/modules/insurance';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/insurance'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人資管理模組';
$breadcrumb_text='地方保險管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrm.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">地方保險管理模組</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>許多企業在全球各地擁有子公司或營業據點，卻往往因文化或區域性的不同而造成人事管理不易，如中國大陸、越南、印尼及泰國等，亦有不同地方法規。</p>
            <p><a href="/mainland-china-hr/">一套好的 HR 系統</a>，應透過參數設定，不需透過客製，即可設定出當地法規：包含管理制度、地方法規、幣別／稅別…等等，以適應各地需求。資通電腦 HR 人資系統的地方保險管理模組擁有靈活的矩陣參數設定，能符合不同稅率與保險制度，使薪資管理作業能簡單快速又正確。</p>
          </div>
        </div>
        <figure class="text-center mt-3">
          <a href="/img/products/modules/insurance-structure.png" data-fancybox>
            <img class="img-fluid" src="/img/products/modules/insurance-structure.png" srcset="/img/products/modules/insurance-structure-m.png 1x,/img/products/modules/insurance-structure.png 2x" sizes="(min-width: 740px) 710px, 99vw" alt="地方保險管理模組讓企業快速符合不同國家地區稅率與保險制度">
          </a>
        </figure>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">輕鬆符合跨國人事管理相關需求</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '靈活參數符合各地稅率與保險制度',
    'text' => '地方保險管理模組能配合政府法令變更，調整保費基準及費率。並提供勞健保媒體比對功能，能減少 HR 人事資料處理上的誤差；也可記載特殊的投保記錄。'
  ),
  array(
    'title' => '自動加退保功能與完整投保紀錄',
    'text' => '地方保險管理模組完整保留員工及眷屬投保記錄，並提供自動加退保功能，以及年度繳費（含眷屬資料）證明單，供所得稅列舉，方便 HR 輕鬆操作。'
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
    'text' => '職災保險法上路，因應對策整理一次看',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-05-cybersecurity/labor-occupational-insurance'
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