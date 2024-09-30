<?php
// i dont know why php cache need to set 1 sec in webconfig, otherwise $_GET['y'] would be not change.
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='ARES PP 最新消息';
$page['description']='最新 ARES PP（ARES Privacy Protector） 隱私保鑣文件加密軟體，產品功能及應用、文件加密保全方案、資安防護措施、資料加解密、資料庫加密、個資保護等資安議題文章。';
$canonical='https://ares-pp.ares.com.tw/articles/';
$hreflang = 'https://ares-pp.ares.com.tw/en/articles/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

?>
<div class="all" id="news">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/news/news-banner.png', //圖片
  null, //srcset
  '最新消息', //alt
  '<h1>'.file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/news/news-icon.svg').'最新消息</h1>', //圖片上的字
  'sub-color' //字的 class
);
?>
  <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $nowUrl ?>" itemprop="item"><span itemprop="name">最新消息</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>
  </nav>
<?php
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

if(!isset($_GET['y'])){
  $year='';
  $rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
}else{
  //選取 某年份的文章
  $year = $_GET['y'];
  if($year <= 2015 && $year >= 2013){
    $rs = $db->query("SELECT * FROM news WHERE date < '2016-01-01' AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
  }else{
    $rs = $db->query("SELECT * FROM news WHERE date LIKE '%{$year}%' AND product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();
  }
}
//create 年份 select html
$option='';
for ($y= $news_last_year; $y > 2015 ; $y--){
  if ($y == $year){
    $option = $option."<option value=\"" . $y . "\" selected=\"selected\"> " . $y . " </option>";
  }else{
    $option = $option."<option value=\"" . $y . "\"> " . $y . " </option>";
  }
}
if($year<=2015 && $year !==''){
  $option = $option."<option value=\"2015\" selected=\"selected\">2015 以前</option>";
}else{
  $option = $option."<option value=\"2015\">2015 以前</option>";
}
?>
  <main>
    <section class="article-list">
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
<script src="/lib/jquery.lazyload.min.js"></script>
<script src="/public/js/main.js"></script>
<script>
$(function(){
  $('img.lazy').lazyload({effect: "fadeIn"});
})
</script>
</body>
</html>