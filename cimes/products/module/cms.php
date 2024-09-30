<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

// $page['css']=array('/public/css/module.css');

$page['title'] = 'CMS載具管理系統';
$page['description'] = '在運用 MES 生產的過程中，載具承載著生產批至各工作站與機台中生產，而載具管理系統則對於這些載具的屬性、狀態與動作加以管理。';
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/cms.jpg';
$canonical="https://cimes.ares.com.tw/products/module/cms.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/cms.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='載具管理系統';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/cms.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">載具管理系統</span>CMS（Carrier Management System）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>在生產的過程中，載具（Carrier）承載著生產批至各工作站與機台中生產，而載具管理系統則對於這些載具的屬性、狀態與動作加以管理：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">載具屬性管理</strong>
                <p class="pl-4">載具的保養與清潔管理，載具群組、載具插槽、載具容量、載具壽命、載具使用次數與最大保養次數等屬性的控管。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">載具狀態控管</strong>
                <p class="pl-4">系統可以設定與轉換載具的狀態，如是否為可用狀態、是否為可保養狀態等。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">載具動作控管</strong>
                <p class="pl-4">包含裝載／卸載生產批、裝載／卸載子單元（Component）、載具移轉、子單元變更插槽等。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">載具查詢</strong>
                <p class="pl-4">查詢所有載具的狀態、屬性及歷史紀錄。</p>
              </li>
            </ul>
            <figure class="text-center mb-5" itemscope itemtype="http://schema.org/ImageObject">
              <img class="img-fluid" src="/public/img/products/module/MES-CMS.png" alt="載具模組：載具完整記錄最大最小批量以及載具插槽" itemprop="image">
              <figcaption itemprop="description">載具模組：載具完整記錄最大最小批量以及載具插槽</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>
