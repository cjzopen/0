<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='系統整合開發,電子化,軟硬體維護支援等專業服務 | 資通電腦';
$page['description']='資通電腦提供專業委外服務、顧問諮詢服務、政府大型資訊專案系統整合服務、企業電子化解決方案及軟硬體維護支援，幫助客戶在市場競爭中取得領先地位。';
$page['canonical']='https://www.ares.com.tw/services/';
$page['css']=array('/css/service.css?20');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <figure class="slider" data-image="/img/service/services-banner-400.png">
    <!-- <img class="img-fluid lazyload" src="/img/service/services-banner-low.jpg" data-src="/img/service/services-banner-400.png" alt="*"> -->
    <figcaption class="color-white">
      <img src="/img/service/services-icon.svg" alt="*">專業服務
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">專業服務</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <aside class="bg-gray paging text-center">
    <ul>
      <li><a href="<?= $page['canonical'] ?>" class="act">專業服務</a></li>
      <li><a href="outsourcing/">委外服務</a></li>
      <li><a href="/services/system-development-integration/">系統整合開發</a></li>
      <li><a href="gov/">政府專案服務</a></li>
    </ul>
  </aside>
  <section>
    <div class="container">
      <h1 class="text-center h2">資通電腦專業服務</h1>
      <hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>擁有四大優勢，且連續十年獲得經濟部工業局各式能量登錄證書，並提供各產業三大領域的系統開發、整合、維護、顧問、諮詢等全方位解決方案，讓企業在系統整合開發時能利用資訊工具與能力提昇企業生產與管理績效，強化企業體質及人員素質，幫助企業在國際市場競爭中取得領先地位。並能整合兩岸資源，以技術專精的資訊系統團隊提供事前規劃、產品導入、客製化、委外服務與教育訓練等完整專業的系統整合服務。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray" id="four">
    <h2 class="text-center">四大優勢</h2>
    <hr>
    <div class="container">
      <div class="position-relative">
        <div class="text-center">
          <img class="img-fluid" src="/img/service/services--advantage.png" alt="四大優勢">
        </div>
        <ul class="row">
          <li class="wow fadeInLeft col-12 col-md-6">
            <div class="h5 pb-1 border-bottom border-dark color-blue3">資訊系統整合與開發</div>
            <p>與各國際大廠結盟轉移技術，結合資通擅長的資料庫管理、系統開發、系統規劃與設計、系統整合經驗以及各領域經營知識，提供各類型產業企業營運解決方案。</p>
          </li>
          <li class="wow fadeInLeft col-12 col-md-6">
            <div class="h5 pb-1 border-bottom border-dark color-orange">企業電子化</div>
            <p>從設計、接單、採購、進料、生產、倉儲、交貨、行銷到售後服務等，資通電腦皆能為企業提供最經濟快速的系統配置，創造全方位企業電子化流程。</p>
          </li>
          <li class="wow fadeInLeft col-12 col-md-6">
            <div class="h5 pb-1 border-bottom border-dark color-orange">資訊安全</div>
            <p>提供各類型資安檢測與憑證驗證工具，協助企業應用程式研發原始碼檢測、文件加密控管、電子憑證驗證…等各類型營運上的資安問題。</p>
          </li>
          <li class="wow fadeInLeft col-12 col-md-6">
            <div class="h5 pb-1 border-bottom border-dark color-blue3">軟硬體維護與支援</div>
            <p>全天候專業資訊（IT）人力支援系統開發、整合、維護、顧問、諮詢等委外服務，提供客戶在資訊應用系統開發、運作與系統生命週期不同階段之資訊人力資源需求，降低與實際資訊人力安排有所差異的問題。</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">三大領域</h2>
    <hr>
    <div class="container">
      <ul class="row text-center">
          <li class="col-12 col-sm-6 col-md-4 pb-3">
            <div class="thumbnail position-relative border wow fadeInLeft">
              <img src="/img/service/services-outsourcing.jpg" alt="委外服務" class="img-fluid center-block">
              <div class="h4 py-3"><a href="outsourcing/" class="stretched-link">委外服務</a></div>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-4 pb-3">
            <div class="thumbnail position-relative border wow fadeInLeft">
              <img src="/img/service/services-consultant.jpg" alt="系統整合開發" class="img-fluid center-block">
              <div class="h4 py-3"><a href="/services/system-development-integration/" class="stretched-link">系統整合開發</a></div>
            </div>
          </li>
          <li class="col-12 col-sm-6 col-md-4 pb-3">
            <div class="thumbnail position-relative border wow fadeInLeft">
              <img src="/img/service/services-gov.jpg" alt="政府專案服務" class="img-fluid center-block">
              <div class="h4 py-3"><a href="gov/" class="stretched-link">政府專案服務</a></div>
            </div>
          </li>
      </ul>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>

</html>

