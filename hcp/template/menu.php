  <header id="header" class="d-print-none">
    <!-- 頂部藍條=================================================================== -->
    <div class="main-bg fff-color menu-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <div class="row no-gutters justify-content-start">
              <div class="col-auto p-1 mr-3">
                <a class="mb-0 py-lg-0 py-2 d-inline-block" href="mailto:jenny@ares.com.tw" title="jenny@ares.com.tw" aria-label="聯絡信箱">
                  <address class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="1.5 1.5 15 15">
                      <path fill="#FFFFFF" d="M15,4.5H3C2.175,4.5,1.507,5.175,1.507,6L1.5,15c0,0.825,0.675,1.5,1.5,1.5h12c0.825,0,1.5-0.675,1.5-1.5V6 C16.5,5.175,15.825,4.5,15,4.5z M15,15H3V7.5l6,3.75l6-3.75V15z M9,9.75L3,6h12L9,9.75z"/>
                    </svg>
                    <span class="d-none d-lg-inline">jenny@ares.com.tw</span>
                  </address>
                </a>
              </div>
              <div class="col-auto p-1">
                <a class="py-lg-0 py-2 d-inline-block" href="tel:+886-2-25221351,,301" title="+886-2-25221351 分機 301" aria-label="聯絡電話">
                <svg fill="#FFFFFF" height="18" viewBox="0 -3 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                <span class="d-none d-lg-inline">+886-2-25221351 分機 301 汪小姐</span></a>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="row no-gutters justify-content-end">
              <div class="col-auto p-1 mr-3">
                <a href="https://www.ares.com.tw" title="資通電腦官網" rel="external noopener noreferrer" class="p-2 p-lg-0 d-inline-block">資通官網</a>
              </div>
              <div class="col-auto p-1 mr-3">
<?php
$lang1 = '/en/';
$lang2 = 'https://www.areschina.com/hcp/';
if(is_array($hreflang) && count($hreflang) >=1){
  foreach($hreflang as $va ) {
    if($va['lang']=='en'){
      $lang1 = $va['url'];
    }elseif($va['lang']=='zh-CN'){
      $lang2 = $va['url'];
    }
  }
}
?>
                <a href="<?= $lang1 ?>" lang="en" title="English website" class="p-2 p-lg-0 d-inline-block">EN</a>
              </div>
              <div class="col-auto p-1">
                <a href="<?= $lang2 ?>" class="p-2 p-lg-0 d-inline-block">简中</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
      <!-- MENU =========================================================================== -->
    <nav id="menu">
      <div class="container">
        <div class="row no-gutters justify-content-between">
          <div class="col-auto">
            <a class="d-flex align-items-center h-100" href="/" title="HCP 首頁" aria-label="首頁">
              <img src="/img/hcp.svg" width="99" height="45" loading="lazy" alt="HCP" class="img-fluid" id="logo">
            </a>
          </div>
          <div class="col-auto" id="sort">
            <ul class="row no-gutters justify-content-end mb-0">
              <li><a href="/">首頁</a></li>
              <li class="position-static">
                <a href="/products/" >產品介紹
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="2,6 6,13 11,6" />
                  </svg></a>
                <div class="under-menu fff-bg w-100">
                  <div class="d-flex no-gutters">
                    <div class="col-4 text-center gray-bg under-menu-headline">
                      <ol>
                        <li class="py-2 active"><a href="/products/">產品架構</a></li>
                        <li class="py-2"><a href="/products/features/">產品特色與效益</a></li>
                      </ol>
                    </div>
                    <div class="col-8 under-menu-content">
                      <div class="d-block">
                        <div class="d-flex">
                          <div class="col-4">
                            <div class="py-2"><strong>人資管理</strong></div>
                            <ol>
                              <li class="py-2"><a href="/products/modules/hrm">人事資料管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/salary">薪資獎金管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/attendance">差勤請假管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/insurance">地方保險管理模組</a></li>
                            </ol>
                          </div>
                          <div class="col-4">
                            <div class="py-2"><strong>人力發展</strong></div>
                            <ol>
                              <li class="py-2"><a href="/products/modules/competence">員工職能管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/training">教育訓練管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/performance">員工績效管理模組</a></li>
                              <li class="py-2"><a href="/products/modules/recruit">人才招募管理模組</a></li>
                            </ol>
                          </div>
                          <div class="col-4">
                            <div class="py-2"><strong>獨立模組</strong></div>
                            <ol>
                              <li class="py-2"><a href="/products/modules/ess-mss">員工主管自助系統</a></li>
                              <li class="py-2"><a href="/products/modules/bis">商業智慧系統</a></li>
                              <li class="py-2"><a href="/products/modules/usp">薪資密封袋</a></li>
                            </ol>
                          </div>
                        </div>
                      </div>
                      <div class="d-none">
                        <div class="px-3 py-2 main-color"><a href="/products/features/">特色效益</a></div>
                        <p class="px-3 py-4">適用兩岸三地大型企業人事管理需求，系統擁有多組織架構及彈性參數設計，使用者能自訂操作介面，也可設定不同管理權限；另有人資行動 App 提供企業更即時便利的人事管理模式，採用 Oracle 資料庫加密技術，確保企業敏感個資無外洩疑慮！</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="/mainland-china-hr/" >跨國企業 HR</a></li>
              <li class="position-relative">
                <a href="/best-practices/high-tech">客戶見證
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="2,6 6,13 11,6" />
                  </svg></a>
                <div class="under-menu fff-bg py-2">
                  <div class="d-flex">
                    <div class="col-4 text-center">
                      <img class="img-fluid" loading="lazy" width="96" height="96" src="/img/playlist-check.svg" alt="*">
                    </div>
                    <div class="col-8">
                      <ol>
                        <li><a href="/best-practices/high-tech">高科技業</a></li>
                        <li><a href="/best-practices/manufacturing">製造業</a></li>
                        <li><a href="/best-practices/circulation-service-other">流通服務業／其他</a></li>
                        <li><a href="/best-practices/gov">政府單位</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </li>
              <li class="position-relative">
                <a href="/news/" >最新消息
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="2,6 6,13 11,6" />
                  </svg></a>
                <div class="under-menu fff-bg py-2">
                  <div class="d-flex">
                    <div class="col-6 text-center">
                      <img class="img-fluid" loading="lazy" width="96" height="96" src="/img/reader.svg" alt="*">
                    </div>
                    <div class="col-6">
                      <ol>
                        <li><a href="/news/">最新消息</a></li>
                        <li><a href="/news/knowledge/">知識分享</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </li>
              <li class="position-relative">
              <a href="#">主題專區
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="2,6 6,13 11,6" />
                  </svg></a>
                <div class="under-menu fff-bg py-2">
                  <div class="d-flex">
                    <div class="col-4 text-center">
                      <img class="img-fluid" loading="lazy" width="96" height="96" src="/img/reader.svg" alt="*">
                    </div>
                    <div class="col-8">
                      <ol>
                        <li><a href="/topic/how-to-choose-hr-system/">如何選擇人資系統</a></li>
                        <li><a href="/topic/human-resource/">人資作業必備攻略</a></li>
                        <li><a href="/topic/digital-transformation/">人資數位轉型專區</a></li>
                        <li><a href="/topic/one-fixed-day-off-and-one-flexible-rest-day/">一例一休專區</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="/contact/" >免費諮詢</a></li>
            </ul>
          </div>
          <div class="menu-button col-auto hide" role="button" aria-label="menu">
            <span class="fz-0">menu</span>
          </div>
        </div>
      </div>
    </nav>
