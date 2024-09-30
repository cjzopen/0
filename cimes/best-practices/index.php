<?php
$category=array('automotive','large-assembly','metal-assembly','injection-moulding','lcd','led','semiconductor','others');
$str = $_SERVER["QUERY_STRING"];
if (stripos($str, "&") === false){
  $str = $_SERVER["QUERY_STRING"];
}else{
  $str = substr($str, 0, stripos($str, "&"));
}

require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$canonical='https://cimes.ares.com.tw/best-practices/';
switch ($str) {
  case 'automotive':
    $page['title'] = 'MES汽車/車用零件產業成功案例';
    $page['description'] = '透過實際導入案例，更加瞭解汽車/車用零件、整車組裝與車聯網等製造商，如何善用MES系統大幅提升汽車製造業產量，達成產業升級與數位轉型。';
    $canonical='https://cimes.ares.com.tw/best-practices/automotive';
    break;
  case 'large-assembly':
    $page['title'] = '超大型組裝業MES成功案例';
    $page['description'] = '透過實際導入案例，更加瞭解汽車/車用零件、整車組裝與車聯網等製造商，如何善用MES系統大幅提升汽車製造業產量，達成產業升級與數位轉型。';
    $canonical='https://cimes.ares.com.tw/best-practices/automotive';
    break;
  case 'injection-moulding':
    $page['title'] = 'MES射出成型產業成功案例';
    $page['description'] = '涵蓋塑橡膠業、鋁擠型業、金屬沖壓業、鑄件業、噴砂電鍍表面處理等，金屬與塑膠射出成型產業相關 MES 解決方案成功案例。';
    $canonical='https://cimes.ares.com.tw/best-practices/injection-moulding';
    break;
  case 'lcd':
    $page['title'] = 'MES LCD產業成功案例';
    $page['description'] = '提供 TFT-LCD 液晶顯示器製造、零組件、設備、組裝相關產業 MES 解決方案成功案例。';
    $canonical='https://cimes.ares.com.tw/best-practices/lcd';
    break;
  case 'led':
    $page['title'] = 'MES LED產業成功案例';
    $page['description'] = '涵蓋LED 封裝、LED 外延片、LED 芯片、LED 照明、磊晶片、晶粒設計、藍寶石基板製造等發光二極體產業相關 MES 解決方案。';
    $canonical='https://cimes.ares.com.tw/best-practices/led';
    break;
  case 'metal-assembly':
    $page['title'] = 'MES金屬加工產業成功案例';
    $page['description'] = '提供金屬成型、機械加工、表面處理與測試包裝製程，如：鑄造、鍛造、裁切、車床、銑床、噴塗、烤漆、電鍍等，金屬加工產業相關 MES 解決方案成功案例。';
    $canonical='https://cimes.ares.com.tw/best-practices/metal-assembly';
    break;
  case 'semiconductor':
    $page['title'] = 'MES半導體產業成功案例';
    $page['description'] = '涵蓋液晶顯示器、半導體、光罩生產製造、晶圓代工、晶圓封裝、晶圓測試、記憶體製造等半導體產業相關 MES 解決方案。';
    $canonical='https://cimes.ares.com.tw/best-practices/semiconductor';
    break;
  case 'others':
    $page['title'] = 'MES紡織/製藥/其他產業成功案例';
    $page['description'] = '涵蓋紡織、製藥、生物科技、石油化學……等多元產業相關 MES 解決方案成功案例。';
    $canonical='https://cimes.ares.com.tw/best-practices/others';
    break;
  default:
    $page['title']='MES 產業成功案例';
    $page['description']='透過製造工廠導入實例，更加瞭解企業如何應用MES達成智慧製造，吸收資通電腦ciMes顧問提供專業的生產流程改善建議，達成產業升級與轉型。';
    $canonical='https://cimes.ares.com.tw/best-practices/';
}
if(empty($str) || preg_match('/(gclid|_ga|utm_|fbclid)/i', strtolower($str))) {
  include($_SERVER['DOCUMENT_ROOT'].'/src/company.php');
  $breadcrumb='<li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="'.$canonical.'" itemprop="item"><span itemprop="name">成功案例</span></a>
          <meta itemprop="position" content="2">
        </li>';
}else if(in_array(strtolower($str), $category)){
  include($_SERVER['DOCUMENT_ROOT'].'/src/company.php');
  $breadcrumb='<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/best-practices/" itemprop="item"><span itemprop="name">成功案例</span></a>
          <meta itemprop="position" content="2">
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="'.$canonical.'" itemprop="item"><span id="last-breadcrumb" itemprop="name">'.$head_text.'</span></a>
          <meta itemprop="position" content="3">
        </li>';
}else{
  include($_SERVER['DOCUMENT_ROOT'].'/404.php');
  exit;
}
// $page['title']='MES '.$head_text.'成功案例';
// $page['description']='透過'.$head_text.'製造工廠導入實例，更加瞭解企業如何應用MES達成智慧製造，吸收資通電腦ciMes顧問提供專業的生產流程改善建議，達成產業升級與轉型。';
// $page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/public/css/best-practice.css');
$page['css']=array('/public/css/best-practice.css');
require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<noscript><style>img.lazyload{display:none!important;}</style></noscript>
<div class="all" id="best-practice">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  '<h1>ciMes 成功案例</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1">
        </li>
        <?= $breadcrumb ?>
      </ol>
    </div>
<?php include('_menu.php'); ?>
    <section>
      <div class="container">
        <div class="text-center row justify-content-center my-5">
          <div class="col-12 col-md-6">
            <div class="ratio-box">
              <iframe width="560" height="315" loading="lazy" src="https://www.youtube.com/embed/ySkpF_5Dkio?si=jsQRYBGwiX8NF_65" title="資通電腦ciMes攜手台灣晶技邁向智慧製造" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <!-- <a href="https://www.youtube.com/watch?v=a-ZsbJufxGQ" id="youtube" data-fancybox rel="noopener noreferrer" target="_blank"><img class="img-fluid lazyload rounded" data-src="/public/img/best-practices/video-1.jpg" alt="影片：MES適合哪些產業做數位轉型"></a> -->
        </div>
        <div class="p-1" id="h2"></div>
        <div id="category">
<?php
switch ($str) {
  case 'automotive':
    echo $automotive_html;
    break;
  case 'large-assembly':
    echo $large_assembly_html;
    break;
  case 'metal-assembly':
    echo $metal_assembly_html;
    break;
  case 'injection-moulding':
    echo $injection_moulding_html;
    break;
  case 'lcd':
    echo $lcd_html;
    break;
  case 'led':
    echo $led_html;
    break;
  case 'semiconductor':
    echo $semiconductor_html;
    break;
  case 'others':
    echo $others_html;
    break;
  default:
    echo $automotive_html.$large_assembly_html.$metal_assembly_html.$injection_moulding_html.$lcd_html.$led_html.$semiconductor_html.$others_html;
}
?>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
<script src="/public/js/company.js" defer></script>
</body>
</html>