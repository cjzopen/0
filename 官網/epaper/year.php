<?php
$epaper_db = "sqlite:/example/global/epaper.db";
try {
  $db = new PDO($epaper_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'epaper connection failed: ' . $e->getMessage();
  exit;
}
;
if(isset($_GET['year']) && is_numeric($_GET['year'])){
  $year = $_GET['year'];
}else{
  header('Location: https://www.ares.com.tw/epaper/');
  exit();
}

$rs = $db->query("SELECT * FROM newsletter WHERE month LIKE '{$year}%' ORDER BY month DESC")->fetchAll();

if(!$rs){
  header('Location: https://www.ares.com.tw/epaper/');
  exit();
}

//2016以後抓 marketing 網域的大圖，以前的抓資料庫路徑的小圖
if($year>=2016){
 foreach ($rs as $row) {
  if($row['month'] > '2019-04'){
    $row['img'] = 'https://marketing.ares.com.tw/images/'.$row['month'].'/img_index_focus.jpg';
  }else{
    if (strpos($row['link'], '/dm/') == false) {
      $pattern = "/\/newsletter\//";
      $rs_link = preg_replace($pattern, "/dm/newsletter-", $row['link']);
      $row['url'] = parse_url($rs_link);
    }else{
      $row['url'] = parse_url($row['link']);
    }
    $row['img'] = 'https://'.$row['url']['host'].$row['url']['path'].'images/img_index_focus.jpg';
  }
        // $row['meta'] = get_meta_tags($row['link']);
        // $row['lead'] = mb_substr( $row['meta']['description'] ,0,140,"utf-8");
  $row['lead'] = strip_tags($row['content']);
?>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
              <figure>
                <img class="img-responsive" src="<?= $row['img'] ?>">
              </figure>
              <div class="txt-hover">
                <article class="text-left">
                  <span class="entry-summary"><?php echo $row['lead']; ?></span>
                  <div class="text-right orange-color">
                    <a href="<?= $row['link'] ?>" rel="external"><i class="fa fa-angle-double-right" aria-hidden="true"></i> 本期內容</a>
                  </div>
                </article>
              </div>
              <div class="txt">
                <div class="tc">
                  <div class="text-center month"><?= substr($row['month'], 5, 2) ?></div>
                  <div class="year"><?= substr($row['month'], 0, 4) ?></div>
                </div>
                <div class="tc">
                  <h3 class="entry-title"><a href="<?= $row['link'] ?>" rel="external bookmark"><?= $row['title'] ?></a></h3>
                </div>
              </div>
            </div>
          </div>
<?php
  }
}else{
  foreach ($rs as $row) {
        $row['url'] = parse_url($row['link']);
        // $row['img'] = $row['url']['scheme'].'://'.$row['url']['host'].$row['url']['path'].'images/img_index_focus.jpg';
  ?>
          <div class="col-xs-6 col-sm-4 col-md-2">
            <a href="<?= $row['link'] ?>" rel="external">
              <div class="thumbnail2">
                <figure>
                  <img src="<?= $row['image'] ?>">
                </figure>
                <h5><?= $row['month'] ?></h5>
              </div>
            </a>
          </div>
<?php }}?>

