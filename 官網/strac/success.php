<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "consult";
$page['title']='成功頁面 | 資通電腦';
$page['description']='';
$page['other']=array('<meta name="robots" content="noindex, follow">');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <p class="slider">
    <img class="img-fluid" src="/img/consult/banner.png" alt="">
  </p>
  <div class="ares-breadcrumb">
    <div class="container">
      <ul class="row">
        <li>
          <a href="/"><span>首頁</span></a>
        </li>
        <li>
          <a href="../../"><span>產品類別</span></a>
        </li>
        <li>
          <a href="../"><span>產品簡介</span></a>
        </li>
        <li>
          <a href="" onclick="return false;"><span>成功頁面</span></a>
        </li>
      </ul>
    </div>
  </div>
  <section class="contact-area-hide">
    <div>
      <h2 class="text-center">您的資料已成功送出！</h2>
      <hr>
      <div class="container">
          <p>感謝您對資通電腦產品的關愛與支持，我們將盡快與您聯繫！<br>
            我們也推薦<a href="/epaper/" class="color-blue">資通電腦電子報</a>，每月出刊，提供不同產品的新知與趨勢報導。歡迎您<a href="/epaper/subscribe/" class="color-blue">免費訂閱</a>！</p>
        <ul class="disc color-blue">
        <li><a href="https://marketing.ares.com.tw/newsletter/2021-06-financial-reporting/financial-reporting-regulation?utm_source=success_page&utm_medium=official&utm_campaign=success">「公司治理 3.0」來臨，企業該如何落實財報自編？</a></li>
          <li><a href="https://edm.ares.com.tw/dm/202302-arespp/?utm_source=success_page&utm_medium=official&utm_campaign=success">「零信任資安」時代來臨！科技大廠如何防止機密外洩</a></li>
          <li><a href="https://marketing.ares.com.tw/newsletter/2022-12-hcp/recruitment-management?utm_source=success_page&utm_medium=official&utm_campaign=success">如何提升人才招募品質？善用 7 大招募績效分析</a></li>
          <li><a href="https://marketing.ares.com.tw/newsletter/2018-12-fortify/it?utm_source=success_page&utm_medium=official&utm_campaign=success">3 大掃描方式，原始碼漏洞原形畢露</a></li>
          <li><a href="https://cimes.ares.com.tw/industry-4.0/?utm_source=success_page&utm_medium=official&utm_campaign=success">智慧製造成功的關鍵因素</a></li>
        </ul>
          <!-- <p ><strong>現在就加入資通粉絲團：</strong></p> -->
          <!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8&appId=238825363206406";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/AresInternational/" data-tabs="timeline,messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AresInternational/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AresInternational/">Ares International Corp. 資通電腦</a></blockquote></div> -->
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

