<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Fortify免費諮詢|資通電腦';
$page['description']='Fortify 企業資安監測方案，線上免費諮詢，讓企業隨時掌握系統資安弱點！';
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
            <a href="../" itemprop="item"><span itemprop="name">Fortify</span></a>
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
include_once ('../_nav.php');
?>
  </div>
  <section id="consult" class="contact-area-hide">
    <h2 class="text-center">免費諮詢</h2>
    <hr>
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck('Fortify');">
<?php
$budget_range = array('20','50','100');
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
// window.addEventListener("load", function(event) {
// var urlParams = new URLSearchParams(window.location.search);
//   if(urlParams.has('p')){
//     if(urlParams.get('p')=='howmuch'){
//       document.getElementById("otherRequire").innerText='煩請提供報價。';
//     }
//   }
// });
</script>
</body>
</html>

