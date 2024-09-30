$(function() {
  // swiper slider
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // autoplay: {
    //   delay: 8000,
    //   disableOnInteraction: false,
    // },
    lazy:true,
    loop: true
  });

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
        $(this).append('<small>...</small>');
      })
    }else{
      $('.text-left li').show()
      $('ul.text-left small').remove()
    }
  }

  //epaper
  window.addEventListener("load",function(){
    var thumbnail_height = $('#epaper .thumbnail').innerHeight();
    var tp = thumbnail_height - 76;
    $('#epaper .thumbnail .txt').css({ 'top': tp + 'px' });

    $(window).resize(function() {
      var thumbnail_height = $('#epaper .thumbnail').innerHeight();
      var tp = thumbnail_height - 76;
      $('#epaper .thumbnail .txt').css({ 'top': tp + 'px' });
    });
  })

  $('#epaper .thumbnail, .fix-right-box').on('touchstart touchend', function(e) {
    $(this).toggleClass('touch');
  });
});
