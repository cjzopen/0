<?php
// $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
// if (preg_match('~MSIE|Internet Explorer~i', $ua) || preg_match('/Edge/i', $ua) || (strpos($ua, 'Trident/7.0; rv:11.0') !== false)) {
//   echo 'ie';
// }

require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
// $page['title']='HCP 人資系統｜提升人事管理效率｜資通電腦';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/lib/fancybox3/jquery.fancybox.min.css','/css/homepage.css');
$page['css']=array('/lib/swiper11/style.css','/css/homepage.css?2');
$page['description']='專為「高科技製造業」與「跨國集團企業」量身打造的人資系統。支援複雜排班與大量結薪，可集中管控人事資產，符合海外稅制與保險，迅速搞定人事、差勤、薪資、保險！';
$canonical=HOST_LINK;
$hreflang=array(
  array(
    'lang' => 'en',
    'url' => 'https://hcp.ares.com.tw/en/'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/'
  )
);

require(PHP_WEB_ROOT.'/template/head.php');
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [{
    "@type":"Organization","@id":"https://www.ares.com.tw/#organization","name":"Ares 資通電腦","alternateName":"資通電腦","url":"https://www.ares.com.tw/","address":"台北市中山區中山北路二段111號3樓","email":"jenny@ares.com.tw","founder":"余宏揚","foundingDate":"1980-12-03","telephone":"02-2522-1351","faxNumber":"02-2560-1735","contactPoint":[{"@type":"ContactPoint","telephone":"+886-2-2522-1351","email":"jenny@ares.com.tw","url":"https://www.ares.com.tw/consult/","contactType":"customer service"}],"sameAs":["https://zh.wikipedia.org/wiki/資通電腦","https://www.facebook.com/AresInternational","https://www.youtube.com/@AresTaiwan","https://www.linkedin.com/company/ares-international-corporation"],"logo":{"@type":"ImageObject","@id":"https://www.ares.com.tw/#logo","url":"https://www.ares.com.tw/img/ares-logo-for-google.png","caption":"資通電腦"},"image":{"@id":"https://www.ares.com.tw/#logo"}
  }, {
    "@type": "WebSite",
    "@id": "https://hcp.ares.com.tw/#website",
    "url": "https://hcp.ares.com.tw/",
    "publisher": {
      "@id": "https://www.ares.com.tw/#organization"
    },
    "potentialAction": {
      "@type": "SearchAction",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://hcp.ares.com.tw/search/?q={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }
  }, {
    "@type": "WebPage",
    "@id": "https://hcp.ares.com.tw/#webpage",
    "url": "https://hcp.ares.com.tw/",
    "inLanguage": "zh",
    "name": "HCP 人力資源管理系統",
    "isPartOf": {
      "@id": "https://hcp.ares.com.tw/#website"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "https://hcp.ares.com.tw/#primaryimage",
      "url": "https://hcp.ares.com.tw/img/hcp-logo-for-google.png",
      "caption": ""
    },
    "primaryImageOfPage": {
      "@id": "https://hcp.ares.com.tw/#primaryimage"
    },
    "description": "<?= $page['description'] ?>"
  }]
}
</script>
<div class="all" id="home">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
?>

<div id="banner-swiper" class="swiper w-100">
    <div class="swiper-wrapper">
