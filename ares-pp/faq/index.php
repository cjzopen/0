<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '免費加密軟體與付費差異分析';
$page['description'] = '免費加密軟體那麼多，為何需要購買資料加密軟體？無感加密是什麼？文件也能加密跟控管權限嗎？一起來了解檔案加密常遇到的問題與因應方式。';
$page['css']=array('/public/css/faq.css');
$canonical ='https://ares-pp.ares.com.tw/faq/';
// $hreflang = '';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/faq/banner.webp', //圖片
  '<span>常見問題</span>', //圖片上的字
  'fff-color' //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">檔案加密常見問題</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <h1 class="text-center">檔案加密常見問題</h1>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2">
            <h2 class="main-color mb-2 pt-5" data-count="1">免費加密軟體那麼多，甚至 Windows 和 Office 本身就有加密功能，購買加密軟體的必要性在哪裡？</h2>
            <div>
              <div>
                <p>「免費加密軟體」只有基本功能，防君子無法防小人，只有個人才會考慮使用；企業有許多機密文件，運用免費軟體防竊與防駭，隱藏著非常大的風險。</p>
                <p>ARES PP 可以設定精細的使用者權限、列印權限或次數，隨時監控文件使用軌跡、異常文件召回…等功能，協助企業嚴格把關機密文件流向。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block order-1 text-right">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-3.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="main-color mb-2 pt-5" data-count="2">已嚴格要求員工保密，還有必要再花錢買加密軟體嗎？</h2>
            <div>
              <div>
                <p>企業資安調查報告指出，前十大企業資安風險中以員工缺乏資安意識排名第一，其次為資安工具提供的資訊不足。而資安事件的主要問題來源是以駭客位居第一（60%），其次為內部員工（35%）。</p>
                <p>就算企業從 SAN（Storage Area Network，儲存區域網絡）或 NAS（Network Attached Storage，網路附加儲存）退回更古老但相對安全的磁帶搬移方式，「人」的管理永遠是最困難的。在國內外還是有無數資料遺失的案例，證實了即使是透過專業保全公司搬運或保存磁帶，資安問題仍無法完全解決。</p>
                <p>另外，當駭客的門檻也越來越低，重放攻擊、DoS 攻擊、已知漏洞的攻擊…等技術也越來越簡單，甚至還能直接花錢請駭客輔助攻擊標的。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-2.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section class="pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2">
            <h2 class="main-color mb-2 pt-5" data-count="3">什麼樣的企業需要加密軟體？</h2>
            <div>
              <div>
                <p>只要有機密檔案的企業都需要加密軟體保護！</p>
                <p>通常企業是靠封閉式的內部網路傳遞與儲存檔案，但在雲端和與第三方合作機會越來越多的現在，完全封閉的情況被打破，資安風險也就跟著上升。就算只是文本傳遞，也不乏有「內賊」出沒。</p>
                <p>根據 FBI 與 CSI 的統計，美國有高達 50～80% 的攻擊是來自防火牆內部。也就是說，即使企業不與外界網路連結，也可能遭受來自內部的非授權存取風險，在這種情況下，只有直接對資料加密才能防止外洩。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block order-1 text-right">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-1.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="main-color mb-2 pt-5" data-count="4">ARES PP 與其他加密軟體相比，優勢在哪裡？</h2>
            <div>
              <div>
                <p>ARES PP 可支援 Office 版本更新。有些加密軟體只要一升級 Office 就無法操作，更嚴重會導致加密檔案毀損，造成企業損失。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-4.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2">
            <h2 class="main-color mb-2 pt-5" data-count="5">浮水印功能只能防君子跟當作事後控告的證據？</h2>
            <div>
              <div>
                <p>顯性浮水印，主要為嚇阻作用，讓竊取者無法將檔案公開引用；隱性浮水印，主要為版權追溯的判別，保障企業智財權。如果真的要防止資料外洩，建議直接做好檔案加密，讓有心人士就算拿到檔案，也無法開啟觀看。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block order-1 text-right">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-5.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="main-color mb-2 pt-5" data-count="6">ARES PP 的無感加密是多無感？加密方式又是什麼？</h2>
            <div>
              <div>
                <p>存檔即自動加密，無延遲時間，使用者無感操作。</p>
                <p>ARES PP 使用核心層加解密方式，優點為不改變使用者操作習慣，並能依據使用者的身份與群組，限制存取檔案的權限，如：複製、編輯、列印、截圖等功能。在建置架構方面，大多採用 Client-Server。在系統運作上，通常會由管理伺服器設定要管制特定的應用程式及發佈用戶端權限；而用戶端方面，則會由用戶端程式加密檔案及權限控管。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-6.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2">
            <h2 class="main-color mb-2 pt-5" data-count="7">ARES PP 如何做到權限分配？有權限的人如何開啟加密檔案？</h2>
            <div>
              <div>
                <p>可依據人員或群組授權。針對檔案授權給群組（AD 組織或群組）或者個人，不在授權內的群組或人員皆無法開啟。有權限者直接點擊檔案就可開啟加密檔案，不改變使用習慣。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block order-1 text-right">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-7.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="main-color mb-2 pt-5" data-count="8">外發的文件有異常，沒網路的情況下也能召回嗎？</h2>
            <div>
              <div>
                <p>ARES PP 在外發文件時，通常建議設定為只允許「連線開啟」。當有需要離線開啟「無網路狀態」時，也可以透過設定文件到期日管控文件。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-8.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2">
            <h2 class="main-color mb-2 pt-5" data-count="9">如何做到檔案傳輸給外面的合作廠商也有加密與權限限制？</h2>
            <div>
              <div>
                <ul class="disc">
                  <li><strong>自然人憑證：</strong>因為檔案機密等級的因素，透過整合自然人實體憑證的驗證方式，強化驗證程序，達到防止密碼被盜用的風險。</li>
                  <li><strong>ARES MOTP：</strong>整合資通的 MOTP 方案，只要透過手機 App 或簡訊獲得 MOTP 密碼，進入系統端執行登入，再透過系統端的軟體與 MOTP Server 驗證，即完成 MOTP 登入。</li>
                  <li><strong>簡訊雙重認證：</strong>一般檔案的保護為帳號與密碼保護，當檔案與密碼一同被外洩時，這時檔案保護機制也形同虛設。透過資通隱私保鑣的簡訊雙重保護，在每次開啟檔案時，除了輸入帳號資訊外，系統也會發送 OTP（One Time Password）至您已註冊的手機，即使檔案與密碼外流也不用擔心。</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block order-1 text-right">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-9.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="main-color mb-2 pt-5" data-count="10">檔案容量太大，會影響 ARES PP 的檔案加密或開啟速度嗎？</h2>
            <div>
              <div>
                <p>檔案容量大小不會影響加密速度，檔案儲存當下立即完成加密。如果檔案容量很大，在開啟檔案時，ARES PP 會透過看多少解密多少的方式，不影響使用者閱讀體驗。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="300" height="300" src="/public/img/faq/faq-10.png" alt="*">
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
$rs=null;
$db=null;
$row=null;
?>
</div>
</body>
</html>