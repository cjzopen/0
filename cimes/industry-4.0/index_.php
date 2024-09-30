<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/industry4.css','/lib/fancybox3/jquery.fancybox.min.css','/public/css/newsletter-list.css');

$page['title'] = '邁向智慧工廠，先了解智慧製造是什麼';
$page['description'] = '智慧製造是將自動化設備與物聯網、雲端運算、大數據與AI應用緊密結合，建構出智慧工廠的製造過程。而要規劃智慧工廠，需要哪些觀念及實施評估指標？帶你一次看懂。';
$canonical='https://cimes.ares.com.tw/industry-4.0/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="industry4">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/industry4/banner.jpg', //圖片
  '智慧製造', //圖片上的字
  'fff-color' //字的 class
);
?>
  <main itemscope itemtype="https://schema.org/FAQPage">
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">智慧製造</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <nav class="supmenu">
      <ul class="container text-center mb-0">
        <li><a href="#wut">什麼是智慧製造</a></li>
        <li><a href="#concept">三大觀念</a></li>
        <li><a href="#how">四大評估指標</a></li>
        <li><a href="#key">關鍵點</a></li>
        <li><a href="#case">成功經驗</a></li>
        <li><a href="#txt">相關文章</a></li>
      </ul>
    </nav>
    <section id="wut" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <div class="container">
        <h1 class="text-center mb-0" itemprop="name">智慧製造是什麼？</h1>
        <hr>
        <div class="row justify-content-center" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="col-12 col-sm-10 col-lg-8" itemprop="text">
            <p>智慧製造是工廠透過既有的資訊自感知、自決策、自執行等功能的先進製造過程與模式，將「智慧機械」生產過程各環節與物聯網、雲端運算、大數據及 AI 人工智慧應用緊密結合，並透過網路整合端到端的數據流讓機器與機器、機器與人之間能相互溝通，以即時、量化的透明化管理取代傳統工廠製造作業管理模式，協助製造業數位轉型，迎戰日益嚴峻的產業競爭！</p>
          </div>
        </div>
        <!-- <div class="text-center pt-4">
          <a class="btn btn-cimes m-size mb-3" href="/products/#benefit">智慧製造能為工廠帶來什麼效益？</a>
        </div> -->
      </div>
    </section>
    <section id="concept">
      <h2 class="text-center mb-0">智慧製造成功的三大觀念</h2><hr>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">工廠自動化不等於變智慧</h3>
            <p>製造業工廠自動化風潮日漸盛行，許多製造業者期望透過智慧機械取代人力減少成本，並增加產品良率。但自動化若未能與供應鏈、生產線進行資訊上的串接，所耗費成本與支出往往不符合經濟效益。</p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">團隊是關鍵</h3>
            <p>建構智慧工廠需有高階主管的支持，使用者的配合、關鍵用戶的投入，以及 IT 維運單位的後援，撇除舊思維團隊是最重要的關鍵，再加上經驗豐富的 MES 顧問團隊才能成功導入智慧製造。</p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">務必分階段發展</h3>
            <p>打造智慧工廠需建立執行計畫與時程，包括每階段的目標以及績效檢核。譬如：先構建精實管理數位化平台，再實施數位轉型智能化，明確規範各階段目標與效益。建議以三年到五年分階段實施，並設定明確的財務績效指標。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="how" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <div class="container">
        <h2 class="text-center mb-0" itemprop="name">建構智慧工廠四大評估指標是什麼？</h2>
        <hr>
        <div class="row justify-content-center" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="col-12 col-sm-10 col-lg-8 pb-3 mb-4">
            <div itemprop="text">
              <p class="pb-3 d-inline">虛實化整合、物聯網、智能設備與機器人的應用，會因應製造管理需求與現場狀況而有所不同；想當然在建構智慧工廠上也不盡相同。而企業轉型智慧製造都是為了改善工廠端的生產管理問題與瓶頸，除了考量到系統資料收集與實際作業上的適用性、便利性外，建議台灣製造業打造智慧工廠邁向智慧製造時，可透過整體投資效益分析決定應先實施的面向：</p>
              <ul class="disc">
                <li>智慧生產</li>
                <li>智慧設備</li>
                <li>綠色生產</li>
                <li>智慧行銷</li>
              </ul>
              <p>利用此四大評估指標，讓企業盡速達成期望的智慧製造目標。</p>
            </div>
            <div class="text-right"><img src="https://marketing.ares.com.tw/img/authors/曾文光.png" width="80" height="80" loading="lazy" alt="曾文光"> ciMes 產品總監 <span>曾文光</span></div>
          </div>
        </div>
        <div class="text-center pt-4">
          <a class="btn btn-cimes m-size mb-3" href="https://marketing.ares.com.tw/dm/newsletter-2017-08-ciMes/product">深入了解建構智慧工廠四大評估指標</a>
        </div>
      </div>
    </section>
    <section id="key">
      <div class="container">
        <h2 class="text-center mb-0">打造智慧工廠的關鍵</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>智慧工廠是自動化生產的躍升，除了善用機器設備提升製程效率與產品良率，降低人力成本與錯誤率外，MES 系統可以說是智慧工廠的核心關鍵。善用 MES 的工廠建模（Modeling）工具，可將生產過程中的工單／製令、生產設備、產品、物料、生產區域等實體生產要件，轉化成可控制的數據與製程。將這些資訊透過雲端管理和監控，再搭配感測元件與廠內行動管理及智能設備，即可不受地域與時間的限制，隨時掌握生產相關資訊，達到智慧產品、智慧流程、智慧生產的智慧工廠目標。</p>
          </div>
          <div class="col-12 col-sm-12 col-lg-11">
            <ul class="row justify-content-center">
              <li class="col-4 col-lg-2 d-flex justify-content-center align-items-center">
                <p class="d-flex rounded-circle flex-constant fff-bg justify-content-center align-items-center main-color"><span>虛擬平台</span></p>
              </li>
              <li class="col-4 col-lg-2 d-flex justify-content-center align-items-center">
                <p class="d-flex rounded-circle flex-constant fff-bg justify-content-center align-items-center main-color"><span>感測元件</span></p>
              </li>
              <li class="col-4 col-lg-2 d-flex justify-content-center align-items-center">
                <p class="d-flex rounded-circle flex-constant fff-bg justify-content-center align-items-center main-color"><span>行動化管理</span></p>
              </li>
              <li class="col-4 col-lg-2 d-flex justify-content-center align-items-center">
                <p class="d-flex rounded-circle flex-constant fff-bg justify-content-center align-items-center main-color"><span>大數據管理</span></p>
              </li>
              <li class="col-4 col-lg-2 d-flex justify-content-center align-items-center">
                <p class="d-flex rounded-circle flex-constant fff-bg justify-content-center align-items-center main-color"><span>智能管理</span></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="hold">
      <div class="container">
        <h2 class="text-center mb-0">實踐智慧工廠自動化生產</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>工廠自動化是指運用自動裝置系統，控制生產流程與設備，整合電腦技術、自動化技術、感測激光技術、機械設備等條件，使產品能自動製造，或部分加工自動完成的技術。透過工廠自動化系統，將各種自動化設備、生產線整合起來，搭配電腦程式設計與 MES，由中央電腦統一管理，工作流程能夠更加順暢、安全、便利。</p>
            <p>近年隨著工業 4.0 蓬勃發展，智慧工廠、智慧農業、智慧醫療等工廠自動化的運用已成為趨勢。根據資策會統計，目前全球智慧工廠的規模超過每年 2 千億美元，預估 3 年後將達 3 千億美元。而台灣企業該如何建構智慧工廠平台與應用呢？事前要如何妥善規劃評估，才能找到適應企業的 MES 製造執行系統解決方案呢？要怎麼透過虛實化整合、物聯網、智能設備與機器人應用構建適用性高的智慧工廠？MES 將會是智慧工廠建置與邁向工業 4.0 的決勝關鍵與主軸。</p>
          </div>
        </div>
        <div class="text-center pt-4">
          <a class="btn btn-cimes m-size mb-3" href="https://marketing.ares.com.tw/newsletter/2020-07-cimes/virtual-factory-modeling-mes">可視化管理建構虛擬工廠</a>
        </div>
      </div>
    </section>
    <section id="case">
      <div class="container">
        <h2 class="text-center mb-0 h2">智慧製造案例分享</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-5">
            <ul class="disc">
              <li class="mb-3">
                <span class="h4">自動化：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-hosong">和頌</a>／<a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-gbco">新高生科</a>
              </li>
              <li class="mb-3">
                <span class="h4">智慧生產：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/industry4-Everest-ciMes">宏遠</a>
              </li>
              <li class="mb-3">
                <span class="h4">製程可視化：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/sanan-led-mes">三安光電</a>
              </li>
              <li class="mb-3">
                <span class="h4">智慧供應鏈：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/chimei-kunshan-adopt-ciMes">奇美</a>／<a class="main-color" href="https://www.ares.com.tw/events/cimes-userstory-kinsus">景碩</a>
              </li>
              <li class="mb-3">
                <span class="h4">智慧場域：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/cimes-itri-smart-manufacturing">工研院</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-5">
            <div class="text-center py-4">
              <a href="https://www.youtube.com/watch?v=Sfz1TyMnmIk" id="youtube" data-fancybox title="影片"><img class="img-fluid lazyload rounded" data-src="/public/img/best-practices/video-3.jpg" alt="影片：運用MES智慧示範場域體驗智慧工廠建構"></a>
            </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "運用MES智慧示範場域體驗智慧工廠建構",
  "description": "如何透過智慧場域建構 4.0 自動化無人工廠？而智慧場域有哪些是可以實際應用在各企業當中？又該如何應用呢？ciMes 提供建構智慧工廠更深入的剖析。",
  "thumbnailUrl": [
    "https://cimes.ares.com.tw/public/img/best-practices/video-3.jpg"
   ],
  "uploadDate": "2020-02-27",
  "duration": "PT1M21S",
  "contentUrl": "https://www.youtube.com/watch?v=Sfz1TyMnmIk",
  "embedUrl": "https://cimes.ares.com.tw/industry-4.0/"
}
</script>
          </div>
        </div>
      </div>
    </section>
    <section id="txt">
      <div class="container">
        <h2 class="text-center mb-0">相關文章</h2>
        <hr>
<?php
// try {
//   $db = new PDO('sqlite:/sites/global/epaper-article.db');
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }
$rs = $epaper_db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' AND title LIKE '%智慧製造%' OR title LIKE '%智慧工廠%' ORDER BY `date` DESC")->fetchAll();
$_html ='';
foreach ($rs as $row) {
  if(substr($row['link'], 0,4) !== 'http'){
    $row['link'] = 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  }
  $_html=$_html.'<li><a href="'.$row['link'].'" rel="noopener noreferrer" target="_blank">'.strip_tags($row['title']).'</a></li>';
}

//create 文章 html
// require($_SERVER['DOCUMENT_ROOT'].'/src/articleHandle.php');
$rs=null;
$db=null;
echo '<ul class="justify-content-around newsletter-list disc">'.$_html.'</ul>';
?>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<!-- <script src="/public/js/supmenu.js" defer></script> -->
<!-- <script src="/lib/rwdtable/rwd-table.min.js" defer></script> -->
<!-- <script src="/public/js/industry4.js" defer></script> -->
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>