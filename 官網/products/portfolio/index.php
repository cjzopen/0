<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='TMU必備金融商品投資組合管理系統 - 資通電腦';
$page['description']='投資組合管理系統可即時評價、不需專業語法、支援多種商品，有效提升TMU作業效率，強化業務風險控管，是符合金融行銷業務單位的創新投資管理系統。';
$page['canonical']='https://www.ares.com.tw/products/portfolio/';
// $page['css']=array('/css/product-portfolio.css');
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
            <a href="" itemprop="item"><span itemprop="name">投資組合管理系統</span></a>
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
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img src="/img/product/portfolio/portfolio.png" alt="portfolio" class="img-fluid" width="305" height="193" loading="lazy">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">投資組合管理系統</h2>
          <p class="justify">為因應台灣金融市場的國際化與銀行金融商品不斷創新成長的需求，資通推出一套更符合金融行銷業務單位（Treasury Marketing Unit; TMU）的創新投資組合管理系統，系統之圖型工具更涵蓋國內外主要匯利率，債劵與衍生性等金融商品。能協助金融產品行銷規劃與訂定市場策略攻勢，更能全面性評估衍生性商品業務，有效提昇 TMU 作業效率，強化業務風險控管，讓您輕鬆在金融產業脫穎而出，搶奪市場商機。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">一般金融評價系統常見問題</h2>
      <hr>
      <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-4">
            <div class="p-3 color-white bg-blue">特殊商品問題</div>
            <div class="p-3 border border-top-0 bg-white">
              <ul class="disc">
                <li>無法處理快速變化的新種商品，只支援特種商品</li>
                <li>無法登錄與試算系統不支援的商品</li>
                <li>新種商品推出時，無法立即導入</li>
                <li>對於少見商品，上述調整效益不高</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-10 col-lg-4">
            <div class="p-3 color-white bg-blue">時效性問題</div>
            <div class="p-3 border border-top-0 bg-white">
              <ul class="disc">
                <li>無法立即擴充系統做登錄</li>
                <li>無法立即試算評價</li>
                <li>無法立即調整評價模型</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-10 col-lg-4">
            <div class="p-3 color-white bg-blue">專業語法問題</div>
            <div class="p-3 border border-top-0 bg-white">
              <ul class="disc">
                <li>高階系統雖可擴充但須學習專業語法</li>
                <li>專業語法支援的情境有限</li>
                <li>專業語法不支援新種商品登錄</li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">產品特色</h2><hr>
      <div class="row">
        <!-- <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img src="/img/product/portfolio/visualpricingtool.png" alt="*" class="img-fluid">
        </div> -->
        <div class="col-12 col-md-6 mb-5">
          <h3 class="underline mb-3">快速、智慧、圖形化金融商品工具</h3>
          <p>損益條件參數設定、圖形介面，快速了解商品全貌！<br>即時評價及運算市場風險！</p>
          <a href="http://portfolio.ares.com.tw/Visual-Pricing-Tool/" class="btn btn-info" rel="external">前往視覺化圖型工具</a>
        </div>
        <div class="col-12 col-md-6">
          <h3 class="underline mb-3">支援 CB & ECB 評價作業</h3>
          <p>商品契約條件設定，支援多樣可轉債與海外可轉債評價，如加入買回權利與賣回權利、美式、歐式與百慕達式、trigger 條件等。可計算希臘字母、敏感度分析等，評價速度快速。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">產品功能</h2>
      <hr>
      <div class="row justify-content-center">
        <ul class="col-12 col-md-9 p-3 check">
          <li>支援多種商品評價作業</li>
          <li>快速執行評價試算與擴充</li>
          <li>有效支援前台銷售作業</li>
          <li>交易系統 STP（直通式處理；Straight Through Processing）自動化作業</li>
          <li>
          資通專業服務
          <ul class="disc">
            <li>評價機制導入</li>
            <li>衍生性商品顧問諮詢</li>
            <li>投資組合管理分析</li>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">產品效益</h2>
    <hr>
    <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="rounded bg-white h-100">
          <div class="bg-blue3 p-3 color-white text-center">多樣</div>
          <div class="p-3">
            <div class="text-center"><img src="/img/product/portfolio/benefit-1.svg" alt="多樣" class="img-fluid"></div>
            <ul class="decimal">
            <li>KYP（know your product）充分了解新種商品定價與風險樣貌</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="rounded bg-white h-100">
          <div class="bg-blue3 p-3 color-white text-center">快速</div>
          <div class="p-3">
            <div class="text-center"><img src="/img/product/portfolio/benefit-2.svg" alt="快速" class="img-fluid"></div>
            <ul class="decimal">
            <li>直覺式畫圖及參數操作，無需學習特別工具語法</li>
            <li>縮短金融商品開發上市時程達 50% 以上</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="rounded bg-white h-100">
          <div class="bg-blue3 p-3 color-white text-center">有效</div>
          <div class="p-3">
            <div class="text-center"><img src="/img/product/portfolio/benefit-3.svg" alt="有效" class="img-fluid"></div>
            <ul class="decimal">
            <li>可重複編輯商品範本，支援 TMU 商品銷售推廣</li>
            <li>型態圖型繪製即產生拆解邏輯，自動整入交易系統</li>
            </ul>
          </div>
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

