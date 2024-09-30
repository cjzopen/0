<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR 人事差勤排班管理,輕鬆因應一例一休';
$page['description'] = '差勤請假管理模組能協助 HR 人員輕鬆計算加班費、出勤時數。涵蓋行事曆,請假,銷假,加班記錄,排班與調班,加班費扣假計算,年假遞延管理,主管線上簽核等功能！';
$canonical='https://hcp.ares.com.tw/products/modules/attendance';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/attendance'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$banner_text='人資管理模組';
$breadcrumb_text='差勤請假管理';
include('../_banner.php');
include('__breadcrumb.php');
include('_nav_hrm.php');
?>
    <section>
      <div class="container">
        <h1 class="text-center mb-0">差勤請假管理模組</h1>
        <hr>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p>請假單申請審核與假別統計，是企業人資最麻煩且最花人力之處，加上勞基法新制上路，使得加班費計算、出勤時數統計更加複雜。此時，HR 就需要藉由人資系統讓作業流程自動化，取代以往耗時又繁複的人工計算。差勤請假管理模組涵蓋公司行事曆、請假／銷假／加班記錄、排班與調班作業、加班費扣假計算、年假遞延管理、主管線上簽核…等功能，有效提昇人事管理效率，節省人力成本！</p>
          </div>
        </div>
        <figure class="text-center mt-3">
          <a href="/img/products/modules/attendance-structure.png" data-fancybox>
            <img class="img-fluid" src="/img/products/modules/attendance-structure.png" srcset="/img/products/modules/attendance-structure-m.png 1x,/img/products/modules/attendance-structure.png 2x" sizes="(min-width: 900px) 876px, 99vw" alt="差勤請假管理模組可支援多種輪班類型，並自動比對排程異常">
          </a>
        </figure>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">如何運用差勤請假管理模組讓人事差勤作業更輕鬆？</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '彈性靈活的行事曆與排班',
    'text' => '除了排定工作日及國定例假日，也可另外設定偶發的颱風補假；員工透過 HR 系統個人行事曆，查詢每日應出勤班別。公司排班可彈性設定多種上／下班時刻、遲到／早退規則，變形工時周計算、月計算，與班別津貼邏輯。輪班規則也能靈活選擇，例如：做二休二、做三休一、做四休二…等。差勤請假管理模組可支援整批調班功能，並能保留員工調班歷史紀錄。'
  ),
  array(
    'title' => '員工請假、銷假及加班',
    'text' => '差勤請假管理模組可設定多組卡鐘格式，不限卡鐘廠牌，能準確記錄員工請假記錄；當發生需補扣的請假費為已經結薪的月份時，HR 可進入系統建立補扣請假費資訊。而員工有銷假的需求時，可進行銷假作業。系統除了記錄加班日期、起訖時間等資訊，當前期薪資已經結算，無法在當期新增加班記錄時，也能直接在補發加班費資料中進行建檔。'
  ),
  array(
    'title' => '簡單自訂接收卡鐘資料',
    'text' => 'HR 人員可自訂接收卡鐘的資料格式，即使日後公司更換不同卡鐘，也不需求助人資系統廠商或修改系統。卡鐘資料轉入系統後，還會自動比對員工排班資料，產出考勤異常表。'
  ),
  array(
    'title' => '彈性設定加班費率及年假遞延管理',
    'text' => '勞基法新制上路，牽涉到加班費及年假遞延的計算。HR 人資系統內可彈性設定加班費率及認列時數規則；並自動比對員工加班及出勤刷卡記錄，計算加班時數與費用。企業也能依據自身需求設定多組年假（週／曆年制）及遞延辦法，系統會依員工到職日計算出年資、年假天數與生效／失效日。'
  ),
  array(
    'title' => '線上申請請假及加班單',
    'text' => '員工可於線上直接申請請假或加班單，設定職務代理人後，由主管線上進行簽核。可線上追蹤簽核狀態，幫助企業省去冗長的紙本請假簽核作業時間，節省人事成本，運用差勤獎金管理模組加速營運管理效率！'
  )
);
foreach ($lists as $key) {
?>
          <li class="col-12 col-md-6">
            <ol class="disc">
              <li>
                <h3 class="main-color h4"><?= $key['title'] ?></h3>
                <p><?= $key['text'] ?></p>
              </li>
            </ol>
          </li>
<?php
}
?>
        </ul>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '【HR 勞基法教室】HCP Alert 提醒年假未休、考勤異常、試用期滿',
    'url' => 'https://marketing.ares.com.tw/newsletter/2024-03-hcp/laws-class-annaul-leave'
  )
  ,array(
    'text' => 'Oracle + Java 打造刷卡自動匯入系統功能',
    'url' => 'https://marketing.ares.com.tw/newsletter/2019-02-hcp/it'
  )
  ,array(
    'text' => '行動版人力資源系統，彈性方便好管理',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-01-hcp/focus'
  )
  ,array(
    'text' => '人資管理聰明 e 化，特休加班警示迅速又確實！',
    'url' => 'https://marketing.ares.com.tw/newsletter/2017-07-hcp/focus'
  )
  ,array(
    'text' => '淺談製造業工廠 HCP 考勤解決方案',
    'url' => 'https://marketing.ares.com.tw/newsletter/2012-04/it-2'
  )
  ,array(
    'text' => '「一例一休」太複雜？HCP 讓人資安心放年假',
    'url' => 'https://marketing.ares.com.tw/newsletter/2016-12-upki/product2'
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
</body>
</html>