const swiper = new Swiper('#whys', {
  slidesPerView: 1,
  spaceBetween: 210,
  // Responsive breakpoints
  breakpoints: {
    768: {
      spaceBetween: 210,
      slidesPerView: 2
    }
  }
});
const nextButton = $('#compare .next');
const prevButton = $('#compare .prev');
function toNext(){
  nextButton.addClass('x');
  prevButton.removeClass('x');
}
function toPrev(){
  prevButton.addClass('x');
  nextButton.removeClass('x');
}
nextButton.on('click',function(){
  swiper.slideNext();
  toNext();
});
prevButton.on('click',function(){
  swiper.slidePrev();
  toPrev();
});
swiper.on('slideNextTransitionEnd',function(){
  toNext();
});
swiper.on('slidePrevTransitionEnd',function(){
  toPrev();
});