<?php
$url='https://www.ares.com.tw/products/egui/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);
exit;

require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='電子發票交換與 ERP 整合|eGUI資通電腦';
$page['description']='電子計算機發票即將全面停止使用，各營業人需完成轉換使用電子發票。與 ERP 系統整合後，可透過 Turnkey 軟體上傳財政部平台節省手動開立或紙本發票寄送時間。';
$page['canonical']='https://www.ares.com.tw/products/egui/situation/';
$page['css']=array('/css/product-localtemplate.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');
include ('../_banner.php');
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
            <a href="../" itemprop="item"><span itemprop="name">eGUI</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">交換與 ERP 整合</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <aside class="gray-bg paging text-center" id="title">
      <ul>
<?php
$np='situation';
include ('../nav.php');
?>
      </ul>
    </aside>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center black-color">電子發票交換與 ERP 完整整合</h1>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <figure>
            <img class="img-responsive center-block" src="/img/product/lt/egui-icon.png" alt="電子發票">
          </figure>
          <br>
        </div>
        <div class="col-xs-12 col-sm-6">
          <p>從接收訂單到出貨，即可依據出貨單內容包含品項、單價…等資訊直接開立電子發票，並依時限將電子發票 MIG（Message Implementation Guideline；電子發票資料交換標準訊息建置指引）結合，透過 Turnkey 直接上傳財政部電子發票整合服務平台，節省傳統手動開立發票或紙本發票寄送時間。</p>
          <ul class="check block">
            <li>電子發票開立、作廢、銷貨退回、折讓功能</li>
            <li>系統管控序時序號，避免字軌號碼開立錯誤</li>
            <li>接受共通性載具索取電子發票</li>
            <li>符合多公司稅籍編號或集團需求</li>
            <li>接受經財政部公告的電子發票捐贈方式</li>
            <li>提供不同平台（網購、POS、其他 ERP）電子發票開立資料匯入</li>
            <li>採交換之電子發票可與付款系統做整合以提高驗收效率</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="gray-bg">
    <div class="container">
      <h2 class="text-center">B2B 企業如何進行電子發票交換評估</h2>
      <hr>
      <div class="card-group">
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>交換需求的難度</strong></div>
            <p class="card-body">因應交換需求的難度，可依客戶或供應商條件成熟度逐步進行 B2B 交換方式。</p>
          </div>
        </div>
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>集團對外窗口一致</strong></div>
            <p class="card-body">集團企業新公司建議使用同一套電子發票方案，做為集團的對外統一窗口，並注意資訊機密安全性。</p>
          </div>
        </div>
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>自建 Turnkey 的必要</strong></div>
            <p class="card-body">集團公司間的交易可先規劃 B2B 發票交換上線，但考量機密性，應注意是否要採用自建 Turnkey 方式。</p>
          </div>
        </div>
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>進銷項發票交換</strong></div>
            <p class="card-body">進（銷）項發票交換重點在與供應商協議判讀資訊的傳遞，能否有效通知適當處理人員啟動請款程序。</p>
          </div>
        </div>
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>發票量及廠商要求</strong></div>
            <p class="card-body">發票量大或是需因應上下游客戶廠商的要求時，使用自建 Turnkey 方案，會較方便與 ERP 整合。</p>
          </div>
        </div>
        <div class="card fff-bg">
          <div class="card-border">
            <div class="card-head text-center"><strong>發票交易多通路</strong></div>
            <p class="card-body">使用自建 Turnkey 平台，可支援實體門市 POS 系統、網路虛體店面系統，讓資訊整合更便利。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="promote">
    <div class="container">
      <h2 class="text-center black-color">110 年需完成電子發票轉換</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-md-10 col-md-push-1">
          <p>根據財政部「電子發票實施作業要點」修正條文，規定「買受人依第十八點第一項第四款取得開立人提供之電子發票證明聯或銷貨退回、進貨退出或折讓證明單」，此規定實施期限將至民國 110 年 12 月 31 日終止，屆時 B2B 企業廠商間的電子發票或折讓單均將全面採電子交換模式，不再以存證模式寄送電子發票證明聯紙本或 Email 夾帶電子發票證明聯檔案附件完成交付。正式宣告即將進入電子發票交換時代，呼籲企業廠商應該儘早思考準備因應相關規定。</p>
        </div>
      </div>
      <br><br>
      <div class="flex-box text-center" id="circle">
        <div class="circle flex-box flex-vc">
          <span>$540,000</span>
          <p>每年成本節省</p>
        </div>
        <div class="circle flex-box flex-vc">
          <span>2 名</span>
          <p>每年平均人力節省</p>
        </div>
        <div class="circle flex-box flex-vc">
          <span>$37,500</span>
          <p>每月郵寄費用節省</p>
        </div>
      </div>
      <br>
      <div class="text-center"><small>( 資料來源：財政部北區國稅局網站 )</small></div>
    </div>
  </section>
  <section class="gray-bg" id="contact">
    <h2 class="text-center">產品諮詢</h2>
    <hr>
<?php
$eventsConsult="../consult/";
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
</body>
</html>

