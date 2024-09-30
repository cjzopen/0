<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "consult";
$page['title']='免費諮詢 | 資通電腦';
$page['description']='提供各項產品業務免費諮詢，在填寫服務表單資訊後，將有專員盡速與您聯繫提供服務。';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['css']=array('/css/buttons.css','/css/consult.css');
$jquery_lib='jquery-3.4.1.min.js';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<noscript>
<!-- <style>#consult{display:none!important;}</style> -->
</noscript>
  <figure class="slider">
    <img class="img-responsive lazyload" data-src="../img/consult/banner.png" alt="*">
    <figcaption class="uk-overlay-panel uk-overlay-left uk-vertical-align">
      <h1><img src="../img/consult/consult-icon.svg" alt="*">免費諮詢</h1>
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">免費諮詢</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section id="consult">
    <div class="">
      <div>
        <h2 class="text-center">請選擇諮詢產品</h2>
        <hr>
        <p class="danger er0 text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請至少選取一項產品</p>
        <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck();">
          <div class="container">
            <fieldset class="row">
              <div class="col-sm-6 col-md-4" id="business-list">
                <!-- <div class="row"> -->
                  <!-- <div class="col-sm-6"> -->
                    <h3>商業服務</h3>
                    <ul>
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ArgoERP" id="ArgoERP">
                        <label for="ArgoERP"></label>
                        <span>ArgoERP</span>
                      </li> -->
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ciMes" id="ciMes">
                        <label for="ciMes"></label>
                        <span>ciMes 製造執行系統</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="HCP" id="HCP">
                        <label for="HCP"></label>
                        <span>HCP 人力資產規劃系統</span>
                      </li>
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="Agile PLM" id="PLM">
                        <label for="PLM"></label>
                        <span>PLM 產品生命週期管理</span>
                      </li> -->
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="Analyzer" id="Analyzer">
                        <label for="Analyzer"></label>
                        <span>Analyzer</span>
                      </li> -->
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="eGUI" id="egui">
                        <label for="egui"></label>
                        <span>eGUI 電子發票管理系統</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="GV" id="gv">
                        <label for="gv"></label>
                        <span>GV 統一發票管理系統</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="LT" id="lt">
                        <label for="lt"></label>
                        <span>NM／GIB／十號公報</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ORACLE" id="ORACLE">
                        <label for="ORACLE"></label>
                        <span>Oracle 升級、維護、客製</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="EBS" id="EBS">
                        <label for="EBS"></label>
                        <span>Oracle ERP（EBS）</span>
                      </li>
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="NetSuite" id="NetSuite">
                        <label for="NetSuite"></label>
                        <span>Oracle 雲端 ERP（NetSuite）</span>
                      </li> -->
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="GD-CRM" id="GD-CRM">
                        <label for="GD-CRM"></label>
                        <span>GD-CRM 客戶關係管理系統</span>
                      </li>
                       <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="財報自編" id="financial-reporting">
                        <label for="financial-reporting"></label>
                        <span>財報自編解決方案</span>
                      </li>
                      </li>
                       <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="招募管理" id="recruiting">
                        <label for="recruiting"></label>
                        <span>招募管理系統</span>
                      </li>
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="GCRS" id="GCRS">
                        <label for="GCRS"></label>
                        <span>GCRS</span>
                      </li> -->
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="NHMS" id="NHMS">
                        <label for="NHMS"></label>
                        <span>NHMS</span>
                      </li> -->
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="PowerBudget" id="PowerBudget">
                        <label for="PowerBudget"></label>
                        <span>PowerBudget</span>
                      </li> -->
                    </ul>
                  <!-- </div> -->
                <!-- </div> -->
              </div>
              <div class="col-sm-6 col-md-4" id="financial-list">
                <h3>金融服務</h3>
                <ul>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="AFEIS" id="AFEIS">
                    <label for="AFEIS"></label>
                    <span>AFEIS 國內外匯整合系統</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Ares Cross Pricing System" id="ACPS">
                    <label for="ACPS"></label>
                    <span>ACPS 衍生性金融商品評價系統</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="eAresBank" id="eAresBank">
                    <label for="eAresBank"></label>
                    <span>eAresBank 海外分行核心系統</span>
                  </li>
                  <!-- <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="FSTP" id="FSTP">
                    <label for="FSTP"></label>
                    <span>FSTP</span>
                  </li>-->
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Nuntio" id="Nuntio">
                    <label for="Nuntio"></label>
                    <span>ARES Nuntio 法規報表申報平台</span>
                  </li>
                  <!-- <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="SWIFT" id="SWIFT">
                    <label for="SWIFT"></label>
                    <span>SWIFT</span>
                  </li> -->
                  <!-- <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Ares Smart Core Banking System" id="asc">
                    <label for="asc"></label>
                    <span>ASCBS 大陸核心系統</span>
                  </li> -->
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Treasury System" id="Treasury">
                    <label for="Treasury"></label>
                    <span>ARES Treasury System 財務交易系統</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Portfolio System" id="Portfolio">
                    <label for="Portfolio"></label>
                    <span>ARES Portfolio System 投資組合管理系統</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="AML" id="AML">
                    <label for="AML"></label>
                    <span>AML 洗錢防制解決方案</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="KYC" id="KYC">
                    <label for="KYC"></label>
                    <span>KYC 混合雲名單掃描系統</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Visual Pricing Tool" id="Pricing">
                    <label for="Pricing"></label>
                    <span>Visual Pricing Tool 視覺化圖型工具</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ISDASIMM" id="ISDASIMM">
                    <label for="ISDASIMM"></label>
                    <span>ISDA SIMM 原始保證金合規</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="FXNS" id="FXNS">
                    <label for="FXNS"></label>
                    <span>FXNS 外匯議價系統</span>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-4" id="infosec">
                <h3>資訊安全</h3>
                <ul>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="uPKI" id="uPKI">
                    <label for="uPKI"></label>
                    <span>uPKI 憑證驗證</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES-PP" id="ARES-PP">
                    <label for="ARES-PP"></label>
                    <span>ARES PP 文件加密</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Fortify" id="Fortify">
                    <label for="Fortify"></label>
                    <span>Fortify 原始碼檢測</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Comodo" id="Comodo">
                    <label for="Comodo"></label>
                    <span>Comodo 安全管理方案</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="KnowBe4" id="KnowBe4">
                    <label for="KnowBe4"></label>
                    <span>KnowBe4 資安課程平台</span>
                  </li>
                </ul>
                <br class="hidden-xs">
                <div id="other-list">
                  <h3>其它</h3>
                  <ul>
                    <li class="ares-checkbox">
                      <input type="checkbox" name="product[]" value="outsourcing" id="p25">
                      <label for="p25"></label>
                      <span>委外服務</span>
                    </li>
                    <li class="ares-checkbox">
                      <input type="checkbox" name="product[]" value="GOV" id="p26">
                      <label for="p26"></label>
                      <span>政府專案</span>
                      <!-- <a href="http://www.ares.com.tw/services/gov/" class="date-color" rel="external"><span>詳細</span></a> -->
                    </li>
                    <li class="ares-checkbox">
                      <input type="checkbox" name="product[]" value="SI" id="si">
                      <label for="si"></label>
                      <span>系統整合開發</span>
                    </li>
                  </ul>
                </div>
              </div>
            </fieldset>
          </div>
          <legend></legend>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/form.php');
?>
        </form>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener('load', function() {
  var queryParams = new URLSearchParams(window.location.search);
  if (window.location.search && queryParams.has('type')){
    const typeValue = queryParams.get('type');
    if (typeValue.toLowerCase() === 'infosec') {
      $('#business-list,#financial-list,#other-list').hide();
    } else {

    }
  }
});
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="js/check.js?20221" defer></script>
</body>
</html>