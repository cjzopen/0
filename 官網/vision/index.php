<?php
$url='https://www.ares.com.tw/profile/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;

require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='經營理念 | 資通電腦';
$page['description']='資通電腦以四大核心價值「誠信、服務、品質、創新」持續精進，對內提升員工實力，對外協助客戶增加市場競爭力，並以最佳品質提供客戶優質服務體驗。';
$page['canonical']='https://www.ares.com.tw/vision/';
$page['css']=array('/css/vision.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$breadcrumb='經營理念';
include($_SERVER['DOCUMENT_ROOT'].'/template/about-banner.php');
?>
  <section>
    <div class="container">
      <h1 class="text-center h2">經營理念</h1>
      <hr>
      <p class="justify">資通電腦是大中華區專業的管理資訊系統軟體供應商，服務領域跨足兩岸三地及東南亞區域。以「提供高品質專業服務，作好對顧客的承諾」為宗旨，我們深切瞭解服務是無形的，必須經由發展過程中的標準程序將它具體表彰出來，因此，對於軟體產品開發與服務過程皆制訂明確的作業規範，藉由不斷的教育訓練及嚴格的審查評估，將作業規範轉化為同仁的工作習慣，具體的表現在工作成果上，提供專業的服務品質。這是多年來不變的信念，亦是獲得客戶信賴與支持的最大保障。</p>
    </div>
  </section>
  <section class="bg-gray" id="core">
    <div class="container">
      <h2 class="text-center">四大核心價值</h2>
      <hr>
      <div class="position-relative">
        <div class="text-center">
          <img class="img-fluid" src="/img/about/vision/vision-1.png" alt="*">
        </div>
          <ul class="row">
            <li class="col-12">
              <div class="h5 pb-1 border-bottom border-dark color-blue">誠信</div>
              <p>坦誠溝通、信守諾言，與客戶、同事以及其他利害關係人相互信賴尊重。</p>
            </li>
             <li class="col-12">
              <div class="h5 pb-1 border-bottom border-dark color-blue">服務</div>
              <p>專業用心、永保熱忱，以專業服務提升客戶評價與滿意度。</p>
            </li>
             <li class="col-12">
              <div class="h5 pb-1 border-bottom border-dark color-blue">品質</div>
              <p>嚴謹細心、層層把關，堅持提供客戶最完善的產品及服務。</p>
            </li>
             <li class="col-12">
              <div class="h5 pb-1 border-bottom border-dark color-blue">創新</div>
              <p>持續學習、追求創新，勇於突破現狀帶給客戶超乎預期的價值。</p>
            </li>
          </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">資通人信念與展望</h2>
      <hr>
      <p class="justify">「以優良服務品質及準確交期，提升顧客滿意度」，是每位資通人的工作信念。透過資通全體同仁對四大核心價值觀及資通信念的落實，時時保持自我實力，積極提升職場競爭力。實踐「以資訊科技提升產業競爭力，並成為客戶策略夥伴」的企業使命，成為知識經濟的建構者。期望成為一個目標一致、勇往直前的高效率組織，逐步拓展至國際市場，成為電子商務國際分工舉足輕重的一環。</p>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">多項國際認證 品質值得信賴</h2>
      <hr>
      <p class="justify">資通電腦於 1996 年獲得 ISO9001 國際品質認證，2006 年更取得 CMMI Level 2 正式評鑑，2008 年已通過 Level 3 正式評鑑，2013 年獲 IBM 創新整合獎，2015 年 - 2016 年連續兩年榮獲國際研究機構 Gartner 台灣唯一建議參考的 MES 製造執行系統廠商，並推出工業 4.0 整合方案。2016 年更攜手泰國軟體龍頭 DataOne Asia 以 ArgoERP 進軍東南亞市場，肯定資通在軟體設計、開發、安裝和售後服務均已達國際水準。</p>
      <div class="row text-center">
        <div class="col-12 col-sm-6 col-md-3 my-2">
          <img class="img-fluid" loading="lazy" width="120" height="120" alt="iso" src="/img/about/vision/iso.png">
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2">
          <a href="https://www.ares.com.tw/events/117">
            <img class="img-fluid" loading="lazy" width="120" height="120" alt="cmmi3" src="/img/about/vision/cmmi3.png">
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2">
          <a href="https://edm.ares.com.tw/dm/201611-ciMes/">
            <img class="img-fluid" loading="lazy" width="120" height="120" alt="gartner" src="/img/about/vision/gartner.png">
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2">
          <a href="https://www.ares.com.tw/events/ArgoERP-Thailand-DataOne">
            <img class="img-fluid" loading="lazy" width="120" height="120" alt="dataone" src="/img/about/vision/dataone.png">
          </a>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

