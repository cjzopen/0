<?php
$url='https://www.ares.com.tw/products/fortify/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);
exit;

require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='為何需要Fortify原始碼檢測 | 資通電腦';
$page['description']='Fortify 協助 IT 及開發人員透過程式碼分析，預先找出程式碼弱點、降低資安漏洞及惡意程式風險。且可搭配 WebInspect 滲透測試，進行交叉關聯分析，迅速鑑別驗證資安漏洞，降低資安維運成本。';
$page['canonical']='https://www.ares.com.tw/products/fortify/why/';
$page['css']=array('/css/product-fortify.css');
$page['other']=array('<link rel="prev" href="https://www.ares.com.tw/products/fortify/">','<link rel="next" href="https://www.ares.com.tw/products/fortify/articles/">');
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
            <a href="../" itemprop="item"><span itemprop="name">Fortify</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">為何需要原始碼檢測</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('../_nav.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center black-color">為何需要 Fortify 原始碼（source code）檢測？</h2>
        <hr>
        <div class="row">
          <div class="col-sm-12 col-lg-10 col-lg-push-1">
<?php
$accordion =array(
  array(
    'q' => 'Fortify SCA（Static Code Analysis，靜態程式碼安全檢測）協助企業公司內部應用程式，以及混合型 IT 基礎架構，免於複雜的網路威脅與攻擊',
    'a' => '<ul class="disc"><li>支援 25 種程式設計語言</li><li>超過 911,000 個元件層級的 API</li><li>可偵測 961 種獨特的弱點類別</li><li>支援所有主要平台、建置環境以及 IDE</li></ul>'
  )
  ,array(
    'q' => 'Fortify 提出對應以下國際常見安全弱點分類列表的七種致命錯誤（Seven Pernicious Kingdoms）統一重大弱點標準與認知',
    'a' => '<ul class="disc"><li>OWASP Top 10</li><li>SANS Top 25</li><li>CWE 常見弱點列表</li><li>FISMA 聯邦資訊安全管理法案</li></ul>'
  )
  ,array(
    'q' => '應用程式安全已是企業網路管理的重要環節',
    'a' => '<ul class="disc"><li>已有超過 84％ 的安全漏洞發生在應用程式。 -- <cite>Gartner 魔力象限報告</cite></li><li>關鍵的 Web 安全漏洞幾乎影響了所有 Web 應用程式的一半。 -- <cite>Micro Focus 網路風險報告 2015</cite></li><li>52％ 的 Web 應用程式遇到輸入驗證（input validation）跨站腳本攻擊（Cross-Site Scripting，XSS），和 SQL 資料隱碼攻擊（SQL injection）的問題。 -- <cite>Micro Focus 網路風險報告 2015</cite></li><li>33％ 的應用程式從未測試過安全漏洞。 -- 研究：<cite>Mobile Application Developers Not Invest ing in Security March 20, 2015</cite></li></ul>'
  )
);
$i=0;
$checked = 'checked="checked"';
foreach ($accordion as $key) {
  $i++;
  if($i !== 1){
    $checked = '';
  }
?>
            <div class="accordion mb-0 no-border">
              <input type="radio" id="ac-<?= $i ?>" name="acc" <?= $checked ?> />
              <label class="main-cross d-flex" for="ac-<?= $i ?>" aria-haspopup="true">
                <span class="pl-1 pr-1"><?= $key['q'] ?></span>
              </label>
              <article class="accordion-body p-0 border-bottom gray-bg" aria-labelledby="ac-<?= $i ?>">
                <div class="d-flex px-3 pt-2">
                  <div class="pl-1"><?= $key['a'] ?></div>
                </div>
              </article>
            </div>
<?php
}
?>
          </div>
        </div>
      </div>
    </section>
    <section class="gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <img src="/img/product/fortify/fortify-icon.svg" alt="*" class="img-responsive center-block">
            <br>
          </div>
          <div class="col-xs-12 col-sm-6">
            <h2 class="underline">這些常見 SCA 問題 Fortify 做得到</h2><br>
              <ul class="check block">
                <li>透過編譯後進行程式碼掃描，有心者無法移除問題程式避免資安漏洞產生，亦可掃描直譯式的語言例如 JavaScript、Python、Ruby、PHP。</li>
                <li>採用指令掃描並在本機執行，無須另外上傳，所以不論集中或分散都可以執行，並可掃描打包程式。</li>
                <li>有配合的黑箱軟體 WebInspect 達到交叉分析的功能。</li>
                <li>提供多樣化的 plugin 掃描簡化，讓開發人員在自己環境上掃描。</li>
                <li>不限制單一時間只能掃描一個 AP，避免無上限掃描的費用增加。</li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">SCA 最佳選擇</h2>
        <hr>
        <ul class="check">
          <li>Gartner 2018 魔力象限報告 Leaders</li>
          <li>可支援最多掃描平台</li>
          <li>支援掃描語言最多高達 25 種</li>
          <li>可掃描的問題多達 961 個類型</li>
          <li>可支援手機開發</li>
          <li>可支援混合語言掃描</li>
          <li>掃描精確度高</li>
          <li>可支援交叉分析</li>
          <li>可支援分散掃描</li>
          <li>可以客製化</li>
          <li>可調整掃描政策 </li>
          <li>可整合版本控制軟體</li>
          <li>提供政策預警機制</li>
        </ul>
      </div>
    </section>
    <section class="gray-bg" id="language">
      <h2 class="text-center">Fortify 支援最多語言及架構</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="flex-box">
