<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='公司簡介 | 資通電腦';
$page['description']='臺灣首家上市櫃軟體公司，提供資訊化產品與解決方案。服務對象包含金融、政府和工商企業等，除為 SWIFT 認證夥伴、Oracle 台灣專業代理商之外，也榮獲國際研究機構 Gartner 台灣唯一建議參考的製造執行系統廠商、市占率最高的銀行海外分行核心系統與外匯系統供應商。';
$page['canonical']='https://www.ares.com.tw/profile/';
$page['css']=array('/css/vision.css?2007');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$breadcrumb='公司簡介';
include($_SERVER['DOCUMENT_ROOT'].'/template/about-banner.php');
?>
  <section>
    <h1 class="text-center h2">資訊系統軟體領導廠商</h1>
    <hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <p>資通電腦於 1980 年成立，2001 年在台灣證交所掛牌上市，是臺灣第一家上市櫃軟體公司，累積 <?= $age;?> 年實務經驗。資通電腦提供軟體產品、委外及系統整合專業服務，主要服務對象包含金融、政府和工商企業等，贏得超過 10,000 家企業客戶的支持肯定。目前在大中華區共設立台北、新竹、台中以及蘇州等據點，服務領域跨足兩岸三地及東南亞，員工約 400 人，其中台灣員工 300 人，大陸員工 60 餘人。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">國際級服務品質</h2>
    <hr>
    <div class="container">
      <p class="text-center pb-4">我們深切瞭解服務是無形的，因此，對於產品開發與服務過程皆制訂明確的作業規範，提供專業至上的服務品質。</p>
      <ul class="row">
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/iso27001.png" alt="*">
            <div class="h5 pl-2">ISO 27001 認證</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/TaiwanExcellence2018.png" alt="*">
            <div class="h5 pl-2">ciMes 製造執行系統榮獲台灣精品獎</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/swift.png" alt="*">
            <div class="h5 pl-2">環球銀行金融電信協會（SWIFT）台灣區 Partner</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/IFRS.png" alt="*">
            <div class="h5 pl-2">台灣第一家 IFRS 解決方案輔導廠商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/oracle.png" alt="*">
            <div class="h5 pl-2">Oracle 第一家台灣專業代理商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/IBM.png" alt="*">
            <div class="h5 pl-2">IBM Partner</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/Gov.png" alt="*">
            <div class="h5 pl-2">政府資訊整合、施政應用、Big Data 應用、網路行銷等，大型專案執行及推廣專業廠商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/ciMes.png" alt="*">
            <div class="h5 pl-2">台灣製造執行系統（MES）LED 產業市占第一</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/bnk.png" alt="*">
            <div class="h5 pl-2">台灣市占最高的銀行海外分行核心與外匯系統商</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInLeft">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/gartner.png" alt="*">
            <div class="h5 pl-2">國際研究機構 Gartner 台灣唯一建議參考的製造執行系統</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/Dataone.png" alt="*">
            <div class="h5 pl-2">攜手泰國軟體龍頭 DataOne Asia 以 ArgoERP 進軍東南亞市場</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/iso.png" alt="*">
            <div class="h5 pl-2">曾獲 ISO9001 國際品質認證</div>
          </div>
        </li>
        <li class="col-12 col-md-6 mb-3">
          <div class="d-flex align-items-center wow fadeInRight">
            <img loading="lazy" width="80" height="80" class="flex-shrink-0 rounded-circle" src="/img/about/vision/cmmi3.png" alt="*">
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
    <div class="container" id="accordionExample">
      <div class="row">
        <div class="col-12 col-md-6 pr-md-5">
          <div class="row text-center pr-md-5">
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-orange" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
              <img class="position-absolute" src="/img/Business-icon.png" alt="*">
              <div class="product-type">商業服務</div>
            </button>
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-blue" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
              <img class="position-absolute" src="/img/Banking-icon.png" alt="*">
              <div class="product-type">金融服務</div>
            </button>
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-blue3" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
              <img class="position-absolute" src="/img/security-icon.png" alt="*">
              <div class="product-type">資訊安全</div>
            </button>
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-primary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
              <img class="position-absolute" src="/img/about/profile/consultant-icon.svg" alt="*">
              <div class="product-type">系統整合</div>
            </button>
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-dark" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
              <img class="position-absolute" src="/img/about/profile/outsourcing-icon.svg" alt="*">
              <div class="product-type">委外服務</div>
            </button>
            <button class="col-4 btn btn-block color-white m-0 py-3 rounded-0 position-relative overflow-hidden bg-info" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
              <img class="position-absolute" src="/img/about/profile/Gov-icon.svg" alt="*">
              <div class="product-type">政府專案</div>
            </button>
          </div>
        </div>
        <!-- <div class="col-12 col-md-1"></div> -->
        <div class="col-12 col-md-6" id="show-list">
          <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
            <div class="">
              <div class="h4 color-orange">商業服務</div>
              <ul class="disc">
                <li><a class="border-bottom border-info" href="https://cimes.ares.com.tw/">ciMes 製造執行系統</a></li>
                <li><a class="border-bottom border-info" href="https://hcp.ares.com.tw/">HCP 人力資產規劃系統</a></li>
                <li><a class="border-bottom border-info" href="/products/egui/">eGUI 電子發票管理系統</a></li>
                <li><a class="border-bottom border-info" href="/products/gv/">GV 統一發票管理系統</a></li>
                <li><a class="border-bottom border-info" href="/products/Local-Template/">NM 票據 / GIB 保稅 / 十號公報</a></li>
                <li><a class="border-bottom border-info" href="https://oracle.ares.com.tw/">ORACLE 顧問諮詢服務</a></li>
                <li><a class="border-bottom border-info" href="/products/gd-crm/">GD-CRM 客戶關係管理系統</a></li>
              </ul>
            </div>
          </div>
          <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
            <div class="">
              <div class="h4 color-blue">金融服務</div>
              <ul class="disc">
                <li><a class="border-bottom border-info" href="/products/afeis/">國內外匯電腦整合系統</a></li>
                <li><a class="border-bottom border-info" href="/products/earesbank/">海外分行核心系統</a></li>
                <li><a class="border-bottom border-info" href="/products/cross-pricing/">衍生性金融商品評價系統</a></li>
                <li><a class="border-bottom border-info" href="/products/nuntio/">資通法規報表申報平台</a></li>
                <li><a class="border-bottom border-info" href="/products/treasury/">財務交易系統</a></li>
                <li><a class="border-bottom border-info" href="/products/portfolio/">投資組合管理系統</a></li>
                <li><a class="border-bottom border-info" href="/products/aml/">洗錢防制解決方案</a></li>
                <li><a class="border-bottom border-info" href="/products/visual-pricing-tool/">視覺化圖型工具</a></li>
                <li><a class="border-bottom border-info" href="/products/ISDA-SIMM/">ISDA SIMM 原始保證金解決方案</a></li>
              </ul>
            </div>
          </div>
          <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
            <div class="">
              <div class="h4 color-blue3">資訊安全</div>
              <ul class="disc">
                <li><a class="border-bottom border-info" href="https://pki.ares.com.tw/">uPKI 安控解決方案</a></li>
                <li><a class="border-bottom border-info" href="https://ares-pp.ares.com.tw/">ARES PP 文件加密軟體</a></li>
                <li><a class="border-bottom border-info" href="/products/fortify/">Fortify 原始碼檢測工具</a></li>
                <li><a class="border-bottom border-info" href="/products/comodo/">Comodo 安全管理方案</a></li>
                <li><a class="border-bottom border-info" href="https://hcp.ares.com.tw/products/modules/usp">薪資密封袋 電子薪資條解決方案</a></li>
              </ul>
            </div>
          </div>
          <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
            <div class="">
              <div class="h4 text-primary">系統整合</div>
              <p>透過成熟的系統介接及資料移轉技術，與嚴謹的專案管理流程，搭配獲國際研究機構 Gartner 魔力象限肯定的 Fortify 原始碼檢測工具，確保系統開發流程資訊安全，能提供客戶最完善的系統開發專案規劃。</p>
              <div class="text-right pt-3">
                <a href="/services/system-development-integration/" class="btn bg-primary color-white">深入瞭解</a>
              </div>
            </div>
          </div>
          <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
            <div class="">
              <div class="h4">委外服務</div>
              <p>提供專業 IT 人力委外服務（Java / .NET / Python 技術支援與顧問諮詢服務），解決客戶在資訊系統開發與運作不同階段的人力資源需求。</p>
              <div class="text-right pt-3">
                <a href="/services/outsourcing/" class="btn bg-dark color-white">深入瞭解</a>
              </div>
            </div>
          </div>
          <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
            <div class="">
              <div class="h4 text-info">政府專案</div>
              <p>代表性專案包括公教人員退休撫卹平臺、數位學習暨終身學習護照、全球製造服務資訊整合管理解決方案輸出旗艦計畫、送子鳥資訊服務網服務推廣計畫、衛生福利部藥品查驗登記審查電子化作業平台建置……等大型政府電子化專案經驗。</p>
              <div class="text-right pt-3">
                <a href="/services/gov/" class="btn bg-info color-white">深入瞭解</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <li>會通資訊（股）公司董事</li>
            <li>艾加軟件（蘇州）股份有限公司董事</li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <img class="img-fluid" loading="lazy" width="200" height="200" src="/img/about/profile/s-2.png" alt="林聖懿總經理">
          <div class="h5">總經理 林聖懿</div>
          <div class="color-orange">主要經（學）歷</div>
          <ul>
            <li>中央大學大氣物理系</li>
            <li>台大國際企業學研究所碩士</li>
          </ul>
          <div class="color-orange">目前兼任本公司及其他公司之職務</div>
          <ul>
            <li>資通電腦（股）公司總經理</li>
            <li>會通資訊（股）公司董事長</li>
            <li>艾加軟件（蘇州）股份有限公司董事長</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer></script> -->
<script src="/js/profile.js?1" defer></script>
</body>
</html>

