<?php
if($contact>=1){
  include($_SERVER['DOCUMENT_ROOT'].'/template/form.php');
}
?>
<aside id="contact-us-side">
  <div id="contact-us-side-title" class="main-bg fff-color text-center px-3 py-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="26" height="26"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>
    <div>聯絡我們</div>
  </div>
  <div id="contact-us-side-content" class="d-flex align-items-stretch">
    <div class="col-12 col-md-5 sub-bg fff-color text-center px-5 py-4 d-flex align-items-center justify-content-center">
      <div>
        <div class="h4">立即與我們聯繫</div>
        <div>(03)571-6622 轉 777</div>
      </div>
    </div>
    <div class="col-12 col-md-7 gray-bg">
      <div class="row no-gutters align-items-center p-3">
        <div class="col-2 main-color">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="30" height="30"><path fill="currentColor" d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg>
        </div>
        <div class="col-10">
          <div class="sub-color"><a href="/contactus/">表單諮詢</a></div>
          <small>填寫送出後，我們的專業人員將盡快與您聯繫</small>
        </div>
      </div>
      <div class="row no-gutters align-items-center p-3">
        <div class="col-2 main-color">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30" height="30"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
        </div>
        <div class="col-10">
          <div class="sub-color"><a href="mailto:daphnelu@ares.com.tw">Email</a></div>
          <small>如有任何建議或產品問題，歡迎寄電子郵件給我們</small>
        </div>
      </div>
    </div>
  </div>
</aside>
<!-- footer =============================================================================== -->
<footer id="footer">
  <div id="back-to-top">
    <a href="" title="Back to top" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="274 364 64 64">
        <path fill="#FFFFFF" d="M299.88,400.547l6.12-6.107l6.12,6.107l1.88-1.88l-8-8l-8,8L299.88,400.547z"/>
        <path fill="none" d="M290,380h32v32h-32V380z"/>
      </svg>
    </a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="py-3 mb-4 mt-3 border border-white border-top-0 border-left-0 border-right-0 main-color">認識 MES</div>
        <ul>
          <li><a href="/knowmes/">什麼是 MES</a></li>
          <li><a href="/knowmes/how/">如何選 MES</a></li>
          <li><a href="/knowmes/why/">為何選 ciMes</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="py-3 mb-4 mt-3 border border-white border-top-0 border-left-0 border-right-0 main-color">核心模組</div>
        <ul>
          <li><a href="/products/module/wip.php">WIP 在製管理系統</a></li>
          <li><a href="/products/module/qc.php">QC 品質管理系統</a></li>
          <li><a href="/products/module/tooling.php">Tooling 零配件管理系統</a></li>
          <li><a href="/products/module/pm.php">PM 機台預修保養</a></li>
          <li><a href="/products/module/mms.php">MMS 物料管理系統</a></li>
          <li><a href="/products/module/cms.php">CMS 載具管理系統</a></li>
          <li><a href="/products/module/wrp.php">WRP 報表系統</a></li>
          <li><a href="/products/module/lms.php">LMS 標籤管理系統</a></li>
          <li><a href="/products/module/alm.php">ALM 警示管理系統</a></li>
          <li><a href="/products/module/eks.php">EKS 電子看板系統</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="py-3 mb-4 mt-3 border border-white border-top-0 border-left-0 border-right-0 main-color">MES 成功案例</div>
        <ul>
          <li><a href="/best-practices/automotive">汽車/車用零件</a></li>
          <li><a href="/best-practices/large-assembly">超大型組裝</a></li>
          <li><a href="/best-practices/metal-assembly">金屬加工</a></li>
          <li><a href="/best-practices/injection-moulding">射出成型</a></li>
          <li><a href="/best-practices/lcd">LCD</a></li>
          <li><a href="/best-practices/led">LED</a></li>
          <li><a href="/best-practices/semiconductor">半導體</a></li>
          <li><a href="/best-practices/others">其他</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3" itemscope itemtype="http://schema.org/Organization">
        <div class="py-3 mb-4 mt-3 border border-white border-top-0 border-left-0 border-right-0 main-color">聯絡我們</div>
        <meta itemprop="url" content="https://cimes.ares.com.tw">
          <ul itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint">
            <meta itemprop="contactType" content="customer service">
            <li><a href="https://www.ares.com.tw">資通電腦官網</a></li>
            <li>Email：<span itemprop="email">daphnelu@ares.com.tw</span></li>
            <li>電話：<span itemprop="telephone" content="+886-3-571-6622#777">(03)571-6622 ext. 777</span></li>
            <li>傳真：<span itemprop="faxNumber" content="+886-3-571-7889">(03)571-7889</span></li>
            <li>
              <a href="https://www.facebook.com/AresInternational/" title="資通粉絲團">
                <svg width="36" height="36" viewBox="-12 -12 48 48" fill="currentColor">
                  <path d="M17.999,0.006L14.888,0c-3.496,0-5.756,2.318-5.756,5.906v2.725H6.002c-0.271,0-0.49,0.219-0.49,0.488v3.945 c0,0.271,0.219,0.49,0.49,0.49h3.129v9.956C9.131,23.781,9.351,24,9.62,24h4.084c0.27,0,0.488-0.219,0.488-0.488v-9.957h3.66 c0.27,0,0.487-0.219,0.487-0.49l0.002-3.944c0-0.129-0.051-0.254-0.143-0.346c-0.093-0.092-0.218-0.143-0.349-0.143h-3.66V6.322 c0-1.111,0.267-1.674,1.711-1.674h2.097c0.271,0,0.489-0.221,0.489-0.49V0.494C18.489,0.225,18.271,0.006,17.999,0.006z"></path>
                </svg>
              </a>
              <a href="https://www.youtube.com/@AresTaiwan" accesskey="y" title="資通 youtube 頻道">
                <svg width="36" height="36" viewBox="-12 -12 48 48" fill="currentColor">
                  <path d="M19.016,3.508H4.984C2.231,3.508,0,5.74,0,8.494v7.014c0,2.752,2.231,4.984,4.984,4.984h14.031 c2.753,0,4.984-2.232,4.984-4.984V8.494C24,5.74,21.769,3.508,19.016,3.508z M15.645,12.342l-6.563,3.129 c-0.176,0.084-0.377-0.043-0.377-0.236V8.777c0-0.195,0.207-0.322,0.383-0.234l6.563,3.326 C15.846,11.967,15.842,12.248,15.645,12.342z"></path>
                </svg>
              </a>
            </li>
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
        <a href="/search/"><small>站內搜尋</small></a> | <a href="/sitemap/" accesskey="m"><small>網站地圖</small></a> | <a href="https://www.ares.com.tw/privacy/"><small>隱私權聲明</small></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="/lib/jquery.js?v=3.6.1" defer></script>
<script src="/public/js/main.js?t=2021" defer></script>
<?php
if($contact>=1){
  echo '<script src="/public/js/form.js?v=2" defer fetchpriority="low"></script>';
}
?>
<?php //include_once "/example/global/cookie-notification.php"; ?>