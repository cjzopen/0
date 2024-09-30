<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$data = array();
// php_network_getaddresses: getaddrinfo failed
$lines = @file("https://tw.stock.yahoo.com/q/q?s=2471");
$str1 = iconv("UTF-8", "BIG5", "<td width=160 align=right><font color=#3333FF class=tt>　資料日期: ");
$str2 = iconv("UTF-8", "BIG5", "<td align=\"center\" bgcolor=\"#FFFfff\" nowrap>");
$count=is_array($lines) ? count($lines) : 1;

for ($i=0; $i<$count; $i++) {
  if (substr_count($lines[$i], $str1) != 0) {
    $str = substr(str_replace($str1, '', $lines[$i]), 0, 10);
    $data[] = iconv("BIG5", "UTF-8", trim($str));
  } elseif (substr_count($lines[$i], $str2) != 0) {
    $str = str_replace($str2, '', $lines[$i]);
    $str = str_replace("<b>", '<strong>', $str);
    $str = str_replace("</b>", '', $str);
    $str = str_replace("</td>", '', $str);
    $str = str_replace("<font color=#ff0000>", "<strong class=\"up\">", $str);
    $str = str_replace("<font color=#000000>", '<strong>', $str);
    $str = str_replace("<font color=#009900>", "<strong class=\"down\">", $str);
    $str = str_replace(iconv("UTF-8", "BIG5",'△'), iconv("UTF-8", "BIG5",'▲'), $str);
    $str = str_replace(iconv("UTF-8", "BIG5",'▽'), iconv("UTF-8", "BIG5",'▼'), $str);
    if (substr_count($str, '<strong') != 0) {
      $str = str_replace("\n", '</strong>', $str);
    }
    // $data[] = iconv("BIG5", "UTF-8", trim($str));
    $data[] = mb_convert_encoding(trim($str),"utf-8","big5");
    //此 array 有時候會抓不到值，可能與 yahoo 網站的資料更新有關
  }
}
$page['title']='股東服務 | 資通電腦';
$page['description']='提供資通電腦即時股價資訊與聯絡窗口。股東服務電話：(02) 2522-1351 分機#813，信箱：shiawyi@ares.com.tw 。';
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
      <table class="table table-bordered table-striped text-center">
      <caption>資通　股票代號：<strong>2471</strong>　　資料時間：
        <strong>
<?php
        if(!empty($data)){
         echo $data[0].'（'.$data[1].'）';
        }
?>
         </strong>
      </caption>
        <tr>
          <th class="bg-blue4 text-center">成交</th>
          <th class="bg-blue4 text-center">買進</th>
          <th class="bg-blue4 text-center">賣出</th>
          <th class="bg-blue4 text-center">漲跌</th>
          <th class="bg-blue4 text-center">張數</th>
          <th class="bg-blue4 text-center desk">昨收</th>
          <th class="bg-blue4 text-center desk">開盤</th>
          <th class="bg-blue4 text-center desk">最高</th>
          <th class="bg-blue4 text-center desk">最低</th>
        </tr>
        <tr>
<?php
if(!empty($data)){
  for ($i=2; $i<7; $i++) {
    echo "    <td>".$data[$i]."</td>\n";
  }
  for ($i=7; $i<11; $i++) {
    $data[$i] = $data[$i] ?? '';
    echo "    <td class=\"desk\">".$data[$i]."</td>\n";
  }
}
?>
        </tr>
        <tr class="mob">
          <th class="bg-blue4 text-center">昨收</th>
          <th class="bg-blue4 text-center">開盤</th>
          <th class="bg-blue4 text-center">最高</th>
          <th class="bg-blue4 text-center">最低</th>
          <th class="bg-blue4 text-center"></th>
        </tr>
        <tr class="mob">
<?php
if(!empty($data)){
  for ($i=7; $i<11; $i++) {
    $data[$i] = $data[$i] ?? '';
    echo "    <td>".$data[$i]."</td>\n";
  }
}
?>        <td></td>
        </tr>
      </table>
      </section>
      <section class="px-3">
        <h2 class="text-left" id="股務代理">股務代理</h2>
        <hr class="d-inline-block">
        <div class="row">
          <div class="col-12 col-md-4">
            <img class="img-fluid" src="/img/investor/taishinbank.jpg" alt="台新">
          </div>
          <div class="col-12 col-md-8">
            <p>台新國際商業銀行（股）公司股務代理部</p>
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
<script>
window.addEventListener('load', function() {
  var block = $('.table tr:nth-child(2) td:nth-child(4)');
  var fr = block.text().slice(0,1);
  if(fr==='▲'){
    block.css('color','red')
  }
  if(fr==='▼'){
    block.css('color','green')
  }
})
</script>
</body>
</html>

