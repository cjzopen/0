<?php
$url = 'https://hcp.ares.com.tw/products/modules/ess-mss';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);
exit();



require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HCP人資系統加行動APP讓人事管理更即時';
$page['description'] = '員工可透過行動裝置請假、加班等申請，人資可隨時查閱班表安排及員工出勤時間，主管也能批次行動簽核，打造企業行動化人事管理服務。';
$canonical='https://hcp.ares.com.tw/products/modules/ehr-mobile';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/ehr-mobile'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='獨立模組';
$breadcrumb_text='人資行動 App';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_other.php');
?>
    <section class=" bgp-l bgp-b bgs-auto bgr bg-lazyload" data-image="/img/products/modules/ehr-mobile/ehr-mobile-bg.png" data-height="500px" data-view="768">
      <div class="container">
        <div class="row">
          <!-- <div class="col-12 col-sm-12 col-md-6 d-none d-md-block"><img src="/img/products/modules/ehr-mobile/ehr-mobile-bg.png" alt class="img-fluid"></div> -->
          <div class="col-12 col-sm-12 col-md-6 d-none d-md-block"></div>
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">人資行動 App（eHR Mobile）</h1>
            <p>人資行動 App 主要結合 ESS／MSS（員工／主管自助服務）功能，主管或員工能透過行動裝置進行請假、加班申請，人資可隨時查閱班表安排及員工出勤時間，主管利用批次功能進行行動簽核。eHR Mobile 完全適用手機、平版介面，網頁運用 RWD（響應式網頁設計；Responsive Web Design），可自動因應不同大小的螢幕視窗並呈現最佳解析度，提供使用者良好視覺體驗！</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">HCP + 行動 App 加速企業日常人事管理作業</h2>
        <hr>
        <div class="row">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">個人訊息</h3>
                  <p>提供員工個人資料查詢及聯絡訊息、工作訊息等資訊，工作訊息中包含部門、職務、年資及職等相關訊息；不僅方便員工安排工作及假日時間，也能協助主管隨時掌握人力狀況。HR 人員輕鬆查詢員工出勤班表時間，進而提高管理績效。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/message-2x.png" data-fancybox aria-label="個人訊息">
                      <img class="img-fluid d-block mx-auto" src="/img/products/modules/ehr-mobile/message.png" alt="員工可透過人資行動 App 查詢個人資料、聯繫資訊與工作訊息">
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/message-2-2x.png" data-fancybox aria-label="個人訊息">
                      <img class="img-fluid d-block mx-auto swiper-lazy" data-src="/img/products/modules/ehr-mobile/message-2.png" alt="行事曆可觀看工作日、休假日及排班資訊，並查詢出缺勤紀錄與剩餘休假">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
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
        <div class="row flex-md-row-reverse">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">薪資</h3>
                  <p>透過行動載具即可查詢個人薪資、扣繳憑單、保費明細、個人獎金，傳輸過程皆加密，至手機端需輸入密碼解密觀看。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/salary-2x.png" data-fancybox aria-label="薪資">
                      <img class="img-fluid d-block mx-auto" src="/img/products/modules/ehr-mobile/salary.png" alt="員工可透過行動載具，依年份及月份查詢自身的薪資與勞健保資訊">
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/salary-2-2x.png" data-fancybox aria-label="薪資">
                      <img class="img-fluid d-block mx-auto swiper-lazy" data-src="/img/products/modules/ehr-mobile/salary-2.png" alt="人資行動 App 包含扣繳憑單、保費明細、個人獎金等資訊">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
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
        <div class="row">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">考勤</h3>
                  <p>員工不需進辦公室即可完成請假表單申請，更彈性便利的申請加班，加深行事曆與排班的自我管理。主管還可批次進行審核，提升整體工作效率。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/attendance-2x.png" data-fancybox aria-label="考勤">
                      <img class="img-fluid d-block mx-auto" src="/img/products/modules/ehr-mobile/attendance.png" alt="主管可在手機上批次簽核員工的加班申請單，給予核准或駁回意見">
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/ehr-mobile/attendance-2-2x.png" data-fancybox aria-label="考勤">
                      <img class="img-fluid d-block mx-auto swiper-lazy" data-src="/img/products/modules/ehr-mobile/attendance-2.png" alt="員工可直接透過手機請假與加班申請">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/bis.js" defer></script>
</body>
</html>