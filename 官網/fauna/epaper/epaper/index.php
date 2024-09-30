<!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
  <title>電子報</title>
  <meta name="description" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>td{min-width:100px;}</style>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
<div id="all">
  <br>
  <nav class="container-fluid">
    <!-- <a class="btn btn-info" href="../version/" role="button">版本</a> -->
    <!-- <a class="btn btn-info" href="" role="button">電子報</a> -->
    <ol class="breadcrumb">
      <li><a href="/host/">host</a></li>
      <li><a href="/host/epaper/">epaper</a></li>
      <li class="active">add</li>
    </ol>
  </nav>
  <section class="blue-bg">
    <div class="inside container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <br><br>
        <form id="contact_form" name="contact_form" method="post" action="">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">*標題</span>
            <input type="text" id="title" name="title" class="form-control" placeholder="資安法拚三讀" aria-describedby="basic-addon2">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon4">*date</span>
            <input type="text" id="date" name="date" class="form-control" placeholder="2017-06" aria-describedby="basic-addon4">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">*連結</span>
            <input type="text" id="href" name="href" class="form-control" placeholder="https://marketing.ares.com.tw/dm/newsletter-2017-06-OSC/" aria-describedby="basic-addon3">
            <p class="form-control">範例：https://marketing.ares.com.tw/dm/newsletter-2017-06-OSC/</p>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon5">*圖片</span>
            <input type="text" id="img" name="img" class="form-control" placeholder="/img/epaper/201706.png  or data-url" aria-describedby="basic-addon5">
            <p class="form-control">範例：/img/epaper/201706.png</p>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon7">*摘要</span>
            <textarea rows="6" id="summary" name="summary" class="form-control" placeholder="" aria-describedby="basic-addon7"></textarea>
          </div>
          <br>
          <div class="padding-vc text-center ib">
            <button type="submit" class="button button--ujarak button--border-medium button--round-s button--text-thin button--size green-bg fff-color" onclick="return formCheck();"><span>送出</span></button>
          </div>
        </form>
        <br>
        <p id="msg"></p>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- <script src="js/check.js"></script> -->
<script>
function formCheck(){
  // var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  // var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var isPass = true;
  var msg = $('#msg');

  // $('p.danger').hide();

  // $('input,textarea').css('border-width','3px');
  msg.text('');
  msg.css('color','red');

  if(contact_form.title.value.length<1){
    $('#title').css('border-color','red');
    isPass = false;
  }else{
    $('#title').css('border-color','#5cb85c')
  }
  if(contact_form.href.value.length<6){
    $('#href').css('border-color','red');
    isPass = false;
  }else{
    $('#href').css('border-color','#5cb85c')
  }
  if(contact_form.date.value.length!=7){
    $('#date').css('border-color','red');
    isPass = false;
  }else{
    $('#date').css('border-color','#5cb85c')
  }
  if(contact_form.img.value.length<10){
    $('#img').css('border-color','red');
    isPass = false;
  }else{
    $('#img').css('border-color','#5cb85c')
  }
  if(contact_form.summary.value.length<4){
    $('#summary').css('border-color','red');
    isPass = false;
  }else{
    $('#summary').css('border-color','#5cb85c')
  }


  if(isPass){
    var user = {
      title : contact_form.title.value,
      href : contact_form.href.value,
      date : contact_form.date.value,
      summary : contact_form.summary.value,
      img : contact_form.img.value
      // jobTitle : contact_form.jobTitle.value,
      // function : contact_form.function.value
    };

    $.ajax({
      type: "POST",
      url: "post.php",
      data: user,
      beforeSend: function(){
        var btn = $('#contact_form button');
        btn.css({'opacity':'0.5','pointer-events':'none'})
        btn.text('送出中')
      }
    }).done(function(data){
      var sMsg = data;
      console.log(data)
      if(data['send']==true && data['db']==true){
        msg.text('送出成功 '+data['time']);
        msg.css('color','#5cb85c')
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