<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HR系統專業顧問服務,提供全方位解決方案';
$page['description'] = '資通 HR 人資系統擁有專業顧問服務，累積 500 家以上大廠管理經驗，顧問能依不同產業客戶設計企業內部流程，協助企業人事管理流程再造，快速回收建置人資系統的成本投資！';
$page['keywords'] = '人資系統,HR,專業顧問服務,人事流程規劃,遠端偵測服務';
$canonical='https://hcp.ares.com.tw/products/';
$page['css']=array('/css/product.css','/lib/fancybox3/jquery.fancybox.min.css');
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/modules/consultant-service'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="module">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('../_banner.php');
include('_breadcrumb.php');
?>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">專業顧問服務</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </aside>
    <section>
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">人資系統專業顧問服務</h1>
            <p>資通電腦累積 500 家以上大廠管理經驗，能傳承給客戶更優質的人資系統服務效益；系統具備 62 個最佳人事管理實務流程，搭配 HCP 專業顧問為客戶設計的企業內部流程，無須額外顧問費用，即能享有與國際大廠相同的作業流程；更透過專屬的 ARES’S R3M 導入手法，協助企業人事管理流程再造，快速回收建置人資系統的成本投資！</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <figure class="text-center mt-3">
              <a href="/img/products/modules/consultant-service-structure.png" data-fancybox>
                <img class="img-fluid" src="/img/products/modules/consultant-service-structure-m.png" srcset="/img/products/modules/consultant-service-structure-m.png 1x,/img/products/modules/consultant-service-structure.png 2x" alt="Rapid 快速且正確的系統導入與建置、Reduce 掌握時程並兼顧系統導入品質、Return 快速回收企業 HCP 建置的投資">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">不只人資系統，顧問服務讓您後勤沒煩惱</h2>
        <hr>
        <ul class="row">
<?php
$lists =array(
  array(
    'title' => '人事系統客服網站及服務平台',
    'text' => '提供客服網站及客戶服務平台（Mantis），不僅能即時掌控系統問題，也可讓使用者直接在服務平台上詢問問題，加速系統使用問題排除，便利又有效率！'
  ),
  array(
    'title' => '日常問題諮詢',
    'text' => '提供 4 X 8 系統問題排除電話服務，上班時間中 4 小時內回應，並於 8 小時內提供解決系統問題方案。'
  ),
  array(
    'title' => '遠端偵測系統服務',
    'text' => '提供遠端偵測系統服務，可協助使用者迅速查明問題原因；HR 系統使用中發生故障時，除了提供遠程偵測之外，並於上班時間視情況安排到場（8 小時內）的修復服務。'
  ),
  array(
    'title' => '定期客戶系統回訪',
    'text' => '每年安排客戶系統回訪，並實施滿意度調查與現場問題調查及解決方案。'
  ),
  array(
    'title' => '定期系統使用教育訓練課程',
    'text' => '定期舉辦 MIS 及 HR 人員訓練課程，協助使用者熟悉產品操作與應用。'
  ),
  array(
    'title' => '其他系統服務',
    'text' => '<ul class="disc"><li>資料備份及還原服務</li><li>每月定期產品更新升級</li><li>每年定期提供 1 次系統後台性能優化服務</li><li>每年免費提供 Alert 警示及報表各 1 支</li><li>當客戶端的公司制度變更時，可透過彈性參數設定，自行輕鬆修改。</li><li>結薪期間發生緊急情況，資通能第一時間配合解決，協助客戶排除系統問題。</li></ul>'
  )
);
foreach ($lists as $key) {
?>
          <li class="col-12 col-md-6">
            <ol class="disc">
              <li>
                <h3 class="main-color h4"><?= $key['title'] ?></h3>
<?php
if (strpos($key['text'], '<li>') !== false) {
  echo $key['text'];
}else{
  echo '<p>'.$key['text'].'</p>';
}
?>
              </li>
            </ol>
          </li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
</body>
</html>