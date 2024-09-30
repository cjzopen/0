  <header id="header" class="d-print-none">
    <!-- 頂部藍條=================================================================== -->
    <div class="main-bg fff-color menu-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <div class="row no-gutters justify-content-start">
              <div class="col-auto p-1 mr-3">
                <a class="mb-0" href="mailto:jenny@ares.com.tw" title="jenny@ares.com.tw">
                  <address class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="1.5 1.5 15 15">
                      <path fill="#FFFFFF" d="M15,4.5H3C2.175,4.5,1.507,5.175,1.507,6L1.5,15c0,0.825,0.675,1.5,1.5,1.5h12c0.825,0,1.5-0.675,1.5-1.5V6 C16.5,5.175,15.825,4.5,15,4.5z M15,15H3V7.5l6,3.75l6-3.75V15z M9,9.75L3,6h12L9,9.75z"/>
                    </svg>
                    <span class="d-none d-lg-inline">jenny@ares.com.tw</span>
                  </address>
                </a>
              </div>
              <div class="col-auto p-1">
                <a href="tel:+886-2-25221351,,301" title="+886-2-25221351 分機 301">
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
                <a href="https://www.ares.com.tw" title="資通電腦官網" rel="external">ARES</a>
              </div>
              <div class="col-auto p-1 mr-3">
                <a href="https://www.facebook.com/AresInternational/" rel="external" title="資通粉絲團">
                  <svg fill="#fff" width="16" height="16" viewBox="0 -2 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.998,0.006L14.887,0c-3.496,0-5.756,2.318-5.756,5.906v2.725H6.002c-0.271,0-0.49,0.219-0.49,0.488 v3.945c0,0.271,0.219,0.49,0.49,0.49h3.129v9.957C9.131,23.781,9.35,24,9.619,24h4.084c0.27,0,0.488-0.219,0.488-0.488v-9.957 h3.66c0.27,0,0.488-0.219,0.488-0.49l0.002-3.945c0-0.129-0.051-0.254-0.143-0.346s-0.217-0.143-0.348-0.143h-3.66V6.322 c0-1.111,0.266-1.674,1.711-1.674h2.096c0.271,0,0.49-0.221,0.49-0.49V0.494C18.488,0.225,18.27,0.006,17.998,0.006z"/>
                  </svg>
                </a>
              </div>
              <div class="col-auto p-1 mr-3">
<?php
$lang1 = '/en/';
$lang2 = '';
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
                <a href="<?= $lang1 ?>" lang="en" title="English website">EN</a>
              </div>
              <!-- <div class="col-auto p-1">
                <a href="">简中</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MENU =========================================================================== -->
    <nav class="container" id="menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
      <div class="row no-gutters justify-content-between">
        <div class="col-auto">
          <a class="d-flex align-items-center h-100" href="<?= HOST_LINK ?>" title="HCP 首頁" tabindex="-1">
<?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/hcp-logo.svg'); ?>
            <img src="/img/hcp-logo.svg" alt="HCP" class="img-fluid">
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li <?= substr($path,1,9) == 'index.php' ? 'class="act"' : '' ?> itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>"> 首 頁 </a></li>
            <li <?= substr($path,1,7) == 'know-hr' ? 'class="act"' : '' ?>>
              <a href="<?= HOST_LINK ?>know-hr/whats-hr/" >認識 HR
              <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg></a>
              <div class="under-menu fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/find-page.svg'); ?></div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/whats-hr/" tabindex="-1">什麼是 HR</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/how-choose/" tabindex="-1">如何選 HR</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>know-hr/why-choose/" tabindex="-1">為何選 HCP</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,7) == 'products' ? 'class="act"' : '' ?>>
              <a href="<?= HOST_LINK ?>products/modules/" >產品介紹
              <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg></a>
              <div class="under-menu fff-bg py-2">
                <div class="d-flex">
                  <div class="col-5 text-center"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/device.svg'); ?></div>
                  <div class="col-7">
                    <ol>
                      <li itemprop="name">
                        <a itemprop="url" href="<?= HOST_LINK ?>products/modules/" tabindex="-1">產品架構</a>
                        <ol class="disc">
                          <li class="px-0"><a href="<?= HOST_LINK ?>products/modules/hrm" tabindex="-1">HRM 人資管理</a></li>
                          <li class="px-0"><a href="<?= HOST_LINK ?>products/modules/competence" tabindex="-1">HRD 人資發展</a></li>
                          <li class="px-0"><a href="<?= HOST_LINK ?>products/modules/ess-mss" tabindex="-1">加值服務</a></li>
                          <li class="px-0"><a href="<?= HOST_LINK ?>products/modules/consultant-service" tabindex="-1">專業顧問服務</a></li>
                        </ol>
                      </li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>products/features/" tabindex="-1">產品特色</a></li>
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>products/benefits/" tabindex="-1">產品效益</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,8) == 'mainland' ? 'class="act"' : '' ?> itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>mainland-china-hr/" >兩岸三地 HR</a></li>
            <li <?= substr($path,1,4) == 'news' ? 'class="act"' : '' ?>>
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
                      <li itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>news/knowledges/" tabindex="-1">知識分享</a></li>
                      <li><a href="https://www.ares.com.tw/epaper/subscribe/" rel="nofollow" tabindex="-1">訂閱電子報</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,5) == 'best-' ? 'class="act"' : '' ?>>
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
            <li <?= substr($path,1,7) == 'contact' ? 'class="act"' : '' ?> itemprop="name"><a itemprop="url" href="<?= HOST_LINK ?>contact/" >免費諮詢</a></li>
            <li <?= substr($path,1,6) == 'search' ? 'class="act"' : '' ?>>
              <a href="<?= HOST_LINK ?>search/" title="站內搜尋" rel="search" >
                <svg fill="#323232" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div id="menu-button" class="col-auto hide" role="button">
          <span class="fz-0">menu</span>
        </div>
      </div>
    </nav>
  </header>