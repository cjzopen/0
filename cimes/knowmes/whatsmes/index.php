<?php
$url='https://cimes.ares.com.tw/knowmes/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '什麼是 MES 製造執行系統';
$page['description'] = 'MES 也稱製造執行系統、工廠營運管制系統。幫助企業從接獲訂單、進行生產、流程控制到產品完成，主動收集及監控製造過程中所產生的生產資料，以確保產品生產品質的應用軟體。';
$canonical = 'https://cimes.ares.com.tw/knowmes/whatsmes/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/whatsmes/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="know">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  file_get_contents($_SERVER['DOCUMENT_ROOT']."/public/img/what/whatsmes-banner-icon.svg").'認識 MES', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">認識 MES</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">什麼是 MES</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php include('../_menu.php'); ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-5 col-lg-5 text-center d-none d-sm-block">
            <img class="img-fluid" loading="lazy" width="335" src="/public/img/what/whatsmes-1.png" alt="*">
          </div>
          <article class="col-12 col-sm-7 col-lg-7">
            <h1 class="dline">MES（Manufacturing Execution System）</h1>
            <p>中文名稱為「<dfn>製造執行系統</dfn>」，也可稱為「工廠營運管制系統」，是用來幫助企業從接獲訂單、進行生產、流程控制一直到產品完成，主動收集及監控製造過程中所產生的生產資料，以確保產品生產品質的應用軟體。</p>
            <p>透過關連式資料庫、圖形化使用介面、開放式架構等資訊相關技術，MES 能將企業生產所需的核心業務如訂單、供應商、物管、生產、設備保養、品管等流程整合在一起，將工廠生產線上即時的生產資訊，以 web 或其他通知方式準確地傳送給使用者監看，當生產活動發生緊急事件時，還能提供現場緊急狀態的資訊，並以最快速度通知使用者。企業引進 MES 目的在於致力降低沒有附加價值的活動對工廠營運的影響，進而改善企業製程，提高生產效益。</p>
          </article>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row align-items-center">
          <article class="col-12 col-sm-6 col-lg-6">
            <p>MES 是一個環境也是一個架構，它將即時的資訊和其他資訊系統（如生產流程規劃系統等）結合，使得企業、工廠或流程控制系統之間的鴻溝得以連結起來。在 IC、LCD、PCB 及電子零組件等高科技產業中，由於製造現場流程複雜，分批、併批、跳批、外包、插單、抽單等異常生產狀況極為頻繁，傳統上以財務、會計為出發點 ERP 系統的製造相關模組難以勝任，於是從工廠營運層考量的專用型製造執行系統便應運而生。企業導入 MES 後可以降低生產週期時間、減少在製品（WIP）、增強準時交貨能力、改善產品品質，進而降低生產成本、增加總生產盈餘，是高科技及高度競爭產業的生存利器。</p>
            <a class="btn btn-cimes my-3 px-3 w-100" href="/products/" title="產品介紹">ciMes 產品介紹</a>
          </article>
          <div class="col-12 col-sm-6 col-lg-6 d-none d-sm-block text-center" aria-hidden="true">
            <img class="img-fluid" loading="lazy" width="335" src="/public/img/what/whatsmes-2.png" alt="*">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
          <h2 class="text-center mb-0">MES 導入效益</h2>
          <hr>
          <p class="text-center">根據 MESA international 調查的數據顯示，企業導入 MES 後可以帶來如下的具體效益：</p>
              <table class="table table-bordered table-striped mx-auto" style="max-width:600px">
                <thead class="main-bg fff-color">
                  <tr>
                    <th width="207">改善項目</th>
                    <th width="81">統計數據</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>縮短產品週期</strong></td>
                    <td>↓35%</td>
                  </tr>
                  <tr>
                    <td><strong>縮短或不需建檔時間</strong></td>
                    <td>↓36%</td>
                  </tr>
                  <tr>
                    <td><strong>減少在製品數量</strong></td>
                    <td>↓32%</td>
                  </tr>
                  <tr>
                    <td><strong>減少或不需班次間的文書工作</strong></td>
                    <td>↓67%</td>
                  </tr>
                  <tr>
                    <td><strong>改善產品品質（減少不良品）</strong></td>
                    <td>↓22%</td>
                  </tr>
                  <tr>
                    <td><strong>避免文件／設計圖不見</strong></td>
                    <td>↓55%</td>
                  </tr>
                </tbody>
              </table>
      </div>
    </section>
    <section>
      <div class="container text-center">
        <h2 class="mb-0">建構 4.0 智慧工廠</h2>
        <hr>
        <div class="row justify-content-center" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
          <div class="col-12 col-sm-8 col-lg-8">
            <p class="text-left" itemprop="description">MES 是從工單、生產、設備管理、保養、品質管制到出入庫、進出貨等整合的系統，可以說是一個製造形態工廠的核心。從公司接到客戶訂單到出貨給客戶，中間生產過程的控管，就是 MES 發揮功能的地方。</p>
          </div>
        </div>
        <figure class="text-center">
          <a temprop="url" href="/public/img/what/whatsmes-800.png"><img itemprop="image" class="img-fluid" loading="lazy" src="/public/img/what/whatsmes-800.png" alt="MES製造執行系統關聯與說明"></a>
        </figure>
        <a class="btn btn-cimes my-3 px-3" href="/industry-4.0/">智慧工廠專區</a>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/main.js" async></script>
</body>
</html>