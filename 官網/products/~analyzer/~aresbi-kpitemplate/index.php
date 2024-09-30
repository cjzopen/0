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
    <meta name="description" content="資通 BI KPI 管理模組（ARES BI KPI Template），提供財務、銷售、採購等多維度分析模型，相較一般 IT 可提供的財務指標、銷售指標、作業管理…等單純的指標數字，能有更多元的分析方式。是企業管理 KPI 追蹤績效最佳選用工具。">
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
include ('../_banner.php');
?>
    <div class="sticky">
        <div class="ares-breadcrumb">
            <div class="container">
                <ul class="row">
                     
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/" itemprop="url"><span itemprop="title">首頁</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="../../"  itemprop="url"><span itemprop="title">產品類別</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="../" itemprop="url"><span itemprop="title">Analyzer</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= @$nowUrl; ?>" itemprop="url"><span itemprop="title">資通商業智慧 KPI</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="gray-bg paging text-center" id="title">
            <ul>
                <li><a href="../" class="">產品簡介</a></li>
                <li><a href="" class="act">資通商業智慧 KPI</a></li>
                <li><a href="../best-practice/" class="">成功案例</a></li>
                <li><a href="../articles/" class="">相關文章</a></li>
                <li><a href="../consult/" class="">免費諮詢</a></li>
            </ul>
        </div>
    </div>
    <section>
        <h2 class="text-center">輕鬆產出現行系統無法獨立產出的 KPI 分析</h2>
        <hr>
        <div class="container">
            <p class="justify">
              ARES BI KPI Template（ARES Business Intelligence Key Performance Indicator；資通商業智慧 KPI 管理模組）是一套跨系統、跨資料庫、跨流程的分析決策報表。透過客製整合需求匯集資料、建立 Cube、提供 BI 銷售與採購的範本，並以拖曳的方式產出視覺化的報表。只需要幾分鐘便可迅速提供銷售、採購、工廠、財務報表分析，相較一般 IT 可提供的財務指標、銷售指標、作業管理…等單純的指標數字，能有更多元的分析方式。是企業管理 KPI 追蹤績效最佳選用工具。
            </p>
            <br>
            <figure>
              <img src="/img/product/analyzer/Analyzer-structure.png" alt="架構圖" class="img-responsive center-block">
              <figcaption class="text-center blue-color">Analyzer 架構圖</figcaption>
            </figure>
            <br><br>
            <img src="/img/product/analyzer/ARES-KPI.png" alt="儀表板" class="center-block">
            <br>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel panel-default wow fadeInLeft">
                <div class="panel-heading"><h4>財務指標</h4></div>
                <div class="panel-body">
                  <table>
                    <tr>
                      <td>流動比</td>
                      <td><i class="fa fa-circle orange-color"></i> 0.87</td>
                    </tr>
                    <tr>
                      <td>速動比</td>
                      <td><i class="fa fa-circle orange-color"></i> 0.94</td>
                    </tr>
                    <tr>
                      <td>應收帳款週轉率</td>
                      <td><i class="fa fa-circle orange-color"></i> 0.03</td>
                    </tr>
                    <tr>
                      <td>應付帳款週轉率</td>
                      <td><i class="fa fa-circle"></i> 0.09</td>
                    </tr>
                    <tr>
                      <td>存貨週轉率</td>
                      <td><i class="fa fa-circle orange-color"></i> 0.16</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel panel-default wow fadeInLeft">
                <div class="panel-heading"><h4>銷售指標</h4></div>
                <div class="panel-body">
                  <table>
                    <tr>
                      <td>銷售目標</td>
                      <td><i class="fa fa-circle orange-color"></i> 654134</td>
                    </tr>
                    <tr>
                      <td>客戶需求時效達成</td>
                      <td><i class="fa fa-circle"></i> 0.97</td>
                    </tr>
                    <tr>
                      <td>退貨比</td>
                      <td><i class="fa fa-circle"></i> 0.0043</td>
                    </tr>
                  </table>
                  <br><br>
                </div>
              </div>
            </div>
            <div class="clearfix hidden-md hidden-lg"></div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel panel-default wow fadeInLeft">
                <div class="panel-heading"><h4>成長力指標</h4></div>
                <div class="panel-body">
                  <table>
                    <tr>
                      <td>營業成長率</td>
                      <td><i class="fa fa-circle orange-color"></i> -0.59</td>
                    </tr>
                  </table>
                  <br><br><br><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="panel panel-default wow fadeInLeft">
                <div class="panel-heading"><h4>利潤指標</h4></div>
                <div class="panel-body">
                  <table>
                    <tr>
                      <td>毛利率</td>
                      <td><i class="fa fa-circle"></i> 0.52</td>
                    </tr>
                    <tr>
                      <td>採購成本比</td>
                      <td><i class="fa fa-circle orange-color"></i> 0.2</td>
                    </tr>
                  </table>
                  <br><br><br>
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
          <p class="justify">
            ARES BI KPI Template 銷售樣版可以快速的為經理人解答，經理人可以藉由產品、業務、銷售地區、客戶等 60 個不同角度，分析銷售業績、利潤及成長率等 30 多個數據，此外樣版也提供了 7 項企業常用的銷售的 KPI 指標以提供目標及標準的訂定。
          </p>
          <figure>
              <img src="/img/product/analyzer/ARES-KPI-2.png" alt="報表產出、管理模組" class="img-responsive center-block">
            </figure>
            <br>
            <h3>產業 Know-How 一手掌握 3 個月迅速導入</h3>
            <p class="justify">
              資通電腦累積超過 <?= date('Y')-1981;?> 年客戶經營優勢，深耕高科技製造、傳統製造業、流通業、零售業、政府、銀行業等產業，擁有各產業 Domain Know-How，能提供客戶智慧商業分析的最佳分析建議。將銷售、採購分析產品化，只需 3 個月導入時間，即可與 Oracle ERP 完全整合，完成 50 張有關於銷售、採購分析統計，及各項 KPI 定義，展現商業智慧分析之價值。
            </p>
      </div>
    </section>
    <section class="gray-bg" id="contact">
      <h2 class="text-center">產品諮詢</h2>
      <hr>
<?php
$eventsConsult = '../consult/';
include($_SERVER['DOCUMENT_ROOT'].'/strac/contact-area.php');
?>
      </div>
    </section>
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<style>.panel-heading h4{margin:0;padding:8px 0 8px 48px;background:url('/img/product/analyzer/bi-icon.png') left 2px no-repeat;}section table{width:100%;}section table i{font-size: .875rem;color:#26c258;}section table td:first-child{width: 67%;}</style>
    <script src="/js/main2016.js"></script>
</body>

</html>

