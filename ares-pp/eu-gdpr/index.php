<?php
$URL='https://ares-pp.ares.com.tw/trend/EU-GDPR/';
header('Link: <'.$URL.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$URL);
exit();


require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '文件加密系統-歐盟GDPR專區';
$page['description'] = 'ARES PP 文件加密軟體透過資料自動加解密、主動通知管理者安全情報、詳實追蹤與紀錄個資使用情形，有效協助各產業遵循歐盟 GDPR 規則，打造個資不外洩的資訊安全環境。';
$page['keywords']='文件加密,歐盟,GDPR,ARESPP';
$canonical='https://ares-pp.ares.com.tw/EU-GDPR/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="gdpr">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/gdpr/EU-GDPR-banner-1440.png', //圖片
  '/public/img/gdpr/EU-GDPR-banner-360.png 360w,/public/img/gdpr/EU-GDPR-banner-720.png 720w,/public/img/gdpr/EU-GDPR-banner-1440.png 1440w,/public/img/gdpr/EU-GDPR-banner-1920.png 1920w,/public/img/gdpr/EU-GDPR-banner-2880.png 2880w', //srcset
  '*', //alt
  '<div><img class="lazy" data-original="/public/img/gdpr/EU-GDPR-icon.svg" alt="*">GDPR 專區</div>', //圖片上的字
  'fff-color' //字的 class
);
?>
  <main>
    <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">GDPR 專區</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </nav>
    <aside class="supmenu">
      <nav class="container">
        <ul class="text-center mb-0">
          <li><a href="#coming" accesskey="1">GDPR 來襲</a></li>
          <li><a href="#fight" accesskey="2">加密迎戰 GDPR</a></li>
          <li><a href="#steps" accesskey="3">防護個資步驟</a></li>
          <li><a href="#rules" accesskey="4">規範有哪些</a></li>
          <li><a href="#fine" accesskey="5">GDPR 罰金</a></li>
          <li><a href="#gov" accesskey="6">國發會歐盟 GDPR 簡介</a></li>
          <li><a href="#news" accesskey="7">相關文章</a></li>
        </ul>
      </nav>
    </aside>
    <section class="bg1 p-0 py-md-5" id="coming">
      <div class="container py-5">
        <div class="row">
          <div class="col-5"></div>
          <div class="col-12 col-md-7">
            <h1>歐盟最嚴峻個資法 GDPR 來襲 <br><span class="mark-color">7.2 億罰鍰</span>與你無關嗎？</h1>
            <p>繼台灣資安法立院三讀通過後，號稱史上最嚴、罰金最高的歐盟一般資料保護規則（General Data Protection Regulation，GDPR）也已正式生效。還認為歐洲與台灣距離遙遠與我們無關嗎？殊不知 7.2 億罰緩其實近在咫尺！</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h2 class="dline">什麼！我的公司竟然與歐盟 GDPR 有關係？</h2>
            <p>不論您的公司是否設在歐盟境內，也不論您的公司是間小餐廳抑或是一間跨國企業，只要與歐盟當地個人有關的資訊、或擁有當地人民的個資，那你就不能置身事外！馬上就來看看您的公司和 GDPR 有沒有關係。</p>
            <ul class="check">
              <li>公司客戶為歐盟居民</li>
              <li>公司有歐盟供應商</li>
              <li>公司內有員工是歐盟居民</li>
              <li>政府機關及非營利組織中的志工、會員、捐款贊助者…等是歐盟居民</li>
              <li>公司網站固定有歐盟國籍訪客</li>
            </ul>
            <p>只要符合以上任一選項，貴公司就跟 GDPR 密不可分！</p>
          </div>
          <div class="col-12 col-md-6 d-none d-md-block mt-5">
            <img src="/public/img/gdpr/bg-EU-GDPR-2m.png" srcset="/public/img/gdpr/bg-EU-GDPR-2m.png 1x, /public/img/gdpr/bg-EU-GDPR-2.png 2x" alt="GDPR" class="img-fluid d-block mx-auto">
          </div>
        </div>
      </div>
    </section>
    <section id="fight">
      <div class="container">
        <h2 class="text-center mb-0">面對 GDPR 高額罰緩我該怎麼做？</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>遵循 GDPR 是所有企業面臨的挑戰，不但需要專業知識，也需要時間和工具，並且可能須大幅度的變更您的隱私權和資料管理做法。資通電腦提供值得信賴的 2 招 3 步驟，不必自己摸索，即可循序漸進防護 GDPR ，擊敗罰金最高、涵蓋範圍最廣的個資規範。</p>
          </div>
        </div>
        <h3 class="text-center main-color">2 招教你拆解歐盟 GDPR</h3>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="card s mx-auto h-100">
                  <div class="card-body">
                    <h3 class="card-title main-color d-flex">
                      <img class="lazy mr-3" data-original="/public/img/gdpr/arespp-icon.svg" alt="*">
                      <span>ARES PP 隱私保鑣<br>文件加密軟體</span>
                    </h3>
                    <p>完善的電子文件資安防護，產出文件時就開始保護管制，徹底防護個資文件，為資料保護重要防線。</p>
                    <ul class="disc">
                      <li>文件、檔案從源頭自然加解密</li>
                      <li>文件詳實稽核紀錄與軌跡</li>
                      <li>自動相機偵測，防手機偷拍</li>
                      <li>文件地理定位功能</li>
                      <li>獨家隱性浮水印功能</li>
                    </ul>
                    <div class="text-center">
                      <a class="h2" href="/about/">解決方案 &gt;</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="card s mx-auto h-100">
                  <div class="card-body">
                    <h3 class="card-title main-color d-flex">
                      <img class="lazy mr-3" data-original="/public/img/gdpr/upki-icon.svg" alt="*">
                      <span>uPKI Crypto Server <br>資料加解密伺服器</span>
                    </h3>
                    <p>個資一體適用之平台利器，不但可針對資料庫加密、資料檔案加密、更可針對個資進行遮罩，絕對達成內部資料滴水不漏。</p>
                    <ul class="disc">
                      <li>同時支援文件及資料庫加解密</li>
                      <li>去識別化技術（遮罩）</li>
                      <li>不限資料類型</li>
                      <li>多元加解密機制</li>
                      <li>金鑰管理機制</li>
                    </ul>
                    <div class="text-center">
                      <a class="h2" href="https://pki.ares.com.tw/products/cs/">解決方案 &gt;</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="steps">
      <div class="container">
        <h2 class="text-center mb-0">3 步驟讓你跟 GDPR 罰金 Say Goodbye</h2>
        <hr>
        <div class="row counter-reset">
          <div class="col-12 col-md-4">
            <div class="my-3 mx-auto counter-item">
              <div class="fff-bg">
                <img class="lazy d-block mx-auto" data-original="/public/img/gdpr/step-1.svg" alt="*">
              </div>
              <h3 class="text-center mb-3 main-color">主動管理</h3>
              <p>針對個資的使用與存取，主動管理。透過資料自動加解密，有效防堵資料外洩事件的發生。</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="my-3 mx-auto counter-item">
              <div class="fff-bg">
                <img class="lazy d-block mx-auto" data-original="/public/img/gdpr/step-2.svg" alt="*">
              </div>
              <h3 class="text-center mb-3 main-color">積極防護</h3>
              <p>主動通知管理者安全情報，藉由去識別化技術成功做到個資不外洩及預防資安風險。</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="my-3 mx-auto counter-item">
              <div class="fff-bg">
                <img class="lazy d-block mx-auto" data-original="/public/img/gdpr/step-3.svg" alt="*">
              </div>
              <h3 class="text-center mb-3 main-color">詳實追蹤</h3>
              <p>詳實記錄個資使用、處理的過程與情形。保護個資擁有者，同時也維護個資使用及存取者。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="rules">
      <div class="container">
        <h2 class="text-center mb-0">注意 5 點 避免踩到 GDPR 紅線！</h2>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="row justify-content-center">
              <div class="col-12 col-md-4 mb-3">
                <div class="card mx-auto h-100">
                  <div class="card-body">
                    <h4 class="card-title main-color d-flex align-items-center">
                      <img class="lazy mr-3 flex-constant" data-original="/public/img/gdpr/tips-1.svg" alt="*">
                      <?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/gdpr/tips-1.svg'); ?>
                      <span>個資保護不周全，外洩或遭勒索軟體攻擊</span>
                    </h4>
                    <ul class="disc">
                      <li>歐盟居民個資遭到竊取。</li>
                      <li>歐盟居民個資被非法存取。</li>
                      <li>歐盟居民個資被分享給無權利使用的第三人。</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card mx-auto h-100">
                  <div class="card-body">
                    <h4 class="card-title main-color d-flex align-items-center">
                      <img class="lazy mr-3 flex-constant" data-original="/public/img/gdpr/tips-2.svg" alt="*">
                      <?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/gdpr/tips-2.svg'); ?>
                      <span>脫離約定目的或缺乏正當性</span>
                    </h4>
                    <ul class="disc">
                      <li>甲活動所蒐集的歐盟居民個資，被轉給另一個不相關的乙活動使用。</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card mx-auto h-100">
                  <div class="card-body">
                    <h4 class="card-title main-color d-flex align-items-center">
                      <img class="lazy mr-3 flex-constant" data-original="/public/img/gdpr/tips-3.svg" alt="*">
                      <?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/gdpr/tips-3.svg'); ?>
                      <span>未給個資當事人應有的權利</span>
                    </h4>
                    <ul class="disc">
                      <li>歐盟居民具有更正及刪除其個資的權利，若未給其應有之權利，則不符合規範。</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card mx-auto h-100">
                  <div class="card-body">
                    <h4 class="card-title main-color d-flex align-items-center">
                      <img class="lazy mr-3 flex-constant" data-original="/public/img/gdpr/tips-4.svg" alt="*">
                      <?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/gdpr/tips-4.svg'); ?>
                      <span>資料防護安全技術不足，歷史紀錄未保存</span>
                    </h4>
                    <ul class="disc">
                      <li>不論歐盟居民個資是否遭到外洩，只要資料防護的安全技術不足、個資使用的過程未被記錄，則與規範不符。</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mb-3">
                <div class="card mx-auto h-100">
                  <div class="card-body">
                    <h4 class="card-title main-color d-flex align-items-center">
                      <img class="lazy mr-3 flex-constant" data-original="/public/img/gdpr/tips-5.svg" alt="*">
                      <?php //echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/gdpr/tips-5.svg'); ?>
                      <span>資安事件爆發 72 小時內未報</span>
                    </h4>
                    <ul class="disc">
                      <li>一旦歐盟居民個資外洩，需在 72 小時內通報給資料保護的主管機關及受到嚴重危害的當事人。如未通報，則違反規範。</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg2 m-size" id="fine">
      <div class="container py-md-5">
        <div class="row">
          <div class="col-12 col-lg-7">
            <h2 class="dline mb-0">如果違反了 GDPR 會怎樣？</h2>
            <p class="pb-md-5 m-size">史上最貴的個資法非 GDPR 莫屬了，但到底有多貴呢？</p>
            <div class="d-flex flex-wrap flex-md-nowrap">
              <div class="w-100 border border-white p-3">罰鍰最高高達 2 千萬歐元 = <br>新台幣 <span class="mark-color">7.2 億元</span></div>
              <div class="p-5 col-12 col-md-3 text-center">OR</div>
              <div class="w-100 border border-white p-3">以年度全球總營業額的 <span class="mark-color">4%</span> 為罰款</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="gray-bg">
      <div class="container">
        <h2 class="text-center mb-0">台灣哪些產業最先受到波及呢？</h2>
        <hr>
        <div class="row justify-content-center no-gutters">
          <div class="col-12 col-md-8">
            <div class="row no-gutters mx-auto boxes">
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-1m-Air-Transport.png" srcset="/public/img/gdpr/application-1m-Air-Transport.png 1x,/public/img/gdpr/application-1-Air-Transport.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">航空運輸</h4>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-2m-Financial.png" srcset="/public/img/gdpr/application-2m-Financial.png 1x,/public/img/gdpr/application-2-Financial.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">金融業</h4>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-3m-Electronic-Information.png" srcset="/public/img/gdpr/application-3m-Electronic-Information.png 1x,/public/img/gdpr/application-3-Electronic-Information.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">電信業</h4>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-4m-Internet-Retailer.png" srcset="/public/img/gdpr/application-4m-Internet-Retailer.png 1x,/public/img/gdpr/application-4-Internet-Retailer.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">網路零售</h4>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-5m-Technology.png" srcset="/public/img/gdpr/application-5m-Technology.png 1x,/public/img/gdpr/application-5-Technology.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">科技業</h4>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="ratio-box2 ratio-box">
                  <img src="/public/img/gdpr/application-6m-Tourism.png" srcset="/public/img/gdpr/application-6m-Tourism.png 1x,/public/img/gdpr/application-6-Tourism.png 2x" sizes="280px" alt="*">
                  <h4 class="text-center m-0 py-3 fff-color sub-bg">旅遊業</h4>
                </div>
              </div>
            </div>
            <div class="card mw-100 text-center mt-5">
              <div class="card-body main-color h3">提升企業個資保護勢在必行，資通協助您守護隱私符合規範。</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0" id="gov">
      <div class="text-center main-bg fff-color p-3 h3">
        <a class="fff-color" href="https://www.ndc.gov.tw/Content_List.aspx?n=49C4A38DD9249E3E"><span class="passing-reverse">«</span> 國家發展委員會 - 歐盟 GDPR 簡介 <span class="passing">»</span></a>
      </div>
    </section>
    <section class="article-list" id="news">
      <div class="container">
        <h2 class="text-center mb-0">相關文章</h2>
        <hr>
