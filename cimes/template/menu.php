  <header id="header">
  <div class="main-bg fff-color menu-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <div class="row no-gutters justify-content-start">
              <div class="col-auto p-1 mr-3">
                <a class="mb-0 py-lg-0 py-2 d-inline-block" href="mailto:daphnelu@ares.com.tw" aria-label="聯絡信箱">
                  <address class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="1.5 1.5 15 15">
                      <path fill="#FFFFFF" d="M15,4.5H3C2.175,4.5,1.507,5.175,1.507,6L1.5,15c0,0.825,0.675,1.5,1.5,1.5h12c0.825,0,1.5-0.675,1.5-1.5V6 C16.5,5.175,15.825,4.5,15,4.5z M15,15H3V7.5l6,3.75l6-3.75V15z M9,9.75L3,6h12L9,9.75z"></path>
                    </svg>
                    <span class="d-none d-lg-inline">daphnelu@ares.com.tw</span>
                  </address>
                </a>
              </div>
              <div class="col-auto p-1">
                <svg fill="#FFFFFF" height="18" viewBox="0 -3 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                </svg>
                <span class="d-none d-lg-inline">(03)571-6622 分機 777</span></a>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="row no-gutters justify-content-end">
              <div class="col-auto p-1 mr-3">
                <a href="https://www.ares.com.tw" title="資通電腦官網" class="p-2 p-lg-0 d-inline-block">ARES</a>
              </div>
              <div class="col-auto p-1">
                <a href="<?= !empty($hreflang) ? $hreflang : '/en/' ?>" lang="en" title="English website" class="p-2 p-lg-0 d-inline-block">EN</a>
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
          <a class="d-flex align-items-center h-100 sub-color" href="/" title="ciMes" accesskey="1">
            <img src="/public/img/cimes-logo.svg" alt="cimes" width="135" height="60">
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li class="position-relative <?= substr($path,1,9) == 'index.php' ? 'act' : '' ?>" itemprop="name"><a href="/" itemprop="url"> 首頁 </a></li>
            <li class="position-relative <?= substr($path,1,7) == 'knowmes' ? 'act' : '' ?>">
              <a href="/knowmes/" accesskey="2">認識 MES
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu box-shadow position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center" aria-hidden="true"><?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/find-page.svg'); ?></div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a href="/knowmes/" itemprop="url">什麼是 MES</a></li>
                      <li itemprop="name"><a href="/knowmes/how/" itemprop="url">如何選 MES</a></li>
                      <li itemprop="name"><a href="/knowmes/why/" itemprop="url">為何選 ciMes</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class=" <?= substr($path,1,8) == 'products' ? 'act' : '' ?>">
              <a href="/products/" accesskey="3" itemprop="url "><span itemprop="name">產品介紹</span>
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu position-absolute" id="menu-product">
                <div class="mx-auto fff-bg box-shadow">
                  <div class="d-flex no-gutters">
                    <div class="col-4 text-center">
                      <ol>
                        <li class="main-bg fff-color py-2"><a href="/products/#module">核心模組</a></li>
                        <li class="gray-bg py-2"><a href="/products/#compare">MES 比一比</a></li>
                        <li class="gray-bg py-2"><a href="/products/#feature">產品特色</a></li>
                        <li class="gray-bg py-2"><a href="/products/#benefit">產品效益</a></li>
                        <li class="gray-bg py-2"><a href="/products/#mobile-app">行動管理</a></li>
                      </ol>
                    </div>
                    <ol class="col-8 d-flex flex-wrap">
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/wip.php">WIP 在製品管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/qc.php">QC 品質管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/tooling.php">Tooling 零配件管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/pm.php">PM 機台預修保養</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/mms.php">MMS 物料管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/cms.php">CMS 載具管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/wrp.php">WRP 報表系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/lms.php">LMS 標籤管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/alm.php">ALM 警示管理系統</a></li>
                      <li class="col-6 px-3 py-2" itemprop="name"><a itemprop="url" href="/products/module/eks.php">EKS 電子看板系統</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,5) == 'trend' ? 'act' : '' ?>">
              <a href="/industry-4.0/">趨勢議題
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu box-shadow position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center" aria-hidden="true">
                  </div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a href="/industry-4.0/" accesskey="4" itemprop="url">智慧製造</a></li>
                      <li itemprop="name"><a href="/trend/electric-car/" itemprop="url">電動車專區</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,4) == 'news' || substr($path,1,9) == 'knowledge' ? 'act' : '' ?>">
              <a href="/news/" accesskey="5">最新消息
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu box-shadow position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-6 text-center" aria-hidden="true">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/reader.svg'); ?>
                  </div>
                  <div class="col-6">
                    <ol>
                      <li itemprop="name"><a href="/news/" itemprop="url">最新消息</a></li>
                      <li itemprop="name"><a href="/knowledge/" itemprop="url">知識分享</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,5) == 'best-' ? 'act' : '' ?>">
              <a href="/best-practices/" accesskey="6">成功案例
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu box-shadow position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-4 text-center" aria-hidden="true">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/playlist-check.svg'); ?>
                  </div>
                  <div class="col-8">
                    <ol>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/automotive">汽車/車用零件</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/large-assembly">超大型組裝</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/metal-assembly">金屬加工</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/injection-moulding">射出成型</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/lcd">LCD 相關產業</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/led">LED 相關產業</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/semiconductor">半導體產業</a></li>
                      <li itemprop="name"><a itemprop="url" href="/best-practices/others">其他產業</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,9) == 'contactus' ? 'act' : '' ?>" itemprop="name"><a href="/contactus/" accesskey="7" itemprop="url">免費諮詢</a></li>
            <li class="position-relative"><a href="/search/" title="站內搜尋" aria-label="站內搜尋">
            <svg fill="#333333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path id="search-toggle-open" d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"></path>
            </svg>
            </a></li>
          </ul>
        </div>
        <div id="menu-button" class="col-auto hide" role="button" aria-label="menu">
          <span style="font-size:0">menu</span>
        </div>
      </div>
    </nav>
  </header>