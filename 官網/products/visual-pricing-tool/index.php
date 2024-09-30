<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='視覺化圖形工具，金融商品風控、評價更簡單 - 資通電腦';
$page['description']='只需畫出報酬形態即得到商品評價結果，讓工作流程化繁為簡，並縮短 50% 以上金融商品設計與上架時間，金融商品風險管理就是這麼簡單！';
$page['canonical']='https://www.ares.com.tw/products/visual-pricing-tool/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/css/product-kyc.css?2');
// $page['ogimage']='https://www.ares.com.tw/img/product/kyc-cloud/cover-洗錢防制該怎麼做.jpg';
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">視覺化圖形工具</span></a>
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
          <img width="300" height="300" loading="lazy" src="/img/product/visual-pricing-tool/top-icon.png" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline">金融衍生性商品風控、評價更簡單</h1>
          <p>資通電腦視覺化圖形工具，只需畫出報酬形態即得到商品評價結果，讓工作流程化繁為簡，縮短 50% 以上金融商品設計與上架時間，做好金融商品風險管理就是如此的簡單！</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">系統提供哪些功能？</h2><hr>
      <ul class="row">
        <li class="col-6 col-md-3 text-center">
          <div class="circle-icon shadow-none bg-info d-none d-md-inline-block">
            <img src="/img/product/nuntio/fuction-6.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <h3 class="color-blue">設定商品參數</h3>
          <p class="text-left">想評價怎樣的商品？選擇權、選擇權策略還是TRF，先輸入商品的基本參數，與結算的商品時程</p>
        </li>
        <li class="col-6 col-md-3 text-center">
          <div class="circle-icon shadow-none bg-info d-none d-md-inline-block">
            <img src="/img/product/nuntio/fuction-5.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <h3 class="color-blue">獲取市場資訊</h3>
          <p class="text-left">評價所需要的市場資訊可透過指定的日期查詢，亦可直接匯入市場資訊源</p>
        </li>        
        <li class="col-6 col-md-3 text-center">
          <div class="circle-icon shadow-none bg-info d-none d-md-inline-block">
            <img src="/img/product/nuntio/fuction-1.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <h3 class="color-blue">繪製損益情境</h3>
          <p class="text-left">報酬情境就是損益的發生的條件，透過視覺化的方式，直覺的繪製，不再需要記憶特定的語法</p>
        </li>        
        <li class="col-6 col-md-3 text-center">
          <div class="circle-icon shadow-none bg-info d-none d-md-inline-block">
            <img src="/img/product/nuntio/fuction-2.svg" loading="lazy" width="100" height="100" alt="*" class="img-fluid">
          </div>
          <h3 class="color-blue">取得評價結果</h3>
          <p class="text-left">都完成了嗎？馬上點擊「模擬」，立即獲得評價結果</p>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-black color-white bg-fixed bg-lazyload"  data-image="/img/product/visual-pricing-tool/header.jpg">
    <div class="container py-5">
      <div class="row justify-content-between">
        <div class="col-12 col-md-5">
          <h2 class="text-center">設定商品參數</h2><hr class="bg-white">
          <p>本工具提供基本的匯率選擇權，選擇權策略與目標可贖回遠期契約（Target Redemption Forward；TRF）或是選擇權組合的任意商品僅僅需要輸入商品的本金，結算的商品時程，便完成輸入。</p>
        </div>
        <div class="col-12 col-md-5">
          <h2 class="text-center">獲取市場資訊</h2><hr class="bg-white">
          <p>根據產品參數提供的幣別對，查詢匯率、利率與波動度。</p>
          <p>您想要的資料不在裡面嗎？不必擔心，只要拖曳檔案到匯入框內，即可上傳您由資訊源取得的市場資訊。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5">
          <h2 class="underline">繪製損益情境</h2>
          <p>僅需點擊繪圖區域即可畫出損益型態的圖形，並自動拆解為對應的選擇權。修改對應的選擇權表格，亦可更新圖形。</p><br><br>
          <h2 class="underline">取得模擬結果</h2>
          <p>完成一切設定，點選 Simulate 按鈕，立即得到評價結果。還想進一步設定的話，請點選模擬參數設定。</p>
        </div>
        <div class="col-12 col-md-7">
          <a href="/img/product/visual-pricing-tool/plotDemo.gif" data-fancybox><img class="img-fluid" loading="lazy" width="1520" height="832" src="/img/product/visual-pricing-tool/plotDemo.gif" alt="視覺化圖形工具模擬情境"></a>
          <div class="text-right"><small>點擊繪圖區域繪出損益型態（點擊放大）</small></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">評價結果</h2><hr>
    <div class="container">
      <ul class="row">
        <li class="col-12 col-md-6 pb-5">
          <h3 class="text-center">模擬路徑</h3><hr class="mb-2">
          <a href="/img/product/visual-pricing-tool/SpotPrices.jpg" data-fancybox><img class="img-fluid" loading="lazy" width="1124" height="442" src="/img/product/visual-pricing-tool/SpotPrices.jpg" alt="模擬路徑"></a>
        </li>
        <li class="col-12 col-md-6 pb-5">
          <h3 class="text-center">結算日路徑</h3><hr class="mb-2">
          <a data-fancybox href="/img/product/visual-pricing-tool/FixingRates.jpg"><img class="img-fluid" loading="lazy" width="1124" height="442" src="/img/product/visual-pricing-tool/FixingRates.jpg" alt="結算日路徑"></a>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">產品效益</h2><hr>
    <div class="container">
      <ul class="row">
        <li class="col-12 col-md-4">
          <h3 class="color-blue">多樣</h3>
          <ul class="disc">
            <li>KYP（Know Your Product）：充分了解新種商品定價與風險樣貌。</li>
          </ul>
        </li>
        <li class="col-12 col-md-4">
          <h3 class="color-blue">快速</h3>
          <ul class="disc">
            <li>直覺式畫圖及參數操作，無需再另外學習特別工具語法。</li>
            <li>縮短金融商品開發上架銷售流程。</li>
          </ul>
        </li>
        <li class="col-12 col-md-4">
          <h3 class="color-blue">有效</h3>
          <ul class="disc">
            <li>可重複編輯商品範本，快速支援 TMU 商品製作推廣。</li>
            <li>型態繪製及產生拆解邏輯，自動整入交易系統，產出商品契約書。</li>
          </ul>
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
var sectionLi = [].slice.call(document.querySelectorAll("section li"));
if ("IntersectionObserver" in window) {
  var sectionLiObserver = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var showLi = entry.target;
        showLi.classList.add('show2right');
        sectionLiObserver.unobserve(showLi);
      }
    });
  });

  sectionLi.forEach(function(showLi) {
    sectionLiObserver.observe(showLi);
  });
}
</script>
</body>
</html>

