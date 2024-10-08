<?php
$select_type = htmlspecialchars(stripslashes($_POST['select_type']),  ENT_QUOTES);
$select_year = htmlspecialchars(stripslashes($_POST['select_year']),  ENT_QUOTES);


$global_db = "sqlite:/example/global/events.db";
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}
if($select_year=='all'){
  $y = '';
}else{
  $y = "AND `date` LIKE '{$select_year}%'";
}
if($select_type=='erp'){
  $rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y AND (product LIKE '%ERP%' OR product LIKE '%ORACLE%' OR product LIKE '%PLM%') ORDER BY `date` DESC")->fetchAll();
}elseif($select_type=='mes'){
  $rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y AND product LIKE '%ciMes%' ORDER BY `date` DESC")->fetchAll();
}elseif($select_type=='hr'){
  $rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y AND product LIKE '%HCP%' ORDER BY `date` DESC")->fetchAll();
}elseif($select_type=='is'){
  $rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y AND product IN ('ARES-PP', 'PKI', 'fortify', 'Comodo') ORDER BY `date` DESC")->fetchAll();
}elseif($select_type=='other'){
  $rs = $db->query("SELECT id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y AND product NOT IN ('ARES-PP', 'PKI', 'fortify', 'HCP', 'ciMes', 'ArgoERP', 'ORACLE', 'PLM', 'Comodo') ORDER BY `date` DESC")->fetchAll();
}else{
  $rs = $db->query("SELECT  id, `date`, title, content, redirect, news_name, img, `description`, product FROM news WHERE success_case = true $y ORDER BY `date` DESC")->fetchAll();
}
$_html ='';
foreach ($rs as $row) {
  if(isset($row['product']) && preg_match('/(AFEIS|Analyzer|SWIFT|eAresBank|nuntio|treasury)/i', $row['product'])){

  }else{
    $row['photo'] = '/img/events.jpg';
    if(!empty($row['img'])){
      // if (substr($row['img'], 0, 23) === 'https://www.ares.com.tw' || substr($row['img'], 0, 22) === 'http://www.ares.com.tw') {
        $row['photo'] = $row['img'];
      // } else {
        // $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
      // }
    }
    if (!empty($row['redirect'])) {
      $row['href'] = $row['redirect'];
    } elseif (!empty($row['news_name'])) {
      $row['href'] = '/events/'.$row['news_name'];
    } else {
      $row['href'] = '/events/'.$row['id'];
    }
    if (!empty($row['content']) && empty($row['img'])){
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
      $row['lead']='';
      if(isset($row['content'])){
        $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
        $row['lead'] = mb_substr(trim(mb_strstr($lead, '</p>', true)), 0, 100,'UTF-8').'…';
      }
    }else{
      $row['lead'] = $row['description'];
    }
    $product_class='';
    if(isset($row['product'])){
      $product_class=$row['product'];
    }
    $_html = $_html.'<div class="list-item '.$product_class.'">
        <div class="row">
          <div class="col-md-3 text-center">
            <img class="img-fluid" src="'.$row['photo'].'" alt="'.$row['title'].'">
          </div>
          <div class="col-md-8">
            <time class="color-blue" datetime="'.$row['date'].'">'.$row['date'].'</time>
            <div class="color-blue h4"><a class="stretched-link" href="'.$row['href'].'">'.strip_tags($row['title']).'</a></div>
            <p>'.strip_tags($row['lead']).'</p>
            <samll aria-hidden="true" class="more text-right color-blue"></samll>
          </div>
        </div>
      </div>';
  }
}

echo $_html;