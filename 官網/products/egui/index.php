<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Turnkey 電子發票系統 eGUI - 資通電腦';
$page['description']='資通電子發票系統使用財政部 Turnkey 軟體技術，自動上傳至財政部電子發票整合服務平台，支援 Oracle、SAP 或其他廠牌 ERP 用戶，B2B 電子發票可隨時採交換模式，不必更換解決方案。';
$page['canonical']='https://www.ares.com.tw/products/egui/';
$page['css']=array('/css/product-egui.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include ('_banner.php');
?>
<svg class="hide d-none" aria-hidden="true">
  <defs>
    <symbol viewBox="0 0 32 32" id="q">
      <circle fill="#024079" cx="16" cy="16" r="15.5"></circle>
      <text fill="#fff" x="9" y="21">Q</text>
    </symbol>
  </defs>
</svg>
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">eGUI</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center" id="title">
      <ul>
<?php
$np='index';
include ('nav.php');
?>
      </ul>
    </div>
  </aside>
  <section>
    <div class="container">
      <div class="row">
      <div class="col-12 col-md-6 text-center d-none d-md-block">
        <img class="img-fluid center-block" loading="lazy" width="380" height="380" src="/img/product/lt/egui-image.png" alt="電子發票">
      </div>
      <article class="col-12 col-md-6">
        <h1 class="underline black-color mb-3">eGUI 電子發票管理系統</h1>
        <p>eGUI（Electronic Government Uniform Invoice；電子發票管理系統）使用 Turnkey 技術，將電子發票 / 電子折讓資料自動傳遞至財政部電子發票整合服務平台，避免公司、客戶與供應商之機密交易資料經手第三方，確保資料安全性。</p>
        <p>支援 Oracle、SAP 及其他 ERP 系統，電子發票開立方式包含交換與存證二種模式，能自動連接 GV（GUI / VAT；統一發票 / 媒體申報管理系統）達到即時、便利與資訊的整合。</p>
        <p><a class="text-danger" href="https://law.moj.gov.tw/LawClass/LawSingle.aspx?pcode=G0340082&flno=32" rel="noopener noreferrer" target="_blank">＊統一發票使用辦法最後截止日期為 2020 年 12 月 31 日</a></p>
      </article>
      </div>
    </div>
    <!-- <div id="summary" style="margin-bottom: -2rem"></div>定位用 -->
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">電子發票系統四大特色</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-12 col-md-4 order-md-1">
          <div class="mb-3">
            <div class="h4 color-blue">資料安全</div>
            <p>發票資料不經手第三方，能確保交易資訊安全，尤其是注重高隱私的集團或多公司組織尤需考量。</p>
          </div>
          <div class="mb-3">
            <div class="h4 color-blue">完整整合</div>
            <p>GV 與 eGUI 完整整合，資料同步自動上傳財政部電子發票整合平台。</p>
          </div>
        </div>
        <div class="col-12 col-md-4 order-md-3">
          <div class="mb-3">
            <div class="h4 color-blue">Turnkey 技術</div>
            <p>自動上傳大平台，提升作業效率，外部電子發票也可由介面轉入並代為上傳，不需人為登錄。</p>
          </div>
          <div class="mb-3">
            <div class="h4 color-blue">交換功能</div>
            <p>輕鬆與 ERP 整合，B2B 電子發票可隨時採交換模式，不必更換解決方案。</p>
          </div>
        </div>
        <div class="col-12 col-md-4 order-md-2 text-center d-none d-md-block">
          <img src="/img/product/egui/feature.png" width="378" height="378" loading="lazy" alt="特色" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">不只是上傳電子發票<br>還能提供交換功能及整合 ERP</h2>
      <hr>
      <div class="row">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img class="img-fluid" src="/img/product/lt/egui-icon.png" width="361" height="362" loading="lazy" alt="電子發票">
        </div>
        <div class="col-12 col-md-6">
          <p>從接收訂單到出貨，即可依據出貨單內容包含品項、單價……等資訊直接開立電子發票，並依時限將電子發票 MIG（Message Implementation Guideline；電子發票資料交換標準訊息建置指引）結合，透過 Turnkey 直接上傳財政部電子發票整合服務平台，節省傳統手動開立發票或紙本發票寄送時間。</p>
          <ul class="check block">
            <li>電子發票開立／作廢／銷貨退回／折讓功能</li>
            <li>系統管控序時序號避免字軌號碼開立錯誤</li>
            <li>接受共通性載具索取電子發票</li>
            <li>符合多公司稅籍編號或集團需求</li>
            <li>接受經財政部公告的電子發票捐贈方式</li>
            <li>提供不同平台（網購/POS/其他 ERP）電子發票資料匯入</li>
            <li>採交換之電子發票可與付款系統整合以提高簽核效率</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="link-area" class="bg-gray">
    <div class="container">
      <h2 class="text-center">一張圖搞懂如何選擇電子發票系統</h2>
      <hr>
      <div class="row">
        <div class="col-12 col-md-6 order-md-2 text-center">
          <img src="/img/product/egui/function.png" width="480" height="540" loading="lazy" alt="電子發票系統" class="img-fluid">
        </div>
        <div class="col-12 col-md-3 order-md-1">
          <div class="block block-left">
            <p><a href="https://marketing.ares.com.tw/newsletter/2018-07-egui/focus"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> 如何選擇電子發票系統？</a></p>
            <p><a href="https://marketing.ares.com.tw/newsletter/2018-07-egui/it"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> 導入電子發票系統需要評估哪些重點？</a></p>
          </div>
          <div class="block block-left">
            <p><a href="https://marketing.ares.com.tw/newsletter/2018-07-egui/product"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> 該選加值中心代傳還是自建 Turnkey 系統？</a></p>
          </div>
        </div>
        <div class="col-12 col-md-3 order-md-3">
          <div class="block block-right">
            <p><a href="https://marketing.ares.com.tw/newsletter/2019-06-egui/product"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> B2B 企業該選擇哪種電子發票模式(存證/交換)？</a></p>
            <p><a href="https://marketing.ares.com.tw/newsletter/2019-06-egui/focus"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> B2B 企業導入電子發票系統需要注意哪些重點？</a></p>
          </div>
          <div class="block block-right">
            <p><a href="https://marketing.ares.com.tw/newsletter/2019-06-egui/it"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> 自建 Turnkey 電子發票模式需注意哪些事？</a></p>
            <p><a href="https://marketing.ares.com.tw/newsletter/2016-10-egui/product"><svg class="media-middle" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#q" /></svg> 哪些產業也在使用 Turnkey 電子發票系統呢？</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="turnkey">
    <div class="container">
      <h2 class="text-center">Turnkey 電子發票系統與第三方加值服務中心的差異</h2>
      <hr>
          <table class="table">
            <thead>
              <tr>
                <th class="d-none d-sm-table-cell">項目</th>
                <th>自建 Turnkey 之 eGUI</th>
                <th>串接第三方加值服務中心</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="d-none d-sm-table-cell">上傳資料正確性</th>
                <td>貫穿 ERP、eGUI、Turnkey 和大平台，避免人為操作錯誤</td>
                <td>Web 登入及檔案拋傳大平台或加值中心，無審核控管，容易發生錯誤</td>
              </tr>
              <tr>
                <th class="d-none d-sm-table-cell">上傳時限符合規定</th>
                <td>自動排程傳送大平台，上傳狀態可查詢比對及異常通知訊息</td>
                <td>無法確定加值中心何時傳送大平台</td>
              </tr>
              <tr>
                <th class="d-none d-sm-table-cell">資安風險</th>
                <td>具高隱私度，確保交易資訊安全</td>
                <td>營銷資訊要傳到加值中心，有資料安全疑慮</td>
              </tr>
              <tr>
                <th class="d-none d-sm-table-cell">交換格式一致性</th>
                <td>具備進銷項交換功能，透過大平台單一入口，並可依需要規劃交換格式</td>
                <td>不同加值中心格式不同，維護困難</td>
              </tr>
              <tr>
                <th class="d-none d-sm-table-cell">系統整合性</th>
                <td>完全整合資訊流及資料流</td>
                <td>有斷點無法連貫</td>
              </tr>
              <tr>
                <th class="d-none d-sm-table-cell">分支機構一次導入</th>
                <td>營業人有分支機構，可由總機構規劃導入，以節省導入成本</td>
                <td>分別導入</td>
              </tr>
            </tbody>
          </table>
    </div>
  </section>
  <section id="promote">
    <div class="container">
      <h2 class="text-center color-black">導入電子發票系統勢在必行</h2>
      <hr>
      <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-10">
          <p>根據財政部「電子發票實施作業要點」修正條文，規定「買受人依第十八點第一項第四款取得開立人提供之電子發票證明聯或銷貨退回、進貨退出或折讓證明單」，正式宣告進入電子發票交換時代，呼籲企業廠商因應相關規定：B2B 企業廠商間的電子發票或折讓單均全面採用電子交換模式，不能再以存證模式寄送電子發票證明聯紙本或 Email 夾帶電子發票證明聯檔案附件完成交付。</p>
        </div>
      </div>
      <ul class="d-flex flex-wrap text-center justify-content-around">
        <li class="circle d-flex flex-wrap align-items-center">
          <div class="w-100 d-flex flex-column-reverse">
            <p class="m-0 w-100 px-3">每年成本節省</p>
            <span class="color-blue3">$540,000</span>
          </div>
        </li>
        <li class="circle d-flex flex-wrap align-items-center">
          <div class="w-100 d-flex flex-column-reverse">
            <p class="m-0 w-100 px-3">每年平均人力節省</p>
            <span class="color-blue3">2 名</span>
          </div>
        </li>
        <li class="circle d-flex flex-wrap align-items-center">
          <div class="w-100 d-flex flex-column-reverse">
            <p class="m-0 w-100 px-3">每月郵寄費用節省</p>
            <span class="color-blue3">$37,500</span>
          </div>
        </li>
      </ul>
      <div class="text-center mt-3"><small>( 資料來源：財政部北區國稅局網站 )</small></div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

