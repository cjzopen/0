<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_HOST'] == 'test.ares.com.tw') {
  $date = @htmlspecialchars(stripslashes($_POST['date']), ENT_QUOTES);
  $uid = @htmlspecialchars(stripslashes($_POST['uid']), ENT_QUOTES);
  $category = @htmlspecialchars(stripslashes($_POST['category']), ENT_QUOTES);
  $name = @trim(htmlspecialchars(stripslashes($_POST['name']), ENT_QUOTES));
  $company = @trim(htmlspecialchars(stripslashes($_POST['company']), ENT_QUOTES));
  $link = @trim(htmlspecialchars(stripslashes($_POST['link']), ENT_QUOTES));
  $content = @$_POST['content'];

  $msg =array();
  try{
    $db = new PDO('sqlite:/example/global/success-case.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $msg['send'] = 'db error';
    $log = $e->getMessage();
  }
  $query = "UPDATE `case` SET `date`='{$date}', link='{$link}', category='{$category}', `name`='{$name}', company='{$company}', content='{$content}' WHERE `uid`='{$uid}'";
  $rs = $db->exec($query);

  $msg['send'] = 'exec';
  header("Content-type: application/json");
  echo json_encode($msg);
}