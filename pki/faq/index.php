<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='常見問題';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='ares upki local service 必要的設定、安裝與常見問題';
$page['canonical']=HOST_LINK.'/faq/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/products/upki-banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '常見問題', //圖片上的字
  null //字的 class
);
?>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">常見問題</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
  <section itemscope itemtype="https://schema.org/FAQPage">
    <h1 class="text-center" itemprop="about name">必要的設定與安裝</h1><hr>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">upki 元件可能尚未安裝或被停用</h2>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <p>我們有 3 個版本，出現這個情況的使用者可能是使用比較舊的 ActiveX 版，這個版本只支援 IE 瀏覽器使用，如果使用者用的是 Chrome、FireFox、Edge 等瀏覽器請改用 IE 開啟網頁。</p>
          <p>若使用 IE 時還是出現「upki元件可能尚未安裝或被停用」時：</p>
          <ul class="disc">
            <li>檢查 IE 是否有開啟 ActiveX 控制項。可參考 <a class="text-info" href="https://support.microsoft.com/zh-tw/windows/%E4%BD%BF%E7%94%A8-internet-explorer-11-%E7%9A%84-activex-%E6%8E%A7%E5%88%B6%E9%A0%85-25738d05-d357-39b4-eb2f-fdd074bbf347" rel="noopener noreferrer" target="_blank">使用 IE 11 的 ActiveX 控制項</a>。</li>
            <li>第一次使用元件時，IE 底部會出現要求使用者允許啟用的訊息，請允許啟用。</li>
            <li>將 uPKI 元件移除後再重新安裝試試。</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">檢查 ARES uPKI local service 是否為啟用</h2>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <ul class="disc">
            <li class="mb-5">
              <p>7.6.0.28(含)之前的版本，請檢查<strong>工作管理員 → 服務</strong> 之中，名稱是「uPKI-Service」的服務狀態是否為「執行中」，如果不是請在此服務項目上按右鍵選擇「啟用」。</p>
              <img class="img-fluid" loading="lazy" width="800" height="266" src="/img/faq/ver1.jpg" alt="ARES uPKI local service是否為啟用(舊)">
            </li>
            <li class="mb-5">
              <p>7.6.0.29(含)之後的版本，請檢查<strong>工作管理員 → 開機</strong> 之中，名稱是「AresPKIAtxClientService」的狀態是否為「已啟用」，如果不是請在此服務項目上按右鍵選擇「啟用」。</p>
              <img class="img-fluid" loading="lazy" width="800" height="194" src="/img/faq/ver2.jpg" alt="ARES uPKI local service是否為啟用(新)">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">彈出式視窗</h2>
      <div class="row align-items-end" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div class="col-12 col-md-4 pb-3">
          <figure class="text-center">
            <a href="/img/faq/chrome.png" data-fancybox><img class="img-fluid" loading="lazy" width="559" height="331" src="/img/faq/chrome.png" alt="chrome"></a>
            <figcaption>chrome</figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4 pb-3">
          <figure class="text-center">
            <a href="/img/faq/firefox.png" data-fancybox><img class="img-fluid" loading="lazy" width="1080" height="179" src="/img/faq/firefox.png" alt="firefox"></a>
            <figcaption>firefox</figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4 pb-3">
          <figure class="text-center">
            <a href="/img/faq/ie.png" data-fancybox><img class="img-fluid" loading="lazy" width="977" height="140" src="/img/faq/ie.png" alt="ie"></a>
            <figcaption>IE</figcaption>
          </figure>
        </div>
      <p class="col-12" itemprop="text">有需要時，讓瀏覽器允許彈出式視窗。</p>
      </div>
    </div>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">安裝 ARES uPKI 安控元件</h2>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <p>ARES uPKI 安控元件可能被防毒軟體誤判為危險程式而導致安裝失敗。遇此情形時，請先暫時停用防毒軟體即時防護，即可安裝安控元件。待安裝完畢後，請記得啟用防毒軟體即時防護。</p>
          <p>（安控元件安裝檔、.NET Framework 4）</p>
        </div>
      </div>
    </div>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">IE 使用者</h2>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <p itemprop="text">IE 瀏覽器的使用者請將本系統網址加入信任的網站清單中。</p>
      </div>
    </div>
    <div class="container mb-5" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h2 class="mb-3 text-red" itemprop="name">ARES uPKI Local Service</h2>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <p itemprop="text">為了實現跨瀏覽器的元件應用，我們嵌入了一塊輕量級獨立服務框架，用來與本機端硬體聯繫。只要透過 HTTP 呼叫，就可與撰寫在獨立服務上的函式互動，可稱之為 <a class="text-info" href="https://marketing.ares.com.tw/newsletter/2018-03-cyber-security/it#:~:text=uPKI%20%E8%AE%93%E8%B3%87%E5%AE%89%E6%8E%A7%E7%AE%A1%E5%9C%A8%E4%B8%8D%E5%90%8C%E7%80%8F%E8%A6%BD%E5%99%A8%E6%9A%A2%E8%A1%8C%E7%84%A1%E9%98%BB" target="_blank" rel="noopener noreferrer">Local Service 技術</a>，如此一來，資安控管便能在不同瀏覽器暢行無阻。</p>
      </div>
    </div>
  </section>
  <section>
    <div class="container mb-5">
      <h2 class="mb-3">安控元件安裝手冊</h2>
      <p>PDF：<a class="text-info" href="/files/Ares_uPKI_安控元件安裝手冊_v1.08.pdf">Ares uPKI 安控元件安裝手冊 ver. 1.08</a></p>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>