<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '《營業秘密》如何管理？做好四大「資料加密」要點立即守護';
$page['description'] = '2023年發佈的《營業秘密保護管理規範》，企業需建立系統化的營業秘密管理制度，降低組織機密外洩風險。而「資料加密」可協助企業建構營業秘密保護網，守護企業機密。';
// $page['css']=array('/public/css/trade-secret.css');
$canonical='https://ares-pp.ares.com.tw/trend/trade-secret/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.grid-box{
  position: relative;
}
.grid-box img{
  position: absolute;
  left: 50%;
  top: 50%;
  width:16vw;
  height: 16vw;
  max-width: 200px;
  max-height: 200px;
  transform:translate(-50%,-50%);
}
.grid{
  width: 100%;
  max-width: 614px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap:10px;
}
.grid>div{
  padding:3px;
  aspect-ratio: 12/7;
  border:1px solid #1974E3;
  background-color: #EAF3FF;
}
.grid>div:nth-child(1){
  border-top-left-radius: 40px;
}
.grid>div:nth-child(2){
  border-top-right-radius: 40px;
}
.grid>div:nth-child(3){
  border-bottom-left-radius: 40px;
}
.grid>div:nth-child(4){
  border-bottom-right-radius: 40px;
}
</style>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/trend/top.php');
?>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">營業秘密保護管理規範</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  <main>
    <section class="py-5 fff-color bg-lazyload" data-image="/public/img/trend/trade-secret/bg.jpg" data-position="center top" data-color="#fff" data-bgcolor="#153889">
      <div class="container">
        <h1 class="text-center">什麼是《營業秘密保護》？該如何管理與規範？</h1>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <p>2023 年資策會科法所發佈《<a style="text-decoration: underline;" href="https://stli.iii.org.tw/publish-detail.aspx?no=72&d=7212" rel="noopener noreferrer" target="_blank">營業秘密保護管理規範</a>》，建議企業建立系統化的營業秘密管理制度，降低組織營業機密外洩風險，提升企業競爭優勢。</p>
            <p>依據立法院營業秘密法條文，企業的機密資訊想受到營業秘密法保護，必須符合<span style="color:#FFFF00">「秘密性」、「經濟價值性」與「合理保密措施」</span>等 3 項法定要件，才能保障企業組織營運機密。</p>
            <p>立法院在 2023 年 1 月 11 日三讀通過營業秘密法修正案，並於 2023 年 2 月 1 日正式施行，明確訂定侵害營業秘密之犯罪行為。如不慎觸法，將面臨最重可處 10 年以下刑事責任，併科新台幣 5,000 萬元罰金，且若侵害者所得利益超過 5,000 萬元，更可能處以最高 5 億元以上罰金的民事罰責。</p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">《營業秘密保護管理規範》三大法定要件</h2>
        <div class="text-center mb-5">
          <img class="img-fluid" loading="lazy" width="350" height="310" src="/public/img/trend/trade-secret/營業秘密.png" alt="營業秘密三大法定要件">
        </div>
        <h3 class="mb-2">一、	秘密性</h3>
        <p>企業內部的營業秘密，可以分為「商業性營業秘密」及「技術性營業秘密」，前者是指客戶資料、合約契約、交易底價、進貨成本、人事管理、成本分析…等與經營相關的資訊，後者則是與特定產業研發或創新技術有關的機密知識，包括生產製程、配方、設計圖檔、程式原始碼、技術 know-how…等。</p>
        <h3 class="mb-2">二、	經濟價值性</h3>
        <p>指可以產出經濟利益或商業價值的資訊。需經過時間、勞力、成本投入所獲得，且在使用上不必依附其他資訊而獨立存在，並可帶來有形的金錢收入，或提升市占率、研發能力、業界領先時間等競爭優勢。例如：需要花費大量時間進行收集、篩選、分析與整理的客戶資訊，也具備經濟價值。</p>
        <h3 class="mb-2">三、	合理保密措施</h3>
        <p>是指企業「主觀上有保護該資訊的意願」且「客觀上也有保密的積極行為」，必須能讓他人知道企業有將該資訊當成秘密在保護的意思。例如簽署員工保密與競業禁止契約、於文件上標明「密件」或「限閱」等註記、對營業秘密資料予以上鎖或限制使用權限等行為。</p>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">各產業「資料加密」實際應用案例</h2>
        <div>
          <div class="d-flex mb-4">
            <div class="d-none d-md-block"><img loading="lazy" width="210" height="120" src="/public/img/trend/trade-secret/科技業.webp" alt="*"></div>
            <div class="pl-3">
              <strong class="main-color">科技業</strong>
              <p>建構資安管理制度、機敏檔案自動加密、Office 版本升級可正常加密、加密應用程式類型無上限</p>
              <ul>
                <li><a class="main-color" href="https://www.ares.com.tw/events/arespp-user-story-txc">→全球第一頻率元件製造商台灣晶技以 ARES PP 落實 ESG 資安管理</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="d-none d-md-block"><img loading="lazy" width="210" height="120" src="/public/img/trend/trade-secret/製造業.webp" alt="*"></div>
            <div class="pl-3">
              <strong class="main-color">製造業</strong>
              <p>保護外發文件安全、防止通訊軟體外洩機密、掌握文件異常使用情況</p>
              <ul>
                <li><a class="main-color" href="https://www.ares.com.tw/events/TAKISAWA-introduce-ARESPP">→全球知名 CNC 車床製造廠台灣瀧澤以 ARES PP 打造高規格資安</a></li>
                <li><a class="main-color" href="https://www.ares.com.tw/events/arespp-user-story-computer-company">→全球電腦領導品牌導入 DRM 防止通訊軟體傳輸資料外洩</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="d-none d-md-block"><img loading="lazy" width="210" height="120" src="/public/img/trend/trade-secret/其他.webp" alt="*"></div>
            <div class="pl-3">
              <strong class="main-color">其他產業/政府機關</strong>
              <p>未授權者無法開啟加密檔、阻擋手機偷拍機密、隱形浮水印保障智財權、機敏文字無法被複製、符合個資法規範</p>
              <ul>
                <li><a class="main-color" href="https://www.ares.com.tw/events/arespp-user-story-power-supplier">→知名電源供應器廠商 用檔案加密嚴防設計資料外洩</a></li>
                <li><a class="main-color" href="https://www.ares.com.tw/events/biotech-company-protects-documents-with-arespp">→生技製藥大廠以加密系統 高效保護研發文件</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">如何做好「資料加密」四大要點，守護營業秘密</h2>
        <div class="grid-box">
          <img src="/public/img/trend/trade-secret/資料加密.png" alt="*">
          <div class="grid mx-auto">
            <div class="d-flex justify-content-center align-items-center p-1 p-md-5 h-100">
              <div class="pr-4">區分機密資訊的層級，限制可接觸使用者的權限</div>
            </div>
            <div class="d-flex justify-content-center align-items-center p-1 p-md-5 h-100">
              <div class="pl-4">建置標準接收文件或檔案加密流程</div>
            </div>
            <div class="d-flex justify-content-center align-items-center p-1 p-md-5 h-100">
              <div class="pr-4">制訂對內與對外文件的保護措施</div>
            </div>
            <div class="d-flex justify-content-center align-items-center p-1 p-md-5 h-100">
              <div class="pl-4">製作並保存常規工作日誌</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">資料加密系統推薦｜ARES PP 六大功能保護商業機密</h2>
        <div class="row justify-content-center text-center">
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-1.svg" alt="*">
            <h3 class="h6 m-0">依群組或個人授權</h3>
            <p>設定精細的使用者權限、列印權限或次數</p>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-2.svg" alt="*">
            <h3 class="h6 m-0">存檔即加密</h3>
            <p>用加密檔案對外交流，獲授權的供應商可編輯修改</p>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-3.svg" alt="*">
            <h3 class="h6 m-0">外發文件可編輯加密</h3>
            <p>設定精細的使用者權限、列印權限或次數</p>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-4.svg" alt="*">
            <h3 class="h6 m-0">機敏資訊偵測</h3>
            <p>當使用者要複製機敏文字時，系統會自動偵測並阻斷</p>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-5.svg" alt="*">
            <h3 class="h6 m-0">圖形化地理軌跡分析</h3>
            <p>即時記錄使用者的文件操作行為，並透過地理軌跡追蹤文件動向</p>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <img class="img-fluid" loading="lazy" width="150" height="150" src="/public/img/trend/trade-secret/icon-6.svg" alt="*">
            <h3 class="h6 m-0">異常文件召回</h3>
            <p>透過遠端召回文件，杜絕無存取權限的使用者使用</p>
          </div>
        </div>
        <div class="text-center pt-5">
          <a href="/about/" class="btn btn-blue">ARES PP 系統介紹</a>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>