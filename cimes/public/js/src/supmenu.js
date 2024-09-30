$(function(){
  $('.supmenu ul li').each(function(){
    var $this = $(this);
    var href = $this.find('a').attr('href');
    var tod = href.replace(/[#]/, "");
    var section = $("body").find('#' + tod);
    $(window).scroll(function() {
      if(section.length){
        var winStrollTop = $(window).scrollTop();
        var sectionTop = section.offset().top;
        if(winStrollTop + 50 >= sectionTop){
          $this.siblings().removeClass('main-color');
          $this.addClass('main-color');
        }
      }
    })
  })
  //anchor scroll
  var applyScrolling = function (arr, cb) {
    for (var i = 0; i < arr.length; i++) {
      cb.call(null, i, arr[i])
    }
  }
  var anchors = document.querySelectorAll(".supmenu a[href^='#']")
  if (window.scrollTo) {
    applyScrolling(anchors, function (index, el) {
      var target = document.getElementById(el.getAttribute('href').substring(1));
      el.addEventListener('click', function (e) {
        e.preventDefault();
        $(this).blur();
        $('html, body').animate({
          scrollTop: target.offsetTop - 15
        }, 500);
        // history.pushState({}, '', el);
      })
    })
  }
})