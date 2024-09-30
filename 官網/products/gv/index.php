<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='統一發票系統,升級電子發票系統管理更輕鬆 - 資通電腦';
$page['description']='資通GV統一發票管理系統，可與 eGUI 電子發票管理系統輕鬆整合，資料同步並自動上傳財政部電子發票整合平台，不需改變作業流程無痛升級電子發票方案。支援 Oralce ERP 及其他 ERP 用戶，讓統一發票整合管理更輕鬆。';
// $page['keywords']='統一發票,電子發票,電子計算機發票,系統,B2C,B2B,ERP整合,turnkey';
$page['canonical']='https://www.ares.com.tw/products/gv/';
$page['css']=array('/css/product-gv.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include ('_banner.php');
?>
  <aside class="sticky">
    <div class="ares-breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../"  itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">GV 統一發票系統</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('nav.php');
?>
  </aside>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 p-4" style="background-color:#FFEBD2">
          <p>因應財政部財政資訊中心公告，為配合修正擴增統一編號並與現行配賦之統一編號相容（新舊統一編號格式相同），修正營利事業統一編號檢查邏輯，詳細內容請參考<a class="color-blue" href="https://www.fia.gov.tw/singlehtml/3?cntId=c4d9cff38c8642ef8872774ee9987283" rel="noopener noreferrer" target="_blank">財政部財政資訊中心官網</a>。</p>
          <p>資通電腦進銷項統一發票系統已完成內部測試並正式發佈 Patch。<span style="color:red">維護合約有效期間的客戶，請於上班時間來電，免付費客戶專線：0800-68 99 88  Roll TAR 處理；無維護合約客戶若有需求，請洽資通電腦系統部 林景聖 / 廖文淵 洽談續約事宜，聯絡電話：02-2522-1351 #612、#645。</span></p>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-3 text-center">
          <figure><img class="img-fluid" src="/img/product/gv/gv.png" alt="發票管理系統"></figure>
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline color-black">統一發票 / 媒體申報管理系統</h1>
          <br>
          <p>GV（GUI / VAT，統一發票 / 媒體申報管理系統），能協助客戶進行銷項憑證管理、進項憑證管理、媒體申報（媒體檔案產生、401 & 403 申報書），與其他作業如參數設定（稅籍編號設定、發票格式設定等）及進、銷項介面資料轉入功能。與 eGUI 電子發票管理系統進行整合，資料同步並自動上傳財政部電子發票整合服務平台，不需變動原有作業流程，企業就能輕鬆升級電子發票管理。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">確保發票媒體申報正確性 節省人工核對成本</h2>
      <hr>
      <div>
        <h3 class="h4 color-blue">銷項憑證管理</h3>
        <ul class="check">
          <li>客戶統編、字軌、發票簿登錄、AR Trx Type、AR Tax Code……</li>
          <li>銷項發票產生作業</li>
          <li>銷項折讓資料產生作業</li>
          <li>資料維護：銷項發票、銷項折讓資料、零稅率資料</li>
          <li>統一發票列印（套版）</li>
          <li>報表：統一發票明細表、銷項收據明細表、零稅率資料明細表、銷項折讓明細表</li>
        </ul>
      </div>
      <div>
        <h3 class="h4 color-blue">進項憑證管理</h3>
        <ul class="check">
          <li>廠商統編設定、進項折讓簿、進項字軌……</li>
          <li>進項發票產生作業</li>
          <li>進項折讓資料產生作業</li>
          <li>資料維護：進項發票、進項折讓資料</li>
          <li>進項折讓證明單列印（套版）</li>
          <li>報表：進項折讓明細表、進項稅額明細表……</li>
        </ul>
      </div>
      <div>
        <h3 class="h4 color-blue">其它作業</h3>
        <ul class="check">
          <li>參數設定：稅籍編號設定、發票格式設定……等</li>
          <li>媒體申報（媒體檔案產生、401 申報書）</li>
          <li>資料轉入界面：進、銷項申報資料轉入</li>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <figure class="text-center">
        <img src="/img/product/lt/gv.jpg" alt="統一發票管理系統" loading="lazy" class="img-fluid">
      </figure>
    </div>
  </section>
  <section class="bg-gray" id="erp">
    <div class="container text-center">
      <h2 class="h3">GV 結合 eGUI 讓 ERP 無痛升級電子發票</h2>
      <hr>
      <div class="text-center d-none d-md-block">
        <img class="img-fluid mb-3" src="/img/product/gv/gv-erp.png" alt="ERP使用者">
      </div>
      <div class="mb-3 d-block d-md-none">
          <div class="p-3 bg-blue color-white">Oracle ERP 使用者</div>
          <span class="arrow color-blue">↓</span>
          <p class="border border-primary text-left">eGUI 可直接與 GUI / VAT 系統同步，當統一發票系統產生電子發票及折讓資料時，同步產生至 eGUI 系統，自動上傳財政部電子發票整合平台。</p>
          <span class="arrow color-blue">↑</span>
          <div class="p-3 bg-blue color-white">其他 ERP 使用者</div>
          <span class="arrow color-blue">↓</span>
          <p class="border border-primary text-left">透過 .NET 版 eGUI 電子發票系統之介面 Table，客戶可自行將其 ERP 中的發票及折讓資料置入介面 Table 定期轉入，無縫銜接 ERP 系統。</p>
      </div>
      <div class="text-center mt-3"><a href="/products/egui/" class="btn btn-info color-white panel-title">我需要電子發票系統無痛升級</a></div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

