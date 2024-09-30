<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='企業機密保密與資訊安全知識分享';
$page['description']='資訊安全是當今數位時代的重要課題，帶您深入了解關鍵的資安概念、最佳實踐和應對策略。';
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
try {
  $db = new PDO("sqlite:/sites/global/epaper-article.db");
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

if(isset($_GET['y']) && is_numeric($_GET['y']) && $_GET['y'] >= 2012 && $_GET['y'] == round($_GET['y'], 0)){
  $year = $_GET['y'];
  $sql_year="AND date LIKE '%{$year}%'";
}else{
  $year='';
  $sql_year='';
}
// $today=date("Y-m-d");
// $rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' $sql_year AND ifnull(length(news_id), 0) = 0")->fetchAll();
$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' $sql_year ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
$rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' $sql_year ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = $row['link'];
  $lists[$i]['img'] = '';
  $lists[$i]['description'] = '文章出自 '.$row['alt'];
  $i++;
}
$rs = array_sort($lists, 'date', SORT_DESC);
//create 年份 select html
$option='';
for ($y= $news_last_year; $y > 2012 ; $y--){
  if ($y == $year){
    $option = $option."<option value=\"" . $y . "\" selected=\"selected\"> " . $y . " </option>";
  }else{
    $option = $option."<option value=\"" . $y . "\"> " . $y . " </option>";
  }
}
?>
  <main>
    <section class="article-list">
      <h1 class="text-center">資安知識分享</h1>
      <div class="container">
        <div class="text-right">
          <select name="pages" id="pages">
            <option value="all">請選擇年份</option>
            <?= $option; ?>
          </select>
        </div>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/articleHandle.php');
$rs=null;
$db=null;
?>
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