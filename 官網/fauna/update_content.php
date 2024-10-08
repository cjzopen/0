<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = @$_POST['id'];
  $ares = "sqlite:/example/global/events.db";
  try{
    $db = new PDO($ares);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg['db'] = true;
  }catch (PDOException $e) {
    $msg['db'] = false;
    $log = $e->getMessage();
  }
  $query = "SELECT content FROM news WHERE id=$id";
  $rs = $db->query($query)->fetchAll();

  echo $rs[0]['content'];
}
?>