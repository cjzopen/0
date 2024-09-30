<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "bestPractice";
$page['title']='成功案例 | 資通電腦';
$page['description']='資通電腦軟體產品與專業顧問、委外服務，主要服務對象遍及金融、政府和工商企業等單位之成功案例。';
$page['canonical']='https://www.ares.com.tw/best-practices/';
$page['css']=array('/css/events.css');
$amp ='https://www.ares.com.tw/amp/best-practices/';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

$rs = $db->query("SELECT id, `date`
    FROM news WHERE success_case = true ORDER BY `date` DESC LIMIT 1")->fetchAll();

foreach ($rs as $row) {
  $last = substr($row['date'], 0, 4);
}
// $last = max($years);

$rs = $db->query("SELECT * FROM news WHERE success_case = true GROUP BY id HAVING `date` >= '2008-01-01' ORDER BY `date` DESC LIMIT 20")->fetchAll();

?>
  <figure class="slider" data-image="/img/best-practice/best-practice-banner-400.png">
    <figcaption class="color-white">
      <img src="/img/best-practice/best-practice-icon.svg" alt="*">成功案例
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
            <a href="" itemprop="item"><span itemprop="name" onclick="return false;">資通客戶案例</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section class="list">
    <div class="container">
      <h1 class="text-center h2">成功案例分享</h1>
      <hr>
      <div class="text-right">
        <select class="align-middle" name="select_year" id="select_year">
          <option value="" disabled selected>年份</option>
          <option value="all">全部</option>
<?php
for($i=$last;$i>=2008;$i--){
  echo '<option value="'.$i.'">'.$i.' 年</option>';
}
?>
          
        </select>
        <select class="align-middle" name="select_type" id="select_type">
          <option value="" disabled>產品</option>
          <option value="all" selected>全部</option>
          <option value="erp">ERP</option>
          <option value="mes">MES</option>
          <option value="hr">人資系統</option>
          <option value="is">資安</option>
          <option value="other">其它</option>
        </select>
        <a href="#" class="btn btn-dark" id="filter">過濾</a>
      </div>
      <div id="ajax">
<?php
$_html ='';
  foreach ($rs as $row) {
  if(isset($row['product']) && preg_match('/(AFEIS|Analyzer|SWIFT|eAresBank|nuntio|treasury)/i', $row['product'])){

  }else{
    $row['photo'] = '/img/events.jpg';
    if(!empty($row['img'])){
      // if (substr($row['img'], 0, 23) === 'https://www.ares.com.tw' || substr($row['img'], 0, 22) === 'http://www.ares.com.tw') {
        $row['photo'] = $row['img'];
      // } else {
        // $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
      // }
    }
    if (!empty($row['redirect'])) {
      $row['href'] = $row['redirect'];
    } elseif (!empty($row['news_name'])) {
      $row['href'] = '/events/'.$row['news_name'];
    } else {
      $row['href'] = '/events/'.$row['id'];
    }
    if (!empty($row['content']) && empty($row['img'])){
        $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
        if (preg_match($pattern, $row['content'], $matches)) {
          if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw' || substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
            $row['photo'] = $matches[1];
          } else {
            $row['photo'] = 'https://www.ares.com.tw'.$matches[1];
          }
        }
    }
    if(empty($row['description'])){
      $row['lead']='';
      if(isset($row['content'])){
        $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
        $row['lead'] = mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8').'…';
      }
    }else{
      $row['lead'] = $row['description'];
    }
    $product_class='';
    if(isset($row['product'])){
      $product_class=$row['product'];
    }
    $_html = $_html.'<div class="list-item '.$product_class.'">
        <div class="row">
          <div class="col-md-3 text-center">
            <img class="img-fluid lazyload" src="/img/temp.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'">
          </div>
          <div class="col-md-8">
            <time class="color-blue" datetime="'.$row['date'].'">'.$row['date'].'</time>
            <div class="color-blue h4"><a class="stretched-link" href="'.$row['href'].'">'.strip_tags($row['title']).'</a></div>
            <p>'.strip_tags($row['lead']).'</p>
            <samll aria-hidden="true" class="more text-right color-blue"></samll>
          </div>
        </div>
      </div>';
  }}

echo $_html;
?>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener("load", function() {
  $('#filter').on('click',function(e){
    e.preventDefault();
    $.ajax({
      url: 'select.php',
      method:'POST',
      dataType:'html',
      data: {
        select_type:select_type.value,
        select_year:select_year.value
      },
      beforeSend: function( xhr ) {
        $('#ajax').html('loading...');
      }
    })
    .done(function( data ) {
      $('#ajax').html(data);
    });
    return false;
  })
})
</script>
</body>
</html>