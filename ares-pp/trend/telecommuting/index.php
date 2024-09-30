<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '面對遠距辦公，文件加密怎麼做？';
$page['description'] = '文件加密已成為遠距工作機制中最關鍵技術，ARES PP 能協助企業與組織從源頭保護機敏文件，阻斷電子資料交換帶來的威脅。';
$page['css']=array('/public/css/telecommuting.css');
$canonical='https://ares-pp.ares.com.tw/trend/telecommuting/';
$ogimg='https://ares-pp.ares.com.tw/public/img/trend/telecommuting/TAKISAWA.png';

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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">遠距辦公專區</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  <main>
    <section class="bg1 p-0 py-md-5 fff-color bg-lazyload" data-image="/public/img/trend/telecommuting/banner.jpg" data-position="left center" data-color="#fff" data-bgcolor="#333">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md-7">
            <h1>啟動遠距工作文件加密 <br><span class="mark-color">ARES PP Can Help！</h1>
            <p>新冠肺炎疫情衝擊下，企業紛紛採取相關防疫措施，其中遠距工作/會議成為防疫首選部署選擇。而美國國家標準技術研究院（NIST；National Institute of Standards and Technology）也訂出了「企業遠距工作，遠端存取以及行動裝置安全指南」。 該指南強調必須要保護儲存在遠端辦公設備的資料與確保網路傳輸安全的重要性，並提供相關實施和維護必要安全控制措施的建議，以協助企業或組織在遠距工作的機制中保護敏感訊息有所依循。</p>
            <p class="h4">而遠距工作文件保護最有效且<span class="mark-color">最關鍵的技術就是「加密」</span></p>
            <a class="btn btn-cimes my-3 col-12 col-md-6" href="https://www.youtube.com/watch?v=5aOL3LROIDw" rel="noopener noreferrer" target="_blank">觀看影片</a>
          </div>
        </div>
      </div>
    </section>
    <section class="d-none"></section>
    <section>
      <div class="container">
        <div class="text-center">
          <h2 class="mb-0 dline d-inline-block px-4">小心！上網蹤跡全被駭客一覽無遺</h2>
          <p class="h3">資安防護罩 無論何時何地都能安心辦公</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-4 mb-3">
            <div class="card mx-auto h-100">
              <div class="card-body">
                <h3 class="h4 card-title mark-color d-flex align-items-center">
                  <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/icon-1.svg" alt="*">
                  <span>VPN 連網文件安全要加密</span>
                </h3>
                <ul class="disc">
                  <li>遠端派送 client agent</li>
                  <li>文件自動加密，無需擔心從內網下載到遠端設備的文件安全性</li>
                  <li>詳實軌跡紀錄，監控文件資料的操作歷程</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <div class="card mx-auto h-100">
              <div class="card-body">
                <h3 class="h4 card-title mark-color d-flex align-items-center">
                  <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/icon-2.svg" alt="*">
                  <span>工作效率不因加密而影響</span>
                </h3>
                <ul class="disc">
                  <li>無需改變使用者習慣
                    <ul class="mark-color disc">
                      <li>檔案伺服器加密模組</li>
                      <li>個人電腦加密模組</li>
                      <li>API 加密模組</li>
                      <li>整合 Teams</li>
                      <li>整合 Slacks</li>
                    </ul>
                  </li>
                  <li>不因加密主機掛點影響使用體驗</li>
                  <li>ARES PP 伺服器 5 分鐘快速回復</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <div class="card mx-auto h-100">
              <div class="card-body">
                <h3 class="h4 card-title mark-color d-flex align-items-center">
                  <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/icon-3.svg" alt="*">
                  <span>檔案安全不因地點而不同</span>
                </h3>
                <ul class="disc">
                  <li>RSA+AES 雙重保障</li>
                  <li>支援多種應用軟體與格式</li>
                  <li>支援文件不落地閱讀
                    <ul class="mark-color disc">
                      <li>行動文件</li>
                      <li>Office Online Server</li>
                    </ul>
                  </li>
                  <li>支援 OTP 雙重驗證</li>
                  <li>支援 AD/LDAP 驗證</li>
                  <li>支援相機偵測</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <div class="card mx-auto h-100">
              <div class="card-body">
                <h3 class="h4 card-title mark-color d-flex align-items-center">
                  <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/icon-4.svg" alt="*">
                  <span>多樣化權限設定保護資料</span>
                </h3>
                <ul class="disc">
                  <li>檔案到期日</li>
                  <li>防止複製、列印、截圖</li>
                  <li>列印浮水印</li>
                  <li>螢幕浮水印</li>
                  <li>獨家隱性浮水印</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <div class="card mx-auto h-100">
              <div class="card-body">
                <h3 class="h4 card-title mark-color d-flex align-items-center">
                  <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/icon-5.svg" alt="*">
                  <span>遠距工作不因地域而限制</span>
                </h3>
                <ul class="disc">
                  <li>支援無網路環境作業</li>
                  <li>行為紀錄不因離線而失效</li>
                  <li>支援行動裝置閱覽加密文件</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-cimes col-12 col-md-6" href="https://ares-pp.ares.com.tw/contact/">立即諮詢</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">遠距辦公你該檢核的資安事項</h2>
        <hr>
        <div class="row counter-reset">
          <div class="col-12 col-md-2 col-lg-3">
            <div class="my-3 mx-auto counter-item">
              <img class="lazy d-block mx-auto img-fluid" data-src="/public/img/trend/telecommuting/step-1.svg" alt="*">
              <h3 class="text-center mb-3 mark-color h4">網路環境安全確認</h3>
              <ul class="disc">
                <li>是否開啟外網連入稽核軌跡紀錄</li>
                <li>確認是否可檢視外網連入之安全性</li>
                <li>確認是否可限制存取重要資料功能</li>
                <li>確認是否具備授權機制</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-3">
            <div class="my-3 mx-auto counter-item">
              <img class="lazy d-block mx-auto img-fluid" data-src="/public/img/trend/telecommuting/step-2.svg" alt="*">
              <h3 class="text-center mb-3 mark-color h4">個人設備資安監控</h3>
              <ul class="disc">
                <li>對非管控範圍內的設備進行安全檢核</li>
                <li>確認設備是否可進行遠端行為監控</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-3">
            <div class="my-3 mx-auto counter-item">
              <img class="lazy d-block mx-auto img-fluid" data-src="/public/img/trend/telecommuting/step-3.svg" alt="*">
              <h3 class="text-center mb-3 mark-color h4">外在設備資料保護</h3>
              <ul class="disc">
                <li>確認資料是否已加密，防止資料未即時刪除或設備遺失時所造成的資料外洩</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-2 col-lg-3">
            <div class="my-3 mx-auto counter-item">
              <img class="lazy d-block mx-auto img-fluid" data-src="/public/img/trend/telecommuting/step-4.svg" alt="*">
              <h3 class="text-center mb-3 mark-color h4">協作平台機密保護</h3>
              <ul class="disc">
                <li>確認是否具備身分驗證機制</li>
                <li>確認是否可紀錄資料使用軌跡</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-cimes col-12 col-md-6" href="/drm/#who">更多文件加密資安問題看這裡</a>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <img loading="lazy" src="/public/img/trend/telecommuting/TAKISAWA.png" alt="TAKISAWA" class="img-fluid">
          </div>
          <div class="col-12 col-md-6">
            <h2 class="dline">口罩國家隊-瀧澤科技 文件加密罩得住</h2>
            <div>
              <div class="h4 d-flex align-items-center my-3">
                <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/TAKISAWA-1.svg" alt="*">
                <span>多樣化的權限設定</span>
              </div>
              <div class="h4 d-flex align-items-center my-3">
                <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/TAKISAWA-2.svg" alt="*">
                <span>詳實的軌跡紀錄</span>
              </div>
              <div class="h4 d-flex align-items-center my-3">
                <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/TAKISAWA-3.svg" alt="*">
                <span>存檔立即加密 不須改變使用者習慣</span>
              </div>
            </div>
            <div class="mt-5">
              <a class="btn btn-cimes mr-3" href="https://www.ares.com.tw/events/TAKISAWA-introduce-ARESPP">瀧澤科技成功案例</a>
              <a class="btn btn-cimes mr-3" href="/best-practices/">其他成功案例</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="text-center">
          <h2 class="mb-0 dline d-inline-block px-4">資訊補給站</h2>
          <p class="h3">防堵侵駭 資通「罩」助你</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="row">
              <div class="col-12 col-md-4">
                <a href="https://marketing.ares.com.tw/newsletter/2020-05/focus">
                  <div class="text-center">
                    <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/mask-3.svg" alt="*">
                  </div>
                  <p class="h4 my-3">啟動遠距辦公資安防疫，ARES PP 文件加密不間斷！</p>
                </a>
              </div>
              <div class="col-12 col-md-4">
                <a href="https://marketing.ares.com.tw/newsletter/2020-03-cyber-security/focus">
                  <div class="text-center">
                    <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/mask-1.svg" alt="*">
                  </div>
                  <p class="h4 my-3">資安防疫新思維：什麼病毒都一樣，防疫沒捷徑！</p>
                </a>
              </div>
              <div class="col-12 col-md-4">
                <a href="https://marketing.ares.com.tw/newsletter/2020-03-cyber-security/file-encryption">
                  <div class="text-center">
                    <img class="lazy mr-3" data-src="/public/img/trend/telecommuting/mask-2.svg" alt="*">
                  </div>
                  <p class="h4 my-3">檔案加密工具大解析！企業文件保護怎麼選？</p>
                </a>
              </div>
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
</body>
</html>