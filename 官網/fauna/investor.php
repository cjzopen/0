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
.table{
    max-width:480px;
    margin:16px auto;
}
.table td{
    width: 50%;
    padding:0!important;
}
td input{
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
        <a href="https://www.ares.com.tw/investor-revenue/" class="btn btn-info">營業收入資訊</a>
        <h2 class="text-center">營業收入</h2>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <br><br>
                <form id="contact_form" name="contact_form" method="post" action="">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <td>*日期</td>
                            <td><input type="text" id="month" name="month" placeholder="yyyy-mm"></td>
                        </tr>
                        <tr>
                            <td>*本月</td>
                            <td><input type="text" id="this_year" name="this_year" placeholder="本月"></td>
                        </tr>
                        <tr>
                            <td>*去年同期</td>
                            <td><input type="text" id="last_year" name="last_year" placeholder="去年同期"></td>
                        </tr>
                        <tr>
                            <td>*增減金額</td>
                            <td><input type="text" id="diff" name="diff" placeholder="增減金額"></td>
                        </tr>
                        <tr style="border-bottom: 2px solid;">
                            <td>*增減百分比</td>
                            <td><div class="flex"><input type="text" id="percent" name="percent" placeholder="增減百分比"><span>%</span></div></td>
                        </tr>
                        <tr>
                            <td>*本年累計</td>
                            <td><input type="text" id="this_total" name="this_total" placeholder="本年累計"></td>
                        </tr>
                        <tr>
                            <td>*去年累計</td>
                            <td><input type="text" id="last_total" name="last_total" placeholder="去年累計"></td>
                        </tr>
                        <tr>
                            <td>*增減金額</td>
                            <td><input type="text" id="diff_total" name="diff_total" placeholder="增減金額"></td>
                        </tr>
                        <tr>
                            <td>*增減百分比</td>
                            <td><div class="flex"><input type="text" id="percent_total" name="percent_total" placeholder="增減百分比"><span>%</span></div></td>
                        </tr>
                        <tr>
                            <td>備註</td>
                            <td><textarea type="text" id="note" name="note" placeholder="備註"></textarea></td>
                        </tr>
                    </table>
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
function forCheck(){
    var input=new Array();
    var k =$("form input[type=text]").each(function(){
       input.push($(this).val());
    });
    console.log(input.every(function(e){
        return e.length>=1;
    }))
    // console.log(input);
     return false;
}
$('button').on('mouseover',function(){
     forCheck()
})
function formCheck(){
    var isPass = true;
    var msg = $('#msg');
    msg.text('');
    msg.css('color','red');
    var input=new Array();
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
            month : contact_form.month.value,
            this_year : contact_form.this_year.value,
            last_year : contact_form.last_year.value,
            diff : contact_form.diff.value,
            percent : contact_form.percent.value,
            this_total : contact_form.this_total.value,
            last_total : contact_form.last_total.value,
            diff_total : contact_form.diff_total.value,
            percent_total : contact_form.percent_total.value,
            note : contact_form.note.value,
            action:'每月營收',
            title: contact_form.month.value,
            user_name:'<?= @$_SESSION['www-ares'] ?>'
        };

        $.ajax({
            type: "POST",
            url: "investor_post.php",
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