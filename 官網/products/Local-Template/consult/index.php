<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='Oracle ERP台灣發票/票據/保稅系統-免費諮詢| Local Template資通';
$page['description']='提供Oracle EBS在地化完整解決方案免費諮詢。包括統一發票GUI、媒體申報VAT、票據NM、保稅GIB、存貨管理系統模組相關諮詢需求。';
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
            <a href="../" itemprop="item"><span itemprop="name">NM / GIB / 十號公報</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
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
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck('LT');">
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

