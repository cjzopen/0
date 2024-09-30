
  $('.mur').responsiveTable({
    addFocusBtn:false,
    stickyTableHeader:false
  });
  $('.dropdown-toggle[data-toggle="dropdown"]').on('click',function(){
    var _e = $(this);
    var togg = _e.closest('.btn-group');
    togg.toggleClass('open');
  });
  $('#tables>li:gt(0)').hide();
  $('#tabs li').click(function(){
    var num = $(this).index();
    $(this).addClass('main-bg fff-color').siblings().removeClass('main-bg fff-color');
    $('#tables>li').eq(num).show().siblings().hide();
  });


//智慧工廠具體實踐
$(function(){
  var CASE = $('#example p a');
  // CASE.hover(function(){
  //   $(this).closest('p').prev().addClass('act');
  // },function(){
  //   $(this).closest('p').prev().removeClass('act');
  // })
  function showTitle(){
      // $('#example a').hover(function(){
      //   var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      //   if(viewWidth >= 992){
      //     var title = $(this).attr('data-title');
      //     var s = $(this).closest('.row');
      //     $('<div class="col col-12 main-color gray-bg text-left m-size" id="showTitle" style="display:none">&#10148; '+title+'</div>').appendTo(s).slideDown(200);
      //   }
      // },
      // function(){
      //   $('#showTitle').remove();
      // })
    CASE.on('click',function(e){
      var viewWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      var $this = $(this);
      $('#showTitle').hide();
      if(viewWidth >= 992){
        e.preventDefault();
        var title = $this.attr('data-title');
        var caseHref = $this.attr('href');
        $('#showTitle').html('<a href="'+caseHref+'">&#10148; '+title+'</a>').slideDown(200);
      }
    });
  }
  showTitle();
});