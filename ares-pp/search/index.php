<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='文件加密.檔案加密-相關搜尋';
$page['description']='提供資通電腦 ARES PP文件加密系統/檔案加密系統相關內容之搜尋工具';
$canonical='https://ares-pp.ares.com.tw/search/';
$hreflang = 'https://ares-pp.ares.com.tw/en/search/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.gsc-tabsArea>div{overflow:unset!important;}
.gsc-adBlock,.ad{display:none!important;}
.gsc-control-cse .gsc-table-result,.cse .gsc-control-cse, .gsc-control-cse{
  font-family: "Noto Sans TC", "Microsoft JhengHei", 微軟正黑體, "Roboto Condensed", "Helvetica Neue", sans-serif;
}
.cse .gsc-results .gsc-cursor-page.gsc-cursor-current-page, .gsc-results .gsc-cursor-page.gsc-cursor-current-page{
  text-shadow:none;
}
.cse input.gsc-search-button, input.gsc-search-button,input.gsc-input{
  height: 2.5rem;
}
#gsc-iw-id1{
  height:2.5em;
}
.gsc-results .gsc-cursor-box .gsc-cursor-current-page{
  background-color:transparent;
}
section{
  min-height: 66vh;
}
.gsc-result .gs-title{
  height:auto;
}
input.gsc-search-button.gsc-search-button-v2 {
  height: 32px !important;
  margin-top: 0 !important;
  min-width: 13px !important;
  padding: 8px 26px !important;
  width: 68px !important;
}
#searchbox{display: none!important;}
</style>
<div class="all" id="other">
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php'); ?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container">
        <li class="breadcrumb-item"><a href="/">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">站內搜尋</li>
      </ol>
    </div>
    <section class="container">
      <h1 class="text-center mb-0">資通電腦相關搜尋</h1><hr>
<script>
  (function() {
    var cx = '014374286183653546318:vzx6cvsgsd0';
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