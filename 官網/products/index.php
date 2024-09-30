<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
// $amp='https://www.ares.com.tw/amp/products/';
$page['title']='我們的產品與服務 - 資通電腦';
$page['description']='提供各項企業軟體產品與專業顧問、委外服務，主要服務對象遍及金融、政府和工商企業等單位。';
$page['canonical']='https://www.ares.com.tw/products/';
// $page['css']=array('/css/product.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
:root{
  --blue:#2858aa;
  --white:#fff;
}
.product-button>[role="button"]{
  cursor: pointer;
  background-color:var(--white);
  border-color:var(--blue)!important;
  position: relative;
}
.product-button.active>[role="button"]{
  color:var(--white);
  background-color:var(--blue);
  pointer-events:none;
}
.product-button.active>[role="button"]::after{
  content:'';
  position: absolute;
  left: 50%;
  top:100%;
  transform:translate(-50%,0);
  width:1rem;
  height:1rem;
  background-color: var(--blue);
  clip-path: polygon(0 0, 100% 0, 50% 100%);
}
.product-button>#is-btn[role="button"]{
  --blue:#da291c;
  color:var(--blue);
}
.product-button.active>#is-btn[role="button"]{
  color:var(--white);
}
[data-labelledby]{
  display: none;
  counter-reset:list;
}
[data-labelledby] ul{
  counter-increment:list;
}
[data-labelledby] ul li::before{
  content:'- ';
}
[data-labelledby] .border{
  border-color:var(--blue)!important;
}

</style>
  <figure class="slider" data-image="/img/product/banner.jpg">
    <figcaption class="color-white">產品類別</figcaption>
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <main id="products">
    <section>
      <div class="container">
        <h1 class="color-blue text-center">產品類別</h1>
        <hr>
        <div id="business" class="product-container">
          <h2 class="text-center mb-4 mt-5">商業服務</h2>
          <div class="row product-group">
            <!-- button area, max is 4 -->
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#cimes">
              <div id="cimes-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>ciMes 製造執行系統</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#iot">
              <div id="iot-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>IoT 物聯網解決方案</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#hcp">
              <div id="hcp-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>HCP 人力資產規劃</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#oracle">
              <div id="oracle-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>Oracle ERP 企業資源規劃</span></div>
            </div>
          </div>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#財報編製工具">
              <div id="財報編製工具-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>CaseWare 財報編製工具</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#egui">
              <div id="egui-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>eGUI 電子發票</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#gv">
              <div id="gv-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>GV 統一發票管理</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#lt">
              <div id="lt-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>NM / GIB / 十號公報</span></div>
            </div>
          </div>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#crm">
              <div id="crm-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>GD-CRM 客戶關係管理</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#recruiting">
              <div id="recruiting-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>招募管理系統</span></div>
            </div>
          </div>
        </div>



<div id="cimes" data-labelledby="cimes-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/cimes.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://cimes.ares.com.tw">ciMes 製造執行系統</a></h3>
      <p>資通電腦 ciMes 為國際研究機構 Gartner 台灣唯一建議參考製造執行系統，並榮獲 2018 台灣精品獎肯定。目前更有汽車、車用零件、金屬加工及射出成型、光電產業、電子組裝、機械加工、半導體等近百家成功案例。</p>
      <ul class="row color-blue">
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/wip.php">在製品管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/cms.php">載具管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/qc.php">品質管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/wrp.php">報表系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/tooling.php">零配件管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/lms.php">標籤管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/pm.php">機台預修保養</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/alm.php">警示管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/mms.php">物料管理系統</a></li>
        <li class="col-12 col-md-6"><a href="https://cimes.ares.com.tw/products/module/eks.php">電子看板系統</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="iot" data-labelledby="iot-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/iot.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/IoT/">IoT 物聯網解決方案</a></h3>
      <p>物聯網是智慧製造中很重要的一環，也是實現智慧製造的根基。工廠透過 IoT 互聯網的設備網絡取得機台、加工、量測…等設備訊息記錄。可協助管理者掌握即時生產狀況與進度，有效提升生產效率，降低成本。</p>
      <ul class="row color-blue">
        <li class="col-12 col-md-6"><a href="https://www.ares.com.tw/products/IoT/">產線數據匯流平台</a></li>
        <li class="col-12 col-md-6"><a href="https://www.ares.com.tw/products/Surf-Workflow/">生產管理系統 Surf-Workflow</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="hcp" data-labelledby="hcp-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/HCP.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://hcp.ares.com.tw">HCP 人力資產規劃系統</a></h3>
      <p>HCP 適合中大型企業使用，支援多國語言、多集團、多公司、多廠區、多幣別等功能。至今已導入超過 400 家大廠，客戶範圍遍及台灣、大陸、越南、印尼、菲律賓等地。</p>
      <div class="row">
