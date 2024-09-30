<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='送出成功';
$page['description']='';
$another='<meta name="robots" content="noindex,nofollow">';
$canonical='';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="contactus">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/contact/banner.webp', //圖片
  null, //srcset
  '線上諮詢', //alt
  '<h1>成功頁面</h1>', //圖片上的字
  'fff-color' //字的 class
);
?>
<style>
#contact-circles{display: none;}
</style>
  <main>
    <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="" itemprop="item"><span itemprop="name">成功頁面</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </nav>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">您的資料已成功送出！</h2><hr>
        <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！</p>
        <div class="my-3"><a href="https://edm.ares.com.tw/dm/arespp-workshop/20221013/"><img class="img-responsive" src="https://marketing.ares.com.tw/images/2022-09/e-1.jpg" alt="資安研討會"></a></div>
        <p ><strong>現在就加入資通粉絲團：</strong></p>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8&appId=238825363206406";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-page" data-href="https://www.facebook.com/AresInternational/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AresInternational/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AresInternational/">Ares International Corp. 資通電腦</a></blockquote></div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>