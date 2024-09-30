<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='IT資訊委外與MIS包月服務，滿足系統開發與人力委外需求 | 資通電腦';
$page['description']='解決專案時間急迫、資訊人員不易招募、IT 人員流動率高的問題，適用金融、保險、科技、製造、電信業及零售電商等產業。';
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
    <div class="container">
      <h2 class="text-center">資訊委外服務</h2>
      <hr>
      <p>面對急切的資訊系統開發、軟體程式開發需求，加上一例一休法規影響，企業如何在工時、人力與成本之間找到完美配比？資通電腦擁有超過 <?= $age;?> 年顧問諮詢、教育訓練、資訊系統整合、委外、開發、維護等資訊服務經驗。提供專業資訊人力委外服務（Outsourcing Service）與 IT 、MIS 委外包月服務，解決客戶在資訊系統開發與運作不同階段的人力資源需求。資通電腦資訊委外服務客戶遍及金融業、保險業、科技業、製造業，電信業與零售電商等產業，提供企業專業資訊人才，加強核心競爭力！</p>
    </div>
  </section>
  <section class="bg-lazyload bg-gray" data-image="/img/service/osc/bg-1.png">
    <div class="container text-center">
      <h2>委外服務項目</h2>
      <hr>
      <div id="panel-area">
          <div class="panel">
            <div class="panel-heading">專業資訊人力委外</div>
            <div class="panel-body-area">
              <div class="panel-body panel-body-front bg-white">
                <ul class="disc d-inline-block text-left">
                  <li>Java / .NET / Python 技術支援與顧問諮詢服務</li>
                  <li>全方面資訊系統規劃與建置</li>
                  <li>資訊系統整合、開發與維護</li>
                </ul>
              </div>
              <div class="panel-body panel-body-back">
                <ul class="tick d-inline-block text-left">
                  <li>委外服務經驗二十五年以上</li>
                  <li>團隊經驗十年以上</li>
                  <li>SCJP、SCWCD、MCAD、MCSD、MCSP、PMP…等專業證照</li>
                  <li>提供單一服務窗口</li>
                  <li>前、後端服務人員緊密結合</li>
                  <li>產業多元豐沛的經驗</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-heading">MIS 資訊系統運作管理服務外包</div>
            <div class="panel-body-area">
              <div class="panel-body panel-body-front bg-white">
                <ul class="disc d-inline-block text-left">
                  <li>軟硬體資產列管</li>
                  <li>系統規劃與整合</li>
                  <li>網路安全</li>
                  <li>資料備份</li>
                  <li>執行會議</li>
                </ul>
              </div>
              <div class="panel-body panel-body-back">
                <ul class="tick d-inline-block text-left">
                  <li>解決企業人力成本考量</li>
                  <li>輕鬆獲得專業資訊人力</li>
                  <li>不必擔心人員流動性</li>
                  <li>不介入軟硬體販售，單純給予專業採購建議</li>
                  <li>企業可專注在核心事業</li>
                  <li>節省 60% 以上資訊維運成本</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">讓 MIS 外包成為企業資訊部門</h2>
    <hr>
    <div class="container">
      <div id="mis-area">
        <div class="d-none d-md-block" aria-hidden="true">
          <img loading="lazy" width="300" height="160" src="/img/service/osc/mis-1.png" alt="*" class="img-fluid">
        </div>
        <div>
          <h3 class="h5 mt-0">適用對象</h3>
          <ul>
            <li><span class="color-blue">中小企業</span>：無配置 MIS 人員，但需要專業 IT 人員進行資訊設備維護與管理。</li>
            <li><span class="color-blue">一般企業</span>：想將重心放在核心營運項目，並提前預防資訊維運問題。</li>
          </ul>
        </div>
        <div class="d-none d-md-block" aria-hidden="true">
          <img loading="lazy" width="300" height="160" src="/img/service/osc/mis-2.png" alt="*" class="img-fluid">
        </div>
        <div>
          <h3 class="h5 mt-0">服務流程</h3>
          <ul class="disc">
            <li>作業現況調查與收集</li>
            <li>系統整合評估與調整建議</li>
            <li>依規劃進行安裝設定</li>
            <li>日常運作管理與問題排除</li>
            <li>建立標準作業流程</li>
          </ul>
        </div>
        <div class="d-none d-md-block" aria-hidden="true">
          <img loading="lazy" width="300" height="160" src="/img/service/osc/mis-3.png" alt="*" class="img-fluid">
        </div>
        <div>
          <h3 class="h5 mt-0">服務方式</h3>
          <ul>
            <li><span class="color-blue">電話支援</span>：提供電話技術諮詢服務。</li>
            <li><span class="color-blue">遠端連線</span>：透過連線至客戶端服務。</li>
            <li><span class="color-blue">到場服務</span>：提供不定期到場服務。</li>
            <li><span class="color-blue">文件協助</span>：協助相關文件核對整理。</li>
          </ul>
        </div>
      </div>
      <br>
      <div class="text-center p-4">
        <a href="https://marketing.ares.com.tw/newsletter/2019-10-osc/focus" class="btn btn-info color-white">MIS 外包服務可以做到那些？</a>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">資訊委外服務有什麼好處</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-1.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">快速取得專業資訊人才</div>
              <ul>
                <li>降低資訊招募成本</li>
                <li>免除資遣資訊費用提列</li>
                <li>節省福利費用支出</li>
                <li>容易取得豐富實務經驗的資訊人才</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-2.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">提升專案品質</div>
              <ul>
                <li>有效控制專案預算與品質</li>
                <li>員工可專注核心工作，提升作業效率</li>
                <li>主管可將注意力轉移至策略、合作與技術層面，提升競爭力</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-3.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">快速解決問題</div>
              <ul>
                <li>提供預防性維護措施，減少問題發生機率</li>
                <li>提供遠端連線服務，即時排除問題，節省客戶寶貴時間</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="row">
            <div class="col-2" aria-hidden="true">
              <img width="95" height="95" loading="lazy" src="/img/service/osc/advantage-4.svg" alt="*" class="img-fluid">
            </div>
            <div class="col-10">
              <div class="color-blue mt0 h4">提升營運彈性</div>
              <ul>
                <li>控制 IT 人員進用時機</li>
                <li>彈性的組織規劃</li>
                <li>減輕勞務管理業務負擔</li>
                <li>協助完成階段資訊用人計劃</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

