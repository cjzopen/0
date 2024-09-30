<?php
// require('ip.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title>電子報</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="//marketing.ares.com.tw/global/css/article.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
html,body{font-size: 16px;}#article aside{text-align: center;color: #345799;background-color: #efefef;padding: 1rem;}
.img-responsive{
  max-width: 100%;
  height: auto;
}
#card{
  padding: 0;
  max-width: 21.25rem;
  height: 22.5rem;
  margin: 1.25rem 0 0;
  overflow: hidden;
  position: relative;
  line-height: 1.42857143;
  background-color: #fff;
  box-shadow: 0 0 1px 1px #ddd;
  border-radius: 4px;
}
#card figure{
  max-width: 100%;
  width: 21.25rem;
  height: 12.5rem;
  margin: 0;
  background-color: #456789;
}
#card h2{
  min-height: 3.5rem;
  height: 3.5rem;
  overflow: hidden;
  padding-left: 8px;
  padding-right: 8px;
  line-height: 1.4;
  font-size: 1.25rem;
}
::-webkit-input-placeholder {
  color: #efefef;
}
::-moz-placeholder {
  color: #efefef;
}
</style>
<body>
<div id="all">
  <br>
      <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
        <a href="./" class="btn btn-info">返回上一頁</a>
        <button type="button" class="btn btn-success" onclick="anno.show()">說明</button>
        <form id="contact_form" class="mt-3" name="contact_form" method="post" onsubmit="return formCheck();">
          <div class="input-group mb-3">
            <select name="qq" id="qq" class="form-control">
              <option value="0" disabled selected>請先選擇文章類別</option>
              <option value="ind">首頁</option>
              <option value="e">搶先e報 (描述 或 作者+作者圖 擇一)</option>
              <option value="info">資訊補給站</option>
              <option value="article">一般文章 (外連描述 或 作者+作者圖 擇一)</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">日期</span>
            </div>
            <input type="text" class="form-control" id="date" name="date" placeholder="2020-02-20">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">標題</span>
            </div>
            <input type="text" class="form-control" id="title" name="title" placeholder="禁止使用單雙引號">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">自訂連結或外連網址</span>
            </div>
            <input type="text" class="form-control" id="link" name="link" placeholder="2020-02-argoerp/focus">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <select id="type-select" class="form-control">
                <option value="" disabled selected>文章類別 (找不到自己填)</option>
                <option value="本月焦點">本月焦點</option>
                <option value="產品特寫">產品特寫</option>
                <option value="技術交流">技術交流</option>
                <option value="ERP 專欄">ERP 專欄</option>
                <option value="MES 專欄">MES 專欄</option>
                <option value="人資專欄">人資專欄</option>
                <option value="資安專欄">資安專欄</option>
                <option value="委外專欄">委外專欄</option>
                <option value="金融專欄">金融專欄</option>
                <option value="電子發票">電子發票</option>
                <option value="菁英招募">菁英招募</option>
                <option value="工業 4.0">工業 4.0</option>
                <option value="管理專欄">管理專欄</option>
                <option value="漫畫資通">漫畫資通</option>
              </select>
            </div>
            <input type="text" class="form-control" id="type" name="type">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <select id="product-select" class="form-control">
                <option value="" disabled selected>產品類別 (找不到或多個自己填)</option>
