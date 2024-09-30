<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');
http_response_code(404);
$page['title'] = '404 找不到網頁';
$page['description'] = '';
$another ='<meta name="robots" content="noindex,follow">';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/ares-upki/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3"><img class="lazyload" data-src="/img/ares-upki/banner-icon.svg" alt="*"> 404</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">抱歉！我們找不到您要瀏覽的網頁</h2>
        <hr>
        <figure class="text-center">
          <img class="img-fluid" src="/img/404.png" alt="404">
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