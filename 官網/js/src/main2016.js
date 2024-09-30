var LOADING=$("#loading");window.addEventListener?window.addEventListener("load",function(){LOADING.fadeOut(150,function(){LOADING.remove()})}):window.attachEvent?window.attachEvent("onload",function(){LOADING.fadeOut(150,function(){LOADING.remove()})}):LOADING.remove();

$(document).ready(function() {
  // CLOSE MOBILE MENU AFTER CLICK
  var navMain = $(".navbar-rwd");
  navMain.on("click", "a", null, function() {
    // navMain.rwd('hide');
  });

  var offset = 200;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(400);
    } else {
      $('.back-to-top').fadeOut(400);
    }
  });
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 500);
    return false;
  })

  // check for mobile device
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $('body').addClass('if-mobile');
    $('.fix-right-box').on('click',function(){
      $(this).addClass('touch')
    })
    $('*').not('.fix-right-box').on('click',function(){
      $('.fix-right-box').removeClass('touch')
    })
    $('.carousel-control').show();
  }else{
    // if($('.fixbg').length)$('.fixbg').css('background-image', 'url(/img/Taiper101.png)');
    if($('.wow').length){
      $.getScript("/lib/wow/js/wow.min.js")
      .done(function(){
        $('head').append('<link rel="stylesheet" href="/lib/wow/css/animate.css">');
        new WOW().init();
      })
    }
  }
  // if-ie
  if(navigator.userAgent.match(/Trident\/7\./)) {
    $('body').addClass('if-ie');
  }
  //if edge
  if(/Edge\/\d./i.test(navigator.userAgent)){
    $('body').addClass('if-edge');
  }
  $('.social .select').click(function(){
    $(this).find('.small-group').slideToggle(50);
  });
  $('.social .select').mouseleave(function(){
    $(this).find('.small-group').slideUp(50);
  })

  //nav list
  var windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  if (windowWidth > 991) {
    $('#navbar').addClass('block');
    $('.l2').addClass('hide');
    $('.under-nav').removeClass('hide');
    $('.under-nav a').click(function(){
      $(this).closest('.under-nav').hide();
    });
    $('.toggle').closest('li').hover(function(){
      $(this).siblings('li').find('.under-nav').hide();
      $(this).find('.under-nav').show();
    },function(){
      $(this).find('.under-nav').hide();
    });
  } else {
    $('#navbar').removeClass('block');
    $('.l2').removeClass('hide');
    $('.under-nav').addClass('hide');
    $('.toggle').click(function() {
      $(this).next('ul').slideToggle();
    });
    $('.l2>li>a').click(function() {
      $(this).next('ol').slideToggle();
    });
  }

  $(window).resize(function() {
    var windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if (windowWidth > 991) {
      $('#navbar').addClass('block');
      $('.l2').addClass('hide');
      $('.under-nav').removeClass('hide');
      $('.under-nav a').click(function(){
        $(this).closest('.under-nav').hide();
      });
      $('.toggle').closest('li').hover(function(){
        $(this).siblings('li').find('.under-nav').hide();
        $(this).find('.under-nav').show();
      },function(){
        $(this).find('.under-nav').hide();
      });
    } else {
      // history.go(0);
      $('#navbar').removeClass('block');
      $('.l2').removeClass('hide');
      $('.under-nav').addClass('hide');
      $('.toggle').unbind('click');
      $('.toggle').click(function() {
        $(this).next('ul').slideToggle();
      });
      $('.l2>li>a').unbind('click');
      $('.l2>li>a').click(function() {
        $(this).next('ol').slideToggle();
      });
    }

  });
  $('.navbar-toggle').click(function() {
    $('nav').slideToggle();
    $(this).toggleClass('act');
  });

  // rel="external" 開新分頁
  // function externalLinks() {
  //   if (!document.getElementsByTagName) return;
  //   var anchors = document.getElementsByTagName("a");
  //   for (var i=0; i<anchors.length; i++) {
  //     var anchor = anchors[i];
  //     if (anchor.getAttribute("href") &&
  //     anchor.getAttribute("rel") == "external")
  //       anchor.target = "_blank";
  //   }
  // }()
  // window.onload = externalLinks;
  // $(document).on('click','a[rel=external]', function(){
  //   window.open($(this).attr('href'));
  //   return false;
  // })


  //圖片長寬比
  var ratio = 0.53;
  var $img_box = $(".img-box");

  $(document).ready(function() {
    $img_box.height( $img_box.width() * ratio );
  });

  $(window).resize(function() {
    $img_box.height( $img_box.width() * ratio );
  });

  // 繁簡轉換
  // $.getScript('/lib/tw_cn.js',function(){
  //   var defaultEncoding = 1;
  //   var translateDelay = 0;
  //   var cookieDomain = 'ares.com.tw';
  //   var msgToTraditionalChinese = "繁體";
  //   var msgToSimplifiedChinese = "简体";
  //   var translateButtonId = "translateLink";
  //   translateInitilization();
  // });
  // function getCookie(name) {
  //   var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
  //   if (arr != null) return unescape(arr[2]);
  //   return null;
  // }
  // var targetEncodingCookie = 'targetEncodingares';
  // if(document.cookie.indexOf(targetEncodingCookie) > -1){
  //   var cookieV = getCookie(targetEncodingCookie);
  //   if(cookieV == 1){
  //     document.cookie = targetEncodingCookie + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  //   }else if(cookieV == 2){
  //     document.body.classList ? document.body.classList.add('cn') : document.body.className += ' cn';
  //   }
  // }


  //footer to-top-icon
  $(window).scroll(function() {
    var l = $(window).scrollTop() + 127;
    var r = $('footer').offset().top;
    var q = $(window).height();
    if (l > r - q + 123) {
      $('.back-to-top').addClass('abs');
    } else {
      $('.back-to-top').removeClass('abs');
    }
    if($('.fixbg.lazyload').length){
      var f_l =$('.fixbg.lazyload');
      var f = f_l.offset().top;
      if (l > f - q + 123) {
        f_l.addClass('lazyloaded');
        f_l.removeClass('lazyload');
      }
    }
    if($('.lazyloadbg').length){
      $('.lazyloadbg').each(function(){
        var $this=$(this);
        var f = $this.offset().top;
        if (l > f - q + 123) {
          $this.addClass('bg lazyloaded');
          $this.css('background-image','url('+$this.attr('data-image')+')').delay(200).queue(function(){
            $(this).removeClass('lazyloadbg');
            $(this).dequeue();
          });
        }
      });
    }


  // icon animate
  // function isVisible(elem){
  //     var docViewTop = $(window).scrollTop();
  //     var docViewBottom = docViewTop + $(window).height();
  //     var elemTop = $(elem).offset().top;
  //     var elemBottom = elemTop + $(elem).height();
  //     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  // }

  // $(window).scroll(function() {
  //     // console.log('scroll')
  //     $('.fademe').each(function(i) {
  //     if (isVisible(this)) {
  //       var row = $(this);
  //       setTimeout(function(){
  //         row.addClass('uk-animation-scale-up');
  //       },250*i);
  //     }
  //     });
  //   });
  });

  //accordion
  if($('.accordion').length){
    $('<link/>', {
       rel: 'stylesheet',
       type: 'text/css',
       href: '/css/accordion.css'
    }).appendTo('head');
  }

  // if( $('.lazyload').length ){
  //   $.getScript("/lib/lazysizes.min.js").done(function(){
  //     // ver 4.0.2
  //   })
  // }

  // $(window).on('load',function(){
  //   if( $('.sticky').length ) {
  //     var sticky = $('.sticky');
  //     var sticky_height = sticky.outerHeight();
  //     var sticky_st = sticky.position().top;
  //     $(window).resize(function() {
  //       sticky.next().css({ 'margin-top': 0 });
  //       sticky.removeClass('navbar-fixed-top');
  //       sticky.show()
  //       sticky_height = sticky.outerHeight();
  //       sticky_st = sticky.position().top;
  //     })
  //     $(window).scroll(function() {
  //       var win_st = $(window).scrollTop();
  //       if(win_st > sticky_st){
  //         sticky.next().css({ 'margin-top': sticky_height });
  //         sticky.addClass('navbar-fixed-top');
  //       }else{
  //         sticky.next().css({ 'margin-top': 0 });
  //         sticky.removeClass('navbar-fixed-top');
  //         sticky.show();
  //       }
  //     })
  //   }
  // })
});

//lazyload
var lazyloadImages = [].slice.call(document.querySelectorAll("img.lazyload"));

  if ("IntersectionObserver" in window) {
  var lazyloadImageObserver = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      var lazyloadImage = entry.target;
      lazyloadImage.src = lazyloadImage.dataset.src;
      if(lazyloadImage.dataset.srcset){
      lazyloadImage.srcset = lazyloadImage.dataset.srcset;
      }
      lazyloadImage.classList.remove("lazyload");
      lazyloadImage.classList.add('lazyloaded');
      lazyloadImageObserver.unobserve(lazyloadImage);
    }
    });
  });

  lazyloadImages.forEach(function(lazyloadImage) {
    lazyloadImageObserver.observe(lazyloadImage);
  });
  } else {
    if( $('.lazyload').length ){
      $.getScript("/lib/lazysizes.min.js")
    }
  }