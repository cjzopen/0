      <aside data-nosnippet id="synopsis">
<?php
if(isset($row['product'])){
  $product = strtolower($row['product']);
  if(strpos($product,'oracle-useless') == false && (strpos($product,'oracle') !== false || strpos($product,'plm') !== false)){
    echo '<details><summary>資通 Oracle 顧問團隊簡介</summary><p>資通電腦是國內最專業的 Oracle 顧問服務團隊，擁有豐富的 Oracle ERP、Agile PLM、Project Costing 及 Oracle Cloud 導入經驗，近年來更輔導多家不同產業的廠商導入 Oracle 先進排程規劃（Advanced Supply Chain Planning；ASCP）更曾獲 Oracle FY06 大中華區最佳應用合作夥伴的獎項肯定。</p><p>同時，資通亦專注於研發產品技術與系統整合，盼能為企業資訊化提供單一產品到整體的解決方案，服務範疇包括事前規劃、專案導入與系統上線後的支援，以「合適的軟體」和「正確、有效的導入方法」確保專案導入的成功，資通團隊正是 Oracle IT Solution 解決方案與專業顧問諮詢服務的最佳輔導團隊，是亟欲快速提升企業競爭力的最佳合作夥伴。</p></details>';
  }
  if(strpos($product,'argoerp') !== false){
    echo '<details><summary>資通 ArgoERP 簡介</summary><p>資通電腦是目前國內唯一的 ERP 軟體股票上市櫃公司。產品模組有可彈性應用的底層架構及內建的標準功能，針對不同的產業特性（如傳產、營建、化工、製造、服務業）彈性調整。以最符合經濟成本的方式改善企業流程，提昇整體資源運用效益。適用多公司、多廠、多幣別及多利潤中心、多專案管理，足以迎合國際競爭環境下所需求的企業資源規劃系統。</p><p>資通電腦為因應 2013 年國內上市櫃公司需全面轉換 IFRS 會計制度推出 IFRS 解決方案，為國內第一家經政府輔導通過的 ERP 軟體廠商，並有多家 IFRS 成功案例。且提供彈性方案：整套系統替換、介接異質總帳系統或導入報表工具。可節省人力成本及加快作業速度、減少未來報表調整幅度與錯誤，協助企業在導入 IFRS 對應資訊方案的同時，不但能降低對營運面的衝擊，更能提升企業競爭力，搶得先機。資通近期更獲經濟部工業局 IFRS 項目登錄證書，為符合 12 項專業服務之機構。</p></details>';
  }
  if(strpos($product,'cimes') !== false){
    echo '<details><summary>資通 ciMes 簡介</summary><p>資通電腦 ciMes 有經驗豐富的系統導入顧問，可協助企業在評估製造系統時，檢視各產業生產環節真正需求。在台灣 LED 產業市占第一，為國際研究機構 Gartner 台灣唯一建議參考製造執行系統，並榮獲台灣精品獎肯定。目前更有汽車、車用零件、金屬加工及射出成型、光電產業、電子組裝、機械加工、半導體等近百家成功案例。</p><p>更多資訊請洽 <a href="https://cimes.ares.com.tw/">ciMes 官網</a>與<a href="https://cimes.ares.com.tw/industry-4.0/">智慧工廠專區</a>。</p></details>';
  }
  if(strpos($product,'hcp') !== false){
    echo '<details><summary>資通 HCP 介紹</summary><p>HCP 為跨兩岸的人資系統，適合中大型企業使用，支援多國語言、多集團、多公司、多廠區、多幣別等功能。系統包含 HRM 人資管理模組、HRD 人資發展模組，以及員工／主管自助服務、行動應用 App、商業智慧分析、薪資密封袋等加值服務功能。也提供專業的顧問服務與 62 個最佳人事管理實務流程，能協助企業順利導入系統，並縮短導入時間與成本。HCP 至今已導入超過 500 家工廠，客戶範圍遍及台灣、大陸、越南、印尼、菲律賓等地。</p></details>';
  }
  if(strpos($product,'招募管理') !== false){
    echo '<details><summary>資通招募管理系統介紹</summary><p>資通電腦招募管理系統專為中大型企業招募流程設計，可快速蒐集多元管道履歷，將招募流程完整 e 化，並建立專屬企業人才庫。從求職者的分派、審閱、邀約、面試、錄取、不錄取、核敘… 等，將整個招募作業達到無紙化的目標，並可隨時追蹤求職者進度。企業也能透過搜尋人才庫，撈取潛在合適人選，提升招募效率。系統可自動產出招募績效報表，省去人工整理作業，快速檢視招募成效、調整招募策略。</p></details>';
  }
  if(strpos($product,'egui') !== false){
    echo '<details><summary>資通 eGUI 電子發票系統簡介</summary><p>能同時整合 ERP 系統與財政部電子發票平台，協助客戶將其電子發票 / 電子折讓資料，使用財政部 Turnkey 軟體技術，透過系統自動化上傳至財政部整合服務平台。避免公司、客戶與供應商之交易資訊經手第三方，確保資料安全性。電子發票開立方式支援交換與存證二種模式，整合進銷項發票流程屢獲各大公司青睞，並符合財政部電子發票要求與規範。</p></details>';
  }
  if(strpos($product,'gv') !== false){
    echo '<details><summary>資通統一發票 / 媒體申報管理系統簡介</summary><p>擁有專業的顧問團隊，已輔導包括遊戲橘子、東森電視、Yahoo 雅虎、Honeywell、長榮航太科技、友達光電、華碩、啟碁科技、敦南科技、GE 奇異塑料、宏碁科技、遠傳電信、台灣大哥大、光磊科技、台灣恩益禧（NEC）…等數百家的大型企業客戶成功上線。</p></details>';
  }
  if(strpos($product,'gd-crm') !== false){
    echo '<details><summary>GD-CRM 客戶關係管理系統介紹</summary><p>GD-CRM 是一套適合各行各業的客戶關係管理系統，滿足小型企業到跨國公司在業務、行銷與服務管理的需求。GD-CRM 以套裝軟體設計理念出發，結合企業 e 化推動的實務經驗，提供快速上線的捷徑與彈性化參數設計，並保留客製化的調整空間。讓企業可以在最短時間內上線運作，兼顧企業文化與靈活彈性，讓管理工作變得更簡單、更輕鬆！</p></details>';
  }
  if(strpos($product,'ares-pp') !== false){
    echo '<details><summary>資通隱私保鑣簡介</summary><p>ARES PP 是資通電腦自行研發的文件、檔案控管解決方案，可以保護、追蹤、稽核所有的檔案。ARES PP 的使用流程非常簡便，Client 端不需安裝 Agent 程式即可使用。文件可以彈性授權，同時兼顧安全與便利。另外，提供離線文件破解防禦偵測，安全保護無須擔心！更提供特殊的 ARES Privacy Document（.APD）檔案格式，讓檔案傳輸不受限。系統有詳實的稽核紀錄，企業安全有保障，完全符合個資法規定！因應現今智慧型裝置可以輕易攝錄電腦螢幕的問題，ARES PP 也提供了防手機偷拍的功能，真正做到企業資安滴水不漏！</p></details>';
  }
  if(strpos($product,'pki') !== false){
    echo '<details><summary>資通 uPKI 介紹</summary><p>資通電腦以領先的軟體研發技術和豐富的經驗著稱。因應資安趨勢，於 2002 年起研發網路安全軟體，完成公鑰基礎架構（Public-key infrastructure；PKI）安控系統，以提供完善的整體安全架構規劃、分析與導入為實務重點研發的 ARES uPKI 技術通過美國 Novell Suse YES 認證。相關技術已獲得台灣、大陸、日本及美國等地專利，同時也提供身分認證、電子簽章、加解密、合法授權等 PKI 解決方案。因應新版個資法的時程與內容，資通電腦 uPKI 全產品應用有效從使用者同意及蒐集、認證與存取、資料處理的適法性、存證稽核與保管責任上全面符合法規、達到個資法應用的全方位防護。是建構 PKI 最佳的資訊安全選擇。</p></details>';
  }
  if(strpos($product,'fortify') !== false){
    echo '<details><summary>Fortify 簡介</summary><p>Fortify 企業資安檢測方案能運用靜態源碼檢測工具（Fortify Static Code Analyzer；Fortify SCA）與 WebInspect 動態應用程式檢測工具進行測試與分析，找出程式碼或網站中的安全弱點與資安漏洞並快速提供修補建議，防堵惡意程式威脅。2021 年再度榮獲 Gartner 評鑑為 AST（Application Security Testing，應用安全測試）領導者，可強化網站與應用程式安全，減少網路資安風險，協助企業做好資安防護。</p></details>';
  }
  // if(strpos($product,'swift') !== false){
  //   echo '<details><summary></summary><p></p></details>';
  // }
  if(strpos($product,'afeis') !== false){
    echo '<details><summary>AFEIS 國內外匯電腦整合系統</summary><p>資通電腦所研發的 AFEIS 涵蓋存匯與進出口／放款銀行及交易室等各項業務。由於 AFEIS 的物件導向設計概念，適用於各種主機平台；穩定且延伸性強的系統特性，不但能和銀行現有的系統結合，並可銜接環球銀行金融電信協會（SWIFT）的全球連線系統。AFEIS 操作容易，在管理性及整合性作業上可以充分配合銀行實際需求，有效提昇作業效率與風險控管，是銀行面對國際化的最佳競爭利器。</p><p>導入 AFEIS 外匯系統的銀行有中國農民銀行（已併入合作金庫商銀）、板信銀行、華泰銀行、國泰世華銀行，導入國際金融業務分行（Offshore Banking Unit；OBU）系統模組的銀行有華南銀行、第一銀行、高雄市銀行、華僑銀行（併入花旗銀行前）、台灣企銀等。</p></details>';
  }
  if(strpos($product,'earesbank') !== false){
    echo '<details><summary>eAresBank 簡介</summary><p>eAresBank 整合國際金融業務的要求及商業銀行的功能，採線上即時作業模式，快速整合 Retail & Wholesale Banking 業務，並可銜接環球銀行金融電信協會（SWIFT）的全球連線系統。eAresBank 功能完整，穩定強大的系統整合簡化了作業流程，使銀行快速獲得決策資訊，增強國際競爭力。<br><a href="https://www.ares.com.tw/products/eAresBank/">更多 eAresBank 介紹</a></p></p></details>';
  }
  if(strpos($product,'treasury') !== false){
    echo '<details><summary>資通財務交易系統簡介</summary><p>資通電腦有鑒於台灣金融市場的國際化與銀行金融商品之創新成長，自 2003 年成為台灣第一家引進上線成功前中後台一貫性（STP）財務交易系統後，隨著國際金融市場演變與台灣金管單位的規範，提供更符合實務上需求之多樣化金融商品服務已是刻不容緩的工作。</p><p>資通電腦創新出更符合台資金融產業當前實務需求的新一代財務交易系統，功能涵蓋國內外營業單位財務交易之匯利率，債劵與衍生性等主要基本金融商品，提供金融產業具備競爭力與事半功倍效益的絕佳選擇。資通財務交易系統涵蓋國內外營業單位財務交易之匯利率，債劵與衍生性等主要基本金融商品，台灣第ㄧ家貫穿金融前中後台金融作業系統。</p></details>';
  }
  if(strpos($product,'nuntio') !== false){
    echo '<details><summary>ARES Nuntio 法規報表平台簡介</summary><p>ARES Nuntio 是資通電腦自行研發的申報報表作業平台，可依照金融管理單位管理標準，透過連接到銀行現有的電腦系統或資料來源中心，能夠滿足多個監管報送要求的平台優勢也確保了金融機構向不同監管機構報送數據的一致性和高效性，進而節省銀行大量資料收集和人工運算的時間，讓企業有效提升人員產出價值達到最佳成本效益。 ARES Nuntio 協助把關營運成長及作業風險，讓銀行能無後顧之憂的佈局國際市場。<br><a href="https://www.ares.com.tw/products/nuntio/">更多 ARES Nuntio 介紹</a></p></details>';
  }
  if(strpos($product,'acps') !== false){
    echo '<details><summary>資通衍生性金融商品評價系統</summary><p>Ares Cross Pricing System 能支援各式結構型金融商品與衍生性金融商品，提供即時評價、試算；且無需學習專業語法的金融評價系統。幫助金融產業在面對市場突發狀況時，做出最佳決策判斷的智慧工具。<br><a href="https://www.ares.com.tw/products/cross-pricing/">更多介紹</a></p></details>';
  }
  if(strpos($product,'isdasimm') !== false){
    echo '<details><summary>資通 ISDA SIMM™ 原始保證金解決方案</summary><p>適用於所有「非集中結算衍生性商品交易」，通過 ISDA SIMM™ 商用服務資格認證，運用全球共同一致的「保證金規範標準」SIMM™ CRIF（Common Risk Interchange Format）協助銀行中台交易員與風控管理者做出最佳投資決策、減少銀行交易保證金成本、提高營業利潤，降低未清算交易部位的風險。<br><a href="https://www.ares.com.tw/products/ISDA-SIMM/">更多產品資訊</a></p></details>';
  }
  if(strpos($product,'analyzer') !== false){
    echo '<details><summary>BI 動態決策分析工具 Analyzer 簡介</summary><p>Analyzer 為企業商業智慧平臺上最佳的分析工具，能完善提供商業智慧解決方案。Analyzer 已經在全球數十多個國家獲得眾多大型企業的採用，它能以多表、多圖、多工作表、多書籤的方式，同步地呈現使用者希望掌握的完整分析結果，並賦予使用者充分與資料互動、進而挖掘出資料價值的能力。</p></details>';
  }
  if(strpos($product,'政府專案') !== false || strpos($product,'gov') !== false){
    echo '<details><summary>資通政府專案簡介</summary><p>資通電腦擁有豐富的超大型專案執行經驗，以及多年政府機關工作實績。代表性專案包括公文系統推廣、全國戶役政系統推廣、全國衛生所醫療系統推廣、財政部國稅平台移轉、推動中小企業知識管理（KM）運用計畫、推動中小企業電子化服務團計畫、推動中小企業產業資料庫計畫、政府入口網 e 管家委外建置服務專案計畫、電子電機產業 EuP 整合服務平台建置計畫、全球製造服務資訊整合管理解決方案輸出旗艦計畫、送子鳥資訊服務網服務推廣計畫……等。</p></details>';
  }
  if(strpos($product,'委外服務') !== false){
    echo '<details><summary>資通委外服務介紹</summary><p>資通電腦累積多年顧問諮詢、教育訓練、專案開發、系統維護等資訊服務經驗，提供專業技術人力支援、MIS 資訊系統運作管理等委外服務，滿足客戶在應用系統開發與運作之各階段人力資源需求，並可控制 IT 人員進用時機及管理成本，協助客戶專注心力於核心業務發展，強化企業競爭力！<br><a href="https://www.ares.com.tw/services/outsourcing/">了解資通委外有哪些服務項目與好處</a></p></details>';
  }
  if(strpos($product,'財報自編') !== false){
    echo '<details><summary>財報自編解決方案</summary><p>資通電腦聯手集結業界財報編製專家與金融專業人士之力，提供全方位的財報自編解決方案，透過引領市場 30 年以上，廣泛應用於全球 172 個國家和地區會計事務所、具備 16 國語言、超過 50 萬人使用的財報編製工具（CaseWare）與資料追蹤平台（CONVERGE），協助企業跳脫繁複的工作表、眼花撩亂的數字與惱人的表單連結，讓財報編製過程化繁為簡並有所依據與回溯，解決企業財報自編難題，滿足主管機關要求。</p></details>';
  }
  if(strpos($product,'comodo') !== false){
    echo '<details><summary>Comodo 簡介</summary><p>Comodo 端點安全管理採用獨家的預設拒絕（Default Deny）技術，自動沙箱隔絕未知程式，阻擋 APT（Advanced Persistent Threat，進階持續性滲透攻擊）。全球超過 1 億台系統在 Comodo 端點安全管理方案保護下，創下了零感染的紀錄。Comodo 提供黑名單、白名單與未知程式的完整控管，能有效抵禦防毒軟體無法阻擋的惡意勒索程式，協助企業掌握未知威脅！</p></details>';
  }
  if(strpos($product,'knowbe4') !== false){
    echo '<details><summary>KnowBe4 簡介</summary><p>KnowBe4 是全球最大的資安意識培訓和模擬網路釣魚平台，擁有 1,400 多個資訊安全意識課程項目，支援 30 多種語言，能協助企業培訓員工提升網路安全知識，抑制釣魚攻擊、勒索軟體、惡意軟體與社交工程攻擊。且被《Forrester Wave™：2022 年第一季度安全意識和培訓解決方案》評為領導者，在市場性和戰略性獲得最高評價，全球超過 60,000 個組織使用。</p></details>';
  }
  if(strpos($product,'iot') !== false){
    echo '<details><summary>產線數據匯流平台簡介</summary><p>產線數據匯流平台透過 IoT Gateway 及現場手持式裝置，協助製造加工產業之產線機台數據擷取及拋轉，達到物聯網、機聯網功能，可廣泛運用在加工設備監測、環境監測、能源監測等，有效提升生產效率，降低成本。</p></details>';
  }
}
?>
        <details>
          <summary>資通電腦簡介</summary>
          <p>資通電腦是臺灣第一家獲准股票上市櫃的軟體公司，在資訊與系統整合領域累積超過 40 年的實務經驗，為金融、政府和工商企業等單位提供資訊化的產品與服務。2024 年榮獲 ISO 27001：2022 資訊安全管理系統認證，強化企業資安管理機制，提高資安防護力。</p><p>除了是 Oracle 台灣專業代理商並提供專業的導入與顧問服務，也是市占率最高的 eAresBank 銀行海外分行核心系統與 AFEIS（Advanced Foreign Exchange Integrated System，國內外匯電腦整合系統）國內外匯電腦整合系統供應商。金融合規更添 AML（Anti-money laundering，洗錢防制解決方案），透過高規技術與成熟服務協助法遵彈性管理，2020 年更取得台灣唯一 ISDA SIMM™（Standard Initial Margin Model，SIMM Model，標準原始保證金模型）商用服務認證，協助銀行減少交易保證金成本，降低清算交易風險。且 Nuntio 法規報表申報平台已在各大海外金融市場具備導入實績，為銀行提升報表申報的效率與正確性，符合主管機關申報要求。</p><p>自行研發的 ciMes（Computer Integrated Manufacturing Execution System；製造執行系統）更是台灣 LED 產業市佔第一，並榮獲台灣精品獎；與國際研究機構 Gartner 台灣唯一建議參考製造執行系統。HCP（Human Capital Planner；人力資源規劃系統）為跨兩岸中大型集團適用的人資系統，具備彈性參數快速符合各國法律遵循。招募管理系統幫助中大型企業精準媒合履歷、累積人才資料庫，打造高效率招募流程。</p><p>ARES PP（ARES Privacy Protector；資通隱私保鑣），在文件加密技術上屢獲專利，系統有詳實的稽核記錄可以保護、追蹤、稽核所有的檔案，遠距辦公不因地域限制也可作好機密資料防護。Fortify 源碼檢測工具連年榮獲 Gartner AST 應用程式安全測試領導者，以靜態原始碼檢測與動態滲透測試交叉關聯分析，找出安全弱點落實資安防護。Comodo 端點安全管理方案保護全球超過 1 億台系統創下零感染的紀錄，以獨家預設拒絕（Default Deny）方式，保護企業組織免受 APT 攻擊與商業勒索威脅。KnowBe4 獲 Forrester Research 評為安全意識和培訓解決方案的領導者，透過資安意識培訓和模擬網路釣魚平台，協助企業降低被網路釣魚的比例，提升資安防禦能力。</p>
        </details>
      </aside>