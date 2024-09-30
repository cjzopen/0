<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='營業秘密保護與資訊安全知識分享';
$page['description']='資訊安全是當今數位時代的重要課題，帶您深入了解關鍵的資安概念、最佳實踐和應對策略。';
$page['css']=array('/public/css/knowledge.css');
$canonical='https://ares-pp.ares.com.tw/articles/knowledge/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

?>
<div class="all" id="news">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/news/banner.webp', //圖片
  '<span class="h2">知識分享</span>', //圖片上的字
  'fff-color' //字的 class
);
?>
  <div class="breadcrumb" aria-label="breadcrumb">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="../" itemprop="item"><span itemprop="name">最新消息</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">資安知識分享</span></a>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
<?php

?>
  <main>
    <section class="">
      <h1 class="text-center">資安知識分享</h1>
      <div class="container">
        <div data-nosnippet>
          <div class="keyword-list mb-5">
            <div class="keyword-toggle" role="button"></div>
            <span class="keyword rounded-pill act" role="button">全部</span>
<?php
try {
  $db = new PDO("sqlite:/sites/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
// $product='fortify';
$rs = $db->query("SELECT keyword FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
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
// $today=date("Y-m-d");
// $rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' $sql_year AND ifnull(length(news_id), 0) = 0")->fetchAll();
$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['keyword'] = isset($row['keyword']) ? $row['keyword'] : '';
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
// $rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%'")->fetchAll();
// foreach ($rs as $row) {
//   $lists[$i]['date']  = $row['date'];
//   $lists[$i]['title'] = strip_tags($row['title']);
//   $lists[$i]['href'] = $row['link'];
//   $lists[$i]['img'] = '';
//   $lists[$i]['description'] = '文章出自 '.$row['alt'];
//   $i++;
// }
$rs = array_sort($lists, 'date', SORT_DESC);
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
      <div class="main-color article-title"><a itemprop="url" class="stretched-link" href="'.$row['href'].'"><span itemprop="name">'.strip_tags($row['title']).'</span></a></div>
      <p class="article-description" itemprop="description">'.strip_tags($row['description']).'</p>
    </div>
  </div>
</div>';
  $_position++;
}
$rs=null;
$db=null;
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