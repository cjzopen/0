<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$data = array();
// php_network_getaddresses: getaddrinfo failed
// $content = @file_get_contents("https://ww2.money-link.com.tw/TWStock/StockChart.aspx?SymId=2471");
// preg_match("/<div class=\"TwstockMainBox\">.*?<\/table>/s",$content,$matches);

$page['title']='股東服務 | 資通電腦';
$page['description']='股東服務電話：(02) 2522-1351 分機813，信箱：shiawyi@ares.com.tw。';
$page['canonical']='https://www.ares.com.tw/investor-service/';
$page['css']=array('/css/investor.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include($_SERVER['DOCUMENT_ROOT'].'/template/investor-banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">股東服務</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container service">
    <div class="row">
<?php
$investor = 'service';
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-list.php');
?>
      <div class="col-12 col-md-9">
        <section class="px-3">
          <h2 class="text-left" id="股價資訊">股價資訊</h2>
          <hr class="d-inline-block">
          <p><a class="color-blue" href="https://www.twse.com.tw/pdf/ch/2471_ch.pdf" rel="noopener noreferrer" target="_blank">臺證所：2471</a></p>
          <div id="stonk">
            <!-- <iframe src="https://www.twse.com.tw/pdf/ch/2471_ch.pdf#toolbar=0&navpanes=0&scrollbar=0" frameBorder="1" scrolling="auto" height="480px" width="100%"></iframe> -->
<?php
// echo $matches[0];
// echo '</div>';
?>
          </div>
          <div class="text-right"><small></small></div>
        </section>
        <section class="px-3">
          <h2 class="text-left" id="股務代理">股務代理</h2>
          <hr class="d-inline-block">
          <div class="row">
            <div class="col-12 col-md-4">
              <img class="img-fluid" src="/img/investor/taishinbank.jpg" alt="台新">
            </div>
            <div class="col-12 col-md-8">
              <p>台新綜合證券（股）公司股務代理部</p>
              <ul>
                <li>地址：（104）台北市建國北路一段 96 號 B1</li>
                <li>電話：（02）2504-8125</li>
                <li>網址：<a class="color-blue" href="https://www.taishinbank.com.tw" rel="external">https://www.taishinbank.com.tw</a></li>
              </ul>
            </div>
          </div>
        </section>
        <section class="px-3">
          <h2 class="text-left" id="投資人聯絡窗口">投資人聯絡窗口</h2>
          <hr class="d-inline-block">
          <p>若您有任何問題，歡迎與我們聯繫</p>
          <ul>
            <li>聯絡人：丁孝儀</li>
            <li>電話：（02）2522-1351 #813</li>
            <li>信箱：<a href="mailto:shiawyi@ares.com.tw" class="color-blue">shiawyi@ares.com.tw</a></li>
            <li>地址：台北市中山北路二段 111 號 3 樓</li>
          </ul>
        </section>
      </div>
    </div>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

