<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$contact=0;
http_response_code(404);
$page['title'] = '404 找不到網頁';
$page['description'] = '';
$canonical = '';
$another ='<meta name="robots" content="noindex,follow">';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/best-practices/best-practices-banner-1440.jpg', //圖片
  '/img/best-practices/best-practices-banner-720.jpg 720w, /img/best-practices/best-practices-banner-1440.jpg 1440w, /img/best-practices/best-practices-banner.jpg 2880w', //srcset
  '', //alt
  '404', //圖片上的字
  null //字的 class
);
?>
  <main>
<!--     <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <span itemprop="name">404</span>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </nav> -->
    <section>
      <div class="container">
        <h2 class="text-center mb-0">抱歉！我們找不到您要瀏覽的網頁</h2>
        <hr>
        <figure class="text-center">
          <img class="img-fluid" loading="lazy" src="/img/404.png" alt="404">
        </figure>
        <p class="text-center">可能網址打錯或是網頁已經下架了。<br>您可以至 <a class="main-color" href="/sitemap/">網站地圖</a> 查看主要頁面，造成不便還請見諒。</p>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>