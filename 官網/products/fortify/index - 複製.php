<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Fortify 原始碼檢測工具 | 資通電腦';
$page['description']='立即瞭解Fortify支援的多種語言與架構，強化原始程式碼安全性，阻絕網路資安風險。';
$page['canonical']='https://www.ares.com.tw/products/fortify/';
// $page['css']=array('/css/product-fortify.css');

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
    <div class="container">
      <h1 class="text-center">Fortify 源碼檢測工具 從源頭降低資安弱點</h1>
      <hr>
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
        <div class="col-12 col-md-8">
          <p><p>Micro focus Fortify 軟體安全研究團隊發現：80% 的 web 應用程式至少含有一個重大或是高危險性的弱點。而根據美國商務部國家技術與標準局 NIST 研究指出，92% 可利用的安全弱點是在軟體程式中。從近年重大資安事件可以發現，駭客與犯罪集團擅長利用軟體資安漏洞進行竊取各項資料，包括客戶身分資料、訂單、智慧財產及現金，或是發起各種攻擊，中斷企業的營運，進而損害企業形象，並讓企業員工、客戶和公眾限於風險之中。</p></p>
          <ul class="disc">
            <li>靜態應用程式安全測試 SAST（Static Application Security Testing）</li>
            <li>動態應用系統安全測試 DAST（Dynamic Application Security Testing）</li>
            <li>互動式應用系統安全測試 IAST（Interactive Application Security Testing）</li>
            <li>程式執行階段自我保護 RASP（Runtime Application Self-Protection）</li>
          </ul>
        <p>Fortify 是第一個提供靜態應用程式安全測試 SAST（Static Application Security Testing）、動態應用系統安全測試 DAST（Dynamic Application Security Testing）、互動式應用系統安全測試 IAST（Interactive Application Security Testing）、程式執行階段自我保護 RASP（Runtime Application Self-Protection）的資安檢測解決方案，能協助 IT 及開發人員透過靜態與動態程式碼分析，預先找出程式碼弱點、資安漏洞及惡意程式，確保原始碼（source code）安全無虞，防範企業資安威脅與損失。</p>
        </div>
      </div>
      <figure class="text-center my-3">
        <img loading="lazy" width="720" height="301" src="/img/product/fortify/fortify-construction-1.png" alt="Fortify 黑白防駭兼內顧外" class="img-fluid">
      </figure>
      <div class="text-center">
        <a href="#language" class="btn btn-info color-white">支援最多程式語言及架構</a>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center color-black">Gartner 2020 應用程式安全測試魔力象限領導者</h2>
      <hr>