<div id="mobile-menu" class="pb-3 px-3">
  <div class="container">
    <div class="row justify-content-between align-items-center pb-4">
      <div class="col-auto">
        <img src="/img/hcp.svg" width="99" height="45" loading="lazy" alt="HCP" class="img-fluid">
      </div>
      <div class="col-auto">
        <div class="menu-button act" role="button" aria-label="menu">
          <span class="fz-0">close</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="h3"><a href="/">首頁</a></div>
        <div class="h3"><a href="/products/">產品服務</a></div>
        <div class="mobile-menu-list-area">
          <div class="h4 main-color">HRM 人資管理</div>
          <ul class="mobile-menu-list">
            <li class="py-1"><a href="/products/modules/hrm">人事資料管理模組</a></li>
            <li class="py-1"><a href="/products/modules/salary">薪資獎金管理模組</a></li>
            <li class="py-1"><a href="/products/modules/attendance">差勤請假管理模組</a></li>
            <li class="py-1"><a href="/products/modules/insurance">地方保險管理模組</a></li>
          </ul>
          <div class="h4 main-color">HRD 人力發展</div>
          <ul class="mobile-menu-list">
            <li class="py-1"><a href="/products/modules/competence">員工職能管理模組</a></li>
            <li class="py-1"><a href="/products/modules/training">教育訓練管理模組</a></li>
            <li class="py-1"><a href="/products/modules/performance">員工績效管理模組</a></li>
            <li class="py-1"><a href="/products/modules/recruit">人才招募管理模組</a></li>
          </ul>
          <div class="h4 main-color">獨立模組</div>
          <ul class="mobile-menu-list">
            <li class="py-1"><a href="/products/modules/ess-mss">員工主管自助系統</a></li>
            <li class="py-1"><a href="/products/modules/bis">商業智慧系統</a></li>
            <li class="py-1"><a href="/products/modules/usp">薪資密封袋</a></li>
          </ul>
          <div class="py-1"><a href="/mainland-china-hr/">跨國人事管理</a></div>
          <div class="py-1"><a href="/products/features/">產品特色與效益</a></div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="h3">客戶見證</div>
        <div class="mobile-menu-list-area">
          <ul class="main-color mb-0">
            <li class="py-1"><a href="/best-practices/high-tech">高科技業</a></li>
            <li class="py-1"><a href="/best-practices/manufacturing">製造業</a></li>
            <li class="py-1"><a href="/best-practices/circulation-service-other">流通服務業／其他</a></li>
            <li class="py-1"><a href="/best-practices/gov">政府單位</a></li>
          </ul>
        </div>
        <div class="h3">人資專欄</div>
        <div class="mobile-menu-list-area">
          <ul class="main-color mb-0">
            <li class="py-1"><a href="/news/">最新消息</a></li>
            <li class="py-1"><a href="/news/knowledge/">知識分享</a></li>
          </ul>
        </div>
        <div class="h3">主題專區</div>
        <div class="mobile-menu-list-area">
          <ul class="main-color mb-0">
            <li class="py-1"><a href="/topic/how-to-choose-hr-system/">如何選擇人資系統</a></li>
            <li class="py-1"><a href="/topic/human-resource/">人資作業必備攻略</a></li>
            <li class="py-1"><a href="/topic/digital-transformation/">人資數位轉型專區</a></li>
            <li class="py-1"><a href="/topic/one-fixed-day-off-and-one-flexible-rest-day/">一例一休專區</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>