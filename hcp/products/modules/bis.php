<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR系統結合BI商業智慧,提供企業營運數據分析';
$page['description'] = 'HCP人資系統可與 Analyzer 商業智慧結合，提供人事管理面的數據收集與分析，以視覺化的分析圖呈現，能協助使用者完成貢獻度分析、強度分析、時間數列分析、比重分析等工作。';
$canonical='https://hcp.ares.com.tw/products/modules/bis';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/bis'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='獨立模組';
$breadcrumb_text='商業智慧系統';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_other.php');
?>
    <section class="bgp-r bgp-b bgs-cover bg-lazyload" data-image="/img/products/modules/performance-bg.png">
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">商業智慧系統（BIS）</h1>
            <p>HCP 與 Analyzer 商業智慧軟體結合，打造屬於 HR 人員的商業智慧系統（Business Intelligence System；BIS）。透過 25 種維度與 20 種量值多元分析隨意拖曳的組合分析報表，以及各種視覺化圖形統計分析工具；30 秒即可快速拖拉出分析報表，支援行動載具，協助人資及 IT 人員輕鬆產出報表資訊。</p>
            <p>主管能隨時進入 BIS 系統查看企業內各項指標及各部門人力配置狀況，系統提供 58 個 KPI 指標，透過 Workforce Competence 職能分析可預測各部門如要達標需要招募何種人才及下一階段教育訓練的重點。藉由商業智慧系統分析組織能力，提供企業更即時有價值的營運數據，強化企業競爭力！</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <br>
            <div class="swiper-outer">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report.png" data-fancybox="" aria-label="圖形化報表">
                      <img class="img-fluid" src="/img/products/modules/bis/bis-report.png" alt="可透過多種維度與量值多元分析隨意拖曳組合分析報表">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-2.png" data-fancybox="" aria-label="圖形化報表">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-2.png" alt="內建多種視覺化圖形滿足使用者多樣化統計分析需求">
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="lap"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="d-none"></section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">如何運用商業智慧系統讓企業快速獲取有價值的人事營運數據？</h2>
        <hr>
        <div class="row">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">透過維度與量值，隨意拖曳組合分析人事報表</h3>
                  <p>內建至少 25 種維度（Dimension）及 20 種量值（Measure），維度包含人員資料、廠區資料、薪資項目、加班費資料等，量值則有工時、成本、加班費、薪資金額等，藉由靈活拖曳操作，HR 不需透過資訊人員撰寫程式，就可以自行產製分析報表。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="swiper-outer">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-3.png" data-fancybox="">
                      <img class="img-fluid" src="/img/products/modules/bis/bis-report-3.png" alt="HR 透過不同維度與量值設定，就可自行產製分析報表">
                      <figcaption>
                        <h3 class="main-color h4">透過維度與量值，隨意拖曳組合分析人事報表</h3>
                        <p>內建至少 25 種維度（Dimension）及 20 種量值（Measure），維度包含人員資料、廠區資料、薪資項目、加班費資料等，量值則有工時、成本、加班費、薪資金額等，藉由靈活拖曳操作，HR 不需透過資訊人員撰寫程式，就可以自行產製分析報表。</p>
                      </figcaption>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-4.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-4.png" alt="樞紐分析表可呈現各據點營業額、營業成本、員工數、人均產值及成本">
                      <figcaption>
                         <h3 class="main-color h4">迅速進行營業據點人力成本分析</h3>
                        <p>分析子公司或據點營業人事情況，包含人數、人均產值、人均成本、營業額、營業成本…等。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-5.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-5.png" alt="樞紐分析表可呈現子公司及各部門人員薪資費用分析">
                      <figcaption>
                         <h3 class="main-color h4">提供各式人員薪資費用相關分析</h3>
                         <p>包含員工人數、固定薪資、加班費、加班時數…等。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-6.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-6.png" alt="透過樞紐分析及視覺化圖形呈現公司營運績效">
                      <figcaption>
                         <h3 class="main-color h4">圖像化的薪資／績效佔比，協助人事與營業策略調整</h3>
                         <p>透過樞紐分析及視覺化圖形，公司營運績效一目了然。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-7.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-7.png" alt="提供各區域人均產值、績效及淨利達成率分析">
                      <figcaption>
                         <h3 class="main-color h4">提供地區人均產值、地區績效／淨利達成率</h3>
                         <p>瞭解成員目標績效與實際績效達成率。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-8.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-8.png" alt="各營運單位人事扣薪假等出缺勤統計">
                      <figcaption>
                         <h3 class="main-color h4">人事扣薪假等出缺勤相關統計</h3>
                         <p>各營運單位的請休假情況及出勤時數。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="lap"></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row flex-md-row-reverse">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">人員報到率分析</h3>
                  <p>新進人員報到率分析。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="swiper-outer">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-9.png" data-fancybox="">
                      <img class="img-fluid" src="/img/products/modules/bis/bis-report-9.png" alt="針對各廠區觀察每年度新進人員及在職人員比例">
                      <figcaption>
                        <h3 class="main-color h4">人員報到率分析</h3>
                        <p>新進人員報到率分析。</p>
                      </figcaption>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-10.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-10.png" alt="包含人員在職、離職比例分析">
                      <figcaption>
                        <h3 class="main-color h4">人員流動率分析</h3>
                        <p>人員在職、離職比例分析。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-11.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-11.png" alt="掌握各營運單位離職人數、離職率等資訊">
                      <figcaption>
                        <h3 class="main-color h4">離職率分析</h3>
                        <p>各營運單位離職率分析。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-12.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-12.png" alt="針對各營運單位進行離職原因分析">
                      <figcaption>
                        <h3 class="main-color h4">廠區離職原因分析</h3>
                        <p>各營運單位離職原因分析。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <!-- <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-13.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-13.png" alt="員工績效達成情況">
                      <figcaption>
                        <h3 class="main-color h4">各區員工績效達成情況</h3>
                        <p>包含營收數字、目標數字及績效達成率。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure> -->
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-14.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-14.png" alt="比較各區員工績效達成情況">
                      <figcaption>
                        <h3 class="main-color h4">營收與費用分析</h3>
                        <p>包含營收數字、交際費用及交際費用佔比。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="lap"></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <ul class="col-12 col-sm-12 col-md-6">
            <li>
              <ol class="disc">
                <li>
                  <h3 class="main-color h4">營收與淨利分析</h3>
                  <p>以顏色清楚標示各分公司營收與利潤分析。</p>
                </li>
              </ol>
            </li>
          </ul>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="swiper-outer">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-15.png" data-fancybox="">
                      <img class="img-fluid" src="/img/products/modules/bis/bis-report-15.png" alt="以顏色清楚標示各分公司營收進度">
                      <figcaption>
                        <h3 class="main-color h4">營收與淨利分析</h3>
                        <p>以顏色清楚標示各分公司營收與利潤分析。</p>
                      </figcaption>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-16.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-16.png" alt="需要分析的項目可另外製成人事分析圖表">
                      <figcaption>
                        <h3 class="main-color h4">人事報表產製</h3>
                        <p>將需要分析的項目製成分析報表。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-17.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-17.png" alt="自訂顏色漸層標示，區隔報表重點">
                      <figcaption>
                        <h3 class="main-color h4">顏色漸層區隔</h3>
                        <p>自訂顏色漸層標示，報表重點一目了然。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-18.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-18.png" alt="匯出 Excel">
                      <figcaption>
                        <h3 class="main-color h4">匯出 Excel 報表</h3>
                        <p>將報表匯出存入檔案。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                  <figure class="swiper-slide">
                    <a href="/img/products/modules/bis/bis-report-19.png" data-fancybox="">
                      <img class="img-fluid swiper-lazy" data-src="/img/products/modules/bis/bis-report-19.png" alt="可將直接透過郵件寄出">
                      <figcaption>
                        <h3 class="main-color h4">郵件寄出報表</h3>
                        <p>直接將報表透過郵件寄出。</p>
                      </figcaption>
                      <div class="swiper-lazy-preloader"></div>
                    </a>
                  </figure>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="lap"></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '整合商業智慧，HCP 人力資產分析好智慧',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-05-argoerp/hcp'
  )
  ,array(
    'text' => '經理人做好「一分鐘管理」最好的協助工具',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-04-bi/it'
  )
  ,array(
    'text' => '商業智慧分析給你超乎想像的價值',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-04-bi/products-1'
  )
  ,array(
    'text' => '用商業智慧打造雙贏策略',
    'url' => 'https://marketing.ares.com.tw/newsletter/2014-04-bi/focus'
  )
  ,array(
    'text' => '人力資源的轉變：商務智能系統',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-05/hrms'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/bis.js" defer></script>
</body>
</html>