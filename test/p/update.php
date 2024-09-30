<?php
// require('ip.php');

$ares = "sqlite:/sites/global/epaper-article.db";
try{
  $db = new PDO($ares);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $msg['db'] = true;
}catch (PDOException $e) {
  $msg['db'] = false;
  $log = $e->getMessage();
}
$query = "SELECT * FROM article ORDER BY `date` DESC";
$rs = $db->query($query)->fetchAll();
$_html = '';
foreach ($rs as $row) {
  $row['content'] = str_replace('<','&lt;',$row['content']);
  $row['content'] = str_replace('>','&gt;',$row['content']);
  $_html = $_html.'<tr><td>'.$row['date'].'</td><td>'.$row['title'].'</td><td>'.$row['link'].'</td><td class="d-none">'.$row['product'].'</td><td class="d-none">'.$row['type'].'</td><td class="d-none">'.$row['keyword'].'</td><td class="d-none">'.$row['img'].'</td><td class="d-none">'.$row['description'].'</td><td class="d-none">'.$row['author'].'</td><td class="d-none">'.$row['author_img'].'</td><td class="d-none">'.$row['card_img'].'</td><td class="d-none"><pre>'.$row['content'].'</pre></td><td>'.$row['id'].'</td><td class="d-none">'.$row['canonical'].'</td></tr>';
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
  <title>電子報</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="//marketing.ares.com.tw/global/css/article.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
</style>
<body>
<div id="all">
  <section class="container">
    <table class="table table-hover table-bordered" id="table">
      <thead>
        <tr>
          <th>日期</th>
          <th>標題</th>
          <th>連結</th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th class="d-none"></th>
          <th></th>
          <th class="d-none"></th>
        </tr>
      </thead>
      <tbody>
<?php echo $_html; ?>
      </tbody>
    </table>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
        <a href="./" class="btn btn-info">返回上一頁</a>
        <form id="contact_form" class="mt-3" name="contact_form" method="post" onsubmit="return formCheck();">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="qq" id="qq" value="article" disabled>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">日期</span>
            </div>
            <input type="text" class="form-control" id="date" name="date" placeholder="2020-02-20" readonly>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">標題</span>
            </div>
            <input type="text" class="form-control" id="title" name="title">
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
                <option value="ERP 達人">ERP 達人</option>
                <option value="資安專欄">資安專欄</option>
                <option value="電子發票">電子發票</option>
                <option value="菁英招募">菁英招募</option>
                <option value="工業 4.0">工業 4.0</option>
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
            <input type="text" class="form-control" id="product">
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
            <input type="text" class="form-control" id="author_img" name="author_img" placeholder="/img/authors/ArgoERP.png">
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
        <!-- example start -->
  <textarea class="container" rows="30" disabled style="font-family:'courier new'">
<figure loading="lazy" class="banner" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
  <img class="center-block img-responsive" itemprop="image" src="https://marketing.ares.com.tw/dm/newsletter-2018-04-argoerp/images/head_focus.png" alt="數據力決定競爭力">
</figure>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, perspiciatis ea fuga, vitae maiores officia provident tempora voluptas minima odio quaerat nam iure expedita ab, reiciendis praesentium officiis sed magnam?</p>
<h2>串聯 ERP 和 MES 系統發揮</h2>
<figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
  <a href="https://marketing.ares.com.tw/dm/newsletter-2018-04-argoerp/images/img_article_focus_1.png" itemprop="url" data-fancybox>
    <img loading="lazy" itemprop="image" class="center-block img-responsive" src="https://marketing.ares.com.tw/dm/newsletter-2018-04-argoerp/images/img_article_focus_1.png" alt="系統的整合概念圖">
  </a>
  <figcaption itemprop="description" class="text-center">完善地大數據資料庫端賴 MES 和 ERP 系統的整合概念圖</figcaption>
</figure>
<aside id="contact-aside">ciMes 詳細<a href="https://cimes.ares.com.tw/">產品資訊請看這裡</a></aside>
  </textarea>

<!-- example end -->
        </div>
      </div>
    </div>
  </section>
  <h2 class="text-center">Preview Result</h2>
  <section class="container-fluid">
      <div class="wrap mx-auto" style="max-width: 1060px">
        <article class="mb-4 essay" id="article">
          <header class="head">
            <div class="type" id="c_type" data-type="{{ $row['type'] }}">{{ $row['type'] }}</div>
            <h1>{{ strip_tags($title) }}</h1>
            <div class="author">
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
$('#dateModified').val(today);


$('#contact_form').hide();
var $id = '';
$('#table tbody tr').on('click',function(){
  var $td = $(this).find('td');
  $('#date').val($td.eq(0).text());
  $('#title').val($td.eq(1).html());
  $('#link').val($td.eq(2).text());
  $('#product').val($td.eq(3).text());
  $('#type').val($td.eq(4).text());
  $('#keyword').val($td.eq(5).text());
  $('#img').val($td.eq(6).text());
  $('#description').val($td.eq(7).text());
  $('#author').val($td.eq(8).text());
  $('#author_img').val($td.eq(9).text());
  $('#card_img').val($td.eq(10).text());
  var $c = $td.eq(11).find('pre').html();
  $c = $c.replace(/\&lt;/g, '<');
  $c = $c.replace(/\&gt;/g, '>');
  $('#content').val($c);
  $id = $td.eq(12).text();
  $('#canonical').val($td.eq(13).text());

  $('#contact_form').show();
  $('#table_wrapper').remove();
})
// $('#qq').change(function(){
//   var $table = $('#qq').val();
//   $('form input,form textarea').closest('.input-group').hide();
//   if($table=='ind'){
//     $('#date,#title,#description,#img,#link').closest('.input-group').show();
//   }else if($table=='article'){
//     $('#date,#title,#link,#keyword,#description,#img,#type,#product,#author,#author_img,#dateModified,#card_img,#content').closest('.input-group').show();
//   }else if($table=='e'){
//     $('#date,#title,#link,#description,#card_img,#author,#author_img').closest('.input-group').show();
//   }else if($table=='info'){
//     $('#date,#title,#link,#author,#author_img').closest('.input-group').show();
//   }

// });
$('#product-select').change(function(){
  $('#product').val($(this).val());
});
$('#type-select').change(function(){
  $('#type').val($(this).val());
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
    if(contact_form.content.value.includes("'") || contact_form.content.value.includes("\\")){
      $('#content').css('border-color','red');
      isPass = false;
    }else{
      $('#content').css('border-color','#5cb85c')
    }

  }else if(contact_form.qq.value == 'e'){
    check_empty('#card_img');

  }else if(contact_form.qq.value == 'info'){
    check_empty('#author');
    check_empty('#author_img');

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

  if(contact_form.dateModified.value){
    if(contact_form.dateModified.value.replace(/-/g,"") < contact_form.date.value.replace(/-/g,"")){
      $('#dateModified').css('border-color','red');
      isPass = false;
    }else{
      $('#dateModified').css('border-color','#5cb85c')
    }
  }

  if(isPass){
    // var budget = contact_form.budget.value;
    var user = {
      qq : contact_form.qq.value,
      product : contact_form.product.value,
      type : contact_form.type.value,
      title : contact_form.title.value,
      date : contact_form.date.value,
      link : contact_form.link.value,
      keyword : contact_form.keyword.value,
      content : contact_form.content.value,
      img : contact_form.img.value,
      description : contact_form.description.value,
      author : contact_form.author.value,
      author_img : contact_form.author_img.value,
      dateModified : contact_form.dateModified.value,
      card_img : contact_form.card_img.value,
      canonical : contact_form.canonical.value,
      id : $id,
      action:'update',
      user_name:'<?= @$_SESSION['www-ares'] ?>'
    };

    $.ajax({
      type: "POST",
      url: "update_post.php",
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
        msg.css('color','#5cb85c');
        alert('送出成功');
        history.go(0);
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

$('#content').on('input change keyup', function(){
  $('h1').text($('#title').val());
  $('.key-words').text($('#keyword').val());
  $('#c_author').text($('#author').val());
  $('#c_author_img').attr('src','https://marketing.ares.com.tw/newsletter/'+$('#author_img').val());
  $('#c_type').attr('data-type',$('#type').val());
  $('#c_type').text($('#type').val());
  $('#articleBody').html($('#content').val());

});
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
  $('#table').DataTable({
    "order": [[ 0, "desc" ]],
    "lengthMenu": [[10, 20, 50], [10, 20, 50]]
  });
});
</script>
</body>
</html>