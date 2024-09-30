// check for mobile device
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {}
// if-ie
if(navigator.userAgent.match(/Trident\/7\./)) {
  $('body').addClass('if-ie');
}
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
  $('body').addClass('if-safari');
}
//loading mask
// var $loading = $('.loading');
// if(window.addEventListener){
//   window.addEventListener("load",function(){
//     $loading.fadeOut(200, function() {
//       $loading.remove();
//     });
//   });
// }else if(window.attachEvent){
//     window.attachEvent("onload",function(){
//     $loading.fadeOut(200, function() {
//       $loading.remove();
//     });
//   });
// }else{
//   $loading.remove();
// }

  // var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var $window = $(window);
  // back-to-top
  var $toTop = $('#back-to-top');
  $toTop.click(function(event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: 0 }, 400);
    return false;
  });
  //menu
  $('#menu-button').on('click tap',function(){
    $('#menu-mobile').slideToggle();
    $(this).toggleClass('act');
  });

  // ul.check create svg
  if( $('.check').length ){
    $('.check>li').prepend('<svg class="check-circle flex-shrink-0" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>');
  }
  //article click
  if( $('#news').length ){
    $('#news article').on('click',function(){
      var href = $(this).find('a').attr('href');
      // var newwin = window.open();
      // newwin.location= href;
      location.href = href;
    })
  }
  if( $('.accordion').length ){
    var linkElem = document.createElement('link');
    document.getElementsByTagName('head')[0].appendChild(linkElem);
    linkElem.rel = 'stylesheet';
    linkElem.type = 'text/css';
    linkElem.href = '/public/css/accordion.css';
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
// document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = [].slice.call(document.querySelectorAll("img.lazy"));
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
          lazyloadImage.classList.remove("lazy");
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

  //   var footerObserver = new IntersectionObserver(function(entries, observer) {
  //     if (entries[0].isIntersecting) {
  //       $toTop.addClass('abs');
  //     }else{
  //       $toTop.removeClass('abs');
  //     }
  // });
  // footerObserver.observe(footer);

  // var navObserver = new IntersectionObserver(function(entries, observer) {
  //     if (entries[0].isIntersecting) {
  //       $toTop.hide();
  //     }else{
  //       $toTop.show();
  //     }
  // });
  // navObserver.observe(nav);
  } else {
    if( $('.lazyload').length ){
      $.getScript("/lib/lazysizes.min.js")
    }
    $toTop.show();
    $('.bg-lazyload').each(function(){
      var $this=$(this);

      $this.addClass('bg-lazyloaded');
      if($this.data('height')){
        $this.css('min-height',$this.data('height'));
      }
      if($this.data('position')){
        $this.css('background-position',$this.data('position'));
      }
      if($this.data('color')){
        $this.css('color',$this.data('color'));
      }
      if($this.data('bgcolor')){
        $this.css('background-color',$this.data('bgcolor'));
      }
      $this.css('background-image','url('+$this.data('image')+')').delay(200).queue(function(){
        $(this).removeClass('bg-lazyload');
        $(this).dequeue();
      });
    });
  }
// });