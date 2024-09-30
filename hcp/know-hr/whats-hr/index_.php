<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '什麼是HR人資系統？透過HR系統企業能提升哪些效益';
$page['description'] = 'HR 人資系統包含 HRM 人力資源管理及 HRD 人力資源發展。HRM 系統支援人事、排班、考勤、地方保險、薪資管理；HRD 系統能協助職能評鑑、教育訓練、績效考核，提升組織營運效率。';
$canonical = HOST_LINK.'know-hr/whats-hr/';
$page['css']=array('/css/know.css');
$hreflang=array(
  array(
    'lang' => 'en',
    'url' => 'https://hcp.ares.com.tw/en/know-hr/whats-hr/'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/know-hr/whats-hr/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
$breadText='什麼是 HR';
include('../header.php');
?>
    <aside class="supmenu d-print-none">
      <nav class="container">
        <ul class="text-center mb-0" itemscope itemtype="http://data-vocabulary.org/WebPage">
          <meta itemprop="significantLink" content="https://hcp.ares.com.tw">
          <li><a class="py-2 py-md-0" itemprop="relatedLink" href="/know-hr/why-choose/">為何選 HCP 人事系統</a></li>
          <li class="main-color"><a class="py-2 py-md-0" href="">什麼是 HR</a></li>
          <li><a class="py-2 py-md-0" itemprop="relatedLink" href="/know-hr/how-choose/">如何選 HR</a></li>
        </ul>
      </nav>
    </aside>
    <div class="hentry">
      <header class="container entry-header">
        <div class="row justify-content-end">
          <hgroup class="col-12 col-lg-7">
            <h1 class="dline mb-0 entry-title">彈性簡化人事流程、發揮員工潛在職能</h1>
            <p class="mt-0 h3">Human Resources Management System</p>
          </hgroup>
        </div>
      </header>
      <div class="entry-content">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-5 d-none d-md-block">
                <svg class="w-100 d-none d-sm-block" width="512" height="280" viewBox="0 0 512 280" preserveAspectRatio="xMidYMid meet">
                  <circle cx="315" cy="120" r="100" stroke="#4A599E" stroke-width="3" fill="#d6dbe0" fill-opacity="0.75" />
                  <text x="290" y="120" fill="#4A599E">HRM</text>
                  <circle cx="135" cy="120" r="100" stroke="#4A599E" stroke-width="3" fill="#A58BBF" fill-opacity="0.75" />
                  <text x="120" y="120" fill="white">HRD</text>
                </svg>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <article>
                  <p>HR 人資系統是一套能幫助企業人資進行「人力資源管理」的智慧化工具，常見的人資系統功能則為針對管理面的 HRM 人事薪資管理系統；以及發展面的 HRD 人力資源發展系統。企業可透過人事系統達到人才「選（招募）、用（績效）、育（培訓）、留（發展）」的管理目標，並藉由簡化 HR 作業流程，節省人力成本、增加工作時效與資料正確性，提升企業整體營運管理效益。</p>
                </article>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <hgroup class="text-center">
              <h2 class="text-center dline d-inline-block mb-0">丟掉繁瑣人工作業，HRM 人資管理超簡單</h2>
              <p class="mt-0 h3">Human Resource Management</p>
            </hgroup>
            <div class="row justify-content-center">
              <p class="col-12 col-md-8 mb-5">HRM 系統又稱為人事管理系統，主要有四大特色：人事管理、薪資管理、差勤管理、保險管理。指企業內部所有涉及到人事方面的事務與管理作業，包含部門組織、人事管理、排班管理、考勤管理、地方保險、薪資管理等項目。</p>
              <div class="grid grid-1-2 col-12 col-md-8 fff-color">
                <div class="grid-item position-relative overflow-hidden">
                  <h3><a class="fff-color" href="/products/modules/hrm" tabindex="-1">輕鬆管人事</a></h3>
                  <ul class="disc mb-5">
                    <li>新進員工資料還在耗時人工登打？</li>
                    <li>組織架構一異動，就會影響人事作業流程，好麻煩！</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 可直接將應徵履歷轉入新進員工資料，節省人資的登打作業時間。</li>
                      <li>組織架構調整時，可在系統設定增加或減少部門層級，讓作業流程符合需求。</li>
                    </ul>
                    <a href="/products/modules/hrm" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3><a class="fff-color" href="/products/modules/salary" tabindex="-1">迅速結薪資</a></h3>
                  <ul class="disc mb-5">
                    <li>有些員工計薪週期不同，每次結薪都要換算很久？</li>
                    <li>各地子公司的稅制與幣別不同，計薪作業很複雜。</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 支援月薪、日薪、時薪等發放方式，可依企業需求調整，提昇人資結薪效率。</li>
                      <li>系統可因應各地不同稅制與多幣別換算，協助人資將各地人事薪資進行整合與分析。</li>
                    </ul>
                    <a href="/products/modules/salary" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3><a class="fff-color" href="/products/modules/attendance" tabindex="-1">靈活計差勤</a></h3>
                  <ul class="disc mb-5">
                    <li>員工各自有不同排班與輪班時間，要如何才能輕鬆管理不出錯？</li>
                    <li>勞基法新制上路，導致員工加班費及年假遞延計算更複雜？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>系統可彈性設定多種排班及輪班規則、變形工時計算等，降低人為比對出錯機率。</li>
                      <li>HCP 隨政府法規更新，可靈活設定加班費率及年假遞延管理規則，人資作業事半功倍。</li>
                    </ul>
                    <a href="/products/modules/attendance" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3><a class="fff-color" href="/products/modules/insurance" tabindex="-1">支援地方保險</a></h3>
                  <ul class="disc mb-5">
                    <li>國外子公司的法規、稅率及保險制度不同，系統需客製才能支援。</li>
                    <li>一忙就忘記要幫員工及眷屬進行加退保作業？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 可符合各地稅率與保險制度，彈性調整保費基準及費率，人事管理更迅速正確。</li>
                      <li>可設定新進員工保險、保額及到職日，系統自動完成加保作業。</li>
                    </ul>
                    <a href="/products/modules/insurance" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <hgroup class="text-center">
              <h2 class="text-center dline d-inline-block mb-0">快速發展人才培育，HRD 強化精進組織績效</h2>
              <h3 class="mt-0 h3">Human Resource Development</h3>
            </hgroup>
            <div class="row justify-content-center">
              <p class="col-12 col-md-8">HRD 又稱人力資源發展系統，四大特色為：職能評鑑、教育訓練、績效考核、人才招募。指企業對員工進行有計畫性的招募及培訓，以提升組織整體績效。包含職能評鑑、教育訓練規劃、績效考核分析追蹤、招募流程管理…等項目。</p>
            </div>
            <div class="row justify-content-center">
              <div class="grid grid-1-2 col-12 col-md-8 fff-color">
                <div class="grid-item position-relative overflow-hidden">
                  <h3>提升員工職能</h3>
                  <ul class="disc mb-5">
                    <li>招募進來的員工不符合部門需求？</li>
                    <li>無法判定員工目前職能等級，也不知此員工應該加強哪些知識與技術？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 可透過工作說明書定義所需員工職能，確保所招募人員的能力符合公司經營目標。</li>
                      <li>將工作說明書中的職能等級與實際評鑑等級對照，各員工需加強職能一目了然。</li>
                    </ul>
                    <a href="https://hcp.ares.com.tw/products/modules/competence" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3>落實教育訓練</h3>
                  <ul class="disc mb-5">
                    <li>一年要開好幾場不同內容的教育訓練，規劃課程跟掌握成本好難？</li>
                    <li>員工上完課就不了了之，無法追蹤學習意見與後續成效？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>可依職能定義課程類別，符合部門及員工需求，並透過系統輕鬆掌握開班成本及預算。</li>
                      <li>課後學員的訓練紀錄與成績，皆能透過系統完整記錄並管理追蹤，提升人員培訓品質。</li>
                    </ul>
                    <a href="https://hcp.ares.com.tw/products/modules/training" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3>精進員工績效</h3>
                  <ul class="disc mb-5">
                    <li>考核作業繁瑣，員工填寫效率不彰？</li>
                    <li>完成績效考核後，還是無法針對員工的弱項能力進行提升？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 高效率的線上績效考核，簡化員工考核流程，節省人資作業時間。</li>
                      <li>考核資料與人事資料串接，方便人資評估員工考績，並針對不足處持續上課加強深化。</li>
                    </ul>
                    <a href="https://hcp.ares.com.tw/products/modules/performance" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
                <div class="grid-item position-relative overflow-hidden">
                  <h3>強化人才招募</h3>
                  <ul class="disc mb-5">
                    <li>零散的履歷資料不易控管，也無法建立完整的人才資料庫。</li>
                    <li>無法詳實進行人力預算規劃，及整體人力分析與離職率？</li>
                  </ul>
                  <div class="position-absolute w-100 h-100 text-white p-4 d-flex justify-content-between flex-column">
                    <ul class="disc">
                      <li>HCP 自動將應徵履歷轉入人事資料，也能依內召／外召流程進行人才資料庫管理。</li>
                      <li>系統可針對人力預算進行規劃，並控管人力成本及招募流程，並落實後續人力分析檢討。</li>
                    </ul>
                    <a href="https://hcp.ares.com.tw/products/modules/recruit" class="btn btn-orange">瞭解更多</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/js/main.js" defer></script>
</body>
</html>