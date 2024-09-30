<?php
if(isset($_POST['category'])){
  $str = htmlspecialchars(stripslashes($_POST['category']), ENT_QUOTES);
}
if(!isset($str)){
  $str='';
}

$company =array(
  array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/txc.png',
    'name' => '台灣晶技',
    'text' => '台灣晶技導入 ciMes 的九大管理模組，以在製品管理、履歷追溯為核心向外延伸應用，整合製造現場的生產、品質與關鍵機台等管理資訊，建立完整的監控機制，更透過數位看板，讓管理者即時掌握生產進度，滿足管理需求。',
    'href' => 'https://www.ares.com.tw/events/cimes-user-story-txc',
    'subgroup' => ''
  )
  ,array(
    'group' => 'automotive',
    'img' => '/public/img/best-practices/logo/yulon.png',
    'name' => '裕隆汽車',
    'text' => '國內汽車業龍頭，以 ciMes 彈性應用平台建構品情管理資訊平台，運用平板電腦及行動裝置的製造管理資訊，以即時化與數據化輕鬆做好品管。',
    'subgroup' => '整車組裝製造'
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/gogoro.png',
    'name' => '睿能創意股份有限公司',
    'text' => '電動機車領導品牌 Gogoro，致力於創新科技產品的設計、生產、銷售與服務，以及綠能生活的解決方案。Gogoro 以換電式電動機車行銷全台及歐洲市場。透過 ciMes 打造智慧工廠管理，自動化整合整體生產系統資訊，有效降低生產製造成本、提高生產效能與達到即時監控生產品質。',
    'href' => 'https://www.ares.com.tw/events/cimes-user-story-gogoro',
    'subgroup' => '車用零件製造、整車組裝製造'
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/sai.png',
    'name' => '巧新科技工業股份有限公司',
    'text' => '全球第三大的鍛造鋁合金輪圈廠，台灣最大閉合模鍛造廠。主要產品為鍛造鋁合金輪圈、汽車底盤及航太零件等，透過 ciMes 彈性應用平台，達到精實管理，打造全方位智慧工廠。',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'automotive large-assembly metal-assembly',
    'img' => '/public/img/best-practices/logo/trsc.png',
    'name' => '台灣車輛',
    'text' => '為台灣本土軌道車輛及零件製造商，以生產與維護鐵路列車為主，主要市場涵蓋鐵路、捷運、高鐵、輕軌等交通設備。透過 ciMes 建置彈性多工整車智能產線，提高生產管理效率與產品品質管控。',
    'subgroup' => '整車組裝製造'
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/a-pro.jpg',
    'name' => '野寶科技',
    'text' => '野寶科技於 1982 年創立，以生產自行車車架為根基，主要市場為美、加及歐洲（德、英、法、荷、義、奧地利）。製造出許多卓越的產品如折疊自行車、雪車避震器、自行車後避震器、避震前叉、電動輪椅及複合材料相關產品，並由傳統自行車製造業轉型為健康休閒運動多元化製造。擁有自有品牌通路，並以大甲舊地名「道卡斯（TAOKAS）」自創品牌，結合獨特的設計能力與專業製造工藝，量身訂做出最適合亞洲人的自行車，將台灣的創造力在國際舞台綻放！',
    'subgroup' => '整車組裝製造'
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/thinking.gif',
    'name' => '興勤電子工業股份有限公司',
    'text' => '致力經營電子保護元件領域，針對電子產業的需求，提供「過電流保護」、「過電壓保護」、「過溫度偵測與防護」三大類的電子電路保護解決方案。透過 ciMes 建構智慧工廠，提高產品品質和效能，有效降低人力成本與錯誤。',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/ctc.png',
    'name' => '頻譜電子工業股份有限公司',
    'text' => '國際電源轉換器設計與製造商，專門生產 DC–DC 及 AC–DC 電源轉換器。長年行銷國內以及歐、美、日等國際市場，產品廣泛地被應用在工業、醫療、車用、鐵路、航空等領域 透過資通 ciMes 解決在製品管理、產品序號整合、品質管理、測試數據管理、生產配件管理等問題。',
    'href' => 'https://www.ares.com.tw/events/cimes-userstory-ctc',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'injection-moulding',
    'img' => '/public/img/best-practices/logo/p-two.png',
    'name' => '禾昌興業',
    'text' => '禾昌興業是國內連接器製造大廠，以 ciMes 彈性應用平台，建構製造管理資訊平台，整合兩案三地的製造管理資訊，以即時化與數據化讓總部輕鬆做好集中管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'injection-moulding',
    'img' => '/public/img/best-practices/logo/cms.png',
    'name' => '金名山光電',
    'text' => '金名山股份是國內 TFT-LCD 液晶零組件大廠。導入 WIP、WRP、Tooling、PM 等等模組，並與 ERP 整合，讓營運總部輕鬆達到集中化資訊管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'injection-moulding',
    'img' => '/public/img/best-practices/logo/libo.png',
    'name' => '儷寶化妝品',
    'text' => '台灣與中國設有廠房，工廠皆備有先進的鋁件與塑膠件自動操作機械，專司設計及生產優質的化妝品包裝，主要銷售歐美、巴西、亞洲各區，透過 ciMes 建構智慧製造管理資訊平台，提升品質與效率，站穩全球市場。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'injection-moulding',
    'img' => '/public/img/best-practices/logo/bonasse.png',
    'name' => '博尚企業有限公司',
    'text' => '國內最大專業隱形眼鏡盒製造商，產品成功行銷海內外 70 餘國。以 ciMes 建構製造管理資訊平台，優化工廠塑膠射出成形相關生產效能及產能，確實控管生產環節，準確達成客戶交期。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/everest.jpg',
    'name' => '宏遠紡織',
    'text' => '資通 ciMes 擁有豐富組裝廠成功導入經驗與客戶見證，提供的解決方案與能夠實現我們期望建立的高科技智慧工廠。資通 ciMes 還能夠與 ERP 系統彈性整合，將 ciMes 所記錄的所有訂單、原料、生產…等資訊反饋給 ERP 系統，將資訊系統的功能及效益最大化！',
    'href' => 'https://www.ares.com.tw/events/industry4-Everest-ciMes',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/gbco.jpg',
    'name' => '新高生物科學股份有限公司',
    'text' => '新高生物科學為因應全球化的市場競爭，期望透過資通 ciMes 達成 e 化作業，減少人工表單、資訊流程透明化，並追蹤物料、在製品、生產設備、提升品質良率。新高生物科學預計導入 WIP、CMS、WRP 等模組，讓農事生產智慧化，提升整體生產效能，成為「智慧農業 4.0」新時代的佼佼者。',
    'href' => 'https://www.ares.com.tw/events/cimes-contract-gbco',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/cvc.png',
    'name' => '皇將科技',
    'text' => '主要以檢驗儀器與製藥生產線製造為主，提供全球中大型製藥與健康食品廠商客製化整廠設備整合服務。透過 ciMes 能即時監控設備運作狀況、產能狀況、設備稼動分析，以提升生產良率與管理效率，達透明、數字、即時化管理，促進製藥管理智慧化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/pfg.png',
    'name' => '台灣必成',
    'text' => '為全球生產電子級玻璃纖維絲領導廠商，產品廣泛應用於電子、工業、運動及建築領域。善用 ciMes 彈性應用平台，管理重要治具使用狀況，提高作業效能。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/compeq.png',
    'name' => '華通科技',
    'text' => '為高科技策略工業政策的印刷電路板專業製造公司，主要經營生產單、雙面印刷電路板、印刷電路板產業。透過 ciMes 彈性應用平台，建構 PCB 製造管理資訊平台，即時掌握品質資訊，行動裝置管理生產製造資訊，提升生產良率。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'others',
    'img' => '/public/img/best-practices/logo/cpc.png',
    'name' => '台灣中油',
    'text' => '台灣中油為台灣績優公司，導入資通 ciMes ALM 模組，有效管理全省各分部之特殊訊息，使各類訊息都能及時傳達。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/teco.gif',
    'name' => '東元電機',
    'text' => '東元電機為多角化經營的公司，ciMes 導入於液晶電視製造產線，以 WIP 為核心，將重要零組件完整紀錄，使公司品質更值得信賴。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/optodisc.gif',
    'name' => '遠茂光電（DVD Disk）',
    'text' => '遠茂光電為專業光碟廠商，導入 ciMes 系統，有效管理與追蹤在製品及現場生產線的生產狀態，同時提高工廠的生產效能及產能，並有效降低生產成本及風險，提升工廠之 e 化作業，以確實控管生產，準確達成客戶交期。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/umt.png',
    'name' => '昇達科技',
    'text' => '昇達科技主要生產高頻微波通訊元件。以 ciMes 彈性應用平台，建構製造管理資訊平台，整合兩案三地的製造管理資訊。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/ecocera.jpg',
    'name' => '立誠光電股份有限公司',
    'text' => '陶瓷散熱基板生產及電路板製程整合與設計，產品應用使用於 LED 照明、車用照明、手機 LED 閃光燈、UV、顯示屏等各類應用，以 ciMes 建構製造管理資訊平台，優化工廠的生產效能及產能，並有效降低生產成本及風險，提升競爭優勢。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/aoi.png',
    'name' => '祥茂光電',
    'text' => '美商祥茂光電是分子束磊晶製程的專業設計製造商。導入 WIP、WRP、MMS、Tooling、PM 等等模組，並與 ERP 整合，讓營運總部輕鬆達到集中化資訊管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/fusheng.png',
    'name' => '復盛（機械事業部）',
    'text' => '復盛為多角化經營之製造企業，ciMes 完整的產品架構，協助復盛為顧客提供更卓越的產品與服務。',
    'href' => 'https://www.ares.com.tw/events/164',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/hosong.png',
    'name' => '和頌企業股份有限公司',
    'text' => '透過資通 ciMes 達到智慧自動化作業，省去龐雜的人工表單、改善人員稼動 / 工時管理等問題，同時建立完整的產品生產履歷與品管機制，即時管理、追蹤物料、在製品、生產設備的狀況。藉由導入 WIP 在製管理系統和 WRP 報表入口網頁系統模組簡化蒐集數據的作業流程與品質管理、降低營運成本與人為疏失，更能協助管理者即時做出關鍵性決策。',
    'href' => 'https://www.ares.com.tw/events/cimes-userstory-hosong',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/jen.png',
    'name' => '健策精密工業股份有限公司',
    'text' => '提供垂直整合式的製程如沖壓技術、塑膠射出成型、噴砂電鍍表面處理、機械加工技術及組裝作業等，在台灣、大陸無錫設有生產基地，服務據點遍布北美、歐洲及東南亞，並以 ciMes 優化工廠的生產效能及產能，即時掌握品質資訊，提升全球競爭優勢。',
    'href' => 'https://www.ares.com.tw/events/cimes-user-story-jentech',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/itri.png',
    'name' => '工研院',
    'text' => '工業技術研究院是國際級的應用科技研發機構，以科技研發，帶動產業發展。透過 ciMes 打造台中精密機械園區「智慧製造試營運場域」。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/ncsist.png',
    'name' => '國家中山科學研究院',
    'text' => '為國家級國防科技研發機構，主要研發國防技術、武器設備、軍民通用技術，建立自主國防力量。運用 ciMes 建置智慧工廠，協助國防技術升級邁向工業 4.0。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/sakura.png',
    'name' => '台灣櫻花',
    'text' => '台灣櫻花為國內廚具龍頭，以製造瓦斯爐、熱水器、廚具商品聞名，近年持續導入智能化概念，透過 ciMes 串聯智能產線、生產管理與資料分析，可檢視各生產環節，即時掌握進度，提高效能及品質。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/justime.jpg',
    'name' => '勝泰衛材',
    'text' => '勝泰為衛浴建材五金與相關產品的研發製造商，以「JUSTIME 巧時代」品牌透過經銷制度行銷世界各地。透過 ciMes 進行智慧機械製造生產流程架構，以強化產線自動化提升生產管理效率與產品品質管控；透過生產履歷建置與正逆向追蹤，提升企業內部與客戶服務效率。',
    'href' => 'https://www.ares.com.tw/events/cimes-contract-justime',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/kinik.png',
    'name' => '中國砂輪',
    'text' => '砂輪專業製造領導廠商，產品應用領域涵蓋汽車、模具、鋼鐵、機械設備、晶圓半導體等各行各業的供應鏈。不斷創新轉型，朝高附加價值產業發展，目前主要產品線有傳統砂輪、再生晶圓與鑽石碟。藉由 ciMes 打造精實管理數位化平台，即時收集、連接與整合生產管理資訊，讓廠內各項作業更有效率，進而促使生產產能極大化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'automotive large-assembly metal-assembly',
    'img' => '/public/img/best-practices/logo/shihlin.png',
    'name' => '士林電機',
    'text' => '電力機械器材研發製造商，主要供應車用電裝品、低壓開關產品、重電產品、工控產品等，廣泛應用於汽機車元件、鋼鐵、冶金、化工、電力、電子、建築等產業。運用 ciMES 完善產品生產履歷、優化金屬加工產線管理並完備核心競爭力，循序達到工業 4.0 智能工廠目標，加速擴大海內外事業版圖。',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/穗高.png',
    'name' => '台灣穗高科技股份有限公司',
    'text' => '致力於鋁擠錠及精密擠型材的生產，主要供應高品質之鋁材予運動休閒、消費性電子、汽機車及航太等相關產業。透過 ciMes 打造智慧製造生產數位化平台，全面升級產線，做到彈性多工智能產線，並期望善用科技及創新解決製程瓶頸。',
    'href' => 'https://www.ares.com.tw/events/cimes-contract-hodaka',
    'subgroup' => ''
  )
  ,array(
    'group' => 'automotive metal-assembly',
    'img' => '/public/img/best-practices/logo/cmp.png',
    'name' => '勤美',
    'text' => '為大中華區金屬鑄造業翹楚，以金屬成型精密機械零件之研發製造聞名，主要提供汽車、機械、壓縮機等零組件產品。透過 ciMes 虛實整合金屬加工智能產線，充分掌握生產作業環節，精確控管產品品質，提升設備運作效率，落實精實管理的精神。',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/solas.png',
    'name' => '般若科技',
    'text' => '全球最大水上摩托車螺旋槳製造廠商，主攻水上摩托車與快艇兩大市場，以 ciMes 打造智慧工廠自動化生產，精確掌控原料、製程、產品與品質，提高生產過程可控性及良率，達高效能製造現場管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/iteq.png',
    'name' => '聯茂電子',
    'text' => '台灣銅箔基板大廠，為生產印刷電路板之重要材料。透過 ciMes 架構虛實化整合平台，收集並監控所有生產資訊，確保生產品質，進而改善製程瓶頸，提高生產效益。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/kinsus.jpg',
    'name' => '景碩科技',
    'text' => '為因應企業的極速成長與擴張需求，景碩原有的 MES 系統已不敷使用。期望透過導入資通 ciMes 達成產線自動化的經營目標，極大化產線資訊價值，成為企業營運決策判斷的根基。',
    'href' => 'https://www.ares.com.tw/events/cimes-userstory-kinsus',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/compeq.jpg',
    'name' => '華通電腦股份有限公司',
    'text' => '為高科技策略工業政策的印刷電路板專業製造公司，主要經營生產單、雙面印刷電路板、印刷電路板產業。透過 ciMes 彈性應用平台，建構製造管理資訊平台，即時掌握品質資訊，行動裝置管理生產製造資訊，提升生產良率。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/rti.gif',
    'name' => '崑山昕芮特電子科技股份有限公司',
    'text' => '廣受多家國際品牌大廠青睞，台灣上市高科技玻璃精密加工公司正達國際光電大陸廠，已獲得專精於設計和製造各種天線、射頻線纜組件、醫療用線、電腦用線、電源線、及 USB 線等，以 ciMes 彈性應用平台，透過自動化控制的核心系統，可即時獲得大量數據分析、提高品質與客戶滿意度，並降低生產成本。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly',
    'img' => '/public/img/best-practices/logo/umec.gif',
    'name' => '嘉隆科技',
    'text' => '嘉隆科技生產多種電子通信商品，ciMes 的導入完整了工廠進出貨流程，生產效率大幅提升。',
    'subgroup' => ''
  )
  // ,array(
  //   'group' => 'led',
  //   'img' => '/public/img/best-practices/logo/sanan.jpg',
  //   'name' => '三安光電',
  //   'text' => '三安光電為大陸規模最大 LED 生產商。採用 ciMes 彈性應用平台，建構製造管理資訊平台，整合多生產中心的製造管理資訊。',
  //   'href' => 'https://www.ares.com.tw/events/sanan-led-mes',
  //   'subgroup' => ''
  // )
  // ,array(
  //   'group' => 'led',
  //   'img' => '/public/img/best-practices/logo/jingan.jpg',
  //   'name' => '晶安光電股份有限公司',
  //   'text' => '福建晶安光電是全國光電龍頭三安光電股份有限公司的全資子公司，主要從事 LED 藍寶石襯底的研發、生產與銷售，屬於光電產業鏈上游。ciMes 協助從工單、生產、設備管理解決在製品管理、產品序號整合等問題，打造企業全方位的產能優勢，提昇整體競爭優勢，站穩市場。',
  //   'subgroup' => ''
  // )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/nationstar.jpg',
    'name' => '國星光電',
    'text' => '國星半導體為國星光電新創立子公司，是大陸 LED 產業後起新秀。為積極擴張產業版圖，延攬許了多新興技術人才，所以無論在教育訓練、現場人員及產品品質管控上成為國星半導體一大挑戰。',
    'href' => 'https://www.ares.com.tw/events/China-LED-Nation-star-ciMes',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/changelight.png',
    'name' => '乾照光電股份有限公司',
    'text' => '公司主要生產全色系超高亮度 LED 外延片及芯片、高興能砷化稼太陽能電池、LED 照明產品，並提供節能照明應用解決方案，目前在廈門、揚州等地擁有數家全資子公司。透過 ciMes 建立完整生產管理系統，以產品生產履歷、生產追蹤與進度管理、品管、設備資訊整合、自動化且彈性的產出報表，更能與 ERP 系統彈性整合，強化生產效率。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/cat.png',
    'name' => '晶美應材',
    'text' => '晶美應材為台灣專業 LED 藍寶石基板大廠。以 ciMes 彈性應用平台，建構製造管理資訊平台，針對工廠的製造管理資訊，透過即時與數據化管理，讓製造中心輕鬆集中化資訊管理。',
    'href' => 'https://www.ares.com.tw/events/269',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/phecda.png',
    'name' => '德晶科技股份有限公司',
    'text' => '全球首創專業圖案化藍寶石基板製造服務公司，並提供相關客製化服務。導入 ciMes 整合從工單、生產、設備管理、保養、品質管制到出入庫、進出貨等流程，並協助與 ERP 整合，提升整體競爭力。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/focuslightings.jpg',
    'name' => '聚燦光電科技股份有限公司',
    'text' => '主要從事超高亮度 LED 外延片、芯片研發、生產、銷售及服務，産品主要用於通用照明、背光源、顯示屏及景觀照明。採用 ciMes 相關模組， 達到彈性多樣化客戶與產品出貨標簽管理，大幅加速出貨速度、降低人為錯誤。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/chimei.jpg',
    'name' => '奇力光電科技',
    'text' => '奇力光電專精於超高亮度發光二極體（LED），ciMes 以 WIP 及物料模組為核心，從 ERP 介面、測試到包裝出貨詳實的將產線資訊化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/lcnet.png',
    'name' => '聯銓科技',
    'text' => '聯銓科技為專業之光電與微波通訊磊晶片公司，ciMes 以 WIP 模組為核心，將品管、物料、機台等模組配合生產品質政策，使聯銓生產品質更加提高。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/msec.png',
    'name' => '微矽電子',
    'text' => '微矽電子是半導體封裝測試廠商，後也跨入 LED 晶粒後段加工服務。導入 ciMes 全模組，讓公司信譽更加有保證。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/lishi.jpg',
    'name' => '力旭光電',
    'text' => '力旭光電主要從事 LED、磊晶及晶粒設計，以 ciMes 中 WIP 及 EMS 模組為基礎，從工單下線至生產報表，使產線價值全方面的提升。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/tonghui.png',
    'name' => '同輝電子',
    'text' => '致力於 LED 產品研發與生產，廣泛應用於通用照明、背光照明、景觀照明、顯示屏等領域。藉由 ciMes 彈性應用平台，將工單/製令、生產設備、產品、物料等實體生產要件，轉化成可控制的數據與製程，搭配感測元件與智能設備，實踐智慧生產管理！',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/aplusepi.png',
    'name' => '鼎承光電',
    'text' => '鼎承光電為台灣專業高亮度 LED 商。以 ciMes 彈性應用平台，建構製造管理資訊平台，針對磊晶生產與晶粒生產的製造管理資訊，透過即時與數據化管理，讓製造中心輕鬆集中化資訊管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'automotive led',
    'img' => '/public/img/best-practices/logo/eoi.jpg',
    'name' => '聯嘉光電',
    'text' => 'LED 封裝廠聯嘉光電導入 ciMes，滿足未來在產品線及事業上的擴充整合，並大幅提昇生產效能與競爭力。',
    'href' => 'https://www.ares.com.tw/events/235',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/paragon.png',
    'name' => '柏友照明科技股份有限公司',
    'text' => '柏友提倡愛護地球、綠色照明與環保概念，持續研發與推廣 LED 應用產品，將科技導入生活創造出省電、節能、高品質、高壽命的科技產品。透過 ciMes 建立完善流程卡管理，解決核心需求，全面提高產品品質、增加產線產能。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/hualei.jpg',
    'name' => '湘能華磊光電股份有限公司',
    'text' => '湘能華磊光電股份有限公司是湖南省唯一 LED 外延、芯片、應用產品全產品業鏈企業，並提供 LED 照明工程、技術諮詢及節能服務。以 ciMes 彈性應用平台，建構製造管理資訊平台，提高生產效率及靈活性，達到成本精準化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/kingsoon.png',
    'name' => '凱迅光電',
    'text' => '中國光電子設備製造商，採用 ciMes 智慧製造管理應用平台，提升 LED 設備生產效率、彈性生產調度，以及優化產品品質與製程能力，實現智慧工廠管理！',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/ichiun.png',
    'name' => '一詮精密',
    'text' => '一詮精密為 LED 導線架大廠。以 ciMes 彈性應用平台，建構機台管理與監控資訊平台，整合兩岸製造管理資訊，透過即時化的機台整合管理掌握機台生產資訊，有效提升機台稼動與監控製程參數管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'led',
    'img' => '/public/img/best-practices/logo/everlight.png',
    'name' => '億光電子',
    'text' => '億光電子為 LED 封裝龍頭大廠，採用 ciMes SLM（標籤管理模組），成功導入上線，支援多樣化客戶與產品出貨標簽管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/eink.png',
    'name' => '元太科技',
    'text' => '全球電泳式電子紙顯示技術領導開發與供應商，致力於電子墨水技術與電子紙研發。善用 ciMes 即時掌握 LCD 生產進度與資訊，提高生產良率，達到成本精準化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/hannstouch.png',
    'name' => '和鑫光電',
    'text' => '和鑫光電主要生產大尺寸彩色濾光片及 TFT-LCD 之週邊零件材料，ciMes 以完整的 WEB 解決方案、彈性的 SFC 架構、將工廠資源整合，完成了台南廠的 MES 導入。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/eechain.gif',
    'name' => '台盛光電（TN、STN、CSTN）',
    'text' => '台盛光電專精於中小尺吋液晶及平面顯示器面板模組設計開發，ciMes 導入全模組，並整合 ERP，大幅增加 OP 作業的正確性。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/cmmt.png',
    'name' => '奇美材料',
    'text' => '奇美材料主要為光電材料及元件製造， ciMes 導入 WIP 模組為核心，完成產業的全流程紀錄。',
    'href' => 'https://www.ares.com.tw/events/chimei-kunshan-adopt-ciMes',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/eink.png',
    'name' => '川奇光電',
    'text' => '主要生產銷售電子紙模組和中小尺寸薄膜電晶體彩色液晶顯示面板，透過 ciMes 讓生產品質資訊即時化、提升生產良率，精確掌握生產成本。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/truly.jpg',
    'name' => '信利半導體（STN）',
    'text' => '信利半導體為液晶顯示屏（LCD）和液晶顯示模塊（LCM）。專業公司。ciMes 全模組的導入，完整將信利工廠的訊息資訊化。提升良率與交期。',
    'href' => 'https://www.ares.com.tw/events/91',
    'subgroup' => ''
  )
  ,array(
    'group' => 'metal-assembly lcd',
    'img' => '/public/img/best-practices/logo/umec.gif',
    'name' => '環隆科技',
    'text' => '環隆科技深耕電磁及通訊設備，ciMes 以 WEB 解決方案搭配 SFC 的架構，完整的紀錄從工單到測試出貨每個小細節。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/motech.jpg',
    'name' => '聯景光電',
    'text' => '2014 與全球第一大專業太陽能電池製造商茂迪完成合併後，產能將躍升至 3GW。以 ciMes 彈性應用平台，建構機台管理與監控資訊平台，以即時化與數據化輕鬆做好品管，並達到資源利用的最大化。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'lcd',
    'img' => '/public/img/best-practices/logo/optivtech.png',
    'name' => '光耀科技',
    'text' => '光學膜/稜鏡片大廠，產品廣泛用於各尺寸的 LCD 背光模組，包含：影視、資訊工業、通訊、消費電子、儀表產品等。透過 ciMes 精實管理數位化平台，落實即時化在製品管理及品質管制，提升人員績效與生產品質。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/ptc.jpg',
    'name' => '普誠科技',
    'text' => '普誠科技為專業 IC 設計公司。ciMes 全模組的導入，詳細的提供不同客戶的生產訊息及需求，並進行分析改善，使普誠科技更貼近各客戶的需要。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/msec.jpg',
    'name' => '微矽電子',
    'text' => '微矽電子是半導體封裝測試廠商，ciMes 導入全模組，讓公司信譽更加有保證。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/narl.png',
    'name' => '國家奈米元件實驗室',
    'text' => '國家奈米元件實驗室支援國內學術界開發先進半導體製程技術研究，培育半導體人才。以 ciMes 彈性應用平台，建構製造管理資訊平台，簡化單位申請作業並以即時化、數據化的管理達到集中化資訊管理。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/aipc.gif',
    'name' => '盟圖科技',
    'text' => '盟圖科技為光罩生產製造公司，ciMes 導入 WIP、物料、SPC 等模組，跨廠區的紀錄所有生產資料，串連上下游資訊，讓公司生產更順利。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/hejian.png',
    'name' => '和艦科技',
    'text' => '和艦科技為晶圓專業代工企業，以 ciMes 系統架構為主，提供半導體後段製程完整解決方案，並以完整的覆晶封裝經驗，提供客製化服務。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/chipmos.jpg',
    'name' => '南茂科技股份有限公司',
    'text' => '國南茂科技在半導體封裝測試領域中具領先地位，其液晶顯示器驅動 IC 封裝測試產能排名全世界第二位，透過 ciMes 生產管理相關模組，強化垂直整合作業與客戶關係，充分利用核心競爭優勢，布局全球。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/the.png',
    'name' => '力晶半導體',
    'text' => '力晶半導體業務範圍涵蓋動態隨機存取記憶體製造及晶圓代工兩大類別，ciMes 以 OCAPS 模組為基礎，專業量身客製產線異常處理系統。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'semiconductor',
    'img' => '/public/img/best-practices/logo/chipmos.png',
    'name' => '宏茂微電子',
    'text' => '驅動晶片封測半導體大廠，採用 ciMes 彈性應用平台，優化工廠生產效能與產能，精確掌控品質資訊，以提高產品良率，強化宏茂競爭優勢，提升整體競爭力。',
    'subgroup' => ''
  )
  ,array(
    'group' => 'automotive',
    'img' => '/public/img/best-practices/logo/oTobrite.png',
    'name' => '歐特明電子',
    'text' => '透過 ciMes 打造汽車智慧工廠，運用更高規的製造生產流程搭配領先技術，並善用精實管理打造引領市場的影像辨識系統產品。',
    'href' => 'https://www.ares.com.tw/events/cimes-contract-otobrite',
    'subgroup' => '車聯網應用軟體'
  )
  ,array(
    'group' => 'automotive large-assembly',
    'img' => '/public/img/best-practices/logo/fortune.png',
    'name' => '華城電機',
    'text' => '為國內外知名重電領導商，主要生產製造配電及電力變壓器、開關設備、配電盤等。是台灣產品線最完整、最具規模的專業重電工廠。由於生產物料體積龐大，工廠空間有限，物料控管與庫存就顯得相當重要，透過 ciMes 整合生產資訊，隨時掌握生產進度，物料調度更加彈性透明。',
    'href' => 'https://www.ares.com.tw/events/cimes-user-story-fortune',
    'subgroup' => '車用零件製造'
  )
  ,array(
    'group' => 'automotive',
    'img' => '/public/img/best-practices/logo/FUKUTA.png',
    'name' => '富田電機',
    'text' => '於 1988 年創立，致力於馬達的生產與製造，並積極布局電動車動力馬達，擁有完整的系列產品並持續擴廠增加產量，在 2021 年底，年產 100 萬套電動車動力馬。因此導入 ciMes 協助產線提高效率，掌控品質良率以及將資訊數位化，完善智慧工廠的基礎。',
    'subgroup' => '車用零件製造'
  )
);
$head_text = '';
$company = array_reverse($company);

