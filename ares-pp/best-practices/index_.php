<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '檔案加密成功案例';
$page['description'] = 'ARES PP 解決各產業包括政府機關、教育單位、工具機製造業、汽車零件製造業等檔案加密問題，提供完善文件防護。';
$canonical='https://ares-pp.ares.com.tw/best-practices/';
$hreflang = 'https://ares-pp.ares.com.tw/en/best-practices/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}

$rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description` FROM news WHERE product LIKE '%{$product}%' AND success_case = true ORDER BY `date` DESC")->fetchAll();
?>
<div class="all" id="best-practice">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/best-practices/banner.webp', //圖片
  '<span>成功案例</span>', //圖片上的字
  'fff-color' //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">檔案加密案例分享</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <nav class="supmenu container-fluid">
        <ul class="text-center mb-0">
          <li><a href="#caseShare">案例分享</a></li>
          <li><a href="#list">客戶列表</a></li>
        </ul>
    </nav>
    <section id="caseShare">
      <div class="container">
        <h1 class="text-center mb-0">解決各產業檔案加密痛點</h1><hr>
        <div class="row">
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">精密製造產業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q1.svg" alt="*">
            </div>
            <div class="p-1">產品研發期間，與上下游廠商有頻繁技術文件交換，擔心機密技術外洩。</div>
            <div class="p-2 main-bg fff-color">外發檔案可設定到期日、列印權限與次數控管、鎖定電腦。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">汽車零件製造業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q2.svg" alt="*">
            </div>
            <div class="p-1">內部文件檔案數量龐大，一般員工也能看到機敏資料或個資。</div>
            <div class="p-2 main-bg fff-color">文件檔案可依職等與所屬群組賦予不同權限，進行分級管制。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">機械設備業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q3.svg" alt="*">
            </div>
            <div class="p-1">員工用 USB 竊取設計圖稿帶出公司私自利用，導致公司嚴重智財損失。</div>
            <div class="p-2 main-bg fff-color">檔案地理軌跡追蹤，有異常狀況可隨時召回。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">徵信業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q4.svg" alt="*">
            </div>
            <div class="p-1">客戶稽核頻率高，必須讓客戶放心往來業務資料與文件的安全性。</div>
            <div class="p-2 main-bg fff-color">檔案存檔即加密，並詳實紀錄文件操作行為。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">生技業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q5.svg" alt="*">
            </div>
            <div class="p-1">設計部門研發產品的機密資料防止跨部門存取。</div>
            <div class="p-2 main-bg fff-color">授權特定群組，有效管理文件使用權限。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">政府機關</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q6.svg" alt="*">
            </div>
            <div class="p-1">政府存有大量民眾個資、智慧版權與公文合約，文件版本不易管理。</div>
            <div class="p-2 main-bg fff-color">完整的文件生命週期保護機制與檔案管理。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">檢測儀器設備</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q7.svg" alt="*">
            </div>
            <div class="p-1">加密軟體使用程序複雜，員工接受度不高，可能產生操作漏洞。</div>
            <div class="p-2 main-bg fff-color">存檔即加密，內部無感操作，外部無須安裝 Agent 應用程式。</div>
          </div>
          <div class="col-6 col-md-3 mb-5">
            <div class="h4 orange-color text-center">統包工程業</div>
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="72" height="72" src="/public/img/best-practices/q8.svg" alt="*">
            </div>
            <div class="p-1">外包提供給廠商的規格、參數資料，如何確保不會外流至競爭對手。</div>
            <div class="p-2 main-bg fff-color">強化版浮水印、文件版權識別，強化外發文件安全。</div>
          </div>
        </div>
      </div>
      <div class="container pt-5 mt-5" id="news">
<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/articleHandle.php');
$rs=null;
$db=null;
?>
<?= !empty($_html) ? $_html: '<p>no article</p>'; ?>
      </div>
    </section>
    <section class="d-none"></section>
    <section id="list">
      <div class="container">
        <h2 class="text-center mb-0">客戶列表</h2>
        <hr>
        <div id="circle" class="row justify-content-center no-gutters">
<?php
$client = array(
  array(
      'industry'=>'傳產製造業',
      'img'=>'/public/img/best-practices/textiles.png',
      'txt'=>'製造產業具備精密技術，與高品質、量產產品特性，因此產品製程、技術核心、配方比例、良率控制參數、廠區配置圖、設備器材添購…等與其 Know-How 相關的文件資訊安全更是值得重視。ARES PP 隱私保鑣文件加密軟體操作簡單，不改變使用者習慣，能從資料源頭進行管控，使用者透過多種途徑傳送的檔案，都可隨時處在加密狀態進行防護，有效遏止資訊不當散播。',
      'name'=>'台灣寶椅子、<a href="https://www.ares.com.tw/events/TAKISAWA-introduce-ARESPP" rel="external">台灣瀧澤科技</a>、<a href="https://www.ares.com.tw/events/ARESPP-RIKEN-information-security" rel="external">台灣理研工業</a>、寶成國際集團、德門機電工業、清祿鞋業、佳樂電子'
  )
  ,array(
      'industry'=>'科技業',
      'img'=>'/public/img/best-practices/semiconductor.png',
      'txt'=>'機密資料保護是高科技產業首要任務，包括離職員工資料外洩、程式開發原始碼保護、委外資訊安全維護…等都是常見資安維護問題。ARES PP 隱私保鑣文件加密軟體，能自動偵測手機、平板、相機偷拍，並有螢幕截圖防禦機制，符合高科技廠商對文件加密、文件管理、預防資料外洩等需求。提供更嚴謹、完善的機密資料保護功能。',
      'name'=>'力成科技、中揚光電、台灣晶技'
  )
  ,array(
      'industry'=>'政府／文教／出版業',
      'img'=>'/public/img/best-practices/gov.png',
      'txt'=>'政府機關、文教、出版產業存有大量民眾個資、智慧版權與公文合約，文件管理與加密更是為資安防護重點。ARES PP 隱私保鑣文件加密軟體，不需安裝 Agent 程式即可使用。文件可以彈性授權，並提供離線文件破解防禦偵測，讓機密文件隨時在監管環境下授權使用，兼顧經濟、安全與便利性。',
      'name'=>'中科院、銓敘部、行政院人事行政總處、國立彰化師範大學、明志科技大學、法務部司法官學院、時報出版'
  )
  ,array(
      'industry'=>'其他',
      'img'=>'/public/img/best-practices/Environmental-Protection-Service.png',
      'txt'=>'ARES PP 隱私保鑣文件加密軟體，提供各產業研發（Research and Development；RD）、人事，以及財務部門…等機密文件資料加密控管解決方案，適用於一台電腦多人共用的產線流程，能限制文件列印與有效日期，從資料源頭進行管控，有效提升企業文件加密與管理效率，並兼顧資訊安全性。',
      'name'=>'車容坊加油站、遠東航空、中華徵信、孝青食品香料、華聯生物'
  )
);
foreach ($client as $key){
?>
          <article class="col-12">
            <div class="d-flex no-gutters justify-content-between flex-nowrap">
              <figure class="text-center col-lg-text-left left">
                <img class="img-fluid" width="350" height="235" src="<?= $key['img'] ?>" alt="<?= $key['industry'] ?>">
              </figure>
              <div class="col ascii">
                <h3 class="mb-2 main-color"><?= $key['industry'] ?></h3>
                <p><?= $key['txt'] ?></p>
              </div>
            </div>
            <div class="d-flex no-gutters justify-content-between flex-nowrap gray-bg">
              <div class="left"></div>
              <div class="col">
                <p class="main-color mb-0 p-3"><?= $key['name'] ?></p>
              </div>
            </div>
          </article>
<?php
}
?>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>