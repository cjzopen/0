var BODY = $('body');
// check for mobile device
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
  BODY.addClass('if-ie');
}
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
  BODY.addClass('if-safari');
}
//loading mask
// var LOADING = $('.loading');
// if(window.addEventListener){
//   window.addEventListener("load",function(){
//     LOADING.fadeOut(200, function() {
//       LOADING.remove();
//     });
//   });
// }else if(window.attachEvent){
//     window.attachEvent("onload",function(){
//     LOADING.fadeOut(200, function() {
//       LOADING.remove();
//     });
//   });
// }else{
//   LOADING.remove();
// }
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

  // let $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var WINDOW = $(window);
  // back-to-top
  var TO_TOP = $('#back-to-top');
  // WINDOW.scroll(function() {
    // if ($(this).scrollTop() > 500) {
    //   TO_TOP.fadeIn(250);
    // } else {
    //   TO_TOP.fadeOut(250);
    // }
    // var l = WINDOW.scrollTop() + 127;
    // var r = $('footer').offset().top;
    // var q = WINDOW.height();
    // if (l > r - q + 123) {
    //   TO_TOP.addClass('abs');
    // } else {
    //   TO_TOP.removeClass('abs');
    // }

    //background lazyload
    // if($('.bg-lazyload').length){
    //   $('.bg-lazyload').each(function(){
    //     var f_l =$(this);
    //     var f = f_l.offset().top;
    //     if (l > f - q + 123) {
    //       f_l.addClass('lazyloaded');
    //     }
    //   });
    // }
  // });
  TO_TOP.click(function(event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 400);
    return false;
  });
  //social share
  // $('.social-wrap>a').click(function(){
  //   $('.social-wrap ul').toggle();
  // });
  //menu
  $('.menu-button').on('click tap',function(){
    $('html, body').toggleClass('overflow-hidden');
    $('#mobile-menu').fadeToggle();
  });
  $('.under-menu-headline').on('mouseover tap','li',function(){
    var _wrapper = $(this).closest('.under-menu-headline');
    var _index = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    _wrapper.next('.under-menu-content').children().eq(_index).addClass('d-block').removeClass('d-none').siblings().addClass('d-none').removeClass('d-block');
  });
  // 繁簡轉換
  // $.getScript('/lib/tw_cn.js',function(){
  //   let defaultEncoding = 1;
  //   let translateDelay = 0;
  //   let cookieDomain = 'ares.com.tw';
  //   let msgToTraditionalChinese = "繁體";
  //   let msgToSimplifiedChinese = "简体";
  //   let translateButtonId = "translateLink";
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
  // if( $('main>section').length % 2 == 1){
  //   $('#contact-circles').addClass('gray-bg');
  // }
  // ul.check create svg
  if( $('.check').length ){
    $('.check>li').prepend('<svg class="check-circle flex-constant mt-1" width="22" height="22" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>');
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
//lazyload img
// document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = [].slice.call(document.querySelectorAll("img.lazyload"));
  var lazyloadBgs = [].slice.call(document.querySelectorAll(".bg-lazyload"));

  if ("IntersectionObserver" in window && !$('picture').length) {
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
          var bgTrigger = true;
          if(lazyloadBg.dataset.view){
            if(lazyloadBg.dataset.view >= viewWidth){
              bgTrigger = false;
            }
          }
          if(bgTrigger){
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
        }
      });
    });
    lazyloadBgs.forEach(function(lazyloadBg) {
      lazyloadBgObserver.observe(lazyloadBg);
    });
  } else {
    if( $('.lazyload').length ){
      $.cachedScript("/lib/lazysizes.min.js")
    }
    if( $('.bg-lazyload').length ){
      $('.bg-lazyload').each(function(){
        var $this =$(this);
        $this.css('background-image','url("'+$this.attr('data-image')+'")');
      })
    }
  }
// });