<?php
if(!isset($product)){
  exit;
}


try {
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

$i = 0;
$lists = array();

function array_sort($array, $on, $order=SORT_ASC) {
  $new_array = array();
  $sortable_array = array();

  if (count($array) > 0) {
    foreach ($array as $k => $v) {
      if (is_array($v)) {
        foreach ($v as $k2 => $v2) {
          if ($k2 == $on) {
            $sortable_array[$k] = $v2;
          }
        }
      } else {
        $sortable_array[$k] = $v;
      }
    }

    switch ($order) {
      case SORT_ASC:
        asort($sortable_array);
      break;
      case SORT_DESC:
        arsort($sortable_array);
      break;
    }

    foreach ($sortable_array as $k => $v) {
      $new_array[$k] = $array[$k];
    }
  }

  return $new_array;
}

$rs = $db->query("SELECT * FROM article WHERE product LIKE '%{$product}%' ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
  $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
  $i++;
}
$rs = $db->query("SELECT * FROM info WHERE product LIKE '%{$product}%' ")->fetchAll();
foreach ($rs as $row) {
  $lists[$i]['date']  = $row['date'];
  $lists[$i]['title'] = strip_tags($row['title']);
  $lists[$i]['href'] = $row['link'];
  $lists[$i]['img'] = '';
  $lists[$i]['description'] = '文章出自 '.$row['alt'];
  $i++;
}
$rs = array_sort($lists, 'date', SORT_DESC);

  $_html='';
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
    $row['url'] ='https://www.ares.com.tw/events/'.$row['news_name'];
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
    if(empty($row['img'])){
      //get focus.jpg as img
      if(substr($row['url'], 0, 43) === 'https://marketing.ares.com.tw/dm/newsletter' || substr($row['url'], 0, 42) === 'http://marketing.ares.com.tw/dm/newsletter'){
        if(substr($row['date'], 0, 7) >= '2015-04' && !empty($row['url'])){
          $marketing = array();
          preg_match('/(https?:\/\/marketing\.ares\.com\.tw\/dm\/newsletter.+\/)/', $row['url'], $marketing);
          $row['link'] = parse_url($marketing[1]);
          $row['photo'] = 'https://'.$row['link']['host'].$row['link']['path'].'images/og/focus.jpg';
        }
      }else{
        //get data-src attribute as img
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
  // if there is no temp.jpg, remember to remove src attribute
  if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['url'])){
    $_html = $_html.'<article class="mb-4 mb-lg-0">
    <div class="row">
      <div class="col-md-3">
        <img class="lazyload img-responsive" src="/img/temp.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
      </div>
      <div class="col-md-8">
        <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <h3 class="mt-0 mb-3"><a class="main-color" href="'.$row['href'].'"'.'>'.strip_tags($row['title']).'</a></h3>
        <p class="mb-0 mb-lg-4" itemprop="description">'.strip_tags($row['lead']).'</p>
        <div class="more text-right">
          <a class="main-color" href="'.$row['href'].'"'.'></a>
        </div>
      </div>
    </div>
  </article>';
  }
}
$rs=null;
$db=null;
echo !empty($_html) ? $_html: '<p class="text-center">目前尚無文章...</p>';