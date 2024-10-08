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

function list_html($date,$title,$description,$img,$href,$ind,$keyword,$case){
  if(!isset($keyword)){
    $keyword='';
  }
  if(!$case){
    $case='';
  }else{
    $case=' data-case';
  }
  return '<div class="list-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" data-keyword="'.$keyword.'" '.$case.'>
        <meta itemprop="position" content="'.$ind.'">
        <div class="row position-relative">
          <div class="col-md-3 text-center">
            <figure class="m-0"><img class="img-fluid lazyload" src="/img/temp.jpg" data-src="'.$img.'" alt="'.strip_tags($title).'"></figure>
          </div>
          <div class="col-md-8">
            <time class="color-blue" datetime="'.$date.'">'.$date.'</time>
            <div class="color-blue h4"><a itemprop="url" class="stretched-link" href="'.$href.'"><span itemprop="name">'.strip_tags($title).'</span></a></div>
            <p itemprop="description">'.strip_tags($description).'</p>
            <samll aria-hidden="true" class="more text-right color-blue"></samll>
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
    $article_html = $article_html.list_html($row['date'],$row['title'],$row['lead'],$row['photo'],$row['href'],$_position,$row['keyword'],'');
    $_position++;
  }
  if($article_html){
    echo $article_html;
  }else{
    echo '<p class="text-center">目前尚無文章…</p>';
  }
}
function case_list($product) {
  $article_html = '';
  $db = new PDO("sqlite:/example/global/events.db");
  $rs = $db->query("SELECT id, `date`, title, content, redirect, product, news_name, img, `description`, success_case FROM news WHERE product LIKE '%{$product}%' COLLATE NOCASE ORDER BY `date` DESC")->fetchAll();

  $_position=1;
  foreach ($rs as $row) {
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
          $row['lead'] = trim(mb_strstr($lead, '</p>', true));
          if(mb_strlen($row['lead'], 'utf-8') >= 120){
            $row['lead'] = strip_tags(mb_substr($row['lead'], 0, 120,'UTF-8')).'…';
          }
          // $row['lead'] = mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8').'…';
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

    if(!empty($row['title'])&& !empty($row['lead'])&& !empty($row['href'])){
      // $ifcase='';
      // if($row['success_case']){
      //   $ifcase='1';
      // }else{
      //   $ifcase='0';
      // }
      $article_html = $article_html.list_html($row['date'],$row['title'],$row['lead'],$row['photo'],$row['href'],$_position,'',$row['success_case']);
      $_position++;
    }
  }
  if($article_html){
    echo $article_html;
  }else{
    echo '<p class="text-center">目前尚無文章…</p>';
  }
  $rs=null;
  $db=null;
}

if(isset($product)){
  // $product=strtolower($product);
  if(isset($event_type)&&$event_type=='best_practice'){
    echo '<h2 class="text-center hr">新聞與案例</h2>';
    case_list($product);
  }else{
    echo '<h2 class="text-center hr">相關文章</h2>';
    $event_type = 'articles';
    article_list($product);
  }
}