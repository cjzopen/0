<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = 'HCP成功案例';
$page['description'] = '來看看各行各業對HCP人事系統的回饋。讓您對我們更有興趣';
$canonical='https://hcp.ares.com.tw/best-practices/';
// $hreflang = 'https://hcp.ares.com.tw/products/modules/';
$page['css']=array('/css/best-practices.css');
$another='<meta name="robots" content="noindex">';
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
include('_top.php');
?>
      </ol>
    </div>
    <section>
      <div class="container text-center">
        <h1 class="mb-0">成功案例</h1>
        <hr>
        <ul class="text-center mb-0">
          <li><a href="high-tech">高科技業</a></li>
          <li><a href="manufacturing">製造業</a></li>
          <li><a href="circulation-service-other">流通服務業/其他</a></li>
          <li><a href="gov">政府單位</a></li>
        </ul>
      </div>
    </section>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>