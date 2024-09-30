<?php
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$reference = $_SERVER['HTTP_REFERER'] ?? '';
if(preg_match('/103\.37\.([0-3]\.)(.*)/i', $ip) || stripos($reference,'nfcmag')!== false){
  header('HTTP/2 403 Forbidden');
  exit;
}
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}

$query = sprintf("SELECT date FROM news ORDER BY date DESC LIMIT 1");
$rq = $db->query($query)->fetch();
$last_news_year = substr($rq['date'], 0, 4);
try {
  $db = new PDO($epaper_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'epaper connection failed: ' . $e->getMessage();
  exit;
}
// 電子報
if(empty($row5['img'])){
  $sql = sprintf("SELECT * FROM newsletter ORDER BY month DESC LIMIT 1");
  $stmt5 = $db->query($sql);
  $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
  $row5['img'] ='https://www.ares.com.tw'.$row5['image'];
  if(substr($row5['image'], 0, 4) == 'http'){
    $row5['img'] = $row5['image'];
  }
  $row5['url'] = parse_url($row5['link']);
  $row5['imgx'] = 'https://'.$row5['url']['host'].$row5['url']['path'].'images/img_index_focus.jpg';
  if($row5['month'] > '2019-04'){
    $row5['imgx'] = 'https://marketing.ares.com.tw/images/'.$row5['month'].'/img_index_focus.jpg';
  }
}
$db= null;
$sql = null;
$stmt5 = null;
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <?= !empty($amp) ? '<link rel="amphtml" href="'.$amp.'">' : '' ?>
  <title><?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?></title>
  <meta name="description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <?= !empty($page['keywords']) ? '<meta name="keywords" content="'.$page['keywords'].'">' : '' ?>
<?php
if(isset($page['other'])){
  foreach($page['other'] as $other) {
    echo $other;
  }
}
?>
  <?= isset($page['canonical']) ? '<link rel="canonical" href="'.$page['canonical'].'">' : '' ?>
  <meta property="fb:pages" content="95406314951">
  <meta property="og:title" content="<?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?>">
  <meta property="og:description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <meta property="og:image" content="<?= isset($page['ogimage']) ? $page['ogimage'] : 'https://www.ares.com.tw/img/ares.png'; ?>">
  <meta property="og:url" content="<?= isset($page['canonical']) ? $page['canonical'] : $nowUrl; ?>">
  <meta property="og:type" content="<?= isset($page['ogtype']) ? $page['ogtype'] : 'website'; ?>">
  <meta property="og:site_name" content="資通電腦 ARES International Corporation">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@ares_taiwan">
  <meta name="twitter:title" content="<?= isset($page['title']) ? $page['title'] : 'ARES 資通電腦股份有限公司'; ?>">
  <meta name="twitter:description" content="<?= isset($page['description']) ? $page['description'] : ''; ?>">
  <meta name="twitter:image" content="<?= isset($page['ogimage']) ? $page['ogimage'] : 'https://www.ares.com.tw/img/ares.png'; ?>">
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <link rel="icon alternate" href="/img/favicon.png" type="image/png" sizes="180x180">
  <link rel="shortcut icon" href="/img/favicon.png" sizes="180x180">
  <link rel="apple-touch-icon" href="/img/favicon.png" sizes="180x180">
  <link rel="apple-touch-icon-precomposed" href="https://www.ares.com.tw/img/apple-touch-icon72.png">
  <link rel="icon" href="/img/favicon.ico" sizes="32x32">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/main2016.css?41">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="preload" href="'.$css.'" as="style">';
    // echo '<link rel="stylesheet" href="'.$css.'">';
//     include ($_SERVER['DOCUMENT_ROOT'].$css);
  }
}
?>
<link rel="preload" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style">
<link rel="preload" href="//fonts.googleapis.com/css?family=Noto+Sans+TC&subset=chinese-traditional&display=swap" as="style">
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
<script src="/lib/jquery.js?v=3.5.1"></script>
</head>
<style>#loading{background-color:rgba(0,0,0,.99);width:100%;height:100%;left:0;top:0;color:#fff;position:fixed;box-sizing:border-box;overflow:hidden;z-index:999999}#loading:before{content:attr(data-text);top:calc(50% - 63px);position:fixed;left:0;color:currentColor;text-align:center;width:100%;font-size:14px;animation:blink 1s linear infinite alternate}#loading:after{content:'';position:fixed;width:80px;height:80px;border:4px solid #3ca3f0;border-left-color:transparent;border-radius:50%;top:calc(50% - 40px);left:calc(50% - 40px);animation:rotation 1s linear infinite}@keyframes rotation{from{transform:rotate(0)}to{transform:rotate(359deg)}}@keyframes blink{from{opacity:.5}to{opacity:1}}#loading svg{height:auto;position:fixed;width:40px;height:29px;top:calc(50% - 15px);left:calc(50% - 20px)}</style>
<noscript>
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<style>
dialog.nojs {display: block !important;font-size:2rem;z-index: 9999;}#loading{display:none!important}
</style>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0"></iframe>
</noscript>
<?php
function get_client_ip() {
  $ipaddress = '';
  if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if(isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
    $ipaddress = 'UNKNOWN';
  return $ipaddress;
}
if(get_client_ip()!=='UNKNOWN' && get_client_ip()!=='61.220.36.130'){
?>
<script>
var dataLayer = window.dataLayer || [];
dataLayer.push({
  "tid" : "<?= str_replace('.', '77', get_client_ip()); ?>"
});
</script>
<?php
}
?>
<!--
                 _
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`- -'\____
              .'  \\|   |//  `.
           /  \\|||  :  |||//  \
           /  _||||| -:- |||||_  \
           |   | \\\  -  /'| |   |
          | \_|  `\`- -'//  |_/ |
           \  .-\__ `-. -'__/-.  /
         ___`. .'  / -. -\  `. .'___
      ."" '<  `.___\_<|>_/___.' _> \"".
    | | :  `- \`. ;\_ _/; .'/ /  .' ; |
    \  \ `-.   \_\_`. _.'_/_/  -' _.' /
===========`-.`___`-.__\ \___/ /__.-'___'.-'===========
             `=- -='

^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        佛祖保佑  bug退散   永不當機
-->
<body>
  <dialog class="nojs hidden" aria-hidden="true">WARNING! JavaScript not loaded.</dialog>
  <div id="loading" data-text="" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="29" viewBox="59.999 22.5 40 29"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-176.492" y1="155.565" x2="-176.492" y2="155.344" gradientTransform="matrix(21.191 0 0 -117.715 3815.745 18335.313)"><stop offset="0" stop-color="#51cee4"/><stop offset=".424" stop-color="#51d1e1"/><stop offset=".767" stop-color="#53dbd9"/><stop offset="1" stop-color="#56e7d1"/></linearGradient><path fill="url(#a)" d="M78.106 46.559c0 1.295-1.072 2.343-2.395 2.343-1.322 0-2.394-1.049-2.393-2.343V25.22c0-1.293 1.071-2.342 2.393-2.342 1.322 0 2.394 1.048 2.395 2.342v21.339z"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="-201.861" y1="114.726" x2="-201.635" y2="114.726" gradientTransform="matrix(80.1433 0 0 -21.188 16237.8 2470.956)"><stop offset="0" stop-color="#51cee4"/><stop offset=".424" stop-color="#51d1e1"/><stop offset=".767" stop-color="#53dbd9"/><stop offset="1" stop-color="#56e7d1"/></linearGradient><path fill="url(#b)" d="M73.318 37.805H62.416c-1.322-.013-2.404 1.026-2.417 2.319-.013 1.294 1.048 2.352 2.37 2.364a.369.369 0 00.047 0h15.689v-4.684h-4.787z"/><path fill="#3CA3F0" d="M88.865 39.378h1.233l.261-.693h-1.157c-.487.038-1.309-.071-1.494.878-.148.768.598.914.972.986.485.109.446.401.186.401h-2.8v-.402h1.157l.186-.766h-1.343v-.367h1.456l.224-.692h-2.65v2.703l-.858-.804s.559-.075.559-.84c0-.768-.522-1.06-1.009-1.06h-.372v.655h.186c.187 0 .187.11.187.221 0 .147.038.367-.074.367h-.298v1.242l.371.401h5.19c.449 0 1.047-.146 1.084-.841.037-.366-.149-.73-1.195-.912-.448-.073-.337-.476-.002-.477m-5.45-.655h-1.382v2.228l-1.083-2.228h-.558v1.095l.261.513h-.261v.84h.559l.188.44h1.866v-.842l.411.439v-1.242h-.411v-.587h.411v-.656zm-3.024 0h-1.232v2.886h.933v-.439h.3v-.84h-.3v-1.023l.3.511v-1.095z"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="-203.596" y1="154.4" x2="-203.596" y2="154.157" gradientTransform="matrix(90.2369 0 0 -102.726 18461.586 15888.1)"><stop offset="0" stop-color="#51cee4"/><stop offset=".424" stop-color="#51d1e1"/><stop offset=".767" stop-color="#53dbd9"/><stop offset="1" stop-color="#56e7d1"/></linearGradient><path fill="url(#c)" d="M80.188 32.117a1.955 1.955 0 00.036 2.807 2.06 2.06 0 002.832 0c.002 0 .004-.003.005-.004 2.951-2.883 7.731-2.879 10.678.008a7.277 7.277 0 01-.009 10.448c-2.949 2.882-7.727 2.88-10.674-.004l-.002.001a2.057 2.057 0 00-2.863.074 1.951 1.951 0 000 2.729l-.003.002a.184.184 0 00.027.023l.012.015c.014.014.028.024.042.037 4.575 4.391 11.922 4.32 16.41-.156a11.185 11.185 0 00-.159-16.058c-4.543-4.362-11.831-4.327-16.332.078z"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="-201.56" y1="152.668" x2="-201.76" y2="152.469" gradientTransform="matrix(79.517 0 0 -90.2716 16105.328 13804.072)"><stop offset="0" stop-color="#51cee4"/><stop offset=".424" stop-color="#51d1e1"/><stop offset=".767" stop-color="#53dbd9"/><stop offset="1" stop-color="#56e7d1"/></linearGradient><path fill="url(#d)" d="M64.32 41.544c-.82 1.031-2.339 1.216-3.394.415a2.33 2.33 0 01-.355-3.327l.001-.001 13.137-15.218a2.456 2.456 0 013.394-.414 2.333 2.333 0 01.354 3.329L64.32 41.544z"/></svg>
  </div>
  <div class="all">
  <aside class="fix-right-box" role="complementary">
    <div class="row text-center">
      <div class="col-xs-12">
        <h4 class="text-left main-color">資通電腦 - 竭誠為您服務</h4>
      </div>
      <div class="col-xs-3">
        <a href="tel:+886-2-2522-1351,,301" rel="nofollow">
          <p class="icon tel-w" aria-hidden="true"></p>
          <h5 class="main-color">02-2522-1351</h5>
          <sup>分機 301 汪小姐</sup>
        </a>
      </div>
      <div class="col-xs-3">
        <a href="/consult/">
          <p class="icon consultation-w" aria-hidden="true"></p>
          <h5 class="main-color" style="border-left: 1px solid #323232;border-right: 1px solid #323232;">表單諮詢</h5>
        </a>
      </div>
      <div class="col-xs-3">
        <a href="mailto:jenny@ares.com.tw" rel="nofollow">
          <p class="icon mail-w" aria-hidden="true"></p>
          <sup style="margin-top: 1.25em;">若有任何建議與問題歡迎來信詢問。</sup>
        </a>
      </div>
      <div class="col-xs-3">
        <a href="/epaper/subscribe/">
          <p class="icon paper" aria-hidden="true"></p>
          <h5 class="main-color" style="border-left: 1px solid #323232;">訂閱電子報</h5>
        </a>
      </div>
    </div>
  </aside>
  <div class="topbar">
    <div class="container">
      <div class="social">
          <!-- <a href="https://www.facebook.com/AresInternational/" rel="external nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
          <p class="select" role="listbox" tabindex="0">Language
            <span class="caret"></span>
            <small class="small-group">
              <!-- <a href="javascript:translatePage();" id="translateLink" title="并没有调整语意与图片，可能会出现不通顺之情况" rel="nofollow">简体</a> -->
              <a href="/en/" hreflang="en" role="option">English</a>
              <a href="https://www.areschina.com/" hreflang="zh-Hans" role="option">简中</a>
            </small>
          </p>
        <!-- search bar -->
          <form name="cse" id="searchbox" action="/search/" method="get">
            <div class="flex-box flex-nowrap">
              <label class="d-none hide" id="label-q">站內搜尋</label>
              <input type="hidden" name="cx" value="014374286183653546318:anrbmnt_9rc" />
              <input type="text" name="q" aria-labelledby="label-q" size="40" placeholder="站內搜尋" />
              <input class="formbutton" value="&nbsp;" type="submit" />
            </div>
          </form>
        <!-- search bar end -->
      </div>
    </div>
  </div>
  <header class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">
          <a href="/" aria-label="首頁">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/ares-logo.svg'); ?>
          </a>
        </div>
      </div>
      <nav id="navbar" class="navbar-rwd rwd navbar-right">
        <ul class="nav navbar-nav">
          <li>
            <a href="/" accesskey="1">首頁</a>
          </li>
          <li><a href="/events/y<?= $last_news_year ?>" accesskey="2">最新消息</a></li>
          <li class="relative host-fix pros">
            <a class="toggle" href="javascript:void(0)">專業服務<span class="caret"></span></a>
            <ul class="l2">
              <li><a href="/services/">資通專業服務</a></li>
              <li><a href="/services/outsourcing/">資訊委外服務</a></li>
              <!-- <li><a href="/services/consultant/">應用資訊顧問服務</a></li> -->
              <li><a href="/services/system-development-integration/">系統整合開發</a></li>
              <li><a href="/services/gov/">政府專案服務</a></li>
            </ul>
            <div class="under-nav">
              <div class="under-nav-table flex-box">
                <div class="flex-box flex-nowrap">
                  <div class="img-ctrl">
                    <img class="lazyload" data-src="/img/survice.jpg" alt="資通專業服務">
                  </div>
                  <ol class="">
                    <li><a href="/services/" accesskey="3">資通專業服務</a></li>
                    <li><a href="/services/outsourcing/">資通委外服務</a></li>
                    <!-- <li><a href="/services/consultant/">應用資訊顧問服務</a></li> -->
                    <li><a href="/services/system-development-integration/">系統整合開發</a></li>
                    <li><a href="/services/gov/">政府專案服務</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a class="toggle" href="javascript:void(0)">產品介紹<span class="caret"></span></a>
            <ul class="l2">
              <li><a href="/products/" accesskey="4">產品類別</a></li>
              <li><a href="/product-application">產業應用</a></li>
            </ul>
            <div class="under-nav" id="product-list">
              <div class="under-nav-table display-table">
                <div class="table-cell" style="border-right: 1px solid #e1e1e1;">
                  <h4><a href="/products/">產品類別</a></h4>
                  <div class="table-cell under-nav-table-cell">
                    <div class="p8"><a href="/products/#business">商業服務</a></div>
                    <ol>
                      <!-- <li><a href="https://argoerp.ares.com.tw/">ArgoERP 企業資源規劃系統</a></li> -->
                      <li><a href="https://cimes.ares.com.tw/">ciMes 製造執行系統</a></li>
                      <li><a href="https://hcp.ares.com.tw/">HCP 人力資產規劃系統</a></li>
                      <!-- <li><a href="/products/analyzer/">Analyzer 商業智慧動態決策分析工具</a></li> -->
                      <li><a href="/products/egui/">eGUI 電子發票管理系統</a></li>
                      <li><a href="/products/gv/">GV 統一發票管理系統</a></li>
                      <li><a href="/products/Local-Template/">NM / GIB / 十號公報</a></li>
                      <li><a href="https://oracle.ares.com.tw/">Oracle 升級、維護、客製</a></li>
                      <!-- <li><a href="/products/cmo/">CMO 企業報表管理系統</a></li> -->
                      <!-- <li><a href="/products/gcrs/">GCRS 集團合併報表系統</a></li> -->
                      <li><a href="/products/gd-crm/">GD-CRM 客戶關係管理系統</a></li>
                      <!-- <li><a href="/products/nhms/">NHMS 網路健康集成管理系統</a></li> -->
                      <!-- <li><a href="/products/powerbudget/">PowerBudget 企業預算編製系統</a></li> -->
                    </ol>
                  </div>
                  <div class="table-cell under-nav-table-cell">
                    <div class="p8"><a href="/products/#financial">金融服務</a></div>
                    <ol>
                      <li><a href="/products/afeis/" title="Advanced Foreign Exchange Integrated System">AFEIS 國內外匯電腦整合系統</a></li>
                      <li><a href="/products/eAresBank/">eAresBank 海外分行核心系統</a></li>
                      <li><a href="/products/cross-pricing/" title="ARES Cross Pricing System">ACPS 衍生性金融商品評價系統</a></li>
                      <!-- <li><a href="/products/fstp/">FSTP 基金自動化方案</a></li> -->
                      <li><a href="/products/nuntio/">ARES Nuntio 資通法規報表申報平台</a></li>
                      <!-- <li><a href="/products/swift/">SWIFT 全球金融通信之標準化平台</a></li> -->
                      <li><a href="/products/ascbs/" title="ARES Smart Core Banking System">ASCBS 大陸核心系統</a></li>
                      <li><a href="/products/treasury/">ARES Treasury System 財務交易系統</a></li>
                      <li><a href="/products/portfolio/">ARES Portfolio System 投資組合管理系統</a></li>
                      <li><a href="/products/siron-aml/">Siron® AML 洗錢防制解決方案</a></li>
                      <li><a href="http://portfolio.ares.com.tw/Visual-Pricing-Tool/">Visual Pricing Tool 視覺化圖型工具</a></li>
                      <li><a href="/products/ISDA-SIMM/">ISDA SIMM 原始保證金合規</a></li>
                      <li><a href="/products/fxns/">FXNS 外匯議價系統</a></li>
                    </ol>
                  </div>
                  <div class="table-cell under-nav-table-cell">
                    <div class="p8"><a href="/products/#security">資訊安全</a></div>
                    <ol>
                      <li><a href="https://pki.ares.com.tw/">uPKI 憑證驗證服務系統</a></li>
                      <li><a href="https://ares-pp.ares.com.tw/">ARES PP 隱私保鑣</a></li>
                      <li><a href="/products/fortify/">Fortify 原始碼檢測工具</a></li>
                      <!-- <li><a href="/products/ncsist/">中科院資安方案</a></li> -->
                    </ol>
                    <div id="slider-box">
                      <!-- <ul id="slider-img"> -->
                      <ul>
                        <li><a href="https://www.ares.com.tw/events/AresPP-patent-201705" rel="external"><img class="lazyload" data-src="/img/nav_slider/arespp201612.jpg" alt="數位文件定位方法專利肯定"></a></li>
                      </ul>
                      <!-- <ul id="slider-dot">
                        <li class="active"></li>
                        <li></li>
                      </ul> -->
                    </div>
                  </div>
                </div>
                <div class="table-cell" id="p-application">
                  <h4><a href="/product-application/">產業應用</a></h4>
                  <div class="table-cell under-nav-table-cell">
                    <ol>
                      <li><a href="/product-application/?t=car#car">汽車業</a></li>
                      <li><a href="/product-application/?t=bank#bank">銀行業</a></li>
                      <li><a href="/product-application/?t=food#food">食品業</a></li>
                      <li><a href="/product-application/?t=oil#oil">石油化學工業</a></li>
                      <li><a href="/product-application/?t=medical#medical">醫療保健業</a></li>
                      <li><a href="/product-application/?t=metal#metal">金屬加工業</a></li>
                      <li><a href="/product-application/?t=semiconductor#semiconductor">半導體產業</a></li>
                      <li><a href="/product-application/?t=optoelectronics#optoelectronics">電子零組件及光電製造業</a></li>
                      <li><a href="/product-application/?t=electronic#electronic">資通訊業</a></li>
                      <li><a href="/product-application/?t=tradi#tradi">傳產製造業</a></li>
                    </ol>
                  </div>
                  <div class="table-cell under-nav-table-cell">
                    <ol>
                      <li><a href="/product-application/?t=mech#mech">機械設備製造業</a></li>
                      <li><a href="/product-application/?t=trade#trade">運輸倉儲業</a></li>
                      <li><a href="/product-application/?t=immovable#immovable">不動產業</a></li>
                      <li><a href="/product-application/?t=retail#retail">零售批發業</a></li>
                      <li><a href="/product-application/?t=tour#tour">觀光餐飲業</a></li>
                      <li><a href="/product-application/?t=entertainment#entertainment">傳播娛樂業</a></li>
                      <li><a href="/product-application/?t=education#education">文教圖書產業</a></li>
                      <li><a href="/product-application/?t=insurance#insurance">保險業</a></li>
                      <li><a href="/product-application/?t=commerce#commerce">工商及個人服務業</a></li>
                      <li><a href="/product-application/?t=gov#gov">政府單位</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="relative host-fix">
            <a href="javascript:void(0)" class="toggle" >電子報<span class="caret"></span></a>
            <ul class="l2">
              <li><a href="/epaper/">各期期刊</a></li>
              <li><a href="/epaper/subscribe/">訂閱 / 退訂</a></li>
            </ul>
            <div class="under-nav">
              <div class="under-nav-table flex-box">
                <div class="flex-box flex-nowrap">
                  <div class="img-ctrl">
                      <svg fill="#2858aa" xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="-36 -36 96 96"><path d="M15.609 10.849h30.546v6.542H15.609v-6.542zm0-10.91h30.546v6.545H15.609V-.061zm0 21.82h30.546v6.543H15.609v-6.543zm34.91-45.819h-78.545c-4.8 0-8.729 3.926-8.729 8.726v56.729c0 4.798 3.928 8.727 8.729 8.727h78.545c4.798 0 8.727-3.929 8.727-8.727v-56.729c-.001-4.8-3.93-8.726-8.727-8.726zm0 65.456H11.246v-56.729h39.272v56.729z"></path></svg>
                    <!-- <h4></h4> -->
                  </div>
                  <ol>
                    <li><a href="/epaper/" accesskey="5">各期期刊</a></li>
                    <li><a href="/epaper/subscribe/" rel="nofollow">訂閱 / 退訂</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </li>
          <li><a href="/best-practices/" accesskey="6">成功案例</a></li>
          <li><a href="/consult/" accesskey="7">免費諮詢</a></li>
        </ul>
      </nav>
      <div class="navbar-toggle"><span></span></div>
    </div>
  </header>
  <div id="margin-nav" style="height: 0;" aria-hidden="true"></div>
