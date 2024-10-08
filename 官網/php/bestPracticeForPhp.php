<?php
$global_db = "sqlite:/example/global/events.db";
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
// $product = $_GET['product'];
$rs = $db->query("SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name, news.img, news.description
  FROM news, best_practice WHERE news.id = best_practice.news_id AND best_practice.product LIKE '%{$product}%' ORDER BY news.date DESC")->fetchAll();
$db=null;
$article_html='';
  foreach ($rs as $row) {
    $row['blank'] = '';
    if(!empty($row['img'])){
      $row['photo'] = $row['img'];
    }else{
      $row['photo'] = '/img/events.jpg';
    }
    if (!empty($row['redirect'])) {
      $row['href'] = $row['redirect'];
      $row['blank'] = ' rel="external"';
    } elseif (!empty($row['news_name'])) {
      $row['href'] = '/events/'.$row['news_name'];
    } else {
      $row['href'] = '/events/'.$row['id'];
    }
    if (!empty($row['content'])) {
      if(empty($row['img'])){
        $pattern = '/<a class="frame".*>\s.*?<img.*?src=\"(.*?)"/';
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
        $row['lead'] = strip_tags(mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8')).'...';
        if(strlen($row['lead'])<30){
          $row['lead'] = $row['title'];
        }
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
    if (!empty($row['redirect']) && empty($row['img'])){
      // $meta_content = get_meta_tags($row['href']);
      $row['html'] = @file_get_contents($row['href']);
      $row['url'] = parse_url($row['href']);

      $pattern = '/data-src="(.*)"/';
      $row['imgx'] = 'https://'.$row['url']['host'].$row['url']['path'];
      if (preg_match($pattern, $row['html'], $matches)) {
        if (substr($matches[1], 0, 4) === 'http') {
          $row['photo'] = $matches[1];
        } else {
          $row['photo'] = $row['imgx'].$matches[1];
        }
      }
    }
    $article_html =$article_html.'<article class="wow fadeInLeft">
        <div class="row">
          <div class="col-md-3">
            <img class="img-responsive lazyload" src="/img/temp.jpg" data-src="'.$row['photo'].'" alt="'.$row['title'].'">
          </div>
          <div class="col-md-8">
            <time class="main-color" datetime="'.$row['date'].'">'.$row['date'].'</time>
            <h3 class="main-color"><a href="'.$row['href'].'"'.$row['blank'].'>'.strip_tags($row['title']).'</a></h3>
            <p>'.strip_tags($row['lead']).'</p>
            <sup class="more text-right">
              <a class="main-color" href="'.$row['href'].'"'.$row['blank'].'></a>
            </sup>
          </div>
        </div>
      </article>';
  }
if($article_html){
  echo $article_html;
}else{
  echo '<p class="text-center">目前尚無文章...</p>';
}