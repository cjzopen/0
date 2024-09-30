<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' AND news_name = '{$link}' COLLATE NOCASE");
$row = $rs->fetch(PDO::FETCH_ASSOC);

if(empty($row['description'])){
  $description = $row['title'];
}else{
  $description = $row['description'];
}
if(empty($row['dateModified'])){
  $row['dateModified']=$row['date'];
}
$toBeFoundPattern = '/(src=\"..\/)/i';
$toBeReplacedPattern = 'src="//www.ares.com.tw/';
$row['content'] = preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] );

$toBeFoundPattern = '/(src=\"\/img)/i';
$toBeReplacedPattern = 'src="//www.ares.com.tw/img';
$row['content'] = preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] );

$toBeFoundPattern = '/(href=\"..\/)/i';
$toBeReplacedPattern = 'href="//www.ares.com.tw/';
$row['content'] = preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] );

$toBeFoundPattern = '/(href=\"\/)/i';
$toBeReplacedPattern = 'href="//www.ares.com.tw/';
$row['content'] = preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] );

$page['title']=strip_tags($row['title']);
$page['css']=array('//www.ares.com.tw/css/article.css');
$page['description']=str_replace('"','\'',strip_tags($description));
$page['canonical']=HOST_LINK.'/best-practices/?case='.$link;
if(isset($row['en'])){
  $page['hreflang']=$row['en'];
}
if(isset($row['img']) && substr($row['img'], 0, 4) == 'http'){
  $page['image']=$row['img'];
}else{
  $page['image']='https://pki.ares.com.tw/img/products/cs/structure.png';
}
// $page['hreflang']=HOST_LINK.'/en/best-practices/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/best-practices/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<span class="h3">成功案例</span>', //圖片上的字
  null //字的 class
);
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [{
    "@type":"Organization","@id":"https://www.ares.com.tw/#organization","name":"資通電腦股份有限公司","url":"https://www.ares.com.tw/","address":"台北市中山區中山北路二段111號3樓","email":"jenny@ares.com.tw","founder":"余宏揚","foundingDate":"1980-12-03","telephone":"+886-2-2522-1351","faxNumber":"+886-2-2560-1735","contactPoint":[{"@type":"ContactPoint","telephone":"+886-2-2522-1351","email":"jenny@ares.com.tw","url":"https://www.ares.com.tw/consult/","contactType":"customer service"}],"sameAs":["https://www.facebook.com/AresInternational","https://www.youtube.com/user/AresTaiwan","https://www.linkedin.com/company/ares-international-corporation","https://zh.wikipedia.org/wiki/資通電腦"],"logo":{"@type":"ImageObject","@id":"https://www.ares.com.tw/#logo","url":"https://www.ares.com.tw/img/ares.png","caption":"資通電腦"},"image":{"@id":"https://www.ares.com.tw/#logo"}
  },
  {
    "@type": "WebPage","@id": "<?= HOST_LINK.'/best-practices/?case='.$link ?>#webpage","url": "<?= HOST_LINK.'/best-practices/?case='.$link ?>","inLanguage": "zh-TW","name": "<?= strip_tags($row['title']) ?>","isPartOf": {"@id": "https://pki.ares.com.tw/#website"},
    "image": {
      "@type": "ImageObject","@id": "https://pki.ares.com.tw/#primaryimage",
"url":"<?= $page['image'] ?>",      "caption": ""},
    "primaryImageOfPage":{"@id": "https://pki.ares.com.tw/#primaryimage"},"datePublished": "<?= $row['date'] ?>","dateModified": "<?= $row['dateModified'] ?>","description": "<?= str_replace('"','\'',strip_tags($description)) ?>"
  },
<?php
if(!empty($row['author'])){
?>
  {
    "@type": "Person",
    "@id": "https://pki.ares.com.tw/#author",
    "image": {
      "@type": "ImageObject",
      "@id": "https://pki.ares.com.tw/#personlogo",
      "caption": "<?= $row['author'] ?>"
    },
    "name": "<?= $row['author'] ?>"
  },
<?php
}
?>
  {
    "@type": "Article",
    "@id": "<?= HOST_LINK.'/best-practices/?case='.$link ?>#article",
    "articleSection":"uPKI 客戶案例",
    "isPartOf": {
      "@id": "<?= HOST_LINK.'/best-practices/?case='.$link ?>#webpage"
    },
<?php
if(empty($row['author'])){
?>
    "author": {"@id": "https://www.ares.com.tw/#organization"},
<?php
}else{
?>
    "author": {
      "@id": "https://pki.ares.com.tw/#author",
      "name": "<?= $row['author'] ?>"
    },
<?php
}
?>
    "publisher": {"@id": "https://www.ares.com.tw/#organization"},
    "copyrightHolder":{"@id":"https://www.ares.com.tw/#organization"},
    "headline": "<?= strip_tags($row['title']) ?>",
    "datePublished": "<?= $row['date'] ?>",
    "dateModified": "<?= $row['dateModified'] ?>",
    "mainEntityOfPage": "<?= HOST_LINK.'/best-practices/?case='.$link ?>",
    "image": {
      "@id": "https://pki.ares.com.tw/#primaryimage"
    }
  }
  ]
}
</script>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">成功案例</span></a>
          <meta itemprop="position" content="2">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name"><?= $row['title'] ?></span></a>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </div>
  </header>
  <section>
    <div class="container" id="article">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <h1 class="text-red"><?= $row['title'] ?></h1>
          <time datetime="<?= $row['date'] ?>"><?= $row['date'] ?></time>
          <article class="py-4"><?= $row['content'] ?></article>
        </div>          
      </div>
    </div>
    <aside class="container py-5">
      <div class="row justify-content-around">
        <div class="col-6 col-md-4">
          <a href="/products/" class="btn btn-red py-4 w-100"><span>產品介紹</span></a>
        </div>
        <div class="col-6 col-md-4">
          <a href="/consult/" class="btn btn-red py-4 w-100"><span>立即諮詢</span></a>
        </div>
      </div>
    </aside>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pangu/4.0.7/pangu.min.js" defer></script>
<script>
window.addEventListener("load", function(event) {
  pangu.spacingElementById('article');
});
</script>
</body>
</html>