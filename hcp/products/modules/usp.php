<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '薪資系統,高規格電子薪資單加密與發送';
$page['description'] = '採用與財政部網路報稅系統相同的 PKI 加密技術，強化薪資保密性，並透過 Email、網頁、app 行動化發放員工薪資通知與明細';
$canonical='https://hcp.ares.com.tw/products/modules/usp';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$another='<meta name="apple-itunes-app" content="app-id=1267753051" />';
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/usp'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='獨立模組';
$breadcrumb_text='薪資密封袋';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_other.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">薪資密封袋</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>薪資條電子化的「薪資密封袋」整合電子郵件的方便、快速及密碼加密，協助企業運用 Email、網頁、App 行動化方式，提供發放員工薪資通知與明細。並採用與財政部網路報稅系統相同的高規格資訊安全技術，以 <a href="https://pki.ares.com.tw/know-pki/" rel="noopener noreferrer" target="_blank">PKI 技術</a>加解密，確保資料在網路上安全、隱密地傳遞，沒有外洩疑慮。</p>
            <p>大幅節省人事、管理、財務部門的人力與時間，更提升薪資資訊保密性、降低人工錯誤，提供員工最新的即時資訊。</p>
          </div>
        </div>
        <figure class="text-center mt-3">
          <a href="/img/products/modules/usp/usp-bg.png" data-fancybox>
            <img class="img-fluid" src="/img/products/modules/usp/usp-bg-m.png" srcset="/img/products/modules/usp/usp-bg-m.png 1x,/img/products/modules/usp/usp-bg.png 2x" sizes="(min-width: 980px) 949px, 99vw" alt="透過薪資密封袋發送薪水電子檔，即使檔案被竊取別人也無法讀取">
          </a>
        </figure>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">透過電子薪資條，輕鬆又安全的發放員工薪資</h2>
        <hr>
        <ul>
          <li class="row py-5 align-items-center">
            <div class="col-12 col-sm-12 col-md-6">
              <h3 class="main-color h4">運用 PKI 技術，隱密傳遞無外洩疑慮</h3>
              <p>透過端點加密解密，密碼不外洩，加解密運算於 RAM（Random Access Memory；隨機存取記憶體）中，不儲存於本機端。傳輸過程中全程加密，資料庫儲存皆為密文，IT 人員亦看不到員工薪水。</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <figure class="text-center mt-3">
                <a href="/img/products/modules/usp/usp-bg-2.png" data-fancybox>
                  <img class="img-fluid" src="/img/products/modules/usp/usp-bg-2-m.png" srcset="/img/products/modules/usp/usp-bg-2-m.png 1x,/img/products/modules/usp/usp-bg-2.png 2x" alt="傳輸過程全程加密，透過端點加密解密，員工密碼不外洩" width="471" height="302" loading="lazy">
                </a>
              </figure>
            </div>
          </li>
          <li class="row py-5 flex-md-row-reverse align-items-center">
            <div class="col-12 col-sm-12 col-md-6">
              <h3 class="main-color h4">可與 HR 產品整合 迅速傳遞大量薪資訊息</h3>
              <p>不限制 HR 產品，皆可整合發送加密薪資條。於 HR 系統匯出薪資及加密，至員工電腦才進行解密，確保傳輸過程不外洩；員工可設定密碼或憑證（自然人憑證、金融憑證）加解密薪資，薪資訊息防護更有保障。</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <figure class="text-center mt-3">
                <a href="/img/products/modules/usp/usp-bg-3.png" data-fancybox>
                  <img class="img-fluid" src="/img/products/modules/usp/usp-bg-3-m.png" srcset="/img/products/modules/usp/usp-bg-3-m.png 1x,/img/products/modules/usp/usp-bg-3.png 2x" alt="員工可設定密碼，提升薪資防護" width="612" height="338" loading="lazy">
                </a>
              </figure>
            </div>
          </li>
          <li class="row py-5 align-items-center">
            <div class="col-12 col-sm-12 col-md-6">
              <h3 class="main-color h4">支援行動化介面 手機也能輕鬆獲取薪資資訊</h3>
              <p>在薪資電子化且不降低資安的前提下，薪資密封袋以 App 的方式提供使用者更為快速簡便的使用體驗；薪資通知從 Email 改為推播技術，增加主動性；簡潔與優化的界面，提升使用者操作便利性；薪資密封袋 App 發布在 Apple 及 Google 的公開商店上（App Store 及 Google Play），方便使用者即時獲取軟體最佳更新。</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <figure class="text-center mt-3">
                <a href="/img/products/modules/usp/usp-bg-4.png" data-fancybox>
                  <img class="img-fluid" src="/img/products/modules/usp/usp-bg-4-m.png" srcset="/img/products/modules/usp/usp-bg-4-m.png 1x,/img/products/modules/usp/usp-bg-4.png 2x" alt="員工透過薪資密封袋手機 App，即可快速查詢薪資資訊" width="352" height="400" loading="lazy">
                </a>
              </figure>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '如何一鍵將薪資條發送到員工信箱',
    'url' => 'https://marketing.ares.com.tw/newsletter/2024-03-hcp/e-payroll'
  )
  ,array(
    'text' => 'HCP 電子薪資條嚴謹加密，員工薪資防護滴水不漏',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-09-gov/hcp'
  )
  ,array(
    'text' => '薪資管理邁向雲端「e 袋」搞定',
    'url' => 'https://marketing.ares.com.tw/newsletter/2013-10/e'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>