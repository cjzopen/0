<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '客戶推薦與案例分享：製造業';
$page['description'] = '最符合製造業的人事系統，完整的人事資料管理、地方保險作業、薪資獎金計算、差勤請假管理、行事曆與排班、警示系統設定等等。案例包含三芳化學、六和機械、金統立工業、建準集團、茂森科技、伊頓飛瑞、琉璃工房、台灣賓士等客戶。';
$canonical='https://hcp.ares.com.tw/best-practices/manufacturing';
// $hreflang = 'https://hcp.ares.com.tw/products/modules/';
$page['css']=array('/css/best-practices.css');
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/best-practices/manufacturing'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/best-practices/manufacturing'
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">製造業</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php
include '_menu.php';
?>
    <section>
      <div class="container text-center">
        <h1 class="mb-0">製造業</h1>
        <hr>
        <div class="row justify-content-center">
<?php
$lists =array(
  array('comp' => '勤美集團','text' => '為大中華區金屬鑄造業翹楚，以金屬成型精密機械零件之研發製造聞名，主要提供汽車、機械、壓縮機等零組件產品。透過 HCP 集中管理兩岸人事，提升集團人事營運效率！','img' => 'manufacturing/cmp.png'),
  array('comp' => '振鋒企業','text' => '振鋒企業為專業製造工業起重用安全鉤具製造商，以自有品牌「YOKE」競逐全球，將工業起重鉤具結合物聯網技術，開創工業安全數位化新時代。透過 HCP 強化人資系統應用的彈性度，因應勞動法規變動，提升出勤與薪資結算效率。','img' => 'manufacturing/yoke.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-yoke'),
  array('comp' => '東培工業','text' => '台灣第一大軸承製造廠，以專業生產與開發精密滾珠軸承和其相關組件為主，產品應用包括汽機車、工業及特殊馬達、家電等。透過導入 HCP 重新梳理人事作業流程，提升資料保密與正確性，優化人事管理效率。','img' => 'manufacturing/TPI.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-tpi'),
  array('comp' => '美彤國際','text' => '美彤國際為晶碩集團子公司，以美妝保養品牌代理與品牌經營為主要業務，熱門產品有 AQUAMAX 專業隱形眼鏡與美妝保養產品。美彤國際透過導入 HCP 快速建立集團人事制度與流程，符合政府法規，滿足未來人事擴充需求。','img' => 'manufacturing/美彤國際.jpg','link'=>'https://www.ares.com.tw/events/hcp-user-story-FacialBeau'),
  array('comp' => '長異','text' => '美國 GE 航空集團與長榮航太共同合資成立，專職翻修 GE 史上銷售最快的 GEnx 引擎，持續致力於商用客機發動機的維修及零件修護業務。HCP 能滿足航空製造業人事管理，協助長異輕鬆搞定年假遞延、加班費率計算等人事作業。','img' => 'manufacturing/長異發動機-1.jpg','link'=>'https://www.ares.com.tw/events/hcp-user-story-ge-evergreen'),
  array('comp' => '晶碩光學','text' => '台灣第一家隱形眼鏡製造的股票上市公司，從事軟性隱形眼鏡及醫療光學產品的研發製造與銷售，並成功取得歐盟、美國、台灣、大陸、日本各地認證。晶碩選擇使用 HCP 建立完善人事制度，減少人工錯誤、提升結薪效率及保密性。','img' => 'manufacturing/pegavision.png','link'=>'https://www.ares.com.tw/events/Pegavision-adopt-HCP'),
  array('comp' => '三芳化學','text' => '世界第一大運動鞋人工皮革製造商，也是 NIKE、adidas、PUMA、UA… 等大廠的全球策略材料供應商之一。擁有世界一流的表面加工處理技術及優異研究開發能力，能迅速提供顧客多樣化的產品組合。','img' => 'manufacturing/sanfang.png'),
  array('comp' => '六和機械','text' => '台灣主要的汽車零件廠之一，橫跨鑄鋁、鎂、鐵等金屬產品製造。具備從設計開發、鑄造、加工到塗裝組立一條龍生產的堅強實力，滿足顧客各式需求，致力成為「金屬零件的專家」。','img' => 'manufacturing/lioho.png'),
  array('comp' => '金統立工業','text' => '專精手工具鍛造加工，產品皆通過 DIN（西德）與 ANSI（美國）標準扭力測試，由於品質優越、造型獨特，深受使用者喜愛，使得 KING TONY 產品在國際上具有「Blue King」藍帶王之稱。','img' => 'manufacturing/kingtony.png'),
  array('comp' => '建準集團','text' => '專注節能馬達核心技術的發明創新與產品解決方案。微型馬達風扇出貨量排名全球前三，並開發出全球首創 MagLev 磁浮馬達風扇、世界最小最薄的毫米微型風扇等產品，成功獲得眾多國際大廠指定使用。','img' => 'manufacturing/sunon.png'),
  array('comp' => '茂森科技','text' => '台灣第一家從事 Barcode 設備的製造商，產品包含掌上型條碼掃瞄器、多向式條碼掃瞄器、雷射條碼掃瞄器…等，並取得美國、德國、日本、南韓、大陸多項專利和「台灣精品獎」，為全球多家知名廠商的 OEM/ODM 伙伴。','img' => 'manufacturing/marson.png'),
  array('comp' => '伊頓飛瑞','text' => '全球動力管理公司，提供各種節能高效的解決方案，協助客戶管理電氣、液壓和機械動力，致力提高人類生活品質和環境品質。全球擁有約 10 萬名員工，產品涵蓋超過 175 個國家和地區。','img' => 'manufacturing/eaton.png'),
  array('comp' => '琉璃工房','text' => '亞洲第一個以玻璃粉脫蠟鑄造（Pate-de-verre）工法進行創作的當代琉璃藝術工作室。琉璃作品應邀至日本、美國、英國、義大利、法國、德國、南非等地展出，並有多件作品獲世界各地重要博物館永久收藏肯定。','img' => 'manufacturing/liuligongfang.png'),
  // array('comp' => '台灣賓士','text' => '德國 Mercedes-Benz 在台設立的子公司。全品牌管理包含小客車、原廠精選中古車，旗下共有九家授權經銷商，服務網絡遍及全台。提供多元化的汽車財務規劃、租賃與保險服務，帶給客戶非凡購車體驗。','img' => 'manufacturing/mercedes-benz.png'),
  array('comp' => '高林','text' => '台灣工業用縫紉機的整合製造龍頭，自有品牌 SIRUBA 與歐日品牌並駕齊驅，以「拷克車」與「三針車」在全球市場上居有領導地位。藉由 HCP 實現全球組織架構人事統一管理，並解決兩岸結薪問題，有效提升整體人力資源效益。','img' => 'manufacturing/siruba.png','link'=>'https://www.ares.com.tw/events/204'),
  array('comp' => '成霖','text' => '全球大型衛浴陶瓷及五金龍頭之專業設計行銷製造商，提供高品質衛浴廚具產品及服務。旗下擁有多個品牌，如北美的 Danze 及 Gerber，並強化產品研發與生產優化，逐步朝「成為全球衛廚領航者」的願景邁進。','img' => 'manufacturing/globeuinion.png'),
  array('comp' => '林洋','text' => '總部位於大陸江蘇，業務涵蓋智慧、儲能、新能源三大領域，產品包含智慧電錶、用電資訊管理系統解決方案、智慧能效管理雲平臺…等，以「打造綠色環境，創造美好生活」為使命，提供綠色智慧能源產品和解決方案。','img' => 'manufacturing/linyang.png'),
  // array('comp' => '華新麗華','text' => '大中華區電線電纜及特殊鋼產業領導廠商，所生產的銅線材、電力電纜、通信線纜、不銹鋼材，廣泛運用於電力傳輸、電信網路、交通運輸、工業生產等基礎建設。為跨足綠能光電、商貿地產與高科技投資領域的國際化企業。','img' => 'manufacturing/walsin.png'),
  array('comp' => '淀川盛餘','text' => '位於大陸安徽，由日本株式會社澱川制鋼所和臺灣盛餘公司共同投資設立的鋼鐵公司，主要生產製造家電、建材使用的熱鍍鋅/熱鍍鋁鋅鋼板、彩塗鋼板。產品耐腐蝕性好、色彩鮮豔易加工成型、使用壽命長，極具市場競爭力。','img' => 'manufacturing/yodogawa-shengyu.png')
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