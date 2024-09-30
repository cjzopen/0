<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/module.css','/lib/swiper3.4.1/swiper.min.css');
$page['title'] = 'WRP報表系統,決策管理,權限設定';
$page['description'] = 'Web Report Portal 為報表呈現介面。在MES中可彈性設定彙總生產資訊供管理者決策參考，也可設定不同部門、使用者能看到不同權限設定後的報表。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/wrp.jpg';
$canonical="https://cimes.ares.com.tw/products/module/wrp.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/wrp.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='報表系統';
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
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/wrp.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">報表系統</span>WRP（Web Report Portal）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>此模組屬於可獨立的單一模組系統，功能為單純的報表呈現介面，以連結 Portal 的方式外掛 ciMes 標準報表、客製化報表，甚至可以用網頁超連結的方式外掛其他系統的報表，並透過使用者權限設定，讓不同部門或不同權限的使用者看到不同權限設定後的報表。<br>WRP 模組提供之功能如下：</p>
            <ul class="disc d-flex flex-wrap inside">
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">Web-based Portal</strong>
                <p class="pl-4">系統運用 web 特性以 .Net 技術開發，能自行成為公司的入口網站，也能利用 Link 與客戶現有的 Portal 結合。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">批次報表列印功能</strong>
                <p class="pl-4">批次報表的廣泛定義在於經常性需求與固定格式，例如對生產工廠而言，每日晨會都需要一些生產報表，利用系統就可以在特定的時間預先產生這些報表，以提供開會所需，並降低報表主機的處理時間。</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">彈性報表查詢</strong>
                <p class="pl-4">彈性報表代表的意義是當使用者要看報表的時候，才真正的去報表主機製作報表，並可依特定條件為查詢的依據，快速找到即時需求的資訊。（資料來源需先經過整理，不屬於 WRP 範圍。）</p>
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                <strong class="main-color">權限管理</strong>
                <p class="pl-4">系統提供完整的權限管理，在系統管理員設定的權限之下，報表擁有人可以自行設定報表為分享或不分享給其他人使用。</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <h2>報表範本</h2>
            <p>目前 ciMes 系統已提供如下所列的報表範本供客戶參考：</p>
            <ul class="disc">
              <li><strong class="main-color">生產週期報表（Cycle-Time Report）</strong></li>
              <li><strong class="main-color">完工數量表（Shipping Report）</strong></li>
              <li><strong class="main-color">生產產出報表（Throughput Report）</strong></li>
              <li><strong class="main-color">良率報表（Yield Report）</strong></li>
              <li><strong class="main-color">機台稼動率報表（Equipment Utilization Report）</strong></li>
              <li><strong class="main-color">報廢報表（Scrap Report）</strong></li>
            </ul>
            <div class="swiper-container">
              <div class="swiper-wrapper text-center">
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-1.png" alt="不良品原因分析">
                  <span>不良品原因分析</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-2.png" alt="折線圖">
                  <span>折線圖</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-3.png" alt="沖壓模具">
                  <span>沖壓模具</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-4.png" alt="直條折線圖">
                  <span>直條折線圖</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-5.png" alt="柏拉圖">
                  <span>柏拉圖</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-6.png" alt="堆疊圖">
                  <span>堆疊圖</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-7.png" alt="設備稼動率">
                  <span>設備稼動率</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-8.png" alt="圓餅圖">
                  <span>圓餅圖</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-9.png" alt="機台生產日報表">
                  <span>機台生產日報表</span>
                </div>
                <div class="swiper-slide mb-4">
                  <img class="img-fluid lazyload" data-src="/public/img/products/module/wrp/mes-wrp-10.png" alt="橫條圖">
                  <span>橫條圖</span>
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
                <img class="img-fluid" loading="lazy" width="1200" height="900" src="https://www.ares.com.tw/img/events/2019/%E5%8F%B0%E7%81%A3%E7%A9%97%E9%AB%9811.jpg" alt="*">
              </div>
              <div class="col-12 col-md-7">
                <h3>台灣穗高</h3>
                <p>產銷協調管理已成為製造業轉型重要課題。單就 SFC 系統，往往無法詳實紀錄工廠生產資訊，倘若採用人工方式記錄，既耗時又容易造成人工錯誤。透過資通 ciMes 取代原有的 SFC 系統，將生產所需相關資訊記錄在 MES，精確監控並詳實記錄原物料、生產流程、產品數量、完工日期等資訊，打造一個完整的產銷鏈管理平台。</p>
                <div class="text-right"><a href="https://www.ares.com.tw/events/cimes-user-story-hodaka" class="btn btn-info" rel="noopener noreferrer" target="_blank">查看文章</a></div>
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
    'text' => 'MES 製造管理系統提供最佳 WRP 報表管理平台',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-05/mes'
  )
  ,array(
    'text' => 'ciMes WRP 報表系統讓您輕鬆掌握生產資訊',
    'url' => 'https://marketing.ares.com.tw/newsletter/2008-12/products-2'
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
      paginationClickable: true,
    });
  })
</script> -->
</body>
</html>