<div class="col-12 col-md-4">
  <h4 class="h5">人資管理</h4>
  <ul class="color-blue">
    <li><a href="https://hcp.ares.com.tw/products/modules/hrm">人事資料管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/salary">薪資獎金管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/attendance">差勤請假管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/insurance">地方保險管理模組</a></li>
  </ul>
</div>
<div class="col-12 col-md-4">
  <h4 class="h5">人力發展</h4>
  <ul class="color-blue">
    <li><a href="https://hcp.ares.com.tw/products/modules/competence">員工職能管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/training">教育訓練管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/performance">員工績效管理模組</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/recruit">人才招募管理模組</a></li>
  </ul>
</div>
<div class="col-12 col-md-4">
  <h4 class="h5">獨立模組</h4>
  <ul class="color-blue">
    <li><a href="https://hcp.ares.com.tw/products/modules/ess-mss">員工主管自助系統</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/bis">商業智慧系統</a></li>
    <li><a href="https://hcp.ares.com.tw/products/modules/usp">薪資密封袋</a></li>
  </ul>
</div>
      </div>
    </div>
  </div>
</div>
<div id="oracle" data-labelledby="oracle-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/oracle.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://oracle.ares.com.tw">Oracle ERP 企業資源規劃系統</a></h3>
      <p>資通電腦是 Oracle 在台灣最重要的合作夥伴，Oracle ERP 解決方案能協助企業在財務管理、採購管理、製造管理、供應鏈管理面的躍進。</p>
      <ul class="row color-blue">
        <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/solutions/ebs/">EBS 導入服務</a></li>
        <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/solutions/customization/">Oracle 客製服務</a></li>
        <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/solutions/ebs-upgrade/">EBS R12升級</a></li>
        <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/solutions/to-linux/">移轉至 Linux 平台</a></li>
        <li class="col-12 col-md-6"><a href="https://oracle.ares.com.tw/solutions/database-consulting/">資料庫管理與顧問服務</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="財報編製工具" data-labelledby="財報編製工具-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/financial-reporting.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/financial-reporting/">CaseWare 財報編製工具</a></h3>
      <p>資通電腦與業界專家聯手運用 CaseWare 與 CONVERGE 協助企業跳脫繁複的工作表、眼花撩亂的數字與惱人的表單連結，讓編製過程有所本也有跡可循，有效提升企業財報自編的能力，解決企業財報自編的挑戰，同時滿足主管機關要求。</p>
    </div>
  </div>
</div>
<div id="egui" data-labelledby="egui-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/eGUI.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/egui/">eGUI 電子發票系統</a></h3>
      <p>eGUI 使用 Turnkey 技術，將電子發票 / 電子折讓資料自動傳遞至財政部電子發票整合服務平台，避免公司、客戶與供應商之機密交易資料經手第三方，確保資料安全性。</p>
    </div>
  </div>
</div>
<div id="gv" data-labelledby="gv-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/gv.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/gv/">GV 統一發票管理系統</a></h3>
      <p>GV（GUI / VAT，統一發票 / 媒體申報管理系統），能協助客戶進行銷項憑證管理、進項憑證管理、媒體申報（媒體檔案產生、401 & 403 申報書），與其他作業如參數設定（稅籍編號設定、發票格式設定等）及進、銷項介面資料轉入功能。</p>
    </div>
  </div>
