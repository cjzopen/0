<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$investor_db = "sqlite:/sites/global/investor.db";
$str=null;
try {
  $db = new PDO($investor_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}

$query = sprintf("SELECT year, quarter, filename FROM finances_ifrs ORDER BY year DESC, quarter ASC");
$rs = $db->query($query)->fetchAll();
foreach ($rs as $row) {
  $years_ifrs[] = $row['year'];
  $data_ifrs[$row['year']][$row['quarter']] = $row['filename'];
}
$years_ifrs = array_values(array_unique($years_ifrs));

$query = "SELECT year, quarter, filename FROM finances WHERE merge='0' ORDER BY year DESC, quarter ASC";
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
  $years[] = $row['year'];
  $data[$row['year']][$row['quarter']] = $row['filename'];
}
$years = array_values(array_unique($years));

$query = "SELECT year, quarter, filename FROM finances WHERE merge='1' ORDER BY year DESC, quarter ASC";
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
  $years_m[] = $row['year'];
  $data_m[$row['year']][$row['quarter']] = $row['filename'];
}
$years_m = array_values(array_unique($years_m));

$rs = null;
$db = null;

$page['title']='財務報表 | 資通電腦';
$page['description']='資通電腦財務報表資訊';
$page['canonical']='https://www.ares.com.tw/investor-financial/';
$page['css']=array('/css/investor.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include($_SERVER['DOCUMENT_ROOT'].'/template/investor-banner.php');
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
            <a href="" itemprop="item"><span itemprop="name">財務報表</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
<?php
$investor = 'financial';
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-list.php');
?>
        <div class="col-12 col-md-9">
            <section class="financial">
              <h2 class="text-left" id="IFRSs">採 IFRSs 後財務報表</h2>
              <hr class="d-inline-block">
              <h4 class="text-left">財務報表</h4>
              <table class="table-bordered table-striped text-center">
                <tr>
                  <th rowspan="2" scope="col" class="bg-blue4"></th>
                  <th rowspan="2" scope="col" class="bg-blue4 text-center">第一季</th>
                  <th rowspan="2" scope="col" class="bg-blue4 text-center">第二季</th>
                  <th rowspan="2" scope="col" class="bg-blue4 text-center">第三季</th>
                  <th colspan="2" scope="col" class="bg-blue4 text-center">第四季</th>
                </tr>
                <tr>
                  <th scope="col" class="bg-blue4 text-center">合併</th>
                  <th scope="col" class="bg-blue4 text-center">個體</th>
                </tr>
<?php
foreach ($years_ifrs as $row) {
  $class = ($row&1) ? "" : " class=\"alt_row\"";
  echo "<tr{$class}>\n";
  echo "<th scope=\"row\" class=\"bg-blue4\">{$row}</th>\n";
  for ($i=1; $i<5; $i++) {
    if (isset($data_ifrs[$row][$i])) {
      $fn = "/files/pdf/{$data_ifrs[$row][$i]}";
      echo "<td><a href=\"{$fn}\" rel=\"dl\">PDF</a></td>\n";
    } else {
      echo "<td></td>\n";
    }
  }
  if (isset($data_ifrs[$row]['4i'])) {
    $fn = "/files/pdf/{$data_ifrs[$row]['4i']}";
    echo "<td><a href=\"{$fn}\" rel=\"dl\">PDF</a></td>\n";
  } else {
    echo "<td></td>\n";
  }
  echo "</tr>\n";
}
?>
              </table>
            </section>
            <section class="financial">
              <h2 class="text-left" id="noIFRSs">採 IFRSs 前財務報表</h2>
              <hr class="d-inline-block">
              <div class="row">
                <div class="col-12 col-md-6 mb-4">
                  <h4 class="text-left">母公司財務報表</h4>
                  <table class="table table-bordered table-striped text-center">
                    <tr>
                      <th scope="col" class="bg-blue4"></th>
                      <th scope="col" class="bg-blue4 text-center">第一季</th>
                      <th scope="col" class="bg-blue4 text-center">第二季</th>
                      <th scope="col" class="bg-blue4 text-center">第三季</th>
                      <th scope="col" class="bg-blue4 text-center">第四季</th>
                    </tr>
<?php
foreach ($years as $row) {
  $class = ($row&1) ? "" : " class=\"alt_row\"";
  echo "<tr{$class}>\n";
  echo "<th scope=\"row\" class=\"bg-blue4\">{$row}</th>\n";
  for ($i=1; $i<5; $i++) {
    if (isset($data[$row][$i])) {
      $fn = "/files/pdf/{$data[$row][$i]}";
      echo "<td><a href=\"{$fn}\" rel=\"dl\">PDF</a></td>\n";
    } else {
      echo "<td></td>\n";
    }
  }
  echo "</tr>\n";
}
?>
                  </table>
                </div>
                <div class="col-12 col-md-6">
                  <h4 class="text-left">母子公司合併財務報表</h4>
                  <table class="table table-bordered table-striped text-center">
                    <tr>
                      <th scope="col" class="bg-blue4"></th>
                      <th scope="col" class="bg-blue4 text-center">第一季</th>
                      <th scope="col" class="bg-blue4 text-center">第二季</th>
                      <th scope="col" class="bg-blue4 text-center">第三季</th>
                      <th scope="col" class="bg-blue4 text-center">第四季</th>
                    </tr>
<?php
foreach ($years_m as $row) {
  $class = ($row&1) ? "" : " class=\"alt_row\"";
  echo "<tr{$class}>\n";
  echo "<th scope=\"row\" class=\"bg-blue4\">{$row}</th>\n";
  for ($i=1; $i<5; $i++) {
    if (isset($data_m[$row][$i])) {
      $fn = "/files/pdf/{$data_m[$row][$i]}";
      echo "<td><a href=\"{$fn}\" rel=\"dl\">PDF</a></td>\n";
    } else {
      echo "<td></td>\n";
    }
  }
  echo "</tr>\n";
}
?>
                  </table>
                </div>
              </div>
            </section>
        </div>
    </div>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
// $(function(){
//   $('#investor-list a[href*=\\#]').on('click', function(event){
//     event.preventDefault();
//     $('html,body').animate({scrollTop:$(decodeURIComponent(this.hash)).offset().top - 40}, 250);
//   });
// })
</script>
</body>
</html>

