<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='什麼是源碼檢測？Fortify從源頭掃描程式原始碼漏洞 - 資通電腦';
$page['description']='源碼檢測是什麼？Fortify SCA靜態與WebInspect動態的弱點掃描檢測有何不同？如何區別與運用，立即費用諮詢。';
$page['canonical']='https://www.ares.com.tw/products/fortify/';
$page['css']=array('/css/product-fortify.css?1');

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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">Fortify</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('_nav.php');
?>
  </div>
  <section>
    <h1 class="text-center hr">什麼是源碼檢測？Fortify 靜態與動態弱點檢測有何不同？</h1>
    <div class="container">
      <h2>應用程式安全檢測對法規的重要性</h2>
      <p>全球數位化趨勢加劇網路安全風險，促使企業資安防護開始受到外部法規要求。公家機關、金融機構及上市櫃公司陸續面臨需執行源碼檢測、動態應用程式檢測的要求，以確保程式及網頁的安全性。</p>
      <h2>源碼檢測（靜態應用程式檢測）</h2>
      <p>源碼檢測又稱原始碼檢測、SAST、白箱測試、靜態應用程式檢測，是針對應用程式的原始碼進行測試與分析，找出潛在的漏洞與弱點並進行修補作業，並非檢查已完成的程式。所以建議在開發階段導入，才能大幅節省修復成本與時間。</p>
      <h2>動態應用程式檢測</h2>
      <p>而動態應用程式檢測又稱為黑箱測試、DAST，是透過模擬駭客攻擊的手法，由外而內搜索正在運行中的應用程式漏洞，當發現有漏洞時會自動發送警訊，因此可檢測出靜態應用程式安全測試工具無法識別的缺陷。</p>
      <h2 class="text-center mt-5 hr">運用 Fortify 找出漏洞落實資安防護</h2>
      <p>Fortify 是一款強大的源碼檢測解決方案，能幫助開發人員及時發現潛在的原始碼資安漏洞，並協助修復；另外，Fortify 還支援多種語言，以滿足不同類型的應用程式開發需求。</p>
      <p>運用 Fortify SCA（Static Code Analyzer）靜態原始碼檢測分析工具與 WebInspect 動態應用程式檢測工具進行測試與分析，找出程式碼或網站中的安全弱點與資安漏洞產出報告，深入目前企業資安威脅，並對應到此問題所在的程式碼行數，讓資安人員能快速修復安全弱點。亦可針對開發、品質保證（Quality Assurance，QA）或生產環境中執行的程式安全應用，迅速鑑別和驗證其中的重大高風險資安漏洞，杜絕惡意程式攻擊 360 度全方位守護企業資安並且降低維運成本。</p>
      <div class="row pt-3">
        <div class="col-12 col-md-6 mb-3">
          <div class="bg-white rounded overflow-hidden h-100">
            <div class="px-3 py-2" style="background-color:#C2DDA6;"><strong>Fortify SCA 靜態原始碼檢測分析工具</strong></div>
            <div class="p-3 border">
              <ul class="disc">
                <li>快速找到資安弱點與漏洞位置</li>
                <li>指出安全弱點詳情，並提供修復建議</li>
                <li>節省程式開發及弱點修復的成本</li>
                <li>確保系統上線服務的安全性</li>
              </ul>
              <div class="text-right">
                <a href="https://marketing.ares.com.tw/newsletter/2020-03-cyber-security/fortify-code-scanning#:~:text=%E4%BF%AE%E5%BE%A9%E7%9A%84%E6%88%90%E6%9C%AC%E3%80%82-,%E6%8E%A1%E7%94%A8%20Fortify%20SCA%20%E7%9A%84%E5%84%AA%E9%BB%9E,-%E5%8F%AF%E5%9C%A8%E6%9C%AC%E6%A9%9F%E5%9F%B7%E8%A1%8C" class="btn btn-info color-white" rel="noopener noreferrer" target="_blank">深入瞭解 Fortify SCA</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="bg-white rounded overflow-hidden h-100">
            <div class="px-3 py-2 bg-blue2"><strong>WebInspect 動態應用程式測試工具</strong></div>
            <div class="p-3 border">
              <ul class="disc">
                <li>使用全面的攻擊場景模擬方式，檢測運行中的網站和 web 服務安全漏洞</li>
                <li>協助驗證一個特定的程式漏洞，在實務上是否可以被利用的資安漏洞</li>
                <li>協助確認資訊安全問題所在與發生原因，加快軟體程式修復速度</li>
              </ul>
              <div class="text-right">
                <a href="https://marketing.ares.com.tw/newsletter/2018-03-cyber-security/focus#:~:text=WebInspect%20%E6%BB%B2%E9%80%8F%E6%B8%AC%E8%A9%A6%E8%AE%93%E8%B3%87%E5%AE%89%E6%BC%8F%E6%B4%9E%E3%80%81%E5%BC%B1%E9%BB%9E%E7%84%A1%E6%89%80%E9%81%81%E5%BD%A2" class="btn btn-info color-white" rel="noopener noreferrer" target="_blank">深入瞭解 WebInspect</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 text-center mt-3">
          <a href="https://youtu.be/4cXzh6cu3Kg" target="_blank" rel="noopener noreferrer" title="影片:快速了解fortify"><img class="img-fluid" loading="lazy" width="600" height="338" src="/img/product/fortify/fortify-movie.jpg" alt="快速了解fortify源碼檢測"></a>
          <div>快速了解 Fortify 源碼檢測與資通電腦的優勢</div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center hr">Fortify 源碼檢測工具 從源頭去除資安弱點</h2>
      <ul class="check">
        <li>找出已部署軟體，目前有哪些軟體安全問題</li>
        <li>減少自行開發中或向供應商採購中的軟體風險</li>
        <li>滿足遵守內部安全規範或外部安全法的目標</li>
        <li>儀表板提供檢測結果的即時可視性與互動操作</li>
        <li>自動化檢測流程修復經驗可以重複分享</li>
        <li>主動式軟體安全管理，軟體可安全導入到所有軟體開發的流程中</li>
        <li>整合業界的 QA、軟體開發環境（Integrated Development Environment，IDE）工具與臭蟲追蹤系統，加快漏洞修復</li>
      </ul>
      <div class="row justify-content-center">
        <div class="col-12">
          <figure class="text-center my-3">
            <img loading="lazy" width="720" height="301" src="/img/product/fortify/fortify-construction-1.png" alt="Fortify 黑白防駭兼內顧外" class="img-fluid">
          </figure>
        </div>
      </div>
      <h2 class="text-center mb-3">多數「應用程式」含有高風險弱點</h2>
      <div class="black-card mb-5">
        <div class="p-3 bg-black color-white">
          <strong class="pb-3 text-warning">Gartner：</strong>
          <p>75% 的駭客攻擊來自應用程式</p>
        </div>
        <div class="p-3 bg-black color-white">
          <strong class="pb-3 text-warning">NIST：</strong>
          <p>92% 可利用的安全弱點是在軟體程式中</p>
        </div>
        <div class="p-3 bg-black color-white">
          <strong class="pb-3 text-warning">Micro Focus：</strong>
          <p>80% web 應用程式至少含有一個重大或高危險性弱點</p>
        </div>
        <div class="p-3 bg-black color-white">
          <strong class="pb-3 text-warning">近期重大資安事件：</strong>
          <p>駭客與犯罪集團擅長利用軟體資安漏洞進行竊取各項資料，包括客戶身分資料、訂單、智慧財產及現金，或是發起各種攻擊，中斷企業的營運，進而損害企業形象，並讓企業員工、客戶和公眾限於風險之中。</p>
        </div>
      </div>
      <h2 class="text-center">程式原始碼檢測解決方案</h2>
      <ul class="check block">
        <li>靜態應用程式安全測試 SAST（Static Application Security Testing）</li>
        <li>動態應用系統安全測試 DAST（Dynamic Application Security Testing）</li>
        <li>互動式應用系統安全測試 IAST（Interactive Application Security Testing）</li>
        <li>程式執行階段自我保護 RASP（Runtime Application Self-Protection）</li>
      </ul>
      <p>協助 IT 及開發人員透過靜態程式碼與動態應用程式分析，預先找出程式碼弱點、資安漏洞及惡意程式，確保原始碼（source code）安全無虞，防範企業資安威脅與損失。</p>
    </div>
  </section>
  <section id="language">
    <h2 class="text-center hr">支援各式開發語言及架構</h2>
    <div class="container">
      <p class="px-md-3">Fortify 支援 ABAP／BSP、ActionScript、Apex、ASP.NET、C#（.NET）、C／C++、Classic ASP（with VBScript）、COBOL、ColdFusion CFML、Go（GoLang）、HTML、Java（Android）、 JavaScript／AJAX、JSP、MXML（Flex）、Objective C／C++、PHP、PL／SQL、Python、Ruby、Scala、Swift、T-SQL、VB.NET、VBScript、Visual Basic、XML 等語言與架構。符合開發人員使用需求，且實現法規遵循之要求，並持續更新中。</p>
      <strong class="px-md-3">如果您已用過其他源碼檢測工具，但很多語言及架構不支援，請你一定要試試看 Fortify，感受支援廣泛語言及框架所帶來的方便性，滿足程式開發需求。</strong>
      <div class="text-center py-5">
        <a href="consult/?p=howmuch" class="howmuch btn btn-info color-white p-3">立即詢問計費方式</a>
      </div>
      <ul class="row">
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
  ,array(
    'img' => '/img/product/fortify/logo/golang.png',
    'alt' => 'GoLang'
  )
  ,array(
    'img' => '/img/product/fortify/logo/scala.png',
    'alt' => 'Scala'
  )
);
foreach ($thumbnail as $key) {
  $thumbnail_html.='<li class="col-4 col-md-2"><div class="rounded border my-2 d-flex justify-content-center align-items-center"><img width="260" height="200" loading="lazy" src="'.$key['img'].'" alt="'.$key['alt'].'" title="'.$key['alt'].'" class="img-fluid"></div></li>';
}
echo $thumbnail_html;
?>
      </ul>
    </div>
  </section>
  <section id="sca" class="bg-gray">
    <h2 class="text-center hr">Fortify SCA 的五大優勢</h2>
    <div class="container">
      <ul class="check">
        <li>
          <div>
            <div><strong>使用整合式靜態應用程式安全檢測進行安全編碼</strong></div>
            <div>
              <p>在編碼過程中可即時發現並修復安全弱點。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it#:~:text=%E5%85%BC%E9%A1%A7%E6%87%89%E7%94%A8%E7%A8%8B%E5%BC%8F%E5%AE%89%E5%85%A8%E6%80%A7%E7%9A%84%E6%96%B0%E5%9E%8B%E6%85%8B%E8%BB%9F%E9%AB%94%E9%96%8B%E7%99%BC%E7%94%9F%E5%91%BD%E9%80%B1%E6%9C%9F" rel="noopener noreferrer" target="_blank">靜態原始碼安全檢測特色</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>啟動快速自動掃描</strong></div>
            <div>
              <p>透過對應程式碼行數，依據範圍或速度最佳化安全弱點自動掃描作業。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2018-12-fortify/it" rel="noopener noreferrer" target="_blank">常見靜態應用程式掃描方式</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>符合 DevOps 的速度修復安全弱點</strong></div>
            <div>
              <p>利用大量的分析結果，深入瞭解原始碼的詳細資訊，能够快速分類與修復繁雜的安全性問題。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it#:~:text=DevOps%EF%BC%88Development%20%2B%20OperationsIT%20%E9%96%8B%E7%99%BC%E7%B6%AD%E9%81%8B%E4%B8%A6%E9%80%B2%E6%80%9D%E8%80%83%EF%BC%89" rel="noopener noreferrer" target="_blank">瞭解什麼是 DevOPs</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>自動化 CI/CD 工具中的安全性</strong></div>
            <div>
              <p>提供 CI/CD 工具整合，使開發人員能夠掌控安全性。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-11-fortify/it" rel="noopener noreferrer" target="_blank">CI/CD 工具有哪些</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>強化您的 AppSec 應用程式安全程序</strong></div>
            <div>
              <p>以快速與高度最佳化的靜態掃描來保護自訂與開放原始程式碼。能為軟體開發生命週期提供準確、快速和自動的應用程序安全解決方案。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it" rel="noopener noreferrer" target="_blank">嵌入 SDLC 降低開發成本提升速度</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <br>
  </section>
  <section>
    <h2 class="text-center hr">Fortify 具體導入效益</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 order-md-2 text-center">
          <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/fortify/benefit.png" alt="Fortify的效益">
        </div>
        <div class="col-12 col-md-4 order-md-1">
          <p class="mb-5 my-md-5">．減少尋找及修復軟體中的漏洞問題的時間<br>　<span class="color-blue">從原本 2 週到 1 小時</span></p>
          <p class="mb-5 my-md-5">．降低開發，維復及遵守法規的相關成本<br>　<span class="color-blue">平均每年節省約 380 萬美元</span></p>
        </div>
        <div class="col-12 col-md-4 order-md-3">
          <p class="mb-5 my-md-5">．自動化的應用程式安全流程提升生產力<br>　<span class="color-blue">高達 3,700 萬美元年收益</span></p>
          <p class="mb-5 my-md-5">．確保沒有安全漏洞，加速產品上市<br>　<span class="color-blue">重複的漏洞從 80％ 減至幾乎為零</span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center color-black">安全測試評比領導者</h2>
      <hr>
      <p>根據國際研調機構 Gartner 2022 魔力象限（Magic Quadrant）評比顯示，Fortify 再度榮獲應用程式安全性測試 AST（Application Security Testing）領導者的頭銜！以 AST 即服務交付模型進行測試，並提供多種功能，不論軟體處於正在部署、發展中或在規劃中的階段，皆可有效去除所有原始碼安全風險、檢測安全性漏洞與即時資安弱點報告，以滿足企業具體需求，並提供環境交付模式的選擇。</p><br>
      <br><br>
      <small class="fortify">**Gartner 免責聲明**<br>提及的任何廠商、產品或服務背書，且不會建議技術用戶只選擇具有最高評等或其他稱謂的廠商。Gartner 研究刊物包含 Gartner 研究組織的意見，不應被解釋為事實陳述。Gartner 不為本研究提供任何明示或暗示的保證，包括適銷性或特定用途適用性的任何保證。</small>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<a id="fixed-consult" class="bg-blue3 text-center color-white p-2" href="consult/?p=howmuch">立即詢問計費方式</a>
</body>
</html>