<!--         <div class="col-12 col-md-6 hidden-xs">
          <img class="img-fluid center-block" src="/img/product/fortify/2018-gartner-fortify.png" alt="再度於2018年獲Gartner肯定">
        </div> -->
      <p>根據國際研調機構 Gartner 2020 魔力象限（Magic Quadrant）評比顯示，Fortify 再度榮獲應用程式安全性測試 AST（Application Security Testing）領導者的頭銜！以 AST 即服務交付模型進行測試，並提供多種功能，不論軟體處於正在部署、發展中或在規劃中的階段，皆可有效去除所有原始碼安全風險、檢測安全性漏洞與即時資安弱點報告，以滿足企業具體需求，並提供環境交付模式的選擇。</p><br>
      <br><br>
      <small class="fortify">**Gartner 免責聲明**<br>提及的任何廠商、產品或服務背書，且不會建議技術用戶只選擇具有最高評等或其他稱謂的廠商。Gartner 研究刊物包含 Gartner 研究組織的意見，不應被解釋為事實陳述。Gartner 不為本研究提供任何明示或暗示的保證，包括適銷性或特定用途適用性的任何保證。</small>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">用原始碼檢測與滲透測試工具找出漏洞落實資安防護</h2>
    <hr>
    <div class="container">
    <p>Fortify 能運用靜態原始碼檢測分析工具（Static Code Analyzer，SCA）與 WebInspect 動態應用程式檢測工具進行測試與分析，找出程式碼或網站中的安全弱點與資安漏洞產出報告，深入目前企業資安威脅，並對應到此問題所在的程式碼行數，讓資安人員能快速修復安全弱點。亦可針對開發、品質保證（Quality Assurance，QA）或生產環境中執行的程式安全應用，迅速鑑別和驗證其中的重大高風險資安漏洞。杜絕惡意程式攻擊 360 度全方位守護企業資安並且降低維運成本。</p>
    <div class="row pt-3">
      <div class="col-12 col-md-6 ">
        <div class="bg-white rounded overflow-hidden h-100">
        <div class="px-3 py-2" style="background-color:#C2DDA6;"><strong>Fortify SCA 靜態原始碼檢測分析工具</strong></div>
        <div class="p-3">
          <ul class="disc">
            <li>快速找到資安弱點與漏洞位置</li>
            <li>指出安全弱點詳情，並提供修復建議</li>
            <li>節省程式開發及弱點修復的成本</li>
            <li>確保系統上線服務的安全性</li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-12 col-md-6 ">
        <div class="bg-white rounded overflow-hidden h-100">
        <div class="px-3 py-2 bg-blue2"><strong>WebInspect 動態應用程式測試工具</strong></div>
        <div class="p-3">
          <ul class="disc">
            <li>使用全面的攻擊場景模擬方式，檢測運行中的網站和 web 服務安全漏洞</li>
            <li>協助驗證一個特定的程式漏洞，在實務上是否可以被利用的資安漏洞</li>
            <li>協助確認資訊安全問題所在與發生原因，加快軟體程式修復速度</li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">程式開發採購必備 Fortify 的六大優勢</h2>
    <hr>
    <!-- <figure>
    <img src="/img/product/fortify/fortify-construction-2.png" alt="產品架構" class="img-fluid center-block">
    </figure> -->
    <div class="container">
      <ul class="check">
        <li>
          <div>
            <div><strong>使用整合式靜態應用程式安全檢測進行安全編碼</strong></div>
            <div>
              <p>在編碼過程中可即時發現並修復安全弱點。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it">靜態原始碼安全檢測特色</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>多種開發人員使用語言</strong></div>
            <div>
              <p>符合開發人員使用程式語言及其架構需求，以及實現法規遵循之要求。</p>
              <a class="btn btn-info color-white" href="#language">看看哪 26 種開發語言及架構</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>啟動快速自動掃描</strong></div>
            <div>
              <p>透過對應程式碼行數，依據範圍或速度最佳化安全弱點自動掃描作業。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2018-12-fortify/it">常見靜態應用程式掃描方式</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>符合 DevOps 的速度修復安全弱點</strong></div>
            <div>
              <p>利用大量的分析結果，深入瞭解原始碼的詳細資訊，能够快速分類與修復繁雜的安全性問題。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it">瞭解什麼是 DevOPs</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>自動化 CI/CD 工具中的安全性</strong></div>
            <div>
              <p>提供 CI/CD 工具整合，使開發人員能够掌控安全性。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it">CI / CD 工具有哪些</a>
            </div>
          </div>
        </li>
        <li>
          <div>
            <div><strong>強化您的 AppSec 應用程式安全程序</strong></div>
            <div>
              <p>以快速與高度最佳化的靜態掃描來保護自訂與開放原始程式碼。能為軟體開發生命週期提供準確、快速和自動的應用程序安全解決方案。</p>
              <a class="btn btn-info color-white" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it">嵌入 SDLC 降低開發成本提升速度</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <br>
  </section>
  <!-- <section class="bg-gray">
    <h2 class="text-center">產品效益</h2>
    <hr>
    <div class="container">
      <ul class="check">
        <li>找出已部署軟體，目前有哪些軟體安全問題</li>
        <li>減少自行開發中或向供應商採購中的軟體風險</li>
        <li>滿足遵守內部安全規範或外部安全法的目標</li>
        <li>儀表板提供檢測結果的即時可視性與互動操作</li>
        <li>自動化檢測流程修復經驗可以重複分享</li>
        <li>主動式軟體安全管理，軟體可安全導入到所有軟體開發的流程中</li>
        <li>整合業界的 QA、軟體開發環境（Integrated Development Environment，IDE）工具與臭蟲追蹤系統，加快漏洞修復</li>
      </ul>
    </div>
  </section> -->
  <section>
    <h2 class="text-center">Fortify 具體導入效益</h2>
    <hr>
    <div class="container text-center">
    <div class="row">
      <div class="col-12 col-md-3">
        <div>
        <img loading="lazy" width="100" height="100" src="/img/product/fortify/fortify-1.svg" alt="*">
        <p>減少尋找及修復軟體中的漏洞問題的時間</p>
        <hr class="n">
        <p class="color-blue">從原本 2 週到 1 小時</p>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div>
        <img loading="lazy" width="100" height="100" src="/img/product/fortify/fortify-2.svg" alt="*">
        <p>降低開發，修復漏洞及遵守法規的相關成本</p>
        <hr class="n">
        <p class="color-blue">平均每年節省約 380 萬美元</p>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div>
        <img loading="lazy" width="100" height="100" src="/img/product/fortify/fortify-3.svg" alt="*">
        <p>自動化的應用程式安全流程可以提升生產力</p>
        <hr class="n">
        <p class="color-blue">高達 3,700 萬美元年收益</p>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div>
        <img loading="lazy" width="100" height="100" src="/img/product/fortify/fortify-4.svg" alt="*">
        <p>確保沒有軟體安全漏洞的延遲，可以加速產品上市</p>
        <hr class="n">
        <p class="color-blue">重複的漏洞從 80％ 減至幾乎為零</p>
        </div>
      </div>
    </div>
    </div>
  </section>
    <section id="language">
      <h2 class="text-center">Fortify 支援哪些語言及架構</h2>
      <hr>
      <div class="container">
        <p>Fortify 支援 ABAP／BSP、ActionScript、Apex、ASP.NET、C#（.NET）、C／C++、Classic ASP（with VBScript）、COBOL、ColdFusion CFML、Go（GoLang）、HTML、Java（Android）、 JavaScript／AJAX、JSP、MXML（Flex）、Objective C／C++、PHP、PL／SQL、Python、Ruby、Scala、Swift、T-SQL、VB.NET、VBScript、Visual Basic、XML 等語言與架構。</p>
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
  $thumbnail_html.='<li class="col-4 col-md-2"><div class="rounded border my-2 d-flex justify-content-center align-items-center"><img width="260" height="200" loading="lazy" src="'.$key['img'].'" alt="'.$key['alt'].'" class="img-fluid"></div></li>';
}
echo $thumbnail_html;
?>
        </ul>
      </div>
      <div class="text-center">
        <a href="consult/?p=howmuch" class="btn btn-info color-white">立即詢問計費方式</a>
      </div>
    </section>
    <section class="bg-gray">
      <div class="container">
        <h2 class="text-center">為什麼選資通源碼檢測服務？</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通顧問團隊利用 Fortify SCA 原始碼檢測工具，針對客戶提供的程式碼進行安全檢測，再根據檢測報告分析弱點種類以及攻擊路徑等資訊，並以自身經驗給予程式修復建議，協助開發團隊順利進行相對應的程式碼修補工作，也提升對程式弱點的了解，強化程式開發編寫的能力。</p>
          </div>
          <div class="col-12 col-md-5">
            <h3>服務導入流程：</h3>
            <ol class="decimal">
              <li>確認客戶程式碼完整性（如：檢測標的、語言架構、範圍、環境…等項目）</li>
              <li>資通 Fortify 顧問協助進行原始碼掃描</li>
              <li>顧問會依產出的檢測報告進行分析，依修補可行與適切性給予建議簡報，輔導客戶更精準的修補程式碼</li>
              <li>進行複檢作業</li>
              <li>無重大安全弱點即結案</li>
            </ol>
          </div>
          <div class="col-12 col-md-5">
            <img src="/img/product/fortify/flowchart.png" loading="lazy" width="500" height="583" alt="務導入流程" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

