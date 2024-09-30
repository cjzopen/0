<?php
$host_link = 'https://www.ares.com.tw/';
$global_db = "sqlite:/sites/global/events.db";
$epaper_db = "sqlite:/sites/global/epaper.db";
try {
    $db = new PDO($epaper_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'epaper connection failed: ' . $e->getMessage();
    exit;
}
// nav 電子報
if(empty($row5['img'])){
    $sql = sprintf("SELECT * FROM newsletter ORDER BY month DESC LIMIT 1");
    $stmt5 = $db->query($sql);
    $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
    $row5['img'] ='https://www.ares.com.tw'.$row5['image'];
}
$db= null;
$sql = null;
$stmt5 = null;
$nowUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Ares">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
<!-- End Google Tag Manager -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<noscript>
<style>
body * {display: none;}p.nojs {display: block !important;}
</style>
<!-- Google Tag Manager (noscript) -->
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
<!-- End Google Tag Manager (noscript) -->
</noscript>

<!--
                                      _
                                   _ooOoo_
                                  o8888888o
                                  88" . "88
                                  (| -_- |)
                                  O\  =  /O
                               ____/`- -'\____
                             .'  \\|     |//  `.
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
                       佛祖保佑    bug退散     永不當機

-->

<body>
    <p class="nojs hidden">JavaScript must be enabled to view this page's content.</p>
    <div class="all">
    <div class="fix-right-box">
        <div class="row text-center">
            <div class="col-xs-12">
                <h2 class="text-left main-color">資通電腦 - 竭誠為您服務</h2>
            </div>
            <div class="col-xs-3">
                <a href="tel:+886-2-2522-1351,,301">
                    <p class="icon tel-w"></p>
                    <h3>02-2522-1351</h3>
                    <sup>分機 301 汪小姐</sup>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="/consult/">
                     <p class="icon consultation-w"></p>
                    <h3 style="border-left: 1px solid #323232;border-right: 1px solid #323232;">線上諮詢</h3>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="mailto:jenny@ares.com.tw">
                    <p class="icon mail-w"></p>
                    <h5 style="margin-top: 1.25em;">若有任何建議與問題歡迎來信詢問。</h5>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="/epaper/subscribe/">
                    <p class="icon paper"></p>
                    <h3 style="border-left: 1px solid #323232;">訂閱電子報</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class=" col-xs-12 social text-right">
                    <a href="https://www.facebook.com/AresInternational/" rel="external"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <p class="select">Language
                        <span class="caret"></span>
                        <small class="small-group">
                            <a href="/en/" hreflang="en">English</a>
                            <a href="/th/" hreflang="th">ภาษาไทย</a>
                            <!-- <a href="http://www.areschina.com/" hreflang="zh-Hans">简体</a> -->
                        </small>
                    </p>
                <!-- search bar -->
                    <form name="cse" id="searchbox" action="/search/" method="get">
                        <div class="flex-box flex-nowrap">
                            <input type="hidden" name="cx" value="001413436045317332895:_8dhnmhf2qm" />
                            <input type="text" name="q" size="40" placeholder="自訂搜尋" />
                            <input class="formbutton" value="&nbsp;" type="submit" />
                        </div>
                    </form>
                <!-- search bar end -->
                </div>
            </div>
        </div>
    </div>
    <header class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="/" title="首頁">
                        <img src="/img/ares-logo.svg" alt="Ares">
                    </a>
                </div>
            </div>
            <nav id="navbar" class="navbar-rwd rwd navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?= @$pageName=='home' ? 'act' : '' ?>">
                        <a href="/" accesskey="1">首頁</a>
                    </li>
                    <li class="<?= @$pageName=='news' ? 'act' : '' ?>"><a href="/events/" accesskey="2">最新消息</a></li>
                    <li class="relative host-fix pros <?= @$pageName=='service' ? 'act' : '' ?>">
                        <a class="toggle" href="javascript:void(0)">專業服務<span class="caret"></span></a>
                        <ul class="l2">
                            <li><a href="/services/">資通專業服務</a></li>
                            <li><a href="/services/outsourcing/">資通委外服務</a></li>
                            <!-- <li><a href="/services/consultant/">應用資訊顧問服務</a></li> -->
                            <li><a href="https://oracle.ares.com.tw">顧問諮詢服務</a></li>
                            <li><a href="/services/gov/">政府專案服務</a></li>
                        </ul>
                        <div class="under-nav">
                            <div class="under-nav-table flex-box">
                                <div class="flex-box flex-nowrap">
                                    <div class="img-ctrl">
                                        <img src="/img/survice.jpg" alt="資通專業服務">
                                    </div>
                                    <ol class="">
                                        <li><a href="/services/">資通專業服務</a></li>
                                        <li><a href="/services/outsourcing/">資通委外服務</a></li>
                                        <!-- <li><a href="/services/consultant/">應用資訊顧問服務</a></li> -->
                                        <li><a href="https://oracle.ares.com.tw">顧問諮詢服務</a></li>
                                        <li><a href="/services/gov/">政府專案服務</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?= @$pageName=='product' ? 'act' : '' ?>">
                        <a class="toggle" href="javascript:void(0)">產品介紹<span class="caret"></span></a>
                        <ul class="l2">
                            <li><a href="/products/" accesskey="3">產品類別</a></li>
                            <li><a href="/product-application">產業應用</a></li>
                        </ul>
                        <div class="under-nav">
                            <div class="under-nav-table display-table">
                                <div class="table-cell" style="border-right: 1px solid #e1e1e1;">
                                    <h2><a href="/products/">產品類別</a></h2>
                                    <ol class="table-cell">
                                        <h5><a href="/products/#business">商業服務</a></h5>
                                        <li><a href="https://argoerp.ares.com.tw/">ArgoERP 企業資源規劃系統</a></li>
                                        <li><a href="https://cimes.ares.com.tw/">ciMes 製造執行系統</a></li>
                                        <li><a href="https://hcp.ares.com.tw/">HCP 人力資產規劃系統</a></li>
                                        <?php //<li><a href="/products/plm/">Agile PLM 產品生命週期管理系統</a></li> ?>
                                        <!-- <li><a href="/products/analyzer/">Analyzer 商業智慧動態決策分析工具</a></li> -->
                                        <li><a href="/products/Local-Template/">eGUI / GV / NM / GIB / 十號公報</a></li>
                                        <li><a href="https://oracle.ares.com.tw/">ORACLE 顧問諮詢服務</a></li>
                                        <!-- <li><a href="/products/cmo/">CMO 企業報表管理系統</a></li> -->
                                        <!-- <li><a href="/products/gcrs/">GCRS 集團合併報表系統</a></li> -->
                                        <li><a href="/products/gd-crm/">GD-CRM 客戶關係管理系統</a></li>
                                        <!-- <li><a href="/products/nhms/">NHMS 網路健康集成管理系統</a></li> -->
                                        <!-- <li><a href="/products/powerbudget/">PowerBudget 企業預算編製系統</a></li> -->
                                    </ol>
                                    <ol class="table-cell">
                                        <h5><a href="/products/#financial">金融服務</a></h5>
                                        <li><a href="/products/afeis/">AFEIS 國內外匯電腦整合系統</a></li>
                                        <li><a href="/products/eAresBank/">eAresBank 海外分行核心系統</a></li>
                                        <!-- <li><a href="/products/fstp/">FSTP 基金自動化方案</a></li> -->
                                        <li><a href="/products/nuntio/">ARES Nuntio 資通法規報表申報平台</a></li>
                                        <!-- <li><a href="/products/swift/">SWIFT 全球金融通信之標準化平台</a></li> -->
                                        <li><a href="/products/ascbs/">ARES Smart Core Banking System 大陸核心系統</a></li>
                                        <li><a href="/products/treasury/">ARES Treasury System 財務交易系統</a></li>
                                        <li><a href="/products/portfolio/">ARES Portfolio System 投資組合管理系統</a></li>
                                        <li><a href="http://portfolio.ares.com.tw/Visual-Pricing-Tool/">Visual Pricing Tool 視覺化圖型工具</a></li>
                                    </ol>
                                    <ol class="table-cell">
                                        <h5><a href="/products/#security">資訊安全</a></h5>
                                        <li><a href="https://pki.ares.com.tw/">uPKI 憑證驗證服務系統</a></li>
                                        <li><a href="https://ares-pp.ares.com.tw/">ARES PP 隱私保鑣</a></li>
                                        <li><a href="/products/fortify/">Fortify 企業資安監測方案</a></li>
                                        <li><a href="/products/ncsist/">中科院資安方案</a></li>
                                        <div id="slider-box">
                                            <!-- <ul id="slider-img"> -->
                                            <ul>
                                                <li><a href="https://www.ares.com.tw/events/AresPP-patent-201705" rel="external"><img src="/img/nav_slider/arespp201612.jpg" alt="ares-pp event"></a></li>
                                            </ul>
                                            <!-- <ul id="slider-dot">
                                                <li class="active"></li>
                                                <li></li>
                                            </ul> -->
                                        </div>
                                    </ol>
                                </div>
                                <div class="table-cell" id="p-application">
                                    <h2><a href="/product-application/">產業應用</a></h2>
                                    <ol class="table-cell">
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
                                    <ol class="table-cell">
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
                    </li>
                    <li class="relative host-fix <?= @$pageName=='newsletter' ? 'act' : '' ?>">
                        <a href="javascript:void(0)" class="toggle" >電子報<span class="caret"></span></a>
                        <ul class="l2">
                            <li><a href="<?= $row5['link'] ?>" rel="external">本月電子報</a></li>
                            <li><a href="/epaper/">各期期刊</a></li>
                            <li><a href="/epaper/subscribe/">訂閱 / 退訂</a></li>
                        </ul>
                        <div class="under-nav">
                            <div class="under-nav-table flex-box">
                                <div class="flex-box flex-nowrap">
                                    <div class="img-ctrl">
                                        <a href="<?= $row5['link'] ?> " rel="external" title="<?= $row5['title'] ?>"><img src="<?= $row5['img'] ?>" alt="<?= $row5['title'] ?>"></a>
                                        <!-- <h4></h4> -->
                                    </div>
                                    <ol>
                                        <li><a href="<?= $row5['link'] ?>" rel="external">本月電子報</a></li>
                                        <li><a href="/epaper/" accesskey="4">各期期刊</a></li>
                                        <li><a href="/epaper/subscribe/">訂閱 / 退訂</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?= @$pageName=='bestPractice' ? 'act' : '' ?>"><a href="/best-practice/" accesskey="5">成功案例</a></li>
                    <li class="<?= @$pageName=='consult' ? 'act' : '' ?>"><a href="/consult/" accesskey="6">免費諮詢</a></li>
                </ul>
            </nav>
            <button type="button" class="navbar-toggle" >
                <span></span>
            </button>
        </div>
    </header>
    <div id="margin-nav" style="height: 0;"></div>
