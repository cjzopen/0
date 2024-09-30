<?php
http_response_code(301);
header('Location: https://www.ares.com.tw/products/aml/');
exit;

require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Siron® AML 洗錢防制解決方案 - 資通電腦';
$page['description']='遵守洗錢防制和CFT的法律規定！銀行、保險、證券、金融機構及金流相關產業可透過 Siron® AML 的 KYC 實名認證機制，審查身分、風險評估，以防範金融詐欺。';
$page['ogimage']='https://www.ares.com.tw/img/product/aml/structure.jpg';
$page['canonical']='https://www.ares.com.tw/products/siron-aml/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');
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
      <h1 class="text-center">遵守 AML 打擊資恐，強化 KYC、交易監控及通報</h1><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>遵守洗錢防制（Anti-money laundering，AML）和打擊恐怖主義融資（Combating the Financing of Terrorism，CFT）的法律規定勢在必行！銀行、金融機構及金流相關產業必須透過 KYC（Know Your Customer）實名認證機制，了解客戶的身份背景、信用狀況、交易行為以防範欺詐，並且監督帳戶持有人；當帳戶有可疑行為發生時，則須主動回報執法機關，以防範重大犯罪者透過各種金融犯罪獲得鉅額利潤與不法利益。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img class="img-fluid" loading="lazy" src="/img/product/aml/siron-icon.png" alt="*">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="black-color underline h2">為何需要 Siron® AML 洗錢防制？</h2>
          <p>透過模組化設計能靈活地因應現今各銀行、保險、證券、金融機構及金流相關產業現況。面對不斷更新的金融犯罪方式下，協助相關產業進行預測、檢核與流程管理，並以最具成本效益的方式改善管理流程，符合內部控制程序，遵循國際反洗錢法規要求。</p>
          <p>適用產業：銀行、保險、證券、銀樓、律師、會計師、虛擬資產、線上遊戲、電子支付、不動產經紀、外籍移工匯兌…等產業。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">反洗錢系統帶來什麼效益？</h2>
      <hr>
      <p>Siron® 反洗錢、反詐騙金融犯罪解決方案已歷經數十年的市場實戰淬煉，藉此不斷地讓功能更趨完善，因此能夠因應全球與各國的主管機關要求。像是台灣金管會、美國財政部金融犯罪防制署（Financial Crimes Enforcement Network，FinCEN）、歐盟的第四部反洗錢指令（the Fourth Anti-Money Laundering Directive），以及 FATF 40+9 項建議（Financial Action Task Force，防制洗錢金融行動工作組織）等法規。加上資通電腦 <?= $age ?> 年的金融產業導入與顧問深厚經驗，以及 Siron® 解決方案 TCO（Total Cost of Ownership）總體成本較低的優勢，可幫助金融業法遵總體成本下降 50％ 到 70％。</p>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">系統模組</h2>
    <hr>
    <div class="container" role="list">
    <div class="row">
      <div class="col-12 col-md-4 mb-3">
        <div class="rounded bg-white h-100 text-center border" role="listitem">
        <div class="bg-blue3 color-white h4 mb-0 pb-3">
          <div aria-hidden="true" class="mb-n3"><img loading="lazy" width="100" height="100" src="/img/product/aml/siron-1.svg" alt="*"></div>
          <span>Siron® KYC</span></div>
        <div class="p-3">客戶盡職調查 CDD 及客戶開戶、定審與加強客戶審查 EDD、即時風險評級框架<br><a href="/products/kyc-cloud/" class="btn btn-warning">尋找簡易版雲端 KYC 掃描系統 &raquo;</a></div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="rounded bg-white h-100 text-center border" role="listitem">
        <div class="bg-blue3 color-white h4 mb-0 pb-3">
          <div aria-hidden="true" class="mb-n3"><img loading="lazy" width="100" height="100" src="/img/product/aml/siron-2.svg" alt="*"></div>
          <span>Siron® AML</span></div>
        <div class="p-3">客戶或理專各式行為樣態之交易監控、金流活動關聯分析</div>
        <div class="d-flex justify-content-between px-3 pb-3">
          <a href="https://marketing.ares.com.tw/newsletter/2021-11-fortify/siron-aml-internal-fraud" rel="noopener noreferrer" target="_blank" class="btn btn-warning">理專 21 誡是？ &raquo;</a><a href="https://marketing.ares.com.tw/newsletter/2021-12-osc/siron-aml-internal-fraud" rel="noopener noreferrer" target="_blank" class="btn btn-warning">如何因應 21 誡 &raquo;</a>
        </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="rounded bg-white h-100 text-center border" role="listitem">
        <div class="bg-blue3 color-white h4 mb-0 pb-3">
          <div aria-hidden="true" class="mb-n3"><img loading="lazy" width="100" height="100" src="/img/product/aml/siron-3.svg" alt="*"></div>
          <span>Siron® EMB</span></div>
        <div class="p-3">即時解析 SWIFT 電文<br><br><a href="https://marketing.ares.com.tw/newsletter/2022-04-bnk/siron-embargo-swift" class="btn btn-warning" rel="noopener noreferrer" target="_blank">應對 SWIFT 新標準 &raquo;</a></div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="rounded bg-white h-100 text-center border" role="listitem">
        <div class="bg-blue3 color-white h4 mb-0 pb-3">
          <div aria-hidden="true" class="mb-n3"><img loading="lazy" width="100" height="100" src="/img/product/aml/siron-4.svg" alt="*"></div>
          <span>Siron® RCC</span></div>
        <div class="p-3">作業風險與法遵管理動態儀錶板</div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="rounded bg-white h-100 text-center border" role="listitem">
        <div class="bg-blue3 color-white h4 mb-0 pb-3">
          <div aria-hidden="true" class="mb-n3"><img loading="lazy" width="100" height="100" src="/img/product/aml/siron-5.svg" alt="*"></div>
          <span>Siron® AI</span></div>
        <div class="p-3">智慧進階分析可疑預測與智慧監控</div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">系統優勢</h2>
    <hr>
    <div class="container" role="list">
      <div class="row justify-content-center">
