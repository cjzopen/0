<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '文件加密系統';
$page['description'] = 'ARES PP 資通隱私保鑣文件加密軟體，支援隱性浮水印強化檔案版權、防手機偷拍、地理軌跡追蹤等功能，協助企業防制資料外洩，杜絕勒索威脅。';
$page['css']=array('/public/css/about2022.css?3');
$canonical ='https://ares-pp.ares.com.tw/about/';
$hreflang = 'https://ares-pp.ares.com.tw/en/about/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="about">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
?>
  <main>
    <div id="banner" class="bg-lazyload" data-image="/public/img/about/企業文件檔案加密系統.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="h4"><strong><?= date("Y") - 2009 ?> 年來深受用戶的信賴</strong></div>
            <h1 class="main-color my-2">文件加密系統</h1>
            <p>ARES PP（ARES Privacy Protector；資通隱私保鑣）是一套協助企業文件加密與控管的 DRM 加密軟體，能從源頭加密檔案，對內防制資料外洩，對外保護資料流通安全，還可依據人員或是群組設定權限，讓機密文件安全不外洩！</p>
            <p>ARES PP 常運用在企業管理、財務、研發和客戶個資等機密電子檔案與資料儲存、傳遞與使用時。能針對儲存在端點與網路中的電子檔與資料進行監控、分析、紀錄、識別與加密保護，讓對的文件只讓對的人開啟。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">文件加密產品介紹</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <nav class="supmenu container-fluid">
      <ul class="text-center mb-0">
        <li><a href="#apply">產品應用</a></li>
        <li><a href="#benefit">產品效益</a></li>
        <li><a href="#feature">產品特色</a></li>
      </ul>
    </nav>
    <section id="apply" class="bg-lazyload" data-image="/public/img/about/how-bg.png">
      <h2 class="text-center">你以為的文件保護，真的安全嗎？</h2>
      <div class="container mb-5" id="iceberg-mobile">
        <div class="d-flex align-items-end">
          <img style="width:48%;" class="img-fluid" src="/public/img/about/你以為的文件保護.svg" alt="你以為的文件保護方法">
          <ul class="disc">
            <li>嚴格要求員工保密</li>
            <li>設置資安部門</li>
            <li>Windows ACL (存取控制清單) 管控權限</li>
            <li>Office 文件設定密碼</li>
            <li>使用壓縮軟體壓縮加密碼</li>
          </ul>
        </div>
        <div class="d-flex align-items-start main-color">
          <img style="width:48%;" class="img-fluid" src="/public/img/about/被忽視的資安風險-m.svg" alt="被忽視的資安風險">
          <ul class="disc">
            <li>電腦螢幕資料被手機偷拍</li>
            <li>不符合個資法、資安法</li>
            <li>公司機密不受營業秘密法保護</li>
            <li>通訊軟體傳輸資料外洩</li>
            <li>駭客竊取公司機密</li>
            <li>發給外部廠商資料被外洩</li>
            <li>員工可能開啟重要文件</li>
            <li>內含機密文件的設備遺失</li>
            <li>無法掌握外發文件的動向</li>
            <li>離職員工拷貝機密技術</li>
          </ul>
        </div>
      </div>
      <div class="container mb-5" id="iceberg-pc">
        <div class="text-center">
          <img loading="lazy" width="920" height="" class="img-fluid" src="/public/img/about/你以為的文件保護列表.svg" alt="你以為的文件保護方法">
        </div>
        <div class="position-relative main-color">
          <div class="text-center">
            <img loading="lazy" width="920" height="" class="img-fluid" src="/public/img/about/被忽視的資安風險.svg" alt="被忽視的資安風險">
          </div>
          <div class="iceberg-list position-absolute" style="top: 15%;left: 8%;">
            <div class="iceberg-left d-flex align-items-center flex-nowrap">．電腦螢幕資料被手機偷拍</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 27%;left: 10%;">
            <div class="iceberg-left d-flex align-items-center flex-nowrap">．不符合個資法、資安法</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 39%;left: 12%;">
            <div class="iceberg-left d-flex align-items-center flex-nowrap">．公司機密不受營業秘密法保護</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 51%;left: 16%;">
            <div class="iceberg-left d-flex align-items-center flex-nowrap">．通訊軟體傳輸資料外洩</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 63%;left: 20%;">
            <div class="iceberg-left d-flex align-items-center flex-nowrap">．駭客竊取公司機密</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 15%;left: 60%;">
            <div class="iceberg-right d-flex align-items-center flex-nowrap">．發給外部廠商資料被外洩</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 27%;left: 58%;">
            <div class="iceberg-right d-flex align-items-center flex-nowrap">．員工可能開啟重要文件</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 39%;left: 56%;">
            <div class="iceberg-right d-flex align-items-center flex-nowrap">．內含機密文件的設備遺失</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 51%;left: 54%;">
            <div class="iceberg-right d-flex align-items-center flex-nowrap">．無法掌握外發文件的動向</div>
          </div>
          <div class="iceberg-list position-absolute" style="top: 63%;left: 52%;">
            <div class="iceberg-right d-flex align-items-center flex-nowrap">．離職員工拷貝機密技術</div>
          </div>
        </div>
      </div>
      <h2 class="text-center">內外加密無縫接軌，<br class="d-md-none">資料保護快速又安心</h2>
      <div class="container pb-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <img loading="lazy" width="610" height="370" class="img-fluid" src="/public/img/about/arespp新功能.webp" alt="新功能VOX">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="main-color h4 mb-1">Office 文件直接加密寄送</h3>
            <p>使用者可在 Office 介面中，直接設定文件加密權限並 email 寄出，不需切換視窗，資料發佈一氣呵成。</p>
            <h3 class="main-color h4 mb-1">外發加密檔案可編輯</h3>
            <p>獲授權的供應商收到加密檔案可編輯修改，資安防護與作業需求一次滿足。擺脫需解密才能外發的資安風險。</p>
            <h3 class="main-color h4 mb-1">加密過程不怕壞檔</h3>
            <p>ARES PP 支援 Office 版本更新，不會有一加密就讓檔案損壞或無法開啟的情況，讓使用者心血付諸流水。</p>
          </div>
        </div>
      </div>
      <h2 class="text-center">檔案加密防止企業資料外洩</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 my-4">
            <div class="box h-100 shadow-border rounded p-4 fff-bg">
              <div class="row">
                <div class="col-12 col-lg-4 circle flex-shrink-0 text-center justify-content-center align-items-center d-flex bg-lazyload" data-image="/public/img/about/circle.svg" data-color="#fff">
                  <span class="h4">內部保護</span>
                </div>
                <div class="col-12 col-lg-8">
                  <h3 class="main-color text-center text-lg-left mb-3">保護企業內部機密文件</h3>
                  <p>企業將累積多年的技術經驗，視為重要的核心資產。擔心內部員工因一時疏忽，使得技術文件外流，檔案產生的當下就需要受到完整的保護並且擁有彈性化的授權。</p>
                </div>
                <div class="col-12">
                  <ul class="row">
                    <li class="col-12 col-md-6 orange-color">★ <a style="text-decoration: underline;" href="https://edm.ares.com.tw/dm/202306-arespp/#:~:text=%E7%B3%BB%E7%B5%B1%E8%87%AA%E5%8B%95%E5%81%B5%E6%B8%AC%E6%98%AF%E5%90%A6%E6%9C%89%E6%A9%9F%E6%95%8F%E8%B3%87%E8%A8%8A%E5%A4%96%E6%B4%A9%EF%BC%8C%E7%95%B6%E4%BD%BF%E7%94%A8%E8%80%85%E8%A6%81%E8%A4%87%E8%A3%BD%E6%A9%9F%E6%95%8F%E6%96%87%E5%AD%97%E6%99%82%EF%BC%8C%E7%B3%BB%E7%B5%B1%E6%9C%83%E5%8F%8A%E6%99%82%E9%98%BB%E6%96%B7%EF%BC%8C%E4%BF%9D%E8%AD%B7%E4%BC%81%E6%A5%AD%E4%B8%8D%E9%81%95%E5%8F%8D%E7%9B%B8%E9%97%9C%E6%B3%95%E4%BB%A4%E3%80%82" rel="noopener noreferrer" target="_blank">機敏資訊偵測阻擋外洩</a></li>
                    <li class="col-12 col-md-6">✓ 原始檔透明加、解密</li>
                    <li class="col-12 col-md-6">✓ RSA2048 與 AES256 加密演算</li>
                    <li class="col-12 col-md-6">✓ 離線一樣有保護</li>
                    <li class="col-12 col-md-6">✓ 文件解密行為偵測</li>
                    <li class="col-12 col-md-6">✓ 針對群組或個人授權</li>
                    <li class="col-12 col-md-6">✓ 文件解密風險審核指示</li>
                    <li class="col-12 col-md-6">✓ 文件列印管制</li>
                    <li class="col-12 col-md-6">✓ 主動安全通報</li>
                    <li class="col-12 col-md-6">✓ AD 驗證/帳號整合</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 my-4">
            <div class="box h-100 shadow-border rounded p-4 fff-bg">
              <div class="row">
                <div class="col-12 col-lg-4 circle flex-shrink-0 text-center justify-content-center align-items-center d-flex bg-lazyload" data-image="/public/img/about/circle.svg" data-color="#fff">
                  <span class="h4">外部保護</span>
                </div>
                <div class="col-12 col-lg-8">
                  <h3 class="main-color text-center text-lg-left mb-3">外發文件保護與管制</h3>
                  <p>企業文件不可避免需要與外部進行交流，不論是財務會計資料、統包廠商的設計圖稿、提供給下游廠商的規格資料，這些資料都有重要機密性，外發後仍需受到管制與保護。</p>
                </div>
                <div class="col-12">
                  <ul class="row">
                    <li class="col-12 col-md-6 orange-color">★ <a style="text-decoration: underline;" href="https://edm.ares.com.tw/dm/202306-arespp/#:~:text=%E7%94%A8%E5%8A%A0%E5%AF%86%E6%AA%94%E6%A1%88%E5%B0%8D%E5%A4%96%E4%BA%A4%E6%B5%81%EF%BC%8C%E7%8D%B2%E6%8E%88%E6%AC%8A%E7%9A%84%E4%BE%9B%E6%87%89%E5%95%86%E5%8F%AF%E7%B7%A8%E8%BC%AF%E4%BF%AE%E6%94%B9%EF%BC%8C%E8%B3%87%E5%AE%89%E9%98%B2%E8%AD%B7%E8%88%87%E4%BD%9C%E6%A5%AD%E9%9C%80%E6%B1%82%E4%B8%80%E6%AC%A1%E6%BB%BF%E8%B6%B3%E3%80%82" rel="noopener noreferrer" target="_blank">外發文件可編輯加密</a></li>
                    <li class="col-12 col-md-6">✓ 外發管制</li>
                    <li class="col-12 col-md-6">✓ 列印權限與次數控管</li>
                    <li class="col-12 col-md-6">✓ 不須安裝 Agent 程式</li>
                    <li class="col-12 col-md-6">✓ 異常文件召回</li>
                    <li class="col-12 col-md-6">✓ 強化版浮水印</li>
                    <li class="col-12 col-md-6">✓ 限制閱讀次數</li>
                    <li class="col-12 col-md-6">✓ 簡訊雙重認證</li>
                    <li class="col-12 col-md-6">✓ 設定到期日</li>
                    <li class="col-12 col-md-6">✓ 防止手機偷拍</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 my-4">
            <div class="box h-100 shadow-border rounded p-4 fff-bg">
              <div class="row">
                <div class="col-12 col-lg-4 circle flex-shrink-0 text-center justify-content-center align-items-center d-flex bg-lazyload" data-image="/public/img/about/circle.svg" data-color="#fff">
                  <span class="h4">行動與<br>雲端保護</span>
                </div>
                <div class="col-12 col-lg-8">
                  <h3 class="main-color text-center text-lg-left mb-3">行動裝置與雲端文件流通安全</h3>
                  <p>現今我們常以行動化來輔助企業流程或工作流程，用任何裝置存取重要智慧文件，如 VPN 連網文件、銷售報表、公文合約文件，在外部進行資料交換時，也需從源頭進行控管與加密。</p>
                </div>
                <div class="col-12">
                  <ul class="">
                    <li class="orange-color">★ 加密文件保留企業伺服器中</li>
                    <li class="">✓ MOTP 動態驗證</li>
                    <li class="">✓ 行動文件編輯備註功能</li>
                    <li class="">✓ 支援跨平台、裝置：iOS／Android／Mac／Linux／Windows</li>
                    <li class="">✓ 支援行動裝置閱讀</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 my-4">
            <div class="box h-100 shadow-border rounded p-4 fff-bg">
              <div class="row">
                <div class="col-12 col-lg-4 circle flex-shrink-0 text-center justify-content-center align-items-center d-flex bg-lazyload" data-image="/public/img/about/circle.svg" data-color="#fff">
                  <span class="h4">稽核</span>
                </div>
                <div class="col-12 col-lg-8">
                  <h3 class="main-color text-center text-lg-left mb-3">技術外購或接單客戶稽核</h3>
                  <p>在台灣提供代工的製造業不在少數，許多產品的競爭對手可能都委託同一廠商提供代工服務，故時常需接受客戶稽核，代工業者需保護顧客的資訊，有效控管文件流向，並詳實紀錄所有軌跡。</p>
                </div>
                <div class="col-12">
                  <ul class="row">
                    <li class="col-12 col-md-6">✓ 人員、文件足跡</li>
                    <li class="col-12 col-md-6">✓ 原稿文件關聯分析</li>
                    <li class="col-12 col-md-6">✓ 自訂分析</li>
                    <li class="col-12 col-md-6">✓ 文件版權識別</li>
                    <li class="col-12 col-md-6">✓ 文件地理軌跡追蹤</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="benefit">
      <h2 class="text-center">檔案加密可帶來的<span class="orange color">「效益」</span></h2>
      <div class="container">
        <ul class="row">
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-1.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">提升資安管理效率</strong>
              <p>可依人員、群組設定權限，有效管理文件使用權限。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-2.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">降低資安建置成本</strong>
              <p>保護多種檔案格式並支援 Office 版本更新，無須額外費用。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-3.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">掌握即時的威脅</strong>
              <p>掌握文件流向，有異常狀況可主動通知管理者安全情報並隨時召回。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-4.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">360° 支援企業行動性</strong>
              <p>支援跨平台、行動裝置，紀錄文件操作行為，強化資安應變措施。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-5.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">降低人為錯誤發生</strong>
              <p>檔案加密內部無感操作，外部無須安裝 Agent，操作便利好上手。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 d-flex align-items-start my-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="40" height="40" src="/public/img/about/benefit-6.svg" alt="*">
            <div class="pl-3">
              <strong class="h4">強化資安防護力</strong>
              <p>隱性浮水印強化版權識別，有效保障原創作者或合法使用者著作權。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section id="feature">
    <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md-6 order-md-2">
            <h2 class="mb-4">只要你想得到的檔案幾乎都支援</h2>
            <p><span class="orange-color">支援最多檔案格式與 Office 升級格式，加密不需額外費用</span>，後台設定即可使用。</p>
            <ul class="row orange-color disc no-gutters">
              <li class="col-6"><span class="text-dark">AutoCAD</span></li>
              <li class="col-6"><span class="text-dark">OpenOffice</span></li>
              <li class="col-6"><span class="text-dark">Adobe Photoshop</span></li>
              <li class="col-6"><span class="text-dark">PDF</span></li>
              <li class="col-6"><span class="text-dark">Excel</span></li>
              <li class="col-6"><span class="text-dark">Pro/E</span></li>
              <li class="col-6"><span class="text-dark">PowerPoint</span></li>
              <li class="col-6"><span class="text-dark">SolidWorks</span></li>
              <li class="col-6"><span class="text-dark">Word</span></li>
              <li class="col-6"><span class="text-dark">Visio</span></li>
              <li class="col-6"><span class="text-dark">WPS Office</span></li>
              <li class="col-6"><span class="text-dark">其它</span></li>
            </ul>
          </div>
          <div class="col-12 col-md-6 order-md-1">
            <img class="img-fluid" loading="lazy" width="700" height="450" src="/public/img/about/支援最多檔案格式.png" alt="系統介面">
          </div>
        </div>
      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="mb-4">加密無須改變使用習慣</h2>
            <p>從文件產生當下與使用時都是維持加密狀態，獲授權的使用者直接點兩下就能開啟加密文件，<span class="orange-color">不影響檔案開啟時間，不改變使用習慣</span>。在考慮企業智慧資產安全的同時，也兼顧便利性！</p>
          </div>
          <div class="col-12 col-md-6">
            <img class="img-fluid" loading="lazy" width="600" height="456" src="/public/img/about/檔案加密.png" alt="檔案加密">
          </div>
        </div>
      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md-6 order-md-2">
            <h2 class="mb-4">文件生命週期保護機制</h2>
            <p>ARES PP 能針對整個文件生命週期加密與保護，從<span class="orange-color">文件產生、修改、發佈到銷毀運用加密、授權、檢視、偵測、審核、召回六大文件保護機制</span>，強化企業檔案管理，降低外洩風險。</p>
          </div>
          <div class="col-12 col-md-6 order-md-1">
            <img class="img-fluid" loading="lazy" width="577" height="530" src="/public/img/about/生命週期保護機制.png" alt="生命週期保護機制">
          </div>
        </div>
      </div>
      <div class="text-center pb-5">
        <a href="/faq/" class="btn btn-blue">檔案加密常見問題</a>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/sda.js" defer></script>
</body>
</html>