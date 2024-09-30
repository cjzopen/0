<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='AML 洗錢防制解決方案 - 資通電腦';
$page['description']='遵守洗錢防制和CFT的法律規定！銀行、保險、證券、金融機構及金流相關產業可透過 AML 的 KYC 實名認證機制，審查身分、風險評估，以防範金融詐欺。';
// $page['ogimage']='https://www.ares.com.tw/img/product/aml/structure.jpg';
$page['canonical']='https://www.ares.com.tw/products/aml/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
<style>
section{
  --green:#00434C;
}
.color-green{
  color:var(--green);
}
.bg-green{
  background-color: var(--green);
}
</style>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">洗錢防制解決方案</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center hr">遵守 AML 打擊資恐，強化 KYC、交易監控及通報</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>因應洗錢資恐風險變化不斷，遵守洗錢防制（Anti-Money Laundering，AML）和打擊恐怖主義融資（Combating the Financing of Terrorism，CFT）需持續精進！2021 年國家洗錢資恐及資武擴風險評估報告後，政府依照辨識出的風險持續推動各項措施，例如：加強第三方支付服務業的監理。2024 年將有新一次的風險評估，原本已經導入系統的金融機構，或可能被納入範圍的金融新創公司，會面臨新的監理挑戰！</p>
          <p>銀行、金融機構及金流相關產業必須透過 KYC（Know Your Customer）客戶審查流程，了解客戶的身份背景、交易行為以防範欺詐，並且監督帳戶持有人；當帳戶有可疑行為發生時，則須主動回報執法機關，以防範重大犯罪者透過各種金融犯罪獲得鉅額利潤與不法利益。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img class="img-fluid" loading="lazy" width="372" height="245" src="/img/product/aml/siron-icon.png" alt="*">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="black-color underline h2">為何需要 AML 洗錢防制？</h2>
          <p>透過分散式服務設計架構能靈活地因應現今各銀行、保險、證券、金融機構及金流相關產業現況。面對不斷更新的金融犯罪方式下，協助相關產業進行預測、檢核與流程管理，並以最具成本效益的方式改善管理流程，符合內部控制程序，遵循國際反洗錢法規要求。</p>
          <p>適用產業：銀行、保險、證券、虛擬資產、線上遊戲、電子支付、外籍移工匯兌、第三方支付服務…等產業。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-0">
    <div class="container">
      <h2 class="text-center hr">ARESPFC（ARES Prevent Financial Crimes）洗錢防制系統模組</h2>
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 mt-3">
          <div class="h-100 rounded p-4" style="background-color:#F3F4F4;">
            <div class="text-center"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/aml/why-1.svg" alt="*"></div>
            <div class="text-center color-green h5 mb-1 mt-3">KYC 客戶審查模組</div>
            <div class="">客戶盡職調查及客戶開戶、定審與加強審查、即時風險評級框架。</div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
          <div class="h-100 rounded p-4" style="background-color:#F3F4F4;">
            <div class="text-center"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/aml/why-2.svg" alt="*"></div>
            <div class="text-center color-green h5 mb-1 mt-3">電文掃描模組</div>
            <div class="">即時解析 SWIFT／RTGS 電文。</div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
          <div class="h-100 rounded p-4" style="background-color:#F3F4F4;">
            <div class="text-center"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/aml/why-3.svg" alt="*"></div>
            <div class="text-center color-green h5 mb-1 mt-3">交易訊息掃描模組</div>
            <div class="">可針對不同格式訊息，透過參數方式解析掃描，提供即時監控。</div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
          <div class="h-100 rounded p-4" style="background-color:#F3F4F4;">
            <div class="text-center"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/aml/why-4.svg" alt="*"></div>
            <div class="text-center color-green h5 mb-1 mt-3">交易監控模組</div>
            <div class="">依態樣設置，定期執行交易監控，保留適當軌跡，以便查核與調校。</div>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
          <div class="h-100 rounded p-4" style="background-color:#F3F4F4;">
            <div class="text-center"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/aml/why-9.svg" alt="*"></div>
            <div class="text-center color-green h5 mb-1 mt-3">案件管理模組</div>
            <div class="">可自定義案件流程，搭配訊息通知，提升效率且降低作業成本。</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center hr">系統優勢</h2>
    <div class="container" role="list">
      <div class="row justify-content-center">
<?php
$thumbnail = array(
  array(
    'name' => 'KYC 審查機制與即時風險框架評級',
    'txt' => 'KYC（Know Your Customer）支援即時掃描並讓風險評等即時訊息通知給作業人員，使其接受或拒絕客戶交易，風險分類亦將客戶風險等級資訊同步到交易監控與行為監控模組，這些作業流程軌跡和紀錄都會留存供稽核使用。'
  ),
  array(
    'name' => '姓名掃描配對核心',
    'txt' => '自行開發配對核心，針對不同語系選擇配對邏輯，可配合客戶需求優化。配對核心可依照客戶量橫向擴充，彈性運用系統資源。並能搭配機器學習，降低誤報率。'
  ),
  array(
    'name' => '案件流程與案件審查',
    'txt' => '可自行定義的案件流程，搭配客戶審查、風險異動、電文訊息、交易態樣等案件特性，採用對應的審查流程，加快結案效率，節省人力成本。系統保留完整軌跡，支援稽核查核。'
  ),
  array(
    'name' => '支援即時解析 SWIFT 電文與自定義訊息',
    'txt' => '可完整解析 SWIFT／RTGS 電文，支援最新 ISO20022 格式。亦可彈性配置解析規則，支援掃描交易訊息，減少交易風險。'
  ),
  array(
    'name' => '金融合規功能完善',
    'txt' => '除支援整合商用名單資料庫外，也支援整合金融業與其他交易渠道， 如：第三方支付平台…等。'
  ),
  array(
    'name' => '待辦事項',
    'txt' => '彙整待辦事項，便於使用者快速聚焦對應案件審查覆核與任務。'
  )
);
foreach ($thumbnail as $key) {
?>
      <div class="col-12 col-md-10 mb-3 rounded" role="listitem">
        <div class="p-3 bg-green color-white h5 mb-0"><?= $key['name'] ?></div>
        <div class="p-3 bg-white border border-top-0"><?= $key['txt'] ?></div>
      </div>
<?php
}
?>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center hr">為什麼選 ARESPFC 系統？</h2>
      <div class="row">
        <div class="col-12 col-md-3 mb-3">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="130" height="130" src="/img/product/aml/why-5.svg" alt="*">
            <div class="mt-3">擁有開發團隊<br>減少導入時間</div>
          </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="130" height="130" src="/img/product/aml/why-6.svg" alt="*">
            <div class="mt-3">支援不同產業規模</div>
          </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="130" height="130" src="/img/product/aml/why-7.svg" alt="*">
            <div class="mt-3">彈性付費方式</div>
          </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="130" height="130" src="/img/product/aml/why-8.svg" alt="*">
            <div class="mt-3">完整維護服務</div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>

