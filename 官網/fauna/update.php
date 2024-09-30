<?php
require('ip.php');
$ares = "sqlite:/sites/global/events.db";
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
  $_html = $_html.'<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['date'].'</td><td>'.$row['product'].'</td><td style="display: none">'.$row['redirect'].'</td><td style="display: none">'.$row['news_name'].'</td><td style="display: none">'.$row['img'].'</td><td style="display: none">'.$row['description'].'</td><td style="display: none">'.$row['author'].'</td><td style="display: none">'.$row['canonical'].'</td><td style="display: none">'.$row['en'].'</td><td style="display: none">'.$row['cn'].'</td></tr>';
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
  <title>修改最新消息</title>
  <meta name="description" content="">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/lib/prettyPhoto/css/prettyPhoto.css">
  <link rel="stylesheet" href="/css/main2016.css">
  <link rel="stylesheet" href="/css/events.css?d=20170901">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="emmet.js"></script>
</head>
<style>
select{
  -webkit-appearance: menulist;
  -moz-appearance: menulist;
}
.table tbody tr{cursor:pointer;}
.table tbody tr:hover *{
  background-color:#2858aa;
  color:#fff;
}
#content{
  background-color:#515151;
  color:#f1f1f1;
}
</style>
<body>
<div id="all">
  <br>
  <section class="container">
    <a href="./" class="btn btn-info">返回上一頁</a>
    <div id="table-area">
      <h2 class="text-center">選擇要修改的文章</h2>
      <table class="table table-hover table-bordered" id="example">
        <thead>
        <tr>
          <th>id</th>
          <th>標題</th>
          <th>日期</th>
          <th>產品</th>
          <th style="display: none">外連連結</th>
          <th style="display: none">自訂連結</th>
          <th style="display: none">顯圖</th>
          <th style="display: none">description</th>
          <th style="display: none">作者</th>
          <th style="display: none">權重</th>
          <th style="display: none">en</th>
          <th style="display: none">cn</th>
        </tr>
        </thead>
        <tbody>
  <?php echo $_html; ?>
        </tbody>
      </table>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
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
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">產品類別( 注意大小寫 )</span>
            </div>
            <input type="text" id="product" name="product" class="form-control" placeholder="沒有就留白"  aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">*標題</span></div>
            <input type="text" id="title" name="title" class="form-control" placeholder="資安法拚三讀" aria-describedby="basic-addon2">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon4">*date</span></div>
            <input type="text" id="date" name="date" class="form-control" placeholder="yyyy-mm-dd" aria-describedby="basic-addon4">
          </div>
          <br>
          <div class="input-group outside">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3">外連連結</span></div>
            <input type="text" id="href" name="href" class="form-control" placeholder="https://marketing.ares.com.tw/dm/newsletter-2016-08-Oracle/focus" aria-describedby="basic-addon3">
          </div>
          <br>
          <div class="input-group inside">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon5">自訂連結</span></div>
            <input type="text" id="news_name" name="news_name" class="form-control" placeholder="ArgoERP-Workshop-201705" aria-describedby="basic-addon5">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon6">自訂顯圖</span></div>
            <input type="text" id="img" name="img" class="form-control" placeholder="/img/2018/photo.jpg" aria-describedby="basic-addon6">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon7">自訂描述</span></div>
            <input type="text" id="description" name="description" class="form-control" aria-describedby="basic-addon7">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon8">作者</span></div>
            <input type="text" id="author" name="author" class="form-control" aria-describedby="basic-addon8">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon9">權重</span></div>
            <input type="text" id="canonical" name="canonical" class="form-control" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon10">en文章連結</span></div>
            <input type="text" id="en" name="en" class="form-control" aria-describedby="basic-addon9">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon11">cn文章連結</span></div>
            <input type="text" id="cn" name="cn" class="form-control" aria-describedby="basic-addon9">
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
                <summary>加入圖片</summary>
                <div style="border:1px solid #555;">
                example:
                <p>/img/events/2017/fortify-2017.png</p><br><br>
                <input style="width: 100%" type="text" id="imgsay-1" placeholder="大圖路徑"><br><br>
                <input style="width: 100%" type="text" id="imgsay-2" placeholder="小圖路徑"><br><br>
                <input style="width: 100%" type="text" id="imgsay-3" placeholder="圖說"><br><br>
                <button class="btn btn-primary" type="button" id="imgsay">加入圖片</button>
                </div>
              </details>
        </div></div>
          <br>
          <p>不知為何 itemscope 會出現等於</p>
          <div class="input-group inside">
            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon6">文章內容</span></div>
            <textarea style="font-family:'courier new'" id="content" name="content" class="form-control" rows="30" aria-describedby="basic-addon6"></textarea>
          </div>
          <br>
          <p>送出前請先看下面的 Preview Result</p>
          <div class="padding-vc text-center ib" style="vertical-align:top">
            <button type="submit" class="button btn btn-danger" onclick="return formCheck();"><span>送出</span></button>
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
  <a class="frame" data-fancybox href="/img/events/2017/20170914-jobs-engineer01.jpg" itemprop="url">
    <img itemprop="image" alt="圖一：資通電腦 ciMes 研發部王永正資深經理（左起）與黃文龍經理，從小就對電腦無比的好奇心。" src="/img/events/2017/20170914-jobs-engineer01.jpg">
  </a>
  <figcaption>圖一：資通電腦 ciMes 研發部王永正資深經理（左起）與黃文龍經理，從小就對電腦無比的好奇心。</figcaption>
