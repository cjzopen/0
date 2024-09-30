<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='台資,大陸銀行核心系統免費諮詢|資通電腦';
$page['description']='想在大陸市場拓點卻不知道怎麼辦？請填寫服務表單留下聯絡資訊，將有專員盡速與您聯繫提供服務。';
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
            <a href="../" itemprop="item"><span itemprop="name">Ares Smart Core Banking System</span></a>
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
  <section id="consult">
    <h2 class="text-center">免費諮詢</h2>
    <hr>
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck('Ares Smart Core Banking System');">
<?php
require($_SERVER['DOCUMENT_ROOT']."/template/form.php");
?>
    </form>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
  <script src="https://www.google.com/recaptcha/api.js?zh-TW" defer></script>
  <script src="/js/check.js" defer></script>
</body>
</html>

