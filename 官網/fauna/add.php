<?php
require('ip.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title>最新消息</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="/lib/prettyPhoto/css/prettyPhoto.css">
  <link rel="stylesheet" href="/css/main2016.css">
  <link rel="stylesheet" href="/css/events.css?d=20170901">
  <script src="emmet.js"></script>
</head>
<style>
select{
  -webkit-appearance: menulist;
  -moz-appearance: menulist;
}
#content{
  background-color:#515151;
  color:#f1f1f1;
}
</style>
<body>
<div id="all">
  <br>
      <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <a href="./" class="btn btn-info">返回上一頁</a>
        <br><br>
        <form id="contact_form" name="contact_form" method="post" onsubmit="return formCheck();">
          <div class="input-group">
            <select name="qq" id="qq" class="form-control">
              <option value="0">請先選擇文章類別</option>
              <option value="in">一般文章</option>
              <option value="out">外連</option>
            </select>
          </div>
          <br>
          <div class="input-group">
            <select id="product-select" class="form-control" multiple size="40">
              <option value="">產品類別 (找不到的話自己填)</option>
<?php include('all_products.php'); ?>
            </select>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">產品類別(注意大小寫) 逗號改空格</span>
            <input type="text" id="product" name="product" class="form-control" placeholder="沒有就留白"  aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">*標題</span>
            <input type="text" id="title" name="title" class="form-control" placeholder="資安法拚三讀" aria-describedby="basic-addon2">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon4">*date</span>
            <input type="text" id="date" name="date" class="form-control" placeholder="yyyy-mm-dd" aria-describedby="basic-addon4">
          </div>
          <br>
          <div class="input-group outside">
            <span class="input-group-addon" id="basic-addon3">外連連結</span>
            <input type="text" id="href" name="href" class="form-control" placeholder="https://marketing.ares.com.tw/dm/newsletter-2016-08-Oracle/focus" aria-describedby="basic-addon3">
          </div>
          <br>
          <div class="input-group inside">
            <span class="input-group-addon" id="basic-addon5">自訂連結</span>
            <input type="text" id="news_name" name="news_name" class="form-control" placeholder="ArgoERP-Workshop-201705" aria-describedby="basic-addon5">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon6">自訂顯圖</span>
            <input type="text" id="img" name="img" class="form-control" placeholder="/img/2018/photo.jpg" aria-describedby="basic-addon6">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon7">自訂描述</span>
            <input type="text" id="description" name="description" class="form-control" aria-describedby="basic-addon7">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon8">作者</span>
            <input type="text" id="author" name="author" class="form-control" aria-describedby="basic-addon8">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon9">權重</span>
            <input type="text" id="canonical" name="canonical" class="form-control" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon10">en文章連結</span>
            <input type="text" id="en" name="en" class="form-control" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon11">cn文章連結</span>
            <input type="text" id="cn" name="cn" class="form-control" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="">
            <span class="" id="basic-addon12">成功案例？</span>
            <input type="checkbox" id="success_case" name="success_case" class="" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="container-fluid">
            <div class="row">
              <details class="col-xs-12 col-sm-6">
                <summary>三分鐘看問題</summary>
                <div style="border:1px solid #555;">
                客戶名稱： <input type="text" id="threem1"><br>
                描述：
                <textarea style="width: 100%" id="threem2" rows="3"></textarea><br>
                企業挑戰：
                <textarea style="width: 100%" id="threem3" rows="3"></textarea>
                <input style="width: 100%" type="text" id="threem4" placeholder="選擇產品"><br>
                導入效益：
                <textarea style="width: 100%" name="threem5" id="threem5" cols="30" rows="3"><li>每月結帳減少 58.3% 的作業時間</li><li>每月結帳節省 33.3% 的人力成本</li></textarea><br><br>
                <button class="btn btn-primary" type="button" id="threem">加入三分鐘看問題</button>
                </div>
              </details>
              <details class="col-xs-12 col-sm-6">
                <summary>加入圖片 (或複製文章內容範例後修改)</summary>
                <div style="border:1px solid #555;">
                example:
                <p>/img/events/2017/fortify-2017.png</p><br><br>
                <input style="width: 100%" type="text" id="imgsay-1" placeholder="大圖路徑"><br><br>
                <input style="width: 100%" type="text" id="imgsay-2" placeholder="小圖路徑"><br><br>
                <input style="width: 100%" type="text" id="imgsay-3" placeholder="圖說"><br><br>
                <input style="width: 100%" type="text" id="imgsay-4" placeholder="alt"><br><br>
                <button class="btn btn-primary" type="button" id="imgsay">加入圖片</button>
                </div>
              </details>
        </div></div>
          <br>
          <div><span class="emmet-powered" style="font-family: sans-serif;font-size: 11px;color: #0072bc;cursor: pointer;border-bottom: 1px dashed #0072bc;" onclick="emmet.require('textarea').showInfo();">Powered by Emmet</span>
            <p>段落：p+tab , 小標題 h2+tab or h3+tab , 條目 ul.disc>li*n  n為條目數</p>
            <p>禁止使用 ' 和 \</p>
          </div>
          <div class="input-group inside">
            <span class="input-group-addon" id="basic-addon6">文章內容</span>
            <textarea style="font-family: 'courier new';" id="content" name="content" class="form-control" rows="30" aria-describedby="basic-addon6"></textarea>
          </div>
          <br>
          <p>送出前請先看下面的 Preview Result</p>
          <div class="padding-vc text-center ib" style="vertical-align:top">
            <button type="submit" class="button btn btn-danger"><span>送出</span></button>
          </div>
        </form>
        <br>
        <p id="msg"></p>
        </div>
        <br>
        <div class="clearfix"></div>




