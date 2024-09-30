<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/lib/swiper3.4.1/swiper.min.css');
$page['title'] = '工業生產線管理電子看板系統,視覺化與即時化管理';
$page['description'] = '工業生產管理電子看板系統取代傳統工廠產線 LED 燈號顯示器等裝置，能依需求彈性提供產線作業進度、派工、調度、機台、物料狀態、作業指導書等資訊。實現生產線視覺化與即時化管理。';
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/eks.jpg';
$canonical="https://cimes.ares.com.tw/products/module/eks.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/eks.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='電子看板系統';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/eks.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">工廠生產管理電子看板系統</span>EKS（Electronic Kanban System）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>生產線管理電子看板系統運用 web 設計顯示平台，取代了工業生產產線中傳統的 LED 燈號顯示器等裝置，完整顯示產線作業進度、調度、物料狀態、品質、設備、安全、作業指導書等生產資訊。具簡易、快速、整合的特色，透過彈性、豐富、美觀的資料呈現方式，提供工廠產線靈活運用，獲得更即時的管理資訊，實現視覺化與即時化的管理。</p>
            <figure class="text-center mb-4">
              <img class="img-fluid" src="/public/img/products/module/eks.png" alt="工廠生產管理電子看板的可視化操作介面。">
              <figcaption>電子看板採拖拉方式，可自行設計挪放基礎元件</figcaption>
            </figure>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">提供多看板、多頁面</strong>
                <p class="pl-4">支援多個看板設計存在，每個看板也可新增多個頁面，並採輪播方式播放多頁面。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">人性化直覺設計</strong>
                <p class="pl-4">包含視覺化拖拉、看板複製、看板匯出匯入、元件群組化動作、屬性化設計元件等功能。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">可進行多面向資料來源定義</strong>
                <p class="pl-4 mb-0">將資料源設定與看板設計分離，方便企業內部進行協同設計。資料源設定共分為五大類：</p>
                <ul class="pl-5 decimal mb-3">
                  <li>單一數值資料源</li>
                  <li>表格類型資料源</li>
                  <li>自定義 SQL 語句資料源</li>
                  <li>圖檔資料源</li>
                  <li>影音資料源</li>
                </ul>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">可擴充與組合元件</strong>
                <p class="pl-4">設計內容複雜時，可將基礎元件客製成複合元件再擴充至元件庫中作為使用，有效簡化看板設計力行重複工作。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">完整系統使用紀錄與查詢</strong>
                <p class="pl-4">系統將會記錄使用者在看板上新增、刪除、編輯、播放、停止播放……等動作，供管理者隨時查詢使用狀況。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">整合第三方元件</strong>
                <p class="pl-4">即將上市</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <img class="img-fluid" loading="lazy" width="" height="" src="/public/img/products/module/eks/設備稼動指標電子看板.jpg" alt="設備稼動指標電子看板">
          </div>
          <div class="col-12 col-md-6 mb-3">
            <img class="img-fluid" loading="lazy" width="" height="" src="/public/img/products/module/eks/工單進度指標電子看板.jpg" alt="工單進度指標電子看板">
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
    'text' => '什麼是看板管理系統？工廠常見的３種應用與效益',
    'url' => 'https://marketing.ares.com.tw/newsletter/2023-08-cimes/mes-eks-application'
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
<!-- <script src="/lib/swiper3.4.1/swiper.min.js" id="swiper-js" defer></script> -->
<!-- <script>
  document.getElementById('swiper-js').addEventListener('load', function(){
    var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true,
      autoplay: 8000,
      autoplayDisableOnInteraction: false
    });
  })
</script> -->
</body>
</html>
