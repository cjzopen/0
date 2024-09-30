<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Fortify原始碼檢測工具-企業資安監測解決方案|資通電腦';
$page['description']='Fortify 源碼檢測工具，又稱原始碼檢測、程式碼檢測、白箱檢測、source code review，能找出程式資安漏洞及弱點，防堵惡意攻擊！Gartner 評鑑具資安領導地位，可強化網站與應用程式安全，減少網路資安風險。';
$page['canonical']='https://www.ares.com.tw/products/fortify/';
$page['css']=array('/css/product-fortify.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');

include (__DIR__.'/_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb">
      <div class="container">
        <ul class="row">
           
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="/" itemprop="url"><span itemprop="title">首頁</span></a>
          </li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="../"  itemprop="url"><span itemprop="title">產品類別</span></a>
          </li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="" itemprop="url"><span itemprop="title">Fortify</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center" id="title">
      <ul itemscope itemtype="http://data-vocabulary.org/WebPage">
        <li><a href="" class="act">產品簡介</a></li>
        <!-- <li><a itemprop="significantLink" href="why/">為何需要原始碼檢測</a></li> -->
        <!-- <li><a href="best-practice/">成功案例</a></li> -->
        <li><a href="articles/">相關文章</a></li>
        <li><a href="consult/">免費諮詢</a></li>
      </ul>
    </div>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center black-color">為何需要 Fortify 原始碼檢測？</h2>
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
      <h2 class="text-center black-color">Fortify 原始碼檢測專家 2018 再度獲 Gartner 肯定</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-md-6 hidden-xs">
          <img class="img-responsive center-block" src="/img/product/fortify/2018-gartner-fortify.png" alt="Fortify再度於2018年獲Gartner肯定">
        </div>
        <div class="col-xs-12 col-md-6">
          <p class="justify">Fortify 為第一個提供靜態應用程式安全測試（Static Application Security Testing， SAST）、動態應用系統安全測試（Dynamic Application Security Testing，DAST）、互動式應用系統安全測試（Interactive Application Security Testing，IAST）及程式執行階段自我保護（Runtime Application Self-Protection，RASP）的企業資安監測解決方案，能協助 IT 及開發人員透過靜態與動態程式碼分析，預先找出程式碼弱點、資安漏洞及惡意程式，確保原始碼（source code）安全無虞，防範企業損失。根據國際研調機構 Gartner 2018 魔力象限（Magic Quadrant）評比顯示，Fortify 再度榮獲 AST（Application Security Testing；應用程式安全性測試） 領導者的頭銜！以 AST 即服務交付模型進行測試，並提供多種功能，不論軟體處於正在部署、發展中或在規劃中的階段，皆可有效去除所有原始碼安全風險、監測安全性漏洞與即時報告，以滿足企業具體需求，並提供環境交付模式的選擇。</p><br>
          <small class="fortify">**Gartner 免責聲明**<br>提及的任何廠商、產品或服務背書，且不會建議技術用戶只選擇具有最高評等或其他稱謂的廠商。Gartner 研究刊物包含 Gartner 研究組織的意見，不應被解釋為事實陳述。Gartner 不為本研究提供任何明示或暗示的保證，包括適銷性或特定用途適用性的任何保證。</small>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">資安威脅無所不在 Fortify 黑白防駭兼內顧外</h2>
      <hr>
      <p class="justify">
        根據美國商務部國家技術與標準局（The Commerce Department's National Institute of Standards and Technology，NIST）研究指出，92% 可利用的安全弱點是在軟體程式中。從近年重大資安事件可以發現，駭客與犯罪集團擅長利用軟體資安漏洞進行竊取各項資料，包括客戶身分資料、訂單、智慧財產及現金，或是發起各種攻擊，中斷企業的營運，進而損害企業形象，並讓企業員工、客戶和公眾限於風險之中。
      </p>
      <br>
      <figure>
        <img src="/img/product/fortify/fortify-construction-1.png" alt="Fortify 黑白防駭兼內顧外" class="img-responsive center-block">
      </figure>
      <br>
    </div>
  </section>
  <section class="gray-bg">
    <h2 class="text-center">原始碼檢測與滲透測試 找出資安弱點</h2>
    <hr>
    <div class="container">
    <p class="justify">
      Fortify 能運用靜態原始碼檢測分析工具（Fortify Static Code Analyzer，Fortify SCA）與 WebInspect 動態弱點掃描檢測工具。進行靜態源始碼檢測與動態應用系統滲透測試的交叉關聯分析，找出惡意程式、安全弱點與資安漏洞產出報告，深入目前企業資安威脅，並對應到此問題所在的程式碼行數，讓資安人員能快速修復這些資安弱點。亦可針對開發、品質保證（Quality Assurance，QA）或生產環境中執行的應用，迅速鑑別和驗證其中的重大高風險資安漏洞。杜絕惡意程式攻擊 360 度全方位守護企業資安並且降低維運成本。
    </p>
    <br>
    <div class="row">
      <div class="flex-box">
      <div class="col-xs-12 col-sm-6 safari-bug">
        <div class="panel wow fadeInUp">
        <div class="panel-heading" style="background-color:#C2DDA6;"><strong>Fortify SCA 靜態原始碼檢測分析工具</strong></div>
        <div class="panel-body">
          <ul class="disc">
          <li>透過掃描應用軟體原始碼比任何其他的程式碼檢測工具，檢測到更多潛在的資安漏洞類型</li>
          <li>指出安全弱點的根本原因及它所對應的程式碼行數</li>
          <li>幫助在修復成本最少及修復最簡單的開發階段，檢測出程式碼重要安全問題</li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 safari-bug">
        <div class="panel wow fadeInUp">
        <div class="panel-heading" style="background-color:#ADCDD8;"><strong>WebInspect 動態弱點掃描檢測工具</strong></div>
        <div class="panel-body">
          <ul class="disc">
          <li>使用全面的攻擊場景模擬方式，檢測運行中 Web 網站和 Web 服務的安全漏洞</li>
          <li>協助驗證一個特定的漏洞，在實務上是否可以被利用的資安漏洞</li>
          <li>協助確認安全問題所在與發生原因，加快軟體修復速度</li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">Fortify 產品架構</h2>
    <hr>
    <figure>
    <img src="/img/product/fortify/fortify-construction-2.png" alt="產品架構" class="img-responsive center-block">
    </figure>
    <br>
  </section>
  <section class="gray-bg">
    <h2 class="text-center">Fortify 產品效益</h2>
    <hr>
    <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <ul class="check">
        <li>找出已部署軟體，目前有哪些軟體安全問題</li>
        <li>減少自行開發中或向供應商採購中的軟體風險</li>
        <li>滿足遵守內部安全規範或外部安全法的目標</li>
        <li>儀表板提供檢測結果的即時可視性與互動操作</li>
        <li>自動化檢測流程修復經驗可以重複分享</li>
        <li>主動式軟體安全管理，可軟體安全導入到所有軟體開發的流程中</li>
        <li>整合業界的 QA、軟體開發環境（Integrated Development Environment，IDE）工具與臭蟲追蹤系統，加快漏洞修復</li>
      </ul>
      </div>
    </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">Fortify 企業資安監測方案</h2>
    <hr>
    <div class="container text-center">
    <div class="row">
      <div class="flex-box">
      <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft">
        <div class="">
        <img class="lazyload" data-src="/img/product/fortify/fortify-1.svg" alt="*">
        <p>減少尋找及修復軟體中的漏洞問題的時間</p>
        <hr class="n">
        <p class="blue-color">
          從原本 2 週到 1 小時
        </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft">
        <div class="">
        <img class="lazyload" data-src="/img/product/fortify/fortify-2.svg" alt="*">
        <p>降低開發，修復漏洞及遵守法規的相關成本</p>
        <hr class="n">
        <p class="blue-color">
          平均每年節省約 380 萬美元
        </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft">
        <div class="">
        <img class="lazyload" data-src="/img/product/fortify/fortify-3.svg" alt="*">
        <p>自動化的應用程式安全流程可以提升生產力</p>
        <hr class="n">
        <p class="blue-color">
          高達 3,700 萬美元年收益
        </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft">
        <div class="">
        <img class="lazyload" data-src="/img/product/fortify/fortify-4.svg" alt="*">
        <p>確保沒有軟體安全漏洞的延遲，可以加速產品上市</p>
        <hr class="n">
        <p class="blue-color">
          重複的漏洞從 80％ 減至幾乎為零
        </p>
        </div>
      </div>
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
    $thumbnail_html.='<div class="col-xs-12 col-sm-6 col-md-3"><div class="thumbnail thumbnail-s flex-box flex-vc wow fadeInLeft"><img src="'.$key['img'].'" alt="'.$key['alt'].'" class="img-responsive center-block"></div></div>';
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
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<script>
// firefox focus and safari bug
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0)) {
  $('body').append("<style type='text/css'>@media (min-width: 768px) { .safari-bug-height{height:400px;} }</style>");
  $('.safari-bug').addClass('safari-bug-height');
}
</script>
</body>
</html>

