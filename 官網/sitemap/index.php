<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='網站地圖 | 資通電腦';
$page['description']='資通電腦網站的所有主要網頁';
$page['canonical']='https://www.ares.com.tw/sitemap/';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <figure class="slider" data-image="/img/about/about.png">
    <figcaption class="color-white">網站地圖</figcaption>
  </figure>
  <nav>
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">網站地圖</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section>
    <h1 class="text-center">網站地圖</h1>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <h2 class="underline">產品與服務</h2>
          <div class="">
            <div class="py-2 color-blue"><b>商業服務</b></div>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/">ciMes 製造執行系統 ↗</a></li>
              <li class="col-12 col-md-6"><a href="/products/IoT/">IoT 物聯網解決方案</a></li>
              <li class="col-12 col-md-6"><a href="/products/Surf-Workflow/">Surf-Workflow 生產管理系統</a></li>
              <li class="col-12 col-md-6"><a href="https://hcp.ares.com.tw/">HCP 人力資產規劃系統 ↗</a></li>
              <li class="col-12 col-md-6"><a href="/products/egui/">eGUI 電子發票管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/gv/">GV 統一發票管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/Local-Template/">NM / GIB / 十號公報</a></li>
              <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/">Oracle 升級、維護、客製 ↗</a></li>
              <li class="col-12 col-md-6"><a href="/products/gd-crm/">GD-CRM 客戶關係管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/financial-reporting/">財報自行編製解決方案</a></li>
              <li class="col-12 col-md-6"><a href="/products/e-recruiting/">招募管理系統</a></li>
            </ul>
          </div>
          <div class="">
            <div class="py-2 color-blue"><b>金融服務</b></div>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="/products/afeis/" title="Advanced Foreign Exchange Integrated System">AFEIS 國內外匯電腦整合系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/eAresBank/">eAresBank 海外分行核心系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/cross-pricing/" title="ARES Cross Pricing System">ACPS 衍生性金融商品評價系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/nuntio/">ARES Nuntio 資通法規報表申報平台</a></li>
              <!-- <li class="col-12 col-md-6"><a href="/products/ascbs/" title="ARES Smart Core Banking System">ASCBS 大陸核心系統</a></li> -->
              <li class="col-12 col-md-6"><a href="/products/treasury/">ARES Treasury System 財務交易系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/portfolio/">ARES Portfolio System 投資組合管理系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/aml/">AML 洗錢防制解決方案</a></li>
              <li class="col-12 col-md-6"><a href="/products/kyc-cloud/">KYC 混合雲名單掃描系統</a></li>
              <li class="col-12 col-md-6"><a href="/products/visual-pricing-tool/">Visual Pricing Tool 視覺化圖型工具</a></li>
              <li class="col-12 col-md-6"><a href="/products/ISDA-SIMM/">ISDA SIMM 原始保證金合規</a></li>
              <li class="col-12 col-md-6"><a href="/products/fxns/">FXNS 外匯議價系統</a></li>
            </ul>
          </div>
          <div class="">
            <div class="py-2 color-blue"><b>資訊安全</b></div>
            <ul class="row">
              <li class="col-12 col-md-6"><a href="https://pki.ares.com.tw/">uPKI 憑證驗證服務系統 ↗</a></li>
              <li class="col-12 col-md-6"><a href="https://ares-pp.ares.com.tw/">ARES PP 隱私保鑣 ↗</a></li>
              <li class="col-12 col-md-6"><a href="/products/fortify/">Fortify 原始碼檢測工具</a></li>
              <li class="col-12 col-md-6"><a href="/products/comodo/">Comodo 安全管理方案</a></li>
              <li class="col-12 col-md-6"><a href="/products/knowbe4/">KnowBe4 資安課程平台</a></li>
            </ul>
          </div>
          <div class="">
            <div class="color-blue py-2"><b>專業服務</b></div>
            <ul>
              <li><a href="/services/outsourcing/">資訊委外服務</a></li>
              <li><a href="/services/system-development-integration/">系統整合開發</a></li>
              <li><a href="/services/gov/">政府專案服務</a></li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <h2 class="underline">關於</h2>
          <div class="py-2">
            <ul>
              <li><a href="/events/">最新消息</a></li>
              <li><a href="/best-practices/">客戶案例</a></li>
              <li><a href="/epaper/">電子報</a></li>
            </ul>
            <ul>
              <li><a href="/profile/">公司簡介</a></li>
              <li><a href="/contact/">公司據點</a></li>
              <li><a href="/milestone/">里程碑</a></li>
              <li><a href="/job/">公司文化</a></li>
              <li><a href="/partners/">客戶及合作夥伴</a></li>
              <li><a href="/esg/">社會責任</a></li>
              <li><a href="/governance/">公司治理</a></li>
              <li><a href="/investor-service/">股東服務</a></li>
              <li><a href="/investor-events/">重大訊息</a></li>
              <li><a href="/investor-revenue/">營收報告</a></li>
              <li><a href="/investor-financial/">財務報表</a></li>
              <li><a href="/investor-report/">股東會資訊</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

