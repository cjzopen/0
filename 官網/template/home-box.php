<?php
try {
  $db = new PDO('sqlite:/example/global/events.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}
$query=$db->query("SELECT * FROM news ORDER BY date DESC LIMIT 2");
$row = $query->fetch(PDO::FETCH_ASSOC);
if(!empty($row['img'])){
  $row['photo'] = $row['img'];
}else{
  $row['photo'] = '/img/events.jpg';
  // if (!empty($row['content'])) {
  //   $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
  //   if (preg_match($pattern, $row['content'], $matches)) {
  //       $row['photo'] = $matches[1];
  //   }
  // }
}
if (!empty($row['redirect'])) {
  $row['href'] = $row['redirect'];
} elseif (!empty($row['news_name'])) {
  $row['href'] = '/events/'.$row['news_name'];
} else {
  $row['href'] = '/events/'.$row['id'];
}
$news1=array(
  'title'=>$row['title'],
  'photo'=>$row['photo'],
  'href'=>$row['href']
);

//********************************************************************

$row = $query->fetch(PDO::FETCH_ASSOC);
if (!empty($row['redirect'])) {
  $row['href'] = $row['redirect'];
} elseif (!empty($row['news_name'])) {
  $row['href'] = '/events/'.$row['news_name'];
} else {
  $row['href'] = '/events/'.$row['id'];
}
$news2=array(
  'title'=>$row['title'],
  'href'=>$row['href']
);

//********************************************************************

$query = $db->query("SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name, news.img, news.description
    FROM news, best_practice WHERE news.id = best_practice.news_id ORDER BY news.date DESC");
$row = $query->fetch(PDO::FETCH_ASSOC);
if($row['title'] == $news1['title']){
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
if($row['title'] == $news2['title']){
  $row = $query->fetch(PDO::FETCH_ASSOC);
}
if(!empty($row['img'])){
  $row['photo'] = $row['img'];
}else{
  $row['photo'] = '/img/best-practices.jpg';
  // if (!empty($row['content'])) {
  //   $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
  //   if (preg_match($pattern, $row['content'], $matches)) {
  //       $row['photo'] = $matches[1];
  //   }
  // }
}
if (!empty($row['redirect'])) {
  $row['href'] = $row['redirect'];
} elseif (!empty($row['news_name'])) {
  $row['href'] = '/events/'.$row['news_name'];
} else {
  $row['href'] = '/events/'.$row['id'];
}

if(empty($row['description'])){
  if(preg_match('/<ul class=\"[\w\s\-]*summary-effect\">[\s]*(.*?)<\/ul>/s',$row['content'],$matches)){
    $row['lead'] = '<ul itemprop="description" class="angle m-0">'.$matches[1].'</ul>';
  }else{
    $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
    $row['lead'] = '<p itemprop="description" class="m-0">'.trim(mb_strstr($lead, '</p>', true)).'</p>';
  }
}else{
  $row['lead'] = '<p itemprop="description" class="m-0">'.trim($row['description']).'</p>';
}
$success_case=array(
  'title'=>$row['title'],
  'photo'=>$row['photo'],
  'href'=>$row['href'],
  'lead'=>$row['lead']
);

//********************************************************************

try {
  $db = new PDO('sqlite:/example/global/epaper-article.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}

$query = $db->query("SELECT `date`, title, link, img FROM ind WHERE `date` <= date('now','-0 day') ORDER BY `date` DESC");
$row = $query->fetch(PDO::FETCH_ASSOC);
$epaper=array(
  'year'=>substr($row['date'], 0, 4),
  'month'=>substr($row['date'], 5, 2),
  'title'=>strip_tags($row['title']),
  'href'=>(substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'],
  'img'=>$row['img']
);
$te='本月焦點';
$query = $db->query("SELECT title, card_img FROM article WHERE `date`='{$row['date']}' AND type='{$te}' LIMIT 1");
$row = $query->fetch(PDO::FETCH_ASSOC);
if($row){
  $epaper['title']=strip_tags($row['title']);
  if(isset($row['card_img'])){
    $epaper['img']=$row['card_img'];
  }
}

$db=null;
$query=null;
$row=null;