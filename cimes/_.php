<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['title']='MES製造執行系統-智慧製造解決方案';
$page['description']='資通MES製造執行系統連獲Gartner建議台灣唯一廠商與台灣精品獎，並與工研院打造「智慧製造試營運場域」，實踐工業4.0邁向智慧製造的MES系統首選。在金屬加工、機械、組裝、紡織…等產業有完善經驗';
$page['keywords']='MES,ciMes,製造執行系統,智慧工廠,工廠製造資訊,WIP';
$page['css']=array('/lib/swiper3.4.1/swiper.min.css','/lib/fancybox3/jquery.fancybox.min.css','/public/css/home.css');
$another = '<link rel="preload" as="image" href="/public/img/events.jpg"/><link rel="preload" as="image" href="/public/img/knowledge.jpg"/><link rel="preload" as="image" href="/public/img/best-practices.jpg"/><link rel="preload" as="image" href="/public/img/inquiry.jpg"/>';
$hreflang = 'https://cimes.ares.com.tw/en/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
// 最新消息
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
$news = $rs->fetch(PDO::FETCH_ASSOC);
if(!empty($news['content']) && !empty($news['news_name'])){
  $news['href'] = 'https://www.ares.com.tw/events/'.$news['news_name'];
}elseif(!empty($news['redirect'])){
  $news['href'] = $news['redirect'];
}
if (!empty($news['content'])) {
  $lead = mb_substr($news['content'], mb_strpos($news['content'], '<p>')+3);
  if (mb_substr($lead, 0, 8) === '<strong>') {
    $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
  }
  $news['lead'] = strip_tags(trim(mb_strstr($lead, '</p>', true)));
}else{
  $news['lead'] = $news['title'];
}
if (!empty($news['redirect'])){
  if(strpos($news['href'], 'ares.com.tw')){
    $meta_content = @get_meta_tags($news['href']);
    if(!empty($meta_content['description'])){
      $news['lead'] = trim($meta_content['description']);
    }
  }
}

