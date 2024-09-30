<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "service";
$page['title']='IT 外包服務,各行業資訊委外案例推薦 | 資通電腦';
$page['description']='包含金融業、壽險業、製造業、電信業、零售與電商業等客戶，皆是資通電腦資訊委外的成功案例';
$page['canonical']='https://www.ares.com.tw/services/outsourcing/best-practices/';
$page['css']=array('/css/service.css');
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
            <a href="../../" itemprop="item"><span itemprop="name">專業服務</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">委外服務</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('../_nav.php');

function case_list($company,$logo,$link='',$title=''){
  if($link !== ''){
    $article='<a href="'.$link.'" class="svg d-flex align-items-center w-100 h-100 color-white p-4"><span class="w-100">'.$title.'</span></a>';
  }else{
    $article='';
  }
  echo '<li class="col-6 col-md-4"><div class="thumbnail thumbnail-s border rounded d-flex justify-content-center align-items-center position-relative"><img class="img-fluid" src="'.$logo.'" width="300" height="100" loading="lazy" alt="'.$company.'">'.$article.'</div></li>';
}
?>
  </div>
  <main id="outsourcing">
    <section>
      <div class="container">
        <h2 class="text-center">成功案例</h2>
        <hr>
        <h3 class="color-blue h4" id="accordion">金融</h3>
        <ul class="row">
<?php
case_list('華南銀行','/img/service/outsourcing-logo-1-1.png');
case_list('台新銀行','/img/service/outsourcing-logo-1-2.png');
case_list('富邦','/img/service/outsourcing-logo-1-3.png');
case_list('中信','/img/service/outsourcing-logo-1-4.png');
case_list('遠銀','/img/service/outsourcing-logo-1-5.png');
case_list('國泰世華','/img/service/outsourcing-logo-1-6.png');
?>
        </ul>
      </div>
    </section>
    <section class="">
      <div class="container">
        <h3 class="color-blue h4" id="">壽險</h3>
        <ul class="row text-center">
<?php
case_list('南山人壽','/img/service/outsourcing-logo-2-1.png');
case_list('國泰人壽','/img/service/outsourcing-logo-2-2.png');
?>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="color-blue h4" id="security">製造</h3>
        <ul class="row text-center">
<?php
case_list('台積電','/img/service/outsourcing-logo-3-1.png','https://www.ares.com.tw/events/tsmc-it','台積電與資通電腦 IT 委外服務合作共創競爭力');
case_list('台積電','/img/service/凌華科技.png','https://www.ares.com.tw/events/osc-user-story-adlink','凌華科技以資通電腦 IT 委外提升專案開發效率');
case_list('友達','/img/service/outsourcing-logo-3-2.png');
case_list('聯電','/img/service/outsourcing-logo-3-3.png');
case_list('聯發科','/img/service/outsourcing-logo-3-4.png');
case_list('茂德','/img/service/outsourcing-logo-3-6.png');
case_list('南亞科技','/img/service/outsourcing-logo-3-8.png');
case_list('南茂','/img/service/outsourcing-logo-3-9.png');
case_list('元晶太陽能','/img/service/outsourcing-logo-3-10.png');
case_list('旺宏','/img/service/outsourcing-logo-3-11.png');
case_list('華碩','/img/service/outsourcing-logo-3-12.png');
?>
        </ul>
      </div>
    </section>
    <section class="">
      <div class="container">
        <h3 class="color-blue h4" id="financial">電信</h3>
        <ul class="row text-center">
<?php
case_list('台灣大哥大','/img/service/outsourcing-logo-4-1.png','https://www.ares.com.tw/files/news/20130814-twm-mysports-app.pdf','協助台灣大哥大推出 mySports APP');
case_list('遠傳','/img/service/outsourcing-logo-4-2.png');
case_list('台灣之星','/img/service/outsourcing-logo-4-3.png');
case_list('全虹','/img/service/outsourcing-logo-4-4.png');
?>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="color-blue h4" id="financial">零售與電商</h3>
        <ul class="row text-center">
<?php
// case_list('統一資訊','/img/service/outsourcing-logo-5-1.png');
case_list('森森百貨','/img/service/outsourcing-logo-5-2.png','https://www.ares.com.tw/events/231','森森百貨利用資通 IT 委外快速提升競爭力');
?>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="color-blue h4 mb-4">其它</h3>
        <ul class="row">
          <li class="col-12 col-md-3 mt-3">
            <a href="https://www.ares.com.tw/events/osc-user-story-shipping-company"><img data-src="/img/events.jpg" alt="*" class="img-fluid lazyload">國際知名船務公司選用資通電腦 IT 外包優化系統效能</a>
          </li>
          <li class="col-12 col-md-3 mt-3">
            <a href="https://www.ares.com.tw/events/osc-user-story-construction"><img data-src="/img/events.jpg" alt="*" class="img-fluid lazyload">資通電腦委外團隊助工程集團打造智慧物聯網</a>
          </li>
          <li class="col-12 col-md-3 mt-3">
            <a href="https://www.ares.com.tw/events/osc-user-story-high-tech-industry"><img data-src="/img/events.jpg" alt="*" class="img-fluid lazyload">資通電腦人力委外協助眾多科技大廠強化 IT 戰力</a>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