<?php include('all_products.php'); ?>
              </select>
            </div>
            <input type="text" class="form-control" id="product" name="product">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">描述</span>
            </div>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">關鍵字</span>
            </div>
            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="ERP、APP、行動客服、行動裝置、維護">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">og:img</span>
            </div>
            <input type="text" class="form-control" id="img" name="img" placeholder="http開頭，若多張圖片則以,分隔" list="ogimg_list">
            <datalist id="ogimg_list">
              <option value="https://marketing.ares.com.tw/img/default/img_index_product.jpg"></option>
              <option value="https://marketing.ares.com.tw/img/default/img_index_it.jpg"></option>
              <option value="https://marketing.ares.com.tw/img/default/img_index_doctor.jpg"></option>
              <option value="https://marketing.ares.com.tw/img/default/img_index_hcp.jpg"></option>
              <option value="https://marketing.ares.com.tw/img/default/img_index_industry4.0.jpg"></option>
              <option value="https://marketing.ares.com.tw/img/default/img_index_egui.png"></option>
              <option value="https://marketing.ares.com.tw/img/logos/ares.png"></option>
            </datalist>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">作者</span>
            </div>
            <input type="text" class="form-control" id="author" name="author" placeholder="綠豆糕">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">作者圖片</span>
            </div>
            <input type="text" class="form-control" id="author_img" name="author_img" placeholder="/img/authors/ArgoERP.png" list="author_img_list">
            <datalist id="author_img_list">
              <option value="/img/authors/henry.png"></option>
              <option value="/img/authors/marketing.png"></option>
              <option value="/img/authors/ArgoERP.png"></option>
              <option value="/img/authors/harry.png"></option>
              <option value="/img/default/img_index_twcert_down.png"></option>
            </datalist>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">作者簡介</span>
            </div>
            <input type="text" class="form-control" id="author_about" name="author_about" list="author_about_list">
            <datalist id="author_about_list">
              <option value="資通電腦公司董事長"></option>
              <option value="製造執行系統 ciMes 產品總監"></option>
            </datalist>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">作者網站</span>
            </div>
            <input type="text" class="form-control" id="author_url" name="author_url">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">自訂框框顯圖</span>
            </div>
            <input type="text" class="form-control" id="card_img" name="card_img" placeholder="選填，搶先e報必填">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">修改日期(不能小於文章日期)</span>
            </div>
            <input type="text" class="form-control" id="dateModified" name="dateModified">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">canonical</span>
            </div>
            <input type="text" class="form-control" id="canonical" name="canonical">
          </div>
          <div><span class="emmet-powered" style="font-family: sans-serif;font-size: 11px;color: #0072bc;cursor: pointer;border-bottom: 1px dashed #0072bc;" onclick="emmet.require('textarea').showInfo();">Powered by Emmet</span>
            <p>段落：p+tab , 小標題 h2+tab or h3+tab , 條目 ul.disc>li*n  n為條目數</p>
            <p>禁止使用 ' 和 \</p>
          </div>
          <div>
            <details class="border mb-3" id="img-create">
              <summary class="text-info">插入圖片</summary>
              <div>
                其它class name<input type="text" placeholder="其它class name" id="img-class">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">大圖連結</span>
                  </div>
                  <input type="text" class="form-control" id="img-big">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">小圖連結</span>
                  </div>
                  <input type="text" class="form-control" id="img-small">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">圖說</span>
                  </div>
                  <input type="text" class="form-control" id="img-caption">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">alt</span>
                  </div>
                  <input type="text" class="form-control" id="img-alt">
                </div>
                <button type="button" class="btn btn-info w-50" id="img-add">確定</button>
              </div>
            </details>
          </div>
          <div class="input-group mb-3">
            <label class="text-center d-block">文章內容</label>
            <textarea style="font-family: 'courier new'" id="content" name="content" class="form-control" rows="30" ></textarea>
          </div>
          <br>
          <p>送出前請先看下面的 Preview Result</p>
          <div class="text-center" style="vertical-align:top">
            <button type="submit" class="button btn btn-danger"><span>送出</span></button>
          </div>
        </form>
        <br>
        <p id="msg"></p>
        </div>
        <br>




<div class="col-12 text-center">
  <h4>文章內容範例</h4>
  <p>以下去空格</p>
  <div>
    <ul class="disc d-inline-block">
      <li>單引號：& #39;</li>
      <li>雙引號：& #34;</li>
      <li>反斜線：& #92;</li>
      <li>&lt;：& lt;</li>
      <li>&gt;：& gt;</li>
    </ul>
  </div>
        <!-- example start -->
  <textarea class="container" rows="30" disabled style="font-family:'courier new'">
<!-- banner 這張圖會跑到標題的上方 -->
<figure class="banner">
  <img loading="lazy" class="center-block img-responsive" src="https://marketing.ares.com.tw/images/2222-01/head_focus.png" alt="文章banner">
</figure>
<!-- banner end -->
<h2></h2> <h3></h3> <h4></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, perspiciatis ea fuga, vitae maiores officia provident tempora voluptas minima odio quaerat nam iure expedita ab, reiciendis praesentium officiis sed magnam?</p>
<!-- 不必照順序的條列 --><ul class="disc"></ul>
<!-- 有順序性的條列 --><ol class="decimal"></ol>
<!-- 包含連結的圖 -->
<figure class="text-center" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
  <a href="https://marketing.ares.com.tw/images/2009-04/p-1-1.jpg" itemprop="url" data-fancybox>
  <img loading="lazy" itemprop="image" class="img-responsive" src="https://marketing.ares.com.tw/images/2009-04/p-1-1.jpg" alt="cimes">
  </a>
  <figcaption itemprop="description">文章裡的圖</figcaption>
</figure>
<!-- 包含連結的圖  end -->
<!-- 沒有連結和圖說的圖 -->
<figure class="text-center">
<img loading="lazy" class="img-responsive" width="" height="" src="https://marketing.ares.com.tw/images/2009-04/p-1-1.jpg" alt="只有圖">
</figure>
<!-- 沒有連結和圖說的圖 end -->
<blockquote cite="來源">引述的文字</blockquote>
<aside class="contact-aside">詳細<a href="https://cimes.ares.com.tw/">產品資訊請看這裡</a>。</aside>



  </textarea>

