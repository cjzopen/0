<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['qq']) && $_SERVER['HTTP_HOST'] == 'test.ares.com.tw') {
  // qq : contact_form.qq.value,
  //   product : contact_form.product.value,
  //   type : contact_form.type.value,
  //   title : contact_form.title.value,
  //   date : contact_form.date.value,
  //   link : contact_form.link.value,
  //   keyword : contact_form.keyword.value,
  //   content : contact_form.content.value,
  //   img : contact_form.img.value,
  //   description : contact_form.description.value,
  //   author : contact_form.author.value,
  //   author_img : contact_form.author_img.value,
  //   dateModified : contact_form.dateModified.value,
  //   card_img : contact_form.card_img.value,
  $title = @trim(stripslashes($_POST['title']));
  $date = @htmlspecialchars(stripslashes($_POST['date']),   ENT_QUOTES);
  $link = @trim(htmlspecialchars(stripslashes($_POST['link']),  ENT_QUOTES));


  $product = @trim(htmlspecialchars(stripslashes($_POST['product']),  ENT_QUOTES));
  $product = !empty($product) ? "'$product'" : "NULL";

  $type = @trim(htmlspecialchars(stripslashes($_POST['type']),  ENT_QUOTES));
  $type = !empty($type) ? "'$type'" : "NULL";

  $keyword = @trim(htmlspecialchars(stripslashes($_POST['keyword']),  ENT_QUOTES));
  $keyword = !empty($keyword) ? "'$keyword'" : "NULL";

  $img = @trim(htmlspecialchars(stripslashes($_POST['img']),  ENT_QUOTES));
  $img = !empty($img) ? "'$img'" : "NULL";

  $description = @trim(htmlspecialchars(stripslashes($_POST['description']),  ENT_QUOTES));
  $description = !empty($description) ? "'$description'" : "NULL";

  $author = @trim(htmlspecialchars(stripslashes($_POST['author']),  ENT_QUOTES));
  $author = !empty($author) ? "'$author'" : "NULL";

  $author_img = @trim(htmlspecialchars(stripslashes($_POST['author_img']),  ENT_QUOTES));
  $author_img = !empty($author_img) ? "'$author_img'" : "NULL";

  $author_about = @trim(htmlspecialchars(stripslashes($_POST['author_about']),  ENT_QUOTES));
  $author_about = !empty($author_about) ? "'$author_about'" : "NULL";
  $author_url = @trim(htmlspecialchars(stripslashes($_POST['author_url']),  ENT_QUOTES));
  $author_url = !empty($author_url) ? "'$author_url'" : "NULL";

  $dateModified = @trim(htmlspecialchars(stripslashes($_POST['dateModified']),  ENT_QUOTES));
  $dateModified = !empty($dateModified) ? "'$dateModified'" : "NULL";

  $card_img = @trim(htmlspecialchars(stripslashes($_POST['card_img']),  ENT_QUOTES));
  $card_img = !empty($card_img) ? "'$card_img'" : "NULL";

  $content= @$_POST['content'];
  $content = !empty($content) ? "'$content'" : "NULL";

  $canonical = @trim(htmlspecialchars(stripslashes($_POST['canonical']),  ENT_QUOTES));
  $canonical = !empty($canonical) ? "'$canonical'" : "NULL";

  // $point= @$_POST['point'];
  // $point = !empty($point) ? $point : 5;

  // $number_of_point= @$_POST['number_of_point'];
  // $number_of_point = !empty($number_of_point) ? $number_of_point : 1;

  $msg =array();
  // $ares = "sqlite:/sites/golbals/events.db";
  $ares = "sqlite:/sites/global/epaper-article.db";
  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  try{
    $db = new PDO($ares);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg['db'] = true;
  }catch (PDOException $e) {
    $msg['db'] = false;
    $log = $e->getMessage();
  }

  if($_POST['qq'] == 'article'){
    $link = @strtolower($link);
    $query = "INSERT INTO article (title, `date`, link, product, type, keyword, img, description, author, author_img, author_about, author_url, dateModified, card_img, content, canonical) VALUES ( '{$title}', '{$date}', '{$link}', {$product}, {$type}, {$keyword}, {$img}, {$description}, {$author}, {$author_img}, {$author_about}, {$author_url}, {$dateModified}, {$card_img}, {$content}, {$canonical})";

  }elseif($_POST['qq'] == 'ind'){
    $link = @strtolower($link);
    $query = "INSERT INTO ind (title, `date`, link, img, description) VALUES ( '{$title}', '{$date}', '{$link}', {$img}, {$description})";

  }elseif($_POST['qq'] == 'e'){
    $query = "INSERT INTO e (title, `date`, link, img, description, author, author_img) VALUES ( '{$title}', '{$date}', '{$link}', {$card_img}, {$description}, {$author}, {$author_img})";

  }elseif($_POST['qq'] == 'info'){
    $query = "INSERT INTO info (title, `date`, link, img, alt, product) VALUES ( '{$title}', '{$date}', '{$link}', {$author_img}, {$author}, {$product})";

  }

    // $ip = $_SERVER['REMOTE_ADDR'];
  $rs = $db->exec($query);

  $msg['send'] = true;
  $msg['time'] = $submitDate;
    // }

  // echo $msg;
  header("Content-type: application/json");
  echo json_encode($msg);
  exit();
}

// if no POST
header('Location: index.php');