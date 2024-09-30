<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '薪資獎金管理系統，支援多國語言薪資條';
$page['description'] = '薪資獎金管理模組可因應各地不同稅制與跨國企業人資管理需求，支援多國語言薪資條功能，滿足聘用第二類外國人之企業所需，符合勞動部法規。';
$canonical='https://hcp.ares.com.tw/products/modules/salary';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css','/lib/swiper11/style.css');
$page['ogimg']='https://hcp.ares.com.tw/img/products/modules/salary/salary-structure.png';
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/salary'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人資管理模組';
$breadcrumb_text='薪資獎金管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrm.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">薪資獎金管理模組</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>每月的薪資計算作業常常讓 HR 忙的焦頭爛額！除了員工薪資與獎金計算外，還因為公司海內外據點不同，而產生不同稅制、薪資；需因應多幣別換算、人員留職停薪…等情況，導致計薪作業變得更加複雜。薪資獎金管理模組提供以下功能，協助 HR 人員在不同制度規則下，仍能順利完成計薪作業。</p>
            <figure class="text-center mt-3 d-none d-md-block">
              <a href="/img/products/modules/salary/salary-structure.png" data-fancybox>
                <img loading="lazy" width="1476" height="844" class="img-fluid" src="/img/products/modules/salary/salary-structure.png" alt="薪資獎金管理模組可以依照不同地區保險與稅制彈性調整">
              </a>
            </figure>
            <div class="mt-3 text-center d-md-none">
              <div class="swiper" id="structure_img">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img loading="lazy" width="630" height="784" class="img-fluid" src="/img/products/modules/salary/salary-structure1.png" alt="標準作業程序">
                  </div>
                  <div class="swiper-slide">
                    <img loading="lazy" width="630" height="784" class="img-fluid" src="/img/products/modules/salary/salary-structure2.png" alt="地方化與延伸作業程序">
                  </div>
                  <div class="swiper-slide">
                    <img loading="lazy" width="630" height="784" class="img-fluid" src="/img/products/modules/salary/salary-structure3.png" alt="內部稽核與對外作業程序">
                  </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
              <div>每天完整忠實記錄，可執行 Daily Close。迅速準確，確實提升職工滿意度。</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">人事如何運用薪資獎金管理模組讓薪資計算更具效率？</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '支援多國語言薪資條',
    'text' => '依勞動部法規，聘用第二類外國人的薪資條明細表需列印包含中文及外國員工國籍之語言。人資可透過系統<a class="blue-color" href="https://marketing.ares.com.tw/newsletter/2021-04-hcp/hr-system-payroll-multi-language">自行設定產製薪資條語言的種類</a>，以符合政府法規要求。'
  ),
  array(
    'title' => '月薪、日薪、時薪制等多種薪別發放方式',
    'text' => '除了完整忠實紀錄出勤資料，也能依據公司不同制度執行多種薪別計算方式。員工薪資可依個別需求異動及調整，並支援多組計薪週期及薪資基礎，省去 HR 人員在不同薪資週期間的換算時間。薪資異動紀錄完整保存，隨時可查薪資歷史資料。'
  ),
  array(
    'title' => '可預設及提供週期性補發（扣）款作業',
    'text' => '公司固定性的補發、補扣費用，可透過 HR 系統進行一次性設定，免除每月重複人工計算。薪資補發（扣）款項目可自行設定，並提供轉入介面，加快 HR 作業時間。另外更提供外勞薪資處理方案，透過雙帳號撥款方式，滿足企業各種薪資發放需求。'
  ),
  array(
    'title' => '各類津貼及獎金計算介面',
    'text' => '薪資獎金管理模組提供年終獎金（試算）計算、員工績效獎金，及各種福利金的統計與轉入介面。而企業內部重要的薪酬管理，HR 人員也可藉由自訂薪資級距表，設定公司的薪等級距。'
  ),
  array(
    'title' => '因應各地不同稅制、支援薪資多幣別處理',
    'text' => '企業如有跨地區與多公司的情形，可藉由 HR 系統輕鬆將各地人事薪資資料進行整合與分析統計。並彈性因應不同企業管理制度、地方法規、多套幣別，甚至組織架構的整合，達成統一控管、集團化的人事作業管理。'
  ),
  array(
    'title' => '計薪資料自動拋轉 ERP 總帳系統',
    'text' => '除了每月準確計算薪資、獎金、保險費外，還會將人事成本總帳依財務所需之傳票從 HR 系統拋轉至 ERP 系統，協助企業降低營運成本，提升管理營運效能。'
  ),
  array(
    'title' => '彈性的給付薪資銀行媒體檔轉出格式',
    'text' => '薪資獎金管理模組可針對不同銀行，設定銀行轉帳的轉出媒體檔格式。'
  ),
  array(
    'title' => '員工離職、留職停薪人事作業',
    'text' => '當員工離職時，可建立離職日期、離職原因。勞健保申報格式可使用勞健保三合一媒體申報檔，並產生退保記錄。且可依據不同情況，選擇「離職轉留停」或「留停轉離職」，透過 HR 人資系統預設表單格式，產出離職證明書。'
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
    'text' => 'HCP 電子薪資條嚴謹加密，員工薪資防護滴水不漏',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-09-gov/hcp'
  )
  ,array(
    'text' => '行動版人力資源系統，彈性方便好管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-01-hcp/focus'
  )
  ,array(
    'text' => '【出勤與計薪應用】HCP 臨時表 - 提升程式執行效率',
    'url' => 'https://marketing.ares.com.tw/newsletter/2016-11-hcp/it'
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
<script src="/lib/swiper11/script.js" defer></script>
<script>
window.addEventListener('load', (event) => {
  const swiper = new Swiper('#structure_img', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
});
</script>
</body>
</html>