function create_list($h2,$arr,$companyArr,$linkPath){
  $_html='';
  $_html='<h2 class="text-center pt-4">'.$h2.'</h2><hr>';
  if(!empty($arr)){
    foreach ($arr as $sg){
      $_html=$_html.'<h3>'.$sg.'</h3><ul class="row">';
      foreach ($companyArr as $key){
        if( $key['text'] !== '' && strpos($key['subgroup'], $sg) !== false) {
          $key['img']=isset($key['img']) ? '<figure class="card-img-top text-center"><img class="img-fluid" src="'.$key['img'].'" alt="'.$key['name'].'"></figure>' : '<div class="text-center">'.$key['name'].'</div>';
          $key['href']=isset($key['href']) ? '<div class="text-right"><a href="'.$key['href'].'" class="btn btn-cimes mb-3 mr-3" rel="noopener noreferrer" target="_blank">詳細內容</a></div>' : '';
          $_html.='<li class="col-12 col-md-4 pb-3">
                      <div class="card">
                        <div class="fit text-center">'.$key['img'].'</div>
                        <div class="card-body">
                          <div class="card-title text-center h3">'.$key['name'].'</div><p class="card-text">'.$key['text'].'</p>
                        </div>'.$key['href'].'
                      </div>
                    </li>';
        }
      }
      $_html=$_html.'</ul>';
    }
  }else{
    $_html=$_html.'<ul class="row">';
    foreach ($companyArr as $key) {
      if ( $key['text'] !== '' && strpos($key['group'], $linkPath) !== false) {
        $key['img']=isset($key['img']) ? '<figure class="card-img-top text-center"><img class="img-fluid" src="'.$key['img'].'" alt="'.$key['name'].'"></figure>' : '<div class="text-center">'.$key['name'].'</div>';
        $key['href']=isset($key['href']) ? '<div class="text-right"><a href="'.$key['href'].'" class="btn btn-cimes mb-3 mr-3" rel="noopener noreferrer" target="_blank">詳細內容</a></div>' : '';
        $_html.='<li class="col-12 col-md-4 pb-3">
                        <div class="card">
                          <div class="fit text-center">'.$key['img'].'</div>
                          <div class="card-body">
                            <div class="card-title text-center h3">'.$key['name'].'</div><p class="card-text">'.$key['text'].'</p>
                          </div>'.$key['href'].'
                        </div>
                      </li>';
      }
    }
    $_html=$_html.'</ul>';
  }
  return $_html;
}

