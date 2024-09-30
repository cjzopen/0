<div id="consult-section" data-nosnippet>
  <form class="container" id="consult_form" name="consult_form" method="post" onsubmit="return formCheck();">
    <!-- <div class="row py-3 mb-3 main-bg fff-color">
      <div class="col-12 col-md-4">電話：+886-2-2522-1351 分機 301 汪小姐</div>
      <div class="col-12 col-md-4">Email：jenny@ares.com.tw</div>
    </div> -->
    <h2 class="h3 text-center">立即諮詢 保護重要文件</h2>
    <fieldset>
      <div class="row">
        <legend class="col-12 d-block d-sm-none h4">聯絡資訊</legend>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="company" id="company" size="40" autocomplete="billing organization" placeholder="服務單位*">
            <label for="company">服務單位 *</label>
            <p class="danger er1">請填寫服務單位</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="department" id="department" size="40" placeholder="部門*">
            <label for="department">部門 *</label>
            <p class="danger er5">請填寫部門</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="name" id="name" size="30" autocomplete="billing given-name" placeholder="姓名*">
            <label for="name">姓名 *</label>
            <p class="danger er2">請填寫姓名</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="jobTitle" id="jobTitle" size="40" autocomplete="billing organization-title" placeholder="職稱*">
            <label for="jobTitle">職稱 *</label>
            <p class="danger er6">請填寫職稱</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="tel" name="phone" id="phone" autocomplete="billing tel" placeholder="電話1*">
            <label for="phone">電話1 *</label>
            <p class="danger er3">請填寫電話</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="tel" name="mobile" id="mobile" autocomplete="billing mobile" placeholder="電話2">
            <label for="mobile">電話2</label>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="email" id="email" autocomplete="billing email" placeholder="Email*">
            <label for="email"> Email *</label>
            <p class="danger er4">請填寫 Email</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label class="d-none" for="budget">預計導入費用<span class="red">*</span></label>
          <select name="budget" id="budget" class="w-100">
            <option value="" selected disabled>預計導入費用*</option>
            <option value="目前尚未編列預算">目前尚未編列預算</option>
            <option value="10 萬左右">10 萬左右</option>
            <option value="11 萬～50 萬">11 萬～50 萬</option>
            <option value="51 萬～100 萬">51 萬～100 萬</option>
            <option value="100 萬以上">100 萬以上</option>
          </select>
          <p class="danger er8">請選取項目</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label class="d-none" for="how">消息來源<span class="red">*</span></label>
          <select name="knowFrom" id="how" class="w-100">
            <option value="" selected disabled>消息來源*</option>
            <option value="資通電子報">資通電子報</option>
            <option value="資通粉絲團">資通粉絲團</option>
            <option value="G搜">Google 搜尋</option>
            <option value="Y搜">Google以外的搜尋</option>
            <option value="Gemini">Google AI（Gemini）</option>
            <option value="Copilot">Bing Chat（Copilot）</option>
            <option value="ChatGPT">ChatGPT</option>
            <option value="參加研討會">參加研討會</option>
            <option value="媒體報導">媒體報導</option>
            <option value="親友、同事介紹">親友、同事介紹</option>
            <option value="資通同仁介紹">資通同仁介紹</option>
            <option value="其他">其他</option>
          </select>
          <p class="danger er7">請選取項目</p>
          <input type="text" name="howother" id="howother">
        </div>
        <div class="col-12">
          <label class="d-none" for="otherRequire">需求說明</label>
          <p class="danger max200">簡短敘述即可，將有專人與您聯繫</p>
          <textarea name="otherRequire" id="otherRequire" rows="4" placeholder="需求說明（若敘述較長可考慮 email 諮詢）"></textarea>
        </div>
        <div class="col-12 mt-4">
          <div class="fff-bg p-3 border">
            <div class="h5 mb-1">資通電子報</div>
            <div class="ares-checkbox">
              <label for="echeck"><input type="checkbox" name="echeck" id="echeck" value="1"> 訂閱（若勾選將會收到一封確認信）</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5 text-center">
        <div class="col-12">
          <span class="ares-checkbox">
            <label for="agree"><input type="checkbox" name="agree" id="agree" checked> 我已詳閱並同意<a href="https://www.ares.com.tw/privacy/" rel="noopener noreferrer" target="_blank" id="pop-agree" class="main-color">資通電腦隱私權聲明</a><span class="red">*</span></label>
          </span>
          <p class="danger er11 text-center">未勾選</p>
        </div>
        <div class="col-12 mt-3 ">
          <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div>
          <!-- <div class="cf-turnstile" data-sitekey="0x4AAAAAAALiACGGjHovuemF" data-theme="light" data-action="ARES-PP"></div> -->
        </div>
      </div>
    </fieldset>
    <div class="container text-center btn-ctrl mt-3" id="submit-area">
      <button type="button" class="btn btn-blue mb-3" id="submit-button"><span>立即預約專人諮詢</span></button>
     </div>
  </form>
