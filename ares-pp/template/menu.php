  <header id="header">
    <!-- MENU =========================================================================== -->
    <nav class="container-fluid" id="menu">
      <div class="row no-gutters justify-content-around">
        <div class="col-auto">
          <a class="d-flex align-items-center h-100" href="/" title="首頁" accesskey="1">
            <img width="155" height="60" src="/public/img/arespp-logo.svg" alt="首頁">
          </a>
        </div>
        <div class="col-auto" id="sort">
          <ul class="row no-gutters justify-content-end mb-0">
            <li <?= substr($path,1,5) == 'about' ? 'class="main-color"' : '' ?>>
              <a href="/about/" accesskey="2">產品介紹<svg class="arrow-down ml-1" fill="currentColor" width="10" height="6"><use xlink:href="#arrow-down" /></svg></a>
              <div class="under-menu fff-bg py-2 px-4">
                <div class="under-menu-grid align-items-center">
                  <div class="pl-3 text-center">
                    <svg class="img-fluid" width="80" height="80"><use xlink:href="#menu-icon" /></svg>
                  </div>
                  <div class="text-right">
                    <ul>
                      <!-- <li><a href="/about/#banner">深受用戶信賴</a></li> -->
                      <li><a href="/about/#apply">產品應用</a></li>
                      <li><a href="/about/#benefit">產品效益</a></li>
                      <li><a href="/about/#feature">產品特色</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,3) == 'drm' ? 'class="main-color"' : '' ?>><a href="/drm/">了解 DRM</a></li>
            <li <?= substr($path,1,3) == 'faq' ? 'class="main-color"' : '' ?>><a href="/faq/">常見問題</a></li>
            <li <?= substr($path,1,7) == 'article' ? 'class="main-color"' : '' ?>>
              <a href="/articles/" accesskey="5">最新消息<svg class="arrow-down ml-1" fill="currentColor" width="10" height="6"><use xlink:href="#arrow-down" /></svg></a>
              <div class="under-menu fff-bg py-2 px-4">
                <div class="under-menu-grid align-items-center">
                  <div class="pl-3 text-center">
                    <svg class="img-fluid" width="80" height="80"><use xlink:href="#menu-icon" /></svg>
                  </div>
                  <div class="text-right">
                    <ul>
                      <li><a href="/articles/">最新消息</a></li>
                      <li><a href="/articles/knowledge/">知識分享</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,5) == 'trend' ? 'class="main-color"' : '' ?>>
              <a href="#">資安議題<svg class="arrow-down ml-1" fill="currentColor" width="10" height="6"><use xlink:href="#arrow-down" /></svg></a>
              <div class="under-menu fff-bg py-2 px-4">
                <div class="under-menu-grid align-items-center">
                  <div class="pl-3 text-center">
                    <svg class="img-fluid" width="80" height="80"><use xlink:href="#menu-icon" /></svg>
                  </div>
                  <div class="text-right">
                    <ul>
                      <li><a href="/trend/trade-secret/">營業秘密管理規範</a></li>
                      <li><a href="/trend/ISO27001/">ISO 27001 專區</a></li>
                      <li><a href="/trend/telecommuting/">遠距辦公專區</a></li>
                      <li><a href="/trend/EU-GDPR/">GDPR 專區</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li <?= substr($path,1,5) == 'best-' ? 'class="main-color"' : '' ?>>
              <a href="/best-practices/" accesskey="6">成功案例</a>
            </li>
            <li <?= substr($path,1,7) == 'contact' ? 'class="main-color"' : '' ?>><a href="/contact/" accesskey="7">免費諮詢</a></li>
          </ul>
        </div>
        <div class="d-flex">
          <div class="mr-3">
            <a href="/search/" aria-label="搜尋" title="搜尋">
              <svg fill="currentColor" id="search-icon" width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"></path>
              </svg>
            </a>
          </div>
          <div class="mr-3">
            <a class="" href="https://www.ares.com.tw" title="資通電腦官網" rel="external">ARES</a>
          </div>
          <div class="mr-3">
            <a class="" href="<?= !empty($hreflang) ? $hreflang : '/en/' ?>" lang="en" title="English website">EN</a>
          </div>
          <div id="menu-button" class="hide" role="button">
            <span>menu</span>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div id="menu-mobile" class="container-fluid">
    <div class="p-3 row">
      <div class="h4 mb-2 col-12 col-md-6"><strong><a href="/about/">產品介紹</a></strong></div>
      <div class="h4 mb-2 col-12 col-md-6"><strong><a href="/drm/">了解 DRM</a></strong></div>
      <div class="h4 mb-2 col-12 col-md-6"><strong><a href="/faq/">資料加密常見問題</a></strong></div>
      <div class="h4 mb-2 col-12 col-md-6"><strong><a href="/best-practices/">成功案例</a></strong></div>
      <div class="h4 mb-2 col-12 col-md-6"><strong><a href="/contact/">免費諮詢</a></strong></div>
      <div class="h4 mb-2 col-12"><strong>資安議題<svg class="arrow-down ml-1" fill="currentColor" width="10" height="6"><use xlink:href="#arrow-down" /></svg></strong></div>
      <ul class="light-blue-bg main-color p-3 col-12">
        <li><a href="/trend/trade-secret/" >營業秘密保護管理規範</a></li>
        <li><a href="/trend/ISO27001/" >ISO 27001 專區</a></li>
        <li><a href="/trend/telecommuting/">遠距辦公防疫專區</a></li>
        <li><a href="/trend/EU-GDPR/" >GDPR 專區</a></li>
      </ul>
      <div class="h4 mb-2 col-12"><strong>最新消息</strong><svg class="arrow-down ml-1" fill="currentColor" width="10" height="6"><use xlink:href="#arrow-down" /></svg></div>
      <ul class="light-blue-bg main-color p-3 col-12">
        <li><a href="/articles/?y=<?= $news_last_year ?>">最新消息</a></li>
        <li><a href="/articles/knowledge/">知識分享</a></li>
      </ul>
      <form name="cse" id="searchbox"  class="d-flex mb-3 col-12" action="/search/" method="get">
        <label class="d-none" id="label-q">相關搜尋</label>
        <input type="hidden" name="cx" value="014374286183653546318:vzx6cvsgsd0">
        <input type="text" name="q" class="w-100" aria-labelledby="label-q" placeholder="搜尋 ares.com.tw">
        <button id="search-submit" class="px-3" type="submit">
          <svg fill="currentColor" id="search-icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.435,18.063h-0.722l-0.257-0.246c0.896-1.044,1.437-2.398,1.437-3.87C15.893,10.662,13.23,8,9.946,8S4,10.662,4,13.946 s2.662,5.946,5.946,5.946c1.472,0,2.826-0.54,3.87-1.437l0.246,0.256v0.723L18.637,24L20,22.637L15.435,18.063z M9.946,18.063 c-2.278,0-4.117-1.838-4.117-4.116c0-2.278,1.839-4.117,4.117-4.117c2.278,0,4.116,1.839,4.116,4.117 C14.063,16.225,12.225,18.063,9.946,18.063z"></path>
          </svg>
        </button>
      </form>
      <div class="text-center pb-3 col-12">
        <a href="https://www.ares.com.tw" class="mx-2">資通電腦</a>
        <a href="/en/" class="mx-2">EN</a>
      </div>
    </div>
  </div>