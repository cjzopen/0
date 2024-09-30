<?php
require('ip.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>相關文章</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="/lib/prettyPhoto/css/prettyPhoto.css">
    <link rel="stylesheet" href="/css/main2016.css">
    <link rel="stylesheet" href="/css/events.css?d=20170901">
</head>
<style>
select{
    -webkit-appearance: menulist;
    -moz-appearance: menulist;
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
                            <option value="in">最新消息文章</option>
                            <option value="out">外連</option>
                        </select>
                    </div>
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
                    <div class="input-group inside">
                        <span class="input-group-addon" id="basic-addon12">news_id</span>
                        <input type="text" id="news_id" name="news_id" class="form-control" aria-describedby="basic-addon12">
                    </div>
                    <br>
                    <div class="input-group outside">
                        <span class="input-group-addon" id="basic-addon2">標題</span>
                        <input type="text" id="title" name="title" class="form-control" placeholder="資安法拚三讀" aria-describedby="basic-addon2">
                    </div>
                    <br>
                    <div class="input-group outside">
                        <span class="input-group-addon" id="basic-addon4">date</span>
                        <input type="text" id="date" name="date" class="form-control" placeholder="yyyy-mm-dd" aria-describedby="basic-addon4">
                    </div>
                    <br>
                    <div class="input-group outside">
                        <span class="input-group-addon" id="basic-addon3">外連連結</span>
                        <input type="text" id="href" name="href" class="form-control" placeholder="https://marketing.ares.com.tw/dm/newsletter-2016-08-Oracle/focus" aria-describedby="basic-addon3">
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
                    <div class="padding-vc text-center ib" >
                        <button type="submit" class="button btn btn-danger"><span>送出</span></button>
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
$('#product-select').change(function(){
    $('#product').val($(this).val());
})
function formCheck(){
    var isPass = true;
    var msg = $('#msg');
    msg.text('');
    msg.css('color','red');
    console.log('a');
    if(contact_form.qq.value == 'in'){
        if(contact_form.news_id.value.length<1){
            $('#news_id').css('border-color','red');
            isPass = false;
        }else{
            $('#news_id').css('border-color','#5cb85c')
        }
    }else if(contact_form.qq.value == 'out'){
        if(contact_form.href.value.length<5){
            $('#href').css('border-color','red');
            isPass = false;
        }else{
            $('#href').css('border-color','#5cb85c')
        }
        if(contact_form.title.value.length<2){
            $('#title').css('border-color','red');
            isPass = false;
        }else{
            $('#title').css('border-color','#5cb85c')
        }
        if(contact_form.date.value.length<7){
            $('#date').css('border-color','red');
            isPass = false;
        }else{
            $('#date').css('border-color','#5cb85c')
        }
    }else{
        $('#qq').css('border-color','red');
        isPass = false;
    }
    console.log('b');
    if(isPass){
        console.log('c');
        // var budget = contact_form.budget.value;
        var user = {
            product : contact_form.product.value,
            title : contact_form.title.value,
            date : contact_form.date.value,
            href : contact_form.href.value,
            news_id : contact_form.news_id.value,
            img : contact_form.img.value,
            description : contact_form.description.value,
            action:'articles',
            user_name:'<?= @$_SESSION['www-ares'] ?>'
        };

        $.ajax({
            type: "POST",
            url: "articles_post.php",
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
</body>
</html>