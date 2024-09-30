<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');

try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

$query = "SELECT * FROM news WHERE product LIKE '%job%' ORDER BY date DESC";
$rs = $db->query($query)->fetchAll();

$db=null;

$_html='';
foreach ($rs as $row) {
  if (!empty($row['redirect'])) {
    $row['href'] = $row['redirect'];
  } elseif (!empty($row['news_name'])) {
    $row['href'] = '/events/'.$row['news_name'];
  } else {
    $row['href'] = '/events/'.$row['id'];
  }
  $_html = $_html.'<li class="py-3"><time>'.$row['date'].'</time><div class="mt-1 color-blue"><a href="'.$row['href'].'">'.$row['title'].'</a></div></li>';
}
$rs=null;

$page['title']='菁英招募 | 資通電腦';
$page['description']='資通電腦深信人才是最可貴的，著重人才的培育也重視企業文化的經營，不但適合新鮮人展現自我，找到職場的方向；也適合轉職的專才，找到事業的第二春，繼續發光發熱。資通電腦是你的不二選擇！';
$page['canonical']='https://www.ares.com.tw/job/';
$page['css']=array('/css/about-ares.css','/css/job.css?20');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
  <figure class="slider" data-image="/img/job/banner.jpg">
    <!-- <img class="img-fluid" src="/img/job/banner.jpg" alt="*"> -->
    <figcaption class="color-white">
      <h1 class="h4"><img src="/img/job/job-icon.svg" alt="*">菁英招募</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">菁英招募</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <nav class="bg-gray paging text-center">
      <ul>
        <li><a href="#資通文化">資通文化</a></li>
        <li><a href="#benefits">福利制度</a></li>
        <li><a href="#jobs">加入資通</a></li>
        <li><a href="#article">相關文章</a></li>
      </ul>
    </nav>
  </div>
  <section>
    <h2 class="text-center" id="資通文化">資通文化</h2>
    <hr>
    <div class="container justify">
      <p>資通電腦創立逾 <?= $age ?> 年，是臺灣第一家獲准股票上市櫃的軟體公司，亦為專業的資訊系統軟體供應商。主要服務對象遍及金融、政府和企業單位。</p>
      <p>資通電腦身為多家國際領導廠商如 Oracle、SWIFT、 IBM、HP、Micro Focus、FICO 等的合作夥伴，我們始終認為人是企業最寶貴的資產，同時也堅持「作好對顧客的承諾」為資通人服務客戶的準則。因此，我們在招募工作夥伴時，一向以篤實為原則，選擇平實、進取的優秀人才，以達成我們的品質政策。資通的員工中，大專以上學歷佔全公司 97% 以上。由於資通人平實負責，做事積極進取，使我們能在一個和諧的環境中，共同學習，相互支援，發揮團隊的精神，達成自我及公司的成長與超越。</p>
      <p>資通深信人才是最可貴的，除著重人才的培育外，更重視企業文化的經營，不但適合新鮮人展現自我，找到職場的方向；也更適合轉職的專才，找到事業的第二春，繼續發光發熱。</p>
      <ol id="years">
        <li><a href="http://ares30.ares.com.tw/">&gt;資通電腦 30 週年</a></li>
        <li><a href="https://marketing.ares.com.tw/dm/newsletter-2015-11-35th/">&gt;資通電腦 35 週年</a></li>
        <li><a href="https://40th.ares.com.tw/">&gt;資通電腦 40 週年</a></li>
      </ol>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center" id="benefits">福利制度</h2>
    <hr>
    <div class="container">
      <ul class="row text-center justify-content-center">
          <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft mb-3">
            <img src="/img/job/Job-Welfare-1.jpg" alt="薪資健全" class="img-fluid" loading="lazy" width="350" height="260">
            <div class="p-3">
              <div class="h5">薪資健全 獎金紅利優</div>
              <p class="text-left justify">薪資結構依據年度績效考核、目標責任履行與公司營運予以調整。員工享紅利、認股、配股。給予三節獎金或禮品、資深員工禮品、生日禮金、婚喪喜慶、生育補助、介紹獎金、績效獎金、提案獎金、年終獎金。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft mb-3">
            <img src="/img/job/Job-Welfare-2.jpg" alt="健康" class="img-fluid" loading="lazy" width="350" height="260">
            <div class="p-3">
              <div class="h5">照護員工健康 鼓勵生育</div>
              <p class="text-left justify">提供員工健檢假、勞工保險、健康保險、團體保險、旅平險、癌症險、意外險與職災保險保障。提拱員工結婚、生育補助獎金與貼心的女性同仁哺乳室。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft mb-3">
            <img src="/img/job/Job-Welfare-3.jpg" alt="成長" class="img-fluid" loading="lazy" width="350" height="260">
            <div class="p-3">
              <div class="h5"><a href="https://www.ares.com.tw/events/ares-educational-training-2017">補助成長 鼓勵學習</a></div>
              <p class="text-left justify">
                <a href="https://www.ares.com.tw/events/ares-educational-training-2017">每年定期提供專業教育訓練資源以及員工進修補助，定期訂閱書報雜誌鼓勵員工閱讀幫助自我成長。</a>
              </p>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft mb-3">
            <img src="/img/job/Job-Welfare-4.jpg" alt="休假" class="img-fluid" loading="lazy" width="350" height="260">
            <div class="p-3">
              <div class="h5">彈性工時與法定休假</div>
              <p class="text-left justify">兩個時段彈性上下班，並依照勞基法規定給假，週休二日。</p>
            </div>
          </li>
          <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft mb-3">
            <img src="/img/job/Job-Welfare-5.jpg" alt="娛樂" class="img-fluid" loading="lazy" width="350" height="260">
            <div class="p-3">
              <div class="h5">團康福利娛樂員工身心</div>
              <p class="text-left justify">提供國內外旅遊補助、部門聚餐、慶生會，與社團活動相關補助與福利。</p>
            </div>
          </li>
      </ul>
    </div>
  </section>
  <section>
    <h2 class="text-center" id="jobs">加入資通</h2>
    <hr>
    <div class="container">
      <div class="row text-center justify-content-center align-items-center">
          <div class="col-12 col-md-4 wow fadeInLeft">
            <a href="https://goo.gl/mViVGv" rel="external">
              <img src="/img/job/104-logo.png" width="60" height="29" alt="104" class="img-fluid" loading="lazy">
              <div class="h5">104 人力銀行職缺</div>
            </a>
          </div>
          <div class="col-12 col-md-4 wow fadeInLeft">
            <a href="mailto:hr@ares.com.tw">
              <svg width="60" height="60"><use xlink:href="#c-mail"/></svg>
              <div class="h5">Email</div>
              <p>歡迎您將履歷、自傳 Email 至 hr@ares.com.tw。</p>
            </a>
          </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center" id="article">相關文章</h2>
    <hr>
    <div class="container" id="news">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <ul class="h6" id="news-list">
<?= $_html; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener('load', function() {
  var job = $('#news-list li');
  var jobLength = job.length;
  if(jobLength > 5){
    job.slice(5).hide()
    $('#news').append('<div class="text-center mt-4"><span class="color-blue text-center more btn">更多文章</span></div>')
    $('#news .more').click(function(){
      job.slice(5).fadeIn()
      $(this).fadeOut()
    })
  }
})
</script>
</body>
</html>

