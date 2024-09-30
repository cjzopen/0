<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '一例一休說明專區，輕鬆應對不斷變更的勞動法規';
$page['description'] = '內有免費試算工具！HCP 人資系統的 5 種加班日性質、3 段加班時數倍率、無限制的計給時數設定，不論加班計費或補休，設定簡單輕鬆上手';
$canonical=HOST_LINK.'topic/one-fixed-day-off-and-one-flexible-rest-day/';

// $page['css']=array('/css/grid.css');
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/know/knowhr-banner-1440.jpg', //圖片
  null, //srcset
  '*', //alt
  '', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <ol class="container">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">一例一休專區</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
    <nav class="supmenu d-print-none">
      <ul class="text-center mb-0">
      <li><a class="py-2 py-md-0" href="#table">新舊對照</a></li>
      <li><a class="py-2 py-md-0" href="#way">解決方案</a></li>
      <li><a class="py-2 py-md-0" href="#faq">試算與 FAQ</a></li>
      </ul>
    </nav>
    <section id="table">
      <div class="container">
        <h1 class="text-center mb-0">一例一休勞基法新舊對照</h1>
        <hr>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>項目</th>
              <th>舊法案</th>
              <th>修正通過</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>週休二日</th>
              <td>每 7 日中有 1 天為例假日</td>
              <td>每 7 日中有 1 天為休息日、1 天為例假日</td>
            </tr>
            <tr>
              <th>國定假日</th>
              <td>每年 19 天</td>
              <td>每年 12 天 (勞工比公務員多放 1 天勞動節)</td>
            </tr>
            <tr>
              <th>特休假</th>
              <td>
                <ul class="disc">
                  <li>1 年以上未滿 3 年：7 天</li>
                  <li>3 年以上未滿 5 年：10 天</li>
                  <li>5 年以上未滿 10 年：14 天</li>
                  <li>10 年以上，每 1 年加 1 日，最多 30 日</li>
                </ul>
                <small>※ 未明訂特休假未休完，雇主該如何處理</small>
              </td>
              <td>
                <ul class="disc">
                  <li>6 個月以上未滿 1 年：3 天</li>
                  <li>1 年以上未滿 2 年：7 天</li>
                  <li>2 年以上未滿 3 年：10 天</li>
                  <li>3 年以上未滿 5 年：14 天</li>
                  <li>5 年以上未滿 10 年：15 天</li>
                  <li>10 年以上，每 1 年加 1 日，最多 30 日</li>
                </ul>
                <small>※ 特休假未休完，雇主應折算 1 日工資</small>
              </td>
            </tr>
            <tr>
              <th>休息日加班費</th>
              <td>前 2 小時每小時 1/3，第 3 小時起每小時 2/3</td>
              <td>前 2 小時 1 + 1/3，第 3 小時起 1 + 2/3，未滿 4 小時以 4 小時計</td>
            </tr>
            <tr>
              <th>明訂輪班勞工的換班休息時間</th>
              <td>輪班勞工，更換班次時，應給予適當休息時間</td>
              <td>輪班勞工，要有至少連續 11 小時休息時間，授權行政院另訂施行日期</td>
            </tr>
            <tr>
              <th>罰則</th>
              <td>雇主若未依法給特休、讓勞工超時工作，罰 20 至 30 萬元</td>
              <td>雇主若未依法給特休，讓勞工超時工作，罰 20 至 100 萬元。並授權主管機關得依事業規模、違反人數或違反情節，加重其罰鍰，最高 150 萬元</td>
            </tr>
          </tbody>
        </table>
        <div class="pt-5 text-right">
          <a href="https://www.mol.gov.tw/topic/32853/32858/32890/" class="btn">施行細則修正條文</a>
        </div>
      </div>
    </section>
    <section id="way">
      <div class="container">
        <h2 class="text-center mb-0">HCP 帶你迎戰「一例一休」</h2>
        <hr>
        <p class="text-center">勞基法「一例一休」新制已於 106 年 1 月 1 日正式上路，人資系統針對工時、排班、給薪……等法規修正，都得大幅調整，<br>資通電腦已即時協助所有客戶更新系統，但面對系統無法即時應變，苦命的人資們該如何應對呢？</p>
        <ul class="row justify-content-center text-center">
          <li class="col-10 col-md-3 mb-3">
            <div class="border rounded fff-bg mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-1.svg" alt="*"></figure>
              <h3 class="main-color"><a href="https://edm.ares.com.tw/dm/201612-HCP-article/taiwan-labor-day-off-dispute/file/%E4%BC%91%E5%81%87%E8%A8%88%E7%AE%97.pdf" class="stretched-link">【休假計算】</a></h3>
              <p>新制特別休假（年假）怎麼給？未休完的特休假怎麼折發薪資？</p>
            </div>
          </li>
          <li class="col-10 col-md-3 mb-3">
            <div class="border rounded fff-bg mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-2.svg" alt="*"></figure>
              <h3 class="main-color"><a href="https://edm.ares.com.tw/dm/201612-HCP-article/taiwan-labor-day-off-dispute/file/%E5%8A%A0%E7%8F%AD%E8%B2%BB%E8%A8%88%E7%AE%97.pdf" class="stretched-link">【加班費計算】</a></h3>
              <p>新制特別休假（年假）怎麼給？未休完的特休假怎麼折發薪資？</p>
            </div>
          </li>
          <li class="col-10 col-md-3 mb-3">
            <div class="border rounded fff-bg mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-3.svg" alt="*"></figure>
              <h3 class="main-color"><a href="https://edm.ares.com.tw/dm/201612-HCP-article/taiwan-labor-day-off-dispute/file/%E4%B8%8D%E5%90%8C%E5%B7%A5%E6%99%82%E6%8E%92%E7%8F%AD%E8%A8%88%E7%AE%97.pdf" class="stretched-link">【不同工時排班計算】</a></h3>
              <p>新制特別休假（年假）怎麼給？未休完的特休假怎麼折發薪資？</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section id="faq">
      <div class="container">
        <h2 class="text-center">勞動部試算與 FAQ</h2><hr>
        <ul class="row justify-content-center text-center">
          <li class="col-10 col-md-3 mb-3">
            <div class="rounded main-bg fff-color mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-4.svg" alt="*"></figure>
              <div class="h3"><a href="https://calc.mol.gov.tw/Trail_New/html/RestDays.html" class="stretched-link">特別休假日數試算表</a></div>
            </div>
          </li>
          <li class="col-10 col-md-3 mb-3">
            <div class="rounded main-bg fff-color mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-5.svg" alt="*"></figure>
              <div class="h3"><a href="https://labweb.mol.gov.tw/" class="stretched-link">加班費試算系統</a></div>
            </div>
          </li>
          <li class="col-10 col-md-3 mb-3">
            <div class="rounded main-bg fff-color mx-auto h-100 p-3 position-relative">
              <figure><img class="img-fluid" loading="lazy" width="90" height="90" src="/img/ffrd/icon-6.svg" alt="*"></figure>
              <div class="h3"><a href="https://www.mol.gov.tw/service/19851/" class="stretched-link">常見問答集</a></div>
            </div>
          </li>
        </ul>
        <ul class="disc">
          <li><a href="https://www.mol.gov.tw/media/3810790/%E6%9C%89%E9%97%9C%E9%9B%87%E4%B8%BB%E7%B6%93%E5%BE%B5%E5%BE%97%E5%8B%9E%E5%B7%A5%E5%90%8C%E6%84%8F%E6%96%BC%E5%8B%9E%E5%8B%95%E5%9F%BA%E6%BA%96%E6%B3%95%E7%AC%AC36%E6%A2%9D%E6%89%80%E5%AE%9A%E4%BC%91%E6%81%AF%E6%97%A5%E5%87%BA%E5%8B%A4%E5%B7%A5%E4%BD%9C%E5%BE%8C-%E5%8B%9E%E5%B7%A5%E5%BE%97%E5%90%A6%E9%81%B8%E6%93%87%E8%A3%9C%E4%BC%91%E5%8F%8A%E8%A3%9C%E4%BC%91%E7%9B%B8%E9%97%9C%E8%A6%8F%E5%AE%9A%E7%AD%89%E7%96%91%E7%BE%A9-1060130937.pdf">有關雇主經徵得勞工同意於勞動基準法第 36 條所定休息日出勤工作後，勞工得否選擇補休及補休相關規定等疑義 1060130937.pdf</a></li>
          <li><a href="https://www.mol.gov.tw/media/3810789/%E5%8B%9E%E5%B7%A5%E5%90%8C%E6%84%8F%E6%96%BC%E4%BC%91%E6%81%AF%E6%97%A5%E5%87%BA%E5%8B%A4%E5%9B%A0%E5%80%8B%E4%BA%BA%E5%9B%A0%E7%B4%A0%E6%9C%AA%E8%83%BD%E4%BE%9D%E7%B4%84%E6%8F%90%E4%BE%9B%E5%8B%9E%E5%8B%99%E8%99%95%E7%90%86%E5%8F%8A%E5%8A%A0%E7%8F%AD%E6%99%82%E6%95%B8%E5%88%97%E8%A8%88%E7%96%91%E7%BE%A9%E5%87%BD%E9%87%8B-1060130987.pdf">勞工同意於休息日出勤因個人因素未能依約提供勞務處理及加班時數列計疑義函釋 1060130987.pdf</a></li>
          <li><a href="https://www.mol.gov.tw/topic/32853/">勞動部週休二日修法說明</a></li>
          <li><a href="https://www.facebook.com/104hr/videos/1288297887873874/">免費勞檢講座：自主管理作的好 勞動檢查沒煩惱</a></li>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <details>
              <summary><h3>HCP 相關文章 &raquo;</h3></summary>
              <ul class="disc">
<?php
try {
  $db = new PDO("sqlite:/sites/hcp/topic/one-fixed-day-off-and-one-flexible-rest-day/news.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}
$query = "SELECT * FROM news ORDER BY id DESC";
$rs = $db->query($query)->fetchAll();
foreach ($rs as $row) {
  echo '<li><a href="'.$row['href'].'">'.$row['title'].'</a></li>';
}
?>
              </ul>
              <div class="p-3 text-right"><a href="/news/knowledge/" class="btn">&raquo; 查看更多</a></div>
            </details>
          </div>
          <div class="col-12 col-md-6">
            <details>
              <summary><h3>熱門新聞 &raquo;</h3></summary>
              <ul class="disc">
<?php
$query = "SELECT * FROM hotNews ORDER BY date DESC";
$rs = $db->query($query)->fetchAll();
foreach ($rs as $row) {
  echo '<li><a href="'.$row['href'].'"><time>'.$row['date'].'</time> '.$row['title'].' | <cite>'.$row['source'].'</cite></a></li>';
}
$rs=null;
$db=null;
?>
              </ul>
            </details>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>