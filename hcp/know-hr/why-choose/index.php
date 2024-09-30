<?php
$url='https://hcp.ares.com.tw/topic/how-to-choose-hr-system/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR 系統怎麼選？六大重點評估適合的人資系統';
$page['description'] = '挑選人資系統要注意哪些事項？公司適合雲端還是導入系統方式？六大評估重點推薦給你。協助您找到符合自身產業的人事管理。';
$canonical = HOST_LINK.'know-hr/why-choose/';
$page['css']=array('/css/grid.css','/css/why.css');

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('../header.php');
?>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item" class="py-2 py-md-0 d-inline-block d-md-inline"><span itemprop="name">為何選 HCP</span></a>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </div>
<?php
include '../supmenu.php';
?>
    <section id="counter" itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <h1 class="text-center mb-0" itemprop="about">評估人資系統需注意的６大關鍵</h1><hr>
        <div>
          <div class="row justify-content-center">
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">人事法規異動的應對</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">高科技業、製造業的複雜排班及輪班，常常因為當地所得稅、勞動事件法等法規變動而有修改需求，系統功能必需能即時支援更新。</p>
              </div>
            </div>
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">系統的擴充彈性</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">當企業設立新的海外據點，或是公司管理辦法改變有拓展規劃時，最好選擇有內建相關功能例如支援跨國或跨區組織架構的系統。如果系統無法支援功能擴充，則只能靠系統商修改程式或花錢花時間再客製。</p>
              </div>
            </div>
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">系統必需符合自身產業</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">挑選具備相關產業經驗的系統廠商，可在導入前、中、後期協助企業釐清需求，加上系統商如果能提供開發工具進行全面技術移轉，企業更能自行掌控後續系統維運彈性。</p>
              </div>
            </div>
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">穩定性與資訊安全</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>若是中大型企業員工數量眾多，選擇國際大廠的人資系統架構較能保障資料處理穩定性，例如，Oracle 資料庫能支援 10 倍系統資料量。</p>
                  <p>而近年資安事件頻傳，使用資料庫層級的多層加密模式，搭配加密電子薪資條，可提升資安程度，避免因資安事件上新聞而降低公司信譽。</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">外商系統會比較好嗎？還是要選擇在地化系統服務？</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">若人資系統廠商在台灣設有研發與顧問團隊，使用者臨時遇到狀況能機動性排除解決問題，不容易求助無門。此外，國外系統通常價格昂貴，本土化系統價格相對合理，若系統又能符合公司全球化系統要求更好。</p>
              </div>
            </div>
            <div class="col-12 col-lg-7" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">公司適合雲端還是系統導入方案？</h2>
              <div class="pl-lg-5 ml-lg-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">通常導入系統能依公司所設想的人事流程去規劃調整，而雲端系統則彈性較低。如果擔心人事資料或薪資資料外洩，則導入系統方式相對安全，萬一遇到網路連線異常，雲端系統較會有資料遺失的風險。<a href="#bryc" class="main-color">詳細比較▼</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container" id="bryc">
        <h2 class="text-center mb-0">人資系統導入與雲端方案比較</h2>
        <hr>
        <table class="table">
          <thead>
            <tr>
              <th class="border-dark" width="110"></th>
              <th class="main-color border-dark">系統導入方案（HCP）</th>
              <th class="border-dark">雲端方案</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border-dark">適用人數</td>
              <td class="main-color border-dark">中大型企業、多公司別或兩岸三地跨國集團</td>
              <td class="border-dark">中小型企業</td>
            </tr>
            <tr>
              <td class="border-dark">系統架構</td>
              <td class="main-color border-dark">完整涵蓋 HRM、HRD 和人事系統相關加值服務，搭配專業顧問服務，集中管理權限、簡化人資作業流程</td>
              <td class="border-dark">僅提供人事、薪資、排班等基本功能</td>
            </tr>
            <tr>
              <td class="border-dark">系統管理</td>
              <td class="main-color border-dark">使用 Oracle 資料庫，系統靈活參數權限設定。提供原始碼讓企業可以掌握人事系統營運與作業</td>
              <td class="border-dark">系統廠商統一管理</td>
            </tr>
            <tr>
              <td class="border-dark">需求符合度</td>
              <td class="main-color border-dark">集團式與多公司人事管理，可依各地稅法彈性調整，並可與 ERP 介接整合，自動支援不同銀行轉帳格式，拋轉計薪資料</td>
              <td class="border-dark">提供固定模組與方案供客戶選擇無法整合需手動匯入與轉出</td>
            </tr>
            <tr>
              <td class="border-dark">資安保密性</td>
              <td class="main-color border-dark">機敏資料放置企業端安全性佳，透過 Oracle 資料庫加密與技術與 PKI 加密電子薪資條，企業人事資料安全無需顧慮</td>
              <td class="border-dark">資料統一放置雲端，有一定的資安風險</td>
            </tr>
            <tr>
              <td class="border-dark">合規能力</td>
              <td class="main-color border-dark">隨法規變動即時更新，並定期升級最新版本</td>
              <td class="border-dark">視系統廠商技術而定</td>
            </tr>
            <tr>
              <td class="border-dark">系統維護</td>
              <td class="main-color border-dark">除產品保固維持系統正常運作外，更提供持續新增功能與教育訓練</td>
              <td class="border-dark">需選具有規模、財務穩健的廠商，才不會發生 HR 系統維護求助無門的慘劇</td>
            </tr>
            <tr>
              <td class="border-dark">語系支援</td>
              <td class="main-color border-dark">提供繁中、簡中、英文版本。其他語系可額外擴充</td>
              <td class="border-dark">僅提供繁中或簡中支援</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">各產業推薦 HCP 的理由</h2>
        <hr>
        <div class="row">
          <div class="col-12 col-md-4">
            <div>
              <img data-src="/img/know/why/product-application-1.jpg" alt="*" class="card-img lazyload">
              <h3 class="main-color">高科技業/外商</h3>
              <ul class="disc">
                <li>彈休福利假</li>
                <li>彈性上下班</li>
                <li>線上打卡</li>
                <li>預支特休</li>
                <li>借假管理</li>
                <li>利潤中心分攤維護</li>
                <li>與 ERP 系統串聯</li>
                <li>線上簽核流程串接</li>
                <li>教育訓練預算管理及成本分析</li>
                <li>集團人事報表管理</li>
              </ul>
              <a href="/best-practices/high-tech" class="btn p-3">相關客戶</a>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div>
              <img data-src="/img/know/why/product-application-2.jpg" alt="*" class="card-img lazyload">
              <h3 class="main-color">製造業</h3>
              <ul class="disc">
                <li>輪班制</li>
                <li>複雜班別津貼</li>
                <li>外勞管理</li>
                <li>工廠歲修假</li>
                <li>宿舍管理</li>
                <li>排班/排休管理</li>
                <li>彈休/輪休/特休管理</li>
                <li>與 ERP 系統串聯</li>
                <li>大陸員工多幣別發薪</li>
                <li>大陸社保規範</li>
                <li>越南法令稅制</li>
                <li>周年制/歷年制</li>
              </ul>
              <a href="/best-practices/manufacturing" class="btn p-3">相關客戶</a>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div>
              <img data-src="/img/know/why/product-application-3.jpg" alt="*" class="card-img lazyload">
              <h3 class="main-color">其他產業</h3>
              <ul class="disc">
                <li>彈性上下班</li>
                <li>彈休福利假</li>
                <li>預支特休</li>
                <li>借假管理</li>
                <li>輪班制</li>
                <li>門市排班</li>
                <li>與 ERP 系統串聯</li>
                <li>利潤中心分攤維護</li>
                <li>教育訓練預算管理及成本分析</li>
                <li>線上簽核流程串接</li>
                <li>PT 人員計時計酬算與分店成本分攤</li>
                <li>線上打卡</li>
              </ul>
              <a href="/best-practices/circulation-service-other" class="btn p-3">相關客戶</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>