<!-- example end -->
        </div>
      </div>
    </div>
  </section>
  <h2 class="text-center">Preview Result</h2>
  <div class="container">
    <div id="card">
      <figure></figure>
      <h2 class="my-2"></h2>
    </div>
  </div>
  <section class="container-fluid">
      <div class="wrap mx-auto" style="max-width: 1060px">
        <article class="mb-4 essay" id="article">
          <header class="head">
            <div class="type" id="c_type" data-type="{{ $row['type'] }}">{{ $row['type'] }}</div>
            <h1>{{ strip_tags($title) }}</h1>
            <div class="author">
              <!-- <img id="c_author_img" loading="lazy" src="{{ $row['author_img'] }}" alt=""> -->
              <span class="gray-color" id="c_author">{{ $row['author'] }}</span>
            </div>
          </header>
          <ul class="breadcrumb" aria-label="breadcrumb" role="navigation">
            <li><a href="https://marketing.ares.com.tw/newsletter/"><span>Home</span></a></li>
            <li class="active" aria-current="page"><a href="#"><span>type</span></a></li>
          </ul>
          <div class="mb-5 key-words">Tags：{{ $keyword_temp }}</div>
          <div id="articleBody">{{ $row['content'] }}</div>
        </article>
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
// $('#dateModified').val(today);


// $('#all').hide()
$('#qq').change(function(){
  var $table = $('#qq').val();
  $('form input,form textarea').closest('.input-group').not('#img-create .input-group').hide();
  $('#img-create').hide();
  if($table=='ind'){
    $('#date,#title,#description,#img,#link').closest('.input-group').show();
  }else if($table=='article'){
    $('#date,#title,#link,#keyword,#description,#img,#type,#product,#author,#author_img,#author_about,#author_url,#dateModified,#card_img,#content,#canonical').closest('.input-group').show();
    $('#img-create').show();
  }else if($table=='e'){
    $('#date,#title,#link,#description,#card_img,#author,#author_img').closest('.input-group').show();
  }else if($table=='info'){
    $('#date,#product,#title,#link,#author,#author_img').closest('.input-group').show();
  }

});
$('#product-select').change(function(){
  $('#product').val($(this).val());
});
$('#type-select').change(function(){
  var $_this = $(this).val();
  $('#type').val($_this);
  if($_this==='本月焦點'){
    contact_form.img.value = 'https://marketing.ares.com.tw/images/'+contact_form.date.value.substring(0,7)+'/focus.jpg';
    contact_form.card_img.value = 'https://marketing.ares.com.tw/images/'+contact_form.date.value.substring(0,7)+'/img_index_focus.jpg';
  }
});

// 插入圖片
function ImageInfo(path, onLoad) {
  var img = new Image();
  img.src = path;
  img.onload = function() {
    onLoad(img);
  }
}
$('#img-add').click(function(){
  var textarea = $('#content').val();
  var img_class = $('#img-class').val();
  var img_big = $('#img-big').val();
  var img_small = $('#img-small').val();
  var img_caption = $('#img-caption').val();
  var img_alt = $('#img-alt').val();
  var img_cached;
  var img_content;
  if(img_small){
    img_big ? ( img_cached = img_small ) : ( img_cached = img_big );
    ImageInfo(img_cached, function(img) {
      var img_width=img.width;
      var img_height=img.height;
      if(img_big){
        img_content = `${textarea}
<figure class="text-center ${img_class}" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
  <a href="${img_big}" itemprop="url" data-fancybox>
    <img loading="lazy" width="${img_width}" height="${img_height}" itemprop="image" class="img-responsive" src="${img_small}" alt="${img_alt}">
  </a>
  <figcaption itemprop="description">${img_caption}</figcaption>
</figure>`;
      }else{
        img_content = `${textarea}
<figure class="text-center ${img_class}">
  <img loading="lazy" width="${img_width}" height="${img_height}" class="img-responsive" src="${img_small}" alt="${img_alt}">
  <figcaption>${img_caption}</figcaption>
</figure>`;
      }
      $('#content').val(img_content);
    });
  }else{
    alert('小圖必填');
  }
});



