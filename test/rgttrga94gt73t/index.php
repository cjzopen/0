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
  </div>
</div>
<script src="https://www.ares.com.tw/lib/jquery.js"></script>
<script>
var d = new Date();
var today = d.getFullYear() + '-' + ('0'+(d.getMonth()+1)).substr(-2) + '-' + ('0'+ d.getDate()).substr(-2);
document.querySelector('#input-date').value = today;
document.querySelector('#post').addEventListener('click',()=>{
  var post_data = {
    date: $('#input-date').val(),
    category: $('#category').val(),
    name: $('#name').val(),
    company: $('#company').val(),
    link: $('#link').val(),
    content: $('#content').val(),
  };
  $.ajax({
    type: "POST",
    url: "_addpost.php",
    data: post_data,
    beforeSend: function(){
      var btn = $('#post');
      btn.css({'opacity':'0.5','pointer-events':'none'})
      btn.text('送出中')
    }
  }).done(function(data){
    console.log(data);
    var sMsg = data;
    // var sMsg = JSON.parse(data);
    console.log(sMsg);
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
    var btn = $('#post');
    btn.css({'opacity':'1','pointer-events':'all'})
    btn.text('確定送出')
  });
})
</script>
</body>
</html>