</div>
<div id="lt" data-labelledby="lt-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/gui.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/Local-Template/">NM / GIB / 十號公報</a></h3>
      <p>資通電腦提供基於 Oracle ERP 企業資源規劃系統所開發的 NM（Notes Management；票據管理系統）、GIB（Goods in Bond；保稅管理系統）、十號公報存貨管理系統之解決方案。</p>
    </div>
  </div>
</div>
<div id="crm" data-labelledby="crm-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/CRM.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/gd-crm/">GD-CRM 客戶關係管理系統</a></h3>
      <p>GD-CRM 能滿足小型企業到跨國公司在業務、行銷與服務的管理需求。企業可透過網站、Call Center、電子郵件、行動裝置等，輕鬆維繫客戶關係，讓管理工作變得更輕鬆省時，加速業績提升，達成開發新市場的目標！</p>
    </div>
  </div>
</div>
<div id="recruiting" data-labelledby="recruiting-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/recruiting.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/e-recruiting/">招募管理系統</a></h3>
      <p>將邀約、面談、核敘、錄取、報到…等招募流程完整 e 化，並建立專屬人才庫，幫企業快速找到精準人才！</p>
    </div>
  </div>
</div>




        <div id="security" class="product-container">
          <h2 class="text-center mb-4 mt-5">資訊安全</h2>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#is">
              <div id="is-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>資安法專區</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#arespp">
              <div id="arespp-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>ARES PP 隱私保鑣</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#fortify">
              <div id="fortify-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>Fortify 原始碼檢測工具</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#comodo">
              <div id="comodo-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>Comodo 安全管理平台</span></div>
            </div>
          </div>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#upki">
              <div id="upki-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>uPKI 安控元件</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#knowbe4">
              <div id="knowbe4-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>KnowBe4 資安課程平台</span></div>
            </div>
          </div>
        </div>
<div id="is" data-labelledby="is-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/IS.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/trends/information-security/">資安法解決方案</a></h3>
      <p>資通電腦提供全方位資安解決方案，協助上市櫃公司遵循資通安全管控指引，落實資安防護及管理機制，免於高額罰款。企業指引專區馬上看。</p>
    </div>
  </div>
</div>
<div id="arespp" data-labelledby="arespp-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/ARES-PP.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://ares-pp.ares.com.tw">ARES PP 文件加密系統</a></h3>
      <p>資通電腦隱私保鑣（ARES PP）使用源頭加密技術，能針對儲存在端點與網路中的電子檔與資料進行監控、分析、紀錄、識別與加密保護，對內防制資料外洩，對外保護資料流通安全，還可依據人員或是群組設定權限，讓機密文件安全不外洩！</p>
      <ul class="row color-blue">
<li class="col-12 col-md-6"><a href="https://ares-pp.ares.com.tw/about/">系統介紹</a></li>
<li class="col-12 col-md-6"><a href="https://ares-pp.ares.com.tw/faq/">常見問題</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="fortify" data-labelledby="fortify-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/fortify.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/fortify/">Fortify 原始碼檢測工具</a></h3>
      <p>運用 Fortify SCA 靜態原始碼檢測分析工具與 WebInspect 動態應用程式檢測工具，找出程式原始碼或網站中的安全弱點與資安漏洞產出報告，深入目前企業資安威脅，並對應到此問題所在的程式碼行數，讓資安人員能快速修復安全弱點。</p>
      <ul class="row color-blue">
<li class="col-12 col-md-6"><a href="https://www.ares.com.tw/products/fortify/">功能介紹</a></li>
<li class="col-12 col-md-6"><a href="https://www.ares.com.tw/products/fortify/ares/">顧問諮詢服務</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="comodo" data-labelledby="comodo-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/comodo.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/comodo/">Comodo 安全管理平台</a></h3>
      <p>Comodo 以獨家的預設拒絕（Default Deny）方式提供嚴密保護，創下了零感染的紀錄，保護全球超過 1 億台系統，並擁有超過 9,000 萬用戶肯定！</p>
    </div>
  </div>
