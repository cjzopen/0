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
    <!-- MENU =========================================================================== -->
    <nav class="container" id="menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
      <div class="row no-gutters justify-content-between">
        <div class="col-auto">
          <a class="d-flex align-items-center h-100" href="<?= HOST_LINK ?>" title="HCP 首頁" tabindex="-1" aria-label="首頁">
            <img src="/img/hcp.svg" width="132" height="60" loading="lazy" alt="HCP" class="img-fluid">
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>">首頁</a></li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>know-hr/" >認識人資系統
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="2,6 6,13 11,6" /></svg>
              </a>
              <div class="under-menu fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/find-page.svg'); ?></div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/" tabindex="-1">什麼是 HR 系統</a></li>
                      <!-- <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/how-choose/" tabindex="-1">如何選擇</a></li> -->
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/why-choose/" tabindex="-1">推薦與評估</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-static">
              <a href="<?= HOST_LINK ?>products/" >產品介紹
              <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg></a>
              <div class="under-menu fff-bg w-100">
                <div class="d-flex no-gutters">
                  <div class="col-4 text-center gray-bg under-menu-headline">
                    <ol>
                      <li class="py-2 active" itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>products/" tabindex="-1">產品架構</a></li>
                      <li class="py-2" itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>products/features/" tabindex="-1">產品特色</a></li>
                      <li class="py-2" itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>products/benefits/" tabindex="-1">產品效益</a></li>
                    </ol>
                  </div>
                  <div class="col-8 under-menu-content">
                    <div class="d-block">
                      <div class="d-flex">
                        <div class="col-3">
                          <div class="py-2"><strong>人資管理</strong></div>
                          <ol>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/hrm">人事資料管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/salary">薪資獎金管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/attendance">差勤請假管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/insurance">地方保險管理模組</a></li>
                          </ol>
                        </div>
                        <div class="col-3">
                          <div class="py-2"><strong>人力發展</strong></div>
                          <ol>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/competence">員工職能管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/training">教育訓練管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/performance">員工績效管理模組</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/recruit">人才招募管理模組</a></li>
                          </ol>
                        </div>
                        <div class="col-3">
                          <div class="py-2"><strong>加值服務</strong></div>
                          <ol>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/ess-mss">員工主管自助系統</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/e-recruiting">線上招募管理系統</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/ehr-mobile">人資行動 App</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/bis">商業智慧系統</a></li>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/usp">薪資密封袋</a></li>
                          </ol>
                        </div>
                        <div class="col-3">
                          <div class="py-2"><strong>顧問服務</strong></div>
                          <ol>
                            <li class="py-2"><a href="<?= HOST_LINK ?>products/modules/consultant-service">專業顧問服務</a></li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <div class="d-none">
                      <div class="px-3 py-2 main-color"><a itemprop="url" href="<?= HOST_LINK ?>products/features/" tabindex="-1">產品特色</a></div>
                      <p class="px-3 py-4">適用兩岸三地大型企業人事管理需求，系統擁有多組織架構及彈性參數設計，使用者能自訂操作介面，也可設定不同管理權限；另有人資行動 App 提供企業更即時便利的人事管理模式，採用 Oracle 資料庫加密技術，確保企業敏感個資無外洩疑慮！</p>
                    </div>
                    <div class="d-none">
                      <div class="px-3 py-2 main-color"><a itemprop="url" href="<?= HOST_LINK ?>products/benefits/" tabindex="-1">產品效益</a></div>
                      <p class="px-3 py-4">資通 HCP 人資系統能提供企業完整的導入與技術移轉，有最佳的實務經驗，能依據企業需求滿足各項系統規劃或資訊委外…等全方位服務，可提昇企業營運效能，加速 HR 人員後續接手維運系統的效率！</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>mainland-china-hr/" >跨國企業 HR</a></li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>news/" >最新消息
              <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg></a>
              <div class="under-menu fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/reader.svg'); ?></div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>news/" tabindex="-1">最新消息</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>news/knowledge/" tabindex="-1">知識分享</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>best-practices/high-tech" >成功案例
              <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg></a>
              <div class="under-menu fff-bg py-2">
                <div class="d-flex">
                  <div class="col-4 text-center"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/playlist-check.svg'); ?></div>
                  <div class="col-8">
                    <ol>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>best-practices/high-tech" tabindex="-1">高科技業</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>best-practices/manufacturing" tabindex="-1">製造業</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>best-practices/circulation-service-other" tabindex="-1">流通服務業／其他</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>best-practices/gov" tabindex="-1">政府單位</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>contact/" >免費諮詢</a></li>
            <!-- <li>
              <a href="<?= HOST_LINK ?>search/" title="站內搜尋" rel="search" >
                <svg fill="#323232" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"/>
                </svg>
              </a>
            </li> -->
          </ul>
        </div>
        <div id="menu-button" class="col-auto hide" role="button" aria-label="menu">
          <span class="fz-0">menu</span>
        </div>
      </div>
    </nav>
  </header>