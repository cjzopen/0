<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '什麼是人資系統？透過HR系統企業能提升哪些效益';
$page['description'] = 'HR 系統包含 HRM 人力資源管理及 HRD 人力資源發展。HRM 系統支援人事、排班、考勤、地方保險、薪資管理等，HRD 系統能協助職能評鑑、教育訓練、績效考核等，提升組織營運效率。';
$canonical = HOST_LINK.'know-hr/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/grid.css');
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
include 'header.php';
?>
      </ol>
    </div>
    <aside class="supmenu d-print-none">
      <div class="container">
        <ul class="text-center mb-0">
          <li><a class="py-2 py-md-0" href="/know-hr/why-choose/">為何選 HCP 人事系統</a></li>
          <li class="main-color"><a class="py-2 py-md-0" href="">什麼是 HR 系統</a></li>
          <li><a class="py-2 py-md-0" href="/know-hr/how-choose/">如何選 HR 系統</a></li>
        </ul>
      </div>
    </aside>
        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-12 col-lg-7 order-2">
                <h1 class="dline mb-0 entry-title">HR 人資系統協助企業管理最重要的資產</h1>
                <p class="mt-0 h3">Human Resources Management System</p>
                <p>HR 人資系統是一套能幫助企業人資進行「人力資源管理」的智慧化工具，常見的人資系統功能為針對管理面的 HRM 人事薪資管理系統；以及發展面的 HRD 人力資源發展系統。</p>
                <p>企業可透過人事系統達到人才「選（招募）、用（績效）、育（培訓）、留（發展）」的管理目標，並藉由簡化 HR 作業流程，節省人力成本、增加工作時效與資料正確性，提升企業整體營運管理效益。</p>
                <p class="mb-0">HR 人資系統包含：</p>
                <ul class="disc">
                  <li>管理面的 HRM 人事薪資管理系統</li>
                  <li>發展面的 HRD 人力資源發展系統</li>
                </ul>
              </div>
              <div class="col-12 col-md-12 col-lg-5 d-none d-md-block order-1" aria-hidden="true">
                <svg class="w-100 d-none d-sm-block" width="512" height="280" viewBox="0 0 512 280" preserveAspectRatio="xMidYMid meet">
                  <circle cx="315" cy="120" r="100" stroke="#4A599E" stroke-width="3" fill="#d6dbe0" fill-opacity="0.75" />
                  <text x="290" y="120" fill="#4A599E">HRM</text>
                  <circle cx="135" cy="120" r="100" stroke="#4A599E" stroke-width="3" fill="#A58BBF" fill-opacity="0.75" />
                  <text x="120" y="120" fill="white">HRD</text>
                </svg>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <hgroup class="text-center">
              <h2 class="text-center dline d-inline-block mb-0">什麼是 HRM 人事薪資管理系統？</h2>
              <p class="mt-0 h3">Human Resource Management</p>
            </hgroup>
            <div class="row justify-content-center">
              <p class="col-12 col-md-8 mb-5">HRM 人事薪資管理系統是指管理員工時所需要執行的各項事務，如制定人力需求、人員招募、薪酬及福利項目、勞動法規與保險…等。主要包含四大管理模組：人事資料管理、薪資獎金管理、差勤請假管理、地方保險管理。</p>
            </div>
            <div class="position-relative text-center">
              <div id="swiper1-pagination">
                <a class="pagination btn mb-3" href="#">輕鬆管人事</a>
                <a class="pagination btn mb-3" href="#">迅速結薪資</a>
                <a class="pagination btn mb-3" href="#">靈活計差勤</a>
                <a class="pagination btn mb-3" href="#">支援地方保險</a>
              </div>
              <div class="swiper-container" id="swiper1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <h3>輕鬆管人事</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-1.svg" alt="*">
                            <div class="pt-3">新進員工資料還在耗時人工登打？</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 可直接將應徵履歷轉入新進員工資料，節省人資的登打作業時間。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-2.svg" alt="*">
                            <div class="pt-3">組織架構一異動，就會影響人事作業流程，好麻煩！</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>組織架構調整時，可在系統設定增加或減少部門層級，讓作業流程符合需求。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/hrm?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>迅速結薪資</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-3.svg" alt="*">
                            <div class="pt-3">有些員工計薪週期不同，每次結薪都要換算很久？</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 支援月薪、日薪、時薪等發放方式，可依企業需求調整，提昇人資結薪效率。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-4.svg" alt="*">
                            <div class="pt-3">各地子公司的稅制與幣別不同，計薪作業很複雜。</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>系統可因應各地不同稅制與多幣別換算，協助人資將各地人事薪資進行整合與分析。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/salary?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>靈活計差勤</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-5.svg" alt="*">
                            <div class="pt-3">員工各自有不同排班與輪班時間，要如何才能輕鬆管理不出錯？</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>系統可彈性設定多種排班及輪班規則、變形工時計算等，降低人為比對出錯機率。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3">
                            <img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-6.svg" alt="*">
                            <div class="pt-3">勞基法新制上路，導致員工加班費及年假遞延計算更複雜？</div>
                          </div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 隨政府法規更新，可靈活設定加班費率及年假遞延管理規則，人資作業事半功倍。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/attendance?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>支援地方保險</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-7.svg" alt="*"><div class="pt-3">國外子公司的法規、稅率及保險制度不同，系統需客製才能支援。</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 可符合各地稅率與保險制度，彈性調整保費基準及費率，人事管理更迅速正確。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-8.svg" alt="*"><div class="pt-3">一忙就忘記要幫員工及眷屬進行加退保作業？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>可設定新進員工保險、保額及到職日，系統自動完成加保作業。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/insurance?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <hgroup class="text-center">
              <h2 class="text-center dline d-inline-block mb-0">什麼是 HRD 人力資源發展系統？</h2>
              <h3 class="mt-0 h3">Human Resource Development</h3>
            </hgroup>
            <div class="row justify-content-center">
              <p class="col-12 col-md-8">HRD 人力資源發展系統是企業針對員工進行有計畫性的培訓與考核，以提升組織整體績效。包含職能評鑑、教育訓練規劃、績效考核分析追蹤、招募流程管理…等項目。主要包含四大人力發展模組：員工職能管理、教育訓練管理、員工績效管理、人才招募管理。</p>
            </div>
            <div class="position-relative text-center">
              <div id="swiper2-pagination">
                <a class="pagination btn mb-3" href="#">提升員工職能</a>
                <a class="pagination btn mb-3" href="#">落實教育訓練</a>
                <a class="pagination btn mb-3" href="#">精進員工績效</a>
                <a class="pagination btn mb-3" href="#">強化人才招募</a>
              </div>
              <div class="swiper-container" id="swiper2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <h3>提升員工職能</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-9.svg" alt="*"><div class="pt-3">招募進來的員工不符合部門需求？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 可透過工作說明書定義所需員工職能，確保所招募人員的能力符合公司經營目標。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-10.svg" alt="*"><div class="pt-3">無法判定員工目前職能等級，也不知此員工應該加強哪些知識與技術？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>將工作說明書中的職能等級與實際評鑑等級對照，各員工需加強職能一目了然。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/competence?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>落實教育訓練</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-11.svg" alt="*"><div class="pt-3">一年要開好幾場不同內容的教育訓練，規劃課程跟掌握成本好難？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>可依職能定義課程類別，符合部門及員工需求，並透過系統輕鬆掌握開班成本及預算。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-12.svg" alt="*"><div class="pt-3">員工上完課就不了了之，無法追蹤學習意見與後續成效？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>課後學員的訓練紀錄與成績，皆能透過系統完整記錄並管理追蹤，提升人員培訓品質。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/training?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>精進員工績效</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-13.svg" alt="*"><div class="pt-3">考核作業繁瑣，員工填寫效率不彰？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 高效率的線上績效考核，簡化員工考核流程，節省人資作業時間。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-14.svg" alt="*"><div class="pt-3">完成績效考核後，還是無法針對員工的弱項能力進行提升？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>考核資料與人事資料串接，方便人資評估員工考績，並針對不足處持續上課加強深化。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/performance?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3>強化人才招募</h3>
                    <div class="row justify-content-center">
                      <div class="grid grid-1-2 grid-gap-3 col-12 col-md-8 fff-color">
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-15.svg" alt="*"><div class="pt-3">零散的履歷資料不易控管，也無法建立完整的人才資料庫。</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>HCP 自動將應徵履歷轉入人事資料，也能依內召／外召流程進行人才資料庫管理。</div>
                          </div>
                        </div>
                        <div class="grid-item position-relative overflow-hidden" onclick="">
                          <div class="py-3"><img loading="lazy" width="50" height="50" src="/img/know/what/whats-hr-16.svg" alt="*"><div class="pt-3">無法詳實進行人力預算規劃，及整體人力分析與離職率？</div></div>
                          <div class="position-absolute w-100 h-100 text-white p-4 d-flex align-items-center">
                            <div>系統可針對人力預算進行規劃，並控管人力成本及招募流程，並落實後續人力分析檢討。</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-5"><a href="https://hcp.ares.com.tw/products/modules/recruit?more" class="btn btn-orange p-3">瞭解更多</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/js/main.js" defer></script>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/what.js" defer></script>
</body>
</html>