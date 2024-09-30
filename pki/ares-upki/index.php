<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');
redirect301(HOST_LINK.'/products/');
exit;

$page['title']='PKI公開金鑰與憑證驗證解決方案';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/css/accordion.css');
$page['description']='包含PKI、身分識別及存取管理、加密資料伺服器、薪資加密等資安相關解決方案。';
$page['canonical']=HOST_LINK.'/ares-upki/';
$page['hreflang']=HOST_LINK.'/en/ares-upki/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/ares-upki/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/ares-upki/banner-icon.svg" alt="*"> 資通 uPKI</h1>', //圖片上的字
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
          <a href="./" itemprop="item"><span itemprop="name">資通 uPKI</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <aside class="supmenu">
      <div class="container">
        <ul class="text-center mb-0">
          <li><a href="#frame">架構</a></li>
          <li><a href="#benefit">效益</a></li>
          <li><a href="#advantage">優勢</a></li>
          <li><a href="#honor">榮耀</a></li>
        </ul>
      </div>
    </aside>
  </header>
  <section id="frame">
    <div class="container text-center">
      <h2>架構</h2><hr>
      <img data-src="/img/ares-upki/frame.png" alt="架構" class="img-fluid lazyload" data-faycybox>
    </div>
  </section>
  <section id="benefit">
    <div class="container">
      <h2 class="text-center">效益</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <p>伴隨著國家大力推行自然人憑證、GCA 政府機關憑證、工商憑證等，政府機關無不積極將電子憑證導入現行的應用系統中， 最根本的除了可使用 PKI 機制中的身份認證、電子簽章、加解密之外，甚至與應用系統的完全結合，包括單一簽入系統、公文管理系統、人事差勤系統或是知識管理系統， 除了可以保障系統身份認證與授權的鑑別性之外，也真正可以透過 PKI 機制加速公文表單流程的效率，保障機密資料。</p>
          <p>有鑑於此，資通電腦以輔導無數客戶專案之經驗發展 uPKI 系列產品，協助客戶輕鬆架構 PKI 機制的環境；運用資通 uPKI 元件，不但可以協助企業對抗外部的資安侵略，亦可協助企業保障內部的資訊安全，避免企業機密資料外洩。</p>
          <p>資通 uPKI 廣為各大政府及企業單位所採用，創新研發、專業嚴謹的態度，讓您的資安應用更方便、更成功！是您邁向嚴謹資安的最佳選擇。</p>
        </div>
      </div>
      <ul class="row justify-content-center">
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">應用系統開發時程快 20 倍</header>
          <p>即使不了解 PKI 技術，也能立即上手、快速導入。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">節省 5 倍開發及維護成本</header>
          <p>面對新憑證及智慧卡時，不必每次重新改寫及測試。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">執行速度快 2~5 倍</header>
          <p>提升效能並擴大應用範圍。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">多應用平台與系統</header>
          <p>可應用在 Windows、Linux、Solaris、Unix 等作業平台及應用系統。</p>
        </li>
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">自動處理使用者名單、多重憑證及智慧卡</header>
        </li>
        <li class="col-12 col-md-6 col-lg-5">
          <header class="title h4 text-red">完整原始碼</header>
        </li>
      </ul>
    </div>
  </section>
  <section id="advantage">
    <div class="container">
      <h2 class="text-center">優勢</h2><hr>
      <div class="row">
        <div class="mb-3 col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/ares-upki/advantage-1.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="mb-3 col-12 col-md-6">
          <h3 class="text-red">同時支援多種智慧卡</h3>
          <p>使用 ARES uPKI，便能同時支援市面上各種知名的智慧卡片，程式不需要做任何的更動，包括：自然人憑證、GCA 政府機關憑證、工商憑證、Gemplus GemPKCS、Schlumberger eGate、Datakey M330、碩良 Nexsmart Windows Powered Smart Card、Gemplus/ Schlumberger 之 VOP 卡。</p>
        </div>
        <div class="mb-3 col-12 col-md-6">
          <h3 class="text-red">提供智慧卡自動修補功能</h3>
          <p>不同智慧卡提供不同屬性，加解密功能也不大相同，ARES uPKI 提供自動修補功能，彌補不同智慧卡之不足。對使用者及應用軟體來說，不論使用的是哪張智慧卡，均具一致性的功能。</p>
        </div>
        <div class="mb-3 col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/ares-upki/advantage-2.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="mb-3 col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/ares-upki/advantage-3.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="mb-3 col-12 col-md-6">
          <h3 class="text-red">適用多種憑證</h3>
          <p>提供 X.509 V3 標準憑證即時解譯程式，解譯及驗證全世界之標準憑證，如：VeriSign、Baltimore 等知名 CA 的憑證。ARES uPKI 可同時支援國外憑證（包括 Verisign, Baltimore……）及國內憑證（包括自然人憑證 MOICA、政府機關位的 GCA 憑證、工商憑證 MOEACA、銀行的 FCA 及軍方的 MCA 等），不論使用或推廣上均將更便利。</p>
        </div>
        <div class="mb-3 col-12 col-md-6">
          <h3 class="text-red">提供彈性架構及支援跨平台</h3>
          <ul class="disc">
            <li>跨架構：適用於 Client-Server 及 Web 架構。</li>
            <li>跨平台：適用於 Window98/2000/2003/XP、Linux、Solaris、Unix等作業平台。</li>
            <li>跨語言：支援 C、Power Builder、Visual Basic、Delphi、ASP、JAVA、.Net 等程式語言整合使用。</li>
          </ul>
        </div>
        <div class="mb-3 col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/ares-upki/advantage-4.png" alt="*" class="img-fluid lazyload">
        </div>
      </div>
    </div>
  </section>
  <section id="honor">
    <div class="container">
      <h2 class="text-center">榮耀</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <div class="accordion-wrapper">
              <div class="area-accordion h4" aria-controls="panel-1-1" aria-expanded="false" id="accordion-1-1">2018 獲經濟部工業局資安技術服務機構服務能量認證證書</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-1" id="panel-1-1">
                <p class="mb-0 pb-3"><a href="https://www.ares.com.tw/files/pdf/2018%E8%B3%87%E5%AE%89%E8%83%BD%E9%87%8F%E7%99%BB%E9%8C%84-%E7%94%A2%E5%93%81%E6%9C%8D%E5%8B%99%E9%A0%85%E7%9B%AE.pdf" data-fancybox>認證證書</a></p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-2" aria-expanded="false" id="accordion-1-2">2012 獲電子簽驗章專利</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-2" id="panel-1-2">
                <figure class="mb-0 pb-3"><a href="https://www.ares.com.tw/img/events/2012/20120905m.jpg" data-fancybox><img src="https://www.ares.com.tw/img/events/2012/20120905s.jpg" alt="專利" class="img-fluid"></a></figure>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-3" aria-expanded="false" id="accordion-1-3">2005 年資訊月傑出資訊應用產品獎</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-3" id="panel-1-3">
                <figure class="mb-0 pb-3"><a href="https://www.ares.com.tw/img/events/200512031m.jpg" data-fancybox><img src="https://www.ares.com.tw/img/events/200512031s.jpg" alt="傑出資訊應用產品獎" class="img-fluid"></a></figure>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-4" aria-expanded="false" id="accordion-1-4">台灣唯一通過美國 Novell Suse Linux YES 認證的資安產品</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-4" id="panel-1-4">
                <p class="mb-0 pb-3"><a href="https://www.ares.com.tw/events/17" rel="noopener noreferrer external" target="_blank">新聞稿</a></p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-5" aria-expanded="false" id="accordion-1-5">引用查表方法之 ASN.1 編碼系統</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-5" id="panel-1-5">
                <p class="mb-0 pb-3"><a href="https://www.ares.com.tw/events/6" rel="noopener noreferrer external" target="_blank">發明第 202651 號，美國發明專利第 6999010 號，日本發明專利第 3802540 號，中國發明專利第 429483 號</a></p>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-6" aria-expanded="false" id="accordion-1-6">快速有效率之一文多簽</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-6" id="panel-1-6">
                <p class="mb-0 pb-3">（發明第 I 237772 號）</p>
              </div>
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
<script src="/js/accordion.js" defer></script>
</body>
</html>