</div>
<aside aria-hidden="true" id="contact-us-side">
  <div id="contact-us-side-title" class="main-bg fff-color text-center px-3 py-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="26" height="26"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>
  </div>
  <div id="contact-us-side-content" class="d-flex align-items-stretch">
    <div class="col-12 col-md-5 sub-bg fff-color text-center px-5 py-4 d-flex align-items-center justify-content-center">
      <div>
        <div class="h4">立即與我們聯繫</div>
        <div><a href="tel:+886-2-2522-1351,,301" tabindex="-1">(02)2522-1351 轉 301</a></div>
      </div>
    </div>
    <div class="col-12 col-md-7 gray-bg">
      <div class="row no-gutters align-items-center p-3">
        <div class="col-2 main-color">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="30" height="30"><path fill="currentColor" d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg>
        </div>
        <div class="col-10">
          <div class="sub-color"><a href="/contact/?side" tabindex="-1">表單諮詢</a></div>
          <small>填寫送出後，我們的專業人員將盡快與您聯繫</small>
        </div>
      </div>
      <div class="row no-gutters align-items-center p-3">
        <div class="col-2 main-color">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30" height="30"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
        </div>
        <div class="col-10">
          <div class="sub-color"><a href="mailto:jenny@ares.com.tw" tabindex="-1">Email</a></div>
          <small>如有任何建議或產品問題，歡迎寄電子郵件給我們</small>
        </div>
      </div>
    </div>
  </div>
</aside>
<!-- footer =============================================================================== -->
<footer id="footer">
  <div id="back-to-top">
    <a href="#header" title="Back to top">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="274 364 64 64">
        <path fill="#FFFFFF" d="M299.88,400.547l6.12-6.107l6.12,6.107l1.88-1.88l-8-8l-8,8L299.88,400.547z"/>
        <path fill="none" d="M290,380h32v32h-32V380z"/>
      </svg>
    </a>
  </div>
  <div class="container pt-4">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="h4 main-color">資安議題</div>
        <ul>
          <li class="my-1"><a class="py-1" href="/trend/trade-secret/">營業秘密保護管理規範</a></li>
          <li class="my-1"><a class="py-1" href="/trend/ISO27001/">ISO 27001 專區</a></li>
          <li class="my-1"><a class="py-1" href="/trend/telecommuting/">遠距辦公專區</a></li>
          <li class="my-1"><a class="py-1" href="/trend/EU-GDPR/">GDPR 專區</a></li>
        </ul>
        <div class="h4 main-color">檔案下載</div>
        <ul>
          <li class="my-1"><a class="py-1" href="/file/ARESPPMobileAPDReaderSetup_2.5.8332.26544_20230926.zip">隱私保鑣閱讀器</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="h4 main-color">成功案例</div>
        <ul>
          <li class="my-1"><a class="py-1" href="/best-practices/#list">客戶列表</a></li>
          <li class="my-1"><a class="py-1" href="/best-practices/#caseShare">案例分享</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="h4 main-color">DRM</div>
        <ul>
          <li class="my-1"><a class="py-1" href="/drm/">什麼是 DRM</a></li>
          <li class="my-1"><a class="py-1" href="/drm/#str">DRM 的運作架構</a></li>
          <li class="my-1"><a class="py-1" href="/drm/#howc">評估與導入</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-0">
        <div class="h4 main-color">聯絡我們</div>
        <ul>
          <li class="my-1"><a class="py-1" href="https://www.ares.com.tw/profile/">資通電腦簡介</a></li>
          <li class="my-1"><a class="py-1" href="/contact/">線上表單諮詢</a></li>
          <li class="my-1">Email：<span>jenny@ares.com.tw</span></li>
          <li class="my-1">電話：<span>02-25221351 ext.301</span></li>
          <li class="my-1">傳真：<span>02-25601735</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="b-area py-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-7 col-lg-6 order-2 order-sm-1 order-lg-1">
          <small>版權所有 &copy; <?= date('Y'); ?> 資通電腦股份有限公司</small>
        </div>
        <div class="col-12 col-sm-5 col-lg-6 order-1 order-sm-2 order-lg-2 text-left text-sm-right">
          <a href="/search/"><small>站內搜尋</small></a> | <a href="/sitemap/" accesskey="m"><small>網站地圖</small></a> | <a href="https://www.ares.com.tw/privacy/" rel="external"><small>隱私權聲明</small></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- <style>#loading{background-color:rgba(0,0,0,0.85);width:100%;height:100%;left:0;top:0;color:#fff;position:fixed;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;overflow:hidden;z-index:999999}#loading:before{content:attr(data-text);top:calc(50% - 63px);position:fixed;left:0;color:currentColor;text-align:center;width:100%;font-size:14px;-webkit-animation:blink 1s linear infinite alternate;-moz-animation:blink 1s linear infinite alternate;-o-animation:blink 1s linear infinite alternate;animation:blink 1s linear infinite alternate}#loading:after{content:'';position:fixed;width:48px;height:48px;border:8px solid #fff;border-left-color:transparent;border-radius:50%;top:calc(50% - 24px);left:calc(50% - 24px);-webkit-animation:rotation 1s linear infinite;-moz-animation:rotation 1s linear infinite;-o-animation:rotation 1s linear infinite;animation:rotation 1s linear infinite}@keyframes rotation{from{transform:rotate(0)}to{transform:rotate(359deg)}}@keyframes blink{from{opacity:.5}to{opacity:1}}</style> -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