</div>
<div id="upki" data-labelledby="upki-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/pki.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://pki.ares.com.tw">uPKI 安控元件</a></h3>
      <p>ARES uPKI 運用電子憑證登入，透過 PKI 認證機制來確定登入者之身份，且依照使用者權限進行分級。同時可與 IAM（Identity and Access Management）身分識別及存取管理系統整合，提供嚴謹的認證與授權機制。</p>
      <ul class="row color-blue">
<li class="col-12 col-md-6"><a href="https://pki.ares.com.tw/products/upki/">uPKI 安控解決方案</a></li>
<li class="col-12 col-md-6"><a href="https://pki.ares.com.tw/products/cs/">資料庫加密及遮罩伺服器</a></li>
<li class="col-12 col-md-6"><a href="https://pki.ares.com.tw/products/uiam/">身分識別及存取管理系統</a></li>
<li class="col-12 col-md-6"><a href="https://pki.ares.com.tw/products/usp/">薪資密封袋</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="knowbe4" data-labelledby="knowbe4-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/knowbe4.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/knowbe4/">KnowBe4 資安課程平台</a></h3>
      <p>全球最大的安全意識培訓和模擬網路釣魚平台，協助企業培訓員工安全意識，遏阻網路社交工程攻擊等安全威脅，保護企業資產。</p>
    </div>
  </div>
</div>







        <div id="financial" class="product-container">
          <h2 class="text-center mb-4 mt-5">金融服務</h2>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#afeis">
              <div id="afeis-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>國內外匯電腦整合系統</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#earesbank">
              <div id="earesbank-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>海外分行核心系統</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#衍生性金融商品評價">
              <div id="衍生性金融商品評價-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>衍生性金融商品評價</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#nuntio">
              <div id="nuntio-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>法規報表申報</span></div>
            </div>
          </div>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#treasury">
              <div id="treasury-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>財務交易系統</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#portfolio">
              <div id="portfolio-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>投資組合管理系統</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#aml">
              <div id="aml-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>洗錢防制解決方案</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#kyc">
              <div id="kyc-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>KYC 解決方案</span></div>
            </div>
          </div>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#視覺化圖型工具">
              <div id="視覺化圖型工具-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>視覺化圖型工具</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#isdasimm">
              <div id="isdasimm-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>原始保證金解決方案</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#fxns">
              <div id="fxns-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>外匯議價系統</span></div>
            </div>
          </div>
        </div>


<div id="afeis" data-labelledby="afeis-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/afeis.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/afeis/">AFEIS 國內外匯電腦整合系統</a></h3>
      <p>資通電腦研發的 AFEIS 操作容易，其管理性與整合性可以充分配合銀行實際需求，有效提昇作業效率與風險控管，是銀行與金融機構面對國際化的最佳競爭利器。</p>
    </div>
  </div>
</div>
<div id="earesbank" data-labelledby="earesbank-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/earesbank.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/earesbank/">eAresBank 海外分行核心系統</a></h3>
      <p>eAresBank 整合銀行海外據點國際金融業務，採線上即時作業模式，快速整合消費金融與企業金融業務，並可銜接 SWIFT 的全球連線系統。系統功能完整、穩定，且能簡化作業流程，使銀行快速獲得決策資訊，強化國際競爭力。</p>
    </div>
  </div>
</div>
<div id="衍生性金融商品評價" data-labelledby="衍生性金融商品評價-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/cross-pricing.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/cross-pricing/">Ares Cross Pricing System 衍生性金融商品評價系統</a></h3>
      <p>衍生性金融商品評價系統（ACPS）能支援各式結構型金融商品與衍生性金融商品，提供即時評價、試算，且無需學習專業語法的金融評價系統。幫助金融產業在面對市場突發狀況時，做出最佳決策判斷的智慧工具。</p>
    </div>
  </div>