<?php
$news=array(
  array(
    'url'=>'https://www.ares.com.tw/events/arespp-upki-eu-gdpr',
    'photo'=>'/public/img/events.jpg',
    'title'=>'資通 ARES PP 與 uPKI 雙料出擊 遠離 GDPR 高額罰款',
    'date'=>'2018-07-13',
    'lead'=>'資通電腦 ARES PP 隱私保鑣與 uPKI Crypto Server 雙料出擊！協助各產業積極守護歐盟居民的個資與人權，輕鬆應對隱私權及資料管理方法的變更，並遠離 GDPR 的高額罰款。'
  ),
  array(
    'url'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/focus',
    'photo'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/images/og/focus.jpg',
    'title'=>'如何利用文件加密軟體 K.O. 歐盟 GDPR 資料保護規定！',
    'date'=>'2018-06-13',
    'lead'=>'在數位經濟蓬勃發展下，個資收集、使用、處理及保護均受到各界的高度關注。近期隱私權政策有了若干變更，而這些變更則反映在 GDPR（General Data Protection Regulation；歐盟通用資料保護規則）中的提高透明度要求。'
  )
  ,array(
    'url'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/product',
    'photo'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/images/og/focus.jpg',
    'title'=>'資訊一漏永流傳 你的文件加密 DRM 軟體夠 Smart 嗎？',
    'date'=>'2018-06-13',
    'lead'=>'現今的資安思維開始重視內部使用者行為分析。透過 ARES PP 資通隱私保鑣結合行為記錄鑑識管理、日誌分析打造的 SIEM（Security Information and Event Management）管理平台，能快速偵測潛在危險，即時做出應變措施'
  )
  ,array(
    'url'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/it',
    'photo'=>'https://marketing.ares.com.tw/dm/newsletter-2018-06-arespp/images/og/focus.jpg',
    'title'=>'「Keras」AI 入門好選擇 資安防護好幫手！',
    'date'=>'2018-06-13',
    'lead'=>'Keras 是一個開放原始碼，高階深度學習程式庫，使用 Python 編寫，且能夠運行在 TensorFlow、CNTK 或 Theano 之上。使用 Keras 能讓使用者用最少的程式碼，花費最少的時間，建立深度學習模型，並進行訓練、評估準確率、進行預測。'
  )
);
$_html='';
foreach ($news as $val){
  $_html = $_html.'<article>
    <a class="row" href="'.$val['url'].'" rel="external">
      <div class="col-12 col-sm-3 col-lg-3">
        <figure class="ratio-box"><img class="lazy" data-original="'.$val['photo'].'" alt="'.$val['title'].'"></figure>
      </div>
      <div class="col-12 col-sm-8 col-lg-8">
        <time class="main-color" datetime="'.$val['date'].'">'.$val['date'].'</time>
        <h3 class="main-color mt-0 mb-3">'.strip_tags($val['title']).'</h3>
        <p>'.strip_tags($val['lead']).'</p>
      </div>
    </a>
  </article>';
}
echo $_html;
?>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/lib/jquery.lazyload.min.js"></script>
<script src="/public/js/main.js" async></script>
<script>
$(function(){
  $('img.lazy').lazyload({effect: "fadeIn"});
  $('.supmenu ul li').each(function(){
    var $this = $(this);
    var href = $this.find('a').attr('href');
    var tod = href.replace(/[#]/, "");
    var section = $("body").find('#' + tod);
    $(window).scroll(function() {
      if(section.length){
        var winStrollTop = $(window).scrollTop();
        var sectionTop = section.offset().top;
        if(winStrollTop + 78 >= sectionTop){
          $this.siblings().removeClass('main-color');
          $this.addClass('main-color');
        }
      }
    })
  })
  //anchor scroll
  var applyScrolling = function (arr, cb) {
    for (var i = 0; i < arr.length; i++) {
      cb.call(null, i, arr[i])
    }
  }
  var anchors = document.querySelectorAll(".supmenu a[href^='#']")
  if (window.scrollTo) {
    applyScrolling(anchors, function (index, el) {
      var target = document.getElementById(el.getAttribute('href').substring(1));
      el.addEventListener('click', function (e) {
        e.preventDefault();
        $(this).blur();
        $('html, body').animate({
          scrollTop: target.offsetTop - 64
        }, 500);
        // history.pushState({}, '', el);
      })
    })
  }
})
</script>
</body>
</html>