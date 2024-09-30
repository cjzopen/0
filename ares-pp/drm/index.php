<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '什麼是DRM？數位版權管理教學與做法';
$page['description'] = 'DRM 數位版權管理是一種數位內容的演算加密技術，企業可藉由 DRM 防止軟體、系統、影音等數位內容及硬體等智慧財產被任意使用，保護企業機密檔案。';
$page['css']=array('/public/css/drm.css?v=1');
$canonical ='https://ares-pp.ares.com.tw/drm/';
$ogimg='https://ares-pp.ares.com.tw/public/img/drm/drm.png';
// $hreflang = 'https://ares-pp.ares.com.tw/en/about/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
?>
  <main>
    <div id="banner" class="bg-lazyload py-5" data-image="/public/img/drm/bg.jpg">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-lg-6 py-5">
            <h1 class="main-color my-2">什麼是 DRM？</h1>
            <p>DRM（Digital Rights Management；數位版權管理）有時也稱 IRM（Information Rights Management；資訊版權管理），是針對軟體、系統、影音等數位內容及硬體的智慧財產保護技術。</p>
            <p>而 E-DRM（Enterprise DRM；企業數位版權管理）則是指透過 DRM 技術來控管公司內部機密文件，針對不同人員或群組給予不同權限，避免遭受第三人非法取得而外洩。且不論文件位於公司內部還是外部，都可限定文件存取權限（如：讀取、編輯、列印、複製貼上… 等），有效確保文件檔案安全，協助企業免於數位資產損失。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">什麼是 DRM</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <nav class="supmenu container-fluid">
        <ul class="text-center mb-0">
          <li><a href="#str">DRM 的運作架構</a></li>
          <li><a href="#howc">評估與導入</a></li>
          <li><a href="#why">為何選 ARES PP</a></li>
        </ul>
    </nav>
    <section id="str">
      <div class="container">
        <h2 class="text-center">DRM 的運作架構</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="2500" height="1250" src="/public/img/drm/drm-flowchart.webp" alt="DRM的運作方式與架構">
            </div>
            <p>DRM 是一種主從式架構的檔案加密軟體，因此需架設管理伺服器，並在用戶端電腦上安裝程式，才能執行加密檔案及管理存取權限。</p>
            <p>企業導入 DRM 系統時，需兼顧使用者端與伺服器端的需求。使用者端方面，必須考量應用程式的支援度，而 ARES PP 隱私保鑣的架構具備擴展性與延展性。從驗證途徑來看，ARES PP 能整合企業自有帳號系統或 AD 帳號驗證，並支援第三方驗證系統。無論內部或外部使用者，皆可透過 ARES PP 伺服器進行驗證，並依據授權機制對已授權的檔案設定存取限制。</p>
            <p>隨著企業規模擴展，內部應用系統也會日益增多。過去針對檔案擴充往往需客製開發或支付額外費用，為企業帶來沉重成本。然而，ARES PP 可直接透過後端管理介面設定欲管控的應用程式，前端即會自動生效，降低企業成本支出。</p>
            <h3 class="my-4">DRM 加密方式</h3>
            <p>主要分為兩類：「自動加密特定路徑下的檔案」和「針對使用者自行建立或修改的檔案進行保護」。大部分的 DRM 系統會提供檔案備份機制，在資料加密前先複製一份原始檔案到指定路徑下，以防止加密後的檔案遭到毀損或因管理伺服器故障而無法使用。</p>
            <h3 class="my-4">DRM 解密方式</h3>
            <p>當使用者開啟加密檔案時，用戶端程式會向管理伺服器連線進行身份驗證，通過驗證後提供解密所需的授權。DRM 也可管控提供給外包廠商的機密檔案，例如：限制只能唯讀、修改或列印權限，保護外發資料的安全性。</p>
            <p>常見的外部檔案解密方式，是在外包廠商的電腦安裝用戶端程式，再將檔案打包成內含閱讀器、授權資料的執行檔，這樣外部使用者不需要安裝任何軟體即可開啟檔案。另外，有些 DRM 產品可以進行離線授權，當開啟檔案時不需要連線到管理伺服器，只需要輸入基本的驗證資訊就可開啟檔案。</p>
            <p>ARES PP 無須安裝 Agent 應用程式，並可設定外發檔案的到期日或開啟次數，例如：設定僅能開啟一次，或當權限到期後即無法再使用的控管方式，避免機密檔案透過外包廠商的管道外流。</p>
            <h3 class="my-4">DRM 與其他系統的相容性</h3>
            <p>企業內部往往擁有多個衛星系統，如 ERP、KM、PLM……等。隨著 DRM 加密軟體的導入，這些系統會面臨相應的支援問題。為解決此類困境，ARES PP 提供兩種方式分別是：「在伺服器端安裝 ARES PP Client」和「使用 ARES PP API 進行開發整合」。</p>
            <p>運用 ARES PP Client 可節省開發人員時間，僅需透過後端設定便可讓線上系統直接處理加密檔案，縮短企業整合與導入的時間。若企業欲擁有完全掌控權，則可選擇利用 ARES PP API 進行整合開發，例如：針對特定使用者進行授權，僅允許特定使用者開啟敏感檔案，如薪資系統。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="howc" class="fff-bg">
      <div class="container">
        <h2 class="text-center">哪些企業需要 DRM 加密</h2>
        <div class="row justify-content-center pb-5">
          <div class="col-12 col-md-9">
            <ul class="row">
              <li class="col-12 col-md-6 pb-3">
                <img class="img-fluid" loading="lazy" width="40" height="40" src="/public/img/drm/who-1.svg" alt="*">
                與外包廠商有頻繁技術文件交換
              </li>
              <li class="col-12 col-md-6 pb-3">
                <img class="img-fluid" loading="lazy" width="40" height="40" src="/public/img/drm/who-2.svg" alt="*">
                員工可能接觸到機密文件
              </li>
              <li class="col-12 col-md-6 pb-3">
                <img class="img-fluid" loading="lazy" width="40" height="40" src="/public/img/drm/who-3.svg" alt="*">
                需限制跨部門存取文件
              </li>
              <li class="col-12 col-md-6 pb-3">
                <img class="img-fluid" loading="lazy" width="40" height="40" src="/public/img/drm/who-4.svg" alt="*">
                敏感資料可能被攜帶至企業外部
              </li>
              <li class="col-12 col-md-6 pb-3">
                <img class="img-fluid" loading="lazy" width="40" height="40" src="/public/img/drm/who-5.svg" alt="*">
                需符合客戶稽核標準
              </li>
            </ul>
            <div class="text-center pb-5">
              <a href="https://marketing.ares.com.tw/newsletter/2014-07-arespp/it" class="btn btn-blue" rel="noopener noreferrer" target="_blank">機密外洩管道與應對之道</a>
            </div>
          </div>
        </div>
        <h2 class="text-center mt-5">如何評估 DRM 系統</h2>
        <div class="row justify-content-center pb-5">
          <div class="col-12 col-md-5">
            <img class="img-fluid" loading="lazy" width="450" height="250" src="/public/img/drm/評估drm.png" alt="評估DRM">
          </div>
          <div class="col-12 col-md-5">
            <ul>
              <li class="d-flex pb-2"><span class="pr-2 main-color">✔ </span><span>獲得公正機關相關認證肯定，例如：經濟部工業局資安技術能量登錄…等，證明廠商在資安產品研發上的投入及實力。</span></li>
              <li class="d-flex pb-2"><span class="pr-2 main-color">✔ </span><span>可依客戶特殊加密需求進行系統調整與客製。</span></li>
              <li class="d-flex pb-2"><span class="pr-2 main-color">✔ </span><span>具備各產業導入經驗的廠商，除了能對該產業文件加密特性與規格有一定的了解之外，也能降低溝通隔閡，加速導入效率。</span></li>
              <li class="d-flex pb-2"><span class="pr-2 main-color">✔ </span><span>具備專屬研發團隊，並能持續開發文件加密新功能。</span></li>
            </ul>
          </div>
        </div>
        <h2 class="text-center mt-5">導入 DRM 的步驟</h2>
        <div class="row justify-content-center pb-5">
          <div class="col-12 col-md-10">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1000" height="250" src="/public/img/drm/5stepsdrm.png" alt="導入DRM的步驟">
            </div>
            <ol class="decimal">
              <li>企業必須將資安意識深化在組織內部，最重要的是<strong>公司管理階層能夠參與且支持</strong>，並確保公司由上至下目標保持一致。</li>
              <li>先定義出<strong>組織內部資料受保護的優先權</strong>後再擬定保護策略，避免想要一次到位「完整保護組織內部的一切」，讓使用者在便利與安全間取得平衡。</li>
              <li>公司高層必須與使用者進行溝通，讓使用者瞭解到保護資訊的重要性。並<strong>透過教育訓練提升使用者的資安意識</strong>，讓其在內部深化。</li>
              <li><strong>分階段進行保護作業</strong>，先行部署被列為優先保護資訊的單位，並告知使用者會產生什麼樣的保護效果，藉由策略逐步調整，擴及至所有組織。</li>
              <li>管理者可透過稽核記錄察看是否有異常行為，並<strong>隨時觀察使用者的反饋調整保護策略</strong>，拓展保護領域，提升公司的資訊安全到另一個層次。</li>
            </ol>
            <div class="text-center pb-5">
              <a href="https://marketing.ares.com.tw/newsletter/2021-09-cybersecurity/import-drm" class="btn btn-blue" rel="noopener noreferrer" target="_blank">如何導入 DRM 企業數位版權管理？</a>
            </div>
          </div>
        </div>
        <h2 class="text-center mt-5">DRM 能阻斷威脅、強化保護力</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1390" height="558" src="/public/img/drm/drm.png" alt="DRM的保護功能流程">
            </div>
            <p>總結來說，DRM 系統能有效解決企業面臨的檔案保護與控管問題。</p>
            <p>ARES PP 可結合行為記錄管理、日誌分析，快速偵測潛在危險並主動通報，協助企業即時做出應變措施，防堵內部人員外洩機密或惡意程式冒用帳號、竊取資料的事件發生。當企業與上下游廠商交流時，不論文件是在公司內部、外部甚至是行動裝置中，都可設定有效期限，並規範接收者權限。</p>
            <p>在資訊安全愈發重要的時代背景下，採用適切的 DRM 系統對於保護企業資料、減少風險及降低成本具有相當的意義。因此，企業在選擇 DRM 系統時應充分考量各種因素，以確保最終選擇的解決方案能夠真正提升企業的資訊安全水平並達到預期的效果。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="d-none"></section>
    <section id="why">
      <h2 class="text-center">為何選擇 ARES PP？</h2>
      <div id="compare">
        <div class="compare-row h3">
          <div class="text px-1">ARES PP<br>隱私保鑣</div>
          <div class="function px-1"></div>
          <div class="text px-1">他廠產品</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">不受影響</div>
          <div class="function px-1">Office 版本變更</div>
          <div class="text px-1">無法開啟或造成檔案損毀</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">圖形化呈現，一目了然</div>
          <div class="function px-1">稽核紀錄呈現</div>
          <div class="text px-1">文字記錄，不易理解</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">控制列印機台，文件不被任意列印</div>
          <div class="function px-1">實體列印管制</div>
          <div class="text px-1">無法控管，文件可被盜印</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">旗艦款：<br>文字、顏色、位置隨機出現</div>
          <div class="function px-1">浮水印功能</div>
          <div class="text px-1">基本款：<br>位置、顏色固定</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">版權鑑識</div>
          <div class="function px-1">隱形浮水印</div>
          <div class="text px-1">不支援</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">MOTP 簡訊雙重驗證</div>
          <div class="function px-1">雙重保護</div>
          <div class="text px-1">沒有配套方式</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">圖形化地理軌跡分析</div>
          <div class="function px-1">文件地理追蹤</div>
          <div class="text px-1">無法追蹤地理位置</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">自動偵測手機、平板、相機偷拍</div>
          <div class="function px-1">防止偷拍</div>
          <div class="text px-1">不支援</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">完整支援 windows、Mac、Linux、iOS、Android</div>
          <div class="function px-1">行動文件支援系統</div>
          <div class="text px-1">支援系統不完整</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">行動版加密文件也可新增備註</div>
          <div class="function px-1">行動加密文件備註功能</div>
          <div class="text px-1">不支援行動版備註功能</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">核心底層加密，使用者無感，無加密遞延等候時間</div>
          <div class="function px-1">加密遞延等候時間</div>
          <div class="text px-1">加密比未加密慢，影響使用者作業時間</div>
        </div>
        <div class="compare-row">
          <div class="text px-1">包括 Office、PDF、AutoCAD、SolidWorks、Pro/E…等。<br>不需額外費用，後台設定即可使用</div>
          <div class="function px-1">檔案格式支援</div>
          <div class="text px-1">主要支援 Office、PDF，其餘設計圖檔需額外花費客製</div>
        </div>
      </div>
      <div class="text-center pt-5">
        <a href="/about/#feature" class="btn btn-blue">更多 ARES PP 功能介紹</a>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
$rs=null;
$db=null;
$row=null;
?>
</div>
<script src="/public/js/sda.js" defer></script>
</body>
</html>