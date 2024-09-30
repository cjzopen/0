<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '什麼是 ISO 27001？７大要點滿足文件資料認證標準';
$page['description'] = 'ISO 27001 資安認證成為各大企業稽核的重點，ISO 27001是甚麼？如何做好相關前置作業？先搞懂認證標準，協助企業符合安全資訊環境，確保資訊之機密性、完整性與可用性。';
$page['css']=array('/public/css/iso27001.css');
$canonical='https://ares-pp.ares.com.tw/trend/ISO27001/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/trend/top.php');
?>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">ISO 27001 專區</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  <main itemscope itemtype="https://schema.org/FAQPage">
    <section class="pb-3 pt-5 fff-color bg-lazyload" data-image="/public/img/trend/iso27001/bg-1.jpg" data-position="left top" data-color="#fff" data-bgcolor="#153889">
      <div class="container" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h1 class="text-center" itemprop="name">什麼是 ISO 27001？</h1>
        <div class="row justify-content-center" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="col-12 col-md-8" itemprop="text">
            <p>ISO 27001 是目前國際上使用最廣泛，且最完整的檢驗資訊安全管理系統 (Information Security Management System, ISMS) 標準。在台灣《資通安全管理法》規定，不論是 A 級、B 級和 C 級的公務或是特定非公務機關，都必須要在 2 年內取得臺版 CNS 27001 或是 ISO 27001 的資安認證。</p>
            <p>而透過 ISO 27001 標準，能協助組織管理與降低資訊上所面臨的各種威脅與風險，是現今國際科技大廠上游供應鏈廠商稽核要點之一。</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="row">
          <div class="col-12 col-md-7">
            <h2 itemprop="name">檔案加密能達成哪些 ISO 27001 認證標準？</h2>
            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <p>導入檔案加密軟體協助企業符合 <a class="main-color" href="https://www.itgovernanceusa.com/iso27001#:~:text=The%20management%20clauses%20of%20ISO/IEC%2027001%3A2013" rel="noopener noreferrer" target="_blank">ISO 27001 第 7.5.3 條文</a>中 4 個條款，以及<a class="main-color" href="https://www.itgovernanceusa.com/iso27001#:~:text=The%20management%20clauses%20of%20ISO/IEC%2027001%3A2013" rel="noopener noreferrer" target="_blank">附錄 A（風險控制方式）</a>中對於文件資訊安全要求的 2 個控制群與 3 個控制項：</p>
              <div itemprop="text">
                <p><strong>7.5.3 條文：文件化資訊之控制</strong></p>
                <ul class="disc">
                  <li>使文件資料受到保護，防止機密外洩、不當使用或任意竄改。</li>
                  <li>確保文件傳送與存取的安全，並分類文件以方便使用。</li>
                  <li>對檔案的變更有控制權（例：版本控制）。</li>
                  <li>保留文件各項紀錄，並防止逾期文件被誤用。</li>
                </ul>
                <p class="mb-0"><strong>A.6.2.2：遠距工作</strong></p>
                <p>保護遠距工作資料的使用安全。</p>
                <p class="mb-0"><strong>A.10.1.1：加密控制措施</strong></p>
                <p>使用密碼來保護資料的安全。</p>
                <p class="mb-0"><strong>A.12.4：存錄與監視</strong></p>
                <p>留存使用、異常、錯誤及操作的紀錄，並防止紀錄遭竄改與未授權存取。</p>
                <p class="mb-0"><strong>A.13.2 ：資訊傳送</strong></p>
                <p>保護通訊設施與電子傳訊時的資料，並與外部組織訂定安全傳送的方式。</p>
                <p class="mb-0"><strong>A.15.1.2：於供應者協議中闡明安全性</strong></p>
                <p>與能使用資料的供應商，建立資訊安全的要求事項。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5 d-none d-md-block mt-5">
            <img loading="lazy" width="257" height="242" src="/public/img/trend/iso27001/iso27001.png" alt="iso27001" class="img-fluid d-block mx-auto">
          </div>
        </div>
      </div>
    </section>
<!--     <section id="bg2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 d-none d-md-block"></div>
          <div class="col-12 col-md-6">
            <h2 class="dline">如何有效達成 ISO 27001 資安認證？</h2>
            <p>要持續且有效的維持與運作資訊安全管理制度，就需在文件與紀錄管理上，建立符合 ISO 27001 標準所要求之規範。</p>
          </div>
        </div>
      </div>
    </section> -->
    <section itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <div class="container">
        <h2 class="text-center" itemprop="name">如何達成文件管控標準？</h2>
        <div class="row justify-content-center">
          <div class="col-md-9" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">要符合 ISO 27001 資安認證標準，內部需建立一套依循的標準，透過審查、內部稽核及預防措施等方式，建置文件化資訊安全管理機制、強化資安防護、保護資訊資產並提高供應商與客戶在資訊安全上的信心。</p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">營業秘密怎麼保護</h3>
            <p>機密文件在發佈、閱覽、列印過程被不當取得？<br><span class="main-color">對的文件只給對的人開啟或修改，設定授權文件使用權限與期間。</span></p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">智財如何防洩露</h3>
            <p>員工將公司內重要的設計圖檔及生產流程有意或無意的將資料洩漏？<br><span class="main-color">精確掌握文件流向，有異常狀況可隨時召回。</span></p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">數位檔案足跡怎麼查</h3>
            <p>文件軌跡如何進行資料追蹤？<br><span class="main-color">詳實紀錄文件使用軌跡，位置資訊與修改紀錄等。</span></p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">對外如何安全共享</h3>
            <p>重要資訊被儲存與外流，或錯發給外部廠商？<br><span class="main-color">管制外發資料，並強化版浮水印，管控列印與閱讀次數，有異常狀況可隨時召回。</span></p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">如何安全傳遞資料</h3>
            <p>電子資訊傳送要如何確保資料安全？<br><span class="main-color">建議可使用 DRM 核心加密技術，文件到哪加密就跟到哪。</span></p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="d-inline-block p-3 mb-2 main-bg fff-color pr-5">公開資料如何保護</h3>
            <p>對外開放的文件，被惡意竄改或變更？<br><span class="main-color">唯讀模式，讓資料只可閱讀無法修改。</span></p>
          </div>
        </div>
        <p class="text-center pt-5 h4">ARES PP 協助企業完成「檔案加密保護」強化文件管控</p>
        <div class="text-center"><a href="/about/" class="btn btn-blue">ARES PP 系統介紹</a></div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>