$(function(){
  var window_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  //paging
  var pagingList = $('.paging li');
  pagingList.hide();
  if(window_width < 500){
    $('.paging li:lt(3)').show();
    $('.paging .prev').click(function() {
      var first = $('.paging ul').children('li:visible:first');
      first.prevAll(':lt(3)').show();
      first.prev().nextAll().hide()
    });

    $('.paging .next').click(function() {
      var last = $('.paging ul').children('li:visible:last');
      last.nextAll(':lt(3)').show();
      last.next().prevAll().hide();
    });
  }else{
    $('.paging li:lt(5)').show();
    $('.paging .prev').click(function() {
      var first = $('.paging ul').children('li:visible:first');
      first.prevAll(':lt(5)').show();
      first.prev().nextAll().hide()
    });

    $('.paging .next').click(function() {
      var last = $('.paging ul').children('li:visible:last');
      last.nextAll(':lt(5)').show();
      last.next().prevAll().hide();
    });
  }

  if (history.pushState) {
    $('.paging li a').click(function(event){
      event.preventDefault();
      $(this).blur()
      var year = $(this).text();
      var data = {
        year : year
      }

      $('.paging a').removeClass('act')
      $(this).addClass('act')
      $.ajax({
        url: 'year.php',
        type: "GET",
        data: data,
        dataType: 'html',
        beforeSend: function(){
          var st = $('section.list').offset().top -80;
          $('section.list article').remove();
          $('section.list').append('<div class="text-center"><i class="fa fa-spinner fa-span fa-2x fa-fw"></i><span>Loading...</span></div>');
          $('html,body').stop(true,false).animate({scrollTop: st},200);
        }
      })
      .done(function(html){
        $('section.list').html(html);
        window.history.replaceState({year: year}, '', 'y'+year);
        $.ajax({
          cache:true,
          url:'/lib/lazysizes.min.js',
          dataType:'script'
        });
      })
      .fail(function(jqXHR, status, errorThrown) {
        var errMsg;
        if (jqXHR.status === 0) {
          errMsg = 'Not connect.  Verify Network.';
        } else if (jqXHR.status == 404) {
          errMsg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
          errMsg = 'Internal Server Error [500].';
        } else if (status === 'parsererror') {
          errMsg = 'Requested JSON parse failed.';
        } else if (status === 'timeout') {
          errMsg = 'Time out error.';
        } else if (status === 'abort') {
          errMsg = 'Ajax request aborted.';
        } else {
           errMsg = 'Uncaught Error./n' + jqXHR.responseText;
        }
        $('section.list').html(errMsg);
        $('.paging a').removeClass('act');
        console.log('header load Error: ' + errorThrown)
        console.log('Status: ' + status)
        console.dir(jqXHR)
      })
      .always(function() {
        $('section.list article').fadeIn();
        $('section p img').on("error", function(){
          $(this).attr('src', '/img/temp.jpg');
        });
        $('section.list .col-md-3 img').on("error", function(){
          $(this).attr('src', '/img/events.jpg');
        });
      });
      return false;
    })
  }

  $('section p img').on("error", function(){
    $(this).attr('src', '/img/temp.jpg');
  });
  $('section.list .col-md-3 img').on("error", function(){
    $(this).attr('src', '/img/events.jpg');
  });
})