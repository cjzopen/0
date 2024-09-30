<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='個資法專區';
$page['css']=array('/css/accordion.css','/css/article.css');
$page['description']='包含PKI、身分識別及存取管理、加密資料伺服器、薪資加密等資安相關解決方案。';
$page['canonical']=HOST_LINK.'/pipa/';
$page['hreflang']=HOST_LINK.'/en/pipa/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/pipa/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<img class="lazyload" data-src="/img/pipa/banner-icon.svg" alt="*"> 個資法專區', //圖片上的字
  null //字的 class
);
?>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">個資法專區</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <aside class="supmenu">
      <div class="container">
        <ul class="text-center mb-0">
          <li><a href="#app">主要應用</a></li>
          <li><a href="#explain">個資法應用</a></li>
          <li><a href="#article">相關文章</a></li>
        </ul>
      </div>
    </aside>
  </header>
  <section class="bg-lazyload" data-bg="/img/pipa/pipa.jpg">
    <div class="container">
      <div class="row">
        <div class="col-6 d-none d-lg-block"></div>
        <div class="col-12 col-lg-6">
          <h1>ARES uPKI 已成功導入近百家企業 <br class="d-none d-sm-inline">整合超過 300 個應用系統</h1>
          <p>ARES uPKI 能符合各行業有關於認證、電子簽章、或加密的需求，客戶導入該產品應用於所需應用系統的上。由於 ARES uPKI 不限平台/程式語言、簡易 SOP 導入、整合性及穩定性高，故相當多客戶選擇持續深化整合，架構機關基礎資安防線，輕鬆面對個資新法！</p>
        </div>
      </div>
    </div>
  </section>
  <section id="app">
    <div class="container">
      <h2 class="text-center">主要應用</h2><hr>
      <ul class="row">
        <li class="col-12 col-md-6 col-lg-4 mb-3">
          <img class="lazyload" data-src="/img/pipa/pipa-icon-1.svg" alt="*">
          <h3 class="h4 text-red">單一簽入認證整合</h3>
          <p>單一簽入系統雖然方便，但是若資安防護不完善，只是用帳號密碼代登或使用 UID 方式，無疑替駭客或有心人士開啟一大門，故使用憑證登入單一簽入系統，兼顧了方便與安全。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-4 mb-3">
          <img class="lazyload" data-src="/img/pipa/pipa-icon-2.svg" alt="*">
          <h3 class="h4 text-red">線上簽核</h3>
          <p>整合電子表單系統、公文系統、電子病歷或申報系統，使用憑證電子簽章進行線上簽核，真正落實節能減碳，又無需擔心稽核與存證。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-4 mb-3">
          <img class="lazyload" data-src="/img/pipa/pipa-icon-3.svg" alt="*">
          <h3 class="h4 text-red">線上交易系統</h3>
          <p>企業間的交易，包括供應鏈系統、客戶關係系統、B2B 線上交易及確認，改善機關間合約、訂單、交貨、對帳流程等效率，提升競爭力。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-4 mb-3">
          <img class="lazyload" data-src="/img/pipa/pipa-icon-4.svg" alt="*">
          <h3 class="h4 text-red">資安應用</h3>
          <p>包括個資法相關建置、遠端存取、認證加強、資料儲存加密或資料交換的安全性應用。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-4 mb-3">
          <img class="lazyload" data-src="/img/pipa/pipa-icon-5.svg" alt="*">
          <h3 class="h4 text-red">架構內外部安控平台</h3>
          <p>ARES uPKI 可做為一個安控平台，統一認證及資安控管。內外部的應用系統需求，皆可統一整合至安控平台，將各系統納入標準安控下。</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="explain">
    <div class="container">
      <h2 class="text-center">個資法應用詳解</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-9">
            <div class="accordion-wrapper">
              <div class="area-accordion h4" aria-controls="panel-1-1" aria-expanded="false" id="accordion-1-1">使用者同意及蒐集</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-1" id="panel-1-1">
                <p class="mb-0 pb-3">搭配資通 uPKI 安控平台整合憑證以符合電子簽章法簽認同意書，建立契約或類似契約之關係，並使用 uPKI 的存證服務系統將符合電子簽章法的封包加以存證。<br>蒐集過程中適當導入 uPKI 的電子簽章技術確認蒐集的不可否認性。</p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-2" aria-expanded="false" id="accordion-1-2">認證與存取</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-2" id="panel-1-2">
                <p class="mb-0 pb-3">使用資通 uIAM 對企業的應用系統建立一體適用的安全認證與存取機制，使用者密碼不在網路傳輸，完全無外洩機會。<br>搭配 uIAM 設定個人與應用系統的權限，讓對的人只能看到對的資料。</p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-3" aria-expanded="false" id="accordion-1-3">資料之使用、處理、傳輸、儲存</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-3" id="panel-1-3">
                <ul class="disc">
                  <li>以 uPKI 安控平台加密元件，隔絕所有非法存取。</li>
                  <li>以 uPKI 安控平台電子簽章元件將使用者存取記錄加以簽章存證。</li>
                  <li>盤點個人資料實體流程圖，依據流程需求搭配資通資料加密及遮罩伺服器的加密技術與應用系統緊密結合，將個資加密再送至資料庫儲存。</li>
                  <li>適當使用去識別化使資料無從識別特定當事人。</li>
                  <li>透過資料加密及遮罩伺服器對檔案加密解密，建立安全的傳輸管道。</li>
                </ul>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-4" aria-expanded="false" id="accordion-1-4">存證稽核</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-4" id="panel-1-4">
                <p class="mb-0 pb-3">使用 uPKI 安控平台的存證服務系統建立具有不可否定性的 log，非一般存取紀錄，企業與政府機關的舉證能力將會是個資法免責關鍵。</p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-5" aria-expanded="false" id="accordion-1-5">善盡保管之責</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-5" id="panel-1-5">
                <p class="mb-0 pb-3">使用資料加密及遮罩伺服器與應用系統整合，於應用系統或使用者端先行加密再儲存至資料庫，確保資料不外洩，亦排除系統管理者外洩之虞。</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>應用架構</h2><hr>
      <img data-src="/img/pipa/uPKIKEY.png" alt="適法性分析" class="img-fluid lazyload">
    </div>
  </section>
  <section id="article">
    <div class="container">
      <h2 class="text-center">相關文章</h2><hr>
