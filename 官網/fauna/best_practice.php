<?php
require('ip.php');
$ares = "sqlite:/example/global/events.db";
try{
  $db = new PDO($ares);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $msg['db'] = true;
}catch (PDOException $e) {
  $msg['db'] = false;
  $log = $e->getMessage();
}
$query = "SELECT * FROM news ORDER BY id DESC";
$rs = $db->query($query)->fetchAll();
$_html = '';
foreach ($rs as $row) {
  $_html = $_html.'<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['date'].'</td><td>'.$row['product'].'</td><td style="display: none">'.$row['redirect'].'</td><td style="display: none">'.$row['news_name'].'</td></tr>';
}
$rs=null;
$db=null;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title>成功案例</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<style>
select{
  -webkit-appearance: menulist;
  -moz-appearance: menulist;
}
.table tbody tr{
  cursor:pointer;
}
.table tbody tr:hover *{
  background-color:#2858aa;
  color:#fff;
}
</style>
<body>
<div id="all">
  <br>
  <section class="container-fluid">
    <a href="./" class="btn btn-info">返回上一頁</a>
    <h2 class="text-center">點選新增至成功案例</h2>
    <table class="table table-hover table-bordered">
      <thead>
      <tr>
        <th>id</th>
        <th>標題</th>
        <th>日期</th>
        <th>產品</th>
        <th style="display: none">外連連結</th>
        <th style="display: none">自訂連結</th>
      </tr>
      </thead>
      <tbody>
    <?php echo $_html; ?>
      </tbody>
    </table>
  </section>
  <section class="blue-bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <br><br>
        <form id="contact_form" name="contact_form" method="post" action="">
          <br>
          <div class="input-group">
            <select id="product-select" class="form-control">
              <option value="">產品類別 (找不到的話自己填)</option>
<?php include('all_products.php'); ?>
            </select>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">產品類別( 注意大小寫 )</span>
            <input type="text" id="product" name="product" class="form-control" placeholder="沒有就留白"  aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">*對應的文章 id</span>
            <input type="text" id="news_id" name="news_id" class="form-control" aria-describedby="basic-addon2">
          </div>
          <br>
          <div class="padding-vc text-center ib" style="vertical-align:top">
            <button type="submit" class="button btn btn-danger" onclick="return formCheck();"><span>送出</span></button>
          </div>
        </form>
        <br>
        <p id="msg"></p>
        </div>
        <br>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>

</div>
<script>
$('section.blue-bg').hide();
var $_id = '';
var $array = [];
var title;
$('.table tbody tr').click(function(){
  $('.table').hide();
  $(this).find('td').each(function(){
    $array.push($(this).html())
  })
  $_id = $array[0];
  title = $array[1];
  $('#product').val($array[3]);
  $('#news_id').val($_id);
  $('section.blue-bg').show()
})

function formCheck(){
  var isPass = true;
  var msg = $('#msg');
  msg.text('');
  msg.css('color','red');
  if(contact_form.news_id.value.length<1){
    $('#news_id').css('border-color','red');
    isPass = false;
  }else{
    $('#news_id').css('border-color','#5cb85c')
  }
  if(isPass){
    // var budget = contact_form.budget.value;
    var user = {
      product : contact_form.product.value,
      title : title,
      news_id : contact_form.news_id.value,
      action:'best_practice',
      user_name:'<?= @$_SESSION['www-ares'] ?>'
    };

    $.ajax({
      type: "POST",
      url: "best_practice_post.php",
      data: user,
      beforeSend: function(){
        var btn = $('#contact_form button');
        btn.css({'opacity':'0.5','pointer-events':'none'})
        btn.text('送出中')
      }
    }).done(function(data){
      var sMsg = data;
      console.log(data)
      if(data['send']==true){
        msg.text('送出成功');
        msg.css('color','#5cb85c')
        $("#contact_form")[0].reset();
        $.ajax({
          type: "POST",
          url: "log_post.php",
          data: user,
          cache:false
        });
      }

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
      msg.text(errMsg)
    }).always(function(){
      var btn = $('#contact_form button');
      btn.css({'opacity':'1','pointer-events':'all'})
      btn.text('送出')
    });
  }

  return false;
};
$('#product-select').change(function(){
  $('#product').val($(this).val());
})
</script>
</body>
</html>