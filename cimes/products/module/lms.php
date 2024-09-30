<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/module.css','/lib/swiper3.4.1/swiper.min.css');
$page['title'] = 'LMS 標籤管理,客製化系統';
$page['description'] = '工廠從進貨到出貨通常採編碼管理物料及批號零件，為詳細記錄物件，可使用 MES 標籤管理系統列印客製化標籤。搭配 CodeSoft 及 BarTender 標籤軟體直接上傳標籤範本至 ciMes，不需重新建立資料，省時省工。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/lms.jpg';
$canonical="https://cimes.ares.com.tw/products/module/lms.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/lms.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='標籤管理系統';
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include('_menu.php');
?>
  <main>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="row justify-content-center align-items-center no-gutters">
              <div class="col-auto text-lg-center mb-3" id="module-icon">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/lms.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">標籤管理系統</span>LMS（Label Management System）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>進貨到出貨，工廠用自己的編碼方式管理每一個物料及批號零件，為了能詳細的記錄每一個物件，工廠可以使用標籤管理系統來列印客製化的標籤。可搭配 CodeSoft 及 BarTender 兩套專業標籤軟體使用，將標籤範本直接上傳至 ciMes，使用者不需再重新建立標籤資料，省時省工。<br>出貨標籤管理的功能規劃如下：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">欄位客製化</strong>
                <p class="pl-4">使用資料庫中的欄位資料，由使用者自行定義標籤顯示欄位。同時可以組合多個欄位作為特殊欄位。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">標籤關聯設定</strong>
                <p class="pl-4">可以依據不同的包裝方式及出貨客戶，搭配列印不同的標籤大小與設計。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">出貨追蹤</strong>
                <p class="pl-4">包裝內外箱控管，詳實記錄每一次包裝封箱中的所有批號資料，RMA 也可以確實回溯查詢。</p>
              </li>
            </ul>
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-lms-1.png" alt="欄位設定">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-lms-2.png" alt="標籤設計">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-lms-3.png" alt="欄位維護">
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
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
                <img class="img-fluid" loading="lazy" width="1000" height="751" src="https://www.ares.com.tw/img/events/2017/20171011-3.png" alt="*">
              </div>
              <div class="col-12 col-md-7">
                <h3>頻譜電子</h3>
                <p>導入 ciMes 後，原先製程執行作業時，需人工叫取的 SOP 資料，由系統自動產生取代，可降低人力成本與人為疏失風險。且 ciMes 具備彈性生產架構，組合出最符合需求與使用習慣的生產邏輯，讓我們用的放心、安心又開心。</p>
                <div class="text-right"><a href="https://www.ares.com.tw/events/cimes-userstory-ctc" class="btn btn-info" rel="noopener noreferrer" target="_blank">查看文章</a></div>
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
    'text' => '從 ciMes 的 LMS 模組來看標籤管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-10/it-1'
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
<!-- <script src="/lib/swiper3.4.1/swiper.min.js" id="swiper-js" defer></script>
<script>
  document.getElementById('swiper-js').addEventListener('load', function(){
    var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true
    });
  })
</script> -->
</body>
</html>
