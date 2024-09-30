<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='GD-CRM 免費諮詢 | 資通電腦';
$page['description']='';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['css']=array('/css/buttons.css','/css/consult.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
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
            <a href="../" itemprop="item"><span itemprop="name">GD-CRM</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">免費諮詢</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('../_nav.php');
?>
  </div>
  <section id="consult" class="contact-area-hide">
    <h1 class="text-center">免費諮詢</h1>
    <hr>
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck('GD-CRM');">
<?php
$budget_range = array('50','100','200');
require($_SERVER['DOCUMENT_ROOT']."/template/form.php");
?>
    </form>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
  <script src="https://www.google.com/recaptcha/api.js?zh-TW" async defer></script>
  <script src="/js/check.js" defer></script>
<script>
window.addEventListener("load", function(event) {
  $('#consult').show(); //確保有讀到 jquery
})
</script>
</body>
</html>

