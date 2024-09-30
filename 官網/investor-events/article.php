<?php
$query = "SELECT * FROM events WHERE id = '{$id}' ";
$rs = $db->query($query);
$row = $rs->fetch(PDO::FETCH_ASSOC);

$year = substr($row['date'], 0, 4);

$page['title']=$row['date'].$row['headline'].' | 資通電腦';
$page['description']='資通電腦之公開資訊，提供關係人'.$row['date'].'簡易資訊：'.$row['headline'];
$page['canonical']='https://www.ares.com.tw/investor-events/'.$row['id'];
$page['css']=array('/css/events.css','/css/investor.css');
$page['ogtype']='article';
$page['other']=array('<meta property="fb:app_id" content="900338710010817">');

include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="https://www.ares.com.tw/investor-events/" itemprop="item"><span itemprop="name">重大訊息</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">訊息摘要</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center">
      <i class="prev">&lt;</i>
      <ul>
<?php  for($i=$last; $i>=1999; $i-- ){ ?>
        <li><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>"><?= $i; ?></a></li>
<?php } ?>
      </ul>
      <i class="next">&gt;</i>
    </div>
  </div>
  <section class="list events hentry">
    <div class="container">
      <h2 class="text-center category">訊息摘要</h2>
      <hr>
      <div class="row">
<?php
echo '<div class="col-6 col-md-2 bg-blue4">序號</div>
        <div class="col-6 col-md-2">'.$row['sn'].'</div>
        <div class="col-6 col-md-2 bg-blue4">發言日期</div>
        <div class="col-6 col-md-2 published">'.$row['date'].'</div>
        <div class="col-6 col-md-2 bg-blue4">發言時間</div>
        <div class="col-6 col-md-2">'.$row['time'].'</div>
        <div class="col-6 col-md-2 bg-blue4">發言人</div>
        <div class="col-6 col-md-2 author vcard"><span class="fn">'.$row['name'].'</span></div>
        <div class="col-6 col-md-2 bg-blue4">發言人職稱</div>
        <div class="col-6 col-md-2">'.$row['title'].'</div>
        <div class="col-6 col-md-2 bg-blue4">發言人電話</div>
        <div class="col-6 col-md-2">'.$row['phone'].'</div>
        <div class="col-12 col-md-2 bg-blue4">主旨</div>
        <div class="col-12 col-md-10 entry-title">'.$row['headline'].'</div>
        <div class="clearfix"></div>
        <div class="col-6 col-md-3 bg-blue4">符合條款</div>
        <div class="col-6 col-md-3">'.$row['article'].'</div>
        <div class="col-6 col-md-3 bg-blue4">事實發生日</div>
        <div class="col-6 col-md-3 updated">'.$row['occur'].'</div>
        <div class="clearfix"></div>
        <div class="col-12 bg-blue4">說明</div>
        <div class="col-12 entry-content"><pre>'.$row['content'].'</pre></div>';
?>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="../js/events-list.js"></script> -->
<script>
window.addEventListener("load", function(){
  var window_width = $(window).width();
    //paging
  var pagingList = $('.paging li');
  pagingList.hide();
  if(window_width < 500){
    $('.paging li:lt(3)').show();
    $('.paging .prev').click(function() {
      var first = $('.paging ul').children('li:visible:first');
      first.prevAll(':lt(3)').show();
      first.prev().nextAll().hide()
    });

    $('.paging .next').click(function() {
      var last = $('.paging ul').children('li:visible:last');
      last.nextAll(':lt(3)').show();
      last.next().prevAll().hide();
    });
  }else{
    $('.paging li:lt(5)').show();
    $('.paging .prev').click(function() {
      var first = $('.paging ul').children('li:visible:first');
      first.prevAll(':lt(5)').show();
      first.prev().nextAll().hide()
    });

    $('.paging .next').click(function() {
      var last = $('.paging ul').children('li:visible:last');
      last.nextAll(':lt(5)').show();
      last.next().prevAll().hide();
    });
  }
})
</script>
</body>
</html>