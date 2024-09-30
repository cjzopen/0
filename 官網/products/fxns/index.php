<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='外匯議價系統 - 資通電腦';
$page['description']='外匯議價系統支援純網銀、數位銀行、網路銀行以及實體銀行匯率議價作業機制，並整合即時匯率提供銀行端客戶最新的報價資訊。';
$page['canonical']='https://www.ares.com.tw/products/fxns/';
// $page['css']=array('');
$page['ogimage']='https://www.ares.com.tw/img/product/fxns/structure.png';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include (__DIR__.'/_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">外匯議價系統</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
<style>.purple-color{color:#6667ED;}</style>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img src="/img/product/fxns/fxns.svg" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline h2">外匯議價系統</h1>
          <p class="justify">在 Fintech 金融科技的實施與推廣下，外匯議價業務除傳統實體銀行外，現已多在數位銀行、網路銀行以及純網銀下實施。為支援銀行端匯率議價作業更迅速與便利的機制，並整合即時匯率提供銀行端客戶最新報價資訊，資通電腦推出台灣首家自行研發外匯議價系統，兼具 <?= $age ?> 年金融資訊服務實戰淬鍊經驗與實力。透過系統自動化外匯議價機制，協助銀行業務開創新藍海。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">系統特色</h2><hr>
      <ul class="row">
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-1.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">整合即時匯率提供最新報價資訊；並提供相關交易平台即時匯率查詢。</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-2.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">支援網頁議價作業，提供即時議價明細查詢。</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-3.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">針對即期產品提供詢價、議價訂約與交割作業。</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-4.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">提供即時議價明細、交易明細、交易部位與損益查詢，以掌握最新之議價收益與風險。</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-5.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">支援 web 作業畫面，提供類似綜合查詢等便於使用者操作的友善介面。</p>
          </div>
        </li>
        <li class="col-12 col-md-6 d-flex my-3 align-items-center">
          <div class="flex-shrink-0" aria-hidden="true">
            <img src="/img/product/fxns/feature-6.svg" alt="*" class="img-fluid">
          </div>
          <div class="pl-3">
            <p class="m-0">符合法規申報作業規定。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img src="/img/product/fxns/function-1.svg" alt="*" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">基本應用功能</h2>
          <ul class="disc">
            <li>
              <div class="purple-color">營業日及行事曆作業</div>提供行事曆列印、營業日查詢與調整
            </li>
            <li>
              <div class="purple-color">匯率作業</div>提供掛牌匯率表、關帳匯率表作業
            </li>
            <li>
              <div class="purple-color">安全控管作業</div>提供使用者帳號、角色相關設定功能
            </li>
            <li>
              <div class="purple-color">系統控制參數</div>提供國家、幣別代碼與幣別兌換運算關係參數表
            </li>
            <li>
              <div class="purple-color">銀行基本資料</div>客戶、分行基本資料管理
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <h2 class="underline">外匯議價交易系統功能</h2>
          <ul class="disc">
            <li>
              <div class="purple-color">交易系統模組</div>提供彈性多階層議價流程與功能
            </li>
            <li>
              <div class="purple-color">交割確認模組</div>提供交易覆核及違約處理機制
            </li>
            <li>
              <div class="purple-color">交割參數設定</div>提供限額及客戶優惠設定等功能
            </li>
            <li>
              <div class="purple-color">查詢模組</div>提供匯率議價交易相關查詢功能
            </li>
            <li>
              <div class="purple-color">報表功能</div>匯率議價交易成交單列印功能
            </li>
            <li>
              <div class="purple-color">介接整合</div>匯率議價交易、連動交割、大額交易申報…等介接整合
            </li>
            <li>
              <div class="purple-color">AD 整合</div>提供與 Active Directory（微軟目錄服務）整合功能
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img src="/img/product/fxns/function-2.svg" alt="*" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>系統架構</h2><hr>
      <img class="img-fluid" loading="lazy" width="800" height="526" src="/img/product/fxns/structure.png" alt="個人網路銀行、企業網路銀行、行動銀行、外匯系統、海外分行核心系統、財務交易系統、市場即時匯率">
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>
</html>

