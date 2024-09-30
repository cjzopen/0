<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "consult";
$page['title']='成功頁面 | 資通電腦';
$page['description']='資通電腦提供各項產品業務免費諮詢，在填寫服務表單資訊後，將有專員盡速與您聯繫提供服務。';
$page['canonical']='https://www.ares.com.tw/consult/';
$page['other']=array('<meta name="robots" content="noindex, nofollow">');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <p class="slider">
    <img src="../img/consult/banner.png" alt="資通電腦提供全方位解決方案！">
  </p>
  <div class="ares-breadcrumb">
    <div class="container">
      <ul class="row">
        <li>
          <a href="/"><span>首頁</span></a>
        </li>
        <li>
          <a href="/consult/"><span>免費諮詢</span></a>
        </li>
        <li><span>成功頁面</span></li>
      </ul>
    </div>
  </div>
  <section class="">
    <div>
      <h2 class="text-center">您的資料已成功送出！</h2>
      <hr>
      <div class="container">
        <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！<br>我們也推薦<a href="/epaper/" class="main-color">資通電腦電子報</a>，每月出刊，提供不同產品的新知與趨勢報導。歡迎您<a href="/epaper/subscribe/" class="main-color">免費訂閱</a>！</p>
        <ul class="disc main-color">
          <li><a href="https://marketing.ares.com.tw/newsletter/2021-06-financial-reporting/financial-reporting-regulation?utm_source=success_page&utm_medium=official&utm_campaign=success">「公司治理 3.0」來臨，企業該如何落實財報自編？</a></li>
          <li><a href="https://marketing.ares.com.tw/newsletter/2021-09-cybersecurity/import-encryption-system?utm_source=success_page&utm_medium=official&utm_campaign=success">導入文件加密系統，保護機敏資料做好資安管控</a></li>
          <li><a href="https://www.ares.com.tw/products/knowbe4/?utm_source=success_page&utm_medium=official&utm_campaign=success">資安意識培訓平台，顯著提升員工資安意識</a></li>
          <li><a href="https://edm.ares.com.tw/dm/recruiting-is-fast-and-accurate/?utm_source=success_page&utm_medium=official&utm_campaign=success">人才招募快又準，龐雜問題一目瞭然</a></li>
        </ul>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

