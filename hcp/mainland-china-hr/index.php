<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '跨國企業人資系統-東南亞、越南及大陸等地';
$page['description'] = 'HCP 人資系統符合越南及東南亞法令與稅制、中國大陸社會保險規範、台灣一例一休法規等。適用跨國集團中大型企業，客戶遍及台灣、中國、越南、泰國、印尼、菲律賓等地。';
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
$page['ogimg'] = 'https://hcp.ares.com.tw/img/mainland-china-hr/feature-1.png';
// $page['css']=array('/css/grid.css');
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
<style>
section a:not(.btn){
  text-decoration: underline;
}
</style>
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
        <h1 class="text-center mb-0 hr">東南亞、越南、兩岸三地跨國人事管理</h1>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通電腦 HCP 人資系統有靈活的矩陣參數設定，<span class="main-color mark" style="background-image: linear-gradient(0deg,#94E8EA 40%,transparent 41%);">不需客製僅透過設定</span>即可符合各國法規：包含管理制度、地方法規、幣別／稅別…等，並支援多國語言、多集團、多公司、多廠區等功能，提供集團統計報表管理，幫助企業迅速卡位海外市場與商機。HCP 累計導入超過 500 家大廠，客戶遍及台灣、中國大陸、越南、泰國、印尼、菲律賓等地。</p>
            <p>在全球化的需求下，企業面臨頻繁變動的越南法規、中國大陸社會保險規範及每個省份不同法令、泰國與菲律賓等東南亞國家法規與稅制、台灣一例一休制度等情況。選擇 HCP 能幫助企業因應異地法規，快速拓展事業營運版圖，提升經營績效！</p>
          </div>
        </div>
      </div>
      <div class="container">
        <h2 class="text-center mb-0 hr">HCP 跨國服務特色</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-4">
            <ul class="disc main-color">
              <li>
                <div class="h4">多語系自由切換</div>
                <p class="text-dark">支援中文、英文、越南文、泰文、印尼等多國語言。</p>
              </li>
              <li>
                <div class="h4">跨國人事權限控管</div>
                <p class="text-dark">不同區域、部門、職等、職級及員工類別進行權限設定。</p>
              </li>
              <li>
                <div class="h4">異地法規更新</div>
                <p class="text-dark">隨當地法令更新，並提供系統版本更新，無後顧之憂。</p>
              </li>
              <li class="d-md-none">
                <div class="h4">專業顧問協助導入</div>
                <p class="text-dark">由專業顧問協助釐清需求與建置，並提供該領域人事管理技巧。</p>
              </li>
              <li class="d-md-none">
                <div class="h4">國際級資安規格</div>
                <p class="text-dark">採用 Oracle 資料庫加密技術，確保企業敏感個資無外洩疑慮。</p>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-4 d-none d-md-block text-center">
            <img loading="lazy" width="270" height="270" src="/img/mainland-china-hr/feature-1.png" alt="*" class="img-fluid">
          </div>
          <div class="col-12"></div>
          <div class="col-12 col-md-4 d-none d-md-block text-center">
            <img loading="lazy" width="270" height="270" src="/img/mainland-china-hr/feature-2.png" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-4 d-none d-md-block">
            <ul class="disc main-color">
              <li>
                <div class="h4">專業顧問協助導入</div>
                <p class="text-dark">由專業顧問協助釐清需求與建置，並提供該領域人事管理技巧。</p>
              </li>
              <li>
                <div class="h4">國際級資安規格</div>
                <p class="text-dark">採用 Oracle 資料庫加密技術，確保企業敏感個資無外洩疑慮。</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0 hr">越南人事法規因應</h2>
        <div class="row mb-5">
          <div class="col-12 col-md-4 text-center mb-3">
            <img loading="lazy" width="100" height="100" src="/img/mainland-china-hr/Vietnam-1.png" alt="*">
            <div class="h4">因應高頻繁變動的越南法令<br>約台灣的 4-5 倍高</div>
          </div>
          <div class="col-12 col-md-4 text-center mb-3">
            <img loading="lazy" width="100" height="100" src="/img/mainland-china-hr/Vietnam-2.png" alt="*">
            <div class="h4">符合勞動檢查需求，<br>或是客戶與第三方加強稽核</div>
          </div>
          <div class="col-12 col-md-4 text-center mb-3">
            <img loading="lazy" width="100" height="100" src="/img/mainland-china-hr/Vietnam-3.png" alt="*">
            <div class="h4">減少人為疏失導致的<br>成本損失或受罰風險</div>
          </div>
        </div>
        <ul class="row">
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">社會保險法令</div>
              <div>依不同國家／工廠區域，可設定不同保險證號</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
               <div class="h4 main-color">社保資料</div>
               <div>可設定當地社保參數，並選擇不同薪資基礎、定率、定額或級距</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">大夜班津貼</div>
              <div>靈活設定倍率、金額等參數，滿足越南不同企業給予不同補貼倍率</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">投保機關</div>
              <div>依不同國家／工廠區域，可設定地區性投保機關</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">加班費與稅額</div>
              <div>符合越南法規，基班費的工資與繳稅倍率不同</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">離職補償金</div>
              <div>越南法令規定，員工離職時，需發放離職補償金</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">保險稅額</div>
              <div>滿足越南五險一金制度，並納入撫養人數的特殊性</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">育兒津貼</div>
              <div>依據越南法令設定每個小孩在特定年齡以下享有津貼</div>
            </div>
          </li>
          <li class="col-12 col-md-4 mb-4">
            <div class="p-3 fff-bg rounded h-100">
              <div class="h4 main-color">加班時數</div>
              <div>自動計算加班時數，避免實際加班時數及認定時數的問題</div>
            </div>
          </li>
        </ul>
        <div class="text-center p-3">
          <p class="blue-color">成功經驗：<a href="https://www.ares.com.tw/events/108" target="_blank" rel="noopener noreferrer">仁寶電腦</a>、<a href="https://www.ares.com.tw/events/165" target="_blank" rel="noopener noreferrer">正文科技</a>、<a href="https://www.ares.com.tw/events/160" target="_blank" rel="noopener noreferrer">明泰科技</a>、亞旭電腦、<a href="https://www.ares.com.tw/events/268" target="_blank" rel="noopener noreferrer">台灣表面</a>、亞源科技</p>
        </div>
        <div class="p-3 text-center">
          <a href="https://marketing.ares.com.tw/newsletter/2024-03-hcp/vietnam-hrm" class="btn" rel="noopener noreferrer" target="_blank">越南人事法規複雜嗎？HR 如何因應</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0 hr">東南亞、中國大陸人事管理</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通 HCP 人事系統能依據集團內不同會計科目、幣別及行事曆進行設定，不同營運單位也能設定不同的計薪、考勤、獎懲等管理機制；協助企業建立東南亞人事管理機制、統一管理兩岸三地人事作業，提升集團營運效率！</p>
          </div>
        </div>
        <ul class="row">
          <li class="col-12 col-md-4 py-3">
            <img loading="lazy" width="850" height="500" src="/img/mainland-china-hr/product-1.jpg" alt="UI" class="img-fluid">
            <p>支援集團多公司別、多語系的登入</p>
          </li>
          <li class="col-12 col-md-4 py-3">
            <img loading="lazy" width="850" height="500" src="/img/mainland-china-hr/product-2.jpg" alt="UI" class="img-fluid">
            <p>支援集團化組織，不同公司設定不同部門、員工、組織權限及資料權限</p>
          </li>
          <li class="col-12 col-md-4 py-3">
            <img loading="lazy" width="850" height="500" src="/img/mainland-china-hr/product-3.jpg" alt="UI" class="img-fluid">
            <p>薪資條可針對不同薪資項進行多國語言設定，即便同一家公司，也可發出不同語言薪資條</p>
          </li>
        </ul>
        <div class="row">
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 fff-bg d-flex flex-column justify-content-between">
              <div>
                <div class="text-center">
                  <img loading="lazy" width="400" height="176" src="/img/mainland-china-hr/菲律賓.png" alt="*" class="img-fluid rounded">
                </div>
                <div class="h4 text-center">菲律賓人事法規特點</div>
                <ul class="disc">
                  <li>月薪 & 雙周計薪</li>
                  <li>正常班工時界定、週期性補發扣金額</li>
                  <li>三種保險：社會保險（SSS）、健康保險（PHIC）、購屋預備金（HDMF）</li>
                </ul>
                <p class="blue-color">成功經驗：康舒科技、建準電機、楊氏集團</p>
              </div>
              <div class="text-center">
                <!-- <a href="" class="btn" rel="noopener noreferrer" target="_blank">菲律賓人事管理怎麼做？⭢</a> -->
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 fff-bg d-flex flex-column justify-content-between">
              <div>
                <div class="text-center">
                  <img loading="lazy" width="400" height="176" src="/img/mainland-china-hr/泰國.png" alt="*" class="img-fluid rounded">
                </div>
                <div class="h4 text-center">泰國人事法規特點</div>
                <ul class="disc">
                  <li>月薪 & 雙周計薪</li>
                  <li>所得稅計算：年度平均值推算法</li>
                  <li>正常班工時界定、加班計薪方式、社會保險規則、離職補償金</li>
                  <li>年假未休給薪分為日薪、月薪兩種</li>
                </ul>
                <p class="blue-color">成功經驗：群光電子、展達通訊、群光電能、泰德工業</p>
              </div>
              <div class="text-center">
                <a href="https://marketing.ares.com.tw/newsletter/2024-05-cybersecurity/hcp-thailand-hrm" class="btn" rel="noopener noreferrer" target="_blank">泰國人事管理指南</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 fff-bg d-flex flex-column justify-content-between">
              <div>
                <div class="text-center">
                  <img loading="lazy" width="400" height="176" src="/img/mainland-china-hr/中國.png" alt="*" class="img-fluid rounded">
                </div>
                <div class="h4 text-center">大陸人事法規特點</div>
                <ul class="disc">
                  <li>各地不同稅率與保險制度</li>
                  <li>五險一金制度</li>
                </ul>
                <p class="blue-color">成功經驗：<a href="https://www.ares.com.tw/events/hcp-user-story-msi" target="_blank" rel="noopener noreferrer">微星科技</a>、<a href="https://www.ares.com.tw/events/108" target="_blank" rel="noopener noreferrer">仁寶電腦</a>、勤美集團、<a href="https://www.ares.com.tw/events/268" target="_blank" rel="noopener noreferrer">台灣表面</a>、<a href="https://www.ares.com.tw/events/global-lighting-HCP" target="_blank" rel="noopener noreferrer">茂林光電</a>、<a href="https://www.ares.com.tw/events/165" target="_blank" rel="noopener noreferrer">正文科技</a>、<a href="https://www.ares.com.tw/events/67" target="_blank" rel="noopener noreferrer">京鼎精密科技</a>、<a href="https://www.ares.com.tw/events/204" target="_blank" rel="noopener noreferrer">高林</a></p>
              </div>
              <div class="text-center">
                <a href="https://marketing.ares.com.tw/newsletter/2018-10-hcp/product" class="btn" rel="noopener noreferrer" target="_blank">如何應對大陸稅務問題？</a>
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
    'text' => '【製造業東南亞佈局】人資系統如何因應越南勞動法規',
    'url' => 'https://marketing.ares.com.tw/newsletter/2024-03-hcp/vietnam-hrm'
  )
  ,array(
    'text' => '東南亞人資系統 6 大功能總整理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2024-03-hcp/the-southeast-asian-hrm'
  )
  ,array(
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
  ,array(
    'text' => '滿足人事擴充需求，陪企業成長的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-02-hcp/product'
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