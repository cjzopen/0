<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/module.css');
$page['title'] = '物料管理系統,提升物料追溯效率與雙向追蹤';
$page['description'] = 'MES 物料管理模組是生產控管相當重要的一環，關係著整個生產順暢與否和產品成本高低等問題。能提升物料追溯效率，並實現物料雙向追蹤';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/mms.jpg';
$canonical="https://cimes.ares.com.tw/products/module/mms.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/mms.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='物料管理系統';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/mms.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">物料管理系統</span>MMS（Materials Management System）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <div class="border p-3" style="background:#FBEEE9">
              <h2>什麼是物料管理？</h2>
              <p>物料管理是生產過程中包括採購、入庫管理、庫存管理、物料使用、物料調撥、庫存盤點、物料報廢等的統一管理作業，包含協調不同供應商之間的協作，使不同物料之間符合各種需求，並提供不同廠商之間或供應商與公司各部門之間交流的平台；目的是確保物料充足、最小化庫存成本、控制物料流動率、達成生產進度目標、保證物料運輸和存放時的安全性。</p>
            </div>
            <h2>系統主要功能</h2>
            <p>「物料管理」在整個生產控管中是相當重要的一環，雖然不是主要的控管產品，但是卻關係著整個生產順暢與否和產品成本高低等問題。物料管理系統對於下列幾個主要物料控管的作業，提供完整之歷史記錄及單據列印等功能：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">物料維護</strong>
                <p class="pl-4">不同的物料可以設定不同的類別方便管理。物料具有使用期限、安全存量等系統屬性，並可依客製需求另行加註其他屬性資料。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">領料、發料、補料、退料、廢料</strong>
                <p class="pl-4">配料員針對生產線所需要的物料，依作業員不同的生產需求，向 ERP 庫房進行物料控管的作業。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">生產過站自動扣料</strong>
                <p class="pl-4">物料管理模組可與公司 ERP 之 BOM 表整合，設定生產某一產品所需耗用的原料、半成品及成品的數量，並於生產的過程當中系統自動扣料，達到系統庫存與實際物料一致性。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">結合 ERP 之庫存模組</strong>
                <p class="pl-4">生產完成後系統自動入庫，並於 ERP 庫存中建立成品或半成品資料。</p>
              </li>
            </ul>
            <div class="text-center">
              <div class="mb-4">
                <img class="img-fluid" src="/public/img/products/module/mes-mms-1.png" alt="物料查詢">
                <span>物料查詢</span>
              </div>
              <div class="mb-4">
                <img class="img-fluid" src="/public/img/products/module/mes-mms-2.png" alt="物料查詢">
                <span>物料系統資訊</span>
              </div>
              <div class="mb-4">
                <img class="img-fluid" src="/public/img/products/module/mes-mms-3.png" alt="物料查詢">
                <span>歷史記錄</span>
              </div>
            </div>
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
                <img class="img-fluid" loading="lazy" width="1000" height="750" src="https://www.ares.com.tw/img/events/2021/%E8%8F%AF%E5%9F%8E%E9%9B%BB%E6%A9%9F%E5%90%88%E5%BD%B1.jpg" alt="*">
              </div>
              <div class="col-12 col-md-7">
                <h3>華城電機</h3>
                <p>ciMes 就如同中樞神經系統的骨髓，可串接多個異質系統，整合不同系統的生產數據，成為電機廠產線運作順暢的關鍵！導入 MMS 後所有物料資訊都必須進行控管作業，提供完整記錄才能發揮功效，而這也協助我們重新理順供應商交料流程，解決過往分批交料待最後一次才進行驗收入庫的問題。</p>
                <div class="text-right"><a href="https://www.ares.com.tw/events/cimes-user-story-fortune" class="btn btn-info" rel="noopener noreferrer" target="_blank">查看文章</a></div>
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
    'text' => '善用物料管理，做好製造業庫存、品質及成本控管',
    'url' => 'https://marketing.ares.com.tw/newsletter/2011-09/mms'
  )
  ,array(
    'text' => '問題物料追溯：找 ciMes 解決就對了！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-09/product-1'
  )
  ,array(
    'text' => '看物料管理如何掌控智慧工廠生產關鍵',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-08-cimes/it'
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
