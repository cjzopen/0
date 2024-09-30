var windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
const BODY = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
product_reset();
window.addEventListener('resize', function(){
  product_reset();
  windowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  if(windowWidth>=768){
    $('.product-button>[role="button"]').on('click',function(){
      product_reset();
      scroll_to_text($(this));
      $(this).addClass('active');
      let product = $(this).attr('data-product');
      $("[data-labelledby=" + product + "]").addClass('active');
      $("[data-labelledby=" + product + "]").slideDown();
      return false;
    });
  }else{
    $('.product-button>[role="button"]').on('click',function(){
      product_reset();
      scroll_to_text($(this));
      $(this).addClass('active');
      let product = $(this).attr('data-product');
      let temp_html = $("[data-labelledby=" + product + "]").html();
      $(this).parent('.product-button').after('<div class="px-3 pb-3 temp-labelledby">' + temp_html + '</div>');
      return false;
    });
  }
});
if(windowWidth>=768){
  $('.product-button>[role="button"]').on('click',function(){
    product_reset();
    scroll_to_text($(this));
    $(this).addClass('active');
    let product = $(this).attr('data-product');
    $("[data-labelledby=" + product + "]").addClass('active');
    $("[data-labelledby=" + product + "]").slideDown();
    return false;
  });
}else{
  $('.product-button>[role="button"]').on('click',function(){
    product_reset();
    scroll_to_text($(this));
    $(this).addClass('active');
    let product = $(this).attr('data-product');
    let temp_html = $("[data-labelledby=" + product + "]").html();
    $(this).parent('.product-button').after('<div class="px-3 pb-3 temp-labelledby">' + temp_html + '</div>');
    return false;
  });
}
function product_reset(){
  $('[role="button"].active').removeClass('active');
  $('[data-labelledby].active').hide();
  $('.temp-labelledby').remove();
}
function scroll_to_text(element){
  setTimeout(function(){
    BODY.stop(true, false).animate({
      scrollTop: element.offset().top - 30
    }, 50);
  }, 100);
};