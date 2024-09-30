<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='資安弱點掃描服務第一選擇 - 資通電腦';
$page['description']='資通電腦提供 Fortify 原始碼掃描、網站弱點掃描、教育訓練、顧問諮詢服務，是金融、政府、高科技產業首選。資安弱點掃描流程立即看！';
$page['canonical']='https://www.ares.com.tw/products/fortify/ares/';
$page['css']=array('/css/product-fortify.css?1');

include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">Fortify 顧問服務</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('../_nav.php');
?>
  </div>
  <section id="consulting">
    <div class="container">
      <h1 class="text-center hr">資安弱點掃描服務第一選擇：資通電腦</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img class="img-fluid" loading="lazy" width="330" height="270" src="/img/product/fortify/ares/why.png" alt="*">
        </div>
        <div class="col-12 col-md-6">
          <p>對於企業來說資安弱點掃描就如同健檢，透過健康檢查可揪出身體潛在病灶，而弱點掃描工具則可找出潛在的安全弱點，防範程式與網站不受駭客攻擊，有效減少 80% 的資安漏洞。</p>
          <p>執行弱點掃描前，企業需針對檢測項目選擇合適的掃描工具。源碼檢測就像是核磁共振，可幫程式做最全面、最精密的程式碼掃描，精確指出漏洞位置；而網站弱點掃描則像是侵入性的胃鏡檢查，透過模擬駭客攻擊的手法，由外而內掃描正在運行的網站漏洞。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center hr">Fortify 顧問教你如何看懂檢測報告</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>檢測完畢拿到報告，最困難的部分才正要開始。這些密密麻麻的報告內容要如何看懂？</p>
          <p>一般人解讀健檢報告的方式可能會先看紅字以及代表的疾病，再上網搜尋病情。但這不是正確的解讀方式，紅字並不全然代表異常，有些疾病也非單一數據就能判定，都需經過醫生諮詢講解，才能了解身體狀況並做進一步的診療。</p>
          <p>相似情形也可能發生在 IT 與工程師身上，當拿到程式／網站檢測報告，因不確定哪些弱點需要及時修補，以及無法判讀弱點種類、攻擊路徑等資訊而找不到正確的修補方式，造成資安威脅持續存在。這時最需要的就是資安顧問的分析解說以及提供有效的解決之道。</p>
          <p>資通電腦 Fortify 顧問團隊利用 SCA 原始碼檢測及 WebInspect 網站弱點掃描，針對客戶提供的程式碼與網站進行安全檢測，再根據檢測報告分析弱點種類以及攻擊路徑等資訊，並以自身經驗給予應用程式修復建議，協助開發團隊順利進行相對應的修補工作，也提升對安全弱點的了解，強化應用程式開發編寫的能力。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <img class="img-fluid" loading="lazy" width="652" height="344" src="/img/product/fortify/ares/flowchart.png" alt="fortify服務導入流程">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">源碼檢測服務導入流程</h2>
          <ol class="decimal">
            <li>客戶提供專案程式碼。</li>
            <li>確認客戶程式碼完整性（例如：檢測標的、語言架構、範圍、環境…等項目）。</li>
            <li>資通 Fortify 顧問協助掃描原始碼。</li>
            <li>系統產出<a class="color-blue" href="https://marketing.ares.com.tw/newsletter/2021-09-cybersecurity/fortify-sca-report-form" rel="noopener noreferrer" target="_blank">漏洞檢測報告</a>。</li>
            <li>顧問針對檢測報告進行分析，依修補可行性與適切性給予建議簡報，輔導客戶更精準的修補程式碼。</li>
            <li>進行複檢作業。</li>
            <li>直到無重大安全弱點即結案。</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <img class="img-fluid" loading="lazy" width="652" height="344" src="/img/product/fortify/ares/弱點掃描.png" alt="網站弱點掃描流程">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">網站弱點掃描服務導入流程</h2>
          <ol class="decimal">
            <li>客戶系統備份，並提供 Web 網址／Web Service。</li>
            <li>進行<a class="color-blue" href="https://marketing.ares.com.tw/newsletter/2023-05-cybersecurity/fortify-webinspect" rel="noopener noreferrer" target="_blank">黑箱檢測前置作業</a>。</li>
            <li>資通 Fortify 顧問協助客戶掃描網站及網頁。</li>
            <li>系統產出漏洞檢測報告。</li>
            <li>顧問針對檢測報告進行分析，依修補可行性與適切性給予建議簡報，輔導客戶更精準的修補網站弱點。</li>
            <li>進行複檢作業。</li>
            <li>直到無重大安全弱點即結案。</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <h2 class="underline">服務特色</h2>
          <ul class="disc">
            <li>提供多型態檢測方案：一次性檢測服務、定期檢測服務、軟體授權買斷。</li>
            <li>提供產品安裝、教育訓練、產品維護等服務。</li>
            <li>提供檢測報告解說，深入分析、評估修補可行性與適切性。</li>
            <li>顧問團隊自身從事軟體開發，熟悉安全程式寫法。</li>
            <li>以完善的 SOP 協助客戶程式專案上線前的檢測管控。</li>
            <li>助委外廠商建立程式上線管理機制，了解安全程式開發規則及安全要項。</li>
          </ul>
        </div>
        <div class="col-12 col-md-6 text-center mb-5">
          <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/fortify/ares/features.png" alt="服務特色">
        </div>
        <div class="col-12 col-md-5 text-center pt-4">
          <a href="../consult/?p=howmuch" class="howmuch btn btn-info color-white py-3 w-100">立即詢問報價</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center hr">Fortify 客戶強力推薦</h2>
    <div class="container">
      <div class="row justify-content-md-between justify-content-center">
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="251" height="81" src="/img/product/fortify/ares/cherri.png" alt="cherri">
            </div>
            <p><em>會選擇資通主要關鍵在顧問服務！資通 Fortify 顧問會依自身實戰經驗深入分析報告，評估漏洞修補的可行性與適切性，並細心輔導開發團隊進行修補工作。</em></p>
            <p>── 喬睿科技 3DS 2.0 產品負責人 Charmian Hsu</p>
          </div>
        </div>
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="251" height="81" src="/img/product/fortify/ares/逢甲地理資訊.png" alt="GIS">
            </div>
            <p><em>軟體評估與諮商階段，資通 Fortify 顧問團隊以迅速、專業態度提供諮詢，後續的教育訓練亦提供專業完整的服務，是非常值得信賴的團隊！</em></p>
            <p>── 逢甲大學 GIS 中心資深工程師 林嘉成</p>
          </div>
        </div>
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="251" height="81" src="/img/product/fortify/ares/新誼整合.png" alt="新誼整合">
            </div>
            <p><em>Fortify 導入過程中，曾遇到一些操作問題，資通顧問能在 1~2 小時內，立即回覆並提供具體做法，使問題得以解決。精準、專業、高效率的服務，我們很滿意！</em></p>
            <p>── 新誼整合資訊部經理 許証淵</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center hr">顧問服務備受肯定</h2>
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/fortify/ares/fortify-award-2021.png" alt="Fortify最佳夥伴獎">
            </div>
            <div class="col-12 col-md-6">
              <a href="https://www.ares.com.tw/events/fortify-outstanding-contribution-award-2021">2021 年榮獲<br>Fortify 傑出貢獻獎</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/fortify/ares/fortify-trophy.png" alt="Fortify最佳夥伴獎">
            </div>
            <div class="col-12 col-md-6">
              <a href="https://www.ares.com.tw/events/fortify-best-partner-award-2022">2022 年榮獲<br>Fortify 最佳夥伴獎</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/product/fortify/ares/fortify-award-2023.png" alt="Fortify最佳夥伴獎">
            </div>
            <div class="col-12 col-md-6">
              <a href="https://www.ares.com.tw/events/fortify-outstanding-cybersecurity-performance-award-2023">2023 年榮獲<br>Fortify 最佳夥伴獎</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<a id="fixed-consult" class="bg-blue3 text-center color-white p-2" href="../consult/?p=howmuch">立即詢問計費方式</a>
</body>
</html>

