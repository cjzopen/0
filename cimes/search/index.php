<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['title'] = '站內搜尋';
$page['description'] = '帶您快速尋找所有資通電腦 MES 製造執行系統之相關訊息';
$page['css']=array('/public/css/search.css');
$canonical='https://cimes.ares.com.tw/search/';
$hreflang = 'https://cimes.ares.com.tw/en/search/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="other">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/products/product-banner-1440.jpg', //圖片
  '<h1 class="h3">站內搜尋</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">站內搜尋</li>
      </ol>
    </div>
    <section class="container">
    <noscript>
      <div class="py-5">您使用的系統封鎖了此頁面的 javascript</div><br>
    </noscript>
<script>
  (function() {
    var cx = '014374286183653546318:qli8ka6y2oo';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>