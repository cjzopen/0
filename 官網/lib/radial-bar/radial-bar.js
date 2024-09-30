$(function () {
  // var setRadial = function (percent) {
  //   $(".js-radial-mask").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
  //   $(".js-radial-fill").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
  //   $(".js-radial-fill_fix").css('transform', 'rotate(' + 3.6 * percent + 'deg)');
  //   $(".js-radial-percent").html(percent+'<span style="font-size:18px">%</span>');
  // };

      var l = $(window).scrollTop() + 127;
      var q = $(window).height();
      $(".radial-bar").each(function(){
        var e = $(this);
        var percent = e.attr('data-value');
        var r = e.offset().top;
        if (l > r - q + 135) {
        // $(this).on('click', function () {
          // setRadial(v);
          e.find(".js-radial-mask").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
          e.find(".js-radial-fill").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
          e.find(".js-radial-fill_fix").css('transform', 'rotate(' + 3.6 * percent + 'deg)');
          e.find(".js-radial-percent").html('<span class="blue-color">'+percent+'<i style="font-size:16px">%</i></span>');
          // e.find(".txt").fadeIn();
        // });
        
        }else{
          $(window).scroll(function() {
            var l = $(window).scrollTop() + 127;
            var q = $(window).height();
            $(".radial-bar").each(function(){
              var e = $(this);
              var percent = e.attr('data-value');
              var r = e.offset().top;
              if (l > r - q + 135) {
                // $(this).on('click', function () {
                  // setRadial(v);
                e.find(".js-radial-mask").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
                e.find(".js-radial-fill").css('transform', 'rotate(' + 1.8 * percent + 'deg)');
                e.find(".js-radial-fill_fix").css('transform', 'rotate(' + 3.6 * percent + 'deg)');
                e.find(".js-radial-percent").html('<span class="blue-color">'+percent+'<i style="font-size:16px">%</i></span>');
                // e.find(".txt").fadeIn();
                // });
                
              }
            })
          })
        }
      })
})