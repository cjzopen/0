var banner = document.getElementById("banner-swiper");
  var swiper1 = new Swiper('#banner-swiper', {
    on: {
      beforeInit: function(){
        banner.style.opacity = 0;
      },
      init: function () {
        banner.style.opacity = 1;
      },
    },
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      760: {
        slidesPerView: 2,
        spaceBetween: 16,
      }
    },
  });
  var swiper2 = new Swiper('#case-swiper', {
    slidesPerView: 1,
    loop: true,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
    // breakpoints:{
    //   720: {
    //     slidesPerView: 1,
    //   },
    //   992: {
    //     slidesPerView: 2,
    //   }
    // }
  });