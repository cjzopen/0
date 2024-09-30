<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='產品諮詢';
$page['css']=array('/css/consult.css');
$page['description']='';
$page['canonical']=HOST_LINK.'/consult/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/consult/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/consult/banner-icon.svg" alt="*"> 產品諮詢</h1>', //圖片上的字
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
          <a href="./" itemprop="item"><span itemprop="name">產品諮詢</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
    <!-- <form id="consult_form" name="consult_form" method="post" onsubmit="return formCheck()"> -->
    <form id="consult_form" name="consult_form" method="post">
      <section>
        <fieldset class="container">
          <div class="row">
            <legend class="col-12 d-block d-sm-none h4">聯絡資訊</legend>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="company">服務單位 <span class="text-red" aria-hidden="true">*</span></label>
              <input type="text" name="company" id="company" size="40" autocomplete="billing organization">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="department">部門 <span class="text-red" aria-hidden="true">*</span></label>
              <input type="text" name="department" id="department" size="40">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="name">姓名 <span class="text-red" aria-hidden="true">*</span></label>
              <input type="text" name="name" id="name" size="30" autocomplete="billing given-name">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="jobTitle">職稱 <span class="text-red" aria-hidden="true">*</span></label>
              <input type="text" name="jobTitle" id="jobTitle" size="40" autocomplete="billing organization-title">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="phone">電話 <span class="text-red" aria-hidden="true">*</span></label>
              <input type="tel" name="phone" id="phone" autocomplete="billing tel">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="mobile">手機號碼</label>
              <input type="tel" pattern="[0-9\+\-]*" name="mobile" id="mobile" autocomplete="billing mobile">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="email"> Email <span class="text-red" aria-hidden="true">*</span></label>
              <input type="text" name="email" id="email" autocomplete="billing email">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="otherRequire">需求說明 (<span id="otherRequire-length"></span>/120)</label>
              <textarea name="otherRequire" id="otherRequire" rows="6" placeholder="若需填寫此欄位，簡短敘述即可，將有專人與您聯繫"></textarea>
            </div>
          </div>
        </fieldset>
      </section>
      <section class="gray-bg">
        <div class="container">
          <div class="row">
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">您是如何得知資通產品？<span class="text-red" aria-hidden="true">*</span></legend>
              <ul id="how-area">
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how1" value="資通電子報">
                  <label for="how1">資通電子報</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how2" value="資通粉絲團">
                  <label for="how2">資通粉絲團</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how3" value="G搜">
                  <label for="how3">Google 搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfGoogle" id="kfGoogle" class="d-none">
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how4" value="Y搜">
                  <label for="how4">bing 或其它搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfYahoo" id="kfYahoo" class="d-none">
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how11" value="Gemini">
                  <label for="how11">Google AI（Gemini）</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how12" value="Copilot">
                  <label for="how12">Bing Chat（Copilot）</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how13" value="ChatGPT">
                  <label for="how13">ChatGPT</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how5" value="參加研討會">
                  <label for="how5">參加研討會</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how7" value="媒體報導">
                  <label for="how7">媒體報導</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how8" value="親友、同事介紹">
                  <label for="how8">親友、同事介紹</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how9" value="資通同仁介紹">
                  <label for="how9">資通同仁介紹</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how10" value="其他">
                  <label for="how10">其他</label>
                  <input type="text" placeholder="請說明" name="kfOther" id="kfOther" class="d-none">
                </li>
              </ul>
            </fieldset>
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">請問 貴公司預計導入費用為何？<span class="text-red" aria-hidden="true">*</span></legend>
              <!-- <ul>
                <li>
                  <label for="budget1"><input type="radio" name="budget" id="budget1" value="101 萬～300 萬"><span>101 萬～300 萬</span></label>
                </li>
                <li>
                  <label for="budget2"><input type="radio" name="budget" id="budget2" value="301 萬～500 萬"><span>301 萬～500 萬</span></label>
                </li>
                <li>
                  <label for="budget3"><input type="radio" name="budget" id="budget3" value="501 萬～1000 萬"><span>501 萬～1000 萬</span></label>
                </li>
                <li>
                  <label for="budget4"><input type="radio" name="budget" id="budget4" value="1001 萬以上"><span>1001 萬以上</span></label>
                </li>
                <li>
                  <label for="budget5"><input type="radio" name="budget" id="budget5" value="目前尚未編列預算"><span>目前尚未編列預算</span></label>
                </li>
              </ul> -->
              <input class="my-3" type="range" id="budget" name="budget" min="0" max="600" value="1">
              <div id="budget-text">尚未導入預算</div>
            </fieldset>
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6"></div>
                <fieldset class="col-12 col-sm-6 col-lg-6">
                  <legend class="mb-1 h4 mt-0">資通電子報</legend>
                  <div class="ares-checkbox">
                    <input type="checkbox" name="echeck" id="echeck" value="1">
                    <label for="echeck">訂閱 （若您勾選將會收到一封確認信）</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <fieldset class="container text-center">
          <div class="row">
            <div class="col-12">
              <span class="ares-checkbox">
                <input type="checkbox" name="agree" id="agree" checked>
                <label for="agree">我已詳閱並同意<a href="https://www.ares.com.tw/privacy/" rel="noopener noreferrer external" target="_blank" id="pop-agree" class="text-red">資通電腦隱私權聲明</a><span class="text-red" aria-hidden="true">*</span></label>
              </span>
            </div>
            <div class="col-12 mt-3">
              <!-- <div class="g-recaptcha d-inline-block" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div> -->
              <div class="cf-turnstile" data-sitekey="0x4AAAAAAANYo2zM6zXKKS_y" data-theme="light" data-action="ARES-PP"></div>
            </div>
          </div>
        </fieldset>
        <div class="container text-center btn-ctrl mt-3">
          <button type="button" class="btn btn-red mb-3 w-25" id="submit-button"><span>送 出</span></button>
        </div>
      </section>
    </form>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>
<script src="/lib/sweetalert2@8.js" defer></script>
<script src="/js/consult.js?v=1" defer></script>
</body>
</html>