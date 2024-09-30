<?php
require('ip.php');
$ares = "sqlite:/sites/global/investor.db";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<style>
select{
  -webkit-appearance: menulist;
  -moz-appearance: menulist;
}
.table{
  margin:16px auto;
}
.table td:first-child{
  width: 120px;
  padding:0!important;
}
td input,textarea{
  width: 100%;
  padding:.5rem;
  font-size: 1.25rem;
}
.flex{
  display:flex;
}
</style>
<body>
<div id="all">
  <br>
  <section class="container-fluid">
    <a href="./" class="btn btn-info">返回上一頁</a>
    <a href="https://www.ares.com.tw/investor-events/" class="btn btn-info">重大訊息</a>
    <h2 class="text-center">重大訊息</h2>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <br><br>
        <form id="contact_form" name="contact_form" method="post" action="">
          <table class="table table-bordered table-striped text-center">
            <tr>
              <td>序號</td>
              <td><input type="text" id="sn" name="sn"></td>
            </tr>
            <tr>
              <td>發言日期</td>
              <td><input type="text" id="date" name="date" placeholder="yyyy-mm-dd"></td>
            </tr>
            <tr>
              <td>發言時間</td>
              <td><input type="text" id="time" name="time" placeholder="HH:MM:SS"></td>
            </tr>
            <tr>
              <td>發言人</td>
              <td><input type="text" id="name" name="name" value="林聖懿"></td>
            </tr>
            <tr>
              <td>發言人職稱</td>
              <td><input type="text" id="title" name="title" value="總經理"></td>
            </tr>
            <tr>
              <td>發言人電話</td>
              <td><input type="text" id="phone" name="phone" value="(02)25221351"></td>
            </tr>
            <tr>
              <td>主旨</td>
              <td><input type="text" id="headline" name="headline"></td>
            </tr>
            <tr>
              <td>符合條款</td>
              <td><input type="text" id="article" name="article"></td>
            </tr>
            <tr style="border-bottom: 2px solid;">
              <td>事實發生日</td>
              <td><input type="text" id="occur" name="occur" placeholder="yyyy-mm-dd"></td>
            </tr>
            <tr>
              <td>說明</td>
              <td><textarea type="text" id="content" name="content" rows="10"></textarea></td>
            </tr>
          </table>
          <input type="hidden" id="action" name="action" value="重大訊息">
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
// function forCheck(){
//   var input=new Array();
//   var k =$("form input[type=text]").each(function(){
//      input.push($(this).val());
//   });
//   console.log(input.every(function(e){
//     return e.length>=1;
//   }))
//    return false;
// }
// $('button').on('mouseover',function(){
//    forCheck()
// })
function formCheck(){
  var isPass = true;
  var msg = $('#msg');
  msg.text('');
  msg.css('color','red');
  var input=new Array();
  input.push($('#content').val());
  $("form input[type=text]").each(function(){
     input.push($(this).val());
  });
  if(input.every(function(e){
    return e.length>=1;
  })){

  }else{
    isPass = false;
    msg.text('有欄位未填');
  }
  if(isPass){
    // var budget = contact_form.budget.value;
    var user = {
    //   month : contact_form.month.value,
    //   this_year : contact_form.this_year.value,
    //   last_year : contact_form.last_year.value,
    //   diff : contact_form.diff.value,
    //   percent : contact_form.percent.value,
    //   this_total : contact_form.this_total.value,
    //   last_total : contact_form.last_total.value,
    //   diff_total : contact_form.diff_total.value,
    //   percent_total : contact_form.percent_total.value,
    //   note : contact_form.note.value,
      action:'重大訊息',
      title: contact_form.headline.value,
      user_name:'<?= @$_SESSION['www-ares'] ?>'
    };

    $.ajax({
      type: "POST",
      url: "investorevent_post.php",
      data: decodeURIComponent($('#contact_form').serialize(),true),
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
</script>
</body>
</html>