<div style="text-align: center">
<h4>文章內容範例</h4>
        <!-- example start -->
<textarea class="container" rows="30" disabled style="font-family: "courier new";">

<figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
<a class="frame" data-fancybox href="/img/events/2018/erp-financial-workshop-201805.jpg" itemprop="url">
<img itemprop="image" alt="ERP 顧問曾思蜜" src="/img/events/2018/erp-financial-workshop-201805-360.jpg" srcset="/img/events/2018/erp-financial-workshop-201805-360.jpg 360w,  /img/events/2018/erp-financial-workshop-201805-512.jpg 512w, /img/events/2018/erp-financial-workshop-201805-720.jpg 720w" sizes="(min-width: 512px) 512px,100vw">
</a>
<figcaption itemprop="description">ERP 顧問曾思蜜透過財務會計的工作流程，說明掌握企業資金流動的秘訣，確保組織營運順暢。</figcaption>
</figure>
<picture>
  <source srcset="" media="(min-width: 800px)">
  <source srcset="" type="image/webp">
</picture>

<h2>電腦致命引力　燃燒工程師熱血魂</h2>
<p>James 憶起當年，求學階段有電腦、懂電腦是一件很厲害的事情。由於電腦科技尚未普及，電腦只能在電腦教室、打工時才能接觸，於是更感到興趣盎然。後期開始使用到 Unix 和 Linux 作業系統，發現自己能夠享受撰寫程式的樂趣，更確信要將資訊工程當成未來目標。而 Terry 則是因為喜歡玩電腦、打遊戲。為了能夠每天名正言順地使用電腦，因此開啟邁向資訊管理的道路，進入了工程師的異想世界。</p>

<p itemprop="author" itemscope itemtype="http://schema.org/Person">
  新聞連絡人：<span itemprop="name">張珮珊</span><br>
  Email：<span itemprop="email">marketing@ares.com.tw</span><br>
  電話：<span itemprop="telephone">02-25221351 ext. 383</span><br>
</p>
<div class="relateArticle" itemscope itemtype="http://schema.org/WebPage" role="complementary">
  <ul>
    <li>
      <a itemprop="relatedLink" href="https://www.ares.com.tw/events/ares-jobs-engineer-201708">職場經驗談：</a>
    </li>
    <li>
      <a itemprop="relatedLink" href="https://www.ares.com.tw/events/Ares-jobs-engineer-201707-part2">如何跑出職場佳績</a>
    </li>
    <li>
      <a itemprop="relatedLink" href="https://www.ares.com.tw/events/Ares-jobs-engineer-201707-part1">如何跑出職場佳績</a>
    </li>
  </ul>
</div>
</textarea>


<!-- example end -->
        </div>
      </div>
    </div>
  </section>
  <h2 class="text-center">Preview Result</h2>
  <section class="main_content container-fluid">
    <div class="row">
      <div class="container fff-bg">
        <article class="fff-bg">
          <h1 class="main-color" id="headline">title</h1>
          <div>
            <time>yyyy-mm-dd</time>
          </div>
          <br>
          <article id="articleBody">
          </article>
        </article>
        <aside class="relativeAside">
          <div class="relateArticle">
            <br>
            loading...
            <br>
            <br>
            <br>
          </div>
        </aside>
      </div>
    </div>
  </section>
</div>
<script>
emmet.require('textarea').setup({
  pretty_break: true, // enable formatted line breaks (when inserting
            // between opening and closing tag)
  use_tab: true     // expand abbreviations by Tab key
});

//today
var d = new Date();
var today = d.getFullYear() + '-' + ('0'+(d.getMonth()+1)).substr(-2) + '-' + ('0'+ d.getDate()).substr(-2);
$('#date').val(today);


