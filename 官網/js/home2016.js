$(function() {



  $('.img-box').each(function(){
    var e = $(this);
    if(e.find('img').height()<188){
      e.addClass('flex-box flex-vc')
    }
  });

  //成功案例
  summary();
  $(window).resize(function(){
    summary();
  });

  function summary(){
    var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(ww >= 992){
      $('ul.text-left').each(function(){
        $(this).find('li').slice(2).hide();
        $(this).find('small').slice(2).remove();
        $(this).append('<small>…</small>');
      })
    }else{
      $('.text-left li').show()
      $('ul.text-left small').remove()
    }
  }
  function getAverageRGB(imgEl) {
    var blockSize = 5, // only visit every 5 pixels
    defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
    canvas = document.createElement('canvas'),
    context = canvas.getContext && canvas.getContext('2d'),
    data, width, height,
    i = -4,
    length,
    rgb = {r:0,g:0,b:0},
    count = 0;
    if (!context) {
      return defaultRGB;
    }
    height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
    width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;
    context.drawImage(imgEl, 0, 0);
    try {
      data = context.getImageData(0, 0, width, height);
    } catch(e) {
      /* security error, img on diff domain */console.log('x');
      return defaultRGB;
    }
    length = data.data.length;
    while ( (i += blockSize * 4) < length ) {
      ++count;
      rgb.r += data.data[i];
      rgb.g += data.data[i+1];
      rgb.b += data.data[i+2];
    }
    // ~~ used to floor values
    rgb.r = ~~(rgb.r/count);
    rgb.g = ~~(rgb.g/count);
    rgb.b = ~~(rgb.b/count);
    return rgb;
  }

  function bindEvent(el, eventName, eventHandler) {
    if (el.addEventListener){
      el.addEventListener(eventName, eventHandler, false);
    } else if (el.attachEvent){
      el.attachEvent('on'+eventName, eventHandler);
    }
  }


  // if(!window.document.documentMode){
    var active_img = document.querySelector(".swiper-slide-active .swiper-image");
    var rgb = getAverageRGB(active_img);
    document.querySelector("#banner").style.backgroundColor = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';
  // }


  window.addEventListener("load",function(){
    // swiper slider
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      }
      // slidesPerView: 'auto'
      // lazy:true,
      // loop: true
    });
    // if(!window.document.documentMode){
      swiper.on('slideChangeTransitionEnd', function () {
        var active_img = document.querySelector(".swiper-slide-active .swiper-image");
        var rgb = getAverageRGB(active_img);
        document.querySelector("#banner").style.backgroundColor = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';
      });
    // }

    //epaper
    var thumbnail_height = $('#epaper .thumbnail').innerHeight();
    var tp = thumbnail_height - 76;
    $('#epaper .thumbnail .txt').css({ 'top': tp + 'px' });

    $(window).resize(function() {
      var thumbnail_height = $('#epaper .thumbnail').innerHeight();
      var tp = thumbnail_height - 76;
      $('#epaper .thumbnail .txt').css({ 'top': tp + 'px' });
    });
  });


  $('#epaper .thumbnail, .fix-right-box').on('touchstart touchend', function(e) {
    $(this).toggleClass('touch');
  });
});
