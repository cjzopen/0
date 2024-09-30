<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='安控解決方案';
// $page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');
$page['description']='協助客戶及夥伴建立可信賴的安全環境，確保資訊流通的安全性、完整性、保密性及不可否認性。';
$page['canonical']=HOST_LINK.'/products/upki/';
$page['hreflang']=HOST_LINK.'/en/products/upki/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<main>
<?php
$breadcrumb = '安控解決方案';
include_once('../_menu.php');
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/upki/upki-1.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="h2"><div class="border-bottom border-width-3 border-color-red">安控解決方案</div>Security Control Solution</h1>
          <p>ARES uPKI 考量到應用系統跨語言、跨平台的需求，提供完整的 PKI 解決方案，協助客戶及夥伴建立可信賴的安全環境，確保資訊流通的安全性、完整性、保密性及不可否認性。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>系統架構</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <img data-src="/img/products/upki/structure.png" alt="架構" class="img-fluid lazyload">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 col-md-6">
          <h2 class="border-bottom border-width-3 border-color-red">安控元件</h2>
          <p>ARES uPKI Kits 的設計能快速地與任何應用程式結合，可依據需求選擇模組功能，系統開發者不必了解 PKI，也能輕鬆、快速地導入電子認證，保障資訊流通安全。</p>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/upki/upki-2.png" alt="*" class="img-fluid lazyload">
        </div>
      </div>
      <h3 class="text-center">產品特色</h3><hr>
      <ul class="row disc h4 text-red">
        <li class="col-12 col-md-6">
          <h4>跨瀏覽器資安控管</h4>
          <p class="text-black h5 pr-5">透過 <a href="https://marketing.ares.com.tw/newsletter/2018-03-cyber-security/it#:~:text=uPKI%20%E8%AE%93%E8%B3%87%E5%AE%89%E6%8E%A7%E7%AE%A1%E5%9C%A8%E4%B8%8D%E5%90%8C%E7%80%8F%E8%A6%BD%E5%99%A8%E6%9A%A2%E8%A1%8C%E7%84%A1%E9%98%BB">Local Service 技術</a>，安控元件能在不同瀏覽器上使用，如：Chrome、Firefox、Opera 或 Edge……等，讓資安控管暢行無阻。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>快速建構 PKI 機制</h4>
          <p class="text-black h5 pr-5">簡易、彈性且完整的 API、可量身訂作、適合異質平台整合。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>符合國際標準</h4>
          <p class="text-black h5 pr-5">符合 RSA 的 PKCS 與微軟 CAPI 國際標準。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>產品多模組化</h4>
          <p class="text-black h5 pr-5">支援多憑證、多智慧卡及多作業平台。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>多樣化程式語言特性</h4>
          <p class="text-black h5 pr-5">支援 ASP、PHP、JSP、.NET、Java、VB、VC、Delphi、Lotus、PowerBuilder、CGI 等多種程式語言。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>解譯多元憑證</h4>
          <p class="text-black h5 pr-5">解譯全世界標準憑證內容如自然人憑證、政府機關憑證、公務憑證、工商憑證、財團法人憑證、軍方憑證、醫事機構人員憑證、HiTRUST、Entrust、Baltimore 及其他憑證等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>支援多作業平台</h4>
          <p class="text-black h5 pr-5">包括 Windows、Linux、Solaris、Unix、AIX 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>超快執行速度</h4>
          <p class="text-black h5 pr-5">不論是 Multi-sign、CRL 比對、加解密、解譯憑證，突破以往技術，執行速度大幅超越現有市場產品。</p>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/upki/upki-3.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="border-bottom border-width-3 border-color-red">憑證驗證服務系統</h2>
          <p>提供憑證驗證之相關功能，讓應用軟體可以快速地驗證簽章之正確性及相關作業，大幅降低系統開發成本、提升營運效能。</p>
        </div>
      </div>
      <h3 class="text-center">產品特色</h3><hr>
      <ul class="row disc h4 text-red">
        <li class="col-12 col-md-6">
          <h4>加速應用軟體及單一簽入認證系統驗章的速度</h4>
        </li>
        <li class="col-12 col-md-6">
          <h4>支援多重憑證驗證功能</h4>
          <p class="text-black h5 pr-5">如自然人憑證、政府機關憑證、公務憑證、工商憑證、財團法人憑證、軍方憑證、醫事機構人員憑證、HiTRUST、Entrust、Baltimore 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>提供方便、快速的白名單建置機制</h4>
        </li>
        <li class="col-12 col-md-6">
          <h4>自動黑名單更新功能</h4>
          <p class="text-black h5 pr-5">以 OCSP 方式或定期至各大 CA 下載更新之 CRL 黑名單。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>支援 ARES uPKI Kits 的驗證功能</h4>
          <p class="text-black h5 pr-5">ASP、PHP、JSP、.NET、Java、VB、VC、Delphi、Lotus、PowerBuilder、CGI 等語言均適用。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>支援各作業平台</h4>
          <p class="text-black h5 pr-5">如 Windows、Linux、Solaris、Unix、AIX 等。</p>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 col-md-6">
          <h2 class="border-bottom border-width-3 border-color-red">存證服務系統</h2>
          <p>將憑證驗證成功之資訊，依電子簽章之格式存證，並提供 Web 介面歷史資料查詢功能；本存證資料具有電子簽章的法律效力，應用系統可以將重要之交易留下可供稽核的歷史軌跡，做為紛爭時的佐證資料。</p>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/upki/upki-4.png" alt="*" class="img-fluid lazyload">
        </div>
      </div>
      <h3 class="text-center">產品特色</h3><hr>
      <ul class="row disc h4 text-red">
        <li class="col-12 col-md-6">
          <h4>國際格式</h4>
          <p class="text-black h5 pr-5">存證資料以國際標準 PKCS#7 格式儲存。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>快速解譯</h4>
          <p class="text-black h5 pr-5">內建獨步全球的動態 ASN.1 解碼引擎，可快速解譯各種存證資料。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>多元格式</h4>
          <p class="text-black h5 pr-5">存證資料可以各種方式呈現給使用者如 PKCS#7、XML 格式的存證資料。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>多元資料庫</h4>
          <p class="text-black h5 pr-5">存證資料可存於各資料庫如 MDB、MSSQL、ORACLE、SYBASE、MYSQL 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>多條件查詢</h4>
          <p class="text-black h5 pr-5">供系統管理者依據需查詢各欄位的存證資料。</p>
        </li>
        <li class="col-12 col-md-6">
          <h4>Log 備份還原解決方案</h4>
        </li>
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