$('#threem').click(function(){
  var textarea = $('#content').val();
  $('#content').val(textarea+'<div class="summary">'+
  '\n<strong>認識'+$('#threem1').val()+'</strong>'
  +'\n<p>'+$('#threem2').val()+
  '\n</p>'+
  '\n<strong>企業挑戰</strong>'+
  '\n<p>'+$('#threem3').val()+
  '\n</p>'+
  '\n<strong>選擇產品</strong>'+
  '\n<p>'+$('#threem4').val()+
  '\n</p>'+
  '\n<strong>導入效益</strong>'+
  '\n<ul class="summary-effect">\n'+$('#threem5').val()+'\n</ul>'+'</div>\n');
});

function ImageInfo(path, onLoad) {
  var img = new Image();
  img.src = path;
  img.onload = function() {
    onLoad(img);
  }
}
$('#imgsay').click(function(){
  var textarea = $('#content').val();
  ImageInfo($('#imgsay-2').val(), function(img) {
    var img_width=img.width;
    var img_height=img.height;
    $('#content').val(textarea+'\n<figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">\n<a class="frame" data-fancybox href="'+$('#imgsay-1').val()+'" itemprop="url">\n<img loading="lazy" width="'+img_width+'" height="'+img_height+'" itemprop="image" alt="'+$('#imgsay-4').val()+'" src="'+$('#imgsay-2').val()+'">\n</a>\n<figcaption itemprop="description">'+$('#imgsay-3').val()+'</figcaption>\n</figure>\n');
  });
});

// $('#all').hide()
$('#qq').change(function(){
  if($(this).val()=="in"){
    $('.inside').show()
    $('.outside').hide()
  }
  if($(this).val()=="out"){
    $('.inside').hide()
    $('.outside').show()
  }
});
var c = document.querySelector('#product-select');

c.addEventListener('change',function(){
  var selectedValues = [...c.options].filter((e) => e.selected).map((e)=>e.value);
  document.querySelector('#product').value=selectedValues.join(' ');
})
// $('#product-select').change(function(){
//   $('#product').val($(this).val());
//   $('#product').val().replace(',', ' ')
// });
function formCheck(){
  var pattern = /^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/i;
  var isPass = true;
  var msg = $('#msg');

  // $('p.danger').hide();

  msg.text('');
  msg.css('color','red');
  $('#qq').css('border-color','red')

  if(contact_form.qq.value == 'in'){
    if(contact_form.news_name.value.length<1){
      $('#news_name').css('border-color','red');
      isPass = false;
    }else{
      $('#news_name').css('border-color','#5cb85c')
    }
    if(contact_form.content.value.length<10 || contact_form.content.value.includes("'") || contact_form.content.value.includes("\\")){
      $('#content').css('border-color','red');
      isPass = false;
    }else{
      $('#content').css('border-color','#5cb85c')
    }

  }else if(contact_form.qq.value == 'out'){
    if(contact_form.href.value.length<5){
      $('#href').css('border-color','red');
      isPass = false;
    }else{
      $('#href').css('border-color','#5cb85c')
    }

  }else{
    $('#qq').css('border-color','red');
    isPass = false;
  }

  if(contact_form.title.value.length<1){
    $('#title').css('border-color','red');
    isPass = false;
  }else{
    $('#title').css('border-color','#5cb85c')
  }
  if(!pattern.test(contact_form.date.value)){
    $('#date').css('border-color','red');
    isPass = false;
  }else{
    $('#date').css('border-color','#5cb85c')
  }
  if($("#success_case").prop("checked")){
    var success_case = true;
  }else{
    var success_case = false;
  }
  if(isPass){
    // var budget = contact_form.budget.value;
    var user = {
      qq : contact_form.qq.value,
      product : contact_form.product.value,
      title : contact_form.title.value,
      date : contact_form.date.value,
      href : contact_form.href.value,
      news_name : contact_form.news_name.value,
      content : contact_form.content.value,
      img : contact_form.img.value,
      description : contact_form.description.value,
      author : contact_form.author.value,
      canonical : contact_form.canonical.value,
      en : contact_form.en.value,
      cn : contact_form.cn.value,
      success_case : success_case,
      action:'add',
      user_name:'<?= @$_SESSION['www-ares'] ?>'
    };

    $.ajax({
      type: "POST",
      url: "add_post.php",
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
</script>
<script src="/lib/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="/lib/jssocials/jssocials.min.js"></script>
<script src="/js/add_link.js"></script>
<script src="/js/events.js?d=20170825"></script>
<script>
$('#content').on('input change keyup', function(){
  $('#headline').text($('#title').val());
  $('time').text($('#date').val());
  $('#articleBody').html($('#content').val());
  if($('article .relateArticle').length){
    var inside = $('article .relateArticle');
    var aside = $('aside.relativeAside .relateArticle');
    aside.html(inside.html());
  }else{
    $('aside.relativeAside').remove();
    $('article').css({
      'float':'none',
      'margin-left':'auto',
      'margin-right':'auto'
    })
  }
})
</script>
</body>
</html>