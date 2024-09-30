<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='薪資密封袋,確保安全與隱密性';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='薪資密封袋以高資安方式傳送電子薪資條，節省人力與時間、提升薪資訊息保密性、降低人工錯誤，是安全有保障的薪資加密系統。';
$page['canonical']='https://pki.ares.com.tw/products/usp/';
$page['hreflang']=HOST_LINK.'/en/products/usp/';

// $another='<meta name="google-play-app" content="app-id=tw.com.ares.spandroid" />';
$another='<meta name="apple-itunes-app" content="app-id=1267753051" />';
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<main>
<?php
$breadcrumb = '薪資密封袋';
include_once('../_menu.php');
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/usp/usp.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="h2"><div class="border-bottom border-width-3 border-color-red">薪資密封袋</div>Sealed Paycheck</h1>
          <p>資通電腦「薪資密封袋」擁有電子薪資條解決方案，可以協助企業運用 email、網頁、app 行動化方式，提供發放員工薪資通知與明細。並結合採用與財政部網路報稅系統相同的高規格資訊安全技術，以 PKI 技術加解密，確保如電子薪資條的資料在網路上安全、隱密地傳遞，沒有外洩疑慮。不僅大幅節省財務部門的人力與時間，更提升薪資資訊保密性、降低人工錯誤，提供員工最新的即時資訊。</p>
          <p class="text-red">您可以有更好的解決方案，電子薪資條加密防護滴水不漏</p>
          <ul class="disc text-red">
            <li><span class="text-black">端點加密解密，密碼不外洩</span></li>
            <li><span class="text-black">加密運算於 RAM，不儲存於本機</span></li>
            <li><span class="text-black">傳輸過程中全程加密</span></li>
            <li><span class="text-black">資料庫儲存皆為密文</span></li>
            <li><span class="text-black">IT 人員亦看不到員工薪水</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>架構</h2><hr>
      <img data-src="/img/products/usp/structure.png" alt="架構" class="img-fluid lazyload">
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">特色</h2><hr>
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center mb-3" aria-hidden="true">
          <img data-src="/img/products/usp/feature-1.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6">
          <ul class="disc text-red">
            <li class="pr-5"><span class="text-black">節能減碳</span></li>
            <li class="pr-5"><span class="text-black">迅速傳遞大量薪資訊息</span></li>
            <li class="pr-5"><span class="text-black">降低列印成本</span></li>
            <li class="pr-5"><span class="text-black">節省人力作業</span></li>
            <li class="pr-5"><span class="text-black">減少時間成本</span></li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <ul class="disc text-red">
            <li class="pr-5"><span class="text-black">不限制 HR 產品，皆可整合發送加密薪資條</span></li>
            <li class="pr-5"><span class="text-black">於人資系統匯出薪資即加密，至員工電腦才解密，確保傳輸過程不外洩</span></li>
            <li class="pr-5"><span class="text-black">員工可設定密碼或憑證（自然人憑證、金融憑證）加密薪資</span></li>
            <li class="pr-5"><span class="text-black">同時支援 Web 及行動化介面</span></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/usp/feature-2.png" alt="*" class="img-fluid lazyload">
        </div>
      </div>
      <div class="text-center">
        <h3>薪資密封袋 APP</h3><hr>
        <figure class="d-inline-block p-4">
          <a href="https://play.google.com/store/apps/details?id=tw.com.ares.spandroid">
            <img class="img-fluid" width="150" height="150" src="/img/products/usp/upkispAndroidQRCode.png" alt="Google Play">
            <figcaption>Google Play 下載</figcaption>
          </a>
        </figure>
        <figure class="d-inline-block p-4">
          <a href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1267753051&mt=8">
            <img class="img-fluid" width="150" height="150" src="/img/products/usp/upkispIOSQRCode.png" alt="iOS">
            <figcaption>App Store 下載</figcaption>
          </a>
        </figure>
      </div>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>