<?php
$thumbnail_html='';
$thumbnail = array(
  array(
    'img' => '/img/product/fortify/logo/1-android.png',
    'alt' => 'android'
  )
  ,array(
    'img' => '/img/product/fortify/logo/2-Apex.png',
    'alt' => 'Apex'
  )
  ,array(
    'img' => '/img/product/fortify/logo/3-asp-net-tutorial.png',
    'alt' => 'asp .net'
  )
  ,array(
    'img' => '/img/product/fortify/logo/4-c-logo.png',
    'alt' => 'c'
  )
  ,array(
    'img' => '/img/product/fortify/logo/5-C-plus_Logo.png',
    'alt' => 'c++'
  )
  ,array(
    'img' => '/img/product/fortify/logo/6-cobol.png',
    'alt' => 'cobol'
  )
  ,array(
    'img' => '/img/product/fortify/logo/7-ColdFusion_8_icon.png',
    'alt' => 'Cold Fusion'
  )
  ,array(
    'img' => '/img/product/fortify/logo/8-Flex-Logo.png',
    'alt' => 'Flex'
  )
  ,array(
    'img' => '/img/product/fortify/logo/9-HTML5_logo_and_wordmark.svg.png',
    'alt' => 'HTML5'
  )

  ,array(
    'img' => '/img/product/fortify/logo/10-Java_logo.png',
    'alt' => 'java'
  )
  ,array(
    'img' => '/img/product/fortify/logo/11-javascript.png',
    'alt' => 'javascript'
  )
  ,array(
    'img' => '/img/product/fortify/logo/12-net.png',
    'alt' => '.net'
  )
  ,array(
    'img' => '/img/product/fortify/logo/13-objective-C.png',
    'alt' => 'objective-C'
  )
  ,array(
    'img' => '/img/product/fortify/logo/14-oracleplsql.png',
    'alt' => 'oracle'
  )
  ,array(
    'img' => '/img/product/fortify/logo/15-PHP-logo.svg.png',
    'alt' => 'php'
  )
  ,array(
    'img' => '/img/product/fortify/logo/16-PUdcowtEg.png',
    'alt' => 'python'
  )
  ,array(
    'img' => '/img/product/fortify/logo/17-ruby.png',
    'alt' => 'ruby'
  )
  ,array(
    'img' => '/img/product/fortify/logo/18-SAP-ABAP.jpg',
    'alt' => 'sap'
  )
  ,array(
    'img' => '/img/product/fortify/logo/19-SWIFT.jpg',
    'alt' => 'swift'
  )
  ,array(
    'img' => '/img/product/fortify/logo/20-Tsql-icon.png',
    'alt' => 't-sql'
  )
  ,array(
    'img' => '/img/product/fortify/logo/21-unnamed.png',
    'alt' => 'unnamed'
  )
  ,array(
    'img' => '/img/product/fortify/logo/22-Visual_Basic_6.0_logo.png',
    'alt' => 'Visual Basic 6.0'
  )
  ,array(
    'img' => '/img/product/fortify/logo/23-visualbasic1.png',
    'alt' => 'vb'
  )
  ,array(
    'img' => '/img/product/fortify/logo/24-windows-mobile-logo.png',
    'alt' => 'windows mobile'
  )
  ,array(
    'img' => '/img/product/fortify/logo/25-XML-integration.jpg',
    'alt' => 'xml'
  )
);
foreach ($thumbnail as $key) {
  $thumbnail_html.='<div class="col-xs-6 col-sm-4 col-md-3"><div class="thumbnail thumbnail-s flex-box flex-vc wow fadeInLeft"><img src="'.$key['img'].'" alt="'.$key['alt'].'" class="img-responsive center-block"></div></div>';
}
echo $thumbnail_html;
?>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <h2 class="text-center">產品諮詢</h2>
      <hr>
<?php
$eventsConsult='../consult/';
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<script src="/js/main2016.js" async></script>
</body>
</html>

