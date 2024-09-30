<?php

$page['title']='最新消息 | 資通電腦';
$page['canonical']='https://www.ares.com.tw/events/';

$page['other']=array('<meta name="robots" content="noindex,nofollow">');
$page['description']='包含近期消息、動態、活動訊息與產品資訊等文章，歡迎使用者深入瞭解資通文化與其產品帶來的好處';
$page['css']=array('/css/events.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<!-- <script src="/lib/lazysizes.min.js"></script> -->
  <figure class="slider">
    <img class="img-responsive lazyload" src="/img/events/events-banner-360.png" data-src="/img/events/events-banner-2880.png" data-srcset="/img/events/events-banner-360.png 360w, /img/events/events-banner-720.png 720w, /img/events/events-banner-1440.png 1440w, /img/events/events-banner-1920.png 1920w, /img/events/events-banner-2880.png 2880w" alt="*" sizes="(max-width: 2880px) 100vw, 2880px">
    <figcaption class="fff">
      <h1><img src="/img/events/events-icon.svg" alt="*" aria-hidden="true"> 最新消息</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">最新消息</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center">
      <i class="fa fa-angle-left prev"></i>
      <ul role="list">
<?php  for($i=$last; $i>=1999; $i-- ){ ?>
        <li role="listitem"><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>" <?php if($year == $i-1){echo 'rel="prev"';}elseif($year == $i+1){echo 'rel="next"';}?>><?= $i; ?></a></li>
<?php } ?>
      </ul>
      <i class="fa fa-angle-right next"></i>
    </div>
  </div>
  <section class="list">
    <div class="container">
      <h2 class="text-center">最新消息</h2>
      <hr>
      <p>本年度沒有文章</p>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/events-list.js" defer></script>
</body>
</html>