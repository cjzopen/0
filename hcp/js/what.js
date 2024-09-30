$(function(){
  var swiper1 = new Swiper("#swiper1",{allowTouchMove:false});
  var swiper2 = new Swiper("#swiper2",{allowTouchMove:false});
  $('#swiper1-pagination .pagination').first().addClass('focus');
  $('#swiper2-pagination .pagination').first().addClass('focus');
  paginationSwich('#swiper1-pagination .pagination',swiper1);
  paginationSwich('#swiper2-pagination .pagination',swiper2);
  function paginationSwich(ele,target){
    $(ele).on('click',function(e){
      e.preventDefault();
      var ind = $(this).index();
      $(this).addClass('focus').siblings().removeClass('focus');
      target.slideTo(ind);
      return false;
    });
  }
});