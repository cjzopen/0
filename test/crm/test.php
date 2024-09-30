<?php

$othersend='ouying@ares.com.tw,sadfsdfd';

if(isset($othersend)){
  if (strpos($othersend, ',') !== false) {
    $othersendArray = explode(',', $othersend);
    foreach($othersendArray as $aresMailAddress) {
      echo $aresMailAddress;
    }
  }
  echo 'h';
}else{
  echo 'hii';
}