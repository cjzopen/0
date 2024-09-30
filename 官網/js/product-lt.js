// var $content = $('#type');
var type='';
function tab(){
  type=window.location.hash.substr(2);
  if(type!=='egui' && type!=='gv' && type!=='nm' && type!=='gib' && type!=='sfas'){
    type = 'nm';
  }else if(type=='egui'){
    window.location.href = 'https://www.ares.com.tw/products/egui/';
  }else if(type=='gv'){
    window.location.href = 'https://www.ares.com.tw/products/gv/';
  }
  $('.type-list').hide();
  $('.type-list#'+type).show();
}
tab();
$('#list-nav li a[href="#!'+type+'"]').closest('li').addClass('color-blue');
$(window).on('hashchange', function (e) {
  tab()
})

$(function(){
  // window.addEventListener("load", function(){
  //   if(window.location.hash){
  //     $('html, body').animate({ scrollTop: $('.h-n').offset().top - 80 }, 250);
  //   }
  // });
  $('.h-n-toggle').click(function(){
    $('.h-n ul').slideToggle(200)
  })
  $('#list-nav a').click(function(e){
    $('html, body').animate({ scrollTop: $('#list-nav').offset().top - 100 }, 200);
    $(this).closest('li').addClass('color-blue').siblings().removeClass('color-blue');
    $('.h-n ul').slideUp(0);
  })
})