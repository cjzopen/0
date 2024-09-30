<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sn  = @htmlspecialchars(stripslashes($_POST['sn']),  ENT_QUOTES);
  $date  = @htmlspecialchars(stripslashes($_POST['date']),  ENT_QUOTES);
  $time  = @htmlspecialchars(stripslashes($_POST['time']),  ENT_QUOTES);
  $name  = @htmlspecialchars(stripslashes($_POST['name']),  ENT_QUOTES);
  $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
  $phone  = @htmlspecialchars(stripslashes($_POST['phone']),  ENT_QUOTES);
  $headline  = @htmlspecialchars(stripslashes($_POST['headline']),  ENT_QUOTES);
  $article  = @htmlspecialchars(stripslashes($_POST['article']),  ENT_QUOTES);
  $occur  = @htmlspecialchars(stripslashes($_POST['occur']),  ENT_QUOTES);
  $content  = @htmlspecialchars(stripslashes($_POST['content']),  ENT_QUOTES);

  $msg =array();
  $ares = "sqlite:/sites/global/investor.db";
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
  $query = "INSERT INTO events (sn, `date`, `time`, name, title, phone, headline, article, occur, content) VALUES ( '{$sn}', '{$date}', '{$time}', '{$name}', '{$title}', '{$phone}', '{$headline}', '{$article}', '{$occur}', '{$content}')";
  $rs = $db->exec($query);
  $msg['send'] = true;
  $msg['time'] = $submitDate;

  header("Content-type: application/json");
  echo json_encode($msg);
  exit();
}
// if no POST
header('Location: index.php');