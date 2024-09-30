<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HCP人力資源系統，多組織架構與精細權限管理';
$page['description'] = '推薦使用HCP人力資源管理系統，滿足跨國集團複雜人事管理。且具備多組織架構、精細權限控管、即時依政府法規更新，人事管理更加敏捷。';
$page['css']=array('/css/feature.css');
$canonical='https://hcp.ares.com.tw/products/features/';
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/features/'
  ),
  array(
    'lang' => 'en',
    'url' => 'https://hcp.ares.com.tw/en/products/features/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include_once '../_banner.php';
include_once '../modules/_breadcrumb.php';
?>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">特色與效益</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </aside>
<?php
include_once '../_menu.php';
?>
    <section class="bgp-r bgp-b bgs-cover bg-lazyload" data-image="/img/products/features/feature-bg.jpg" data-height="500px" data-view="768">
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">台灣百大企業首選人力資源系統</h1>
            <p>根據研究調查，企業越早數位轉型，獲利能力也較高！尤其跨國集團的組織龐大、人事管理複雜，必須引入完善的人資數位管理工具，才能提升作業效率。</p>
            <p>HCP 擁有多組織架構及彈性參數設計，可支援龐大結薪、靈活排班，設定不同管理權限，採用國際級 Oracle 資料庫加密技術，是台灣百大企業最推薦的選擇。</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6"></div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">HCP 讓人力資源管理更敏捷</h2>
        <hr class="mb-0">
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-1.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>集團式組織架構</strong></p>
                <p class="mb-0">企業集中管理各分公司或廠區的人事資產，有效進行資源整合</p>
              </div>
            </div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-2.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>符合異地保險稅率</strong></p>
                <p class="mb-0">支援兩岸三地、越南、印尼及泰國等當地稅率及保險制度，並可依稅法調整更新</p>
              </div>
            </div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-3.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>快速結薪／靈活排班</strong></p>
                <p class="mb-0">支援大量結薪、多種輪班設定，滿足高科技製造業的複雜排班需求</p>
              </div>
            </div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-4.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>精細人事權限管理</strong></p>
                <p class="mb-0">依不同區域、部門、職級、員工類別，定義各角色資料權限，保護企業敏感資料查閱權限</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 text-center d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/img/products/features/功能特色.png" alt="功能特色">
          </div>
          <div class="col-12 col-md-4">
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-5.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>依政府法規更新</strong></p>
                <p class="mb-0">符合所得稅、勞動事件法等法規變動修改需求，即時更新系統功能</p>
              </div>
            </div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-6.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>異質系統整合</strong></p>
                <p class="mb-0">提供標準版 API，彈性整合異質系統，實現統一管理平台的目標</p>
              </div>
            </div>
            <div class="mb-3 rounded fff-bg p-2 d-flex align-items-center">
              <div class="pr-2 flex-shrink-0" aria-hidden="true"><img width="35" height="35" src="/img/products/features/features-7.svg" alt="*"></div>
              <div>
                <p class="main-color mb-0"><strong>原始碼技術移轉</strong></p>
                <p class="mb-0">系統原始碼交付，全面技術移轉，並提供人資基礎架構規劃服務</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">HCP 最佳人事效益，協助企業國際佈局</h2>
        <hr>
        <table class="table">
          <thead>
            <tr>
              <th>
                <div class="text-center">
                  <img class="img-fluid" loading="lazy" width="92" height="92" src="/img/products/features/benefit-1.svg" alt="*">
                </div>
                <div class="text-center main-color h3 mb-0 mt-1">導入前</div>
              </th>
              <th>
                <div class="text-center">
                  <img class="img-fluid" loading="lazy" width="92" height="92" src="/img/products/features/benefit-2.svg" alt="*">
                </div>
                <div class="text-center main-color h3 mb-0 mt-1">導入後</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="dot d-inline-block"></span>面對勞基法令、稅制更新，需人工調整計算，耗時費力。</td>
              <td><span class="dot main-bg d-inline-block"></span>HCP 因應勞基法新制，即時更新系統版本，HR 可彈性設定加班費率及認列時數規則，或多組年假及遞延方式。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>上百名或上千名員工的結薪，需要花費一整天的作業時間。</td>
              <td><span class="dot main-bg d-inline-block"></span>系統支援大量結薪，並自動蒐集帶入考勤、加班資訊，提升作業精準度。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>HR 需協助主管、同仁查詢人事相關資訊，花費來回溝通成本，耽誤核心作業。</td>
              <td><span class="dot main-bg d-inline-block"></span>員工可隨時查詢所需的人事訊息、薪資、扣繳憑單等資訊；主管也能即時得知員工出勤狀況。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>高科技業或製造業的排班複雜，光靠人力作業，不僅費時也容易產生失誤。</td>
              <td><span class="dot main-bg d-inline-block"></span>多種輪班設定，例如：做二休二、做三休一、做四休二…等，也支援整批調班，符合高科技製造業需求。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>企業規模越大，人事管理也越趨複雜，員工個資一不小心可能外洩。</td>
              <td><span class="dot main-bg d-inline-block"></span>跨國公司也能規範人員權限，根據不同人員職務屬性，設定各別資料閱讀、修改權限，避免資料外洩風險。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>集團人事資料無法統整，HR 無法掌握海外據點人力，浪費檔案傳輸、來回溝通及重複建檔的時間成本。</td>
              <td><span class="dot main-bg d-inline-block"></span>海外子公司人事資料自動串接總公司人資系統，HR 不需切換公司帳號，在同一平台就可看到所有子公司資訊。</td>
            </tr>
            <tr>
              <td><span class="dot d-inline-block"></span>海外子公司如有突發系統問題，廠商無法即時協助，影響集團人事營運。</td>
              <td><span class="dot main-bg d-inline-block"></span>HCP 在中國大陸設有服務據點，可機動性協助海外客戶排除問題。</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '不用拜託 IT，HR 快速搞定人事報表的秘訣',
    'url' => 'https://marketing.ares.com.tw/newsletter/2022-12-hcp/hr-data-analysis'
  )
  ,array(
    'text' => '人資必學！七招教你聰明因應勞動事件法',
    'url' => 'https://marketing.ares.com.tw/newsletter/2020-02-bnk/labor-incident-act'
  )
  ,array(
    'text' => '滿足人事擴充需求，陪企業成長的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-02-hcp/product'
  )
  ,array(
    'text' => 'HCP 人力資產規劃系統，代碼效能優化小技巧',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-10-hcp/it'
  )
  ,array(
    'text' => '九大特點 滿足多組織架構的 HR 系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-10-hcp/focus'
  )
  ,array(
    'text' => '搞定「一例一休」 資通 HCP 全年無休！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2016-11-hcp/focus'
  )
  ,array(
    'text' => 'HCP 神對策 EICC、性平法攏免驚',
    'url' => 'https://marketing.ares.com.tw/newsletter/2015-01/focus'
  )
  ,array(
    'text' => 'HCP 符合 EICC 規範，即時反饋人事異常情況',
    'url' => 'https://marketing.ares.com.tw/newsletter/2015-01/eicc'
  )
  ,array(
    'text' => 'HCP 二代健保功能彈性調整，幫助企業輕鬆轉換',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-10/hcp'
  )
  ,array(
    'text' => '揭開 IFRS HCP 應用的神秘面紗',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-04/ifrs-hr'
  )
  ,array(
    'text' => 'HCP 因應 IFRS 修改設定詳解',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-04/hcp-ifrs'
  )
  ,array(
    'text' => '不怕大陸新勞動法影響，HCP 協助企業一起面對解決',
    'url' => 'https://marketing.ares.com.tw/newsletter/2008-03/focus'
  )
  ,array(
    'text' => 'HCP 人力資源管理方案介紹',
    'url' => 'https://marketing.ares.com.tw/newsletter/2007-09/product-2'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/js/sda.js" defer></script>
</body>
</html>