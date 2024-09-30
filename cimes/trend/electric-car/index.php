<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/public/css/electric-car.css');

$page['title'] = '用MES瞄準「電動車」6 兆美元商機';
$page['description'] = '預計到2035年電動車產值有望達到6兆美元，對於台灣車用廠商是絕佳的進入機會。想提升製造與應變力，導入MES是關鍵！';
$canonical='https://cimes.ares.com.tw/trend/electric-car/';
$page['ogimage']='https://cimes.ares.com.tw/public/img/electric-car/og.jpg';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="industry4">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/electric-car/banner.jpg', //圖片
  '電動車 MES', //圖片上的字
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">電動車專區</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <nav class="supmenu">
      <ul class="container text-center mb-0">
        <li><a href="#now">上車好時機</a></li>
        <li><a href="#qa">常見的製造問題</a></li>
        <li><a href="#time">縮短導入時間</a></li>
        <li><a href="#case">客戶推薦</a></li>
        <li><a href="#trade">行業應用</a></li>
      </ul>
    </nav>
    <section id="now">
      <div class="container">
        <h1 class="text-center mb-0">疫後上<span class="blue-color">「車」</span>好時機，用 <span class="blue-color">MES</span> 開創新商機！</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>受到 COVID-19 疫情影響，全球汽車相關零組件製造供應鏈受到嚴重衝擊，但電動車卻在節能減碳環保意識抬頭下逆勢成長。預計到 2035 年電動車產值有望達到 6 兆美元，並且其供應鏈正在重組當中，對於台灣車用廠商，不論是傳統車用或電動車用零件，是絕佳的進入機會。而 <a class="blue-color" href="https://www.mih-ev.org/tw/home" rel="noopener noreferrer" target="_blank">MIH 聯盟</a>亦協助台灣廠商建立電動車生態圈，積極打入國際市場，但要符合國際製造標準與品質要求，智慧製造與彈性生產已不可或缺。<strong>想提升製造與應變力，導入 MES 是關鍵！</strong></p>
          </div>
        </div>
        <h2 class="text-center blue-color">電動車大崛起</h2><hr>
        <ul class="row justify-content-center text-center">
          <li class="col-4 col-md-3">2035 年電動車總產值將高達<br><span class="blue-color"><span class="big-text">6</span>兆美元</span></li>
          <li class="col-4 col-md-3">2025 年電動車年銷量將突破<br><span class="blue-color"><span class="big-text">1000</span>萬輛</span></li>
          <li class="col-4 col-md-3">近 3 年全球電動車銷量增加<br><span class="blue-color"><span class="big-text">80</span>%</span></li>
        </ul>
      </div>
    </section>
    <section id="qa" class="blue-bg">
      <div class="container">
        <h2 class="text-center mb-0 fff-color">車用電子/汽車零件常見的工廠製造問題</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 fff-color">
            <p>車用零件種類繁多，製造過程複雜，對產品的品質要求高，導致製造問題接踵而來。製造搞不定，電動車大餅看的到吃不到！？</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-3 order-md-1">
            <div class="card p-3 yellow-bg mb-3">
              <div class="fff-color title h4 mb-2"><svg arir-hidden="true" width="20" height="18"><use xlink:href="#triangle"/></svg> 生產進度難以控制</div>
              <div>急單插件、機台故障或製程更動等，往往讓生產計畫無法如期完成。</div>
            </div>
            <div class="card p-3 yellow-bg mb-3">
              <div class="fff-color title h4 mb-2"><svg arir-hidden="true" width="20" height="18"><use xlink:href="#triangle"/></svg> 製造現場管控困難</div>
              <div>為趕交期，需現場追蹤進度，維持生產順暢與防止斷料等情形發生。</div>
            </div>
            <div class="card p-3 yellow-bg mb-3">
              <div class="fff-color title h4 mb-2"><svg arir-hidden="true" width="20" height="18"><use xlink:href="#triangle"/></svg> 國際標準規範難符合</div>
              <div>難符合常見的兩大車用國際標準（AEC 可靠度標準、IATF 品質管理標準）之要求。</div>
            </div>
          </div>
          <div class="col-12 col-md-3 order-md-3">
            <div class="card p-3 yellow-bg mb-3">
              <div class="fff-color title h4 mb-2"><svg arir-hidden="true" width="20" height="18"><use xlink:href="#triangle"/></svg> 生產資訊稽核</div>
              <div>生產、測試、品質資訊必須詳實記錄；透明、追蹤，能經得起上游車廠之隨時稽核。</div>
            </div>
            <div class="card p-3 yellow-bg mb-3">
              <div class="fff-color title h4 mb-2"><svg arir-hidden="true" width="20" height="18"><use xlink:href="#triangle"/></svg> 不良品改善不易</div>
              <div>發現品質或瑕疵，無法得知哪個環節出錯，是原物料、機台或是工序問題。</div>
            </div>
          </div>
          <div class="col-12 col-md-5 order-md-2 d-none d-md-block">
            <img class="img-fluid" loading="lazy" width="501" height="417" src="/public/img/electric-car/汽車零件常見的工廠製造問題.png" alt="*">
          </div>
        </div>
        <div class="text-center pt-4">
          <a class="btn yellow-bg py-3" href="/knowmes/needmes/#:~:text=%E6%88%90%E6%9C%AC%E5%88%86%E6%9E%90%E5%A4%B1%E6%BA%96-,MES%20%E7%B3%BB%E7%B5%B1%E8%83%BD%E8%A7%A3%E6%B1%BA%E5%93%AA%E4%BA%9B%E8%A3%BD%E9%80%A0%E5%95%8F%E9%A1%8C,-%E9%8A%9C%E6%8E%A5%20ERP%20%E7%B3%BB%E7%B5%B1">更多 MES 能解決的製造問題</a>
        </div>
      </div>
    </section>
    <section id="time">
      <h2 class="text-center mb-0">ciMes 滿足行業需求，縮短軟體導入時間</h2><hr>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通 ciMes 團隊在汽車、整車與車用零件製造產業具備豐富完整的導入經驗，輔導過多種類型整車製造商（如：自行車、電動機車、汽車、軌道車輛… 等），以及車用產品零件製造商（如：車用金屬零件，車用電子零件、車用塑膠零件… 等）。</p>
            <p>ciMes 可透過檢視工廠需求與瓶頸，規劃出智慧工廠的目標及執行方式。車用產業導入智慧製造應用時建議可分兩階段實施：</p>
            <ul class="disc">
              <li>
                <p><strong>第一階段：</strong>建立精實管理數位化平台，並結合工廠標準化製造管理模式。即時且有效率地收集、連接、整合生產管理製造資訊，進而轉型為數字化工廠。落實即時在製品管理、生產履歷追溯、物料管理與追溯、關鍵性設備自動化整合及品質管理，協助符合車用製造相關標準與品質要求。</p>
              </li>
              <li>
                <p><strong>第二階段：</strong>評估可行性實施數位轉型智能化應用。著重在工廠相關的人、機、料、法、環、管分析與應用，像是：APS 生產排程應用、設備預測性與預防性保養應用、自動化整合應用（整線自動化生產線規劃、自動焊接設備、ASRS、AGV…）等。</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="case" class="bg-lazyload bgs-cover" data-image="/public/img/electric-car/best-practices.jpg" data-position="right">
      <div class="container">
        <h2 class="text-center mb-0 h2">台灣車用廠商推薦 ciMes</h2>
        <hr>
        <div class="row">
          <div class="col-12 col-md-3 mb-3">
            <div class="fff-bg h-100 p-3">
              <div class="text-center"><img class="img-fluid" loading="lazy" width="300" height="180" src="/public/img/best-practices/logo/gogoro.png" alt="gogoro"></div>
              <small class="blue-color">電動機車、車用馬達、車用電池</small>
              <p>ciMes 在產業適用性上較高，可整合 IT 與 OT 的雙向控制；在硬體設備控制、資料蒐集分析，與產品成品半成品測試、管制上有很大幫助。物流及資訊流也能完全匹配，讓生產效率提升 50%。</p>
              <p class="blue-color">/ Gogoro 製造部 黃至偉經理</p>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="fff-bg h-100 p-3">
              <div class="text-center"><img class="img-fluid" loading="lazy" width="300" height="180" src="/public/img/best-practices/logo/oTobrite.png" alt="歐特明電子"></div>
              <small class="blue-color">先進輔助駕駛系統</small>
              <p>在汽車製造產業精確掌握交期與品質已成掌握訂單的絕對關鍵。資通 ciMes 可透過檢視工廠需求與瓶頸，規劃出合適的目標與執行方式，使製造現場作業更有效率。</p>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="fff-bg h-100 p-3">
              <div class="text-center"><img class="img-fluid" loading="lazy" width="300" height="180" src="/public/img/best-practices/logo/ctc.png" alt="頻譜電子"></div>
              <small class="blue-color">電源轉換器</small>
              <p>ciMes 業務與顧問團隊負責、熱誠，積極協助我們導入系統，改善人力管理問題，並降低人力成本，組合出符合需求與使用習慣的生產邏輯，降低了 25% 生產時間。</p>
              <p class="blue-color">/ 頻譜電子 鄭智元副課長</p>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="fff-bg h-100 p-3">
              <div class="text-center"><img class="img-fluid" loading="lazy" width="300" height="180" src="/public/img/best-practices/logo/sai.png" alt="巧新科技"></div>
              <small class="blue-color">鋁合金輪圈</small>
              <p>資通電腦 MES 透過彈性應用平台，協助複雜的金屬零件產線優化，在生產追蹤及物料控管上提升效率，並藉由機台警示與保養系統，提高整體產品品質，達到精實管理，打造全方位智慧工廠。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="trade">
      <div class="container">
        <h2 class="text-center mb-0">行業需求一應俱全</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-3 mb-3">
            <div class="blue-bg fff-color h-100 p-3 bg-lazyload bgs-cover" data-image="/public/img/electric-car/electric-car-3.jpg">
              <h3 class="text-center">適用類別</h3>
              <p>自行車、電動機車、機車、電動車、汽車、軌道車輛、車用金屬零件，車用電子零件、車用塑膠零件、車用橡膠零件等。</p>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="blue-bg fff-color h-100 p-3 bg-lazyload bgs-cover" data-image="/public/img/electric-car/electric-car-4.jpg">
              <h3 class="text-center">適用產品</h3>
              <p>車燈、輪胎、底盤、轉向系統、鋁合金鋼圈、電池、馬達、充電設備、車用鏡頭、雷達、傳動軸、冷卻/散熱系統、面板、車聯網系統、自駕設備等。</p>
            </div>
          </div>
          <div class="col-12 col-md-3 mb-3">
            <div class="blue-bg fff-color h-100 p-3 bg-lazyload bgs-cover" data-image="/public/img/electric-car/electric-car-5.jpg">
              <h3 class="text-center">適用製程</h3>
              <p>鑄造、沖壓、鍛造、機械加工、熱處理、車體焊接、塗裝、零組件組裝等。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
<svg class="d-none">
  <symbol id="triangle" viewBox="0 0 576 512">
    <path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
  </symbol>
</svg>
</body>
</html>