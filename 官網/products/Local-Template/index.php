<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');

// $str = $_SERVER["QUERY_STRING"];
// if (stripos($str, "&") === false){
//   $str = $_SERVER["QUERY_STRING"];
// }else{
//   $str = substr($str, 0, stripos($str, "&"));
// }

$pageName = "product";
$page['title']='Oracle ERP台灣在地化票據、保稅、十號公報存貨管理系統 - 資通電腦';
$page['description']='提供 Oracle ERP 台灣在地解決方案，除了 GV 還包含票據 NM、保稅 GIB、十號公報存貨管理系統，並支援 Oracle EBS 系統開發與客製化服務。';
$page['canonical']='https://www.ares.com.tw/products/Local-Template/';
$page['css']=array('/css/product-localtemplate.css');
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
            <a href="" itemprop="item"><span itemprop="name">NM / GIB / 十號公報</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <div class="row">
      <div class="col-12 col-md-6 text-center">
        <figure><img class="img-fluid" src="/img/product/lt/LocalTemplate.png" alt="含蓋五種票券管理系統"></figure>
      </div>
      <div class="col-12 col-md-6">
        <h1 class="underline">NM / GIB / 十號公報</h1>
        <p class="justify">資通 Oracle ERP Local Template 除了提供 GV（GUI / VAT；統一發票 / 媒體申報管理系統）及 eGUI（Electronic Government Uniform Invoice；電子發票管理系統）之外，也提供 NM（Notes Management；票據管理系統）、GIB（Goods in Bond；保稅管理系統）、十號公報存貨管理系統，是基於 Oracle ERP 企業資源規劃系統所開發的解決方案。</p>
        <p>我們擁有專業顧問團隊，成功輔導東森電視、Yahoo 雅虎、Honeywell、長榮航太科技、創意電子、台灣之星、中石化、遠傳、宏碁、華碩、友達、南僑集團、Mazda、啟碁科技、敦南科技…等近百家大型企業客戶系統上線。資通用心協助客戶問題處理程序標準化，並不定期提供新增功能通知；以及發佈應用資訊、程式更新與修補之資訊，使用客戶可享有續約等各種優惠。</p>
        <div class="text-right"><a href="https://oracle.ares.com.tw/solutions/customization/" class="btn btn-info fff panel-title">更多 Oracle 服務</a></div>
      </div>
      </div>
    </div>
    <!-- <div id="summary" style="margin-bottom: -2rem"></div>定位用 -->
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">NM : Notes Management 票據管理系統</h2><hr>
          <ul class="check">
            <li>符合台灣公司對於銀行帳戶及票據的管理需求</li>
            <li>中文化介面</li>
            <li>符合 Oracle Application Coding Standard 規範</li>
            <li>與 Oracle Financial Application 完整整合</li>
            <li>具兌現、對帳功能，可表現會計帳與銀行實際異動的差異</li>
            <li>依權限切割作業，符合未來權限控管需要</li>
            <li>提供三個子功能 – 銀行帳戶管理、應付票據管理、應收票據管理</li>
            <li>具銀行轉帳媒體介面，可處理電子銀行資料</li>
          </ul>
      <figure class="text-center">
        <img src="/img/product/lt/nm.png" alt="NM : Notes Management 票據管理系統" class="img-fluid">
      </figure>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">GIB : Goods in Bond 保稅管理系統</h2><hr>
          <ul class="check">
            <li>完全整合 Oracle ERP INV / BOM / WIP / OM</li>
            <li>Base on Oracle ERP，使用標準 AOL</li>
            <li>與 ERP 資料同步，確保資料一致性</li>
            <li>料件保稅區間參數化彈性設定</li>
            <li>折合試算及彈性調整 BOM，達到節稅效果</li>
            <li>多項系統自動即時警示功能</li>
            <li>配合法規具有多種彈性設定可供選擇</li>
            <li>智慧型系統，減少人為輸入降低成本</li>
            <li>簡化作業流程</li>
          </ul>
      <figure class="text-center">
        <img width="760" height="363" loading="lazy" src="/img/product/lt/gib.png" alt="保稅系統解決方案藍圖" class="img-fluid">
      </figure>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">十號公報存貨管理系統</h2><hr>
      <ul class="check">
        <li>適用不同版本 Oracle ERP（R11i ~ R12）</li>
        <li>提供符合十號公報之財務 LCM 報表需求</li>
        <li>LCM 報表可轉換成多種格式（Excel、PDF 等）</li>
        <li>資料預存易供擴充調整成本及庫存等報表及維護查詢</li>
        <li>參數化設定，彈性配合會計師調整</li>
        <li>存貨跌價損失方案試算</li>
        <li>用 ERP 的設定功能，輕鬆設定，簡單上手</li>
      </ul>
      <figure class="text-center">
        <img src="/img/product/lt/10.png" alt="十號公報系統關聯圖" class="img-fluid">
      </figure>
    </div>
  </section>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/product-lt.js?v=2021" defer></script>
</body>
</html>