<?php
try {
  $db = new PDO("sqlite:/sites/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
$_html='';
$string1='資安';
$string2='個資';
$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' AND ( title LIKE '%{$string1}%' OR title LIKE '%{$string2}%' ) ORDER BY `date` DESC ")->fetchAll();
foreach ($rs as $row) {
  $row['title'] = strip_tags($row['title']);
  $row['url'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $row['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $row['lead'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  if(!empty($row['img'])){
    $row['photo'] = (substr($row['img'], 0, 4)=='http') ? $row['img'] : 'https://marketing.ares.com.tw'.$row['img'];
  }else{
    $row['photo'] = '/img/events.jpg';
  }
  $_html = $_html.'<div class="mb-4 mb-lg-0 py-3 article" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <div itemprop="item" class="row">
      <div class="col-3 px-0">
        <figure class="ratio-box"><img class="lazyload img-fluid" src="/img/events.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
        <meta itemprop="image" content="'.$row['photo'].'">
      </div>
      <div class="col-9 col-sm-8 col-lg-8 pt-2">
        <time class="text-red" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <div itemprop="name" class="title h3 text-red mt-0 mb-3"><a itemprop="url" class="stretched-link" href="'.$row['url'].'" rel="noopener noreferrer" target="_blank">'.strip_tags($row['title']).'</a></div>
        <p class="mb-0" itemprop="description">'.strip_tags($row['lead']).'</p>
      </div>
    </div>
  </div>';
}
echo $_html;
?>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/js/accordion.js" defer></script>
</body>
</html>