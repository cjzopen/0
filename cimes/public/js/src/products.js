// $(function(){
  //fancybox
  // $('[data-fancybox]').attr('href','javascript:;').fancybox({
  //   toolbar  : true,
  //   smallBtn : false,
  //   gutter : 4,
  //   iframe : {
  //     preload : false
  //   }
  // });
  // ajax slider
  document.getElementById('swiper-js').addEventListener('load', function(){
    var did =true;
    $(window).scroll(function() {
      if ($(window).scrollTop() + 123 >= $('#mobile-app').offset().top ) {
        if(did){
          did=false;
          $.ajax({
            type: "GET",
            url: '/template/mobile-app.php',
            dataType:'html'
          })
          .done(function(data){
            $('#ajax-before').remove();
            $('#mobile-app #get-ajax').append(data);
          })
        }
      }
    });
  })
// })