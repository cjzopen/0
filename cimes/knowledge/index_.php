<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='MES如何提升生產效率、改善品質控制、優化庫存管理';
$page['description']='彙整 MES 系統、智慧工廠、智慧製造、與自動化工廠等各產業相關技術、工廠管理知識、新聞一起與您分享。';
$canonical='https://cimes.ares.com.tw/knowledge/';

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
<?php
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
$i=0;
if(!isset($_GET['y'])){
  $year = '';
  $rs = $epaper_db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%'")->fetchAll();
}else{
  $year = (int)$_GET['y'];
  $rs = $epaper_db->query("SELECT * FROM article WHERE `date` LIKE '%{$year}%' AND product LIKE '%{$product}%'")->fetchAll();
}
//選取 某年份的文章
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['url'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
if(!isset($_GET['y'])){
  $rs = $epaper_db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%'")->fetchAll();
}else{
  $rs = $epaper_db->query("SELECT * FROM info WHERE `date` LIKE '%{$year}%' AND product LIKE '%{$product}%'")->fetchAll();
}
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['url'] = $row['link'];
  $lists[$i]['img'] = '';
  $lists[$i]['description'] = '文章出自 '.$row['alt'];
  $i++;
}
$rs = null;
$db = null;
if($i>1){
  $lists = array_sort($lists, 'date', SORT_DESC);
}
if(isset($lists)){
  $_position=1;
  $i = 0;
  $_html ='';
  foreach ($lists as $row) {
    $row['photo'] = '/public/img/events.jpg';
    if(!empty($row['img'])&&$row['img']!=='https://marketing.ares.com.tw/img/logos/ares.png'&&$row['img']!=='https://marketing.ares.com.tw/img/default/img_index_industry4.0.jpg'){
      $row['photo'] = $row['img'];
    }
    $row['lead'] = $row['description'];
    $_html = $_html.'<article itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <meta itemprop="position" content="'.$_position.'">
      <a class="row" href="'.$row['url'].'" itemprop="url">
        <div class="col-12 col-sm-3 col-lg-3">
          <figure class="ratio-box"><img class="lazyload" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
        </div>
        <div class="col-12 col-sm-8 col-lg-8">
          <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
          <h3 class="main-color mt-0 mb-3" itemprop="name">'.$row['title'].'</h3>
          <p itemprop="description">'.strip_tags($row['lead']).'</p>
        </div>
      </a>
    </article>';
    $_position++;
  }
}



//create 年份 select html
$option='';
for ($y= $knowledge_last_year; $y > 2006 ; $y--){
  if ($y == $year){
    $option = $option."<option value=\"" . $y . "\" selected=\"selected\"> " . $y . " </option>";
  }else{
    $option = $option."<option value=\"" . $y . "\"> " . $y . " </option>";
  }
}
?>
  <main>
    <section class="article-list">
      <div class="container">
        <div class="text-right">
          <noscript>select 壞掉請按：<a class="main-color" href="./">全部文章</a> 觀看</noscript>
          <select name="pages" id="pages">
            <option value="all">請選擇年份</option>
            <?= $option; ?>
          </select>
        </div>
<?= !empty($_html) ? $_html: '<li><p>本年度沒有文章</p></li>'; ?>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>