<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "consult";
$page['title']='免費諮詢 | 資通電腦';
$page['description']='提供各項產品業務免費諮詢，在填寫服務表單資訊後，將有專員盡速與您聯繫提供服務。';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['css']=array('/css/consult-form.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<noscript>
<!-- <style>#consult{display:none!important;}</style> -->
</noscript>
  <figure class="slider" data-image="/img/consult/banner.png">
    <figcaption>
      <h1><img src="/img/consult/consult-icon.svg" alt="*">免費諮詢</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">免費諮詢</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="contact-area-hide">
    <form class="container" id="consult_form" method="post" name="consult_form" onsubmit="return formCheck();">
      <div id="product-select" class="border-bottom pb-3">
        <div>欲諮詢之產品<span class="text-danger">*</span></div>
        <div class="product-type-title">商業服務</div>
        <ul class="d-block m-0">
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ciMes" id="ciMes">
            <label for="ciMes">ciMes 製造執行系統</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="HCP" id="HCP">
            <label for="HCP">HCP 人資管理系統</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Agile PLM" id="PLM">
            <label for="PLM">Agile PLM</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ORACLE" id="ORACLE">
            <label for="ORACLE">Oracle</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="eGUI" id="eGUI">
            <label for="eGUI">eGUI 電子發票管理系統</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="GV" id="GV">
            <label for="GV">GV 統一發票管理系統</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="LT" id="LT">
            <label for="LT">NM／GIB／十號公報</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="GD-CRM" id="GD-CRM">
            <label for="GD-CRM">GD-CRM</label>
          </li>
        </ul>
        <div class="product-type-title">金融服務</div>
        <ul class="d-block m-0">
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="AML" id="AML">
            <label for="AML">Siron®</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="AFEIS" id="AFEIS">
            <label for="AFEIS">AFEIS</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ACPS" id="ACPS">
            <label for="ACPS">ACPS</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="eAresBank" id="eAresBank">
            <label for="eAresBank">eAresBank</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Nuntio" id="Nuntio">
            <label for="Nuntio">Nuntio</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ASCBS" id="ASCBS">
            <label for="ASCBS">ASCBS</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Treasury" id="Treasury">
            <label for="Treasury">Treasury</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Portfolio" id="Portfolio">
            <label for="Portfolio">Portfolio</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Pricing" id="Pricing">
            <label for="Pricing">Visual Pricing Tool</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ISDASIMM" id="ISDASIMM">
            <label for="ISDASIMM">ISDASIMM</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="FXNS" id="FXNS">
            <label for="FXNS">外匯議價系統</label>
          </li>
        </ul>
        <div class="product-type-title">資安服務</div>
        <ul class="d-block m-0">
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="ARES-PP" id="ARES-PP">
            <label for="ARES-PP">ARES-PP</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="Fortify" id="Fortify">
            <label for="Fortify">Fortify</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="uPKI" id="uPKI">
            <label for="uPKI">uPKI</label>
          </li>
        </ul>
        <div class="product-type-title">其它</div>
        <ul class="d-block m-0">
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="outsourcing" id="outsourcing">
            <label for="outsourcing">委外服務</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="GOV" id="GOV">
            <label for="GOV">政府專案</label>
          </li>
          <li class="d-inline-block p-1">
            <input type="checkbox" name="product[]" value="SI" id="SI">
            <label for="SI">系統整合開發</label>
          </li>
        </ul>
      </div>
      <div id="personal" class="row">
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">服務單位<span class="text-danger">*</span></div>
          <input type="text" name="company" id="company" size="40">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">連絡人姓名<span class="text-danger">*</span></div>
          <input type="text" name="name" id="name" size="30">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">部門<span class="text-danger">*</span></div>
          <input type="text" name="department" id="department" size="40">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">職稱<span class="text-danger">*</span></div>
          <input type="text" name="jobTitle" id="jobTitle" size="40">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">聯絡電話/手機<span class="text-danger">*</span></div>
          <input type="tel" pattern="[0-9\#\,\)\(\+\-\s]+" name="phone" id="phone">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">Email<span class="text-danger">*</span></div>
          <input type="text" name="email" id="email">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">如何得知資通產品？<span class="text-danger">*</span></div>
          <div class="select-wrapper">
            <select name="how" id="how">
              <option value="" disabled selected>-</option>
              <option value="Google 搜尋">Google 搜尋</option>
              <option value="親友、同事介紹">親友、同事介紹</option>
              <option value="資通電子報">資通電子報</option>
              <option value="Yahoo, Bing, 百度搜尋">Yahoo, Bing, 百度搜尋</option>
              <option value="媒體報導">媒體報導</option>
              <option value="參加研討會">參加研討會</option>
              <option value="資通粉絲團">資通粉絲團</option>
              <option value="其它">其它</option>
            </select>
          </div>
          <input type="text" name="keyword" id="keyword" placeholder="搜尋之關鍵字">
        </div>
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">預計導入的費用為何？<span class="text-danger">*</span></div>
          <div class="select-wrapper">
            <select name="budget" id="budget">
              <option value="尚未編列預算">尚未編列預算</option>
              <option value="50 萬以下">50 萬以下</option>
              <option value="51 萬 ~ 100 萬">51 萬 ~ 100 萬</option>
              <option value="101 萬 ~ 300 萬">101 萬 ~ 500 萬</option>
              <option value="501 萬 ~ 1000 萬">501 萬 ~ 1000 萬</option>
              <option value="1000 萬以上">1000 萬以上</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 my-3">
          <div class="h6 mb-0">需求備註 (<span id="otherRequire-length">0</span>/80)</div>
          <textarea class="w-100" name="otherRequire" id="otherRequire" rows="4"></textarea>
        </div>
        <div class="col-12 col-md-6 my-3">
          <label for="echeck"><input id="echeck" name="echeck" type="checkbox"> 訂閱電子報</label>
        </div>
      </div>
      <div class="text-center my-4">
        <div class="g-recaptcha d-inline-block" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div>
      </div>
      <div class="text-center">
        <button type="submit" class="w-50 color-white bg-blue p-2 border-0"><span>送出訊息</span></button>
      </div>
    </form>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
  <script src="https://www.google.com/recaptcha/api.js?zh-TW" defer></script>
  <script src="js/c.js?2019" defer></script>
</body>
</html>