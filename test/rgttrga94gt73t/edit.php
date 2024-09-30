<?php
try{
  $db = new PDO('sqlite:/sites/global/success-case.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $msg['db'] = true;
}catch (PDOException $e) {
  $msg['db'] = false;
  $log = $e->getMessage();
}
$query = "SELECT * FROM `case` ORDER BY `date` DESC";
$rs = $db->query($query)->fetchAll();
$_html = '';
foreach ($rs as $row) {
  $_html = $_html.'<tr><td><input type="radio" class="table-edit"></td><td><input type="radio" class="table-send"></td><td class="d-none table-uid">'.$row['uid'].'</td><td class="table-date">'.$row['date'].'</td><td class="table-company">'.$row['company'].'</td><td class="d-none table-category">'.$row['category'].'</td><td class="d-none table-name">'.$row['name'].'</td><td class="d-none table-link">'.$row['link'].'</td><td class="d-none table-content">'.$row['content'].'</td></tr>';
}
$rs=null;
$db=null;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://www.ares.com.tw/lib/bootstrap/bootstrap4.min.css">
</head>
<body>
<style>
#all{
  width:min(100%,1200px);
  margin:0 auto;
}
label{
  white-space: nowrap;
  flex-shrink: 0;
}
</style>
<div id="all" class="mt-3">
  <div class="d-flex">
<?php
include_once 'menu.php';
include_once 'form.php';
?>
    <div class="w-100" id="send-form">
    <div class="d-flex mb-3">
        <label for="send-title">信件標題：</label>
        <input class="w-100" type="text" id="send-title">
      </div>
      <div class="d-flex mb-3">
        <label for="send-from">寄件人：</label>
        <input class="w-100" type="text" id="send-from" list="send-from-list">
        <datalist id="send-from-list">
          <option value="ouying"></option>
        </datalist>
        <div>@ares.com.tw</div>
      </div>
      <div class="d-flex mb-3">
        <label for="send-to">收信人：</label>
        <input class="w-100" type="text" id="send-to" list="send-to-list">
        <datalist id="send-to-list">
          <option value="ting1890"></option>
          <option value="M1_ALL"></option>
          <option value="ARES_ALL"></option>
        </datalist>
        <div>@ares.com.tw</div>
      </div>
      <div class="text-right">
        <div class="btn btn-success" id="send-post">確定送出</div>
      </div>
    </div>
  </div>
  <table class="table table-hover" id="table">
    <thead>
      <tr>
        <th>修改</th>
        <th>寄信</th>
        <th class="d-none"></th>
        <th>日期</th>
        <th>客戶</th>
        <th class="d-none"></th>
        <th class="d-none"></th>
        <th class="d-none"></th>
        <th class="d-none"></th>
      </tr>
    </thead>
    <tbody>
<?= $_html ?>
    </tbody>
  </table>
</div>
<script src="https://www.ares.com.tw/lib/jquery.js"></script>
<script>
var uid,date,category,name,company,link,content;
$('#form,#send-form').hide();
$('#table input').on('change',function(){
  var $this = $(this).closest('tr');
  uid = $this.find('.table-uid').text();
  date = $this.find('.table-date').text();
  category = $this.find('.table-category').text();
  name = $this.find('.table-name').text();
  company = $this.find('.table-company').text();
  link = $this.find('.table-link').text();
  content = $this.find('.table-content').html();
  $('#table').hide();
  if($(this).hasClass('table-edit')){
    $('#input-date').val(date);
    $('#category').val(category);
    $('#name').val(name);
    $('#company').val(company);
    $('#link').val(link);
    $('#content').val(content);
    $('#form').show();
  }
  if($(this).hasClass('table-send')){
    $('#send-title').val(`捷報：賀 ${category} 小組同仁${name}取得${company}合約`);
    $('#send-form').show();
  }
});
document.querySelector('#post').addEventListener('click',()=>{
  var post_data = {
    uid: uid,
    date: $('#input-date').val(),
    category: $('#category').val(),
    name: $('#name').val(),
    company: $('#company').val(),
    link: $('#link').val(),
    content: $('#content').val(),
  };
  console.log(post_data);
  $.ajax({
    type: "POST",
    url: "_editpost.php",
    data: post_data,
    beforeSend: function(){
      console.log('bef');
      var btn = $('#post');
      btn.css({'opacity':'0.5','pointer-events':'none'})
      btn.text('送出中')
    }
  }).done(function(data){
    console.log(data);
    // var sMsg = JSON.parse(data);
    var sMsg = data;
    if(sMsg['send']=='exec'){
      alert('送出成功');
      history.go(0);
        // $("#contact_form")[0].reset();
    }else{
      alert(sMsg['send']);
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
    alert(errMsg);
    console.log('fail');
  }).always(function(){
    var btn = $('#post');
    btn.css({'opacity':'1','pointer-events':'all'})
    btn.text('確定送出');
    console.log('always');
  });
});
$('#send-post').on('click',function(){
  var send_data = {
    send_title: $('#send-title').val(),
    send_from: $('#send-from').val(),
    send_to: $('#send-to').val(),
    category: category,
    name: name,
    company: company,
    link: link,
    content: content,
  };
  console.log(send_data);
  $.ajax({
    type: "POST",
    url: "_sendpost.php",
    data: send_data,
    beforeSend: function(){
      var btn = $('#send-post');
      btn.css({'opacity':'0.5','pointer-events':'none'})
      btn.text('送出中')
    }
  }).done(function(data){
    // var sMsg = JSON.parse(data);
    var sMsg = data;
    console.log(sMsg)
    if(sMsg['send']=='exec'){
      alert('送出成功');
        // $("#contact_form")[0].reset();
    }else{
      alert(sMsg['send']);
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
    alert(errMsg)
  }).always(function(){
    var btn = $('#send-post');
    btn.css({'opacity':'1','pointer-events':'all'})
    btn.text('確定送出')
  });
});
</script>
</body>
</html>