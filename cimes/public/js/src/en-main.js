// check for mobile device
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
  $('body').addClass('if-ie');
}
// if-edge
if(/Edge\/\d./i.test(navigator.userAgent)){
  $('body').addClass('if-edge');
}
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
  $('body').addClass('if-safari');
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
// loading mask
var $loading = $('.loading');
var BANNER = $('.slider');
if(window.addEventListener){
  window.addEventListener("load",function(){
    $loading.fadeOut(200, function() {
      $loading.remove();
    });
    if(BANNER){
      BANNER.css('background-image','url('+BANNER.attr('data-image')+')');
    }
  });
}else{
  $loading.remove();
}
$(function(){
  // var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var $window = $(window);
  // back-to-top
  var $toTop = $('#back-to-top');
  $window.scroll(function() {
    if ($(this).scrollTop() > 500) {
      $toTop.fadeIn(250);
    } else {
      $toTop.fadeOut(250);
    }
    var l = $window.scrollTop() + 127;
    var r = $('footer').offset().top;
    var q = $window.height();
    if (l > r - q + 123) {
      $toTop.addClass('abs');
    } else {
      $toTop.removeClass('abs');
    }
  });
  $toTop.click(function(event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 400);
    return false;
  });
  //social share
  $('.social-wrap>a').click(function(){
    $('.social-wrap ul').toggle()
  });
  //menu
  $('#menu-button').on('click tap',function(){
    $('#menu #sort').slideToggle();
    $(this).toggleClass('act');
  });
  //contact-circles background
  if( $('main>section').length % 2 == 1){
    $('#contact-circles').addClass('gray-bg');
  }
  // ul.check create svg
  if( $('.check').length ){
    $('.check>li').prepend('<svg class="check-circle flex-constant" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>');
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

  //loading mask
  // var $loading = $('.loading');
  // $loading.hide();
});

// lazyload img
  var lazyloadImages = [].slice.call(document.querySelectorAll("img.lazyload"));

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
  } else {
    if( $('.lazyload').length ){
      $.cachedScript("/lib/lazysizes.min.js")
      // .done(function(){
        // $.each('.lazyload')
      // });
    }
  }