<?php
$_html='';
$index=1;
$sliders=array(
  array(
    'name'=>'HCP人資系統，協助跨國企業因應東南亞法規與稅法',
    'url'=>'https://edm.ares.com.tw/dm/202403-hcp/',
    'img1'=>'https://www.ares.com.tw/img/banner/2024-03-hcp-eDM-banner-720.webp',
    'img2'=>'https://www.ares.com.tw/img/banner/2024-03-hcp-eDM-banner-1440.jpg',
    'content'=>''
  ),
  array(
    'name'=>'製造業東南亞佈局',
    'url'=>'https://marketing.ares.com.tw/newsletter/2024-03-hcp/',
    'img1'=>'/img/home/202403-banner-720.webp',
    'img2'=>'/img/home/202403-banner-1440.jpg',
    'content'=>''
  ),
  array(
    'name'=>'2024最低工資更新',
    'url'=>'https://hcp.ares.com.tw/products/modules/salary',
    'img1'=>'/img/home/HCP-2024最低工資-bn-720.webp',
    'img2'=>'/img/home/HCP-2024最低工資-bn-1440.webp',
    'content'=>''
  ),
  array(
    'name'=>'你的HR系統跟的上嗎',
    'url'=>'https://edm.ares.com.tw/dm/202305-hcp/',
    'img1'=>'/img/home/2023-05-hcp-eDM-banner-720.webp',
    'img2'=>'/img/home/2023-05-hcp-eDM-banner-1440.jpg',
    'content'=>''
  ),
  // array(
  //   'name'=>'行動裝置人資系統',
  //   'url'=>'/products/modules/ehr-mobile',
  //   'img1'=>'https://ik.imagekit.io/ares/hcp/hr-mobile-app-m_SJgC8X2uDN.png',
  //   'img2'=>'https://ik.imagekit.io/ares/hcp/hr-mobile-app-1440_S1RIXhuvV.png',
  //   'content'=>''
  // ),
);
foreach ($sliders as $slider) {
  $load='';
  if($index > 1){
    $load='loading="lazy"';
  }
  $_html=$_html.'<div class="swiper-slide">
  <a href="'.$slider['url'].'">
    <img width="720" height="400" '.$load.' src="'.$slider['img1'].'" class="img-fluid w-100" alt="'.$slider['name'].'">
  </a>
</div>';
  $index++;
}
echo $_html;
?>
      <!-- <div class="swiper-slide">
        <a href="#" rel="external">
          <img class="img-fluid swiper-lazy" data-src="https://picsum.photos/1440/400?image=903" alt="Gartner 台灣唯一建議 MES 製造執行系統">
          <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          <div class="swipter-article-wrap d-flex align-items-center justify-content-center flex-wrap"> -->
            <!-- <div class="text-center fff-color"> -->
            <!-- <h2 class="swipter-article-title fff-color container mx-auto">title</h2> -->
              <!-- <p class="swipter-article-content">text</p> -->
            <!-- </div> -->
          <!-- </div>
        </a>
      </div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <main>
    <div class="clip fff-bg py-5">
      <div class="container">
        <h1 class="text-center hr">滿足中大型企業、製造業人事管理</h1>
        <p class="text-center">HCP 人資系統具備超強功能，替人資省下更多工作時間。</p>
        <ul class="row justify-content-center">
            <li class="col-12 col-md-3">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-4.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">複雜排班規則</strong>
                <p>支持常日班/三輪/四二制/五三班等多種班表參數設定。</p>
              </div>
            </li>
            <li class="col-12 col-md-3">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-5.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">結薪穩定性</strong>
                <p>承接多家破萬員工企業導入，結薪效能強、高穩定性。</p>
              </div>
            </li>
            <li class="col-12 col-md-3">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-6.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">低客製率</strong>
                <p>HR 可自行增加彈性欄位與產製報表，IT 輕鬆省力。</p>
              </div>
            </li>
            <li class="col-12 col-md-12" aria-hidden="true"></li>
            <li class="col-12 col-md-3">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-1.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">集中管控人事資料</strong>
                <p>支援多語言、多集團、多廠區、多幣別，集中控管人事資產。</p>
              </div>
            </li>
            <li class="col-12 col-md-3">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-2.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">多樣化權限管控</strong>
                <p>可依區域、部門、職等、職級進行分類，妥善保護人事資料。</p>
              </div>
            </li>
            <li class="col-12 col-md-3 pb-5 pb-md-0">
              <div class="position-relative p-3">
                <figure class="text-center pb-3"><img loading="lazy" width="100" height="100" src="/img/home/mainland-china-hr-3.svg" alt="*"></figure>
                <strong class="h3 d-block text-center mt-0">因應稅制與保險</strong>
                <p class="px-5 px-md-0">配合東南亞、越南及大陸各地稅制與保險，可彈性調整保費基準及費率。</p>
              </div>
            </li>
        </ul>
      </div>
    </div>
    <div class="circle-bg pb-5">
    <div class="">
      <div class="container">
        <h2 class="text-center hr">HR 人資推薦：減輕人資作業負擔、更有效率</h2>
        <div class="swiper" id="case-swiper">
          <div class="swiper-wrapper">
