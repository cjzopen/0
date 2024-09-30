<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='KYC混合雲，協助產業實現即時風險框架評級 - 資通電腦';
$page['description']='KYC混合雲系統採用 FICO Srion 定期更新名單，實現即時風險框架評級，並提供多重比對方式、風險分類計算，也可產出報表管理案件。';
$page['canonical']='https://www.ares.com.tw/products/kyc-cloud/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/css/product-kyc.css?2');
$page['ogimage']='https://www.ares.com.tw/img/product/kyc-cloud/cover-洗錢防制該怎麼做.jpg';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include (__DIR__.'/_banner.php');
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
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">KYC 混合雲</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
<style>.purple-color{color:#6667ED;}</style>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img width="350" height="347" loading="lazy" src="/img/product/kyc/kyc.png" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline">利用 KYC 混合雲預防洗錢與金融犯罪</h1>
          <p>隨著國際反洗錢監控力道越加嚴格，全球最重要的洗錢防制國際組織之一：防制洗錢金融行動工作組織（Financial Action Task Force on Money Laundering，FATF）制定 40+9 項建議等法規作為依循。台灣雖不為 FATF 會員，但仍遵從國際架構的洗錢防治規範，要求金融機構在確認客戶身分措施、婉拒建立業務關係或交易及對客戶身分持續審查等明確規範。因此，落實 KYC（Know Your Customer；認識你的客戶）客戶審查顯得格外重要！</p>
          <p>而現行企業與中小型金融機構多用人工逐筆進行 KYC 客戶審查，常消耗大量審核流程與時間，為人員帶來莫大壓力。透過資通電腦混合雲名單掃描系統進行 KYC 作業，以訂閱的價格無需建置即可使用，涵蓋參數閥值調整等服務，協助企業與金融機構審查客戶與風險評級，輕鬆建立反洗錢的第一層防護網。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">KYC 系統提供哪些功能？</h2><hr>
      <div class="row flex-md-row-reverse">
        <div class="col-12 col-md-6">
          <a data-fancybox data-options="{'autoplay' : true}" href="https://www.youtube.com/watch?v=ndwqTMHLC8w" class="video-cover"><img class="img-fluid" loading="lazy" width="1280" height="720" src="/img/product/kyc/cover-洗錢防制該怎麼做.jpg" alt="評估影片"></a>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "KYC 名單掃描：洗錢防制該怎麼做？",
  "description": "KYC 名單掃描為洗錢防制重要一環，資通電腦混合雲名單掃描系統提供單一客戶掃描、整批客戶掃描與風險評級功能，以協助確認客戶身分，並搭配友善介面，簡單操作好上手！",
  "thumbnailUrl": [
    "https://www.ares.com.tw/img/product/kyc/cover-洗錢防制該怎麼做.jpg"
   ],
  "uploadDate": "2021-04-28",
  "duration": "PT2M23S",
  "contentUrl": "https://www.youtube.com/watch?v=ndwqTMHLC8w",
  "embedUrl": "<?= $page['canonical'] ?>"
}
</script> -->
        </div>
        <div class="col-12 col-md-6">
          <ul class="decimal">
            <li>提供模糊比對算分規則與各欄位計分權重說明。</li>
            <li>針對中文特殊處理，例如企業名稱簡稱：丹東富地貿易有限公司 vs 丹東富地公司。</li>
            <li>以訂閱的價格即可使用，無需系統硬體網路建置，涵蓋名單採購與導入、維護、參數閥值調整等費用。</li>
            <li>結合全球知名商業策略系統商 FICO，定期更新名單。</li>
            <li>提供單一客戶、企業客戶與整批客戶名單掃描。</li>
            <li>提供初步命中觀察名單（EMB、PEP）、命中名單列表及詳細資訊供判斷與參考。整批客戶更提供風險框架評級供定審管理。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="blue-gradient color-white bg-lazyload" data-image="/img/product/kyc/bg.jpg">
    <div class="container text-center">
      <h2 class="text-center">誰適合使用 KYC 混合雲名單掃描系統？</h2><hr class="bg-white">
      <ul class="row justify-content-center">
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-1.svg" alt="*"></div>
          <div>銀行業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-2.svg" alt="*"></div>
          <div>證券業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-3.svg" alt="*"></div>
          <div>保險業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-4.svg" alt="*"></div>
          <div>虛擬通貨業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-5.svg" alt="*"></div>
          <div>不動產業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-6.svg" alt="*"></div>
          <div>會計服務業</div>
        </li>
        <li class="col-6 col-md-3 pb-3">
          <div class="circle-icon" aria-hidden="true"><img class="img-fluid" loading="lazy" width="60" height="60" src="/img/product/kyc/industry-7.svg" alt="*"></div>
          <div>科技製造業</div>
        </li>
      </ul>
      <p>凡應遵循洗錢防制之產業均適用</p>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="underline">KYC 混合雲名單掃描解決方案</h2>
          <p>資通電腦 KYC 混合雲名單掃描是以 FICO Siron 系統架構為掃描引擎，提供多重比對方式，協助金融機構與一般企業針對客戶資訊進行名單比對。名單種類包含：商用名單、國際制裁名單、國內負面消息名單等，不受限於制裁名單，可強化繁簡體中文的比對方式，提供風險分類計算，也可產出報表進行案件管理。</p>
          <p>透過簡易自動化流程和高效率系統軟體運算，有效提升作業效率、降低作業風險與 IT 軟硬體成本，協助各產業更靈活地進行客戶盡職調查、客戶往來交易、定審與加強審查，實現即時風險框架評級，掌握最新風險資訊，符合主管機關要求。</p>
        </div>
        <div class="col-12 col-md-6">
          <figure class="text-center">
            <a data-fancybox href="/img/product/kyc/structure.jpg"><img class="img-fluid" loading="lazy" width="1610" height="856" src="/img/product/kyc/structure.png" alt="KYC 混合雲系統架構圖">
            <figcaption>KYC 混合雲系統架構圖（點擊放大）</figcaption></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="blue-gradient">
    <div class="container">
      <div class="row flex-md-row-reverse">
        <div class="col-12 col-md-6">
          <h2 class="mb-5 underline border-white">資通電腦 KYC 提供什麼服務？</h2>
          <ul class="checklist">
            <li><a data-fancybox data-options="{'autoplay' : true}" href="https://www.youtube.com/watch?v=OGVXs8MBKZw&amp;autoplay=1">單一名單掃描 <svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a></li>
            <li><a data-fancybox href="https://www.youtube.com/watch?v=urlWaRyptVY">整批掃描與風險評級 <svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a></li>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "KYC 系統操作教學：單一客戶名單掃描",
  "description": "資通電腦混合雲名單掃描系統可針對單一客戶或企業客戶進行名單掃描比對，快速產出掃描結果，協助企業及金融機構輕鬆做好洗錢防制",
  "thumbnailUrl": [
    "https://www.ares.com.tw/img/product/kyc/cover-單一客戶名單掃描.jpg"
   ],
  "uploadDate": "2021-04-26",
  "duration": "PT1M40S",
  "contentUrl": "https://www.youtube.com/watch?v=OGVXs8MBKZw",
  "embedUrl": "<?= $page['canonical'] ?>"
}
</script> -->
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "KYC 系統操作教學：整批客戶名單掃描與風險評級",
  "description": "當想一次掃描大量客戶名單怎麼辦？資通電腦混合雲名單掃描系統提供整批客戶名單掃描，以及即時風險框架評級供定審管理，協助企業及金融機構輕鬆做好洗錢防制",
  "thumbnailUrl": [
    "https://www.ares.com.tw/img/product/kyc/cover-整批客戶掃描與風險評級.jpg"
   ],
  "uploadDate": "2021-04-26",
  "duration": "PT1M41S",
  "contentUrl": "https://www.youtube.com/watch?v=urlWaRyptVY",
  "embedUrl": "<?= $page['canonical'] ?>"
}
</script> -->
            <li>掃描演算參數諮詢</li>
            <li>風險框架評分導入</li>
            <li>案件流程管理機制擴充</li>
            <li>完整教育訓練與操作文件</li>
          </ul>
          <a href="https://www.ares.com.tw/products/siron-aml/" class="btn btn-warning">尋找系統建置 AML 洗錢防制解決方案 &raquo;</a>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block">
          <img class="img-fluid" loading="lazy" width="412" height="323" src="/img/product/kyc/services.png" alt="*">
        </div>
      </div>
    </div>
  </section>
  <section class="feature">
    <div class="container">
      <h2 class="text-center">產品特色</h2><hr>
      <div class="row flex-md-row-reverse">
        <div class="col-12 col-md-6">
          <a data-fancybox href="https://www.youtube.com/watch?v=8HdlYDNJ7c8" class="video-cover"><img class="img-fluid" loading="lazy" width="1280" height="720" src="/img/product/kyc/cover-資通電腦KYC特色.jpg" alt="FICO KYC 特色"></a>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "資通電腦KYC混合雲有什麼特色？",
  "description": "KYC 混合雲直覺化使用介面、完整掃描結果資訊、模糊比對提供明確演算規則、多樣資訊比對降低誤中率、多重因子進行風險計算，以及快速產出報表進行案件管理，有效提升作業效率，降低作業風險與 IT 成本，協助產業做好客戶審查、掌握最新風險資訊，符合主管機關要求",
  "thumbnailUrl": [
    "https://www.ares.com.tw/img/product/kyc/cover-資通電腦KYC特色.jpg"
   ],
  "uploadDate": "2021-04-26",
  "duration": "PT54S",
  "contentUrl": "https://www.youtube.com/watch?v=8HdlYDNJ7c8",
  "embedUrl": "<?= $page['canonical'] ?>"
}
</script> -->
        </div>
        <div class="col-12 col-md-6">
          <ul class="">
            <li>採用 FICO Siron 名單掃描，且定期更新名單。</li>
            <li>多重因子進行風險計算，即時風險框架評級供定審管理。</li>
            <li>模糊比對提供明確的演算規則。</li>
            <li>中文比對邏輯優化。</li>
            <li>可擴充案件管理功能。</li>
            <li>即時掃描，結果產出迅速。</li>
            <li>直覺人性化介面，提供便利的使用者操作畫面與管理機制。</li>
            <li>即使在平台作業每個帳戶皆獨立環境，只運用平台掃描，不留存資料。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">產品效益</h2><hr>
      <ul class="row justify-content-center text-center">
        <li class="col-6 col-md-4 pt-3">
          <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/product/kyc/benefit-1.svg" alt="*">
          <div>降低系統建置與維護成本</div>
        </li>
        <li class="col-6 col-md-4 pt-3">
          <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/product/kyc/benefit-2.svg" alt="*">
          <div>大幅減少人力作業時間</div>
        </li>
        <li class="col-6 col-md-4 pt-3">
          <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/product/kyc/benefit-3.svg" alt="*">
          <div>精準評估與管理客戶風險</div>
        </li>
        <li class="col-6 col-md-4 pt-3">
          <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/product/kyc/benefit-4.svg" alt="*">
          <div>避免與制裁對象或有疑慮客戶往來</div>
        </li>
        <li class="col-6 col-md-4 pt-3">
          <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/product/kyc/benefit-5.svg" alt="*">
          <div>有效協助企業 KYC 程序</div>
        </li>
      </ul>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<script>
window.addEventListener('load',function(){
  $('.feature li').prepend('<span class="before"></span>');
  $('.feature li .before').each(function(i,e){
    $(this).css('background-position-y',-24*i+'px');
  })
});
// var sectionLi = [].slice.call(document.querySelectorAll("section li"));
// if ("IntersectionObserver" in window) {
//   var sectionLiObserver = new IntersectionObserver(function(entries, observer) {
//     entries.forEach(function(entry) {
//       if (entry.isIntersecting) {
//         var showLi = entry.target;
//         showLi.classList.add('show2right');
//         sectionLiObserver.unobserve(showLi);
//       }
//     });
//   });

//   sectionLi.forEach(function(showLi) {
//     sectionLiObserver.observe(showLi);
//   });
// }
</script>
</body>
</html>

