<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='資通安全管理法上市櫃公司如何因應？解決方案傳授 - 資通電腦';
$page['description']='資通電腦提供全方位資安解決方案，協助上市櫃公司遵循資通安全管控指引，落實資安防護及管理機制。企業指引專區馬上看。';
$page['canonical']='https://www.ares.com.tw/trends/information-security/';
$page['ogimage'] = 'https://www.ares.com.tw/img/trends/info-security/is.png';
$page['css']=array('/css/trends-is.css?t=4');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$eventsConsult='/consult/?type=InfoSec';
?>
  <figure class="slider" data-image="/img/trends/info-security/is-bn.png">
    <figcaption class="color-white">資安法專區</figcaption>
  </figure>
  <!-- <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div> -->
  <nav class="bg-gray paging text-center" id="title">
    <ul>
      <li><a href="#trouble">推動資安困境  </a></li>
      <li><a href="#gulide">資通安全管控指引</a></li>
      <li><a href="#solution">資安法解決方案</a></li>
    </ul>
  </nav>
    <section>
      <h1 class="text-center hr font-weight-bold">資通安全管理法上市櫃公司如何因應？</h1>
      <div class="text-center h3">《企業指引專區》讓您一目瞭然！</div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <p>近年資訊安全成為全球趨勢，提升了資安管理的重要性。有鑑於駭客攻擊手法日新月異、資安事件不斷發生，以及政府推動資安即國安政策，陸續針對公家機關、關鍵基礎設施業、金融業、上市上櫃公司，從政策面推動相關資安政策與要求，驅動台灣各產業強化資通安全防護，有效落實資安管理。</p>
            <p>金管會建議上市櫃公司可從<span class="color-red">資訊揭露</span>、<span class="color-red">公司治理</span>、<span class="color-red">監理協助</span>三大面向強化資安管理，並遵循台灣證交所發佈的「<a class="color-red" href="https://dsp.tpex.org.tw/storage/co_download/%E4%B8%8A%E5%B8%82%E4%B8%8A%E6%AB%83%E5%85%AC%E5%8F%B8%E8%B3%87%E9%80%9A%E5%AE%89%E5%85%A8%E7%AE%A1%E6%8E%A7%E6%8C%87%E5%BC%95_final1_20211221111831.pdf?" target="_blank" rel="noopener noreferrer">上市櫃公司資通安全管控指引</a>」，協助上市櫃公司配置相應資安人力，進行資安治理規劃、監控及執行管理作業，完善資安防禦機制，及早發現威脅、降低風險，避免市場受到重大影響。</p>
          </div>
        </div>
      </div>
      <div class="text-center h4 pb-5 mb-5 color-red">面對資通安全管控指引，您準備好了嗎？</div>
    </section>
    <section class="bg-gray">
      <div class="container" id="trouble">
        <h2 class="text-center hr font-weight-bold">企業推動資安，會遇到什麼困境？</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <p>根據「公開發行公司建立內部控制制度處理準則」及相關令釋，上市（櫃）公司應配置資訊安全人力，以循序漸進方式推動辦理。實收資本額達新臺幣 100 億元以上、前一年底屬臺灣五十指數成分公司及主要經營電子商務媒介商品或服務之上市（櫃）公司應於 111 年底前指派資訊安全長並設置資訊安全單位（包含資訊安全專責主管及至少 2 名資訊安全專責人員），其餘上市櫃公司除最近 3 年稅前純益連續虧損或最近 1 年度每股淨值低於面額者外，應於 112 年底前配置資訊安全主管及資訊安全人員。企業在推動資安管理時，主要面臨到哪些困難點呢？</p>
          </div>
        </div>
        <ul class="row">
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-1.svg" alt="*">
            <div>資安人才缺口</div>
          </li>
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-2.svg" alt="*">
            <div>難掌握資安趨勢與資訊動態</div>
          </li>
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-3.svg" alt="*">
            <div>資安法規趨嚴<br>法遵難度提高</div>
          </li>
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-4.svg" alt="*">
            <div>員工資安意識難貫徹與深植</div>
          </li>
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-5.svg" alt="*">
            <div>管理階層支持度不足</div>
          </li>
          <li class="col-6 col-md-4 text-center pt-5">
            <img class="img-fluid" loading="lazy" width="64" height="64" src="/img/trends/info-security/困境-6.svg" alt="*">
            <div>預算及成本考量</div>
          </li>
        </ul>
      </div>
      <h2 class="text-center hr px-3">直接告訴你！遵循「資安法」可以避免哪些罰則</h2>
      <div class="container pb-5">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <ul class="triangle-list h4">
              <li>上市櫃公司如發生個資外洩等事件，<span class="color-red">須受主管機關調查</span>。</li>
              <li>上市櫃公司發生重大資安事件像是：核心系統或官網遭駭、DDoS、個資外洩等，未即時發佈重大訊息，金管會<span class="color-red">最高可罰新台幣 500 萬罰鍰</span>。</li>
              <li>企業發生個資外洩，<span class="color-red">最高可裁罰 1500 萬</span>。</li>
              <li>裁罰金額與限期改善，會依據事件影響範圍及<span class="color-red">資安機制完善程度</span>。</li>
            </ul>
          </div>
        </div>
        <div class="text-center py-4">
          <a style="background-color:var(--red)" href="/consult/?type=infosec" class="btn px-5 py-3 color-white">馬上合規，一點都不難</a>
        </div>
      </div>
      <h2 class="text-center hr px-3">金管會：三大面向強化企業資安控管</h2>
      <div class="container">
        <p class="text-center">為強化上市櫃公司資通安全管理機制，金管會建議從以下三大面向採取措施，驅動企業推動資安管理</p>
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 bg-white rounded shadow p-3">
              <div class="text-center">
                <img loading="lazy" width="64" height="64" src="/img/trends/info-security/三大面向-1.svg" alt="*" class="img-fluid">
                <h3 class="text-center mt-2">資訊揭露</h3>
                <ul class="disc text-left">
                  <li>發生重大資安事件，應即時發布重大訊息。</li>
                  <li>年報及公開說明書需揭露重大資安風險，且敘明資通安全管理政策、方案及投入資源。</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 bg-white rounded shadow p-3">
              <div class="text-center">
                <img loading="lazy" width="64" height="64" src="/img/trends/info-security/三大面向-2.svg" alt="*" class="img-fluid">
                <h3 class="text-center mt-2">公司治理</h3>
                <ul class="disc text-left">
                  <li>資安納入內部控制：檔案設備安全控制、設立資安長及專責單位、資通安全檢查納入年度稽核項目、稽核人員持續進修…等。</li>
                  <li>資安納入公司治理評鑑。</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 bg-white rounded shadow p-3">
              <div class="text-center">
                <img loading="lazy" width="64" height="64" src="/img/trends/info-security/三大面向-3.svg" alt="*" class="img-fluid">
                <h3 class="text-center mt-2">監理協助</h3>
                <ul class="disc text-left">
                  <li>推動加入台灣電腦網路危機處理暨協調中心，共享資安情資。</li>
                  <li>企業導入 ISO27001 資訊安全系統標準並取得第三方認證，納入公司治理評鑑指標加分項目。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="gulide">
      <h2 class="text-center hr">資通安全管控指引有哪些？</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 gulide p-3">
              <h3 class="color-red h4">管理面</h3>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>定期盤點資通系統及風險評估</strong></li>
              </ul>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>建立資訊安全管理機制</strong></li>
              </ul>
              <ul class="dash-list mb-0">
                <li>資安推動組織及專責人員</li>
                <li>資通安全政策及目標</li>
                <li>資通作業委外辦理管理措施</li>
                <li>資安事件通報應變處理</li>
                <li>資安持續精進及績效管理</li>
                <li>業務持續運作演練及備援機制</li>
                <li>機敏資料處理之防護措施</li>
                <li>密碼使用管理及評估多重認證</li>
                <li>人員裝置及設備使用管理</li>
                <li>電腦機房及重要區域安全管控</li>
              </ul>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>定期向董事會報告資安執行狀況，並對內及委外廠商資安稽核</strong></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 gulide p-3">
              <h3 class="color-red h4">技術面</h3>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>資安檢測作業</strong></li>
              </ul>
              <ul class="dash-list mb-0">
                <li>定期針對核心系統弱點掃描</li>
                <li>定期針對核心系統滲透測試</li>
                <li>系統上線前執行源碼掃描</li>
              </ul>
              <div class="text-right"><a class="color-red" href="https://www.ares.com.tw/products/fortify/">Fortify ⪢</a></div>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>具備資安防護控管措施</strong></li>
              </ul>
              <ul class="dash-list mb-0">
                <li>防毒軟體、網路防火牆、電子郵件過濾機制、入侵防禦機制、應用程式防火牆、APT 防禦措施、SOC</li>
              </ul>
              <div class="text-right"><a class="color-red" href="https://www.ares.com.tw/products/comodo/">Comodo ⪢</a></div>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>機敏資料防護措施</strong></li>
              </ul>
              <ul class="dash-list mb-0">
                <li>存取權限、資料加密、傳輸加密、資料遮罩…等</li>
              </ul>
              <div class="text-right"><a class="color-red" href="https://pki.ares.com.tw/">uPKI ⪢</a></div>
              <div class="text-right"><a class="color-red" href="https://ares-pp.ares.com.tw/">ARES PP ⪢</a></div>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>依網路服務需要區隔獨立的邏輯網域</strong></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
            <div class="h-100 gulide p-3">
              <h3 class="color-red h4">人員面</h3>
              <ul class="disc mb-0 py-0">
                <li class="h5" style="color:#404040"><strong>定期辦理電子郵件社交工程演練</strong></li>
                <li class="h5" style="color:#404040"><strong>加入資安情資分享組織取得資安資訊</strong></li>
                <li class="h5" style="color:#404040"><strong>資訊系統使用者每年接受資安訓練</strong></li>
                <li class="h5" style="color:#404040"><strong>資訊人員每年接受資安專業課程訓練</strong></li>
              </ul>
              <div class="text-right"><a class="color-red" href="https://www.ares.com.tw/products/knowbe4/">KnowBe4 ⪢</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray" id="solution">
      <h2 class="text-center hr font-weight-bold">資安法解決方案 全面防護</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9">
            <p>駭客攻擊不會停止，如沒做好足夠的防禦，將造成重大損失。建議企業可與資安廠商合作，透過專業的資安服務資源，快速強化企業資安體質，並降低資安團隊的人力負擔。資通電腦提供多樣化的資安解決方案，協助上市櫃公司遵循資通安全管控指引，有效落實資安防護及管理機制。</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row pt-5">
          <div class="col-12 col-md-6 text-center text-md-right">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-1.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-red">ARES PP 文件加密系統</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>機敏資料加密、存取權限控管、鑑別與定期檢視機敏資料、妥善儲存與管理資通系統開發維護文件。</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>資料存檔即加密，可依人員、群組設定存取權限，搭配詳實軌跡紀錄，有效控管文件流向。</p>
              </li>
            </ul>
            <a href="https://ares-pp.ares.com.tw/" class="btn btn-red">了解更多</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center text-md-left">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-2.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-red">Comodo 資安防護方案</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>定期盤點資通系統、防毒軟體、網路防火牆、電子郵件過濾機制、入侵偵測及防禦機制、應用程式防火牆、APT 防禦措施、SOC 威脅監測管理、安全漏洞通告可即時修補、個人裝置使用管理。</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>以預設攔截、黑白名單、沙箱技術封鎖未知勒索程式。並透過 24 小時監控端點安全、漏洞防禦提醒與修補管理、系統軟體盤查…等，有效阻擋惡意勒索攻擊。</p>
              </li>
            </ul>
            <a href="https://www.ares.com.tw/products/comodo/" class="btn btn-red">了解更多</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 text-center text-md-right">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-3.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-red">Fortify 應用程式安全檢測</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>源碼檢測、滲透測試</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>提供 SCA 工具協助掃描程式原始碼，找出漏洞進行修補。並透過 WebInspect 工具協助檢測運行中的網站，抓出安全弱點並修復，避免駭客攻擊。</p>
              </li>
            </ul>
            <a href="https://www.ares.com.tw/products/fortify/" class="btn btn-red">了解更多</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center text-md-left">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-4.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-red">KnowBe4 資安課程平台</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>定期辦理社交工程演練、員工資安教育訓練。</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>透過線上課程培訓員工資安意識，提供多樣化的資安內容，讓員工頻繁接觸網路詐騙與社交攻擊演練，產生高度警覺培養資安意識。</p>
              </li>
            </ul>
            <a href="https://www.ares.com.tw/products/knowbe4/" class="btn btn-red">了解更多</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 text-center text-md-right">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-5.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6">
            <h3 class="color-red">uIAM 單一簽入認證</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>人員管理與處理規範、資料存取控管及身分認證納入資通系統開發維護規格、密碼使用管理。</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>uIAM 除整合單位內身份認證納入統一的控管、並可支援 AD、Fido 2、健保卡、憑證等登入機制，確保身份認證與各系統權限的對應，透過整合 Fido 2 機制，更可使用手機進行認證，伺服器端不需記憶密碼，沒有密碼外洩問題，且大幅提升方便性。</p>
              </li>
            </ul>
            <a href="https://pki.ares.com.tw/products/uiam/" class="btn btn-red">了解更多</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 order-1 order-md-2 text-center text-md-left">
            <img loading="lazy" width="280" height="280" src="/img/trends/info-security/解決方案-6.svg" alt="*" class="img-fluid">
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <h3 class="color-red">uPKI 憑證驗證服務系統</h3>
            <ul class="check-list">
              <li>
                <strong>資通安全管控指引解決項目：</strong>
                <p>存取權限、資料加密、傳輸加密、資料遮蔽。</p>
              </li>
              <li>
                <strong>如何防護：</strong>
                <p>透過 PKI 機制，進行資料加解密、存證驗證，確保資料儲存與傳輸安全。並可設定遮罩欄位與規格，針對個資部分解密遮罩，提高資訊安全性。</p>
              </li>
            </ul>
            <a href="https://pki.ares.com.tw/" class="btn btn-red">了解更多</a>
          </div>
        </div>
      </div>
    </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>