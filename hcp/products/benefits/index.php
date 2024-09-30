<?php
$url='https://hcp.ares.com.tw/products/features/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);

exit;
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '提供技術移轉,企業輕鬆維運的HR系統';
$page['description'] = '除了幫助企業導入HR系統之外，同時也提供各項系統規劃及資訊委外服務，提昇企業營運效能。';
$canonical='https://hcp.ares.com.tw/products/benefits/';
$hreflang=array(
  array(
    'lang' => 'zh-CN',
    'url' => 'https://www.areschina.com/hcp/products/benefits/'
  ),
  array(
    'lang' => 'en',
    'url' => 'https://hcp.ares.com.tw/en/products/benefits/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include_once '../_banner.php';
include_once '../modules/_breadcrumb.php';
?>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">產品效益</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </aside>
<?php
include_once '../_menu.php';
?>
    <section>
      <div class="container">
        <div class="row flex-md-row-reverse">
          <div class="col-12 col-sm-12 col-md-6">
            <h1 class="dline">全方位 HR 技術與服務交付</h1>
            <p>資通 HCP 人資系統能提供企業完整的導入與技術移轉，有最佳的實務經驗，能依據企業需求滿足各項系統規劃或資訊委外…等全方位服務，可提昇企業營運效能，加速 HR 人員後續接手維運系統的效率！資通電腦為國內第一家上市軟體公司，提供跨國界、跨地域的資訊服務，擁有豐富經驗的專業顧問群，以深厚的專業技術根基及嚴謹的內控機制，成為系統導入成功的絕佳保障。</p>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <br>
            <img data-src="/img/products/benefits/benefit-bg-m.png" data-srcset="/img/products/benefits/benefit-bg-m.png 1x,/img/products/benefits/benefit-bg.png 2x" alt="*" class="d-none d-md-block m-auto img-fluid lazyload">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center mb-0">您最在意的人資系統服務 我們都準備好了</h2>
        <hr>
        <div class="row justify-content-center">
<?php
$lists =array(
  array(
    'title' => '不藏私<br>全面性技術移轉與服務',
    'text' => '系統原始碼交付，並提供人資基礎架構規劃服務'
  ),
  array(
    'title' => '高價值<br>專業顧問群導入服務',
    'text' => '協助企業規劃最佳人事管理機制，提升整體營運效能'
  ),
  array(
    'title' => '重承諾<br>產品負責人親自督導',
    'text' => '專案負責人親自參與指導委員會，並定期督導進度'
  ),
  array(
    'title' => '好放心<br>上市軟體公司穩健營運',
    'text' => '已穩健營運 '.AGE.' 年，能提供跨國界、跨地域服務'
  ),
  array(
    'title' => '高專業度<br>具備豐富系統導入經驗',
    'text' => '擁有各領域人資系統實務導入經驗，可嚴控專案品質'
  )
);
foreach ($lists as $key => $val) {
?>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="text-center">
              <img class="lazyload" data-src="/img/products/benefits/benefit-icon-<?= $key+1 ?>.svg" alt="*">
              <h3 class="main-color h4 mt-2"><?= $lists[$key]['title'] ?></h3>
              <p><?= $lists[$key]['text'] ?></p>
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