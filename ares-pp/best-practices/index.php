<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '檔案加密成功案例';
$page['description'] = 'ARES PP 解決各產業包括政府機關、教育單位、工具機製造業、汽車零件製造業等檔案加密問題，提供完善文件防護。';
$canonical='https://ares-pp.ares.com.tw/best-practices/';
$hreflang = 'https://ares-pp.ares.com.tw/en/best-practices/';
$page['css']=array('/public/css/case.css');

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
<style>
#circle a{
  text-decoration: underline;
}
</style>
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
      <div class="container" id="industry">
        <h1 class="text-center mb-5">解決各產業檔案加密痛點</h1>
        <div class="grid w-100 justify-content-center">
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/IC封測廠.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">IC 封測廠</div>
              <p class="m-0">產品研發期間，與上下游廠商有頻繁技術文件交換，外發檔案可設定到期日、列印權限與次數控管。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/汽車零件製造業.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">汽車零件製造業</div>
              <p class="m-0">文件檔案可依職等與所屬群組賦予不同權限，進行分級管制，防止員工透過任何管道將設計檔攜出公司。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/自動化設備商.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">自動化設備商</div>
              <p class="m-0">檔案地理軌跡追蹤，防止人員私下將檔案攜出，若有異常狀況也可隨時召回。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/老牌徵信公司.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">老牌徵信公司</div>
              <p class="m-0">檔案存檔即加密，並詳實紀錄文件操作行為，保護徵信資料在存放過程中不被外流與竊用，符合客戶稽核標準。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/生技製藥大廠.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">生技製藥大廠</div>
              <p class="m-0">機密資料可授權特定群組，防止跨部門存取，有效抑止檔案外洩的危機與風險。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/政府機關.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">政府機關</div>
              <p class="m-0">提供存有大量民眾個資、智慧版權與公文合約的政府機關，完整的文件生命週期保護機制與檔案管理。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/檢測儀器設備商.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">檢測儀器設備商</div>
              <p class="m-0">存檔即加密，內部無感操作，外部無須安裝 Agent 應用程式，防止因為人為疏失造成的資料外洩。</p>
            </div>
          </div>
          <div class="grid-box">
            <img class="img-fluid" loading="lazy" width="325" height="350" src="/public/img/best-practices/統包工程商.jpg" alt="*">
            <div class="text">
              <div class="h4 font-weight-bold">統包工程商</div>
              <p class="m-0">強化版浮水印、文件版權識別，強化外發文件安全，確保外包給廠商的規格、參數資料，不會外流至競爭對手。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt-5 mt-5" id="news">
        <h2 class="text-center mb-0">案例分享</h2><hr>
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
      'name'=>'台灣寶椅子、<a href="https://www.ares.com.tw/events/TAKISAWA-introduce-ARESPP">台灣瀧澤科技</a>、<a href="https://www.ares.com.tw/events/ARESPP-RIKEN-information-security">台灣理研工業</a>、寶成國際集團、德門機電工業、清祿鞋業、佳樂電子、華貿企業、<a href="https://www.ares.com.tw/events/arespp-user-story-usun">陽程科技</a>'
  )
  ,array(
      'industry'=>'科技業',
      'img'=>'/public/img/best-practices/semiconductor.png',
      'txt'=>'機密資料保護是高科技產業首要任務，包括離職員工資料外洩、程式開發原始碼保護、委外資訊安全維護…等都是常見資安維護問題。ARES PP 隱私保鑣文件加密軟體，能自動偵測手機、平板、相機偷拍，並有螢幕截圖防禦機制，符合高科技廠商對文件加密、文件管理、預防資料外洩等需求。提供更嚴謹、完善的機密資料保護功能。',
      'name'=>'力成科技、中揚光電、<a href="https://www.ares.com.tw/events/arespp-user-story-txc">台灣晶技</a>、技嘉科技'
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
      'name'=>'車容坊加油站、遠東航空、中華徵信、孝青食品香料、華聯生物、安宏生醫'
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