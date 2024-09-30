<?php
$rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description` FROM news WHERE product LIKE '%{$product}%' AND success_case = true ORDER BY `date` DESC")->fetchAll();
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');
require_once(PHP_WEB_ROOT.'/template/_case.php');







$page['title']='成功案例';
$page['css']=array('/css/accordion.css','/css/article.css');
$page['description']='看看有哪些企業、廠商、政府單位使用 uPKI 保護電子資產。';
$page['canonical']=HOST_LINK.'/best-practices/';
$page['hreflang']=HOST_LINK.'/en/best-practices/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/best-practices/banner.jpg', //圖片
  null, //srcset
  '*', //alt
  '<h1 class="h3">成功案例</h1>', //圖片上的字
  null //字的 class
);
?>
<main>
  <header>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="./" itemprop="item"><span itemprop="name">成功案例</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </div>
  </header>
  <section>
    <div class="container">
      <h2 class="text-center">產業別</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <div class="accordion-wrapper">
            <div class="area-accordion h4" aria-controls="panel-1-1" aria-expanded="false" id="accordion-1-1">一般企業</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-1" id="panel-1-1">
                <ul class="disc">
                  <li>應用：薪資條加解密、文件保全、電子商務、資料欄位加密、安全電子郵件、單一認證簽入、內部網路檔案及系統權限控管，原有系統如 ERP、MRP、SCM、CRM、PDM、文件管理系統加上 PKI enable 機制。</li>
                  <li>成功案例：樂宙、和信超媒體、捷元、生活工場、敦南科技、大宇資訊、光寶科技、華擎機械、華通電腦、華碩電腦、新竹科學工業園區管理局、台灣區塑膠製品同業公會、世昕（原中華顧問工程司）、長庚醫療財團法人、新安東京海上產物保險、微星科技、遠傳電信、信義房屋、旺矽科技……。</li>
                </ul>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-2" aria-expanded="false" id="accordion-1-2">銀行金融業</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-2" id="panel-1-2">
                <ul class="disc">
                  <li>應用：電子支票、網路銀行、分行資料安全傳輸。證券網路下單、交易記錄安全回覆、銀行融資交易。</li>
                  <li>成功案例：中國信託、上海商銀電匯業務、國華人壽、土地銀行、農漁會金融及電子商務用戶、臺灣網路認證公司電子金融用戶……。</li>
                </ul>
              </div>
              <div class="area-accordion h4" aria-controls="panel-1-3" aria-expanded="false" id="accordion-1-3">政府單位（軍方、醫療、學校）</div>
              <div class="area-accordion-panel" aria-labelledby="accordion-1-3" id="panel-1-3">
                <ul class="disc">
                  <li>應用：安全電子公文系統、政府電子採購系統 3001 任何 Web 或 Client/Server 系統加上 PKI enable 機制。</li>
                  <li>成功案例：瓜地馬拉政府海關系統、台中技術學院、行政院研考會 e 管家、行政院研考會 e 公務、台北市資訊處、台北市政府、台北市政府捷運工程局、宜蘭縣政府、高雄市政府人事處、立法院、法務部、交通部、交通部民航局、財政部、北區國稅局、內政部警政署、各縣市警察局、行政院主計處、國防部、行政院衛生署及疾病管制局、勞工保險局、內科醫學會、經濟部智慧財產局、教育部網路中心、淡江大學、輔仁大學……。</li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div>
    <aside class="supmenu sticky-top">
      <div class="container">
        <ul class="text-center mb-0">
          <?= $_aside ?>
        </ul>
      </div>
    </aside>
    <section class="bg-white">
      <div class="container">
        <h2 class="text-center">案例文章</h2><hr>
        <?= $_html ?>
      </div>
    </section>
  </div>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/js/accordion.js" defer></script>
</body>
</html>