<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='客戶及合作夥伴 | 資通電腦';
$page['description']='資通電腦為國際知名領導廠商的策略夥伴，藉由策略聯盟提升資通產品專業技術能力，提供客戶符合趨勢的全方位解決方案。';
$page['canonical']='https://www.ares.com.tw/partners/';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$breadcrumb='客戶及合作夥伴';
include($_SERVER['DOCUMENT_ROOT'].'/template/about-banner.php');
?>
  <section class="partners">
    <h1 class="text-center h2" id="創造三贏模式">結合策略聯盟 強化資訊整合</h1>
    <hr>
    <div class="container">
      <p>為提昇資通各領域專業能力，提供客戶符合趨勢的全方位解決方案，成為國際知名領導廠商的策略夥伴，是資通電腦一貫的政策。例如 : Oracle、HP、IBM、Microsoft、SWIFT、DataOne…等。藉由策略聯盟掌握各家產品上的專業技術能力，並結合資通在各領域的經營知識與軟體開發經驗，提供客戶切合兩岸三地需求的資訊及顧問服務，亦強化了國際大廠對本區域的解決方案，創造資通、原廠及客戶的三贏模式。資通更於 2015 、2016 連續兩年榮獲國際研究機構 Gartner 台灣唯一建議參考的製造執行系統（Manufacturing Execution System；MES）廠商，推出工業 4.0 整體解決方案。2016 年更攜手泰國軟體龍頭 DataOne Asia 以 ArgoERP 進軍東南亞市場，顯現資通電腦在軟體設計、開發、安裝和售後服務均已達國際水準，具備國際級的專業服務能力。</p>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center" id="partners">資通電腦策略夥伴</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
<?php include('partners.php'); ?>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center" id="產學夥伴">產學夥伴</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
<?php include('academic.php'); ?>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">關係企業</h2>
    <hr>
    <div class="container">
      <div class="row text-center justify-content-center">
<?php include('affiliates.php'); ?>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

