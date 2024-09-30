window.addEventListener("load", function(event) {
  var windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  if(windowWidth>=768){
    $('.ans').addClass('d-none');
    $('.faqgroup').each(function(gi,ge){
      var $this = $(this);
      var qa = $this.find('.swiper-pagination>li');
      $this.find('.swiper-pagination').attr('id','pagination'+gi).parent('.container').after('<div class="swiper-container" id="swiper'+gi+'"><div class="swiper-wrapper"></div></div>');
      qa.each(function(i,e){
        var this_li = $(this);
        var q = this_li.find('[itemprop="name"]').text();
        var a = this_li.find('[itemprop="text"]').html();
        $('#swiper'+gi+' .swiper-wrapper').append('<div class="swiper-slide"><div class="container py-4"><div class="row"><div class="col-12 col-md-3 color-blue pb-3 h5">'+q+'</div><div class="col-12 col-md-9">'+a+'</div></div></div></div>');
      });
      var swi = new Array();
      swi[gi] = new Swiper('#swiper'+gi,{allowTouchMove:false});
      paginationSwich(qa.find('.q'),swi[gi]);
      qa.first().addClass('focus');
    });
    function paginationSwich(ele,target){
      $(ele).on('click',function(e){
        e.preventDefault();
        var ind = $(this).parent('li').index();
        $(this).parent('li').addClass('focus').siblings().removeClass('focus');
        target.slideTo(ind);
        return false;
      });
    }
  }
})