<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['title']='ciMes製造執行系統｜台灣大廠一致推薦｜資通電腦';
$page['description']='用 ciMes 智慧控管機台，串聯生產數據，解決物料控管問題，減少閒置機台，提升稼動率，打造流暢生產線，台灣大廠一致推薦。';
// $page['css']=array('/lib/swiper3.4.1/swiper.min.css','/lib/fancybox3/jquery.fancybox.min.css','/public/css/home.css');
$page['css']=array('/lib/swiper3.4.1/swiper.min.css','/public/css/home.css?v=2');
$canonical="https://cimes.ares.com.tw/";
$hreflang = 'https://cimes.ares.com.tw/en/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
$rs=null;
$db=null;
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [{
    "@type":"Organization","@id":"https://www.ares.com.tw/#organization","name":"資通電腦股份有限公司","alternateName":"資通電腦","url":"https://www.ares.com.tw/","address":"台北市中山區中山北路二段111號3樓","email":"jenny@ares.com.tw","founder":"余宏揚","foundingDate":"1980-12-03","telephone":"02-2522-1351","faxNumber":"02-2560-1735","contactPoint":[{"@type":"ContactPoint","telephone":"+886-2-2522-1351","email":"jenny@ares.com.tw","url":"https://www.ares.com.tw/consult/","contactType":"customer service"}],"sameAs":["https://zh.wikipedia.org/wiki/資通電腦","https://www.facebook.com/AresInternational","https://www.youtube.com/@AresTaiwan","https://www.linkedin.com/company/ares-international-corporation"],"logo":{"@type":"ImageObject","@id":"https://www.ares.com.tw/#logo","url":"https://www.ares.com.tw/img/ares-logo-for-google.png","caption":"資通電腦"},"image":{"@id":"https://www.ares.com.tw/#logo"}
  }, {
    "@type": "WebSite",
    "@id": "https://cimes.ares.com.tw/#website",
    "url": "https://cimes.ares.com.tw/",
    "name": "<?= $page['title'] ?>",
    "publisher": {
      "@id": "https://www.ares.com.tw/#organization"
    },
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://cimes.ares.com.tw/search/?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }, {
    "@type": "WebPage",
    "@id": "https://cimes.ares.com.tw/#webpage",
    "url": "https://cimes.ares.com.tw/",
    "inLanguage": "zh",
    "name": "<?= $page['title'] ?>",
    "isPartOf": {
      "@id": "https://cimes.ares.com.tw/#website"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "https://cimes.ares.com.tw/#primaryimage",
      "url": "https://cimes.ares.com.tw/public/img/cimes-logo.svg",
      "caption": ""
    },
    "primaryImageOfPage": {
      "@id": "https://cimes.ares.com.tw/#primaryimage"
    },
    "description": "<?= $page['description'] ?>"
  }]
}
</script>
<div class="all" id="home">
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php'); ?>
  <div class="swiper-container swiper-banner">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="position-relative text-center">
          <picture>
            <source media="(min-width: 840px)" srcset="/public/img/slider/mes-very-large-scale-assembly-bn-1440.webp">
            <img width="1440" height="400" class="img-fluid" src="/public/img/slider/mes-very-large-scale-assembly-bn-m.webp" alt="MES">
          </picture>
          <div class="position-absolute banner-btn">
            <a href="https://edm.ares.com.tw/dm/mes-very-large-scale-assembly/" class="main-bg fff-color m-2 rounded py-3 px-5" rel="noopener noreferrer" target="_blank">瞭解更多</a>
            <a href="#consult-section" class="sub-bg fff-color m-2 rounded py-3 px-5">立即諮詢</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="position-relative text-center">
          <picture>
            <source media="(min-width: 840px)" srcset="/public/img/slider/能量登錄-cimes.webp">
            <img width="1440" height="400" class="img-fluid" loading="lazy" src="/public/img/slider/能量登錄-cimes-m.webp" alt="能量登錄">
          </picture>
          <div class="position-absolute banner-btn">
            <a href="https://www.ares.com.tw/events/it-service-government-certificate-2023" class="main-bg fff-color m-2 rounded py-3 px-5" rel="noopener noreferrer" target="_blank">瞭解更多</a>
            <a href="#consult-section" class="sub-bg fff-color m-2 rounded py-3 px-5">立即諮詢</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="position-relative text-center">
          <picture>
            <source media="(min-width: 840px)" srcset="/public/img/slider/mes-manufacturing-problem-solving-bn-1440.webp">
            <img width="1440" height="400" class="img-fluid" loading="lazy" src="/public/img/slider/mes-manufacturing-problem-solving-bn-m.webp" alt="mes manufacturing problem solving">
          </picture>
          <div class="position-absolute banner-btn">
            <a href="https://edm.ares.com.tw/dm/mes-manufacturing-problem-solving/" class="main-bg fff-color m-2 rounded py-3 px-5" rel="noopener noreferrer" target="_blank">瞭解更多</a>
            <a href="#consult-section" class="sub-bg fff-color m-2 rounded py-3 px-5">立即諮詢</a>
          </div>
        </div>
      </div>
      <!-- <div class="swiper-slide"> -->
        <!-- <a href="https://www.ares.com.tw/events/cimes-gartner-2017"> -->
          <!-- <img width="1440" height="400" class="img-fluid" loading="lazy" src="/public/img/slider/mes-gartner-2018.png" alt="Gartner 台灣唯一建議 MES 製造執行系統"> -->
          <!-- <div class="swipter-article-wrap d-flex align-items-center justify-content-center flex-wrap"> -->
            <!-- <div class="text-center fff-color"> -->
            <!-- <h2 class="swipter-article-title fff-color container mx-auto">ciMes 連續三年 <br>獲 Gartner 台灣唯一建議 MES 製造執行系統</h2> -->
            <!-- <p class="swipter-article-content">搶攻智慧工廠 3 千億美元商機<br>工業 4.0 是關鍵</p> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </a> -->
      <!-- </div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <main>
    <section class="pt-2 mt-1">
      <h1 class="text-center">ciMes 智慧控管機台，打造流暢生產線</h1><hr>
      <h2 class="text-center mt-0">MES 實現智慧工廠的核心</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <div class="text-center" aria-hidden="true">
              <img class="img-fluid" loading="lazy" width="110" height="110" src="/public/img/home/icon-1.svg" alt="*">
            </div>
            <h3 class="text-center mt-0">提升生產效率</h3>
            <ul class="disc d-inline-block text-left">
              <li>產能分配，減少閒置機台</li>
              <li>物料控管，解決缺料問題</li>
              <li>工單記錄，管理生產進度</li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <div class="text-center" aria-hidden="true">
              <img class="img-fluid" loading="lazy" width="110" height="110" src="/public/img/home/icon-2.svg" alt="*">
            </div>
            <h3 class="text-center mt-0">減少作業時間</h3>
            <ul class="disc d-inline-block text-left">
              <li>標籤條碼化，取代人員抄寫</li>
              <li>優化產能，降低產線塞車</li>
              <li>數位派工，提升人力管控</li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <div class="text-center" aria-hidden="true">
              <img class="img-fluid" loading="lazy" width="110" height="110" src="/public/img/home/icon-3.svg" alt="*">
            </div>
            <h3 class="text-center mt-0">降低成本</h3>
            <ul class="disc d-inline-block text-left">
              <li>提升稼動率，減少生產成本</li>
              <li>設備異常通知，產線不中斷</li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 text-center">
            <div class="text-center" aria-hidden="true">
              <img class="img-fluid" loading="lazy" width="110" height="110" src="/public/img/home/icon-4.svg" alt="*">
            </div>
            <h3 class="text-center mt-0">提高資訊透明度</h3>
            <ul class="disc d-inline-block text-left">
              <li>電子看板掌握生產資訊</li>
              <li>查看生產進度與機台情況</li>
              <li>整合第三方資料</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="preferred">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mt-0">MES 台灣首選資通電腦 ciMes</h2>
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <p>ciMes（Computer Integrated Manufacturing Execution System）是資通電腦所研發之 MES 軟體，經歷台灣上百家企業的歷練與磨合，是在挑選製造執行系統時的不二選擇！</p>
            <ul class="d-flex flex-wrap check no-gutters">
              <li class="col-12 col-sm-6 col-lg-6">榮獲 台灣精品獎</li>
              <li class="col-12 col-sm-6 col-lg-6">榮獲 數位發展部能量登錄認證</li>
              <li class="col-12 col-sm-6 col-lg-6">Gartner 建議台灣 MES 廠商</li>
              <li class="col-12 col-sm-6 col-lg-6">超過數百家客戶成功案例</li>
              <li class="col-12 col-sm-6 col-lg-6">兩岸 LED 產業市佔第一</li>
              <li class="col-12 col-sm-6 col-lg-6">微軟 ISV 獨立軟體開發商認證</li>
              <li class="col-12 col-sm-6 col-lg-6">打造全台首處智慧製造試營運場</li>
            </ul>
            <a class="btn btn-cimes my-2 w-100 py-3" href="/products/">產品核心模組介紹</a>
            <!-- <a class="btn btn-cimes my-3" href="https://temp.ares.com.tw/products/" role="button">產 品 介 紹</a> -->
          </div>
          <div class="col-12 col-sm-8 col-lg-6">
            <div class="ratio-box">
              <iframe id="youtube-home" width="560" height="315" loading="lazy" data-src="https://www.youtube.com/embed/ySkpF_5Dkio?si=jsQRYBGwiX8NF_65" title="資通電腦ciMes攜手台灣晶技邁向智慧製造" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "資通電腦ciMes攜手台灣晶技邁向智慧製造",
  "description": "ciMes 有經驗豐富的系統導入顧問，可協助企業在評估 MES 時，檢視各產業生產環節的真正需求。",
  "thumbnailUrl": [
    "https://i.ytimg.com/vi/ySkpF_5Dkio/maxresdefault.jpg"
   ],
  "uploadDate": "2024-06-03T14:00:00+08:00",
  "duration": "PT6M11S",
  "contentUrl": "https://www.youtube.com/watch?v=ySkpF_5Dkio",
  "embedUrl": "https://cimes.ares.com.tw/"
}
</script>
            <!-- <a href="https://www.youtube.com/watch?v=wdp3bc50tM4" id="youtube" data-fancybox><img class="img-fluid" width="618" height="348" loading="lazy" src="/public/img/video.jpg?20" alt="影片：資通MES系統 榮獲2018精品獎"></a> -->
          </div>
        </div>
      </div>
    </section>
    <section class="position-relative" id="best-practices">
      <h2 class="text-center">企業大廠一致推薦 ciMes</h2><hr>
      <div class="swiper-container swiper-success-case">
        <div class="swiper-wrapper">
        <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="792" height="528" src="/public/img/home/台灣晶技合照.jpg" alt="台灣晶技導入mes">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">石英元件龍頭 - <span class="main-color">台灣晶技</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">生產過程實時追蹤</strong>
                        <p class="opacity-7 mb-0">提高 95% 以上可視性。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">搭配設備自動化</strong>
                        <p class="opacity-7 mb-0">降低 40% 以上的生產人力、縮短超過 50% 生產週期時間。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">自動生成數據分析報表</strong>
                        <p class="opacity-7 mb-0">節省超過 10% 人工資料整理與分析時間。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">優化排程</strong>
                        <p class="opacity-7 mb-0">提升達交率、生產力與產品良率，並降低 30% 以上的製造成本。</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>MES 就好像我們的心臟，或我們人體的命脈，透過系統就可全面掌握工廠發生的狀況。</em></p>
                    <p class="text-right">/ 台灣晶技管理中心副總經理 陳秋霖</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-user-story-txc" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="426" src="/public/img/home/jentech-and-cimes.jpg" alt="健策精密導入 ciMes">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">散熱指標廠 - <span class="main-color">健策精密</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">簡化 ERP 批次作業程序</strong>
                        <p class="opacity-7 mb-0">善用 MES 履歷追溯，簡化 ERP 入料到出料批次作業的程序。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">防呆卡控</strong>
                        <p class="opacity-7 mb-0">運用 MES 蒐集檢查量測數據，達到防呆卡控效益。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">作業流程的改善</strong>
                        <p class="opacity-7 mb-0">整合 MES 標籤系統與機器，改善作業流程。</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">解決生產參數收集問題</strong>
                        <p class="opacity-7 mb-0">透過 PLC 及 MES 生產履歷，解決生產參數收集困難的問題。</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>採用 Oracle 資料庫及顧問團隊的沖壓、電鍍產業經驗是我們選擇資通電腦的原因！</em></p>
                    <p class="text-right">/ 健策精密行政管理中心副總經理 郭逢春</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-user-story-jentech" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="426" src="/public/img/home/fortune-and-cimes.jpg" alt="華城電機用 MES 接軌智慧製造數位轉型">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                  <h3 class="mt-0">電動車充電樁重電大廠 - <span class="main-color">華城電機</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">物料管理透明化</strong>
                        <p class="opacity-7 mb-0">收集物料資訊與使用狀況，即時補充供料</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">提升產線管理效率與品質把關</strong>
                        <p class="opacity-7 mb-0">掌握生產進度，並建立生產履歷，清楚瞭解生產狀況，方便物料與成品追蹤</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">建立數位化作業流程</strong>
                        <p class="opacity-7 mb-0">改善手抄生產記錄，條碼化管理確保生產資訊一致性與完整性</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">提高資訊流精準度</strong>
                        <p class="opacity-7 mb-0">對外整合供應商系統，掌握供應商交期並確保資訊一致性</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>在 MES 系統選商階段，系統架構與功能是我們主要考量點，多數 MES 廠商只提供一個框架，而 ciMes 產品功能相當完善、系統架構彈性化程度高，成為我們選擇資通電腦的主因！</em></p>
                    <p class="text-right">/ 華城電機資訊中心處長 林振錦</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-user-story-fortune" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="426" src="/public/img/home/gogoro-and-cimes.jpg" alt="Gogoro 導入 ciMes 打造高度自動化整合產線">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">電動機車龍頭 - <span class="main-color">Gogoro</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">整合系統間的資料</strong>
                        <p class="opacity-7 mb-0">IT 與 OT 雙向控制的整合，並精準接軌 ERP</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">生產效率提升 50%</strong>
                        <p class="opacity-7 mb-0">資訊即時化與透明化，智慧管控硬體設備</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">物流及資訊流的匹配高達 100%</strong>
                        <p class="opacity-7 mb-0">智慧化產線，減少人員手動檢核、對帳作業的錯誤</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">打造智慧製造平台</strong>
                        <p class="opacity-7 mb-0">讓工業 4.0 的概念與元素在未來能夠在此平台上得以延伸運作</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>ciMes 在產業適用性上相對較高，可以做到 IT 與 OT 雙向控制的整合，可說是 Gogoro 新一代智慧電池製造產線的靈魂，也是生產線成功運作的關鍵。</em></p>
                    <p class="text-right">/ Gogoro 製造部資深經理 黃至偉</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-user-story-gogoro" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="426" src="/public/img/ctc.jpg" alt="頻譜電子導入 ciMes 打造智能工廠管理">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">電源管理元件大廠 - <span class="main-color">頻譜電子</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">提升達交準確率與品質</strong>
                        <p class="opacity-7 mb-0">調整在製品數量管理，提升準時交貨能力與產品品質深入回朔關鍵製程與零組件相關資訊，分析異常原因</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">降低人力成本與疏失</strong>
                        <p class="opacity-7 mb-0">減少輸入資料時間與錯誤，且供管理者決策參考</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">提高溝通效率與作業靈活度</strong>
                        <p class="opacity-7 mb-0">工廠資訊即時、數字、透明化，實現走動式稽核與管理</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">完美打造 MES 智能工廠管理</strong>
                        <p class="opacity-7 mb-0">自動化、高度整合性，縮短 25% 生產時間</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>為因應未來市場挑戰，頻譜電子致力投身智慧製造管理，打造全方位智能產線。進一步強化供應鏈及製造端即時資訊整合，解決人力與製程管理問題，以降低人力作業與時間成本，提升營運效率與市場競爭力。</em></p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-userstory-ctc" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="428" src="/public/img/hosong.jpg" alt="和頌導入 ciMes 提高在產業間的競爭力">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">世界級精密零件機械商 - <span class="main-color">和頌企業</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">提升達交準確率</strong>
                        <p class="opacity-7 mb-0">工單交期更精準，降低客訴提升服務品質</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">提升生產作業效率</strong>
                        <p class="opacity-7 mb-0">工時計算更精準，提升人員作業效率、降低成本</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">精準生產排程管理</strong>
                        <p class="opacity-7 mb-0">整合 APS 排程管理，大幅降低上億庫存量</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">具體實現智慧自動化工廠</strong>
                        <p class="opacity-7 mb-0">MES 製造執行系統，讓製造現場透明化、即時化</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p><em>唯有透過 MES 的導入，才能讓產線生產資訊更透明與即時，提高和頌在產業間的競爭力，我們知道智慧製造是唯一的目標與挑戰！</em></p>
                    <p class="text-right">/ 和頌總經理 鄭如芸</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-userstory-hosong" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide fff-bg">
            <div class="container-fluid px-5 py-4">
              <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-lg-6">
                  <img class="img-fluid" loading="lazy" width="640" height="428" src="/public/img/hodaka.jpg" alt="台灣穗高導入 ciMes 並結合 ERP 做到產銷鏈完整管理">
                </div>
                <div class="col-12 col-sm-10 col-lg-6 pb-5">
                <h3 class="mt-0">世界頂級鋁合金材料供應商 - <span class="main-color">台灣穗高科技</span></h3>
                  <ul class="check">
                    <li>
                      <div class="pl-1">
                        <strong class="">提升達交率與客戶滿意度</strong>
                        <p class="opacity-7 mb-0">透過在製品管理提升生產製程可控性，準確達成客戶交期，增加服務滿意度</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">產線更即時有效的管理</strong>
                        <p class="opacity-7 mb-0">提供每日作業清單，與即時生產績效分析，決策更精準</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">完整物料履歷</strong>
                        <p class="opacity-7 mb-0">精準控制物料投放維持生產品質一致性</p>
                      </div>
                    </li>
                    <li>
                      <div class="pl-1">
                        <strong class="">產線透明可視化</strong>
                        <p class="opacity-7 mb-0">運用 EKS 電子看板獲得更即時的管理資訊</p>
                      </div>
                    </li>
                  </ul>
                  <div>
                    <p>導入 ciMes 打造智慧製造生產數位化平台，正面迎擊傳統金屬加工產業常見的生產週期縮短、供應鏈風險增加、售後服務滿意度提升等挑戰。做到提升達交率、改善良率，並結合 ERP 做到產銷鏈完整管理。</p>
                  </div>
                  <a href="https://www.ares.com.tw/events/cimes-contract-hodaka" class="py-3 px-4 rounded main-bg fff-color" rel="noopener noreferrer" target="_blank">查看文章</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/lib/swiper3.4.1/swiper.min.js" defer></script>
<script src="/public/js/home.js?v=w" defer></script>
<script src="/public/js/sda.js" defer></script>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
</body>
</html>