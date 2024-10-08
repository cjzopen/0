<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='HR知識分享，人事相關知識報你知';
$page['description']='HR 人資系統相關知識分享，人事、薪資、差勤、保險及 HR 人員相關法規因應一次搞定。';
$canonical='https://hcp.ares.com.tw/news/knowledge/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="news">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/news/events-banner-1366.jpg', //圖片
  '/img/news/events-banner-360.jpg 360w, /img/news/events-banner-720.jpg 720w, /img/news/events-banner-1366.jpg 1366w, /img/news/events-banner-1440.jpg 1440w', //srcset
  'HR人資系統相關知識分享', //alt
  '<h1>HR 知識分享</h1>', //圖片上的字
  null //字的 class
);
?>
  <div class="breadcrumb" aria-label="breadcrumb">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="/news/" itemprop="item"><span itemprop="name">最新消息</span></a>
        <meta itemprop="position" content="2" />
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">知識分享</span></a>
        <meta itemprop="position" content="3" />
      </li>
    </ol>
  </div>
<?php
try {
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

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

// if(!isset($_GET['y'])){
$year = '';
$today=date("Y-m-d");
$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-1 day') AND product LIKE '%{$product}%' ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
$rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-1 day') AND product LIKE '%{$product}%' ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = $row['link'];
  $lists[$i]['img'] = '';
  $lists[$i]['description'] = '文章出自 '.$row['alt'];
  $i++;
}
$rs = array_sort($lists, 'date', SORT_DESC);
// }else{
  // $year = (int)$_GET['y'];
  // $rs = $db->query("SELECT * FROM articles WHERE date LIKE '%{$year}%' AND products LIKE '%{$products}%' ORDER BY date DESC")->fetchAll();
// }
//選取 某年份的文章
$_html ='';


//create 年份 select html
$option='';
// for ($y= $knowledge_last_year; $y > 2011 ; $y--){
//   if ($y == $year){
//     $option = $option."<option value=\"" . $y . "\" selected=\"selected\"> " . $y . " </option>";
//   }else{
//     $option = $option."<option value=\"" . $y . "\"> " . $y . " </option>";
//   }
// }
?>
  <main itemscope itemtype="http://schema.org/ItemPage">
  <nav class="supmenu position-static container-fluid">
    <ul class="text-center mb-0">
      <li><a href="/news/">最新消息</a></li>
      <li class="main-color"><a href="/news/knowledge/">知識分享</a></li>
    </ul>
  </nav>
    <section class="article-list">
      <div class="container" itemprop="mainEntity" itemscope itemtype="http://schema.org/ItemList">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/articleHandle.php');
$rs=null;
$db=null;
?>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>