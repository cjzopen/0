var LOADING = $("#loading");
window.addEventListener ? window.addEventListener("load", function() {
    LOADING.fadeOut(150, function() {
        LOADING.remove()
    })
}) : window.attachEvent ? window.attachEvent("onload", function() {
    LOADING.fadeOut(150, function() {
        LOADING.remove()
    })
}) : LOADING.remove();



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


  // var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var WINDOW = $(window);
  // back-to-top
  var TO_TOP = $('#back-to-top');

  // TO_TOP.click(function(event) {
  //   event.preventDefault();
  //   $('html,body').animate({ scrollTop: 0 }, 400);
  //   return false;
  // });
  //social share
  $('#social-btn').on('click',function(){
    $(this).find('ul').toggle();
  });
  //menu
  $('#menu-button').on('click tap',function(){
    $('#menu #sort').slideToggle();
    $(this).toggleClass('act');
  });
  $('.under-menu-headline').on('mouseover tap','li',function(){
    var _wrapper = $(this).closest('.under-menu-headline');
    var _index = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    _wrapper.next('.under-menu-content').children().eq(_index).addClass('d-block').removeClass('d-none').siblings().addClass('d-none').removeClass('d-block');
  });

  // ul.check create svg
  if( $('.check').length ){
    $('.check>li').prepend('<svg class="check-circle flex-constant mt-1" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>');
  }
  function ImageInfo(path, onLoad) {
    var img = new Image();
    img.src = path;
    img.onload = function() {
      onLoad(img);
    }
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
  var footer = document.querySelector('#footer');
  var nav = document.querySelector('#menu');

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
          ImageInfo(lazyloadBg.dataset.bg, function(img) {
            var img_height=img.height;
            lazyloadBg.style.minHeight = img_height;
          });
          lazyloadBg.style.backgroundImage = "url('"+lazyloadBg.dataset.bg+"')";
          if(lazyloadBg.dataset.position){
            lazyloadBg.style.backgroundPosition = lazyloadBg.dataset.position;
          }
          if(lazyloadBg.dataset.color){
            lazyloadBg.style.color = lazyloadBg.dataset.color;
          }
          if(lazyloadBg.dataset.bgcolor){
            lazyloadBg.style.backgroundColor = lazyloadBg.dataset.bgcolor;
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
    $('.bg-lazyload[data-bg]').each(function(){
      var f_l =$(this);
        ImageInfo(f_l.attr('data-bg'), function(img) {
          var img_height=img.height;
          f_l.addClass('bg-lazyloaded').removeClass('bg-lazyload');
          f_l.css({
            'background-image':'url('+f_l.attr('data-bg')+')',
            'min-height': img_height
          });
        });
    });
  }
// });