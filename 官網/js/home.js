window.addEventListener("load",function(){
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
});
$('.news-switch-label').on('click',function(){
  var list_name = $(this).data().list;
  $('.news-switch-label,.article-list').removeClass('active');
  $(this).addClass('active');
  // $('.article-list').removeClass('active');
  $('.article-list#'+list_name).addClass('active');
})
// var news_img_box = $('#news-image');
// $('.news-list').on('mouseover',function(){
//   var news_img = $(this).data().photo;
//   if(!news_img){
//     news_img='/img/events.jpg';
//   }
//   news_img_box.attr('src',news_img);
// })
document.addEventListener('DOMContentLoaded', function(){
  const news_list = document.querySelectorAll('.news-list');
  const news_image = document.getElementById('news-image');
  const news_iframe = document.getElementById('news-iframe');
  let srcType = 'image';

  news_list.forEach(item => {
    item.addEventListener('mouseover', function(){
      const photo = item.getAttribute('data-photo') || '/img/events.jpg';

      if(photo.includes('youtube.com')){
        if (srcType === 'iframe' && iframe.src === photo) {
          return;
        }
        news_image.style.display = 'none';
        news_iframe.style.display = 'block';
        news_iframe.src = photo;
        srcType = 'iframe';
      }else{
        news_image.src = photo;
        news_image.style.display = 'block';
        news_iframe.style.display = 'none';
        srcType = 'image';
      }
    });
  });
});