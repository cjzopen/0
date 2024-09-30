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

function product_events($product, $event_type) {
  $i = 0;
  $lists = array();
  $article_html = '';
  $db = new PDO("sqlite:/sites/global/events.db");

  $query = "SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name, news.img, news.description
      FROM news, {$event_type}
      WHERE {$event_type}.product LIKE '%{$product}%'
      AND news.id = {$event_type}.news_id";
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

  //$query = "SELECT * FROM {$event_type} WHERE product='{$product}' AND href IS NOT NULL ORDER BY href DESC";
  $query = "SELECT * FROM {$event_type} WHERE product LIKE '%{$product}%'";
  $result = $db->query($query);
  foreach ($result->fetchAll() as $row) {
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = $row['title'];
    $lists[$i]['href'] = $row['href'];
    $lists[$i]['img'] = $row['img'];
    $lists[$i]['description'] = $row['description'];
    $i++;
  }
  $result = null;
  $db = null;

  $lists = array_sort($lists, 'date', SORT_DESC);
  foreach ($lists as $row) {
    if(!empty($row['img'])){
      $row['photo'] = $row['img'];
    }else{
      $row['photo'] = '/img/events.jpg';
    }
    if (!empty($row['href'])) {
      $row['href'] = $row['href'];
    } elseif (!empty($row['redirect'])) {
      $row['href'] = $row['redirect'];
    } elseif (!empty($row['news_name'])) {
      $row['href'] ='/events/'.$row['news_name'];
    }
    if (!empty($row['content'])) {
      if(empty($row['img'])){
        $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
        if (preg_match($pattern, $row['content'], $matches)) {
          // if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw' || substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
            $row['photo'] = $matches[1];
          // } else {
            // $row['photo'] = 'https://www.ares.com.tw'.$matches[1];
          // }
        }
      }
      if(empty($row['description'])){
        $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
        if (mb_substr($lead, 0, 8) === '<strong>') {
          $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
        }
        $row['lead'] = mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8').'...';
      }else{
        $row['lead'] = $row['description'];
      }
    }else{
      if(empty($row['description'])){
        if(strpos( $row['href'], 'ares.com' ) == false ){
          $row['lead'] = $row['title'];
        }else{
          if (!empty($row['href'])) {
            $meta_content = @get_meta_tags($row['href']);
            if(!empty($meta_content['description'])){
              $row['lead'] = mb_substr($meta_content['description'], 0, 100,'UTF-8').'...';
            }
            // else if(!empty(file_get_contents($row['href']))){
            //   $row['content'] = @file_get_contents($row['href']);
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
        }
      }else{
        $row['lead'] = $row['description'];
      }
    }

    if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['href'])){
      $article_html = $article_html.'<article class="wow fadeInLeft">
        <div class="row">
          <div class="col-md-3">
            <img class="img-responsive lazyload" src="/img/temp.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'">
          </div>
          <div class="col-md-8">
            <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
            <h3 class="main-color"><a href="'.$row['href'].'">'.strip_tags($row['title']).'</a></h3>
            <p>'.strip_tags($row['lead']).'</p>
            <sup class="more text-right">
              <a class="main-color" href="'.$row['href'].'"></a>
            </sup>
          </div>
        </div>
      </article>';
    }
  }
  if($article_html){
    echo $article_html;
  }else{
    echo '<p class="text-center">目前尚無文章...</p>';
  }
}
product_events($product, $event_type);