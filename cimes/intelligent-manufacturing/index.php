<?php
$url='https://cimes.ares.com.tw/industry-4.0/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');

$page['title'] = '智慧製造解決方案';
$page['description'] = '運用智慧機械串聯 MES 製造執行系統，結合精實管理技術打造智慧製造生產線。並可依庫存、設備稼動情形，達成自動排程、調整產能與彈性生產。';
$page['css'] = array('/public/css/smart-machinery.css');
$canonical='https://cimes.ares.com.tw/intelligent-manufacturing/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/smart-machinery/banner.jpg', //圖片
  '智慧製造', //圖片上的字
  'fff-color' //字的 class
);
?>
  <main itemscope itemtype="https://schema.org/FAQPage">
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">智慧製造專區</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
    <aside class="supmenu">
      <div class="container">
        <ul class="text-center mb-0">
          <li><a href="#what">智慧製造與智慧機械</a></li>
          <li><a href="#how">用 MES 達成產業需求</a></li>
          <li><a href="#which">產業應用</a></li>
        </ul>
      </div>
    </aside>
    <section id="智慧製造">
      <div class="container text-center">
        <h1 class="text-center mb-0">邁向智慧製造 MES 是關鍵</h1>
        <hr>
        <p>精密機械整合智慧技術並串聯 MES 製造執行系統才是正解！</p>
        <img class="img-fluid" src="/public/img/smart-machinery/how.png" alt="透過 MES 達成智慧生產線" width="980" height="404" loading="lazy">
      </div>
    </section>
    <section id="what" class="p-0">
      <div class="py-5 light-blue-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 class="dline" itemprop="name">什麼是智慧製造？</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>智慧製造是指整體生產線以「智慧機械」為基礎，將生產過程各環節與物聯網、雲端運算、大數據及人工智慧應用緊密結合，運用端到端的數據流與網路互連建構虛實整合平台，讓機器與機器、機器與人之間能相互溝通。</p>
                  <p>透過具有資訊自感知、自決策、自執行等先進製造過程、系統與模式，協助製造產業數位轉型。並以即時、量化的透明化管理取代傳統製造作業管理模式，有效降低製造成本提高生產效能，以因應現今客製化與少量多樣的生產型態，解決消費者行為改變、產品生命週期縮短、供應鏈風險增加等挑戰。</p>
                </div>                
              </div>
            </div>
            <div class="col-12 col-md-6 d-none d-md-block text-center">
              <img class="img-fluid" src="/public/img/smart-machinery/what-2.png" alt="*">
            </div>
          </div>
        </div>
      </div>
      <div class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-none d-md-block text-center">
              <img class="img-fluid" src="/public/img/smart-machinery/what-1.png" alt="*">
            </div>
            <div class="col-12 col-md-6" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 class="dline" itemprop="name">什麼是智慧機械？與 MES 串聯效益為何？</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">智慧機械是指將精密機械導入感測器、物聯網、機器人、大數據、虛實化系統（Cyber-Physical-System，CPS）等智慧技術要素，透過生產設備與智慧技術的深度整合，能做到故障預測、精度補償、自動參數設定等智慧化功能，進一步提升機台的精度、速度、穩定度、操作性及安全性。再藉由串聯 MES 製造執行系統結合精實管理技術，使整條生產線智慧化，可依庫存、設備稼動情形，達成自動排程、自動彈整產能、彈性生產等目的，為智慧製造打下紮實的基本功。</p>
              </div>
              <div>
                <a class="btn btn-cimes mb-3 px-5" rel="noopener noreferrer" target="_blank" href="https://marketing.ares.com.tw/newsletter/2018-05-cimes/focus">瞭解智慧機械如何邁向 M2M 智能化應用</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="how">
      <div class="container" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h2 class="text-center mb-0" itemprop="name">運用 MES 達成智慧機械應用</h2>
        <hr>
        <div class="row justify-content-center" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="col-12 col-sm-10 col-lg-8">
            <p>企業在推動智慧機械之智慧製造應用時，常因對機械設備與 MES 整合應用不瞭解，不知道如何進行設備自動化及智能化規劃。快來檢視該如何善用 MES 製造執行系統，讓工廠設備從單機自動化、整合式自動化走向智動化應用，達成智慧製造應用！</p>
            <ul itemprop="text">
              <li class="card mt-3">
                <h3 class="h4 card-title px-3 py-1 mb-0 fff-color sub-bg">物料/在製品傳輸相關設備</h3>
                <div class="card-body row align-items-center">
                  <div class="col-12 col-md-4 d-none d-md-block text-center">
                    <img class="img-fluid" src="/public/img/smart-machinery/mes-1.png" alt="*">
                  </div>
                  <div class="col-12 col-md-8">
                    <ul>
                      <li class="mb-3">常見問題：
                        <ul class="decimal">
                          <li>物料搬運、排程報表、生產資訊採人工作業</li>
                          <li>即時掌握物料、生產等作業資訊</li>
                        </ul>
                      </li>
                      <li class="sub-color mb-3">管理重點<br>藉 ERP 或 MES 系統整合傳輸相關設備，控制物料或在製品依據生產規畫及指令控制相關傳輸設備</li>
                      <li class="main-color mb-3">導入 MES 效益<br>取代人為作業、減少人為疏失、提升作業效率</li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="card mt-3">
                <h3 class="h4 card-title px-3 py-1 mb-0 fff-color main-bg">製程加工設備</h3>
                <div class="card-body row align-items-center">
                  <div class="col-12 col-md-4 d-none d-md-block text-center">
                    <img class="img-fluid" src="/public/img/smart-machinery/mes-2.png" alt="*">
                  </div>
                  <div class="col-12 col-md-8">
                    <ul>
                      <li class="mb-3">常見問題：
                        <ul class="decimal">
                          <li>設備狀況的掌握程度</li>
                          <li>機台故障預測及零配件管理</li>
                        </ul>
                      </li>
                      <li class="sub-color mb-3">管理重點<br>機台智能化管理，設備參數收集及控制</li>
                      <li class="main-color mb-3">導入 MES 效益<br>提升設備製程能力與稼動能力</li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="card mt-3">
                <h3 class="h4 card-title px-3 py-1 mb-0 fff-color sub-bg">檢測/包裝設備</h3>
                <div class="card-body row align-items-center">
                  <div class="col-12 col-md-4 d-none d-md-block text-center">
                    <img class="img-fluid" src="/public/img/smart-machinery/mes-3.png" alt="*">
                  </div>
                  <div class="col-12 col-md-8">
                    <ul>
                      <li class="mb-3">常見問題：
                        <ul class="decimal">
                          <li>檢測及包裝採人工作業</li>
                          <li>產品品質</li>
                        </ul>
                      </li>
                      <li class="sub-color mb-3">管理重點<br>檢測設備可將待測品之測試數據自動收集、自動綁定以利後續追蹤</li>
                      <li class="main-color mb-3">導入 MES 效益<br>檢測及包裝作業自動化、提升作業效率。檢測數據分析與反饋，供研發與品質單位成因分析數據，提升良率</li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="card mt-3">
                <h3 class="h4 card-title px-3 py-1 mb-0 fff-color main-bg">環境/安全/公用設備</h3>
                <div class="card-body row align-items-center">
                  <div class="col-12 col-md-4 d-none d-md-block text-center">
                    <img class="img-fluid" src="/public/img/smart-machinery/mes-4.png" alt="*">
                  </div>
                  <div class="col-12 col-md-8">
                    <ul>
                      <li class="mb-3">常見問題：
                        <ul class="decimal">
                          <li>即時針對企業環境能源管理</li>
                          <li>生產過程節能減碳</li>
                          <li>工安意外</li>
                        </ul>
                      </li>
                      <li class="sub-color mb-3">管理重點<br>安全與環境監控智能化</li>
                      <li class="main-color mb-3">導入 MES 效益<br>能源管理可視化、環境與安全即時性管理</li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="which">
      <div class="container text-center">
        <h2 class="mb-0">哪些產業需要應用智慧機械？</h2>
        <hr>
        <div>
          <div>
            <ul class="row">
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-1.svg" alt="*"></div>
                <div class="h4">航太</div>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-2.svg" alt="*"></div>
                <div class="h4">半導體</div>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-3.svg" alt="*"></div>
                <div class="h4">電子資訊</div>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-4.svg" alt="*"></div>
                <div class="h4">機械設備</div>
                <span class="d-none">(</span><a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-gogoro" rel="noopener noreferrer" target="_blank">Gogoro</a><span class="d-none">)</span>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-5.svg" alt="*"></div>
                <div class="h4">金屬、運具</div>
                <span class="d-none">(</span><a class="main-color" href="https://www.ares.com.tw/events/cimes-userstory-hosong" rel="noopener noreferrer" target="_blank">和頌</a><span class="d-none">)</span>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-6.svg" alt="*"></div>
                <div class="h4">紡織</div>
                <span class="d-none">(</span><a class="main-color" href="https://www.ares.com.tw/events/industry4-Everest-ciMes" rel="noopener noreferrer" target="_blank">宏遠</a><span class="d-none">)</span>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-7.svg" alt="*"></div>
                <div class="h4">能源、農業</div>
                <span class="d-none">(</span><a class="main-color" href="https://www.ares.com.tw/events/cimes-contract-gbco" rel="noopener noreferrer" target="_blank">新高生物</a><span class="d-none">)</span>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-8.svg" alt="*"></div>
                <div class="h4">食品</div>
              </li>
              <li class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="circle main-bg mx-auto"><img src="/public/img/smart-machinery/which-9.svg" alt="*"></div>
                <div class="h4">3C</div>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-cimes mb-3 col-12 col-md-6" href="/best-practices/automotive">瞭解 ciMes 產業應用成功案例</a>
        </div>
      </div>
    </section>
    <section id="bg" class="sub-bg">
      <div class="container">
        <h2 class="text-center mb-0">您的工廠還沒進行智慧製造規劃？</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>資通電腦 ciMes 團隊將為您帶來完整 MES 系統導入評估、顧問諮詢及智慧工廠建置規劃服務。協助您的企業完善智慧機械邁向智慧製造。</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <a class="btn btn-cimes w-100 mb-3" href="/industry-4.0/">取得更多智慧工廠資訊</a>
          </div>
          <div class="col-12 col-md-6">
            <a class="btn btn-cimes mb-3 w-100" href="/products/#benefit">ciMes 能為工廠帶來什麼效益？</a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>