</figure>
<h2>電腦致命引力　燃燒工程師熱血魂</h2>
<p>James 憶起當年</p>
<figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
  <a class="frame" data-fancybox href="/img/events/2017/20170914-jobs-engineer02.jpg" itemprop="url">
    <img itemprop="image" alt="圖二：ciMes 部門不定期相聚享受美食，感情猶如家人般緊密。" src="/img/events/2017/20170914-jobs-engineer02.jpg">
  </a>
  <figcaption>圖二：ciMes 部門不定期相聚享受美食，感情猶如家人般緊密。</figcaption>
</figure>
<h2>Keep Fresh! Keep Fighting! 發揮智慧核心價值</h2>
<aside>
<h3>資通 ArgoERP簡介</h3>
<p>資通電腦是目前國內唯一的 ERP 軟體股票上市櫃公司。產品模組有可彈性應用的底層架構及內建的標準功能，針對不同的產業特性（如傳產、營建、化工、製造、服務業…）彈性調整。以最符合經濟成本的方式改善企業流程，提昇整體資源運用效益。適用多公司、多廠、多幣別及多利潤中心、多專案管理，足以迎合國際競爭環境下所需求的企業資源規劃系統。</p>
<p>資通電腦為因應 2013 年國內上市櫃公司需全面轉換 IFRS 會計制度推出 IFRS 解決方案，為國內第一家經政府輔導通過的 ERP 軟體廠商，並有多家 IFRS 成功案例。且提供彈性方案：整套系統替換、介接異質總帳系統或導入報表工具。可節省人力成本及加快作業速度、減少未來報表調整幅度與錯誤，協助企業在導入 IFRS 對應資訊方案的同時，不但能降低對營運面的衝擊，更能提升企業競爭力，搶得先機。資通近期更獲經濟部工業局 IFRS 項目登錄證書，為符合 12 項專業服務之機構。</p>
<div itemprop="author" itemscope itemtype="https://schema.org/Organization">
<h3><span itemprop="name">資通電腦</span>簡介</h3>
<p itemprop="description">資通電腦是臺灣第一家獲准股票上市櫃的軟體公司，在資訊與系統整合領域累積近 40 年的實務經驗，為大中華區專業的管理資訊系統軟體供應商，為金融、政府和工商企業等單位提供資訊化的產品與服務。除為環球銀行金融電信協會（Society for Worldwide Interbank Financial Telecommunication；SWIFT）認證夥伴、台灣第一家 IFRS（International Financial Reporting Standards；國際財務報告準則）解決方案輔導廠商、Oracle 台灣專業代理商與 Microsoft Gold Certified Partner 外，也是市占率最高的銀行海外分行核心系統與外匯系統供應商。ciMes（Computer Integrated Manufacturing Execution System；製造執行系統）更是台灣 LED 產業市佔第一，並榮獲台灣精品獎；與國際研究機構 Gartner 台灣唯一建議參考製造執行系統。自行研發的資通 ArgoERP 企業資源規劃系統，則與泰國電腦產品與軟體服務領導商 SVOA 集團，旗下系統整合 IT 龍頭 DataOne Asia 公司攜手合作，朝東南亞第一 ERP 系統商的目標邁進。</p>
<link itemprop="logo" href="/events/#logo"><link itemprop="url" href="https://www.ares.com.tw">
</div>
</aside>
<p itemprop="editor" itemscope itemtype="http://schema.org/Person">
  新聞連絡人：<span itemprop="name">張珮珊</span><br />
  Email：<span itemprop="email">marketing@ares.com.tw</span><br />
  電話：<span itemprop="telephone">02-25221351 ext. 383</span><br />
  （ARES、資通、資通電腦為資通公司之註冊商標。其他名稱及註冊商標分別為各相關公司所有。）
