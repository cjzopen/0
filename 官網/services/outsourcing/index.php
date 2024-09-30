<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
// $page['title']='如何挑選資訊委外廠商？資通電腦滿足IT系統開發與人力委外';
$page['title']='資訊委外、程式與軟體外包人力派遣';
$page['description']='支援急迫委外專案，提升程式開發品質，快速獲取軟體外包人力，適用金融、保險、科技、製造、電信與零售電商等產業。';
$page['canonical']='https://www.ares.com.tw/services/outsourcing/';
$page['css']=array('/css/osc.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
  <aside class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">專業服務</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">委外服務</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </aside>
  <section>
    <h1 class="text-center">資訊委外服務，提供程式軟體外包人力</h1><hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>資訊外包服務可以解決客戶在資訊系統開發與運作不同階段的人力資源需求，資通電腦擁有超過 <?= $age ?> 年顧問諮詢、教育訓練、資訊系統整合、委外、開發、維護等資訊服務經驗，客戶遍及金融業、保險業、科技業、製造業，電信業與零售電商等產業，能提供企業專業技術人才，強化核心競爭力！</p>
          <p>資通電腦軟體外包服務項目：</p>
          <ul class="disc">
            <li>Java / .NET / Python 技術支援與顧問諮詢服務</li>
            <li>全方面資訊系統規劃與建置</li>
            <li>資訊系統整合、開發與維護</li>
          </ul>
          <div data-nosnippet><p class="text-danger"><span class="h3">本服務乃指委外軟體服務、軟體工程師派駐，</span><br>非硬體、網路、伺服器等系統委外 MIS 維護維運。</p></div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">為什麼你需要 IT 人力軟體委外？</h2>
      <hr>
      <ul class="row justify-content-center text-center">
        <li class="col-12 col-md-4">
          <strong class="h4">😞資訊人力不足</strong>
          <div><a class="color-blue2" href="https://marketing.ares.com.tw/newsletter/2017-06-osc/focus" target="_blank" rel="noopener noreferrer">→提供高科技產業技術開發人力委外</a></div>
        </li>
        <li class="col-12 col-md-4">
          <strong class="h4">😢技術能力不夠</strong>
          <div><a class="color-blue2" href="https://marketing.ares.com.tw/newsletter/2018-11-osc/focus" target="_blank" rel="noopener noreferrer">→依不同資訊委外職務派遣專屬人力</a></div>
        </li>
        <li class="col-12 col-md-4">
          <strong class="h4">😨突發事件的緊急因應</strong>
          <div><a class="color-blue2" href="https://marketing.ares.com.tw/newsletter/2015-08-outsourcing/product" target="_blank" rel="noopener noreferrer">→配合企業淡旺季人力調配需求立即上線工作</a></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">優質外包廠商這樣挑就對了</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-1.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">快速取得專業資訊人才</div>
              <ul>
                <li>SCJP、SCWCD、MCAD、MCSD、MCSP、PMP…等專業證照人士</li>
                <li>降低資訊招募成本</li>
                <li>免除資遣資訊費用提列</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-2.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">多元豐沛的產業經驗</div>
              <ul>
                <li>有效控制專案預算與品質</li>
                <li>協助完成階段資訊用人計劃</li>
                <li>減輕勞務管理業務負擔</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-4.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">彈性良好的配合度</div>
              <ul>
                <li>提供單一服務窗口</li>
                <li>定期回報工作進度有效降低管理與溝通成本</li>
                <li>前、後端服務人員緊密結合</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a class="btn btn-info" href="https://marketing.ares.com.tw/newsletter/2017-06-osc/product" rel="noopener noreferrer" target="_blank">看看資通委外團隊怎麼做</a>
      </div>
    </div>
  </section>
  <section class="bg-lazyload bg-gray" data-image="/img/service/osc/bg-1.png">
    <div class="container">
      <h2 class="text-center">客戶推薦</h2>
      <hr>
      <div class="row justify-content-md-between justify-content-center">
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <img class="img-fluid" src="/img/service/凌華科技.png" width="300" height="100" loading="lazy" alt="凌華科技">
              <p><a class="stretched-link" href="https://www.ares.com.tw/events/osc-user-story-adlink" rel="noopener noreferrer" target="_blank">資通電腦 IT 委外人力具備專業性與良好溝通力，可獨當一面完成指派任務，這是我們最滿意的地方！</a></p>
            </div>
            <div class="text-right">/ 凌華科技資訊設計開發課 呂副理</div>
          </div>
        </div>
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <img class="img-fluid" src="/img/service/outsourcing-logo-3-1.png" width="300" height="100" loading="lazy" alt="台積電">
              <p><a class="stretched-link" href="https://www.ares.com.tw/events/tsmc-it" rel="noopener noreferrer" target="_blank">資通電腦的外派人力非常專業，人員素質也很好，幫忙我們在專案導入過程中，大大縮短開發時程，且上線後問題相對減少，使用者滿意度也有顯著地提升。</a></p>
            </div>
            <div class="text-right">/ 台積電 MDID 部門 蘇榮仁副理</div>
          </div>
        </div>
        <div class="col-10 col-md-3 bg-white p-3 mb-3">
          <div class="d-flex flex-column justify-content-between h-100 position-relative">
            <div>
              <img class="img-fluid" src="/img/service/outsourcing-logo-5-2.png" width="300" height="100" loading="lazy" alt="森森百貨">
              <p><a class="stretched-link" href="https://www.ares.com.tw/events/231" rel="noopener noreferrer" target="_blank">資通電腦委外服務團隊以彈性且專業的人力配合森森百貨 U-Mall 在網頁規格與內容上各項調整需求，不僅提高開發效率，並可因應專案時程階段不同而進行資源調整，有效降低人事成本！</a></p>
            </div>
            <div class="text-right">/ 森森百貨營運長 徐士偉</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="p-4 text-center" style="background-image:linear-gradient(90deg,#3FA2AB, #1076C8);"><a href="/services/system-development-integration/" class="text-white">其他服務：系統介接、API 整合、資料庫開發</a></div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

