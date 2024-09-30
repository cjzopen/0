<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='透過7大要素選擇MES廠商';
$page['description'] = '從認證肯定、廠商信譽、產品彈性、廠商經驗、產品功能、系統維護、產品價值的角度，選擇最符合企業需求的製造執行系統解決方案。';
$canonical='https://cimes.ares.com.tw/knowmes/how/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/how/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="how">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  file_get_contents($_SERVER['DOCUMENT_ROOT']."/public/img/what/whatsmes-banner-icon.svg").'<span>認識 MES</span>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">什麼是 MES</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">如何選 MES</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php include('../_menu.php'); ?>
    <section itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <h1 itemprop="about" class="text-center mb-0">選擇 MES 廠商的 7 大要素</h1>
        <hr>
        <!-- <div id="accordion-toggle" class="d-inline-block mb-3" role="button">+ Open All</div> -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>認證與肯定</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">廠商得獎口碑是重要指標，優質的 MES 系統應該有國內外認證與推薦。系統能獲得國際肯定必定符合國際潮流與趨勢，而獲得國內肯定則符合台灣產業所需。</p>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="sub-bg fff-color px-3 py-2" itemprop="name"><strong>廠商信譽</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>具一定規模之廠商，不會讓您在導入 MES 後變成求助無門的孤兒。</li>
                  <li>廠商過去累積的口碑也是重要參考指標。</li>
                  <li>MES 研發及顧問團隊都在台灣，才能提供最快速、最好的支援與服務。</li>
                  <li>愈來愈多製造業者跨足兩岸三地，在大陸工廠導入系統後若有緊急狀況，要能得到最快速的支援。</li>
                </ul>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品彈性</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>「完整性的系統」與「Template 系統」最大差異在於是否需要大幅度客製投入及後續維護的困難度。</li>
                  <li>MES 產品之各模組若有後續更新版本，是否提供免費更新服務也是關注項目。</li>
                  <li>優質的 MES 系統能透過線上快速設定方式，調整到最符合公司內部所需的系統環境，進而減少客製。</li>
                  <li>系統供應商的團隊持續研發新模組，可讓系統架構更趨完整。</li>
                </ul>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="sub-bg fff-color px-3 py-2" itemprop="name"><strong>廠商經驗</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>擁有 CIM 及 MES 經驗之廠商，對客戶來說比較有保障。</li>
                  <li>產品擁有 Reference Site 代表經過其他客戶的驗證，相對來說穩定性較高。</li>
                  <li>對於所屬產業有所了解，除溝通較為快速外，亦能帶來更多產業創新的作業方法。</li>
                </ul>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品功能</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>優質的 MES 系統會預留彈性，以因應公司特性做出最符合需求之調整。</li>
                  <li>導入時間過長，會嚴重影響生產線，增加成本支出，並引起員工反感。</li>
                  <li>有經驗之系統供應商，必須能整合其他符合需求的應用軟體，為企業提供最佳解決方案。</li>
                </ul>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="sub-bg fff-color px-3 py-2" itemprop="name"><strong>系統維護</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>系統供應商要能提供完整服務保證，讓問題能在最短時間內獲得解決，減少損失。</li>
                  <li>系統設計架構完整穩定，可以減少導入後的維護支出。</li>
                  <li>要先確認是否需要專精某種程式語言的人，才能進行開發或維護。</li>
                </ul>
              </div>
            </div>
            <div class="mb-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div class="main-bg fff-color px-3 py-2" itemprop="name"><strong>產品價值</strong></div>
              <div class="rounded p-3 border border-top-0" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <ul class="disc" itemprop="text">
                  <li>選擇國外 MES 系統時，必須評估有本土化且價格合理之系統供應商，並能提供與國外企業同等級的服務。</li>
                  <li>整體 ROI 評估：投入 MES 成本，要能協助公司節省無謂支出及資源浪費，並帶來更高的客戶滿意度。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>