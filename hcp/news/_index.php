<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='HCP 最新消息';
$page['description']='';
$canonical='https://hcp.ares.com.tw/news/';
$hreflang = 'https://hcp.ares.com.tw/en/news/';
if(isset($_GET['y'])){
  if($news_last_year == $_GET['y']){
    $another='<link rel="next" href="?y='.($news_last_year-1).'">';
  }elseif($news_last_year > $_GET['y'] && $_GET['y'] > 2004){
    $another='<link rel="prev" href="?y='.($_GET['y']+1).'"><link rel="next" href="?y='.($_GET['y']-1).'">';
  }elseif($_GET['y'] == 2004){
    $another='<link rel="prev" href="?y=2005">';
  }
}
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
  <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
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
  </nav>
  <aside class="supmenu position-static">
    <nav class="container">
      <ul class="text-center mb-0">
        <li class="main-color">最新消息</li>
        <li><a href="/news/knowledges/?y=<?= $knowledge_last_year ?>">知識分享</a></li>
        <li><a href="https://www.ares.com.tw/epaper/subscribe/" rel="nofollow">訂閱電子報 ⭧</a></li>
      </ul>
    </nav>
  </aside>
<?php
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }

if(!isset($_GET['y'])){
  $year='';
  $rs = $db->query("SELECT * FROM news WHERE products LIKE '%{$products}%' ORDER BY date DESC")->fetchAll();
}else{
  //選取 某年份的文章
  $year = $_GET['y'];
  $rs = $db->query("SELECT * FROM news WHERE date LIKE '%{$year}%' AND products LIKE '%{$products}%' ORDER BY date DESC")->fetchAll();
}
$_html ='';
//create 年份 select html
$option='';
for ($y= $news_last_year; $y > 2003 ; $y--){
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
<script src="/js/main.js" defer></script>
</body>
</html>