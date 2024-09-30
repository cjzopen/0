<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/module.css','/lib/swiper3.4.1/swiper.min.css');
$page['title'] = 'ALM製造執行警示管理,安全管理系統';
$page['description'] = '不論何時何地，一旦發生影響生產的重大因素，或需提醒相關人員執行動作，MES的ALM系統可發送電子郵件或撥出語音電話，確實通知設備或IT人員，以避免生產上的危害或損失。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/alm.jpg';
$canonical="https://cimes.ares.com.tw/products/module/alm.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/alm.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='警示管理系統';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/alm.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">警示管理系統</span>ALM（Alarm Management）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>不管何時何地，一旦發生了影響生產的重大因素，如 SPC 異常，或是需要提醒相關人員執行動作，如提醒執行機台 PM 之時，ALM 系統可以提供發送電子郵件，或是撥出語音電話等功能，確實通知設備人員或 IT 人員，以避免生產上的危害或是損失。<br>警示管理系統之功能規劃如下：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">多重通知方式</strong>
                <p class="pl-4">系統支援以電子郵件、手機簡訊、語音電話等方式進行通知。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">差異通知</strong>
                <p class="pl-4">依據不同的發生事由，設定不同的警報發送方式。如 PM 提醒可以用電子郵件通知，SPC 異常則須以手機簡訊通知設備人員。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">即時傳送</strong>
                <p class="pl-4">設定「發生狀況→執行動作」，可以在需要提醒的第一時間知會。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">向上通知</strong>
                <p class="pl-4">若無法連絡到主要人員，亦可以向上傳送到管理階層，避免事端擴大。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">回覆通知</strong>
                <p class="pl-4">依據事情的嚴重性可以要求通知人員至系統中登錄回覆，以確定事情圓滿處理。</p>
              </li>
            </ul>
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-alm-1.png" alt="提供警報類別管理，依分類迅速追蹤問題">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-alm-2.png" alt="警報動作設定">
                </div>
                <div class="swiper-slide">
                  <img class="img-fluid" src="/public/img/products/module/mes-alm-3.png" alt="警報群組">
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
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="row justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '智慧工廠必備！三大設備故障預警智能化應用',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-02-bnk/intelligent-application-of-failure-warning'
  )
  ,array(
    'text' => '工廠必備！AML 警示管理成為你最智慧的保全',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-08-cimes/products'
  )
  ,array(
    'text' => '不再 7PUPU，讓 MES 終結生產異常鬼遮眼！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-08-cimes/focus'
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
