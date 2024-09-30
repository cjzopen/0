<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='原始保證金解決方案 ISDA SIMM - 資通電腦';
$page['description']='ISDA SIMM 運用全球共同一致的保證金合規規範標準 SIMM CRIF，協助銀行中台交易員與風控管理者做出最佳投資決策，減少銀行交易保證金成本，提高營業利潤。';
$page['ogimage']='https://www.ares.com.tw/img/product/ISDA-SIMM/structure.png';
$page['canonical']='https://www.ares.com.tw/products/ISDA-SIMM/';
// $page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>

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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">ISDA SIMM</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
  <div itemscope itemtype="https://schema.org/FAQPage">
  <section itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    <div class="container">
      <h1 class="h2 text-center" itemprop="name">什麼是 ISDA SIMM 原始保證金規範合規？</h1><hr>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="row" itemprop="text">
          <div class="col-12 col-md-6">
            <div class="d-flex align-items-center">
              <img class="flex-shrink d-none d-md-inline" width="120" height="120" loading="lazy" src="/img/product/ISDA-SIMM/what-1.svg" alt="*">
              <p>根據 BCBS（Basel Committee on Banking Supervision，巴塞爾銀行監管委員會）和 IOSCO（International Organization of Securities Commissions，國際證券管理機構組織）公告，金融機構需於 109 年 9 月 1 日前按 AANA（Aggregate Average Notional Amounts，平均名義數額總額）規模大小，分階段實施原始保證金規範之合規。</p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="d-flex align-items-center">
              <img class="flex-shrink d-none d-md-inline" width="120" height="120" loading="lazy" src="/img/product/ISDA-SIMM/what-2.svg" alt="*">
              <p>因此 ISDA （International Swaps and Derivatives Association，國際交換交易暨衍生性商品協會）提出一套交易資料必須遵循的輸入通用標準 SIMM™ CRIF（Common Risk Interchange Format），讓原始保證金合規有所依據，並核發符合其合規依據之廠商 ISDA SIMM™（Standard Initial Margin Model，SIMM Model，標準原始保證金模型）商用服務廠商資格認證。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray bg-lazyload" data-image="/img/product/ISDA-SIMM/bg-1.jpg" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-7">
          <h2 class="underline d-inline-block" itemprop="name">符合原始保證金監管要求 應採取哪些步驟？</h2>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div itemprop="text">
              <p class="py-4">金融機構除了檢視 AANA 平均名義數額總額，並向交易對手揭露相關資訊外，尚須採取以下符合原始保證金監管要求實施步驟：</p>
              <ol class="color-blue disc">
                <li>確認集團內適用原始保證金規範的組織。</li>
                <li>提前向交易對象進行揭露。</li>
                <li>交換合規資訊。</li>
                <li>辨別特殊情況。</li>
                <li>與保管行建立關係。</li>
                <li>做好合規準備。</li>
                <li>文件磋商與簽署。</li>
                <li>備妥軟體與人力準備上線。</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img src="/img/product/ISDA-SIMM/ISDASIMM.png" alt="*" loading="lazy" width="362" height="238" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">ISDA SIMM™ 原始保證金解決方案</h2>
          <p class="py-4">資通電腦 ISDA SIMM™ 原始保證金解決方案，適用於所有「非集中結算衍生性商品交易」，通過 ISDA SIMM™ 商用服務資格認證，運用全球共同一致的「保證金規範標準」SIMM™ CRIF（Common Risk Interchange Format）。</p>
          <ul class="disc">
            <li>協助銀行中台交易員與風控管理者做出最佳投資決策。</li>
            <li>減少銀行交易保證金成本、提高營業利潤。</li>
            <li>降低未清算交易部位的風險。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
      <h2>產品架構</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <img src="/img/product/ISDA-SIMM/structure.png" alt="*" loading="lazy" width="850" height="387" class="img-fluid px-lg-4">
        </div>
      </div>
    </div>
  </section>
  <section class="bg-lazyload" data-image="/img/product/ISDA-SIMM/bg-2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5">
          <h2 class="underline">可服務金融產品類型</h2>
          <ul class="color-blue disc mt-4 py-4">
            <li><span class="color-black">Interest Rate 利率</span></li>
            <li><span class="color-black">FX 外匯</span></li>
            <li><span class="color-black">Equity 權益（含單一標的與指數）</span></li>
            <li><span class="color-black">Credit 信用（含單一標的與指數）</span></li>
            <li><span class="color-black">Commodity 商品</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray bg-lazyload" data-image="/img/product/ISDA-SIMM/bg-3.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6"></div>
        <div class="col-12 col-md-6">
          <h2 class="underline">服務項目</h2>
          <ul class="color-blue disc mt-4">
            <li><span class="color-black">CRIF input format 導入</span></li>
            <li><span class="color-black">敏感度因子計算（delta、gamma 等）</span></li>
            <li><span class="color-black">IM 計算與 PnL 的回朔測試</span></li>
            <li><span class="color-black">ISDA Historical VaR 計算</span></li>
          </ul>
          <div class="color-blue">
            <h3>加值服務</h3>
            <ul class="disc">
              <li>交易前試算 IM</li>
              <li><a class="border-bottom border-info" href="https://www.ares.com.tw/products/cross-pricing/">衍生性金融商品商品評價模型</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" async></script> -->
</body>
</html>

