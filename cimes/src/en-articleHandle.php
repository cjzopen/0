<?php
$_html='';
foreach ($rs as $row) {
  if(!empty($row['img'])){
    if (strpos($row['img'],'/') === 0) {
      $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
    } else {
      $row['photo'] = $row['img'];
    }
  }else{
    $row['photo'] = '/public/img/events.jpg';
  }
  if (!empty($row['href'])) {
    $row['url'] = $row['href'];
  } elseif (!empty($row['news_name'])) {
    $row['url'] ='https://www.ares.com.tw/en/events/'.$row['news_name'];
  } elseif (!empty($row['redirect'])) {
    $row['url'] = $row['redirect'];
  }
  if (!empty($row['content'])) {
    if(empty($row['img'])){
      $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
      if (preg_match($pattern, $row['content'], $matches)) {
        if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw' || substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
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
    }else{
      $row['lead'] = $row['description'];
    }
  }else{
    if(!empty($row['description'])){
      $row['lead'] = $row['description'];
    }else{
      $row['lead'] = $row['title'];
    }
  }
  if(strpos($row['url'], 'ares.com.tw') && (!empty($row['redirect']) || !empty($row['href']))){
    if(empty($row['description'])){
      $meta_content = @get_meta_tags($row['url']);
      if(!empty($meta_content['description'])){
        $row['lead'] = $meta_content['description'];
      }
    }
    if(empty($row['img'])){
      if(substr($row['url'], 0, 43) === 'https://marketing.ares.com.tw/dm/newsletter' || substr($row['url'], 0, 42) === 'http://marketing.ares.com.tw/dm/newsletter'){
        if(substr($row['date'], 0, 7) >= '2015-04' && !empty($row['url'])){
          $marketing = array();
          preg_match('/(https?:\/\/marketing\.ares\.com\.tw\/dm\/newsletter.+\/)/', $row['url'], $marketing);
          $row['link'] = parse_url($marketing[1]);
          $row['photo'] = 'https://'.$row['link']['host'].$row['link']['path'].'images/og/focus.jpg';
        }
      }else{
        $row['html'] = @file_get_contents($row['url']);
        $row['link'] = @parse_url($row['url']);
        $pattern = '/data-src="(.*?)"/';
        if (preg_match($pattern, $row['html'], $matches)) {
          if (substr($matches[1], 0, 5) === 'https') {
            $row['photo'] = $matches[1];
          }
        }
      }
    }
  }

  if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['url'])){
    $_html = $_html.'<article>
    <a class="row" href="'.$row['url'].'" rel="external">
      <div class="col-12 col-sm-3 col-lg-3">
        <figure class="ratio-box"><img class="lazyload" data-src="'.$row['photo'].'" alt="'.$row['title'].'"><noscript><img class="img-fluid" src="'.$row['photo'].'" alt="'.$row['title'].'"></noscript></figure>
      </div>
      <div class="col-12 col-sm-8 col-lg-8">
        <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <h3 class="main-color mt-0 mb-3">'.strip_tags($row['title']).'</h3>
        <p>'.strip_tags($row['lead']).'</p>
      </div>
    </a>
  </article>';
  }
}