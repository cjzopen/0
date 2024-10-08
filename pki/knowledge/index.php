<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');



try {
  $db = new PDO('sqlite:/example/global/epaper-article.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
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
$_html='';
$_aside='';
$_year='';
$_id;
$rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%'")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
$rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%'")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = $row['link'];
  $lists[$i]['img'] = '';
  $lists[$i]['description'] = '文章出自 '.$row['alt'];
  $i++;
}
$rs = array_sort($lists, 'date', SORT_DESC);
foreach ($rs as $row) {
  // photo default value
  $row['photo'] = '/img/events.jpg';
  if(!empty($row['img'])&&$row['img']!=='https://marketing.ares.com.tw/img/logos/ares.png'){
    $row['photo'] = $row['img'];
    if (strpos($row['img'],'/') === 0) {
      $row['photo'] = 'https://marketing.ares.com.tw'.$row['img'];
    }
  }
  // summary default value
    $row['lead'] = $row['description'];
  // define article url
    $row['url'] = $row['href'];



  if($_year !== substr($row['date'], 0, 4)){
    $_year = substr($row['date'], 0, 4);
    $_id = 'id="y'.$_year.'"';
    // year menu
    $_aside = $_aside.'<li><a href="#y'.$_year.'">'.$_year.'</a></li>';
  }else{
    $_id = '';
  }
  // article list html
  if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['url'])){
    $_html = $_html.'<div class="mb-4 mb-lg-0 py-3 article" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" '.$_id.'>
    <div itemprop="item" class="row">
      <div class="col-3 px-0">
        <figure class="ratio-box"><img class="lazyload img-fluid" src="/img/events.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
        <meta itemprop="image" content="'.$row['photo'].'">
      </div>
      <div class="col-9 col-sm-8 col-lg-8 pt-2">
        <time class="text-red" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <div itemprop="name" class="title h3 text-red mt-0 mb-3"><a itemprop="url" class="stretched-link" href="'.$row['url'].'" rel="noopener noreferrer" target="_blank">'.$row['title'].'</a></div>
        <p class="mb-0" itemprop="description">'.strip_tags($row['lead']).'</p>
      </div>
    </div>
  </div>';
  }
}
$rs=null;
$db=null;







$page['title']='知識分享';
$page['css']=array('/css/article.css');
$page['description']='相關個資與資安應用文章，與您一同分享！';
$page['canonical']=HOST_LINK.'/knowledge/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/news/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/news/banner-icon.svg" alt="*"> 知識分享</h1>', //圖片上的字
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
          <a href="./" itemprop="item"><span itemprop="name">知識分享</span></a>
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