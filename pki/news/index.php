<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');



try {
  $db = new PDO(GLOBAL_DB);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC")->fetchAll();

require_once(PHP_WEB_ROOT.'/template/_news.php');



$page['title']='最新消息';
$page['css']=array('/css/article.css');
$page['description']='PKI資安產品最新消息、活動與成功案例新聞都在這裡';
$page['canonical']=HOST_LINK.'/news/';
$page['hreflang']=HOST_LINK.'/en/news/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/news/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/news/banner-icon.svg" alt="*"> 最新消息</h1>', //圖片上的字
  null //字的 class
);
?>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">最新消息</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
    <aside class="supmenu sticky-top">
      <div class="container">
        <ul class="text-center mb-0">
          <?= $_aside ?>
        </ul>
      </div>
    </aside>
  <section>
    <div class="container">
      <?= $_html ?>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>