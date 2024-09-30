<?php
if(isset($_GET['year'])){
  $year = $_GET['year'];
}


if(!isset($year)){
  echo 'time empty';
  exit;
}

if(!isset($db)){
  try {
    $db = new PDO('sqlite:/sites/global/epaper-article.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'epaper connection failed: ' . $e->getMessage();
    exit;
  }
}
$rs = $db->query("SELECT `date`, title, link, img FROM ind WHERE `date` <= date('now','-0 day') AND `date` LIKE '{$year}%' ORDER BY `date` DESC")->fetchAll();

$te='本月焦點';
$list_html='';

foreach ($rs as $row) {
  $list_month= substr($row['date'], 5, 2);
  $list_link= (substr($row['link'], 0, 4)=='http') ? $row['link'] : 'https://marketing.ares.com.tw/newsletter/'.$row['link'];
  $list_title = strip_tags($row['title']);
  $list_img = $row['img'];
  $focusquery = $db->query("SELECT title, card_img FROM article WHERE `date`='{$row['date']}' AND type='{$te}' LIMIT 1");
  $focus = $focusquery->fetch(PDO::FETCH_ASSOC);
  if($focus){
    $list_title=strip_tags($focus['title']);
    if(isset($focus['card_img'])){
      $list_img=$focus['card_img'];
    }
  }
  if($year>=2016){
    $list_html = $list_html.'<li class="col-12 col-md-4">
          <div class="thumbnail mb-3 mx-auto position-relative rounded overflow-hidden">
            <figure class="embed-responsive embed-responsive-1by1 overflow-hidden m-0 d-none d-md-block">
              <img src="'.$list_img.'" alt="'.$list_title.'" class="img-fluid embed-responsive-item h-auto">
            </figure>
            <div class="bg-black epaper-text d-flex w-100">
              <div class="p-2">
                <div class="h3 color-white">'.$list_month.'</div>
                <div class="h5 color-orange">'.$year.'</div>
              </div>
              <div class="p-2 epaper-title text-left">
                <a class="color-white stretched-link" href="'.$list_link.'">'.$list_title.'</a>
              </div>
            </div>
          </div>
        </li>';
  }else{
    $list_html = $list_html.'<li class="col-12 col-md-6">
          <div class="mb-3 position-relative rounded border overflow-hidden d-flex align-items-center">
            <figure class="col-12 col-md-4 py-3 overflow-hidden m-0 d-none d-md-block">
              <img src="'.$list_img.'" alt="'.$list_title.'" class="img-fluid">
            </figure>
            <div class="col-12 col-md-8 d-flex w-100 position-static">
              <div class="p-2">
                <div class="h3">'.$list_month.'</div>
                <div class="h5 color-orange">'.$year.'</div>
              </div>
              <div class="p-2 epaper-title text-left">
                <a class="stretched-link" href="'.$list_link.'">'.$list_title.'</a>
              </div>
            </div>
          </div>
        </li>';
  }
}




echo $list_html;

?>