</div>
<div id="nuntio" data-labelledby="nuntio-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/nuntio.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/nuntio/">ARES Nuntio 法規報表申報平台系統</a></h3>
      <p>ARES Nuntio 滿足金融機構在不同地區監管者的需求，符合國內外法規遵循，提供資產與負債、損益、資本適足性、資本等級、流動資金、大額風險、貸款分類、外匯持倉、利率風險、國外法規遵循證明書等等相關法定報表支援。智慧化的申報作業取代依賴全人工的模式，不僅大幅降低人力與時間並提昇作業正確率，更能強化風險管理流程。</p>
    </div>
  </div>
</div>
<div id="treasury" data-labelledby="treasury-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/treasury.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/treasury/">Ares Treasury System 財務交易系統</a></h3>
      <p>Ares Treasury System 涵蓋國內外營業單位財務交易之匯利率、債券與衍生性等主要基本金融商品，貫穿前中後台金融作業系統，協助金融機構順利進行前台交易下單、資金調度，中台投資組合、風險管理，以及後台清算交割、會計帳務等作業。</p>
    </div>
  </div>
</div>
<div id="portfolio" data-labelledby="portfolio-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/portfolio.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/portfolio/">投資組合管理系統</a></h3>
      <p>資通電腦推出的創新投資組合管理系統之圖型工具涵蓋國內外主要匯利率，債劵與衍生性等金融商品。能協助金融產品行銷規劃與訂定市場策略攻勢，更能全面性評估衍生性商品業務，有效提昇 TMU 作業效率，強化業務風險控管，讓您輕鬆在金融產業脫穎而出，搶奪市場商機。</p>
    </div>
  </div>
</div>
<div id="aml" data-labelledby="aml-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/siron.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/aml/">AML 洗錢防制解決方案</a></h3>
      <p>透過 AML 模組化設計能靈活地因應現今各銀行、保險、證券、金融機構及金流相關產業現況，協助相關產業預測、檢核，並以最具成本效益的方式改善管理流程，符合內部控制程序，遵循國際反洗錢法規要求。</p>
    </div>
  </div>
</div>
<div id="kyc" data-labelledby="kyc-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/kyccloud.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/kyc-cloud/">KYC 混合雲名單掃描系統</a></h3>
      <p>透過資通電腦混合雲名單掃描系統進行 KYC 作業，以訂閱的價格無需建置即可使用，涵蓋參數閥值調整等服務，協助企業與金融機構審查客戶與風險評級，輕鬆建立反洗錢的第一層防護網。</p>
    </div>
  </div>
</div>
<div id="視覺化圖型工具" data-labelledby="視覺化圖型工具-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/visual.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/visual-pricing-tool/">Visual Pricing Tool 視覺化圖型工具</a></h3>
      <p>資通電腦視覺化圖形工具，只需畫出報酬形態即得到商品評價結果，讓工作流程化繁為簡，縮短 50% 以上金融商品設計與上架時間，做好金融商品風險管理就是如此的簡單！</p>
    </div>
  </div>
</div>
<div id="isdasimm" data-labelledby="isdasimm-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/isdasimm.png" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/ISDA-SIMM/">ISDA SIMM 原始保證金解決方案</a></h3>
      <p>適用於所有「非集中結算衍生性商品交易」，通過 ISDA SIMM™ 商用服務資格認證，運用全球共同一致的「保證金規範標準」SIMM™ CRIF。協助銀行做出最佳投資決策、減少銀行交易保證金成本、提高營業利潤。</p>
    </div>
  </div>
</div>
<div id="fxns" data-labelledby="fxns-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/product/ares/fxns.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="https://www.ares.com.tw/products/fxns/">FXNS 外匯議價系統</a></h3>
      <p>資通電腦推出台灣首家自行研發外匯議價系統，透過系統自動化外匯議價機制，並整合即時匯率以提供銀行端客戶最新報價資訊，讓銀行匯率議價作業更迅速，協助銀行業務開創新藍海。</p>
    </div>
  </div>
