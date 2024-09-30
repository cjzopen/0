<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

// $page['css']=array('/public/css/industry4.css','/public/css/newsletter-list.css');

$page['title'] = '智慧製造是什麼？了解關鍵技術、產業應用邁向智慧工廠';
$page['description'] = '智慧製造是將自動化設備與物聯網、雲端運算、大數據與AI應用緊密結合，建構出智慧工廠的製造過程，目的在提升生產效率、品質、資訊透明化和降低成本。而要規劃智慧工廠，需要哪些觀念及實施評估指標？帶你一次看懂。';
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/industry4/5m1e.png';
$canonical='https://cimes.ares.com.tw/industry-4.0/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="industry4">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/industry4/banner.jpg', //圖片
  '智慧製造', //圖片上的字
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">智慧製造</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <nav class="supmenu">
      <ul class="container text-center mb-0">
        <li><a href="#wut">智慧製造是什麼</a></li>
        <li><a href="#step">智慧製造怎麼做</a></li>
        <li><a href="#apply">智慧製造如何應用</a></li>
        <li><a href="#how">智慧工廠評估指標</a></li>
      </ul>
    </nav>
    <section id="wut">
      <div class="container">
        <h1 class="text-center mb-0 hr">智慧製造是什麼？</h1>
        <div class="text-center">
          <img class="img-fluid" src="/public/img/industry4/智慧製造.png" width="600" height="240" alt="智慧製造">
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>智慧製造是工廠透過既有的資訊自感知、自決策、自執行等功能的先進製造過程與模式，將「智慧機械」生產過程各環節與物聯網、雲端運算、大數據及 AI 人工智慧應用緊密結合，並透過網路整合端到端的數據流讓機器與機器、機器與人之間能相互溝通，以即時、量化的透明化管理取代傳統工廠製造作業管理模式，達到提升生產效率、品質、資訊透明化和降低成本的效益，協助製造業數位轉型，迎戰日益嚴峻的產業競爭！</p>
          </div>
        </div>
      </div>
    </section>
    <section id="step">
      <h2 class="text-center mb-0 hr">智慧製造怎麼做？</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>製造業數位轉型可利用智慧製造架構將生產方式轉為數位化，進而實現智慧製造。透過 IT 與 OT 系統整合，並運用 <a class="main-color" href="https://www.ares.com.tw/products/IoT/" target="_blank" rel="noopener noreferrer">IoT 物聯網</a>等智慧技術，即時掌握製造現場狀況，進行智慧化生產管理，達高效率、高品質之生產目標。工廠推動智慧製造可區分為 3 階段：</p>
            <h3>階段1：導入自動化設備</h3>
            <p>自動化是智慧製造的根基，透過導入自動化設備，可取代部分或全部人工作業，減少人員從事重複性及危險性高的生產行為，提升產線效能與產品標準化，實現人機協作生產管理。然而自動化的複雜度與投入成本高，企業需依自身條件做設備能力、自動化規模、自動化效益的評估。</p>
            <h3>階段2：建置機聯網</h3>
            <p>自動化並不等於智慧製造，還需結合物聯網、大數據、AI 等技術才具備智慧的元素。透過 IoT 物聯網讓工廠的設備連網，擷取機台設備所串出的資訊，可在製造過程中監控機台、生產參數、加工狀態、量測值等數據。</p>
            <h3>階段3：實現智慧化生產</h3>
            <p>將機聯網數據彙整進 <a class="main-color" href="/products/">MES 系統</a>加以分析應用。透過即時追蹤生產進度、收集與控制設備參數、分析與反饋製程參數，以及異常警示與機台預修保養等功能，有效提升生產稼動率與產品良率，實現工廠智慧化生產。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="apply">
      <h2 class="text-center mb-0 hr">智慧製造如何應用？</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>工廠邁向智慧製造，MES 是極其重要的基礎建設角色，當基礎建設打造的越紮實穩健，就有良好體質因應未來外部環境的變革與挑戰。透過 MES 結合先進技術打造即時、數據、可視化的工廠管理平台，讓製造過程自動化、數位化、智慧化，協助企業建構智慧工廠，進而實現智慧製造！</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 text-center">
            <div class="text-center"><img src="/public/img/industry4/how-1.svg" alt="*" width="128" height="128" loading="lazy" class="img-fluid"></div>
            <h3 class="mb-2 mt-0 text-center main-color">IoT 物聯網 數據串聯</h3>
            <ul class="disc d-inline-block">
              <li>統計分析，提前預防品質問題</li>
              <li>蒐集生產資料，檢驗製品品質</li>
              <li>建立生產履歷，回溯製程紀錄</li>
            </ul>
          </div>
          <div class="col-12 col-md-4 text-center">
          <div class="text-center"><img src="/public/img/industry4/how-2.svg" alt="*" width="128" height="128" loading="lazy" class="img-fluid"></div>
            <h3 class="mb-2 mt-0 text-center main-color">5G 通訊 多元整合應用</h3>
            <ul class="disc d-inline-block">
              <li>製程參數，可大量蒐集分析</li>
              <li>品質管理，可視化即時檢測</li>
              <li>AR 應用，即時解決機台異常</li>
            </ul>
          </div>
          <div class="col-12 col-md-4 text-center">
          <div class="text-center"><img src="/public/img/industry4/how-3.svg" alt="*" width="128" height="128" loading="lazy" class="img-fluid"></div>
            <h3 class="mb-2 mt-0 text-center main-color">可視化管理 掌控狀況</h3>
            <ul class="disc d-inline-block">
              <li>在製品查詢，掌握生產進度</li>
              <li>電子看板，即時控生產狀態</li>
              <li>報表平台，供管理決策參考</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="concept">
      <h2 class="text-center mb-0 hr">智慧製造成功的三大觀念</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">工廠自動化不等於變智慧</h3>
            <p>製造業工廠自動化風潮日漸盛行，許多製造業者期望透過智慧機械取代人力減少成本，並增加產品良率。但自動化若未能與供應鏈、生產線進行資訊上的串接，所耗費成本與支出往往不符合經濟效益。</p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">團隊是關鍵</h3>
            <p>建構智慧工廠需有高階主管的支持，使用者的配合、關鍵用戶的投入，以及 IT 維運單位的後援，撇除舊思維團隊是最重要的關鍵，再加上經驗豐富的 MES 顧問團隊才能成功導入智慧製造。</p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="mb-2 dline">務必分階段發展</h3>
            <p>打造智慧工廠需建立執行計畫與時程，包括每階段的目標以及績效檢核。譬如：先構建精實管理數位化平台，再實施數位轉型智能化，明確規範各階段目標與效益。建議以三年到五年分階段實施，並設定明確的財務績效指標。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="how">
      <div class="container">
        <h2 class="text-center mb-0 hr">建構智慧工廠四大評估指標是什麼？</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8 pb-3 mb-4">
            <div>
              <p class="pb-3 d-inline">虛實化整合、物聯網、智能設備與機器人的應用，會因應製造管理需求與現場狀況而有所不同；想當然在建構智慧工廠上也不盡相同。而企業轉型智慧製造都是為了改善工廠端的生產管理問題與瓶頸，除了考量到系統資料收集與實際作業上的適用性、便利性外，建議台灣製造業打造智慧工廠邁向智慧製造時，可透過整體投資效益分析決定應先實施的面向：</p>
              <ul class="disc">
                <li>智慧生產</li>
                <li>智慧設備</li>
                <li>綠色生產</li>
                <li>智慧行銷</li>
              </ul>
              <p>利用此四大評估指標，讓企業盡速達成期望的智慧製造目標。</p>
            </div>
            <div class="text-right"><img src="/public/img/industry4/曾文光.png" width="100" height="100" loading="lazy" alt="mes產品總監曾文光"> ciMes 產品總監 <span>曾文光</span></div>
          </div>
        </div>
      </div>
    </section>
    <section id="key">
      <div class="container">
        <h2 class="text-center mb-0 hr">打造智慧工廠的關鍵</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>智慧工廠是自動化生產的躍升，除了善用機器設備提升製程效率與產品良率，降低人力成本與錯誤率外，MES 系統可以說是智慧工廠的核心關鍵。善用 MES 的工廠建模（Modeling）工具，可將生產過程中的工單／製令、生產設備、產品、物料、生產區域等實體生產要件，轉化成可控制的數據與製程。將這些資訊透過雲端管理和監控，再搭配感測元件與廠內行動管理及智能設備，即可不受地域與時間的限制，隨時掌握生產相關資訊，達到智慧產品、智慧流程、智慧生產的智慧工廠目標。</p>
          </div>
        </div>
        <div class="text-center">
          <img src="/public/img/industry4/智慧製造關鍵.png" width="800" height="602" loading="lazy" alt="成為智慧工廠的關鍵" class="img-fluid">
        </div>
      </div>
    </section>
    <section id="hold">
      <div class="container">
        <h2 class="text-center mb-0 hr">實踐智慧工廠自動化生產</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>工廠自動化是指運用自動裝置系統，控制生產流程與設備，整合電腦技術、自動化技術、感測激光技術、機械設備等條件，使產品能自動製造，或部分加工自動完成的技術。透過工廠自動化系統，將各種自動化設備、生產線整合起來，搭配電腦程式設計與 MES，由中央電腦統一管理，工作流程能夠更加順暢、安全、便利。</p>
            <p>近年隨著工業 4.0 蓬勃發展，智慧工廠、智慧農業、智慧醫療等工廠自動化的運用已成為趨勢。根據資策會統計，目前全球智慧工廠的規模超過每年 2 千億美元，預估 3 年後將達 3 千億美元。而台灣企業該如何建構智慧工廠平台與應用呢？事前要如何妥善規劃評估，才能找到適應企業的 MES 製造執行系統解決方案呢？要怎麼透過虛實化整合、物聯網、智能設備與機器人應用構建適用性高的智慧工廠？MES 將會是智慧工廠建置與邁向工業 4.0 的決勝關鍵與主軸。</p>
          </div>
        </div>
        <div class="text-center pt-4">
          <a class="btn btn-cimes m-size mb-3" href="https://marketing.ares.com.tw/newsletter/2020-07-cimes/virtual-factory-modeling-mes">可視化管理建構虛擬工廠</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0 hr">MES 結合智慧科技，智慧工廠再升級</h2>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>隨著新技術崛起，新技術的應用必須落實在根基穩固的 MES 製造管理平台上，才能得到更好的發展。資通電腦 ciMes 製造管理平台能協助企業打造紮實的基礎建設，並結合市場上的新技術，協助客戶因應未來多元的應用與發展！</p>
          </div>
        </div>
        <div class="text-center">
          <img src="/public/img/industry4/mes智慧科技.png" width="800" height="460" loading="lazy" alt="MES運用於IoT與大數據" class="img-fluid">
        </div>
      </div>
    </section>
    <section id="case">
      <div class="container">
        <h2 class="text-center mb-0 h2">智慧製造案例分享</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <ul class="disc">
              <li class="mb-3 h4">
                <span>自動化：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-hosong">和頌</a>／<a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-gbco">新高生科</a>
              </li>
              <li class="mb-3 h4">
                <span>智慧生產：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/industry4-Everest-ciMes">宏遠</a>
              </li>
              <li class="mb-3 h4">
                <span>製程可視化：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/sanan-led-mes">三安光電</a>
              </li>
              <li class="mb-3 h4">
                <span>智慧供應鏈：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/chimei-kunshan-adopt-ciMes">奇美</a>／<a class="main-color" href="https://www.ares.com.tw/events/cimes-userstory-kinsus">景碩</a>
              </li>
              <li class="mb-3 h4">
                <span>智慧場域：</span>
                <a class="main-color" href="https://www.ares.com.tw/events/cimes-itri-smart-manufacturing">工研院</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <div class="text-center ratio-box">
              <iframe style="max-width:100%;" width="560" height="315" src="https://www.youtube.com/embed/Sfz1TyMnmIk?si=F6lFZMZWnbxMgNLZ" title="影片：運用MES智慧示範場域體驗智慧工廠建構" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "運用MES智慧示範場域體驗智慧工廠建構",
  "description": "如何透過智慧場域建構 4.0 自動化無人工廠？而智慧場域有哪些是可以實際應用在各企業當中？又該如何應用呢？ciMes 提供建構智慧工廠更深入的剖析。",
  "thumbnailUrl": [
    "https://cimes.ares.com.tw/public/img/best-practices/video-3.jpg"
   ],
  "uploadDate": "2020-02-27T11:00:00+08:00",
  "duration": "PT1M21S",
  "contentUrl": "https://www.youtube.com/watch?v=Sfz1TyMnmIk",
  "embedUrl": "https://cimes.ares.com.tw/industry-4.0/"
}
</script>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/sda.js" defer></script>
<!-- <script src="/public/js/supmenu.js" defer></script> -->
<!-- <script src="/lib/rwdtable/rwd-table.min.js" defer></script> -->
<!-- <script src="/public/js/industry4.js" defer></script> -->
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
</body>
</html>