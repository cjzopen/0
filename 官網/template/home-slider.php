<style>.swiper-container{max-width:1440px}</style>
<div id="banner">
  <div class="swiper-container">
    <div class="swiper-wrapper">
<?php
$home_banner_list=array(
  array(
    'link' => 'https://edm.ares.com.tw/dm/202406-comodo/',
    'img-720' => '/img/banner/202406-comodo-bn-720.jpg',
    'img-1440' => '/img/banner/202406-comodo-bn-1440.jpg',
    'alt' => 'Comodo 端點防護',
    'content' => ''
  ),
  array(
    'link' => 'https://marketing.ares.com.tw/newsletter/2024-06-osc/',
    'img-720' => '/img/banner/202406-banner-720.jpg',
    'img-1440' => '/img/banner/202406-banner-1440.jpg',
    'alt' => 'IT外包的好處',
    'content' => ''
  ),
  array(
    'link' => 'https://edm.ares.com.tw/dm/oracle-multilateral-trade/',
    'img-720' => '/img/banner/oracle-multilateral-trade-banner-720.jpg',
    'img-1440' => '/img/banner/oracle-multilateral-trade-banner-1440.jpg',
    'alt' => '多角貿易轉單系統強化ERP管理',
    'content' => ''
  ),
  array(
    'link' => 'https://edm.ares.com.tw/dm/202404-arespp/',
    'img-720' => '/img/banner/banner-720.jpg',
    'img-1440' => '/img/banner/banner-1440.jpg',
    'alt' => '生技醫療相關軟體加密',
    'content' => ''
  ),
  array(
    'link' => 'https://edm.ares.com.tw/dm/202403-hcp/',
    'img-720' => '/img/banner/2024-03-hcp-eDM-banner-720.jpg',
    'img-1440' => '/img/banner/2024-03-hcp-eDM-banner-1440.jpg',
    'alt' => 'HCP人資系統，協助跨國企業因應東南亞法規與稅法',
    'content' => ''
  ),
  array(
    'link' => 'https://edm.ares.com.tw/dm/mes-very-large-scale-assembly/',
    'img-720' => '/img/banner/mes-very-large-scale-assembly-bn-720.jpg',
    'img-1440' => '/img/banner/mes-very-large-scale-assembly-bn-1440.jpg',
    'alt' => 'cimes',
    'content' => ''
  ),
  // array(
  //   'link' => 'https://edm.ares.com.tw/dm/cimes-M2M/',
  //   'img-720' => '/img/banner/cimes-m2m-720.jpg',
  //   'img-1440' => '/img/banner/cimes-m2m-1440.jpg',
  //   'alt' => '機聯網控產線拼出三倍獲利',
  //   'content' => '<div class="container" style="padding-bottom:1rem;color:#f9eb37">
  //                 <b class="h2">智慧製造將改變企業的營運模式</b>
  //                 <p class="color-white">機聯網控產線拼出三倍獲利</p>
  //               </div>'
  // )
);
$i=0;
$banner_active=' swiper-slide-active';
foreach ($home_banner_list as $item) {
  if($i>=1){
    $banner_active='';
  }
?>
      <div class="swiper-slide<?= $banner_active ?>">
        <div class="relative">
          <a href="<?= $item['link'] ?>" rel="noopener noreferrer" target="_blank">
            <picture>
              <source srcset="<?= $item['img-720'] ?>" media="(max-width: 719px)" width="720" height="400">
              <source srcset="<?= $item['img-1440'] ?>" media="(min-width: 720px)" width="1440" height="400">
              <img loading="lazy" width="720" height="400" class="swiper-image w-100 h-auto" src="<?= $item['img-1440'] ?>" alt="<?= $item['alt'] ?>">
              <figcaption class="swiper_content_wrapper"><?= $item['content'] ?></figcaption>
            </picture>
          </a>
        </div>
      </div>
<?php
  $i++;
}
?>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>