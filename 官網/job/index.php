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
$page['css']=array('/css/about-ares.css','/css/job.css?23');
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
        <ul class="row" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">菁英招募</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <!-- <nav class="bg-gray paging text-center">
      <ul>
        <li><a href="#資通文化">資通文化</a></li>
        <li><a href="#benefits">福利制度</a></li>
        <li><a href="#jobs">加入資通</a></li>
        <li><a href="#article">相關文章</a></li>
      </ul>
    </nav> -->
  </div>
  <section>
    <h2 class="text-center" id="資通文化">與資通共創未來</h2>
    <hr>
    <div class="container justify">
      <p>資通電腦創立逾 <?= $age ?> 年，是臺灣第一家獲准股票上市櫃的軟體公司，亦為專業的資訊系統軟體供應商。主要服務對象遍及金融、政府和企業單位。</p>
      <p>資通電腦身為多家國際領導廠商如 Oracle、SWIFT、 IBM、HP、Micro Focus、FICO 等的合作夥伴，我們始終認為人是企業最寶貴的資產，同時也堅持「作好對顧客的承諾」為資通人服務客戶的準則。因此，我們在招募工作夥伴時，一向以篤實為原則，選擇平實、進取的優秀人才，以達成我們的品質政策。資通的員工中，大專以上學歷佔全公司 97% 以上。由於資通人平實負責，做事積極進取，使我們能在一個和諧的環境中，共同學習，相互支援，發揮團隊的精神，達成自我及公司的成長與超越。</p>
      <ol id="years">
        <li><a href="https://ares30.ares.com.tw/">&gt;資通電腦 30 週年</a></li>
        <li><a href="https://marketing.ares.com.tw/dm/newsletter-2015-11-35th/">&gt;資通電腦 35 週年</a></li>
        <li><a href="https://40th.ares.com.tw/">&gt;資通電腦 40 週年</a></li>
      </ol>
    </div>
  </section>
  <section class="bg-lazyload color-white job-bg" data-image="/img/job/bg.jpg">
    <div class="container py-5">
      <div class="row justify-content-center align-items-center py-5">
        <div class="col-12 col-md-6 py-5">
          <div class="py-5">
            <p style="font-size:1.25rem">資通深信人才是最可貴的，除著重人才的培育外，更重視企業文化的經營，不但適合新鮮人展現自我，找到職場的方向；也更適合轉職的專才，找到事業的第二春，繼續發光發熱。</p>
            <div class="text-right pt-5">
              <img class="img-fluid" loading="lazy" width="96" height="37" src="/img/job/余董簽名-w.svg" alt="余宏揚">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center" id="benefits">為什麼選擇資通</h2>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 order-1 order-md-2 mb-3">
          <img class="img-fluid" loading="lazy" width="608" height="440" src="/img/job/Job-Welfare-1.webp" alt="*">
        </div>
        <div class="col-12 col-md-6 order-2 order-md-3 mb-3">
          <img class="img-fluid" loading="lazy" width="608" height="544" src="/img/job/Job-Welfare-2.webp" alt="*">
        </div>
        <div class="col-12 col-md-6 order-3 order-md-1 mb-3">
          <h3 class="color-blue h4 mt-3 mb-0">薪資健全</h3>
          <p>薪資結構依據年度績效考核、目標責任履行與公司營運予以調整。完善的薪酬福利制度，資通與你分享營運上的亮眼成果。</p>
          <h3 class="color-blue h4 mt-3 mb-0">獎金紅利</h3>
          <p>每半年進行完善的績效考核，並依據組織目標達成率、公司獲利程度及員工個人績效，核發績效獎金、年終獎金。</p>
          <h3 class="color-blue h4 mt-3 mb-0">彈性工時與法定休假</h3>
          <p>彈性上下班，並依照勞基法規定給假，週休二日。</p>
        </div>
        <div class="col-12 col-md-6 order-4 order-md-4 mb-3">
          <h3 class="color-blue h4 mt-3 mb-0">豐富職涯</h3>
          <p>你的成長就是公司的資產，資通每年定期提供專業教育訓練資源以及員工進修補助，定期訂閱書報雜誌鼓勵員工閱讀幫助自我成長。</p>
          <h3 class="color-blue h4 mt-3 mb-0">全方位的照護</h3>
          <p>資通重視你的健康，提供員工健檢假、勞工保險、健康保險、團體保險、旅平險、癌症險、意外險與職災保險保障。</p>
          <h3 class="color-blue h4 mt-3 mb-0">友善職場</h3>
          <p>提供結婚禮金、生育補助禮金與貼心的女性同仁哺乳室。</p>
          <h3 class="color-blue h4 mt-3 mb-0">團康福利</h3>
          <p>提供國內外旅遊、部門聚餐、慶生會，與社團活動相關補助與福利。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-lazyload color-white job-bg" data-image="/img/job/job-joinus.jpg">
    <h2 class="text-center" id="jobs">加入資通</h2>
    <hr class="bg-white mb-3">
    <p class="text-center mb-5">選擇公司，是選擇你認同的理念，<br>歡迎加入我們，一起打造世界級標竿企業！</p>
    <div class="container">
      <div class="row text-center justify-content-center align-items-center">
          <div class="col-12 col-md-4 my-4">
            <a href="https://goo.gl/mViVGv" rel="external">
              <img src="/img/job/104.svg" width="120" height="56" alt="104" class="img-fluid" loading="lazy">
              <p class="pt-3">從 104 填寫履歷</p>
            </a>
          </div>
          <div class="col-12 col-md-4 my-4">
            <a href="mailto:hr@ares.com.tw">
            <img src="/img/job/email.svg" width="88" height="84" alt="104" class="img-fluid" loading="lazy">
              <p class="pt-3">找不到你想要應徵的職位嗎？歡迎你隨時將履歷寄至 hr@ares.com.tw。</p>
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