<?php
$thumbnail = array(
  array(
    'name' => 'KYC 實名認證機制即時風險框架評級',
    'txt' => 'KYC（Know Your Customer）支援即時掃描並讓風險評等即時訊息通知給法遵人員，使其接受或拒絕客戶交易，風險分類同時亦會自動將客戶交易資訊轉到反洗錢模組內檢核，這些作業流程軌跡和紀錄都會留存供稽核使用。'
  ),
  array(
    'name' => 'KYC 支援 Unicode 萬國碼',
    'txt' => '符合台灣需求，提供多國語言（包括英語、繁體中文和簡體中文等）進行檢核。快速處理大量名單，支援多條件下的快速掃描。'
  ),
  array(
    'name' => 'AML 洗錢防制金流動態關聯分析圖',
    'txt' => '<figure><figcaption>系統彙整各式交易資訊後會產生視覺化分析，方便使用者檢視所有金流動向，客戶或銀行交易對手間的關係和行為模式。</figcaption><a href="/img/product/aml/aml.png" data-fancybox><img class="img-fluid" loading="lazy" width="300" height="188" src="/img/product/aml/aml-s.png" alt="分析圖"></a></figure>'
  ),
  array(
    'name' => '案例管理和 SAR / STR 疑似洗錢警報報告書',
    'txt' => '系統完整記錄各式資訊以及後續作業流程，可自動產生電子文件協助使用者撰寫報告或建立疑似洗錢警報 SAR / STR（Suspicious Activity Report，可疑活動申報／Suspicious Transaction Report，可疑交易申報）。'
  ),
  array(
    'name' => '支援即時解析 SWIFT 電文',
    'txt' => '支援所有收件人或發件人電文資料與國家和國際制裁名單的即時掃描，支援處理 SWIFT 電文（含最新 ISO20022）。'
  ),
  array(
    'name' => '法遵彈性管理，有效降低誤判率',
    'txt' => '平台共用管理、歸納所有模組的資訊於一個帳戶下統一管理，有效降低誤判率。若是搭配動態儀錶板模組更能監測誤判率和管理法遵風險的覆蓋率，透過視覺化圖形能有效分析交易和法規執行管理。'
  ),
  array(
    'name' => '支援模擬情境',
    'txt' => '架構可用來建立模擬環境，真實資料的正式環境模擬，即時反應給使用者獲得調校參數後的影響與效益（Multi-tenant allows for real data simulation）。'
  ),
  array(
    'name' => '可擴充 AI 人工智慧模組',
    'txt' => '在面對演變莫測的可疑交易行為中，無監督與受監督的二種 AI 學習模型可協助銀行做預測分析與提前防範的管理措施。'
  )
);
foreach ($thumbnail as $key) {
?>
      <div class="col-12 col-md-10 mb-3 rounded" role="listitem">
        <div class="p-3 bg-blue color-white h5 mb-0"><?= $key['name'] ?></div>
        <div class="p-3 bg-white border border-top-0"><?= $key['txt'] ?></div>
      </div>
<?php
}
?>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">系統架構</h2>
    <hr>
    <figure class="container text-center">
      <a href="/img/product/aml/structure.jpg" data-fancybox>
        <img class="img-fluid" loading="lazy" src="/img/product/aml/structure.jpg" alt="洗錢防制解決方案系統架構" width="1714" height="1131">
      </a>
    </figure>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>

