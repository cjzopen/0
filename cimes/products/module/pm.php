<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['css']=array('/public/css/module.css');
$page['title'] = 'PM 機台預修,零件保養系統';
$page['description'] = '機台設備既然是工廠中最重要的生產器具，相對地保養也是重要的課題。而機台與零配件的保養必須搭配機台設定、型態、群組等資料都必須從 MES 系統中得到。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/pm.jpg';
$canonical="https://cimes.ares.com.tw/products/module/pm.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/pm.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='機台預修保養';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/pm.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">機台預修保養</span>PM（Preventive Maintenance）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>機台設備既然是工廠中最重要的生產器具，相對地保養也是重要的課題。機台與零配件的保養必須搭配機台設定、型態、群組等資料，而這些基本資料都必須從 ciMes 系統中得到。<br>機台預修保養之功能規劃如下：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">保養週期設定</strong>
                <p class="pl-4">保養單元以機台、機台型態或群組來設定，並選擇保養週期為日、周、月、季、年。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">保養自動提示</strong>
                <p class="pl-4">設定保養單元的時候，必須建立保養自動提示時間，當系統檢查到預定保養時間快到之時，會自動寄出 Email 通知相關維護人員。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">配件、工具整合</strong>
                <p class="pl-4">機台與配件有密不可分的關係，同樣地貴重的配件也必須要保養，因此必須整合配件的保養如同機台保養。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">保養歷史紀錄及查詢</strong>
              </li>
            </ul>
            <figure class="text-center mb-5" itemscope itemtype="http://schema.org/ImageObject">
              <img class="img-fluid" src="/public/img/products/module/MES-PM.png" alt="查詢未來保養計畫，並提供匯出功能" itemprop="image">
              <figcaption itemprop="description">查詢未來保養計畫，並提供匯出功能</figcaption>
            </figure>
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
    'text' => '如何做好機台管理、提昇生產設備稼動？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2015-05-industry4.0/product-1'
  )
  ,array(
    'text' => '如何用 MES 建構可視化智慧工廠',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-07-cimes/virtual-factory-modeling-mes'
  )
  ,array(
    'text' => '工廠自動化系列五：自動化導入後的機台維持與保養',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-07-cimes/mes-factory-automation-5'
  )
  ,array(
    'text' => '智慧工廠必備！三大設備故障預警智能化應用',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-02-bnk/intelligent-application-of-failure-warning'
  )
  ,array(
    'text' => '如何運用 MES 提升智慧機械設備稼動率？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-08-bnk/industry4'
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
