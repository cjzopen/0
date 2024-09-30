<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '客戶推薦與案例分享：高科技業';
$page['description'] = '來看看其他公司如何推薦、使用人事系統，讓HR輕鬆面對人事考勤管理、薪資計算，完整佈局海外營運管理。案例包含台積電、微星、力晶科技、友訊科技、瑞儀光電、台灣表面黏著、昱晶能源等客戶。';
$canonical='https://hcp.ares.com.tw/best-practices/high-tech';
$page['css']=array('/css/best-practices.css');
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/best-practices/high-tech'
  )
  ,array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/best-practices/high-tech'
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
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">高科技業</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php
include '_menu.php';
?>
    <section>
      <div class="container text-center">
        <h1 class="mb-0">高科技業</h1>
        <hr>
        <div class="row justify-content-center" role="list">
<?php
$lists =array(
  array('comp' => '微星科技','text' => '為全球前五大伺服器製造商及全球電競筆電龍頭，近年積極打造電競自有品牌，創造優質好評的筆記型電腦、顯示卡、主機板、桌機，成為高階電競產品市場領導者。微星選擇以 HCP 完整佈署兩岸三地人事管理，提升跨國結薪效率。','img' => 'high-tech/msi.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-msi'),
  array('comp' => '友訊科技','text' => '提供高效能網路解決方案，包含企業級交換機、安全設備與家用多媒體系統產品，旗下產品榮獲德國 iF 產品設計大獎、CES 2018 創新大獎等殊榮。D-Link 透過導入 HCP 優化計薪效率與人事管理，維持企業高度競爭力。','img' => 'high-tech/dlink.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-dlink'),
  array('comp' => '華碩電腦','text' => '主機板排名全球第一、消費性筆記型電腦排名前三大的國際品牌公司，主要營業項目為 3C 資訊產品設計、研發及銷售。透過 HCP 及線上招募管理系統，簡化差勤與招募流程，提升人資作業效率，輕鬆建立全球人才資料庫。','img' => 'high-tech/asus.png'),
  array('comp' => '日月光半導體','text' => '全球最大的半導體封裝與測試製造服務公司，提供晶片前段測試及晶圓針測至後段的封裝、材料及成品測試服務。營運據點涵蓋中國大陸、南韓、日本、馬來西亞、新加坡、墨西哥、美國及歐洲多個主要城市。','img' => 'high-tech/ase.png'),
  array('comp' => '台積電','text' => '全世界最大的專業積體電路製造服務公司，客戶遍布全球，為客戶生產的晶片廣泛運用在行動裝置、高效能運算、車用電子與物聯網等高科技領域，提供全球客戶即時的業務和技術服務。','img' => 'high-tech/tsmc.png'),
  array('comp' => '仁寶電腦','text' => '全球第一大筆記型電腦代工製造商，以穩健的步伐朝向 5C 領域發展。藉由 HCP 推動全球化人事控管，簡化人事流程，將重心移至企業人力資源戰略工作上。','img' => 'high-tech/compal.png','link'=>'https://www.ares.com.tw/events/108'),
  array('comp' => '明基材料','text' => '全球前五大偏光板供應商之一，專注於「材料科學」專業領域發展，並以高分子、精密塗佈、射出與押出、光學、精密雕刻、捲對捲製程為研發及製造核心技術，持續發展相關產業應用產品與元件。','img' => 'high-tech/benq.png'),
  array('comp' => '力晶科技','text' => '針對資訊、通信及消費性電子市場提供多樣化的 DRAM 與 NAND Flash 記憶體、邏輯與 LCD 驅動 IC、電源管理晶片、CMOS 影像感測及整合記憶體晶片（Integrate Memory Chip）代工服務，並持續精進技術、服務客戶。','img' => 'high-tech/psc.png'),
  array('comp' => '中華凸版','text' => '台灣最高階光罩產品量產領先的供應商，持續以最先進製程及技術提供客戶最佳光罩解決方案。並成立 OCF 工廠，提供先進影像感測器之彩色濾光片製造與服務。','img' => 'high-tech/tce.png'),
  array('comp' => '昇陽國際半導體','text' => '以晶圓再生起家，進而發展晶圓薄化及微電機代工製程。秉持著技術創新與品質優先為目標，創造多樣性產品組合，提供客戶更具競爭力的全方位服務。昇陽為了因應公司內部人員編制擴張，決定導入 HCP 系統，提升人事作業效率。','img' => 'high-tech/psi.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-psi'),
  array('comp' => '輔信科技','text' => '以電腦產品研發製造在業界有優良口碑，涵蓋商用、工控、生物辨識、物聯網等領域。「科技醫療」為重要事業經營方向，藉由本身 IT 優勢結合子公司醫療器材專業，開發全新產品線。藉由導入 HCP 系統，打造全球共享的人資平台與全方位人事管理。','img' => 'high-tech/shuttle.png','link'=>'https://www.ares.com.tw/events/236'),
  array('comp' => '康舒科技','text' => '全球電能領域的領導廠商，以電源管理技術為核心，並為眾多世界一級大廠的主要合作夥伴。針對客戶需求提供客製化且品質穩定的電源供應器產品，應用範圍涵蓋車電、資通訊、消費電子、網路及工業等領域。','img' => 'high-tech/acbel.png'),
  array('comp' => '頎邦科技','text' => '國內唯一有能力完成 LCD 驅動的 IC 全程封裝測試公司，擁有「覆晶封裝技術」與「晶片尺寸封裝」此二類先進技術，不論是自行販賣或代工生產，產品數量佔世界舉足地位。','img' => 'high-tech/chipbond.png'),
  array('comp' => '瑞儀光電','text' => '台灣第一家導光板與背光模組製造的公司。以一條龍的方式涵蓋光學設計、模具開發、導光板射出及 LCM 組裝，產品遍及筆電、平板、手機等，隨著營運拓展在大陸設置許多生產基地，並擁有美系、韓系、日系等知名國際級大廠客戶。','img' => 'high-tech/radiant.png'),
  array('comp' => '台灣表面黏著科技','text' => '全球最大薄膜電晶體液晶顯示器（TFT-LCD）光電控制板、背光燈條廠，於大陸東莞、蘇州、南京、寧波、廈門、合肥、青島、重慶等地都設有廠房。台灣表面運用 HCP 彈性的排班差勤功能及完整權限控管，優化集團人事管理效能。','img' => 'high-tech/tsmt.png','link'=>'https://www.ares.com.tw/events/268'),
  array('comp' => '聯測科技','text' => '國內少數具備全方位跨國接單能力的半導體封測公司。目前積極發展混合訊號、射頻訊號及邏輯產品之晶圓測試與後段測試服務，並專注於記憶體 IC（DRAM、Flash）晶圓測試及後段封裝測試服務，更同時邁向 DDR4 測試的新世代。','img' => 'high-tech/utac.png'),
  array('comp' => '群豐科技','text' => '台灣光罩集團子公司，憑藉著獨步業界的專利製程切入 microSD 封裝，並透過不斷創新研發，成功發展整合各種系統級封裝（SIP-System In Package）技術與應用能量。持續開發設計整合性系統產品，提供完善的客製化服務。','img' => 'high-tech/aptos.png'),
  array('comp' => '昱晶能源','text' => '國內最大太陽能電池製造商，2010 年更成為全球第八大。
  2018 年由新日光、昱晶及昇陽光電籌組而成「聯合再生能源」，使供應鏈垂直整合完整提供再生能源解決方案。透過 HCP 快速因應政府法規更新，提升人資作業效率。','img' => 'high-tech/gintech.png','link'=>'https://www.ares.com.tw/events/hcp-userstory-gintechenergy'),
  array('comp' => '東京威力','text' => '日本最大半導體設備商。為了提供更優質的客戶服務，於 1996 年在台灣設立分公司，2018 年被列為全球五大半導體設備製造商。主要產品為半導體成膜設備、半導體蝕刻設備和用來製造平板顯示器液晶的設備。','img' => 'high-tech/tel.png'),
  array('comp' => '茂林光電','text' => '台灣第一家上市的導光板製造廠，擁有豐富的導光技術及光學設計智慧財產權。主要往來客戶皆為國際知名廠商，例如三星、東芝、松下（Panasonic）。透過導入 HCP 輕鬆控管兩岸人事資訊，優化組織效能及人力資源管理效率。','img' => 'high-tech/glt.png','link'=>'https://www.ares.com.tw/events/global-lighting-HCP'),
  array('comp' => '上海廣電','text' => '上海廣電集團是中國三大液晶面板廠之一，2007 年為中國電子信息百大企業排名第十位。主要產品包括液晶顯示器、液晶電視機等離子顯示器、等離子電視機…等，為光電子顯示產品製造商和網絡信息服務提供商。','img' => 'high-tech/smg.png'),
  array('comp' => '明泰科技','text' => '國內最具規模的網路設備商，憑藉多年來豐富的產品開發設計經驗，提供全球大廠網路產品設計、研發與製造等服務，產品線包含區域／都會網路、無線寬頻網路、數位多媒體網路與企業行動方案…等。','img' => 'high-tech/alpha.png'),
  array('comp' => '東聚電子','text' => '致伸科技股份有限公司子公司，專業領域為 3C 產品﹐以「資本大眾化﹑管理資訊化﹑組織扁平化﹑生產效率化﹑研發市場化﹑經營專業化」六大方針﹐力求讓公司快速成為世界級高水準的 ODM 3C 產品製造商。','img' => 'high-tech/primax.png'),
  array('comp' => '松下半導體','text' => '日本 Panasonic 旗下半導體事業 PSCS，提供半導體研發、製造、銷售業務解決方案，主要產品包含影像感測技術、MCU 微控制器、半導體元件（MOSFET、RF-GaN）等。','img' => 'high-tech/panasonic.png'),
  // array('comp' => '中緯半導體','text' => '','img' => 'high-tech/sinomos.png'),
  array('comp' => '可成科技','text' => '以鋁合金壓鑄件起家，為電腦、通訊電子產品外殼代工的生產廠商，近年成功透過鎂合金壓鑄、鋁合金擠型、鍛造、CNC 二次加工、陽極處理成為智慧型手機及高階筆電一體成型機殼的領導廠商。','img' => 'high-tech/catcher.png'),
  array('comp' => '和鑫光電','text' => '觸控產品供應商，聚焦觸控應用與 TFT 背板解決方案的發展。觸控產品涵蓋穿戴裝置、手機、平板電腦、筆記型電腦、一體成型電腦與工業用顯示器；TFT 背板應用包含電子標籤、電子書、電子看板等產品。','img' => 'high-tech/hannstouch.png'),
  // array('comp' => '聯景光電','text' => '','img' => 'high-tech/tsi.png'),
  array('comp' => '亞旭電腦','text' => '華碩集團一員，專精於網路通訊及電子產品開發的國際大廠。核心技術橫跨 5G／LTE、物聯網、車聯網、智慧電視、小基站…等領域，研展與業務據點遍及臺灣、中國大陸、巴西、日本、美國等地。','img' => 'high-tech/psc.png'),
  array('comp' => '台郡科技','text' => '台灣第一家上市的軟板專業製造服務公司，產品包含軟式印刷電路板（FPC）與軟板模組（FPCA），並涵蓋材料、線路設計、模組測試、高頻高速產品及自動化設備等技術。客戶為跨國大型 EMS 廠及日本、歐美知名品牌公司。','img' => 'high-tech/flexium.png'),
  array('comp' => '正文科技','text' => '提供世界一流的無線區域網路完整解決方案，擁有豐富無線通訊領域經驗及能力優越的研發團隊，是國內少數同時掌握無線區域網路及寬頻網路關鍵技術之企業。正文以 HCP 提高 HR 管理效益，並成功實現兩岸公司統一人資管理。','img' => 'high-tech/gemtek.png','link'=>'https://www.ares.com.tw/events/165'),
  array('comp' => '京鼎精密科技','text' => '以研發高性能材料為基礎，應用精密加工，整合技術性系統產品的設計及製造公司，主要產品：半導體設備、自動化與醫療器材設備產品。運用 HCP 快速因應兩岸三地政府法規更新，強化集團營運策略與人才招募管理。','img' => 'high-tech/foxsemicon.png','link'=>'https://www.ares.com.tw/events/67'),
  // array('comp' => '矽品精密工業','text' => '全球前三大封裝測試公司。主要從事積體電路封裝測試業務，提供一元化解決方案，包含晶圓凸塊、晶圓測試、IC 封裝、IC 測試到直接配送等服務。藉由品質改善及技術創新，使公司成為創造高附加價值之專業供應者。','img' => 'high-tech/spil.png'),
  array('comp' => '京元電子','text' => '主要從事半導體產品之封裝測試業務，為全球最大的半導體 IC 測試廠，提供半導體產品後段製造測試、封裝技術及產能服務。營運據點遍及台灣、中國大陸、北美、日本、新加坡。','img' => 'high-tech/kyec.png'),
  array('comp' => '致茂電子','text' => '精密電子量測儀器、自動化測試系統、智慧製造系統與全方位量測、自動化 Turnkey 解決方案領導廠商。主要市場包括電動車 、綠能電池、LED、太陽能、半導體、IC…等領域，營運據點遍佈歐、美、日、韓、中國及東南亞。','img' => 'high-tech/chroma.png'),
  array('comp' => '聯寶電子','text' => '被動元件、智慧模組解決方案領導廠商，主力產品為 LED Power，以及各種電源變壓器、通訊變壓器、網路變壓器、脈衝變壓器及濾波器。多年來致力於提供高品質及高效率的產品與服務，深獲客戶一致好評。','img' => 'high-tech/linkcom.png'),
  array('comp' => '茂迪','text' => '全球最大的太陽能電池製造商之一。產品包含太陽能電池、太陽能模組、以及太陽能發電系統，並為台灣第一家同時通過 ISO14001 環境管理系統及 OHSAS 18001 職業安全衛生管理系統認證之太陽能電池製造公司。','img' => 'high-tech/motech.png'),
  array('comp' => '華擎科技','text' => '2002 年由華碩電腦投資成立，主要業務為主機板銷售與產品研發設計，聚焦於中低價主機板市場，並以自有品牌「ASRock」行銷全球 Clone 組裝市場。透過導入 HCP 因應企業迅速成長的人事管理需求，優化作業流程、降低失誤。','img' => 'high-tech/ASRock.png','link'=>'https://www.ares.com.tw/events/HCP-ASRock-userstory'),
  array('comp' => '凌巨科技','text' => '液晶顯示面板、模組多晶片專業製造廠，近年來持續轉型並優化產品組合，聚焦於利基型車載／工控應用、穿戴式裝置、POS 等高附加價值的多元性產品，持續提供高客製化導向之服務。','img' => 'high-tech/giantplus.png'),
  array('comp' => '勝華科技','text' => '全球觸控面板及手機用面板領導廠商，主要從事觸控面板、導光板暨照明、TFT 顯示器及液晶模組、OLED 研究開發、設計製造及銷售，客戶群涵蓋手機、平板電腦等各項消費性電子產品之國際品牌大廠。','img' => 'high-tech/wintek.png'),
  array('comp' => '景碩科技','text' => '全球前三大 Flip Chip 主要供應商，主要從事 IC 封裝用之基板研發、製造與銷售，以主流趨勢研發新世代產品為目標，持續投注封裝載板的研發及製造技術，期能成為領先全球的世界級載板製造商。','img' => 'high-tech/kinsus.png'),
  // array('comp' => '環隆科技','text' => '','img' => 'high-tech/umec.png'),
  array('comp' => '奇菱科技','text' => '隸屬奇美集團，業務範疇由過去的塑膠染色、PE 產品加工，晉升到為業界提供精準的色彩管理服務，並開發出粒材、片材、等複合材料，持續創新研發符合市場需求的綠色環保材料。','img' => 'high-tech/chilin.png'),
  array('comp' => '菱光科技','text' => '為台灣第一家投入研發生產 CCD 元件的彩色影像感測器廠商，也是世界第一大接觸式彩色影像感測器製造廠。透過 HCP 實現跨國分公司人事管理，打造高科技製造業 eHR 協同管理體系。','img' => 'high-tech/csi-sensor.png','link'=>'https://www.ares.com.tw/events/109'),
  // array('comp' => '亞陶科技','text' => '','img' => 'high-tech/yato.png','link'=>'https://www.ares.com.tw/events/167'),
  array('comp' => '群光電子','text' => '鍵盤及電源供應器跨國大廠，從事電腦零組件產品的研發、製造與銷售。五大產品線包括輸入裝置產品、攜帶式鍵盤、視訊影像產品、相機鏡頭模組等，其中鍵盤、網路攝影機、筆電相機模組已成為全球領導廠商。','img' => 'high-tech/chicony.png'),
  // array('comp' => '精誠資訊','text' => '','img' => 'high-tech/systex.png'),
  // array('comp' => '應華精密','text' => '','img' => 'high-tech/avy.png'),
  array('comp' => '台灣晶技','text' => '全球第一大頻率元件製造商，專注研發、生產、銷售石英晶體諧振器與振盪器。為因應持續擴大大陸廠房，員工數不斷增加，導入 HCP 妥善管理工廠人事，並透過線上招募管理系統完整 e 化徵才流程，提升招募績效。','img' => 'high-tech/txc.png','link'=>'https://www.ares.com.tw/events/hcp-200410-1'),
  // array('comp' => '大傳企業','text' => '','img' => 'high-tech/aeco.png'),
  array('comp' => '帛漢','text' => '全球最大乙太網路變壓器製造商，主要從事網通用濾波器及變壓器之設計、製造、加工與銷售等業務。以最佳品質與價格競爭力的網路相關零組件及直流-直流轉換器，提供顧客最具競爭力的優質產品。','img' => 'high-tech/bothhand.png'),
  array('comp' => '優特','text' => '電力安全及智能解決方案領域的領先供應商，長期為電力、石化、冶金、煤炭、軌道交通等行業提供產品服務，具備防漏安全控制、綜合自動化、智能配電及輔助系統四大產品系列，帶給客戶安全和智慧的美好生活。','img' => 'high-tech/unitech.png'),
  array('comp' => '士兰微','text' => '第一家在中國境內上市的積體電路晶片設計企業，主要從事積體電路晶片設計以及半導體微電子相關產品生產。6 英寸晶片製造產能排名全球第二，為客戶提供專業晶片產品和系統性的應用解決方案。','img' => 'high-tech/silan.png'),
  array('comp' => '艾克爾','text' => '全球第二大先進半導體封裝與測試服務供應商，產品包含晶圓凸塊、覆晶封裝、晶圓級封裝、測試製程與全球獨家的數位光源產品。資通 HCP 可完整串接 SAP 系統，統整艾克爾集團人事，並運用線上招募管理系統，打造高效率徵才服務。','img' => 'high-tech/amkor.png','link'=>'https://www.ares.com.tw/events/hcp-user-story-amkor-e-recruiting')
);
foreach ($lists as $key) {
?>
          <!-- <div class="col-12 col-sm-6 col-md-4 mb-4 <?= isset($key['link']) ? 'order-1' : 'order-2' ?>" role="listitem"> -->
          <div class="col-12 col-sm-6 col-md-4 mb-4" role="listitem">
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