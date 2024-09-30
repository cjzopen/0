<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='KnowBe4 資訊安全課程：網路釣魚演練，防社交工程攻擊｜資通電腦';
$page['description']='KnowBe4 線上資安課程，是全球最大的安全意識培訓和模擬網路釣魚平台，協助企業培訓員工安全意識，遏阻網路釣魚與社交工程攻擊，保護企業資產。';
$page['canonical']='https://www.ares.com.tw/products/knowbe4/';
// $page['css']=array('/lib/swiper9/style.css','/css/product-recruiting.css');
$page['css']=array('/css/product-knowbe4.css');
$page['ogimage']='https://www.ares.com.tw/img/product/knowbe4/og.jpg';

include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include (__DIR__.'/_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">KnowBe4</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once ('_nav.php');
?>
  </div>
  <main class="bg-gray">
    <section id="main-header" class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h1 class="color-main">KnowBe4 <br>資訊安全課程領導品牌</h1>
            <p>Knowbe4 是領先業界的資安意識培訓平台，提供企業資安意識培訓課程。課程涵蓋了最新的資安威脅和防護技巧，幫助您的員工提升資安防護意識，抑制釣魚攻擊、勒索軟體、惡意軟體與<a class="color-blue" href="https://marketing.ares.com.tw/newsletter/2024-01-gov/social-engineering" target="_blank" rel="noopener noreferrer">社交工程</a>攻擊等資安風險。</p>
          </div>
          <div class="col-12 col-md-6">
            <img class="img-fluid" loading="lazy" width="500" height="303" src="/img/product/knowbe4/KonwBe4.svg" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 text-center d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="380" height="380" src="/img/product/knowbe4/KonwBe4-2.svg" alt="*">
          </div>
          <div class="col-12 col-md-6">
            <h2 class="dline">KnowBe4 培訓企業資安的最後一道防線</h2>
            <p>KnowBe4 擁有 1,400 多個資訊安全意識課程項目，且支援 30 多種語言，能協助企業培訓員工提升網路安全知識。</p>
            <p>KnowBe4 使用起來非常直觀，因為它專為繁忙的 IT 與 HR 人員而設計，讓您的員工都能做出風險最低的資安決策，成為企業中最後一道且最堅固的防火牆。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="fishing" class="bg-lazyload" data-image="/img/product/knowbe4/douknow-bg.jpg">
      <div class="container">
        <h2 class="text-center mb-4">你知道企業數據外洩有 91% 都是從魚叉式網路釣魚攻擊開始的嗎？</h2>
        <div class="row justify-content-center">
          <div class="col col-md-9">
            <p>現今的 IT 人員已經意識到，企業迫切需要模擬網路釣魚作為額外的保護手段，避免遭受勒索軟體、惡意軟體與社會工程的攻擊。如今，企業內部的網路釣魚測試與擁有防毒軟體和防火牆一樣重要。這是修補資安最後一道防線最有效的方法。</p>
          </div>
        </div>
        <div class="text-center"><em class="h4 color-main">"為什麼？因為您自己不這樣做，駭客就會這麼做！"</em></div>
      </div>
    </section>
    <section class="bg-white">
      <div class="container">
        <h2 class="text-center hr">網路釣魚常見問題</h2>
        <h3>網路釣魚是什麼？</h3>
        <p>指透過電子郵件偽裝成值得信賴的對象，像是知名社交網站、銀行、公司 IT 管理員、人力資源部，甚至是老闆的電子郵件，試圖逃避垃圾郵件過濾器，進而獲取敏感資訊（例如：使用者名稱、密碼和信用卡詳細資訊）的行為。</p>
        <h3>如何確保垃圾郵件過濾器可擋掉釣魚信件？</h3>
        <p>KnowBe4 的郵件伺服器安全評估（MSA）可發送 40 種不同類型的釣魚測試電子郵件，來測試您的郵件伺服器配置，以檢查郵件過濾規則的有效性。</p>
        <h3>釣魚信件一定有惡意連結或附件嗎？</h3>
        <p>有些精心設計的釣魚信件不會有連結或附件，主要目的是誘騙用戶回覆電子郵件並執行操作，造成企業的金錢或資料損失。KnowBe4 的網路釣魚回覆測試（PRT）可檢查組織中會回覆網路釣魚信件攻擊有哪些關鍵人員，讓企業提早採取預防行動。</p>
        <h3>收到疑似釣魚信件該怎麼做？</h3>
        <p>千萬不要自行刪除不回報，往往會錯失預警防範的良機。KnowBe4 的網路釣魚警報按鈕提供安全回報的方法，只要一鍵按鈕就可將疑似釣魚郵件轉發給安全團隊進行分析，並從收件匣中刪除釣魚電子郵件防止威脅。</p>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 col-md-6">
            <h2 class="dline">有感的資訊安全意識培訓成果</h2>
            <p>原本用戶被網路釣魚的平均比例高達 33.2%，在培訓後的 90 天內，網路釣魚比例降至 18.5%，十二個月後更降至 5.4%。</p>
            <p>通過定期的隨機網路釣魚安全測試和培訓課程，您將看到您的員工如何隨著時間推移而進步的資安意識，進而降低風險並提高您的 IT 安全防禦能力。再加上基於機器學習的企業級報告，幫助您及時了解您的安全意識計畫和員工與同業中其他公司的比較情況，並與您的管理團隊分享重要情報！</p>
            <a href="/products/knowbe4/consult/" class="w-100 btn rounded-pill bg-main color-white">讓我們協助您解決社交工程攻擊問題！</a>
          </div>
          <div class="col-12 col-md-6">
            <img class="img-fluid" loading="lazy" width="860" height="600" src="/img/product/knowbe4/PPPChart-WhiteCopy.png" alt="有感的資訊安全意識培訓成果">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-md-6 order-md-2">
            <h2 class="dline">KnowBe4 解決方案被多方認可</h2>
            <p>KnowBe4 也被《<a href="https://reprints2.forrester.com/#/assets/2/1795/RES176325/report" rel="noopener noreferrer" target="_blank">Forrester Wave™：2022 年第一季度安全意識和培訓解決方案</a>》評為領導者，並在市場性和戰略性獲得了最高評價，全球超過 60,000 個組織使用。</p>
          </div>
          <div class="col-12 col-md-6 order-md-1">
            <img class="img-fluid" loading="lazy" width="860" height="900" src="/img/product/knowbe4/WaveReport-2022.png" alt="Forrester Wave的認可">
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white">
      <h2 class="text-center hr">KnowBe4 資安平台特色與效益</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1101" height="701" src="/img/product/knowbe4/安全意識培訓計畫.png" alt="安全意識培訓">
            </div>
            <h3 class="h4 text-center color-main">安全意識培訓計畫</h3>
            <p>許多 IT 在規劃資安培訓時並不完全知道該從哪裡開始著手，或哪些資安計畫適合他們的組織文化。KnowBe4 的自動化安全意識計畫建構器（ASAP）透過了解有關您的組織目標、合規需求和企業文化的七個問題，就能快速建構企業專屬的安全意識計畫。</p>
          </div>
          <div class="col-12 col-md-6 mb-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1101" height="701" src="/img/product/knowbe4/模擬網路釣魚內容.png" alt="模擬網路釣魚">
            </div>
            <h3 class="h4 text-center color-main">模擬網路釣魚內容</h3>
            <p>內建 24,000 多條高度真實的網路釣魚電子郵件模版，包含銀行金融、社群媒體、IT、政府、新聞時事、醫療保健…等類別。您可自訂登陸頁面，也可安排隨機發送，讓每個員工在不同的工作時間收到不同網路釣魚電子郵件，測試員工對釣魚信件的反應能力。</p>
          </div>
          <div class="col-12 col-md-6 mb-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1101" height="701" src="/img/product/knowbe4/企業控制台儀表板.png" alt="平台介面">
            </div>
            <h3 class="h4 text-center color-main">企業控制台儀表板</h3>
            <p>創新的虛擬風險官（VRO）功能使用機器數據學習，可查看您組織的風險評分落點，並與您的同行進行比較。以及您企業的釣魚網站傾向百分比，有多少員工可能點擊釣魚網站電子郵件。</p>
          </div>
          <div class="col-12 col-md-6 mb-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1101" height="701" src="/img/product/knowbe4/員工學習管理平台.png" alt="員工學習管理平台">
            </div>
            <h3 class="h4 text-center color-main">員工學習管理平台</h3>
            <p>員工可以在排行榜上與同儕競爭，在學習如何保護自己和企業免受網路攻擊的過程中獲得獎勵徽章。員工可以看到他們的培訓狀態和培訓截止日期。</p>
          </div>
          <div class="col-12 col-md-6 mb-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="1101" height="701" src="/img/product/knowbe4/分析報告.png" alt="分析報告">
            </div>
            <h3 class="h4 text-center color-main">分析報告</h3>
            <p>包含網路釣魚報告、培訓報告與高級報告，可設定報告產生日期與發送頻率。高級報告提供 60 多個內置集合，企業可自行組合不同培訓指標，創建詳細的分析報告，並可利用報告 API 建立自訂報表與其它 BI 系統整合，幫助企業做出有效的資安決策。</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <h2 class="text-center hr">客戶見證</h2>
      <div class="container">
        <p class="text-center">KnowBe4 協助提高銀行、金融、軟體、招聘、醫療保健、政府、保險等行業領域的網路安全。</p>
        <div class="row mt-5">
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Telkom(電信).pdf" class="stretched-link h5">電信</a>
              <div class="h3">Telkom</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/ABAX(資料處理).pdf" class="stretched-link h5">資料處理</a>
              <div class="h3">ABAX</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Capitec(金融服務).pdf" class="stretched-link h5">金融服務</a>
              <div class="h3">Capitec</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Marthas-Vineyard-Bank(銀行業).pdf" class="stretched-link h5">銀行業</a>
              <div class="h3">Martha's-Vineyard-Bank</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/OnSolve(風險情報公司).pdf" class="stretched-link h5">風險情報公司</a>
              <div class="h3">OnSolve</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/TXTe(軟體供應商).pdf" class="stretched-link h5">軟體供應商</a>
              <div class="h3">TXTe</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Censia(招聘科技).pdf" class="stretched-link h5">招聘科技</a>
              <div class="h3">Censia</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/City-of-Sarasota(市政府).pdf" class="stretched-link h5">市政府</a>
              <div class="h3">City-of-Sarasota</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Sun-Chemical(印刷油墨).pdf" class="stretched-link h5">印刷</a>
              <div class="h3">Sun-Chemical</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/University-Oklahoma(高等教育).pdf" class="stretched-link h5">教育</a>
              <div class="h3">University-of-Oklahoma</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Whitbread(觀光).pdf" class="stretched-link h5">觀光</a>
              <div class="h3">Whitbread</div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="case rounded p-4 pr-5 position-relative h-100 bg-white">
              <a href="/files/pdf/knowbe4/Depop(時尚).pdf" class="stretched-link h5">時尚</a>
              <div class="h3">Depop</div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/lib/swiper9/script.js" defer></script>
<script>
window.addEventListener("load", (e) => {
  const swiper = new Swiper('#case-swiper', {
    loop: true,
    allowTouchMove: false,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
</script> -->
</body>
</html>