// 成功案例
$rs = $db->query("SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name
        FROM news, best_practice WHERE best_practice.product LIKE '%{$product}%' AND news.id = best_practice.news_id ORDER BY news.date DESC");

$best_practice = $rs->fetch(PDO::FETCH_ASSOC);
if($best_practice['title'] == $news['title']){
  $best_practice = $rs->fetch(PDO::FETCH_ASSOC);
}

if (!empty($best_practice['redirect'])) {
  $best_practice['href'] = $best_practice['redirect'];
} elseif (!empty($best_practice['news_name'])) {
  $best_practice['href'] = 'http://www.ares.com.tw/events/'.$best_practice['news_name'];
} else {
  $best_practice['href'] = 'http://www.ares.com.tw/events/'.$best_practice['id'];
}
if (!empty($best_practice['content'])) {
  if(preg_match('/<ul class=\"[\w\s\-]*summary-effect\">[\s]*(.*?)<\/ul>/s',$best_practice['content'],$matches)){
    $best_practice['lead'] = '<ul class="card-text check mb-0">'.$matches[1].'</ul>';
  }else{
    $lead = mb_substr($best_practice['content'], mb_strpos($best_practice['content'], '<p>')+3);
    if (mb_substr($lead, 0, 8) === '<strong>') {
      $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
    }
    $best_practice['lead'] = '<p class="card-text mb-0">'.strip_tags(trim(mb_strstr($lead, '</p>', true))).'</p>';
  }
}

// 知識分享
$rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' ORDER BY date DESC");
$knowledge = $rs->fetch(PDO::FETCH_ASSOC);
if($knowledge['title'] == $news['title']){
  $knowledge = $rs->fetch(PDO::FETCH_ASSOC);
}

if (!empty($knowledge['href'])) {
  $knowledge['href'] = $knowledge['href'];
} elseif (!empty($knowledge['news_name'])) {
  $knowledge['href'] ='https://www.ares.com.tw/events/'.$knowledge['news_name'];
}
if (!empty($knowledge['content'])) {
  $lead = mb_substr($knowledge['content'], mb_strpos($knowledge['content'], '<p>')+3);
  if (mb_substr($lead, 0, 8) === '<strong>') {
    $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
  }
  $knowledge['lead'] = trim(mb_strstr($lead, '</p>', true));
}else{
  if(!empty($knowledge['summary'])){
    $knowledge['lead'] = $knowledge['summary'];
  }else{
    $knowledge['lead'] = $knowledge['title'];
  }
}
if(strpos($knowledge['href'], 'ares.com.tw')){
  if(empty($knowledge['summary'])){
    $meta_content = @get_meta_tags($knowledge['href']);
    if(!empty($meta_content['description'])){
      $knowledge['lead'] = $meta_content['description'];
    }
  }
}
$rs=null;
$db=null;
?>
<script type="application/ld+json">
{
  "@context" : "https://schema.org",
  "@type" : "WebPage",
  "name" : "資通電腦 ciMes - MES 工廠製造執行系統",
  "image": "https://cimes.ares.com.tw/public/img/cimes-logo.svg",
  "url" : "https://cimes.ares.com.tw/",
  "sameAs" : [
    "https://www.facebook.com/AresInternational"
  ],
  "relatedLink" : "https://www.ares.com.tw/",
  "mainEntity":[{
    "@type" : "Product",
    "name" : "ciMes",
    "logo": "https://cimes.ares.com.tw/public/img/cimes-logo.svg",
    "image" : "https://cimes.ares.com.tw/public/img/products/module/module.png",
    "url" : "https://cimes.ares.com.tw/",
    "award" : "台灣精品獎"
  }]
}
</script>
<div class="all" id="home">
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php'); ?>
<!-- slider =============================================================================== -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <!-- <div class="swiper-slide">
        <a href="https://www.ares.com.tw/events/cimes-contract-gogoro" rel="external">
          <img class="img-fluid lazy" data-original="/public/img/slider/mes-gogoro-1440.png" alt="智慧交通領導品牌 Gogoro 選用資通 MES 提升生產智造力">
        </a>
      </div> -->
      <div class="swiper-slide">
        <a href="https://edm.ares.com.tw/dm/201811-cimes-metal-hand-tools/" rel="external">
          <img class="img-fluid lazy" data-original="/public/img/slider/201811-mes-banner-1440.png" alt="*">
          <div class="swipter-article-wrap d-flex align-items-center justify-content-start">
            <div class="fff-color container">
              <h2 class="swipter-article-title fff-color">解決金屬加工製造現場瓶頸</h2>
              <p class="swipter-article-content">您需要一套智慧化的製造執行系統</p>
            </div>
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="https://marketing.ares.com.tw/dm/newsletter-2018-05-cimes/" rel="external">
          <img class="img-fluid lazy" data-original="/public/img/slider/201805-mes-banner.png" alt="資通 mes 電子報">
          <div class="swipter-article-wrap d-flex align-items-center justify-content-start">
            <h2 class="swipter-article-title fff-color container mx-auto">智慧機械 3.0 機聯網<br>如何邁向 M2M 智能化應用</h2>
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="https://www.ares.com.tw/events/ciMes-award" rel="external">
          <img class="img-fluid lazy" data-original="/public/img/slider/cimes2017-1440.png" alt="資通 cimes 榮獲 2018 台灣精品獎">
          <div class="swipter-article-wrap d-flex align-items-center justify-content-start">
            <h2 class="swipter-article-title fff-color container mx-auto">資通電腦 ciMes <br>榮獲 2018 台灣精品獎</h2>
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="https://www.ares.com.tw/events/cimes-gartner-2017" rel="external">
          <img class="img-fluid lazy" data-original="/public/img/slider/mes-gartner-2018.png" alt="Gartner 台灣唯一建議 MES 製造執行系統">
          <div class="swipter-article-wrap d-flex align-items-center justify-content-center flex-wrap">
            <!-- <div class="text-center fff-color"> -->
            <h2 class="swipter-article-title fff-color container mx-auto">ciMes 連續三年 <br>獲 Gartner 台灣唯一建議 MES 製造執行系統</h2>
              <!-- <p class="swipter-article-content">搶攻智慧工廠 3 千億美元商機<br>工業 4.0 是關鍵</p> -->
            <!-- </div> -->
          </div>
        </a>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <main>
    <!-- 四格 ============================================================================== -->
    <section class="pt-2 mt-1">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <a href="<?= $news['href']; ?>">
                <figure class="card-img-top ratio-box">
                  <img class="mx-auto lazy" data-original="/public/img/events.jpg" alt="<?= strip_tags($news['title']); ?>">
                  <noscript><img class="mx-auto" src="/public/img/events.jpg" alt="<?= strip_tags($news['title']); ?>"></noscript>
                </figure>
              </a>
              <h3>最新消息</h3>
              <div class="card-body">
                  <!-- <time datetime=""></time> -->
                <h4 class="card-title sub-color"><a href="<?= $news['href']; ?>"><?= strip_tags($news['title']); ?></a></h4>
                <p class="card-text mb-0"><a href="<?= $news['href']; ?>"><?= strip_tags($news['lead']); ?></a></p>
                <span class="grad"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <a href="<?= $knowledge['href']; ?>">
                <figure class="card-img-top ratio-box">
                  <img class="mx-auto lazy" data-original="/public/img/knowledge.jpg" alt="<?= strip_tags($knowledge['title']); ?>">
                  <noscript><img class="mx-auto" src="/public/img/knowledge.jpg" alt="<?= strip_tags($knowledge['title']); ?>"></noscript>
                </figure>
              </a>
              <h3>知識分享</h3>
              <div class="card-body">
                <h4 class="card-title sub-color"><a href="<?= $knowledge['href']; ?>"><?= strip_tags($knowledge['title']); ?></a></h4>
                <p class="card-text mb-0"><a href="<?= $knowledge['href']; ?>"><?= strip_tags($knowledge['lead']); ?></a></p>
                <span class="grad"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <a href="<?= $best_practice['href']; ?>">
                <figure class="card-img-top ratio-box">
                  <img class="mx-auto lazy" data-original="/public/img/best-practices.jpg" alt="<?= strip_tags($best_practice['title']); ?>">
                  <noscript><img class="mx-auto" src="/public/img/best-practices.jpg" alt="<?= strip_tags($best_practice['title']); ?>"></noscript>
                </figure>
              </a>
              <h3>成功案例</h3>
              <div class="card-body">
                <h4 class="card-title sub-color"><a href="<?= $best_practice['href']; ?>"><?= strip_tags($best_practice['title']); ?></a></h4>
                <a href="<?= $best_practice['href']; ?>"><?= $best_practice['lead']; ?></a>
                <span class="grad"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card">
              <a href="/contactus/" rel="nofollow">
                <figure class="card-img-top ratio-box">
                  <img class="mx-auto lazy" data-original="/public/img/inquiry.jpg" alt="線上及電話諮詢">
                  <noscript><img class="mx-auto" src="/public/img/inquiry.jpg" alt="線上及電話諮詢"></noscript>
                </figure>
              </a>
              <h3>免費諮詢</h3>
              <div class="card-body">
                <h4 class="card-title sub-color"><a href="/contactus/" rel="nofollow">您是否想要進一步評估呢？</a></h4>
                <p class="card-text mb-0"><a href="/contactus/" rel="nofollow">請立即在線上留下您的資料<br>或來電：03-571-6622 ext. 714。<br>我們將盡快與您連絡，並安排專業顧問到貴公司提供免費的現場諮詢！</a></p>
                <span class="grad"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <article class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h1 class="mt-0 text-center">世界級精密零件機械商 - <a class="main-color" href="https://www.ares.com.tw/events/cimes-userstory-hosong">和頌企業</a></h1>
          </div>
          <div class="col-12 col-md-8 text-center">
             <p>和頌在面對日益增長的營運規模、客製化少量多樣的生產模式下，積極採用智慧製造管理，達到工廠智慧化與自動化作業，以提升品質，降低成本與人為疏失，協助管理者即時做出關鍵決策。</p>
          </div>
          <div class="col-12 col-sm-9 col-lg-6">
            <img class="img-fluid lazy mt-3" data-original="/public/img/hosong.jpg" alt="精密零件機械商-和頌企業">
          </div>
          <div class="col-12 col-sm-10 col-lg-6">
            <ul class="check">
              <li>
                <div class="pl-1">
                  <h3 class="h4 my-0">提升達交準確率</h3>
                  <p class="opacity-7 mb-0">工單交期更精準，降低客訴提升服務品質</p>
                  <a class="btn btn-cimes mb-3" href="/products/module/wip.php">生產履歷追溯</a>
                </div>
              </li>
              <li>
                <div class="pl-1">
                  <h3 class="h4 my-0">提升生產作業效率</h3>
                  <p class="opacity-7 mb-0">工時計算更精準，提升人員作業效率、降低成本</p>
                  <a class="btn btn-cimes mb-3" href="/products/module/wrp.php">報表自動產出</a>
                </div>
              </li>
              <li>
                <div class="pl-1">
                  <h3 class="h4 my-0">精準生產排程管理</h3>
                  <p class="opacity-7 mb-0">整合 APS 排程管理，大幅降低上億庫存量</p>
                  <a class="btn btn-cimes mb-3" href="/industry-4.0/#how">彈性排程規劃</a>
                </div>
              </li>
              <li>
                <div class="pl-1">
                  <h3 class="h4 my-0">具體實現智慧自動化工廠</h3>
                  <p class="opacity-7 mb-0">MES 製造執行系統，讓製造現場透明化、即時化</p>
                  <a class="btn btn-cimes mb-3" href="/industry-4.0/#example">工業 4.0 具體實踐</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </article>
    </section>
    <section>
      <article class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mt-0">MES 製造執行系統 台灣首選資通電腦 ciMes</h2>
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <p>資通電腦 ciMes（Computer Integrated Manufacturing Execution System；製造執行系統，為資通電腦所研發之 MES 軟體）榮獲 2018 台灣精品獎肯定。歷經評審嚴謹評選，從 578 家廠商、1,209 件報名產品中脫穎而出，實至名歸！</p>
            <ul class="d-flex flex-wrap check no-gutters">
              <li class="col-12 col-sm-6 col-lg-6">
                2018 榮獲台灣精品獎
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                Gartner 建議台灣唯一參考的 MES 廠商
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                超過數百家客戶成功案例
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                兩岸 LED 產業市佔第一
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                微軟 ISV 獨立軟體開發商認證
              </li>
              <li class="col-12 col-sm-6 col-lg-6">
                打造全台首處智慧製造試營運場
              </li>
            </ul>
            <a class="btn btn-cimes my-2 w-100 py-3" href="https://www.ares.com.tw/events/ciMes-award" rel="external">榮獲台灣精品獎肯定</a>
            <a class="btn btn-cimes my-2 w-100 py-3" href="/products/">產品核心模組介紹</a>
            <!-- <a class="btn btn-cimes my-3" href="https://temp.ares.com.tw/products/" role="button">產 品 介 紹</a> -->
          </div>
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- <div class="ratio-box">
              <iframe id="youtube" src="https://www.youtube.com/embed/wdp3bc50tM4?rel=0" frameborder="0" allowfullscreen></iframe>
            </div> -->
            <a href="https://www.youtube.com/watch?v=wdp3bc50tM4" id="youtube" data-fancybox><img class="img-fluid lazy" data-original="/public/img/video.jpg" alt="影片：資通MES系統 榮獲2018精品獎"></a>
          </div>
        </div>
      </article>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/main.js" async></script>
<script src="/lib/swiper3.4.1/swiper.min.js" id="swiper-js" async></script>
<script src="/lib/fancybox3/jquery.fancybox.min.js" async></script>
<script>
$(function(){
  //let ie support picture element
  // if(!window.HTMLPictureElement){
    // $.getScript("/lib/picturefill.min.js");
  // }
  document.getElementById('swiper-js').addEventListener('load', function(){
    var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      autoplay: 8000,
      autoplayDisableOnInteraction: false,
      paginationClickable: true
      // loop: true
    });
  })
});
// window.addEventListener('load', function(){
//   $('#youtube').attr('src','https://www.youtube.com/embed/wdp3bc50tM4?rel=0');
// })
</script>
<!-- <script type="application/ld+json">
{
  "@context" : "https://schema.org",
  "@type" : "Organization",
  "address" : "台北市中山區中山北路二段111號3樓",
  "email" : "jenny@ares.com.tw",
  "founder" : "余宏揚",
  "foundingDate" : "1980-12-03",
  "telephone" : "+886-2-25221351",
  "faxNumber" : "+886-2-25601735",
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "+886-3-571-6622 ext.714",
    "faxNumber" : "+886-3-571-7889",
    "email" : "daphnelu@ares.com.tw",
    "url" : "https://cimes.ares.com.tw/contactus/",
    "contactType" : "customer service"
  }]
}
</script> -->
</body>
</html>