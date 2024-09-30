  <header id="header">
    <!-- 頂部藍條=================================================================== -->
    <div class="main-bg fff-color menu-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <div class="row no-gutters justify-content-start">
              <div class="col-auto p-1">
                <a class="mb-0" href="mailto:daphnelu@ares.com.tw" title="daphnelu@ares.com.tw">
                  <address class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="1.5 1.5 15 15">
                      <path fill="#FFFFFF" d="M15,4.5H3C2.175,4.5,1.507,5.175,1.507,6L1.5,15c0,0.825,0.675,1.5,1.5,1.5h12c0.825,0,1.5-0.675,1.5-1.5V6 C16.5,5.175,15.825,4.5,15,4.5z M15,15H3V7.5l6,3.75l6-3.75V15z M9,9.75L3,6h12L9,9.75z"/>
                    </svg>
                    <span class="d-none d-lg-inline">daphnelu@ares.com.tw</span>
                  </address>
                </a>
              </div>
              <div class="col-auto p-1">
                <svg fill="#FFFFFF" height="18" viewBox="0 -3 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                <span class="d-none d-lg-inline">+886-3-571-6622 ext. 777</span></a>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="row no-gutters justify-content-end">
              <div class="col-auto p-1">
                <a href="https://www.ares.com.tw/en/" title="ARES offical website" rel="external">ARES</a>
              </div>
              <div class="col-auto p-1">
                <a href="<?= !empty($hreflang) ? $hreflang : '/' ?>" lang="zh" title="Chinese">中文</a>
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
          <a class="d-flex align-items-center h-100" href="/en/" title="ciMes home page">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/cimes-logo.svg'); ?>
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li class="position-relative <?= substr($path,1,12) == 'en/index.php' ? 'act' : '' ?>"><a href="/en/"> Home </a></li>
            <li class="position-relative <?= substr($path,1,10) == 'en/knowmes' ? 'act' : '' ?>">
              <a href="/en/knowmes/">MES Know-How
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-4">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/find-page.svg'); ?>
                  </div>
                  <div class="col-8">
                    <ol>
                      <li><a href="/en/knowmes/">What Is MES</a></li>
                      <li><a href="/en/knowmes/needmes/">Who Needs MES</a></li>
                      <li><a href="/en/knowmes/how/">How to Choose MES</a></li>
                      <li><a href="/en/knowmes/why/">Why Choose ciMes</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,11) == 'en/products' ? 'act' : '' ?>">
              <a href="/en/products/">Products
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-4">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/device.svg'); ?>
                  </div>
                  <div class="col-8">
                    <ol>
                      <li><a href="/en/products/#module">Module</a></li>
                      <li><a href="/en/products/#compare">MES Comparisons</a></li>
                      <li><a href="/en/products/#feature">Features</a></li>
                      <li><a href="/en/products/#benefit">Benefits</a></li>
                      <li><a href="/en/products/#mobile-app">Mobile-App</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li class="position-relative <?= substr($path,1,7) == 'en/news' ? 'act' : '' ?>">
              <a href="/en/news/">News</a>
            </li>
            <li class="position-relative <?= substr($path,1,8) == 'en/best-' ? 'act' : '' ?>">
              <a href="/en/best-practices/metal.php">Best Practice
                <svg class="arrow-down" fill="#323232" height="12" viewBox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="2,6 6,13 11,6" />
                </svg>
              </a>
              <div class="under-menu position-absolute fff-bg py-2">
                <div class="d-flex">
                  <div class="col-12">
                    <ol>
                      <li><a href="/en/best-practices/metal.php">Metal Processing / Injection Molding</a></li>
                      <li><a href="/en/best-practices/assembly.php">Assembly / Others</a></li>
                      <li><a href="/en/best-practices/led.php">LED Industry</a></li>
                      <li><a href="/en/best-practices/opto.php">Optoelectronics</a></li>
                      <li><a href="/en/best-practices/semiconductor.php">Semiconductor Industry</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,9) == 'en/search' ? 'class="act"' : '' ?>>
              <a href="/en/search/" title="search">
                <svg fill="#323232" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div id="menu-button" class="col-auto hide" aria-label="menu button">
          <span></span>
        </div>
      </div>
    </nav>
  </header>