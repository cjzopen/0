<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='檔案加密軟體推薦，守護企業資安';
$page['description']='檔案加密軟體 ARES PP 協助企業保護內部與外發檔案，存檔即加密，不慎外洩也無法開啟，做到滴水不漏的資安防護，杜絕勒索威脅！';
$canonical='https://ares-pp.ares.com.tw';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','//40th.ares.com.tw/lib/fancybox3/jquery.fancybox.min.css','/public/css/home.css');
$page['css']=array('/lib/swiper10/style.css','/public/css/index.css');
$hreflang='https://ares-pp.ares.com.tw/en/';
require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [{
    "@type": "Organization",
    "@id": "https://www.ares.com.tw/#organization",
    "name":"資通電腦股份有限公司",
    "alternateName":"資通電腦",
    "url": "https://www.ares.com.tw/",
    "sameAs": ["https://www.facebook.com/AresInternational", "https://www.youtube.com/@AresTaiwan"],
    "logo": {
      "@type": "ImageObject",
      "@id": "https://www.ares.com.tw/#logo",
      "url": "https://www.ares.com.tw/img/ares-logo-for-google.png",
      "caption": "資通電腦"
    },
    "image": {
      "@id": "https://www.ares.com.tw/#logo"
    }
  }, {
    "@type": "WebSite",
    "@id": "https://ares-pp.ares.com.tw/#website",
    "url": "https://ares-pp.ares.com.tw/",
    "name": "ARES PP 隱私保鑣",
    "publisher": {
      "@id": "https://www.ares.com.tw/#organization"
    },
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://ares-pp.ares.com.tw/search/?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }, {
    "@type": "WebPage",
    "@id": "https://ares-pp.ares.com.tw/#webpage",
    "url": "https://ares-pp.ares.com.tw/",
    "inLanguage": "zh-TW",
    "name": "<?= $page['title'] ?> | 資通電腦隱私保鑣",
    "isPartOf": {
      "@id": "https://ares-pp.ares.com.tw/#website"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "https://ares-pp.ares.com.tw/#primaryimage",
      "url": "https://ares-pp.ares.com.tw/public/img/arespp-logo.svg",
      "caption": ""
    },
    "primaryImageOfPage": {
      "@id": "hhttps://ares-pp.ares.com.tw/#primaryimage"
    },
    "description": "<?= $page['description'] ?>"
  }]
}
</script>
<div class="all" id="home">
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php'); ?>
<!-- slider =============================================================================== -->
  <div class="swiper" id="banner-slider">
    <div class="swiper-wrapper">
