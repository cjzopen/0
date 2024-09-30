<?php
  $_html = '';
  $_position=1;
  foreach ($rs as $row) {
  if(isset($row['product']) && preg_match('/(Analyzer|SWIFT|eAresBank|treasury)/i', $row['product'])){

  }else{
    // $row['blank'] = '';
    $row['photo'] = '/img/events.jpg';
    if(!empty($row['img'])){
      // if (substr($row['img'], 0, 23) === 'https://www.ares.com.tw' || substr($row['img'], 0, 22) === 'http://www.ares.com.tw') {
        $row['photo'] = $row['img'];
      // } else {
        // $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
      // }
    }
    if (!empty($row['content'])) {
      if(empty($row['img'])){
        $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
        if (preg_match($pattern, $row['content'], $matches)) {
          if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw') {
            $row['photo'] = $matches[1];
          } else if (substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
            $row['photo'] = $matches[1];
          } else {
            $row['photo'] = 'https://www.ares.com.tw'.$matches[1];
          }
        }
      }
      if(empty($row['description'])){
        $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
        if (mb_substr($lead, 0, 8) === '<strong>') {
          $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
        }
        $row['lead'] = trim(mb_strstr($lead, '</p>', true));
        if(mb_strlen($row['lead'], 'utf-8') >= 120){
          $row['lead'] = strip_tags(mb_substr($row['lead'], 0, 120,'UTF-8')).'…';
        }
        // $row['lead'] = strip_tags(mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8')).'...';
      }else{
        $row['lead'] = $row['description'];
      }
    }else{
      if(empty($row['description'])){
        $row['lead'] = $row['title'];
      }else{
        $row['lead'] = $row['description'];
      }
    }
    if (!empty($row['redirect'])){
      $row['href'] = $row['redirect'];
      if(empty($row['description'])){
        $row['lead'] = $row['title'];
      }
    }elseif (!empty($row['news_name'])) {
      $row['href'] = '/events/'.$row['news_name'];
    } else {
      $row['href'] = 'javascript:void(0)';
    }
    $_html = $_html.'<div class="list-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <meta itemprop="position" content="'.($_position++).'">
        <div class="row position-relative">
          <div class="col-md-3 text-center">
            <img class="img-fluid lazyload" src="/img/temp.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'">
          </div>
          <div class="col-md-8">
            <time class="color-blue" datetime="'.$row['date'].'">'.$row['date'].'</time>
            <div class="color-blue h4"><a itemprop="url" href="'.$row['href'].'" class="stretched-link"><span itemprop="name">'.strip_tags($row['title']).'</span></a></div>
            <p itemprop="description">'.strip_tags($row['lead']).'</p>
            <samll aria-hidden="true" class="more text-right color-blue"></samll>
          </div>
        </div>
      </div>';
  }}
  echo $_html;
?>