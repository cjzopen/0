<?php
require $_SERVER['DOCUMENT_ROOT'].'/strac/variable.php';
$pageName = "product";
$page['title']='什麼是 KYC、AML 與 CFT|資通電腦';
$page['description']='為何銀行、保險、證券等金融機構需要 Siron® AML 洗錢防制 ? 透過 KYC 實名認證機制，遵守洗錢防制 AML 和打擊恐怖主義融資 CFT 的法律規定。';
$page['canonical']='https://www.ares.com.tw/products/siron-aml/kyc-aml-cft/';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include '../_banner.php';
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
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">洗錢防制解決方案</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">什麼是 KYC、AML 與 CFT</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('../_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center">KYC / AML 與 CFT</h1><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>為了防範重大犯罪者透過各種金融犯罪獲得鉅額利潤與不法利益，金融機構與銀行必須必須透過 KYC（Know Your Customer）實名認證機制，了解客戶的身份背景、信用狀況、交易行為以防範欺詐，並且監督帳戶持有人；當帳戶有可疑行為發生時，則須主動回報執法機關。以遵守洗錢防制（Anti-money laundering，AML）和打擊恐怖主義融資（Combating the Financing of Terrorism，CFT）的法律規定。</p>
          <div class="py-4 text-center">
            <a href="../" class="btn btn-info color-white">Siron® AML 產品介紹</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php';
?>
</body>
</html>

