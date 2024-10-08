<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = @$_POST['product'];
    $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
    $href   = @trim(htmlspecialchars(stripslashes($_POST['href']),  ENT_QUOTES));
    $date   = @htmlspecialchars(stripslashes($_POST['date']),   ENT_QUOTES);
    $news_name= @trim(htmlspecialchars(stripslashes($_POST['news_name']),   ENT_QUOTES));
    $img= @trim(htmlspecialchars(stripslashes($_POST['img']),   ENT_QUOTES));
    $description= @trim(htmlspecialchars(stripslashes($_POST['description']),   ENT_QUOTES));
    $content= @$_POST['content'];
    $success_case= @$_POST['success_case'];
    $author= @trim(htmlspecialchars(stripslashes($_POST['author']),   ENT_QUOTES));
    $canonical= @trim(htmlspecialchars(stripslashes($_POST['canonical']),   ENT_QUOTES));
    $en= @trim(htmlspecialchars(stripslashes($_POST['en']),   ENT_QUOTES));
    $cn= @trim(htmlspecialchars(stripslashes($_POST['cn']),   ENT_QUOTES));

    $product = !empty($product) ? "'$product'" : "NULL";
    $href = !empty($href) ? "'$href'" : "NULL";
    $news_name = !empty($news_name) ? "'$news_name'" : "NULL";
    $content = !empty($content) ? "'$content'" : "NULL";
    $author = !empty($author) ? "'$author'" : "NULL";
    $canonical = !empty($canonical) ? "'$canonical'" : "NULL";
    $en = !empty($en) ? "'$en'" : "NULL";
    $cn = !empty($cn) ? "'$cn'" : "NULL";

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

        $query = "INSERT INTO news (title, date, redirect, product, news_name, content, img, description, author, success_case, canonical, en, cn) VALUES ( '{$title}', '{$date}', {$href}, {$product}, {$news_name}, {$content}, '{$img}', '{$description}', {$author} , $success_case, {$canonical}, {$en}, {$cn})";

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