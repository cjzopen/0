<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='SSO單一簽入身分識別管理系統';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='uIAM能解決SSO單一簽入面臨的資安風險，結合PKI電子簽章認證機制，提供Web based及Client-Server等跨作業平台、跨程式語言的SSO解決方案。';
$page['canonical']=HOST_LINK.'/products/uiam/';
$page['hreflang']=HOST_LINK.'/en/products/uiam/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<main>
<?php
$breadcrumb = '身分識別及存取管理系統';
include_once('../_menu.php');
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/uiam/uiam.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-7">
          <h1 class="h2"><div class="border-bottom border-width-3 border-color-red">身分識別及存取管理系統 uIAM</h1>
          <p>建立安全便利的網路環境，統一資源權限及密碼管理，整合分散的應用系統及安全認證模式， 提供完善的身分識別及存取管理系統方案 ARES uIAM（ubiquitous Identity and Access Management；身分識別與存取管理）系統。</p>
        </div>
      </div>
      <p class="mt-5">目前網路上之單一簽入 SSO（Single Sign-On），常見的重大資安問題：</p>
      <ul class="row">
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-1.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">駭客經由網路取得使用者密碼</span>
          </div>
        </li>
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-2.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">單一簽入 SSO 系統被入侵，竊取所有帳號密碼</span>
          </div>
        </li>
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-3.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">任一應用系統被入侵後，整體資安瓦解</span>
          </div>
        </li>
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-4.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">資料庫被駭客入侵，取得所有帳號密碼</span>
          </div>
        </li>
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-5.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">駭客、管理者或離職員工可取得不當之權限及資訊</span>
          </div>
        </li>
        <li class="col-12 col-sm-6 col-md-4 my-3">
          <div class="border border-color-red d-flex w-100 h-100 p-3 align-items-center">
            <img data-src="/img/products/uiam/sso-6.svg" alt="*" width="50" height="50" class="lazyload flex-shrink-0">
            <span class="pl-3">僅適用 Web 環境，且無法跨網域及作業系統</span>
          </div>
        </li>
      </ul>
      <p>ARES uIAM System 解決了傳統單一簽入所面臨的網路資安風險問題，更可結合 uPKI 電子簽章認證機制， 提供 Web based 及 client / server 等跨作業平台、跨程式語言之單一簽入完美解決方案。</p>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>架構</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <p>「傳統單一簽入」與「ARES uIAM System」的差異</p>
          <img data-src="/img/products/uiam/structure.png" alt="架構" class="img-fluid lazyload">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">特色</h2><hr>
      <div class="row">
        <div class="col-12 col-md-6 mb-3 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/uiam/feature-1.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6 mb-3">
          <h3 class="h4 text-red">嚴謹的電子認證機制</h3>
          <ul class="disc text-red">
            <li class="pr-5"><span class="text-black">網路上只傳遞帳號、不傳密碼，確保機密不被攔截</span></li>
            <li class="pr-5"><span class="text-black">不代送任何帳號及密碼至其他系統</span></li>
            <li class="pr-5"><span class="text-black">系統間不共享帳號資訊</span></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <h3 class="h4 text-red">高安全等級系統的認證</h3>
          <ul class="disc text-red">
            <li class="pr-5"><span class="text-black">所有系統均有相同的高安全等級</span></li>
            <li class="pr-5"><span class="text-black">個別獨立的認證與授權機制，確保各系統的機密性</span></li>
            <li class="pr-5"><span class="text-black">訊息均加密且含時戳等訊息，防止重送攻擊</span></li>
            <li class="pr-5"><span class="text-black">雙向認證</span></li>
            <li class="pr-5"><span class="text-black">支援委任與分層認證，加快認證速度</span></li>
            <li class="pr-5"><span class="text-black">支援多層次架構，使用者、Web Server， DB Server 可分處於不同的機器</span></li>
            <li class="pr-5"><span class="text-black">符合美國國防部 TCSEC（Orange Book）定義的 C2-level 資安規定</span></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 mb-3 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/uiam/feature-2.png" alt="*" class="img-fluid lazyload">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>適用範圍</h2><hr>
      <ul class="row justify-content-center">
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/uiam/icon-1.png" alt="*" class="img-fluid lazyload">
          <p>各種作業平台：Windows、Linux、Solaris、Unix、AIX 等。</p>
        </li>
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/uiam/icon-2.png" alt="*" class="img-fluid lazyload">
          <p>各種應用程式開發語言，如：ASP、PHP、JSP、.NET、Java、VB、VC、Delphi、Lotus、PowerBuilder、CGI 等。</p>
        </li>
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/uiam/icon-3.png" alt="*" class="img-fluid lazyload">
          <p>Web based 或 Client Server 架構之應用系統，確保機構之安全認證能有完整之一致性，而不致於有資安上之漏洞。</p>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">與其它 SSO 比較</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <table class="table table-bordered text-white">
            <thead>
              <tr>
                <th class="border-color-white bg-black"></th>
                <th class="border-color-white bg-red">ARES uIAM</th>
                <th class="border-color-white bg-gray text-black">其他單一簽入系統</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="border-color-white bg-black">是否將帳號及密碼上傳以驗證使用者，讓駭客或系統管理者有機可乘？</th>
                <td class="border-color-white bg-red">否，只傳帳號不傳密碼</td>
                <td class="border-color-white bg-gray text-black">大多將帳號及密碼上傳至伺服器驗證</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">單一簽入之系統管理者是否保有使用者之所有密碼？</th>
                <td class="border-color-white bg-red">否，本系統完全無法取得使用者密碼</td>
                <td class="border-color-white bg-gray text-black">保有使用帳號及密碼之資料</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">是否代送帳號密碼、透過存取資料庫交換資料或使用 UID 進行單一簽入？</th>
                <td class="border-color-white bg-red">否，完全不使用此類高資安風險之作法</td>
                <td class="border-color-white bg-gray text-black">大多採用此類貪圖方便，但相當危險的作法</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">登入後，可否轉換成高權限者來使用系統？</th>
                <td class="border-color-white bg-red">否，使用者個別獨立，沒有任何機會</td>
                <td class="border-color-white bg-gray text-black">是，有機會轉換為高權限使用者</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">單一系統被駭客入侵，是否影響到所有系統的安全？</th>
                <td class="border-color-white bg-red">否，所有系統個別獨立認證，不受影響</td>
                <td class="border-color-white bg-gray text-black">是，將影嚮到其他之系統，門戶大開</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">是否支援各種開發語言？</th>
                <td class="border-color-white bg-red">提供 ASP、PHP、JSP、.NET、Java、VB、VC、Delphi、Lotus、PowerBuilder、CGI 之 API</td>
                <td class="border-color-white bg-gray text-black">受限於開發語言　</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">是否支援跨 Domain、跨作業平台認證？</th>
                <td class="border-color-white bg-red">是，不受限於 Domain 或作業系統，可同時適用 Windows、Linux、Solaris、Unix、AIX 等作業平台上之各種程式開發語言</td>
                <td class="border-color-white bg-gray text-black">受限於 Domain、作業平台</td>
              </tr>
              <tr>
                <th class="border-color-white bg-black">是否支援 Web based 及 Client / Server 架構系統？</th>
                <td class="border-color-white bg-red">完全支援</td>
                <td class="border-color-white bg-gray text-black">Client / Server 無法整合或使用高資安風險方式達成</td>
              </tr>
            </tbody>
          </table>
        </div>
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