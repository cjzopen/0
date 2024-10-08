<?php
require('ip.php');
$ares = "sqlite:/example/global/events.db";
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
  $_html = $_html.'<tr><td>'.$row['id'].'</td><td>'.$row['title'].'</td><td>'.$row['date'].'</td><td>'.$row['product'].'</td><td style="display: none">'.$row['redirect'].'</td><td style="display: none">'.$row['news_name'].'</td></tr>';
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
    <title>刪除最新消息</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<style>
.table tbody tr{cursor:pointer;}
.table tbody tr:hover *{
    background-color:#2858aa;
    color:#fff;
}
</style>
<body>
<div id="all">
    <br>
    <section class="container-fluid">
        <a href="./" class="btn btn-info">返回上一頁</a>
        <h2 class="text-center">選擇要刪除的文章</h2>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>標題</th>
              <th>日期</th>
              <th>產品</th>
              <th style="display: none">外連連結</th>
              <th style="display: none">自訂連結</th>
            </tr>
          </thead>
          <tbody>
        <?php echo $_html; ?>
          </tbody>
        </table>
    </section>
</div>
<script>
var $_id = '';
var $array = [];
var $this;
$('.table tbody tr').click(function(){
    $this = $(this);
    $this.find('td').each(function(){
        $array.push($(this).html())
    })
    $_id = $array[0];
    $title = $array[1];
    formCheck();
})

function formCheck(){
    var isPass = true;
    var msg = $('#msg');
    var r = confirm("確定要刪除？ "+$title);
    msg.text('');
    msg.css('color','red');
    if (r == false) {
        isPass = false;
    }
    if(isPass){
        var user = {
            id : $_id,
            title:$title,
            action:'delete',
            user_name:'<?= @$_SESSION['www-ares'] ?>'
        };

        $.ajax({
            type: "POST",
            url: "delete_post.php",
            data: user,
            beforeSend: function(){
                var btn = $('.table');
                btn.css({'opacity':'0.5','pointer-events':'none'})
            }
        }).done(function(data){
            var sMsg = data;
            console.log(data)
            if(data['send']==true){
                msg.text('送出成功');
                msg.css('color','#5cb85c');
                $this.remove();
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
            var btn = $('.table');
            btn.css({'opacity':'1','pointer-events':'all'})
        });
    }

    return false;
};
</script>
</body>
</html>