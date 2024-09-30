<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='eAresBank 銀行海外分行核心系統 Core Banking System - 資通電腦';
$page['description']='即時線上作業，整合消費金融與企業金融，銜接SWIFT全球連線系統，加上Treasury應用，使銀行快速獲得決策資訊，以因應海外拓點發展需求';
$page['canonical']='https://www.ares.com.tw/products/eAresBank/';
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">eAresBank</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
    <aside class="bg-gray paging text-center" id="title">
      <ul>
<?php
include (__DIR__.'/_nav.php');
?>
      </ul>
    </aside>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center h2">海外分行核心系統</h1>
      <hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>eAresBank 海外分行核心系統（Core Banking System）為銀行海外據點整合國際金融業務的要求及商業銀行的功能，採線上即時作業模式，快速整合消費金融（Retail Banking）與企業金融（Wholesale Banking）業務，並可銜接環球銀行金融電信協會（SWIFT）的全球連線系統。系統功能完整、穩定，且能簡化作業流程，使銀行快速獲得決策資訊，強化國際競爭力。</p>
          <p>資通電腦深耕金融業務近 40 年，豐富的整合經驗及充沛的技術資源，是金融同業佈局海外分行的最佳夥伴。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-blue bg-fixed bg-lazyload" data-image="/img/Taiper101.png">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-md-6"></div>
        <div class="col-12 col-md-6 color-white py-5">
          <h2 class="underline mb-3 border-white">eAresBank 列入 Gartner 研究報告</h2>
          <p class="py-4">資通電腦被列入 Gartner 針對亞洲核心銀行系統進行的研究報告 “A Banker's Guide to Asian Core Banking Solutions”。是台灣唯一列舉在內的本土企業。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>金融客戶經驗遍布全球</h2>
      <hr>
      <picture>
        <source srcset="/img/product/earesbank/root.webp" type="image/webp">
        <img id="map-root" src="/img/product/earesbank/root.jpg" class="img-fluid" width="1072" height="544" loading="lazy" alt="eAresBank客戶分佈遍布世界">
      </picture>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
      <h2>系統架構圖</h2>
      <hr>
      <figure>
        <img class="img-fluid" src="/img/product/earesbank/structure.png" loading="lazy" width="951" height="400" alt="earesbank structure">
      </figure>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>優勢與效益</h2>
      <hr>
      <ul class="row">
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/benefits-1.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">包含 Wholesale（企金）<br>與 Retail（消金）業務</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/benefits-2.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">包含 Treasury 應用</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/benefits-3.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">銜接 SWIFT 全球連線系統</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/benefits-4.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">支援多語系即時線上作業</div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
      <h2>為何選擇 eAresBank</h2>
      <hr>
      <ul class="row">
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/roi-1.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">縮短開發時間</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/roi-2.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">降低折舊費用</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/roi-3.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">彈性付費方式</div>
        </li>
        <li class="col-12 col-md-6 col-lg-3 wow fadeInLeft">
          <div class="circle-icon bg-primary">
            <img src="/img/product/earesbank/roi-4.svg" alt="*" loading="lazy" width="60" height="60">
          </div>
          <div class="h5 color-blue">完整售後服務</div>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">海外分行核心系統帶來什麼效益？</h2>
      <hr>
      <ul class="check">
        <li>降低交易與新增需求回覆時間</li>
        <li>提高瞬間處理交易量</li>
        <li>可支援多指定外匯分行與多海外分行營運</li>
        <li>擴充能力高及所需準備時間低（擴充兩倍只需 6 個月）</li>
        <li>新平台當機機率為 2% / 年</li>
        <li>計劃性停機時間頻率低</li>
        <li>降低系統回復正常所需時間小於 4 小時</li>
      </ul>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

