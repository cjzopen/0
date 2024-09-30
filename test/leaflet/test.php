<?php

function webp($img){
  if(isset($_SERVER['HTTP_ACCEPT']) && strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false) {
    preg_match('/\/public\/img(.*)(jpg|png)$/i', $img, $matches);
    return '/public/img/webp'.$matches[1].'.webp';
  }else{
    return $img;
  }
}

echo webp('/public/img/slider/cimes-m2m-1440.jpg');