</div>


        <div id="service" class="product-container">
          <h2 class="text-center mb-4 mt-5">其他服務</h2>
          <div class="row product-group">
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#osc">
              <div id="osc-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>資訊委外服務</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#si">
              <div id="si-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>系統整合開發</span></div>
            </div>
            <div class="col-12 col-md-3 mb-3 product-button" data-product="#gov">
              <div id="gov-btn" class="border d-flex justify-content-center align-items-center py-2 px-1" role="button"><span>政府專案服務</span></div>
            </div>
          </div>


<div id="osc" data-labelledby="osc-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/service/services-outsourcing.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="/services/outsourcing/">資訊委外服務</a></h3>
      <p>提供軟體工程師派駐、軟體委外服務、Java / .NET / Python 技術支援，解決企業在資訊系統開發與運作不同階段的人力資源需求，適用金融業、保險業、科技業、製造業，電信業與零售電商等產業。</p>
    </div>
  </div>
</div>
<div id="si" data-labelledby="si-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/service/services-consultant.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="/services/system-development-integration/">系統整合開發</a></h3>
      <p>資通電腦擅長資料庫管理、系統整合開發、系統規劃設計等，透過與各國際大廠結盟移轉技術及各領域經營知識，提供各類型產業系統整合與軟體開發方案。</p>
    </div>
  </div>
</div>
<div id="gov" data-labelledby="gov-btn">
  <div class="border d-flex py-3">
    <div class="col-12 col-md-3 d-none d-md-block">
      <img class="img-fluid" loading="lazy" width="350" height="260" src="/img/service/services-gov.jpg" alt="*">
    </div>
    <div class="col-12 col-md-9">
      <h3 class="h4 mt-0 mb-3"><a class="color-blue" href="/services/gov/">政府專案服務</a></h3>
      <p>協助政府執行各種大型計畫專案，包含專案事前規劃、系統規劃與建置、資料移轉、效能調校、廠商連繫與客戶溝通協調、管制系統建置、源碼檢測…等服務。</p>
    </div>
  </div>
</div>
        </div>
      </div>
    </section>
  </main>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/js/product.js" defer></script> -->
<script>
window.addEventListener('load', (event) => {
  $(document).on('click', '.product-button:not(.active)', function(){
    var detailId = $(this).data('product');
    var detailContent = $(detailId).html();
    var $menuContainer = $(this).closest('.product-container');
    var $detailContainer = $menuContainer.find('#detail-container');

    // 有多個product-container，先移除才不會出現在多個地方
    // $('.product-container').each(function() {
    //   $(this).find('.product-button').removeClass('active');
    //   $(this).find('#detail-container').remove();
    // });
    $('.product-button').removeClass('active');
    $('#detail-container').remove();


    // if ($detailContainer.length === 0) {
      $detailContainer = $('<div id="detail-container" class="mb-3" data-labelledby></div>');
      $menuContainer.append($detailContainer);
    // }

    // 更新並顯示detail
    updateDetailPosition($(this), $detailContainer, detailContent);
  });

  function updateDetailPosition(clickedItem, detailContainer, content) {
    clickedItem.addClass('active');

    // 更新並以動畫顯示detail
    detailContainer.hide().html(content);

    var screenWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    var itemTop = clickedItem.offset().top - 44;

    if (screenWidth < 768) {
      // 當視窗寬度小於768px，將detail放在點擊的項目下方
      detailContainer.addClass('col-12');
      clickedItem.after(detailContainer);
    } else {
      // 將detail放在整個組的後面
      detailContainer.removeClass('col-12');
      clickedItem.closest('.product-group').after(detailContainer);
    }
    
    $('html, body').animate({
      scrollTop: itemTop
    }, 0);
    detailContainer.slideDown();
  }

  $(window).resize(function() {
    $('.product-container').each(function() {
      var $menuContainer = $(this);
      var $detailContainer = $menuContainer.find('#detail-container');
      var activeItem = $menuContainer.find('.product-button.active');

      if (activeItem.length && $detailContainer.is(':visible')) {
        // updateDetailPosition(activeItem, $detailContainer, $detailContainer.html());
        activeItem.removeClass('active');
        $detailContainer.remove();
      }
    });
  });
});
</script>
</body>
</html>
