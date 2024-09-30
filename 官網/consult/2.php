<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "consult";
$page['title']='產品免費諮詢 | 資通電腦';
$page['description']='資通電腦提供各項產品業務免費諮詢，在填寫服務表單資訊後，將有專員盡速與您聯繫提供服務。';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['css']=array('/css/buttons.css','/css/consult.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');
?>
  <figure class="slider">
    <img class="img-responsive" src="../img/consult/banner.png" alt="資通電腦提供全方位解決方案！">
    <figcaption class="uk-overlay-panel uk-overlay-left uk-vertical-align">
      <h1><img src="../img/consult/consult-icon.svg" alt="*">免費諮詢</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb">
      <div class="container">
        <ul class="row" aria-label="breadcrumb" role="navigation" itemscope itemtype="http://schema.org/BreadcrumbList">
           
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="https://www.ares.com.tw/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">產品免費諮詢</span></a>
            <meta itemprop="position" content="2" />
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
              <div class="col-sm-6 col-sm-push-3">
                <div class="text-center">
                  <a href="#" class="ib p8 product-group-label">商業服務</a>
                  <a href="#" class="ib p8 product-group-label">金融服務</a>
                  <a href="#" class="ib p8 product-group-label">資訊安全</a>
                  <a href="#" class="ib p8 product-group-label">其 它</a>
                </div>
              </div>
            </fieldset>
            <fieldset class="row">
              <div class="col-sm-6 col-md-4">
                <!-- <div class="row"> -->
                  <!-- <div class="col-sm-6"> -->
                    <h3>商業服務</h3>
                    <ul>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ArgoERP" id="ArgoERP">
                        <label for="ArgoERP"></label>
                        <span>ArgoERP</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ciMes" id="ciMes">
                        <label for="ciMes"></label>
                        <span>ciMes</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="HCP" id="HCP">
                        <label for="HCP"></label>
                        <span>HCP</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="Agile PLM" id="PLM">
                        <label for="PLM"></label>
                        <span>Agile PLM</span>
                      </li>
                      <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="Analyzer" id="Analyzer">
                        <label for="Analyzer"></label>
                        <span>Analyzer</span>
                      </li> -->
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="eGUI" id="egui">
                        <label for="egui"></label>
                        <span>eGUI</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="GV／NM／GIB" id="lt">
                        <label for="lt"></label>
                        <span>GV／NM／GIB／十號公報</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="ORACLE" id="ORACLE">
                        <label for="ORACLE"></label>
                        <span>ORACLE</span>
                      </li>
                      <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="GD-CRM" id="GD-CRM">
                        <label for="GD-CRM"></label>
                        <span>GD-CRM</span>
                      </li>
                       <!-- <li class="ares-checkbox">
                        <input type="checkbox" name="product[]" value="CMO" id="CMO">
                        <label for="CMO"></label>
                        <span>CMO</span>
                      </li> -->
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
              <div class="col-sm-6 col-md-4">
                <h3>金融服務</h3>
                <ul>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="AFEIS" id="AFEIS">
                    <label for="AFEIS"></label>
                    <span>AFEIS</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Ares Cross Pricing System" id="ACPS">
                    <label for="ACPS"></label>
                    <span>Ares Cross Pricing System</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="eAresBank" id="eAresBank">
                    <label for="eAresBank"></label>
                    <span>eAresBank</span>
                  </li>
                  <!-- <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="FSTP" id="FSTP">
                    <label for="FSTP"></label>
                    <span>FSTP</span>
                  </li>-->
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Nuntio" id="Nuntio">
                    <label for="Nuntio"></label>
                    <span>ARES Nuntio</span>
                  </li>
                  <!-- <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="SWIFT" id="SWIFT">
                    <label for="SWIFT"></label>
                    <span>SWIFT</span>
                  </li> -->
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Ares Smart Core Banking System" id="asc">
                    <label for="asc"></label>
                    <span>Ares Smart Core Banking System</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Treasury System" id="Treasury">
                    <label for="Treasury"></label>
                    <span>ARES Treasury System</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES Portfolio System" id="Portfolio">
                    <label for="Portfolio"></label>
                    <span>ARES Portfolio System</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Visual Pricing Tool" id="Pricing">
                    <label for="Pricing"></label>
                    <span>Visual Pricing Tool</span>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-4">
                <h3>資訊安全</h3>
                <ul>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="uPKI" id="uPKI">
                    <label for="uPKI"></label>
                    <span>uPKI</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="ARES-PP" id="ARES-PP">
                    <label for="ARES-PP"></label>
                    <span>ARES PP</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="Fortify" id="Fortify">
                    <label for="Fortify"></label>
                    <span>Fortify</span>
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="NCSIST" id="ncsist">
                    <label for="ncsist"></label>
                    <span>中科院資安方案</span>
                  </li>
                </ul>
                <br class="hidden-xs">
                <h3>其它</h3>
                <ul>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="outsourcing" id="p25">
                    <label for="p25"></label>
                    <span>委外服務</span>
                    <!-- <a href="http://www.ares.com.tw/services/outsourcing/" class="date-color" rel="external"><span>詳細</span></a> -->
                  </li>
                  <li class="ares-checkbox">
                    <input type="checkbox" name="product[]" value="GOV" id="p26">
                    <label for="p26"></label>
                    <span>政府專案</span>
                    <!-- <a href="http://www.ares.com.tw/services/gov/" class="date-color" rel="external"><span>詳細</span></a> -->
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
          <legend></legend>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/form.php');
?>
        </form>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
  <script src="https://www.google.com/recaptcha/api.js?zh-TW" async defer></script>
  <script src="/js/main2016.js"></script>
<script>
$(function(){
  $('#consult').show(); //確保有讀到 jquery
  $.getScript('js/check.js');
});
</script>
</body>
</html>