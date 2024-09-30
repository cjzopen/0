<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '員工主管自助系統,人事管理不受限';
$page['description'] = 'HR 人資系統 員工主管自助服務，員工可快速進行線上請假、加班申請作業，主管也能透過系統即時查看員工班別、出勤刷卡狀況與可休假時數等資料，提升團隊作業效率！';
$canonical='https://hcp.ares.com.tw/products/modules/ess-mss';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/ess-mss'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='獨立模組';
$breadcrumb_text='員工、主管自助系統';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_other.php');
?>
    <section class="bgp-r bgs-cover bg-lazyload" data-image="/img/products/modules/ess-mss/bg-1.webp" data-height="500px" data-view="993">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 pt-lg-5 mt-lg-5">
            <img class="img-fluid" loading="lazy" width="520" height="250" src="/img/products/modules/ess-mss/ess-mss-m.png" alt="人資自助系統">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="dline">員工／主管自助系統</h1>
            <p class="mb-4">員工自助服務（Employee Self Service；ESS）及主管人資桌面（Manager Self-Service；MSS），員工可透過 HR 系統查詢和自身相關資訊，如公告、薪酬、班表、內外訓課程、技能證照…等；主管也能即時查看員工班別、出勤刷卡狀況與可休假時數…等資料，省下 HR 人員代為查詢的時間，提升企業營運效能！</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bgp-l bgs-cover bg-lazyload d-flex align-items-center" data-image="/img/products/modules/ess-mss/bg-2.jpg" data-height="600px" data-view="768">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <ul class="disc">
              <li>
                <h3 class="main-color h4">ESS（員工）</h3>
                <p>明確了解自身目標與績效指標，隨手查詢薪資、排班、差勤、技能、職能、教育訓練等訊息</p>
              </li>
              <li>
                <h3 class="main-color h4">MSS（主管）</h3>
                <p>即時查看與分析員工訊息、內部招募人才庫等資訊，管理所有異常情況</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">支援手機平板，人事管理不受限</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>運用 RWD（響應式網頁設計；Responsive Web Design）技術，完全適用手機、平版介面，不在辦公室也能輕鬆處理人事作業！</p>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-12 col-md-6 order-md-2">
            <img class="img-fluid" loading="lazy" width="94" height="94" src="/img/products/modules/ess-mss/ess.svg" alt="*">
            <h3 class="main-color mt-0">員工自助服務</h3>
            <p>提供員工進行線上請假、加班申請、線上學習、績效考核…等作業，並提供公司完整訊息，例如：公告、薪酬、加班請假、年休假、班表、內外訓課程、技能證照……等資料查詢。</p>
          </div>
          <div class="col-12 col-md-6 order-md-1">
            <div class="swiper-container text-center">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="/img/products/modules/ess-mss/個人資料.png" data-fancybox><img class="img-fluid" loading="lazy" width="380" height="425" src="/img/products/modules/ess-mss/個人資料.png" alt="個人資料"></a>
                  <div class="pb-5">員工個人資料查詢、聯絡訊息、工作訊息</div>
                </div>
                <div class="swiper-slide">
                  <a href="/img/products/modules/ess-mss/出勤班表.png" data-fancybox><img class="img-fluid" loading="lazy" width="380" height="425" src="/img/products/modules/ess-mss/出勤班表.png" alt="出勤班表"></a>
                  <div class="pb-5">HR 可查詢員工出勤班表</div>
                </div>
                <div class="swiper-slide">
                  <a href="/img/products/modules/ess-mss/薪資加密.png" data-fancybox><img class="img-fluid" loading="lazy" width="425" height="425" src="/img/products/modules/ess-mss/薪資加密.png" alt="薪資加密"></a>
                  <div class="pb-5">員工透過行動載具快速查詢個人薪資、扣繳憑單、保費明細、個人獎金，傳輸過程皆加密，至手機端需輸入密碼解密觀看</div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-12 col-md-6">
            <img class="img-fluid" loading="lazy" width="94" height="94" src="/img/products/modules/ess-mss/mss.svg" alt="*">
            <h3 class="main-color mt-0">主管人資桌面</h3>
            <p>主管能隨時查看員工基本資料、班別、出勤刷卡狀況與可休假時數、薪資及歷年考核…等詳細資料，線上核准員工的請假、加班表單，還可針對員工的表現進行線上考核記錄。</p>
          </div>
          <div class="col-12 col-md-6">
            <div class="text-center"><a href="/img/products/modules/ess-mss/請假簽核.png" data-fancybox><img class="img-fluid" loading="lazy" width="425" height="425" src="/img/products/modules/ess-mss/請假簽核.png" alt="請假簽核"></a></div>
            <div>員工不需進辦公室即可完成請假表單申請，提高作業彈性，主管也可批次進行審核，快速完成簽核作業。</div>
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
    'text' => 'HCP 快速拋轉資料的秘訣：Web Service',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-04-hcp/web-service'
  )
  ,array(
    'text' => 'HR 系統變聰明了？行動版人資系統省時省力省成本',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-01-hcp/product'
  )
  ,array(
    'text' => '一例一休 HCP 排班休假，手機隨時輕鬆查',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-02-fortify/hcp'
  )
  ,array(
    'text' => 'eHR 在行動裝置上的實現',
    'url' => 'https://marketing.ares.com.tw/newsletter/2013-01/products-3'
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
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/bis.js" defer></script>
</body>
</html>