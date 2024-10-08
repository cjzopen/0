<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = @$_POST['product'];
    $news_id = @$_POST['news_id'];
    $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
    $href   = @trim(htmlspecialchars(stripslashes($_POST['href']),  ENT_QUOTES));
    $date   = @htmlspecialchars(stripslashes($_POST['date']),   ENT_QUOTES);
    $img= @trim(htmlspecialchars(stripslashes($_POST['img']),   ENT_QUOTES));
    $description= @trim(htmlspecialchars(stripslashes($_POST['description']),   ENT_QUOTES));

    $msg =array();
    // $ares = "sqlite:/example/golbals/events.db";
    $ares = "sqlite:/example/global/events.db";


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
    if(!empty($news_id)){
        $product = !empty($product) ? "'$product'" : "NULL";
        $query = "INSERT INTO articles (product, news_id, img, description) VALUES ( $product, '{$news_id}','{$img}', '{$description}')";
    }else{
        $product = !empty($product) ? "'$product'" : "NULL";
        $href = !empty($href) ? "'$href'" : "NULL";
        $title = !empty($title) ? "'$title'" : "NULL";
        $date = !empty($date) ? "'$date'" : "NULL";
        $query = "INSERT INTO articles (product, title, date, href, img, description) VALUES ( $product, $title, $date, $href, '{$img}', '{$description}')";
    }

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