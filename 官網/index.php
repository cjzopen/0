<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');

$pageName = "home";
// $amp='https://www.ares.com.tw/amp/';
$page['description']='資通電腦提供軟體產品與專業顧問、委外服務。主要服務對象遍及金融、政府和工商企業等單位。為台灣精品獎廠商與第一家上市櫃軟體公司，在資訊、金融與系統整合領域累積 '.$age.' 年實務經驗。';
$page['canonical']='https://www.ares.com.tw/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css?5');
$page['other']=array('<link rel="dns-prefetch" href="https://marketing.ares.com.tw/">');
$page['hreflang']=array(
  array(
    'lang'=>'zh',
    'url'=>$page['canonical']
  ),
  array(
    'lang'=>'en',
    'url'=>'https://www.ares.com.tw/en/'
  )
);
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.ares.com.tw/#organization","name":"Ares 資通電腦","alternateName":"資通電腦","url":"https://www.ares.com.tw/","address":"台北市中山區中山北路二段111號3樓","email":"jenny@ares.com.tw","founder":"余宏揚","foundingDate":"1980-12-03","telephone":"+886-2-2522-1351","faxNumber":"+886-2-2560-1735","contactPoint":[{"@type":"ContactPoint","telephone":"+886-2-2522-1351","email":"jenny@ares.com.tw","url":"https://www.ares.com.tw/consult/","contactType":"customer service"}],"sameAs":["https://zh.wikipedia.org/wiki/資通電腦","https://www.facebook.com/AresInternational","https://www.youtube.com/@AresTaiwan","https://www.linkedin.com/company/ares-international-corporation"],"logo":{"@type":"ImageObject","@id":"https://www.ares.com.tw/#logo","url":"https://www.ares.com.tw/img/ares.png","caption":"資通電腦"},"image":{"@id":"https://www.ares.com.tw/#logo"}},{"@type":"WebSite","@id":"https://www.ares.com.tw/#website","url":"https://www.ares.com.tw/","name":"資通電腦","publisher":{"@id":"https://www.ares.com.tw/#organization"},"potentialAction":{"@type":"SearchAction","target":"https://www.ares.com.tw/search/?cx=014374286183653546318%3Aanrbmnt_9rc&q={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://www.ares.com.tw/#webpage","url":"https://www.ares.com.tw/","inLanguage":"zh-TW","name":"資通電腦股份有限公司","isPartOf":{"@id":"https://www.ares.com.tw/#website"},"about":{"@id":"https://www.ares.com.tw/#organization"},"description":"<?= $page['description']; ?>"}]}
</script>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/home-slider.php');
try {
  $db = new PDO('sqlite:/sites/global/events.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
$rs = $db->query("SELECT * FROM news WHERE success_case != 1 ORDER BY `date` DESC LIMIT 4")->fetchAll();
$_html1='';
$_html2='';
$_html3='';
function contentIframeSrc($content) {
  $pattern = '/<iframe[^>]*src="([^"]*)"[^>]*><\/iframe>/';
  if (preg_match($pattern, $content, $matches)) {
    return $matches[1];
  }
  return null;
}
foreach ($rs as $row) {
  if (!empty($row['redirect'])) {
    $row['href'] = $row['redirect'];
  } elseif (!empty($row['news_name'])) {
    $row['href'] = '/events/'.$row['news_name'];
  } else {
    $row['href'] = '/events/'.$row['id'];
  }
  if(!empty($row['content'])){
    if(contentIframeSrc($row['content'])){
      $row['img'] = contentIframeSrc($row['content']);
    }
  }
  $_html1=$_html1.'<li class="news-list" data-photo="'.$row['img'].'"><a class="d-flex w-100" title="'.strip_tags($row['title']).'" href="'.$row['href'].'"><time class="pr-3">'.$row['date'].'</time><div class="news-title">'.strip_tags($row['title']).'</div></a></li>';
}
$rs = $db->query("SELECT id, `date`, title, content, redirect, product, news_name, img, `description`, success_case FROM news WHERE success_case = 1 ORDER BY `date` DESC LIMIT 4")->fetchAll();
foreach ($rs as $row) {
  if (!empty($row['redirect'])) {
    $row['href'] = $row['redirect'];
  } elseif (!empty($row['news_name'])) {
    $row['href'] = '/events/'.$row['news_name'];
  } else {
    $row['href'] = '/events/'.$row['id'];
  }
  if(!empty($row['content'])){
    if(contentIframeSrc($row['content'])){
      $row['img'] = contentIframeSrc($row['content']);
    }
  }
  $_html2=$_html2.'<li class="news-list" data-photo="'.$row['img'].'"><a class="d-flex align-items-center w-100" title="'.strip_tags($row['title']).'" href="'.$row['href'].'"><time class="pr-2">'.$row['date'].'</time><small class="rounded color-white bg-black px-1 mr-2">'.$row['product'].'</small><div class="news-title">'.strip_tags($row['title']).'</div></a></li>';
}
try {
  $db = new PDO('sqlite:/sites/global/epaper-article.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}
$rs = $db->query("SELECT `date`, title, link, `type`, `description` FROM article WHERE `date` <= date('now','-0 day') ORDER BY `date` DESC LIMIT 5")->fetchAll();
$temp=0;
foreach ($rs as $row) {
  if(substr($row['link'], 0,4) == 'http'){
    $row['link'] = $row['link'];
  }else{
    $row['link'] = 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  }
  switch ($row['type']){
    case '產品特寫':
      $card_img = '/img/default/img_index_product.jpg';
      break;
    case 'ERP 達人':
      $card_img = '/img/default/img_index_doctor.jpg';
      break;
    case '資安專欄':
      $card_img = '/img/default/security.jpg';
      break;
    case '電子發票':
      $card_img = '/img/default/img_index_egui.png';
      break;
    case '菁英招募':
      $card_img = '/img/default/img_index_job.jpg';
      break;
    case 'HCP 專欄':
    case '人資專欄':
      $card_img = '/img/default/img_index_hcp.jpg';
      break;
    case '金融專欄':
      $card_img = '/img/default/bnk.jpg';
      break;
    case '工業 4.0':
    case 'MES 專欄':
      $card_img = '/img/default/img_index_industry4.0.jpg';
      break;
    case '管理專欄':
        $card_img = '/img/default/management.jpg';
      break;
    default:
      $card_img = '/img/default/img_index_it.jpg';
  }
  // if(!$temp){
  //   $_html3=$_html3.'<div class="col-12 col-sm-6 col-md-5 my-3"><div class="blog-list bg-lazyload" data-image="'.$row['img'].'"><a href="'.$row['link'].'" class="blog-list-text d-flex align-items-center"><div class="p-3"><div class="h5">'.strip_tags($row['title']).'</div>'.strip_tags($row['description']).'</div></a></div></div>';
  //   $temp=1;
  // }else{
    $_html3=$_html3.'<div class="col-12 col-sm-6 col-md-3 my-2"><div class="blog-list bg-lazyload" data-image="https://marketing.ares.com.tw'.$card_img.'"><a href="'.$row['link'].'" class="blog-list-text d-flex align-items-end"><div class="p-3">'.strip_tags($row['title']).'</div></a></div></div>';
  // }
}
$rs=null;
$db=null;
?>
  <section id="recently" class="bg-gray">
    <div class="container">
      <h1 class="text-center h2">近期動態</h1>
      <hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 d-none d-md-block text-center">
          <img class="img-fluid news-image" src="/img/events.jpg" alt="*" id="news-image">
          <iframe class="img-fluid news-image" src="" frameborder="0" id="news-iframe" style="display: none;"></iframe>
        </div>
        <div class="col-12 col-md-7">
          <div class="mb-2">
            <div class="news-switch-label active" data-list="case-list">成功案例</div>
            <div class="news-switch-label" data-list="news-list">最新消息</div>
          </div>
          <div id="case-list" class="article-list active">
            <ul><?= $_html2 ?></ul>
            <div class="text-right mt-3 color-blue">
              <a href="/best-practices/">» 更多客戶案例</a>
            </div>
          </div>
          <div id="news-list" class="article-list">
            <ul><?= $_html1 ?></ul>
            <div class="text-right mt-3 color-blue">
              <a href="/events/">» 更多消息</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="product" class="color-white bg-blue bg-fixed bg-lazyload py-5" data-image="/img/Taiper101.png" data-bgcolor="#2858aa">
    <div class="container pb-5">
      <h2 class="text-center">尋求解決方案</h2>
      <hr class="bg-white">
      <div class="row">
        <div class="col-12 col-md-6 px-md-5">
          <h3 class="border-bottom border-white pb-2 my-5">產品類別</h3>
          <div class="row text-center">
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/products/#business">
                <div class="circle-icon" aria-hidden="true">
                  <img src="/img/Business-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>商業服務</strong></div>
              </a>
            </div>
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/products/#financial">
                <div class="circle-icon" aria-hidden="true">
                  <img src="img/Banking-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>金融服務</strong></div>
              </a>
            </div>
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/products/#security">
                <div class="circle-icon" aria-hidden="true">
                  <img src="img/security-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>資訊安全</strong></div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 px-md-5">
          <h3 class="border-bottom border-white pb-2 my-5">服務與支援</h3>
          <div class="row text-center">
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/services/outsourcing/">
                <div class="circle-icon" aria-hidden="true">
                  <img src="/img/OSC-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>資訊委外服務</strong></div>
              </a>
            </div>
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/services/system-development-integration/">
                <div class="circle-icon" aria-hidden="true">
                  <img src="/img/SI-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>系統整合開發</strong></div>
              </a>
            </div>
            <div class="col-6 col-md-4 mb-4">
              <a class="color-white" href="/services/gov/">
                <div class="circle-icon" aria-hidden="true">
                  <img src="/img/GOV-icon.png" alt="*">
                </div>
                <div class="text-center"><strong>政府專案服務</strong></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">趨勢議題</h2><hr>
      <div class="row justify-content-center" id="blog">
        <div class="col-12 col-md-5 my-2">
          <div class="position-relative blog-list">
            <a class="blog-list-text d-flex align-items-center" href="https://marketing.ares.com.tw/newsletter/2023-12-knowbe4/hackers-cyberattack">
              <div class="p-3">
                <div class="title">網路釣魚怎麼防？竟然有冒充老闆信件的手法</div>
                <span>企業可以透過了解駭客如何欺騙員工，識別潛在的認知偏誤，提供真正改變行為的培訓計畫，減少資安事件發生。</span>
              </div>
            </a>
          </div>
        </div>
        <?= $_html3 ?>
        <div class="col-12 col-md-2 my-2"><div class="position-relative blog-list"><a class="blog-list-text d-flex align-items-center" href="/epaper/"><div class="p-3">» 更多電子報文章</div></a></div></div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
  <script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
  <script src="/js/home.js?1" defer></script>
</body>
</html>