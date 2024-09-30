$('section.list>.container>h2').text('案例分享');

  $('#support').hide();
  //type content
  // var ww = $(window).outerWidth();
  var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var type = $('#circle .icon');
  var type_length = type.length;
  var type_number = '';
  function type_click(){
    var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    type.click(function(){
      var $this = $(this).closest('li');
      $('#type_content').remove();
      $this.siblings().removeClass('active');
      type_number=$this.index();
      var type_txt = $('#support li').eq(type_number).html();
      var type_content = '<li id="type_content" class="col-12 bg-gray text-left py-3">'+type_txt+'</li>';
      var type_html = $.parseHTML(type_content);
      $this.addClass('active');
      if(ww>=992){
        if(type_length%3 != 0){
          if(type_number == type_length-1 || type_number%3 == 2){
             $this.after(type_html)
          }else{
            if(type_number == type_length-2 || type_number%3 == 1){
              $this.next().after(type_html)
            }else{
              $this.next().next().after(type_html)
            }
          }
        }else{
          if(type_number%3 == 2){
            $this.after(type_html)
          }else if(type_number%3 == 1){
            $this.next().after(type_html)
          }else if(type_number%3 == 0){
            $this.next().next().after(type_html)
          }
        }
      }else if(ww<=767){
        $this.after(type_html)
      }else{
        if(type_length%2 != 0){
          if(type_number == type_length-1){
             $this.after(type_html)
          }else{
            if(type_number%2 == 1){
              $this.after(type_html)
            }else{
              $this.next().after(type_html)
            }
          }
        }else{
          if(type_number%2 == 1){
            $this.after(type_html)
          }else{
            $this.next().after(type_html)
          }
        }
      }
      $('#type_content').slideDown()
    })
  }
  type_click();


  //swiper
  var pv = '';
  if (ww > 991) pv = 4;
  if (ww > 767 && ww <= 991) pv = 3;
  if (ww <= 767) pv = 1;
  var swiper = new Swiper('.swiper-container', {
    // pagination: '.swiper-pagination',
    slidesPerView: pv,
    paginationClickable: true,
    spaceBetween: 10,
    slideToClickedSlide:false,
    autoplay: 5e3,
    // nextButton: '.swiper-button-next',
    // prevButton: '.swiper-button-prev',
    // preloadImages: false,
    // lazyLoading: true
    loop: true
    // loopedSlides:2
  });
  // var sh = $('.swiper-container').height();
  // $('.swiper-slide').height(sh);
  $(window).resize(function() {
    $('#type_content').remove();
    var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    type_click();
    if (ww > 991) swiper.params.slidesPerView = 4;
    if (ww > 767 && ww <= 991) swiper.params.slidesPerView = 3;
    if (ww <= 767) swiper.params.slidesPerView = 1;
    swiper.update();
    // var sh = $('.swiper-container').height();
    // $('.swiper-slide').height(sh);
  });