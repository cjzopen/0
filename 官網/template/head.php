<?php
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$reference = $_SERVER['HTTP_REFERER'] ?? '';
if(preg_match('/103\.37\.([0-3]\.)(.*)/i', $ip) || stripos($reference,'nfcmag')!== false){
  header('HTTP/2 403 Forbidden');
  exit;
}
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'database connection failed: ' . $e->getMessage();
//   exit;
// }

// $query = sprintf("SELECT date FROM news ORDER BY date DESC LIMIT 1");
// $rq = $db->query($query)->fetch();
// $last_news_year = substr($rq['date'], 0, 4);

// $db= null;
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <?php //echo !empty($amp) ? '<link rel="amphtml" href="'.$amp.'">' : '' ?>
  <title><?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?></title>
  <meta name="description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <?= isset($page['canonical']) ? '<link rel="canonical" href="'.$page['canonical'].'">' : '' ?>
  <?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' : '' ?>
  <meta name="robots" content="max-image-preview:large">
<?php
if(isset($page['other'])){
  foreach($page['other'] as $other) {
    echo $other;
  }
}
if(isset($page['hreflang'])){
  foreach($page['hreflang'] as $hreflang) {
    if($hreflang['lang']=='zh'){
      echo '<link rel="alternate" hreflang="x-default" href="'.$hreflang['url'].'">';
    }
    echo '<link rel="alternate" hreflang="'.$hreflang['lang'].'" href="'.$hreflang['url'].'">';
  }
}
?>
  <meta property="fb:pages" content="95406314951">
  <meta property="og:title" content="<?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?>">
  <meta property="og:description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <meta property="og:image" content="<?= isset($page['ogimage']) ? $page['ogimage'] : 'https://www.ares.com.tw/img/ares.png'; ?>">
  <?= isset($page['canonical']) ? '<meta property="og:url" content="'.$page['canonical'].'">' : '' ?>
  <meta property="og:type" content="<?= isset($page['ogtype']) ? $page['ogtype'] : 'website'; ?>">
  <meta property="og:site_name" content="資通電腦 ARES International Corporation">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@ares_taiwan">
  <meta name="twitter:title" content="<?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?>">
  <meta name="twitter:description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <meta name="twitter:image" content="<?= isset($page['ogimage']) ? $page['ogimage'] : 'https://www.ares.com.tw/img/ares.png'; ?>">
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="icon alternate" href="/img/favicon.png" type="image/png" sizes="256x256">
  <link rel="shortcut icon" href="/img/favicon.png" sizes="256x256">
  <link rel="apple-touch-icon" href="/img/favicon.png" sizes="256x256">
  <link rel="apple-touch-icon-precomposed" href="https://www.ares.com.tw/img/favicon.png">
  <!-- <link rel="icon" href="/img/favicon.ico" sizes="32x32"> -->
  <!-- <link rel="preload" as="script" href="/lib/jquery.js?v=3.5.1"> -->
  <!-- <link rel="preload" as="script" href="/js/main.min.js?2006"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.google.com.tw" crossorigin>
  <!-- <link rel="dns-prefetch" href="https://connect.facebook.net" crossorigin> -->
<style>
#loading{background-color:rgba(0,0,0,.99);width:100%;height:100%;left:0;top:0;color:#fff;position:fixed;box-sizing:border-box;overflow:hidden;z-index:999999}#loading:before{content:attr(data-text);top:calc(50% - 63px);position:fixed;left:0;color:currentColor;text-align:center;width:100%;font-size:14px;animation:blink 1s linear infinite alternate}#loading:after{box-sizing:border-box;content:'';position:fixed;width:80px;height:80px;border:4px solid #3ca3f0;border-left-color:transparent;border-radius:50%;top:calc(50% - 40px);left:calc(50% - 40px);animation:rotation 1s linear infinite}@keyframes rotation{from{transform:rotate(0)}to{transform:rotate(359deg)}}@keyframes blink{from{opacity:.5}to{opacity:1}}#loading svg{height:auto;position:fixed;width:40px;height:29px;top:calc(50% - 15px);left:calc(50% - 20px)}
<?php
// include($_SERVER['DOCUMENT_ROOT'].'/lib/bootstrap/bootstrap4.min.css');
// include($_SERVER['DOCUMENT_ROOT'].'/css/main.min.css');
?>
</style>
<link rel="stylesheet" href="/lib/bootstrap/bootstrap4.min.css?4.6.0">
<link rel="stylesheet" href="/css/main.min.css?22c">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // echo '<link rel="preload" href="'.$css.'" as="style">';
    echo '<link rel="stylesheet" href="'.$css.'">';