$automotive_html = create_list('汽車/車用零件',array('車用零件製造','整車組裝製造','車聯網應用軟體'),$company,'automotive');
$large_assembly_html = create_list('超大型組裝',null,$company,'large-assembly');
$metal_assembly_html = create_list('金屬加工產業',null,$company,'metal-assembly');
$injection_moulding_html = create_list('射出成型產業',null,$company,'injection-moulding');
$lcd_html = create_list('LCD 產業',null,$company,'lcd');
$led_html = create_list('LED 產業',null,$company,'led');
$semiconductor_html = create_list('半導體產業',null,$company,'semiconductor');
$others_html = create_list('其他',null,$company,'others');

switch ($str) {
  case 'automotive':
    $data['html'] = $automotive_html;
    $head_text = '汽車/車用零件';
    break;
  case 'large-assembly':
    $data['html'] = $large_assembly_html;
    $head_text = '超大型組裝';
    break;
  case 'metal-assembly':
    $data['html'] = $metal_assembly_html;
    $head_text = '金屬加工產業';
    break;
  case 'injection-moulding':
    $data['html'] = $injection_moulding_html;
    $head_text = '射出成型產業';
    break;
  case 'lcd':
    $data['html'] = $lcd_html;
    $head_text = 'LCD 產業';
    break;
  case 'led':
    $data['html'] = $led_html;
    $head_text = 'LED 產業';
    break;
  case 'semiconductor':
    $data['html'] = $semiconductor_html;
    $head_text = '半導體產業';
    break;
  case 'others':
    $data['html'] = $others_html;
    $head_text = '其他';
    break;
}
if($str=='' || preg_match('/(gclid|_ga|utm_|fbclid)/i', strtolower($str))){
  $data['html']=$automotive_html.$large_assembly_html.$metal_assembly_html.$injection_moulding_html.$lcd_html.$led_html.$semiconductor_html.$others_html;
}
if(isset($_POST['category'])){
  $data['link']=$str;
  $data['title']=$head_text;
  echo json_encode($data);
}
?>