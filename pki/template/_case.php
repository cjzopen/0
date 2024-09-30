<?php
$_html='';
$_aside='';
$_year='';
$_id;
foreach ($rs as $row) {
  // photo default value
  if(!empty($row['img'])){
    if (strpos($row['img'],'/') === 0) {
      $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
    } else {
      $row['photo'] = $row['img'];
    }
  }else{
    $row['photo'] = '/img/events.jpg';
  }
  // summary default value
  if(!empty($row['description'])){
    $row['lead'] = $row['description'];
  }else{
    $row['lead'] = $row['title'];
  }
  // define article url
  if (!empty($row['href'])) {
    $row['url'] = $row['href'];
  } elseif (!empty($row['news_name'])) {
    // $row['url'] ='//pki.ares.com.tw/best-practices/?case='.$row['news_name'];
    $row['url'] ='//www.ares.com.tw/events/'.$row['news_name'];
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
    }
  }
  if(strpos($row['url'], 'ares.com.tw') && (!empty($row['redirect']) || !empty($row['href']))){
    if(empty($row['description'])){
      // get meta description as article summary
      $meta_content = @get_meta_tags($row['url']);
      if(!empty($meta_content['description'])){
        $row['lead'] = $meta_content['description'];
      }
    }
  }
  if($_year !== substr($row['date'], 0, 4)){
    $_year = substr($row['date'], 0, 4);
    $_id = 'id="y'.$_year.'"';
    // year menu
    $_aside = $_aside.'<li><a href="#y'.$_year.'">'.$_year.'</a></li>';
  }else{
    $_id = '';
  }
  // article list html
  if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['url'])){
    $_html = $_html.'<div class="mb-4 mb-lg-0 py-3 article" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" '.$_id.'>
    <div itemprop="item" class="row">
      <div class="col-3 px-0">
        <figure class="ratio-box"><img class="lazyload img-fluid" src="/img/events.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
        <meta itemprop="image" content="'.$row['photo'].'">
      </div>
      <div class="col-9 col-sm-8 col-lg-8 pt-2">
        <time class="text-red" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <div itemprop="name" class="title h3 text-red mt-0 mb-3"><a itemprop="url" class="stretched-link" href="'.$row['url'].'">'.strip_tags($row['title']).'</a></div>
        <p class="mb-0" itemprop="description">'.strip_tags($row['lead']).'</p>
      </div>
    </div>
  </div>';
  }
}
$rs=null;
$db=null;
?>