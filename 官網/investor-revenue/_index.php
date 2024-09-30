<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$investor_db = "sqlite:/sites/global/investor.db";
try {
  $db = new PDO($investor_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}
$rs = $db->query("SELECT * FROM incomes_ifrs ORDER BY month DESC");
$row = $rs->fetch(PDO::FETCH_ASSOC);
// foreach ($rs as $row) {
//   $month[] = $row['month'];
// }
$last = $row['month'];
$last_year = substr($last,0,4);
$last_month = substr($last,5,7);
$db=null;
$rs=null;

$page['title']='營收報告 | 資通電腦';
$page['description']='資通電腦股份有限公司每年每月之營業收入與增減幅度相關資訊。';
$page['canonical']='https://www.ares.com.tw/investor-revenue/';
$page['css']=array('/css/investor.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');

include($_SERVER['DOCUMENT_ROOT'].'/strac/investor-banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb">
      <div class="container">
        <ul class="row">
           
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="/"  itemprop="url"><span itemprop="title">首頁</span></a>
          </li>
          <li><span>投資人專區</span></li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="" itemprop="url"><span itemprop="title">營收報告</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="flex-box">
<?php
$investor = 'revenue';
include($_SERVER['DOCUMENT_ROOT'].'/strac/investor-list.php');
?>
        <div class="col-xs-12 col-sm-12 col-md-9">
          <div class="row">
            <section class="revenue">
    <div class="container-fluid">
    <h2 class="text-left">營業收入資訊</h2>
    <hr class="ib">
    <input type="hidden" id="max-year" value="<?= $last_year?>">
    <input type="hidden" id="max-month" value="<?= $last_month?>">
      <div>
        <div class="select">
          <span class="caret"></span>
          <select name="month-select" id="month-select">
<?php
for($i=$last_year;$i>='1997';$i--){
  for($j='12';$j>='01';$j--){
    echo '<option value="'.$i.'-'.str_pad($j, 2, "0", STR_PAD_LEFT).'">'.$i.'-'.str_pad($j, 2, "0", STR_PAD_LEFT).'</option>';
  }
}
?>
          </select>
        </div>
      </div>
      <div id="data" style="min-height: 435px">
        <table class="table table-bordered table-striped text-center">
          <caption> (單位：新台幣仟元)</caption>
          <tr>
            <th scope="col" class="info-bg text-center" id="month"><?= $row['month']; ?></th>
            <th scope="col" class="info-bg text-center">營業收入淨額</th>
          </tr>
          <tr>
            <th scope="row" class="info-bg text-center">本月</th>
            <td id="this_year"><?= $row['this_year']; ?></td>
          </tr>
          <tr class="alt_row">
            <th scope="row" class="info-bg text-center">去年同期</th>
            <td id="last_year"><?= $row['last_year']; ?></td>
          </tr>
          <tr>
            <th scope="row" class="info-bg text-center">增減金額</th>
            <td id="diff"><?= $row['diff']; ?></td>
          </tr>
          <tr class="alt_row">
            <th scope="row" class="info-bg text-center">增減百分比</th>
            <td id="percent"><?= $row['percent']; ?> %</td>
          </tr>
          <tr style="border-top:2px solid #4479bc">
            <th scope="row" class="info-bg text-center">本年累計</th>
            <td id="this_total"><?= $row['this_total']; ?></td>
          </tr>
          <tr class="alt_row">
            <th scope="row" class="info-bg text-center">去年累計</th>
            <td id="last_total"><?= $row['last_total']; ?></td>
          </tr>
          <tr>
            <th scope="row" class="info-bg text-center">增減金額</th>
            <td id="diff_total"><?= $row['diff_total']; ?></td>
          </tr>
          <tr class="alt_row">
            <th scope="row" class="info-bg text-center">增減百分比</th>
            <td id="percent_total"><?= $row['percent_total']; ?> %</td>
          </tr>
          <tr>
            <th scope="row" class="info-bg text-center">備註</th>
            <td id="note"><textarea name="investor-revenue-note" id="investor-revenue-note" rows="3" readonly="readonly"><?= $row['note']; ?></textarea></td>
          </tr>
        </table>
      </div>
      <div id="bar"></div>
      <br>
      <span>相關連結：<cite><a class="main-color" href="http://mops.twse.com.tw/mops/web/t05st10_ifrs" rel="external">公開資訊觀測站</a></cite></span>
    </div>
  </section>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<script src="/js/main2016.js"></script>
<script>
(function(){
  var maxMonth = $('#max-month').val();
  if(maxMonth < 12){
    var del = 12 - (maxMonth % 12);
    $('#month-select option').slice(0,del).remove()
  }

  $('#month-select').change(function(){
    var user = {
      data : $('#month-select').val()
    }
    $.ajax({
      type: "POST",
      url: "post.php",
      data: user,
      cache:false,
      beforeSend: function(){
        $('#data').html('<div class="text-center"><i class="fa fa-spinner fa-span fa-2x fa-fw"></i><span>Loading...</span></div>')
      }
    }).done(function(data){
      // console.log(data)
      $('#data').html(data);
    }).fail(function(jqXHR, status, errorThrown) {
      console.log('header load Error: ' + errorThrown)
      console.log('Status: ' + status)
      console.dir(jqXHR)
      var errMsg;
      if (jqXHR.status === 0) {
        errMsg = 'Not connect./n Verify Network.';
      } else if (jqXHR.status == 404) {
        errMsg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
        errMsg = 'Internal Server Error [500].';
      } else if (status === 'parsererror') {
        errMsg = 'Requested JSON parse failed.';
      } else if (status === 'timeout') {
        errMsg = 'Time out error.';
      } else if (status === 'abort') {
        errMsg = 'Ajax request aborted.';
      } else {
        errMsg = 'Uncaught Error./n' + jqXHR.responseText;
      }
      $('#data').text(errMsg)
    }).always(function(){
    });
  })
})();
</script>
</body>

</html>

