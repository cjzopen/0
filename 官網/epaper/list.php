<?php
$rs = $db->query("SELECT * FROM newsletter WHERE month LIKE '{$year}%' ORDER BY month DESC")->fetchAll();

$page['title']='資通電子報 - 資訊產業管理趨勢與 IT 技術交流';
$page['description']='資通電腦於每月 15 日前後發送電子報，提供資訊產業最新重要管理趨勢、技術交流文章、熱門職缺、多樣產品介紹與活動快訊，歡迎訂閱！';
$page['canonical']='https://www.ares.com.tw/epaper/';
$amp='https://www.ares.com.tw/amp/epaper/y'.$year;
$page['css']=array('/css/buttons.css','/css/epaper.css','/css/consult.css');
include($_SERVER['DOCUMENT_ROOT'].'/strac/head.php');
?>
  <figure class="slider">
    <img class="img-responsive lazyload" src="/img/epaper/epaper-banner-low.jpg" data-src="/img/epaper/epaper-banner-400.png" alt="*">
    <figcaption>
      <h1><img src="/img/epaper/epaper-icon.svg" alt="*">電子報</h1>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" onclick="return false;" itemprop="item"><span itemprop="name">電子報 <?= $year; ?></span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="gray-bg paging text-center">
      <i class="fa fa-angle-left prev" aria-hidden="true"></i>
      <ul>
<?php
for($i=$last; $i>=2007; $i-- ){
?>
        <li><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>" rel="<?= $year < $i ? 'prev' : 'next'?>"><?= $i; ?></a></li>
<?php
}
?>
      </ul>
      <i class="fa fa-angle-right next" aria-hidden="true"></i>
    </div>
  </div>
  <section id="epaper">
    <div class="container">
      <div class="row text-center">
        <h2 id="select-year"><?= $year ?></h2>
        <hr>
        <div class="flex-box">
<?php
//2016以後抓 marketing 網域的大圖，以前的抓資料庫路徑的小圖
if($year>=2016){
  foreach ($rs as $row) {
    if($row['month'] > '2019-04'){
      $row['img'] = 'https://marketing.ares.com.tw/images/'.$row['month'].'/img_index_focus.jpg';
    }else{
      if (strpos($row['link'], '/dm/') == false) {
        $pattern = "/\/newsletter\//";
        $rs_link = preg_replace($pattern, "/dm/newsletter-", $row['link']);
        $row['url'] = parse_url($rs_link);
      }else{
        $row['url'] = parse_url($row['link']);
      }
      $row['img'] = 'https://'.$row['url']['host'].$row['url']['path'].'images/img_index_focus.jpg';
    }
    // $row['meta'] = get_meta_tags($row['link']);
    // $row['lead'] = mb_substr( $row['meta']['description'] ,0,140,"utf-8");
    $row['lead'] = strip_tags($row['content']);
?>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
              <figure>
                <img class="lazyload img-responsive" src="/img/temp.jpg" data-src="<?= $row['img'] ?>">
              </figure>
              <div class="txt-hover">
                <article class="text-left">
                  <span class="entry-summary"><?php echo $row['lead']; ?></span>
                  <div class="text-right orange-color">
                    <a href="<?= $row['link'] ?>" rel="external"><i class="fa fa-angle-double-right" aria-hidden="true"></i> 本期內容</a>
                  </div>
                </article>
              </div>
              <div class="txt">
                <div class="tc">
                  <div class="text-center month"><?= substr($row['month'], 5, 2) ?></div>
                  <div class="year"><?= substr($row['month'], 0, 4) ?></div>
                </div>
                <div class="tc">
                  <h3 class="entry-title"><a href="<?= $row['link'] ?>" rel="external bookmark"><?= $row['title'] ?></a></h3>
                </div>
              </div>
            </div>
          </div>
   <?php } ?>
<?php
}else{
  foreach ($rs as $row) {
        $row['url'] = parse_url($row['link']);
        // $row['img'] = $row['url']['scheme'].'://'.$row['url']['host'].$row['url']['path'].'images/img_index_focus.jpg';
?>
          <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="<?= $row['link'] ?>" rel="external">
              <div class="thumbnail2">
                <figure>
                  <img class="lazyload" src="/img/temp.jpg" data-src="<?= $row['image'] ?>">
                </figure>
                <h5><?= $row['month'] ?></h5>
              </div>
            </a>
          </div>
<?php }}?>
        </div>
      </div>
    </div>
  </section>
  <section id="consult" class="gray-bg">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/form-epaper.php');
?>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/privacy.php');
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
<script src="/lib/sweetalert2@8.js"></script>
<script>
  $(function(){
    var window_width = $(window).width();
    $('.thumbnail').on('touchstart touchend', function(e) {
      $(this).toggleClass('touch');
    });

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

    if (history.pushState) {
      $('.paging li a').click(function(event){
        event.preventDefault();
        $(this).blur()
        var year = $(this).text();
        var data = {
          year : year
        }

        $('.paging a').removeClass('act')
        $(this).addClass('act')
        $('#epaper .flex-box').html('<i class="fa fa-spinner fa-span fa-2x fa-fw"></i><span>Loading...</span>')
        $.ajax({
          url: 'year.php',
          type: "GET",
          data: data,
          dataType: 'html'
        }).done(function(html) {
          window.history.replaceState({year: year}, '', 'y'+year);
          $('#select-year').text(year);
          $('#epaper .flex-box').html(html);
          $('.ares-breadcrumb li').last().find('span').text('電子報 '+year);
        }).fail(function(jqXHR, status, errorThrown) {
          var errMsg;
          if (jqXHR.status === 0) {
            errMsg = 'Not connect.  Verify Network.';
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
          $('#epaper .flex-box').html(errMsg);
          $('.paging a').removeClass('act')
          console.log('header load Error: ' + errorThrown)
          console.log('Status: ' + status)
          console.dir(jqXHR)
        }).always(function() {
          var st = $('#epaper').offset().top -80;
          $('#epaper .flex-box').fadeIn()
          $('html,body').stop(true,false).animate({scrollTop: st},200)
          $('.thumbnail img').on("error", function(){
            $(this).attr('src', 'https://api.fnkr.net/testimg/360x360/4479bc/FFF/?text=ARES');
          });
        });
        return false;
      })
    }


    //訂閱電子報

    $('#consult').show();
    $('#cancel').show();
    var supportPromise = ('Promise' in window);
    if(!supportPromise){
      $.ajax({
        url: "/lib/promise-polyfill.js",
        dataType: "script",
        async: false
      });
    }
    $.when(
      $.getScript( "/js/check-epaper.js" ),
      $.Deferred(function( deferred ){
        $( deferred.resolve );
      })
    ).done(function(){
      // console.log('script loaded')
    });
    //隱私權保護政策
    $('#pop-agree').click(function(){
      $('.agree-content').fadeIn()
      $('body').addClass('ofh')
    })

    $('.agree-content').on('click', function(e) {
      if (e.target !== this)
      return;

      $('.agree-content').fadeOut()
      $('body').removeClass('ofh')
    })
    $('#agree-close').click(function(){
      $('.agree-content').fadeOut()
      $('body').removeClass('ofh')
    })
  })
</script>
</body>

</html>

