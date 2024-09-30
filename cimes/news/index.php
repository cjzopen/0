<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require $_SERVER['DOCUMENT_ROOT'].'/src/setting.php';

$page['title'] ='最新消息';
$page['description']='資通電腦 MES 最新產品、活動消息、ciMes 受各產業製造商青睞成功導入案例，與工業 4.0 智慧工廠/智能製造解決方案都在這裡！';
$canonical='https://cimes.ares.com.tw/news/';
$hreflang = 'https://cimes.ares.com.tw/en/news/';
if(isset($_GET['y']) && is_numeric($_GET['y']) && $_GET['y'] >= 2003 && $_GET['y'] == round($_GET['y'], 0)){
  //選取 某年份的文章
  $year = $_GET['y'];
  if($year <= 2014 && $year >= 2003){
    $rs = $db->query("SELECT * FROM news WHERE `date` < '2015-01-01' AND product LIKE '%{$product}%' ORDER BY `date` DESC")->fetchAll();
  }else{
    $rs = $db->query("SELECT * FROM news WHERE `date` LIKE '%{$year}%' AND product LIKE '%{$product}%' ORDER BY `date` DESC")->fetchAll();
  }
}else{
  $year='';
  $rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY `date` DESC")->fetchAll();
}

if($year >=2003){
  if($year == $news_last_year){
    $another='<link rel="next" href="https://cimes.ares.com.tw/news/?y='.($year-1).'" />';
  }elseif($year >= 2003 && $year <= 2014){
    $another='<link rel="prev" href="https://cimes.ares.com.tw/news/?y=2015" />';
  }else{
    $another='<link rel="prev" href="https://cimes.ares.com.tw/news/?y='.($year+1).'" /><link rel="next" href="https://cimes.ares.com.tw/news/?y='.($year-1).'" />';
  }
}
require $_SERVER['DOCUMENT_ROOT'].'/template/head.php';

?>
<div class="all" id="news">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/template/menu.php';
aimg(
  '/public/img/what/events-banner-1440.jpg', //圖片
  '<h1>MES 最新消息</h1>', //圖片上的字
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
  <nav class="supmenu">
    <div class="container">
      <ul class="text-center mb-0">
        <li ><a class="main-color" href="/news/">最新消息</a></li>
        <li><a href="/knowledge/">知識分享</a></li>
      </ul>
    </div>
  </nav>
<?php
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }


$_html ='';
//create 年份 select html
$option='';
for ($y= $news_last_year; $y > 2014 ; $y--){
  if ($y == $year){
    $option = $option."<option value=\"" . $y . "\" selected=\"selected\"> " . $y . " </option>";
  }else{
    $option = $option."<option value=\"" . $y . "\"> " . $y . " </option>";
  }
}
if($year<=2014 && $year>=2003 && $year !==''){
  $option = $option."<option value=\"2014\" selected=\"selected\">2014 以前</option>";
}else{
  $option = $option."<option value=\"2014\">2014 以前</option>";
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
//create 文章 html, 放這裡是肴望先載入頁面再慢慢 foreach
require $_SERVER['DOCUMENT_ROOT'].'/src/articleHandle.php';
$rs=null;
$db=null;
?>
<?= !empty($_html) ? $_html: '<li><p>本年度沒有文章</p></li>'; ?>
      </div>
    </section>
  </main>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/template/foot.php';
?>
</div>
</body>
</html>