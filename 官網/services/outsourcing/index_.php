<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='IT資訊委外服務，協助降低成本、強化競爭力💪 | 資通電腦';
$page['description']='資訊委外服務的精實技術能量及委外豐富經驗，提升專案成功率，並解決客戶在資訊系統開發與運作不同階段的人力資源需求。';
$page['canonical']='https://www.ares.com.tw/services/outsourcing/';
$page['css']=array('/css/service.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');

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
    <div class="gray-bg paging text-center" id="title">
      <ul>
        <li><a href="" class="act">委外服務</a></li>
        <li><a href="best-practices/#title">成功案例</a></li>
        <li><a href="articles/#title">相關文章</a></li>
        <li><a href="consult/#title">免費諮詢</a></li>
      </ul>
    </div>
  </aside>
  <section>
    <div class="container">
      <h2 class="text-center">資訊委外服務</h2>
      <hr>
      <p class="justify">面對急切的資訊系統開發、軟體程式開發需求，加上一例一休法規影響，企業如何在工時、人力與成本之間找到完美配比？資通電腦擁有超過 <?= $age;?> 年顧問諮詢、教育訓練、資訊系統整合、委外、開發、維護等資訊服務經驗。提供專業資訊人力委外服務（Outsourcing Service）與 IT 、MIS 派遣服務，解決客戶在資訊系統開發與運作不同階段的人力資源需求。資通電腦資訊委外服務客戶遍及金融業、保險業、科技業、製造業，電信業與零售電商等產業，能有效協助企業降低成本、加強核心競爭力！</p>
    </div>
  </section>
  <section class="outsourcing view gray-bg">
    <h2 class="text-center">委外服務項目</h2>
    <hr>
    <div class="container">
      <ul class="row text-center">
        <li class="col-xs-12 col-sm-4 col-md-4 wow fadeInLeft">
          <img data-src="/img/service/services-outsourcing-1.png" alt="*" class="img-responsive center-block lazyload">
          <div class="h4 main-color">Java / .NET / Python <br>技術支援與顧問諮詢服務</div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 wow fadeInLeft">
          <img data-src="/img/service/services-outsourcing-2.png" alt="*" class="img-responsive center-block lazyload">
          <div class="h4 main-color">全方面資訊系統規劃與建置</div>
        </li>
        <li class="col-xs-12 col-sm-4 col-md-4 wow fadeInLeft">
          <img data-src="/img/service/services-outsourcing-3.png" alt="*" class="img-responsive center-block lazyload">
          <div class="h4 main-color">資訊系統整合、開發與維護</div>
        </li>
      </ul>
    </div>
  </section>
  <section class="outsourcing">
    <h2 class="text-center">委外服務優勢</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="wow fadeInLeft">
            <img data-src="/img/service/services-outsourcing-4.jpg" alt="outsourcing" class="img-responsive center-block lazyload">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="wow fadeInLeft">
            <ul class="disc">
              <li>團隊十年以上經驗</li>
              <li>SCJP、SCWCD、MCAD、MCSD、MCSP、PMP…等專業證照</li>
              <li>提供單一服務窗口</li>
              <li>前、後端服務人員緊密結合</li>
              <li>產業多元豐沛的經驗</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="outsourcing benefit gray-bg">
    <h2 class="text-center">人力委外效益</h2>
    <hr>
    <div class="container wow fadeInLeft">
      <ul class="check">
        <li>控制資訊（IT）人員進用時機</li>
        <li>協助完成階段資訊用人計劃</li>
        <li>彈性的組織規劃</li>
        <li>降低學習曲線</li>
        <li>免除資遣資訊費用提列</li>
        <li>節省福利費用支出</li>
        <li>降低資訊招募成本</li>
        <li>減輕勞務管理業務負擔</li>
        <li>有效控制專案預算與品質</li>
        <li>容易取得具有豐富實務經驗的資訊人才</li>
        <li>員工可更專注於核心工作，解決人事管理問題</li>
        <li>主管可將注意力轉移至策略、合作與技術層面，提昇競爭力</li>
        <li>協助資訊系統規劃及業務運作的各種標準作業程序</li>
        <li>簡化資訊專案外包程序，提高資訊業務應變彈性與時效性</li>
      </ul>
    </div>
  </section>
  <section id="contact">
    <h3 class="text-center">產品諮詢</h3>
    <hr>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<script src="/js/main2016.js" async></script>
</body>
</html>

