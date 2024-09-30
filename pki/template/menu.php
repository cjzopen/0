  <header id="header" class="d-print-none">
    <div class="bg-red text-white h6">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <div class="row no-gutters justify-content-start">
              <div class="col-auto p-1 mr-3">
                <a class="mb-0 py-lg-0 py-2 d-inline-block" href="mailto:jenny@ares.com.tw?subject=uPKI安控元件諮詢" title="jenny@ares.com.tw" aria-label="聯絡信箱">
                  <address class="mb-0">
                    <svg fill="#FFFFFF" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                      <use xlink:href="#email-icon" />
                    </svg>
                    <span class="d-none d-lg-inline">jenny@ares.com.tw</span>
                  </address>
                </a>
              </div>
              <div class="col-auto p-1">
                <a class="py-lg-0 py-2 d-inline-block" href="tel:+886-2-25221351,,301" title="+886-2-25221351 分機 301" aria-label="聯絡電話">
                <svg class="shake-animation" fill="#FFFFFF" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                  <use xlink:href="#phone-icon" />
                </svg>
                <span class="d-none d-lg-inline">02-2522-1351 分機 301 汪小姐</span></a>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="row no-gutters justify-content-end">
              <div class="col-auto p-1 mr-3">
              <a href="https://www.ares.com.tw" title="資通電腦官網" class="p-2 p-lg-0 d-inline-block">ARES</a>
              </div>
              <div class="col-auto p-1 mr-3">
                <a href="<?= isset($page['hreflang']) ? $page['hreflang'] : '/en/' ?>" lang="en" title="English website" class="p-2 p-lg-0 d-inline-block">EN</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MENU =========================================================================== -->
    <nav class="container" id="menu">
      <div class="row no-gutters justify-content-between">
        <div class="col-auto">
          <a class="d-flex align-items-center h-100" href="<?= HOST_LINK ?>/" title="首頁" tabindex="-1">
<?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/upki-logo.svg'); ?>
            <img src="/img/upki-logo.svg" alt="uPKI" class="img-fluid" width="200" height="60" loading="lazy">
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li><a href="<?= HOST_LINK ?>/">首頁</a></li>
            <li><a href="<?= HOST_LINK ?>/know-pki/">認識 PKI</a></li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>/products/" >產品介紹<span class="arrow-down">&#9662;</span></a>
              <div class="under-menu bg-white py-2">
                <div class="d-flex">
                  <div class="col-12">
                    <ol>
                      <li><a href="<?= HOST_LINK ?>/products/" tabindex="-1">資通 uPKI</a></li>
                      <li><a href="<?= HOST_LINK ?>/products/upki/" tabindex="-1">安控解決方案</a></li>
                      <li><a href="<?= HOST_LINK ?>/products/cs/" tabindex="-1">資料加密及遮罩伺服器</a></li>
                      <li><a href="<?= HOST_LINK ?>/products/uiam/" tabindex="-1">身分識別及存取管理系統</a></li>
                      <li><a href="<?= HOST_LINK ?>/products/usp/" tabindex="-1">薪資密封袋</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="<?= HOST_LINK ?>/pipa/" >個資法專區</a></li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>/news/" >最新消息<span class="arrow-down">&#9662;</span></a>
              <div class="under-menu bg-white py-2">
                <div class="d-flex">
                  <div class="col-12">
                    <ol>
                      <li><a href="<?= HOST_LINK ?>/news/" tabindex="-1">最新消息</a></li>
                      <li><a href="<?= HOST_LINK ?>/knowledge/" tabindex="-1">知識分享</a></li>
                      <li><a href="https://www.ares.com.tw/epaper/subscribe/" rel="noopener noreferrer external" target="_blank" tabindex="-1">訂閱電子報</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative">
              <a href="<?= HOST_LINK ?>/best-practices/" >成功案例</a>
            </li>
            <li><a href="<?= HOST_LINK ?>/consult/" >免費諮詢</a></li>
            <li>
              <a href="<?= HOST_LINK ?>/search/" title="站內搜尋" rel="search" >
                <svg fill="#323232" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <use xlink:href="#search-icon" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div id="menu-button" class="col-auto hide" role="button" aria-label="menu">
          <span class="fz-0">menu</span>
        </div>
      </div>
    </nav>
  </header>