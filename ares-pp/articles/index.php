<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='最新消息';
$page['description']='最新產品功能應用、文件加密保全方案、資安防護措施、資料加解密、資料庫加密、個資保護等資安議題文章都在這裡！';
$canonical='https://ares-pp.ares.com.tw/articles/';
$hreflang = 'https://ares-pp.ares.com.tw/en/articles/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

?>
<div class="all" id="news">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/news/banner.webp', //圖片
  '<span class="h2">最新消息</span>', //圖片上的字
  'fff-color' //字的 class
);
?>
  <div class="breadcrumb" aria-label="breadcrumb">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">最新消息</span></a>
        <meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
<?php
try {
  $db = new PDO($global_db);
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

if(isset($_GET['y']) && is_numeric($_GET['y']) && $_GET['y'] >= 2003 && $_GET['y'] == round($_GET['y'], 0)){
  $year = $_GET['y'];
  $sql_year="AND date LIKE '%{$year}%'";
}else{
  $year='';
  $sql_year='';
}
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' $sql_year")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['id'] = $row['id'];
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = $row['title'];
  $lists[$i]['content'] = $row['content'];
  $lists[$i]['redirect'] = $row['redirect'];
  $lists[$i]['news_name'] = $row['news_name'];
  $lists[$i]['img'] = $row['img'];
  $lists[$i]['description'] = $row['description'];
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
      <h1 class="text-center">最新消息</h1>
      <div class="container">
        <div class="text-right">
          <select name="pages" id="pages">
            <option value="all">全部</option>
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