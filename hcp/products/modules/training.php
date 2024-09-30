<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '教育訓練管理模組，提升人資培訓成效';
$page['description'] = '教育訓練管理模組提供完整的企業人事教育訓練規劃。協助人資HR掌握開班成本與預算。系統完整記錄學員課程成績並進行管理追蹤，可直接線上報名課程，並於課後回饋學習意見！';
$canonical='https://hcp.ares.com.tw/products/modules/training';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/training'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人力發展模組';
$breadcrumb_text='教育訓練管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrd.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">教育訓練管理模組</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>為了確保員工培訓的職能是公司業務發展所需，教育訓練管理顯得特別重要。HR 人資系統的教育訓練管理模組，可依據職能定義與分析，提供完整的教育訓練規劃；HR 人員能輕鬆掌握開班成本與預算，也能針對不同對象自訂課程群組及內容；課後的學員訓練紀錄與成績、相關證照，系統皆能完整記錄並進行管理追蹤；員工可直接線上報名課程，並於課後回饋學習意見，提昇整體人事培訓的成效及品質！</p>
          </div>
        </div>
        <figure class="text-center mt-3">
          <a href="/img/products/modules/training/training-structure.png" data-fancybox>
            <img class="img-fluid" src="/img/products/modules/training/training-structure-m.png" loading="lazy" width="774" height="547" alt="教育訓練管理模組可完整記錄學員成績並追蹤成效，提升培訓品質">
          </a>
        </figure>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">教育訓練５步驟，員工職能提升輕鬆 GO</h2>
        <hr class="mb-0">
        <div class="owl-carousel owl-theme row justify-content-center">