<?php
$banner_img=array(
  array(
    'link' => 'https://marketing.ares.com.tw/newsletter/2024-05-cybersecurity/',
    'img' => '//www.ares.com.tw/img/banner/202405-banner-1440.jpg',
    'img720' => '//www.ares.com.tw/img/banner/202405-banner-720.jpg',
    'alt' => '企業資安法解決方案'
  ),
  array(
    'link' => 'https://edm.ares.com.tw/dm/202404-arespp/',
    'img' => '/public/img/slider/banner-1440.jpg',
    'img720' => '/public/img/slider/banner-720.jpg',
    'alt' => '保護生技醫療機密'
  ),
  array(
    'link' => '#',
    'img' => '/public/img/slider/能量登錄-ARESPP-1440.jpg',
    'img720' => '/public/img/slider/能量登錄-ARESPP-720.jpg',
    'alt' => '能量登錄'
  ),
);
foreach($banner_img as $slide){
  echo '<div class="swiper-slide">
        <a href="'.$slide['link'].'">
          <picture>
            <source srcset="'.$slide['img720'].'" media="(max-width: 721px)">
            <img class="img-fluid" loading="lazy" width="2560" height="710" src="'.$slide['img'].'" alt="'.$slide['alt'].'">
          </picture>
        </a>
      </div>';
}
?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination banner-pagination"></div>
  </div>
  <main>
    <section id="function" class="bg-blue">
      <div class="container">
      <h1 class="text-center mb-0">檔案加密功能最彈性，滿足各產業資料保護</h1>
      <h2 class="text-center mb-5 main-color h4">全面控管檔案安全，讓對的人在對的地方開啟文件！</h2>
      <div class="grid justify-content-center">
        <div class="h-100 p-2">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="120" height="120" src="/public/img/home/drm-1.svg" alt="*">
          </div>
          <h3 class="text-center mb-2 main-color">無感加密</h3>
          <ul class="disc">
            <li>資料存檔即加密</li>
            <li>不改變操作習慣</li>
            <li>銀行級加密技術</li>
            <li>支援伺服器／本機加密</li>
          </ul>
        </div>
        <div class="h-100 p-2">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="120" height="120" src="/public/img/home/drm-2.svg" alt="*">
          </div>
          <h3 class="text-center mb-2 main-color">全方位視覺化稽核</h3>
          <ul class="disc">
            <li>地理軌跡：檔案開啟位置地圖化</li>
            <li>行為軌跡：紀錄任何修改痕跡</li>
            <li>影像軌跡：偵測是否有相機偷拍</li>
          </ul>
        </div>
        <div class="h-100 p-2">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="120" height="120" src="/public/img/home/drm-3.svg" alt="*">
          </div>
          <h3 class="text-center mb-2 main-color">安心對外共享</h3>
          <ul class="disc">
            <li>限制文件外發與否</li>
            <li>管控列印權限</li>
            <li>文件召回</li>
          </ul>
        </div>
        <div class="h-100 p-2">
          <div class="text-center">
            <img class="img-fluid" loading="lazy" width="120" height="120" src="/public/img/home/drm-4.svg" alt="*">
          </div>
          <h3 class="text-center mb-2 main-color">全路徑加密保護</h3>
          <ul class="disc">
            <li>本機與網路磁碟等路徑皆可加密</li>
            <li>自訂義是否加密</li>
            <li>涵蓋最多種檔案類型</li>
            <li>免額外費用</li>
          </ul>
        </div>
      </div>
      </div>
      <div class="container pt-5 mt-md-5">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <h2 class="mb-3">台灣經濟部資安自主產品認定審核</h2>
            <p><a class="main-color" href="https://www.ares.com.tw/events/information-security-government-certificate-2022" rel="noopener noreferrer" target="_blank">獲工業局資安認證</a>，提供企業研發、製程、設計等機密電子文件全面性的資安防護，並擁有以下優勢：</p>
            <ul class="d-flex flex-wrap check no-gutters">
              <li class="col-12 col-sm-6 col-lg-6">100% 台灣研發</li>
              <li class="col-12 col-sm-6 col-lg-6">跨裝置、支援各種平台</li>
              <li class="col-12 col-sm-6 col-lg-6">不須安裝 Agent 也能使用</li>
              <li class="col-12 col-sm-6 col-lg-6">隱性浮水印強化版權識別</li>
              <li class="col-12 col-sm-6 col-lg-6">動態驗證</li>
              <li class="col-12 col-sm-6 col-lg-6">協助達成 ISO 27001 資安認證</li>
            </ul>
            <a class="btn btn-blue my-3" href="/about/">認識【隱私保鑣】</a>
          </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "【資料加密快問快答】哪些企業需要資料加密？如何保護外發文件？",
  "description": "企業內部研發文件、製程機密該怎麼保護？為什麼不建議使用免費加密軟體？ARES PP 資料加密小撇步一次告訴你！",
  "thumbnailUrl": [
    "https://ares-pp.ares.com.tw/public/img/home/cover.jpg"
   ],
  "duration": "PT1M17S",
  "uploadDate": "2023-12-12T10:00:00+08:00",
  "contentUrl": "https://www.youtube.com/watch?v=gWLMbLK0fww",
  "embedUrl": "https://ares-pp.ares.com.tw/"
}
</script>
          <div class="col-12 col-sm-6 col-lg-6">
            <iframe style="max-width:100%;" width="560" height="315" src="https://www.youtube.com/embed/gWLMbLK0fww?si=U6dGp1WQUMXCx4--" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <section id="number">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 my-4 col-md-4">
            <div class="h1 main-color">100%</div>
            <div>台灣研發</div>
          </div>
          <div class="col-12 my-4 col-md-4">
            <div class="h1 main-color">150,000,000<span>+</span>份</div>
            <div>文件已被安全保護</div>
          </div>
          <div class="col-12 my-4 col-md-4">
            <div class="h1 main-color">1,000<span>+</span>種</div>
            <div>支援的檔案格式</div>
          </div>
        </div>
      </div>
    </section>
    <section id="case">
      <h2 class="text-center">聽聽客戶怎麼說</h2>
      <div class="container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="p-3 border fff-bg mx-auto case-box">
                <div>
                  <img class="img-fluid" loading="lazy" width="280" height="180" src="/public/img/home/TAKISAWA.jpg" alt="台灣瀧澤科技">
                </div>
                <strong class="my-2 d-block">百年工具機大廠 - <span class="main-color">台灣瀧澤科技</span></strong>
                <p>「相較於市面上同類型的資安產品，資通電腦的 ARES PP 功能齊全、價格十分具有競爭力，且有地理追蹤功能，故選擇 ARES PP 提升企業系統加密效率與安全性。」</p>
                <div class="text-right">
                  <a href="https://www.ares.com.tw/events/TAKISAWA-introduce-ARESPP" target="_blank" rel="noopener noreferrer" class="main-color">&raquo; 查看文章</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-3 border fff-bg mx-auto case-box">
                <div>
                  <img class="img-fluid" loading="lazy" width="280" height="180" src="/public/img/home/RIKEN.jpg" alt="理研工業">
                </div>
                <strong class="my-2 d-block">汽車零件製造商 - <span class="main-color">理研工業</span></strong>
                <p>台灣理研管理部陳水源經理表示：「ARES PP 可以對所有文件、檔案進行分級與管制，並依職等與所屬群組賦予不同權限，且詳實記錄所有使用程序的軌跡資料，方便日後查驗、舉證。」</p>
                <div class="text-right">
                  <a href="https://www.ares.com.tw/events/ARESPP-RIKEN-information-security" target="_blank" rel="noopener noreferrer" class="main-color">&raquo; 查看文章</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-3 border fff-bg mx-auto case-box">
                <div>
                  <img class="img-fluid" loading="lazy" width="280" height="180" src="/public/img/home/TXC.jpg" alt="台灣晶技">
                </div>
                <strong class="my-2 d-block">全球第一頻率元件製造商 - <span class="main-color">台灣晶技</span></strong>
                <p>「讓我們最有感的就是 ARES PP 支援 Office 版本升級，加密軟體照常使用沒問題。以往別的加密軟體遇到應用程式升級，都會無法正常加密，嚴重影響作業流程。」</p>
                <div class="text-right">
                  <a href="https://www.ares.com.tw/events/arespp-user-story-txc" target="_blank" rel="noopener noreferrer" class="main-color">&raquo; 查看文章</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-3 border fff-bg mx-auto case-box">
                <div>
                  <img class="img-fluid" loading="lazy" width="280" height="180" src="/public/img/home/usun.jpg" alt="陽程科技">
                </div>
                <strong class="my-2 d-block">上市櫃機電廠商 - <span class="main-color">陽程科技</span></strong>
                <p>「ARES PP 滿足資安法、營業秘密保護法，並協助陽程科技符合國際大廠客戶的稽核要求，達成資安稽核零缺失的目標！」</p>
                <div class="text-right">
                  <a href="https://www.ares.com.tw/events/arespp-user-story-usun" target="_blank" rel="noopener noreferrer" class="main-color">&raquo; 查看文章</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-3 border fff-bg mx-auto case-box">
                <div>
                  <img class="img-fluid" loading="lazy" width="280" height="180" src="/public/img/home/IC.jpg" alt="*">
                </div>
                <strong class="my-2 d-block"><span class="main-color">知名全球 IC 封測廠</span></strong>
                <p>「完善保護半導體產製前的大量電路設計圖稿、IC 設計係數與製程資料。ARES PP 可分層授予權限、詳實稽核紀錄，保障對外流通的業務資料及文件安全。」</p>
                <div class="text-right">
                  <a href="https://www.ares.com.tw/events/arespp-userstory-ic-p" target="_blank" rel="noopener noreferrer" class="main-color">&raquo; 查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="swiper-pagination"></div> -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<style>
  .case-box{max-width: 312px;}
</style>
<script src="/lib/swiper10/script.js" defer></script>
<script src="/public/js/sda.js" defer></script>
<!-- <script src="//40th.ares.com.tw/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
<script>
window.addEventListener('load',function(){
  const swiper = new Swiper('#banner-slider', {
    pagination: {
      el: '.banner-pagination',
      clickable: true,
    },
    loop: true
  });
  const cases = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 12,
    breakpoints: {
      767: {
        slidesPerView: 2,
        spaceBetween: 24
      },
      1120: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
if(isIE11){
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = '/lib/picturefill.min.js';
  document.getElementsByTagName('head')[0].appendChild(script);
}
</script>
</body>
</html>