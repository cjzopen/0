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
  $id = $_POST['id'];


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

  $dateModified = @trim(htmlspecialchars(stripslashes($_POST['dateModified']),  ENT_QUOTES));
  $dateModified = !empty($dateModified) ? "'$dateModified'" : "NULL";

  $card_img = @trim(htmlspecialchars(stripslashes($_POST['card_img']),  ENT_QUOTES));
  $card_img = !empty($card_img) ? "'$card_img'" : "NULL";

  $canonical = @trim(htmlspecialchars(stripslashes($_POST['canonical']),  ENT_QUOTES));
  $canonical = !empty($canonical) ? "'$canonical'" : "NULL";

  $content= @$_POST['content'];
  $content = !empty($content) ? "'$content'" : "NULL";

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
    $query = "UPDATE article SET title ='{$title}', `date` = '{$date}', link = '{$link}', product = {$product}, type = {$type}, keyword = {$keyword}, img = {$img}, description = {$description}, author = {$author}, author_img = {$author_img}, dateModified = {$dateModified}, card_img = {$card_img}, canonical = {$canonical}, content = {$content} WHERE id = $id";

  }elseif($_POST['qq'] == 'ind'){
    $link = @strtolower($link);
    $query = "UPDATE ind SET title='{$title}', `date`='{$date}', link='{$link}', img={$img}, description={$description} WHERE id = $id";

  }elseif($_POST['qq'] == 'e'){
    $query = "UPDATE e SET title='{$title}', `date`='{$date}', link='{$link}', img={$card_img}, description={$description}, author={$author}, author_img={$author_img} WHERE id = $id";

  }elseif($_POST['qq'] == 'info'){
    $query = "UPDATE info SET title='{$title}', `date`='{$date}', product={$product}, link='{$link}', img={$author_img}, alt={$author} WHERE id = $id";

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