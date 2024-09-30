<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='站內搜尋 | 資通電腦';
$page['description']='可以切換資通電腦所有網域或官網網域，找尋您想要的產品或服務';
$page['canonical']='https://www.ares.com.tw/search/';
// $page['other']=array('<link rel="dns-prefetch" href="https://marketing.ares.com.tw/">');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
#___gcse_0{line-height:1}
#___gcse_0 a.gs-title{height:auto;}
.gsc-tabsArea>div{overflow:unset!important;}
.gsc-adBlock,.ad{display:none!important;}
</style>
  <figure class="slider">
    <img class="img-fluid" src="/img/service/services-banner-400.png" alt="*">
    <figcaption class="color-white">
      <h1>站內搜尋</h1>
    </figcaption>
  </figure>
  <section>
    <div class="container">
      <script async src="https://cse.google.com/cse.js?cx=014374286183653546318:anrbmnt_9rc"></script>
      <div class="gcse-search"></div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>
