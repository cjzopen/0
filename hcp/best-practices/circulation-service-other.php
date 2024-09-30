<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '客戶推薦與案例分享：流通業';
$page['description'] = '流通產業最大的特性在於人員流動率極高，HCP 完善的人事資料管理、薪資獎金計算、差勤請假管理、行事曆與排班、警示系統設定等等，給您最貼近的支援服務。案例包含中國移動、昶虹电子、特力貿易、安侯建業、威寶電信、山東瑞康醫藥等客戶。';
$canonical='https://hcp.ares.com.tw/best-practices/circulation-service-other';
// $hreflang = 'https://hcp.ares.com.tw/products/modules/';
$page['css']=array('/css/best-practices.css');
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/best-practices/circulation-service-other'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/best-practices/circulation-service-other'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('_top.php');
?>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">流通服務業及其他</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php
include '_menu.php';
?>
    <section>
      <div class="container text-center">
        <h1 class="mb-0">流通服務業及其他</h1>
        <hr>
        <div class="row justify-content-center">
<?php
$lists =array(
  array('comp' => '功學社','text' => '全球十大樂器公司中唯一台灣品牌，從樂器製造、品牌行銷到音樂教育，打造世界級品牌與音樂地球村。HCP 協助功學社串聯集團組織人事資料、薪資計算自動化，並支援遠距上班線上打卡，企業安心防疫，提升考勤作業效率。','img' => 'circulation/khs.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-khs'),
  array('comp' => '遠東巨城','text' => '台灣規模最大的休閒購物中心之一，每年吸引超過 1,500 萬人次到訪，更是全台灣第一間取得 ISO 9001 物業管理認證的商場。HCP 符合勞基法新制，系統自動比對出勤異常，支援年假自動開假及換算，大幅節省人力時間成本。','img' => 'circulation/bigcity.jpg','link'=>'https://www.ares.com.tw/events/hcp-user-story-bigcity'),
  array('comp' => '中国移动','text' => '大陸最大移動通信供應商。主要業務包含移動話音和資料、有線寬頻，及其他通信資訊服務。HCP 雲端訊息平臺解決方案，提供專業雲端 mobile 簡訊服務以及雲端委外等資訊服務，此項服務目前適用於大陸地區。','img' => 'circulation/china-mobile.png','link'=>'https://www.ares.com.tw/events/osc-hcp-chinamobile-cloudservice'),
  array('comp' => '昶虹电子','text' => '醫療銷售公司。銷售的 CPAP 正壓式呼吸機是擁有自主智慧財產權的醫療器械產品，能有效延緩治療各種由呼吸不暢引起的打鼾打呼、呼吸中止症、缺氧等呼吸功能性障礙，為患者提供更科學和專業化的服務。','img' => 'circulation/chunghong.png'),
  array('comp' => '特力貿易','text' => '全球知名貿易企業集團，業務橫跨貿易、零售、電子商務、商品設計、採購與營建等領域，致力成為立足台灣的全球整合型企業。透過導入 HCP 統籌集團人事，優化人力資源管理流程，強化集團全球化營運能力。','img' => 'circulation/testrite.png','link'=>'https://www.ares.com.tw/events/133'),
  array('comp' => '安侯建業','text' => '全球性的專業諮詢服務組織，台灣最具規模的會計師事務所之一。為客戶提供量身打造服務，包括審計及確信服務、稅務諮詢服務、管理顧問服務、財務顧問服務等，協助跨國客戶面對複雜的商業挑戰。','img' => 'circulation/kpmg.png'),
  // array('comp' => '威寶電信','text' => '','img' => 'circulation/vibo.png'),
  array('comp' => '山东瑞康医药','text' => '藥品與醫療器械直營批發業，主要業務為藥械流通、學術服務、醫學診斷、金融科技、中醫藥、數位化醫療、專業物流、綜合器械等。HCP 能降低人工作業失誤，快速蒐集彙總人員在職率、離職率、人工成本… 等資訊，提高人事決策精準度。','img' => 'circulation/realcan.png','link'=>'https://www.ares.com.tw/events/realcan-introduce-HCP')
);
foreach ($lists as $key) {
?>
          <div class="col-12 col-sm-6 col-md-4 mb-4 <?= isset($key['link']) ? 'order-1' : 'order-2' ?>" role="listitem">
            <div class="card flex-column flex-row justify-content-between">
              <div class="ratio-box">
                <img src="/img/temp.jpg" data-src="/img/best-practices/<?= $key['img'] ?>" alt="<?= $key['comp'] ?>" class="img-fluid lazyload">
              </div>
              <div class="card-body">
                <div class="h3 main-color"><?= $key['comp'] ?></div>
                <p class="text-left"><?= $key['text'] ?></p>
              </div>
              <div class="pb-3"><?= isset($key['link']) ? '<a href="'.$key['link'].'" class="btn">詳細內容</a>' : '' ?></div>
            </div>
          </div>
<?php
}
?>
        </div>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>