var type = '';
function tab(){
  type = window.location.hash.substr(1);
  // type = decodeURIComponent(type).substr(1);
  if(type!=='isdf' && type!=='isd' && type!=='lineme' && type!=='app'){
    type = 'isd';
  }
  $('.type-list').hide();
  $('.type-list#'+type).show();
}
tab();
$('.h-n li a[href="#'+type+'"]').closest('li').addClass('act');
$(window).on('hashchange', function (e) {
  tab();
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
  $('.h-n li a').click(function(e){
    $('html, body').animate({ scrollTop: $('.h-n').offset().top - 80 }, 250);
    $(this).closest('li').addClass('act').siblings().removeClass('act');
    $('.h-n ul').slideUp(0);
  })
})