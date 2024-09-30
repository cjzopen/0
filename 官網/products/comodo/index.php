<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='台灣 Comodo 端點防護，阻擋 APT 與勒索攻擊';
$page['description']='Comodo 獨家端點防護機制，提供全球最大黑、白名單資料庫與未知程式控管，僅需 10MB 資源需求，保護企業組織免受APT攻擊與商業勒索威脅。';
$page['canonical']='https://www.ares.com.tw/products/comodo/';
$page['css']=array('/css/product-comodo.css');
$page['ogimage']='https://www.ares.com.tw/img/product/comodo/og.jpg';

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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">Comodo</span></a>
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
    <h1 class="text-center">Comodo 端點防護 攔截未知程式</h1><hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>Comodo（科摩多-台灣）端點安全是保護企業不受 APT 攻擊與勒索活動的資訊安全管理平台，以獨家<span class="color-red">預設拒絕（Default Deny）方式</span>提供桌上型電腦／筆記型電腦／行動電話嚴密保護。全球超過 1 億台系統在 Comodo 端點安全管理方案保護下，創下了零感染的紀錄，並擁有超過 9,000 萬用戶肯定！反觀傳統資安產品僅依賴已知的攻擊資料庫來防禦，一旦攻擊名單不在資料庫中就採取預設允許（Default Allow）方式，容易放行未知的威脅程式。</p>
        </div>
      </div>
      <div class="text-center">
        <img class="img-fluid" loading="lazy" width="800" height="480" src="/img/product/comodo/comodo多層系統防禦.png" srcset="/img/product/comodo/comodo多層系統防禦.png 1x, /img/product/comodo/comodo多層系統防禦2x.png 1.5x, /img/product/comodo/comodo多層系統防禦2x.png 2x" alt="comodo的多層系統防禦模式">
        <div>Comodo 多層系統防禦</div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">3 大資安管理 防範 APT 攻擊</h2><hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>Comodo 端點安全管理提供 MDR（Managed Detection and Response，威脅偵測與應變服務）與 EDR（Endpoint Detection and Response，端點偵測及回應機制），能解決 Windows 端點系統和行動裝置上的惡意軟體問題。採用獨家 Default Deny 技術，僅需 10MB 資源需求，即可完成縱深安全的防護架構，保護企業組織免受 APT 攻擊與商業勒索威脅。雲端訂閱制提供彈性價格方案，讓使用者輕鬆擁有全方位資安防護。</p>
        </div>
        <div class="col-12"></div>
        <div class="col-12 col-sm-6 col-md-3 text-center h-100 mb-3">
          <div class="h-100 bg-white d-flex flex-column">
            <div class="h5 bg-red color-white mb-0 p-2">阻擋商業勒索與駭客</div>
            <div class="h3 bg-black color-white mb-0 p-3">先進系統安全</div>
            <ul class="apt-list p-3">
              <li>獨家專利 Contain 自動管理未知</li>
              <li>已知勒索與 APT 攻擊攔截</li>
              <li>未知程式活動監控</li>
              <li>AI 程式自動化分析</li>
              <li>外接裝置安全管理</li>
              <li>程序執行軌跡報告 (EDR)</li>
              <li>即時系統風險管理</li>
              <li>系統安裝軟體盤點</li>
              <li>系統漏洞修補管理</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center h-100 mb-3">
          <div class="h-100 bg-white d-flex flex-column">
            <div class="h5 bg-red color-white mb-0 p-2">即時監控潛在風險</div>
            <div class="h3 bg-black color-white mb-0 p-3">企業安全管理</div>
            <ul class="apt-list p-3">
              <li>全天候 SOC 監控</li>
              <li>未知程式活動監控</li>
              <li>即時系統風險管理</li>
              <li>程序執行軌跡報告 (EDR)</li>
              <li>端點威脅分析</li>
              <li>可疑活動監控通報</li>
              <li>AI 程式分析報告</li>
              <li>資安弱點報告</li>
              <li>資安專家顧問服務</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center h-100 mb-3">
          <div class="h-100 bg-white d-flex flex-column">
            <div class="h5 bg-red color-white mb-0 p-2">預防漏洞與網站弱點</div>
            <div class="h3 bg-black color-white mb-0 p-3">企業網站安全</div>
            <ul class="apt-list p-3">
              <li>全天候網站服務 SOC 監控</li>
              <li>駭客 DDoS 攻擊清洗(不限流量)</li>
              <li>網站惡意程式掛馬檢測、移除</li>
              <li>網站弱點掃描 (OWASP TOP 10)</li>
              <li>網站服務負載平衡 (Load-balance)</li>
              <li>自動網站應用防火牆 (Auto WAF)</li>
              <li>網站平台風險分析與改善建議</li>
              <li>網站漏洞虛擬補丁 (vPatch)</li>
              <li>網站 SEO Blacklist 通知</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center">
        <iframe class="img-fluid" style="aspect-ratio:16 / 9;" loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/T3aMSMSuH10?si=XM3iuZZm0fmsOuNy" title="認識 Comodo 端點防護" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="underline">Comodo 阻擋看不見的資安危機</h2>
          <p>一般防毒軟體採黑名單方式隔離威脅，必須不斷更新黑名單才具有防護力。現今駭客針對型的攻擊手法複雜、隱匿性高不易被誘捕，一般的防毒機制無法在短時間內攔截，且難以肉眼察覺分辨。Comodo 提供黑名單、白名單與未知程式的完整控管，能有效抵禦防毒軟體無法阻擋的惡意勒索程式，協助企業掌握未知威脅。</p>
        </div>
        <div class="col-12 col-md-6">
          <div class="d-flex align-items-center mt-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="72" height="72" src="/img/product/comodo/端點防禦1.svg" alt="*">
            <div>
              <h3 class="h5 mb-0 color-blue">白名單（已驗證安全的）</h3>
              <p>軟體出版商和其產生的已知有效程式，通過安全掃描程序後成為 Comodo 獨家的白名單列表，只有在白名單內的程式才可放行。</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="72" height="72" src="/img/product/comodo/端點防禦2.svg" alt="*">
            <div>
              <h3 class="h5 mb-0 color-blue">黑名單（已知有惡意的）</h3>
              <p>Comodo 實驗室分析來自各種管道的未知程式，當確認該程式夾帶惡意攻擊手法時，即列入黑名單列表中，進行隔離或刪除。</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <img class="img-fluid flex-shrink-0" loading="lazy" width="72" height="72" src="/img/product/comodo/端點防禦3.svg" alt="*">
            <div>
              <h3 class="h5 mb-0 color-blue">未知</h3>
              <p>未列於 Comodo 白名單與黑名單中的可執行程式，會自動歸類為未知程式，並隔離在沙盒（sandbox）中執行，防止非信任程式破壞系統。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <div class="d-md-none">
          <table class="table table-bordered bg-white mb-3 attack-type">
            <thead>
              <tr>
                <th width="60"></th>
                <th class="color-blue">一般病毒攻擊</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>攻擊時間</th>
                <td>長短不一定</td>
              </tr>
              <tr>
                <th>攻擊對象</th>
                <td>無針對性、大範圍，以具有大量個資的企業為主</td>
              </tr>
              <tr>
                <th>攻擊手法</th>
                <td>以大量、快速的單一手法入侵</td>
              </tr>
              <tr>
                <th>企業風險</th>
                <td>個資被竊</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered bg-white mb-3 attack-type">
            <thead>
              <tr>
                <th width="60"></th>
                <th class="color-blue">商業勒索病毒</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>攻擊時間</th>
                <td>攻擊時間短</td>
              </tr>
              <tr>
                <th>攻擊對象</th>
                <td>無特定對象</td>
              </tr>
              <tr>
                <th>攻擊手法</th>
                <td>利用 email 或網站瀏覽背景植入勒索程式，直接加密系統中的檔案</td>
              </tr>
              <tr>
                <th>企業風險</th>
                <td>需支付鉅額贖金，才有機會將資料解密還原</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered bg-white mb-3 attack-type">
            <thead>
              <tr>
                <th width="60"></th>
                <th class="color-blue">Zero-Day<br>零時差攻擊</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>攻擊時間</th>
                <td>潛伏時間長</td>
              </tr>
              <tr>
                <th>攻擊對象</th>
                <td>有針對性</td>
              </tr>
              <tr>
                <th>攻擊手法</th>
                <td>利用漏洞尚未修補的空窗期進行攻擊，確保達成攻擊目的</td>
              </tr>
              <tr>
                <th>企業風險</th>
                <td>被竊取有價值的帳號、密碼和機密資料</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered bg-white mb-3 attack-type">
            <thead>
              <tr>
                <th width="60"></th>
                <th class="color-blue">APT<br>進階持續性滲透攻擊</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>攻擊時間</th>
                <td>潛伏時間長</td>
              </tr>
              <tr>
                <th>攻擊對象</th>
                <td>鎖定目標，如政府、高科技業、金融業等</td>
              </tr>
              <tr>
                <th>攻擊手法</th>
                <td>長期持續性、多樣化，利用系統執行程式的特性入侵系統，植入惡意程式直接破壞</td>
              </tr>
              <tr>
                <th>企業風險</th>
                <td>國家安全、商業機密外流</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-none d-md-block">
          <table class="table table-bordered bg-white" id="attack-type">
            <thead>
              <tr>
                <th class="color-blue">一般病毒攻擊</th>
                <th class="color-blue">商業勒索病毒</th>
                <th class="bg-gray">比一比</th>
                <th class="color-blue">Zero-Day<br>零時差攻擊</th>
                <th class="color-blue">APT<br>進階持續性滲透攻擊</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>長短不一定</td>
                <td>攻擊時間短</td>
                <th class="bg-gray">攻擊時間</th>
                <td>潛伏時間長</td>
                <td>潛伏時間長</td>
              </tr>
              <tr>
                <td>無針對性、大範圍，以具有大量個資的企業為主</td>
                <td>無特定對象</td>
                <th class="bg-gray">攻擊對象</th>
                <td>有針對性</td>
                <td>鎖定目標，如政府、高科技業、金融業等</td>
              </tr>
              <tr>
                <td>以大量、快速的單一手法入侵</td>
                <td>利用 email 或網站瀏覽背景植入勒索程式，直接加密系統中的檔案</td>
                <th class="bg-gray">攻擊手法</th>
                <td>利用漏洞尚未修補的空窗期進行攻擊，確保達成攻擊目的</td>
                <td>長期持續性、多樣化，利用系統執行程式的特性入侵系統，植入惡意程式直接破壞</td>
              </tr>
              <tr>
                <td>個資被竊</td>
                <td>需支付鉅額贖金，才有機會將資料解密還原</td>
                <th class="bg-gray">企業風險</th>
                <td>被竊取有價值的帳號、密碼和機密資料</td>
                <td>國家安全、商業機密外流</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray pb-0">
    <h2 class="text-center">金融業/高科技業/政府必備端點保護</h2><hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <figure class="text-center">
            <img class="img-fluid" loading="lazy" width="600" height="360" src="/img/product/comodo/comodo端點安全管理.png" srcset="/img/product/comodo/comodo端點安全管理.png 1x, /img/product/comodo/comodo端點安全管理2x.png 1.5x, /img/product/comodo/comodo端點安全管理2x.png 2x" alt="comodo端點安全管理">
            <figcaption>Comodo 端點安全管理</figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-6">
          <h3 class="h5 color-red">不在白名單的程式拒絕執行、APT 攻擊機率 0%</h3>
          <p>APT（Advanced Persistent Threat，進階持續性滲透攻擊）經常利用電子郵件系統、釣魚網站，或潛藏在用戶端系統中，透過看似無害的電子郵件及下載惡意程式的方式輕易入侵用戶端系統。例如：APT 利用銀行寄送電子帳單的方式，就可悄悄將攻擊程式寄送到用戶系統中，因此掌握大量客戶資料的金融單位，很容易被列為首要 APT 攻擊目標！</p>
          <ul class="check-list">
            <li>全球即時更新惡意程式資料庫，超過 9,550 萬筆。</li>
            <li>獨家 Default Deny™ 信任程式資料庫，非信任程式限制執行。</li>
            <li>專利端點 Containment™ 技術，自動隔離非信任程式在沙盒中。</li>
          </ul>
        </div>
      </div>
      <div id="easy-protect">
        <h2 class="text-center mb-4">防治勒索軟體就是這麼簡單！</h2>
        <div class="text-center">
          <iframe class="img-fluid" style="aspect-ratio:16 / 9;" loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/UwBZxi2oLNg?si=h8XZzfKgsTwoUwkX" title="防治勒索軟體就是這麼簡單" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div id="comodo-function" class="bg-white">
      <div class="container">
        <h2 class="text-center mt-5">Comodo 安全管理平台</h2><hr>
        <div class="row text-center">
          <div class="col-12 col-md-4">
            <a href="/img/product/comodo/資訊安全管理介面2x.png"><img class="img-fluid" loading="lazy" width="551" height="351" src="/img/product/comodo/資訊安全管理介面.png" alt="Comodo的資訊安全管理介面"></a>
            <div class="color-red h5">24 小時監控端點安全</div>
          </div>
          <div class="col-12 col-md-4">
            <a href="/img/product/comodo/監控未知程式惡意程式2x.png"><img class="img-fluid" loading="lazy" width="551" height="351" src="/img/product/comodo/監控未知程式惡意程式.png" alt="Comodo監控未知惡意程式"></a>
            <div class="color-red h5">監控未知程式、惡意程式 OUT</div>
            <ul class="check-list d-inline-block mx-auto text-left">
              <li>自動攔截已知惡意程式</li>
              <li>自動沙箱隔絕未知程式活動</li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <a href="/img/product/comodo/漏洞防禦提醒安全升級2x.png"><img class="img-fluid" loading="lazy" width="551" height="351" src="/img/product/comodo/漏洞防禦提醒安全升級.png" alt="Comodo漏洞防禦提醒"></a>
            <div class="color-red h5">漏洞防禦提醒</div>
            <ul class="check-list d-inline-block mx-auto text-left">
              <li>系統漏洞掌握</li>
              <li>系統 Patch 安裝管理</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">10 道安全防線阻擋系統資料外洩</h2><hr>
      <div class="text-center">
        <img class="img-fluid" loading="lazy" width="800" height="550" src="/img/product/comodo/10道安全防線.png" srcset="/img/product/comodo/10道安全防線.png 1x, /img/product/comodo/10道安全防線2x.png 1.5x, /img/product/comodo/10道安全防線2x.png 2x" alt="Comodo的10道安全防線">
      </div>
    </div>
  </section>
  <section class="bg-blue">
    <h2 class="text-center color-white">Comodo 導入效益</h2><hr class="bg-white">
    <div class="container">
      <div class="d-flex bg-white rounded overflow-hidden">
        <img class="img-fluid be-img" loading="lazy" width="800" height="270" src="/img/product/comodo/效益.jpg" alt="*">
        <div class="p-4 d-flex align-items-center justify-content-center w-100">
          <ul class="circle-check-list h5 d-inline-block">
            <li>解決傳統資安問題</li>
            <li>提供端點完整保護</li>
            <li>防禦勒索軟體威脅</li>
            <li>未知程式掌握與分析</li>
            <li>其他新型態攻擊手法</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">端點安全產品比較表</h2><hr>
      <!-- <div class="text-center">
        <img class="img-fluid" loading="lazy" width="642" height="536" src="/img/product/comodo/端點防護產品比較表.png" srcset="/img/product/comodo/端點防護產品比較表.png 1x, /img/product/comodo/端點防護產品比較表2x.png 1.5x, /img/product/comodo/端點防護產品比較表2x.png 2x" alt="端點安全防護產品比較表">
      </div> -->
      <table class="table table-sm bg-white" id="compare-table">
        <thead>
          <tr>
            <th class="color-white" style="background-color: #A1A1A1;">其他端點產品</th>
            <th></th>
            <th class="bg-red color-white">Comodo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th colspan="3" style="background-color: #F3F3F3;">事前管理</th>
          </tr>
          <tr>
            <td>✓</td>
            <th class="font-weight-normal">已知黑名單攔截</th>
            <td>✓</td>
          </tr>
          <tr>
            <td>✓</td>
            <th class="font-weight-normal">已知白名單控制</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">未知程式隔離</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">端點沙箱/端點模擬</th>
            <td>✓</td>
          </tr>
          <tr>
            <th colspan="3" style="background-color: #F3F3F3;">事中監控與分析</th>
          </tr>
          <tr>
            <td class="no">不一定支援</td>
            <th class="font-weight-normal">主機入侵防禦</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">先期威脅遏制</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">不一定支援</td>
            <th class="font-weight-normal">AI 活動分析</th>
            <td>✓</td>
          </tr>
          <tr>
            <td>✓</td>
            <th class="font-weight-normal">攔截勒索程式(Online)</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">攔截勒索程式(Offline)</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">不一定支援或僅弱點管理</td>
            <th class="font-weight-normal">漏洞和補丁管理</th>
            <td>✓</td>
          </tr>
          <tr>
            <th colspan="3" style="background-color: #F3F3F3;">事後稽核</th>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">事件建模</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">時間序列分析</th>
            <td>✓</td>
          </tr>
          <tr>
            <td class="no">X</td>
            <th class="font-weight-normal">專家分析</th>
            <td>✓</td>
          </tr>
        </tbody>
      </table>
      <p class="text-center pt-5"><strong>※ 如果你用過其他端點產品，但無法滿足需求。歡迎來感受一下 Comodo 提早防禦、快速回應、攻擊率 0 的資安服務。</strong></p>
    </div>
  </section>
  <section id="case">
    <h2 class="text-center">客戶推薦</h2><hr>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container pb-4">
            <div class="row">
              <div class="col-12 col-md-6 pb-3">
                <div class="mb-5 h3">社團法人世界和平會</div>
                <p>有鑑於許多公益單位的捐款系統遭到駭客攻擊，造成捐款個資外洩，世界和平會決定導入 Comodo 端點防護，阻擋駭客攻擊與商業勒索威脅，保護珍貴的捐款個資。</p>
                <ul class="disc">
                  <li>無須擔心捐款資訊外洩。</li>
                  <li>未知程式拒絕執行，阻斷資安潛在風險。</li>
                  <li>24 小時端點安全監控，異常即時通知。</li>
                </ul>
                <div class="d-flex align-items-center flex-wrap">
                  <a href="https://www.ares.com.tw/events/comodo-user-story-worldpeace" class="btn btn-info" target="_blank" rel="noreferrer noopener">了解詳情</a>
                  <audio class="ml-3" title="世界和平會comodo使用分享" controls src="/files/audio/世界和平會comodo使用分享.mp3"></audio>
                </div>
              </div>
              <div class="col-12 col-md-6 text-center">
                <img class="img-fluid" loading="lazy" width="400" height="400" src="/img/product/comodo/世界和平會.png" alt="*">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