function formCheck(){
  var pattern = /^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/i;
  var isPass = true;
  var msg = $('#msg');
  function check_empty(elem){
    if($(elem).val().length<1){
      $(elem).css('border-color','red');
      isPass = false;
    }else{
      $(elem).css('border-color','#5cb85c');
    }
  }

  // $('p.danger').hide();

  msg.text('');
  msg.css('color','red');
  $('#qq').css('border-color','');

  if(contact_form.qq.value == 'article'){
    check_empty('#type');
    if(contact_form.content.value.includes("'")){
      contact_form.content.value.replace("'", "&#39;");
    }
    if(contact_form.content.value.includes("\\")){
      contact_form.content.value.replace("\\", "&#92;");
    }
    if(contact_form.title.value.includes("'")){
      contact_form.title.value.replace("'", "&#39;");
    }
    if(contact_form.title.value.includes("\\")){
      contact_form.title.value.replace("\\", "&#92;");
    }
    // if(contact_form.content.value.includes("'") || contact_form.content.value.includes("\\") || contact_form.title.value.includes("'") || contact_form.title.value.includes("\\")){
    //   $('#content').css('border-color','red');
    //   isPass = false;
    //   alert('標題或內文有單引號與反斜線');
    // }else{
    //   $('#content').css('border-color','#5cb85c')
    // }

  }else if(contact_form.qq.value == 'e'){
    check_empty('#card_img');

  }else if(contact_form.qq.value == 'info'){
    // check_empty('#author');
    // check_empty('#author_img');

  }else if(contact_form.qq.value == 'ind'){
    check_empty('#img');
    check_empty('#description');

  }else{
    $('#qq').css('border-color','red');
    isPass = false;
  }

  check_empty('#title');
  check_empty('#link');

  if(!pattern.test(contact_form.date.value)){
    $('#date').css('border-color','red');
    isPass = false;
  }else{
    $('#date').css('border-color','#5cb85c')
  }

  if(isPass){
    // var budget = contact_form.budget.value;
    var title = contact_form.title.value;
    var content = contact_form.content.value;
    if(contact_form.content.value.includes("'")){
      content = contact_form.content.value.replace("'", "&#39;");
    }
    if(contact_form.content.value.includes("\\")){
      content = contact_form.content.value.replace("\\", "&#92;");
    }
    if(contact_form.title.value.includes("'")){
      title = contact_form.title.value.replace("'", "&#39;");
    }
    if(contact_form.title.value.includes("\\")){
      title = contact_form.title.value.replace("\\", "&#92;");
    }
    var user = {
      qq : contact_form.qq.value,
      product : contact_form.product.value,
      type : contact_form.type.value,
      title : title,
      date : contact_form.date.value,
      link : contact_form.link.value,
      keyword : contact_form.keyword.value,
      content : content,
      img : contact_form.img.value,
      description : contact_form.description.value,
      author : contact_form.author.value,
      author_img : contact_form.author_img.value,
      author_about : contact_form.author_about.value,
      author_url : contact_form.author_url.value,
      dateModified : contact_form.dateModified.value,
      card_img : contact_form.card_img.value,
      canonical : contact_form.canonical.value,
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
        // $("#contact_form")[0].reset();
        // $.ajax({
        //   type: "POST",
        //   url: "log_post.php",
        //   data: user,
        //   cache:false
        // });
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

$('#content,#title').on('input change keyup', function(){
  $('h1').text($('#title').val());
  $('#card h2').html($('#title').val());
  $('.key-words').text($('#keyword').val());
  $('#c_author').text($('#author').val());
  $('#c_author_img').attr('src','https://marketing.ares.com.tw/newsletter/'+$('#author_img').val());
  $('#c_type').attr('data-type',$('#type').val());
  $('#c_type').text($('#type').val());
  $('#articleBody').html($('#content').val());

})
</script>
<script src="anno/anno.js" type="text/javascript"></script>
<!-- <script src="http://iamdanfox.github.io/anno.js/scrollintoview/jquery.scrollintoview.min.js" type="text/javascript"></script> -->

<link href="anno/anno.css" rel="stylesheet" type="text/css" />
<script>
var anno = new Anno([{
  target  : '#qq',
  position: 'center-bottom',
  content : '先選擇再做其它事情'
}, {
  target  : '#date',
  position: 'center-bottom',
  content : '必填。同日期會被分類到同一篇電子報。'
}, {
  target  : '#title',
  position: 'center-bottom',
  content : '可使用 html tag，但不能用單引號和雙引號，不要跟別人重覆'
}, {
  target  : '#link',
  position: 'center-bottom',
  content : '同一篇電子報，各文章連結自己要先想好，不要跟別人重覆'
}, {
  target  : '#description',
  position: 'center-bottom',
  content : 'meta description和導覽頁的簡述'
}, {
  target  : '#keyword',
  position: 'center-bottom',
  content : '非必要。用、分隔'
}, {
  target  : '#img',
  position: 'center-bottom',
  content : '分享連結時的顯示圖'
}, {
  target  : '#author',
  position: 'center-bottom',
  content : '有作者就必需有作者圖片，外連時跟「描述」2選1'
}, {
  target  : '#author_img',
  position: 'center-bottom',
  content : '沒圖片就留白'
}, {
  target  : '#card_img',
  position: 'center-bottom',
  content : '導覽頁的顯圖，搶先e報、本月焦點必填'
}, {
  target  : 'textarea[disabled]',
  position: 'right',
  content : '其它可能會用到的tag'
}
])
</script>
</body>
</html>