</p>
<div class="relateArticle" itemscope itemtype="http://schema.org/WebPage">
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
$('section.blue-bg').hide();
var $_id = '';
var $array = [];
$('.table tbody tr').click(function(){
  var click_id = $(this).children('td:first').text();
  console.log(click_id);
  $(this).find('td').each(function(){
    $array.push($(this).html());
  });
  $.ajax({
    type: "POST",
    url: "update_content.php",
    data: {id:click_id},
    dataType:'html'
  }).done(function(data){
    console.log(data);
    $_id = $array[0];
    $('#title').val($array[1]);
    $('#date').val($array[2]);
    $('#product').val($array[3]);
    $('#href').val($array[4]);
    $('#news_name').val($array[5]);
    $('#content').val(data);
    $('#img').val($array[6]);
    $('#description').val($array[7]);
    $('#author').val($array[8]);
    $('#canonical').val($array[9]);
    $('#en').val($array[10]);
    $('#cn').val($array[11]);
    $('#content').trigger('change');
    $('section.blue-bg').show();
    setTimeout(function(){
      $('#table-area').remove();
    },0);
  })
});
emmet.require('textarea').setup({
  pretty_break: true, // enable formatted line breaks (when inserting
            // between opening and closing tag)
  use_tab: true     // expand abbreviations by Tab key
});
$('#threem').click(function(){
  var textarea = $('#content').val();
  $('#content').val(textarea+'<div class="summary">'+
  '\n<b>認識'+$('#threem1').val()+'</b>'
  +'\n<p>'+$('#threem2').val()+
  '\n</p>'+
  '\n<b>企業挑戰</b>'+
  '\n<p>'+$('#threem3').val()+
  '\n</p>'+
  '\n<b>選擇產品</b>'+
  '\n<p>'+$('#threem4').val()+
  '\n</p>'+
  '\n<b>導入效益</b>'+
  '\n<ul class="summary-effect">\n'+$('#threem5').val()+'\n</ul>'+'</div>\n');
});
$('#imgsay').click(function(){
  var textarea = $('#content').val();
  $('#content').val(textarea+'\n<figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">\n<a class="frame" data-fancybox href="'+$('#imgsay-1').val()+'" itemprop="url">\n<img itemprop="image" alt="'+$('#imgsay-3').val()+'" src="'+$('#imgsay-2').val()+'">\n</a>\n<figcaption itemprop="description">'+$('#imgsay-3').val()+'</figcaption>\n</figure>\n')
});

function formCheck(){
  var pattern = /^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/i;
  var isPass = true;
  var msg = $('#msg');
  msg.text('');
  msg.css('color','red');
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
  if(isPass){
    // var budget = contact_form.budget.value;
    var d = new Date();
    var today = d.getFullYear() + '-' + ('0'+(d.getMonth()+1)).substr(-2) + '-' + ('0'+ d.getDate()).substr(-2);
    var user = {
      id : $_id,
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
      dateModified : today,
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
        msg.css('color','#5cb85c')
        $("#contact_form")[0].reset();
        $.ajax({
          type: "POST",
          url: "log_post.php",
          data: user,
          cache:false
        }).done(function(){
          alert('送出成功');
          window.location.reload();
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
<script src="/lib/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="/lib/jssocials/jssocials.min.js"></script>
<script src="/js/add_link.js"></script>
<script src="/js/events.js?d=20170825"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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
});
$(document).ready(function() {
  $('#example').DataTable({
    "order": [[ 0, "desc" ]],
    "lengthMenu": [[10, 20, 50], [10, 20, 50]]
  });
});
</script>
</body>
</html>