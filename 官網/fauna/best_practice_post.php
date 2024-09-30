<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product = @$_POST['product'];
  $news_id = @$_POST['news_id'];

  $product = !empty($product) ? "'$product'" : "NULL";

  $msg =array();
  // $ares = "sqlite:/sites/golbals/events.db";
  $ares = "sqlite:/sites/global/events.db";


    putenv("TZ=ASIA/TAIPEI");
    $submitDate = date("Y-m-d H:i:s", time());
    // $ip = $_SERVER['REMOTE_ADDR'];


    try{
      $db = new PDO($ares);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $msg['db'] = true;
    }catch (PDOException $e) {
      $msg['db'] = false;
      $log = $e->getMessage();
    }

    $query = "INSERT INTO best_practice (product, news_id) VALUES ( $product, $news_id)";

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