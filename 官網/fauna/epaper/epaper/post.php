<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
  $link  = @trim(htmlspecialchars(stripslashes($_POST['href']),  ENT_QUOTES));
  $month  = @htmlspecialchars(stripslashes($_POST['date']),  ENT_QUOTES);
  $content= @htmlspecialchars(stripslashes($_POST['summary']),  ENT_QUOTES);
  $image  = @trim(htmlspecialchars(stripslashes($_POST['img']),  ENT_QUOTES));

  // $img = !empty($img) ? "'$img'" : "NULL";
  // $author = !empty($author) ? "'$author'" : "NULL";
  // $summary = !empty($summary) ? "'$summary'" : "NULL";

    $msg =array();
    $ares = "sqlite:/sites/global/epaper.db";


    putenv("TZ=ASIA/TAIPEI");
    $submitDate = date("Y-m-d H:i:s", time());
    // $ip = $_SERVER['REMOTE_ADDR'];


        try{
            $db1 = new PDO($ares);
            $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $msg['db'] = true;
        }catch (PDOException $e) {
            $msg['db'] = false;
            $log = $e->getMessage();
        }

        $query = "INSERT INTO newsletter (title, month, link, content, image) VALUES ( '{$title}', '{$month}', '{$link}', '{$content}', '{$image}')";

        $rs = $db1->exec($query);

        $db1=null;

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


