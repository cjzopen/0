<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '政府單位成功案例';
$page['description'] = '資通電腦 HR 人資系統政府單位成功案例，包含國軍高雄總醫院、國軍臺中總醫院、國軍桃園總醫院、國軍花蓮總醫院、軍醫局等客戶。';
$canonical='https://hcp.ares.com.tw/best-practices/gov';
// $hreflang = 'https://hcp.ares.com.tw/products/modules/';
$page['css']=array('/css/best-practices.css');
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/best-practices/gov'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/best-practices/gov'
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">政府單位</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php
include '_menu.php';
?>
    <section>
      <div class="container text-center">
        <h1 class="mb-0">政府單位</h1>
        <hr>
        <div class="row justify-content-center">
<?php
$lists =array(
  // array('comp' => '三軍總醫院','img' => 'gov/tsgh.png'),
  // array('comp' => '三軍總醫院松山分院','img' => 'gov/tsgh-songshan.png'),
  // array('comp' => '三軍總醫院北投分院','img' => 'gov/tsgh-beitou.png'),
  // array('comp' => '三軍總醫院基隆分院','img' => 'gov/tsgh-keelung.png'),
  // array('comp' => '三軍總醫院澎湖分院','img' => 'gov/tsgh-penghu.png'),
  array('comp' => '國軍高雄總醫院','text' => '台灣高屏地區區域教學綜合醫院暨第四作戰區責任中心醫院。提供軍民醫療保健服務及地區緊急醫療網作業，期望成為南部地區軍民首選的優質醫院。','img' => 'gov/kafgh.png'),
  array('comp' => '國軍高雄總醫院左營分院','text' => '前身為「海軍總醫院」。提供優質醫療服務，並持續強化教學研究，期能達到「海軍軍陣醫學的醫療重鎮，社區軍民信賴的保健資源」的願景。','img' => 'gov/kafgh-zuoying.png'),
  array('comp' => '國軍高雄總醫院岡山分院','text' => '前身為「第二空軍總醫院」，為國軍軍陣醫學中有關航空醫學研究訓練之重鎮。','img' => 'gov/kafgh-gangshan.png'),
  array('comp' => '國軍高雄總醫院屏東分院','text' => '負責高雄鳳山以南、潮屏地區國軍官兵及眷屬之醫療及預防保健，支援地區醫療網及榮眷醫療，期望成為屏東地區軍民首選的優質醫院。','img' => 'gov/kafgh-pingtung.png'),
  array('comp' => '國軍臺中總醫院','text' => '為國軍醫療中心，獲行政院衛生署評鑑通過為優等區域暨教學醫院。有直升機停機坪的智慧軍陣醫療大樓，可強化空中後送、急重病症救治、全方位癌症治療。','img' => 'gov/tafgh.png'),
  array('comp' => '國軍臺中總醫院中清分院','text' => '前身為「台中空軍醫院」。以發展骨科及社區醫療為主軸，提供 24 小時內、外科急診服務。','img' => 'gov/tafgh-zhongqing.png'),
  array('comp' => '國軍桃園總醫院','text' => '台灣南桃園及北新竹地區首屈一指的醫療照護中心。主力發展急重癌症及社區預防醫學整合之醫療照護，以成為南桃園及北新竹地區之「準醫學中心」為目標。','img' => 'gov/tyfgh.png'),
  array('comp' => '國軍桃園總醫院新竹分院','text' => '前身為「新竹空軍基地醫院」，負責國軍官兵及一般傷患之門診檢查及重症傷患收容治療，提供大眾安全無虞的就醫環境。','img' => 'gov/tyfgh-hsinchu.png'),
  array('comp' => '國軍花蓮總醫院','text' => '台灣東部地區唯一國軍醫院。除提供在地鄉親及病友醫療需求，也成立新城鄉長照 2.0 服務據點及執行精神護理之家喘息服務、居家照護，打造長照、精照一條龍服務，期達「醫養合一」之目標。','img' => 'gov/hafgh.png'),
  array('comp' => '軍醫局','text' => '為國防部附屬機關。以促進國軍官兵健康、維護部隊戰力的目標，並永續提供國軍優質的醫療服務。','img' => 'gov/mab.png')
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