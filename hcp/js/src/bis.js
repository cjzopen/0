$(function(){
  $( '[data-fancybox]' ).fancybox({
    caption : function( instance, item ) {
        return $(this).find('figcaption').html();
    }
  });

  $('.swiper-container').each(function(index, element){
    var $this = $(this);
    $this.find('figcaption').addClass('d-none');
    $this.addClass('sc'+index);
    $this.find('*[data-fancybox]').attr('data-fancybox','sc'+index);
    var swiper = new Swiper('.sc'+index, {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      on: {
        slideChangeTransitionEnd: function () {
          var that = $('.sc'+index);
          var text = that.find('.swiper-slide-active figcaption').html();
          if(text){
            that.closest('.row').find('.disc>li').html(text);
          }
        }
      },
      lazy:true
      // loop: true
    });
  });
});