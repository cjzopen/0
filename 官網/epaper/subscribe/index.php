<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "newsletter";
$page['title']='訂閱電子報 | 資通電腦';
$page['description']='訂閱後，資通電腦電子報每個月中都會提供各式產品介紹與活動快訊，歡迎訂閱！';
$page['canonical']='https://www.ares.com.tw/epaper/subscribe/';
$page['css']=array('/css/buttons.css','/css/consult.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>

  <figure class="slider">
    <img class="img-fluid lazyload" src="/img/epaper/epaper-banner-low.jpg" data-src="/img/epaper/epaper-banner-400.png" alt="*">
    <figcaption class="color-black">
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
            <a href="../" itemprop="item"><span itemprop="name">電子報</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">訂閱 & 退訂</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="consult">
  <section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/form-epaper.php');
?>
  </section>
  <section class="gray-bg" id="cancel">
    <h2 class="text-center">退訂</h2>
    <hr>
    <form id="cancel_form" method="post" name="cancel_form" onsubmit="return cancelCheck();">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-md-offset-3">
            <label for="cemail" style="font-weight: normal">您的 Email <span class="danger">*</span></label>
            <p class="danger erc"> 請填寫 Email</p>
            <input type="text" class="form-control" name="cemail" id="cemail">
          </div>
        </div>
        <div class="text-center">
          <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-" id="example2"></div>
        </div>
        <div class="btn-ctrl text-center" style="padding-top: 2rem">
          <button type="submit" class="button button--ujarak button--border-medium button--round-s button--text-thin button--size"><span>送出</span></button>
        </div>
      </div>
    </form>
  </section>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/privacy.php');
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<style>#cancel,.erc{display:none;}</style>
<script src="/lib/sweetalert2@8.js" defer></script>
<script>
window.addEventListener("load", function(event) {
    $('#consult').show(); //確保有讀到 jquery
    $('#cancel').show();
    var supportPromise = ('Promise' in window);
    if(!supportPromise){
      $.ajax({
        url: "/lib/promise-polyfill.js",
        dataType: "script",
        async: false
      });
    }

    // 用 getScript 確保是新的js
    $.when(
      $.getScript( "/js/check-epaper.js" ),
      $.getScript( "./cancel.js" ),
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

  });
</script>
</body>
</html>