//     include ($_SERVER['DOCUMENT_ROOT'].$css);
  }
}
?>
<link rel="preload" href="//fonts.googleapis.com/css?family=Noto+Sans+TC:wght@400;700&subset=chinese-traditional&display=swap" as="style">
<script>
window.addEventListener("load", function() {
  var prload_css = document.querySelectorAll('link[as="style"]');
  var i = 0;
  for (i; i < prload_css.length; ++i) {
    prload_css[i].rel='stylesheet';
  }
});
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
</head>
<noscript>
<style>
dialog.nojs {display:block!important;font-size:2rem;z-index: 9999;}#loading{display:none!important}
</style>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" class="d-none"></iframe>
</noscript>
<body>
  <dialog class="nojs d-none" aria-hidden="true">WARNING! JavaScript not loaded.</dialog>
  <div id="loading" data-text="" aria-hidden="true"></div>
  <div id="all">
  <aside id="fix-right-box">
    <div class="d-flex flex-wrap text-center w-100">
      <div class="col-12">
        <div class="h5 text-left main-color pb-3">資通電腦 - 竭誠為您服務</div>
      </div>
      <div class="col-3">
        <a href="tel:+886-2-2522-1351,,301" aria-label="電話" id="fix-right-box-phone-link">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="24" height="24"><use xlink:href="#c-phone"/></svg>
            </div>
          </div>
          <div class="main-color" id="fix-right-box-phone">02-2522-1351</div>
          <small id="fix-right-box-ext">分機 301 汪小姐</small>
        </a>
      </div>
      <div class="col-3 border-left">
        <a href="/consult/">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="24" height="24"><use xlink:href="#c-form"/></svg>
            </div>
          </div>
          <div class="main-color">免費諮詢</div>
        </a>
      </div>
      <div class="col-3 border-left">
        <a href="mailto:jenny@ares.com.tw" id="fix-right-box-mail-link">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="24" height="24"><use xlink:href="#c-mail"/></svg>
            </div>
          </div>
          <small class="d-block">若有任何建議與問題歡迎來信詢問。</small>
        </a>
      </div>
      <div class="col-3 border-left">
        <a href="/epaper/subscribe/">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="24" height="24"><use xlink:href="#c-paper"/></svg>
            </div>
          </div>
          <div class="main-color">訂閱電子報</div>
        </a>
      </div>
    </div>
  </aside>
  <aside class="bg-blue">
    <div class="container color-white text-right">
      <a class="d-inline-block p-1 ml-3" href="/en/" hreflang="en">English</a>
      <a class="d-inline-block p-1 ml-3" href="https://www.areschina.com/" hreflang="zh-Hans">简中</a>
    </div>
  </aside>
  <header id="header">
    <div class="container d-flex justify-content-between">
      <div class="navbar-brand">
        <a href="/" aria-label="資通電腦">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/ares-logo.svg'); ?>
        </a>
      </div>
      <div class="d-flex">
        <nav id="navbar" class="navbar-rwd rwd navbar-right">
          <ul class="d-flex mb-0">
            <li class="<?= @$pageName=='news' ? 'act' : '' ?>"><a class="nav-main-target toggle" href="/events/" accesskey="2">最新消息</a></li>
            <!-- <li class="position-relative host-fix pros <?= @$pageName=='service' ? 'act' : '' ?>">
              <a class="nav-main-target toggle" href="#">專業服務<span class="caret"></span></a>
              <div class="under-nav">
                <div class="under-nav-table d-flex">
                  <div class="d-flex">
                    <div class="img-ctrl">
                      <img loading="lazy" width="160" height="160" src="/img/survice.jpg" alt="*">
                    </div>
                    <ol class="angle">
                      <li><a href="/services/" accesskey="3">專業服務</a></li>
                      <li><a href="/services/outsourcing/">資訊委外服務</a></li>
                      <li><a href="/services/system-development-integration/">系統整合開發</a></li>
                      <li><a href="/services/gov/">政府專案服務</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li> -->
            <li class="<?= @$pageName=='product' || @$pageName=='service' ? 'act' : '' ?>">
              <a class="nav-main-target toggle" href="#">產品與服務<span class="caret"></span></a>
              <div class="under-nav" id="product-list">
                <div class="under-nav-table d-table">
                  <div class="d-table-cell border-right">
                    <div class="under-nav-type"><a href="/products/">產品類別</a></div>
                    <div class="d-table-cell under-nav-gradient">
                      <div class="p-2 color-blue"><a href="/products/#business">商業服務</a></div>
                      <ol class="angle">
                        <!-- <li><a href="https://argoerp.ares.com.tw/">ArgoERP 企業資源規劃系統</a></li> -->
                        <li><a href="https://cimes.ares.com.tw/">ciMes 製造執行系統</a></li>
                        <li><a href="/products/IoT/">IoT 物聯網解決方案</a></li>
                        <li><a href="/products/Surf-Workflow/">Surf-Workflow 生產管理系統</a></li>
                        <li><a href="https://hcp.ares.com.tw/">HCP 人力資產規劃系統</a></li>
                        <!-- <li><a href="/products/analyzer/">Analyzer 商業智慧動態決策分析工具</a></li> -->
                        <li><a href="/products/egui/">eGUI 電子發票管理系統</a></li>
                        <li><a href="/products/gv/">GV 統一發票管理系統</a></li>
                        <li><a href="/products/Local-Template/">NM / GIB / 十號公報</a></li>
                        <li><a href="https://oracle.ares.com.tw/">Oracle 升級、維護、客製</a></li>
                        <!-- <li><a href="https://oracle.ares.com.tw/plm/">Oracle PLM 產品生命週期管理</a></li> -->
                        <!-- <li><a href="https://oracle.ares.com.tw/solutions/netsuite/">NetSuite 雲端 ERP 系統</a></li> -->
                        <li><a href="/products/gd-crm/">GD-CRM 客戶關係管理系統</a></li>
                        <li><a href="/products/financial-reporting/">財報自行編製解決方案</a></li>
                        <li><a href="/products/e-recruiting/">招募管理系統</a></li>
                        <!-- <li><a href="/products/powerbudget/">PowerBudget 企業預算編製系統</a></li> -->
                      </ol>
                    </div>
                    <div class="d-table-cell under-nav-gradient">
                      <div class="p-2 color-blue"><a href="/products/#financial">金融服務</a></div>
                      <ol class="angle">
                        <li><a href="/products/afeis/" title="Advanced Foreign Exchange Integrated System">AFEIS 國內外匯電腦整合系統</a></li>
                        <li><a href="/products/eAresBank/">eAresBank 海外分行核心系統</a></li>
                        <li><a href="/products/cross-pricing/" title="ARES Cross Pricing System">ACPS 衍生性金融商品評價系統</a></li>
                        <!-- <li><a href="/products/fstp/">FSTP 基金自動化方案</a></li> -->
                        <li><a href="/products/nuntio/">ARES Nuntio 資通法規報表申報平台</a></li>
                        <!-- <li><a href="/products/swift/">SWIFT 全球金融通信之標準化平台</a></li> -->
                        <!-- <li><a href="/products/ascbs/" title="ARES Smart Core Banking System">ASCBS 大陸核心系統</a></li> -->
                        <li><a href="/products/treasury/">ARES Treasury System 財務交易系統</a></li>
                        <li><a href="/products/portfolio/">ARES Portfolio System 投資組合管理系統</a></li>
                        <li><a href="/products/aml/">AML 洗錢防制解決方案</a></li>
                        <li><a href="/products/kyc-cloud/">KYC 混合雲名單掃描系統</a></li>
                        <li><a href="/products/visual-pricing-tool/">Visual Pricing Tool 視覺化圖型工具</a></li>
                        <li><a href="/products/ISDA-SIMM/">ISDA SIMM 原始保證金合規</a></li>
                        <li><a href="/products/fxns/">FXNS 外匯議價系統</a></li>
                      </ol>
                    </div>
                    <div class="d-table-cell under-nav-gradient">
                      <div class="p-2 color-blue"><a href="/products/#security">資訊安全</a></div>
                      <ol class="angle">
                        <li><a href="/trends/information-security/">資安法專區</a></li>
                        <li><a href="https://ares-pp.ares.com.tw/">ARES PP 檔案加密工具</a></li>
                        <li><a href="/products/fortify/">Fortify 原始碼檢測工具</a></li>
                        <li><a href="/products/comodo/">Comodo 安全管理方案</a></li>
                        <li><a href="https://pki.ares.com.tw/">uPKI 憑證驗證服務系統</a></li>
                        <li><a href="/products/knowbe4/">KnowBe4 資安課程平台</a></li>
                      </ol>
                      <div class="p-2 color-blue"><a href="/products/#service">服務與支援</a></div>
                      <ol class="angle">
                        <li><a href="/services/outsourcing/">OSC 資訊委外服務</a></li>
                        <li><a href="/services/system-development-integration/">SI 系統整合開發</a></li>
                        <li><a href="/services/gov/">GOV 政府專案服務</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative host-fix <?= @$pageName=='newsletter' ? 'act' : '' ?>">
              <a class="nav-main-target toggle" href="#" >電子報<span class="caret"></span></a>
              <div class="under-nav">
                <div class="under-nav-table d-flex">
                  <div class="d-flex">
                    <div class="img-ctrl">
                      <svg fill="#2858aa" xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="-36 -36 96 96"><path d="M15.609 10.849h30.546v6.542H15.609v-6.542zm0-10.91h30.546v6.545H15.609V-.061zm0 21.82h30.546v6.543H15.609v-6.543zm34.91-45.819h-78.545c-4.8 0-8.729 3.926-8.729 8.726v56.729c0 4.798 3.928 8.727 8.729 8.727h78.545c4.798 0 8.727-3.929 8.727-8.727v-56.729c-.001-4.8-3.93-8.726-8.727-8.726zm0 65.456H11.246v-56.729h39.272v56.729z"></path></svg>
                    </div>
                    <ol class="angle">
                      <li><a href="/epaper/" accesskey="5">各期期刊</a></li>
                      <li><a href="/epaper/subscribe/">訂閱 / 退訂</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="<?= @$pageName=='bestPractice' ? 'act' : '' ?>"><a class="nav-main-target toggle" href="/best-practices/" accesskey="6">成功案例</a></li>
            <li class="<?= @$pageName=='consult' ? 'act' : '' ?>"><a class="nav-main-target toggle" href="/consult/" accesskey="7">免費諮詢</a></li>
          </ul>
        </nav>
        <div id="search-toggle">
          <a class="d-block" id="search-toggle-link" href="/search/" aria-label="search button">
            <svg fill="#555" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path id="search-toggle-open" d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"></path>
              <g id="search-toggle-close"><line x1="4" y1="4" x2="20" y2="20" stroke="#555" stroke-width="2"/><line x1="20" y1="4" x2="4" y2="20" stroke="#555" stroke-width="2"/></g>
            </svg>
          </a>
          <div id="search-area" role="search">
            <form name="cse" id="searchbox" action="/search/" method="get">
              <div class="d-flex w-100">
                <label class="d-none" id="label-q">站內搜尋</label>
                <input type="hidden" name="cx" value="014374286183653546318:anrbmnt_9rc" />
                <input type="text" name="q" aria-labelledby="label-q" size="40" placeholder="站內搜尋" />
                <input class="formbutton" value="&nbsp;" type="submit" />
              </div>
            </form>
          </div>
        </div>
        <div class="p-3 pb-0">
          <button id="navbar-toggle" class="navbar-toggle" tabindex="0" aria-haspopup="true" aria-controls="navbar-toggle-menu"><span>menu</span></button>
        </div>
      </div>
    </div>
  </header>
  <div id="navbar-toggle-menu" class="color-black bg-white p-3 pb-5" role="menu" aria-labelledby="navbar-toggle">
    <div class="container p-4 text-right">
      <button class="navbar-toggle act" tabindex="0">menu</button>
    </div>
    <div class="container py-4">
      <div class="row">
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/">首頁</a>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/products/">產品與服務</a>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/events/">最新消息</a>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/best-practices/">成功案例</a>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/profile/">關於資通</a>
          <ul class="disc mb-0">
            <li><a role="menuitem" href="/contact/">聯絡我們</a></li>
            <!-- <li><a role="menuitem" href="/vision/">經營理念</a></li> -->
            <li><a role="menuitem" href="/milestone/">里程碑</a></li>
            <li><a role="menuitem" href="/partners/">客戶及合作夥伴</a></li>
            <li><a role="menuitem" href="/esg/">企業社會責任</a></li>
          </ul>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/job/">加入我們</a>
          <ul class="disc mb-0">
            <li><a href="/job/#資通文化">資通文化</a></li>
            <li><a href="/job/#benefits">福利制度</a></li>
          </ul>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/epaper/">電子報</a>
        </div>
        <div class="mb-3 col-12 col-md-3">
          <a role="menuitem" class="d-flex justify-content-between p-2 h5 border-bottom show-nav-title" href="/consult/">產品諮詢</a>
        </div>
<!--             <li class="mb-3">
              <a role="menuitem" class="d-inline-block p-2 h4" href="/job/">菁英招募</a>
            </li>
            <li class="mb-3">
              <div class="d-inline-block p-2 h4">投資人專區</div>
              <div class="pl-3">
                <ul class="disc">
                  <li><a role="menuitem" href="/governance/">公司治理</a></li>
                  <li><a role="menuitem" href="/investor-service/">股東服務</a></li>
                  <li><a role="menuitem" href="/investor-events/">重大訊息</a></li>
                  <li><a role="menuitem" href="/investor-revenue/">營收報告</a></li>
                  <li><a role="menuitem" href="/investor-financial/">財務報表</a></li>
                  <li><a role="menuitem" href="/investor-report/">股東會資訊</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-3">
              <div class="d-inline-block p-2 h4">利害人專區</div>
              <div class="pl-3">
                <ul class="disc">
                  <li><a role="menuitem" href="https://web.ares.com.tw/aresoa" rel="nofollow">員工專區</a></li>
                  <li><a role="menuitem" href="/stakeholder/">利害人專區</a><br><br></li>
                </ul>
              </div>
            </li> -->
      </div>
    </div>
  </div>
  <div id="margin-nav" aria-hidden="true"></div>
