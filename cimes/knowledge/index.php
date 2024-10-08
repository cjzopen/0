<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='MES如何提升生產效率、改善品質控制、優化庫存管理';
$page['description']='彙整 MES 系統、智慧工廠、智慧製造、與自動化工廠等各產業相關技術、工廠管理知識、新聞一起與您分享。';
$canonical='https://cimes.ares.com.tw/knowledge/';
$page['css']=array('/public/css/knowledge.css');

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="news">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  '<h1>MES 知識分享</h1>', //圖片上的字
  null //字的 class
);
?>
  <div class="breadcrumb" aria-label="breadcrumb">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">知識分享</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>
  </div>
  <nav class="supmenu position-static">
    <div class="container">
      <ul class="text-center mb-0">
        <li><a href="/news/">最新消息</a></li>
        <li><a class="main-color" href="/knowledge/">知識分享</a></li>
      </ul>
    </div>
  </nav>
  <main>
    <section class="">
      <div class="container">
        <div data-nosnippet>
          <div class="keyword-list mb-5">
            <div class="keyword-toggle" role="button"></div>
            <span class="keyword rounded-pill act" role="button">全部</span>
<?php
try {
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
// $product=
$rs = $db->query("SELECT keyword FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
$keyword_array=array();
$keywords='';
$temp_number=0;
foreach ($rs as $row) {
  if($temp_number==0){
    $keywords=$row['keyword'];
  }else if(!$row['keyword']){
    
  }else{
    $keywords=$keywords.'、'.$row['keyword'];
  }
  $temp_number++;
}
$keyword_array=array_unique(explode('、',$keywords));
foreach($keyword_array as $keyword){
  if($keyword==''){

  }else{
    echo '<span class="keyword rounded-pill" role="button">'.$keyword.'</span> ';
  }
}
?>
        </div>
      </div>
      <div class="row">
<?php
$i = 0;
$lists = array();
function array_sort($array, $on, $order=SORT_ASC) {
  $new_array = array();
  $sortable_array = array();
  if (count($array) > 0) {
    foreach ($array as $k => $v) {
      if (is_array($v)) {
        foreach ($v as $k2 => $v2) {
          if ($k2 == $on) {
            $sortable_array[$k] = $v2;
          }
        }
      } else {
        $sortable_array[$k] = $v;
      }
    }
    switch ($order) {
      case SORT_ASC:
        asort($sortable_array);
      break;
      case SORT_DESC:
        arsort($sortable_array);
      break;
    }

    foreach ($sortable_array as $k => $v) {
      $new_array[$k] = $array[$k];
    }
  }
  return $new_array;
}

$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['keyword'] = isset($row['keyword']) ? $row['keyword'] : '';
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  // $lists[$i]['type'] = $row['type'];
  // $lists[$i]['author'] = isset($row['author']) ? $row['author'] : '';
  // $lists[$i]['author_img'] = isset($row['author_img']) ? 'https://marketing.ares.com.tw'.$row['author_img'] : '/img/news/oracle.png';
  $i++;
}
// $rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND LOWER(product) IN('oracle','plm') ")->fetchAll();
// foreach ($rs as $row) {
//   $lists[$i]['date']  = $row['date'];
//   $lists[$i]['title'] = strip_tags($row['title']);
//   $lists[$i]['href'] = $row['link'];
//   $lists[$i]['img'] = '';
//   $lists[$i]['description'] = strip_tags($row['title']);
//   $lists[$i]['type'] = '資訊補給站';
//   $lists[$i]['author'] = isset($row['author']) ? $row['author'] : $row['alt'];
//   $lists[$i]['author_img'] = '/img/news/other.png';
//   $i++;
// }
// $rs = array_sort($lists, 'date', SORT_DESC);
$_position=1;
foreach ($lists as $row) {
  if(!empty($row['img'])&&$row['img']!=='https://marketing.ares.com.tw/img/logos/ares.png'){
    $row['photo'] = $row['img'];
  }else{
    $row['photo'] = '/public/img/events.jpg';
  }
  echo '<div class="article col-12 col-md-4 mb-4" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" data-keyword="'.$row['keyword'].'">
  <meta itemprop="position" content="'.$_position.'">
  <div class="article-box position-relative h-100 mx-auto">
    <div class="img-box">
      <img loading="lazy" class="img-fluid" src="'.$row['photo'].'" alt="'.strip_tags($row['title']).'">
    </div>
    <div class="p-2">
      <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
      <h2 class="main-color article-title h3 m-0"><a itemprop="url" class="stretched-link" href="'.$row['href'].'"><span itemprop="name">'.strip_tags($row['title']).'</span></a></h2>
      <p class="article-description m-0" itemprop="description">'.strip_tags($row['description']).'</p>
    </div>
  </div>
</div>';
  $_position++;
}

?>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/article-tag.js" defer></script>
</body>
</html>