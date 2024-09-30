<?php
$pageName = "product";
// nav 判斷用
//首頁 home,最新消息 news, 專業服務 service, 產品介紹 product, 電子報 newsletter, 成功案例 bestPractice, 免費諮詢 consult
// $host_link = 'http://'.$_SERVER['HTTP_HOST'].'/';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title>Analyzer 產品簡介- 資通電腦股份有限公司</title>
    <meta name="description" content="資通電腦代理的 Analyzer – BI 動態決策分析工具，能提供企業完善的商業智慧解決方案，多樣化視覺樞紐分析圖形，呈現給使用者完整分析結果，不需安裝程式即可使用，有效提升企業營運決策效率。">
    <meta property="og:image" content="https://www.ares.com.tw/img/ares.png">
    <meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="https://www.ares.com.tw/img/apple-touch-icon72.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main2016.css">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/header.php');
include (__DIR__.'/_banner.php');
?>
    <div class="sticky">
        <div class="ares-breadcrumb">
            <div class="container">
                <ul class="row">
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/" itemprop="url"><span itemprop="title">首頁</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="../"  itemprop="url"><span itemprop="title">產品類別</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= @$nowUrl; ?>" itemprop="url"><span itemprop="title">Analyzer</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="gray-bg paging text-center" id="title">
            <ul>
                <li><a href="" class="act">產品簡介</a></li>
                <li><a href="aresbi-kpitemplate/">資通商業智慧 KPI</a></li>
                <li><a href="best-practice/">成功案例</a></li>
                <li><a href="articles/">相關文章</a></li>
                <li><a href="consult/">免費諮詢</a></li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <br>
              <figure class="wow fadeInLeft">
                <img src="/img/product/analyzer/analyzer-1.jpg" alt="產品使用畫面" class="img-responsive center-block">
              </figure>
              <br>
            </div>
            <div class="col-xs-12 col-sm-6">
              <h2 class="underline">商業智慧動態決策分析工具</h2>
              <br>
              <p class="justify">
                資通電腦代理的 Analyzer 為「企業級」動態決策支援分析工具，能提供企業完善的商業智慧解決方案。Analyzer 已在全球數十多個國家獲得眾多大型企業採用，能以強大分析效能整合不同來源的數據資料，透過直覺互動式操作，迅速提供使用者獲取决策所需的關鍵資訊與精確數字，大幅縮減資訊分析的人力、物力及時間成本，同時也將資訊人員從繁重的報表負荷中解救出來。
              </p>
              <p class="justify">
                而在企業資安意識升高的情況下，Analyzer 也能提供安全便捷的權限控管機制，不只報表能設定權限，還可以更細部在資料上設不同權限，讓同一張報表不同權限的使用者看到不同資訊，為企業做到真正的資安隱私把關！
              </p>
            </div>
          </div>
        </div>
    </section>
    <section class="gray-bg">
      <h2 class="text-center">產品特點</h2>
      <hr>
      <div class="container text-center">
        <div class="row">
          <div class="flex-box">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-1.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">豐富多樣的呈現方式</h4>
                <p class="plr15">
                  多樣化樞紐分析圖形搭配豐富色彩與樣式，滿足使用者對資料視覺化呈現的需求。
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-2.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">重要資訊不漏接</h4>
                <p class="plr15">
                  提供訂閱及資料事件驅動功能，能依照需求設定寄送通知，或在特殊事件發生提醒相關人員注意。
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-3.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">超高系統效能</h4>
                <p class="plr15">
                  通過歐美大型 SaaS 集團 500 個以上 Concurrent User 的考驗，有效發揮企業效能。
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-4.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">Pure Web 一次建置、全部到位</h4>
                <p class="plr15">
                  使用者不需要安裝任何程式，透過瀏覽器與網路即可執行。
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-5.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">Microsoft SQL Server&#8482; 無縫整合</h4>
                <p class="plr15">
                  完整支援 Microsoft SQL Server&#8482; 是選擇微軟建構商業智慧平臺之企業的最佳選擇。
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
              <div class="thumbnail">
                <img src="/img/product/analyzer/analyzer-icon-6.jpg" alt="*" onerror="this.src='https://api.fnkr.net/testimg/101x101/efefef/2858aa/?text=ARES'">
                <h4 class="blue-color">100% Zero Foot Print</h4>
                <p class="plr15">
                  不需外加元件的架構設計，讓企業在全球 Intranet 及 Extranet 的使用、建置、部署與管理都簡單而有效率。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="">
      <h2 class="text-center">產品效益</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h4>IT 端：更高的生產力、更好的工作成果</h4>
            <ul class="check">
              <li>提高報表製作效率，減少人工準備資料的成本與時間</li>
              <li>提供全公司一致的指標數據及管理報表定義</li>
              <li>豐富的資料組合與靈活的報表展現能力，提升使用者滿意度</li>
              <li>可投入更多精力在需要資訊專業能力的任務，而非報表苦工</li>
            </ul>
          </div>
          <div class="col-xs-12">
            <h4>User 端：更有效率地發現及解決問題</h4>
            <ul class="check">
              <li>取得對營運數字的一致性觀點，建立跨部門經營管理會議共同討論基礎</li>
              <li>協助企業有效運用累積的大量資料，透過不同角度分析，發現潛在問題</li>
              <li>發動事件導向的管理，促進企業決策流程，達到強化營運績效的效果</li>
              <li>透過人力資源的有效配置，降低整體營運成本</li>
              <li>將分析智慧延展到企業之外，將資訊價值與客戶、供應商、合作夥伴共享</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="gray-bg" id="contact">
      <h2 class="text-center">產品諮詢</h2>
      <hr>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
    </section>
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
    <script src="/js/main2016.js"></script>
</body>

</html>

