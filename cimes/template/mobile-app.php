          <div class="col-12 col-sm-12 col-lg-6">
            <div class="swiper-container" style="max-width: 320px;">
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-1.png" alt="ciMes 登入畫面">
                </div>
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-2.png" alt="ciMes 功能清單">
                </div>
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-3.png" alt="ciMes 批號進站">
                </div>
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-4.png" alt="ciMes 切片進站">
                </div>
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-5.png" alt="ciMes 人員上工">
                </div>
                <div class="swiper-slide text-center">
                  <img class="img-fluid" src="/public/img/products/mobile-6.png" alt="ciMes 報工">
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-lg-12 my-3" id="mobile-background">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-3-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-3-390.jpg" alt="ciMes 產品介面-1">
                </div>
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-4-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-4-390.jpg" alt="ciMes 產品介面-2">
                </div>
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-5-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-5-390.jpg" alt="ciMes 產品介面-3">
                </div>
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-6-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-6-390.jpg" alt="ciMes 產品介面-4">
                </div>
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-7-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-7-390.jpg" alt="ciMes 產品介面-5">
                </div>
                <div class="swiper-slide text-center" style="background-image: url(/public/img/products/ui-8-390.jpg);background-size: cover;height: 380px">
                  <img class="img-fluid" src="/public/img/products/ui-8-390.jpg" alt="ciMes 產品介面-6">
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
<script>
//swiper
  $('.swiper-container').each(function(index, element){
    $(this).addClass('s'+index);
    $('.s'+index).swiper({
      pagination: '.swiper-pagination',
      paginationClickable: true,
      autoplayDisableOnInteraction: false,
      // loop: true
      autoplay: 6000
    });
  });
</script>