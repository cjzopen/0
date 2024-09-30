<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='什麼是PKI憑證驗證？它能為企業帶來什麼好處';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='PKI 是公開金鑰基礎建設，以確保訊息的身分確認性、資料完整性、不可否認性、私密性，達資訊安全目的。';
$page['canonical']=HOST_LINK.'/know-pki/';
$page['hreflang']=HOST_LINK.'/en/know-pki/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/know-pki/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<img data-src="/img/know-pki/banner-icon.svg" alt="*" class="img-fluid lazyload"> 認識 PKI', //圖片上的字
  null //字的 class
);
?>
<script type="application/ld+json">
 {
   "@context": "https://schema.org",
   "@type": "FAQPage",
   "about":"PKI",
   "mainEntity": [{
  "@type": "Question",
  "name": "什麼是PKI公開金鑰基礎架構？",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<p>公開金鑰基礎架構（Public Key Infrastructure），它提供使用者於電子訊息交換時確保其安全性：</p><ul><li>身份確認性</li><li>資料完整性</li><li>不可否認性</li><li>私密性</li></ul><p>原則上，只要有上述其中一項資訊安全需求，即可利用 PKI 規劃企業安全機制，維護資訊安全。</p>"
  }
   }, {
  "@type": "Question",
  "name": "導入PKI的好處？",
  "acceptedAnswer": {
    "@type": "Answer",
    "text": "<ul><li>提供嚴謹的認證與授權</li><li>確保機密資料不外洩</li><li>提高行政作業流程效率</li><li>對外交易之應用</li></ul>"
  }
   }]
 }
</script>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">認識 PKI</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <nav class="supmenu">
      <ul class="text-center mb-0">
        <li><a href="#what">什麼是 PKI</a></li>
        <li><a href="#why">PKI 的好處</a></li>
      </ul>
    </nav>
  </header>
  <section id="what">
    <div class="container text-center text-center">
      <h1>什麼是 PKI</h1><hr>
      <div class="row justify-content-center">
        <p class="col-12 col-lg-6">PKI 是公開金鑰基礎架構（Public Key Infrastructure）的簡稱，它提供使用者於電子訊息交換時確保其安全性：</p>
      </div>
      <ul class="row my-5">
        <li class="col-12 col-md-6 col-lg-3 mb-3">
          <figure>
            <img data-src="/img/know-pki/whats-pki-icon-1.svg" alt="*" class="img-fluid lazyload">
          </figure>
          <div class="h3 text-red">身份確認性</div>
          <div><small>Authentication</small></div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 mb-3">
          <figure>
            <img data-src="/img/know-pki/whats-pki-icon-2.svg" alt="*" class="img-fluid lazyload">
          </figure>
          <div class="h3 text-red">資料完整性</div>
          <div><small>Integrity</small></div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 mb-3">
          <figure>
            <img data-src="/img/know-pki/whats-pki-icon-3.svg" alt="*" class="img-fluid lazyload">
          </figure>
          <div class="h3 text-red">不可否認性</div>
          <div><small>Non Repudiation</small></div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 mb-3">
          <figure>
            <img data-src="/img/know-pki/whats-pki-icon-4.svg" alt="*" class="img-fluid lazyload">
          </figure>
          <div class="h3 text-red">私密性</div>
          <div><small>Confidentiality</small></div>
        </li>
      </ul>
      <p>原則上，只要有上述其中一項資訊安全需求，即可利用 PKI 規劃企業安全機制，維護資訊安全。</p>
    </div>
  </section>
  <section id="why">
    <div class="container">
      <h2 class="text-center">導入 PKI 的好處</h2><hr>
      <ul class="row">
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex">
            <img width="100" height="100" class="flex-shrink-0 lazyload mr-3 border rounded-circle border-color-red border-width-2 d-none d-md-inline" data-src="/img/know-pki/need-pki-icon-1.svg" alt="*">
            <div>
              <h3 class="text-red">提供嚴謹的認證與授權</h3>
              <p>運用電子憑證登入，透過 PKI 認證機制來確定登入者之身份，且依照使用者權限進行分級。同時可與 IAM（Identity and Access Management）身分識別及存取管理系統整合，提供嚴謹的認證與授權機制。</p>
            </div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex">
            <img width="100" height="100" class="flex-shrink-0 lazyload mr-3 border rounded-circle border-color-red border-width-2 d-none d-md-inline" data-src="/img/know-pki/need-pki-icon-2.svg" alt="*">
            <div>
              <h3 class="text-red">確保機密資料不外洩</h3>
              <p>透過電子憑證之認證機制，確定閱讀者身份及權限，讓對的人存取對的資料。資料的傳輸或儲存皆可透過 PKI 認證，須為合規之個人或群組，才能開啟機密資料。透過與可攜式文件之整合，開啟文件需確認身份及權限，即使文件攜至企業外部也無法開啟，保護機密資料安全滴水不漏。</p>
            </div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex">
            <img width="100" height="100" class="flex-shrink-0 lazyload mr-3 border rounded-circle border-color-red border-width-2 d-none d-md-inline" data-src="/img/know-pki/need-pki-icon-3.svg" alt="*">
            <div>
              <h3 class="text-red">提高行政作業流程效率</h3>
              <p>以電子簽章取代傳統簽名或印鑑，提高行政文件的安全傳輸、或簽呈/請款單相關流程效率，而其中的所有審核流程（包括審核人員等），皆提供存證以供追蹤。</p>
            </div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex">
            <img width="100" height="100" class="flex-shrink-0 lazyload mr-3 border rounded-circle border-color-red border-width-2 d-none d-md-inline" data-src="/img/know-pki/need-pki-icon-4.svg" alt="*">
            <div>
              <h3 class="text-red">對外交易之應用</h3>
              <p>無論是與企業或消費者互動，皆可透過電子憑證可運用於交易的不可否認性、帳款資料之查詢，與供應商或客戶更緊密結合。政府與民的互動，則可透過自然人憑證、工商憑證或其他電子憑證提供各項的申辦業務，透過使用電子憑證，提升服務品質，擴大服務項目。</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="text-center p-3">
      <a href="/products/" class="btn btn-red py-4 w-50"><span>uPKI 產品介紹</span></a>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>