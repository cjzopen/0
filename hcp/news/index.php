<?php
if(isset($_GET['y'])){
  Header( "HTTP/2 301 Moved Permanently" );
  Header( "Location: https://hcp.ares.com.tw/news/" );
  exit();
}
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='HR人資系統最新消息,教育訓練講座';
$page['description']='HR 人資系統教育訓練、課程講座與相關新聞，帶您快速理解如何與現行法規並行操作，協助 HR 人員加速日常作業流程，提升人事管理效率！';
$canonical='https://hcp.ares.com.tw/news/';
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/news/'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/news/'
  )
);
// if(isset($_GET['y'])){
//   if($news_last_year == $_GET['y']){
//     $another='<link rel="next" href="?y='.($news_last_year-1).'">';
//   }elseif($news_last_year > $_GET['y'] && $_GET['y'] > 2004){
//     $another='<link rel="prev" href="?y='.($_GET['y']+1).'"><link rel="next" href="?y='.($_GET['y']-1).'">';
//   }elseif($_GET['y'] == 2004){
//     $another='<link rel="prev" href="?y=2005">';
//   }
// }
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="news">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/news/events-banner-1366.jpg', //圖片
  '/img/news/events-banner-360.jpg 360w, /img/news/events-banner-720.jpg 720w, /img/news/events-banner-1366.jpg 1366w, /img/news/events-banner-1440.jpg 1440w', //srcset
  'HCP 最新消息', //alt
  '<h1>HCP 最新消息</h1>', //圖片上的字
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
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">最新消息</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>
  </div>
<?php
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }
try {
  $db = new PDO(GLOBAL_DB);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}

// if(!isset($_GET['y'])){
  $year='';
  $rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
// }else{
  // $year = $_GET['y'];
  // $rs = $db->query("SELECT * FROM news WHERE date LIKE '%{$year}%' AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
// }
$_html ='';
//create 年份 select html
$option='';
// for ($y= $news_last_year; $y > 2003 ; $y--){
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
      <li><a class="main-color" href="/news/">最新消息</a></li>
      <li><a href="/news/knowledge/">知識分享</a></li>
    </ul>
  </nav>
    <section class="article-list">
      <div class="container" itemprop="mainEntity" itemscope itemtype="http://schema.org/ItemList">
<?php
require(PHP_WEB_ROOT.'/src/articleHandle.php');
$year=null;
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