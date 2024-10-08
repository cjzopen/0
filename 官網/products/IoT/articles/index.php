<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='物聯網文章分享 |資通電腦';
$page['description']='立即瀏覽我們的物聯網相關文章，掌握最新的IoT趨勢。';
$page['canonical']='https://www.ares.com.tw/products/IoT/articles/';
$page['css']=array('/css/newsletter-article.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include ('../_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">IoT 物聯網解決方案</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">相關文章</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('../_nav.php');
?>
  </div>
  <section class="list">
    <div class="container">
      <div data-nosnippet>
        <div class="keyword-list mb-5">
          <div class="keyword-toggle" role="button"></div>
          <span class="keyword rounded-pill act" role="button">全部</span>
<?php
try {
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
$product='IoT';
$rs = $db->query("SELECT keyword FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
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
$rs=null;
$db=null;
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
      <h2 class="text-center hr">相關文章</h2>
      <div class="row">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/product-article-list2.php');
?>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/article-tag.js" defer></script>
</body>
</html>

