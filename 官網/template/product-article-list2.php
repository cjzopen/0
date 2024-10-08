<?php


// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }

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

function list_html($date,$title,$description,$img,$href,$ind,$keyword){
  return '<div class="article col-12 col-md-4 mb-4" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" data-keyword="'.$keyword.'">
        <meta itemprop="position" content="'.$ind.'">
        <div class="article-box position-relative h-100 mx-auto">
          <div class="img-box">
            <img loading="lazy" class="img-fluid" src="'.$img.'" alt="'.strip_tags($title).'">
          </div>
          <div class="p-2">
            <time class="color-blue" datetime="'.$date.'">'.$date.'</time>
            <div class="color-blue article-title"><a itemprop="url" class="stretched-link" href="'.$href.'"><span itemprop="name">'.strip_tags($title).'</span></a></div>
            <p class="article-description" itemprop="description">'.strip_tags($description).'</p>
          </div>
        </div>
      </div>';
}

function article_list($product) {
  $i = 0;
  $lists = array();
  $article_html = '';
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $rs = $db->query("SELECT * FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
  foreach ($rs as $row) {
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = strip_tags($row['title']);
    $lists[$i]['href'] = (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
    $lists[$i]['img'] = (strpos($row['img'],',')==false) ? $row['img'] : strtok($row['img'], ',');
    $lists[$i]['description'] = isset($row['description']) ? $row['description'] : strip_tags($row['title']);
    $lists[$i]['keyword'] = isset($row['keyword']) ? $row['keyword'] : '';
    $i++;
  }
  $rs = $db->query("SELECT * FROM info WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
  foreach ($rs as $row) {
    $lists[$i]['date']  = $row['date'];
    $lists[$i]['title'] = strip_tags($row['title']);
    $lists[$i]['href'] = $row['link'];
    $lists[$i]['img'] = '';
    $lists[$i]['description'] = '文章出自 '.$row['alt'];
    $lists[$i]['keyword'] = '';
    $i++;
  }
  // $db = new PDO("sqlite:/example/global/events.db");
  // $rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' AND success_case != true ")->fetchAll();
  // foreach ($rs as $row) {
  //   $lists[$i]['date']  = $row['date'];
  //   $lists[$i]['title'] = strip_tags($row['title']);
  //   if(isset($row['redirect'])){
  //     $lists[$i]['href'] = $row['redirect'];
  //   }elseif(isset($row['news_name'])){
  //     $lists[$i]['href'] = 'https://www.ares.com.tw/events/'.$row['news_name'];
  //   }else{
  //     $lists[$i]['href'] = 'https://www.ares.com.tw/events/'.$row['id'];
  //   }
  //   $lists[$i]['img'] = isset($row['img']) ? $row['img'] : '/img/events.jpg';
  //   $lists[$i]['description'] = isset($row['description']) ? $row['description'] : '';
  //   $lists[$i]['keyword'] = '';
  //   $i++;
  // }
  $rs = null;
  $db = null;

  $lists = array_sort($lists, 'date', SORT_DESC);
  $_position=1;
  foreach ($lists as $row) {
    if(!empty($row['img'])&&$row['img']!=='https://marketing.ares.com.tw/img/logos/ares.png'){
      $row['photo'] = $row['img'];
    }else{
      $row['photo'] = '/img/events.jpg';
    }
    $row['lead'] = $row['description'];
    $article_html = $article_html.list_html($row['date'],$row['title'],$row['lead'],$row['photo'],$row['href'],$_position,$row['keyword']);
    $_position++;
  }
  if($article_html){
    echo $article_html;
  }else{
    echo '<p class="text-center">目前尚無文章…</p>';
  }
}


if(isset($product)){
    article_list($product);
}