<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '跨國企業人資系統-東南亞、越南及大陸等地';
$page['description'] = 'HCP 人資系統符合台灣一例一休法規,中國大陸社會保險規範,東南亞及越南法令,稅制等。適用跨國集團中大型企業，客戶遍及台灣,中國,越南,印尼,菲律賓等地。';
$canonical=HOST_LINK.'mainland-china-hr/';
$hreflang=array(
  // array(
  //   'lang' => 'en',
  //   'url' => 'https://hcp.ares.com.tw/en/mainland-china-hr/'
  // ),
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/mainland-china-hr/'
  )
);
$page['css']=array('/css/grid.css');
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/mainland-china-hr/mainland-china-hr-banner-1440.jpg', //圖片
  '/img/mainland-china-hr/mainland-china-hr-banner-720.jpg 720w, /img/mainland-china-hr/mainland-china-hr-banner-1440.jpg 1440w, /img/mainland-china-hr/mainland-china-hr-banner-2880.jpg 2880w', //srcset
  '*', //alt
  '跨國企業 HR', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <ol class="container">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">跨國企業人資系統</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">東南亞、越南、兩岸三地跨國人事管理</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通 HCP 是一套適用於跨國集團，或擁有兩岸三地據點的中大型企業 HR 系統，使用彈性參數設定與自行定義模式，即可<a href="/products/modules/insurance">符合當地相關法律</a>（台灣一例一休法規、中國大陸各地社會保險規範、越南及泰國等東南亞國家法令、稅制等），讓系統更具備多樣化的權限控管功能。</p>
            <p>此外，更支援多國語言、多集團、多公司、多廠區、多幣別等功能，滿足企業彈性定義內部人事管理機制，提供集團統計報表管理功能，至今已累計導入超過 500 家大廠，客戶範圍遍及台灣、中國大陸、越南、印尼、菲律賓等地。</p>
          </div>
        </div>
        <ul class="row">
          <li class="col-12 col-md-4 py-3">
            <img src="/img/mainland-china-hr/product-1.jpg" alt="UI" class="img-fluid">
            <p>支援集團多公司別、多語系的登入</p>
          </li>
          <li class="col-12 col-md-4 py-3">
            <img src="/img/mainland-china-hr/product-2.jpg" alt="UI" class="img-fluid">
            <p>支援集團化組織，不同公司設定不同部門、員工、組織權限及資料權限</p>
          </li>
          <li class="col-12 col-md-4 py-3">
            <img src="/img/mainland-china-hr/product-3.jpg" alt="UI" class="img-fluid">
            <p>薪資條可針對不同薪資項進行多國語言設定，即便同一家公司，也可發出不同語言薪資條</p>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h2 class="dline">支援多語言、多集團、多廠區、多幣別<br>建立跨國企業一致的人事管理流程</h2>
            <p>在面臨企業全球化的需求下，HR 系統除了需要協助企業節省人力成本、加速作業流程之外；更重要的是，能否讓企業在擁有各地不同營運據點的情況下，還能輕鬆管理各子公司及廠區的人事資產。資通 HCP 人事系統能依據集團內不同會計科目、幣別及行事曆進行設定，不同營運單位也能設定不同的計薪、考勤、獎懲等管理機制；讓企業使用一套 HR 系統，就能建立兩岸甚至全球一致的人事管理機制，提升集團營運效率！</p>
            <a href="https://marketing.ares.com.tw/newsletter/2019-02-hcp/product" class="btn">滿足未來人事擴充性！</a>
          </div>
          <div class="col-12 col-sm-12 col-md-6 d-none d-md-block">
            <br>
            <img src="/img/mainland-china-hr/mainland-china-hr-bg-m.png" srcset="/img/mainland-china-hr/mainland-china-hr-bg-m.png 1x,/img/mainland-china-hr/mainland-china-hr-bg.png 2x" alt="多樣化支援" class="d-block m-auto img-fluid" sizes="auto">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6">
            <h2 class="dline">多樣化權限控管<br>自由定義企業 HR 管理機制</h2>
            <p>當企業規模拓展到不同國家，人事管理也會越趨複雜，此時人資系統是否能符合龐大又複雜的權限控管更為重要！資通 HCP 人資系統可透過兩個面向，精確定義企業想規範的人事權限：依不同區域、部門、職等、職級及員工類別項目進行分類，再進一步設定各角色是否能查閱企業相關敏感欄位資料；協助企業妥善保護人事資產，建立專屬人資管理機制。</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6 d-none d-md-block">
            <br>
            <img src="/img/mainland-china-hr/mainland-china-hr-bg-2-m.png" srcset="/img/mainland-china-hr/mainland-china-hr-bg-2-m.png 1x,/img/mainland-china-hr/mainland-china-hr-bg-2.png 2x" alt="HCP 人資系統能設定角色及執行功能權限" class="d-block m-auto img-fluid" sizes="auto">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h2 class="dline">符合中國大陸各地稅制與保險<br>並支援印尼、菲律賓、泰國、柬埔寨及越南等地</h2>
            <p>資通 HCP 人資系統擁有靈活的矩陣參數設定，不需透過客製，即可設定出當地法規：包含管理制度、地方法規、幣別／稅別…等等，能完全符合中國大陸各地不同的稅率與保險制度，也支援東協國家包括：印尼、菲律賓、泰國、柬埔寨及越南等。系統也能配合政府法令變更，彈性調整保費基準及費率，增加 HR 人員維運空間並降低 IT 人員的負擔。</p>
            <p>煩惱如何應對大陸個人所得稅起徵點調整嗎？<a href="https://marketing.ares.com.tw/newsletter/2018-10-hcp/product" class="btn">HCP 實作給你看！</a></p>
          </div>
          <div class="col-12 col-sm-12 col-md-6 d-none d-md-block">
            <br>
            <img data-src="/img/mainland-china-hr/mainland-china-hr-bg-3-m.png" data-srcset="/img/mainland-china-hr/mainland-china-hr-bg-3-m.png 1x,/img/mainland-china-hr/mainland-china-hr-bg-3.png 2x" alt="*" class="d-block m-auto img-fluid lazyload" sizes="auto">
          </div>
        </div>
        <ul class="grid grid-1-3 w-100 grid-gap-1">
          <li class="main-bg fff-color p-3">
            <div class="h4">社會保險法令</div>
            <div>依不同國家／工廠區域，可設定不同保險證號</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">社保資料</div>
            <div>可設定當地社保參數，並選擇不同薪資基礎、定率、定額或級距</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">大夜班津貼</div>
            <div>靈活設定倍率、金額等參數，符合越南大夜班津貼規範</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">投保機關</div>
            <div>依不同國家／工廠區域，可設定地區性投保機關</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">加班費與稅額</div>
            <div>符合越南法規，加班費的工資與繳稅倍率不同</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">離職補償金</div>
            <div>越南法令規定，員工離職時，需發放離職補償金</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">保險稅額</div>
            <div>滿足越南五險一金制度，並納入撫養人數的特殊性</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">育兒津貼</div>
            <div>依據越南法令設定每個小孩在特定年齡以下享有津貼</div>
          </li>
          <li class="main-bg fff-color p-3">
            <div class="h4">加班時數</div>
            <div>自動計算加班時數，避免實際加班時數及認定時數的問題</div>
          </li>
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
    'text' => '支援多國語言薪資條，適合具有第二類外國人工資企業的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-04-hcp/hr-system-payroll-multi-language'
  )
  ,array(
    'text' => '集團人資如何快速產出各分公司人事分析報表？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2021-04-hcp/hr-system-personnel-information-report'
  )
  ,array(
    'text' => 'HCP 支援越南人事法令，助企業輕鬆前進東協市場',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-02-hcp/focus'
  )
  ,array(
    'text' => '九大特點滿足多組織架構的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-10-hcp/focus'
  )
  ,array(
    'text' => 'e 指管控全球人資佈局',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-05/focus'
  )
  ,array(
    'text' => '淺談集團企業 HR 資訊化管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2008-06/products-3'
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
</body>
</html>