<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='中科院資安方案 免費諮詢 | 資通電腦';
$page['description']='';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['css']=array('/css/buttons.css','/css/consult.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');
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
            <a href="../" itemprop="item"><span itemprop="name">中科院資安方案</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">免費諮詢</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center" id="title">
      <ul>
        <li><a href="../">產品簡介</a></li>
        <!-- <li><a href="../best-practice/">成功案例</a></li> -->
        <li><a href="../articles/">相關文章</a></li>
        <li><a href="" class="act">免費諮詢</a></li>
      </ul>
    </div>
  </div>
  <section id="consult">
    <h2 class="text-center">免費諮詢</h2>
    <hr>
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck('中科院資安方案');">
<?php
require($_SERVER['DOCUMENT_ROOT']."/strac/form.php");
?>
    </form>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
  <script src="https://www.google.com/recaptcha/api.js?zh-TW" async defer></script>
  <script src="/js/main2016.js"></script>
  <script src="/js/check.js"></script>
<script>
$(function(){
  $('#consult').show(); //確保有讀到 jquery
})
</script>
</body>
</html>

