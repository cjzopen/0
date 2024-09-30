<?php
$query = "SELECT * FROM events WHERE date LIKE '%{$year}%' ORDER BY date DESC";
$rs = $db->query($query)->fetchAll();

$page['title']=$year.' 年重大訊息 | 資通電腦';
$page['description']='資通電腦投資人專區 公開資訊之重大訊息。';
$page['canonical']='https://www.ares.com.tw/investor-events/y'.$year;
$page['css']=array('/css/events.css','/css/investor.css');
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
            <a href="https://www.ares.com.tw/investor-events/" itemprop="item"><span itemprop="name" onclick="return false;">重大訊息</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center">
      <i class="prev" aria-hidden="true">&lt;</i>
      <ul>
<?php  for($i=$last; $i>=1999; $i-- ){ ?>
        <li><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>"><?= $i; ?></a></li>
<?php } ?>
      </ul>
      <i class="next" aria-hidden="true">&gt;</i>
    </div>
  </div>
  <div class="container">
    <div class="row">
<?php
$investor = 'events';
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-list.php');
?>
        <section class="list col-12 col-md-9 events">
          <h2 class="text-left">重大訊息</h2>
          <hr class="d-inline-block">
          <table>
<?php
$ehtml='';
  foreach ($rs as $row) {
    // $row['photo'] = '/img/events.jpg';
    $row['href'] = $row['id'];

    $ehtml=$ehtml.'<tr>
          <td><time datetime="'.$row['date'].'">'.$row['date'].'</time></td>
          <td>
            <a class="color-blue" href="'.$row['href'].'">'.$row['headline'].'</a>
          </td>
        </tr>';
  }
echo $ehtml;
?>
          </table>
          <div class="text-right mt-3">
            <small>相關連結 &gt;&gt; <a href="https://mops.twse.com.tw/mops/web/t05st01" rel="noopener noreferrer" target="_blank">公開資訊觀測站</a></small>
          </div>
        </section>
    </div>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/js/events-list.js" defer></script> -->
<script>
window.addEventListener('load', function() {
  var scro = $('section').offset().top - 96;
  $('html,body').animate({
    scrollTop: scro},
    0);
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