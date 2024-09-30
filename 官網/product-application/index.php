<?php
$target='123';
if(isset($_GET['t'])){
  $target=trim($_GET['t']);
}
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='產業應用 | 資通電腦';
$page['description']='資通電腦提供軟體產品與專業顧問、委外服務，主要服務對象遍及金融、政府和工商企業等單位。';
$page['canonical']='https://www.ares.com.tw/product-application/';
$page['css']=array('/css/product-application.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <figure class="slider">
    <img src="/img/product/industries.png" alt="*">
    <figcaption class="color-white">
      <h1><img src="/img/product/icon-products.svg" alt="*"> 產業應用</h1>
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
            <a href="/products/" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">產業應用</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section id="product-application">
    <div class="container text-center">
      <h2>行業類別</h2>
      <hr>
      <div class="row">
          <div class="col-12 col-sm-6 col-md-4" id="car">
            <div class="thumbnail border <?= $target=='car' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/01car.png" alt="汽車" class="w-100">
              </figure>
              <div class="h5 color-blue">汽車業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">汽車業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                  <!-- <a href="/products/cmo/" title="CMO"><span>CMO</span></a> -->
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="bank">
            <div class="thumbnail border <?= $target=='bank' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/02bank.png" alt="銀行" class="w-100">
              </figure>
              <div class="h5 color-blue">銀行業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">銀行業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <a href="/products/afeis/" title="AFEIS"><span>AFEIS</span></a>
                  <a href="/products/earesbank/" title="eAresBank"><span>eAresBank</span></a>
                  <!-- <a href="/products/fstp/" title="FSTP"><span>FSTP</span></a> -->
                  <a href="/products/nuntio/" title="FSTP"><span>ARES Nuntio</span></a>
                  <!-- <a href="/products/swift/" title="SWIFT"><span>SWIFT</span></a> -->
                  <a href="/products/ascbs/" title="ARES Smart Core Banking System"><span>ARES Smart Core Banking System</span></a>
                  <a href="/products/treasury/" title="ARES Treasury System"><span>ARES Treasury System</span></a>
                  <a href="/products/portfolio/" title="ARES Portfolio System"><span>ARES Portfolio System</span></a>
                  <a href="http://portfolio.ares.com.tw/Visual-Pricing-Tool/" title="Visual Pricing Tool"><span>Visual Pricing Tool</span></a>
                  <a href="/products/siron-aml/"><span>AML</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="food">
            <div class="thumbnail border <?= $target=='food' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/03food.png" alt="食品" class="w-100">
              </figure>
              <div class="h5 color-blue">食品業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">食品業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/"><span>GD-CRM</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="oil">
            <div class="thumbnail border <?= $target=='oil' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/04oil.png" alt="石油" class="w-100">
              </figure>
              <div class="h5 color-blue">石油化學工業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">石油化學工業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="medical">
            <div class="thumbnail border <?= $target=='medical' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/05Medical-Biotechnology.png" alt="醫療" class="w-100">
              </figure>
              <div class="h5 color-blue">醫療保健業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">醫療保健業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="/products/gd-crm/"><span>GD-CRM</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="metal">
            <div class="thumbnail border <?= $target=='metal' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/06Metals-Hardware.png" alt="金屬" class="w-100">
              </figure>
              <div class="h5 color-blue">金屬加工業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">金屬加工業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/"><span>GD-CRM</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="semiconductor">
            <div class="thumbnail border <?= $target=='semiconductor' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/07semiconductor.png" alt="半導體" class="w-100">
              </figure>
              <div class="h5 color-blue">半導體產業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">半導體產業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/egui/" title="eGUI"><span>eGUI</span></a>
                  <a href="/products/Local-Template/" title="GV / NM / GIB"><span>GV / NM / GIB</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="optoelectronics">
            <div class="thumbnail border <?= $target=='optoelectronics' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/08Optoelectronics-Information.png" alt="光電" class="w-100">
              </figure>
              <div class="h5 color-blue">電子零組件及光電製造業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">電子零組件及光電製造業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <!-- <a href="/products/plm/" title="Agile PLM"><span>Agile PLM</span></a> -->
                  <a href="/products/egui/" title="eGUI"><span>eGUI</span></a>
                  <a href="/products/Local-Template/" title="GV / NM / GIB"><span>GV / NM / GIB</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <!-- <a href="/products/gcrs/" title="GCRS"><span>GCRS</span></a> -->
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                  <!-- <a href="/products/nhms/" title="NHMS"><span>NHMS</span></a> -->
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="electronic">
            <div class="thumbnail border <?= $target=='electronic' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/09Electronic-Information.png" alt="通訊" class="w-100">
              </figure>
              <div class="h5 color-blue">資通訊業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">資通訊業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <!-- <a href="/products/plm/" title="Agile PLM"><span>Agile PLM</span></a> -->
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                  <!-- <a href="/products/nhms/" title="NHMS"><span>NHMS</span></a> -->
                  <!-- <a href="/products/cmo/" title="CMO"><span>CMO</span></a> -->
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="tradi">
            <div class="thumbnail border <?= $target=='tradi' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/10Textiles.png" alt="傳產" class="w-100">
              </figure>
              <div class="h5 color-blue">傳產製造業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">傳產製造業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="mech">
            <div class="thumbnail border <?= $target=='mech' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/11Machinery.png" alt="設備" class="w-100">
              </figure>
              <div class="h5 color-blue">機械設備製造業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">機械設備製造業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="trade">
            <div class="thumbnail border <?= $target=='trade' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/12Trade-Storage.png" alt="運輸" class="w-100">
              </figure>
              <div class="h5 color-blue">運輸倉儲業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">運輸倉儲業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://cimes.ares.com.tw/" title="ciMes"><span>ciMes</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <!-- <a href="/products/cmo/" title="CMO"><span>CMO</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="immovable">
            <div class="thumbnail border <?= $target=='immovable' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/13-Housing-agency.png" alt="不動產" class="w-100">
              </figure>
              <div class="h5 color-blue">不動產業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">不動產業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="retail">
            <div class="thumbnail border <?= $target=='retail' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/14Retailer-Channel.png" alt="零售" class="w-100">
              </figure>
              <div class="h5 color-blue">零售批發業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">零售批發業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                  <!-- <a href="/products/cmo/" title="CMO"><span>CMO</span></a> -->
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="tour">
            <div class="thumbnail border <?= $target=='tour' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/15-2Entertainment.png" alt="觀光" class="w-100">
              </figure>
              <div class="h5 color-blue">觀光餐飲業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">觀光餐飲業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <!-- <a href="/products/analyzer/" title="Analyzer"><span>Analyzer</span></a> -->
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <!-- <a href="/products/cmo/" title="CMO"><span>CMO</span></a> -->
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="entertainment">
            <div class="thumbnail border <?= $target=='entertainment' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/16Dissemination.png" alt="傳播" class="w-100">
              </figure>
              <div class="h5 color-blue">傳播娛樂產業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">傳播娛樂產業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="/products/egui/" title="eGUI"><span>eGUI</span></a>
                  <a href="/products/Local-Template/" title="GV / NM / GIB"><span>GV / NM / GIB</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="education">
            <div class="thumbnail border <?= $target=='education' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/14Creative-Papermaking.png" alt="文教" class="w-100">
              </figure>
              <div class="h5 color-blue">文教圖書產業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">文教圖書產業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="insurance">
            <div class="thumbnail border <?= $target=='insurance' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/19Environmental-Protection-Service.png" alt="保險" class="w-100">
              </figure>
              <div class="h5 color-blue">保險業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">保險業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="/products/treasury/" title="ARES Treasury System"><span>ARES Treasury System</span></a>
                  <a href="/products/portfolio/" title="ARES Portfolio System"><span>ARES Portfolio System</span></a>
                  <a href="/products/siron-aml/"><span>AML</span></a>
                  <a href="http://portfolio.ares.com.tw/Visual-Pricing-Tool/" title="Visual Pricing Tool"><span>Visual Pricing Tool</span>
                  </a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="hidden-sm clearfix"></div> -->
          <div class="col-12 col-sm-6 col-md-4" id="commerce">
            <div class="thumbnail border <?= $target=='commerce' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/19services.png" alt="工商" class="w-100">
              </figure>
              <div class="h5 color-blue">工商及個人服務業</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">工商及個人服務業</div>
                <p>支援產品</p>
                <div class="span-group">
                  <!-- <a href="https://argoerp.ares.com.tw/" title="ArgoERP"><span>ArgoERP</span></a> -->
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://hcp.ares.com.tw/" title="HCP"><span>HCP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="https://oracle.ares.com.tw/" title="Oracle"><span>Oracle</span></a>
                  <a href="/products/gd-crm/" title="GD-CRM"><span>GD-CRM</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4" id="gov">
            <div class="thumbnail border <?= $target=='gov' ? 'target' : '' ?>">
              <figure>
                <img loading="lazy" src="/img/product/20gov.png" alt="政府" class="w-100">
              </figure>
              <div class="h5 color-blue">政府單位</div>
              <p class="explore">探索產品支援</p>
              <div class="list">
                <div class="h5">政府單位</div>
                <p>支援產品</p>
                <div class="span-group">
                  <a href="https://ares-pp.ares.com.tw/" title="ARES PP"><span>ARES PP</span></a>
                  <a href="https://pki.ares.com.tw/" title="uPKI"><span>uPKI</span></a>
                  <a href="/services/gov/" title="政府專案服務"><span>政府專案服務</span></a>
                  <a href="/products/fortify/" title="Fortify"><span>Fortify</span></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener("load", function() {
  window.history.replaceState({link: 'application'}, '', '/product-application/');

  $('.thumbnail').on('touchstart touchend', function(e) {
    $(this).toggleClass('touch');
  });
});
</script>
</body>
</html>
