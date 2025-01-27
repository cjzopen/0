var addressPoints = [
[25.0791206,121.4027292,{name:"祥茂光電", text:"成立於 1997 年，主攻光通訊模組開發，為全球一流數據中心、移動寬頻、光纖到戶領域之客戶提供高速傳輸解決方案，期許成為「光通訊業特斯拉」。",product:"ciMes 製造執行系統"}],
[25.0725208,121.5735553,{name:"台灣馬自達汽車", text:"成立於 1920 年，為日本第五大汽車製造廠，2014 年正式在台直營。秉持對汽車的熱愛，以創新科技與顛覆傳統的精神，打造出高品質的車輛，為消費者帶來優質的駕馭體驗。",product:"GV 統一發票管理"}],
[25.0631969,121.454517,{name:"一詮精密", text:"創立於 1977 年，為台灣第一大 LED 導線架供應商。擁有超過 50 項核心智財權，並積極投入研發，開創新產品，成為全球 3C 元件產品專業創新與價值製造的標竿企業。",product:"ciMes 製造執行系統"}],
[31.887847,118.810151,{name:"一詮精密電子（中國）", text:"創立於 1977 年，為台灣第一大 LED 導線架供應商。擁有超過 50 項核心智財權，並積極投入研發，開創新產品，成為全球 3C 元件產品專業創新與價值製造的標竿企業。",product:"ciMes 製造執行系統"}],
[24.833305,121.028438,{name:"力成科技", text:"成立於 1997 年，精通全球積體電路的封裝測試，服務範圍涵蓋晶圓針測、封裝、測試、預燒至成品的全球出貨。以先進的技術提供客戶可靠的品質與服務，成為全球第五大封測廠。",product:"ARES PP 隱私保鑣、Oracle BPM 顧問服務"}],
[24.1392127,120.6773625,{name:"三信商銀", text:"創立於 1915 年，前身為台中市第三信用合作社，具百年卓著信譽之金融機構。以「誠信、創新、親切、服務」企業文化，為社會大眾提供完善的金融服務。",product:"SWIFT 電文系統"}],
[25.0612372,121.5351803,{name:"三商投控", text:"創立於 1965 年，為多角化經營的綜合性服務業，服務範圍包括：百貨、餐飲、鞋業、金融保險、資訊等。排名服務業第九大，以及台灣第 50 大最賺錢公司。",product:"OSC 人力委外服務"}],
[25.0620509,121.536617,{name:"三商美邦", text:"成立於 1993 年，為三商投控旗下子公司，在台灣保險市場深耕多年。秉持「誠信、踏實、活力、創新」的企業核心價值，結合與時俱進的經營策略，持續提供海內外客戶全方位保險商品與創新服務。",product:"BNK 金融軟體服務"}],
[25.0620174,121.5363612,{name:"三商家購", text:"成立於 2006 年，為三商投控旗下子公司，主要經營社區型連鎖超市。販售商品涵蓋：食品、飲料、菸酒及日常生活用品等，並擁有眾多通路品牌，豐富了國人生活品質與便利性。",product:"HCP 人力資產規劃系統"}],
[24.8643359,121.0019283,{name:"三陽工業", text:"創立於 1954 年，是台灣第一家橫跨汽、機車製造的國際化企業。以「品質、創新、專業」的品牌價值，在機車事業上不斷研發創新，並強化國際汽車品牌 HYUNDAI 商品力及行銷通路，積極向全球市場佈局。",product:"ciMes 製造執行系統"}],
[24.134636,120.4316333,{name:"上品綜合工業", text:"成立於 1981 年，專研各項氟素樹脂加工開發與應用，為少數提供低純度到高純度完整產品線之廠商。秉持「安全、創新、品質、服務」經營理念，成立多個事業部和生產製造中心，提供世界各地客戶優質產品及服務。",product:"ARES PP 隱私保鑣"}],
[25.058166,121.5331087,{name:"上海銀行", text:"1915 年創立於上海，並於 1965 年在台正式復業，是第一家直接與大陸通匯的銀行。以「溫心、輕鬆、尊重」的服務精神，提供最親切、便捷的金融服務。未來也將隨金融科技發展，提供更多樣化的金融創新服務。",product:"SWIFT 電文系統、SWALLOW 電文整合管理平台、OSC 人力委外服務、uPKI 憑證驗證服務、BNK 金融軟體服務、資通服務"}],
[22.6418893,120.5455662,{name:"大田精密工業", text:"成立於 1988 年，以精密鑄造起家，擁有金屬精密鑄造的核心製造工藝，與高度文創美學設計實力，為高爾夫及自行車代工廠商。更推出自創精品自行車品牌及不銹鋼水龍頭系列精品，並榮獲眾多國內外設計大獎。",product:"GV 統一發票管理系統"}],
[25.0644028,121.5194227,{name:"大同世界科技", text:"成立於 2000 年，為大同公司關係企業，提供雲端技術及整合通訊專業服務，客戶遍及電信、金控、製造、媒體、流通、軍政及教育等研究單位，成為台灣具競爭力的資通訊系統建置服務公司。",product:"uPKI 憑證驗證服務"}],
[25.029308,121.5472392,{name:"大陸工程", text:"成立於 1945 年，是台灣大型營造公司，為欣陸控股公司最具代表性之子公司。參與的工程足跡遍及國內外，包含國家大型基礎建設、醫院、旅館、商辦大樓與頂級住宅等建築，成為國內外最具競爭力的營造公司之一。",product:"Oracle 顧問諮詢服務"}],
[25.0764761,121.5720687,{name:"大猩猩科技", text:"成立於 2000 年，為智慧影像、網路資安及大數據科技的全球領導者。著重於智慧城市、智慧企業、智慧零售和專業媒體平台等領域，也提供政府機構、電信公司與私人企業完整的網路監控與資訊安全需求之解決方案。",product:"ERP 企業資源管理系統"}],
[25.0340962,121.5146081,{name:"中央銀行", text:"為中華民國的國家銀行，直屬於行政院。肩負起穩定國家金融發展、健全銀行業務、維護物價平穩、維護對內與對外幣值穩定等責任。",product:"SWIFT 電文系統"}],
[24.9571605,121.3493259,{name:"中國砂輪", text:"成立於 1964 年，以傳統砂輪製造起家，提供低階基礎至高階精密「研磨」、「切削」的砂輪或刀具等，在業界位居領導的地位。近年進行產業轉型，從事衍生性鑽石製品研發創新，並跨足高科技晶圓再生產業。",product:"ciMes 製造執行系統"}],
[25.042619,121.5201955,{name:"中國航運", text:"1940 年於上海成立，現從事國際散裝貨輪、內陸貨櫃拖車運輸及貨櫃集散站等業務之經營。其中陸運方面為台灣規模最大的貨櫃拖運公司，而物流方面更已成為北台灣地區最知名的兩大貨櫃集散站。",product:"eGUI 電子發票管理系統、ERP 企業資源管理系統、GV 統一發票管理系統"}],
[25.0326447,121.5145265,{name:"中國輸出入銀行", text:"為國營國際貿易銀行，隸屬於財政部。主要任務在於配合政府經貿政策，協助提供國內廠商拓展外銷市場時所需的進出口授信與輸出保險等金融保險支援，促進我國產業升級及經濟發展。",product:"SWIFT 電文系統"}],
[25.073744,121.227194,{name:"華航", text:"成立於 1959 年，主要提供國際線航空客貨運輸服務。1991 年為國內第一家上市之航空公司，並於 2011 年成為首間加入國際航空聯盟的中華民國籍航空公司。近年搶攻低成本航空市場成立台灣虎航。",product:"HCP 人力資產規劃系統"}],
[25.0715776,121.5086256,{name:"南僑投資控股", text:"南僑投資控股成立於 1952 年，總部位於台北市，前身為南僑化學工業。1979 年起，公司陸續成立關係企業，展開多角化事業。2017 年轉型為控股公司，分割為油脂與非油脂兩大事業體，為台灣油脂大廠。",product:"Oracle 顧問服務、HCP 人力資產規劃系統、GV 統一發票管理系統、NM 票據管理系統、eGUI 電子發票管理系統"}],
[25.0599301,121.5253775,{name:"南緯實業", text:"公司成立於 1978 年，主要生產染紗、針織布、梭織布、成衣等產品。南緯集團是一家臺灣上市的紡織及成衣集團，在亞洲、美洲與非洲擁有設計研發、染紗、織造、染整、貼合、成衣製作的生產基地。",product:"軟體服務(Analyzer)"}],
[25.0504699,121.5163401,{name:"奕祥資訊", text:"奕祥資訊成立於 1999 年，主要從事應用軟體開發與資訊服務。短期目標以「應用軟體專案開發」為主，長期則以「全方位資訊服務」為首要目標，協助客戶解決資訊科技快速演進與資訊人才留用不易等問題。",product:"系統整合開發"}],
[24.8749956,121.0314459,{name:"威力盟電子", text:"威力盟電子為國內第一大、世界前五大的冷陰極螢光燈管 (CCFL) 專業製造廠。產品主要應用在︰液晶電視、液晶顯示器、筆記型電腦、數位相機、掃瞄器及廣告照明...等。",product:"GV 統一發票管理系統"}],
[25.0614584,121.6329236,{name:"威強電工業電腦", text:"威强電工業成立於 1997 年，2002年股票上市，除推廣自有品牌，也提供 ODM 客製化服務，解決方案包括工廠自動化、網路通訊設備、國防、建築、公共安全、智能交通、醫療器材及相關 App 應用。",product:"GV 統一發票管理系統"}],
[24.9856651,121.5308637,{name:"威盛電子", text:"威盛電子成立於西元 1992 年，為全球 IC 設計與個人電腦平台解決方案領導廠商。以自有品牌進軍國際市場，產品線長期聚焦在處理器、晶片組，以及嵌入式平台解決方面各項核心技術的研發。",product:"委外服務"}],
[25.0563411,121.5203011,{name:"帝緯系統", text:"帝緯系統整合自 1989 年成立，主要從事資訊軟體開發，為國內電子公文專業軟體開發廠商。自行研發『公文製作系統』、『公文管理系統』、『公文影像系統』、『檔案管理系統』及『線上簽核』等軟體產品。",product:"金融軟體服務、軟體服務、資通服務"}],
[25.0432596,121.5145552,{name:"建弘證券", text:"建弘證券成立於 1988 年，為一經營經紀、自營、承銷等各業務之綜合商。1994 年，獲證管會核准成為第一家股票上櫃的證券公司。",product:"Oracle 軟體服務"}],
[25.0616728,121.6437773,{name:"建舜電子", text:"建舜電子成立於 1977 年，為 Cable Assembly、訊號連接產品與電子製造服務大廠。公司設計並製造各式電腦週邊連接線組、醫療用線、無線傳輸天線以及外接式儲存裝置等電子產品。",product:"軟體服務(GCRS合併報表)"}],
[25.0345047,121.5669541,{name:"思愛普軟體", text:"SAP 成立於 1972年，為全球第一大標準企業應用軟體供應商，同時也是歐洲第一大電腦軟體公司及全球第三大電腦軟體公司。在全球 120 餘國擁有 13,500 家以上客戶。",product:"委外服務"}],
[25.044247,121.5244033,{name:"思源科技", text:"思源成立於 1996 年，為全球 IC 設計業者提供電子設計自動化軟體及服務，提供獨特自動化技術，加速工程師在複雜數位、邏輯、混合信號 IC、特殊應用 IC、微處理器、系統單晶片設計、驗證及偵錯流程。",product:"GV 統一發票管理系統"}],
[24.172802,120.4876949,{name:"恆享", text:"恆享成立於 1995 年，主要提供汽車轉向系統懸吊系統零件、汽車零件製造業生產組裝的生產與服務。",product:"Ares PP 隱私保鑣"}],
[24.86175,121.0069769,{name:"恆顥科技", text:"恆顥為仁寶集團子公司，成立於 2010 年，主要從事投射式電容觸控面板及關鍵零組件研發、製造與銷售。產品以筆記型電腦為發展主軸擴展至智慧型手機、平板電腦、AIO 與穿戴、家電、工控及車載產品。",product:"Oracle 軟體服務、HCP 人力資產規劃系統"}],
[24.9861185,121.5752136,{name:"政大財管系", text:"政大財管系結合商學院其他系所師資與資源，提供證券投資、公司理財、投資銀行、金融保險、財務會計、證券市場、財務工程與金融創新…等的相關課程規劃，符合學生個人性向及未來職場就業需求。",product:"Oracle 資通服務"}],
[25.043089,121.5030793,{name:"星聚點", text:"星聚點是台灣 KTV 原創人在 2009 年成立，秉持帶領 KTV 產業積極轉型的決心，以五星級標準打造裝璜設備，及便宜實惠的價格，提供消費者時尚自助餐、精緻蛋糕及點心、港式茶餐廳及歡唱派對等饗宴。",product:"Oracle 顧問服務、GV 統一發票管理系統"}],
[24.1041073,120.6952518,{name:"昱通資訊", text:"昱通資訊於 1993 年成立，主要承攬國內外各種電腦程式設計、系統規劃、資料處理及諮詢顧問服務，以及電腦硬體、通訊網路、週邊設備、耗材用品製造經銷業務。",product:"軟體服務"}],
[25.0869609,121.3791706,{name:"柏友照明", text:"柏友照明成立於 2008 年，以愛護地球、綠色照明與環保等三大主軸概念為出發，持續研發與推廣 LED 應用產品，將科技導入生活創造出省電、節能、高品質、高壽命的科技產品。",product:"ciMes 製造執行系統"}],
[25.0556116,121.5342736,{name:"洋基通運", text:"DHL 成立於 1969 年，是全球第一家提供國際快遞服務的供應商，更是全球國際快遞業的領導品牌。業務遍布 220 多個國家和地區，提供可靠的緊急文件和貨品戶對戶快遞服務。",product:"HCP 人力資產規劃系統"}],
[25.0541978,121.5446933,{name:"皇冠出版社", text:"皇冠文化集團成立於 1954 年，包含文字出版、有聲出版、電影、電視、畫廊、小劇場、舞蹈教室、現代舞團等多元化藝文事業。從 1990 年起更積極地朝向香港、新加坡、馬來西亞和中國大陸等地區發展出版業務。",product:"系統專案開發"}],
[25.0715824,121.5086256,{name:"皇家可口", text:"皇家可口為南僑關係企業，成立於 1988 年，餐飲服務主要經營台北寶萊納啤酒餐廳、杜老爺咖啡餐廳、本場流讚岐專業麵店、點水樓江浙美食，於泰國、大陸天津、廣州、上海、日本皆設有事業據點。",product:"ERP 企業資源規劃系統、eGUI 電子發票管理系統"}],
[25.1049165,121.5228183,{name:"士林電機", text:"成立於 1955 年，隸屬於仰德集團，專注於電力相關產品的研發與製造，廣泛應用於鋼鐵、冶金、電力、電子、建築、汽機車元件等產業。以「創新求變、發軔未來」精神，在地深耕，並躍上國際舞台。",product:"Oracle 顧問服務、NM 票據管理系統、GV 統一發票管理系統、ciMes 製造執行系統、HCP 人力資產規劃系統"}],
[25.0518013,121.558817,{name:"中華開發資本", text:"成立於 1959 年，為台灣第一家民營的開發性金融機構，主要業務以「直接投資」與「企業融資」為主，海內外投資及服務之客戶涵蓋百餘種產業，在台灣創投及私募股權市場佔有一席地位，為台灣創投領導者。",product:"BNK 金融軟體服務、SWIFT 電文系統"}],
[25.0518013,121.558817,{name:"開發金控", text:"成立於 2001 年，旗下子公司有中國人壽、凱基銀行、凱基證券及中華開發資本，主要業務為直接投資及企業金融市場。以成熟穩重、專業可靠的企業特質，邁向「全球華人最具特色及領導性的金融控股公司」。",product:"OSC 人力委外服務"}],
[25.029308,121.5472392,{name:"將來銀行", text:"2020 年獲金管會核准設立之純網路銀行，主要股東包括：中華電信、兆豐銀行、新光集團、全聯社、凱基銀行及關貿網路。藉由科技打造金融應用創新平台，開發數位金融新興服務，建構智慧化數位生活生態圈。",product:"AML 洗錢防制解決方案"}],
[25.105768,121.524374,{name:"中鼎工程", text:"創立於 1979 年，是台灣最大的設計、採購、建造一貫性的綜合統包工程公司，活躍於煉油石化、電力、環境、交通及一般工業等工程領域。以承攬全球重大工程聞名，工程實績遍及亞洲、中東和美洲等地區。",product:"OSC 人力委外服務"}],
[25.0766163,121.5690587,{name:"王道銀行", text:"成立於 1999 年，前身為台灣工業銀行，為台灣第一家原生數位銀行，提供消費者便利的數位金融服務。以「榮譽、誠信、團隊、專業、創新」核心理念，滿足不同客群的金融需求，贏得海內外客戶的信賴與支持。",product:"SWALLOW 電文整合管理平台、AFEIS 國內外匯電腦整合系統"}],
[22.2970367,114.1682653,{name:"王道銀行（香港）", text:"成立於 1999 年，前身為台灣工業銀行，為台灣第一家原生數位銀行，提供消費者便利的數位金融服務。以「榮譽、誠信、團隊、專業、創新」核心理念，滿足不同客群的金融需求，贏得海內外客戶的信賴與支持。",product:"eAresBank 海外分行核心系統、ARES Nuntio 資通法規報表申報平台、AML 洗錢防制解決方案"}],
[24.137497,120.6778033,{name:"台中銀行", text:"成立於 1953 年，前身為台中區合會儲蓄公司，早期主要以辦理台中區合會業務，後改制為全國性商業銀行。秉持「用心盡在其中」企業精神，打造最貼近消費者的全方位金融集團，及社會大眾首選之金融服務合作夥伴。",product:"BNK 金融軟體服務、SWIFT 電文系統"}],
[25.0465963,121.5861297,{name:"聯合醫院忠孝院區", text:"1987 年成立，於 2005 年整合各市立醫療院所轉型為「臺北市立聯合醫院」。以「建構市民為中心」公衛醫療照護體系為矢志，積極推動各發展中心，強化資訊系統，使經營更有效率，服務、教學研究品質更佳。",product:"資通服務"}],
[25.0724118,121.5248102,{name:"北美館", text:"成立於 1983 年，是全台首座現當代美術館，肩負推動臺灣現當代藝術的保存、研究、發展與普及之使命，提升普羅大眾對現當代藝術的認知與參與，促使臺灣現當代藝術發展臻至蓬勃。",product:"軟體服務"}],
[25.0305084,121.5727067,{name:"聯合醫院松德院區", text:"建立於 1969 年，前身為台北市立療養院，為精神科專科醫院。2005 年整合各市立醫療院所轉型為「臺北市立聯合醫院」，以照顧市民健康，守護弱勢族群為使命，醫養結合，期望成為亞洲第一的社區型醫院。",product:"系統整合開發"}],
[25.039982,121.572258,{name:"松山工農", text:"創立於 1949 年，為台北市一所市立技術型高級中學。以強化教育品質與專業素養的教學理念，致力提供學生專業的師資與高品質的教育，期許學生在未來能找到自己的價值，受到社會的肯定與認同。",product:"資通服務"}],
[25.0375153,121.564179,{name:"北市財政局", text:"成立於 1966 年，為台北市政府所屬的一級機關。主要職責包含：財務、菸酒既稅務、金融、公產、非公用財產…等管理。",product:"GOV 政府專案"}],
[25.0504949,121.5141059,{name:"普濟寺", text:"興建於 1954 年，為主祀觀音之佛教廟宇，已有 170 餘年歷史，信徒絡繹不絕，香火鼎盛。",product:"資通服務"}],
[25.0480404,121.5493722,{name:"台北市電腦公會", text:"成立於 1974 年，以推廣台灣資訊產業發展為主，主辦國內外各式科技展覽，也提供資訊專業人員培訓、電腦技能檢定及商情諮詢服務，是台灣資訊產業公會與協會組織的一大龍頭。",product:"GOV 政府專案"}],
[25.0381583,121.5500683,{name:"台北富邦銀行", text:"2005 年由台北銀行與富邦商業銀行合併，隸屬於富邦金控旗下。以「誠信、親切、專業、創新」核心價值，提供完整的金融服務網絡，成為客戶在大中華市場的首選金融策略夥伴，穩步朝「亞洲一流區域銀行」目標邁進！",product:"SWALLOW 電文整合管理平台、SWIFT 電文系統"}],
[24.9726201,121.443258,{name:"土城戶政事務所", text:"主要辦理業務包括：戶籍登記、文件核發、自然人憑證及生育獎勵金核發、護照人別確認、國籍歸化測試、編造選舉人名冊、門牌編釘等。秉持創新思維與作法，持續推動各項加值服務，滿足市民需求。",product:"軟體服務"}],
[25.1175924,121.5210676,{name:"北護大", text:"成立於 1947 年，為我國第一所護理技術職業教育高等學府，亦為國內最早設置培育護理博士的技職殿堂。經歷了逾半世紀的歲月，為臺灣社會培育眾多優秀護理及健康照護與管理人才。",product:"資通服務"}],
[25.0551548,121.5202956,{name:"台新銀行", text:"成立於 1992 年，為台灣商業銀行之一，隸屬台新金控旗下。秉持「誠信、承諾、創新、合作」精神，求新求變，快速跟上金融創新腳步，並提供客戶優質的服務，滿足不同金融需求，為客戶創造價值。",product:"軟體服務、SWIFT 電文系統"}],
[25.0424085,121.5122009,{name:"台開", text:"成立於 1964 年，並於 1999 年民營化，2005 年讓售信託部門後，專以土地開發、都市更新及不動產投資業務為主。近年以文化創意及科技創新為核心，為土地注入新價值，提供全方位的土地加值開發服務。",product:"軟體服務"}],
[1.2852847,103.8502327,{name:"土銀新加坡分行", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"、eAresBank 海外分行核心系統"}],
[24.9657147,121.2982103,{name:"土銀八德分行", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"、BNK 金融軟體服務"}],
[25.047677,121.5471623,{name:"土銀松山分行", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"、BNK 金融軟體服務"}],
[25.0441134,121.5125449,{name:"土銀", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"SWIFT 電文系統、eAresBank 海外分行核心系統、公文系統、資通服務"}],
[34.0497852,-118.2584758,{name:"土銀洛杉磯分行", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"eAresBank 海外分行核心系統"}],
[22.8543428,120.2603926,{name:"土銀路竹分行", text:"成立於 1946 年，傳統八大行庫之一，為政府指定唯一辦理不動產信用的專業銀行，並以「創新、效率」企業化經營方式，運用不動產專業利基，深化業務基磐，積極轉型為全方位服務銀行，朝優質金融機構的願景邁進。",product:"BNK 金融軟體服務"}],
[25.0720359,121.5333253,{name:"台灣大車隊", text:"成立於 2001 年，為台灣計程車車隊，每日服務約 35 萬名乘客，服務範圍遍及全台。以科技、紀律、優質化管理，創造顧客服務新體驗。近年增加多元服務，積極與異業合作，成為消費者心中計程車界第一品牌。",product:"eGUI 電子發票管理系統"}],
[25.0445662,121.559258,{name:"台灣大哥大", text:"成立於 1997 年，為台灣第二大電信業者，由富邦集團投資經營。近年已由傳統電信營運商重新定位轉型為新世代網路科技公司，持續以「6C」企業營運核心，積極擁抱科技，創新升級，迎接 5G 新世代。",product:"GV 統一發票管理系統、OSC 人力委外服務、系統整合開發"}],
[25.051177,121.5080702,{name:"台企銀", text:"成立於 1915 年，並於 1998 年民營化。主要提供中小企業融資與輔導為主的專業銀行，分支機構遍佈海內外各地。秉持「進步、效率、責任」的經營理念，提供客戶全方位的金融服務。",product:"SWALLOW 電文整合管理平台、SWIFT 電文系統"}],
[22.2970367,114.1682653,{name:"台企銀香港分行", text:"成立於 1915 年，並於 1998 年民營化。主要提供中小企業融資與輔導為主的專業銀行，分支機構遍佈海內外各地。秉持「進步、效率、責任」的經營理念，提供客戶全方位的金融服務。",product:"eAresBank 海外和分行核心系統、資通服務"}],
[25.051177,121.5080702,{name:"台企銀國際金融業務分行", text:"成立於 1915 年，並於 1998 年民營化。主要提供中小企業融資與輔導為主的專業銀行，分支機構遍佈海內外各地。秉持「進步、效率、責任」的經營理念，提供客戶全方位的金融服務。",product:"eAresBank 海外和分行核心系統"}],
[-33.8683087,151.204669,{name:"台企銀雪梨分行", text:"成立於 1915 年，並於 1998 年民營化。主要提供中小企業融資與輔導為主的專業銀行，分支機構遍佈海內外各地。秉持「進步、效率、責任」的經營理念，提供客戶全方位的金融服務。",product:"eAresBank 海外和分行核心系統"}],
[25.051177,121.5080702,{name:"台企銀（國外部）", text:"成立於 1915 年，並於 1998 年民營化。主要提供中小企業融資與輔導為主的專業銀行，分支機構遍佈海內外各地。秉持「進步、效率、責任」的經營理念，提供客戶全方位的金融服務。",product:"BNK 金融軟體服務"}],
[25.0786955,121.5649273,{name:"台灣之星", text:"成立於 2014 年，為台灣五大電信業者之一，矢志提供全台民眾最優質的 3G+4G 高速通訊的行動寬頻服務。致力運用行動科技，豐富消費者生活，打破電信傳統框架，並用心傾聽，滿足顧客每個需求。",product:"系統整合服務、HCP 人力資產規劃系統、OSC 人力委外服務、eGUI 電子發票管理系統"}],
[23.512212,120.369857,{name:"台灣必成", text:"創建於 1987 年，主要生產電子級複合材料玻璃纖維絲，產品廣泛應用於電子、工業、運動及建築領域。積極研發創新及引進先進技術，加上累積多年的生產管理及技術經驗，成為全球生產電子級玻璃纖維絲領導廠商。",product:"ciMes 製造執行系統、資通服務"}],
[25.0331512,121.5423346,{name:"台灣瓦克", text:"創始於 1980 年，為台灣主要水果進出口商之一，業務範圍橫跨世界各洲。近年積極擴展業務觸角：五金出口、有機微生物製劑代理、紅酒貿易、零售 O2O、開發中國印尼蔬果食品市場，以期望提供客戶更多元產品。",product:"OSC 人力委外系統"}],
[25.0619968,121.6484837,{name:"台灣米其林", text:"法國最大輪胎及橡膠製品製造商。1999 年正式入台，主要從事輪胎進口銷售及服務，積極在地化經營，投入全方位服務。以推動旅行的自由、安全、效率和舒適，為人類和貨品的移動作出貢獻，成為世界輪胎界領導品牌。",product:"eGUI 電子發票管理系統、GV 統一發票管理系統"}],
[24.8744501,121.0025729,{name:"台灣車輛", text:"成立於 2002 年，為台灣本土軌道車輛及零件製造商，以生產與維護鐵路列車為主，主要市場涵蓋鐵路、捷運、高鐵、輕軌等交通設備。未來將持續生產優質的軌道車輛，提供業主與客戶滿意的產品與服務。",product:"ciMes 製造執行系統"}],
[25.0673356,121.5255704,{name:"台灣明治", text:"1986 年在台成立子公司，致力於明治嬰幼兒、媽咪奶粉的推廣與售後服務，以及提供免費專線予孕產婦諮詢各種嬰幼兒營養、育兒等相關問題。以照顧消費者「健康」為宗旨，與消費者共同開創「食」的新價值。",product:"系統整合開發"}],
[25.045357,121.5090783,{name:"台灣知識庫", text:"成立於 2000 年，鑽研於 e-learning 教學系統及相關產品的研發，提供政府、企業、學校學習平台與數位化課程，成為「全球華人華文電子化學習第ㄧ品牌」，並以「數位時代的知識傳動者」為經營使命。",product:"ERP 企業資源規劃系統、CRM 客戶關係管理系統"}],
[24.1008699,120.7088573,{name:"皇將科技", text:"成立於 2002 年，從事檢驗儀器及製藥生產線製造。提供製藥、生技、保健食品廠等包裝機械設備與生產包裝線，是國內唯一已通過 USFDA 審核認證的全球製藥設備領導廠商。",product:"ciMes 製造執行系統"}],
[23.9804458,120.6850555,{name:"衛生福利部草屯療養院", text:"創立於 1983 年，又稱草屯療養院或草療，是台灣中部專門處理精神疾病的醫療院所，隸屬於衛生福利部。為台灣少數專司精神疾病的醫院之一，近年也協助處理大量精神病患者問題。",product:"系統整合開發"}],
[25.0564734,121.4704767,{name:"科定企業院", text:"科定企業立於 2002 年，以高科技塗裝機台，研發與生產塗裝木皮板系列商品，推翻傳統噴漆的作業方式，提供健康無毒的居家木建材，為室內裝潢帶來新革命。",product:"軟體服務、GD-CRM 客戶關係管理系統"}],
[25.0405168,121.5649653,{name:"美商甲骨文台灣分公司（Oracle）", text:"為全球首屈一指電子商業軟體和服務供應商，提供資料庫、應用伺服器、企業電子商業套裝軟體，以及應用軟體開發與決策支援工具，能協助企業快速、靈活，並更符合經濟效益的掌握資訊脈動。",product:"軟體服務"}],
[25.0576497,121.5363194,{name:"美商奇異", text:"奇異公司是全球數位工業公司，於 1972 年在台設立分公司，創造由軟體定義的機器，集互聯、回應和預測之智，致力變革傳統工業。",product:"eGUI 電子發票管理系統"}],
[25.0282713,121.5708368,{name:"美商溫瑞爾（Wind River）", text:"1981 年創立於美國加州柏克萊，是一間以發展嵌入式系統為核心業務的美國軟體公司，同時提供對應的嵌入式系統開發工具、中介軟體和其它軟體。",product:"資通服務"}],
[24.562564,120.8181628,{name:"苗栗縣稅捐稽徵處", text:"1950 年 10 月成立，除了負責稽徵營利事業所得稅、綜合所得稅、遺產及贈與稅、貨物稅、證券交易稅等國稅之外，也負責苗栗縣各項地方稅稽徵業務。",product:"政府專案"}],
[25.0675021,121.4537454,{name:"英茂資訊", text:"成立於 1987 年，為全台最大最快速的專業自動化郵件包裝廠，業務內容包含自動化包裝、資料處理、郵簡製作、專業光學材料鍍膜。公司坐落於北部（五股、南崁）及中部（台中工業區）。",product:"資通服務"}],
[24.7099244,120.9150125,{name:"英特盛科技", text:"成立於 2012 年，為觸控顯示技術之專業廠商，於台灣、深圳與成都均建有研發與生產基地，服務客戶遍及亞、歐、美之世界級電子大廠，提供全方位的觸控顯示技術解決方案。",product:"ERP 企業資源規劃系統"}],
[24.1867963,120.6039387,{name:"英揚電腦", text:"設立於 1994 年，負責電腦及其週邊設備、零組件及電子器材之買賣維修、電腦糸統軟體程式設計、銷售與研究開發等業務。",product:"資通服務"}],
[25.0005034,121.34255187,{name:"英誌企業(更名為翔耀實業)", text:"成立於 1982 年，主要業務為設計、生產及銷售導光板、背光模組、LED照明相關產品。",product:"GV 統一發票管理系統"}],
[24.9980911,121.4851773,{name:"英濟", text:"成立於 1991 年，為專業高精密零組件製造商，專精於零組件塑膠射出成型、精密模具開發、電子組裝、噴塗等前中後段製程整合服務。生產據點除台灣外，更包含中國、東南亞與美洲。",product:"HCP 人力資產規劃系統"}],
[25.0600237,121.4586443,{name:"史泰博", text:"全球第一家率先推出「辦公用品超市」概念的公司，1986 年在美國 Boston 開設第一家門市，於 2006 年成立台灣分公司，為全國最大的辦公用品通路商。",product:"ERP 企業資源規劃系統統"}],
[25.0644334,121.5745599,{name:"太古國際汽車", text:"是台灣最具規模且多元的汽車經銷體系，從 1978 年起從事小客車、商用車、摩托車之代理及經銷業務。近年致力於發展車咕嚕 CARGURU 品牌，提供全方位智慧用車服務。",product:"Oracle 顧問服務、GV 統一發票管理系統"}],
[25.0521934,121.5364566,{name:"永德福汽車", text:"瑞典  Scania 在台分公司，負責在台灣銷售與服務 Scania 卡車與巴士，客戶群包括各方客運業者及旅行社、大型運輸產業及物流業等，目前擁有北、中、南、東四區營業處及十間直營服務廠。",product:"系統整合開發"}],
[24.9729731,121.5462723,{name:"百崴宇智", text:"從事高端工業電腦領域，致力生產高品質主板和堅固的無風扇系統，可以在極端溫度和高水平衝擊和振動的惡劣環境中工作。產品廣泛應用於高端自動化、交通運輸、海上能源勘探、國防和實時監控系統等市場。",product:"ERP 企業資源規劃系統"}],
[25.0801049,121.5692062,{name:"康達國際", text:"總公司位於美國，2001 年在台灣成立辦事處，亞洲區另有大陸、香港等辦事處，在大陸有貿易部門及工廠出口各式燈飾至世界各地。",product:"Oracle 顧問服務、Agile PLM 產品生命週期管理系統"}],
[25.0684397,121.2684809,{name:"家庭傳媒-城邦分公司", text:"城邦出版控股集團為台灣最大的書籍出口公司，旗下知名出版社不勝枚舉，擁有員工數百人，每年出書超過一千本，出版刊物內容涵蓋商業、歷史、兒童、文學、藝術、旅遊、食譜、流行資訊、醫藥、宗教等各領域。",product:"GV 統一發票管理系統、NM 票據管理系統、eGUI 電子發票管理系統、系統整合開發、委外服務"}],
[24.991896,121.2070812,{name:"茂林光電", text:"2000 年設立於開曼群島，為導光板應用廠商。專注於塑膠導光板應用及塑膠零組件之設計、製造及銷售，並以光學微結構（mircolens）為技術核心，開發製造出更大、更薄和更節能的產品。",product:"HCP 人力資產規劃系統"}],
[24.776435,120.993086,{name:"虹光精密工業", text:"成立於 1991 年，為事務機器、資料儲存及處理設備、有線通信機械器材及光學儀器製造商，業務範圍涵蓋數位化影像處理設備及相關項目的研究、開發、生產及銷售。",product:"Oracle 軟體服務"}],
[24.9847428,121.5378016,{name:"虹堡科技", text:"成立於 1993 年，台灣電子金融交易終端機（POS）及 IC 晶片卡讀卡機製造商。總部位於新北市新店區，全球行銷據點涵蓋美、加、歐、非及亞澳。",product:"Agile PLM 產品生命週期管理系統、Oracle 顧問服務"}],
[25.072857,121.58573766,{name:"迪堡多富", text:"堡多富從事流通業及金融業自動化資訊產品製造、整合、技術顧問及專業服務等業務。在台灣擁有超過 52% 的 ATM 櫃員機市場占有率，售出超過  1,300 台 YouBike 自助服務機。",product:"Fortify 企業資安監測方案"}],
[29.553473,106.569859,{name:"重慶錫周殯儀服務", text:"為中國生命集團的附屬公司，中國生命集團於 2009 年在香港聯交所上市，主要業務為於台灣、中國、香港及越南提供殯儀服務，包括棺木、壽衣、孝服等。",product:"系統整合開發"}],
[24.9983899,121.4857128,{name:"飛泰貿易", text:"成立於 1973 年，致力於高品質工廠自動化零元件之專業銷售。商品包含空氣壓零件、光纖光電感測器及視覺檢查系統、機械手臂、精密點膠設備、靜電消除器等，被廣泛運用在電子、半導體領域。",product:"ERP 企業資源規劃系統"}],
[25.0646718,121.5773161,{name:"飛捷科技", text:"1984 年成立，為國內上市之專業 POS 系統設計製造廠，致力於各種電腦系統模組化產品研發與製造。產品線包括 POS、工業平板電腦、行動 POS 和支付終端設備 (PTS)。",product:"uPKI 憑證驗證服務系統"}],
[25.0807016,121.5678238,{name:"飛雁有限公司", text:"成立於 1988 年，為國際知名運動品牌成衣的製造商。海內外員工人數約有兩萬名。總公司設於台北市，並於菲律賓、中國大陸、越南、柬埔寨等地設有工廠共計 17 家。",product:"委外服務"}],
[25.0578092,121.5355677,{name:"沙特基礎工業", text:"成立於 1976 年，是一家總部位於沙特首都利雅德的上市公司，同時也是全球最大的石化產品製造商之一，營運遍及 50 多個國家，全球員工總數超過三萬五千人。",product:"GV 統一發票管理系統"}],
[24.1589229,120.6802111,{name:"怡豐洋酒", text:"位於台中市，主要業務為洋酒、洋菸經銷及批發。",product:"Oracle 軟體服務"}],
[25.056135,121.588356,{name:"堡獅龍（bossini）", text:"休閒服裝品牌，於 1987 年在香港開設第一間專門店，1993 年在香港聯合交易所正式上市，成為港澳最大服裝零售連鎖店，店面遍佈新加坡、中國、東南亞、中東、歐洲、中美洲等地。",product:"GV 統一發票管理系統"}],
[25.057129,121.6123836,{name:"雅虎資訊", text:"台灣大型入口網站之一，為美國首屈一指的電信公司 Verizon Media 旗下雅虎台灣版，提供新聞、電子信箱、搜尋、拍賣、超級商城、購物中心...等服務，以及企業電子商務解決方案。",product:"GV 統一發票管理系統、eGUI 電子發票管理系統"}],
[25.0792614,121.5717098,{name:"維沃電子 (更名為香港商尚域投資)", text:"主要代表產品有 vivo 品牌系列智慧型手機以及周邊配件產品，致力於打造擁有卓越外觀、專業級音質、極致影像、愉快體驗的智慧產品。",product:"ERP 企業資源規劃系統"}],
[25.081969,121.5666526,{name:"德技先進", text:"隸屬於德技集團，專業代理銷售工程塑料型材、改性添加劑、碳纖維製品、改性塑膠顆粒、高精密零件注塑與加工各種特種材料及解決方案，主要針對塑膠改性、汽車輕量化、半導體、電子工業等高科技產業及應用。",product:"ERP 企業資源規劃系統"}],
[25.0494821,121.5216,{name:"誼家貿易 (現為 IKEA 宜家家居)", text:"瑞典跨國居家用品零售企業，據點分布世界多國，販售平整式包裝的傢具、配件、浴室和廚房用品。開創以平實價格銷售自行組裝家具的領導品牌，目前是全球最大傢具零售企業。",product:"系統整合開發"}],
[25.037165,121.5665533,{name:"藤倉國際台灣分公司", text:"跨國國際貿易公司，台灣分公司創立於 1997 年，主要經營電子零件相關產品之買賣，母公司為藤倉香港，總公司為日本 Fujikura 集團。",product:"委外服務"}],
[23.5248803,120.4479575,{name:"倉佑實業", text:"成立於 1989 年，是一家國際傳動系統零組件製造商，初期為出口至北美市場的汽車零件供應商，目前產品線拓展至自動變速箱零組件、重型卡車離合器零組件，與產業機械零組件等類別，客戶群遍布全球。",product:"GV 統一發票管理系統"}],
[25.0383054,121.5456548,{name:"倍力資訊", text:"創立於 1999 年，為資訊軟體整合服務公司，主要代理國內外先進的軟體解決方案，以一次購足的概念，提供資訊系統開發所需的完整軟體方案與技術 Know-How。",product:"GV 統一發票管理系統"}],
[24.9650471,121.3194906,{name:"凌巨科技", text:"創立於 1997 年，為液晶顯示器模組生產廠商，產品以中小尺寸平面顯示器為主，近年來聚焦於利基型車載/工控應用、穿戴式裝置、POS system 等高附加價值產品。",product:"HCP 人力資產規劃系統、軟體服務(Analyzer)、HCP 人力資產規劃系統、Agile PLM 產品生命週期管理系統、Oracle ERP Local Template"}],
[24.997816,121.4854303,{name:"凌華科技", text:" 2004 年正式掛牌上市，致力於量測、自動化及電腦通訊科技之改進及創新，提供解決方案給全球網路電信、智能交通及電子製造客戶。目前在美國、新加坡、中國、日本、德國設有子公司。",product:"委外服務"}],
[25.0444697,121.5015853,{name:"凌群電腦", text:"成立於 1975 年，並於 2001 年股票上市，主要透過電腦軟硬體及通訊技術提供系統整合服務，服務據點橫跨台灣、中國、日本、美國，以及東協國家中泰國、越南等。",product:"uPKI 憑證驗證服務系統、政府專案、AFEIS 國內外匯電腦整合系統、SWIFT 電文系統"}]
];