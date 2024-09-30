<?php
if(!isset($banner_text)){
  $banner_text='產品介紹';
}
aimg(
  '/img/products/products-banner-1440.jpg', //圖片
  '/img/products/products-banner-360.jpg 360w, /img/products/products-banner-720.jpg 720w, /img/products/products-banner-1440.jpg 1440w', //srcset
  '*', //alt
  $banner_text, //圖片上的字
  null //字的 class
);
?>