<?php
$case =array(
  array(
    'title' => '振鋒企業 - 提升出勤與薪資結算效率',
    'img' => '/img/home/YOKE.jpg',
    'benefit' => array('出勤異常自動比對、發佈提醒通知','考勤比對快 3 小時，結薪節省 50% 時間','ESS 串接簽核系統，省下 2/3 作業人力','系統即時因應法令變動調整，簡化人資管理'),
    'quote' => 'HCP 出勤異常通知功能非常實用！系統可自動比對需補請假或加班程序，即時發布提醒通知，讓同仁儘快補齊申請表單，可避免耽誤後續考勤結算作業！',
    'name'=>'王靜美',
    'memberOf'=>'振鋒企業',
    'jobTitle'=>'人資處長',
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-yoke'
  ),
  array(
    'title' => '東培工業 - 梳理人事流程，提高資料正確性',
    'img' => '/img/home/TPI.jpg',
    'benefit' => array('建立完善人事管理制度','結薪作業節省 4 小時','出勤資料節省 6 小時比對時間','線上加班與請假，每月節省 20 小時建檔與簽核時間'),
    'quote' => '推薦 HCP 的 62 個最佳人事管理實務流程，透過標準化作業，讓我們可以重新檢視內部作業漏洞、優化管理機制，幫助企業建立最符合自己的人事流程體系！',
    'name'=>'朱家昌',
    'memberOf'=>'東培工業',
    'jobTitle'=>'人資經理',
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-tpi'
  ),
  array(
    'title' => '微星科技 - 完整佈署兩岸三地人事管理',
    'img' => '/img/home/msi.jpg',
    'benefit' => array('集中管理海外公司人事資產','保護人事敏感資料','提升結薪效率 50%','符合政府法規'),
    'quote' => '資通電腦能提供跨國跨地域的服務，協助我們達成「全球化資訊統整、IT 串接資料便利、HR 作業穩定減少人工出錯」的目標，完整佈局海外人事營運管理！',
    'name'=>'許志瑋',
    'memberOf'=>'微星科技',
    'jobTitle'=>'人資經理',
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-msi'
  ),
  array(
    'title' => '功學社 - 提升跨國集團人事管理效率',
    'img' => '/img/home/khs.jpg',
    'benefit' => array('兩岸人資結薪作業每月節省 8 小時','人事與考勤自助服務，每月節省人資作業 4 小時','加班、請假資料即時拋轉，不需人工作業','系統自動產出 ERP 格式報表'),
    'quote' => 'HCP 人資系統協助功學社統一跨國集團人事管理，加速兩岸人資作業效率，讓同仁更專注在核心業務上之外，也提升員工對人資的專業度與信任度，是集團人資的好夥伴！',
    'name'=>'黃雅微',
    "memberOf"=>"功學社",
    "jobTitle"=>"總部人資課薪酬管理師",
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-khs'
  ),
  array(
    'title' => '遠東巨城 - 簡化簽核流程與排班',
    'img' => '/img/home/bigcity.jpg',
    'benefit' => array('彈性整合異質系統','差勤作業自動化','節省排班人力時間','簡化年假管理流程'),
    'quote' => 'HCP 能與簽核系統完整整合，表單自動拋轉，同仁不需改變作業習慣，人資也省下重複建置表單的時間，作業流程無縫接軌！',
    'name'=>'孫靜蘭',
    'memberOf'=>'遠東巨城',
    'jobTitle'=>'人資副理',
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-bigcity'
  ),
  array(
    'title' => '友訊科技 - 優化計薪效率與管理流程',
    'img' => '/img/home/dlink.jpg',
    'benefit' => array('符合一例一休與勞基法新制','滿足９成以上人事管理需求','提升人事資料比對效率','提高計薪精準度及年度申報作業效率'),
    'quote' => 'HCP 顧問的專業度及經驗，不僅能規劃最符合我們企業的人事作業流程，也會預先設想公司未來需求，保留系統功能的彈性！',
    'name'=>'郭靜芳',
    'memberOf'=>'友訊科技',
    'jobTitle'=>'人資經理',
    'link' => 'https://www.ares.com.tw/events/hcp-user-story-dlink'
  ),
  array(
    'title' => '昱晶能源 - 輕鬆管理人事、薪資、差勤',
    'img' => '/img/home/gintechenergy.jpg',
    'benefit' => array('結薪速度快一倍','考勤作業時間節省 50%','符合光電製造產業需求','IT 人力成本減半'),
    'quote' => '即時因應政府法規調整，讓企業營運不受影響，並協助我們強化人事、薪資、差勤…等管理，提升人資作業效率！',
    'name'=>'王姿璇',
    'memberOf'=>'昱晶能源',
    'jobTitle'=>'人資課長',
    'link' => 'https://www.ares.com.tw/events/hcp-userstory-gintechenergy'
  )
);
foreach ($case as $key) {
?>
            <div class="swiper-slide pb-3 pb-md-5">
              <div class="position-relative px-5 success-case-wrapper">
                <div class="success-case-img">
                  <img class="img-fluid rounded" loading="lazy" width="640" height="428" src="<?= $key['img'] ?>" alt="<?= $key['memberOf'] ?>">
                </div>
                <div class="success-case-text fff-bg p-3 rounded">
                  <div class="title h3 mb-3 main-color"><?= $key['title'] ?></div>
                  <p><em><?= $key['quote'] ?></em><div class="text-right my-3">／<?= $key['memberOf'].$key['jobTitle'].' '.$key['name'] ?></div></p>
                  <ul>
<?php
  foreach ($key['benefit'] as $list) {
    echo '<li><div class="d-flex"><svg class="check-circle flex-constant pt-1" width="22" height="22"><use xlink:href="#check-circle"/></svg>'.$list.'</div></li>';
  }
?>
                  </ul>
                  <div class="text-right"><a class="btn" href="<?= $key['link'] ?>">查看文章</a></div>
                </div>
              </div>
            </div>
<?php
}
?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <div class="pt-5">
      <div class="container">
        <h2 class="text-center hr">人資系統推薦：HCP 滿足短中長期人事需求</h2>
        <div class="row justify-content-center align-items-stretch no-gutters">
          <div class="col-12 col-md-7 p-3">
            <p>當企業人數到達一定規模，就無法維持既有方式進行人事管理，HCP 人資系統具備彈性與未來擴充性，可完整支援人事、差勤、薪資、保險管理需求，降低經營成本、提升營運績效！</p>
            <div class="text-center mt-3">
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/FDidpunwT7I" title="HCP人資系統：最推薦的跨國企業人事管理系統" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
              <iframe id="youtube-hcp" data-src="https://www.youtube.com/embed/FDidpunwT7I" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="border:0px #ffffff none;max-width:100%" title="HCP人資系統：最推薦的跨國企業人事管理系統" name="hcp" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="334px" width="720px" loading="lazy" allowfullscreen></iframe>
                <!-- <a href="https://www.youtube.com/watch?v=FDidpunwT7I" rel="noopener noreferrer" target="_blank"><img class="img-fluid" loading="lazy" width="700" height="332" src="/img/home/hcp-video.jpg" alt="HCP人資系統介紹"></a> -->
            </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "HCP 人資系統 - 跨國企業人事管理首選",
  "description": "系統包含HRM人資管理模組、HRD人力發展模組，以及行動 app、商業智慧分析、薪資密封袋等加值服務功能，企業可依自身需求選用搭配，不論是跨國集團或擁有海外據點的企業，皆能輕鬆實現集中管理權限、簡化人事作業流程的目標",
  "thumbnailUrl": [
    "https://hcp.ares.com.tw/img/know/why/video.jpg"
   ],
  "uploadDate": "2020-02-27T14:00:00+08:00",
  "duration": "PT2M27S",
  "contentUrl": "https://www.youtube.com/watch?v=FDidpunwT7I",
  "embedUrl": "https://hcp.ares.com.tw/"
}
</script>
          </div>
          <!-- <div class="col-12 col-md-5 order-1 order-md-2 h-100">
            <video class="img-fluid m-0" loading="lazy" width="100%" height="100%" poster="/img/know/why/video.jpg" controls>
              <source src="/file/HCP介紹.webm" type="video/webm">
              <source src="/file/HCP介紹.mp4" type="video/mp4">
            </video>
            
          </div> -->
        </div>
        <div class="row fff-bg py-3">
          <div class="col-12 col-md-4 p-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/home/排班.svg" alt="*">
            </div>
            <h3 class="main-color mt-1 text-center">解決 500 家大廠排班問題</h3>
            <p>無論是簡單的常日班/二輪班，或是複雜的三輪/四二制/五三班等，HCP 皆可以提供解決方案，讓企業運作更有效率。</p>
            <!-- <div class="text-right"><a class="btn" href="https://hcp.ares.com.tw/products/modules/attendance">了解更多</a></div> -->
          </div>
          <div class="col-12 col-md-4 p-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/home/薪資.svg" alt="*">
            </div>
            <h3 class="main-color mt-1 text-center">每日處理 400 萬筆以上考勤</h3>
            <p>HCP 能夠輕鬆應對大量的考勤資料，並有彈性參數設定，幫助人資因應各國稅法，提升工作效率。</p>
            <!-- <div class="text-right"><a class="btn" href="https://hcp.ares.com.tw/mainland-china-hr/">了解更多</a></div> -->
          </div>
          <div class="col-12 col-md-4 p-3">
            <div class="text-center">
              <img class="img-fluid" loading="lazy" width="120" height="120" src="/img/home/人力.svg" alt="*">
            </div>
            <h3 class="main-color mt-1 text-center">累積超過 1,000,000 人次員工使用</h3>
            <p>HCP 顧問團隊擁有上百家大廠導入經驗，已經服務超過百萬人次，成為許多企業人事管理的第一選擇。</p>
            <!-- <div class="text-right"><a class="btn" href="https://hcp.ares.com.tw/mainland-china-hr/">了解更多</a></div> -->
          </div>
          <div class="col-12 p-3">
            <div class="text-center"><a class="btn" href="/products/">產品模組介紹</a></div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "HCP如何解決大量結薪和複雜排班？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HCP讓作業流程自動化，支援二輪制、三輪制、四班二輪、42 日班、53 班等變形工時，取代以往耗時又繁複的人工計算，有效提昇人事管理效率，節省人力成本。"
      }
    },
    {
      "@type": "Question",
      "name": "HCP如何支援各地區的勞工法規？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "彈性參數設定與自行定義模式，讓企業符合當地相關法規需求（台灣一例一休法規、中國大陸各地社會保險規範、越南及泰國等東南亞國家法令、稅制等）。"
      }
    }
  ]
}
</script> -->
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/swiper11/script.js" ></script>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
<script src="/js/home.js?3" ></script>
<script src="/js/sda.js" defer></script>
<script>
const homeYoutube = document.querySelector('#youtube-hcp');
const homeYoutubeObserver = new IntersectionObserver((entries) => {
  if (entries[0].intersectionRatio > 0){
    homeYoutube.setAttribute('src', homeYoutube.dataset.src);
    homeYoutubeObserver.unobserve(entries[0].target);
  }
});
homeYoutubeObserver.observe(homeYoutube);
</script>
<svg class="d-none" aria-hidden="true">
<defs>
  <symbol id="check-circle" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></symbol>
</defs>
</svg>
</body>
</html>