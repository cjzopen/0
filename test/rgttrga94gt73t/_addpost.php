<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_HOST'] == 'test.ares.com.tw') {
  $date = @htmlspecialchars(stripslashes($_POST['date']), ENT_QUOTES);
  $category = @htmlspecialchars(stripslashes($_POST['category']), ENT_QUOTES);
  $name = @trim(htmlspecialchars(stripslashes($_POST['name']), ENT_QUOTES));
  $company = @trim(htmlspecialchars(stripslashes($_POST['company']), ENT_QUOTES));
  $link = @trim(htmlspecialchars(stripslashes($_POST['link']), ENT_QUOTES));
  $content = @$_POST['content'];

  $msg =array();
  try{
    $db = new PDO('sqlite:/sites/global/success-case.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['send'] = $e->getMessage();
    $log = $e->getMessage();
  }
  $query = "INSERT INTO `case` (`date`, link, category, `name`, company, content) VALUES ( '{$date}', '{$link}', '{$category}', '{$name}', '{$company}', '{$content}')";
  $rs = $db->exec($query);

  $msg['send'] = 'exec';
  header("Content-type: application/json");
  echo json_encode($msg,true);
}