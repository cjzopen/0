// const BODY = $('body');
var BODY = $('body');
// check for mobile device
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
  BODY.addClass('if-ie');
}
// if-edge
// if(/Edge\/\d./i.test(navigator.userAgent)){
//   BODY.addClass('if-edge');
// }
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
  BODY.addClass('if-safari');
}
jQuery.cachedScript = function( url, options ) {

  // Allow user to set any option except for dataType, cache, and url
  options = $.extend( options || {}, {
    dataType: "script",
    cache: true,
    url: url
  });

  // Use $.ajax() since it is more flexible than $.getScript
  // Return the jqXHR object so we can chain callbacks
  return jQuery.ajax( options );
};
//loading mask and slider img
// var LOADING = $('.loading');
// if(window.addEventListener){
//   window.addEventListener("load",function(){
//     LOADING.fadeOut(150, function() {
//       LOADING.remove();
//     });
//   });
// }else{
//   LOADING.remove();
// }




  // let $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  // const WINDOW = $(window);
  var WINDOW = $(window);
  // back-to-top
  // const TO_TOP = $('#back-to-top');
  var TO_TOP = $('#back-to-top');
  // WINDOW.scroll(function() {
  //   if ($(this).scrollTop() > 500) {
  //     TO_TOP.fadeIn(250);
  //   } else {
  //     TO_TOP.fadeOut(250);
  //   }
  //   var l = WINDOW.scrollTop() + 127;
  //   var r = $('footer').offset().top;
  //   var q = WINDOW.height();
  //   if (l > r - q + 123) {
  //     TO_TOP.addClass('abs');
  //   } else {
  //     TO_TOP.removeClass('abs');
  //   }
  // });
  TO_TOP.click(function(event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 400);
    return false;
  });
  //social share
  $('.social-wrap>a').click(function(){
    $('.social-wrap ul').toggle();
  });
  //menu
  $('#menu-button').on('click tap',function(){
    $('#menu #sort').slideToggle();
    $(this).toggleClass('act');
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
  //contact-circles background
  if( $('main>section').length % 2 == 1){
    $('#contact-circles').addClass('gray-bg');
  }
  // ul.check create svg
  if( $('.check').length ){
    $('.check>li').prepend('<svg class="check-circle flex-constant mt-1" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>');
  }
  //article click
  if( $('#news').length ){
    $('article').on('click',function(){
      var href = $(this).find('a').attr('href');
      // var newwin = window.open();
      // newwin.location= href;
      location.href = href;
    })
  }
  //accordion
  if($('.accordion').length){
    $('<link/>', {
       rel: 'stylesheet',
       type: 'text/css',
       href: '/public/css/accordion.css'
    }).appendTo('head');
  }
  // pages select
  if( $('#pages').length ){
    document.querySelector('#pages').addEventListener('change',function(e){
      if(e.target.value == 'all'){
        window.location.assign('./');
      }else{
        window.location.assign('?y='+e.target.value);
      }
    });
  }
  //lazyload img
  // $.getScript('/lib/jquery.lazyload.min.js',function(){
  //   $('img[data-original]').lazyload({effect: "fadeIn"}).trigger("appear");
  // });


  //baidu
  // if(document.referrer){
    // if(document.referrer.includes('baidu'))
  // }

  //loading mask
  // const LOADING = $('.loading');
  // var LOADING = $('.loading');
  // LOADING.hide();

  // footer slideToggle
  // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && viewWidth <= 575) {
  //   var FOOTER_H4 = $('#footer h4');
  //   FOOTER_H4.prepend('<span class="main-color">&#xFE40; </span>');
  //   FOOTER_H4.next().hide();
  //   FOOTER_H4.on('click',function(){
  //     $(this).next().slideToggle();
  //   });
  // }

document.addEventListener("click", function (evt) {
  var flyoutElement = document.getElementById("contact-us-side");
  var targetElement = evt.target; // clicked element
  do {
    if (targetElement == flyoutElement) {
      // This is a click inside. Do nothing, just return.
      flyoutElement.classList.add("active");
      return;
    } // Go up the DOM
    targetElement = targetElement.parentNode;
  } while (targetElement); // This is a click outside.
  flyoutElement.classList.remove("active");
});
// lazyload img
  var lazyloadImages = [].slice.call(document.querySelectorAll("img.lazyload"));
  var lazyloadBgs = [].slice.call(document.querySelectorAll(".bg-lazyload"));
  var footer = document.querySelector('#footer');
  var nav = document.querySelector('#menu');

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

    var lazyloadBgObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var lazyloadBg = entry.target;
          lazyloadBg.style.backgroundImage = "url('"+lazyloadBg.dataset.image+"')";
          if(lazyloadBg.dataset.height){
            lazyloadBg.style.minHeight = lazyloadBg.dataset.height;
          }
          if(lazyloadBg.dataset.position){
            lazyloadBg.style.backgroundPosition = lazyloadBg.dataset.position;
          }
          lazyloadBg.classList.remove("bg-lazyload");
          lazyloadBg.classList.add('bg-lazyloaded');
          lazyloadBgObserver.unobserve(lazyloadBg);
        }
      });
    });
    lazyloadBgs.forEach(function(lazyloadBg) {
      lazyloadBgObserver.observe(lazyloadBg);
    });

    var footerObserver = new IntersectionObserver(function(entries, observer) {
        if (entries[0].isIntersecting) {
          TO_TOP.addClass('abs');
        }else{
          TO_TOP.removeClass('abs');
        }
    });
    footerObserver.observe(footer);

    var navObserver = new IntersectionObserver(function(entries, observer) {
        if (entries[0].isIntersecting) {
          TO_TOP.hide();
        }else{
          TO_TOP.show();
        }
    });
    navObserver.observe(nav);
  } else {
    if( $('.lazyload').length ){
      $.cachedScript("/lib/lazysizes.min.js")
    }
    TO_TOP.show();

    var BANNER = $('.slider');
    if(BANNER){
      BANNER.css('background-image','url('+BANNER.attr('data-image')+')');
    }
  }