<!-- <style>#loading{display:none!important}</style> -->
</noscript>
<!-- <div aria-hidden="true" id="loading" data-text="ARES PP 隱私保鑣 - 文件加密軟體"></div> -->
<script>
window.addEventListener("load",function(){
  var prload_css = document.querySelectorAll('link[as="style"]');
  var i = 0;
  for (i; i < prload_css.length; ++i){
    prload_css[i].rel='stylesheet';
  }
  // var LOADING = $("#loading");
  // LOADING.fadeOut(150,function(){
  //   LOADING.remove();
  // });
});
</script>
<svg class="d-none" aria-hidden="true">
  <defs>
    <symbol id="arrow-down" viewBox="0 0 10.177 6">
      <path d="M17.088,22.6,12,17.512l.912-.912,4.177,4.2,4.177-4.177.912.912Z" transform="translate(-12 -16.6)"/>
    </symbol>
    <symbol id="menu-icon" viewBox="0 0 80 80"><circle fill="#F69B75" cx="40" cy="40" r="40"></circle><path fill="#FFF" d="M52.712 46.934s-.005-.732-1.313-1.403c-.633-.325-1.575-1.156-2.971-1.448.357-.438.626-1.124.904-1.937.162-.472.135-.873.135-1.447 0-.419.067-1.1-.021-1.47-.309-1.259-1.086-1.607-1.996-1.607-.912 0-1.688.349-1.995 1.612-.091.371-.02 1.046-.02 1.465 0 .574-.03.979.134 1.451.23.669.447 1.245.715 1.674 1.545 1.071 1.688 2.258 1.69 2.632v1.723h4.738v-1.245zM31.289 46.462v-.007c.005-.373.146-1.543 1.66-2.608.275-.431.502-1.021.734-1.701.162-.472.135-.873.135-1.447 0-.419.067-1.1-.022-1.47-.308-1.259-1.085-1.607-1.995-1.607-.912 0-1.688.349-1.992 1.612-.093.371-.021 1.046-.021 1.465 0 .574-.027.979.134 1.451.279.817.544 1.5.899 1.938-1.382.292-2.316 1.124-2.947 1.449-1.306.665-1.311 1.397-1.311 1.397v1.244h4.727v-1.716zM45.043 44.537c-.873-.445-2.166-1.594-4.084-1.987.492-.604.862-1.548 1.245-2.662.222-.651.183-1.202.183-1.986 0-.582.096-1.513-.03-2.025-.424-1.728-1.489-2.209-2.744-2.209-1.251 0-2.318.481-2.74 2.215-.122.511-.026 1.439-.026 2.02 0 .788-.037 1.341.184 1.989.382 1.124.749 2.065 1.237 2.666-1.903.401-3.185 1.543-4.052 1.984-1.792.921-1.801 1.926-1.801 1.926v1.711H46.85v-1.711c0-.001-.009-1.009-1.807-1.931z"></path><g><path fill="#FFF" d="M39.918 65.644c-3.465 0-10.252-5.242-12.25-6.849-4.744-3.82-10.4-11.512-10.4-26.461 0-5.158 1.09-8.547 1.137-8.688l.621-1.901 1.938.502c.053.012 5.397 1.382 9.724 1.382 4.194 0 8.375-1.712 8.415-1.73l.797-.33.805.318c.044.018 4.46 1.742 8.544 1.742 4.252 0 9.684-1.371 9.736-1.385l1.949-.495.608 1.915c.045.146 1.125 3.598 1.125 8.671 0 14.9-5.668 22.596-10.422 26.428-2.01 1.613-8.83 6.881-12.327 6.881zm-17.902-38.79a30.422 30.422 0 0 0-.486 5.479c0 10.499 3.047 18.501 8.811 23.142 4.354 3.502 8.467 5.88 9.578 5.906 1.104-.024 5.34-2.47 9.653-5.94 5.777-4.655 8.833-12.647 8.833-23.107a30.57 30.57 0 0 0-.486-5.484c-2.16.446-5.617 1.04-8.671 1.04-3.818 0-7.684-1.184-9.316-1.749-1.601.572-5.357 1.749-9.244 1.749-3.103 0-6.529-.59-8.672-1.036z"></path></g></symbol>
  </defs>
</svg>
<script src="/lib/jquery.js?v=7" defer></script>
<script src="/public/js/main.js" defer></script>
<!-- <script src="https://www.google.com/recaptcha/api.js" defer async fetchpriority="low"></script> -->
<!-- <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer ></script> -->
<script src="/public/js/form.js?6" defer ></script>
<script>
// let pixelRatio = window.devicePixelRatio;
// let viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
// console.log(pixelRatio+'倍。');
// console.log(viewWidth+'px。');
</script>