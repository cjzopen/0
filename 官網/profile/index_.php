<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='公司簡介 | 資通電腦';
$page['description']='臺灣首家上市櫃軟體公司，提供資訊化產品與解決方案。服務對象包含金融、政府和工商企業等，除為 SWIFT 認證夥伴、Oracle 台灣專業代理商之外，也榮獲國際研究機構 Gartner 台灣唯一建議參考的製造執行系統廠商、市占率最高的銀行海外分行核心系統與外匯系統供應商。';
$page['canonical']='https://www.ares.com.tw/profile/';
$page['css']=array('/css/vision.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$breadcrumb='公司簡介';
include($_SERVER['DOCUMENT_ROOT'].'/template/about-banner.php');
?>
  <section>
    <h1 class="text-center h2">資訊系統軟體領導廠商</h1>
    <hr>
    <div class="container">
      <p>資通電腦於 1980 年成立，2001 年在台灣證交所掛牌上市，是臺灣第一家上市櫃軟體公司，累積 <?= $age;?> 年實務經驗。資通電腦提供軟體產品、委外及系統整合專業服務，主要服務對象包含金融、政府和工商企業等，贏得超過 10,000 家企業客戶的支持肯定。目前在大中華區共設立台北、新竹、台中以及蘇州等據點，服務領域跨足兩岸三地及東南亞，員工約 400 人，其中台灣員工 300 人，大陸員工 60 餘人。</p>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">國際級服務品質</h2>
    <hr>
    <div class="container">
      <p>我們深切瞭解服務是無形的，因此，對於產品開發與服務過程皆制訂明確的作業規範，提供專業至上的服務品質。</p>
      <ul class="row">
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/TaiwanExcellence2018-logo.svg" alt="*">
            <div class="h5 pl-2">ciMes 製造執行系統 榮獲 2018 台灣精品獎</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/swift-logo.svg" alt="*">
            <div class="h5 pl-2">環球銀行金融電信協會（SWIFT）台灣區 Partner</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/IFRS-logo.svg" alt="*">
            <div class="h5 pl-2">台灣第一家 IFRS 解決方案輔導廠商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/oracle-logo.svg" alt="*">
            <div class="h5 pl-2">Oracle 第一家台灣專業代理商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/IBM-logo.svg" alt="*">
            <div class="h5 pl-2">IBM Partner</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/Gov-logo.svg" alt="*">
            <div class="h5 pl-2">政府資訊整合、施政應用、Big Data 應用、網路行銷等，大型專案執行及推廣專業廠商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/ciMes-logo.svg" alt="*">
            <div class="h5 pl-2">台灣製造執行系統（MES）LED 產業市占第一</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/bnk-logo.svg" alt="*">
            <div class="h5 pl-2">台灣市占最高的銀行海外分行核心與外匯系統商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/Gartner-logo.svg" alt="*">
            <div class="h5 pl-2">國際研究機構 Gartner 台灣唯一建議參考的製造執行系統</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/profile/Dataone-logo.svg" alt="*">
            <div class="h5 pl-2">攜手泰國軟體龍頭 DataOne Asia 以 ArgoERP 進軍東南亞市場</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/vision/iso.png" alt="*">
            <div class="h5 pl-2">曾獲 ISO9001 國際品質認證</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0" src="/img/about/vision/cmmi3.png" alt="*">
            <div class="h5 pl-2">曾獲 CMMI Level 3 正式評鑑</div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section id="core">
    <div class="container">
      <h2 class="text-center">以四大核心價值成為客戶策略夥伴</h2>
      <hr>
      <div class="position-relative">
        <div class="text-center d-none d-md-block">
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
  <section class="bg-gray">
    <h2 class="text-center">產品與服務</h2>
    <hr>
    <div class="container">
      <ul class="row text-center">
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="/products/#business">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/Business-icon.png" alt="*">
            </div>
            <div class="h5">商業服務</div>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="/products/#financial">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/Banking-icon.png" alt="*">
            </div>
            <div class="h5">金融服務</div>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="/products/#security">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/security-icon.png" alt="*">
            </div>
            <div class="h5">資訊安全</div>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="/services/outsourcing/">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/about/profile/outsourcing-icon.svg" alt="*">
            </div>
            <div class="h5">委外服務</div>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="https://oracle.ares.com.tw/">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/about/profile/consultant-icon.svg" alt="*">
            </div>
            <div class="h5">顧問服務</div>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4 mb-3 wow bounceIn">
          <a href="/services/gov/">
            <div class="circle-icon bg-blue3" aria-hidden="true">
              <img src="/img/about/profile/Gov-icon.svg" alt="*">
            </div>
            <div class="h5">政府專案</div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section class="text-center">
    <h2 class="text-center">組織架構</h2>
    <hr>
    <figure class="container">
      <img class="img-fluid" loading="lazy" width="623" height="470" src="/img/about/profile/stracture.png" alt="組織架構圖">
    </figure>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">管理層簡介</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-md-6">
          <img class="img-fluid" loading="lazy" width="200" height="200" src="/img/about/profile/s-1.png" alt="余宏揚董事長">
          <div class="h5">董事長 余宏揚</div>
          <div class="color-orange">主要經（學）歷</div>
          <ul>
            <li>清華大學數學系</li>
            <li>台大國際企業學研究所碩士</li>
          </ul>
          <div class="color-orange">目前兼任本公司及其他公司之職務</div>
          <ul>
            <li>資通電腦（股）公司董事長兼執行長</li>
            <li>艾加科技（股）公司董事</li>
            <li>會通資訊（股）公司董事</li>
            <li>浩鑫（股）公司監察人</li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <img class="img-fluid" loading="lazy" width="200" height="200" src="/img/about/profile/s-2.png" alt="林聖懿總經理">
          <div class="h5">總經理 林聖懿</div>
          <div class="color-orange">主要經（學）歷</div>
          <ul>
            <li>中央大學大氣物理系</li>
          </ul>
          <div class="color-orange">目前兼任本公司及其他公司之職務</div>
          <ul>
            <li>資通電腦（股）公司總經理</li>
            <li>會通資訊（股）公司董事長</li>
            <li>艾加科技（股）公司董事長</li>
            <li>倍力資訊（股）公司董事</li>
            <li>浩鑫（股）公司董事-法人代表</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type" : "Organization",
"name" : "資通電腦股份有限公司",
"logo": "https://www.ares.com.tw/img/ares.png",
"address" : "台北市中山區中山北路二段111號3樓",
"url":"https://www.ares.com.tw/profile/",
"email" : "jenny@ares.com.tw",
"founder" : "余宏揚",
"foundingDate" : "1980-12-03",
"telephone" : "+886-2-25221351",
"faxNumber" : "+886-2-25601735",
"sameAs" : [
"https://www.facebook.com/AresInternational",
"https://www.youtube.com/user/AresTaiwan"
],
"contactPoint" : [{
  "@type" : "ContactPoint",
  "telephone" : "+886-2-25221351",
  "email" : "jenny@ares.com.tw",
  "url" : "https://www.ares.com.tw/products/consult/",
  "contactType" : "customer service"
  }]
}
</script>
</body>
</html>

