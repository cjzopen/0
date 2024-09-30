<?php
$i = 0;
$lists = array();
$global_db = "sqlite:/sites/global/events.db";
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

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

function product_events($product,$string) {
  $i = 0;
  $lists = array();
  $_html = '';
  $db = new PDO("sqlite:/sites/global/events.db");

  $query = "SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name, news.img, news.description
      FROM news, articles
      WHERE articles.product LIKE '%{$product}%'
      AND articles.title LIKE '%{$string}%'
      AND news.id = articles.news_id";
  $result = $db->query($query);
    foreach ($result->fetchAll() as $row) {
    $lists[$i]['id'] = $row['id'];
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = $row['title'];
    $lists[$i]['content'] = $row['content'];
    $lists[$i]['redirect'] = $row['redirect'];
    $lists[$i]['news_name'] = $row['news_name'];
    $lists[$i]['img'] = $row['img'];
    $lists[$i]['description'] = $row['description'];
    $i++;
  }
  $query = "SELECT * FROM news
      WHERE product LIKE '%{$product}%'
      AND title LIKE '%{$string}%'";
  $result = $db->query($query);
    foreach ($result->fetchAll() as $row) {
    $lists[$i]['id'] = $row['id'];
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = $row['title'];
    $lists[$i]['content'] = $row['content'];
    $lists[$i]['redirect'] = $row['redirect'];
    $lists[$i]['news_name'] = $row['news_name'];
    $lists[$i]['img'] = $row['img'];
    $lists[$i]['description'] = $row['description'];
    $i++;
  }

  //$query = "SELECT * FROM articles WHERE product='{$product}' AND href IS NOT NULL ORDER BY href DESC";
  $query = "SELECT * FROM articles WHERE product LIKE '%{$product}%' AND title LIKE '%{$string}%'";
  $result = $db->query($query);
  foreach ($result->fetchAll() as $row) {
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = $row['title'];
    $lists[$i]['url'] = $row['href'];
    $lists[$i]['img'] = $row['img'];
    $lists[$i]['description'] = $row['description'];
    $i++;
  }
  $result = null;
  $db = null;

  $lists = array_sort($lists, 'date', SORT_DESC);
  foreach ($lists as $row) {
    if(!empty($row['img'])){
      $row['photo'] = 'https://www.ares.com.tw/'.$row['img'];
    }else{
      $row['photo'] = '/img/events.jpg';
    }
    if (!empty($row['url'])) {
      $row['url'] = $row['url'];
    } elseif (!empty($row['redirect'])) {
      $row['url'] = $row['redirect'];
    } elseif (!empty($row['news_name'])) {
      $row['url'] ='https://www.ares.com.tw/events/'.$row['news_name'];
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
      if(empty($row['description'])){
        if(strpos( $row['url'], 'ares.com.tw' ) == false ){
          $row['lead'] = $row['url'];
        }else{
          if (!empty($row['url'])) {
            $meta_content = @get_meta_tags($row['url']);
            if(!empty($meta_content['description'])){
              $row['lead'] = $meta_content['description'];
            }
            // else if(!empty(file_get_contents($row['url']))){
            //   $row['content'] = @file_get_contents($row['url']);
            //   $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
            //   if (mb_substr($lead, 0, 8) === '<strong>') {
            //     $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
            //   }
            //   $row['lead'] = mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8').'...';
            //   if(strlen($row['lead'])<30){
            //     $row['lead'] = $row['title'];
            //   }
            // }
            else{
              $row['lead'] = $row['title'];
            }
          }
          if(substr($row['date'], 0, 7) >= '2015-04' && !empty($row['url']) && empty($row['img'])){
            if(substr($row['url'], 0, 43) === 'https://marketing.ares.com.tw/dm/newsletter' || substr($row['url'], 0, 42) === 'http://marketing.ares.com.tw/dm/newsletter'){
              $marketing = array();
              preg_match('/(https?:\/\/marketing\.ares\.com\.tw\/dm\/newsletter.+\/)/', $row['url'], $marketing);
              $row['link'] = parse_url($marketing[1]);
              $row['photo'] = 'https://'.$row['link']['host'].$row['link']['path'].'images/og/focus.jpg';
            }
          }
        }
      }else{
        $row['lead'] = $row['url'];
      }
    }


    if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['url'])){
      $_html = $_html.'<div class="mb-4 mb-lg-0 py-3 article" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <div itemprop="item" class="row">
      <div class="col-3 px-0">
        <figure class="ratio-box"><img class="lazyload img-fluid" src="/img/events.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'"></figure>
        <meta itemprop="image" content="'.$row['photo'].'">
      </div>
      <div class="col-9 col-sm-8 col-lg-8 pt-2">
        <time class="text-red" datetime="'.$row['date'].'">'.$row['date'].'</time>
        <div itemprop="name" class="title h3 text-red mt-0 mb-3"><a itemprop="url" class="stretched-link" href="'.$row['url'].'" rel="noopener noreferrer external" target="_blank">'.strip_tags($row['title']).'</a></div>
        <p class="mb-0" itemprop="description">'.strip_tags($row['lead']).'</p>
      </div>
    </div>
  </div>';
    }
  }
  echo $_html;
}
product_events($product,'資安');