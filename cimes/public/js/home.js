var swiper = new Swiper('.swiper-banner', {
  pagination: '.swiper-pagination',
    // autoplay: 8000,
  autoplayDisableOnInteraction: false,
  paginationClickable: true
    // loop: true
});
var swiper = new Swiper('.swiper-success-case', {
  pagination: '.swiper-pagination',
  // autoplay: 8000,
  autoplayDisableOnInteraction: false,
  paginationClickable: true,
  loop: true,
  prevButton:'.swiper-button-prev',
  nextButton:'.swiper-button-next'
});
const homeYoutube = document.querySelector('#youtube-home');
const homeYoutubeObserver = new IntersectionObserver((entries) => {
  if (entries[0].intersectionRatio > 0){
    homeYoutube.setAttribute('src', homeYoutube.dataset.src);
    homeYoutubeObserver.unobserve(entries[0].target);
  }
});
homeYoutubeObserver.observe(homeYoutube);