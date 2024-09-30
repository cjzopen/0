<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$rs=null;
$db=null;


// $page['title']='PKI憑證,電子簽章,加密安控解決方案';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='資通uPKI公鑰基礎架構安控系統具備多國專利的PKI解決方案，廣受金融、政府、軍事、醫療等高資安規格機關採用。';
$page['canonical']=HOST_LINK;
$page['hreflang']=HOST_LINK.'/en/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [{
    "@type": "Organization",
    "@id": "https://www.ares.com.tw/#organization",
    "name": "資通電腦股份有限公司",
    "url": "https://www.ares.com.tw/",
    "sameAs": ["https://www.facebook.com/AresInternational", "https://www.youtube.com/user/AresTaiwan"],
    "logo": {
      "@type": "ImageObject",
      "@id": "https://www.ares.com.tw/#logo",
      "url": "https://www.ares.com.tw/img/ares-logo-for-google.png",
      "caption": "資通電腦"
    },
    "image": {
      "@id": "https://www.ares.com.tw/#logo"
    }
  }, {
    "@type": "WebSite",
    "@id": "<?= HOST_LINK ?>/#website",
    "url": "<?= HOST_LINK ?>",
    "name": "uPKI 安控元件解決方案",
    "publisher": {
      "@id": "https://www.ares.com.tw/#organization"
    },
    "potentialAction": {
      "@type": "SearchAction",
      "target": "<?= HOST_LINK ?>/search/?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }, {
    "@type": "WebPage",
    "@id": "<?= HOST_LINK ?>/#webpage",
    "url": "<?= HOST_LINK ?>",
    "inLanguage": "zh-TW",
    "name": "<?= $page['title'] ?>",
    "isPartOf": {
      "@id": "<?= HOST_LINK ?>/#website"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "<?= HOST_LINK ?>/#primaryimage",
      "url": "<?= HOST_LINK ?>/img/hcp-logo.svg",
      "caption": "upki"
    },
    "primaryImageOfPage": {
      "@id": "h<?= HOST_LINK ?>/#primaryimage"
    },
    "description": "<?= $page['description'] ?>"
  }]
}
</script>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
?>
<!-- slider ============== -->
  <div class="swiper-container" itemscope itemtype="https://schema.org/ItemList">
    <div class="swiper-wrapper">
      <div class="swiper-slide" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="url" href="https://www.ares.com.tw/events/information-security-government-certificate" rel="noopener noreferrer" target="_blank">
          <img data-src="/img/home/banner.jpg" class="img-fluid lazyload" alt="*" width="1440" height="400">
          <noscript><img src="/img/home/banner.jpg" itemprop="contentUrl" alt="*"></noscript>
          <div class="swipter-article-wrap d-flex align-items-center justify-content-start flex-wrap">
            <div class="container text-red">
              <h2 class="swipter-article-title">榮獲工業局資安技術服務機構<br>服務能量認證</h2>
              <!-- <p class="swipter-article-content"></p> -->
            </div>
          </div>
        </a>
        <meta itemprop="position" content="1">
      </div>
      <div class="swiper-slide" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="url" href="https://marketing.ares.com.tw/newsletter/2016-12-upki/" rel="noopener noreferrer" target="_blank">
          <img data-src="/img/home/banner-2.jpg" class="img-fluid lazyload" alt="*" width="1440" height="400">
          <noscript><img src="/img/home/banner-2.jpg" itemprop="contentUrl" alt="*"></noscript>
          <div class="swipter-article-wrap d-flex align-items-center justify-content-start flex-wrap">
            <div class="container text-orange">
              <h2 class="swipter-article-title">行動大智慧 <br>uPKI 安控跨裝置新境界</h2>
              <!-- <p class="swipter-article-content"></p> -->
            </div>
          </div>
        </a>
        <meta itemprop="position" content="2">
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <main>
    <section id="benefit">
      <div class="container">
        <h1 class="text-center">uPKI 安控元件新境界</h1><hr>
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
        <div class="text-center pt-4">
          <a href="/products/" class="btn py-4 btn-dark w-50">產品介紹</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">產品類別</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card my-2 bg-red text-white border-0">
              <img width="297" height="175" loading="lazy" class="card-img-top bg-black" src="/img/home/icon-upki.png" alt="*">
              <a class="p-2 d-flex justify-content-between stretched-link" href="<?= HOST_LINK ?>/products/upki/">
                <span>安控解決方案</span>
                <strong>&gt;</strong>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card my-2 bg-red text-white border-0">
              <img width="297" height="175" loading="lazy" class="card-img-top bg-black" src="/img/home/icon-uiam.png" alt="*">
              <a class="p-2 d-flex justify-content-between stretched-link" href="<?= HOST_LINK ?>/products/cs/">
                <span>資料加密及遮罩伺服器</span>
                <strong>&gt;</strong>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card my-2 bg-red text-white border-0">
              <img width="297" height="175" loading="lazy" class="card-img-top bg-black" src="/img/home/icon-cs.png" alt="*">
              <a class="p-2 d-flex justify-content-between stretched-link" href="<?= HOST_LINK ?>/products/uiam/">
                <span>身分識別及存取管理</span>
                <strong>&gt;</strong>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card my-2 bg-red text-white border-0">
              <img width="297" height="175" loading="lazy" class="card-img-top bg-black" src="/img/home/icon-usp.png" alt="*">
              <a class="p-2 d-flex justify-content-between stretched-link" href="<?= HOST_LINK ?>/products/usp/">
                <span>薪資密封袋</span>
                <strong>&gt;</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- footer ============================================================================== -->
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/home.js" defer></script>
</body>
</html>