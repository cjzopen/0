<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR績效管理,提供線上考核方式、記錄、分析等匯總';
$page['description'] = '員工績效管理模組能幫助人資HR自訂企業季度、半年度及年度考核管理，並使用 PMD 績效管理與發展考核模式，針對工作目標、態度行為及未來規劃自訂比例進行考核。';
$canonical='https://hcp.ares.com.tw/products/modules/performance';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/performance'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<style>
.circle{
  width:16rem;
  height:16rem;
}
.triangle{
  width: 0;
  height: 0;
  border-left: 1rem solid transparent;
  border-right: 1rem solid transparent;
  border-top: 1rem solid #6a70ba;
}
@media (min-width: 992px) {
  .triangle{
    transform-origin: center center;
    transform: rotate(-90deg);
  }
}
</style>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人力發展模組';
$breadcrumb_text='員工績效管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrd.php');
?>
    <section class="bgp-r bgp-b bgs-cover bg-lazyload" data-image="/img/products/modules/performance-bg.png">
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">員工績效管理模組</h1>
            <p>採用績效管理與發展（Performance Management Development；簡稱 PMD）考核模式，考核資料可與人事資料串接，直接將員工考核結果顯示於人事資料中，方便人事評估整年員工考績，也能針對被考核者不足處，持續透過內外訓課程深化工作職能！</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <br>
            <div class="swiper-outer">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="/img/products/modules/performance/performance-ess.png" data-fancybox="gallery">
                      <img class="img-fluid" src="/img/products/modules/performance/performance-ess.png" alt="員工績效管理模組包含員工自評、主管初評與複評、核等作業等資訊">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/img/products/modules/performance/performance-ess-2.png" data-fancybox="gallery">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/performance/performance-ess-2.png" alt="主管透過員工績效管理模組，可觀看員工考勤、考核紀錄，進行績效評估">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/img/products/modules/performance/performance-ess-3.png" data-fancybox="gallery">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/performance/performance-ess-3.png" alt="員工可針對績效考核項目輸入自評分數與說明，並上傳附件，提供主管評估">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="lap"></div>
            <p class="text-center">員工績效考核自評</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">高效率線上績效考核 取代繁瑣評核作業</h2>
        <hr>
        <div></div>
        <div class="row justify-content-center align-items-lg-center text-center fff-color">
          <div class="col-12 col-lg-3 my-3">
            <div class="circle mx-auto d-flex flex-column justify-content-center p-3 rounded-circle align-items-center" style="background-color:#4870B9">
              <h3>1.人資</h3>
              <p>設定考核項目、評分標準，系統主動發送通知員工進行考核</p>
              <img src="/img/products/modules/performance/performance-icon-1.svg" width="72" height="72" alt="*">
            </div>
          </div>
          <div class="col-12 col-lg-1">
            <div class="triangle mx-auto" aria-hidden="true"></div>
          </div>
          <div class="col-12 col-lg-3 my-3">
            <div class="circle main-bg mx-auto d-flex flex-column justify-content-center p-3 rounded-circle align-items-center">
              <h3>2.員工</h3>
              <p>收到系統通知後，透過員工自助服務完成績效考核作業</p>
              <img src="/img/products/modules/performance/performance-icon-2.svg" width="72" height="72" alt="*">
            </div>
          </div>
          <div class="col-12 col-lg-1">
            <div class="triangle mx-auto" aria-hidden="true"></div>
          </div>
          <div class="col-12 col-lg-3 my-3">
            <div class="circle mx-auto d-flex flex-column justify-content-center p-3 rounded-circle align-items-center" style="background-color:#394d96">
              <h3>3.主管</h3>
              <p>進入系統審核與填寫評分，即完成績效考核作業</p>
              <img src="/img/products/modules/performance/performance-icon-3.svg" width="72" height="72" alt="*">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">怎麼運用員工績效管理模組讓公司績效更卓越？</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '績效考核單設定流程',
    'text' => 'HR 人員於員工績效管理模組中建立各項績效評鑑總成績等第，以及每等第上限的人數或百分比。並建立各人事評估項目評分標準，當作員工績效的評估標準。'
  ),
  array(
    'title' => '依核心職能設定考核項目',
    'text' => '依核心職能建立主要評估項目，根據不同員工類別，建立不同的考核單。HR 人員也可自訂考核種類及項目：績效考核、專案考核、評等標準、核決權限。'
  ),
  array(
    'title' => '定義人事績效面談項目',
    'text' => '建立期中面談績效的面談項目，員工自我發展的評鑑項目也能進行設定。'
  ),
  array(
    'title' => '人事考核期間設定流程',
    'text' => '員工績效管理模組可依需求設定多個考核期別，並建立各期別的考核單元與各單元分數所占比率。也能自定企業季度、半年度及年度考核管理。'
  ),
  array(
    'title' => '主動發送 Email 通知',
    'text' => 'HR 人員可透過員工績效管理模組設定，主動發送 Email 通知員工進行績效考核。完成考核後為確保資料正確性，考核期間將進行關閉資料不可再更動。'
  ),
  array(
    'title' => '員工自評',
    'text' => '員工收到績效考核通知信後，可透過員工自助服務（Employee Self Service；ESS），進入 HR 系統完成考核作業。'
  ),
  array(
    'title' => '主管初評',
    'text' => '初評主管可查看待考核人員名單，並點入考核單觀看及審核。'
  ),
  array(
    'title' => '面談',
    'text' => '員工與主管面談後，進入員工人事績效管理模組的考核單中，回覆面談內容確認。'
  ),
  array(
    'title' => '主管複評',
    'text' => '複評主管進入人資系統填寫考核項目，並填寫現狀調查與發展資料。'
  ),
  array(
    'title' => '核等',
    'text' => '支援批次核定功能，主管可查看考核匯總資料，HR 系統能依照考核群組及標準匯總。'
  ),
  array(
    'title' => '考核結果',
    'text' => '考核資料可以與人事資料管理模組串接，直接將員工考核結果顯示於人事資料中。HR 人員可與被考核者針對不足處選取內外訓課程，持續深化工作職能。'
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
    'text' => '企業績效考核流於形式？組織績效才是王道！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-05-hcp/focus'
  )
  ,array(
    'text' => '績效不能只看個人，由人力資源提升到企業績效管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-05-hcp/products-4'
  )
  ,array(
    'text' => '上下串聯 BSC + KPI 讓績效考核更全面',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-05-hcp/products-2'
  )
  ,array(
    'text' => '企業管理的領航器：HCP 組織績效考核',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-05-hcp/products-1'
  )
  ,array(
    'text' => 'HR 部門核心價值體現：企業組織績效的建立與完善',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-05-hcp/products-3'
  )
  ,array(
    'text' => '迅速提升企業績效管理效率的利器',
    'url' => 'https://marketing.ares.com.tw/newsletter/2011-11/hcp'
  )
  ,array(
    'text' => '績效考核指標重在「適」字',
    'url' => 'https://marketing.ares.com.tw/newsletter/2011-11/it'
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