<?php
$lists =array(
  array(
    'title' => '需求蒐集與規劃',
    'text' => array(
      '課程意見調查',
      '確認部門及員工需求',
      '支援 API 介面/問卷/ Flow 電子表單介接'
    )
  ),
  array(
    'title' => '開課及資料維護',
    'text' => array(
      '依職能定義課程類別',
      '設定班數及人數',
      '支援外訓課程申請流程'
    )
  ),
  array(
    'title' => '線上報名／上課通知',
    'text' => array(
      '支援整批報名名單匯入',
      '報名名單准駁審核',
      'Alert 自動發送上課通知'
    )
  ),
  array(
    'title' => '成績登錄／核發證照',
    'text' => array(
      '詳實紀錄課程成績與評價',
      '結業證照核發'
    )
  ),
  array(
    'title' => '報表分析／費用核銷',
    'text' => array(
      '員工受訓紀錄、講師資料、課程費用、部門成本等分析',
      '掌握開班成本並與預算比對'
    )
  )
  // array(
  //   'title' => '教育訓練需求蒐集與確認',
  //   'text' => '包含年度及員工訓練課程規劃。HR 人員在安排課程前，可先進行課程意見調查，確認部門及員工的訓練需求，再擬訂年度開課計畫及相關課程內容，確保員工獲取合適的職務知識技能。'
  // ),
  // array(
  //   'title' => '部門及員工教育訓練需求蒐集',
  //   'text' => '教育訓練管理模組能支援 API 應用程式介面、問卷或 Flow 電子表單簽核系統介接…等各種訓練需求蒐集的方式。'
  // ),
  // array(
  //   'title' => '教育訓練課程需求匯總',
  //   'text' => '教育訓練管理模組可將員工及主管的訓練需求進行匯總，並將資料倒出 Excel 做需求人數的彙整及後續分析。'
  // ),
  // array(
  //   'title' => '教育訓練規劃 – 年度課程計畫',
  //   'text' => 'HR 人資系統根據需求人數比對之前設定的課程最適人數，顯示最適開班班數，並將教育訓練預算費用與計畫預算費用做比對，再進行年度開課計畫。'
  // ),
  // array(
  //   'title' => '依職能需求定義教育訓練課程類別',
  //   'text' => 'HR 人員依據工作說明書的職能需求，設定不同的課程群組，如工程師群組、語文類群組或新進員工等。並依據職稱、職等、某部門或是新進到職人員之職能，設定其必修課程。'
  // ),
  // array(
  //   'title' => '教育訓練課程資料維護',
  //   'text' => '課程的基本資料，如課程建議人數、預算費用、開課時數、評估方式、講師、代訓機構…等，可將教材（如 PPT、Word）插入課程介紹附件。'
  // ),
  // array(
  //   'title' => '教育訓練開課作業／班別開課',
  //   'text' => '課程公告、報名、上課名單確認…等作業，可藉由教育訓練管理模組進行管理，並將開班上課地點、時間、開班講師、報名時間等完整記錄。'
  // ),
  // array(
  //   'title' => '教育訓練外訓課程安排',
  //   'text' => 'HR 人員可於教育訓練管理模組申請外訓課程，線上進行主管核准、HR 核准流程；正式開課後，藉由系統 Alert 警示功能，於開課前系統自動警示員工及相關人員，課程資訊不漏接。'
  // ),
  // array(
  //   'title' => '教育訓練報名作業',
  //   'text' => '員工可直接線上報名教育訓練課程，再由主管整批報名及核准作業。'
  // ),
  // array(
  //   'title' => '教育訓練報名作業 - 薦送報名（直接匯入報名名單）',
  //   'text' => 'HR 人員直接將需要上課的人員名單，上傳至教育訓練管理模組，即報名完成。'
  // ),
  // array(
  //   'title' => '教育訓練課程報名准駁審核',
  //   'text' => '針對報名教育訓練課程人員進行准駁審核，以確認該班別的上課名單。'
  // ),
  // array(
  //   'title' => '教育訓練實體／線上課程',
  //   'text' => 'HR 人資系統自動於開課前幾天發送 Alert 通知上課員工及主管。HR 人員可從系統列印出席表，學員從系統內下載上課教材（至課程介紹中下載）。課程結束後於系統內進行結案，並紀錄實際課程費用，與預算費用相互比對。'
  // ),
  // array(
  //   'title' => '檢核教育訓練成果 – 成績登錄與維護',
  //   'text' => 'HR 人員將教育訓練實體課程成績、評價登錄於教育訓練管理模組，以利後續訓練成果追蹤及維護。'
  // ),
  // array(
  //   'title' => '檢核教育訓練成果 - 證照登錄',
  //   'text' => '課程結案後，透過教育訓練管理模組確認此課程有哪些結業證照，並將證照發給上完課的員工。'
  // ),
  // array(
  //   'title' => '檢核教育訓練成果 - 員工受訓紀錄',
  //   'text' => '系統詳實紀錄所有員工受訓資訊，以利後續追蹤員工職能成效。'
  // ),
  // array(
  //   'title' => '教育訓練課程費用結算',
  //   'text' => 'HR 人員有效掌握開班成本並與預算比對。'
  // ),
  // array(
  //   'title' => '教育訓練分析報表',
  //   'text' => '包含員工受訓紀錄分析、班別課程資料分析、班別意見調查分析、講師資料分析、員工課程費用分析、外訓資料分析、部門成本人數統計表等資訊，提供企業與 HR 人員安排明年度教育訓練的參考依據。'
  // )
);
foreach ($lists as $key=>$list) {
?>
          <div class="col-12 col-md-6 col-lg-4 mt-5">
          <div id="step<?= $key+1 ?>" class="main-bg fff-color p-3 rounded mx-auto" style="min-height:21rem;max-width:20rem">
            <img class="mx-auto d-block" width="100" height="100" loading="lazy" alt="*" src="<?= HOST_LINK ?>img/products/modules/training/training-icon-<?= $key+1 ?>.svg"/>
            <h3 class="text-center mt-0"><?= $key+1 ?>. <span><?= $list['title'] ?></span></h3>
            <div>
              <ul class="disc">
<?php
  foreach($list['text'] as $likey=>$li){
?>
  <li>
    <span><?= $li ?></span>
  </li>
<?php
  }
?>
              </ul>
            </div>
          </div>
          </div>
<?php
}
?>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '行動版人力資源系統，彈性方便好管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-01-hcp/focus'
  )
  ,array(
    'text' => '淺談 HR 培訓',
    'url' => 'https://marketing.ares.com.tw/newsletter/2010-09/hr'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<!-- <script src="/lib/owlcarousel2.3.4/owl.carousel.min.js" defer></script> -->
<!-- <script src="/js/training.js" defer></script> -->
</body>
</html>