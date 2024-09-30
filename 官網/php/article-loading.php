<?php
function articleLoading($product,$event_type='articles'){
  // $event_type = isset($event_type)? $event_type : 'articles';
  if($event_type==='best_practice'){
    $phpUrl = $_SERVER['DOCUMENT_ROOT'].'/php/bestPracticeForPhp.php';
    echo '<h2 class="text-center">成功案例</h2><hr>';
  }else{
    $phpUrl = $_SERVER['DOCUMENT_ROOT'].'/php/productEventsForPhp.php';
    echo '<h2 class="text-center">相關文章</h2><hr>';
  }
  require($phpUrl);
}