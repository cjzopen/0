<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "newsletter";
$str = null;
try {
  $db = new PDO('sqlite:/example/global/epaper-article.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'epaper connection failed: ' . $e->getMessage();
  exit;
}

$rs = $db->query("SELECT `date` FROM ind WHERE `date` <= date('now','-0 day') ORDER BY `date` DESC")->fetchAll();

foreach ($rs as $row) {
  $years[] = substr($row['date'], 0, 4);
}
$last = max($years);

//網址後面的 get data
$str = $_SERVER["QUERY_STRING"];
if (stripos($str, "&") === false){
  $str = $_SERVER["QUERY_STRING"];
}else{
  $str = substr($str, 0, stripos($str, "&"));
}

if (empty($str)) {
  //今年文章列表
  $year = $last;
}elseif (strtolower($str[0]) == 'y' && in_array(substr($str, 1), $years)) {
  //當年份文章列表
  $year = substr($str, 1);
// }elseif(substr(strtolower($str),0,5)=='gclid' || substr(strtolower($str),0,3)=='_ga' || substr(strtolower($str),0,4)=='utm_'){
}elseif(preg_match('/(gclid|_ga|utm_|fbclid)/i', strtolower($str))){
  $year = $last;
}else {
  include($_SERVER['DOCUMENT_ROOT'].'/404.php');
  exit;
}



$page['title']='資通電腦電子報 - 資訊產業管理趨勢與 IT 技術交流';
$page['description']='資通電腦於每月 15 日前後更新，提供資訊產業最新重要管理趨勢、技術交流文章、熱門職缺、多樣產品介紹與活動快訊，歡迎訂閱！';
$page['canonical']='https://www.ares.com.tw/epaper/';
$amp='https://www.ares.com.tw/amp/epaper/y'.$year;
$page['css']=array('/css/epaper.min.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<figure class="slider" data-image="/img/epaper/epaper-banner-400.png">
    <figcaption>
      <h1><img src="/img/epaper/epaper-icon.svg" alt="*">電子報</h1>
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
            <a href="/epaper/" onclick="return false;" itemprop="item"><span itemprop="name">電子報 <span id="bread-year"><?= $year; ?></span></span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center">
      <i class="prev">&lt;</i>
      <ul>
<?php
for($i=$last; $i>=2007; $i-- ){
?>
        <li class="p-3"><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>" rel="<?= $year < $i ? 'prev' : 'next'?>"><?= $i; ?></a></li>
<?php
}
?>
      </ul>
      <i class="next">&gt;</i>
    </div>
  </div>
  <section>
    <div class="container">
      <h2 id="select-year" class="text-center"><?= $year ?></h2>
      <hr>
      <ul class="row text-center" id="epaper">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/epaper-list.php');
?>
      </ul>
      <div class="text-center p-5"><a href="/epaper/subscribe/" class="h4 btn btn-info px-5 py-3">立即訂閱</a></div>
    </div>
  </section>
<?php
// include($_SERVER['DOCUMENT_ROOT'].'/template/privacy.php');
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/lib/sweetalert2@8.js" defer></script> -->
<script src="/js/epaper-list.js" defer></script>
</body>
</html>

<?php
$str=null;
$rs=null;
$db=null;
?>