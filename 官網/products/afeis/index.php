<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='金融銀行國內外匯電腦整合系統 - 資通電腦';
$page['description']='涵蓋存匯與進出口、放款銀行及交易室各項業務。可簡單迅速處理分行關帳作業、自動排程批次作業、自動產生批次報表等國內外匯業務需求，並可直接整合 SWIFT 全球連線系統。';
$page['canonical']='https://www.ares.com.tw/products/afeis/';
$page['css']=array('/css/product-afeis.css');
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">AFEIS</span></a>
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
      <h2 class="text-center">國內外匯電腦整合系統</h2>
      <hr>
      <div class="row justify-content-center">
        <p class="col-12 col-md-8">金融國際化已為必然趨勢，銀行業者現今面臨的是跨國界、跨領域全方位的競爭。一套功能完整、穩定且延伸性強的資訊系統可以幫助銀行增加獲利能力，脫穎而出。資通電腦研發的 AFEIS（Advanced Foreign Exchange Integrated System，國內外匯電腦整合系統）操作容易，在管理性及整合性作業上可以充分配合銀行實際需求，有效提昇作業效率與風險控管，是銀行面對國際化的最佳競爭利器。</p>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img src="/img/product/afeis/afeis.png" alt="afeis image" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">功能完善高度整合，可銜接 SWIFT 系統</h2>
          <br>
          <p>資通電腦所研發的 AFEIS 國內外匯電腦整合系統為一功能完整之外匯業務系統，涵蓋消費金融（Retail banking）與企業金融（Wholesale banking）之各項業務，採用物件導向設計概念，可建構於多種主機平台；穩定且延伸性強的系統特性，不但能和銀行現有系統結合，保障既有投資，也能與未來業務系統介面輕易整合，並可銜接環球銀行金融電信協會（SWIFT）之全球連線系統，是微利時代銀行的競爭利器。</p>
        </div>
      </div>
      <div class="text-right">
        <a href="https://marketing.ares.com.tw/newsletter/2014-11-afeis/products-1" class="btn btn-info">外匯系統如何應用？</a>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">為何選擇 AFEIS 外匯系統？</h2>
      <hr>
        <div class="accordion row" id="accordionExample">
          <div class="card border-0 col-12 col-md-6 mb-3">
            <div class="card-header bg-blue" id="heading1">
              <h3 class="mb-0">
                <button class="btn btn-block color-white h5 m-0 text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">技術面</button>
              </h3>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
              <div class="card-body border border-top-0">
                <ul class="disc">
                  <li>兼具套裝軟體之優點與專案開發之彈性</li>
                  <li>支援多種主機作業平台（RS/6000AIX、NT AS400）</li>
                  <li>支援各種網路系統</li>
                  <li>支援 Windows 工作站作業環境</li>
                  <li>能與各類之 SWIFT 系統連線（Alliance、MERVA）</li>
                  <li>採用物件導向（Object-Oriented）之設計概念</li>
                  <li>GUI 採用高移植性之 Java 開發工具</li>
                  <li>報表系統採用延伸性高之 Crystal Report 系統</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0 col-12 col-md-6 mb-3">
            <div class="card-header" id="heading2">
              <h3 class="mb-0">
                <button class="btn btn-block color-white h5 m-0 text-left" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">產品面</button>
              </h3>
            </div>
            <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordionExample">
              <div class="card-body border border-top-0">
                <ul class="disc">
                  <li>專業團隊提供客製化服務</li>
                  <li>視窗輔助查詢功能，操作容易</li>
                  <li>自動化作業，操作效率高、節省人力</li>
                  <li>簡單迅速之分行關帳作業</li>
                  <li>自動排程之批次作業</li>
                  <li>自動產生之批次報表</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0 col-12 col-md-6 mb-3">
            <div class="card-header" id="heading3">
              <h3 class="mb-0">
                <button class="btn btn-block color-white h5 m-0 text-left" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">業務面</button>
              </h3>
            </div>
            <div id="collapse3" class="collapse show" aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body border border-top-0">
                <ul class="disc">
                  <li>功能齊全之外匯業務系統，滿足各業務之需求</li>
                  <li>一應俱全之分行系統，滿足各類型營業單位之需求</li>
                  <li>SWIFT 電文、水單、單據、會計帳務伴隨交易自動產生</li>
                  <li>交易員直接擷取 SWIFT 電文資料，減少人工輸入的錯誤</li>
                  <li>嚴謹周密之安全控管</li>
                  <li>即時完整之額度控管，包括客戶、國家、交易對手、債券發行者及交易員之額度控管</li>
                  <li>全行部位控管，提供交易員全行即時部位資訊供參考</li>
                  <li>全行資金流量之控管，提高交易員資金調度之彈性</li>
                  <li>交易連動交割預售及匯率議價，省卻人工輸入時間</li>
                  <li>管理性統計資料之提供，延伸性強</li>
                  <li>符合央行規格之水單編輯及檢核功能</li>
                  <li>央行媒體申報之處理</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0 col-12 col-md-6 mb-3">
            <div class="card-header" id="heading4">
              <h3 class="mb-0">
                <button class="btn btn-block color-white h5 m-0 text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">整合面</button>
              </h3>
            </div>
            <div id="collapse4" class="collapse show" aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body border border-top-0">
                <ul class="disc">
                  <li>即時連動主機與台外幣系統整合，包括客戶、額度、存款等等，整合度最高</li>
                  <li>可與匯利率看板即時連動</li>
                  <li>可與路透社連線，擷殾即時之市場匯利率</li>
                  <li>可擴充新種業務或衍生性商品，延伸性強</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0 col-12 col-md-6 mb-3">
            <div class="card-header" id="heading5">
              <h3 class="mb-0">
                <button class="btn btn-block color-white h5 m-0 text-left" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">技術支援</button>
              </h3>
            </div>
            <div id="collapse5" class="collapse show" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body border border-top-0">
                <ul class="disc">
                  <li>經驗豐富的本土研發團隊，提供專業且符合客戶需求之客製化服務</li>
                  <li>專責之業務負責人，提供完整之規劃及服務</li>
                  <li>SWIFT 台灣區唯一之 Business & Service partner，提供建置及整合導入經驗</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
      <h2>系統架構圖</h2>
      <hr>
      <figure>
        <img class="img-fluid" loading="lazy" src="/img/product/afeis/structure.png" alt="afeis structure">
      </figure>
    </div>
  </section>
  <section>
    <h2 class="text-center">參考客戶</h2>
    <hr>
    <div class="container text-center">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/ABT.png" alt="全國農業金庫">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/obank.png" alt="王道銀行">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/taiwanpost.png" alt="中郵">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/wataibank.png" alt="萬泰">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/KTB.png" alt="京城銀行">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/bankofpanhsin.png" alt="板銀">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/bankoftaiwan.png" alt="瑞興">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/Cucb.png" alt="國泰世華">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 mb-3 wow fadeInLeft">
        <div class="border rounded p-3">
        <img class="img-fluid" loading="lazy" width="200" height="80" src="/img/product/afeis/kgi.png" alt="凱基商銀（原萬泰商銀）">
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

